<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\MakananKhas;


class ProvinceController extends Controller
{


    public function show ($slug){
        return view('provinsi', [
            "provinsi" => Province::where('slug', $slug)->get(),
            "makanan" => MakananKhas::all(),
            "title" => "| Provinsi"
        ]);
    }
}
