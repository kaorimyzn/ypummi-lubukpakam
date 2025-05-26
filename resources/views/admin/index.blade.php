@extends('admin/layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card flat-card widget-primary-card">
                <img src="{{ asset('foto/welcome.jpg') }}" width="100%">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="fas fa-list"></i>
                    </div>
                    <div class="col-sm-9">
                        {{-- <h4><?php echo $jumlahpendaftar; ?></h4> --}}
                        <h6>Jumlah Pendafar PPDB</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="col-sm-9">
                        {{-- <h4><?php echo $jumlahpendaftar; ?></h4> --}}
                        <h6>Jumlah Akun Pendaftaran</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
