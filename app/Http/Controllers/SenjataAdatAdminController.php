<?php

namespace App\Http\Controllers;

use App\Models\SenjataDaerah;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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
            "slug" => 'required|unique:senjata_daerahs',
            "deskripsi_senjata" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-senjataadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        SenjataDaerah::create($validatedData);
        return redirect('/createsenjataadat')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function destroy(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        SenjataDaerah::destroy($id);
        return redirect('/senjataadatadmin')->with('success', 'Post berhasil dihapus!');
    }

    public function update(Request $request){
        $slug=request('slug');
        $rules = [
            "name_senjata" => 'required',
            "province_id" => 'required',
            "deskripsi_senjata" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-senjataadat');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:senjata_daerahs';
        }
        
        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-senjataadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        SenjataDaerah::where('slug', $slug)->update($validatedData);
        return redirect('/senjataadatadmin')->with('success', 'Post berhasil diupdate!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(SenjataDaerah::class, 'slug', $request->name_senjata);
        return response()->json(['slug' => $slug]);
    }
}
