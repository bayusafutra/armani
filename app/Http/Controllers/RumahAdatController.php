<?php

namespace App\Http\Controllers;

use App\Models\MakananKhas;
use App\Models\Province;
use App\Models\SukuAdat;
use App\Models\TarianDaerah;
use App\Models\RumahAdat;
use App\Models\SenjataDaerah;
use App\Models\PakaianAdat;
use App\Http\Requests\StoreRumahAdatRequest;
use App\Http\Requests\UpdateRumahAdatRequest;

class RumahAdatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        return view('rumahadat', [
            "title" => "| Rumah Adat",
            "rumahadat" => RumahAdat::where('slug', $slug)->get(),
            "provinsi" => Province::all(),
            "makanan" =>MakananKhas::all(),
            "sukuadat" =>SukuAdat::all(),
            "tarianadat" => TarianDaerah::all(),
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
     * @param  \App\Http\Requests\StoreRumahAdatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRumahAdatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RumahAdat  $rumahAdat
     * @return \Illuminate\Http\Response
     */
    public function show(RumahAdat $rumahAdat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RumahAdat  $rumahAdat
     * @return \Illuminate\Http\Response
     */
    public function edit(RumahAdat $rumahAdat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRumahAdatRequest  $request
     * @param  \App\Models\RumahAdat  $rumahAdat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRumahAdatRequest $request, RumahAdat $rumahAdat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RumahAdat  $rumahAdat
     * @return \Illuminate\Http\Response
     */
    public function destroy(RumahAdat $rumahAdat)
    {
        //
    }
}
