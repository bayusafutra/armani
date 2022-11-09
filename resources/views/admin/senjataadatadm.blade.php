@extends('layouts.mainadm')

@section('container')
<h2 class="text-center">Data Senjata Daerah</h2>
<a href="/createsenjataadat" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
<h6>Jumlah Postingan Senjata Daerah : {{ $count->count() }}</h6>
@foreach ($senjataadat as $senjata )
    <div class="card text-center mb-2" style="border-radius: 2rem">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link active btn btn-info" href="/viewsenjataadat/{{ $senjata->slug }}">View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active btn btn-warning" href="/updatesenjataadat/{{ $senjata->slug }}">Update</a>
            </li>
            <li class="nav-item">
                <form action="senjataadatdelete">
                    <input type="hidden" name="id" value="{{ $senjata->id }}">
                    <button type="submit" class="nav-link active btn btn-danger">Delete</button>
                </form>
            </li>
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
