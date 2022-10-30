<?php

namespace App\Http\Controllers;
use App\Models\Province;
use Illuminate\Http\Request;

class ArmaniController extends Controller
{
    public function index(){
        return view('home', [
            "armani" => Province::all(),
            "title"  => "Pesona Indonesia"
        ]);
    }

    // public function show ($slug){
    //     // dd($slug);
    //     return view('provinsi', [
    //         "home" => Province::where('slug', $slug)->get()
    //     ]);
    // }
}
