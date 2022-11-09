<?php

namespace App\Http\Controllers;

use App\Models\MakananKhas;
use App\Models\Province;
use App\Models\SukuAdat;
use App\Models\TarianDaerah;
use App\Models\RumahAdat;
use App\Models\SenjataDaerah;
use App\Models\PakaianAdat;
use App\Http\Requests\StoreTarianDaerahRequest;
use App\Http\Requests\UpdateTarianDaerahRequest;

class TarianDaerahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        return view('tarianadat', [
            "title" => "| Tarian Daerah",
            "tarianadat" => Tariandaerah::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "makanan" =>MakananKhas::all(),
            "sukuadat" => SukuAdat::all(),
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
     * @param  \App\Http\Requests\StoreTarianDaerahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarianDaerahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TarianDaerah  $tarianDaerah
     * @return \Illuminate\Http\Response
     */
    public function show(TarianDaerah $tarianDaerah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TarianDaerah  $tarianDaerah
     * @return \Illuminate\Http\Response
     */
    public function edit(TarianDaerah $tarianDaerah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTarianDaerahRequest  $request
     * @param  \App\Models\TarianDaerah  $tarianDaerah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTarianDaerahRequest $request, TarianDaerah $tarianDaerah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TarianDaerah  $tarianDaerah
     * @return \Illuminate\Http\Response
     */
    public function destroy(TarianDaerah $tarianDaerah)
    {
        //
    }
}
