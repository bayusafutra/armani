@extends('layouts.mainadm')

@section('container')
<h2 class="text-center">Data Makanan Khas</h2>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-4" role="alert">
        {{ session('success') }}
    </div>
@endif

<a href="/createmakanan" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
<h6>Jumlah Postingan Makanan Khas : {{ $count->count() }}</h6>
@foreach ($makanan as $makan )
    <div class="card text-center mb-2" style="border-radius: 2rem">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link active btn btn-info" href="/viewmakanan/{{ $makan->slug }}">View</a>
            </li>

            @if (auth()->user()->id === $makan->user_id)
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" href="/updatemakanan/{{ $makan->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="/makanandelete">
                        @csrf
                        <input type="hidden" name="id" value="{{ $makan->id }}">
                        <input type="hidden" name="oldImage" value="{{ $makan->gambar }}">
                        <button type="submit" class="nav-link active btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus Post {{ $makan->name_makanan }}?')">Delete</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" style="pointer-events: none" href="/updatemakanan/{{ $makan->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="makanandelete">
                        <input type="hidden" name="id" value="{{ $makan->id }}">
                        <button type="submit" class="nav-link active btn btn-danger" style="pointer-events: none">Delete</button>
                    </form>
                </li>
            @endif

        </ul>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $makan->name_makanan }}</h5>
        <p class="card-text">Created on {{ $makan->created_at->diffForHumans() }} by {{ $makan->user->name }}</p>
        </div>
    </div>
@endforeach

{{ $makanan->links() }}

@endsection
