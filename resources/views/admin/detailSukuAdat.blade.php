@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Suku Adat</h1>
        <p>
            <div class="text-center">
                @if (strlen($sukuadat[0]->gambar)>50)
                    <img src="{{ asset('storage/'.$sukuadat[0]->gambar) }}" class="img-fluid" style="width:900px; height:350px">
                @else
                    <img src="/img/sukuadat/{{ $sukuadat[0]->gambar }}" class="img-fluid mb-3" style="width:900px; height:350px">
                @endif
            </div>
        </p>
        <article>
            <p>Id Postingan : {{ $sukuadat[0]->id }}</p>
            <p>Judul Postingan : {{ $sukuadat[0]->nama_suku }}</p>
            <p>Kategori Provinsi : {{ $sukuadat[0]->province->name_provinsi }}</p>
            <p>Author : {{ $sukuadat[0]->user->name }}</p>
            <p>Slug Suku Adat : {{ $sukuadat[0]->slug }}</p>
            <p>Deskripsi Suku Adat : {{ $sukuadat[0]->deskripsi_suku }}</p>
            <p>Tanggal Postingan Dibuat : {{ $sukuadat[0]->created_at }}</p>
            <p>Tanggal Postingan Diupdate : {{ $sukuadat[0]->updated_at }}</p>
            <a href="/sukuadatadmin" class="btn btn-primary mb-1">Back</a>
        </article>
@endsection
