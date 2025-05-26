
@extends('layout')
@section('content')
  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ Vite::asset('resources/images/GEDUNGSEKOLAH.jpg') }})">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Islamic Character <span>Building Schools </span></h1>
    
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url('{{ Vite::asset('resources/images/ponpes.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
        <div class="text px-4 ftco-animate">
          <h2 class="mb-4">Selamat Datang di YP Ummi Lubuk Pakam</h2>
          <p>Gabung bersama keluarga besar YP Ummi dan temukan pendidikan terbaik dari usia dini hingga jenjang kejuruan dan pesantren entrepreneur.</p>
          <p>Dengan kurikulum Islami dan pendekatan modern, kami membentuk generasi cerdas, berakhlak mulia, dan siap bersaing di masa depan.</p>
          </div>
      </div>
      <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
        <h2 class="mb-4">Pilihan Pendidikan di YP Ummi</h2>
        <p>Kami menyediakan berbagai jenjang dan jenis pendidikan untuk mendukung potensi setiap anak sesuai minat dan bakatnya.</p>
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
              <div class="text">
                <h3>RA Ummi</h3>
                <p>Pendidikan anak usia dini dengan pendekatan cinta belajar dan nilai-nilai Islam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
              <div class="text">
                <h3>MIS Ummi</h3>
                <p>Madrasah Ibtidaiyah berbasis karakter, akhlak, dan literasi Al-Qur'an.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
              <div class="text">
                <h3>MTsS Ummi</h3>
                <p>Pendidikan menengah berbasis Islam dan teknologi untuk generasi mandiri.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
              <div class="text">
                <h3>Madrasah Kejuruan Ummi</h3>
                <p>Menyiapkan siswa menjadi lulusan siap kerja, wirausaha, dan lanjut studi.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
              <div class="text">
                <h3>MDTA Ummi</h3>
                <p>Pendidikan diniyah sore untuk memperkuat pemahaman agama dan akhlak anak.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
              <div class="text">
                <h3>Ponpes Entrepreneur Ummi</h3>
                <p>Pesantren modern dengan bekal agama dan kewirausahaan untuk generasi mandiri.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-intro" style="background-image: url({{ Vite::asset('resources/images/ponpes.jpg') }});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2>Membentuk Generasi Islami & Mandiri</h2>
        <p class="mb-0">Yayasan Pendidikan Ummi hadir dengan pendidikan agama, karakter, dan kewirausahaan untuk mencetak santri yang unggul dan berdaya saing global.</p>
      </div>
    
    </div>
  </div>
</section>

<!-- 
FASILITAS -->

<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Fasilitas</span> YP Ummi</h2>
        <p>Fasilitas lengkap yang tersedia untuk mendukung proses belajar dan pengembangan santri secara maksimal.</p>
      </div>
    </div>
    <div class="row">
      <!-- Kolom Kiri -->
      <div class="col-md-6 ftco-animate">
        <ul class="list-unstyled">
          <li class="mb-4">
            <h5>Laboratorium Komputer</h5>
            <p>Fasilitas komputer lengkap dengan koneksi internet untuk menunjang pembelajaran IT.</p>
          </li>
          <li class="mb-4">
            <h5>Perpustakaan</h5>
            <p>Koleksi buku Islami dan umum sebagai sumber ilmu dan referensi belajar santri.</p>
          </li>
          <li class="mb-4">
            <h5>Masjid/Musholla</h5>
            <p>Tempat ibadah yang nyaman untuk kegiatan keagamaan dan sholat berjamaah.</p>
          </li>
        </ul>
      </div>
      <!-- Kolom Kanan -->
      <div class="col-md-6 ftco-animate">
        <ul class="list-unstyled">
          <li class="mb-4">
            <h5>Lapangan Olahraga</h5>
            <p>Fasilitas untuk kegiatan olahraga dan ekstrakurikuler guna menjaga kebugaran santri.</p>
          </li>
          <li class="mb-4">
            <h5>Ruang Kelas Nyaman</h5>
            <p>Ruang belajar yang mendukung proses pembelajaran dengan lingkungan kondusif.</p>
          </li>
          <li class="mb-4">
            <h5>Kantin Sehat</h5>
            <p>Tempat penyediaan makanan bergizi untuk santri selama kegiatan belajar.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 
testimoni -->

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Program</span> Unggulan YP Ummi</h2>
        <p>Beragam program unggulan yang dirancang untuk membentuk generasi Islami, cerdas, dan mandiri di era modern.</p>
      </div>
    </div>
    <div class="row">
    <!-- Program 1 -->
<div class="col-md-6 d-flex align-items-stretch ftco-animate">
  <div class="services-2 text-center w-100 p-4 bg-light">
    <div class="icon d-flex align-items-center justify-content-center mb-3">
      <img src="{{ asset('images/quran-icon.png') }}" alt="Tahfizh Icon" width="50" height="50" fill="white">
    </div>
    <h3 class="mb-3">Tahfizh Al-Qur'an</h3>
    <p>Program unggulan menghafal Al-Qur'an sejak dini dengan metode yang menyenangkan dan terstruktur.</p>
  </div>
</div>

<!-- Program 2 -->
<div class="col-md-6 d-flex align-items-stretch ftco-animate">
  <div class="services-2 text-center w-100 p-4 bg-light">
    <div class="icon d-flex align-items-center justify-content-center mb-3">
      <img src="{{ asset('images/entrepreneurship-icon.png') }}" alt="Entrepreneur Icon" width="50" height="50" fill="white">
    </div>
    <h3 class="mb-3">Entrepreneur Santri</h3>
    <p>Pembinaan jiwa wirausaha melalui praktik langsung seperti bisnis santri, market day, dan pelatihan usaha.</p>
  </div>
</div>

      <!-- Program 3 -->
      <div class="col-md-6 d-flex align-items-stretch ftco-animate">
        <div class="services-2 text-center w-100 p-4 bg-light">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teacher"></span></div>
          <h3 class="mb-3">Bilingual Class</h3>
          <p>Program pembelajaran dua bahasa (Bahasa Inggris & Arab) untuk mendukung daya saing global siswa.</p>
        </div>
      </div>
      <!-- Program 4 -->
      <div class="col-md-6 d-flex align-items-stretch ftco-animate">
        <div class="services-2 text-center w-100 p-4 bg-light">
          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-books"></span></div>
          <h3 class="mb-3">Program Diniyah & Karakter</h3>
          <p>Pendidikan keislaman intensif dan pembentukan akhlak melalui kegiatan harian seperti tadarus, shalat berjamaah, dan kajian.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 
Testimoni -->

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Testimoni</span> Wali Santri</h2>
        <p>Berikut beberapa kesan dan pengalaman para wali santri terhadap pendidikan di YP Ummi.</p>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap bg-white p-4">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
              <p>Alhamdulillah, anak saya sangat senang belajar di sini. Lingkungannya Islami dan mendukung pembentukan karakter positif.</p>
              <p class="name mb-0"><strong>Ummu Hafizh</strong></p>
              <span class="position">Wali santri RA Ummi</span>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap bg-white p-4">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
              <p>Program tahfizhnya sangat bagus. Anak saya sudah hafal beberapa juz dalam waktu yang singkat.</p>
              <p class="name mb-0"><strong>Bapak Ahmad</strong></p>
              <span class="position">Wali santri MI Ummi</span>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap bg-white p-4">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
              <p>Saya sangat mendukung konsep entrepreneur yang diajarkan kepada anak-anak sejak dini di Pesantren Ummi.</p>
              <p class="name mb-0"><strong>Ibu Nuraini</strong></p>
              <span class="position">Wali santri Ponpes Entrepreneur Ummi</span>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap bg-white p-4">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
              <p>MTs Ummi tidak hanya fokus akademik, tapi juga penguatan akhlak anak-anak. Terima kasih guru-guru Ummi!</p>
              <p class="name mb-0"><strong>Pak Ridwan</strong></p>
              <span class="position">Wali santri MTs Ummi</span>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap bg-white p-4">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
              <p>Saya melihat perkembangan luar biasa dari anak saya setelah bergabung dengan MDTA Ummi. Anak jadi lebih rajin dan disiplin.</p>
              <p class="name mb-0"><strong>Ibu Fitri</strong></p>
              <span class="position">Wali santri MDTA Ummi</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
