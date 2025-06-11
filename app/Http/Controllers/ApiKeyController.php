<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use App\Services\JwtApiKeyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ApiKeyController extends Controller
{
    public function __construct(private JwtApiKeyService $jwtService) {}

    /**
     * Display a listing of the user's API keys.
     */
    public function index()
    {
        $apiKeys = Auth::user()
            ->apiKeys()
            ->latest()
            ->get()
            ->map(function ($key) {
                return [
                    "id" => $key->id,
                    "name" => $key->name ?: "Unnamed Key",
                    "description" => $key->description,
                    "scopes" => $key->scopes,
                    "masked_jti" => $key->masked_jti,
                    "is_active" => $key->is_active,
                    "expires_at" => $key->expires_at,
                    "last_used_at" => $key->last_used_at,
                    "last_used_ip" => $key->last_used_ip,
                    "created_at" => $key->created_at,
                    "is_expired" => $key->isExpired(),
                    "status" => $this->getKeyStatus($key),
                ];
            });

        if (request()->expectsJson()) {
            return response()->json([
                "success" => true,
                "data" => $apiKeys,
            ]);
        }

        // For web requests, redirect to dashboard where keys are displayed
        return redirect()->route("dashboard");
    }

    /**
     * Show the form for creating a new API key.
     */
    public function create()
    {
        // We're using a modal for creation, so redirect to dashboard
        return redirect()->route("dashboard");
    }

    /**
     * Store a newly created JWT API key in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                "name" =>
                    "nullable|string|max:255|regex:/^[a-zA-Z0-9\s\-_\.]+$/",
                "description" => "nullable|string|max:1000",
                "expires_at" =>
                    "nullable|date|after:now|before:" . now()->addYears(5),
                "scopes" => "sometimes|array|min:1",
                "scopes.*" => "string|in:read,write,delete,admin",
            ],
            [
                "name.regex" =>
                    "API key name can only contain letters, numbers, spaces, hyphens, underscores, and dots.",
                "expires_at.after" => "Expiration date must be in the future.",
                "expires_at.before" =>
                    "Expiration date cannot be more than 5 years from now.",
                "scopes.min" => "At least one scope is required.",
                "scopes.*.in" =>
                    "Invalid scope provided. Valid scopes are: read, write, delete, admin.",
            ]
        );

        // Rate limiting checks
        $rateLimitCheck = $this->checkRateLimits();
        if ($rateLimitCheck !== true) {
            return $rateLimitCheck;
        }

        DB::beginTransaction();

        try {
            $result = $this->jwtService->createToken(Auth::user(), [
                "name" => $validated["name"],
                "description" => $validated["description"],
                "scopes" => $validated["scopes"] ?? ["read"],
                "expires_at" => $validated["expires_at"] ?? null,
            ]);

            // Log the creation for security audit
            Log::info("JWT API key created", [
                "user_id" => Auth::id(),
                "user_email" => Auth::user()->email,
                "key_id" => $result["api_key"]->id,
                "key_name" => $result["api_key"]->name,
                "jti" => $result["api_key"]->jti,
                "scopes" => $result["api_key"]->scopes,
                "ip_address" => $request->ip(),
                "user_agent" => $request->userAgent(),
                "expires_at" => $result["expires_at"]
                    ? date("Y-m-d H:i:s", $result["expires_at"])
                    : null,
            ]);

            DB::commit();

            // Return JSON response for AJAX requests
            if ($request->expectsJson()) {
                return response()->json(
                    [
                        "success" => true,
                        "data" => [
                            "token" => $result["token"],
                            "api_key" => [
                                "id" => $result["api_key"]->id,
                                "name" => $result["api_key"]->name,
                                "description" =>
                                    $result["api_key"]->description,
                                "scopes" => $result["api_key"]->scopes,
                                "expires_at" => $result["api_key"]->expires_at,
                                "created_at" => $result["api_key"]->created_at,
                            ],
                            "expires_at" => $result["expires_at"],
                        ],
                        "message" =>
                            'JWT API key created successfully. Make sure to copy your token now as it won\'t be shown again!',
                    ],
                    201
                );
            }

            // For web requests
            return redirect()
                ->route("dashboard")
                ->with("success", "JWT API key created successfully!")
                ->with("api_token", $result["token"])
                ->with("show_token_modal", true);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("JWT API key creation failed", [
                "user_id" => Auth::id(),
                "user_email" => Auth::user()->email,
                "error" => $e->getMessage(),
                "trace" => $e->getTraceAsString(),
                "ip_address" => $request->ip(),
                "user_agent" => $request->userAgent(),
            ]);

            if ($request->expectsJson()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" =>
                            "Failed to create JWT API key. Please try again.",
                        "error" => config("app.debug")
                            ? $e->getMessage()
                            : "Internal server error",
                    ],
                    500
                );
            }

            return back()
                ->withErrors([
                    "error" =>
                        "Failed to create JWT API key. Please try again.",
                ])
                ->withInput();
        }
    }

    /**
     * Display the specified API key.
     */
    public function show(ApiKey $apiKey)
    {
        $this->authorizeApiKey($apiKey);

        $keyData = [
            "id" => $apiKey->id,
            "name" => $apiKey->name,
            "description" => $apiKey->description,
            "scopes" => $apiKey->scopes,
            "masked_jti" => $apiKey->masked_jti,
            "is_active" => $apiKey->is_active,
            "expires_at" => $apiKey->expires_at,
            "last_used_at" => $apiKey->last_used_at,
            "last_used_ip" => $apiKey->last_used_ip,
            "created_at" => $apiKey->created_at,
            "updated_at" => $apiKey->updated_at,
            "is_expired" => $apiKey->isExpired(),
            "status" => $this->getKeyStatus($apiKey),
            "usage_stats" => $this->getUsageStats($apiKey),
        ];

        if (request()->expectsJson()) {
            return response()->json([
                "success" => true,
                "data" => $keyData,
            ]);
        }

        return view("api-keys.show", compact("keyData"));
    }

    /**
     * Update the specified API key in storage.
     */
    public function update(Request $request, ApiKey $apiKey)
    {
        $this->authorizeApiKey($apiKey);

        $validated = $request->validate(
            [
                "name" =>
                    "nullable|string|max:255|regex:/^[a-zA-Z0-9\s\-_\.]+$/",
                "description" => "nullable|string|max:1000",
                "scopes" => "sometimes|array|min:1",
                "scopes.*" => "string|in:read,write,delete,admin",
                "is_active" => "sometimes|boolean",
            ],
            [
                "name.regex" =>
                    "API key name can only contain letters, numbers, spaces, hyphens, underscores, and dots.",
                "scopes.min" => "At least one scope is required.",
                "scopes.*.in" =>
                    "Invalid scope provided. Valid scopes are: read, write, delete, admin.",
            ]
        );

        DB::beginTransaction();

        try {
            $oldData = $apiKey->toArray();

            $updateData = [];
            if (isset($validated["name"])) {
                $updateData["name"] = $validated["name"];
            }
            if (isset($validated["description"])) {
                $updateData["description"] = $validated["description"];
            }
            if (isset($validated["scopes"])) {
                $updateData["scopes"] = $validated["scopes"];
            }
            if ($request->has("is_active")) {
                $updateData["is_active"] = $validated["is_active"] ?? false;
            }

            $apiKey->update($updateData);

            // Log the update for security audit
            Log::info("JWT API key updated", [
                "user_id" => Auth::id(),
                "user_email" => Auth::user()->email,
                "key_id" => $apiKey->id,
                "key_name" => $apiKey->name,
                "jti" => $apiKey->jti,
                "old_data" => $oldData,
                "new_data" => $updateData,
                "ip_address" => $request->ip(),
                "user_agent" => $request->userAgent(),
            ]);

            DB::commit();

            if ($request->expectsJson()) {
                return response()->json([
                    "success" => true,
                    "data" => $apiKey->fresh(),
                    "message" =>
                        "API key updated successfully. Note: Existing tokens will retain their original scopes until they expire.",
                ]);
            }

            return redirect()
                ->route("dashboard")
                ->with(
                    "success",
                    "API key updated successfully. Note: Existing tokens will retain their original scopes until they expire."
                );
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("JWT API key update failed", [
                "user_id" => Auth::id(),
                "key_id" => $apiKey->id,
                "error" => $e->getMessage(),
                "ip_address" => $request->ip(),
            ]);

            if ($request->expectsJson()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Failed to update API key.",
                        "error" => config("app.debug")
                            ? $e->getMessage()
                            : "Internal server error",
                    ],
                    500
                );
            }

            return back()
                ->withErrors(["error" => "Failed to update API key."])
                ->withInput();
        }
    }

    /**
     * Remove the specified API key from storage (revoke JWT token).
     */
    public function destroy(ApiKey $apiKey)
    {
        $this->authorizeApiKey($apiKey);

        DB::beginTransaction();

        try {
            // Revoke the JWT token
            $revoked = $this->jwtService->revokeToken($apiKey->jti);

            if (!$revoked) {
                throw new \Exception("Failed to revoke JWT token");
            }

            // Log the deletion for security audit
            Log::info("JWT API key deleted/revoked", [
                "user_id" => Auth::id(),
                "user_email" => Auth::user()->email,
                "key_id" => $apiKey->id,
                "key_name" => $apiKey->name,
                "jti" => $apiKey->jti,
                "scopes" => $apiKey->scopes,
                "ip_address" => request()->ip(),
                "user_agent" => request()->userAgent(),
            ]);

            DB::commit();

            if (request()->expectsJson()) {
                return response()->json([
                    "success" => true,
                    "message" => "JWT API key revoked successfully.",
                ]);
            }

            return redirect()
                ->route("dashboard")
                ->with("success", "JWT API key revoked successfully.");
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("JWT API key deletion failed", [
                "user_id" => Auth::id(),
                "key_id" => $apiKey->id,
                "error" => $e->getMessage(),
                "ip_address" => request()->ip(),
            ]);

            if (request()->expectsJson()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Failed to revoke API key.",
                        "error" => config("app.debug")
                            ? $e->getMessage()
                            : "Internal server error",
                    ],
                    500
                );
            }

            return back()->withErrors(["error" => "Failed to revoke API key."]);
        }
    }

    /**
     * Revoke all API keys for the authenticated user.
     */
    public function revokeAll(Request $request)
    {
        DB::beginTransaction();

        try {
            $revokedCount = $this->jwtService->revokeAllUserTokens(Auth::id());

            Log::warning("All JWT API keys revoked for user", [
                "user_id" => Auth::id(),
                "user_email" => Auth::user()->email,
                "revoked_count" => $revokedCount,
                "ip_address" => $request->ip(),
                "user_agent" => $request->userAgent(),
            ]);

            DB::commit();

            if ($request->expectsJson()) {
                return response()->json([
                    "success" => true,
                    "message" => "Successfully revoked {$revokedCount} API keys.",
                    "revoked_count" => $revokedCount,
                ]);
            }

            return redirect()
                ->route("dashboard")
                ->with(
                    "success",
                    "Successfully revoked {$revokedCount} API keys."
                );
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("Failed to revoke all JWT API keys", [
                "user_id" => Auth::id(),
                "error" => $e->getMessage(),
                "ip_address" => $request->ip(),
            ]);

            if ($request->expectsJson()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Failed to revoke all API keys.",
                        "error" => config("app.debug")
                            ? $e->getMessage()
                            : "Internal server error",
                    ],
                    500
                );
            }

            return back()->withErrors([
                "error" => "Failed to revoke all API keys.",
            ]);
        }
    }

    /**
     * Validate a JWT token (for testing purposes).
     */
    public function validateToken(Request $request)
    {
        $request->validate([
            "token" => "required|string",
        ]);

        $tokenData = $this->jwtService->validateToken($request->token);

        if (!$tokenData) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Invalid or expired token",
                ],
                401
            );
        }

        return response()->json([
            "success" => true,
            "message" => "Token is valid",
            "data" => [
                "user_id" => $tokenData["user_id"],
                "scopes" => $tokenData["scopes"],
                "jti" => $tokenData["jti"],
                "expires_at" => $tokenData["claims"]["exp"] ?? null,
                "issued_at" => $tokenData["claims"]["iat"] ?? null,
            ],
        ]);
    }

    /**
     * Check rate limits for API key creation.
     */
    private function checkRateLimits()
    {
        $user = Auth::user();

        // Check total active keys limit
        $activeKeyCount = $user->apiKeys()->where("is_active", true)->count();
        if ($activeKeyCount >= config("api.max_keys_per_user", 10)) {
            $error = [
                "limit" =>
                    "Maximum API keys limit reached (" .
                    config("api.max_keys_per_user", 10) .
                    ")",
            ];

            if (request()->expectsJson()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Maximum API keys limit reached",
                        "errors" => $error,
                    ],
                    429
                );
            }

            return back()->withErrors($error);
        }

        // Check recent creation rate limit
        $recentKeys = $user
            ->apiKeys()
            ->where("created_at", ">", now()->subMinutes(5))
            ->count();

        if ($recentKeys >= 3) {
            $error = [
                "rate" =>
                    "Too many keys created recently. Please wait a few minutes.",
            ];

            if (request()->expectsJson()) {
                return response()->json(
                    [
                        "success" => false,
                        "message" => "Rate limit exceeded",
                        "errors" => $error,
                    ],
                    429
                );
            }

            return back()->withErrors($error);
        }

        return true;
    }

    /**
     * Authorize that the user owns the API key.
     */
    private function authorizeApiKey(ApiKey $apiKey): void
    {
        if ($apiKey->user_id !== Auth::id()) {
            abort(403, "You are not authorized to access this API key.");
        }
    }

    /**
     * Get the status of an API key.
     */
    private function getKeyStatus(ApiKey $apiKey): string
    {
        if (!$apiKey->is_active) {
            return "revoked";
        }

        if ($apiKey->isExpired()) {
            return "expired";
        }

        return "active";
    }

    /**
     * Get usage statistics for an API key.
     */
    private function getUsageStats(ApiKey $apiKey): array
    {
        return [
            "total_requests" => 0, // You can implement request logging
            "last_used_at" => $apiKey->last_used_at,
            "last_used_ip" => $apiKey->last_used_ip,
            "days_since_last_use" => $apiKey->last_used_at
                ? $apiKey->last_used_at->diffInDays(now())
                : null,
        ];
    }
}
