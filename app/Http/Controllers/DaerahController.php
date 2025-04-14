<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Daerah;

class DaerahController extends Controller
{
    public function index(Request $request)
    {
        $daerahs = Daerah::all(); // Mengambil semua data dari tabel 'daerahs'
        return response()->json($daerahs);
    }
}