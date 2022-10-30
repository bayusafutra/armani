<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutBeforeController extends Controller
{
    public function index(){
        return view('about', [
            "title" => "| About"
        ]);
    }
}
