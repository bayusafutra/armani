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
            TarianDaerah::create([
            "user_id" => 1,
            "province_id" => 3,
            "name_tarian" => "Tari Gendhing Sriwijaya",
            "slug" => "sumsel-gendhing",
            "gambar" => "sumsel-gendhing.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 1,
            "province_id" => 4,
            "name_tarian" => "Tari Piring",
            "slug" => "sumbar-piring",
            "gambar" => "sumbar-piring.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 1,
            "province_id" => 5,
            "name_tarian" => "Tari Andun",
            "slug" => "bengkulu-andun",
            "gambar" => "bengkulu-andun.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 6,
            "name_tarian" => "Tari Zapin",
            "slug" => "riau-zapin",
            "gambar" => "riau-zapin.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 7,
            "name_tarian" => "Tari Inai",
            "slug" => "kepri-inai",
            "gambar" => "kepri-inai.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 8,
            "name_tarian" => "Tari Sekapur Sirih",
            "slug" => "jambi-sekapur",
            "gambar" => "jambi-sekapur.webp",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 9,
            "name_tarian" => "Tari Bedana",
            "slug" => "lampung-bedana",
            "gambar" => "lampung-bedana.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 10,
            "name_tarian" => "Tari Campak",
            "slug" => "bangbel-campak",
            "gambar" => "bangbel-campak.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 11,
            "name_tarian" => "Tari Grebeg Terbang Gede",
            "slug" => "banten-grebeg",
            "gambar" => "banten-grebeg.jpeg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 12,
            "name_tarian" => "Tari Topeng",
            "slug" => "dki-topeng",
            "gambar" => "dki-topeng.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 13,
            "name_tarian" => "Tari Jaipong",
            "slug" => "jabar-jaipong",
            "gambar" => "jabar-jaipong.jpeg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 14,
            "name_tarian" => "Tari Gambyong",
            "slug" => "jateng-gambyong",
            "gambar" => "jateng-gambyong.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 15,
            "name_tarian" => "Tari Serimpi",
            "slug" => "diy-serimpi",
            "gambar" => "diy-serimpi.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 16,
            "name_tarian" => "Tari Remo",
            "slug" => "jatim-remo",
            "gambar" => "jatim-remo.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 17,
            "name_tarian" => "Tari Monong",
            "slug" => "kalbar-monong",
            "gambar" => "kalbar-monong.webp",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 18,
            "name_tarian" => "Tari Datun Ngentau",
            "slug" => "kaltim-datun",
            "gambar" => "kaltim-datun.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 19,
            "name_tarian" => "Tari Baksa Kembang",
            "slug" => "kalsel-baksa",
            "gambar" => "kalsel-baksa.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 20,
            "name_tarian" => "Tari Mandau",
            "slug" => "kalteng-mandau",
            "gambar" => "kalteng-mandau.jpeg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 21,
            "name_tarian" => "Tari Mance",
            "slug" => "kalut-mance",
            "gambar" => "kalut-mance.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 22,
            "name_tarian" => "Tari Kecak",
            "slug" => "bali-kecak",
            "gambar" => "bali-kecak.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 23,
            "name_tarian" => "Tari Bidu",
            "slug" => "ntt-bidu",
            "gambar" => "ntt-bidu.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 24,
            "name_tarian" => "Tari Lenggo",
            "slug" => "ntb-lenggo",
            "gambar" => "ntb-lenggo.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 25,
            "name_tarian" => "Tari Tidi Lo Palopalo",
            "slug" => "gorontalo-tidi",
            "gambar" => "gorontalo-tidi.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 26,
            "name_tarian" => "Tari Pallake",
            "slug" => "sulbar-pallake",
            "gambar" => "sulbar-pallake.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 27,
            "name_tarian" => "Tari Pamonte",
            "slug" => "sulteng-pamonte",
            "gambar" => "sulteng-pamonte.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 28,
            "name_tarian" => "Tari Sasambo",
            "slug" => "sulut-sasambo",
            "gambar" => "sulut-sasambo.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 29,
            "name_tarian" => "Tari Lumense",
            "slug" => "sulgara-lumense",
            "gambar" => "sulgara-lumense.jpeg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 30,
            "name_tarian" => "Tari Kipas",
            "slug" => "sulsel-kipas",
            "gambar" => "sulsel-kipas.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 31,
            "name_tarian" => "Tari Dengedenge",
            "slug" => "malut-dengedenge",
            "gambar" => "malut-dengedenge.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 32,
            "name_tarian" => "Tari Lenso",
            "slug" => "maluku-lenso",
            "gambar" => "maluku-lenso.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 33,
            "name_tarian" => "Tari Suanggi",
            "slug" => "papbar-suanggi",
            "gambar" => "papbar-suanggi.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 34,
            "name_tarian" => "Tari Yosim Pancar",
            "slug" => "papua-yosimpancar",
            "gambar" => "papua-yosimpancar.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 35,
            "name_tarian" => "Tari Balengan",
            "slug" => "papteng-balengan",
            "gambar" => "papteng-balengan.jpeg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 36,
            "name_tarian" => "Tari Sajojo Papua Pegunungan",
            "slug" => "pappeg-sajojo",
            "gambar" => "pappeg-sajojo.jpg",
            ]);
            TarianDaerah::create([
            "user_id" => 2,
            "province_id" => 37,
            "name_tarian" => "Tari Sajojo Papua Selatan",
            "slug" => "papsel-sajojo",
            "gambar" => "papsel-sajojo.jpg",
            ]);

    }
}
