@extends('layout')
@section('content')

     <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog</h1>
         </div>
        </div>
      </div>
    </section>
    <!-- Galeri Section -->
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
</body>

</html>
