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
            ['alamat' => 'Kesek, Kec. Labang, Kabupaten Bangkalan, Jawa Timur 69163', 'id' => 1, 'id_daerah' => 1, 'link_gmaps' => 'https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6', 'nama' => 'Geger Hill', 'rating' => '4.2'],
            ['alamat' => 'Kesek, Kec. Labang, Kabupaten Bangkalan, Jawa Timur 69163', 'id' => 2, 'id_daerah' => 1, 'link_gmaps' => 'https://maps.app.goo.gl/tbgBonZiPJVN5wSZ6', 'nama' => 'wisatas Alam Kesek', 'rating' => '4.2'],
            ['alamat' => 'Makam Air Mata, Buduran, Arosbaya, Bangkalan Regency, East Java 69151', 'id' => 3, 'id_daerah' => 1, 'link_gmaps' => 'https://maps.app.goo.gl/HrkNk36bf3rSMRJf6', 'nama' => 'wisatas Aer Mata Ibu Arosbaya', 'rating' => '4.4'],
            ['alamat' => 'Jl. Raya Gebang, Gebang Barat, Gebang, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69115', 'id' => 4, 'id_daerah' => 1, 'link_gmaps' => 'https://maps.app.goo.gl/NMseCFYGgpnPmGLB7', 'nama' => 'Pantai Gebang', 'rating' => '4.3'],
            ['alamat' => 'Jakan, Parseh, Kec. Socah, Kabupaten Bangkalan, Jawa Timur 69161', 'id' => 5, 'id_daerah' => 1, 'link_gmaps' => 'https://maps.app.goo.gl/vCmTEjQyxM3NFfAE9', 'nama' => 'wisatas Bukit Jaddhih', 'rating' => '4.0'],
            ['alamat' => 'Lingkungan Sukowidi, Klatak, Kalipuro, Banyuwangi Regency, East Java 68421', 'id' => 6, 'id_daerah' => 2, 'link_gmaps' => 'https://maps.app.goo.gl/fzdVCwjKzpDvAkSg8', 'nama' => 'Pantai Cacalan', 'rating' => '4.4'],
            ['alamat' => 'Dusun Krajan, Dadapan, Kabat, Banyuwangi Regency, East Java 68461', 'id' => 7, 'id_daerah' => 2, 'link_gmaps' => 'https://maps.app.goo.gl/i8PvToKhGkxeGNEK8', 'nama' => 'Banyuwangi Park', 'rating' => '4.5'],
            ['alamat' => 'Jl. Diponegoro No.2, Kepatihan, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68411', 'id' => 8, 'id_daerah' => 2, 'link_gmaps' => 'https://maps.app.goo.gl/Q59p7tFLNUNMtJS9A', 'nama' => 'Taman Blambangan', 'rating' => '4.6'],
            ['alamat' => 'Jl. Letjen Di. Panjaitan No.5, Kampungmandar, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68414', 'id' => 9, 'id_daerah' => 2, 'link_gmaps' => 'https://maps.app.goo.gl/qqyynAMLYjFrjHJJA', 'nama' => 'Jembatan wisatas Pantai Boom', 'rating' => '4.5'],
            ['alamat' => 'Pantai plengsengan, Lateng, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68413', 'id' => 10, 'id_daerah' => 2, 'link_gmaps' => 'https://maps.app.goo.gl/CrZg9ZpCuS4PajzC7', 'nama' => 'Pantai ancol plengsengan', 'rating' => '4.5'],
            ['alamat' => 'Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316', 'id' => 11, 'id_daerah' => 3, 'link_gmaps' => 'https://maps.app.goo.gl/eMw2zYfstL2xKhuD8', 'nama' => 'Batu Night Spectacular (BNS)', 'rating' => '4.5'],
            ['alamat' => 'Jl. Gn. Banyak, Gunungsari, Kec. Bumiaji, Kota Batu, Jawa Timur 65312', 'id' => 12, 'id_daerah' => 3, 'link_gmaps' => 'https://maps.app.goo.gl/RKiEoXz3xHxeqD7B6', 'nama' => 'Taman Langit Gunung Banyak', 'rating' => '4.6'],
            ['alamat' => 'Jl. Brigadir Jenderal Moh. Manan, Songgokerto, Kec. Batu, Kota Batu, Jawa Timur 65391', 'id' => 13, 'id_daerah' => 3, 'link_gmaps' => 'https://maps.app.goo.gl/7w9j1bE7npiuax8A6', 'nama' => 'Payung Kota wisatas Batu', 'rating' => '4.5'],
            ['alamat' => 'Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316', 'id' => 14, 'id_daerah' => 3, 'link_gmaps' => 'https://maps.app.goo.gl/WfsCyhBZakUCmES98', 'nama' => 'Lampion Garden (BNS)', 'rating' => '4.6'],
            ['alamat' => 'Jl. Raya Pandanrejo No.308, Giripurno, Kec. Bumiaji, Kota Batu, Jawa Timur 65332', 'id' => 15, 'id_daerah' => 3, 'link_gmaps' => 'https://maps.app.goo.gl/T8qLyeVpWPP4D2Bw9', 'nama' => 'wisatas Alam Taman Dolan', 'rating' => '4.2'],
            ['alamat' => 'Bendogerit, Sananwetan, Blitar City, East Java 66133', 'id' => 16, 'id_daerah' => 4, 'link_gmaps' => 'https://maps.app.goo.gl/sQcBjHc7hwDJZvTKA', 'nama' => 'Blitar Green Park', 'rating' => '4.2'],
            ['alamat' => 'Jl. Merdeka, Kepanjen Lor, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66117', 'id' => 17, 'id_daerah' => 4, 'link_gmaps' => 'https://maps.app.goo.gl/CjGfUYiwucy6GDKF6', 'nama' => 'Taman Pecut Kota Blitar', 'rating' => '4.4'],
            ['alamat' => 'Jl. Diponegoro No.12, Bendogerit, Kec. Sananwetan, Kota Blitar, Jawa Timur 66133', 'id' => 18, 'id_daerah' => 4, 'link_gmaps' => 'https://maps.app.goo.gl/p3m3F8Q4mZbLYs9C6', 'nama' => 'Taman Kebon Rojo', 'rating' => '4.5'],
            ['alamat' => 'Jl. Sudanco Supriyadi, Bendogerit, Kec. Sananwetan, Kota Blitar, Jawa Timur 66133', 'id' => 19, 'id_daerah' => 4, 'link_gmaps' => 'https://maps.app.goo.gl/UkoWxuCsCDT3EtdM7', 'nama' => 'Monumen PETA', 'rating' => '4.7'],
            ['alamat' => 'Jl. Jenderal Sudirman No.16, Kepanjen Lor, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66112', 'id' => 20, 'id_daerah' => 4, 'link_gmaps' => 'https://maps.app.goo.gl/P45BFN7SyKFVaQrx5', 'nama' => 'Bongares wisatas 3D Blitar', 'rating' => '3.9'],
        ];

        DB::table('wisatas')->insert($wisatas);

        // Chunk 2 of wisatas (IDs: 21-40)
        $wisatas = [
            ['alamat' => 'Taman rejekwesi, Jl. Rajekwesi, Ledok Kulon Dua, Jetak, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115', 'id' => 21, 'id_daerah' => 5, 'link_gmaps' => 'https://maps.app.goo.gl/WtvoMYbhQjGxoS4r5', 'nama' => 'Taman Rajekwesi', 'rating' => '4.4'],
            ['alamat' => 'Jl. MH. Thamrin No.109-113, Ledok Kulon Tiga, Ledok Wetan, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62113', 'id' => 22, 'id_daerah' => 5, 'link_gmaps' => 'https://maps.app.goo.gl/WHhehF1BVvRKxfE99', 'nama' => 'MALIOGORO', 'rating' => '4.6'],
            ['alamat' => 'Jl. Veteran No.20, Jambean, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115', 'id' => 23, 'id_daerah' => 5, 'link_gmaps' => 'https://maps.app.goo.gl/4b8o1rWnU2j8g1ka9', 'nama' => 'GoFun Bojonegoro', 'rating' => '4.3'],
            ['alamat' => 'Ngembul, Sendangharjo, Ngasem, Bojonegoro Regency, East Java 62171', 'id' => 24, 'id_daerah' => 5, 'link_gmaps' => 'https://maps.app.goo.gl/cSZjebhUFwqD5fJ97', 'nama' => 'wisatas Kayangan Api', 'rating' => '4.4'],
            ['alamat' => 'Jl. Teuku Umar, Kepatihan, Kadipaten, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62111', 'id' => 25, 'id_daerah' => 5, 'link_gmaps' => 'https://maps.app.goo.gl/8s5DUsJu6oroEU3bA', 'nama' => 'Taman Lokomotif Diesel Fried Krupp D30133', 'rating' => '4.5'],
            ['alamat' => '4R2H+867, Purnama, Sekarputih, Kec. Tegalampel, Kabupaten Bondowoso, Jawa Timur 68291', 'id' => 26, 'id_daerah' => 6, 'link_gmaps' => 'https://maps.app.goo.gl/jmuJowxyQXjno6Rs6', 'nama' => 'wisatas Religi Makam Ki Ronggo', 'rating' => '4.4'],
            ['alamat' => '3RPF+P2W, Kauman, Kotakulon, Bondowoso, Bondowoso Regency, East Java 68211', 'id' => 27, 'id_daerah' => 6, 'link_gmaps' => 'https://maps.app.goo.gl/st4DfbohJ2VFiU2w9', 'nama' => 'Alun Alun Bondowoso', 'rating' => '4.4'],
            ['alamat' => '3Q6Q+WM2, Krajan, Pakuwesi, Kec. Curah Dami, Kabupaten Bondowoso, Jawa Timur 68251', 'id' => 28, 'id_daerah' => 6, 'link_gmaps' => 'https://maps.app.goo.gl/KxFkzYJrx9F1jfGA8', 'nama' => 'Taman Beringin Asri', 'rating' => '4.3'],
            ['alamat' => '2R93+9C2, Pasnan, Taman, Kec. Grujugan, Kabupaten Bondowoso, Jawa Timur 68261', 'id' => 29, 'id_daerah' => 6, 'link_gmaps' => 'https://maps.app.goo.gl/EkCpSzABnBsqfQLF8', 'nama' => 'Pemandian Tasnan', 'rating' => '4.0'],
            ['alamat' => '3RVW+VR2, Area Sawah/Kebun, Pejaten, Bondowoso, Bondowoso Regency, East Java 68218', 'id' => 30, 'id_daerah' => 6, 'link_gmaps' => 'https://maps.app.goo.gl/qCwNd6EL8obed8xu7', 'nama' => 'wisatas Agro Tanian Lanjheng', 'rating' => '4.8'],
            ['alamat' => 'RJVM+7JP, Jarangkuwung, Ngipik, Kec. Gresik, Kabupaten Gresik, Jawa Timur 61151', 'id' => 31, 'id_daerah' => 7, 'link_gmaps' => 'https://maps.app.goo.gl/ty9LY2tNCeqpuB7c8', 'nama' => 'Telaga Ngipik', 'rating' => '4.1'],
            ['alamat' => 'Jl. Qomaruddin No.26, Setingi, Randuagung, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61121', 'id' => 32, 'id_daerah' => 7, 'link_gmaps' => 'https://maps.app.goo.gl/xaAdut8CXUCqgPnbA', 'nama' => 'Bukit Awan Water Park', 'rating' => '3.4'],
            ['alamat' => 'RJJJ+63R, Jl. Kedanyang - Gresik No.4, Pedukuhan, Kebomas, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61124', 'id' => 33, 'id_daerah' => 7, 'link_gmaps' => 'https://maps.app.goo.gl/WwqvEm4zWSEGeFzF7', 'nama' => 'wisatas Religi Sunan Giri', 'rating' => '4.8'],
            ['alamat' => 'Jalan Ponganganrejo No. 34, Suci, Manyar, Suci, Kec. Gresik, Kabupaten Gresik, Jawa Timur 61151', 'id' => 34, 'id_daerah' => 7, 'link_gmaps' => 'https://maps.app.goo.gl/MxbgHoHcjDV4hGzk7', 'nama' => 'Gunung Kapur Suci', 'rating' => '4.3'],
            ['alamat' => 'Jl. Sunan Giri XIII, Pedukuhan, Kebomas, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61124', 'id' => 35, 'id_daerah' => 7, 'link_gmaps' => 'https://maps.app.goo.gl/ypvRFYL8HU6Sbhcu6', 'nama' => 'Situs Giri Kedaton & Makam Raden Supeno', 'rating' => '4.6'],
            ['alamat' => 'Jl. Ambulu - Watu Ulo, Sido Mulyo, Sumberrejo, Kec. Ambulu, Kabupaten Jember, Jawa Timur 68162', 'id' => 36, 'id_daerah' => 8, 'link_gmaps' => 'https://maps.app.goo.gl/c7D8LLDpmLuaDt936', 'nama' => 'Teluk Love', 'rating' => '4.4'],
            ['alamat' => 'Kaliwates, Jl. PB Sudirman, Kp. Using, Jemberlor, Kec. Patrang, Kabupaten Jember, Jawa Timur 68131', 'id' => 37, 'id_daerah' => 8, 'link_gmaps' => 'https://maps.app.goo.gl/ppatHm9iyNxa6c2L6', 'nama' => 'Alun-Alun Jember', 'rating' => '4.5'],
            ['alamat' => 'Jl. Mujahir, Krajan, Sukorambi, Kec. Sukorambi, Kabupaten Jember, Jawa Timur 68151', 'id' => 38, 'id_daerah' => 8, 'link_gmaps' => 'https://maps.app.goo.gl/MVo2gvRBcBBpjvrr5', 'nama' => 'Sukorambi Botanical Garden', 'rating' => '4.3'],
            ['alamat' => 'Jl. DR. Wahidin, Kelurahan Jember Kidu, Jember Kidul, Kec. Kaliwates, Kabupaten Jember, Jawa Timur', 'id' => 39, 'id_daerah' => 8, 'link_gmaps' => 'https://maps.app.goo.gl/UxL2BmdFnS4DZeuA6', 'nama' => 'Menara Air \" Hindia Belanda \" Pasar Tanjung', 'rating' => '4.2'],
            ['alamat' => 'WP6R+GHC, Duplang, Kamal, Kec. Arjasa, Kabupaten Jember, Jawa Timur 68191', 'id' => 40, 'id_daerah' => 8, 'link_gmaps' => 'https://maps.app.goo.gl/9RCTrib5aa4noH5s8', 'nama' => 'Situs DuplangKamal', 'rating' => '4.4'],
        ];

        DB::table('wisatas')->insert($wisatas);

        // Chunk 3 of wisatas (IDs: 41-60)
        $wisatas = [
            ['alamat' => 'Jalan Buyut Nodi No.99, Waru, Made, Kec. Kudu, Kabupaten Jombang, Jawa Timur 61454', 'id' => 41, 'id_daerah' => 9, 'link_gmaps' => 'https://maps.app.goo.gl/9nrNC1fanxW91NYZA', 'nama' => 'Sendang Made', 'rating' => '4.3'],
            ['alamat' => 'Kepanjen, Jombang, Jombang Regency, East Java 61419', 'id' => 42, 'id_daerah' => 9, 'link_gmaps' => 'https://maps.app.goo.gl/1hE9vxK1WK6TZYJQA', 'nama' => 'Kebon Rojo Park', 'rating' => '4.4'],
            ['alamat' => 'Area Sawah/Kebun, Wonokerto, Kec. Wonosalam, Kabupaten Jombang, Jawa Timur 61476', 'id' => 43, 'id_daerah' => 9, 'link_gmaps' => 'https://maps.app.goo.gl/DdHy11SorzgBe3sq9', 'nama' => 'Air Terjun Sekelip Wonosalam', 'rating' => '3.8'],
            ['alamat' => 'F777+24Q, Keplaksari, Peterongan, Nglungge, Keplaksari, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61481', 'id' => 44, 'id_daerah' => 9, 'link_gmaps' => 'https://maps.app.goo.gl/nQAdDVy1EfSULe8j8', 'nama' => 'Taman Kebon Ratu', 'rating' => '4.4'],
            ['alamat' => 'Area Sawah/Kebun, Jenisgelaran, Bareng, Jombang Regency, East Java 61474', 'id' => 45, 'id_daerah' => 9, 'link_gmaps' => 'https://maps.app.goo.gl/mFHUsnysVoAJZ4x48', 'nama' => 'Air terjun gerenjeng', 'rating' => '4.3'],
            ['alamat' => '52Q3+PJ9, Jl. Veteran, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112', 'id' => 46, 'id_daerah' => 10, 'link_gmaps' => 'https://maps.app.goo.gl/k9zuWR1arSrNWVTGA', 'nama' => 'Taman Sekartaji Kota Kediri', 'rating' => '4.5'],
            ['alamat' => '52JH+PVW, Banjaran, Kota, Kediri Regency, East Java 64129', 'id' => 47, 'id_daerah' => 10, 'link_gmaps' => 'https://maps.app.goo.gl/YqLaHxvwYF3LZ29z7', 'nama' => 'Taman Hutan Joyoboyo Kediri', 'rating' => '4.5'],
            ['alamat' => 'Jl. Raya Kediri - Plosoklaten No.163, Dadapan, Sukorejo, Kec. Ngasem, Kabupaten Kediri, Jawa Timur 64182', 'id' => 48, 'id_daerah' => 10, 'link_gmaps' => 'https://maps.app.goo.gl/M4esk6HKq1Fyunw16', 'nama' => 'TAMAN HIJAU SLG', 'rating' => '4.6'],
            ['alamat' => '5XVF+43F, Pojok, Mojoroto, Kediri Regency, East Java 64115', 'id' => 49, 'id_daerah' => 10, 'link_gmaps' => 'https://maps.app.goo.gl/hZWtS869iTQiVqYVA', 'nama' => 'Goa Selomangleng', 'rating' => '4.5'],
            ['alamat' => '5XRG+59R, Jl. Selomangleng, Pojok, Kec. Mojoroto, Kota Kediri, Jawa Timur 64115', 'id' => 50, 'id_daerah' => 10, 'link_gmaps' => 'https://maps.app.goo.gl/dzz5SqVUeSNjxoJaA', 'nama' => 'Sun Flower Park Kediri', 'rating' => '4.1'],
            ['alamat' => 'Jl. Raya Paciran, Paciran, Kec. Paciran, Kabupaten Lamongan, Jawa Timur 62276', 'id' => 51, 'id_daerah' => 11, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77c3505a57d187:0x1eb952764236c3c8', 'nama' => 'WBL', 'rating' => '4.6'],
            ['alamat' => 'JL. Raya, Paciran, Kec. Paciran, Kabupaten Lamongan, Jawa Timur 62264', 'id' => 52, 'id_daerah' => 11, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77c269574a4f6b:0x51f14da4d9d4dd1', 'nama' => 'Maharani Zoo', 'rating' => '4.6'],
            ['alamat' => 'Kentong, Labuhan, Kec. Brondong, Kabupaten Lamongan, Jawa Timur 62263', 'id' => 53, 'id_daerah' => 11, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77bf07c8fc3dcd:0x9435c55230ef503d', 'nama' => 'Pantai Kutang', 'rating' => '4.2'],
            ['alamat' => 'Jl. Raya Paciran, Paciran, Kec. Paciran, Kabupaten Lamongan, Jawa Timur 62264', 'id' => 54, 'id_daerah' => 11, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77c2400e695c8f:0xd30a4707034bb0c', 'nama' => 'Tanjung Kodok', 'rating' => '4.4'],
            ['alamat' => 'Drajat, Paciran, Lamongan Regency, East Java 62264', 'id' => 55, 'id_daerah' => 11, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2e77e829c1b8c3dd:0x51cfb882d93698dc', 'nama' => 'Makam Sunan Drajat', 'rating' => '4.7'],
            ['alamat' => 'Jalan Tumpak Sewu, Besukcukit, Sidomulyo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374', 'id' => 56, 'id_daerah' => 12, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd614085869da41:0x4a94cc5f06772982', 'nama' => 'Tumpak Sewu', 'rating' => '4.8'],
            ['alamat' => 'Argosari, Senduro, Nganjir, Sariwani, Kec. Sukapura, Kabupaten Lumajang, Jawa Timur 67254', 'id' => 57, 'id_daerah' => 12, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd647e555555555:0x5cf5334088ce710e', 'nama' => 'Puncak B29', 'rating' => '4.7'],
            ['alamat' => 'Unnamed Road, Krajan Dua, Selok Awar Awar, Kec. Pasirian, Kabupaten Lumajang, Jawa Timur 67372', 'id' => 58, 'id_daerah' => 12, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd66fcd1ae79b8f:0xeb11a019351085d4', 'nama' => 'Watu Pecak', 'rating' => '4.4'],
            ['alamat' => 'Purworejo, Senduro, Pancen, Purworejo, Kec. Lumajang, Kabupaten Lumajang, Jawa Timur 67361', 'id' => 59, 'id_daerah' => 12, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd64280dbe9bdc3:0xea824b7ba626bafc', 'nama' => 'Selokambang', 'rating' => '4.4'],
            ['alamat' => 'QWGP+8F2, Mulyoarjo, Pronojiwo, Kec. Pronojiwo, Kabupaten Lumajang, Jawa Timur 67374', 'id' => 60, 'id_daerah' => 12, 'link_gmaps' => 'https://maps.google.com/maps?hl=en&gl=id&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x2dd614708a8a9a37:0xe43ba62d46777f16', 'nama' => 'Kapas Biru', 'rating' => '4.7'],
        ];

        DB::table('wisatas')->insert($wisatas);

        // Chunk 4 of wisatas (IDs: 61-80)
        $wisatas = [
            ['alamat' => 'Jl. Pahlawan No.31, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63121', 'id' => 61, 'id_daerah' => 13, 'link_gmaps' => 'https://maps.app.goo.gl/wyxr2edFggxajtvM6', 'nama' => 'Malioboro Madiun', 'rating' => '4.7'],
            ['alamat' => 'Jl. Rimbakaya, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63117', 'id' => 62, 'id_daerah' => 13, 'link_gmaps' => 'https://maps.app.goo.gl/HBZsrVBHdCjiwDaW7', 'nama' => 'Taman Trembesi Kota Madiun', 'rating' => '4.3'],
            ['alamat' => 'Taman, Madiun City, East Java', 'id' => 63, 'id_daerah' => 13, 'link_gmaps' => 'https://maps.app.goo.gl/c8BPpApQku5SmjRN9', 'nama' => 'Ngrowo Bening Edu Park Kota Madiun', 'rating' => '4.6'],
            ['alamat' => 'Jl. Perintis Kemerdekaan, Kartoharjo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63121', 'id' => 64, 'id_daerah' => 13, 'link_gmaps' => 'https://maps.app.goo.gl/zDvGS7waRWsfymtK9', 'nama' => 'Patung Merlion', 'rating' => '4.7'],
            ['alamat' => 'Jl. A. Yani No.69, Pangongangan, Kec. Manguharjo, Kota Madiun, Jawa Timur 63121', 'id' => 65, 'id_daerah' => 13, 'link_gmaps' => 'https://maps.app.goo.gl/6Mv6HC3RAwHMD8uJ9', 'nama' => 'Taman Bantaran Kota Madiun', 'rating' => '4.4'],
            ['alamat' => 'Menggolo, Truneng, Kec. Sukomoro, Kabupaten Magetan, Jawa Timur 63391', 'id' => 66, 'id_daerah' => 14, 'link_gmaps' => 'https://maps.app.goo.gl/CAheZWYRNJfxd3rz8', 'nama' => 'Agrotourism Magetan Green Garden', 'rating' => '4.1'],
            ['alamat' => 'Jl. Raya Sarangan, Plaosan II, Plaosan, Kec. Plaosan, Kabupaten Magetan, Jawa Timur 63361', 'id' => 67, 'id_daerah' => 14, 'link_gmaps' => 'https://maps.app.goo.gl/aNAv2ubZc9gXxBXaA', 'nama' => 'KRM', 'rating' => '4.6'],
            ['alamat' => 'Genilangit, Poncol, Magetan Regency, East Java 63362', 'id' => 68, 'id_daerah' => 14, 'link_gmaps' => 'https://maps.app.goo.gl/7GEJEAbdsRKDckBS9', 'nama' => 'Geni Langit', 'rating' => '4.5'],
            ['alamat' => 'Janggan, Poncol, Magetan Regency, East Java 63362', 'id' => 69, 'id_daerah' => 14, 'link_gmaps' => 'https://maps.app.goo.gl/8PAwKS2WVpniwMbY8', 'nama' => 'Ujung Kulon Janggan', 'rating' => '4.2'],
            ['alamat' => 'Sarangan, Plaosan, Kali Jumok, Sarangan, Magetan, Kabupaten Magetan, Jawa Timur 63361', 'id' => 70, 'id_daerah' => 14, 'link_gmaps' => 'https://maps.app.goo.gl/GuQt9MGMCZdgWGez7', 'nama' => 'Mojosemi', 'rating' => '4.5'],
            ['alamat' => 'Jl. Graha Kencana Raya Jl. Raya Karanglo No.66, Karanglo, Balearjosari, Kec. Blimbing, Kota Malang, Jawa Timur 65126', 'id' => 71, 'id_daerah' => 15, 'link_gmaps' => 'https://maps.app.goo.gl/gKadvDEJDCn56zJ48', 'nama' => 'Malang Night Paradise', 'rating' => '4.6'],
            ['alamat' => 'Jl. Merdeka Selatan, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119', 'id' => 72, 'id_daerah' => 15, 'link_gmaps' => 'https://maps.app.goo.gl/PLPnFTqKxcmM1sHf8', 'nama' => 'Alun Alun Malang', 'rating' => '4.5'],
            ['alamat' => 'Jalan Jakarta Oro-oro Dowo, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65113', 'id' => 73, 'id_daerah' => 15, 'link_gmaps' => 'https://maps.app.goo.gl/hxJJyZFFZyBGdEgn6', 'nama' => 'Taman Kunang Kunang', 'rating' => '4.2'],
            ['alamat' => 'Jl. Jaksa Agung Suprapto, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65112', 'id' => 74, 'id_daerah' => 15, 'link_gmaps' => 'https://maps.app.goo.gl/vz9pGoGtbNafPXxKA', 'nama' => 'White Kampung Malang Travel', 'rating' => '4.3'],
            ['alamat' => 'wendit utara Rt 4 Rw 8 Desa Mangliawan. kec. Pakis Kab Malang. Kp, Krajan, Mangliawan, Kec. Pakis, Kabupaten Malang, Jawa Timur 65154', 'id' => 75, 'id_daerah' => 15, 'link_gmaps' => 'https://maps.app.goo.gl/NWBmohhD39gMm3Kf7', 'nama' => 'Mata Air Wendit Lanang', 'rating' => '4.3'],
            ['alamat' => 'Mergelo, Magersari, Mojokerto City, East Java', 'id' => 76, 'id_daerah' => 16, 'link_gmaps' => 'https://maps.app.goo.gl/Rc4HBB7nzM15AZDEA', 'nama' => 'Alun-Alun Kota Mojokerto', 'rating' => '4.5'],
            ['alamat' => 'No., Jl. Mager Sari-Ngares Kidul No.14, Lorsari, Mlirip, Kec. Jetis, Kabupaten Mojokerto, Jawa Timur 61352', 'id' => 77, 'id_daerah' => 16, 'link_gmaps' => 'https://maps.app.goo.gl/8DEzXEgz7KpEAPsw8', 'nama' => 'Taman Brantas Indah', 'rating' => '4.2'],
            ['alamat' => 'GCRQ+M3J, Jl. Hayam Wuruk, Mergelo, Magersari, Kec. Magersari, Kota Mojokerto, Jawa Timur 61318', 'id' => 78, 'id_daerah' => 16, 'link_gmaps' => 'https://maps.app.goo.gl/9dQLg54fogwrBwPE8', 'nama' => 'Jogging Track Sungai Brantas Mojokerto', 'rating' => '4.1'],
            ['alamat' => 'Jalan R.A Kartini, Mergelo, Kauman, Kec. Prajurit Kulon, Kota Mojokerto, Jawa Timur 61382', 'id' => 79, 'id_daerah' => 16, 'link_gmaps' => 'https://maps.app.goo.gl/JgoT4AkjCYDVtn4i6', 'nama' => 'Museum Gubug Wayang', 'rating' => '4.7'],
            ['alamat' => 'Jl. By Pass Mojokerto No.Km. 54, Kedungpring, Jampirogo, Kec. Sooko, Kabupaten Mojokerto, Jawa Timur 61361', 'id' => 80, 'id_daerah' => 16, 'link_gmaps' => 'https://maps.app.goo.gl/FRNsbt1Gvn4McF3b6', 'nama' => 'Waterland Park', 'rating' => '4.1'],
        ];

        DB::table('wisatas')->insert($wisatas);

        // Chunk 5 of wisatas (IDs: 81-100)
        $wisatas = [
            ['alamat' => 'Jl. Anjuk Ladang Lapak No.12, Ploso, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64417', 'id' => 81, 'id_daerah' => 17, 'link_gmaps' => 'https://maps.app.goo.gl/1TGf6ji12tehVNcA6', 'nama' => 'Anjuk Ladang Recreation Park', 'rating' => '4.1'],
            ['alamat' => 'Jl. Brantas, Babadan, Werungotok, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419', 'id' => 82, 'id_daerah' => 17, 'link_gmaps' => 'https://maps.app.goo.gl/t3EekXiW4fcmtQg37', 'nama' => 'Taman Kota Pandan Wilis', 'rating' => '4.3'],
            ['alamat' => 'Jl. Barito, Begadung Barat, Begadung, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64412', 'id' => 83, 'id_daerah' => 17, 'link_gmaps' => 'https://maps.app.goo.gl/LGKJ7wMDSoUVMnu29', 'nama' => 'Pintar Park', 'rating' => '4.2'],
            ['alamat' => 'Jl. Ahmad Yani No.246, Payaman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64418', 'id' => 84, 'id_daerah' => 17, 'link_gmaps' => 'https://maps.app.goo.gl/8vgHAjVu3dBLdWAXA', 'nama' => 'TAMAN NYAWIJI', 'rating' => '4.5'],
            ['alamat' => 'Terminal Bus anjuk ladang, Jalan Gatot Subroto Ringin Anom Ringin Anom Kauman (timur, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411', 'id' => 85, 'id_daerah' => 17, 'link_gmaps' => 'https://maps.app.goo.gl/6rJni6MBEG3Ts21Y9', 'nama' => 'Anjuk Ladang Museum', 'rating' => '4.4'],
            ['alamat' => 'Kerek, Margomulyo, Ngawi, Ngawi Regency, East Java 63217', 'id' => 86, 'id_daerah' => 18, 'link_gmaps' => 'https://maps.app.goo.gl/Gp2s7iWffD73m8iQ7', 'nama' => 'Tugu Kartonyono Ngawi', 'rating' => '4.6'],
            ['alamat' => 'Jl. Bojonegoro - Ngawi, Kerek, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63218', 'id' => 87, 'id_daerah' => 18, 'link_gmaps' => 'https://maps.app.goo.gl/gKWXAfnKzWdHsrHb8', 'nama' => 'Taman wisatas Bukit Kerek', 'rating' => '3.9'],
            ['alamat' => 'Jln. taman candi, RT.01/RW.01, Ketanggi, Kartoharjo, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63251', 'id' => 88, 'id_daerah' => 18, 'link_gmaps' => 'https://maps.app.goo.gl/GRNdCYr3RxmG6dtZA', 'nama' => 'Taman Candi Ngawi', 'rating' => '4.2'],
            ['alamat' => 'Jl. Untung Suropati No.II, Pelem II, Pelem, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211', 'id' => 89, 'id_daerah' => 18, 'link_gmaps' => 'https://maps.app.goo.gl/p54xexnSgZAZp6PG9', 'nama' => 'Fort van den Bosch', 'rating' => '4.4'],
            ['alamat' => 'Jl. Raya Ngawi-Madiun No.KM. 7, Sambi, Tempuran, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63253', 'id' => 90, 'id_daerah' => 18, 'link_gmaps' => 'https://maps.app.goo.gl/qfQs9cSspCAeZKLcA', 'nama' => 'Taman wisatas Tirtonirmolo Waterpark', 'rating' => '3.9'],
            ['alamat' => 'Teleng ria, Balong, Sidoharjo, Kec. Pacitan, Kabupaten Pacitan, Jawa Timur 63514', 'id' => 91, 'id_daerah' => 19, 'link_gmaps' => 'https://maps.app.goo.gl/9WRkmHrsCLBs9DgM7', 'nama' => 'PARAI TELENGRIA', 'rating' => '4.5'],
            ['alamat' => 'Krajan, Dadapan, Pringkuku, Pacitan Regency, East Java 63552', 'id' => 92, 'id_daerah' => 19, 'link_gmaps' => 'https://maps.app.goo.gl/iFvRWUDHnYKhgJWC6', 'nama' => 'Sentono Gentong Pacitan', 'rating' => '4.6'],
            ['alamat' => 'Temon, Ploso, Pacitan, Pacitan Regency, East Java 60253', 'id' => 93, 'id_daerah' => 19, 'link_gmaps' => 'https://maps.app.goo.gl/TsU1KM7Qrgy5Ef2j7', 'nama' => 'Taman Pancer Door', 'rating' => '4.4'],
            ['alamat' => 'Jl. Sugiyo Pranoto No.1, RT.1/RW.01, Krajan, Kec. Pacitan, Kabupaten Pacitan, Jawa Timur 63511', 'id' => 94, 'id_daerah' => 19, 'link_gmaps' => 'https://maps.app.goo.gl/SsRDRFWYvsweApbX6', 'nama' => 'Alun-Alun Pacitan', 'rating' => '4.5'],
            ['alamat' => 'Jati, Purworejo, Pacitan, Pacitan Regency, East Java 63518', 'id' => 95, 'id_daerah' => 19, 'link_gmaps' => 'https://maps.app.goo.gl/B4CrwdgSMC2nGRgD6', 'nama' => 'PEMANDIAN AIR HANGAT (TIRTO CEMAWUK))', 'rating' => '4.5'],
            ['alamat' => 'Rw. 03, Barurambat Kota, Pamekasan, Pamekasan Regency, East Java 69317', 'id' => 96, 'id_daerah' => 20, 'link_gmaps' => 'https://maps.app.goo.gl/xV9nV3p956b2Jymp9', 'nama' => 'Arek Lancor Pamekasan', 'rating' => '4.7'],
            ['alamat' => 'Asemanis Satu, Larangan Tokol, Kec. Tlanakan, Kabupaten Pamekasan, Jawa Timur 69371', 'id' => 97, 'id_daerah' => 20, 'link_gmaps' => 'https://maps.app.goo.gl/G4Bjdyeh2to2AZ5p8', 'nama' => 'wisatas Api Abadi', 'rating' => '4.2'],
            ['alamat' => 'Jl. Mesigit, Rw. 03, Barurambat Kota, Kec. Pamekasan, Kabupaten Pamekasan, Jawa Timur 69317', 'id' => 98, 'id_daerah' => 20, 'link_gmaps' => 'https://maps.app.goo.gl/kdzrxoJiRwRqEfcr8', 'nama' => 'Alun Alun Pamekasan', 'rating' => '4.5'],
            ['alamat' => 'Jl. Sersan Mesrul, Gladak Anyar, Kec. Pamekasan, Kabupaten Pamekasan, Jawa Timur 69317', 'id' => 99, 'id_daerah' => 20, 'link_gmaps' => 'https://maps.app.goo.gl/HwxP1rDHvqm8foDK7', 'nama' => 'Taman Gladak Anyar', 'rating' => '4.0'],
            ['alamat' => 'Toron Semalem, Blumbungan, Kec. Larangan, Kabupaten Pamekasan, Jawa Timur 69383', 'id' => 100, 'id_daerah' => 20, 'link_gmaps' => 'https://maps.app.goo.gl/ApNC6yXs7q8D7iHB7', 'nama' => 'Kampoeng Toron Samalem', 'rating' => '4.2'],
        ];

        DB::table('wisatas')->insert($wisatas);

        // Chunk 6 of wisatas (IDs: 101-120)
        $wisatas = [
            ['alamat' => 'Rangge Timur, Ranggeh, Kec. Gondang Wetan, Pasuruan, Jawa Timur 67174', 'id' => 101, 'id_daerah' => 21, 'link_gmaps' => 'https://maps.app.goo.gl/tgs8Gw2Y2Nzkh4G8A', 'nama' => 'Taman Ria Suropati', 'rating' => '4.5'],
            ['alamat' => 'Banyubiru Kidul, Sumber Rejo, Kec. Winongan, Pasuruan, Jawa Timur 67182', 'id' => 102, 'id_daerah' => 21, 'link_gmaps' => 'https://maps.app.goo.gl/Ug5mYDUyG8iP4yj38', 'nama' => 'wisatas Alam Banyubiru', 'rating' => '4.4'],
            ['alamat' => 'Jl. Dokter Wahidin Sudiro Husodo, Pekuncen, Kec. Panggungrejo, Kota Pasuruan, Jawa Timur 67126', 'id' => 103, 'id_daerah' => 21, 'link_gmaps' => 'https://maps.app.goo.gl/A9M1ehe15gUPCJyA6', 'nama' => 'Taman Pekuncen', 'rating' => '4.2'],
            ['alamat' => 'Jl. Raya Tulang, Ledug, Kec. Prigen, Pasuruan, Jawa Timur 67157', 'id' => 104, 'id_daerah' => 21, 'link_gmaps' => 'https://maps.app.goo.gl/Eg8mDZPnFmnFh89c6', 'nama' => 'Ngopibareng Pintulangit', 'rating' => '4.4'],
            ['alamat' => 'Jl. Soekarno Hatta No.81-91, Bangunsari, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63411', 'id' => 105, 'id_daerah' => 22, 'link_gmaps' => 'https://maps.app.goo.gl/WMQGLQ5aC48ZADk28', 'nama' => 'MALIOBORO PONOROGO', 'rating' => '4.5'],
            ['alamat' => 'Jl. Ki Ageng Kutu No.1c, Tonatan, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63418', 'id' => 106, 'id_daerah' => 22, 'link_gmaps' => 'https://maps.app.goo.gl/DWBy7vQuEtmLZT9h6', 'nama' => 'Taman Kota Ponorogo Jeruksing', 'rating' => '4.2'],
            ['alamat' => 'Briket, Gondowido, Kec. Ngebel, Kabupaten Ponorogo, Jawa Timur 63493', 'id' => 107, 'id_daerah' => 22, 'link_gmaps' => 'https://maps.app.goo.gl/qs4TWrfSnLYYvAzJ9', 'nama' => 'Telaga Ngebel Ponorogo', 'rating' => '4.5'],
            ['alamat' => 'Taman wisatas Ngembag, Jl. Halim Perdana Kusuma, Ronowijayan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur 63471', 'id' => 108, 'id_daerah' => 22, 'link_gmaps' => 'https://maps.app.goo.gl/TsVVuuWYf52d1HyY7', 'nama' => 'Taman wisatas Ngembag', 'rating' => '3.9'],
            ['alamat' => 'Jl. Raya Ngebel No.16, Bentis, Wagir Lor, Kec. Ngebel, Kabupaten Ponorogo, Jawa Timur 63493', 'id' => 109, 'id_daerah' => 22, 'link_gmaps' => 'https://maps.app.goo.gl/EfRrLa8jmZEvYSNM7', 'nama' => 'Objek wisatas Telaga Ngebel', 'rating' => '4.6'],
            ['alamat' => 'Mangunharjo, Kec. Mayangan, Kota Probolinggo, Jawa Timur', 'id' => 110, 'id_daerah' => 23, 'link_gmaps' => 'https://maps.app.goo.gl/mgubTTcrbUmy49c8A', 'nama' => 'Gembok Cinta BJBR', 'rating' => '4.3'],
            ['alamat' => 'Sapia, Gili Ketapang, Kec. Sumberasih, Kabupaten Probolinggo, Jawa Timur', 'id' => 111, 'id_daerah' => 23, 'link_gmaps' => 'https://maps.app.goo.gl/YYqN5T4n6i5J6f857', 'nama' => 'Pantai Pasir Putih', 'rating' => '4.4'],
            ['alamat' => 'Jalan Raya Bentar, Karang Anyar, Curahsawo, Kec. Gending, Kabupaten Probolinggo, Jawa Timur 67211', 'id' => 112, 'id_daerah' => 23, 'link_gmaps' => 'https://maps.app.goo.gl/TH7XJLgrKe8KstFh9', 'nama' => 'Pantai Bentar', 'rating' => '4.6'],
            ['alamat' => 'Jl. Basuki Rahmad, Mangunharjo, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67217', 'id' => 113, 'id_daerah' => 23, 'link_gmaps' => 'https://maps.app.goo.gl/FUKDFJaprdZHr9s78', 'nama' => 'Taman wisatas Study Lingkungan Kota Probolinggo', 'rating' => '4.2'],
            ['alamat' => 'Jalan KH Mas Mansyur, Mangunharjo, Sukabumi, Kec. Mayangan, Kota Probolinggo, Jawa Timur 67219', 'id' => 114, 'id_daerah' => 23, 'link_gmaps' => 'https://maps.app.goo.gl/qaGHJSTywJK4pbAWA', 'nama' => 'Alun Alun Probolinggo', 'rating' => '4.3'],
            ['alamat' => 'Rw. II, Rong Tengah, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216', 'id' => 115, 'id_daerah' => 24, 'link_gmaps' => 'https://maps.app.goo.gl/riNwRBWQWEAz5Hkn6', 'nama' => 'Goa Lebar Sampang', 'rating' => '4.2'],
            ['alamat' => 'Rw. II, Polagan, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216', 'id' => 116, 'id_daerah' => 24, 'link_gmaps' => 'https://maps.app.goo.gl/LeE7dVT7oht4X1NM6', 'nama' => 'Kompleks Makam Ratu Ibu', 'rating' => '4.4'],
            ['alamat' => 'Jl. Raya Camplong, Kec. Camplong, Kabupaten Sampang, Jawa Timur 69281', 'id' => 117, 'id_daerah' => 24, 'link_gmaps' => 'https://maps.app.goo.gl/jxrW8jsh2FtSZ6288', 'nama' => 'Pantai wisatas Camplong ,hotel, Dan Resto', 'rating' => '4.0'],
            ['alamat' => 'Rw. III, Rong Tengah, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216', 'id' => 118, 'id_daerah' => 24, 'link_gmaps' => 'https://maps.app.goo.gl/exRVas9p3AdBPvV77', 'nama' => 'Monumen Trunojoyo Sampang', 'rating' => '4.7'],
            ['alamat' => 'Rw. I, Rong Tengah, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216', 'id' => 119, 'id_daerah' => 24, 'link_gmaps' => 'https://maps.app.goo.gl/RgNZkRB6cGcy5yS16', 'nama' => 'wisatas Alam Gua Lebar', 'rating' => '4.1'],
            ['alamat' => 'Jl. Jenggolo No.21, Rw1, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212', 'id' => 120, 'id_daerah' => 25, 'link_gmaps' => 'https://maps.app.goo.gl/Ev3GW2F982mT82Wr9', 'nama' => 'Monumen Jayandaru', 'rating' => '4.6'],
        ];

        DB::table('wisatas')->insert($wisatas);

        // Chunk 7 of wisatas (IDs: 121-140)
        $wisatas = [
            ['alamat' => 'Pondokjati, Pagerwojo, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252', 'id' => 121, 'id_daerah' => 25, 'link_gmaps' => 'https://maps.app.goo.gl/V7bqALXL1HnroHsS7', 'nama' => 'Taman Abhirama Sidoarjo', 'rating' => '4.4'],
            ['alamat' => 'Jl. Pahlawan No.1, Rw6, Sidokumpul, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212', 'id' => 122, 'id_daerah' => 25, 'link_gmaps' => 'https://maps.app.goo.gl/dxAe6YhpSPRvCXmF9', 'nama' => 'Suncity Waterpark Sidoarjo', 'rating' => '4.3'],
            ['alamat' => 'Jl. Sultan Agung No.39, Gajah Timur, Magersari, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212', 'id' => 123, 'id_daerah' => 25, 'link_gmaps' => 'https://maps.app.goo.gl/7YuWRSvXmEcd4x8a6', 'nama' => 'Monumen Sidoarjo', 'rating' => '4.6'],
            ['alamat' => 'Candipari Kulon, Candipari, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274', 'id' => 124, 'id_daerah' => 25, 'link_gmaps' => 'https://maps.app.goo.gl/VFkTfW2ixAWN3W5fA', 'nama' => 'Candi Sumur', 'rating' => '4.3'],
            ['alamat' => 'Jalan Pantai Pathek, Gelung Selatan, Gelung, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68351', 'id' => 125, 'id_daerah' => 26, 'link_gmaps' => 'https://maps.app.goo.gl/kcV3nj3gB8WA4imWA', 'nama' => 'Pantai Pathek Situbondo', 'rating' => '4.1'],
            ['alamat' => 'Area Sawah, Olean, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68316', 'id' => 126, 'id_daerah' => 26, 'link_gmaps' => 'https://maps.app.goo.gl/2pfxfVaVKExCZAoG7', 'nama' => 'ISTANA BAMBU KK 26 KARANG KENIK', 'rating' => '4.1'],
            ['alamat' => 'Pandansari, Pasir Putih, Kec. Bungatan, Kabupaten Situbondo, Jawa Timur 68358', 'id' => 127, 'id_daerah' => 26, 'link_gmaps' => 'https://maps.app.goo.gl/SLB4mijg9hA2NRyc9', 'nama' => 'wisatas Bahari Pasir Putih', 'rating' => '4.4'],
            ['alamat' => 'Parse, Dawuhan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68311', 'id' => 128, 'id_daerah' => 26, 'link_gmaps' => 'https://maps.app.goo.gl/x79w3mac4VnhfQe7A', 'nama' => 'Patung Merlion Singapore Dawuhan Millenial Garden (DMG)', 'rating' => '4.3'],
            ['alamat' => 'Cappore Keluraha, Jl. Bukit Sema, RT.05/RW.03, Capore, Kabupaten Situbondo, Jawa Timur 68321', 'id' => 129, 'id_daerah' => 26, 'link_gmaps' => 'https://maps.app.goo.gl/BzHfN9SuJXFMfXLP8', 'nama' => 'Kebun Panglima', 'rating' => '4.8'],
            ['alamat' => 'Jl. Veteran, Lingkungan Delama, Pajagalan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69416', 'id' => 130, 'id_daerah' => 27, 'link_gmaps' => 'https://maps.app.goo.gl/tdwX3KWYTJw9j28j6', 'nama' => 'Alun-Alun Taman Adipura Kota Sumenep', 'rating' => '4.5'],
            ['alamat' => 'Labangseng, Kolor, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69417', 'id' => 131, 'id_daerah' => 27, 'link_gmaps' => 'https://maps.app.goo.gl/cFzng2tusAiJhfG7A', 'nama' => 'Taman Tajamara', 'rating' => '4.5'],
            ['alamat' => 'Saluran Air, Pamolokan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69417', 'id' => 132, 'id_daerah' => 27, 'link_gmaps' => 'https://maps.app.goo.gl/basgGREfkKxUXRAm6', 'nama' => 'wisatas Goa Putih', 'rating' => '4.2'],
            ['alamat' => 'Jl. Dr. Sutomo No.6, Lingkungan Delama, Pajagalan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69416', 'id' => 133, 'id_daerah' => 27, 'link_gmaps' => 'https://maps.app.goo.gl/V1CdWPZpEodNx2zDA', 'nama' => 'Museum Keraton Sumenep', 'rating' => '4.6'],
            ['alamat' => 'Sergang, Kec. Batuputih, Kabupaten Sumenep, Jawa Timur 69454', 'id' => 134, 'id_daerah' => 27, 'link_gmaps' => 'https://maps.app.goo.gl/eg6qupGBPyaXEAZdA', 'nama' => 'Pantai Badur', 'rating' => '4.5'],
            ['alamat' => 'Jl. Raya Marina Asri, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111', 'id' => 135, 'id_daerah' => 28, 'link_gmaps' => 'https://maps.app.goo.gl/SKytivQAXJLackM49', 'nama' => 'Hutan Bambu Keputih Surabaya', 'rating' => '4.3'],
            ['alamat' => 'Jl. Taman Apsari No.63, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 60271', 'id' => 136, 'id_daerah' => 28, 'link_gmaps' => 'https://maps.app.goo.gl/fVudbWDh94GjMVH37', 'nama' => 'Taman Apsari', 'rating' => '4.7'],
            ['alamat' => 'Jl. Ahmad Yani No.138, Gayungan, Kec. Gayungan, Surabaya, Jawa Timur 60235', 'id' => 137, 'id_daerah' => 28, 'link_gmaps' => 'https://maps.app.goo.gl/mHdAzPEvayK6zsSA9', 'nama' => 'Taman Pelangi', 'rating' => '4.5'],
            ['alamat' => 'Kenjeran, Kec. Bulak, Surabaya, Jawa Timur 60123', 'id' => 138, 'id_daerah' => 28, 'link_gmaps' => 'https://maps.app.goo.gl/JPwEzWuRmyL2Rwd98', 'nama' => 'Taman Air Mancur Pelangi', 'rating' => '4.5'],
            ['alamat' => 'Jl. Pantai Kenjeran, Kedung Cowek, Kec. Bulak, Surabaya, Jawa Timur 60125', 'id' => 139, 'id_daerah' => 28, 'link_gmaps' => 'https://maps.app.goo.gl/8deGfgbcT2cASucX6', 'nama' => 'Taman Suroboyo', 'rating' => '4.6'],
            ['alamat' => 'Widoro, Gandusari, Kw. Ladang, Karanganyar, Kec. Gandusari, Kabupaten Trenggalek, Jawa Timur 66372', 'id' => 140, 'id_daerah' => 29, 'link_gmaps' => 'https://maps.app.goo.gl/tTehEzinxkjT623D7', 'nama' => 'Bukit Banyon', 'rating' => '4.3'],
        ];

        DB::table('wisatas')->insert($wisatas);

        // Chunk 8 of wisatas (IDs: 141-154)
        $wisatas = [
            ['alamat' => 'Jl. Hayam Wuruk, Area Hutan, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', 'id' => 141, 'id_daerah' => 29, 'link_gmaps' => 'https://maps.app.goo.gl/NB85hcBqyNfE7GsZ9', 'nama' => 'wisatas Hutan Kota Trenggalek', 'rating' => '4.5'],
            ['alamat' => 'Ngrandu, Talun, Kendalrejo, Kec. Durenan, Kabupaten Trenggalek, Jawa Timur 66381', 'id' => 142, 'id_daerah' => 29, 'link_gmaps' => 'https://maps.app.goo.gl/fsvbVDj2AXabSZas6', 'nama' => 'wisatas Paralayang Gunung Tunggangan', 'rating' => '4.5'],
            ['alamat' => 'Surodakan, Jonogaran, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', 'id' => 143, 'id_daerah' => 29, 'link_gmaps' => 'https://maps.app.goo.gl/nSXhpeko2BULUVSE9', 'nama' => 'Alun-Alun Kabupaten Trenggalek', 'rating' => '4.5'],
            ['alamat' => 'Jl. Brigjend Sutran No.3, Ngemplak, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66315', 'id' => 144, 'id_daerah' => 29, 'link_gmaps' => 'https://maps.app.goo.gl/x3rVKGByo2FrwTza6', 'nama' => 'Trenggalek Green Park', 'rating' => '4.3'],
            ['alamat' => 'Kutorejo, Kec. Tuban, Kabupaten Tuban, Jawa Timur', 'id' => 145, 'id_daerah' => 30, 'link_gmaps' => 'https://maps.app.goo.gl/m8E6Xb41pwQCBTjr5', 'nama' => 'wisatas Pantai Boom', 'rating' => '4.2'],
            ['alamat' => 'Wire, Gedongombo, Kec. Semanding, Kabupaten Tuban, Jawa Timur 62381', 'id' => 146, 'id_daerah' => 30, 'link_gmaps' => 'https://maps.app.goo.gl/sguyWXZwhBZC8pSF9', 'nama' => 'wisatas Religi/Ponpes Perut Bumi', 'rating' => '4.4'],
            ['alamat' => 'Jl. Gresik No.Km.1, Kepoh, Panyuran, Kec. Palang, Kabupaten Tuban, Jawa Timur 62391', 'id' => 147, 'id_daerah' => 30, 'link_gmaps' => 'https://maps.app.goo.gl/f9eaeEmdFSxCujgt5', 'nama' => 'Pantai Kelapa Tuban', 'rating' => '4.3'],
            ['alamat' => 'Jl. Banyu Langse I, Boto, Kec. Semanding, Kabupaten Tuban, Jawa Timur 62381', 'id' => 148, 'id_daerah' => 30, 'link_gmaps' => 'https://maps.app.goo.gl/maTdMr3kBhN2WZnw7', 'nama' => 'Air Terjun Banyulangse', 'rating' => '4.3'],
            ['alamat' => 'Semanding, Jarkali, Gedongombo, Kec. Tuban, Kabupaten Tuban, Jawa Timur 62317', 'id' => 149, 'id_daerah' => 30, 'link_gmaps' => 'https://maps.app.goo.gl/3ieW69vQHsnaT2HA7', 'nama' => 'Gua Akbar TUBAN', 'rating' => '4.2'],
            ['alamat' => 'Panggungrejo, Sembung, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur 66214', 'id' => 150, 'id_daerah' => 31, 'link_gmaps' => 'https://maps.app.goo.gl/PBRNtgcdQZXp9ZRn6', 'nama' => 'Taman Kali Ngrowo', 'rating' => '4.3'],
            ['alamat' => 'No Jl. Sultan Agung No.29, Dusun Kedungsingkal, Ketanon, Kec. Kedungwaru, Kabupaten Tulungagung, Jawa Timur 66229', 'id' => 151, 'id_daerah' => 31, 'link_gmaps' => 'https://maps.app.goo.gl/4uMaUzjXbJkEtpQd7', 'nama' => 'Taman Hutan Kota Tulungagung', 'rating' => '4.3'],
            ['alamat' => 'Area Gn., Tanggung, Kec. Campurdarat, Kabupaten Tulungagung, Jawa Timur 66272', 'id' => 152, 'id_daerah' => 31, 'link_gmaps' => 'https://maps.app.goo.gl/CzfXXrqrmo2HCuVz6', 'nama' => 'Gunung Budheg', 'rating' => '4.5'],
            ['alamat' => 'Unnamed Road Sumberejo Kulon, Sumberejo Kulon, Kec. Ngunut, Kabupaten Tulungagung, Jawa Timur 66292', 'id' => 153, 'id_daerah' => 31, 'link_gmaps' => 'https://maps.app.goo.gl/3bVG8evkLBSCxWep8', 'nama' => 'Mbalong Kawuk', 'rating' => '4.4'],
            ['alamat' => 'Area Sawah, Tanen, Kec. Rejotangan, Kabupaten Tulungagung, Jawa Timur 66293', 'id' => 154, 'id_daerah' => 31, 'link_gmaps' => 'https://maps.app.goo.gl/11WsScd41tpAfL3B8', 'nama' => 'Wana wisatas Alam Kandung', 'rating' => '4.1'],
        ];

        DB::table('wisatas')->insert($wisatas);

    }
}
