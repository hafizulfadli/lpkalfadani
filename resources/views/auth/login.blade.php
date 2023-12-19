<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('template/assets')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('template/assets')}}/img/alfadani.png">
    <title>
     Login
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('template/assets')}}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{asset('template/assets')}}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('template/assets')}}/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('template/assets')}}/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <link id="pagestyle" href="{{asset('template/assets')}}/vendor/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


  </head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-center">
                  <h4 class="font-weight-bolder">Log In</h4>
                  <p class="mb-0">Masukkan Username dan Password</p>
                </div>
                <div class="card-body">
                  <form action="{{ route('post-login') }}" method="POST" role="form">
                    @csrf
                    <div class="mb-3">
                      <input type="username" name="name" class="form-control form-control-lg" placeholder="Nama" aria-label="Username">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Log in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div   class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://source.unsplash.com/800x600?japan'); background-size: cover; background-position: center center;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h6 class="mt-5 text-white font-weight-bolder position-relative text-3xl">Website LPK Al Fadani</h6>
                <p class="text-white position-relative"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @include("admin.layout.footer")
</body>

</html>
