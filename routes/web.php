<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApiKeyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", function () {
    $apiKeys = Auth::user()->apiKeys()->get(); // Make sure we call get() to execute the query
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

    // API Keys routes
    Route::resource("api-keys", ApiKeyController::class)->except([
        "show",
        "edit",
        "create",
    ]);
});

require __DIR__ . "/auth.php";
