@extends('layouts.navaflog')

@section('container')
    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-0">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-5"
          >
            <h1 class="display-4 text-light mb-5">
              Indonesia Megabiodiversitas
            </h1>
            <div class="d-flex align-items-center pt-4 animated slideInDown">
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="img/carousel-3.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <h1 class="mb-3 text-center">All Provinces</h1>


    <div class="row justify-content-center mt-4 mb-4">
        <div class="col-md-6">
            <form action="/">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

@if ($home->count())
    @foreach ($home as $post)
        <div class="card">
            <div class="ergacard">
              @if(strlen($post->gambar)>50)
                <img src="{{ asset('storage/'.$post->gambar) }}" class="card-img-top" style="width: 700px; height: 300px" alt={{ $post["name_provinsi"] }}>
              @else
                <img src="img/{{ $post["gambar"] }}" class="card-img-top" style="width: 700px; height: 300px" alt={{ $post["name_provinsi"] }}>
              @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post["name_provinsi"]  }}</h5>
                    <p class="card-text">{{ $post["deskripsi"] }}</p>

                    @auth
                        <a class="btn btn-success" style="color: white" href="/provinsi/{{ $post["slug"] }}">Baca Selengkapnya...</button></a>
                    @else
                        <a class="btn btn-success" style="color: white" href="/login">Baca Selengkapnya...</button></a>
                    @endauth

                </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center fs-2">Search Not Found!!</p>
@endif

    <div class="erga mt-4 d-flex justify-content-center">
        {{ $home->links() }}
    </div>

@endsection


{{-- https://source.unsplash.com/700x300?{{ $post["name_provinsi"] }} --}}
