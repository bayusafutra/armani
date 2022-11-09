@extends('layouts.belajar')

@section('container')

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
          <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
            <div
              class="header-bg h-100 d-flex flex-column justify-content-center p-5"
            >
              <h1 class="display-4 text-light mb-5">
                Indonesia Megabiodiversitas
              </h1>
              <div class="d-flex align-items-center pt-4 animated slideInDown">
                <!-- <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5"
                  >Read More</a
                >
                <button
                  type="button"
                  class="btn-play"
                  data-bs-toggle="modal"
                  data-src="https://www.youtube.com/watch?v=aKtb7Y3qOck"
                  data-bs-target="#videoModal"
                >
                  <span></span>
                </button>
                <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6> -->
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
              <div class="owl-carousel-item">
                <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="" />
              </div>
              <div class="owl-carousel-item">
                <img class="img-fluid" src="{{ asset('img/carousel-2.jpg') }}" alt="" />
              </div>
              <div class="owl-carousel-item">
                <img class="img-fluid" src="{{ asset('img/carousel-3.jpg') }}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
      <div class="container mt-5">
        <h1 class="text-center mb-5">Data Sobibor</h1>
        <a href="/Home" class="btn btn-primary mb-3">Data belajar</a>
        <div class="card-body">
            <form action="/provinsiStore" method="POST">
                @method("post")
                @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Provinsi</label>
                    <input type="text" class="form-control" name=name_provinsi>
                </div>

                <div class="mb-3">
                    <fieldset>
                        <div class="mb-3">
                        <label for="user_id" class="form-label">Author</label>
                        <select id="user_id" class="form-select" name="user_id">
                            @foreach ($user as $author )
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </fieldset>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name=slug>
                </div>

                <div class="mb-3">
                    <label for="akronim" class="form-label">Akronim</label>
                    <input type="text" class="form-control" name=akronim>
                </div>

                <div class="mb-3">
                    <label for="akronim" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name=deskripsi>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" name=gambar>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    </div>

@endsection
