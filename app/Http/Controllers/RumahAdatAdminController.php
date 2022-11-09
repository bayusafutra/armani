<?php

namespace App\Http\Controllers;

use App\Models\RumahAdat;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;

class RumahAdatAdminController extends Controller
{
    public function index(){
        return view('admin.rumahadatadm', [
            "rumahadat" => RumahAdat::latest()->paginate(8),
            "count" =>RumahAdat::all()
        ]);
    }

    public function view(){
        return view('admin.createrumahadat', [
            "user" => User::latest()->get(),
            "provinsi" => Province::all()
        ]);
    }

    public function viewupdate($slug){
        return view('admin.updaterumahadat', [
            "rumahadat" => RumahAdat::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "user" => User::latest()->get()
        ]);
    }

    public function viewdetail($slug){
        return view('admin.detailRumahAdat', [
            "rumahadat" => RumahAdat::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "name_rumahadat" => 'required',
            "province_id" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "deskripsi_rumah_adat" => 'required',
            "gambar" => 'required'
        ]);
        RumahAdat::create($validatedData);
        return redirect('/createrumahadat');
    }

    public function destroy(){
        $id=request('id');
        RumahAdat::destroy($id);
        return redirect('/rumahadatadmin');
    }

    public function update(Request $request){
        $slug=request('slugid');
        $validatedData = $request->validate([
            "name_rumahadat" => 'required',
            "user_id" => 'required',
            "province_id" => 'required',
            "slug" => 'required',
            "deskripsi_rumah_adat" => 'required',
            "gambar" => 'required'
        ]);
        RumahAdat::where('slug', $slug)->update($validatedData);
        return redirect('/rumahadatadmin');
    }
}
