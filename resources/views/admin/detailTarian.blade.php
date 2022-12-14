@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Tarian Adat</h1>
    <p>
        <div class="text-center">
            @if (strlen($tariadat[0]->gambar)>50)
                <img src="{{ asset('storage/'.$tariadat[0]->gambar) }}" class="img-fluid" style="width:900px; height:350px">
            @else
                <img src="/img/tarianadat/{{ $tariadat[0]->gambar }}" class="img-fluid mb-3" style="width:900px; height:350px">
            @endif
        </div>
    </p>
    <article>
        <p>Id Postingan : {{ $tariadat[0]->id }}</p>
        <p>Judul Postingan : {{ $tariadat[0]->name_tarian }}</p>
        <p>Kategori Provinsi : {{ $tariadat[0]->province->name_provinsi }}</p>
        <p>Author : {{ $tariadat[0]->user->name }}</p>
        <p>Slug Makanan Khas : {{ $tariadat[0]->slug }}</p>
        <p>Deskripsi Makanan Khas : {{ $tariadat[0]->deskripsi_tarian }}</p>
        <p>Tanggal Postingan Dibuat : {{ $tariadat[0]->created_at }}</p>
        <p>Tanggal Postingan Diupdate : {{ $tariadat[0]->updated_at }}</p>
        <a href="/tarianadatadmin" class="btn btn-primary mb-1">Back</a>
    </article>
@endsection
