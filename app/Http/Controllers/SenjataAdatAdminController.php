<?php

namespace App\Http\Controllers;

use App\Models\SenjataDaerah;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;

class SenjataAdatAdminController extends Controller
{
    public function index(){
        return view('admin.senjataadatadm', [
            "senjataadat" => SenjataDaerah::latest()->paginate(8),
            "count" =>SenjataDaerah::all()
        ]);
    }

    public function view(){
        return view('admin.createsenjataadat', [
            "user" => User::latest()->get(),
            "provinsi" => Province::all()
        ]);
    }

    public function viewupdate($slug){
        return view('admin.updatesenjataadat', [
            "senjataadat" => SenjataDaerah::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "user" => User::latest()->get()
        ]);
    }

    public function viewdetail($slug){
        return view('admin.detailSenjataAdat', [
            "senjataadat" => SenjataDaerah::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "name_senjata" => 'required',
            "province_id" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "deskripsi_senjata" => 'required',
            "gambar" => 'required'
        ]);
        SenjataDaerah::create($validatedData);
        return redirect('/createsenjataadat');
    }

    public function destroy(){
        $id=request('id');
        SenjataDaerah::destroy($id);
        return redirect('/senjataadatadmin');
    }

    public function update(Request $request){
        $slug=request('slugid');
        $validatedData = $request->validate([
            "name_senjata" => 'required',
            "user_id" => 'required',
            "province_id" => 'required',
            "slug" => 'required',
            "deskripsi_senjata" => 'required',
            "gambar" => 'required'
        ]);
        SenjataDaerah::where('slug', $slug)->update($validatedData);
        return redirect('/senjataadatadmin');
    }
}
