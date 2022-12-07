<?php

namespace App\Http\Controllers;

use App\Models\RumahAdat;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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
            "name_rumahadat" => 'required|max:255',
            "province_id" => 'required',
            "slug" => 'required|unique:rumah_adats',
            "deskripsi_rumah_adat" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-rumahadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        RumahAdat::create($validatedData);
        return redirect('/createrumahadat')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function destroy(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        RumahAdat::destroy($id);
        return redirect('/rumahadatadmin')->with('success', 'Post berhasil dihapus!');
    }

    public function update(Request $request){
        $slug=request('slug');
        $rules = [
            "name_rumahadat" => 'required|max:255',
            "province_id" => 'required',
            "deskripsi_rumah_adat" => 'max:2000',
            "gambar" => 'image|file|max:10240'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-rumahadat');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:rumah_adats';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-rumahadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        RumahAdat::where('slug', $slug)->update($validatedData);
        return redirect('/rumahadatadmin')->with('success', 'Post berhasil diupdate!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(RumahAdat::class, 'slug', $request->name_rumahadat);
        return response()->json(['slug' => $slug]);
    }
}
