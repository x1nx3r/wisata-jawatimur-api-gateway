<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DaerahController;
use App\Http\Controllers\WisataController;

Route::GET('/daerahs', [DaerahController::class, 'index']);
Route::GET('/wisatas', [WisataController::class, 'index']);
Route::GET('/wisatas/daerah/{id_daerah}', [WisataController::class, 'byDaerah']);
Route::GET('/wisatas/cari-daerah', [WisataController::class, 'byNamaDaerah']);
Route::GET('/wisatas/daerah/{id_daerah}/wisata/{id}', [WisataController::class, 'byDaerahAndId']);