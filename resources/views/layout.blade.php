<!DOCTYPE html>
<html lang="en">
<head>
    <title>YP UMMI LUBUK PAKAM - Islamic Character Building Schools</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .bg-breadcrumb {
            background: linear-gradient(rgba(89, 14, 14, 0.5), rgba(123, 26, 19, 0.5)), url(../img/bgnav.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            padding: 150px 0 50px 0;
        }

        .menu-bg {
            background: #ff6600;
            background: linear-gradient(95deg, #e65100 40%, #ffb74d 100%) !important;
            box-shadow: 0 0 7px 1px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            padding: 5px;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }


        .btn-border-filled {
            cursor: pointer;
            background-color: #ff6600;
            border: 1px solid #ff6600;
            color: #fff;
            box-shadow: 0px 8px 9px 0px rgba(96, 94, 94, 0.17);
            width: 180px;
            height: 50px;
            padding: 15px 15px;
        }
    </style>

</head>

<body>
       <div class="py-2 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md-5 pr-4 d-flex topper align-items-center">
                            <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-map"></span>
                            </div>
                            <span class="text">Jl. W.R. Supratman No.16 Lubuk Pakam, Deli Serdang, Sumatera Utara</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <span class="text">yayasanummi97@gmail.com</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-phone2"></span>
                            </div>
                            <span class="text">+62812-6534-7468</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Kiddos Logo" width="150px">
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#ftco-nav"
                aria-controls="ftco-nav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                     <a href="{{ url('/') }}" class="nav-link pl-0">Home</a>
                </li>
                <li class="nav-item {{ Request::is('visimisi') ? 'active' : '' }}">
                    <a href="{{ url('/visimisi') }}" class="nav-link">Visi Misi</a>
                </li>
                <li class="nav-item {{ Request::is('galeri') ? 'active' : '' }}">
                    <a href="{{ url('/galeri') }}" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item {{ Request::is('bloger') ? 'active' : '' }}">
                    <a href="{{ url('/bloger') }}" class="nav-link">Bloger</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item {{ Request::is('ppdb') ? 'active' : '' }}">
                    <a href="{{ url('/ppdb') }}" class="nav-link">PPDB</a>
                </li>
                        @if (!session('user'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('daftar') }}">Daftar Akun</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-singin" href="{{ url('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('spp') }}">SPP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('riwayat') }}">Riwayat Daftar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('profil') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-singin" href="{{ url('logout') }}"
                                    onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <!-- Kontak -->
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-5">
          <h2 class="ftco-heading-2">Kontak Kami</h2>
          <div class="block-23 mb-3">
            <ul>
              <li>
                <span class="icon icon-map-marker"></span>
                <span class="text">Jl. W.R. Supratman No.16, Lubuk Pakam, Deli Serdang, Sumatera Utara</span>
              </li>
              <li>
                <a href="tel:+6281263456789">
                  <span class="icon icon-phone"></span>
                  <span class="text">+62 812-6345-6789</span>
                </a>
              </li>
              <li>
                <a href="mailto:yayasanummi97@gmail.com">
                  <span class="icon icon-envelope"></span>
                  <span class="text">yayasanummi97@gmail.com</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Navigasi -->
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-5 ml-md-4">
          <h2 class="ftco-heading-2">Navigasi</h2>
          <ul class="list-unstyled">
            <li><a href="{{ url('/') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Beranda</a></li>
            <li><a href="{{ url('/tentang') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Tentang</a></li>
            <li><a href="{{ url('/program') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Program</a></li>
            <li><a href="{{ url('/pendaftaran') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Pendaftaran</a></li>
            <li><a href="{{ url('/kontak') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Kontak</a></li>
          </ul>
        </div>
      </div>

      <!-- Info Sekolah -->
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-5">
          <h2 class="ftco-heading-2">Lembaga Kami</h2>
          <ul class="list-unstyled text-white">
            <li><span class="icon icon-check mr-2"></span>RA/TK Ummi</li>
            <li><span class="icon icon-check mr-2"></span>MI Ummi</li>
            <li><span class="icon icon-check mr-2"></span>MTs Ummi</li>
            <li><span class="icon icon-check mr-2"></span>Ponpes Entrepreneur</li>
            <li><span class="icon icon-check mr-2"></span>MDTA Ummi</li>
          </ul>
        </div>
      </div>

      <!-- Sosial Media -->
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-5">
          <h2 class="ftco-heading-2">Ikuti Kami</h2>
          <ul class="ftco-footer-social list-unstyled mt-3">
            <li class="ftco-animate">
              <a href="https://facebook.com/ypummilubukpakam" target="_blank">
                <span class="icon-facebook"></span>
              </a>
            </li>
            <li class="ftco-animate">
              <a href="https://instagram.com/ypummi.lubukpakam" target="_blank">
                <span class="icon-instagram"></span>
              </a>
            </li>
            <li class="ftco-animate">
              <a href="https://wa.me/6281263456789" target="_blank">
                <span class="icon-whatsapp"></span>
              </a>
            </li>
          </ul>
        </div>
        <div class="ftco-footer-widget">
          <h2 class="ftco-heading-2 mb-0">Yayasan Pendidikan Ummi</h2>
          <span class="text-muted">Membentuk generasi Qurani, berakhlak mulia dan berjiwa entrepreneur.</span>
        </div>
      </div>
    </div>
  </div>
</footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>



    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @if (session('success'))
        <script>
            alert('{{ session('success') }}')
        </script>
    @endif
    @if (session('error'))
        <script>
            alert('{{ session('error') }}')
        </script>
    @endif

    @if ($errors->any())
        <script>
            alert('Validasi gagal:\n{{ implode('\n', $errors->all()) }}');
        </script>
    @endif

    @yield('script')

</body>

</html>
