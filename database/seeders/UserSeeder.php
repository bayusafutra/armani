<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bayu Safutra',
            'email' => 'bayusafutra@gmail.com',
            'password' => 'kelekmambu86',
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Shalsabilla Putri',
            'email' => 'shalsabillaput7@gmail.com',
            'password' => 'putricantikbgt123',
            'role_id' => 1
        ]);
    }
}
