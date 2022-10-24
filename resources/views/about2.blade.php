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

    <div class="isi">
        <h3>About Us</h3>
        <h4>
            Indonesia merupakan negara yang kaya akan keanekaragaman budaya dan tradisi.
            Berawal dari pengetahuan tentang keanekaragaman Indonesia, user dapat mencintai, bangga, bahkan tumbuhnya rasa untuk melestarikan budaya maupun tradisi Indonesia.
            Dengan hal ini, Armani Pesona Indonesia dibuat dengan tujuan agar user dapat mengetahui lebih dalam tentang apa saja keanekaragaman yang ada di Indonesia.
            selain di desain untuk mengetahui keanekaragaman Indonesia, web ini juga di desain agar user dapat menikmati dan mencoba sebagian kecil cirikhas dari setiap provinsi
            dengan bisa membeli makanan khas dari suatu daerah</h4>
    </div>

    <table>
        <thead>
            <tr>
                <th>nama makanan</th>
                <th>provinsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($makanans as $makanan)
                <tr>
                    <td>{{ $makanan->name_makanan }}</td>
                    <td>{{ $makanan->Province->name_provinsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
