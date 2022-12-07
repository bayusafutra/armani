<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProvinceSeeder;
use Database\Seeders\MakananKhasSeeder;
use Database\Seeders\SukuAdatSeeder;
use Database\Seeders\PakaianAdatSeeder;
use Database\Seeders\RumahAdatSeeder;
use Database\Seeders\SenjataDaerahSeeder;
use Database\Seeders\TarianDaerahSeeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            // UserSeeder::class,
            ProvinceSeeder::class,
            MakananKhasSeeder::class,
            SukuAdatSeeder::class,
            PakaianAdatSeeder::class,
            RumahAdatSeeder::class,
            TarianDaerahSeeder::class,
            SenjataDaerahSeeder::class
        ]);

    }
}
