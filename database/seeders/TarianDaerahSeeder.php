<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TarianDaerah;
class TarianDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TarianDaerah::create([
            "user_id" => 1,
            "province_id" => 1,
            "name_tarian" => "Tari Saman",
            "slug" => "tari-saman",
            "gambar" => "aceh tari saman.jpg"
        ]);

        TarianDaerah::create([
            "user_id" => 1,
            "province_id" => 2,
            "name_tarian" => "Tari Tortor",
            "slug" => "tari-tortor",
            "gambar" => "sumut tortor.jpg"
        ]);
    }
}
