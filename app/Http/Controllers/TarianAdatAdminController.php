<?php

namespace App\Http\Controllers;

use App\Models\TarianDaerah;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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
            "name_tarian" => 'required|max:255',
            "province_id" => 'required',
            "slug" => 'required|unique:tarian_daerahs',
            "deskripsi_tarian" => 'max:2000',
            "gambar" => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-tariadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        TarianDaerah::create($validatedData);
        return redirect('/createtarianadat')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function destroy(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        TarianDaerah::destroy($id);
        return redirect()->back()->with('success', 'Post berhasil dihapus!');
    }

    public function update(Request $request){
        $slug=request('slug');
        $rules = [
            "name_tarian" => 'required|max:255',
            "province_id" => 'required',
            "deskripsi_tarian" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-tariadat');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:tarian_daerahs';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-tariadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        TarianDaerah::where('slug', $slug)->update($validatedData);
        return redirect('/tarianadatadmin')->with('success', 'Post berhasil diupdate!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(TarianDaerah::class, 'slug', $request->name_tarian);
        return response()->json(['slug' => $slug]);
    }
}
