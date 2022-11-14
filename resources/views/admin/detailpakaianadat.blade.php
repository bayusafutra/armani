@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Pakaian Adat</h1>
    <p>
        <div class="text-center">
            <img class="img-fluid" src="/img/pakaianadat/{{ $pakaianadat[0]->gambar }}" style="width:900px; height:350px" alt="">
        </div>
    </p>
    <article>
        <p>Id Postingan : {{ $pakaianadat[0]->id }}</p>
        <p>Judul Postingan : {{ $pakaianadat[0]->name_pakaian }}</p>
        <p>Kategori Provinsi : {{ $pakaianadat[0]->province->name_provinsi }}</p>
        <p>Author : {{ $pakaianadat[0]->user->name }}</p>
        <p>Slug Pakaian Adat : {{ $pakaianadat[0]->slug }}</p>
        <p>Deskripsi Pakaian Adat : {{ $pakaianadat[0]->deskripsi_pakaian }}</p>
        <p>Tanggal Postingan Dibuat : {{ $pakaianadat[0]->created_at }}</p>
        <p>Tanggal Postingan Diupdate : {{ $pakaianadat[0]->updated_at }}</p>
        <a href="/pakaianadatadmin" class="btn btn-primary mb-1">Back</a>
    </article>
@endsection
