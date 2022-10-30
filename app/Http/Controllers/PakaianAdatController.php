<?php

namespace App\Http\Controllers;

use App\Models\PakaianAdat;
use App\Http\Requests\StorePakaianAdatRequest;
use App\Http\Requests\UpdatePakaianAdatRequest;

class PakaianAdatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pakaianadat', [
            "title" => "| Pakaian Adat"
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
     * @param  \App\Http\Requests\StorePakaianAdatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePakaianAdatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PakaianAdat  $pakaianAdat
     * @return \Illuminate\Http\Response
     */
    public function show(PakaianAdat $pakaianAdat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PakaianAdat  $pakaianAdat
     * @return \Illuminate\Http\Response
     */
    public function edit(PakaianAdat $pakaianAdat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePakaianAdatRequest  $request
     * @param  \App\Models\PakaianAdat  $pakaianAdat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePakaianAdatRequest $request, PakaianAdat $pakaianAdat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PakaianAdat  $pakaianAdat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PakaianAdat $pakaianAdat)
    {
        //
    }
}
