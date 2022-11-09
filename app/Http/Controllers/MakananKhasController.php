<?php

namespace App\Http\Controllers;

use App\Models\MakananKhas;
use App\Models\Province;
use App\Models\SukuAdat;
use App\Models\TarianDaerah;
use App\Models\RumahAdat;
use App\Models\SenjataDaerah;
use App\Models\PakaianAdat;
use App\Http\Requests\StoreMakananKhasRequest;
use App\Http\Requests\UpdateMakananKhasRequest;

class MakananKhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('makanankhas', [
            "makanan" => MakananKhas::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "title" => "| Makanan Khas"
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMakananKhasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMakananKhasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MakananKhas  $makananKhas
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('makanankhas', [
            "makanan" => MakananKhas::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "sukuadat" =>SukuAdat::all(),
            "tarianadat" => TarianDaerah::all(),
            "rumahadat" => RumahAdat::all(),
            "senjatadaerah" => SenjataDaerah::all(),
            "pakaianadat" => PakaianAdat::all(),
            "title" => "| Makanan Khas"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MakananKhas  $makananKhas
     * @return \Illuminate\Http\Response
     */
    public function edit(MakananKhas $makananKhas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMakananKhasRequest  $request
     * @param  \App\Models\MakananKhas  $makananKhas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMakananKhasRequest $request, MakananKhas $makananKhas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MakananKhas  $makananKhas
     * @return \Illuminate\Http\Response
     */
    public function destroy(MakananKhas $makananKhas)
    {
        //
    }
}
