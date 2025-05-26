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
                        'foto (1).jpg',
                         'foto (2).jpg',
                          'foto (3).jpg',
                           'foto (4).jpg',
                            'foto (5).jpg',
                             'foto (6).jpg',
                              'foto (7).jpg',
                               'foto (8).jpg',
                                'foto (9).jpg',
                                 'foto (10).jpg',
                                  'foto (11).jpg',
                        'foto (14).jpg',
                         'foto (5).jpg',
                          'foto (16).jpg',
                           'foto (17).jpg',
                            'foto (18).jpg',
                             'foto (19).jpg',
                              'foto (20).jpg',
                               'foto (21).jpg',
                                'foto (22).jpg',
                                 'foto (23).jpg',
                                  'foto (24).jpg',
                                  'foto (25).jpg',
                                  'foto (26).jpg',
                                  'foto (27).jpg',
                                  'foto (28).jpg',
                                  'foto (29).jpg',
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