<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RumahAdat;

class RumahAdatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RumahAdat::create([
            "user_id" => 1,
            "province_id" => 1,
            "name_rumahadat" => "Rumoh Aceh",
            "slug" => "rumoh-aceh",
            "gambar" => "aceh rumoh aceh.jpg"
        ]);

        RumahAdat::create([
            "user_id" => 1,
            "province_id" => 2,
            "name_rumahadat" => "Rumah Bolon",
            "slug" => "rumah-bolon",
            "gambar" => "sumut rumah bulon.jpg"
        ]);
    }
}
