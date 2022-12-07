<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            "name_provinsi" => "Nanggroe Aceh Darussalam",
            "user_id" => 1,
            "akronim" => "NAD",
            "slug" => "nanggroe_aceh_darussalam",
            "deskripsi" => 'Provinsi Nanggroe Aceh Darussalam yang terletak di Pulau Sumatera dengan Banda Aceh. Pada provinsi ini, terdapat kota paling barat Indonesia yaitu Kota Sabang. Provinsi ini memiliki ikon dan keragaman yang beragam yaitu adalah Masjid Darussalam dan Mie Acehnya.',
            "gambar" => "IKON NANGRO ACEH.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Sumatra Utara",
            "user_id" => 1,
            "akronim" => "Sumut",
            "slug" => "sumatra_utara",
            "deskripsi" => 'Provinsi Sumatera Utara merupakan provinsi yang berada di bagian paling utara di Pulau Sumatera. Ibukota Provinsi Sumatera Utara adalah Kota Medan. Provinsi ini sangat dikenal dengan legenda Danau vulkanik yang terbesar di-dunia beserta pulau kecilnya yaitu Danau Toba dan Pulau Samosir.',
            "gambar" => "IKON SUMATERA UTARA DANAU TOBA.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Sumatra Selatan",
            "user_id" => 1,
            "akronim" => "Sumsel",
            "slug" => "sumatra_selatan",
            "deskripsi" => 'Kota Palembang merupakan ibukota dari Provinsi Sumatra Utara. Provinsi ini dikenal dengan makanan khasnya yaitu Pempek Palembang. Selain itu, di Provinsi ini juga terdapat jembatan terpanjang se-Asia Tenggara dan Jembatan yang pertama kali dibangun di Palembang yaitu Jembatan Ampera.',
            "gambar" => "IKON SUMSEL.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Sumatra Barat",
            "user_id" => 1,
            "akronim" => "Sumbar",
            "slug" => "sumatra_barat",
            "deskripsi" => 'Provinsi Sumatra Barat merupakan provinsi dengan Ibukota Kota padang. Jam Gadang merupakan tempat ikonik yang ada di provinsi ini. Selain Jam Gadangnya, Provinsi Sumatra Barat khususnya kota Padang terkenal dengan muda-mudinya yang kebanyakan menjadi perantau.',
            "gambar" => "IKON SUMATERA BARAT JAM GADANG.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Bengkulu",
            "user_id" => 1,
            "akronim" => "BENGKULU",
            "slug" => "bengkulu",
            "deskripsi" => 'Provinsi Bengkulu dengan ibukota Kota Bengkulu yang merupakan kota terbesar kedua di Pulau Sumatera setelah Banda Aceh. Bengkulu dikenal dengan julukan "Bumi Rafflesia" karena ditemukan 5 dari 27 jenis rafflesia di dunia, salah satunya yang yaitu Rafflesia Arnoldi.',
            "gambar" => "IKON BENGKULU.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Riau",
            "user_id" => 1,
            "akronim" => "RIAU",
            "slug" => "riau",
            "deskripsi" => 'Provinsi Riau merupakan provinsi yang terletak di bagian tengah pantai timur Pulau Sumatra dengan ibukota Pekanbaru. Provinsi Riau dikenal dengan julukan "Lancang Kuning". Selain itu, Provinsi Riau juga dikenal sebagai penghasil minyak bumi terbesar di Indonesia.',
            "gambar" => "IKON RIAU.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Kepulauan Riau",
            "user_id" => 1,
            "akronim" => "Kepri",
            "slug" => "kepulauan_riau",
            "deskripsi" => 'Kepulauan Riau sebelumnya dikenal dengan Bintan. Provinsi ini merupakan Provinsi yang berbatasan dengan Negara-Negara di Asia Tenggara Pada provinsi ini kota yang banyak dikenal orang adalah Kota Batam. Namun, ibukota provinsi ini bukanlah Kota Batam, melainkan Kota Tanjung Pinang.',
            "gambar" => "IKON KEPRI.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Jambi",
            "user_id" => 1,
            "akronim" => "JAMBI",
            "slug" => "jambi",
            "deskripsi" => 'Provinsi Jambi dikenal dengan "Bumi Melayu" dengan ibukota Jambi. Ibukota provinsi ini dijuluki sebagai "Tanah Pilih Pusako Batuah". Selain itu provinsi ini memiliki beberapa keanekaragaman, salah satu ikonnya yaitu "Gentala Arasy" yang memperlihatkan Panorama Alam Kota Jambi dari Atas Menara.',
            "gambar" => "IKON JAMBI.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Lampung",
            "user_id" => 1,
            "akronim" => "LAMPUNG",
            "slug" => "lampung",
            "deskripsi" => 'Lampung adalah provinsi paling Selatan di Pulau Sumatra dengan ibukota Kota Bandar Lampung. Lampung memiliki simbol "Menara Siger" sebagai salah satu ikonnya. Menara Siger bukan hanya sebagai ikon pariwisata dari Lampung. Tetapi juga sebagai ikon keagamaan, seni, budaya, dan pendidikan.',
            "gambar" => "IKON BANGKA BELITUNG.jpeg"
            ]);
            Province::create([
            "name_provinsi" => "Bangka Belitung",
            "user_id" => 1,
            "akronim" => "Babel",
            "slug" => "bangka_belitung",
            "deskripsi" => 'Provinsi Bangka Belitung terletak di bagian timur Pulau Sumatra dengan ibukota Kota Pangkalpinang. Provinsi Bangka Belitung cukup dikenal karena novel karangan Andrea Hirata yang berjudul "Laskar Pelangi". Provinsi Bangka belitung memiliki ikon 2 Pulau kembar yaitu pulau B',
            "gambar" => "IKON BANGKA BELITUNG.jpeg"
            ]);
            Province::create([
            "name_provinsi" => "Banten",
            "user_id" => 1,
            "akronim" => "BANTEN",
            "slug" => "banten",
            "deskripsi" => 'Banten adalah sebuah Provinsi di wilayah paling barat Pulau Jawa dengan ibukota Kota Serang. Provinsi ini banyak memiliki ikon pariwisata yang menarik. Salah satu ikon yang dikenal masyarakat yaitu Taman Nasional Ujung kulon yang merupakan temoat penangkaran Badak Bercula satu.',
            "gambar" => "IKON BANTEN BADAK.WEBP"
            ]);
            Province::create([
            "name_provinsi" => "DKI Jakarta",
            "user_id" => 1,
            "akronim" => "DKI JKT",
            "slug" => "dki_jakarta",
            "deskripsi" => 'Provinsi DKI Jakarta merupakan ibukota dari Indonesia sesuai dengan singkatan namanya. DKI jakarta memiliki beragam ikon yaitu ikon budaya yang contohnya saja "ondel-ondel", dan ikon pariwisata yaitu Tugu Monas. Selain itu, DKI Jakarta juga terkenal dengan makanan khasnya yaitu kerak telor.',
            "gambar" => "IKON DKI JKT.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Jawa Barat",
            "user_id" => 1,
            "akronim" => "jabar",
            "slug" => "jawa_barat",
            "deskripsi" => 'Provinsi Jawa Barat merupakan provinsi dengan ibukota Kota Bandung. Jawa Barat merupakan jantung budaya Sunda atau biasa disebut sebagai Tatar Sunda/Pasundan. Provinsi ini memiliki ikon yaitu Gedung Sate dan terdapat observatorium astronomi modern pertama di Asia Tenggara yaitu Bosscha.',
            "gambar" => "IKON JABAR.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Jawa Tengah",
            "user_id" => 2,
            "akronim" => "jateng",
            "slug" => "jawa_tengah",
            "deskripsi" => 'Jawa Tengah merupakan provinsi yang terletak di bagian tengah Pulau Jawa dengan ibukota Kota Semarang. Provinsi ini dikenal dengan ikonnya yang diakui dalam 7 keajaiban yaitu Candi Borobudur yang merupakan monumen Buddha terbesar di dunia yang berada di Kota Magelang.',
            "gambar" => "IKON JAWA TENGAH.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Daerah Istimewa Yogyakarta",
            "user_id" => 2,
            "akronim" => "DIY",
            "slug" => "daerah_istimewa_yogyakarta",
            "deskripsi" => 'Provinsi Daerah Istimewa Yogyakarta merupakan provinsi dengan ibukota Kota Yogyakarta yang dikenal dengan julukan kota pelajar karena memiliki banyak kampus ada di provinsi tersebut. Gudeg merupakan makanan khas dari Provinsi DI Yogyakarta yang menjadi ikonnya.',
            "gambar" => "IKON DIY.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Jawa Timur",
            "user_id" => 2,
            "akronim" => "jatim",
            "slug" => "jawa_timur",
            "deskripsi" => 'Provinsi Jawa Timur dengan ibukota Kota Surabaya. Provinsi Jawa Timur memiliki kenaekaragaman budaya dan tradisi. Contohnya adalah kebudayaan Reog yang berasal dari Ponorogo. Di provinsi terdapat jembatan yang melintasi Selat Madura serta menghubungkan Pulau Jawa dan Pulau Madura.',
            "gambar" => "IKON JATIM.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Kalimantan Barat",
            "user_id" => 2,
            "akronim" => "kalbar",
            "slug" => "kalimantan_barat",
            "deskripsi" => 'Kalimantan Barat adalah suatu provinsi di Indonesia yang terletak di Pulau Kalimantan dan beribukotakan Pontianak. Provinsi ini memiliki ikon yang merupakan jembatan terpanjang di Kalimantan yaitu Jembatan Tayan. Selain itu, terdapat Tugu Khatulistiwa yang menjadi ikon dari Pontianak.',
            "gambar" => "IKON KALBAR.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Kalimantan Timur",
            "user_id" => 2,
            "akronim" => "kaltim",
            "slug" => "kalimantan_timur",
            "deskripsi" => 'Kalimantan Timur adalah suatu provinsi dengan ibukota Kota Samarinda. Provinsi ini memiliki ikon yaitu Islamic Center yang merupakan masjid terbesar kedua setelah Masjid Istiqlal. Selain Islamic Center sebagai ikon, Sungai Kapuas juga menjadi ikon dari provinsi ini.',
            "gambar" => "IKON KALTIM.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Kalimantan Selatan",
            "user_id" => 2,
            "akronim" => "kalsel",
            "slug" => "kalimantan_selatan",
            "deskripsi" => 'Kalimantan Selatan adalah suatu provinsi dengan ibukotakan Banjarmasin. Provinsi ini memiliki ikon yaitu monumen bekantan yang terbuat dari perunggu kosong. Ibukota provinsi ini juga dikenal dengan pasar terapungnya yang mana hanya ada di Kota Banjarmasin saja.',
            "gambar" => "IKON KALSEL.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Kalimantan Tengah",
            "user_id" => 2,
            "akronim" => "kalteng",
            "slug" => "kalimantan_tengah",
            "deskripsi" => 'Kalimantan Tengah dengan ibukota Kota Palangkaraya. Di tanah borneo, provinsi ini memiliki ikon yang dikenal dengan penangkaran orangutan yang dilindingi yaitu Taman Nasional Tanjung Putin. Selain Tanjung Putin, terdapat Pantai Tanjung Keluang yang juga merupakan ikon dari Kalimantan Tengah.',
            "gambar" => "IKON KALTENG.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Kalimantan Utara",
            "user_id" => 2,
            "akronim" => "kalut",
            "slug" => "kalimantan_utara",
            "deskripsi" => 'Provinsi Kalimantan Utara merupakan Provinsi dengan ibukota Palangkaraya. Provinsi ini memiliki ikon Tugu Cinta Damai. Masyarakat di provinsi ini sangat beragam sehingga dengan keragamannya masyarakat membuat budayanya pun juga cukup beragam, sesuai dengan keradaan suku masyarakatnya.',
            "gambar" => "IKON KALUT.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Bali",
            "user_id" => 2,
            "akronim" => "BALI",
            "slug" => "bali",
            "deskripsi" => 'Provinsi Bali merupakan provinsi yang terkenal dengan destinasi pariwisatanya di mata internasional. Provinsi ini beribukotakan Kota Denpasar. Bali memiliki banyak ikon, salah satunya adalah pantai jimbaran sebagai ikon pariwisatanya. Lalu ada tari Kecak sebagai ikon budaya dari provinsi ini.',
            "gambar" => "IKON BALI.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Nusa Tenggara Timur",
            "user_id" => 2,
            "akronim" => "NTT",
            "slug" => "nusa_tenggara_timur",
            "deskripsi" => 'Nusa Tenggara Timur merupakan provinsi dengan ibukota Kota Kupang. Provinsi ini menyuguhkan pemandangan yang indah contohnya saja seperti di Labuan Bajo. Di NTT terdapat taman nasional yang melindungi reptil terbesar yang ada di dunia yaitu komodo yang bernama Taman Nasional Komodo.',
            "gambar" => "IKON NTT.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Nusa Tenggara Barat",
            "user_id" => 2,
            "akronim" => "NTB",
            "slug" => "nusa_tenggara_barat",
            "deskripsi" => 'Nusa Tenggara Barat merupakan provinsi yang menyuguhkan pemandangan yang dapat menyegarkan mata. Provinsi Nusa Tenggara Barat merupakan provinsi dengan ibukotakan Kota Mataram. Salah satu ikon yang dikenal masyarakat tentang provinsi ini adalah keindahan Gunung Rinjani.',
            "gambar" => "ikon ntbb.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Gorontalo",
            "user_id" => 2,
            "akronim" => "GORONTALO",
            "slug" => "gorontalo",
            "deskripsi" => 'Provinsi Gorontalo merupakan provinsi yang beribukotakan Kota Gorontalo. Provinsi ini memliliki keragaman budaya yang beragam. Salah satu ikon yang dikenal dari provinsi ini adalah Monumen Wartabone. Selain monumen, terdapat pantai Cinta yang dikenal dengan keromantisannya.',
            "gambar" => "IKON GORONTALO.png"
            ]);
            Province::create([
            "name_provinsi" => "Sulawesi Barat",
            "user_id" => 2,
            "akronim" => "sulbar",
            "slug" => "sulawesi_barat",
            "deskripsi" => 'Provinsi Sulawesi Barat merupakan provinsi dengan ibukota kota Mamuju. Ibukota prvinsi ini terletak diantara Sulawesi Tengah dan Sulawesi Selatan. Provinsi ini dikenal dengan ikonnya yaitu Tugu pahlawan yang terbuat dari perunggu bernama Tugu Tani.',
            "gambar" => "IKON SULBAR.WEBP"
            ]);
            Province::create([
            "name_provinsi" => "Sulawesi Tengah",
            "user_id" => 2,
            "akronim" => "sulteng",
            "slug" => "sulawesi_tengah",
            "deskripsi" => 'Sulawesi Tengah merupakan sebuah provinsi di bagian tengah Pulau Sulawesi, Indonesia. Ibu kota provinsi ini adalah Kota Palu. Sebelum terkena musibah, provinsi ini menyuguhkan banyak destinasi wisata yang dapat dikunjungi. Salah satu ikon dari provinsi ini adalah Jembatan Palu diatas Teluk Talise.',
            "gambar" => "IKON SULTENG.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Sulawesi Utara",
            "user_id" => 2,
            "akronim" => "sulut",
            "slug" => "sulawesi_utara",
            "deskripsi" => 'Sulawesi Utara merupakan salah satu provinsi yang terletak di ujung utara Pulau Sulawesi, Indonesia, dengan ibu kota terletak di kota Manado. Provinsi ini memiliki banyak ikon. Contohnya adalah Monumen Yesus Memberkati dan keindahan bawah laut Bunaken yang memanjakan mata.',
            "gambar" => "IKON SULUT.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Sulawesi Tenggara",
            "user_id" => 2,
            "akronim" => "sultenggara",
            "slug" => "sulawesi_tenggara",
            "deskripsi" => 'Sulawesi tenggara merupakan sebuah provinsi di Indonesia yang terletak bagian tenggara pulau Sulawesi dengan ibu kota Kendari. Sulawesi Tenggara memiliki ikon wisata religi yang dapat dikunjungi yaitu Masjid Terapung Al Alam yang bearada di tengah Teluk Kendari.',
            "gambar" => "IKON SULTENGGARA.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Sulawesi Selatan",
            "user_id" => 2,
            "akronim" => "sulsel",
            "slug" => "sulawesi_selatan",
            "deskripsi" => 'Sulawesi Selatan merupakan sebuah provinsi di semenanjung selatan Sulawesi dengan ibukota Kota Makassar. Provinsi Sulawesi Selatan memiliki banyak ikon, salah satunya adalah Pantai Losari yang jadi ikon Makassar Bahkan pantai ini pernah diangkat menjadi judul film “Senja di Pantai Losari” pada 1975.',
            "gambar" => "IKON SULSEL.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Maluku Utara",
            "user_id" => 2,
            "akronim" => "malut",
            "slug" => "maluku_utara",
            "deskripsi" => 'Maluku Utara merupakan provinsi bagian Timur Indonesia yang resmi terbentuk pada 4 Oktober 1999 yang sebelumnya menjadi kabupaten dari provinsi Maluku bersama dengan Halmahera Tengah. Provinsi ini memiliki ikon yang menyuguhkan keindahan Pegunungan Gamalama.',
            "gambar" => "IKON MALUT.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Maluku",
            "user_id" => 2,
            "akronim" => "maluku",
            "slug" => "maluku",
            "deskripsi" => 'Provinsi Maluku merupakan provinsi dengan Ibu kota dan kota terbesarnya ialah kota Ambon. Zona waktu lebih cepat dua jam dari Jakarta ini menyimpan berbagai destinasi yang masih sangat alami. Ikon dari provinsi ini adalah Monumen Pattimura dan Monumen Gong perdamaian Dunia.',
            "gambar" => "IKON MALUKU.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Papua Barat",
            "user_id" => 2,
            "akronim" => "papbar",
            "slug" => "papua_barat",
            "deskripsi" => 'Provinsi Papua Barat merupakan provinsi dengan ibukota Kota Manokwari. Provinsi ini merupakan provinsi yang terletak di ujung barat Pulau Papua. Papua Barat memiliki ikon yang menyuguhkan keindahan laut Raja Ampat yang bisa memanjakan mata para wisatawan.',
            "gambar" => "IKON PAPUA BARAT.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Papua",
            "user_id" => 2,
            "akronim" => "PAPUA",
            "slug" => "papua",
            "deskripsi" => 'Provinsi Papua sebelumnya bernama Irian Jaya yang mencakup seluruh Tanah Papua ex Nugini Belanda. Ibukota dari Provinsi Papua adalah Kota Jayapura. Papua memiliki ikon yaitu Jembatan Youtefa yang merupakan jembatan di Provinsi Papua yang menghubungkan Holtekamp dengan Hamadi.',
            "gambar" => "IKON PAPUA.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Papua Tengah",
            "user_id" => 2,
            "akronim" => "papteng",
            "slug" => "papua_tengah",
            "deskripsi" => 'Papua Tengah merupakan nama provinsi baru di Papua berdasarkan hasil RUU Daerah Otonomi Baru (DOB) dengan ibu kota di Nabire. Provinsi ini memiliki ikon yang menyuguhkan keindahan Wisata Hiu Paus yang berada di Perairan Kwatisore, Teluk Cenderawasih Papua.',
            "gambar" => "IKON PAPUA TENGAH.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Papua Pegunungan",
            "user_id" => 2,
            "akronim" => "pappeg",
            "slug" => "papua_pegunungan",
            "deskripsi" => 'Papua Pegunungan merupakan sebuah provinsi di Indonesia yang dimekarkan dari provinsi Papua pada sidang Paripurna DPR RI pada tanggal 30 Juni 2022 yang beribukota Kabupaten Jayawijaya. Seperti nama ibukotanya, provinsi ini memiliki keindahan ikon dari pegunungan Jayawijaya.',
            "gambar" => "IKON PAPUA PEGUNUNGAN.jpg"
            ]);
            Province::create([
            "name_provinsi" => "Papua Selatan",
            "user_id" => 2,
            "akronim" => "papsel",
            "slug" => "papua_selatan",
            "deskripsi" => 'Papua Selatan adalah salah satu provinsi di Indonesia yang telah dimekarkan dari provinsi Papua. Ibu kotanya berada di Kabupaten Merauke. Ibukota Provinsi ini merupakan bagian paling timur di Indonesia. Ikon Kabupaten Merauke adalah keindahan Tugu Libra.',
            "gambar" => "IKON PAPUA SELATAN.jpg"
            ]);






    }
}
