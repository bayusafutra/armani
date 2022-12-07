@extends('layouts.mainadm')

@section('container')
<h2 class="text-center">Data Senjata Daerah</h2>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-4" role="alert">
        {{ session('success') }}
    </div>
@endif

<a href="/createsenjataadat" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
<h6>Jumlah Postingan Senjata Daerah : {{ $count->count() }}</h6>
@foreach ($senjataadat as $senjata )
    <div class="card text-center mb-2" style="border-radius: 2rem">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link active btn btn-info" href="/viewsenjataadat/{{ $senjata->slug }}">View</a>
            </li>

            @if (auth()->user()->id === $senjata->user_id)
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" href="/updatesenjataadat/{{ $senjata->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="senjataadatdelete">
                        <input type="hidden" name="id" value="{{ $senjata->id }}">
                        <input type="hidden" name="oldImage" value="{{ $senjata->gambar }}">
                        <button type="submit" class="nav-link active btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus Post {{ $senjata->name_senjata }}?')">Delete</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" style="pointer-events: none" href="/updatesenjataadat/{{ $senjata->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="senjataadatdelete">
                        <input type="hidden" name="id" value="{{ $senjata->id }}">
                        <button type="submit" class="nav-link active btn btn-danger" style="pointer-events: none">Delete</button>
                    </form>
                </li>
            @endif

        </ul>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $senjata->name_senjata }}</h5>
        <p class="card-text">Created on {{ $senjata->created_at->diffForHumans() }} by {{ $senjata->user->name }}</p>
        </div>
    </div>
@endforeach

{{ $senjataadat->links() }}

@endsection
