@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Suku Adat</h1>
        <p>
            <div class="text-center">
                <img class="img-fluid" src="/img/sukuadat/{{ $sukuadat[0]->gambar }}" style="width:900px; height:350px" alt="">
            </div>
        </p>
        <article>
            <p>Id Postingan : {{ $sukuadat[0]->id }}</p>
            <p>Judul Postingan : {{ $sukuadat[0]->nama_suku }}</p>
            <p>Kategori Provinsi : {{ $sukuadat[0]->province->name_provinsi }}</p>
            <p>Author : {{ $sukuadat[0]->user->name }}</p>
            <p>Slug Makanan Khas : {{ $sukuadat[0]->slug }}</p>
            <p>Deskripsi Makanan Khas : {{ $sukuadat[0]->deskripsi_suku }}</p>
            <p>Tanggal Postingan Dibuat : {{ $sukuadat[0]->created_at }}</p>
            <p>Tanggal Postingan Diupdate : {{ $sukuadat[0]->updated_at }}</p>
            <a href="/sukuadatadmin" class="btn btn-primary mb-1">Back</a>
        </article>
@endsection
