@extends('layouts.mainadm')

@section('container')
    <h2 class="text-center">Data Suku Adat</h2>
    <a href="/createsukuadat" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
    <h6>Jumlah Postingan Suku Adat : {{ $count->count() }}</h6>
    @foreach ($sukuadat as $suku )
        <div class="card text-center mb-2" style="border-radius: 2rem">
            <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                <a class="nav-link active btn btn-info" href="/viewsukuadat/{{ $suku->slug }}">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" href="/updatesukuadat/{{ $suku->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="sukuadatdelete">
                        <input type="hidden" name="id" value="{{ $suku->id }}">
                        <button type="submit" class="nav-link active btn btn-danger">Delete</button>
                    </form>
                </li>
            </ul>
            </div>
            <div class="card-body">
            <h5 class="card-title">{{ $suku->nama_suku }}</h5>
            <p class="card-text">Created on {{ $suku->created_at->diffForHumans() }} by {{ $suku->user->name }}</p>
            </div>
        </div>
    @endforeach

    {{ $sukuadat->links() }}
@endsection
