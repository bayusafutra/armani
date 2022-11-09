<?php

namespace App\Http\Controllers;

use App\Models\PakaianAdat;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;

class PakaianAdatAdminController extends Controller
{
    public function index(){
        return view('admin.pakaianadatadm', [
            "pakaianadat" => PakaianAdat::latest()->paginate(8),
            "count" =>PakaianAdat::all()
        ]);
    }

    public function view(){
        return view('admin.createpakaianadat', [
            "user" => User::latest()->get(),
            "provinsi" => Province::all()
        ]);
    }

    public function viewupdate($slug){
        return view('admin.updatepakaianadat', [
            "pakaianadat" => PakaianAdat::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "user" => User::latest()->get()
        ]);
    }

    public function viewdetail($slug){
        return view('admin.detailPakaianAdat', [
            "pakaianadat" => PakaianAdat::where('slug', $slug)->get(),
            "user" => User::latest()->get()
        ]);
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "name_pakaian" => 'required',
            "province_id" => 'required',
            "user_id" => 'required',
            "slug" => 'required',
            "deskripsi_pakaian" => 'required',
            "gambar" => 'required'
        ]);
        PakaianAdat::create($validatedData);
        return redirect('/createpakaianadat');
    }

    public function destroy(){
        $id=request('id');
        PakaianAdat::destroy($id);
        return redirect('/pakaianadatadmin');
    }

    public function update(Request $request){
        $slug=request('slugid');
        $validatedData = $request->validate([
            "name_pakaian" => 'required',
            "user_id" => 'required',
            "province_id" => 'required',
            "slug" => 'required',
            "deskripsi_pakaian" => 'required',
            "gambar" => 'required'
        ]);
        PakaianAdat::where('slug', $slug)->update($validatedData);
        return redirect('/pakaianadatadmin');
    }
}
