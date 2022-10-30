<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Armani {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}" />
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin />
    <link
      href="{{ asset('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap') }}"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div href="index.html" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="https://fraguru.com/mdimg/perfume/375x500.409.jpg" alt="Icon" />
        <h1 class="m-0" style="color: black;">Armani Pesona Indonesia</h1>
      </div>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="/Home" class="nav-item nav-link active">Home</a>
          <a href="/about" class="nav-item nav-link">About</a>
          <a href="#CONTACT" class="nav-item nav-link">Contact</a>
          <div class="nav-item dropdown">
            <a
              href=""
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >User</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="/login" class="dropdown-item">Login</a>
              <a href="/signup" class="dropdown-item">Register</a>
            </div>
          </div>
        </div>
        <a href="" class="btn btn-primary"
          >Armani's Store<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <div class="erga">
        @yield('container')
    </div>

    <!-- Footer Start -->
    <section id ="CONTACT">
    <div
      class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Manukan City
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+62 4347 6746
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>armani@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <a class="btn btn-link" href="/about   ">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Popular Links</h5>
            <a class="btn btn-link" href="/about">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Newsletter</h5>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <a
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" href="/signup"
              >
                SignUp
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="/">Armani</a>, All
              Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By
              <a class="border-bottom" href="https://htmlcodex.com"
                >HTML Codex</a
              >
              <br />Distributed By:
              <a href="https://themewagon.com" target="_blank"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
