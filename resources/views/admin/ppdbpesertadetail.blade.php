@extends('admin/layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Peserta PPDB</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Peserta PPDB</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <a class="btn btn-primary" name="konfirmasi" data-toggle="modal" data-target="#verifikasi">Konfirmasi</a>
    <a class="btn btn-success" href="{{ url('tandaterima/' . $data->idpendaftaran) }}" target="_blank">Tanda Terima</a>
    @if ($data->status == 'Berkas Di Terima, Pendaftaran Selesai')
        <a class="btn btn-warning" data-toggle="modal" data-target="#tambahKelas">Tambahkan ke Kelas</a>
    @endif

    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Pendaftar</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-lg-12">
                            <div class="contact-form-area2 mb-100">
                                <div class="alert alert-primary">
                                    <strong>Data Diri</strong>
                                </div>
                                <div class="row">
                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ $data->nama }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="jeniskelamin"
                                                value="{{ $data->jeniskelamin }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempatlahir"
                                                value="{{ $data->tempatlahir }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggallahir"
                                                value="{{ $data->tanggallahir }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 md">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat" readonly>{{ $data->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>No. HP</label>
                                            <input type="number" class="form-control" name="nohp"
                                                value="{{ $data->nohp }}" readonly>
                                        </div>
                                    </div>
                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $data->email }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-primary">
                                    <strong>Data Orang Tua</strong>
                                </div>
                                <div class="row">
                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input type="text" class="form-control" name="namaayah"
                                                value="{{ $data->namaayah }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ayah</label>
                                            <input type="text" class="form-control" name="pekerjaanayah"
                                                value="{{ $data->pekerjaanayah }}" readonly>
                                        </div>
                                    </div>
                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input type="text" class="form-control" name="namaibu"
                                                value="{{ $data->namaibu }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan Ibu</label>
                                            <input type="text" class="form-control" name="pekerjaanibu"
                                                value="{{ $data->pekerjaanibu }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>No. Hp</label>
                                            <input type="number" class="form-control" name="nohportu"
                                                value="{{ $data->nohportu }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-primary">
                                    <strong>Data Wali</strong>
                                </div>
                                <div class="row">
                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="namawali"
                                                value="{{ $data->namawali }}" readonly>
                                        </div>
                                    </div>
                                    <div class=" col-md-6">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaanwali"
                                                value="{{ $data->pekerjaanwali }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Hp</label>
                                            <input type="number" class="form-control" name="nohpwali"
                                                value="{{ $data->nohpwali }}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    if ($data->kk != "") {
                                    ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th colspan="2">Berkas</th>
                                    </tr>
                                    <tr>
                                        <td width="250px">Scan Kartu Keluarga</td>
                                        <td><a class="btn btn-info" href="../foto/<?= $data->kk ?>"
                                                target="_blank">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">Scan KTP</td>
                                        <td><a class="btn btn-info" href="../foto/<?= $data->ktp ?>"
                                                target="_blank">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">Scan Ijazah</td>
                                        <td><a class="btn btn-info" href="../foto/<?= $data->ijazah ?>"
                                                target="_blank">Lihat</a></td>
                                    </tr>
                                </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ url('admin/ppdbpesertasimpan/' . $data->idpendaftaran) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Pilih Status</label>
                            <input type="hidden" name="iduser" class="form-control" value="{{ $data->iduser }}">
                            <input type="hidden" name="idppdb" class="form-control" value="{{ $data->idppdb }}">
                            <select name="status" class="form-control" required>
                                {{-- <?php if ($data->status == "Menunggu Konfirmasi") { ?>
                                <option <?php if ($data->status == 'Di Terima, silahkan upload berkas') {
                                    echo 'selected';
                                } ?> value="Di Terima, silahkan upload berkas">Di Terima,
                                    silahkan upload berkas</option>
                                <?php } ?> --}}
                                <?php if ($data->status  == "Berkas Telah di Upload, menunggu konfirmasi admin") { ?>
                                <option <?php if ($data->status == 'Berkas Di Terima, Pendaftaran Selesai') {
                                    echo 'selected';
                                } ?> value="Berkas Di Terima, Pendaftaran Selesai">Berkas Di
                                    Terima, Pendaftaran Selesai</option>
                                <?php } ?>
                                <option <?php if ($data->status == 'Pendaftaran Di Tolak') {
                                    echo 'selected';
                                } ?> value="Pendaftaran Di Tolak">
                                    Pendaftaran Di Tolak</option>
                                <!-- <option <?php if ($data->status == 'Selesai') {
                                    echo 'selected';
                                } ?> value="Selesai">Selesai</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tambahKelas" tabindex="-1" aria-labelledby="tambahKelasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ url('admin/ppdbtambahkelas/' . $data->idpendaftaran) }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambahkan ke Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select name="idkelas" class="form-control" required>
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->idkelas }}"
                                        {{ $data->idkelas == $k->idkelas ? 'selected' : '' }}>{{ $k->namakelas }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="iduser" value="{{ $data->iduser }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
