<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPassAfterController extends Controller
{
    public function index(){
        return view('forgotpass2');
    }
}
