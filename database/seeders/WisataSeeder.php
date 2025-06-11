<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chunk 1 of wisatas (IDs: 1-20)
        $wisatas = [
            [
                "alamat" =>
                    "Kesek, Kec. Labang, Kabupaten Bangkalan, Jawa Timur 69163",
                "id" => 1,
                "id_daerah" => 1,
                "link_gmaps" => "https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6",
                "nama" => "Geger Hill",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Kesek, Kec. Labang, Kabupaten Bangkalan, Jawa Timur 69163",
                "id" => 2,
                "id_daerah" => 1,
                "link_gmaps" => "https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6",
                "nama" => "wisatas Alam Kesek",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Makam Air Mata, Buduran, Arosbaya, Bangkalan Regency, East Java 69151",
                "id" => 3,
                "id_daerah" => 1,
                "link_gmaps" => "https://maps.app.goo.gl/HrkNk36bf3rSMRJf6",
                "nama" => "wisatas Aer Mata Ibu Arosbaya",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Raya Gebang, Gebang Barat, Gebang, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69115",
                "id" => 4,
                "id_daerah" => 1,
                "link_gmaps" => "https://maps.app.goo.gl/NMseCFYGgpnPmGLB7",
                "nama" => "Pantai Gebang",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jakan, Parseh, Kec. Socah, Kabupaten Bangkalan, Jawa Timur 69161",
                "id" => 5,
                "id_daerah" => 1,
                "link_gmaps" => "https://maps.app.goo.gl/vCmTEjQyxM3NFfAE9",
                "nama" => "wisatas Bukit Jaddhih",
                "rating" => "4.0",
            ],
            [
                "alamat" =>
                    "Lingkungan Sukowidi, Klatak, Kalipuro, Banyuwangi Regency, East Java 68421",
                "id" => 6,
                "id_daerah" => 2,
                "link_gmaps" => "https://maps.app.goo.gl/fzdVCwjKzpDvAkSg8",
                "nama" => "Pantai Cacalan",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Dusun Krajan, Dadapan, Kabat, Banyuwangi Regency, East Java 68461",
                "id" => 7,
                "id_daerah" => 2,
                "link_gmaps" => "https://maps.app.goo.gl/i8PvToKhGkxeGNEK8",
                "nama" => "Banyuwangi Park",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Diponegoro No.2, Kepatihan, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68411",
                "id" => 8,
                "id_daerah" => 2,
                "link_gmaps" => "https://maps.app.goo.gl/Q59p7tFLNUNMtJS9A",
                "nama" => "Taman Blambangan",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Letjen Di. Panjaitan No.5, Kampungmandar, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68414",
                "id" => 9,
                "id_daerah" => 2,
                "link_gmaps" => "https://maps.app.goo.gl/qqyynAMLYjFrjHJJA",
                "nama" => "Jembatan wisatas Pantai Boom",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Pantai plengsengan, Lateng, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68413",
                "id" => 10,
                "id_daerah" => 2,
                "link_gmaps" => "https://maps.app.goo.gl/CrZg9ZpCuS4PajzC7",
                "nama" => "Pantai ancol plengsengan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316",
                "id" => 11,
                "id_daerah" => 3,
                "link_gmaps" => "https://maps.app.goo.gl/eMw2zYfstL2xKhuD8",
                "nama" => "Batu Night Spectacular (BNS)",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Gn. Banyak, Gunungsari, Kec. Bumiaji, Kota Batu, Jawa Timur 65312",
                "id" => 12,
                "id_daerah" => 3,
                "link_gmaps" => "https://maps.app.goo.gl/RKiEoXz3xHxeqD7B6",
                "nama" => "Taman Langit Gunung Banyak",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Brigadir Jenderal Moh. Manan, Songgokerto, Kec. Batu, Kota Batu, Jawa Timur 65391",
                "id" => 13,
                "id_daerah" => 3,
                "link_gmaps" => "https://maps.app.goo.gl/7w9j1bE7npiuax8A6",
                "nama" => "Payung Kota wisatas Batu",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316",
                "id" => 14,
                "id_daerah" => 3,
                "link_gmaps" => "https://maps.app.goo.gl/WfsCyhBZakUCmES98",
                "nama" => "Lampion Garden (BNS)",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Raya Pandanrejo No.308, Giripurno, Kec. Bumiaji, Kota Batu, Jawa Timur 65332",
                "id" => 15,
                "id_daerah" => 3,
                "link_gmaps" => "https://maps.app.goo.gl/T8qLyeVpWPP4D2Bw9",
                "nama" => "wisatas Alam Taman Dolan",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Bendogerit, Sananwetan, Blitar City, East Java 66133",
                "id" => 16,
                "id_daerah" => 4,
                "link_gmaps" => "https://maps.app.goo.gl/sQcBjHc7hwDJZvTKA",
                "nama" => "Blitar Green Park",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Merdeka, Kepanjen Lor, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66117",
                "id" => 17,
                "id_daerah" => 4,
                "link_gmaps" => "https://maps.app.goo.gl/CjGfUYiwucy6GDKF6",
                "nama" => "Taman Pecut Kota Blitar",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Diponegoro No.12, Bendogerit, Kec. Sananwetan, Kota Blitar, Jawa Timur 66133",
                "id" => 18,
                "id_daerah" => 4,
                "link_gmaps" => "https://maps.app.goo.gl/p3m3F8Q4mZbLYs9C6",
                "nama" => "Taman Kebon Rojo",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Sudanco Supriyadi, Bendogerit, Kec. Sananwetan, Kota Blitar, Jawa Timur 66133",
                "id" => 19,
                "id_daerah" => 4,
                "link_gmaps" => "https://maps.app.goo.gl/UkoWxuCsCDT3EtdM7",
                "nama" => "Monumen PETA",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Jenderal Sudirman No.16, Kepanjen Lor, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66112",
                "id" => 20,
                "id_daerah" => 4,
                "link_gmaps" => "https://maps.app.goo.gl/P45BFN7SyKFVaQrx5",
                "nama" => "Bongares wisatas 3D Blitar",
                "rating" => "3.9",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 2 of wisatas (IDs: 21-40)
        $wisatas = [
            [
                "alamat" =>
                    "Taman rejekwesi, Jl. Rajekwesi, Ledok Kulon Dua, Jetak, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115",
                "id" => 21,
                "id_daerah" => 5,
                "link_gmaps" => "https://maps.app.goo.gl/WtvoMYbhQjGxoS4r5",
                "nama" => "Taman Rajekwesi",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. MH. Thamrin No.109-113, Ledok Kulon Tiga, Ledok Wetan, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62113",
                "id" => 22,
                "id_daerah" => 5,
                "link_gmaps" => "https://maps.app.goo.gl/WHhehF1BVvRKxfE99",
                "nama" => "MALIOGORO",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Veteran No.20, Jambean, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115",
                "id" => 23,
                "id_daerah" => 5,
                "link_gmaps" => "https://maps.app.goo.gl/4b8o1rWnU2j8g1ka9",
                "nama" => "GoFun Bojonegoro",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Ngembul, Sendangharjo, Ngasem, Bojonegoro Regency, East Java 62171",
                "id" => 24,
                "id_daerah" => 5,
                "link_gmaps" => "https://maps.app.goo.gl/cSZjebhUFwqD5fJ97",
                "nama" => "wisatas Kayangan Api",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Teuku Umar, Kepatihan, Kadipaten, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62111",
                "id" => 25,
                "id_daerah" => 5,
                "link_gmaps" => "https://maps.app.goo.gl/8s5DUsJu6oroEU3bA",
                "nama" => "Taman Lokomotif Diesel Fried Krupp D30133",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "4R2H+867, Purnama, Sekarputih, Kec. Tegalampel, Kabupaten Bondowoso, Jawa Timur 68291",
                "id" => 26,
                "id_daerah" => 6,
                "link_gmaps" => "https://maps.app.goo.gl/jmuJowxyQXjno6Rs6",
                "nama" => "wisatas Religi Makam Ki Ronggo",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "3RPF+P2W, Kauman, Kotakulon, Bondowoso, Bondowoso Regency, East Java 68211",
                "id" => 27,
                "id_daerah" => 6,
                "link_gmaps" => "https://maps.app.goo.gl/st4DfbohJ2VFiU2w9",
                "nama" => "Alun Alun Bondowoso",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "3Q6Q+WM2, Krajan, Pakuwesi, Kec. Curah Dami, Kabupaten Bondowoso, Jawa Timur 68251",
                "id" => 28,
                "id_daerah" => 6,
                "link_gmaps" => "https://maps.app.goo.gl/KxFkzYJrx9F1jfGA8",
                "nama" => "Taman Beringin Asri",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "2R93+9C2, Pasnan, Taman, Kec. Grujugan, Kabupaten Bondowoso, Jawa Timur 68261",
                "id" => 29,
                "id_daerah" => 6,
                "link_gmaps" => "https://maps.app.goo.gl/EkCpSzABnBsqfQLF8",
                "nama" => "Pemandian Tasnan",
                "rating" => "4.0",
            ],
            [
                "alamat" =>
                    "3RVW+VR2, Area Sawah/Kebun, Pejaten, Bondowoso, Bondowoso Regency, East Java 68218",
                "id" => 30,
                "id_daerah" => 6,
                "link_gmaps" => "https://maps.app.goo.gl/qCwNd6EL8obed8xu7",
                "nama" => "wisatas Agro Tanian Lanjheng",
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "RJVM+7JP, Jarangkuwung, Ngipik, Kec. Gresik, Kabupaten Gresik, Jawa Timur 61151",
                "id" => 31,
                "id_daerah" => 7,
                "link_gmaps" => "https://maps.app.goo.gl/ty9LY2tNCeqpuB7c8",
                "nama" => "Telaga Ngipik",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Qomaruddin No.26, Setingi, Randuagung, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61121",
                "id" => 32,
                "id_daerah" => 7,
                "link_gmaps" => "https://maps.app.goo.gl/xaAdut8CXUCqgPnbA",
                "nama" => "Bukit Awan Water Park",
                "rating" => "3.4",
            ],
            [
                "alamat" =>
                    "RJJJ+63R, Jl. Kedanyang - Gresik No.4, Pedukuhan, Kebomas, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61124",
                "id" => 33,
                "id_daerah" => 7,
                "link_gmaps" => "https://maps.app.goo.gl/WwqvEm4zWSEGeFzF7",
                "nama" => "wisatas Religi Sunan Giri",
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "Jalan Ponganganrejo No. 34, Suci, Manyar, Suci, Kec. Gresik, Kabupaten Gresik, Jawa Timur 61151",
                "id" => 34,
                "id_daerah" => 7,
                "link_gmaps" => "https://maps.app.goo.gl/MxbgHoHcjDV4hGzk7",
                "nama" => "Gunung Kapur Suci",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Sunan Giri XIII, Pedukuhan, Kebomas, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61124",
                "id" => 35,
                "id_daerah" => 7,
                "link_gmaps" => "https://maps.app.goo.gl/ypvRFYL8HU6Sbhcu6",
                "nama" => "Situs Giri Kedaton & Makam Raden Supeno",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Ambulu - Watu Ulo, Sido Mulyo, Sumberrejo, Kec. Ambulu, Kabupaten Jember, Jawa Timur 68162",
                "id" => 36,
                "id_daerah" => 8,
                "link_gmaps" => "https://maps.app.goo.gl/c7D8LLDpmLuaDt936",
                "nama" => "Teluk Love",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Kaliwates, Jl. PB Sudirman, Kp. Using, Jemberlor, Kec. Patrang, Kabupaten Jember, Jawa Timur 68131",
                "id" => 37,
                "id_daerah" => 8,
                "link_gmaps" => "https://maps.app.goo.gl/ppatHm9iyNxa6c2L6",
                "nama" => "Alun-Alun Jember",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Mujahir, Krajan, Sukorambi, Kec. Sukorambi, Kabupaten Jember, Jawa Timur 68151",
                "id" => 38,
                "id_daerah" => 8,
                "link_gmaps" => "https://maps.app.goo.gl/MVo2gvRBcBBpjvrr5",
                "nama" => "Sukorambi Botanical Garden",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. DR. Wahidin, Kelurahan Jember Kidu, Jember Kidul, Kec. Kaliwates, Kabupaten Jember, Jawa Timur",
                "id" => 39,
                "id_daerah" => 8,
                "link_gmaps" => "https://maps.app.goo.gl/UxL2BmdFnS4DZeuA6",
                "nama" => 'Menara Air \" Hindia Belanda \" Pasar Tanjung',
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "WP6R+GHC, Duplang, Kamal, Kec. Arjasa, Kabupaten Jember, Jawa Timur 68191",
                "id" => 40,
                "id_daerah" => 8,
                "link_gmaps" => "https://maps.app.goo.gl/9RCTrib5aa4noH5s8",
                "nama" => "Situs DuplangKamal",
                "rating" => "4.4",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 3 of wisatas (IDs: 41-60)
        $wisatas = [
            [
                "alamat" =>
                    "Jalan Buyut Nodi No.99, Waru, Made, Kec. Kudu, Kabupaten Jombang, Jawa Timur 61454",
                "id" => 41,
                "id_daerah" => 9,
                "link_gmaps" => "https://maps.app.goo.gl/9nrNC1fanxW91NYZA",
                "nama" => "Sendang Made",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Kepanjen, Jombang, Jombang Regency, East Java 61419",
                "id" => 42,
                "id_daerah" => 9,
                "link_gmaps" => "https://maps.app.goo.gl/1hE9vxK1WK6TZYJQA",
                "nama" => "Kebon Rojo Park",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Area Sawah/Kebun, Wonokerto, Kec. Wonosalam, Kabupaten Jombang, Jawa Timur 61476",
                "id" => 43,
                "id_daerah" => 9,
                "link_gmaps" => "https://maps.app.goo.gl/DdHy11SorzgBe3sq9",
                "nama" => "Air Terjun Sekelip Wonosalam",
                "rating" => "3.8",
            ],
            [
                "alamat" =>
                    "F777+24Q, Keplaksari, Peterongan, Nglungge, Keplaksari, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61481",
                "id" => 44,
                "id_daerah" => 9,
                "link_gmaps" => "https://maps.app.goo.gl/nQAdDVy1EfSULe8j8",
                "nama" => "Taman Kebon Ratu",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Area Sawah/Kebun, Jenisgelaran, Bareng, Jombang Regency, East Java 61474",
                "id" => 45,
                "id_daerah" => 9,
                "link_gmaps" => "https://maps.app.goo.gl/mFHUsnysVoAJZ4x48",
                "nama" => "Air terjun gerenjeng",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "52Q3+PJ9, Jl. Veteran, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112",
                "id" => 46,
                "id_daerah" => 10,
                "link_gmaps" => "https://maps.app.goo.gl/k9zuWR1arSrNWVTGA",
                "nama" => "Taman Sekartaji Kota Kediri",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "52JH+PVW, Banjaran, Kota, Kediri Regency, East Java 64129",
                "id" => 47,
                "id_daerah" => 10,
                "link_gmaps" => "https://maps.app.goo.gl/YqLaHxvwYF3LZ29z7",
                "nama" => "Taman Hutan Joyoboyo Kediri",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Raya Kediri - Plosoklaten No.163, Dadapan, Sukorejo, Kec. Ngasem, Kabupaten Kediri, Jawa Timur 64182",
                "id" => 48,
                "id_daerah" => 10,
                "link_gmaps" => "https://maps.app.goo.gl/M4esk6HKq1Fyunw16",
                "nama" => "TAMAN HIJAU SLG",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "5XVF+43F, Pojok, Mojoroto, Kediri Regency, East Java 64115",
                "id" => 49,
                "id_daerah" => 10,
                "link_gmaps" => "https://maps.app.goo.gl/hZWtS869iTQiVqYVA",
                "nama" => "Goa Selomangleng",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "5XRG+59R, Jl. Selomangleng, Pojok, Kec. Mojoroto, Kota Kediri, Jawa Timur 64115",
                "id" => 50,
                "id_daerah" => 10,
                "link_gmaps" => "https://maps.app.goo.gl/dzz5SqVUeSNjxoJaA",
                "nama" => "Sun Flower Park Kediri",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Raya Paciran, Paciran, Kec. Paciran, Kabupaten Lamongan, Jawa Timur 62276",
                "id" => 51,
                "id_daerah" => 11,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77c3505a57d187:0x1eb952764236c3c8",
                "nama" => "WBL",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "JL. Raya, Paciran, Kec. Paciran, Kabupaten Lamongan, Jawa Timur 62264",
                "id" => 52,
                "id_daerah" => 11,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77c269574a4f6b:0x51f14da4d9d4dd1",
                "nama" => "Maharani Zoo",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Kentong, Labuhan, Kec. Brondong, Kabupaten Lamongan, Jawa Timur 62263",
                "id" => 53,
                "id_daerah" => 11,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77bf07c8fc3dcd:0x9435c55230ef503d",
                "nama" => "Pantai Kutang",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Raya Paciran, Paciran, Kec. Paciran, Kabupaten Lamongan, Jawa Timur 62264",
                "id" => 54,
                "id_daerah" => 11,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77c2400e695c8f:0xd30a4707034bb0c",
                "nama" => "Tanjung Kodok",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Drajat, Paciran, Lamongan Regency, East Java 62264",
                "id" => 55,
                "id_daerah" => 11,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77e829c1b8c3dd:0x51cfb882d93698dc",
                "nama" => "Makam Sunan Drajat",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jalan Tumpak Sewu, Besukcukit, Sidomulyo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374",
                "id" => 56,
                "id_daerah" => 12,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd614085869da41:0x4a94cc5f06772982",
                "nama" => "Tumpak Sewu",
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "Argosari, Senduro, Nganjir, Sariwani, Kec. Sukapura, Kabupaten Lumajang, Jawa Timur 67254",
                "id" => 57,
                "id_daerah" => 12,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd647e555555555:0x5cf5334088ce710e",
                "nama" => "Puncak B29",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Unnamed Road, Krajan Dua, Selok Awar Awar, Kec. Pasirian, Kabupaten Lumajang, Jawa Timur 67372",
                "id" => 58,
                "id_daerah" => 12,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd66fcd1ae79b8f:0xeb11a019351085d4",
                "nama" => "Watu Pecak",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Purworejo, Senduro, Pancen, Purworejo, Kec. Lumajang, Kabupaten Lumajang, Jawa Timur 67361",
                "id" => 59,
                "id_daerah" => 12,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd64280dbe9bdc3:0xea824b7ba626bafc",
                "nama" => "Selokambang",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "QWGP+8F2, Mulyoarjo, Pronojiwo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374",
                "id" => 60,
                "id_daerah" => 12,
                "link_gmaps" =>
                    "https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd614708a8a9a37:0xe43ba62d46777f16",
                "nama" => "Kapas Biru",
                "rating" => "4.7",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 4 of wisatas (IDs: 61-80)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Pahlawan No.31, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63121",
                "id" => 61,
                "id_daerah" => 13,
                "link_gmaps" => "https://maps.app.goo.gl/wyxr2edFggxajtvM6",
                "nama" => "Malioboro Madiun",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Rimbakaya, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63117",
                "id" => 62,
                "id_daerah" => 13,
                "link_gmaps" => "https://maps.app.goo.gl/HBZsrVBHdCjiwDaW7",
                "nama" => "Taman Trembesi Kota Madiun",
                "rating" => "4.3",
            ],
            [
                "alamat" => "Taman, Madiun City, East Java",
                "id" => 63,
                "id_daerah" => 13,
                "link_gmaps" => "https://maps.app.goo.gl/c8BPpApQku5SmjRN9",
                "nama" => "Ngrowo Bening Edu Park Kota Madiun",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Perintis Kemerdekaan, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63121",
                "id" => 64,
                "id_daerah" => 13,
                "link_gmaps" => "https://maps.app.goo.gl/zDvGS7waRWsfymtK9",
                "nama" => "Patung Merlion",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. A. Yani No.69, Pangongangan, Kec. Manguharjo, Kota Madiun, Jawa Timur 63121",
                "id" => 65,
                "id_daerah" => 13,
                "link_gmaps" => "https://maps.app.goo.gl/6Mv6HC3RAwHMD8uJ9",
                "nama" => "Taman Bantaran Kota Madiun",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Menggolo, Truneng, Kec. Sukomoro, Kabupaten Magetan, Jawa Timur 63391",
                "id" => 66,
                "id_daerah" => 14,
                "link_gmaps" => "https://maps.app.goo.gl/CAheZWYRNJfxd3rz8",
                "nama" => "Agrotourism Magetan Green Garden",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Raya Sarangan, Plaosan II, Plaosan, Kec. Plaosan, Kabupaten Magetan, Jawa Timur 63361",
                "id" => 67,
                "id_daerah" => 14,
                "link_gmaps" => "https://maps.app.goo.gl/aNAv2ubZc9gXxBXaA",
                "nama" => "KRM",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Genilangit, Poncol, Magetan Regency, East Java 63362",
                "id" => 68,
                "id_daerah" => 14,
                "link_gmaps" => "https://maps.app.goo.gl/7GEJEAbdsRKDckBS9",
                "nama" => "Geni Langit",
                "rating" => "4.5",
            ],
            [
                "alamat" => "Janggan, Poncol, Magetan Regency, East Java 63362",
                "id" => 69,
                "id_daerah" => 14,
                "link_gmaps" => "https://maps.app.goo.gl/8PAwKS2WVpniwMbY8",
                "nama" => "Ujung Kulon Janggan",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Sarangan, Plaosan, Kali Jumok, Sarangan, Magetan, Kabupaten Magetan, Jawa Timur 63361",
                "id" => 70,
                "id_daerah" => 14,
                "link_gmaps" => "https://maps.app.goo.gl/GuQt9MGMCZdgWGez7",
                "nama" => "Mojosemi",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Graha Kencana Raya Jl. Raya Karanglo No.66, Karanglo, Balearjosari, Kec. Blimbing, Kota Malang, Jawa Timur 65126",
                "id" => 71,
                "id_daerah" => 15,
                "link_gmaps" => "https://maps.app.goo.gl/gKadvDEJDCn56zJ48",
                "nama" => "Malang Night Paradise",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119",
                "id" => 72,
                "id_daerah" => 15,
                "link_gmaps" => "https://maps.app.goo.gl/PLPnFTqKxcmM1sHf8",
                "nama" => "Alun Alun Malang",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jalan Jakarta Oro-oro Dowo, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65113",
                "id" => 73,
                "id_daerah" => 15,
                "link_gmaps" => "https://maps.app.goo.gl/hxJJyZFFZyBGdEgn6",
                "nama" => "Taman Kunang Kunang",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Jaksa Agung Suprapto, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65112",
                "id" => 74,
                "id_daerah" => 15,
                "link_gmaps" => "https://maps.app.goo.gl/vz9pGoGtbNafPXxKA",
                "nama" => "White Kampung Malang Travel",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "wendit utara Rt 4 Rw 8 Desa Mangliawan. kec. Pakis Kab Malang. Kp, Krajan, Mangliawan, Kec. Pakis, Kabupaten Malang, Jawa Timur 65154",
                "id" => 75,
                "id_daerah" => 15,
                "link_gmaps" => "https://maps.app.goo.gl/NWBmohhD39gMm3Kf7",
                "nama" => "Mata Air Wendit Lanang",
                "rating" => "4.3",
            ],
            [
                "alamat" => "Mergelo, Magersari, Mojokerto City, East Java",
                "id" => 76,
                "id_daerah" => 16,
                "link_gmaps" => "https://maps.app.goo.gl/Rc4HBB7nzM15AZDEA",
                "nama" => "Alun-Alun Kota Mojokerto",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "No., Jl. Mager Sari-Ngares Kidul No.14, Lorsari, Mlirip, Kec. Jetis, Kabupaten Mojokerto, Jawa Timur 61352",
                "id" => 77,
                "id_daerah" => 16,
                "link_gmaps" => "https://maps.app.goo.gl/8DEzXEgz7KpEAPsw8",
                "nama" => "Taman Brantas Indah",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "GCRQ+M3J, Jl. Hayam Wuruk, Mergelo, Magersari, Kec. Magersari, Kota Mojokerto, Jawa Timur 61318",
                "id" => 78,
                "id_daerah" => 16,
                "link_gmaps" => "https://maps.app.goo.gl/9dQLg54fogwrBwPE8",
                "nama" => "Jogging Track Sungai Brantas Mojokerto",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jalan R.A Kartini, Mergelo, Kauman, Kec. Prajurit Kulon, Kota Mojokerto, Jawa Timur 61382",
                "id" => 79,
                "id_daerah" => 16,
                "link_gmaps" => "https://maps.app.goo.gl/JgoT4AkjCYDVtn4i6",
                "nama" => "Museum Gubug Wayang",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. By Pass Mojokerto No.Km. 54, Kedungpring, Jampirogo, Kec. Sooko, Kabupaten Mojokerto, Jawa Timur 61361",
                "id" => 80,
                "id_daerah" => 16,
                "link_gmaps" => "https://maps.app.goo.gl/FRNsbt1Gvn4McF3b6",
                "nama" => "Waterland Park",
                "rating" => "4.1",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 5 of wisatas (IDs: 81-100)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Anjuk Ladang Lapak No.12, Ploso, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64417",
                "id" => 81,
                "id_daerah" => 17,
                "link_gmaps" => "https://maps.app.goo.gl/1TGf6ji12tehVNcA6",
                "nama" => "Anjuk Ladang Recreation Park",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Brantas, Babadan, Werungotok, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419",
                "id" => 82,
                "id_daerah" => 17,
                "link_gmaps" => "https://maps.app.goo.gl/t3EekXiW4fcmtQg37",
                "nama" => "Taman Kota Pandan Wilis",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Barito, Begadung Barat, Begadung, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64412",
                "id" => 83,
                "id_daerah" => 17,
                "link_gmaps" => "https://maps.app.goo.gl/LGKJ7wMDSoUVMnu29",
                "nama" => "Pintar Park",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Ahmad Yani No.246, Payaman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64418",
                "id" => 84,
                "id_daerah" => 17,
                "link_gmaps" => "https://maps.app.goo.gl/8vgHAjVu3dBLdWAXA",
                "nama" => "TAMAN NYAWIJI",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Terminal Bus anjuk ladang, Jalan Gatot Subroto Ringin Anom Ringin Anom Kauman (timur, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411",
                "id" => 85,
                "id_daerah" => 17,
                "link_gmaps" => "https://maps.app.goo.gl/6rJni6MBEG3Ts21Y9",
                "nama" => "Anjuk Ladang Museum",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Kerek, Margomulyo, Ngawi, Ngawi Regency, East Java 63217",
                "id" => 86,
                "id_daerah" => 18,
                "link_gmaps" => "https://maps.app.goo.gl/Gp2s7iWffD73m8iQ7",
                "nama" => "Tugu Kartonyono Ngawi",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Bojonegoro - Ngawi, Kerek, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63218",
                "id" => 87,
                "id_daerah" => 18,
                "link_gmaps" => "https://maps.app.goo.gl/gKWXAfnKzWdHsrHb8",
                "nama" => "Taman wisatas Bukit Kerek",
                "rating" => "3.9",
            ],
            [
                "alamat" =>
                    "Jln. taman candi, RT.01/RW.01, Ketanggi, Kartoharjo, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63251",
                "id" => 88,
                "id_daerah" => 18,
                "link_gmaps" => "https://maps.app.goo.gl/GRNdCYr3RxmG6dtZA",
                "nama" => "Taman Candi Ngawi",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Untung Suropati No.II, Pelem II, Pelem, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211",
                "id" => 89,
                "id_daerah" => 18,
                "link_gmaps" => "https://maps.app.goo.gl/p54xexnSgZAZp6PG9",
                "nama" => "Fort van den Bosch",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Raya Ngawi-Madiun No.KM. 7, Sambi, Tempuran, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63253",
                "id" => 90,
                "id_daerah" => 18,
                "link_gmaps" => "https://maps.app.goo.gl/qfQs9cSspCAeZKLcA",
                "nama" => "Taman wisatas Tirtonirmolo Waterpark",
                "rating" => "3.9",
            ],
            [
                "alamat" =>
                    "Teleng ria, Balong, Sidoharjo, Kec. Pacitan, Kabupaten Pacitan, Jawa Timur 63514",
                "id" => 91,
                "id_daerah" => 19,
                "link_gmaps" => "https://maps.app.goo.gl/9WRkmHrsCLBs9DgM7",
                "nama" => "PARAI TELENGRIA",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Krajan, Dadapan, Pringkuku, Pacitan Regency, East Java 63552",
                "id" => 92,
                "id_daerah" => 19,
                "link_gmaps" => "https://maps.app.goo.gl/iFvRWUDHnYKhgJWC6",
                "nama" => "Sentono Gentong Pacitan",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Temon, Ploso, Pacitan, Pacitan Regency, East Java 60253",
                "id" => 93,
                "id_daerah" => 19,
                "link_gmaps" => "https://maps.app.goo.gl/TsU1KM7Qrgy5Ef2j7",
                "nama" => "Taman Pancer Door",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Sugiyo Pranoto No.1, RT.1/RW.01, Krajan, Kec. Pacitan, Kabupaten Pacitan, Jawa Timur 63511",
                "id" => 94,
                "id_daerah" => 19,
                "link_gmaps" => "https://maps.app.goo.gl/SsRDRFWYvsweApbX6",
                "nama" => "Alun-Alun Pacitan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jati, Purworejo, Pacitan, Pacitan Regency, East Java 63518",
                "id" => 95,
                "id_daerah" => 19,
                "link_gmaps" => "https://maps.app.goo.gl/B4CrwdgSMC2nGRgD6",
                "nama" => "PEMANDIAN AIR HANGAT (TIRTO CEMAWUK))",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Rw. 03, Barurambat Kota, Pamekasan, Pamekasan Regency, East Java 69317",
                "id" => 96,
                "id_daerah" => 20,
                "link_gmaps" => "https://maps.app.goo.gl/xV9nV3p956b2Jymp9",
                "nama" => "Arek Lancor Pamekasan",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Asemanis Satu, Larangan Tokol, Kec. Tlanakan, Kabupaten Pamekasan, Jawa Timur 69371",
                "id" => 97,
                "id_daerah" => 20,
                "link_gmaps" => "https://maps.app.goo.gl/G4Bjdyeh2to2AZ5p8",
                "nama" => "wisatas Api Abadi",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Mesigit, Rw. 03, Barurambat Kota, Kec. Pamekasan, Kabupaten Pamekasan, Jawa Timur 69317",
                "id" => 98,
                "id_daerah" => 20,
                "link_gmaps" => "https://maps.app.goo.gl/kdzrxoJiRwRqEfcr8",
                "nama" => "Alun Alun Pamekasan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Sersan Mesrul, Gladak Anyar, Kec. Pamekasan, Kabupaten Pamekasan, Jawa Timur 69317",
                "id" => 99,
                "id_daerah" => 20,
                "link_gmaps" => "https://maps.app.goo.gl/HwxP1rDHvqm8foDK7",
                "nama" => "Taman Gladak Anyar",
                "rating" => "4.0",
            ],
            [
                "alamat" =>
                    "Toron Semalem, Blumbungan, Kec. Larangan, Kabupaten Pamekasan, Jawa Timur 69383",
                "id" => 100,
                "id_daerah" => 20,
                "link_gmaps" => "https://maps.app.goo.gl/ApNC6yXs7q8D7iHB7",
                "nama" => "Kampoeng Toron Samalem",
                "rating" => "4.2",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 6 of wisatas (IDs: 101-120)
        $wisatas = [
            [
                "alamat" =>
                    "Rangge Timur, Ranggeh, Kec. Gondang Wetan, Pasuruan, Jawa Timur 67174",
                "id" => 101,
                "id_daerah" => 21,
                "link_gmaps" => "https://maps.app.goo.gl/tgs8Gw2Y2Nzkh4G8A",
                "nama" => "Taman Ria Suropati",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Banyubiru Kidul, Sumber Rejo, Kec. Winongan, Pasuruan, Jawa Timur 67182",
                "id" => 102,
                "id_daerah" => 21,
                "link_gmaps" => "https://maps.app.goo.gl/Ug5mYDUyG8iP4yj38",
                "nama" => "wisatas Alam Banyubiru",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Dokter Wahidin Sudiro Husodo, Pekuncen, Kec. Panggungrejo, Kota Pasuruan, Jawa Timur 67126",
                "id" => 103,
                "id_daerah" => 21,
                "link_gmaps" => "https://maps.app.goo.gl/A9M1ehe15gUPCJyA6",
                "nama" => "Taman Pekuncen",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Raya Tulang, Ledug, Kec. Prigen, Pasuruan, Jawa Timur 67157",
                "id" => 104,
                "id_daerah" => 21,
                "link_gmaps" => "https://maps.app.goo.gl/Eg8mDZPnFmnFh89c6",
                "nama" => "Ngopibareng Pintulangit",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Soekarno Hatta No.81-91, Bangunsari, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63411",
                "id" => 105,
                "id_daerah" => 22,
                "link_gmaps" => "https://maps.app.goo.gl/WMQGLQ5aC48ZADk28",
                "nama" => "MALIOBORO PONOROGO",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Ki Ageng Kutu No.1c, Tonatan, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63418",
                "id" => 106,
                "id_daerah" => 22,
                "link_gmaps" => "https://maps.app.goo.gl/DWBy7vQuEtmLZT9h6",
                "nama" => "Taman Kota Ponorogo Jeruksing",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Briket, Gondowido, Kec. Ngebel, Kabupaten Ponorogo, Jawa Timur 63493",
                "id" => 107,
                "id_daerah" => 22,
                "link_gmaps" => "https://maps.app.goo.gl/qs4TWrfSnLYYvAzJ9",
                "nama" => "Telaga Ngebel Ponorogo",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Taman wisatas Ngembag, Jl. Halim Perdana Kusuma, Ronowijayan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur 63471",
                "id" => 108,
                "id_daerah" => 22,
                "link_gmaps" => "https://maps.app.goo.gl/TsVVuuWYf52d1HyY7",
                "nama" => "Taman wisatas Ngembag",
                "rating" => "3.9",
            ],
            [
                "alamat" =>
                    "Jl. Raya Ngebel No.16, Bentis, Wagir Lor, Kec. Ngebel, Kabupaten Ponorogo, Jawa Timur 63493",
                "id" => 109,
                "id_daerah" => 22,
                "link_gmaps" => "https://maps.app.goo.gl/EfRrLa8jmZEvYSNM7",
                "nama" => "Objek wisatas Telaga Ngebel",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Mangunharjo, Kec. Mayangan, Kota Probolinggo, Jawa Timur",
                "id" => 110,
                "id_daerah" => 23,
                "link_gmaps" => "https://maps.app.goo.gl/mgubTTcrbUmy49c8A",
                "nama" => "Gembok Cinta BJBR",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Sapia, Gili Ketapang, Kec. Sumberasih, Kabupaten Probolinggo, Jawa Timur",
                "id" => 111,
                "id_daerah" => 23,
                "link_gmaps" => "https://maps.app.goo.gl/YYqN5T4n6i5J6f857",
                "nama" => "Pantai Pasir Putih",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jalan Raya Bentar, Karang Anyar, Curahsawo, Kec. Gending, Kabupaten Probolinggo, Jawa Timur 67211",
                "id" => 112,
                "id_daerah" => 23,
                "link_gmaps" => "https://maps.app.goo.gl/TH7XJLgrKe8KstFh9",
                "nama" => "Pantai Bentar",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Basuki Rahmad, Mangunharjo, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67217",
                "id" => 113,
                "id_daerah" => 23,
                "link_gmaps" => "https://maps.app.goo.gl/FUKDFJaprdZHr9s78",
                "nama" => "Taman wisatas Study Lingkungan Kota Probolinggo",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jalan KH Mas Mansyur, Mangunharjo, Sukabumi, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67219",
                "id" => 114,
                "id_daerah" => 23,
                "link_gmaps" => "https://maps.app.goo.gl/qaGHJSTywJK4pbAWA",
                "nama" => "Alun Alun Probolinggo",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Rw. II, Rong Tengah, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216",
                "id" => 115,
                "id_daerah" => 24,
                "link_gmaps" => "https://maps.app.goo.gl/riNwRBWQWEAz5Hkn6",
                "nama" => "Goa Lebar Sampang",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Rw. II, Polagan, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216",
                "id" => 116,
                "id_daerah" => 24,
                "link_gmaps" => "https://maps.app.goo.gl/LeE7dVT7oht4X1NM6",
                "nama" => "Kompleks Makam Ratu Ibu",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Raya Camplong, Kec. Camplong, Kabupaten Sampang, Jawa Timur 69281",
                "id" => 117,
                "id_daerah" => 24,
                "link_gmaps" => "https://maps.app.goo.gl/jxrW8jsh2FtSZ6288",
                "nama" => "Pantai wisatas Camplong ,hotel, Dan Resto",
                "rating" => "4.0",
            ],
            [
                "alamat" =>
                    "Rw. III, Rong Tengah, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216",
                "id" => 118,
                "id_daerah" => 24,
                "link_gmaps" => "https://maps.app.goo.gl/exRVas9p3AdBPvV77",
                "nama" => "Monumen Trunojoyo Sampang",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Rw. I, Rong Tengah, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216",
                "id" => 119,
                "id_daerah" => 24,
                "link_gmaps" => "https://maps.app.goo.gl/RgNZkRB6cGcy5yS16",
                "nama" => "wisatas Alam Gua Lebar",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Jenggolo No.21, Rw1, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212",
                "id" => 120,
                "id_daerah" => 25,
                "link_gmaps" => "https://maps.app.goo.gl/Ev3GW2F982mT82Wr9",
                "nama" => "Monumen Jayandaru",
                "rating" => "4.6",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 7 of wisatas (IDs: 121-140)
        $wisatas = [
            [
                "alamat" =>
                    "Pondokjati, Pagerwojo, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252",
                "id" => 121,
                "id_daerah" => 25,
                "link_gmaps" => "https://maps.app.goo.gl/V7bqALXL1HnroHsS7",
                "nama" => "Taman Abhirama Sidoarjo",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Pahlawan No.1, Rw6, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212",
                "id" => 122,
                "id_daerah" => 25,
                "link_gmaps" => "https://maps.app.goo.gl/dxAe6YhpSPRvCXmF9",
                "nama" => "Suncity Waterpark Sidoarjo",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Sultan Agung No.39, Gajah Timur, Magersari, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212",
                "id" => 123,
                "id_daerah" => 25,
                "link_gmaps" => "https://maps.app.goo.gl/7YuWRSvXmEcd4x8a6",
                "nama" => "Monumen Sidoarjo",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Candipari Kulon, Candipari, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274",
                "id" => 124,
                "id_daerah" => 25,
                "link_gmaps" => "https://maps.app.goo.gl/VFkTfW2ixAWN3W5fA",
                "nama" => "Candi Sumur",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jalan Pantai Pathek, Gelung Selatan, Gelung, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68351",
                "id" => 125,
                "id_daerah" => 26,
                "link_gmaps" => "https://maps.app.goo.gl/kcV3nj3gB8WA4imWA",
                "nama" => "Pantai Pathek Situbondo",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Area Sawah, Olean, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68316",
                "id" => 126,
                "id_daerah" => 26,
                "link_gmaps" => "https://maps.app.goo.gl/2pfxfVaVKExCZAoG7",
                "nama" => "ISTANA BAMBU KK 26 KARANG KENIK",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Pandansari, Pasir Putih, Kec. Bungatan, Kabupaten Situbondo, Jawa Timur 68358",
                "id" => 127,
                "id_daerah" => 26,
                "link_gmaps" => "https://maps.app.goo.gl/SLB4mijg9hA2NRyc9",
                "nama" => "wisatas Bahari Pasir Putih",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Parse, Dawuhan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68311",
                "id" => 128,
                "id_daerah" => 26,
                "link_gmaps" => "https://maps.app.goo.gl/x79w3mac4VnhfQe7A",
                "nama" =>
                    "Patung Merlion Singapore Dawuhan Millenial Garden (DMG)",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Cappore Keluraha, Jl. Bukit Sema, RT.05/RW.03, Capore, Kabupaten Situbondo, Jawa Timur 68321",
                "id" => 129,
                "id_daerah" => 26,
                "link_gmaps" => "https://maps.app.goo.gl/BzHfN9SuJXFMfXLP8",
                "nama" => "Kebun Panglima",
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "Jl. Veteran, Lingkungan Delama, Pajagalan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69416",
                "id" => 130,
                "id_daerah" => 27,
                "link_gmaps" => "https://maps.app.goo.gl/tdwX3KWYTJw9j28j6",
                "nama" => "Alun-Alun Taman Adipura Kota Sumenep",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Labangseng, Kolor, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69417",
                "id" => 131,
                "id_daerah" => 27,
                "link_gmaps" => "https://maps.app.goo.gl/cFzng2tusAiJhfG7A",
                "nama" => "Taman Tajamara",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Saluran Air, Pamolokan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69417",
                "id" => 132,
                "id_daerah" => 27,
                "link_gmaps" => "https://maps.app.goo.gl/basgGREfkKxUXRAm6",
                "nama" => "wisatas Goa Putih",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Dr. Sutomo No.6, Lingkungan Delama, Pajagalan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69416",
                "id" => 133,
                "id_daerah" => 27,
                "link_gmaps" => "https://maps.app.goo.gl/V1CdWPZpEodNx2zDA",
                "nama" => "Museum Keraton Sumenep",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Sergang, Kec. Batuputih, Kabupaten Sumenep, Jawa Timur 69454",
                "id" => 134,
                "id_daerah" => 27,
                "link_gmaps" => "https://maps.app.goo.gl/eg6qupGBPyaXEAZdA",
                "nama" => "Pantai Badur",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Raya Marina Asri, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111",
                "id" => 135,
                "id_daerah" => 28,
                "link_gmaps" => "https://maps.app.goo.gl/SKytivQAXJLackM49",
                "nama" => "Hutan Bambu Keputih Surabaya",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Taman Apsari No.63, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 60271",
                "id" => 136,
                "id_daerah" => 28,
                "link_gmaps" => "https://maps.app.goo.gl/fVudbWDh94GjMVH37",
                "nama" => "Taman Apsari",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Ahmad Yani No.138, Gayungan, Kec. Gayungan, Surabaya, Jawa Timur 60235",
                "id" => 137,
                "id_daerah" => 28,
                "link_gmaps" => "https://maps.app.goo.gl/mHdAzPEvayK6zsSA9",
                "nama" => "Taman Pelangi",
                "rating" => "4.5",
            ],
            [
                "alamat" => "Kenjeran, Kec. Bulak, Surabaya, Jawa Timur 60123",
                "id" => 138,
                "id_daerah" => 28,
                "link_gmaps" => "https://maps.app.goo.gl/JPwEzWuRmyL2Rwd98",
                "nama" => "Taman Air Mancur Pelangi",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Pantai Kenjeran, Kedung Cowek, Kec. Bulak, Surabaya, Jawa Timur 60125",
                "id" => 139,
                "id_daerah" => 28,
                "link_gmaps" => "https://maps.app.goo.gl/8deGfgbcT2cASucX6",
                "nama" => "Taman Suroboyo",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Widoro, Gandusari, Kw. Ladang, Karanganyar, Kec. Gandusari, Kabupaten Trenggalek, Jawa Timur 66372",
                "id" => 140,
                "id_daerah" => 29,
                "link_gmaps" => "https://maps.app.goo.gl/tTehEzinxkjT623D7",
                "nama" => "Bukit Banyon",
                "rating" => "4.3",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 8 of wisatas (IDs: 141-154)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Hayam Wuruk, Area Hutan, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311",
                "id" => 141,
                "id_daerah" => 29,
                "link_gmaps" => "https://maps.app.goo.gl/NB85hcBqyNfE7GsZ9",
                "nama" => "wisatas Hutan Kota Trenggalek",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Ngrandu, Talun, Kendalrejo, Kec. Durenan, Kabupaten Trenggalek, Jawa Timur 66381",
                "id" => 142,
                "id_daerah" => 29,
                "link_gmaps" => "https://maps.app.goo.gl/fsvbVDj2AXabSZas6",
                "nama" => "wisatas Paralayang Gunung Tunggangan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Surodakan, Jonogaran, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311",
                "id" => 143,
                "id_daerah" => 29,
                "link_gmaps" => "https://maps.app.goo.gl/nSXhpeko2BULUVSE9",
                "nama" => "Alun-Alun Kabupaten Trenggalek",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Brigjend Sutran No.3, Ngemplak, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66315",
                "id" => 144,
                "id_daerah" => 29,
                "link_gmaps" => "https://maps.app.goo.gl/x3rVKGByo2FrwTza6",
                "nama" => "Trenggalek Green Park",
                "rating" => "4.3",
            ],
            [
                "alamat" => "Kutorejo, Kec. Tuban, Kabupaten Tuban, Jawa Timur",
                "id" => 145,
                "id_daerah" => 30,
                "link_gmaps" => "https://maps.app.goo.gl/m8E6Xb41pwQCBTjr5",
                "nama" => "wisatas Pantai Boom",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Wire, Gedongombo, Kec. Semanding, Kabupaten Tuban, Jawa Timur 62381",
                "id" => 146,
                "id_daerah" => 30,
                "link_gmaps" => "https://maps.app.goo.gl/sguyWXZwhBZC8pSF9",
                "nama" => "wisatas Religi/Ponpes Perut Bumi",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Gresik No.Km.1, Kepoh, Panyuran, Kec. Palang, Kabupaten Tuban, Jawa Timur 62391",
                "id" => 147,
                "id_daerah" => 30,
                "link_gmaps" => "https://maps.app.goo.gl/f9eaeEmdFSxCujgt5",
                "nama" => "Pantai Kelapa Tuban",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Banyu Langse I, Boto, Kec. Semanding, Kabupaten Tuban, Jawa Timur 62381",
                "id" => 148,
                "id_daerah" => 30,
                "link_gmaps" => "https://maps.app.goo.gl/maTdMr3kBhN2WZnw7",
                "nama" => "Air Terjun Banyulangse",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Semanding, Jarkali, Gedongombo, Kec. Tuban, Kabupaten Tuban, Jawa Timur 62317",
                "id" => 149,
                "id_daerah" => 30,
                "link_gmaps" => "https://maps.app.goo.gl/3ieW69vQHsnaT2HA7",
                "nama" => "Gua Akbar TUBAN",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Panggungrejo, Sembung, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur 66214",
                "id" => 150,
                "id_daerah" => 31,
                "link_gmaps" => "https://maps.app.goo.gl/PBRNtgcdQZXp9ZRn6",
                "nama" => "Taman Kali Ngrowo",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "No Jl. Sultan Agung No.29, Dusun Kedungsingkal, Ketanon, Kec. Kedungwaru, Kabupaten Tulungagung, Jawa Timur 66229",
                "id" => 151,
                "id_daerah" => 31,
                "link_gmaps" => "https://maps.app.goo.gl/4uMaUzjXbJkEtpQd7",
                "nama" => "Taman Hutan Kota Tulungagung",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Area Gn., Tanggung, Kec. Campurdarat, Kabupaten Tulungagung, Jawa Timur 66272",
                "id" => 152,
                "id_daerah" => 31,
                "link_gmaps" => "https://maps.app.goo.gl/CzfXXrqrmo2HCuVz6",
                "nama" => "Gunung Budheg",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Unnamed Road Sumberejo Kulon, Sumberejo Kulon, Kec. Ngunut, Kabupaten Tulungagung, Jawa Timur 66292",
                "id" => 153,
                "id_daerah" => 31,
                "link_gmaps" => "https://maps.app.goo.gl/3bVG8evkLBSCxWep8",
                "nama" => "Mbalong Kawuk",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Area Sawah, Tanen, Kec. Rejotangan, Kabupaten Tulungagung, Jawa Timur 66293",
                "id" => 154,
                "id_daerah" => 31,
                "link_gmaps" => "https://maps.app.goo.gl/11WsScd41tpAfL3B8",
                "nama" => "Wana wisatas Alam Kandung",
                "rating" => "4.1",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 9 of wisatas (IDs: 155-174)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Raya Rejasa, Rejasa, Kec. Madukara, Kab. Banjarnegara, Jawa Tengah 53482",
                "id" => 155,
                "id_daerah" => 32,
                "link_gmaps" => "https://maps.app.goo.gl/KfbQDTq5KEhnjmND9",
                "nama" => "Surya Yudha Park",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Raya Madukara, Kutayasa, Kec. Madukara, Kab. Banjarnegara, Jawa Tengah 53482",
                "id" => 156,
                "id_daerah" => 32,
                "link_gmaps" => "https://maps.app.goo.gl/bu8kzcMffFDf24q78",
                "nama" => "The Pikas Artventure Resort",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Wiradrana, Wiradrana, Majalengka, Kec. Bawang, Kab. Banjarnegara, Jawa Tengah 53471",
                "id" => 157,
                "id_daerah" => 32,
                "link_gmaps" => "https://maps.app.goo.gl/qow1xapErhNb8hzr7",
                "nama" => "Gunung Lanang",
                "rating" => "44",
            ],
            [
                "alamat" =>
                    "Pingit, Gumelem Wetan, Kec. Susukan, Kab. Banjarnegara, Jawa Tengah 53475",
                "id" => 158,
                "id_daerah" => 32,
                "link_gmaps" => "https://maps.app.goo.gl/VdCJViU9u9t1ETmH6",
                "nama" => "Thermal Baths Pingit",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "HQP5+424, Kemiri, Sigaluh, Kemiri, Banjaranegara, Kab. Banjarnegara, Jawa Tengah 53481",
                "id" => 159,
                "id_daerah" => 32,
                "link_gmaps" => "https://maps.app.goo.gl/uhn3SsqT9kTcnoiWA",
                "nama" => "Air Terjun Curug Pitu",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "2WVH+WC9, Jl. Banyuputih - Kedawung, Kedongdong, Kedawung, Kec. Banyuputih, Kabupaten Batang, Jawa Tengah 51271",
                "id" => 160,
                "id_daerah" => 33,
                "link_gmaps" => "https://maps.app.goo.gl/sxaD1MaZiQF5WpeE6",
                "nama" => "Srigunung Hill",
                "rating" => "4.3",
            ],
            [
                "alamat" => "3PVC+85 Kauman, Batang Regency, Central Java",
                "id" => 161,
                "id_daerah" => 33,
                "link_gmaps" => "https://maps.app.goo.gl/DKSNtH8nxij8K3gY8",
                "nama" => "Hutan Kota Rajawali Batang",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "3VHV+8Q3, Jl. Kuripan, Karangsari, Kuripan, Kec. Subah, Kabupaten Batang, Jawa Tengah 51262",
                "id" => 162,
                "id_daerah" => 33,
                "link_gmaps" => "https://maps.app.goo.gl/9tKWvf3uJn4syq3FA",
                "nama" => "Pantai Kuripan",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Sigembok hill top, Jl. Deles Jl. Dieng, Losari, Deles, Kec. Bawang, Kabupaten Batang, Jawa Tengah 51274",
                "id" => 163,
                "id_daerah" => 33,
                "link_gmaps" => "https://maps.app.goo.gl/heGfRwZMt7SKGvecA",
                "nama" => "Sigembok Hill Top",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "4Q6P+6G5, Jl. Pantai Sigandu - Ujungnegoro, Sibango, Depok, Kec. Kandeman, Kabupaten Batang, Jawa Tengah 51261",
                "id" => 164,
                "id_daerah" => 33,
                "link_gmaps" => "https://maps.app.goo.gl/Eq7qhQJFgBv9koRu8",
                "nama" => "Pantai Cemoro Sewu",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "3FV7+3RQ, Juwet, Tempuran, Kec. Blora, Kabupaten Blora, Jawa Tengah 58219",
                "id" => 165,
                "id_daerah" => 34,
                "link_gmaps" => "https://maps.app.goo.gl/Ya6LVMfmpLMea3P77",
                "nama" => "Wisata Waduk Tempuran Blora",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "2CHC+RV8, Jenar, Kedungjenar, Blora, Blora Regency, Central Java 58218",
                "id" => 166,
                "id_daerah" => 34,
                "link_gmaps" => "https://maps.app.goo.gl/NwZdFiFFEZYzMcp86",
                "nama" => "Taman BLORA MUSTIKA",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "2F42+XM6, Sawah, Bangsri, Kec. Jepon, Kabupaten Blora, Jawa Tengah 58261",
                "id" => 167,
                "id_daerah" => 34,
                "link_gmaps" => "https://maps.app.goo.gl/1E1xm22BYBQ9Mjk77",
                "nama" => "NOYO GIMBAL VIEW",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "2CJ7+G9V, Jalan, Kunden, Alun-Alun, Blora, Blora Regency, Central Java 58213",
                "id" => 168,
                "id_daerah" => 34,
                "link_gmaps" => "https://maps.app.goo.gl/wqM7RGMBsjD638o46",
                "nama" => "Ancient Elephant Fossil Replica Blora",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "2CHC+MMF, Jenar, Mlangsen, Blora, Blora Regency, Central Java 58215",
                "id" => 169,
                "id_daerah" => 34,
                "link_gmaps" => "https://maps.app.goo.gl/C33gvMF43HWo5ad2A",
                "nama" => "Tugu Pancasila Blora",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "FJCC+7CP, Area Sawah/Kebun, Kragilan, Kec. Mojosongo, Kabupaten Boyolali, Jawa Tengah 57323",
                "id" => 170,
                "id_daerah" => 35,
                "link_gmaps" => "https://maps.app.goo.gl/h9raCWF36T8xkWPo8",
                "nama" => "Brown Canyon Boyolali",
                "rating" => "3.6",
            ],
            [
                "alamat" =>
                    "Jl. Raya Boyolali-Semarang No.171, Bayanan, Banaran, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57313",
                "id" => 171,
                "id_daerah" => 35,
                "link_gmaps" => "https://maps.app.goo.gl/iDNkXd75MBn4F4Fg6",
                "nama" => "Arjuna Wiwaha Statue",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Tegalwire, Area Sawah/Kebun, Kragilan, Kec. Mojosongo, Kabupaten Boyolali, Jawa Tengah 57323",
                "id" => 172,
                "id_daerah" => 35,
                "link_gmaps" => "https://maps.app.goo.gl/Nm3xifVayht8Kbes7",
                "nama" => "Alun-Alun Lor Boyolali",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "GJ4C+9F2, Jl. Pangeran Diponegoro, Dusun 2, Kebonbimo, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57316",
                "id" => 173,
                "id_daerah" => 35,
                "link_gmaps" => "https://maps.app.goo.gl/EpGffTnCogFA5pWV6",
                "nama" => "Tlatar Water Park",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "FH9Q+J4Q, Jl. Merapi, Dusun 2, Winong, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57315",
                "id" => 174,
                "id_daerah" => 35,
                "link_gmaps" => "https://maps.app.goo.gl/kGKS3FMjVuYMqDAy9",
                "nama" => "Balai Taman Nasional Gunung Merbabu",
                "rating" => "4.6",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 10 of wisatas (IDs: 175-194)
        $wisatas = [
            [
                "alamat" =>
                    "Pandansari, Kaliwlingi, Brebes, Brebes Regency, Central Java 52212",
                "id" => 175,
                "id_daerah" => 36,
                "link_gmaps" => "https://maps.app.goo.gl/ZvmSbJn46knCZhL47",
                "nama" => "Dermaga Taman Mangrove Pandansari",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "428W+44J, Jl. Taman Siswa, Saditan, Brebes, Kec. Brebes, Kabupaten Brebes, Jawa Tengah 52214",
                "id" => 176,
                "id_daerah" => 36,
                "link_gmaps" => "https://maps.app.goo.gl/fAEW1gRNd8J4hZVBA",
                "nama" => "Menara Air Brebes",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Kauman, Brebes, Brebes Regency, Central Java 52212",
                "id" => 177,
                "id_daerah" => 36,
                "link_gmaps" => "https://maps.app.goo.gl/K1QYXhQ7zBiVFkYr5",
                "nama" => "Alun-Alun Brebes",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Malik Ibrahim No.62, Gandasuli, Kec. Brebes, Kabupaten Brebes, Jawa Tengah 52212",
                "id" => 178,
                "id_daerah" => 36,
                "link_gmaps" => "https://maps.app.goo.gl/UT9fHjbrYnnbncU9A",
                "nama" => "Taman Edukasi",
                "rating" => "4.1",
            ],
            [
                "alamat" => "6X3R+VR, Sawojajar, Brebes Regency, Central Java",
                "id" => 179,
                "id_daerah" => 36,
                "link_gmaps" => "https://maps.app.goo.gl/KM1ZS9E87Yg2HsH28",
                "nama" => "Wisata Pulau Cemara Sawojajar Brebes",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "82QM+3V, Cigimbal, Tritih Kulon, Kec. Cilacap Utara, Kabupaten Cilacap, Jawa Tengah",
                "id" => 180,
                "id_daerah" => 37,
                "link_gmaps" => "https://maps.app.goo.gl/PmzmRWYjbC6ojF3B6",
                "nama" => "Wisata Cigimbal Park",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Beji Lor, Tritih Kulon, Cilacap Utara, Cilacap Regency, Central Java 53233",
                "id" => 181,
                "id_daerah" => 37,
                "link_gmaps" => "https://maps.app.goo.gl/ZdNprwKkwY5TBPpR7",
                "nama" => "Wisata Hutan Payau",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Lingkar Timur, Kemiren, Tegalkamulyan, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah",
                "id" => 182,
                "id_daerah" => 37,
                "link_gmaps" => "https://maps.app.goo.gl/nneMCXH6tNPFcfMP7",
                "nama" => "Hutan Cemara Laut",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "728C+FP7, Pantai Tlk. Penyu, Pandanarang, Cilacap, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah",
                "id" => 183,
                "id_daerah" => 37,
                "link_gmaps" => "https://maps.app.goo.gl/FoARH6cmyFzkC3YeA",
                "nama" => "Teluk penyu",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "6XPG+C5R, Cilacap Selatan, Cilacap Regency, Central Java",
                "id" => 184,
                "id_daerah" => 37,
                "link_gmaps" => "https://maps.app.goo.gl/JkrexPGoJttNN1Zw8",
                "nama" => "Kali Kencana Beach",
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "Jl. Raden Sahid No.1, RT.04/RW.01, RW.6, Rw. 3, Botorejo, Kec. Wonosalam, Kabupaten Demak, Jawa Tengah 59571",
                "id" => 185,
                "id_daerah" => 38,
                "link_gmaps" => "https://maps.app.goo.gl/rAYRmZ2jGH83ma2V7",
                "nama" => "Wisata Pemancingan Naladhipa Demak",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "3JXQ+W9R, Rw. 1, Jogoloyo, Kec. Wonosalam, Kabupaten Demak, Jawa Tengah 59571",
                "id" => 186,
                "id_daerah" => 38,
                "link_gmaps" => "https://maps.app.goo.gl/WNRPAPdoE2VzGezbA",
                "nama" => "Panggung Kesenian Tembiring Demak",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Raden Sahid, Kadilangu, Kec. Demak, Kabupaten Demak, Jawa Tengah 59517",
                "id" => 187,
                "id_daerah" => 38,
                "link_gmaps" => "https://maps.app.goo.gl/7bMpBDSCRdGtU6Ee6",
                "nama" => "Tomb of Sunan Kalijaga",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "4J5P+C35, Petengan Selatan, Bintoro, Demak Sub-District, Demak Regency, Central Java 59511",
                "id" => 188,
                "id_daerah" => 38,
                "link_gmaps" => "https://maps.app.goo.gl/S3A5QgdNKK2eqiAZ9",
                "nama" => "Wisata Waterboom Niagara Demak",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Petengan Selatan, Bintoro, Demak Sub-District, Demak Regency, Central Java 59511",
                "id" => 189,
                "id_daerah" => 38,
                "link_gmaps" => "https://maps.app.goo.gl/szAWyAvxLoGxDNrVA",
                "nama" => "Taman Kali Tuntang Lama",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Rw. II, Bandengan, Jepara, Jepara Regency, Central Java 59432",
                "id" => 190,
                "id_daerah" => 39,
                "link_gmaps" => "https://maps.app.goo.gl/oowBN2jasLnBwZKy7",
                "nama" => "Pantai Prawean",
                "rating" => "4.4",
            ],
            [
                "alamat" => "Tegalsambi, Tahunan, Jepara Regency, Central Java",
                "id" => 191,
                "id_daerah" => 39,
                "link_gmaps" => "https://maps.app.goo.gl/nR84UyqWknQGsNdm9",
                "nama" => "Pantai Tegalsambi",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "RT.01/RW.04, Rw. IV, Bulu, Jepara, Jepara Regency, Central Java 59418",
                "id" => 192,
                "id_daerah" => 39,
                "link_gmaps" => "https://maps.app.goo.gl/DR6RxmAa5Q3LjQVu6",
                "nama" => "Pantai Kartini",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "FM78+9R6, Rw. 01, Mororejo, Kec. Mlonggo, Kabupaten Jepara, Jawa Tengah",
                "id" => 193,
                "id_daerah" => 39,
                "link_gmaps" => "https://maps.app.goo.gl/kNXHDtU38ZfNi2Nv8",
                "nama" => "Pantai Pungkruk",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Semat, Platar, Kec. Tahunan, Kabupaten Jepara, Jawa Tengah",
                "id" => 194,
                "id_daerah" => 39,
                "link_gmaps" => "https://maps.app.goo.gl/hKQn1h7MDsajbcfu9",
                "nama" => "Rainbow Adventure Park Jepara",
                "rating" => "3.9",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 11 of wisatas (IDs: 195-214)
        $wisatas = [
            [
                "alamat" =>
                    "WGGQ+GMJ, Jl. Kandangserang Tambakroto, Sawah Dan Kebun, Tambakroto, Kec. Kajen, Kabupaten Pekalongan, Jawa Tengah 51161",
                "id" => 195,
                "id_daerah" => 40,
                "link_gmaps" => "https://maps.app.goo.gl/ne9qHxJxVxSyaeaC9",
                "nama" => "Taman wisata GOA MACAN",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "WH95+W29, Unnamed Road, Kebun, Kutorojo, Kec. Kajen, Kabupaten Pekalongan, Jawa Tengah 51161",
                "id" => 196,
                "id_daerah" => 40,
                "link_gmaps" => "https://maps.app.goo.gl/9uBJ9sbnAmATNEEQ6",
                "nama" => "Bukit Bintang Kutorojo",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "WHMF+73H, Kebun Dan Sawah, Pekiringan Ageng, Kec. Kajen, Kabupaten Pekalongan, Jawa Tengah 51161",
                "id" => 197,
                "id_daerah" => 40,
                "link_gmaps" => "https://maps.app.goo.gl/FtLg8CusK38ixHcA9",
                "nama" => "Kajen City View",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "XHG2+Q8Q, Gumante, Kutorejo, Kajen, Pekalongan Regency, Central Java 51161",
                "id" => 198,
                "id_daerah" => 40,
                "link_gmaps" => "https://maps.app.goo.gl/saUcJF4RWquH3wTw6",
                "nama" => "Brough Jagung",
                "rating" => "5",
            ],
            [
                "alamat" =>
                    "XHFJ+4F8, Nyamok, Kajen, Pekalongan Regency, Central Java 51161",
                "id" => 199,
                "id_daerah" => 40,
                "link_gmaps" => "https://maps.app.goo.gl/akkdmY6fALUM6Q9T7",
                "nama" => "Taman Dadi Kajen",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Lawu, Dompon, Karanganyar, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57711",
                "id" => 200,
                "id_daerah" => 41,
                "link_gmaps" => "https://maps.app.goo.gl/M6xZhJrWM8qNQtoX7",
                "nama" => "Taman Pancasila",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Manjar, Area Sawah, Dawung, Matesih, Karanganyar Regency, Central Java 57781",
                "id" => 201,
                "id_daerah" => 41,
                "link_gmaps" => "https://maps.app.goo.gl/W7kM6bUXxVn6vCyG9",
                "nama" => "Kembang Desa Dawung",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "CWFJ+FJM, Jl. Mangkunegara Bojonegara, Nglande Wetan, Ngijo, Kec. Tasikmadu, Kabupaten Karanganyar, Jawa Tengah 42454",
                "id" => 202,
                "id_daerah" => 41,
                "link_gmaps" => "https://maps.app.goo.gl/gMsEkhtpfPH7TAXw6",
                "nama" => "Sondokoro Agrotourism",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Dawe Mojoroto, Mojoroto, Kec. Mojogedang, Kabupaten Karanganyar, Jawa Tengah 57752",
                "id" => 203,
                "id_daerah" => 41,
                "link_gmaps" => "https://maps.app.goo.gl/PxDxNz4eUX56S5y97",
                "nama" => "Sendang Bejen",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "938F+VPG, Kalongan, Gerdu, Kec. Karangpandan, Kabupaten Karanganyar, Jawa Tengah 57791",
                "id" => 204,
                "id_daerah" => 41,
                "link_gmaps" => "https://maps.app.goo.gl/RcZ3MWtJYiudkALA8",
                "nama" => "Canyons Grojogan Jero",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Krajan, Gemeksekti, Kebumen, Kebumen Regency, Central Java 54317",
                "id" => 205,
                "id_daerah" => 42,
                "link_gmaps" => "https://maps.app.goo.gl/13eRUEjvmcaS9L5H9",
                "nama" => "SUNGAI LUKULO",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "8MF8+G6V, Indrakila, Kebumen, Kebumen Regency, Central Java 54311",
                "id" => 206,
                "id_daerah" => 42,
                "link_gmaps" => "https://maps.app.goo.gl/wFSqvh2a9EeEVJXm8",
                "nama" => "Taman Kota Kebumen",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Pahlawan, Kebumen, Bumirejo, Kec. Kebumen, Kabupaten Kebumen, Jawa Tengah 54311",
                "id" => 207,
                "id_daerah" => 42,
                "link_gmaps" => "https://maps.app.goo.gl/qygQ2oU395BJeTHZ6",
                "nama" => "Alun - Alun Pancasila Kebumen",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Dukuh legok No.Rt01,06, Legok Lor, Pejagoan, Kec. Pejagoan, Kabupaten Kebumen, Jawa Tengah 54361",
                "id" => 208,
                "id_daerah" => 42,
                "link_gmaps" => "https://maps.app.goo.gl/L5oFzgD4n6DuZ3iJ7",
                "nama" => "Kampoeng ETNIK Kebumen",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "8JMR+9MG, Jl. H.M. Sarbini, Jetis, Kutosari, Kec. Pejagoan, Kabupaten Kebumen, Jawa Tengah 54361",
                "id" => 209,
                "id_daerah" => 42,
                "link_gmaps" => "https://maps.app.goo.gl/m6Dtu176563iawzW9",
                "nama" => "Jembatan Tembana",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Stadion Baru, Kersan, Kebondalem, Kec. Kendal, Kabupaten Kendal, Jawa Tengah 51318",
                "id" => 210,
                "id_daerah" => 43,
                "link_gmaps" => "https://maps.app.goo.gl/Tzwp8ET3KtdwfFaD7",
                "nama" => "Chlorophyll Parks Kendal",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Raya Soekarno-Hatta No.193, Patukangan, Pegulon, Kec. Kendal, Kabupaten Kendal, Jawa Tengah 51313",
                "id" => 211,
                "id_daerah" => 43,
                "link_gmaps" => "https://maps.app.goo.gl/doB1yFUd4JUwwRoW7",
                "nama" => "Taman Garuda Kota Kendal",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "36G5+F22, Srendeng, Karang Sari, Kec. Kendal, Kabupaten Kendal, Jawa Tengah 51319",
                "id" => 212,
                "id_daerah" => 43,
                "link_gmaps" => "https://maps.app.goo.gl/b7hjuUtHEiVWdJzL7",
                "nama" => "Taman Gajah Mada",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Krayapan, Purwokerto, Brangsong, Beberan, Purwokerto, Kec. Brangsong, Kabupaten Kendal, Jawa Tengah 51371",
                "id" => 213,
                "id_daerah" => 43,
                "link_gmaps" => "https://maps.app.goo.gl/VYX2TJzVWfh6vwyy7",
                "nama" => "Kali Bladon Kendal",
                "rating" => "3.9",
            ],
            [
                "alamat" =>
                    "Jl. Laut, Tegalan, Pidodo Kulon, Kec. Kendal, Kabupaten Kendal, Jawa Tengah",
                "id" => 214,
                "id_daerah" => 43,
                "link_gmaps" => "https://maps.app.goo.gl/DkqoScjjfawBRzgn6",
                "nama" => "Pantai Muara Kencan",
                "rating" => "3.6",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 12 of wisatas (IDs: 215-234)
        $wisatas = [
            [
                "alamat" =>
                    "Gg. Tidar, Barenglor, Bareng Lor, Kec. Klaten Utara, Kabupaten Klaten, Jawa Tengah 57438",
                "id" => 215,
                "id_daerah" => 44,
                "link_gmaps" => "https://maps.app.goo.gl/tF4gqRSEvkxDFPgv7",
                "nama" => "Taman Lampion Klaten",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "8J93+WGV, Jl. Ki Ageng Gribig, Kwarsa, Gergunung, Kec. Klaten Utara, Kabupaten Klaten, Jawa Tengah 57434",
                "id" => 216,
                "id_daerah" => 44,
                "link_gmaps" => "https://maps.app.goo.gl/2qqLaAWc7i71BPY38",
                "nama" => "Gergunung City Forest",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Rw. Jombor, Waduk Jombor, Krakitan, Kec. Bayat, Kabupaten Klaten, Jawa Tengah 57462",
                "id" => 217,
                "id_daerah" => 44,
                "link_gmaps" => "https://maps.app.goo.gl/MiZHQVzYmWPEortr7",
                "nama" => "Rowo Jombor Klaten",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "7HWV+G6Q, Gayamprit, Klaten Selatan, Klaten Regency, Central Java 57423",
                "id" => 218,
                "id_daerah" => 44,
                "link_gmaps" => "https://maps.app.goo.gl/sAinbKC679Sn4VTL7",
                "nama" => "Kamboja Park",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "6JX9+HVX, Sendang Nglebak, RT.1/RW.19, Nglebak, Krakitan, Kec. Bayat, Kabupaten Klaten, Jawa Tengah 57451",
                "id" => 219,
                "id_daerah" => 44,
                "link_gmaps" => "https://maps.app.goo.gl/vu6mMXAKKcenGCLs8",
                "nama" => "Bukit Sidoguro",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Lkr. Utara No.7, Bacin, Kec. Bae, Kabupaten Kudus, Jawa Tengah 59325",
                "id" => 220,
                "id_daerah" => 45,
                "link_gmaps" => "https://maps.app.goo.gl/FLWiEufC7Fyw2LLf8",
                "nama" => "Oasis Djarum Park",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Sunan Kudus, Pejaten, Langgardalem, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59313",
                "id" => 221,
                "id_daerah" => 45,
                "link_gmaps" => "https://maps.app.goo.gl/omttbhyxSBDrGu8u6",
                "nama" => "Menara Kudus Park",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "5VJ2+R28, Wergu Wetan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59318",
                "id" => 222,
                "id_daerah" => 45,
                "link_gmaps" => "https://maps.app.goo.gl/6WUjfiFo9ybKmsqv6",
                "nama" => "Balai Jagong",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Gor Wergu Wetan, Wergu Wetan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59318",
                "id" => 223,
                "id_daerah" => 45,
                "link_gmaps" => "https://maps.app.goo.gl/sbpe8ka32Z4nzdtn9",
                "nama" => "Krida Wisata Park Kudus",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "5RVR+8H6, Jl. Simpang Tujuh, Kudus, Demaan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59313",
                "id" => 224,
                "id_daerah" => 45,
                "link_gmaps" => "https://maps.app.goo.gl/h8CYfQcVbJUwX5EQ7",
                "nama" => "Kudus Town Square",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Magersari, South Magelang, Magelang City, Central Java 59214",
                "id" => 225,
                "id_daerah" => 46,
                "link_gmaps" => "https://maps.app.goo.gl/kk4RQBmHGMHy6ST27",
                "nama" => "Tidar Hill",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Cemp. No.6, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56122",
                "id" => 226,
                "id_daerah" => 46,
                "link_gmaps" => "https://maps.app.goo.gl/5ZJ32LA9WxXenq4o7",
                "nama" => "TKL Ecopark - Taman Kyai Langgeng ",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "G6F9+73P, Jl. Alun-Alun Utara, Kemirirejo, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56121",
                "id" => 227,
                "id_daerah" => 46,
                "link_gmaps" => "https://maps.app.goo.gl/yS4HTEvnaKbTLvPp6",
                "nama" => "Water Toren - Waterleidingsysteem voor Magêlang",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Area Hutan, Bawang, Tempuran, Magelang Regency, Central Java 56161",
                "id" => 228,
                "id_daerah" => 46,
                "link_gmaps" => "https://maps.app.goo.gl/vfinxGqumRcJwUbQ7",
                "nama" => "Punthuk Mangir Gunung Payung",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "H4P4+CRF, Dadapan, Mangli, Kec. Kaliangkrik, Kabupaten Magelang, Jawa Tengah 56153",
                "id" => 229,
                "id_daerah" => 46,
                "link_gmaps" => "https://maps.app.goo.gl/3ocavfJYxsnx7hF4A",
                "nama" => "Silancur Highland",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jalan Blabak-Keteb No.Km.8, Ngentak, Sawangan, Kec. Sawangan, Kabupaten Magelang, Jawa Tengah 56481",
                "id" => 230,
                "id_daerah" => 47,
                "link_gmaps" => "https://maps.app.goo.gl/R4iuHrQFSJ9CQz6T9",
                "nama" =>
                    "Taman Rekreasi dan Camping Ground Watu Nganten Ngentak",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Kurahan, Karangrejo, Borobudur, Magelang Regency, Central Java 56553",
                "id" => 231,
                "id_daerah" => 47,
                "link_gmaps" => "https://maps.app.goo.gl/w1n2c9fbGcuQ5Fz57",
                "nama" => "Punthuk Setumbu",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "C7C9+QQ7, Jl. Tentara Pelajar No.8, Tejowarno, Tamanagung, Kec. Muntilan, Kabupaten Magelang, Jawa Tengah 56413",
                "id" => 232,
                "id_daerah" => 47,
                "link_gmaps" => "https://maps.app.goo.gl/6QqqpqYvRNvSWbD26",
                "nama" => "Taman Bambu Runcing",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "C672+H3C, Sodongan, RT.17/RW.6, Dusun I, Bumiharjo, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah 56553",
                "id" => 233,
                "id_daerah" => 47,
                "link_gmaps" => "https://maps.app.goo.gl/nQUdMvdoBYE4mvXD8",
                "nama" => "Kampoeng Dolanan Nusantara",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Mayor Kusen, Sumberrejo, Mendut, Kec. Mungkid, Kabupaten Magelang, Jawa Tengah 56501",
                "id" => 234,
                "id_daerah" => 47,
                "link_gmaps" => "https://maps.app.goo.gl/meJopRUHcy5ezL3i6",
                "nama" => "Mendut Buddhist Monastery",
                "rating" => "4.6",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 13 of wisatas (IDs: 235-254)
        $wisatas = [
            [
                "alamat" =>
                    "8X23+RRJ, Area Waduk Gembong, Gembong, Kec. Gembong, Kabupaten Pati, Jawa Tengah 59162",
                "id" => 235,
                "id_daerah" => 48,
                "link_gmaps" => "https://maps.app.goo.gl/z1A1CnZmWJknnsha8",
                "nama" => "Waduk Seloromo",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jrahi, Gunungwungkal, Pati Regency, Central Java 59156",
                "id" => 236,
                "id_daerah" => 48,
                "link_gmaps" => "https://maps.app.goo.gl/wsKF6HGJ8B8Xwg6SA",
                "nama" => "Desa Wisata Pancasila Jrahi",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "G2WX+428, Tambak & Sawah, Banyutowo, Kec. Dukuhseti, Kabupaten Pati, Jawa Tengah 59158",
                "id" => 237,
                "id_daerah" => 48,
                "link_gmaps" => "https://maps.app.goo.gl/72fTrDLF2jj7DrZi9",
                "nama" => "Pantai Idola Banyutowo",
                "rating" => "3.7",
            ],
            [
                "alamat" =>
                    "Area Waduk Gembong, Pohgading, Gembong, Pati Regency, Central Java 59162",
                "id" => 238,
                "id_daerah" => 48,
                "link_gmaps" => "https://maps.app.goo.gl/8e3j6a6pBCDKbcbw7",
                "nama" => "Wisata Waduk Gembong",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "CW3R+Q3G, Unnamed Road, Area Sawah/Perkebunan, Jepalo, Kec. Gunungwungkal, Kabupaten Pati, Jawa Tengah 59156",
                "id" => 239,
                "id_daerah" => 48,
                "link_gmaps" => "https://maps.app.goo.gl/iSKz8suWMVQ5EhdX8",
                "nama" => "Bukit Pengusen",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "4MCF+HW3, Jl. Jatayu, Kauman, Kec. Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51149",
                "id" => 240,
                "id_daerah" => 49,
                "link_gmaps" => "https://maps.app.goo.gl/qj1tdspvchhLUxuC7",
                "nama" => "Jatayu Cultural District",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Pantai Sari No.16, RT.01/RW.10, Panjang Baru, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51141",
                "id" => 241,
                "id_daerah" => 49,
                "link_gmaps" => "https://maps.app.goo.gl/QWwYRkmrpW8ZGE5f7",
                "nama" => "Pantai Sari Pekalongan",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. WR Supratman, Panjang Wetan, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51118",
                "id" => 242,
                "id_daerah" => 49,
                "link_gmaps" => "https://maps.app.goo.gl/2BF75jga7udEdjLGA",
                "nama" => "Pantai Pasir Kencana Pekalongan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "4MRQ+7XQ, Panjang Wetan, Pekalongan Utara, Pekalongan City, Central Java 51141",
                "id" => 243,
                "id_daerah" => 49,
                "link_gmaps" => "https://maps.app.goo.gl/gkKoNGocx83LqcQn8",
                "nama" => "Taman Wisata Laut Pekalongan",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "4M7C+PXG, Pesindon Gg. 2 No.12, Kergon, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51113",
                "id" => 244,
                "id_daerah" => 49,
                "link_gmaps" => "https://maps.app.goo.gl/wkFWYgt3DD6A9or19",
                "nama" => "Kampung wisata batik pesindon",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jalan Dukuh Slarang, Area Sawah / Kebun, Surajaya, Pemalang, Pemalang Regency, Central Java 52318",
                "id" => 245,
                "id_daerah" => 50,
                "link_gmaps" => "https://maps.app.goo.gl/7ZF2noLHa7iPuZVr6",
                "nama" => "Wippas Surajaya",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "49PJ+M4W, Widuri, Pemalang, Pemalang Regency, Central Java 52314",
                "id" => 246,
                "id_daerah" => 50,
                "link_gmaps" => "https://maps.app.goo.gl/jZCDqCwWtxSkjS9x5",
                "nama" => "PANTAI WIDURI",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "49VV+3JX, Area sawah sebelah utara, Area Sawah, Danasari, Kec. Pemalang, Kabupaten Pemalang, Jawa Tengah",
                "id" => 247,
                "id_daerah" => 50,
                "link_gmaps" => "https://maps.app.goo.gl/8N39vHs6TFr4RGd19",
                "nama" => "Pantai Susukan pemalang",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "29WW+R8X, Sawah,Ladang, Penggarit, Kec. Taman, Kabupaten Pemalang, Jawa Tengah 52361",
                "id" => 248,
                "id_daerah" => 50,
                "link_gmaps" => "https://maps.app.goo.gl/5m6nvitkMKi6cbKr6",
                "nama" => "Bukit Teletubies",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Yos Sudarso No.1, Widuri, Kec. Pemalang, Kabupaten Pemalang, Jawa Tengah 52315",
                "id" => 249,
                "id_daerah" => 50,
                "link_gmaps" => "https://maps.app.goo.gl/U52qPzBP2jaJA4x49",
                "nama" => "Thistle Water Park Pemalang",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "Usman Janatin City Park, Jl. Ahmad Yani No.57, Purbalingga Kidul, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53313",
                "id" => 250,
                "id_daerah" => 51,
                "link_gmaps" => "https://maps.app.goo.gl/GZgFJ9K9gJmK2u216",
                "nama" => "Usman Janatin Purbalingga City Park",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "J967+78F, Jl. Jend. Sudirman, Purbalingga, Purbalingga Lor, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53311",
                "id" => 251,
                "id_daerah" => 51,
                "link_gmaps" => "https://maps.app.goo.gl/BrWeykv4nvciT3E19",
                "nama" => "Alun-Alun Purbalingga",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Raya Owabong No.1, Dusun 2, Bojongsari, Kec. Bojongsari, Kabupaten Purbalingga, Jawa Tengah 53362",
                "id" => 252,
                "id_daerah" => 51,
                "link_gmaps" => "https://maps.app.goo.gl/AVusfo1e168yiSGd9",
                "nama" => "Owabong Water Park Purbalingga",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jalan Raya Taman Reptile, Dusun II, Kutasari, Kec. Kutasari, Kabupaten Purbalingga, Jawa Tengah 53361",
                "id" => 253,
                "id_daerah" => 51,
                "link_gmaps" => "https://maps.app.goo.gl/r5wSFYj3Ns71G4WH8",
                "nama" => "Sanggaluri Park Purbalingga",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Dusun II, Dusun II, Patemon, Kec. Bojongsari, Kabupaten Purbalingga, Jawa Tengah 53362",
                "id" => 254,
                "id_daerah" => 51,
                "link_gmaps" => "https://maps.app.goo.gl/NYa2mBDLqbEYi7un6",
                "nama" => "Lembah Silangit Lake",
                "rating" => "4.1",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 14 of wisatas (IDs: 255-274)
        $wisatas = [
            [
                "alamat" =>
                    "Jalan Pemuda Sukoharjo, Sukoharjo, Krangganharjo, Kec. Toroh, Kabupaten Grobogan, Jawa Tengah 58171",
                "id" => 255,
                "id_daerah" => 52,
                "link_gmaps" => "https://maps.app.goo.gl/B1fZsydTo5qWwHwBA",
                "nama" => "Temple Joglo Purwodadi",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "WV7W+277, Jl. Gajah Mada, Area Sawah, Kuripan, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58112",
                "id" => 256,
                "id_daerah" => 52,
                "link_gmaps" => "https://maps.app.goo.gl/decy81aAzWb1w5Nc8",
                "nama" => "Aircraft and Air Travel Master Park",
                "rating" => "3.9",
            ],
            [
                "alamat" =>
                    "WW28+5JJ, Area Sawah, Kalongan, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58114",
                "id" => 257,
                "id_daerah" => 52,
                "link_gmaps" => "https://maps.app.goo.gl/L9VTAHT7iBRjfLPN7",
                "nama" => "Taman Hijau Kota Purwodadi",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Purwodadi,alun alun, Brambangan, Purwodadi, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111",
                "id" => 258,
                "id_daerah" => 52,
                "link_gmaps" => "https://maps.app.goo.gl/95ZeUSXUzUN188Jz9",
                "nama" => "Alun-Alun Purwodadi",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Komplek SPBU Nglejok, Jl. A. Yani No.1, Porong, Kuripan, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111",
                "id" => 259,
                "id_daerah" => 52,
                "link_gmaps" => "https://maps.app.goo.gl/huqUSArsV3a7z5er8",
                "nama" => "Ayodya Bloombang Waterpark",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "Jalan Gerilya Purwokerto Selatan, Windusara, Karangklesem, Kec. Banyumas, Kabupaten Banyumas, Jawa Tengah 53144",
                "id" => 260,
                "id_daerah" => 53,
                "link_gmaps" => "https://maps.app.goo.gl/ufRJpz1YBPBAVLHo9",
                "nama" => "Taman Andhang Pangrenan Purwokerto",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Karang Kobar No.9, Glempang, Bancarkembar, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53115",
                "id" => 261,
                "id_daerah" => 53,
                "link_gmaps" => "https://maps.app.goo.gl/Z3vDQXwM2ZsrJvDVA",
                "nama" => "Mas Kemambang Park",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Kober, Purwokerto Barat, Banyumas Regency, Central Java 53132",
                "id" => 262,
                "id_daerah" => 53,
                "link_gmaps" => "https://maps.app.goo.gl/9LkFxgFCcKNTChec7",
                "nama" => "TAMAN KERETA API PURWOKERTO",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Kebontebu, Berkoh, Purwokerto Selatan, Banyumas Regency, Central Java 53146",
                "id" => 263,
                "id_daerah" => 53,
                "link_gmaps" => "https://maps.app.goo.gl/QRgg3A1dRF4BhkL79",
                "nama" => "Satria Park Purwokerto",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Bung Karno, Kalibener, Kedungwuluh, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah",
                "id" => 264,
                "id_daerah" => 53,
                "link_gmaps" => "https://maps.app.goo.gl/T2okKuASPMSoZz28A",
                "nama" => "Menara Pandang Teratai",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "72XG+86X, Gamlok, Baledono, Kec. Purworejo, Kabupaten Purworejo, Jawa Tengah 54118",
                "id" => 265,
                "id_daerah" => 54,
                "link_gmaps" => "https://maps.app.goo.gl/3FQELyejyZJ8YJNT9",
                "nama" => "Taman Kota Geger Menjangan Purworejo",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "822J+77G, Kedung Dowu Kulon, Trirejo, Kec. Loano, Kabupaten Purworejo, Jawa Tengah 54181",
                "id" => 266,
                "id_daerah" => 54,
                "link_gmaps" => "https://maps.app.goo.gl/1YUTmP6cRRo5CbYf9",
                "nama" => "Geger Menjangan",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Proklamasi, Purworejo, Kec. Purworejo, Kabupaten Purworejo, Jawa Tengah 54151",
                "id" => 267,
                "id_daerah" => 54,
                "link_gmaps" => "https://maps.app.goo.gl/pdUo9hJZbfepB4Vs6",
                "nama" => "Alun-alun Kota Purworejo",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "72J4+884, Gg. Krajan, Krajan, Pangenjurutengah, Kec. Purworejo, Kabupaten Purworejo, Jawa Tengah 54114",
                "id" => 268,
                "id_daerah" => 54,
                "link_gmaps" => "https://maps.app.goo.gl/sGristBEi2qzno8z5",
                "nama" => "Monumen Tentara Pelajar",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "7295+5XF, Rw. 03, Pangenrejo, Kec. Purworejo, Kabupaten Purworejo, Jawa Tengah 54115",
                "id" => 269,
                "id_daerah" => 54,
                "link_gmaps" => "https://maps.app.goo.gl/PUwAKdix1BLmVnpB7",
                "nama" => "Wisata Bogowonto",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Rembangan, Tasikagung, Kec. Rembang, Kabupaten Rembang, Jawa Tengah 59212",
                "id" => 270,
                "id_daerah" => 55,
                "link_gmaps" => "https://maps.app.goo.gl/yjeMGx41MqYoWgNg7",
                "nama" => "Wisata Bahari Dampo Awang Beach",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "Desa Tasikharjo, Wates, RW03, Kec. Kaliori, Kabupaten Rembang, Jawa Tengah 59252",
                "id" => 271,
                "id_daerah" => 55,
                "link_gmaps" => "https://maps.app.goo.gl/cat1wMsbkTAbMAd1A",
                "nama" => "Pantai Pasir Putih Wates Rembang",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Pantai Karang Jahe, Jetakbelah, Punjulharjo, Kec. Rembang, Kabupaten Rembang, Jawa Tengah 59219",
                "id" => 272,
                "id_daerah" => 55,
                "link_gmaps" => "https://maps.app.goo.gl/QALmZaoznfq2JWmk8",
                "nama" => "Pantai Karangjahe",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Jend. Sudirman No.83, Rembangan, Tasikagung, Kecamatan, Kabupaten Rembang, Jawa Tengah 59211",
                "id" => 273,
                "id_daerah" => 55,
                "link_gmaps" => "https://maps.app.goo.gl/3jWekRqMR4ptjtuR7",
                "nama" => "Taman Kartini Rembang",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "882M+3PF, Dermaga, Rembangan, Tasikagung, Kec. Rembang, Kabupaten Rembang, Jawa Tengah",
                "id" => 274,
                "id_daerah" => 55,
                "link_gmaps" => "https://maps.app.goo.gl/S6s4mVeXny3fDqtVA",
                "nama" => "Pantai Dermaga Rembang",
                "rating" => "4.6",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 15 of wisatas (IDs: 275-294)
        $wisatas = [
            [
                "alamat" =>
                    "MGW5+82J, Jl. Nogosari, Bugel, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50713",
                "id" => 275,
                "id_daerah" => 56,
                "link_gmaps" => "https://maps.app.goo.gl/XnuPdpJP6gHtmoCDA",
                "nama" => "Taman Wisata Sejarah Kota Salatiga (TWSS)",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "MFQQ+45P, Pulutan, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50714",
                "id" => 276,
                "id_daerah" => 56,
                "link_gmaps" => "https://maps.app.goo.gl/XMRJazkvJZBogSbe7",
                "nama" => "Pohon Pengantin Salatiga",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Pemuda No.1, Kaloka, Salatiga, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50711",
                "id" => 277,
                "id_daerah" => 56,
                "link_gmaps" => "https://maps.app.goo.gl/HvLUbp1ZeUQ7DsvaA",
                "nama" => "Bundaran Salatiga",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Lap. Pancasila, Kalicacing, Kec. Sidomukti, Kota Salatiga, Jawa Tengah 50724",
                "id" => 278,
                "id_daerah" => 56,
                "link_gmaps" => "https://maps.app.goo.gl/2W7y1ANw6xbjAA6T8",
                "nama" =>
                    "Lapangan Pancasila Salatiga (Alun Alun Pancasila Salatiga)",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "bendosari rt.05-rw.05, Kumpulrejo, Kec. Argomulyo, Kota Salatiga, Jawa Tengah 50734",
                "id" => 279,
                "id_daerah" => 56,
                "link_gmaps" => "https://maps.app.goo.gl/BG3mUV2Fh3tPLYU19",
                "nama" => "Taman Kota Salatiga",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. DR. Sutomo No.89, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244",
                "id" => 280,
                "id_daerah" => 57,
                "link_gmaps" => "https://maps.app.goo.gl/eUXQwssTt77LtQbw8",
                "nama" => "Kampung Pelangi",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Rowosari, Kec. Tembalang, Kota Semarang, Jawa Tengah",
                "id" => 281,
                "id_daerah" => 57,
                "link_gmaps" => "https://maps.app.goo.gl/n2rq63pRDTwgv4PCA",
                "nama" => "Brown Canyon",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Tugurejo, Kec. Tugu, Kota Semarang, Jawa Tengah 50182",
                "id" => 282,
                "id_daerah" => 57,
                "link_gmaps" => "https://maps.app.goo.gl/gwcgZSCByCV1HiiV6",
                "nama" => "Candi Tugu",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "2CJH+M9F, Tj. Mas, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50174",
                "id" => 283,
                "id_daerah" => 57,
                "link_gmaps" => "https://maps.app.goo.gl/q3dJ41Q2TsAM6jWZ8",
                "nama" => "Kota Lama Semarang",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Yayasan Buddhagaya, Jl. Perintis Kemerdekaan, Pudakpayung, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50265",
                "id" => 284,
                "id_daerah" => 57,
                "link_gmaps" => "https://maps.app.goo.gl/3yXaCVi6E2Ztpon27",
                "nama" => "Pagoda Avalokitesvara",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Sukowati No.488, Dusun Kebayanan Krajoyok, Sragen Wetan, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57211",
                "id" => 285,
                "id_daerah" => 58,
                "link_gmaps" => "https://maps.app.goo.gl/bDS5WQ1HTE4X1Vsr7",
                "nama" => "Taman Kridoanggo Sragen",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Sine, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57213",
                "id" => 286,
                "id_daerah" => 58,
                "link_gmaps" => "https://maps.app.goo.gl/N5fnqouraDYKTi1n9",
                "nama" => "Taman Sukowati Sragen",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Sukowati No.2, Mageru, Sragen Tengah, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57211",
                "id" => 287,
                "id_daerah" => 58,
                "link_gmaps" => "https://maps.app.goo.gl/kDLdRseNnTLNBUhE6",
                "nama" => "Alun Alun Sragen",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "GXPR+HPJ, Gembong, RT.08/RW.04, Saradan, Kec. Karangmalang, Kabupaten Sragen, Jawa Tengah 57222",
                "id" => 288,
                "id_daerah" => 58,
                "link_gmaps" => "https://maps.app.goo.gl/8EEQz4wa2DcDFLkx6",
                "nama" => "Ndayu Park Sragen",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Soko, Kebayanan II, Pendem, Kec. Sumberlawang, Kabupaten Sragen, Jawa Tengah 57272",
                "id" => 289,
                "id_daerah" => 58,
                "link_gmaps" => "https://maps.app.goo.gl/fPdxazDGsesiMzMD9",
                "nama" => "Gunung Kemukus",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "8V3H+9R4, Dondong, Mulur, Kec. Bendosari, Kabupaten Sukoharjo, Jawa Tengah 57528",
                "id" => 290,
                "id_daerah" => 59,
                "link_gmaps" => "https://maps.app.goo.gl/JGXyTUhhX3BQ5jCz7",
                "nama" => "Wisata Alam Waduk Mulur",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "9Q2X+79W, Jl. Raya Telukan, Sonorejo, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57551",
                "id" => 291,
                "id_daerah" => 59,
                "link_gmaps" => "https://maps.app.goo.gl/7yvf5AzQAobRWRHX9",
                "nama" => "Taman Wijaya Kusuma",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "6VQ3+MHQ, Klile, Karangasem, Kec. Bulu, Kabupaten Sukoharjo, Jawa Tengah 57563",
                "id" => 292,
                "id_daerah" => 59,
                "link_gmaps" => "https://maps.app.goo.gl/5C5zSu6RZZvrH3hi6",
                "nama" => "Gunung Pegat",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "9R3J+87R, Jl. Kanguru 1, Bulakrejo, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57551",
                "id" => 293,
                "id_daerah" => 59,
                "link_gmaps" => "https://maps.app.goo.gl/C28vaPSNp319yZQh8",
                "nama" => "Patung Jamu Sukoharjo",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Dukuh, Jl. Tengklik Desa, Watubonang, Kec. Tawangsari, Kabupaten Sukoharjo, Jawa Tengah 57562",
                "id" => 294,
                "id_daerah" => 59,
                "link_gmaps" => "https://maps.app.goo.gl/96n5h42JZ1bikNqZA",
                "nama" => "Wisata Alam Taruwongso",
                "rating" => "4.3",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        ## Chunk 16 (IDs: 295-314)

        // Chunk 16 of wisatas (IDs: 295-314)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Kamandungan, Baluwarti, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57144",
                "id" => 295,
                "id_daerah" => 60,
                "link_gmaps" => "https://maps.app.goo.gl/os67iPFr7dr4umit5",
                "nama" => "Keraton Surakarta Hadiningrat",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Ronggowarsito, Keprabon, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131",
                "id" => 296,
                "id_daerah" => 60,
                "link_gmaps" => "https://maps.app.goo.gl/YLg2QqbfDvifSVfXA",
                "nama" => "Pura Mangkunegaran",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Balekambang, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139",
                "id" => 297,
                "id_daerah" => 60,
                "link_gmaps" => "https://maps.app.goo.gl/QVvoNA27YQCz6vhBA",
                "nama" => "Taman Balekambang Surakarta",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Slamet Riyadi No.275, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141",
                "id" => 298,
                "id_daerah" => 60,
                "link_gmaps" => "https://maps.app.goo.gl/kM56MwtQZhVgStKW7",
                "nama" => "Taman Sriwedari Surakarta",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Ir. Sutami No.109, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126",
                "id" => 299,
                "id_daerah" => 60,
                "link_gmaps" => "https://maps.app.goo.gl/AJfSNGYeet5nubk59",
                "nama" => "Solo Safari",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "542V+W38, Jl. Sangir, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121",
                "id" => 300,
                "id_daerah" => 61,
                "link_gmaps" => "https://maps.app.goo.gl/74L1tAnm5KHPvpot5",
                "nama" => "Pantai Alam Indah",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Sangir No.7, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121",
                "id" => 301,
                "id_daerah" => 61,
                "link_gmaps" => "https://maps.app.goo.gl/fXUAF8D6zm4qWAQC9",
                "nama" => "Monumen Bahari",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "437H+68V, Kaligangsa, Margadana, Kaligangsa, Tegal, Kota Tegal, Jawa Tengah 52147",
                "id" => 302,
                "id_daerah" => 61,
                "link_gmaps" => "https://maps.app.goo.gl/qmHLqUi5c1QfS7Ti9",
                "nama" => "Polder Bayeman",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "542W+MX6, Pantai Alam Indah,, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121",
                "id" => 303,
                "id_daerah" => 61,
                "link_gmaps" => "https://maps.app.goo.gl/rpPxwaaehfeFaL3A9",
                "nama" => "Hutan Mangrove Pantai Alam Indah Tegal",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Pancasila, Panggung, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52122",
                "id" => 304,
                "id_daerah" => 61,
                "link_gmaps" => "https://maps.app.goo.gl/Ficg1nbLqTvtHByE6",
                "nama" => "Taman Pancasila Kota Tegal",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jalan Brigjend Katamso Giyanti, Suronatan, Temanggung II, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56213",
                "id" => 305,
                "id_daerah" => 62,
                "link_gmaps" => "https://maps.app.goo.gl/cqyHoPcgwdxHj1cu6",
                "nama" => "Alun-Alun Kota Temanggung",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Gandulan, Tegowanuh, Kec. Kaloran, Kabupaten Temanggung, Jawa Tengah 56282",
                "id" => 306,
                "id_daerah" => 62,
                "link_gmaps" => "https://maps.app.goo.gl/5Sd29pHD9biWkrJr5",
                "nama" => "Wisata Alam Rowo Gembongan",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "M5JM+W56, Dongkelan Utara, Jampiroso, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56212",
                "id" => 307,
                "id_daerah" => 62,
                "link_gmaps" => "https://maps.app.goo.gl/v1nAsXGC9u354utR8",
                "nama" => "Taman Pancasila dan Tugu Kabupaten Temanggung",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jalan Raya Parakan - Wonosobo No.KM.12, Area Sawah, Kledung, Kec. Kledung, Kabupaten Temanggung, Jawa Tengah 56264",
                "id" => 308,
                "id_daerah" => 62,
                "link_gmaps" => "https://maps.app.goo.gl/JKcZ6ruqhy1MjZoc8",
                "nama" => "Embung Kledung",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Raya Kranggan, Projo, Madureso, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56229",
                "id" => 309,
                "id_daerah" => 62,
                "link_gmaps" => "https://maps.app.goo.gl/Z5kxBqPisWfTd3499",
                "nama" => "Taman Kali Progo",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "RT.02/RW.2, Leureup, Lerep, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50519",
                "id" => 310,
                "id_daerah" => 63,
                "link_gmaps" => "https://maps.app.goo.gl/xrpHhg2quPnF7aXk8",
                "nama" => 'SEKUKUSAN "Desa Wisata Lerep"',
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "VCMC+MPM, Siroto, Susukan, Kec. Ungaran Tim., Kabupaten Semarang, Jawa Tengah 50516",
                "id" => 311,
                "id_daerah" => 63,
                "link_gmaps" => "https://maps.app.goo.gl/eSrvMdqGw1QXzSmx9",
                "nama" => "Wisata Alam Wana Wisata Penggaron",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Loket wisata, Hutan, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50551",
                "id" => 312,
                "id_daerah" => 63,
                "link_gmaps" => "https://maps.app.goo.gl/tt2FGV55XS7C6ZQj6",
                "nama" => "Air Terjun Semirang",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Kalianyar, Kalirejo, Kec. Ungaran Tim., Kabupaten Semarang, Jawa Tengah",
                "id" => 313,
                "id_daerah" => 63,
                "link_gmaps" => "https://maps.app.goo.gl/ovkHSwtq5JSoGPxVA",
                "nama" => "Pinusia Park",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Srikandi Raya No.1, Lerep Satu, Lerep, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50519",
                "id" => 314,
                "id_daerah" => 63,
                "link_gmaps" => "https://maps.app.goo.gl/29MW8vwupCRAogRh8",
                "nama" => "Watu Gunung",
                "rating" => "4.3",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 17 of wisatas (IDs: 315-334)
        $wisatas = [
            [
                "alamat" =>
                    "5W7M+MF9, Karang Talun, Pokohkidul, Kec. Wonogiri, Kabupaten Wonogiri, Jawa Tengah 57615",
                "id" => 315,
                "id_daerah" => 64,
                "link_gmaps" => "https://maps.app.goo.gl/8mCW6VuT9RkAniPU6",
                "nama" => "Monumen Bedol Desa",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "74MW+7R5, Siroto, Bubakan, Kec. Girimarto, Kabupaten Wonogiri, Jawa Tengah 57683",
                "id" => 316,
                "id_daerah" => 64,
                "link_gmaps" => "https://maps.app.goo.gl/oJ4yyvMuGz2sAnDJA",
                "nama" => "Candi Muncar",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. KH Ahmad Dahlan, Sabggrahan, Giripurwo, Kec. Wonogiri, Kabupaten Wonogiri, Jawa Tengah 57612",
                "id" => 317,
                "id_daerah" => 64,
                "link_gmaps" => "https://maps.app.goo.gl/QmnqeWY57RNfPYe96",
                "nama" => "Alun Alun Giri Krida Bakti",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "45JW+4MC, Watusomo, Slogohimo, Dusun Watusomo, Watusomo, Wonogiri, Kabupaten Wonogiri, Jawa Tengah 57694",
                "id" => 318,
                "id_daerah" => 64,
                "link_gmaps" => "https://maps.app.goo.gl/fPjFUieJbRH5HbHb7",
                "nama" => "Cagar Alam DONOLOYO",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "5854+P92, Kepyar, Purwantoro, Kabupaten, Ngudal, Pagerukir, Kec. Sampung, Kabupaten Wonogiri, Jawa Tengah 57695",
                "id" => 319,
                "id_daerah" => 64,
                "link_gmaps" => "https://maps.app.goo.gl/bczirTfDgB6Z4CXa9",
                "nama" => "Bukit Cumbri",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Pemuda No.2, Wonosobo Timur, Wonosobo Tim., Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah 56311",
                "id" => 320,
                "id_daerah" => 65,
                "link_gmaps" => "https://maps.app.goo.gl/wi3g7iPwRpRV8Trq8",
                "nama" => "Alun-Alun Wonosobo",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jalan Dieng No.114, Anget, Kalianget, Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah 56319",
                "id" => 321,
                "id_daerah" => 65,
                "link_gmaps" => "https://maps.app.goo.gl/u7BaqKqnQHjZHNe87",
                "nama" => "Taman Rekreasi Kalianget Wonosobo",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "JV5V+C77, Jl. Banyumas, Tawangsari Indah, Tawangsari, Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah 56313",
                "id" => 322,
                "id_daerah" => 65,
                "link_gmaps" => "https://maps.app.goo.gl/a8v1Si6jEh9fEGCo9",
                "nama" => "Taman Fatmawati Wonosobo",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Sawah & Hutan, Dieng, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah",
                "id" => 323,
                "id_daerah" => 65,
                "link_gmaps" => "https://maps.app.goo.gl/HF4BeSiPGnzWEBkTA",
                "nama" => "Bukit Sikunir",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Telaga Warna, Dieng, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah 56354",
                "id" => 324,
                "id_daerah" => 65,
                "link_gmaps" => "https://maps.app.goo.gl/5hDfsV2mVAMzTuZ5A",
                "nama" => "Dieng Park",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "59R5+2H Patehan, Kota Yogyakarta, Daerah Istimewa Yogyakarta",
                "id" => 325,
                "id_daerah" => 66,
                "link_gmaps" => "https://maps.app.goo.gl/xQ84HTUBPju3UYTr7",
                "nama" => "Kampung Wisata Taman Sari",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Pangurakan No.1, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122",
                "id" => 326,
                "id_daerah" => 66,
                "link_gmaps" => "https://maps.app.goo.gl/GVFYsX4FKhqM3hxM6",
                "nama" => "Titik Nol Yogyakarta",
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "Jl. Rotowijayan Blok No. 1, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta",
                "id" => 327,
                "id_daerah" => 66,
                "link_gmaps" => "https://maps.app.goo.gl/XchHz5Vddwi2m1Bp6",
                "nama" => "Karaton Ngayogyakarta Hadiningrat",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Margo Mulyo Jl. Jend. Ahmad Yani No.106, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122",
                "id" => 328,
                "id_daerah" => 66,
                "link_gmaps" => "https://maps.app.goo.gl/Az8ifMV1wrRJwWyT6",
                "nama" => "Kawasan Wisata Malioboro",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Jend. Sudirman, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233",
                "id" => 329,
                "id_daerah" => 66,
                "link_gmaps" => "https://maps.app.goo.gl/bk5juPXPhtU689ha6",
                "nama" => "Tugu Jogja",
                "rating" => "4.8",
            ],
            [
                "alamat" =>
                    "Kayen, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta",
                "id" => 330,
                "id_daerah" => 67,
                "link_gmaps" => "https://maps.app.goo.gl/5iW5JobZSHi1iXpu6",
                "nama" => "Green Kayen",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "9FX4+346, Jambu, Kepuharjo, Kec. Cangkringan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55583",
                "id" => 331,
                "id_daerah" => 67,
                "link_gmaps" => "https://maps.app.goo.gl/2kZaXv4iasuxnF1q8",
                "nama" => "Wisata Lava Merapi dan Batu Alien",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Rt 05, Rw 11, Jugang, Plaosan, Tridadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55511",
                "id" => 332,
                "id_daerah" => 67,
                "link_gmaps" => "https://maps.app.goo.gl/XUn8PhmiScFxAXYG8",
                "nama" => "Kampung Flory Jogja",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Desa Lengkong, RT.02/RW.17, Gn. Sari, Sambirejo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55572",
                "id" => 333,
                "id_daerah" => 67,
                "link_gmaps" => "https://maps.app.goo.gl/LeHf2U9gndgbLpuCA",
                "nama" => "Tebing Breksi",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "79WH+4XM, Desa Tanjung, Ponason, Donoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581",
                "id" => 334,
                "id_daerah" => 67,
                "link_gmaps" => "https://maps.app.goo.gl/3nJxf1WQ2emzjfBn9",
                "nama" => "Desa Wisata Tanjung",
                "rating" => "4.4",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 18 of wisatas (IDs: 335-354)
        $wisatas = [
            [
                "alamat" =>
                    "Area Kebun, Srimulyo, Kec. Patuk, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta 55792",
                "id" => 335,
                "id_daerah" => 68,
                "link_gmaps" => "https://maps.app.goo.gl/FEmpC5jg6dcM2N7X8",
                "nama" => "Bukit Bintang",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Kelor Kidul, Kemadang, Kec. Tanjungsari, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta 55881",
                "id" => 336,
                "id_daerah" => 68,
                "link_gmaps" => "https://maps.app.goo.gl/ujnjvcK6CVDgLE2CA",
                "nama" => "Pantai Watu Kodok",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "VFR9+H57, Bolang, Girikarto, Kec. Panggang, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta 55133",
                "id" => 337,
                "id_daerah" => 68,
                "link_gmaps" => "https://maps.app.goo.gl/WjnDYmqdayKc4MsGA",
                "nama" => "Pantai Gesing",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "5G3W+5WC, Nglanggeran Wetan, Nglanggeran, Kec. Patuk, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta 55862",
                "id" => 338,
                "id_daerah" => 68,
                "link_gmaps" => "https://maps.app.goo.gl/M9wecGp4R32CJhnR9",
                "nama" => "Embung Nglanggeran",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Ngrancahan, Pengkok, Kec. Patuk, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta 55862",
                "id" => 339,
                "id_daerah" => 68,
                "link_gmaps" => "https://maps.app.goo.gl/KZSRqAm5c4Hd8YPX7",
                "nama" => "Gunung Ireng",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Clereng Tamanan KM. 6, Desa Hargowilis, Kokap, Clapar 2, Hargowilis, Kec. Kokap, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55611",
                "id" => 340,
                "id_daerah" => 69,
                "link_gmaps" => "https://maps.app.goo.gl/N1E4MdktvUvQTr176",
                "nama" => "Canting Mas Puncak Dipowono",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Keceme, Gerbosari, Kec. Samigaluh, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55673",
                "id" => 341,
                "id_daerah" => 69,
                "link_gmaps" => "https://maps.app.goo.gl/9woBPYfuN43iM2898",
                "nama" => "Puncak Suroloyo",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "4249+MW8, Pasir Mendit, Jangkaran, Kec. Temon, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55654",
                "id" => 342,
                "id_daerah" => 69,
                "link_gmaps" => "https://maps.app.goo.gl/BbfK9cRLUFXTcnaW7",
                "nama" => "Wisata Hutan Mangrove Wana Tirta",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jl. Pantai Bugel, Gumuk Waru, Bugel, Kec. Panjatan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55655",
                "id" => 343,
                "id_daerah" => 69,
                "link_gmaps" => "https://maps.app.goo.gl/7CvthzZGg3PmmwJaA",
                "nama" => "Pantai Bidara",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Banyunganti, Jatimulyo, Kec. Girimulyo, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55674",
                "id" => 344,
                "id_daerah" => 69,
                "link_gmaps" => "https://maps.app.goo.gl/T51JMUYwoAiL2rnMA",
                "nama" => "Ekowisata Sungai Mudal",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Cempluk, Jl. Watu Goyang No.1, Griloyo, Mangunan, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55783",
                "id" => 345,
                "id_daerah" => 70,
                "link_gmaps" => "https://maps.app.goo.gl/qCe3c2rukogbk8Qd7",
                "nama" => "Watu Goyang",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "396J+9X6, Jalan, Karang Rejeki, Karangtengah, Imogiri, Bantul Regency, Special Region of Yogyakarta 55782",
                "id" => 346,
                "id_daerah" => 70,
                "link_gmaps" => "https://maps.app.goo.gl/AYLLPTbCJB69owa99",
                "nama" => "Desa Wisata Karangtengah",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "39WQ+2RQ, Singosaren, Wukirsari, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782",
                "id" => 347,
                "id_daerah" => 70,
                "link_gmaps" => "https://maps.app.goo.gl/NXPbRV9e5MjiSPeG9",
                "nama" => "Bukit Watu Gagak",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "48PF+FCG, Jl. Grujugan, Grujugan, Bantul, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55751",
                "id" => 348,
                "id_daerah" => 70,
                "link_gmaps" => "https://maps.app.goo.gl/7xrnYYuR6qpopLQ4A",
                "nama" => "Taman Puspa Gading Tegaldowo Bantul Yogyakarta",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Gunungcilik, RT.07/RW.02, Gn. Cilik, Muntuk, Kec. Dlingo, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55783",
                "id" => 349,
                "id_daerah" => 70,
                "link_gmaps" => "https://maps.app.goo.gl/nWMQzeL79XvxaLvj9",
                "nama" => "Puncak Pinus Becici",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Mekarwangi, Jl. Dago Giri No.Km. 2.2, Pagerwangi, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 40135",
                "id" => 350,
                "id_daerah" => 71,
                "link_gmaps" => "https://maps.app.goo.gl/3nn1a38VDoHGQwzJ6",
                "nama" => "Dago Dreampark",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "4J84+7P9, Jl. Siliwangi, Hegarmanah, Kec. Cidadap, Kota Bandung, Jawa Barat 40131",
                "id" => 351,
                "id_daerah" => 71,
                "link_gmaps" => "https://maps.app.goo.gl/iQdCSrgKwP9Y9C3K7",
                "nama" => "Teras Cikapundung BBWS",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Merdeka No.9, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117",
                "id" => 352,
                "id_daerah" => 71,
                "link_gmaps" => "https://maps.app.goo.gl/AxYSdmaRVhYgjse39",
                "nama" => "Taman Vanda",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "4M9M+FGF, 4M9M+FGF Kota, Jl. Pasir Impun Atas Sekebalingbing No.5 A, Cikadut, Kec. Cimenyan, Kabupaten Bandung, Jawa Barat 40194",
                "id" => 353,
                "id_daerah" => 71,
                "link_gmaps" => "https://maps.app.goo.gl/9MqMjFFPkrpSktwd9",
                "nama" => "Alam Santosa Ekowisata & Budaya",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Wastukencana No.2, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117",
                "id" => 354,
                "id_daerah" => 71,
                "link_gmaps" => "https://maps.app.goo.gl/cd3UnPQX3Jg2Ajf97",
                "nama" => "Taman Balai Kota Bandung",
                "rating" => "4.6",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 19 of wisatas (IDs: 355-374) - continued
        $wisatas = [
            [
                "alamat" =>
                    "Gunung Masigit, Citatah, Kec. Cipatat, Kabupaten Bandung Barat, Jawa Barat 40554",
                "id" => 355,
                "id_daerah" => 72,
                "link_gmaps" => "https://maps.app.goo.gl/Ahsahvoi8rYyHCD8A",
                "nama" => "Stone Garden Citatah",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "6M5J+V8H, Cupunagara, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 41283",
                "id" => 356,
                "id_daerah" => 72,
                "link_gmaps" => "https://maps.app.goo.gl/tm8DWj7aDZDs2BBr9",
                "nama" => "Puncak Eurad",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "6H6J+XWF, Cihanjuang Rahayu, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40551",
                "id" => 357,
                "id_daerah" => 72,
                "link_gmaps" => "https://maps.app.goo.gl/wdXnVvKVMXRbvHAe6",
                "nama" => "Curug Aseupan",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "KP. CISITU DESA, Sindangjaya, Kec. Gununghalu, Kabupaten Bandung Barat, Jawa Barat 40565",
                "id" => 358,
                "id_daerah" => 72,
                "link_gmaps" => "https://maps.app.goo.gl/vsicWyX3KxwNjJqJ9",
                "nama" => "Wisata Terpadu Curug Ngebul Cisitu",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Nagrak Tengah, Sukajaya, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat 40391",
                "id" => 359,
                "id_daerah" => 72,
                "link_gmaps" => "https://maps.app.goo.gl/7eeZiWznC6QPw8oL6",
                "nama" => "Curug Cipanas",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "JGQW+394, Karangpanimbal, Kec. Purwaharja, Kota Banjar, Jawa Barat 46332",
                "id" => 360,
                "id_daerah" => 73,
                "link_gmaps" => "https://maps.app.goo.gl/JD39ykXzWtBEfrfs6",
                "nama" => "Wana Wisata Situ Mustika",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Cibeureum, Kec. Banjar, Kota Banjar, Jawa Barat 46313",
                "id" => 361,
                "id_daerah" => 73,
                "link_gmaps" => "https://maps.app.goo.gl/eaw8GCZp7uyA7pZY8",
                "nama" => "Situ Leutik",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "JGHV+VRV, Hegarsari, Kec. Pataruman, Kota Banjar, Jawa Barat 46322",
                "id" => 362,
                "id_daerah" => 73,
                "link_gmaps" => "https://maps.app.goo.gl/KZxHKMcJA4RLDfBQ6",
                "nama" => "Ecopark Kota Banjar",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Sukamukti, Kec. Pataruman, Kota Banjar, Jawa Barat",
                "id" => 363,
                "id_daerah" => 73,
                "link_gmaps" => "https://maps.app.goo.gl/8REuHesFkzdAFPTZ8",
                "nama" => "Wisata Situ Batu Peti",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "MH43+VFG, Jl. Pulo Majeti, Purwaharja, Kec. Purwaharja, Kota Banjar, Jawa Barat 46331",
                "id" => 364,
                "id_daerah" => 73,
                "link_gmaps" => "https://maps.app.goo.gl/ZK8WPQdaGPiM7uB4A",
                "nama" => "Cagar Budaya Pulo Majeti",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Pansor, RT.001/RW.002, Bojong Menteng, Kec. Rawalumbu, Kota Bks, Jawa Barat 17117",
                "id" => 365,
                "id_daerah" => 74,
                "link_gmaps" => "https://maps.app.goo.gl/yDrYsvizum65dyty6",
                "nama" =>
                    "Situ Rawa Gede Wisata Air Perahu KPPL ( Gedung Kesenian)",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "R287+VQ8, Bahagia, Kec. Babelan, Kabupaten Bekasi, Jawa Barat 17610",
                "id" => 366,
                "id_daerah" => 74,
                "link_gmaps" => "https://maps.app.goo.gl/8tY29J2bC3RF3izN7",
                "nama" => "Tempat Wisata - Danau Marakash Bekasi",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Alamanda Regency Raya, Karangsatria, Kec. Tambun Utara, Kabupaten Bekasi, Jawa Barat 17510",
                "id" => 367,
                "id_daerah" => 74,
                "link_gmaps" => "https://maps.app.goo.gl/dGLkDgJwfBRXBrAM6",
                "nama" => "Rainbow Alamanda",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Veteran No.46, RT.006/RW.006, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141",
                "id" => 368,
                "id_daerah" => 74,
                "link_gmaps" => "https://maps.app.goo.gl/sAhmZPg4jGmiT7Yy5",
                "nama" => "Taman Kota Bekasi",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "RT.002/RW.008, Cikedokan, Kec. Cikarang Bar., Kabupaten Bekasi, Jawa Barat 17530",
                "id" => 369,
                "id_daerah" => 74,
                "link_gmaps" => "https://maps.app.goo.gl/9fYgf8o7MY642myWA",
                "nama" => "Cagar budaya saung ranggon",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "CRJ2+4W7, Jl. Heulang, RT.06/RW.04, Tanah Sareal, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161",
                "id" => 370,
                "id_daerah" => 75,
                "link_gmaps" => "https://maps.app.goo.gl/ULTpRkabrGCoAsUNA",
                "nama" => "Taman Heulang",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "CRJW+G86, Cipambuan, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810",
                "id" => 371,
                "id_daerah" => 75,
                "link_gmaps" => "https://maps.app.goo.gl/s8eM4SUH3qj4LNCn8",
                "nama" => "ECOART PARK Sentul City",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Taman kencana, Jl. Taman Kencana No.3, RT.03/RW.03, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128",
                "id" => 372,
                "id_daerah" => 75,
                "link_gmaps" => "https://maps.app.goo.gl/gDpjvjQNkHgEQapm7",
                "nama" => "Taman Kencana",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Ir. H. Juanda No.13, Paledang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16122",
                "id" => 373,
                "id_daerah" => 75,
                "link_gmaps" => "https://maps.app.goo.gl/RkHuFfwfbHQZ7Kqg6",
                "nama" => "Kebun Raya Bogor",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Bukit Cimanggu City Raya Jl. Sholeh Iskandar, RT.01/RW.11, Cibadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16168",
                "id" => 374,
                "id_daerah" => 75,
                "link_gmaps" => "https://maps.app.goo.gl/mxSnLYM11Gp5spRMA",
                "nama" => "Marcopolo Water Adventure Bogor",
                "rating" => "4.5",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 20 of wisatas (IDs: 375-394)
        $wisatas = [
            [
                "alamat" =>
                    "Ciamis, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46211",
                "id" => 375,
                "id_daerah" => 76,
                "link_gmaps" => "https://maps.app.goo.gl/xQ2WdxQLS6Ra7pge6",
                "nama" => "Alun-alun Ciamis",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "J9WM+C8C, Cikatomas, Handapherang, Kec. Cijeungjing, Kabupaten Ciamis, Jawa Barat 46271",
                "id" => 376,
                "id_daerah" => 76,
                "link_gmaps" => "https://maps.app.goo.gl/jymVV1eub6qgXR4Y9",
                "nama" => "GRAND SAYANG KAAK",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "M88X+VQW, Jl. K.H. Ahmad Dahlan, Ciamis, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46211",
                "id" => 377,
                "id_daerah" => 76,
                "link_gmaps" => "https://maps.app.goo.gl/U88GWtcU18r1D3T59",
                "nama" => "Museum Galuh Pakuan",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "P7C3+9P5, Sukaresik, Sindangkasih, Kec. Sindangkasih, Kabupaten Ciamis, Jawa Barat 46261",
                "id" => 378,
                "id_daerah" => 76,
                "link_gmaps" => "https://maps.app.goo.gl/nW5KZ36A41TXXekP9",
                "nama" => "Wisata Alam Cireong Park",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "M8CW+J8V, Jl. K.H. Ahmad Dahlan, Ciamis, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46211",
                "id" => 379,
                "id_daerah" => 76,
                "link_gmaps" => "https://maps.app.goo.gl/zvsBjamWUjjB8ipZ7",
                "nama" => "Taman Lokasana",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Surya Kencana No.1, Sawah Gede, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43212",
                "id" => 380,
                "id_daerah" => 77,
                "link_gmaps" => "https://maps.app.goo.gl/sjyYmTZxsLdSH42d9",
                "nama" => "TAMAN PRAWATASARI CIANJUR JABAR",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Pamoyanan c, Pamoyanan, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43211",
                "id" => 381,
                "id_daerah" => 77,
                "link_gmaps" => "https://maps.app.goo.gl/H9Q2MMQZs4d9GpXa7",
                "nama" => "Alun-Alun Cianjur",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. KH Abdullah Bin Nuh No.109, Sawah Gede, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43212",
                "id" => 382,
                "id_daerah" => 77,
                "link_gmaps" => "https://maps.app.goo.gl/GukeyZn5qBqyDwxs5",
                "nama" => "Cianjur City Park",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Taman Kreatif Joglo, Jl. Siliwangi, Sawah Gede, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43212",
                "id" => 383,
                "id_daerah" => 77,
                "link_gmaps" => "https://maps.app.goo.gl/sWGEZyp8YmU8juZp6",
                "nama" => "Taman Kreatif Joglo (Cianjur)",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "54PJ+4PG, Jl. Dr. Muwardi, Bojongherang, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43216",
                "id" => 384,
                "id_daerah" => 77,
                "link_gmaps" => "https://maps.app.goo.gl/8C1cPmv1YpCUczof8",
                "nama" => "Tugu Lampu Gentur Kota Cianjur",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Taman Urip Sumoharjo, Baros, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40521",
                "id" => 385,
                "id_daerah" => 78,
                "link_gmaps" => "https://maps.app.goo.gl/jrFMeUdU1sEUdJDs7",
                "nama" => "Taman Kartini",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Kolonel Masturi No.Km. 3, Cipageran, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40511",
                "id" => 386,
                "id_daerah" => 78,
                "link_gmaps" => "https://maps.app.goo.gl/krmf3F5S1JcQBFJe8",
                "nama" => "(Kabuci) kampung Buyut Cipageran Asih Putera",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "4G48+MCP, Cibeber, Cimahi Selatan, Cimahi City, West Java 40531",
                "id" => 387,
                "id_daerah" => 78,
                "link_gmaps" => "https://maps.app.goo.gl/sYR266yGzL79q9Mc8",
                "nama" => "Situ Ciseupan Cibeber",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl.Raya Barat No.57, Cimahi, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40525",
                "id" => 388,
                "id_daerah" => 78,
                "link_gmaps" => "https://maps.app.goo.gl/vdZRutCQHtn3HHAP6",
                "nama" => "Cimahi Square Park",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "4GCQ+5XW, Karangmekar, Cimahi Tengah, Cimahi City, West Java 40523",
                "id" => 389,
                "id_daerah" => 78,
                "link_gmaps" => "https://maps.app.goo.gl/DqRCUWsp2YfRtzaB9",
                "nama" => "Taman Hutan Kota Cimahi",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "6G9C+GPJ, Patapan, Beber, Cirebon, West Java 45172",
                "id" => 390,
                "id_daerah" => 79,
                "link_gmaps" => "https://maps.app.goo.gl/SRmVALNZFmVXyXhU8",
                "nama" => "Bukit Gronggong",
                "rating" => "4.3",
            ],
            [
                "alamat" => "Sunyaragi, Kesambi, Cirebon City, West Java 45132",
                "id" => 391,
                "id_daerah" => 79,
                "link_gmaps" => "https://maps.app.goo.gl/zC8pZVop1xZXGUhm9",
                "nama" => "Sunyaragi Cave Park",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Siliwangi No.01, Kebonbaru, Kec. Kejaksan, Kota Cirebon, Jawa Barat 45124",
                "id" => 392,
                "id_daerah" => 79,
                "link_gmaps" => "https://maps.app.goo.gl/TpNDitHRHCMey1xb6",
                "nama" => "Alun Alun Kejaksan Cirebon",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "6FGM+JH9, Babakan, Sumber, Cirebon, West Java 45612",
                "id" => 393,
                "id_daerah" => 79,
                "link_gmaps" => "https://maps.app.goo.gl/YFpCS1veLX1cNRnTA",
                "nama" => "Wisata Kera Plangon",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "7H8P+V6W, Jl raya kali jaga kejawanan, Jl. Pelabuhan Perikanan, Pegambiran, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45112",
                "id" => 394,
                "id_daerah" => 79,
                "link_gmaps" => "https://maps.app.goo.gl/GMeMJAQGkCNvD4Wg7",
                "nama" => "Kejawanan Beach",
                "rating" => "4.1",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 21 of wisatas (IDs: 395-414) - continued
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Merdeka No.1, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411",
                "id" => 395,
                "id_daerah" => 80,
                "link_gmaps" => "https://maps.app.goo.gl/AxsTjRFLV8HM5S3HA",
                "nama" => "Taman Merdeka",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Bunga Raya No.22a, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat 16452",
                "id" => 396,
                "id_daerah" => 80,
                "link_gmaps" => "https://maps.app.goo.gl/f3Vs5BuQAFvNh35t9",
                "nama" => "Taman Mekarsari",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Penarikan No.RT 01 / 02, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519",
                "id" => 397,
                "id_daerah" => 80,
                "link_gmaps" => "https://maps.app.goo.gl/CPyE8ET4Z7RgVcvb9",
                "nama" => 'D\'Kandang Depok',
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Garuda Raya No.1, RT.01/RW.07, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519",
                "id" => 398,
                "id_daerah" => 80,
                "link_gmaps" => "https://maps.app.goo.gl/YN969LoLfB59V9aD7",
                "nama" => "Taman Wisata Pasir Putih",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Buperta No.1, Harjamukti, Kec. Cimanggis, Kota Depok, Jawa Barat 16454",
                "id" => 399,
                "id_daerah" => 80,
                "link_gmaps" => "https://maps.app.goo.gl/w5AjgCbidtG4dZdj6",
                "nama" => "Lake Jambore",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Kp. Cibolerang, RT.001/RW.010, Mekarjaya, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151",
                "id" => 400,
                "id_daerah" => 81,
                "link_gmaps" => "https://maps.app.goo.gl/WHkrjP9DttfXSUZK7",
                "nama" => "Wisata Garut Dinoland",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "Jalan Karacak Valley Margawati, Sukanegla, Kec. Garut Kota, Kabupaten Garut, Jawa Barat 44113",
                "id" => 401,
                "id_daerah" => 81,
                "link_gmaps" => "https://maps.app.goo.gl/oEf9HqZutD222hD56",
                "nama" => "Karacak Valley",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Raya Darajat No.Km. 13, Karyamekar, Kec. Pasirwangi, Kabupaten Garut, Jawa Barat 44161",
                "id" => 402,
                "id_daerah" => 81,
                "link_gmaps" => "https://maps.app.goo.gl/u3RY6XY64upbaKrV9",
                "nama" => "Wisata Alam Darajat Garut",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Puncak Darajat No.Km. 14, Karyamekar, Kec. Pasirwangi, Kabupaten Garut, Jawa Barat 44161",
                "id" => 403,
                "id_daerah" => 81,
                "link_gmaps" => "https://maps.app.goo.gl/gzHyhDAVyfkECojf7",
                "nama" => "Darajat Pass",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Cimanuk No.129, Paminggir, Kec. Garut Kota, Kabupaten Garut, Jawa Barat 44118",
                "id" => 404,
                "id_daerah" => 81,
                "link_gmaps" => "https://maps.app.goo.gl/hg93NDrHV8Lhbdq36",
                "nama" => "Taman maktal",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "M8FC+WFX, Jl. Cimanuk, Margadadi, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45221",
                "id" => 405,
                "id_daerah" => 82,
                "link_gmaps" => "https://maps.app.goo.gl/d1TUMcskxg1nDrYNA",
                "nama" => "Taman Tjimanoek Indramayu",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "M9W9+X9C, Karangsong, Indramayu, Indramayu Regency, West Java",
                "id" => 406,
                "id_daerah" => 82,
                "link_gmaps" => "https://maps.app.goo.gl/hGTP8DB5TauxcE8D8",
                "nama" => "Hutan Mangrove Pantai Lestari Karangsong",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "M84V+M3P, Jl. Bumi Patra Raya, Karanganyar, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45213",
                "id" => 407,
                "id_daerah" => 82,
                "link_gmaps" => "https://maps.app.goo.gl/hzbXSrJJNJoiCQBX6",
                "nama" => "Monumen Bumi Patra",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "J9RP+VXM, Pantai, Balongan, Indramayu Regency, West Java",
                "id" => 408,
                "id_daerah" => 82,
                "link_gmaps" => "https://maps.app.goo.gl/qVsH5gju9fVher2x5",
                "nama" => "Bali 2",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "J8XP+JXG, Jl. Bumi Patra Raya, Pekandangan, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45216",
                "id" => 409,
                "id_daerah" => 82,
                "link_gmaps" => "https://maps.app.goo.gl/gLPW9AqpcxadynTV7",
                "nama" => "Taman Rusa Bumi Patra Indramayu",
                "rating" => "4.4",
            ],
            [
                "alamat" => "Kutamekar, Ciampel, Karawang, West Java 41363",
                "id" => 410,
                "id_daerah" => 83,
                "link_gmaps" => "https://maps.app.goo.gl/mQpkxcc4xUqmCZXU6",
                "nama" => "Hutan Kertas",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "Jl. Galuh Mas Raya No.1, Telukjambe, Telukjambe Timur, Karawang, Jawa Barat 41361",
                "id" => 411,
                "id_daerah" => 83,
                "link_gmaps" => "https://maps.app.goo.gl/4Gd8pPr3Mr3mRbLV7",
                "nama" => "Wonderland Adventure Waterpark Galuh Mas Karawang",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Kp. Budaya, Wadas, Telukjambe Timur, Karawang, Jawa Barat 41361",
                "id" => 412,
                "id_daerah" => 83,
                "link_gmaps" => "https://maps.app.goo.gl/uM7EKpcJxASNwXsC6",
                "nama" => "Kampung Budaya",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "Perum Grand Taruma Jalan Raya Tol, Sukamakmur, Telukjambe Timur, Karawang, Jawa Barat 41361",
                "id" => 413,
                "id_daerah" => 83,
                "link_gmaps" => "https://maps.app.goo.gl/DRAjcAZMCbxPL7ha9",
                "nama" => "Taruma Leisure Waterpark",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Dusun kaumjaya rt15 rw004, Puseurjaya, Telukjambe Timur, Karawang, Jawa Barat 41361",
                "id" => 414,
                "id_daerah" => 83,
                "link_gmaps" => "https://maps.app.goo.gl/iV2wNBnN6NRzKFzd6",
                "nama" => "JEMBATAN PERAHU APUNG H,SUKRIAT",
                "rating" => "3.4",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 22 of wisatas (IDs: 415-434)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Veteran No.36, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511",
                "id" => 415,
                "id_daerah" => 84,
                "link_gmaps" => "https://maps.app.goo.gl/jaWBQw3tUkToz9yc6",
                "nama" => "Alun-Alun Kota Kuningan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "2FF8+H4W, Jl. Raya Cigugur, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511",
                "id" => 416,
                "id_daerah" => 84,
                "link_gmaps" => "https://maps.app.goo.gl/GBE89qMK4Uxt1XaJ8",
                "nama" => "Hutan Kota Bungkirit",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Palutungan, Cisantana, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45552",
                "id" => 417,
                "id_daerah" => 84,
                "link_gmaps" => "https://maps.app.goo.gl/9e7WJnT4CQWwLYap8",
                "nama" => "Curug Putri Palutungan",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Tembong, Garawangi, Kuningan Regency, West Java 45571",
                "id" => 418,
                "id_daerah" => 84,
                "link_gmaps" => "https://maps.app.goo.gl/Qy7TgmW8tiXX1PG38",
                "nama" => "Wisata Bukit Panembongan",
                "rating" => "4.1",
            ],
            [
                "alamat" =>
                    "3C7H+4Q6, Sukamukti, Jalaksana, Kuningan Regency, West Java 45554",
                "id" => 419,
                "id_daerah" => 84,
                "link_gmaps" => "https://maps.app.goo.gl/vwkAhByPk8nPKTq5A",
                "nama" => "Curug Cisurian",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "5695+G94, Munjul, Kec. Majalengka, Kabupaten Majalengka, Jawa Barat 45418",
                "id" => 420,
                "id_daerah" => 85,
                "link_gmaps" => "https://maps.app.goo.gl/S3ApLrFiKndH2z3AA",
                "nama" => "Taman Raharja",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "567H+W32, Majalengka Kulon, Kec. Majalengka, Kabupaten Majalengka, Jawa Barat 45418",
                "id" => 421,
                "id_daerah" => 85,
                "link_gmaps" => "https://maps.app.goo.gl/FfAShUUGUb8bqW9W9",
                "nama" => "Alun Alun Majalengka",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "5695+946, Munjul, Kec. Majalengka, Kabupaten Majalengka, Jawa Barat 45418",
                "id" => 422,
                "id_daerah" => 85,
                "link_gmaps" => "https://maps.app.goo.gl/x8qTQ1KBsanZmUYA7",
                "nama" => "Bundaran Parapatan Munjul, Majalengka",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "39M2+62H, Tejamulya, Kec. Argapura, Kabupaten Majalengka, Jawa Barat 45462",
                "id" => 423,
                "id_daerah" => 85,
                "link_gmaps" => "https://maps.app.goo.gl/kUT6jwHe5DCMiwpa7",
                "nama" => "Lembah Panyaweuyan",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Pajajar, Indrakila, Kec. Sindang, Kabupaten Majalengka, Jawa Barat 45471",
                "id" => 424,
                "id_daerah" => 85,
                "link_gmaps" => "https://maps.app.goo.gl/v6ocf2T2fQeaCTJZ6",
                "nama" => "Obyek Wisata Alam Prabu Siliwangi (Situ Cipadung)",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Pamugaran Bulak Laut, Pananjung, Kec. Pangandaran, Kab. Pangandaran, Jawa Barat 46396",
                "id" => 425,
                "id_daerah" => 86,
                "link_gmaps" => "https://maps.app.goo.gl/zRct1dFkFdqGSXA79",
                "nama" => "Pantai Barat Pangandaran",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Pangandaran, Kec. Pangandaran, Kab. Pangandaran, Jawa Barat 46396",
                "id" => 426,
                "id_daerah" => 86,
                "link_gmaps" => "https://maps.app.goo.gl/JbKNTp65mSGsLjaY9",
                "nama" => "Pantai Timur Pangandaran",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Pananjung, Kec. Pangandaran, Kab. Pangandaran, Jawa Barat 46396",
                "id" => 427,
                "id_daerah" => 86,
                "link_gmaps" => "https://maps.app.goo.gl/54D8zLmwBXeBCD9P9",
                "nama" => "Cagar Alam Pangandaran",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Pangandaran, Kec. Pangandaran, Kabupaten Ciamis, Jawa Barat",
                "id" => 428,
                "id_daerah" => 86,
                "link_gmaps" => "https://maps.app.goo.gl/WitrMcwNPUuttog29",
                "nama" => "Pantai Pasir Putih Pangandaran",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "8J6W+472, Pananjung, Kec. Pangandaran, Kab. Pangandaran, Jawa Barat 46396",
                "id" => 429,
                "id_daerah" => 86,
                "link_gmaps" => "https://maps.app.goo.gl/thWsckK73WdritRr9",
                "nama" => "Pangandaran Sunset Park",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. K.K Singawinata No.73, Nagri Kidul, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41111",
                "id" => 430,
                "id_daerah" => 87,
                "link_gmaps" => "https://maps.app.goo.gl/w7jNZLwVRuT7jfaX9",
                "nama" => "Taman Air Mancur Sri Baduga",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jalan Raya Sukatani, Cisalada, Sukatani, Purwakarta Regency, West Java 41152",
                "id" => 431,
                "id_daerah" => 87,
                "link_gmaps" => "https://maps.app.goo.gl/ZEnU8Msfr6r7R98r7",
                "nama" => "Cikao Park",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "CCVR+MR9, Purwamekar, Nagri Tengah, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41114",
                "id" => 432,
                "id_daerah" => 87,
                "link_gmaps" => "https://maps.app.goo.gl/7QGYb4yY358ZdiTJ9",
                "nama" => "Alun-Alun Purwakarta",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Ipik Gandamanah No.41, Ciseureuh, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41118",
                "id" => 433,
                "id_daerah" => 87,
                "link_gmaps" => "https://maps.app.goo.gl/ZVMKYa43TUei9XoW8",
                "nama" => "Green Valley Waterpark",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "CCWW+8C8, Jl. K.K Singawinata, Nagri Tengah, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41114",
                "id" => 434,
                "id_daerah" => 87,
                "link_gmaps" => "https://maps.app.goo.gl/cTTcemGBKYvU7wAW8",
                "nama" => "Bale Panyawangan Diorama Nusantara",
                "rating" => "4.5",
            ],
        ];

        // Chunk 23 of wisatas (IDs: 435-454)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Brigjen Katamso No.18A, Dangdeur, Kec. Subang, Kabupaten Subang, Jawa Barat 41211",
                "id" => 435,
                "id_daerah" => 88,
                "link_gmaps" => "https://maps.app.goo.gl/asU2K1txqE1V9qpQ7",
                "nama" => "Planet Water Booom Kota Subang",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Jl. Ade Irma Suryani Nasution No.2, Karanganyar, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211",
                "id" => 436,
                "id_daerah" => 88,
                "link_gmaps" => "https://maps.app.goo.gl/GcSiJvpJxy7SDDHs8",
                "nama" => "Museum Kota Subang",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "CP8V+M6P, Parung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211",
                "id" => 437,
                "id_daerah" => 88,
                "link_gmaps" => "https://maps.app.goo.gl/C1PdEfES1rzFhMGe9",
                "nama" => "Hutan Kota Ranggawulung",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. RA Wangsa Ghofarana No.2, Karanganyar, Kec. Subang, Kabupaten Subang, Jawa Barat 41211",
                "id" => 438,
                "id_daerah" => 88,
                "link_gmaps" => "https://maps.app.goo.gl/FCAosvuSRHnVEyuNA",
                "nama" => "Alun-Alun Kota Subang",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Raya Ciater, Nagrak, Kec. Ciater, Kabupaten Subang, Jawa Barat 40154",
                "id" => 439,
                "id_daerah" => 88,
                "link_gmaps" => "https://maps.app.goo.gl/75MPgTo57HxBvRPHA",
                "nama" => "Pemandian Air Panas Ciater Subang",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Gunungparang, Kec. Cikole, Kota Sukabumi, Jawa Barat 43111",
                "id" => 440,
                "id_daerah" => 89,
                "link_gmaps" => "https://maps.app.goo.gl/JYjiDh7UEkP1vkWTA",
                "nama" => "Alun-Alun Kota Sukabumi",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "3WJG+3P3, Gunungparang, Kec. Cikole, Kota Sukabumi, Jawa Barat 43111",
                "id" => 441,
                "id_daerah" => 89,
                "link_gmaps" => "https://maps.app.goo.gl/7XB1YBx7BrihtVVk9",
                "nama" => "Taman Kota Lapang Merdeka Sukabumi",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Mayor Mahmud, Sukajaya, Kec. Cikole, Kota Sukabumi, Jawa Barat",
                "id" => 442,
                "id_daerah" => 89,
                "link_gmaps" => "https://maps.app.goo.gl/YzmXVmb1ENkbtxdz7",
                "nama" => "Wisata Alam OASIS Sukabumi",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Kampung Cihuis, RT.11/RW.04, Sasagaran, Kec. Kebonpedes, Kabupaten Sukabumi, Jawa Barat 43912",
                "id" => 443,
                "id_daerah" => 89,
                "link_gmaps" => "https://maps.app.goo.gl/TwhhTRGpiV2u45e88",
                "nama" => "Wisata Bukit Baros",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Lio Santa, Gedongpanjang, Kec. Citamiang, Kota Sukabumi, Jawa Barat 43144",
                "id" => 444,
                "id_daerah" => 89,
                "link_gmaps" => "https://maps.app.goo.gl/o3oxQMqoT2WrFqEb9",
                "nama" => "SantaSea Water Theme Park Sukabumi",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "5W3F+2JP, Jalan Mayor Abdurahman, Talun, Sumedang Utara, Regol Wetan, Sumedang Selatan, Kotakaler, Kec. Sumedang Utara, Kabupaten Sumedang, Jawa Barat 45311",
                "id" => 445,
                "id_daerah" => 90,
                "link_gmaps" => "https://maps.app.goo.gl/4SwirFHmoMSNxEQq7",
                "nama" => "Taman Endog",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Sukajaya, Kec. Sumedang Sel., Kabupaten Sumedang, Jawa Barat 45311",
                "id" => 446,
                "id_daerah" => 90,
                "link_gmaps" => "https://maps.app.goo.gl/5Tuvtz186WJHYeTw9",
                "nama" => "TOGA HILL",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "3XP6+J75, Citengah, Kec. Sumedang Sel., Kabupaten Sumedang, Jawa Barat 45311",
                "id" => 447,
                "id_daerah" => 90,
                "link_gmaps" => "https://maps.app.goo.gl/nVDHyzj9YEK9aFpj6",
                "nama" => "Curug Gorobog",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. P. Sugih No.16, Regol Wetan, Kec. Sumedang Sel., Kabupaten Sumedang, Jawa Barat 45311",
                "id" => 448,
                "id_daerah" => 90,
                "link_gmaps" => "https://maps.app.goo.gl/WN8EaZ1yqGwkrZ5q6",
                "nama" => "Tugu Binokasih",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "4WV8+GP9, Kotakulon, Kec. Sumedang Sel., Kabupaten Sumedang, Jawa Barat 45311",
                "id" => 449,
                "id_daerah" => 90,
                "link_gmaps" => "https://maps.app.goo.gl/AZwFhQ3t6eP6R44y9",
                "nama" => "Tahura Gunung Kunci",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Kp.Pramuka Sadaukir kapunduhan barumekar, Sukapura, Kec. Sukaraja, Kabupaten Tasikmalaya, Jawa Barat 46183",
                "id" => 450,
                "id_daerah" => 91,
                "link_gmaps" => "https://maps.app.goo.gl/qNu1u3M7v3mHWUDeA",
                "nama" => "Bukit Panyangrayan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "M57Q+VQJ, Jl. Situ Gede, Linggajaya, Kec. Mangkubumi, Kab. Tasikmalaya, Jawa Barat 46181",
                "id" => 451,
                "id_daerah" => 91,
                "link_gmaps" => "https://maps.app.goo.gl/12aNDPzxMNHTQ8vW6",
                "nama" => "Objek Wisata Situ Gede",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Empangsari, Kec. Tawang, Kab. Tasikmalaya, Jawa Barat 46113",
                "id" => 452,
                "id_daerah" => 91,
                "link_gmaps" => "https://maps.app.goo.gl/U3z75ND7gysn5ddX9",
                "nama" => "Alun-Alun Kota Tasikmalaya",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "dan, Jl. HZ. Mustofa Jl. Dewi Sartika No.61-69, Tawangsari, Kec. Tawang, Kab. Tasikmalaya, Jawa Barat 46112",
                "id" => 453,
                "id_daerah" => 91,
                "link_gmaps" => "https://maps.app.goo.gl/9w1rqg9s1gc6kLa89",
                "nama" => "Taman Kota Tasikmalaya",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Nagarawangi, Kec. Cihideung, Kab. Tasikmalaya, Jawa Barat 46124",
                "id" => 454,
                "id_daerah" => 91,
                "link_gmaps" => "https://maps.app.goo.gl/sAtdFhMD9QCH6ffx6",
                "nama" => "Taman Dadaha Tasikmalaya",
                "rating" => "4.4",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 24 of wisatas (IDs: 455-474)
        $wisatas = [
            [
                "alamat" =>
                    "RT.05/RW.02, Pulau Harapan, North Kepulauan Seribu, Kepulauan Seribu Regency, Jakarta 14540",
                "id" => 455,
                "id_daerah" => 92,
                "link_gmaps" => "https://maps.app.goo.gl/DXi7FKHs2AkNX8r5A",
                "nama" => "Wisata Pulau Harapan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Harapan Island, North Kepulauan Seribu, Jakarta, 14540",
                "id" => 456,
                "id_daerah" => 92,
                "link_gmaps" => "https://maps.app.goo.gl/xZa8NScDKptT57FE8",
                "nama" => "Thousand Island Tourism Jakarta",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "RT.02/RW.01, Kelapa Island, North Kepulauan Seribu, Kepulauan Seribu Regency, Jakarta 13410",
                "id" => 457,
                "id_daerah" => 92,
                "link_gmaps" => "https://maps.app.goo.gl/PS8xAgVs2k6onT9u5",
                "nama" => "Coconut Island Tours",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "8HQ9+658, Klp, Pulau Klp., Kepulauan Seribu Utara, Kab. Administrasi Kepulauan Seribu, Daerah Khusus Ibukota Jakarta 14530",
                "id" => 458,
                "id_daerah" => 92,
                "link_gmaps" => "https://maps.app.goo.gl/Jh7dpXmjHjBQJvzf8",
                "nama" => "Pulau Kaliage",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "9HCF+J4G, North Kepulauan Seribu, Kepulauan Seribu Regency, Jakarta",
                "id" => 459,
                "id_daerah" => 92,
                "link_gmaps" => "https://maps.app.goo.gl/VUWEgKVvnVddM3NGA",
                "nama" => "Bulat Island Jetty Dive Spot",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Kawasan Kota Tua, Taman Fatahillah No.1 7, RT.7/RW.7, Pinangsia, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11110",
                "id" => 460,
                "id_daerah" => 93,
                "link_gmaps" => "https://maps.app.goo.gl/Pz8c8Z6LAF9gtAS88",
                "nama" => "Wisata Kota Tua Jakarta",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "AKR Tower Level M, Jl. Panjang No.5, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530",
                "id" => 461,
                "id_daerah" => 93,
                "link_gmaps" => "https://maps.app.goo.gl/nT2RN6yeJUWPZTSA7",
                "nama" =>
                    "Museum MACAN (Modern and Contemporary Art in Nusantara)",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Letjen S. Parman St No.106, RT.3/RW.3, South Tanjung Duren, Grogol petamburan, West Jakarta City, Jakarta 11470",
                "id" => 462,
                "id_daerah" => 93,
                "link_gmaps" => "https://maps.app.goo.gl/qPgMZGQrVGF3ij2G9",
                "nama" => "Jakarta AQuarium Safari",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. H. Kelik, RT.8/RW.6, Srengseng, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11630",
                "id" => 463,
                "id_daerah" => 93,
                "link_gmaps" => "https://maps.app.goo.gl/NegRj9fnQ3nchUQ16",
                "nama" => "Hutan Kota Srengseng",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Letjen S. Parman St, RT.15/RW.1, Kemanggisan, Palmerah, West Jakarta City, Jakarta 11480",
                "id" => 464,
                "id_daerah" => 93,
                "link_gmaps" => "https://maps.app.goo.gl/t2hqbEmic6Fwtvbz6",
                "nama" => "Cattleya City Park",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jalan Silang Monas Barat Laut, RT.5/RW.2, Gambir, RT.5/RW.2, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110",
                "id" => 465,
                "id_daerah" => 94,
                "link_gmaps" => "https://maps.app.goo.gl/y8kS6ZcaxHCbNAbx9",
                "nama" => "Taman Pandang Istana",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Taman Suropati No.5, RT.5/RW.5, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310",
                "id" => 466,
                "id_daerah" => 94,
                "link_gmaps" => "https://maps.app.goo.gl/u1dyDytjoUkF2W2H8",
                "nama" => "Suropati Park",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "RRJM+4W5, Pasar Baru, Sawah Besar, Central Jakarta City, Jakarta 10710",
                "id" => 467,
                "id_daerah" => 94,
                "link_gmaps" => "https://maps.app.goo.gl/4EQRMGG565iqyWLZ8",
                "nama" => "Lapangan Banteng Park",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Merdeka Square, Jakarta, Jalan Lapangan Monas, Gambir, Central Jakarta City, Jakarta 10110",
                "id" => 468,
                "id_daerah" => 94,
                "link_gmaps" => "https://maps.app.goo.gl/F9s97ZsSrpG3PF8Z7",
                "nama" => "Monas",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Proklamasi No.10, RT.10/RW.2, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10320",
                "id" => 469,
                "id_daerah" => 94,
                "link_gmaps" => "https://maps.app.goo.gl/ZjG2h7FpA5KXfFoj8",
                "nama" => "Tugu Proklamasi",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Sisingamangaraja No.2, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110",
                "id" => 470,
                "id_daerah" => 95,
                "link_gmaps" => "https://maps.app.goo.gl/V5PRNKStzJJ3guSq9",
                "nama" => "Mataram City Park",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Tangkuban Perahu No.1 5, RT.5/RW.1, Guntur, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12980",
                "id" => 471,
                "id_daerah" => 95,
                "link_gmaps" => "https://maps.app.goo.gl/gztSWpdmo81URoiz7",
                "nama" => "Tangkuban Perahu Park",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "7, Jl. Lamandau III No.RT.4, RT.4/RW.7, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130",
                "id" => 472,
                "id_daerah" => 95,
                "link_gmaps" => "https://maps.app.goo.gl/xAuCashfnQRtdUAz8",
                "nama" => "Ayodia Park - Barito",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Sepat I No.68 1, RT.1/RW.6, Kebagusan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520",
                "id" => 473,
                "id_daerah" => 95,
                "link_gmaps" => "https://maps.app.goo.gl/JBCgfYRCUeDHdLuw8",
                "nama" => "Taman Sepat",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Tebet Barat Raya, RT.1/RW.10, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820",
                "id" => 474,
                "id_daerah" => 95,
                "link_gmaps" => "https://maps.app.goo.gl/YgJUWVTanNeBTSWN6",
                "nama" => "Tebet Eco Park",
                "rating" => "4.7",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 25 of wisatas (IDs: 475-494)
        $wisatas = [
            [
                "alamat" =>
                    "Jl. Wisata Cipanas, Sukamanah, Kec. Kaduhejo, Kabupaten Pandeglang, Banten 42253",
                "id" => 475,
                "id_daerah" => 98,
                "link_gmaps" => "https://maps.app.goo.gl/HY8cGMoQ296BYD8JA",
                "nama" => "Wisata Air Panas Gunung Torong Hot Spring Park",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. AMD Lintas Tim. Jl. Cikole Barat, Sukaratu, Kec. Majasari, Kabupaten Pandeglang, Banten 42217",
                "id" => 476,
                "id_daerah" => 98,
                "link_gmaps" => "https://maps.app.goo.gl/z8sGMoXY7nCe3PZ97",
                "nama" => "CAS Water Park Cikole",
                "rating" => "4.2",
            ],
            [
                "alamat" =>
                    "Unnamed Road, Sukamanah, Kec. Kaduhejo, Kabupaten Pandeglang, Banten 42252",
                "id" => 477,
                "id_daerah" => 98,
                "link_gmaps" => "https://maps.app.goo.gl/KGiTrs433g372ZVy7",
                "nama" => "Cisolong Waterpark",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "P3MH+W4R, Pasirpeuteuy, Cadasari, Pandeglang Regency, Banten 42251",
                "id" => 478,
                "id_daerah" => 98,
                "link_gmaps" => "https://maps.app.goo.gl/RxQEoB5AxrDUkYMFA",
                "nama" => "Wisata Gunung Karang",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. KH. Abdul Halim, Pandeglang, Kec. Pandeglang, Kabupaten Pandeglang, Banten 42211",
                "id" => 479,
                "id_daerah" => 98,
                "link_gmaps" => "https://maps.app.goo.gl/wyZPjp8CarZFyyL58",
                "nama" => "Alun-Alun Pandeglang",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Pesona Sawarna Komplek Tanjung Layar Blok Ciantir, Sawarna, Kec. Bayah, Kabupaten Lebak, Banten 42393",
                "id" => 480,
                "id_daerah" => 99,
                "link_gmaps" => "https://maps.app.goo.gl/V5c2bqveZSV1HiyH8",
                "nama" => "Tanjung Layar Beach",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "4942+5QF, Cikatomas, Cilograng, Lebak Regency, Banten 42393",
                "id" => 481,
                "id_daerah" => 99,
                "link_gmaps" => "https://maps.app.goo.gl/7tdi3ZmGffbK1q4y7",
                "nama" => "Curug Kanteh",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "285G+MFQ, Sawarna, Bayah, Lebak Regency, Banten 42393",
                "id" => 482,
                "id_daerah" => 99,
                "link_gmaps" => "https://maps.app.goo.gl/JPFG7Eb8jS6KBz4H9",
                "nama" => "Karang Taraje Beach",
                "rating" => "4.6",
            ],
            [
                "alamat" => "Kanekes, Leuwidamar, Lebak Regency, Banten 42362",
                "id" => 483,
                "id_daerah" => 99,
                "link_gmaps" => "https://maps.app.goo.gl/LeU3Fp83SuY11ce18",
                "nama" => "Wisata Kampung Marengo Baduy Luar",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "CC36+GHV, Cinyiru, Banjarsari, Kec. Lebakgedong, Kabupaten Lebak, Banten 42372",
                "id" => 484,
                "id_daerah" => 99,
                "link_gmaps" => "https://maps.app.goo.gl/PwUGyCu37RBwuhxK6",
                "nama" => "Lereng Cibolang Lebak",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "RJ4J+9W2, RT.007/RW.003, Babakan, Tangerang, Tangerang City, Banten 15118",
                "id" => 485,
                "id_daerah" => 100,
                "link_gmaps" => "https://maps.app.goo.gl/rZkp5xAF9Cke4ha47",
                "nama" => "Taman Bambu (Bamboo Park)",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Daan Mogot Rd No.60, RT.001/RW.001, Sukarasa, Tangerang, Tangerang City, Banten 15111",
                "id" => 486,
                "id_daerah" => 100,
                "link_gmaps" => "https://maps.app.goo.gl/v38KyybDovU4VspeA",
                "nama" => "Forest City Tangerang City",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "RJ3J+VVW, RT.001/RW.005, Babakan, Tangerang, Tangerang City, Banten 15118",
                "id" => 487,
                "id_daerah" => 100,
                "link_gmaps" => "https://maps.app.goo.gl/VzhSB7jc1kMbjW3D8",
                "nama" => "Taman Potret",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "RJHH+29Q, Sepanjang, Jl. Benteng Jaya, RT.004/RW.005, Sukarasa, Kec. Tangerang, Kota Tangerang, Banten 15111",
                "id" => 488,
                "id_daerah" => 100,
                "link_gmaps" => "https://maps.app.goo.gl/skgkLTeLHSzDaSWp9",
                "nama" => "Cisadane Walk",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "RJ7M+38C, Jl. Perintis Kemerdekaan, RT.001/RW.001, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118",
                "id" => 489,
                "id_daerah" => 100,
                "link_gmaps" => "https://maps.app.goo.gl/oRmkSm2ZdZnHAXXX7",
                "nama" => "Kampung Bekelir",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "V443+9JR, Sayar, Taktakan, Serang City, Banten 42162",
                "id" => 490,
                "id_daerah" => 101,
                "link_gmaps" => "https://maps.app.goo.gl/XFzWQ4xSWZ4CXicC8",
                "nama" => "Taman Batu Gede Sayar",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "W4WR+WVP, Jl. Banten Lama, Margasana, Kec. Kramatwatu, Kabupaten Serang, Banten 42616",
                "id" => 491,
                "id_daerah" => 101,
                "link_gmaps" => "https://maps.app.goo.gl/3MbLxGsBKY3FffUt8",
                "nama" => "Tasikardi Lake",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "Jl. Garuda No.59, RW.16, Cimuncang, Kec. Serang, Kota Serang, Banten 42111",
                "id" => 493,
                "id_daerah" => 101,
                "link_gmaps" => "https://maps.app.goo.gl/577aMBXUtBqmqLMi6",
                "nama" => "Taman Sari",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "V5HP+WGJ, Jl. Jend. Sudirman, Panancangan, Kec. Cipocok Jaya, Kota Serang, Banten 42124",
                "id" => 494,
                "id_daerah" => 101,
                "link_gmaps" => "https://maps.app.goo.gl/KAY2TdN19xTk4mEh7",
                "nama" => "Taman Tugu Debus",
                "rating" => "4.4",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 26 of wisatas (IDs: 495-514)
        $wisatas = [
            [
                "alamat" =>
                    "RJ4J+9W2, RT.007/RW.003, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118",
                "id" => 495,
                "id_daerah" => 102,
                "link_gmaps" => "https://maps.app.goo.gl/fSbYAbozvjYdVkRh7",
                "nama" => "Taman Bambu (Bamboo Park)",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "RJHH+29Q, Sepanjang, Jl. Benteng Jaya, RT.004/RW.005, Sukarasa, Kec. Tangerang, Kota Tangerang, Banten 15111",
                "id" => 496,
                "id_daerah" => 102,
                "link_gmaps" => "https://maps.app.goo.gl/Lu4xBbsKUUdLoym38",
                "nama" => "Cisadane Walk",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Jl. Scientia Boulevard, Curug Sangereng, Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810",
                "id" => 497,
                "id_daerah" => 102,
                "link_gmaps" => "https://maps.app.goo.gl/gJzotH4djP6WpHHD6",
                "nama" => "Scientia Square Park",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "RJ3J+VVW, RT.001/RW.005, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118",
                "id" => 498,
                "id_daerah" => 102,
                "link_gmaps" => "https://maps.app.goo.gl/3bZy39k9nnNsnrPf8",
                "nama" => "Taman Potret",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Daan Mogot No.60, RT.001/RW.005, Sukarasa, Kec. Tangerang, Kota Tangerang, Banten 15111",
                "id" => 499,
                "id_daerah" => 102,
                "link_gmaps" => "https://maps.app.goo.gl/U2QmofSKXC1CbQKb9",
                "nama" => "Taman Pintu Air",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "Jl. Jenderal Sudirman, Ramanuju, Kec. Purwakarta, Kota Cilegon, Banten 42431",
                "id" => 500,
                "id_daerah" => 103,
                "link_gmaps" => "https://maps.app.goo.gl/htHdXHRQYZgZmDd46",
                "nama" => "Tugu Kota Cilegon",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Komplek Cilegon Green, Jl. Ahmad Yani, Cibeber, Kec. Cibeber, Kota Cilegon, Banten 42426",
                "id" => 501,
                "id_daerah" => 103,
                "link_gmaps" => "https://maps.app.goo.gl/kQpazSnpfFxSVa2u8",
                "nama" => "Cilegon Green Waterpark",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "Jl. Panglima Polim No.150, Jombang Wetan, Kec. Jombang, Kota Cilegon, Banten 42411",
                "id" => 502,
                "id_daerah" => 103,
                "link_gmaps" => "https://maps.app.goo.gl/yqTSZkLLhQEboafV9",
                "nama" => "Taman Kota Cilegon",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Jenderal Sudirman, Ramanuju, Kec. Purwakarta, Kota Cilegon, Banten 42431",
                "id" => 503,
                "id_daerah" => 103,
                "link_gmaps" => "https://maps.app.goo.gl/CWb6aeuddD6ifvjx9",
                "nama" => "Alun-Alun Kota Cilegon",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "32VH+XVM, Link. Pringori, Suralaya, Kec. Pulomerak, Kota Cilegon, Banten 42439",
                "id" => 504,
                "id_daerah" => 103,
                "link_gmaps" => "https://maps.app.goo.gl/rpZRUQLbZStdHAWx6",
                "nama" => "Bukit Teletubbies",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "W4WR+WVP, Jl. Banten Lama, Margasana, Kec. Kramatwatu, Kabupaten Serang, Banten 42616",
                "id" => 505,
                "id_daerah" => 104,
                "link_gmaps" => "https://maps.app.goo.gl/WL78d2D6kY7cFTkf6",
                "nama" => "Danau Tasikardi",
                "rating" => "4",
            ],
            [
                "alamat" =>
                    "V5HP+WGJ, Jl. Jend. Sudirman, Panancangan, Kec. Cipocok Jaya, Kota Serang, Banten 42124",
                "id" => 506,
                "id_daerah" => 104,
                "link_gmaps" => "https://maps.app.goo.gl/kToPoeH8SBCsEAq58",
                "nama" => "Taman Tugu Debus",
                "rating" => "4.4",
            ],
            [
                "alamat" =>
                    "X592+G74, Kampung Pamarican, Banten, Kec. Kasemen, Kota Serang, Banten 42191",
                "id" => 492,
                "id_daerah" => 101,
                "link_gmaps" => "https://maps.app.goo.gl/NJ2PanP2kGwQ2Ywh9",
                "nama" => "Benteng Speelwijk - Banten Lama",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "X564+P79, Banten, Kec. Kasemen, Kota Serang, Banten 42191",
                "id" => 508,
                "id_daerah" => 104,
                "link_gmaps" => "https://maps.app.goo.gl/LTufcXBCJMqej27t5",
                "nama" => "Benteng Surosowan",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "Jl. Kemanisan, Kemanisan, Kec. Curug, Kota Serang, Banten 42171",
                "id" => 509,
                "id_daerah" => 104,
                "link_gmaps" => "https://maps.app.goo.gl/4EuCRrMJqS5T25nEA",
                "nama" => "Taman Wisata MBS",
                "rating" => "4.6",
            ],
            [
                "alamat" => "Ciater, Kec. Serpong, Tangerang, Banten 15317",
                "id" => 510,
                "id_daerah" => 105,
                "link_gmaps" => "https://maps.app.goo.gl/qbvajx4gk8R5znJX9",
                "nama" => "Tandon Ciater - Kota Tangerang Selatan",
                "rating" => "4.3",
            ],
            [
                "alamat" =>
                    "Jl. Pamulang Permai Bar. 1, Pamulang Bar., Kec. Pamulang, Kota Tangerang Selatan, Banten 15417",
                "id" => 511,
                "id_daerah" => 105,
                "link_gmaps" => "https://maps.app.goo.gl/8nbuS8yWkc8uCqTB6",
                "nama" => "Taman Edukasi Ganespa",
                "rating" => "4.7",
            ],
            [
                "alamat" =>
                    "Jl. Bukit Golf Utara No.2, Lengkong Wetan, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15310",
                "id" => 512,
                "id_daerah" => 105,
                "link_gmaps" => "https://maps.app.goo.gl/ARkRv68Kx4iQLoRf7",
                "nama" => "Monumen Palagan Lengkong",
                "rating" => "4.6",
            ],
            [
                "alamat" =>
                    "Kompleks Alvita Blok Q No. 14, Sawah Baru, Ciputat, Sawah Lama, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413",
                "id" => 513,
                "id_daerah" => 105,
                "link_gmaps" => "https://maps.app.goo.gl/bKt1ZyfFD74iUk7m6",
                "nama" => "Kandank Jurank Creative Park",
                "rating" => "4.5",
            ],
            [
                "alamat" =>
                    "MMCM+984, Jl. Letnan Sutopo, Ciater, Kec. Serpong, Kota Tangerang Selatan, Banten 15326",
                "id" => 514,
                "id_daerah" => 105,
                "link_gmaps" => "https://maps.app.goo.gl/7DvDumLWk94JomE46",
                "nama" => "Taman Kota 2 BSD",
                "rating" => "4.5",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);

        // Chunk 27 of wisatas (ID: 515)
        $wisatas = [
            [
                "alamat" => "Alamat wisata",
                "id" => 515,
                "id_daerah" => 1,
                "link_gmaps" => "https://maps.google.com/",
                "nama" => "Wisata Baru",
                "rating" => "4.5",
                "created_at" => "2025-06-05 17:12:27",
                "updated_at" => "2025-06-05 17:12:27",
            ],
        ];

        DB::table("wisatas")->insert($wisatas);
    }
}
