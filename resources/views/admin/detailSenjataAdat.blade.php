@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Senjata Daerah</h1>
    <p>
        <div class="text-center">
            <img class="img-fluid" src="/img/senjata/{{ $senjataadat[0]->gambar }}" style="width:900px; height:350px" alt="">
        </div>
    </p>
    <article>
        <p>Id Postingan : {{ $senjataadat[0]->id }}</p>
        <p>Judul Postingan : {{ $senjataadat[0]->name_senjata }}</p>
        <p>Author : {{ $senjataadat[0]->user->name }}</p>
        <p>Slug Makanan Khas : {{ $senjataadat[0]->slug }}</p>
        <p>Deskripsi Makanan Khas : {{ $senjataadat[0]->deskripsi_senjata }}</p>
        <p>Tanggal Postingan Dibuat : {{ $senjataadat[0]->created_at }}</p>
        <p>Tanggal Postingan Diupdate : {{ $senjataadat[0]->updated_at }}</p>
        <a href="/senjataadatadmin" class="btn btn-primary mb-1">Back</a>
    </article>
@endsection
