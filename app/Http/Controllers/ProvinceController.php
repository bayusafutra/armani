<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\MakananKhas;
use App\Models\SukuAdat;
use App\Models\TarianDaerah;
use App\Models\RumahAdat;
use App\Models\SenjataDaerah;
use App\Models\PakaianAdat;


class ProvinceController extends Controller
{

    public function show ($slug){
        return view('provinsi', [
            "provinsi" => Province::where('slug', $slug)->get(),
            "makanan" => MakananKhas::all(),
            "sukuadat" => SukuAdat::all(),
            "tarianadat" => TarianDaerah::all(),
            "rumahadat" => RumahAdat::all(),
            "senjatadaerah" => SenjataDaerah::all(),
            "pakaianadat" => PakaianAdat::all(),
            "title" => "| Provinsi"
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "name_provinsi" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "akronim" => 'required',
            "deskripsi" => 'required',
            "gambar" => 'required'
        ]);

        // dd($request->slug);
        Province::create($validatedData);
        return redirect('/Home');
    }

    public function destroy(){
        $id=request('id');
        Province::destroy($id);
        return redirect('/provinsiadmin');
    }
}
