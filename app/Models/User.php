<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ["name", "email", "password"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            "email_verified_at" => "datetime",
            "password" => "hashed",
        ];
    }

    /**
     * Get the API keys for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apiKeys(): HasMany
    {
        return $this->hasMany(ApiKey::class);
    }

    /**
     * Get only active API keys for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activeApiKeys(): HasMany
    {
        return $this->hasMany(ApiKey::class)->active();
    }

    /**
     * Create a new JWT API key for the user.
     *
     * @param string|null $name
     * @param string|null $description
     * @param array $scopes
     * @param \DateTime|null $expiresAt
     * @return array
     */
    public function createJwtApiKey(
        ?string $name = null,
        ?string $description = null,
        array $scopes = ["read"],
        ?\DateTime $expiresAt = null
    ): array {
        $jwtService = app(\App\Services\JwtApiKeyService::class);

        return $jwtService->createToken($this, [
            "name" => $name,
            "description" => $description,
            "scopes" => $scopes,
            "expires_at" => $expiresAt,
        ]);
    }

    /**
     * Legacy method for backward compatibility - creates JWT API key.
     *
     * @deprecated Use createJwtApiKey() instead
     * @param string|null $name
     * @param string|null $description
     * @param \DateTime|null $expiresAt
     * @return \App\Models\ApiKey
     */
    public function createApiKey(
        ?string $name = null,
        ?string $description = null,
        ?\DateTime $expiresAt = null
    ): ApiKey {
        // For backward compatibility, create JWT API key but return only the ApiKey model
        $result = $this->createJwtApiKey(
            $name,
            $description,
            ["read"],
            $expiresAt
        );
        return $result["api_key"];
    }

    /**
     * Revoke all API keys for the user.
     *
     * @return int Number of keys revoked
     */
    public function revokeAllApiKeys(): int
    {
        $jwtService = app(\App\Services\JwtApiKeyService::class);
        return $jwtService->revokeAllUserTokens($this->id);
    }

    /**
     * Get API key usage statistics for the user.
     *
     * @return array
     */
    public function getApiKeyStats(): array
    {
        $apiKeys = $this->apiKeys();

        return [
            "total_keys" => $apiKeys->count(),
            "active_keys" => $apiKeys->active()->count(),
            "expired_keys" => $apiKeys->expired()->count(),
            "revoked_keys" => $apiKeys->revoked()->count(),
            "recently_used" => $apiKeys
                ->where("last_used_at", ">", now()->subDays(7))
                ->count(),
            "never_used" => $apiKeys->whereNull("last_used_at")->count(),
        ];
    }

    /**
     * Check if user has reached the API key limit.
     *
     * @return bool
     */
    public function hasReachedApiKeyLimit(): bool
    {
        $limit = config("api.max_keys_per_user", 10);
        return $this->activeApiKeys()->count() >= $limit;
    }

    /**
     * Get the user's API keys with a specific scope.
     *
     * @param string $scope
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apiKeysWithScope(string $scope): HasMany
    {
        return $this->hasMany(ApiKey::class)->withScope($scope);
    }
}
