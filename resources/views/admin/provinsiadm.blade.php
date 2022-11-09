@extends('layouts.mainadm')

@section('container')
    <h2 class="text-center">Data Provinsi</h2>
    <a href="/createprovinsi" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
    <h6>Jumlah Postingan Provinsi : {{ $count->count() }}</h6>
    @foreach ($provinsi as $prov )
        <div class="card text-center mb-2" style="border-radius: 2rem">
            <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                <a class="nav-link active btn btn-info" href="/viewprovinsi/{{ $prov->slug }}">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active btn btn-warning" href="/updateprovinsi/{{ $prov->slug }}">Update</a>
                </li>
                <li class="nav-item">
                    <form action="provinsidelete">
                        <input type="hidden" name="id" value="{{ $prov->id }}">
                        <button type="submit" class="nav-link active btn btn-danger">Delete</button>
                    </form>
                </li>
            </ul>
            </div>
            <div class="card-body">
            <h5 class="card-title">{{ $prov->name_provinsi }}</h5>
            <p class="card-text">Created on {{ $prov->created_at->diffForHumans() }} by {{ $prov->user->name }}</p>
            </div>
        </div>
    @endforeach

{{ $provinsi->links() }}

@endsection
