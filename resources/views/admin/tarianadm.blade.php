@extends('layouts.mainadm')

@section('container')
<h2 class="text-center">Data Tarian Adat</h2>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-4" role="alert">
        {{ session('success') }}
    </div>
@endif

<a href="/createtarianadat" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
<h6>Jumlah Postingan Tarian Adat : {{ $count->count() }}</h6>
@foreach ($tariadat as $tari )
    <div class="card text-center mb-2" style="border-radius: 2rem">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link active btn btn-info" href="/viewtarianadat/{{ $tari->slug }}">View</a>
            </li>

            @if (auth()->user()->id === $tari->user_id)
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" href="/updatetarianadat/{{ $tari->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="tarianadatdelete">
                        <input type="hidden" name="id" value="{{ $tari->id }}">
                        <input type="hidden" name="oldImage" value="{{ $tari->gambar }}">
                        <button type="submit" class="nav-link active btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus Post {{ $tari->name_tarian }}?')">Delete</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" style="pointer-events: none" href="/updatetarianadat/{{ $tari->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="tarianadatdelete">
                        <input type="hidden" name="id" value="{{ $tari->id }}">
                        <button type="submit" class="nav-link active btn btn-danger" style="pointer-events: none">Delete</button>
                    </form>
                </li>
            @endif

        </ul>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $tari->name_tarian }}</h5>
        <p class="card-text">Created on {{ $tari->created_at->diffForHumans() }} by {{ $tari->user->name }}</p>
        </div>
    </div>
@endforeach

{{ $tariadat->links() }}

@endsection
