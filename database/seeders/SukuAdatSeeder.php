<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SukuAdat;

class SukuAdatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 1,
            "nama_suku" => "Suku Aceh",
            "slug" => "suku-aceh",
            "gambar" => "aceh suku aceh.jpg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 2,
            "nama_suku" => "Suku Batak",
            "slug" => "suku-batak",
            "gambar" => "sumut suku batak.jpg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 3,
            "nama_suku" => "Suku Melayu",
            "slug" => "suku-melayu",
            "gambar" => "sumsel suku melayu.jpg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 4,
            "nama_suku" => "Suku Minangkabau",
            "slug" => "suku-minangkabau",
            "gambar" => "sumbar suku minangkabau.jpg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 5,
            "nama_suku" => "Suku Rejang",
            "slug" => "suku-rejang",
            "gambar" => "bengkulu suku rejang.jpg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 6,
            "nama_suku" => "Suku Melayu",
            "slug" => "suku-melayu-riau",
            "gambar" => "riau suku melayu.jpg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 7,
            "nama_suku" => "Suku Laut",
            "slug" => "suku-laut",
            "gambar" => "kepri suku laut.png"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 8,
            "nama_suku" => "Suku Anak Dalam",
            "slug" => "suku-anak_dalam",
            "gambar" => "jambi suku anak dalam.jpeg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 9,
            "nama_suku" => "Suku Lampung Saibatin",
            "slug" => "suku-lampung-saibatin",
            "gambar" => "lampung suku lampung saibatin.jpg"
        ]);

        SukuAdat::create([
            "user_id" => 1,
            "province_id" => 10,
            "nama_suku" => "Suku Sekak Bangka",
            "slug" => "suku-sekak-bangka",
            "gambar" => "bangbel suku sekak bangka.jpg"
        ]);
    }
}
