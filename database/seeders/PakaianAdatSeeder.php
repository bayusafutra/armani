<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PakaianAdat;

class PakaianAdatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PakaianAdat::create([
            "user_id" => 1,
            "province_id" => 1,
            "name_pakaian" => "Ulee Balang",
            "slug" => "ulee-balang",
            "gambar" => "aceh ulee balang.png"
        ]);

        PakaianAdat::create([
            "user_id" => 1,
            "province_id" => 2,
            "name_pakaian" => "Batak Toba",
            "slug" => "batak-toba",
            "gambar" => "sumut batak toba.webp"
        ]);
    }
}
