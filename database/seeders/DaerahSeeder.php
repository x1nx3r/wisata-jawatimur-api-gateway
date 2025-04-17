<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $daerahs = [
            ["id" => 1, "nama_daerah" => "Bangkalan"],
            ["id" => 2, "nama_daerah" => "Banyuwangi"],
            ["id" => 3, "nama_daerah" => "Batu"],
            ["id" => 4, "nama_daerah" => "Blitar"],
            ["id" => 5, "nama_daerah" => "Bojonegoro"],
            ["id" => 6, "nama_daerah" => "Bondowoso"],
            ["id" => 7, "nama_daerah" => "Gresik"],
            ["id" => 8, "nama_daerah" => "Jember"],
            ["id" => 9, "nama_daerah" => "Jombang"],
            ["id" => 10, "nama_daerah" => "Kediri"],
            ["id" => 11, "nama_daerah" => "Lamongan"],
            ["id" => 12, "nama_daerah" => "Lumajang"],
            ["id" => 13, "nama_daerah" => "Madiun"],
            ["id" => 14, "nama_daerah" => "Magetan"],
            ["id" => 15, "nama_daerah" => "Malang"],
            ["id" => 16, "nama_daerah" => "Mojokerto"],
            ["id" => 17, "nama_daerah" => "Nganjuk"],
            ["id" => 18, "nama_daerah" => "Ngawi"],
            ["id" => 19, "nama_daerah" => "Pacitan"],
            ["id" => 20, "nama_daerah" => "Pamekasan"],
            ["id" => 21, "nama_daerah" => "Pasuruan"],
            ["id" => 22, "nama_daerah" => "Ponorogo"],
            ["id" => 23, "nama_daerah" => "Probolinggo"],
            ["id" => 24, "nama_daerah" => "Sampang"],
            ["id" => 25, "nama_daerah" => "Sidoarjo"],
            ["id" => 26, "nama_daerah" => "Situbondo"],
            ["id" => 27, "nama_daerah" => "Sumenep"],
            ["id" => 28, "nama_daerah" => "Surabaya"],
            ["id" => 29, "nama_daerah" => "Trenggalek"],
            ["id" => 30, "nama_daerah" => "Tuban"],
            ["id" => 31, "nama_daerah" => "Tulungagung"],
        ];

        // Insert all daerahs at once for better performance
        DB::table("daerahs")->insert($daerahs);
    }
}
