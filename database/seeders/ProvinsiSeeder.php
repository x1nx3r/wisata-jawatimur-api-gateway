<?php
// database/seeders/ProvinsiSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $provinsis = [
            ["id" => 1, "nama_provinsi" => "Jawa Timur"],
            ["id" => 2, "nama_provinsi" => "Jawa Tengah"],
            ["id" => 3, "nama_provinsi" => "Yogyakarta"],
            ["id" => 4, "nama_provinsi" => "Jawa Barat"],
            ["id" => 5, "nama_provinsi" => "Jakarta"],
            ["id" => 6, "nama_provinsi" => "Banten"],
        ];

        foreach ($provinsis as $provinsi) {
            DB::table("provinsis")->updateOrInsert(
                ["id" => $provinsi["id"]],
                [
                    "nama_provinsi" => $provinsi["nama_provinsi"],
                    "created_at" => now(),
                    "updated_at" => now(),
                ]
            );
        }
    }
}
