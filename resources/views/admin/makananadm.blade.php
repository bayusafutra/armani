@extends('layouts.mainadm')

@section('container')
<h2 class="text-center">Data Makanan Khas</h2>
<a href="/createmakanan" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
<h6>Jumlah Postingan Makanan Khas : {{ $count->count() }}</h6>
@foreach ($makanan as $makan )
    <div class="card text-center mb-2" style="border-radius: 2rem">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link active btn btn-info" href="/viewmakanan/{{ $makan->slug }}">View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active btn btn-warning" href="/updatemakanan/{{ $makan->slug }}">Update</a>
            </li>
            <li class="nav-item">
                <form action="makanandelete">
                    <input type="hidden" name="id" value="{{ $makan->id }}">
                    <button type="submit" class="nav-link active btn btn-danger">Delete</button>
                </form>
            </li>
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
