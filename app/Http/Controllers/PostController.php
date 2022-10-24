<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index (){
        return view('home2', [
            "posts" => Post::all()
        ]);
    }

    public function show ($slug){
        return view('provinsi', [
            "posting" => Post::find($slug)
        ]);
    }
}
