<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $daerahs = [
            // Jawa Timur (id_provinsi = 1)
            ["id" => 1, "nama_daerah" => "Bangkalan", "id_provinsi" => 1],
            ["id" => 2, "nama_daerah" => "Banyuwangi", "id_provinsi" => 1],
            ["id" => 3, "nama_daerah" => "Batu", "id_provinsi" => 1],
            ["id" => 4, "nama_daerah" => "Blitar", "id_provinsi" => 1],
            ["id" => 5, "nama_daerah" => "Bojonegoro", "id_provinsi" => 1],
            ["id" => 6, "nama_daerah" => "Bondowoso", "id_provinsi" => 1],
            ["id" => 7, "nama_daerah" => "Gresik", "id_provinsi" => 1],
            ["id" => 8, "nama_daerah" => "Jember", "id_provinsi" => 1],
            ["id" => 9, "nama_daerah" => "Jombang", "id_provinsi" => 1],
            ["id" => 10, "nama_daerah" => "Kediri", "id_provinsi" => 1],
            ["id" => 11, "nama_daerah" => "Lamongan", "id_provinsi" => 1],
            ["id" => 12, "nama_daerah" => "Lumajang", "id_provinsi" => 1],
            ["id" => 13, "nama_daerah" => "Madiun", "id_provinsi" => 1],
            ["id" => 14, "nama_daerah" => "Magetan", "id_provinsi" => 1],
            ["id" => 15, "nama_daerah" => "Malang", "id_provinsi" => 1],
            ["id" => 16, "nama_daerah" => "Mojokerto", "id_provinsi" => 1],
            ["id" => 17, "nama_daerah" => "Nganjuk", "id_provinsi" => 1],
            ["id" => 18, "nama_daerah" => "Ngawi", "id_provinsi" => 1],
            ["id" => 19, "nama_daerah" => "Pacitan", "id_provinsi" => 1],
            ["id" => 20, "nama_daerah" => "Pamekasan", "id_provinsi" => 1],
            ["id" => 21, "nama_daerah" => "Pasuruan", "id_provinsi" => 1],
            ["id" => 22, "nama_daerah" => "Ponorogo", "id_provinsi" => 1],
            ["id" => 23, "nama_daerah" => "Probolinggo", "id_provinsi" => 1],
            ["id" => 24, "nama_daerah" => "Sampang", "id_provinsi" => 1],
            ["id" => 25, "nama_daerah" => "Sidoarjo", "id_provinsi" => 1],
            ["id" => 26, "nama_daerah" => "Situbondo", "id_provinsi" => 1],
            ["id" => 27, "nama_daerah" => "Sumenep", "id_provinsi" => 1],
            ["id" => 28, "nama_daerah" => "Surabaya", "id_provinsi" => 1],
            ["id" => 29, "nama_daerah" => "Trenggalek", "id_provinsi" => 1],
            ["id" => 30, "nama_daerah" => "Tuban", "id_provinsi" => 1],
            ["id" => 31, "nama_daerah" => "Tulungagung", "id_provinsi" => 1],

            // Jawa Tengah (id_provinsi = 2)
            ["id" => 32, "nama_daerah" => "Banjarnegara", "id_provinsi" => 2],
            ["id" => 33, "nama_daerah" => "Batang", "id_provinsi" => 2],
            ["id" => 34, "nama_daerah" => "Blora", "id_provinsi" => 2],
            ["id" => 35, "nama_daerah" => "Boyolali", "id_provinsi" => 2],
            ["id" => 36, "nama_daerah" => "Brebes", "id_provinsi" => 2],
            ["id" => 37, "nama_daerah" => "Cilacap", "id_provinsi" => 2],
            ["id" => 38, "nama_daerah" => "Demak", "id_provinsi" => 2],
            ["id" => 39, "nama_daerah" => "Jepara", "id_provinsi" => 2],
            ["id" => 40, "nama_daerah" => "Kajen", "id_provinsi" => 2],
            ["id" => 41, "nama_daerah" => "Karanganyar", "id_provinsi" => 2],
            ["id" => 42, "nama_daerah" => "Kebumen", "id_provinsi" => 2],
            ["id" => 43, "nama_daerah" => "Kendal", "id_provinsi" => 2],
            ["id" => 44, "nama_daerah" => "Klaten", "id_provinsi" => 2],
            ["id" => 45, "nama_daerah" => "Kudus", "id_provinsi" => 2],
            ["id" => 46, "nama_daerah" => "Magelang", "id_provinsi" => 2],
            ["id" => 47, "nama_daerah" => "Mungkid", "id_provinsi" => 2],
            ["id" => 48, "nama_daerah" => "Pati", "id_provinsi" => 2],
            ["id" => 49, "nama_daerah" => "Pekalongan", "id_provinsi" => 2],
            ["id" => 50, "nama_daerah" => "Pemalang", "id_provinsi" => 2],
            ["id" => 51, "nama_daerah" => "Purbalingga", "id_provinsi" => 2],
            ["id" => 52, "nama_daerah" => "Purwodadi", "id_provinsi" => 2],
            ["id" => 53, "nama_daerah" => "Purwokerto", "id_provinsi" => 2],
            ["id" => 54, "nama_daerah" => "Purworejo", "id_provinsi" => 2],
            ["id" => 55, "nama_daerah" => "Rembang", "id_provinsi" => 2],
            ["id" => 56, "nama_daerah" => "Salatiga", "id_provinsi" => 2],
            ["id" => 57, "nama_daerah" => "Semarang", "id_provinsi" => 2],
            ["id" => 58, "nama_daerah" => "Sragen", "id_provinsi" => 2],
            ["id" => 59, "nama_daerah" => "Sukoharjo", "id_provinsi" => 2],
            ["id" => 60, "nama_daerah" => "Surakarta", "id_provinsi" => 2],
            ["id" => 61, "nama_daerah" => "Tegal", "id_provinsi" => 2],
            ["id" => 62, "nama_daerah" => "Temanggung", "id_provinsi" => 2],
            ["id" => 63, "nama_daerah" => "Ungaran", "id_provinsi" => 2],
            ["id" => 64, "nama_daerah" => "Wonogiri", "id_provinsi" => 2],
            ["id" => 65, "nama_daerah" => "Wonosobo", "id_provinsi" => 2],

            // Yogyakarta (id_provinsi = 3)
            ["id" => 66, "nama_daerah" => "Yogyakarta", "id_provinsi" => 3],
            ["id" => 67, "nama_daerah" => "Sleman", "id_provinsi" => 3],
            ["id" => 68, "nama_daerah" => "Gunung Kidul", "id_provinsi" => 3],
            ["id" => 69, "nama_daerah" => "Kulon Progo", "id_provinsi" => 3],
            ["id" => 70, "nama_daerah" => "Bantul", "id_provinsi" => 3],

            // Jawa Barat (id_provinsi = 4)
            ["id" => 71, "nama_daerah" => "Bandung", "id_provinsi" => 4],
            ["id" => 72, "nama_daerah" => "Bandung Barat", "id_provinsi" => 4],
            ["id" => 73, "nama_daerah" => "Banjar", "id_provinsi" => 4],
            ["id" => 74, "nama_daerah" => "Bekasi", "id_provinsi" => 4],
            ["id" => 75, "nama_daerah" => "Bogor", "id_provinsi" => 4],
            ["id" => 76, "nama_daerah" => "Ciamis", "id_provinsi" => 4],
            ["id" => 77, "nama_daerah" => "Cianjur", "id_provinsi" => 4],
            ["id" => 78, "nama_daerah" => "Cimahi", "id_provinsi" => 4],
            ["id" => 79, "nama_daerah" => "Cirebon", "id_provinsi" => 4],
            ["id" => 80, "nama_daerah" => "Depok", "id_provinsi" => 4],
            ["id" => 81, "nama_daerah" => "Garut", "id_provinsi" => 4],
            ["id" => 82, "nama_daerah" => "Indramayu", "id_provinsi" => 4],
            ["id" => 83, "nama_daerah" => "Karawang", "id_provinsi" => 4],
            ["id" => 84, "nama_daerah" => "Kuningan", "id_provinsi" => 4],
            ["id" => 85, "nama_daerah" => "Majalengka", "id_provinsi" => 4],
            ["id" => 86, "nama_daerah" => "Pangandaran", "id_provinsi" => 4],
            ["id" => 87, "nama_daerah" => "Purwakarta", "id_provinsi" => 4],
            ["id" => 88, "nama_daerah" => "Subang", "id_provinsi" => 4],
            ["id" => 89, "nama_daerah" => "Sukabumi", "id_provinsi" => 4],
            ["id" => 90, "nama_daerah" => "Sumedang", "id_provinsi" => 4],
            ["id" => 91, "nama_daerah" => "Tasikmalaya", "id_provinsi" => 4],

            // Jakarta (id_provinsi = 5)
            [
                "id" => 92,
                "nama_daerah" => "Kepulauan Seribu",
                "id_provinsi" => 5,
            ],
            ["id" => 93, "nama_daerah" => "Jakarta Barat", "id_provinsi" => 5],
            ["id" => 94, "nama_daerah" => "Jakarta Pusat", "id_provinsi" => 5],
            [
                "id" => 95,
                "nama_daerah" => "Jakarta Selatan",
                "id_provinsi" => 5,
            ],
            ["id" => 96, "nama_daerah" => "Jakarta Timur", "id_provinsi" => 5],
            ["id" => 97, "nama_daerah" => "Jakarta Utara", "id_provinsi" => 5],

            // Banten (id_provinsi = 6)
            ["id" => 98, "nama_daerah" => "Pandeglang", "id_provinsi" => 6],
            ["id" => 99, "nama_daerah" => "Lebak", "id_provinsi" => 6],
            [
                "id" => 100,
                "nama_daerah" => "Kabupaten Tangerang",
                "id_provinsi" => 6,
            ],
            [
                "id" => 101,
                "nama_daerah" => "Kabupaten Serang",
                "id_provinsi" => 6,
            ],
            [
                "id" => 102,
                "nama_daerah" => "Kota Tangerang",
                "id_provinsi" => 6,
            ],
            ["id" => 103, "nama_daerah" => "Cilegon", "id_provinsi" => 6],
            ["id" => 104, "nama_daerah" => "Kota Serang", "id_provinsi" => 6],
            [
                "id" => 105,
                "nama_daerah" => "Tangerang Selatan",
                "id_provinsi" => 6,
            ],
        ];

        // Add timestamps to each record
        $timestamp = now();
        foreach ($daerahs as &$daerah) {
            $daerah["created_at"] = $timestamp;
            $daerah["updated_at"] = $timestamp;
        }

        try {
            // Use a transaction to ensure all records are inserted or none
            DB::transaction(function () use ($daerahs) {
                // For more reliable seeding, clear existing records first
                // Only uncomment if you're sure you want to clear the table
                // DB::table('daerahs')->truncate();

                // Insert all records at once
                DB::table("daerahs")->insert($daerahs);
            });

            $this->command->info("All daerah records inserted successfully.");
        } catch (\Exception $e) {
            Log::error("Error in DaerahSeeder: " . $e->getMessage());
            $this->command->error(
                "Failed to seed daerah records: " . $e->getMessage()
            );
            throw $e;
        }
    }
}
