<?php

namespace App\Http\Controllers;

use App\Models\MakananKhas;
use App\Models\Province;
use App\Models\SukuAdat;
use App\Models\TarianDaerah;
use App\Models\RumahAdat;
use App\Models\SenjataDaerah;
use App\Models\PakaianAdat;
use App\Http\Requests\StoreSukuAdatRequest;
use App\Http\Requests\UpdateSukuAdatRequest;

class SukuAdatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        return view('sukuadat', [
            "title" => "| Suku Adat",
            "sukuadat" =>SukuAdat::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "makanan" =>MakananKhas::all(),
            "tarianadat" => TarianDaerah::all(),
            "rumahadat" => RumahAdat::all(),
            "senjatadaerah" => SenjataDaerah::all(),
            "pakaianadat" => PakaianAdat::all()
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
     * @param  \App\Http\Requests\StoreSukuAdatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSukuAdatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SukuAdat  $sukuAdat
     * @return \Illuminate\Http\Response
     */
    public function show(SukuAdat $sukuAdat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SukuAdat  $sukuAdat
     * @return \Illuminate\Http\Response
     */
    public function edit(SukuAdat $sukuAdat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSukuAdatRequest  $request
     * @param  \App\Models\SukuAdat  $sukuAdat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSukuAdatRequest $request, SukuAdat $sukuAdat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SukuAdat  $sukuAdat
     * @return \Illuminate\Http\Response
     */
    public function destroy(SukuAdat $sukuAdat)
    {
        //
    }
}
