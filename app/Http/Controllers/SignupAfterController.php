<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupAfterController extends Controller
{
    public function index(){
        return view('signup_2', [
            "title" => "| Sign Up"
        ]);
    }
}
