<?php
// app/Services/JwtApiKeyService.php

namespace App\Services;

use App\Models\ApiKey;
use App\Models\User;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Token\Plain;
use Lcobucci\JWT\Validation\Constraint\IssuedBy;
use Lcobucci\JWT\Validation\Constraint\PermittedFor;
use Lcobucci\JWT\Validation\Constraint\SignedWith;
use Lcobucci\JWT\Validation\Constraint\StrictValidAt;
use Psr\Clock\ClockInterface;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JwtApiKeyService
{
    private Configuration $config;
    private ClockInterface $clock;

    public function __construct()
    {
        $this->config = Configuration::forSymmetricSigner(
            new Sha256(),
            InMemory::plainText(config("app.jwt_secret", config("app.key")))
        );

        // Use Laravel's now() wrapped in a simple clock implementation
        $this->clock = new class implements ClockInterface {
            public function now(): \DateTimeImmutable
            {
                return new \DateTimeImmutable();
            }
        };

        // Add validation constraints for version 5.x
        $this->config->setValidationConstraints(
            new IssuedBy(config("app.url")),
            new PermittedFor(config("app.url")),
            new SignedWith(
                $this->config->signer(),
                $this->config->signingKey()
            ),
            new StrictValidAt($this->clock)
        );
    }

    public function createToken(User $user, array $data = []): array
    {
        $jti = Str::uuid()->toString();
        $now = $this->clock->now();
        $expiresAt = isset($data["expires_at"])
            ? new \DateTimeImmutable($data["expires_at"])
            : $now->modify("+1 year");

        $token = $this->config
            ->builder()
            ->issuedBy(config("app.url"))
            ->permittedFor(config("app.url"))
            ->identifiedBy($jti)
            ->issuedAt($now)
            ->canOnlyBeUsedAfter($now)
            ->expiresAt($expiresAt)
            ->relatedTo((string) $user->id)
            ->withClaim("type", "api_key")
            ->withClaim("scopes", $data["scopes"] ?? ["read"])
            ->withClaim("key_name", $data["name"] ?? null)
            ->withClaim("user_id", $user->id)
            ->getToken($this->config->signer(), $this->config->signingKey());

        // Store the API key record
        $apiKey = ApiKey::create([
            "user_id" => $user->id,
            "name" => $data["name"] ?? null,
            "description" => $data["description"] ?? null,
            "jti" => $jti,
            "scopes" => $data["scopes"] ?? ["read"],
            "expires_at" => Carbon::parse($expiresAt->format("Y-m-d H:i:s")),
            "is_active" => true,
        ]);

        return [
            "token" => $token->toString(),
            "api_key" => $apiKey,
            "expires_at" => $expiresAt->getTimestamp(),
        ];
    }

    public function validateToken(string $tokenString): ?array
    {
        try {
            $token = $this->config->parser()->parse($tokenString);

            if (!$token instanceof Plain) {
                return null;
            }

            // Validate the token using configured constraints
            $constraints = $this->config->validationConstraints();

            if (
                !$this->config->validator()->validate($token, ...$constraints)
            ) {
                return null;
            }

            $claims = $token->claims();

            // Check token type
            if ($claims->get("type") !== "api_key") {
                return null;
            }

            $jti = $claims->get("jti");

            // Check if the API key is still active in database
            $apiKey = ApiKey::where("jti", $jti)
                ->where("is_active", true)
                ->whereNull("revoked_at")
                ->first();

            if (!$apiKey) {
                return null;
            }

            // Update last used information
            $apiKey->update([
                "last_used_at" => now(),
                "last_used_ip" => request()->ip(),
            ]);

            return [
                "user_id" => $claims->get("user_id"),
                "jti" => $jti,
                "scopes" => $claims->get("scopes", []),
                "api_key" => $apiKey,
                "token" => $token,
                "claims" => $claims->all(),
            ];
        } catch (\Lcobucci\JWT\Validation\InvalidTokenException $e) {
            \Log::warning("Invalid JWT token provided", [
                "error" => $e->getMessage(),
                "token_start" => substr($tokenString, 0, 20) . "...",
            ]);
            return null;
        } catch (\Exception $e) {
            \Log::error("JWT validation failed", [
                "error" => $e->getMessage(),
                "token_start" => substr($tokenString, 0, 20) . "...",
                "trace" => $e->getTraceAsString(),
            ]);
            return null;
        }
    }

    public function revokeToken(string $jti): bool
    {
        return ApiKey::where("jti", $jti)->update([
            "is_active" => false,
            "revoked_at" => now(),
        ]) > 0;
    }

    public function revokeAllUserTokens(int $userId): int
    {
        return ApiKey::where("user_id", $userId)->update([
            "is_active" => false,
            "revoked_at" => now(),
        ]);
    }

    /**
     * Get token information without validation (for debugging)
     */
    public function getTokenInfo(string $tokenString): ?array
    {
        try {
            $token = $this->config->parser()->parse($tokenString);

            if (!$token instanceof Plain) {
                return null;
            }

            return [
                "headers" => $token->headers()->all(),
                "claims" => $token->claims()->all(),
            ];
        } catch (\Exception $e) {
            return null;
        }
    }
}
