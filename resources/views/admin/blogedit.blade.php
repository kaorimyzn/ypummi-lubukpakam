@extends('admin/layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Blog</h5>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data"
                        action="{{ url('admin/blogeditsimpan/' . $blog->idblog) }}">
                        @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" value="{{ $blog->judul }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="5" required>{{ $blog->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto Saat Ini</label><br>
                            @if ($blog->foto)
                                <img src="{{ asset('foto/' . $blog->foto) }}" width="150" class="mb-2"><br>
                            @endif
                            <input type="file" name="foto" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" value="{{ $blog->tanggal }}" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
