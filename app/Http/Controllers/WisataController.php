<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\Daerah;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        return Wisata::all();
    }

    public function byDaerah($id_daerah)
    {
        return Wisata::with('daerah')->where('id_daerah', $id_daerah)->get();
    }

    public function byNamaDaerah(Request $request)
    {
        $daerah = Daerah::where('nama_daerah', 'LIKE', '%' . $request->nama_daerah . '%')->first();
        if (!$daerah) {
            return response()->json(['message' => 'Daerah tidak ditemukan'], 404);
        }

        return $daerah->wisatas()->with('daerah')->get();
    }

    public function byDaerahAndId($id_daerah, $id)
    {
        $wisata = Wisata::where('id_daerah', $id_daerah)->where('id', $id)->first();

        if (!$wisata) {
            return response()->json(['message' => 'Wisata tidak ditemukan'], 404);
        }

        return response()->json($wisata);
    }
}