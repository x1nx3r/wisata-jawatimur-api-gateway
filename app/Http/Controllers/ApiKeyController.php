<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiKeyController extends Controller
{
    /**
     * Display a listing of the user's API keys.
     */
    public function index()
    {
        // Instead of a separate view, redirect to dashboard where keys are displayed
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
     * Store a newly created API key in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        "name" => "nullable|string|max:255",
        "description" => "nullable|string",
        "expires_at" => "nullable|date",
    ]);

    // Convert expires_at string to DateTime object if present
    $expiresAt = isset($validated["expires_at"]) 
        ? new \DateTime($validated["expires_at"]) 
        : null;

    $apiKey = Auth::user()->createApiKey(
        $validated["name"] ?? null,
        $validated["description"] ?? null,
        $expiresAt
    );

    return redirect()
        ->route("dashboard")
        ->with(
            "success",
            'API key created successfully. Make sure to copy your key now as it won\'t be fully visible again: ' .
                $apiKey->key
        );
}

    /**
     * Update the specified API key in storage.
     */
    public function update(Request $request, ApiKey $apiKey)
    {
        // Ensure the user can only update their own API keys
        if ($apiKey->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            "name" => "nullable|string|max:255",
            "description" => "nullable|string",
            "is_active" => "sometimes|boolean",
        ]);

        $apiKey->update([
            "name" => $validated["name"] ?? $apiKey->name,
            "description" => $validated["description"] ?? $apiKey->description,
            "is_active" => $request->has("is_active"),
        ]);

        return redirect()
            ->route("dashboard")
            ->with("success", "API key updated successfully.");
    }

    /**
     * Remove the specified API key from storage.
     */
    public function destroy(ApiKey $apiKey)
    {
        // Ensure the user can only delete their own API keys
        if ($apiKey->user_id !== Auth::id()) {
            abort(403);
        }

        $apiKey->delete();

        return redirect()
            ->route("dashboard")
            ->with("success", "API key deleted successfully.");
    }
}
