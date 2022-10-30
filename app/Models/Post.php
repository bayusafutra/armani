<?php

namespace App\Models;



class Post
{
    private static $home_prov=[
        [
            "provinsi" => "Nanggroe Aceh Darussalam",
            "slug" => "nanggroe-aceh-darussalam",
            "image" => "IKON NANGRO ACEH.jpg",
            "deskripsi" => "Provinsi Nanggroe Aceh Darussalam yang terletak di Pulau Sumatera dengan Banda Aceh.
            Pada provinsi ini, terdapat kota paling barat Indonesia yaitu Kota Sabang.
            Provinsi ini memiliki ikon dan keragaman yang beragam yaitu adalah Masjid Darussalam dan Mie Acehnya."
        ],
        [
            "provinsi" => "Sumatra Utara",
            "slug" => "sumatra-utara",
            "image" => "IKON SUMATERA UTARA DANAU TOBA.jpg",
            "deskripsi" => "Provinsi Sumatera Utara merupakan provinsi yang berada di bagian paling utara di Pulau Sumatera.
             Ibukota Provinsi Sumatera Utara adalah Kota Medan.
             Provinsi ini sangat dikenal dengan legenda Danau vulkanik yang terbesar di-dunia beserta pulau kecilnya yaitu Danau Toba dan Pulau Samosir."
        ]
    ];

    

    public static function all(){
        return collect(self::$home_prov);
    }

    public static function find ($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
