<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="login.css"> -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('https://kit.fontawesome.com/1a60c45adc.js') }}" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
  </head>
<body>

<section class="vh-200" style="background-color: #42855B;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-11">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-8">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="height: 200px">
              <img src="/img/login.jpg"
                alt="login form" class="img-fluid responsive" style="border-radius: 1rem 0 0 1rem; height: 691px" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                {{-- @if(session()->has('success'))
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </symbol>
                    </svg>

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                        <div>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif --}}

                <form action="/register" method="POST">
                    @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: black;"></i>
                    <span class="h1 fw-bold mb-0">ARMANI SERUU</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                  <div class="form-floating mb-3">
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" required value="{{ old('name') }}" />
                    <label for="name">Full Name</label>

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" required value="{{ old('username') }}" />
                    <label for="username">Username</label>

                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" required value="{{ old('email') }}" />
                    <label for="email">Email Address</label>

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="mb-3">
                    <select class="form-select" name="role_id" id="role_id">
                        <option selected>Role User</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>

                    @error('role_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required/>
                    <label for="password">Password</label>

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>
                  <small>Already Registered?<a class="text-decoration-none" style="color: #4f53d1" href="/login">Please login into your account!</a></small>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('https://kit.fontawesome.com/1a60c45adc.js') }}" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armani Register</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js') }}"></script>
</head>

</html>
</body>
</html>
