@extends('layouts.mainadm')

@section('container')
    <h1 class="text-center mb-4">Detail Post Rumah Adat</h1>
    <p>
        <div class="text-center">
            @if (strlen($rumahadat[0]->gambar)>50)
                <img src="{{ asset('storage/'.$rumahadat[0]->gambar) }}" class="img-fluid" style="width:900px; height:350px">
            @else
                <img src="/img/rumahadat/{{ $rumahadat[0]->gambar }}" class="img-fluid mb-3" style="width:900px; height:350px">
            @endif
        </div>
    </p>
    <article>
        <p>Id Postingan : {{ $rumahadat[0]->id }}</p>
        <p>Judul Postingan : {{ $rumahadat[0]->name_rumahadat }}</p>
        <p>Kategori Provinsi : {{ $rumahadat[0]->province->name_provinsi }}</p>
        <p>Author : {{ $rumahadat[0]->user->name }}</p>
        <p>Slug Rumah Adat : {{ $rumahadat[0]->slug }}</p>
        <p>Deskripsi Rumah Adat : {{ $rumahadat[0]->deskripsi_rumah_adat }}</p>
        <p>Tanggal Postingan Dibuat : {{ $rumahadat[0]->created_at }}</p>
        <p>Tanggal Postingan Diupdate : {{ $rumahadat[0]->updated_at }}</p>
        <a href="/rumahadatadmin" class="btn btn-primary mb-1">Back</a>
    </article>
@endsection
