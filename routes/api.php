<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\ApiKeyController;
use App\Http\Middleware\JwtApiAuthentication;

// Public routes (no authentication required)
Route::get("/health", function () {
    return response()->json([
        "status" => "ok",
        "service" => "Wisata Jawa API Gateway",
        "version" => "1.0.0",
        "timestamp" => now()->toISOString(),
    ]);
});

Route::get("/info", function () {
    return response()->json([
        "api_name" => "Wisata Pulau Jawa API",
        "description" => "API for tourism data in Java Island, Indonesia",
        "version" => "1.0.0",
        "endpoints" => [
            "provinsis" => "GET /api/provinsis - List all provinces",
            "daerahs" => "GET /api/daerahs - List all regions",
            "wisatas" => "GET /api/wisatas - List all tourist attractions",
        ],
        "authentication" => "JWT Bearer Token required",
        "documentation" => url("/documentations"),
    ]);
});

// Protected routes requiring JWT API key with READ scope
Route::middleware([JwtApiAuthentication::class . ":read"])->group(function () {
    // Provinsi - Read operations
    Route::get("/provinsis", [ProvinsiController::class, "index"]);
    Route::get("/provinsis/{id}", [ProvinsiController::class, "show"]);
    Route::get("/provinsis/{id}/daerahs", [
        DaerahController::class,
        "byProvinsi",
    ]);
    Route::get("/provinsis/{id}/wisatas", [
        WisataController::class,
        "byProvinsi",
    ]);

    // Daerah - Read operations
    Route::get("/daerahs", [DaerahController::class, "index"]);
    Route::get("/daerahs/{id}", [DaerahController::class, "show"]);

    // Wisata - Read operations
    Route::get("/wisatas", [WisataController::class, "index"]);
    Route::get("/wisatas/{id}", [WisataController::class, "show"]);
    Route::get("/wisatas/daerah/{id_daerah}", [
        WisataController::class,
        "byDaerah",
    ]);
    Route::get("/wisatas/cari-daerah", [
        WisataController::class,
        "byNamaDaerah",
    ]);
    Route::get("/wisatas/daerah/{id_daerah}/wisata/{id}", [
        WisataController::class,
        "byDaerahAndId",
    ]);
    Route::get("/wisatas/provinsi/{id_provinsi}/daerah/{id_daerah}", [
        WisataController::class,
        "byProvinsiAndDaerah",
    ]);
    Route::get("/wisatas/search", [WisataController::class, "search"]);
});

// Protected routes requiring JWT API key with WRITE scope
Route::middleware([JwtApiAuthentication::class . ":write"])->group(function () {
    // Provinsi - Write operations
    Route::post("/provinsis", [ProvinsiController::class, "store"]);
    Route::put("/provinsis/{id}", [ProvinsiController::class, "update"]);
    Route::patch("/provinsis/{id}", [ProvinsiController::class, "update"]);

    // Daerah - Write operations
    Route::post("/daerahs", [DaerahController::class, "store"]);
    Route::put("/daerahs/{id}", [DaerahController::class, "update"]);
    Route::patch("/daerahs/{id}", [DaerahController::class, "update"]);

    // Wisata - Write operations
    Route::post("/wisatas", [WisataController::class, "store"]);
    Route::put("/wisatas/{id}", [WisataController::class, "update"]);
    Route::patch("/wisatas/{id}", [WisataController::class, "update"]);
});

// Protected routes requiring JWT API key with DELETE scope
Route::middleware([JwtApiAuthentication::class . ":delete"])->group(
    function () {
        // Provinsi - Delete operations
        Route::delete("/provinsis/{id}", [
            ProvinsiController::class,
            "destroy",
        ]);

        // Daerah - Delete operations
        Route::delete("/daerahs/{id}", [DaerahController::class, "destroy"]);

        // Wisata - Delete operations
        Route::delete("/wisatas/{id}", [WisataController::class, "destroy"]);
    }
);

// Protected routes requiring JWT API key with ADMIN scope
Route::middleware([JwtApiAuthentication::class . ":admin"])->group(function () {
    // Admin statistics
    Route::get("/admin/stats", function () {
        return response()->json([
            "total_provinsis" => \App\Models\Provinsi::count(),
            "total_daerahs" => \App\Models\Daerah::count(),
            "total_wisatas" => \App\Models\Wisata::count(),
            "total_users" => \App\Models\User::count(),
            "active_api_keys" => \App\Models\ApiKey::where(
                "is_active",
                true
            )->count(),
            "api_requests_today" => 0, // You can implement request logging
            "generated_at" => now()->toISOString(),
        ]);
    });

    // Admin bulk operations
    Route::post("/admin/bulk-import/wisatas", [
        WisataController::class,
        "bulkImport",
    ]);
    Route::post("/admin/bulk-import/daerahs", [
        DaerahController::class,
        "bulkImport",
    ]);
    Route::post("/admin/bulk-import/provinsis", [
        ProvinsiController::class,
        "bulkImport",
    ]);

    // Admin data management (be very careful with these!)
    Route::delete("/admin/cleanup/expired-keys", function () {
        $deleted = \App\Models\ApiKey::where(
            "expires_at",
            "<",
            now()
        )->delete();
        return response()->json([
            "message" => "Expired API keys cleaned up",
            "deleted_count" => $deleted,
        ]);
    });
});

// Alternative: Catch-all for undefined routes
Route::fallback(function () {
    return response()->json(
        [
            "error" => "Endpoint not found",
            "message" => "The requested API endpoint does not exist",
            "available_endpoints" => [
                "GET /api/health" => "API health check",
                "GET /api/info" => "API information",
                "GET /api/provinsis" => "List provinces (requires read scope)",
                "GET /api/daerahs" => "List regions (requires read scope)",
                "GET /api/wisatas" =>
                    "List tourist attractions (requires read scope)",
            ],
            "documentation" => url("/documentations"),
        ],
        404
    );
});
