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

<!-- Page content-->
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">(Tarian Adat)</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on January 1, 2022 by Start Bootstrap</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                            <p class="fs-5 mb-4">The universe is large and old, and the ingredients for life as we know it are everywhere, so there's no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we'll see if we find that.</p>
                            <p class="fs-5 mb-4">If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.</p>
                            <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                            <p class="fs-5 mb-4">For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.</p>
                            <p class="fs-5 mb-4">Venus has a runaway greenhouse effect. I kind of want to know what happened there because we're twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It's bone dry today. Something bad happened there as well.</p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">

                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header" style="background-color: #52B788">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search word..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button"  style="background-color: #52B788">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header" style="background-color: #52B788">Keanekaragaman</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a style="color: #000000" href="/provinsi">Deskripsi Provinsi</a></li>
                                        <li><a style="color: #000000" href="/sukuadat">Suku Adat</a></li>
                                        <li><a style="color: #000000" href="/makanankhas">Makanan Khas</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a style="color: #000000" href="/rumahadat">Rumah Adat</a></li>
                                        <li><a style="color: #000000" href="/senjatadaerah">Senjata </a></li>
                                        <li><a style="color: #000000" href="/pakaianadat">Pakaian Adat</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header" style="background-color: #52B788">Letak Astronomis</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
<!-- Page Content -->
@endsection
