@extends('admin/layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Guru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Guru</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Guru</h5>
                </div>
                <div class="card-body table-border-style">
                    <a class="btn btn-primary mb-3" href="{{ url('admin/gurutambah') }}">Tambah Data</a>

                    <div class="table-responsive">
                        <table class="table table-hover" id="tabel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($guru as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->namaguru }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->nohp }}</td>
                                        <td>{{ $row->pendidikanterakhir }}</td>
                                        <td>
                                            <a class="btn btn-primary m-1"
                                                href="{{ url('admin/guruedit/' . $row->idguru) }}">Edit</a>
                                            <a class="btn btn-danger m-1"
                                                href="{{ url('admin/guruhapus/' . $row->idguru) }}"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
