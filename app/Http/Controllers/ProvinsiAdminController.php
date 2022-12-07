<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;



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
            "name_provinsi" => 'required|max:255',
            "slug" => 'required|unique:provinces',
            "akronim" => 'required|min:2|max:255|unique:provinces',
            "deskripsi" => 'required|max:1000',
            "konten" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-provinsi');
        }

        $validatedData['user_id'] = auth()->user()->id;
        Province::create($validatedData);
        return redirect('/createprovinsi')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function destroy(Request $request){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        Province::destroy($id);
        return redirect('/provinsiadmin')->with('success', 'Post berhasil dihapus!');
    }

    public function update(Request $request){
        $slug=request('slug');
        $akronim=request('akronim');
        $rules = [
            "name_provinsi" => 'required|max:255',
            "deskripsi" => 'required|max:3000',
            "konten" => 'max:2000',
            "gambar" => 'required'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-provinsi');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:provinces';
        }

        if($request->akronim != $akronim){
            $rules['akronim'] = 'required|min:2|max:255|unique:provinces';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-provinsi');
        }

        $validatedData['user_id'] = auth()->user()->id;
        Province::where('slug', $slug)->update($validatedData);
        return redirect('/provinsiadmin')->with('success', 'Post berhasil diupdate!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Province::class, 'slug', $request->name_provinsi);
        return response()->json(['slug' => $slug]);
    }
}
