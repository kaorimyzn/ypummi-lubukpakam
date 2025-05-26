<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('login', $data);
    }

    public function logout()
    {
        session()->flush();
        return redirect('/')->with('alert', 'Anda Telah Logout');
    }

    public function logincek(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $akun = DB::table('user')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if ($akun) {
            session(['user' => $akun]);
            return redirect('/')->with('success', 'Login Berhasil');
        } else {
            return redirect()->back()->with('error', 'Anda gagal login, Email atau password salah');
        }
    }

    public function loginadmin()
    {
        $data = [
            'title' => 'Login Admin',
        ];
        return view('loginadmin', $data);
    }

    public function loginadmincek(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $akun = DB::table('admin')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if ($akun) {
            session(['admin' => $akun]);
            return redirect('admin/dashboard')->with('success', 'Login Berhasil');
        } else {
            return redirect()->back()->with('error', 'Anda gagal login, Email atau password salah');
        }
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function daftarsimpan(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');
        $role = 'User';

        $akun = DB::table('user')
            ->where('email', $email)
            ->first();
        if ($akun) {
            session(['admin' => $akun]);
            return redirect()->back()->with('error', 'Pendaftaran Gagal, email sudah ada');
        } else {
            DB::table('user')->insert([
                'nama' => $nama,
                'email' => $email,
                'password' => $password,
                'nohp' => $nohp,
                'alamat' => $alamat,
                'role' => $role,
            ]);
            return redirect('login')->with('success', 'Pendaftaran Berhasil');
        }
    }

    public function profil()
    {
        if (!session('user')) {
            session()->flash('alert', 'Anda belum login. Silakan login terlebih dahulu.');
            return redirect('login');
        }

        $idpengguna = session('user')->id;
        $pengguna = DB::table('user')->where('id', $idpengguna)->first();

        $data = [
            'pengguna' => $pengguna,
        ];
        return view('profil', $data);
    }

    public function ubahprofil(Request $request, $id)
    {
        $password = $request->input('password');
        if (empty($password)) {
            $password = $request->input('passwordlama');
        }
        DB::table('user')
            ->where('id', $id)
            ->update([
                'password' => $password,
                'nama' => $request->input('nama'),
                'email' => $request->input('email'),
                'nohp' => $request->input('telepon'),
                'alamat' => $request->input('alamat'),
            ]);

        return redirect('profil');
    }

    public function ppdb()
    {
        $ppdb = DB::table('ppdb')->orderBy('idppdb', 'desc')->get();
        $data = [
            'title' => 'PPDB',
            'ppdb' => $ppdb
        ];
        return view('ppdb', $data);
    }

    public function ppdbdetail($id)
    {
        $ppdb = DB::table('ppdb')->where('idppdb', $id)->first();
        $data = [
            'title' => 'PPDB',
            'ppdb' => $ppdb
        ];
        return view('ppdbdetail', $data);
    }

    public function ppdbdaftar($id)
    {
        if (empty(session('user'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $iduser = session('user')->id;
        $ppdb = DB::table('ppdb')->where('idppdb', $id)->first();
        $user = DB::table('user')->where('id', $iduser)->first();
        $data = [
            'title' => 'PPDB',
            'ppdb' => $ppdb,
            'user' => $user
        ];
        return view('ppdbdaftar', $data);
    }

    public function ppdbdaftarsimpan(Request $request)
    {
        $idppdb = $request->input('idppdb');
        $iduser = $request->input('iduser');
        $nama = $request->input('nama');
        $jeniskelamin = $request->input('jeniskelamin');
        $tanggallahir = $request->input('tanggallahir');
        $tempatlahir = $request->input('tempatlahir');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');
        $email = $request->input('email');
        $namaayah = $request->input('namaayah');
        $pekerjaanayah = $request->input('pekerjaanayah');
        $namaibu = $request->input('namaibu');
        $pekerjaanibu = $request->input('pekerjaanibu');
        $nohportu = $request->input('nohportu');
        $namawali = $request->input('namawali');
        $pekerjaanwali = $request->input('pekerjaanwali');
        $nohpwali = $request->input('nohpwali');
        $status = "Belum Upload Berkas";
        DB::table('pendaftaran')->insert([
            'idppdb' => $idppdb,
            'iduser' => $iduser,
            'jeniskelamin' => $jeniskelamin,
            'tempatlahir' => $tempatlahir,
            'tanggallahir' => $tanggallahir,
            'email' => $email,
            'nama' => $nama,
            'nohp' => $nohp,
            'alamat' => $alamat,
            'namaayah' => $namaayah,
            'pekerjaanayah' => $pekerjaanayah,
            'namaibu' => $namaibu,
            'pekerjaanibu' => $pekerjaanibu,
            'nohportu' => $nohportu,
            'namawali' => $namawali,
            'pekerjaanwali' => $pekerjaanwali,
            'nohpwali' => $nohpwali,
            'status' => $status,
        ]);
        return redirect('riwayat')->with('success', 'Pendaftaran Berhasil');
    }

    public function riwayat()
    {
        if (empty(session('user'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $iduser = session('user')->id;

        $pendaftaran = DB::table('pendaftaran')->leftJoin('ppdb', 'ppdb.idppdb', '=', 'pendaftaran.idppdb')
            ->where('iduser', $iduser)->get();
        $data = [
            'title' => 'PPDB',
            'pendaftaran' => $pendaftaran
        ];
        return view('riwayat', $data);
    }

    public function riwayatdetail($id)
    {
        if (empty(session('user'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $pendaftaran = DB::table('pendaftaran')->leftJoin('ppdb', 'ppdb.idppdb', '=', 'pendaftaran.idppdb')
            ->where('idpendaftaran', $id)->first();
        $data = [
            'title' => 'PPDB',
            'detail' => $pendaftaran
        ];
        return view('riwayatdetail', $data);
    }

    public function pembayaran($id)
    {
        if (empty(session('user'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $pendaftaran = DB::table('pendaftaran')->leftJoin('ppdb', 'ppdb.idppdb', '=', 'pendaftaran.idppdb')
            ->where('idpendaftaran', $id)->first();
        $data = [
            'title' => 'PPDB',
            'detail' => $pendaftaran
        ];
        return view('pembayaran', $data);
    }

    public function pembayaransimpan(Request $request)
    {
        $idpendaftaran = $request->input('idpendaftaran');
        $atasnama = $request->input('atasnama');
        $tanggaltransfer = $request->input('tanggaltransfer');
        $tanggal = date("Y-m-d");
        $data = [
            'idpendaftaran' => $idpendaftaran,
            'atasnama' => $atasnama,
            'tanggaltransfer' => $tanggaltransfer,
        ];
        if ($request->hasFile('foto')) {
            $bukti = $request->file('foto')->getClientOriginalName();
            $namafile = date('YmdHis') . $bukti;
            $request->file('foto')->move(public_path('foto'), $namafile);
            $data['bukti'] = $namafile;
        }
        DB::table('pembayaran')->insert($data);
        DB::table('pendaftaran')->where('idpendaftaran', $idpendaftaran)->update([
            'status' => 'Sudah Upload Bukti Pembayaran'
        ]);

        return redirect('riwayat')->with('success', 'Pembayaran Berhasil');
    }

    public function riwayatedit($id)
    {
        if (empty(session('user'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('login');
        }
        $pendaftaran = DB::table('pendaftaran')->leftJoin('ppdb', 'ppdb.idppdb', '=', 'pendaftaran.idppdb')
            ->where('idpendaftaran', $id)->first();
        $data = [
            'title' => 'PPDB',
            'detail' => $pendaftaran
        ];
        return view('riwayatedit', $data);
    }

    public function riwayateditsimpan(Request $request)
    {
        $idpendaftaran = $request->input('idpendaftaran');


        $kk = $request->file('kk')->getClientOriginalName();
        $namafilekk = date('YmdHis') . $kk;
        $request->file('kk')->move(public_path('foto'), $namafilekk);
        $data['kk'] = $namafilekk;

        $ktp = $request->file('ktp')->getClientOriginalName();
        $namafilektp = date('YmdHis') . $ktp;
        $request->file('ktp')->move(public_path('foto'), $namafilektp);
        $data['ktp'] = $namafilektp;

        $ijazah = $request->file('ijazah')->getClientOriginalName();
        $namafileijazah = date('YmdHis') . $ijazah;
        $request->file('ijazah')->move(public_path('foto'), $namafileijazah);
        $data['ijazah'] = $namafileijazah;

        $data['status'] = 'Berkas Telah di Upload, menunggu konfirmasi admin';
        DB::table('pendaftaran')->where('idpendaftaran', $idpendaftaran)->update($data);
        return redirect('riwayat')->with('success', 'Upload Berkas Berhasil');
    }

    public function tandaterima($id)
    {
        $pendaftaran = DB::table('pendaftaran')->leftJoin('ppdb', 'ppdb.idppdb', '=', 'pendaftaran.idppdb')
            ->where('idpendaftaran', $id)->first();
        $data = [
            'title' => 'PPDB',
            'data' => $pendaftaran
        ];
        return view('tandaterima', $data);
    }

    public function spp()
    {
        $userId = session('user')->id;

        // Ambil semua data spp untuk user ini
        $spp = DB::table('spp')
            ->where('iduser', $userId)
            ->get()
            ->groupBy(function ($item) {
                return Carbon::parse($item->tanggalbayar)->format('Y-m'); // kelompokkan berdasarkan tahun-bulan
            });

        // Buat array bulan semester
        $semester1 = ['07', '08', '09', '10', '11', '12']; // Juli–Desember
        $semester2 = ['01', '02', '03', '04', '05', '06']; // Jan–Juni

        $now = Carbon::now();
        $year = $now->year;

        // Kalau bulan sekarang masih Juni, berarti semester 2 dari tahun ini, semester 1 dari tahun lalu
        $semester1_year = in_array($now->format('m'), $semester2) ? $year - 1 : $year;
        $semester2_year = $year;

        // Data per bulan semester
        $bulan_data = [];

        foreach ($semester1 as $bln) {
            $key = "$semester1_year-$bln";
            $bulan_data[] = [
                'bulan' => Carbon::createFromFormat('Y-m', $key)->translatedFormat('F'),
                'jatuh_tempo' => "$semester1_year-$bln-15",
                'data' => isset($spp[$key]) ? $spp[$key]->first() : null,
            ];
        }

        foreach ($semester2 as $bln) {
            $key = "$semester2_year-$bln";
            $bulan_data[] = [
                'bulan' => Carbon::createFromFormat('Y-m', $key)->translatedFormat('F'),
                'jatuh_tempo' => "$semester2_year-$bln-15",
                'data' => isset($spp[$key]) ? $spp[$key]->first() : null,
            ];
        }


        return view('spp', ['bulan_data' => $bulan_data]);
    }

    public function sppbayar(Request $request)
    {
        // Validasi input
        $request->validate([
            'bulan' => 'required',
            'jatuhtempo' => 'required|date',
            'tanggalbayar' => 'required|date',
            'jumlah' => 'required|numeric|min:1',
            'metodepembayaran' => 'required|in:Transfer,Cash',
            'buktibayar' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5048',
        ]);

        $userId = session('user')->id;
        $tanggalBayar = Carbon::parse($request->tanggalbayar);
        $jatuhtempo = Carbon::parse($request->jatuhtempo);
        $bulanKey = $jatuhtempo->format('Y-m');

        $sudahAda = DB::table('spp')
            ->where('iduser', $userId)
            ->whereMonth('tanggalbayar', $jatuhtempo->month)
            ->whereYear('tanggalbayar', $jatuhtempo->year)
            ->exists();

        if ($sudahAda) {
            return back()->with('error', 'SPP untuk bulan ini sudah dibayar.');
        }

        if ($tanggalBayar->gt($jatuhtempo)) {
            return back()->with('error', 'Tanggal bayar tidak boleh melewati jatuh tempo.');
        }

        $file = $request->file('buktibayar');
        $filename = 'bukti_' . $userId . '_' . $bulanKey . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('bukti_spp'), $filename);

        DB::table('spp')->insert([
            'iduser' => $userId,
            'tanggalbayar' => $tanggalBayar,
            'jumlah' => $request->jumlah,
            'metodepembayaran' => $request->metodepembayaran,
            'buktibayar' => $filename,
        ]);

        return back()->with('success', 'Bukti pembayaran berhasil dikirim.');
    }

    public function visimisi()
    {
        return view('visimisi');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function contact()
    {
        return view('contact');
    }


    public function bloger()
    {
        $data['blog'] = DB::table('blog')->paginate(6);
        return view('bloger', $data);
    }


    public function blog()
    {
        $data['blog'] = DB::table('blog')->paginate(6);
        return view('blog', $data);
    }

    public function blogdetail($id)
    {
        $data['blog'] = DB::table('blog')->where('idblog', $id)->first();
        return view('blogdetail', $data);
    }
}
