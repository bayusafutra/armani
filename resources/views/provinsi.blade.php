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

    <!-- Page content-->
    <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">{{ $provinsi[0]->name_provinsi }}</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">Posted on {{ $provinsi[0]->created_at->diffForHumans() }} by {{ $provinsi[0]->user->name }}</div>
                                <!-- Post categories-->
                                <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
                            </header>
                            <!-- Preview image figure-->
                            @if (strlen($provinsi[0]->gambar)>50)
                                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('storage/'.$provinsi[0]->gambar) }}" style="width:900px; height:350px" alt="..." /></figure>
                            @else
                                <figure class="mb-4"><img class="img-fluid rounded" src="/img/{{ $provinsi[0]->gambar }}" style="width:900px; height:350px" alt="..." /></figure>
                            @endif
                            <!-- Post content-->
                            <section class="mb-5">
                                @if ($provinsi[0]->id === 16)
                                    <p class="fs-5 mb-4">{{ $provinsi[0]->konten }}</p>
                                @else
                                    <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                                    <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                                    <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                                    <h2 class="fw-bolder mb-4 mt-5">I have cosmic thoughts every day</h2>
                                    <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                                    <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                                @endif
                            </section>
                        </article>''
                        <!-- Comments section-->
                        {{-- <section class="mb-5">
                            <div class="card bg-light">

                            </div>
                        </section> --}}
                    </div>
                    <!-- Side widgets-->
                    <div class="col-lg-4">
                        <!-- Search widget-->
                        <div class="card mb-4">
                            <div class="card-header" style="background-color: #52B788">Search</div>
                                <div class="card-body">
                                    <form action="/provinsi/{{ $provinsi[0]->slug }}">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                                            <button class="btn btn-success" style="background-color: #52B788; color:black" type="submit">Search</button>
                                          </div>
                                    </form>
                                </div>
                            </div>

                        <!-- Categories widget-->


                            <div class="card mb-4">
                                <div class="card-header" style="background-color: #52B788">Keanekaragaman</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mb-0">
                                                @foreach ($makanan as $makan )
                                                    @if($makan["province_id"] === $provinsi[0]->id)
                                                        <li><a style="color: #000000" href="/makanankhas/{{ $makan["slug"] }}">Makanan Khas</a></li>
                                                    @endif
                                                @endforeach

                                                @foreach ($sukuadat as $suku )
                                                    @if ($suku["province_id"] === $provinsi[0]->id)
                                                        <li><a style="color: #000000" href="/sukuadat/{{ $suku["slug"] }}">Suku Adat</a></li>
                                                    @endif
                                                @endforeach

                                                @foreach ($tarianadat as $tari)
                                                    @if($tari["province_id"] === $provinsi[0]->id)
                                                        <li><a style="color: #000000" href="/tarianadat/{{ $tari["slug"] }}">Tarian Adat</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="list-unstyled mb-0">
                                                @foreach ($rumahadat as $rumah )
                                                    @if ($rumah["province_id"] === $provinsi[0]->id)
                                                        <li><a style="color: #000000" href="/rumahadat/{{ $rumah["slug"] }}">Rumah Adat</a></li>
                                                    @endif
                                                @endforeach

                                                @foreach ($senjatadaerah as $senjata )
                                                    @if ($senjata["province_id"] === $provinsi[0]->id)
                                                        <li><a style="color: #000000" href="/senjatadaerah/{{ $senjata["slug"] }}">Senjata Adat</a></li>
                                                    @endif
                                                @endforeach

                                                @foreach ($pakaianadat as $pakaian )
                                                    @if($pakaian["province_id"] === $provinsi[0]->id)
                                                        <li><a style="color: #000000" href="/pakaianadat/{{ $pakaian["slug"] }}">Pakaian Adat</a></li>
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <!-- Side widget-->
                        <div class="card mb-4">
                            <div class="card-header" style="background-color: #52B788">Letak Astronomis</div>
                            <div class="card-body">Letak Astronomis Provinsi (Nama Provinsi) adalah 111??0' ??? 114??4' Bujur Timur dan 7??12' ??? 8??48' Lintang Selatan.</div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Page Content -->
@endsection
