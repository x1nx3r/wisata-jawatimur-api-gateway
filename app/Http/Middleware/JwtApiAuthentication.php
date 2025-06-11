<?php
// app/Http/Middleware/JwtApiAuthentication.php

namespace App\Http\Middleware;

use App\Services\JwtApiKeyService;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class JwtApiAuthentication
{
    public function __construct(private JwtApiKeyService $jwtService) {}

    public function handle(Request $request, Closure $next, ...$requiredScopes)
    {
        $token = $this->extractToken($request);

        if (!$token) {
            return response()->json(
                [
                    "error" => "Unauthorized",
                    "message" =>
                        "JWT token required. Please provide a valid Bearer token in the Authorization header.",
                ],
                401
            );
        }

        $tokenData = $this->jwtService->validateToken($token);

        if (!$tokenData) {
            return response()->json(
                [
                    "error" => "Unauthorized",
                    "message" => "Invalid or expired JWT token.",
                ],
                401
            );
        }

        // Check scopes if required
        if (!empty($requiredScopes)) {
            $userScopes = $tokenData["scopes"] ?? [];
            $hasRequiredScope = false;

            foreach ($requiredScopes as $requiredScope) {
                if (
                    in_array($requiredScope, $userScopes) ||
                    in_array("admin", $userScopes)
                ) {
                    $hasRequiredScope = true;
                    break;
                }
            }

            if (!$hasRequiredScope) {
                return response()->json(
                    [
                        "error" => "Forbidden",
                        "message" =>
                            "Insufficient permissions. Required scopes: " .
                            implode(", ", $requiredScopes),
                        "your_scopes" => $userScopes,
                    ],
                    403
                );
            }
        }

        // Set the authenticated user
        $user = User::find($tokenData["user_id"]);
        if (!$user) {
            return response()->json(
                [
                    "error" => "Unauthorized",
                    "message" => "User not found.",
                ],
                401
            );
        }

        $request->setUserResolver(function () use ($user) {
            return $user;
        });

        // Add token info to request
        $request->merge([
            "api_token_data" => $tokenData,
            "api_scopes" => $tokenData["scopes"],
        ]);

        return $next($request);
    }

    private function extractToken(Request $request): ?string
    {
        // Check Authorization header
        $header = $request->header("Authorization");
        if ($header && str_starts_with($header, "Bearer ")) {
            return substr($header, 7);
        }

        // Check query parameter as fallback
        return $request->query("token");
    }
}
