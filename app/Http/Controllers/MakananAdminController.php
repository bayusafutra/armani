<?php

namespace App\Http\Controllers;

use App\Models\MakananKhas;
use App\Models\User;
use App\Models\Province;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
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
            "name_makanan" => 'required|max:255',
            "province_id" => 'required',
            "slug" => 'required|unique:makanan_khas',
            "deskripsi_makanan" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-makanan');
        }

        $validatedData['user_id'] = auth()->user()->id;
        MakananKhas::create($validatedData);
        return redirect('/createmakanan')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function destroy(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        MakananKhas::destroy($id);
        return redirect()->back()->with('success', 'Post berhasil dihapus!');
    }

    public function update(Request $request){
        $slug=request('slug');
        $rules = [
            "name_makanan" => 'required|max:255',
            "province_id" => 'required',
            "deskripsi_makanan" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-makanan');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:makanan_khas';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-makanan');
        }

        $validatedData['user_id'] = auth()->user()->id;
        MakananKhas::where('slug', $slug)->update($validatedData);
        return redirect('/makananadmin')->with('success', 'Post berhasil diupdate!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(MakananKhas::class, 'slug', $request->name_makanan);
        return response()->json(['slug' => $slug]);
    }
}
