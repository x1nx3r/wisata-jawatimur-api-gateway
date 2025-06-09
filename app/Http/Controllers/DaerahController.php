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

    public function byProvinsi($id_provinsi)
{
    $daerahs = Daerah::where('id_provinsi', $id_provinsi)->get();
    return response()->json($daerahs);
}
}