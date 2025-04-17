<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check for API key in Authorization header or query parameter
        $bearerToken = $request->bearerToken();
        $apiKey = $bearerToken ?? $request->query("api_key");

        if (!$apiKey) {
            return response()->json(
                [
                    "error" => "API key is missing",
                    "message" =>
                        "Please provide a valid API key via Bearer token or api_key parameter",
                ],
                401
            );
        }

        // Find the API key in the database
        $keyModel = ApiKey::where("key", $apiKey)->first();

        if (!$keyModel) {
            return response()->json(
                [
                    "error" => "Invalid API key",
                    "message" => "The provided API key is invalid",
                ],
                401
            );
        }

        // Check if the key is active
        if (!$keyModel->is_active) {
            return response()->json(
                [
                    "error" => "Inactive API key",
                    "message" => "The provided API key is inactive",
                ],
                403
            );
        }

        // Check if the key has expired
        if (
            $keyModel->expires_at &&
            now()->greaterThan($keyModel->expires_at)
        ) {
            return response()->json(
                [
                    "error" => "Expired API key",
                    "message" => "The provided API key has expired",
                ],
                403
            );
        }

        // Update the last_used_at timestamp
        $keyModel->update(["last_used_at" => now()]);

        // Add the API key and user to the request for potential use in controllers
        $request->attributes->add([
            "api_key" => $keyModel,
            "api_user" => $keyModel->user,
        ]);

        return $next($request);
    }
}
