@extends('layout')
@section('content')
     <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Upload Berkas Pendaftaran PPDB</h1>
         </div>
        </div>
      </div>
    </section>

    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Upload Berkas Pendaftaran PPDB</h5>
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
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-md-12">
                    <form action="{{ url('riwayateditsimpan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="alert alert-danger">
                            <strong>Upload Berkas</strong>
                        </div>
                        <input type="hidden" name="idpendaftaran" value="{{ $detail->idpendaftaran }}">

                        <div class="col-md-12">
                            <label class="mb-2">Scan Kartu Keluarga</label>
                            <div class="form-floating">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="kk" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="mb-2">Scan KTP Orang Tua / Wali</label>
                            <div class="form-floating">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="ktp" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="mb-2">Scan Ijazah Sekolah Sebelumnya (Kosongkan jika tidak ada)</label>
                            <div class="form-floating">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="ijazah" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-success float-left" name="kirim">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
