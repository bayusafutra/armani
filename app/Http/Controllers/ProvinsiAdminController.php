<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;

class ProvinsiAdminController extends Controller
{
    public function index(){
        return view('admin.provinsiadm', [
            "provinsi" => Province::latest()->paginate(8),
            "count" =>Province::all()
        ]);
    }   

    public function view(){
        return view('admin.createprov', [
            "user" => User::latest()->get()
        ]);
    }

    public function viewupdate($slug){
        return view('admin.updateprov', [
            "provinsi" => Province::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function viewdetail($slug){
        return view('admin.detailProvinsi', [
            "provinsi" => Province::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "name_provinsi" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "akronim" => 'required',
            "deskripsi" => 'required',
            "konten" => 'required',
            "gambar" => 'required'
        ]);
        Province::create($validatedData);
        return redirect('/createprovinsi');
    }

    public function destroy(){
        $id=request('id');
        Province::destroy($id);
        return redirect('/provinsiadmin');
    }

    public function update(Request $request){
        $slug=request('slugid');
        $validatedData = $request->validate([
            "name_provinsi" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "akronim" => 'required',
            "deskripsi" => 'required',
            "konten" => 'required',
            "gambar" => 'required'
        ]);
        Province::where('slug', $slug)->update($validatedData);
        return redirect('/provinsiadmin');
    }
}
