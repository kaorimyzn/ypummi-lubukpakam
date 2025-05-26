@extends('layout')
@section('content')
     <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">PPDB</h1>
         </div>
        </div>
      </div>
    </section>

    <section id="blog" class="section">
        <!-- Container Starts -->
        <div class="container">
            <!-- Start Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-text section-header text-center">
                        <div>
                            <h2 class="section-title">Daftar PPDB</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row">
                @foreach ($ppdb as $data)
                    :
                    <!-- Start Col -->
                    <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                        <!-- Blog Item Starts -->
                        <div class="blog-item-wrapper">
                            <div class="blog-item-img">
                                <a href="{{ url('ppdbdetail/' . $data->idppdb) }}">
                                    <img src="{{ asset('foto/' . $data->fotoppdb) }}" class="img-fluid" alt=""
                                        style="width: 360px; height: 240px;">
                                </a>
                            </div>
                            <div class="blog-item-text">
                                <h3><a href="{{ url('ppdbdetail/' . $data->idppdb) }}">{{ $data->judulppdb }}</a>
                                </h3>
                            </div>
                            <div class="author">
                                <span class="date float-left"><i class="lni-calendar"></i><a
                                        href="#">{{ tanggal($data->waktu) }}</a></span>
                            </div>
                        </div>
                        <!-- Blog Item Wrapper Ends-->
                    </div>
                    <!-- End Col -->
                @endforeach

            </div>
            <!-- End Row -->
        </div>
    </section>


@endsection