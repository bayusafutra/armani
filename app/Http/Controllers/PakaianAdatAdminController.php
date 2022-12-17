<?php

namespace App\Http\Controllers;

use App\Models\PakaianAdat;
use App\Models\User;
use App\Models\Province;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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
            "slug" => 'required|unique:pakaian_adats',
            "deskripsi_pakaian" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-pakaianadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        PakaianAdat::create($validatedData);
        return redirect('/createpakaianadat')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function destroy(){
        $id=request('id');
        $oldImage=request('oldImage');
        if($oldImage){
            Storage::delete($oldImage);
        }
        PakaianAdat::destroy($id);
        return redirect()->back()->with('success', 'Post berhasil dihapus!');
    }

    public function update(Request $request){
        $slug=request('slug');
        $rules = [
            "name_pakaian" => 'required',
            "province_id" => 'required',
            "deskripsi_pakaian" => 'max:5000',
            "gambar" => 'image|file|max:10240'
        ];

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-pakaianadat');
        }

        if($request->slug != $slug){
            $rules['slug'] = 'required|unique:pakaian_adats';
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-pakaianadat');
        }

        $validatedData['user_id'] = auth()->user()->id;
        PakaianAdat::where('slug', $slug)->update($validatedData);
        return redirect('/pakaianadatadmin')->with('success', 'Post berhasil diupdate!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(PakaianAdat::class, 'slug', $request->name_pakaian);
        return response()->json(['slug' => $slug]);
    }
}
