<?php

namespace App\Http\Controllers;

use App\Models\TarianDaerah;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;

class TarianAdatAdminController extends Controller
{
    public function index(){
        return view('admin.tarianadm', [
            "tariadat" => TarianDaerah::latest()->paginate(8),
            "count" =>TarianDaerah::all()
        ]);
    }

    public function view(){
        return view('admin.createtarianadat', [
            "user" => User::latest()->get(),
            "provinsi" => Province::all()
        ]);
    }

    public function viewupdate($slug){
        return view('admin.updatetarianadat', [
            "tariadat" => TarianDaerah::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "user" => User::latest()->get()
        ]);
    }

    public function viewdetail($slug){
        return view('admin.detailTarian', [
            "tariadat" => TarianDaerah::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "name_tarian" => 'required',
            "province_id" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "deskripsi_tarian" => 'required',
            "gambar" => 'required'
        ]);
        TarianDaerah::create($validatedData);
        return redirect('/createtarianadat');
    }

    public function destroy(){
        $id=request('id');
        TarianDaerah::destroy($id);
        return redirect('/tarianadatadmin');
    }

    public function update(Request $request){
        $slug=request('slugid');
        $validatedData = $request->validate([
            "name_tarian" => 'required',
            "user_id" => 'required',
            "province_id" => 'required',
            "slug" => 'required',
            "deskripsi_tarian" => 'required',
            "gambar" => 'required'
        ]);
        TarianDaerah::where('slug', $slug)->update($validatedData);
        return redirect('/tarianadatadmin');
    }
}
