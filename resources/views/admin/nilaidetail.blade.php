@extends('admin/layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Detail Nilai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/nilaidaftar') }}">Data Nilai</a></li>
                        <li class="breadcrumb-item active">Detail Nilai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Input Nilai Mata Pelajaran</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/nilaidetailsimpan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="idnilai" value="{{ $nilai->idnilai }}">

                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" value="{{ $nilai->user->nama ?? '-' }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" class="form-control" value="{{ $nilai->tahun }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" class="form-control" value="{{ $nilai->semester }}" readonly>
                    </div>

                    <hr>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($matapelajaran as $mapel)
                                <tr>
                                    <td>
                                        {{ $mapel->namamatapelajaran }}
                                        <input type="hidden" name="idmatapelajaran[]"
                                            value="{{ $mapel->idmatapelajaran }}">
                                    </td>
                                    <td>
                                        <input type="number" name="nilai[]" class="form-control" min="0"
                                            max="100" required
                                            value="{{ $nilaidetail[$mapel->idmatapelajaran]->nilai ?? '' }}">
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary">Simpan Nilai</button>
                    <a href="{{ url('admin/nilaidaftar') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
