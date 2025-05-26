@extends('layout')
@section('content')
   
     <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Visi Misi</h1>
         </div>
        </div>
      </div>
    </section>


    <!-- Visi Misi Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 mb-4 animate__animated animate__fadeInLeft">
                    <h3 class="text-orange font-weight-bold">Visi</h3>
                    <p class="text-dark">
                        Menjadi lembaga pendidikan yang unggul dalam mencetak generasi yang cerdas, berkarakter, dan
                        memiliki daya saing tinggi, serta menjunjung tinggi nilai-nilai keislaman dan kebangsaan.
                    </p>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <h3 class="text-orange font-weight-bold">Misi</h3>
                    <ul class="list-unstyled text-dark pl-3">
                        <li>• Menyelenggarakan pendidikan berkualitas berbasis iman dan ilmu pengetahuan.</li>
                        <li>• Mengembangkan potensi siswa dalam bidang akademik maupun non-akademik.</li>
                        <li>• Membentuk karakter siswa yang disiplin, mandiri, dan bertanggung jawab.</li>
                        <li>• Menanamkan semangat kebangsaan dan kepedulian sosial.</li>
                        <li>• Mendorong keterlibatan orang tua dan masyarakat dalam proses pendidikan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

  @endsection