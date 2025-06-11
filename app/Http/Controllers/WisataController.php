<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\Daerah;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of wisatas with pagination support
     */
    public function index(Request $request)
    {
        // Validate pagination parameters
        $request->validate([
            "limit" => "sometimes|integer|min:1|max:100",
            "page" => "sometimes|integer|min:1",
        ]);

        $limit = $request->get("limit", 15); // Default 15 items per page
        $page = $request->get("page", 1);

        // If limit and page are provided, use pagination
        if ($request->has("limit") || $request->has("page")) {
            $wisatas = Wisata::with(["daerah.provinsi"])
                ->orderBy("created_at", "desc")
                ->paginate($limit, ["*"], "page", $page);

            return response()->json([
                "success" => true,
                "data" => $wisatas->items(),
                "meta" => [
                    "current_page" => $wisatas->currentPage(),
                    "last_page" => $wisatas->lastPage(),
                    "per_page" => $wisatas->perPage(),
                    "total" => $wisatas->total(),
                    "from" => $wisatas->firstItem(),
                    "to" => $wisatas->lastItem(),
                ],
                "links" => [
                    "first" => $wisatas->url(1),
                    "last" => $wisatas->url($wisatas->lastPage()),
                    "prev" => $wisatas->previousPageUrl(),
                    "next" => $wisatas->nextPageUrl(),
                ],
            ]);
        }

        // Original behavior - return all wisatas
        return Wisata::with(["daerah.provinsi"])->get();
    }

    /**
     * Get wisatas by daerah ID with pagination support
     */
    public function byDaerah(Request $request, $id_daerah)
    {
        // Validate pagination parameters
        $request->validate([
            "limit" => "sometimes|integer|min:1|max:100",
            "page" => "sometimes|integer|min:1",
        ]);

        $limit = $request->get("limit", 15);
        $page = $request->get("page", 1);

        // If pagination parameters are provided, use pagination
        if ($request->has("limit") || $request->has("page")) {
            // Verify daerah exists
            $daerah = Daerah::findOrFail($id_daerah);

            $wisatas = Wisata::with(["daerah.provinsi"])
                ->where("id_daerah", $id_daerah)
                ->orderBy("rating", "desc")
                ->orderBy("created_at", "desc")
                ->paginate($limit, ["*"], "page", $page);

            return response()->json([
                "success" => true,
                "data" => $wisatas->items(),
                "meta" => [
                    "current_page" => $wisatas->currentPage(),
                    "last_page" => $wisatas->lastPage(),
                    "per_page" => $wisatas->perPage(),
                    "total" => $wisatas->total(),
                    "from" => $wisatas->firstItem(),
                    "to" => $wisatas->lastItem(),
                    "daerah" => [
                        "id" => $daerah->id,
                        "nama_daerah" => $daerah->nama_daerah,
                    ],
                ],
                "links" => [
                    "first" => $wisatas->url(1),
                    "last" => $wisatas->url($wisatas->lastPage()),
                    "prev" => $wisatas->previousPageUrl(),
                    "next" => $wisatas->nextPageUrl(),
                ],
            ]);
        }

        // Original behavior - return all wisatas for the daerah
        return Wisata::with("daerah")->where("id_daerah", $id_daerah)->get();
    }

    /**
     * Search wisatas by daerah name (original method name preserved)
     */
    public function byNamaDaerah(Request $request)
    {
        $daerah = Daerah::where(
            "nama_daerah",
            "LIKE",
            "%" . $request->nama_daerah . "%"
        )->first();
        if (!$daerah) {
            return response()->json(
                ["message" => "Daerah tidak ditemukan"],
                404
            );
        }

        return $daerah->wisatas()->with("daerah")->get();
    }

    /**
     * Get specific wisata by daerah ID and wisata ID
     */
    public function byDaerahAndId($id_daerah, $id)
    {
        $wisata = Wisata::with(["daerah.provinsi"])
            ->where("id_daerah", $id_daerah)
            ->where("id", $id)
            ->first();

        if (!$wisata) {
            return response()->json(
                ["message" => "Wisata tidak ditemukan"],
                404
            );
        }

        return response()->json([
            "success" => true,
            "data" => $wisata,
        ]);
    }

    /**
     * Get wisatas by provinsi ID with pagination support
     */
    public function byProvinsi(Request $request, $id_provinsi)
    {
        // Validate pagination parameters
        $request->validate([
            "limit" => "sometimes|integer|min:1|max:100",
            "page" => "sometimes|integer|min:1",
        ]);

        $limit = $request->get("limit", 15);
        $page = $request->get("page", 1);

        // If pagination parameters are provided, use pagination
        if ($request->has("limit") || $request->has("page")) {
            $wisatas = Wisata::with(["daerah.provinsi"])
                ->whereHas("daerah", function ($query) use ($id_provinsi) {
                    $query->where("id_provinsi", $id_provinsi);
                })
                ->orderBy("rating", "desc")
                ->orderBy("created_at", "desc")
                ->paginate($limit, ["*"], "page", $page);

            return response()->json([
                "success" => true,
                "data" => $wisatas->items(),
                "meta" => [
                    "current_page" => $wisatas->currentPage(),
                    "last_page" => $wisatas->lastPage(),
                    "per_page" => $wisatas->perPage(),
                    "total" => $wisatas->total(),
                    "from" => $wisatas->firstItem(),
                    "to" => $wisatas->lastItem(),
                ],
                "links" => [
                    "first" => $wisatas->url(1),
                    "last" => $wisatas->url($wisatas->lastPage()),
                    "prev" => $wisatas->previousPageUrl(),
                    "next" => $wisatas->nextPageUrl(),
                ],
            ]);
        }

        // Original behavior
        $wisatas = Wisata::with(["daerah.provinsi"])
            ->whereHas("daerah", function ($query) use ($id_provinsi) {
                $query->where("id_provinsi", $id_provinsi);
            })
            ->get();

        return response()->json($wisatas);
    }

    /**
     * Get wisatas by provinsi and daerah
     */
    public function byProvinsiAndDaerah($id_provinsi, $id_daerah)
    {
        // Validasi bahwa daerah benar-benar milik provinsi tersebut
        $daerah = Daerah::where("id", $id_daerah)
            ->where("id_provinsi", $id_provinsi)
            ->first();

        if (!$daerah) {
            return response()->json(
                [
                    "message" => "Daerah tidak ditemukan di provinsi tersebut.",
                ],
                404
            );
        }

        // Ambil wisata berdasarkan daerah
        $wisatas = Wisata::with(["daerah.provinsi"])
            ->where("id_daerah", $id_daerah)
            ->get();

        return response()->json([
            "success" => true,
            "data" => $wisatas,
        ]);
    }

    /**
     * Search wisatas with filters and pagination
     */
    public function search(Request $request)
    {
        $request->validate([
            "q" => "required|string|min:1|max:255",
            "daerah" => "sometimes|string|max:255",
            "min_rating" => "sometimes|numeric|min:0|max:5",
            "limit" => "sometimes|integer|min:1|max:100",
            "page" => "sometimes|integer|min:1",
        ]);

        $query = $request->get("q");
        $daerah = $request->get("daerah");
        $minRating = $request->get("min_rating");
        $limit = $request->get("limit", 15);
        $page = $request->get("page", 1);

        $wisatas = Wisata::with(["daerah.provinsi"])
            ->where("nama", "LIKE", "%{$query}%")
            ->when($daerah, function ($q) use ($daerah) {
                return $q->whereHas("daerah", function ($query) use ($daerah) {
                    $query->where("nama_daerah", "LIKE", "%{$daerah}%");
                });
            })
            ->when($minRating, function ($q) use ($minRating) {
                return $q->where("rating", ">=", $minRating);
            })
            ->orderBy("rating", "desc")
            ->orderBy("created_at", "desc")
            ->paginate($limit, ["*"], "page", $page);

        return response()->json([
            "success" => true,
            "data" => $wisatas->items(),
            "meta" => [
                "current_page" => $wisatas->currentPage(),
                "last_page" => $wisatas->lastPage(),
                "per_page" => $wisatas->perPage(),
                "total" => $wisatas->total(),
                "from" => $wisatas->firstItem(),
                "to" => $wisatas->lastItem(),
                "search_query" => $query,
                "filters" => [
                    "daerah" => $daerah,
                    "min_rating" => $minRating,
                ],
            ],
            "links" => [
                "first" => $wisatas->url(1),
                "last" => $wisatas->url($wisatas->lastPage()),
                "prev" => $wisatas->previousPageUrl(),
                "next" => $wisatas->nextPageUrl(),
            ],
        ]);
    }

    /**
     * Display the specified wisata
     */
    public function show($id)
    {
        $wisata = Wisata::with(["daerah.provinsi"])->find($id);

        if (!$wisata) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Wisata tidak ditemukan",
                ],
                404
            );
        }

        return response()->json([
            "success" => true,
            "data" => $wisata,
        ]);
    }

    /**
     * Store a newly created wisata
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "id_daerah" => "required|exists:daerahs,id",
            "nama" => "required|string|max:255",
            "alamat" => "required|string|max:500",
            "rating" => "nullable|numeric|min:0|max:5",
            "link_gmaps" => "nullable|url|max:500",
        ]);

        $wisata = Wisata::create($validated);
        $wisata->load(["daerah.provinsi"]);

        return response()->json(
            [
                "success" => true,
                "message" => "Data wisata berhasil ditambahkan",
                "data" => $wisata,
            ],
            201
        );
    }

    /**
     * Update the specified wisata
     */
    public function update(Request $request, $id)
    {
        $wisata = Wisata::find($id);

        if (!$wisata) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Data wisata tidak ditemukan",
                ],
                404
            );
        }

        $validated = $request->validate([
            "id_daerah" => "sometimes|exists:daerahs,id",
            "nama" => "sometimes|string|max:255",
            "alamat" => "sometimes|string|max:500",
            "rating" => "nullable|numeric|min:0|max:5",
            "link_gmaps" => "nullable|url|max:500",
        ]);

        $wisata->update($validated);
        $wisata->load(["daerah.provinsi"]);

        return response()->json([
            "success" => true,
            "message" => "Data wisata berhasil diperbarui",
            "data" => $wisata,
        ]);
    }

    /**
     * Remove the specified wisata
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);

        if (!$wisata) {
            return response()->json(
                [
                    "success" => false,
                    "message" => "Data wisata tidak ditemukan",
                ],
                404
            );
        }

        $wisata->delete();

        return response()->json([
            "success" => true,
            "message" => "Data wisata berhasil dihapus",
        ]);
    }

    /**
     * Admin bulk import wisatas
     */
    public function bulkImport(Request $request)
    {
        $request->validate([
            "*.id_daerah" => "required|exists:daerahs,id",
            "*.nama" => "required|string|max:255",
            "*.alamat" => "sometimes|string|max:500",
            "*.rating" => "nullable|numeric|min:0|max:5",
            "*.link_gmaps" => "nullable|url|max:500",
        ]);

        $wisatas = [];
        foreach ($request->all() as $wisataData) {
            $wisatas[] = Wisata::create($wisataData);
        }

        return response()->json(
            [
                "success" => true,
                "message" => "Bulk import completed successfully",
                "data" => $wisatas,
                "imported_count" => count($wisatas),
            ],
            201
        );
    }
}
