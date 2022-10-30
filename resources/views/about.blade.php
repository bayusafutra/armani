@extends('layouts.navbeflog')

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

    <div class="isi">
      <h3>About Us</h3>
      <h4>
Indonesia merupakan negara yang kaya akan keanekaragaman budaya dan tradisi.
Berawal dari pengetahuan tentang keanekaragaman Indonesia, user dapat mencintai, bangga, bahkan tumbuhnya rasa untuk melestarikan budaya maupun tradisi Indonesia.
Dengan hal ini, Armani Pesona Indonesia dibuat dengan tujuan agar user dapat mengetahui lebih dalam tentang apa saja keanekaragaman yang ada di Indonesia.</h4>
    </div>
@endsection
