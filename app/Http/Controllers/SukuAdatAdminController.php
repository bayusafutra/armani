<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Province;
use App\Models\SukuAdat;

class SukuAdatAdminController extends Controller
{
    public function index(){
        return view('admin.sukuadatadm', [
            "sukuadat" => SukuAdat::latest()->paginate(8),
            "count" =>SukuAdat::all()
        ]);
    }

    public function view(){
        return view('admin.createsuku', [
            "user" => User::latest()->get(),
            "provinsi" => Province::all()
        ]);
    }

    public function viewupdate($slug){
        return view('admin.updatesuku', [
            "sukuadat" => SukuAdat::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "user" => User::latest()->get()
        ]);
    }

    public function viewdetail($slug){
        return view('admin.detailSukuadat', [
            "sukuadat" => SukuAdat::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "nama_suku" => 'required',
            "province_id" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "deskripsi_suku" => 'required',
            "gambar" => 'required'
        ]);
        SukuAdat::create($validatedData);
        return redirect('/createsukuadat');
    }

    public function destroy(){
        $id=request('id');
        SukuAdat::destroy($id);
        return redirect('/sukuadatadmin');
    }

    public function update(Request $request){
        $slug=request('slugid');
        $validatedData = $request->validate([
            "nama_suku" => 'required',
            "user_id" => 'required',
            "province_id" => 'required',
            "slug" => 'required',
            "deskripsi_suku" => 'required',
            "gambar" => 'required'
        ]);
        SukuAdat::where('slug', $slug)->update($validatedData);
        return redirect('/sukuadatadmin');
    }
}
