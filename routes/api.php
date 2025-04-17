<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\WisataController;
use App\Http\Middleware\ApiKeyMiddleware;

// Protected routes requiring API key
Route::middleware([ApiKeyMiddleware::class])->group(function () {
    Route::get("/daerahs", [DaerahController::class, "index"]);
    Route::get("/wisatas", [WisataController::class, "index"]);
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
});
