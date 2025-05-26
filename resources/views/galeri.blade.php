@extends('layout')
@section('content')

        <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Gallery</h1>
         </div>
        </div>
      </div>
    </section>
    <!-- Galeri Section -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @php
                    $galeri = [
                        '6.jpg',
                        '20240506082636TMII_Istana_Anak-anak_Indonesia.jpg',
                        '20240625104143nasigoreng.jpg',
                        '20240625110507avanza.png',
                        '20240625110507innova.jpg',
                        '20240625110507innova.jpg',
                    ];
                @endphp

                @foreach ($galeri as $index => $img)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <a href="#" data-toggle="modal" data-target="#imageModal"
                                data-img="{{ asset('foto/' . $img) }}">
                                <img src="{{ asset('foto/' . $img) }}" class="card-img-top" alt="Galeri Kegiatan"
                                    style="height: 250px; object-fit: cover; width: 100%;">
                            </a>
                            <div class="card-body">
                                <p class="card-text text-center">Kegiatan Yayasan</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="imageModalLabel">Preview Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" id="modalImage" class="img-fluid rounded shadow" alt="Preview Gambar"
                        style="max-height: 500px; width: auto; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>

   @endsection