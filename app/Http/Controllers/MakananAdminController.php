<?php

namespace App\Http\Controllers;

use App\Models\MakananKhas;
use App\Models\User;
use App\Models\Province;

use Illuminate\Http\Request;

class MakananAdminController extends Controller
{
    public function index(){
        return view('admin.makananadm', [
            "makanan" => MakananKhas::latest()->paginate(8),
            "count" =>MakananKhas::all()
        ]);
    }

    public function view(){
        return view('admin.createmakanan', [
            "user" => User::latest()->get(),
            "provinsi" => Province::all()
        ]);
    }

    public function viewupdate($slug){
        return view('admin.updatemakanan', [
            "makanan" => MakananKhas::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "user" => User::latest()->get()
        ]);
    }

    public function viewdetail($slug){
        return view('admin.detailMakanan', [
            "makanan" => MakananKhas::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "name_makanan" => 'required',
            "province_id" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "deskripsi_makanan" => 'required',
            "gambar" => 'required'
        ]);
        MakananKhas::create($validatedData);
        return redirect('/createmakanan');
    }

    public function destroy(){
        $id=request('id');
        MakananKhas::destroy($id);
        return redirect('/makananadmin');
    }

    public function update(Request $request){
        $slug=request('slugid');
        $validatedData = $request->validate([
            "name_makanan" => 'required',
            "user_id" => 'required',
            "province_id" => 'required',
            "slug" => 'required',
            "deskripsi_makanan" => 'required',
            "gambar" => 'required'
        ]);
        MakananKhas::where('slug', $slug)->update($validatedData);
        return redirect('/makananadmin');
    }
}
