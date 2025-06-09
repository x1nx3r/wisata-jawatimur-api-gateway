<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function index(Request $request)
    {
        $provinsis = Provinsi::all(); // Mengambil semua data dari tabel 'daerahs'
        return response()->json($provinsis);
    }
}