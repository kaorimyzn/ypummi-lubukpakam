@extends('layout')
@section('content')
    <div class="container-fluid bg-breadcrumb"
        style="background-size: cover; background-image: url('{{ asset('img/bge.png') }}')">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Pendaftaran PPDB</h1>
        </div>
    </div>

    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Pendaftaran PPDB</h5>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <form method="POST" enctype="multipart/form-data" action="{{ url('ppdbdaftarsimpan') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <strong>Mendaftar Ke</strong>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Judul Pengumuman</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $ppdb->judulppdb }}" readonly>
                                        <input type="hidden" name="idppdb" class="form-control"
                                            value="{{ $ppdb->idppdb }}" readonly>
                                        <input type="hidden" name="iduser" class="form-control"
                                            value="{{ $user->id }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <strong>Data Diri</strong>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Nama</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama"
                                            value="{{ $user->nama }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Jenis Kelamin</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <select class="form-control" name="jeniskelamin" required>
                                            <option>-- Pilih Jenis Kelamin --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Tempat Lahir</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tempatlahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Tanggal Lahir</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="tanggallahir" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Alamat</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <textarea class="form-control" name="alamat" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">No. Telepon</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="nohp"
                                            value="{{ $user->nohp }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">Email</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $user->email }}" readonly required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="alert alert-danger">
                                    <strong>Data Orang Tua</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-2">Nama Ayah</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="namaayah" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-2">Pekerjaan</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pekerjaanayah" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-2">Nama Ibu</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="namaibu" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-2">Pekerjaan</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pekerjaanibu" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">No Telepon</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="nohportu" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <strong>Data Wali</strong>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="mb-2">Nama Wali</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="namawali">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-2">Pekerjaan</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pekerjaanwali">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2">No Telepon</label>
                                <div class="form-floating">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="nohpwali">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
