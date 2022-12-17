<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        return view('profile', [
            "title" => "| Profile"
        ]);
    }

    public function edit(){
        // dd(auth()->user()->id);
        return view('editprofile', [
            "title" => "| Edit Profile",
            "profile" => User::where('id', auth()->user()->id)->get()

        ]);
    }

    public function update(Request $request){
        // dd("erga cantik");
        $username=request('username');
        $rules = [
            "name" => 'required|max:255',
            "notelp" => 'required|min:10|max:20',
            "alamat" => 'required|max:255',
            "gender" => 'required',
            "gambar" => 'image|file|max:10240'
        ];
        if($request->username != $username){
            $rules['username'] = 'required|min:5|max:100';
        }

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('img-profile');
        }

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('img-profile');
        }
        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Profile berhasil diupdate!');
    }
}
