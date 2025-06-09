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

    public function byProvinsi($id_provinsi)
    {
        $wisatas = Wisata::whereHas('daerah', function ($query) use ($id_provinsi) {
            $query->where('id_provinsi', $id_provinsi);
        })->get();

        return response()->json($wisatas);
    }

    public function byProvinsiAndDaerah($id_provinsi, $id_daerah)
    {
        // Validasi bahwa daerah benar-benar milik provinsi tersebut
        $daerah = Daerah::where('id', $id_daerah)
                        ->where('id_provinsi', $id_provinsi)
                        ->first();

        if (!$daerah) {
            return response()->json([
                'message' => 'Daerah tidak ditemukan di provinsi tersebut.'
            ], 404);
        }

        // Ambil wisata berdasarkan daerah
        $wisatas = Wisata::where('id_daerah', $id_daerah)->get();

        return response()->json($wisatas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_daerah' => 'required|exists:daerahs,id',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'rating' => 'nullable|numeric|min:0|max:5',
            'link_gmaps' => 'nullable|url|max:500',
        ]);

        $wisata = Wisata::create($validated);

        return response()->json([
            'message' => 'Data wisata berhasil ditambahkan',
            'data' => $wisata
        ], 201);
    }

    public function destroy($id)
    {
        $wisata = Wisata::find($id);

        if (!$wisata) {
            return response()->json([
                'message' => 'Data wisata tidak ditemukan'
            ], 404);
        }

        $wisata->delete();

        return response()->json([
            'message' => 'Data wisata berhasil dihapus'
        ]);
    }

}