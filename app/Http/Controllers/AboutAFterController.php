<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutAFterController extends Controller
{
    public function index(){
        return view('about2', [
            "title" => "| About"
        ]);
    }
}
