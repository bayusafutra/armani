@extends('layouts.mainadm')

@section('container')
<h2 class="text-center">Data Rumah Adat</h2>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-4" role="alert">
        {{ session('success') }}
    </div>
@endif

<a href="/createrumahadat" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
<h6>Jumlah Postingan Rumah Adat : {{ $count->count() }}</h6>
@foreach ($rumahadat as $rumah )
    <div class="card text-center mb-2" style="border-radius: 2rem">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link active btn btn-info" href="/viewrumahadat/{{ $rumah->slug }}">View</a>
            </li>
            @if (auth()->user()->id === $rumah->user_id)
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" href="/updaterumahadat/{{ $rumah->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="rumahadatdelete">
                        <input type="hidden" name="id" value="{{ $rumah->id }}">
                        <input type="hidden" name="oldImage" value="{{ $rumah->gambar }}">
                        <button type="submit" class="nav-link active btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus Post {{ $rumah->name_rumahadat }}?')">Delete</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" style="pointer-events: none" href="/updaterumahadat/{{ $rumah->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="rumahadatdelete">
                        <input type="hidden" name="id" value="{{ $rumah->id }}">
                        <button type="submit" class="nav-link active btn btn-danger" style="pointer-events: none">Delete</button>
                    </form>
                </li>
            @endif

        </ul>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $rumah->name_rumahadat }}</h5>
        <p class="card-text">Created on {{ $rumah->created_at->diffForHumans() }} by {{ $rumah->user->name }}</p>
        </div>
    </div>
@endforeach

{{ $rumahadat->links() }}

@endsection
