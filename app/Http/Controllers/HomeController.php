<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('home2', [
            "home" => Province::latest()->filter(request(['search']))->get(),
            "title" => "| Home"
        ]);
    }

    public function index2(){
        return view('delete', [
            "home" => Province::latest()->filter(request(['search']))->get(),
            "title" => "| Belajar Delete"
        ]);
    }

    public function index3(){
        return view('belajar', [
            "user" => User::latest()->get(),
            "title" => "| Belajar Create"
        ]);
    }

    public function show ($slug){
        return view('provinsi', [
            "home" => Province::where('slug', $slug)->get()
        ]);
    }
}
