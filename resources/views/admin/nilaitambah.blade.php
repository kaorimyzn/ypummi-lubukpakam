@extends('admin/layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Nilai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/nilaidaftar') }}">Data Nilai</a></li>
                        <li class="breadcrumb-item active">Tambah Nilai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Form Tambah Nilai</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/nilaitambahsimpan') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <select name="iduser" class="form-control" required>
                            <option value="">-- Pilih Siswa --</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('iduser') == $user->id ? 'selected' : '' }}>
                                    {{ $user->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('iduser')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" name="tahun" class="form-control" value="{{ old('tahun') }}" required
                            placeholder="Misal: 2025">
                        @error('tahun')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        <select name="semester" class="form-control" required>
                            <option value="">-- Pilih Semester --</option>
                            <option value="1" {{ old('semester') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('semester') == '2' ? 'selected' : '' }}>2</option>
                        </select>
                        @error('semester')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ url('admin/nilaidaftar') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
