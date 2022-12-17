@extends('layouts.navaflog')

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
    <div class="container">
    <div class="main-body">

        <form action="/editprofile" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card" style="height: 0px">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        @if ($profile[0]->gender !== null)
                          @if ($profile[0]->gender === 1)
                            @if ($profile[0]->gambar)
                              <img src="{{ asset('storage/'.$profile[0]->gambar) }}" class="rounded-circle" width="150">
                            @else
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle" width="150">
                            @endif
                          @else
                            @if ($profile[0]->gambar)
                              <img src="{{ asset('storage/'.$profile[0]->gambar) }}" class="rounded-circle" width="150">
                            @else
                              <img src="/img/girl.png" class="rounded-circle" width="150">
                            @endif
                          @endif
                        @else
                          <img src="/img/user.png" alt="Admin" class="rounded-circle" width="150">
                        @endif
                        <div class="mt-3">
                          <h4>{{ auth()->user()->username }}</h4>
                          @if (auth()->user()->role_id === 1)
                            <h6>Admin</h6>
                          @else
                            <h6>Customer</h6>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">

                        <div class="form-floating">
                            <input class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" type="text" value="{{ $profile[0]->name }}" name="name" id="name" required/>
                            <label for="name">Full Name</label>

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                      <hr>

                      <div class="form-floating">
                        <select id="gender" class="form-select" name="gender">
                          @if ($profile[0]->gender === null)
                            <option value="" class="form-select" selected>Choose your gender</option>
                            <option value="1" class="form-select">Male</option>
                            <option value="0" class="form-select">Female</option>
                          @else
                            @if ($profile[0]->gender === 1)
                              <option value="{{ $profile[0]->gender }}" class="form-select">Male</option>
                            @else
                              <option value="{{ $profile[0]->gender }}" class="form-select">Female</option>
                            @endif
                          @endif
                        </select>
                          <label for="gender">Gender</label>

                        @error('gender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                      </div>
                    <hr>

                        <div class="form-floating">
                            <input class="form-control @error('notelp') is-invalid @enderror" placeholder="Phone"  type="text" value="{{ $profile[0]->notelp }}" name="notelp" id="notelp" required />
                            <label for="notelp">Phone</label>
                            @error('notelp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                      <hr>

                      <div class="form-floating">
                        <input class="form-control @error('username') is-invalid @enderror" placeholder="Username"  type="text" value="{{ $profile[0]->username }}" name="username" id="username" required />
                        <label for="notelp">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                      </div>
                    <hr>

                      <div class="form-floating">
                          <input class="form-control @error('alamat') is-invalid @enderror" placeholder="Address"  type="text" value="{{ $profile[0]->alamat }}" name="alamat" id="alamat" required value="{{ old('alamat') }}"/>
                          <label for="alamat">Address</label>
                          @error('alamat')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror

                      </div>
                      <hr>

                      <div class="">
                        <label for="gambar">Profile Picture</label>
                        <input type="hidden" name="oldImage" value="{{ $profile[0]->gambar }}">
                        <img src="{{ asset('storage/'.$profile[0]->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        <input class="form-control btn-lg @error('gambar') is-invalid @enderror" id="gambar" type="file" name="gambar" value="{{ old('gambar') }}"
                        onchange="previewImage()"/>
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <button class="btn btn-success my-2 mx-3" type="submit">Save</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>



                </div>
              </div>

            </div>
        </form>

<script>
  function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
@endsection
