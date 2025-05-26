@extends('admin/layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar Blog</h5>
                </div>
                <div class="card-body table-border-style">
                    <a class="btn btn-primary mb-3" href="{{ url('admin/blogtambah') }}">Tambah Blog</a>

                    <div class="table-responsive">
                        <table class="table table-hover" id="tabel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($blog as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->judul }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($row->deskripsi), 100, '...') }}
                                        </td>
                                        <td>
                                            @if ($row->foto)
                                                <img src="{{ asset('foto/' . $row->foto) }}" width="100" height="70"
                                                    style="object-fit: cover;">
                                            @else
                                                <span class="text-muted">Tidak ada</span>
                                            @endif
                                        </td>
                                        <td>{{ $row->tanggal }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ url('admin/blogedit/' . $row->idblog) }}">Edit</a>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ url('admin/bloghapus/' . $row->idblog) }}"
                                                onclick="return confirm('Yakin ingin menghapus blog ini?')">Hapus</a>
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
