@extends('layout')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco">Riwayat Pendaftaran</h1>
         </div>
        </div>
      </div>
    </section>

    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Riwayat Pendaftaran</h5>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th width="10px">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. HP</th>
                                    <th>Judul PPDB</th>
                                    <th>Waktu Daftar</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($pendaftaran as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->nohp }}</td>
                                        <td>{{ $data->judulppdb }}</td>
                                        <td>{{ $data->waktupendaftaran }}</td>
                                        <td>
                                            @switch($data->status)
                                                @case('Belum Upload Berkas')
                                                    <b class="text-success">Belum Upload berkas</b>
                                                    <br>
                                                    <br>
                                                    <a class="btn btn-warning m-1"
                                                        href="{{ url('riwayatedit/' . $data->idpendaftaran) }}">Upload
                                                        Berkas</a>
                                                @break

                                                @case('Berkas Di Terima, Pendaftaran Selesai')
                                                    <b class="text-success">Berkas Di Terima, Pendaftaran Selesai, Silakan datang ke
                                                        Sekolah</b>
                                                    <br>
                                                    <br>
                                                    <a class="btn btn-success m-1"
                                                        href="{{ url('tandaterima/' . $data->idpendaftaran) }}"
                                                        target="_blank">Tanda Terima</a>
                                                @break

                                                @case('Pendaftaran Di Tolak')
                                                    <b class="text-danger">Pendaftaran Anda Di Tolak</b>
                                                @break

                                                @case('Berkas Telah di Upload, menunggu konfirmasi admin')
                                                    <b class="text-info">Berkas Telah di Upload, menunggu konfirmasi admin</b>
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                        <td>
                                            <a class="btn btn-info m-1"
                                                href="{{ url('riwayatdetail/' . $data->idpendaftaran) }}">Detail</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
