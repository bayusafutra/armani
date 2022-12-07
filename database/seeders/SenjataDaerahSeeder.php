<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SenjataDaerah;

class SenjataDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 1,
            "name_senjata" => "Peudeung",
            "slug" => "peudeung",
            "gambar" => "aceh peudeung.png",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 2,
            "name_senjata" => "Senjata Piso Halasan",
            "slug" => "senjata-piso-halasan",
            "gambar" => "sumut pisau halasan.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 3,
            "name_senjata" => "Tombal Trisula",
            "slug" => "sumsel-trisula",
            "gambar" => "sumsel-trisula.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 4,
            "name_senjata" => "Piarit",
            "slug" => "sumbar-piarit",
            "gambar" => "sumbar-piarit.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 5,
            "name_senjata" => "Kerambit",
            "slug" => "bengkulu-kerambit",
            "gambar" => "bengkulu-kerambit.webp",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 6,
            "name_senjata" => "Pedang Jenawi",
            "slug" => "riau-pedangjenawi",
            "gambar" => "riau-pedangjenawi.jpeg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 7,
            "name_senjata" => "Badik Tumbuk Lada",
            "slug" => "kepri-badiktumbuk",
            "gambar" => "kepri-badiktumbuk.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 8,
            "name_senjata" => "Tombak Mata Panah",
            "slug" => "jambi-tombak",
            "gambar" => "jambi-tombak.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 9,
            "name_senjata" => "Badik Lampung",
            "slug" => "lampung-badik",
            "gambar" => "lampung-badik.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 10,
            "name_senjata" => "Parang Bangka",
            "slug" => "bangbel-parang",
            "gambar" => "bangbel-parang.gif",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 11,
            "name_senjata" => "Golok Ciomas",
            "slug" => "banten-golokciomas",
            "gambar" => "banten-golokciomas.webp",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 12,
            "name_senjata" => "Golok",
            "slug" => "dki-golok",
            "gambar" => "dki-golok.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 13,
            "name_senjata" => "Kujang",
            "slug" => "jabar-kujang",
            "gambar" => "jabar-kujang.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 14,
            "name_senjata" => "Keris",
            "slug" => "jateng-keris",
            "gambar" => "jateng-keris.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 15,
            "name_senjata" => "Keris",
            "slug" => "diy-keris",
            "gambar" => "diy-keris.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 16,
            "name_senjata" => "Celurit",
            "slug" => "jatim-celurit",
            "gambar" => "jatim-celurit.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 17,
            "name_senjata" => "Mandau",
            "slug" => "kalbar-mandau",
            "gambar" => "kalbar-mandau.jpeg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 18,
            "name_senjata" => "Sumpit",
            "slug" => "kaltim-sumpit",
            "gambar" => "kaltim-sumpit.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 19,
            "name_senjata" => "Mandau",
            "slug" => "kalsel-mandau",
            "gambar" => "kalsel-mandau.jpg",
            ]);
            SenjataDaerah::create([
            "user_id" => 2,
            "province_id" => 20,
            "name_senjata" => "Dohong",
            "slug" => "kalteng-dohong",
            "gambar" => "kalteng-dohong.jpg",
            ]);
    }
}
