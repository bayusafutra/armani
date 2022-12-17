<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Province;
use App\Models\SukuAdat;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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
            "nama_suku" => 'required|max:255',
            "province_id" => 'required',
            "slug" => 'required|unique:suku_adats',
            "deskripsi_suku" => 'max:2000',
            "gambar" => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-sukuadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        SukuAdat::create($validatedData);
        return redirect('/createsukuadat')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function destroy(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        SukuAdat::destroy($id);
        return redirect()->back()->with('success', 'Post berhasil dihapus!');
    }

    public function update(Request $request){
        $slug=request('slug');
        $rules = [
            "nama_suku" => 'required|max:255',
            "province_id" => 'required',
            "deskripsi_suku" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-sukuadat');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:suku_adats';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-sukuadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        SukuAdat::where('slug', $slug)->update($validatedData);
        return redirect('/sukuadatadmin')->with('success', 'Post berhasil diupdate!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(SukuAdat::class, 'slug', $request->nama_suku);
        return response()->json(['slug' => $slug]);
    }
}
