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
                {{-- <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
                    <a href="{{ url('/blog') }}" class="nav-link">Blog</a>
                </li> --}}
                <li class="nav-item {{ Request::is('bloger') ? 'active' : '' }}">
                    <a href="{{ url('/bloger') }}" class="nav-link">Bloger</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item {{ Request::is('ppdb') ? 'active' : '' }}">
                    <a href="{{ url('/ppdb') }}" class="nav-link">PPDB</a>
                </li>
                  <li class="nav-item {{ Request::is('daftar') ? 'active' : '' }}">
                    <a href="{{ url('/daftar') }}" class="nav-link">Daftar Akun</a>
                </li>
                <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                    <a href="{{ url('/login') }}" class="nav-link">login</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
       <section class="home-slider" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}'); background-size: cover; background-position: center; height: 600px; position: relative;">
        <div class="overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; "></div>
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="text-center text-white">
                <h1 class="mb-4">Islamic Character <span>Building Schools</span></h1>
                <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
            </div>
        </div>
    </section>
    <!-- Galeri Section -->
    <!-- Blog Section -->
     {{-- <section class="section" style="background-size: cover; background-image: url('{{ asset('img/bge.png') }}')">
        <div class="container">
            <div class="row space-100">
                <div class="col-lg-12 text-center text-white">
                    <h2 class="head-title">{{ $blog->judul }}</h2>
                    <p class="lead">{{ \Carbon\Carbon::parse($blog->tanggal)->format('d F Y') }}</p>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Blog Detail -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-sm">
                        <img src="{{ asset('foto/' . $blog->foto) }}" class="card-img-top" alt="{{ $blog->judul }}"
                            style="max-height: 400px; object-fit: cover;">
                        <div class="card-body">
                            <h3>{{ $blog->judul }}</h3>
                            <p class="text-muted mb-3">
                                {{ \Carbon\Carbon::parse($blog->tanggal)->translatedFormat('d F Y') }}</p>
                            <div>{!! $blog->deskripsi !!}</div>
                        </div>
                    </div>
                    <a href="{{ url('bloger') }}" class="btn btn-secondary mt-4">← Kembali ke Blog</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-5 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a>
                            </li>
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Subscribe Us!</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
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

    @section('script')
        <script>
            $(document).ready(function() {
                $('#imageModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var imgSrc = button.data('img');
                    $('#modalImage').attr('src', imgSrc);
                });
            });
        </script>
    @endsection
</body>

</html>
