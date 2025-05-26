<?php

// use HomeController;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('visimisi', 'visimisi');
    Route::get('blog', 'blog');
    Route::get('blogdetail/{id}', 'blogdetail');
    Route::get('galeri', 'galeri');
    Route::get('contact', 'contact');
    Route::get('bloger', [HomeController::class, 'bloger']);
    Route::get('about', 'about');

    Route::get('ppdbdaftar', 'ppdbdaftar');
    Route::get('tentang', 'tentang');
    Route::get('login', 'login');
    Route::get('logout', 'logout');
    Route::post('logincek', 'logincek');
    Route::get('loginadmin', 'loginadmin');
    Route::post('loginadmincek', 'loginadmincek');
    Route::get('daftar', 'daftar');
    Route::get('ppdb', 'ppdb');
    Route::get('ppdbdetail/{id}', 'ppdbdetail');
    Route::get('ppdbdaftar/{id}', 'ppdbdaftar');
    Route::post('ppdbdaftarsimpan', 'ppdbdaftarsimpan');
    Route::get('daftar', 'daftar');
    Route::get('riwayat', 'riwayat');
    Route::get('riwayatdetail/{id}', 'riwayatdetail');
    Route::get('riwayatedit/{id}', 'riwayatedit');
    Route::post('daftarsimpan', 'daftarsimpan');
    Route::get('pembayaran/{id}', 'pembayaran');
    Route::post('pembayaransimpan', 'pembayaransimpan');
    Route::post('riwayateditsimpan', 'riwayateditsimpan');

    Route::get('/about', function () {
        return view('about');
    });



    // spp
    Route::get('spp', 'spp');
    Route::post('sppbayar', 'sppbayar');

    Route::get('tandaterima/{id}', 'tandaterima');


    Route::get('profil', 'profil');
    Route::post('ubahprofil/{id}', 'ubahprofil');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('admin', 'dashboard');
    Route::get('admin/logout', 'logout');

    Route::get('admin/dashboard', 'dashboard');
    Route::get('admin/ppdbdaftar', 'ppdbdaftar');
    Route::get('admin/ppdbtambah', 'ppdbtambah');
    Route::post('admin/ppdbtambahsimpan', 'ppdbtambahsimpan');
    Route::get('admin/ppdbedit/{id}', 'ppdbedit');
    Route::post('admin/ppdbeditsimpan/{id}', 'ppdbeditsimpan');
    Route::get('admin/ppdbhapus/{id}', 'ppdbhapus');

    Route::get('admin/ppdbpeserta/{id}', 'ppdbpeserta');
    Route::get('admin/ppdbpesertadetail/{id}', 'ppdbpesertadetail');
    Route::post('admin/ppdbpesertasimpan/{id}', 'ppdbpesertasimpan');
    Route::post('admin/ppdbtambahkelas/{id}', 'ppdbtambahkelas');

    Route::get('admin/userdaftar', 'userdaftar');
    Route::get('admin/usertambah', 'usertambah');
    Route::post('admin/usertambahsimpan', 'usertambahsimpan');
    Route::get('admin/useredit/{id}', 'useredit');
    Route::post('admin/usereditsimpan/{id}', 'usereditsimpan');
    Route::get('admin/userhapus/{id}', 'userhapus');

    Route::get('admin/admindaftar', 'admindaftar');
    Route::get('admin/admintambah', 'admintambah');
    Route::post('admin/admintambahsimpan', 'admintambahsimpan');
    Route::get('admin/adminedit/{id}', 'adminedit');
    Route::post('admin/admineditsimpan/{id}', 'admineditsimpan');
    Route::get('admin/adminhapus/{id}', 'adminhapus');

    // spp
    Route::get('admin/sppdaftar', 'sppdaftar');
    Route::get('admin/spptambah', 'spptambah');
    Route::post('admin/spptambahsimpan', 'spptambahsimpan');
    Route::get('admin/sppdetail/{id}', 'sppdetail');
    Route::post('admin/sppbayar/{id}', 'sppbayar');
    Route::post('admin/sppkonfirmasi/{id}', 'sppkonfirmasi');

    // kelas
    Route::get('admin/kelasdaftar', 'kelasdaftar');
    Route::get('admin/kelastambah', 'kelastambah');
    Route::post('admin/kelastambahsimpan', 'kelastambahsimpan');
    Route::get('admin/kelasedit/{id}', 'kelasedit');
    Route::post('admin/kelaseditsimpan/{id}', 'kelaseditsimpan');
    Route::get('admin/kelashapus/{id}', 'kelashapus');

    // blog
    Route::get('admin/blogdaftar', 'blogdaftar');
    Route::get('admin/blogtambah', 'blogtambah');
    Route::post('admin/blogtambahsimpan', 'blogtambahsimpan');
    Route::get('admin/blogedit/{id}', 'blogedit');
    Route::post('admin/blogeditsimpan/{id}', 'blogeditsimpan');
    Route::get('admin/bloghapus/{id}', 'bloghapus');

    // guru
    Route::get('admin/gurudaftar', 'gurudaftar');
    Route::get('admin/gurutambah', 'gurutambah');
    Route::post('admin/gurutambahsimpan', 'gurutambahsimpan');
    Route::get('admin/guruedit/{id}', 'guruedit');
    Route::post('admin/gurueditsimpan/{id}', 'gurueditsimpan');
    Route::get('admin/guruhapus/{id}', 'guruhapus');

    // nilai
    Route::get('admin/nilaidaftar', 'nilaidaftar');
    Route::get('admin/nilaicetaksemua', 'nilaicetaksemua');
    Route::get('admin/nilaitambah', 'nilaitambah');
    Route::post('admin/nilaitambahsimpan', 'nilaitambahsimpan');
    Route::get('admin/nilaiedit/{id}', 'nilaiedit');
    Route::post('admin/nilaieditsimpan/{id}', 'nilaieditsimpan');
    Route::get('admin/nilaidetail/{id}', 'nilaidetail');
    Route::get('admin/nilaicetak/{id}', 'nilaicetak');
    Route::post('admin/nilaidetailsimpan', 'nilaidetailsimpan');
    Route::get('admin/nilaihapus/{id}', 'nilaihapus');

    // matapelajaran
    Route::get('admin/matapelajarandaftar/{idkelas}', 'matapelajarandaftar');
    Route::get('admin/matapelajarantambah/{idkelas}', 'matapelajarantambah');
    Route::post('admin/matapelajarantambahsimpan/{idkelas}', 'matapelajarantambahsimpan');
    Route::get('admin/matapelajaranedit/{idmatapelajaran}', 'matapelajaranedit');
    Route::post('admin/matapelajaraneditsimpan/{idmatapelajaran}', 'matapelajaraneditsimpan');
    Route::get('admin/matapelajaranhapus/{idmatapelajaran}', 'matapelajaranhapus');
});
