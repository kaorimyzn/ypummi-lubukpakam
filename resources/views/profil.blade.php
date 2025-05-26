@extends('layout')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Profil</h1>
         </div>
        </div>
      </div>
    </section>

    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Profil</h5>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <form method="post" enctype="multipart/form-data" action="{{ url('ubahprofil/' . $pengguna->id) }}">
                        @csrf
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input value="{{ $pengguna->nama }}" type="text" value=""
                                            class="form-control" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input value="{{ $pengguna->email }}" type="email" class="form-control"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input value="{{ $pengguna->nohp }}" type="number" class="form-control"
                                            name="telepon">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="5">{{ $pengguna->alamat }}</textarea>
                                        <script>
                                            CKEDITOR.replace('alamat');
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password">
                                        <input type="hidden" class="form-control" name="passwordlama"
                                            value="{{ $pengguna->password }}">
                                        <span class="text-primary">Kosongkan Password jika tidak ingin mengganti</span>
                                    </div>
                                    <button class="btn btn-danger float-right pull-right" name="ubah"><i
                                            class="glyphicon glyphicon-saved"></i>Simpan</a></button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
