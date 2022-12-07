@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Makanan Khas</h1>
    <p>
        <div class="text-center">
            @if (strlen($makanan[0]->gambar)>50)
                <img src="{{ asset('storage/'.$makanan[0]->gambar) }}" class="img-fluid" style="width:900px; height:350px">
            @else
                <img src="/img/makanan/{{ $makanan[0]->gambar }}" class="img-fluid mb-3" style="width:900px; height:350px">
            @endif
        </div>
    </p>
    <article>
        <p>Id Postingan : {{ $makanan[0]->id }}</p>
        <p>Judul Postingan : {{ $makanan[0]->name_makanan }}</p>
        <p>Kategori Provinsi : {{ $makanan[0]->province->name_provinsi }}</p>
        <p>Author : {{ $makanan[0]->user->name }}</p>
        <p>Slug Makanan Khas : {{ $makanan[0]->slug }}</p>
        <p>Deskripsi Makanan Khas : {{ $makanan[0]->deskripsi_makanan }}</p>
        <p>Tanggal Postingan Dibuat : {{ $makanan[0]->created_at }}</p>
        <p>Tanggal Postingan Diupdate : {{ $makanan[0]->updated_at }}</p>
        <a href="/makananadmin" class="btn btn-primary mb-1">Back</a>
    </article>
@endsection
