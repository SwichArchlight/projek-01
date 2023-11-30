

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-success " id="headerNav">
    <div class="container-fluid">
      <a class="navbar-brand d-block d-lg-none" href="#">
        <img src="{{ asset('images/Multikarya.png') }}" height="80" />
      </a>
      @if (Route::has('login'))
                  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary">Dashboard</a>
                      @else
                        <a href="{{ route('login') }}" class="btn btn-primary mx-2">Log in</a>
                      @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                      @endif
                    @endauth
                  </div>
                @endif
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto ">
          <li class="nav-item">
            <a class="nav-link m-3 active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-3" href="#">Products</a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
              <img src="{{ asset('images/Multikarya.png') }}" height="70" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-3" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link m-3 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Blog</a></li>
              <li><a class="dropdown-item" href="#">About Us</a></li>
              <li><a class="dropdown-item" href="#">Contact us</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<header class="masthead text-center text-dark m-5 " >
    <div class="masthead-content">
        <div class="container-fluid bg-image " style="background-image: url({{ asset('images/bg.jpg') }});">
          <div class="mask-fluid text-light p-5" style="background-color: rgba(0, 0, 0, 0.534);">
            <h1 class="masthead-heading mb-0">SMK Multikarya </h1>
            <h2 class="masthead-subheading mb-0">SMK Paling Keren Di Medan</h2>
            <a class="btn btn-primary btn-lg rounded-pill mt-5" href="#scroll">Lihat</a>
          </div>
        </div>
    </div>
</header>
<!-- Content section 1-->
<section>
  <div class="container px-5">
      <div class="row gx-5 align-items-center">
          <div class="col-lg-12">
              <div class="p-5">
                  <h2 class="display-4">Berikut Jurusan yang ada di MultiKarya</h2>
              </div>
          </div>
      </div>
  </div>
</section>
<section id="scroll">
    <div class="container-fluid px-5 bg-success">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('images/rpl.png') }}" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5 text-light">
                    <h2 class="display-4 text-light">Rekayasa Perangkat Lunak</h2>
                    <p>Jurusan Untuk orang yang ingin membuat website dan belajar pemrograman, mempelajari pemrograman HTML, CSS, Javascript, Dart, Dan PHP</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 2-->
<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('images/mm.png') }}" alt="..." /></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">Multimedia Atau DKV</h2>
                    <p>Jurusan yang Berurusan dengan Konten Multimedia, Dari fotografi, Videografi, digital ilustration, dan masih banyak lagi  </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 3-->
<section>
    <div class="container-fluid bg-success   px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('images/j2.png') }}" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1 text-light">
                <div class="p-5">
                    <h2 class="display-4">Tenik Kendaraan Ringan</h2>
                    <p>Jurusan Yang Berkecimpung di dunia mekanik, khusus nya Mekanik Kendaraan Sepeda Motor, disini diajarkan untuk memperbaiki kendaraan sesuai SOP dari bengkel resmi</p>
                </div>
            </div>
        </div>
    </div>
</section>

  <footer class="bg-body-tertiary text-center text-lg-end">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2020 Copyright:
      <a class="text-body" href="#">SwichArch</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</html>