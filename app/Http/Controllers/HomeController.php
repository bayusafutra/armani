<?php

namespace App\Http\Controllers;
use App\Models\Province;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home2', [
            "home" => Province::all(),
            "title" => "| Home"
        ]);
    }

    public function show ($slug){
        return view('provinsi', [
            "home" => Province::where('slug', $slug)->get()
        ]);
    }
}
