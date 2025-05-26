@extends('admin/layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Nilai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Nilai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ url('admin/nilaidaftar') }}" method="GET" class="mb-3 row g-2 align-items-center">
        <div class="col-auto">
            <select name="semester" class="form-control">
                <option value="">-- Semua Semester --</option>
                <option value="1" {{ request('semester') == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ request('semester') == '2' ? 'selected' : '' }}>2</option>
            </select>
        </div>
        <div class="col-auto">
            <input type="number" name="tahun" class="form-control" placeholder="Tahun" value="{{ request('tahun') }}">
        </div>
        <div class="col-auto">
            <select name="idkelas" class="form-control">
                <option value="">-- Semua Kelas --</option>
                @foreach ($kelas as $k)
                    <option value="{{ $k->idkelas }}" {{ request('idkelas') == $k->idkelas ? 'selected' : '' }}>
                        {{ $k->namakelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
        <div class="col-auto">
            <a href="{{ url('admin/nilaicetaksemua') }}?semester={{ request('semester') }}&tahun={{ request('tahun') }}&idkelas={{ request('idkelas') }}"
                target="_blank" class="btn btn-success">Cetak Semua</a>
        </div>
    </form>



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Nilai</h5>
                </div>
                <div class="card-body table-border-style">
                    <a class="btn btn-primary mb-3" href="{{ url('admin/nilaitambah') }}">Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-hover" id="tabel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Tahun</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($nilai as $item)
                                    @php
                                        $siswa = $user->where('id', $item->iduser)->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $siswa ? $siswa->nama : '-' }}</td>
                                        <td>{{ $item->tahun }}</td>
                                        <td>{{ $item->semester }}</td>
                                        <td>
                                            <a class="btn btn-info btn-sm"
                                                href="{{ url('admin/nilaicetak/' . $item->idnilai) }}">
                                                Cetak Nilai
                                            </a>
                                            <a class="btn btn-info btn-sm"
                                                href="{{ url('admin/nilaidetail/' . $item->idnilai) }}">
                                                Lihat Nilai
                                            </a>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ url('admin/nilaiedit/' . $item->idnilai) }}">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ url('admin/nilaihapus/' . $item->idnilai) }}"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                Hapus
                                            </a>
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
