@extends('layout')
@section('content')
    <!-- Header Section -->
    <section class="section" style="background-size: cover; background-image: url('{{ asset('img/bge.png') }}')">
        <div class="container">
            <div class="row space-100">
                <div class="col-lg-12 text-center text-white">
                    <h2 class="head-title">Blog</h2>
                    <p class="lead text-white">Informasi dan dokumentasi kegiatan terbaru</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                @forelse ($blog as $row)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('foto/' . $row->foto) }}" class="card-img-top" alt="{{ $row->judul }}"
                                style="height: 200px; object-fit: cover; width: 100%;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $row->judul }}</h5>
                                <p class="text-muted small mb-2">{{ \Carbon\Carbon::parse($row->tanggal)->format('d M Y') }}
                                </p>
                                <p class="card-text text-truncate">{{ Str::limit(strip_tags($row->deskripsi), 100) }}</p>
                                <a href="{{ url('blogdetail/' . $row->idblog) }}"
                                    class="btn btn-primary mt-auto">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">Belum ada blog tersedia.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $blog->links() }}
            </div>
        </div>
    </section>
@endsection
