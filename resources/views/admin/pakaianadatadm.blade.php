@extends('layouts.mainadm')

@section('container')
<h2 class="text-center">Data Pakaian Adat</h2>
<a href="/createpakaianadat" type="button" class="btn btn-success btn-lg mb-1">+ Create New Post</a>
<h6>Jumlah Postingan Pakaian Adat : {{ $count->count() }}</h6>
@foreach ($pakaianadat as $pakaian )
    <div class="card text-center mb-2" style="border-radius: 2rem">
        <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
            <a class="nav-link active btn btn-info" href="/viewpakaianadat/{{ $pakaian->slug }}">View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active btn btn-warning" href="/updatepakaianadat/{{ $pakaian->slug }}">Update</a>
            </li>
            <li class="nav-item">
                <form action="pakaianadatdelete">
                    <input type="hidden" name="id" value="{{ $pakaian->id }}">
                    <button type="submit" class="nav-link active btn btn-danger">Delete</button>
                </form>
            </li>
        </ul>
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $pakaian->name_pakaian }}</h5>
        <p class="card-text">Created on {{ $pakaian->created_at->diffForHumans() }} by {{ $pakaian->user->name }}</p>
        </div>
    </div>
@endforeach

{{ $pakaianadat->links() }}

@endsection
