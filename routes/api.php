<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\WisataController;
use App\Http\Middleware\ApiKeyMiddleware;

// Protected routes requiring API key
Route::middleware([ApiKeyMiddleware::class])->group(function () {

    // Provinsi
    Route::get("/provinsis", [ProvinsiController::class, "index"]);
    Route::get("/provinsis/{id}/daerahs", [DaerahController::class, "byProvinsi"]);
    Route::get("/provinsis/{id}/wisatas", [WisataController::class, "byProvinsi"]);

    // Daerah
    Route::get("/daerahs", [DaerahController::class, "index"]);

    // Wisata
    Route::post("/wisatas", [WisataController::class, "store"]);
    Route::delete("/wisatas/{id}", [WisataController::class, "destroy"]);
    Route::get("/wisatas/daerah/{id_daerah}", [WisataController::class, "byDaerah"]);
    Route::get("/wisatas/cari-daerah", [WisataController::class, "byNamaDaerah"]);
    Route::get("/wisatas/daerah/{id_daerah}/wisata/{id}", [WisataController::class, "byDaerahAndId"]);
    Route::get("/wisatas/provinsi/{id_provinsi}/daerah/{id_daerah}", [WisataController::class, "byProvinsiAndDaerah"]);

});
