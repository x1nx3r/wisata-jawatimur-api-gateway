<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApiKeyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", function () {
    $apiKeys = Auth::user()->apiKeys()->latest()->get();
    return view("dashboard", compact("apiKeys"));
})
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );

    // JWT API Keys routes
    Route::resource("api-keys", ApiKeyController::class)->except([
        "show",
        "edit",
        "create",
    ]);

    // Additional JWT API key routes
    Route::post("api-keys/revoke-all", [
        ApiKeyController::class,
        "revokeAll",
    ])->name("api-keys.revoke-all");

    Route::patch("api-keys/{apiKey}/reset-token", [
        ApiKeyController::class,
        "resetToken",
    ])->name("api-keys.reset-token");

    // Fix: validateToken doesn't need apiKey parameter, it validates any token
    Route::post("api-keys/validate-token", [
        ApiKeyController::class,
        "validateToken",
    ])->name("api-keys.validate-token");
});

Route::view("/documentations", "documentations")->name("documentations");

require __DIR__ . "/auth.php";
