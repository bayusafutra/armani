@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Provinsi</h1>
    <p>
        <div class="text-center">
            <img class="img-fluid" src="/img/{{ $provinsi[0]->gambar }}" style="width:900px; height:350px" alt="">
        </div>
    </p>
    <article>
        <p>Id Postingan : {{ $provinsi[0]->id }}</p>
        <p>Judul Postingan : {{ $provinsi[0]->name_provinsi }}</p>
        <p>Author : {{ $provinsi[0]->user->name }}</p>
        <p>Akronim Provinsi : {{ $provinsi[0]->akronim}}</p>
        <p>Slug Provinsi : {{ $provinsi[0]->slug }}</p>
        <p>Deskripsi Provinsi : {{ $provinsi[0]->deskripsi }}</p>
        <p>Konten Provinsi : {{ $provinsi[0]->konten }}</p>
        <p>Tanggal Postingan Dibuat : {{ $provinsi[0]->created_at }}</p>
        <p>Tanggal Postingan Diupdate : {{ $provinsi[0]->updated_at }}</p>
        <a href="/provinsiadmin" class="btn btn-primary mb-1">Back</a>
    </article>
@endsection
