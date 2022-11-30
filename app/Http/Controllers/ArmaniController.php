<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\MakananKhas;
use Illuminate\Http\Request;

class ArmaniController extends Controller
{
    public function index(){
        return view('home', [
            "armani" => Province::all(),
            "title"  => "Pesona Indonesia"
        ]);
    }

}
