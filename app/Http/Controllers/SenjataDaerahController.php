<?php

namespace App\Http\Controllers;

use App\Models\SenjataDaerah;
use App\Http\Requests\StoreSenjataDaerahRequest;
use App\Http\Requests\UpdateSenjataDaerahRequest;

class SenjataDaerahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('senjatadaerah', [
            "title" => "| Senjata Daerah"
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
     * @param  \App\Http\Requests\StoreSenjataDaerahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSenjataDaerahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SenjataDaerah  $senjataDaerah
     * @return \Illuminate\Http\Response
     */
    public function show(SenjataDaerah $senjataDaerah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SenjataDaerah  $senjataDaerah
     * @return \Illuminate\Http\Response
     */
    public function edit(SenjataDaerah $senjataDaerah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSenjataDaerahRequest  $request
     * @param  \App\Models\SenjataDaerah  $senjataDaerah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSenjataDaerahRequest $request, SenjataDaerah $senjataDaerah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SenjataDaerah  $senjataDaerah
     * @return \Illuminate\Http\Response
     */
    public function destroy(SenjataDaerah $senjataDaerah)
    {
        //
    }
}
