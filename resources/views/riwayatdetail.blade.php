@extends('layout')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Detail Pendaftaran PPDB</h1>
         </div>
        </div>
      </div>
    </section>
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Detail Pendaftaran PPDB</h5>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="row g-3">
                        <h6 style="padding-top: 50px;">Status Pendaftaran : {{ $detail->status }}</h6>
                        <table class="table table-bordered">
                            <tr>
                                <th colspan="2">
                                    Mendaftar Ke
                                </th>
                            </tr>
                            <tr>
                                <td width="250px">Judul Pengumuman</td>
                                <td>{{ $detail->judulppdb }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <th colspan="2">
                                    Data Siswa
                                </th>
                            </tr>
                            <tr>
                                <td width="250px">Nama</td>
                                <td>{{ $detail->nama }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $detail->jeniskelamin }}</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>{{ $detail->tempatlahir }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ tanggal($detail->tanggallahir) }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $detail->alamat }}</td>
                            </tr>
                            <tr>
                                <td>No. HP</td>
                                <td>{{ $detail->nohp }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $detail->email }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <th colspan="2">Data Orang Tua</th>
                            </tr>
                            <tr>
                                <td width="250px">Nama Ayah</td>
                                <td>{{ $detail->namaayah }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ayah</td>
                                <td>{{ $detail->pekerjaanayah }}</td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td>{{ $detail->namaibu }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ibu</td>
                                <td>{{ $detail->pekerjaanibu }}</td>
                            </tr>
                            <tr>
                                <td>No. HP Orang Tua</td>
                                <td>{{ $detail->nohportu }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <th colspan="2">Data Wali</th>
                            </tr>
                            <tr>
                                <td width="250px">Nama Wali</td>
                                <td>{{ $detail->namawali }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Wali</td>
                                <td>{{ $detail->pekerjaanwali }}</td>
                            </tr>
                            <tr>
                                <td>No. HP Wali</td>
                                <td>{{ $detail->nohpwali }}</td>
                            </tr>
                        </table>
                        <?php if ($detail->kk != "") { ?>
                        <table class="table table-bordered">
                            <tr>
                                <th colspan="2">Berkas</th>
                            </tr>
                            <tr>
                                <td width="250px">Scan Kartu Keluarga</td>
                                <td><a class="btn btn-info" href="foto/{{ $detail->kk }}" target="_blank">Lihat</a></td>
                            </tr>
                            <tr>
                                <td width="250px">Scan KTP</td>
                                <td><a class="btn btn-info" href="foto/{{ $detail->ktp }}" target="_blank">Lihat</a></td>
                            </tr>
                            <tr>
                                <td width="250px">Scan Ijazah</td>
                                <td><a class="btn btn-info" href="foto/{{ $detail->ijazah }}" target="_blank">Lihat</a>
                                </td>
                            </tr>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
