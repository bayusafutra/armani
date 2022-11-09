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
            "user_id" => 1,
            "province_id" => 1,
            "name_senjata" => "Peudeung",
            "slug" => "peudeung",
            "gambar" => "aceh peudeung.png"
        ]);

        SenjataDaerah::create([
            "user_id" => 1,
            "province_id" => 2,
            "name_senjata" => "Senjata Piso Halasan",
            "slug" => "senjata-piso-halasan",
            "gambar" => "sumut pisau halasan.png"
        ]);
    }
}
