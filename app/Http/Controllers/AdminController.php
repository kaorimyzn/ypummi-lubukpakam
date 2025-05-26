<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $data = [
            'title' => 'Selamat Datang ',

        ];
        return view('admin/index', $data);
    }

    public function logout()
    {
        session()->flush();
        return redirect('/loginadmin');
    }


    public function ppdbdaftar()
    {
        $ppdb = DB::table('ppdb')->get();
        $data = [
            'title' => 'Daftar ppdb',
            'ppdb' => $ppdb,
        ];
        return view('admin/ppdbdaftar', $data);
    }

    public function ppdbtambah()
    {
        $data = [
            'title' => 'Tambah ppdb',
        ];
        return view('admin/ppdbtambah', $data);
    }

    public function ppdbtambahsimpan(Request $request)
    {

        $fileppdb = $request->file('foto')->getClientOriginalName();
        $namafile = date('YmdHis') . $fileppdb;
        $request->file('foto')->move(public_path('foto'), $namafile);


        $judulppdb = $request->input('judulppdb');
        $deskripsippdb = addslashes($request->input('deskripsippdb'));
        $tanggalakhir = $request->input('tanggalakhir');
        $simpan = [
            'judulppdb' => $judulppdb,
            'deskripsippdb' => $deskripsippdb,
            'tanggalakhir' => $tanggalakhir,
            'fotoppdb' => $namafile,
        ];
        DB::table('ppdb')->insert($simpan);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('admin/ppdbdaftar');
    }


    public function ppdbedit($id)
    {

        $row = DB::table('ppdb')->where('idppdb', $id)->first();
        $data = [
            'title' => 'Edit ppdb',
            'row' => $row,
        ];
        return view('admin/ppdbedit', $data);
    }
    public function ppdbeditsimpan(Request $request, $id)
    {

        $judulppdb = $request->input('judulppdb');
        $deskripsippdb = addslashes($request->input('deskripsippdb'));
        $tanggalakhir = $request->input('tanggalakhir');
        $data = [
            'judulppdb' => $judulppdb,
            'deskripsippdb' => $deskripsippdb,
            'tanggalakhir' => $tanggalakhir,
        ];
        if ($request->hasFile('foto')) {
            $fileppdb = $request->file('foto')->getClientOriginalName();
            $namafile = date('YmdHis') . $fileppdb;
            $request->file('foto')->move(public_path('foto'), $namafile);

            $data['fotoppdb'] = $namafile;
        }
        DB::table('ppdb')->where('idppdb', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('admin/ppdbdaftar');
    }
    public function ppdbhapus($id)
    {

        DB::table('ppdb')->where('idppdb', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('admin/ppdbdaftar');
    }

    public function userdaftar()
    {
        $user = DB::table('user')->leftJoin('kelas', 'user.idkelas', '=', 'kelas.idkelas')->get();
        $data = [
            'title' => 'Daftar user',
            'user' => $user,
        ];
        return view('admin/userdaftar', $data);
    }

    public function usertambah()
    {
        $data = [
            'title' => 'Tambah user',
        ];
        return view('admin/usertambah', $data);
    }

    public function usertambahsimpan(Request $request)
    {

        $nama = $request->input('nama');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');
        $password = $request->input('password');
        $simpan = [
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'password' => $password,
            'role' => 'User',
        ];
        DB::table('user')->insert($simpan);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('admin/userdaftar');
    }


    public function useredit($id)
    {

        $row = DB::table('user')->where('id', $id)->first();
        $data = [
            'title' => 'Edit user',
            'row' => $row,
        ];
        return view('admin/useredit', $data);
    }
    public function usereditsimpan(Request $request, $id)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');

        // Menggunakan operator null coalescing untuk menentukan nilai password
        $password = $request->filled('password') ? $request->input('password') : $request->input('passwordlama');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'password' => $password,
        ];

        DB::table('user')->where('id', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('admin/userdaftar');
    }


    public function userhapus($id)
    {

        DB::table('user')->where('id', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('admin/userdaftar');
    }

    public function ppdbpeserta($id)
    {
        $ppdb = DB::table('ppdb')->where('idppdb', $id)->first();

        $pendaftaran = DB::table('pendaftaran')->leftJoin('ppdb', 'ppdb.idppdb', '=', 'pendaftaran.idppdb')->where('pendaftaran.idppdb', $id)
            // ->where('pendaftaran.status', '!=', 'Belum Mengupload Bukti Pembayaran')
            ->get();
        $data = [
            'title' => 'PPDB',
            'ppdb' => $ppdb,
            'pendaftaran' => $pendaftaran,
        ];
        return view('admin.ppdbpeserta', $data);
    }

    public function ppdbpesertadetail($id)
    {
        $pendaftaran = DB::table('pendaftaran')->leftJoin('user', 'user.id', '=', 'pendaftaran.iduser')->where('pendaftaran.idpendaftaran', $id)
            // ->where('pendaftaran.status', '!=', 'Belum Mengupload Bukti Pembayaran')
            ->first();
        $pembayaran = DB::table('pembayaran')->where('idpendaftaran', $id)
            ->first();
        $data = [
            'title' => 'PPDB',
            'data' => $pendaftaran,
            'pembayaran' => $pembayaran,
            'kelas' => DB::table('kelas')->get(),
        ];
        return view('admin.ppdbpesertadetail', $data);
    }

    public function ppdbtambahkelas(Request $request, $idpendaftaran)
    {
        DB::table('user')->where('id', $request->iduser)->update([
            'idkelas' => $request->idkelas,
        ]);

        return back()->with('success', 'Peserta berhasil ditambahkan ke kelas!');
    }


    public function ppdbpesertasimpan(Request $request, $id)
    {
        $status = $request->input('status');
        $iduser = $request->input('iduser');
        $idppdb = $request->input('idppdb');
        $data = [
            'status' => $status,
        ];
        DB::table('pendaftaran')->where('idpendaftaran', $id)->where('iduser', $iduser)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('admin/ppdbpeserta/' . $idppdb);
    }

    public function admindaftar()
    {
        $admin = DB::table('admin')->where('level', 'Admin')->get();
        $data = [
            'title' => 'Daftar admin',
            'admin' => $admin,
        ];
        return view('admin/admindaftar', $data);
    }

    public function admintambah()
    {
        $data = [
            'title' => 'Tambah admin',
        ];
        return view('admin/admintambah', $data);
    }

    public function admintambahsimpan(Request $request)
    {

        $nama = $request->input('nama');
        $email = $request->input('email');
        $password = $request->input('password');
        $simpan = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'level' => 'Admin'
        ];
        DB::table('admin')->insert($simpan);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('admin/admindaftar');
    }


    public function adminedit($id)
    {

        $row = DB::table('admin')->where('idadmin', $id)->first();
        $data = [
            'title' => 'Edit admin',
            'row' => $row,
        ];
        return view('admin/adminedit', $data);
    }
    public function admineditsimpan(Request $request, $id)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');

        $password = $request->filled('password') ? $request->input('password') : $request->input('passwordlama');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
        ];

        DB::table('admin')->where('idadmin', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('admin/admindaftar');
    }


    public function adminhapus($id)
    {

        DB::table('admin')->where('idadmin', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('admin/admindaftar');
    }

    // kelas
    public function kelasdaftar()
    {
        $kelas = DB::table('kelas')->get();
        $data = [
            'title' => 'Daftar kelas',
            'kelas' => $kelas,
        ];
        return view('admin/kelasdaftar', $data);
    }

    public function kelastambah()
    {
        $data = [
            'title' => 'Tambah kelas',
        ];
        return view('admin/kelastambah', $data);
    }

    public function kelastambahsimpan(Request $request)
    {

        $namakelas = $request->input('namakelas');
        $data = [
            'namakelas' => $namakelas,
        ];
        DB::table('kelas')->insert($data);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('admin/kelasdaftar');
    }

    public function kelasedit($id)
    {
        $data = [
            'title' => 'Edit kelas',
            'kelas' => DB::table('kelas')->where('idkelas', $id)->first(),
        ];

        return view('admin/kelasedit', $data);
    }

    public function kelaseditsimpan(Request $request, $id)
    {
        DB::table('kelas')->where('idkelas', $id)->update([
            'namakelas' => $request->namakelas
        ]);

        return redirect('admin/kelasdaftar')->with('success', 'Data berhasil diedit!');
    }

    public function kelashapus($id)
    {
        DB::table('kelas')->where('idkelas', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('admin/kelasdaftar');
    }

    // blog
    public function blogdaftar()
    {
        $blog = DB::table('blog')->get();
        $data = [
            'title' => 'Daftar blog',
            'blog' => $blog,
        ];
        return view('admin/blogdaftar', $data);
    }

    public function blogtambah()
    {
        $data = [
            'title' => 'Tambah blog',
        ];
        return view('admin/blogtambah', $data);
    }

    public function blogtambahsimpan(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $foto = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . $file->getClientOriginalName();
            $file->move(public_path('foto'), $nama_file);
            $foto = $nama_file;
        }

        $data = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal' => $request->input('tanggal'),
            'foto' => $foto,
        ];

        DB::table('blog')->insert($data);

        session()->flash('success', 'Berhasil menambahkan blog!');
        return redirect('admin/blogdaftar');
    }


    public function blogedit($id)
    {
        $data = [
            'title' => 'Edit Blog',
            'blog' => DB::table('blog')->where('idblog', $id)->first(),
        ];
        return view('admin/blogedit', $data);
    }

    public function blogeditsimpan(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $blog = DB::table('blog')->where('idblog', $id)->first();

        $foto = $blog->foto;
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($foto && file_exists(public_path('foto/' . $foto))) {
                unlink(public_path('foto/' . $foto));
            }

            $file = $request->file('foto');
            $nama_file = time() . $file->getClientOriginalName();
            $file->move(public_path('foto'), $nama_file);
            $foto = $nama_file;
        }

        DB::table('blog')->where('idblog', $id)->update([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal' => $request->input('tanggal'),
            'foto' => $foto,
        ]);

        return redirect('admin/blogdaftar')->with('success', 'Data blog berhasil diperbarui!');
    }

    public function bloghapus($id)
    {
        $blog = DB::table('blog')->where('idblog', $id)->first();

        // Hapus file foto dari folder
        if ($blog && $blog->foto && file_exists(public_path('foto/' . $blog->foto))) {
            unlink(public_path('foto/' . $blog->foto));
        }

        DB::table('blog')->where('idblog', $id)->delete();

        return redirect('admin/blogdaftar')->with('success', 'Data blog berhasil dihapus!');
    }


    // matapelajaran

    public function matapelajarandaftar($id)
    {
        $data = [
            'title' => 'Daftar matapelajaran',
            'matapelajaran' => DB::table('matapelajaran')->where('idkelas', $id)->get(),
            'idkelas' => $id,
        ];

        return view('admin/matapelajarandaftar', $data);
    }

    public function matapelajarantambah($id)
    {
        $data = [
            'title' => 'Tambah matapelajaran',
            'idkelas' => $id,
        ];
        return view('admin/matapelajarantambah', $data);
    }

    public function matapelajarantambahsimpan(Request $request, $id)
    {
        DB::table('matapelajaran')->insert([
            'idkelas' => $id,
            'namamatapelajaran' => $request->namamatapelajaran
        ]);

        return redirect('admin/matapelajarandaftar/' . $id)->with('success', 'Data Berhasil Ditambahkan');
    }

    public function matapelajaranedit($idmatapelajaran)
    {
        $data = [
            'title' => 'Edit matapelajaran',
            'matapelajaran' => DB::table('matapelajaran')->where('idmatapelajaran', $idmatapelajaran)->first(),
        ];

        return view('admin/matapelajaranedit', $data);
    }

    public function matapelajaraneditsimpan(Request $request, $idmatapelajaran)
    {
        $idkelas = DB::table('matapelajaran')->where('idmatapelajaran', $idmatapelajaran)->first()->idkelas;

        DB::table('matapelajaran')->where('idmatapelajaran', $idmatapelajaran)->update([
            'namamatapelajaran' => $request->namamatapelajaran
        ]);

        return redirect('admin/matapelajarandaftar/' . $idkelas)->with('success', 'Data Berhasil Diupdate');
    }

    public function gurudaftar()
    {
        $guru = DB::table('guru')->get();
        $data = [
            'title' => 'Daftar guru',
            'guru' => $guru,
        ];
        return view('admin/gurudaftar', $data);
    }


    public function gurutambah()
    {
        $data = [
            'title' => 'Tambah guru',
        ];
        return view('admin/gurutambah', $data);
    }

    public function gurutambahsimpan(Request $request)
    {
        $data = [
            'namaguru' => $request->input('namaguru'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'nohp' => $request->input('nohp'),
            'pendidikanterakhir' => $request->input('pendidikanterakhir'),
        ];

        DB::table('guru')->insert($data);

        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('admin/gurudaftar');
    }


    public function guruedit($id)
    {
        $data = [
            'title' => 'Edit guru',
            'guru' => DB::table('guru')->where('idguru', $id)->first(),
        ];

        return view('admin/guruedit', $data);
    }

    public function gurueditsimpan(Request $request, $id)
    {
        DB::table('guru')->where('idguru', $id)->update([
            'namaguru' => $request->namaguru,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'pendidikanterakhir' => $request->pendidikanterakhir,
        ]);

        return redirect('admin/gurudaftar')->with('success', 'Data berhasil diedit!');
    }


    public function guruhapus($id)
    {
        DB::table('guru')->where('idguru', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('admin/gurudaftar');
    }

    // spp
    public function sppdaftar()
    {
        $data = [
            'title' => 'Daftar spp',
            'spp' => DB::table('user')->join('kelas', 'kelas.idkelas', '=', 'user.idkelas')->where('role', 'User')->get(),
        ];

        return view('admin/sppdaftar', $data);
    }

    public function sppdetail($userId)
    {

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


        return view('admin.sppdetail', ['bulan_data' => $bulan_data, 'userId' => $userId]);
    }

    public function sppbayar(Request $request, $userId)
    {
        // Validasi input
        $request->validate([
            'bulan' => 'required',
            'jatuhtempo' => 'required|date',
            'tanggalbayar' => 'required|date',
            'jumlah' => 'required|numeric|min:1',
            'buktibayar' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5048',
        ]);

        $tanggalBayar = Carbon::parse($request->tanggalbayar);
        $jatuhtempo = Carbon::parse($request->jatuhtempo);
        $bulanKey = $jatuhtempo->format('Y-m'); // contoh: "2024-07"

        // Cek apakah sudah ada pembayaran untuk bulan itu
        $sudahAda = DB::table('spp')
            ->where('iduser', $userId)
            ->whereMonth('tanggalbayar', $jatuhtempo->month)
            ->whereYear('tanggalbayar', $jatuhtempo->year)
            ->exists();

        if ($sudahAda) {
            return back()->with('error', 'SPP untuk bulan ini sudah dibayar.');
        }

        // Cek apakah sudah lewat tanggal jatuh tempo
        if ($tanggalBayar->gt($jatuhtempo)) {
            return back()->with('error', 'Tanggal bayar tidak boleh melewati jatuh tempo.');
        }


        // Simpan bukti bayar
        $file = $request->file('buktibayar');
        $filename = 'bukti_' . $userId . '_' . $bulanKey . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('bukti_spp'), $filename);

        // Simpan ke database
        DB::table('spp')->insert([
            'iduser' => $userId,
            'tanggalbayar' => $tanggalBayar,
            'jumlah' => $request->jumlah,
            'buktibayar' => $filename,
            'metodepembayaran' => $request->metodepembayaran,
        ]);

        return back()->with('success', 'Bukti pembayaran berhasil dikirim.');
    }

    public function sppkonfirmasi($id)
    {
        DB::table('spp')->where('idspp', $id)->update([
            'status' => 'Diterima',
        ]);

        return back()->with('success', 'Pembayaran berhasil dikonfirmasi.');
    }

    // nilai
    public function nilaidaftar(Request $request)
    {
        $query = DB::table('nilai')
            ->join('user', 'nilai.iduser', '=', 'user.id')
            ->select('nilai.*', 'user.idkelas');

        // Filter semester jika ada
        if ($request->filled('semester')) {
            $query->where('nilai.semester', $request->semester);
        }

        // Filter tahun jika ada
        if ($request->filled('tahun')) {
            $query->where('nilai.tahun', $request->tahun);
        }

        // Filter kelas jika ada
        if ($request->filled('idkelas')) {
            $query->where('user.idkelas', $request->idkelas);
        }

        $nilai = $query->orderBy('nilai.tahun', 'desc')->orderBy('nilai.semester')->get();

        $userIds = $nilai->pluck('iduser')->unique()->toArray();
        $user = DB::table('user')->whereIn('id', $userIds)->get();
        $kelas = DB::table('kelas')->get();

        return view('admin.nilaidaftar', [
            'title' => 'Daftar Nilai',
            'nilai' => $nilai,
            'user' => $user,
            'kelas' => $kelas
        ]);
    }

    public function nilaicetaksemua(Request $request)
    {
        $query = DB::table('nilai')
            ->join('user', 'nilai.iduser', '=', 'user.id')
            ->select('nilai.*', 'user.idkelas');

        if ($request->semester) {
            $query->where('nilai.semester', $request->semester);
        }

        if ($request->tahun) {
            $query->where('nilai.tahun', $request->tahun);
        }

        if ($request->idkelas) {
            $query->where('user.idkelas', $request->idkelas);
        }

        $nilai = $query->orderBy('nilai.tahun', 'desc')->orderBy('nilai.semester')->get();

        $userIds = $nilai->pluck('iduser')->unique()->toArray();
        $user = DB::table('user')
            ->join('kelas', 'user.idkelas', '=', 'kelas.idkelas')
            ->whereIn('id', $userIds)->get();

        foreach ($nilai as $item) {
            $item->user = $user->where('id', $item->iduser)->first();
            $item->details = DB::table('nilaidetail')
                ->join('matapelajaran', 'nilaidetail.idmatapelajaran', '=', 'matapelajaran.idmatapelajaran')
                ->select('matapelajaran.namamatapelajaran', 'nilaidetail.nilai')
                ->where('nilaidetail.idnilai', $item->idnilai)
                ->get();
        }

        $data = ['nilai' => $nilai];

        $pdf = Pdf::loadView('admin.nilaicetaksemua', $data)->setPaper('A4', 'portrait');

        return $pdf->stream('nilai_semua_' . ($request->tahun ?? 'semua') . '.pdf');
    }



    public function nilaitambah()
    {
        // Ambil daftar user (siswa) untuk dropdown pilih siswa
        $users = DB::table('user')->where('role', 'User')->get();

        return view('admin.nilaitambah', ['users' => $users]);
    }

    public function nilaitambahsimpan(Request $request)
    {
        // Validasi input
        $request->validate([
            'iduser' => 'required|exists:user,id',
            'tahun' => 'required|digits:4',
            'semester' => 'required|in:1,2',
        ]);

        // Simpan data nilai utama
        $idnilai = DB::table('nilai')->insertGetId([
            'iduser' => $request->iduser,
            'tahun' => $request->tahun,
            'semester' => $request->semester,
        ]);

        // Redirect ke halaman detail nilai untuk tambah nilai matapelajaran
        return redirect('admin/nilaidetail/' . $idnilai)
            ->with('success', 'Data nilai berhasil ditambahkan. Silahkan tambah nilai mata pelajaran.');
    }

    public function nilaiedit($idnilai)
    {
        // Ambil data nilai utama
        $nilai = DB::table('nilai')->where('idnilai', $idnilai)->first();

        if (!$nilai) {
            return redirect('admin/nilaidaftar')->with('error', 'Data nilai tidak ditemukan');
        }

        // Ambil daftar user (siswa) untuk dropdown pilih siswa
        $users = DB::table('user')->where('role', 'User')->get();

        return view('admin.nilaiedit', compact('nilai', 'users'));
    }

    public function nilaieditsimpan(Request $request, $idnilai)
    {
        // Validasi input
        $request->validate([
            'iduser' => 'required|exists:user,id',
            'tahun' => 'required|digits:4',
            'semester' => 'required|in:1,2',
        ]);

        // Update data nilai utama
        DB::table('nilai')
            ->where('idnilai', $idnilai)
            ->update([
                'iduser' => $request->iduser,
                'tahun' => $request->tahun,
                'semester' => $request->semester,
            ]);

        return redirect('admin/nilaidaftar')
            ->with('success', 'Data nilai berhasil diperbarui');
    }

    public function nilaihapus($id)
    {
        DB::table('nilai')->where('idnilai', $id)->delete();
        DB::table('nilaidetail')->where('idnilai', $id)->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }


    public function nilaidetail($idnilai)
    {
        $nilai = DB::table('nilai')
            ->where('idnilai', $idnilai)
            ->first();

        $user = DB::table('user')->where('id', $nilai->iduser)->first();
        $nilai->user = $user;

        // Ambil daftar mata pelajaran
        $matapelajaran = DB::table('matapelajaran')->where('idkelas', $user->idkelas)->get();

        // Ambil nilai detail yang sudah ada
        $nilaidetail = DB::table('nilaidetail')
            ->where('idnilai', $idnilai)
            ->get()
            ->keyBy('idmatapelajaran');

        return view('admin.nilaidetail', compact('nilai', 'matapelajaran', 'nilaidetail'));
    }


    public function nilaidetailsimpan(Request $request)
    {
        $idnilai = $request->input('idnilai');
        $idmatapelajaran = $request->input('idmatapelajaran'); // array
        $nilai = $request->input('nilai'); // array

        $request->validate([
            'idnilai' => 'required|exists:nilai,idnilai',
            'idmatapelajaran' => 'required|array',
            'nilai' => 'required|array',
        ]);

        // Hapus dulu data lama
        DB::table('nilaidetail')->where('idnilai', $idnilai)->delete();

        // Insert ulang data nilai detail
        foreach ($idmatapelajaran as $index => $idmapel) {
            DB::table('nilaidetail')->insert([
                'idnilai' => $idnilai,
                'idmatapelajaran' => $idmapel,
                'nilai' => $nilai[$index],
            ]);
        }

        return redirect('admin/nilaidaftar')->with('success', 'Detail nilai berhasil disimpan');
    }

    public function nilaicetak($idnilai)
    {
        // Ambil data nilai utama dengan relasi user (siswa)
        $nilai = DB::table('nilai')
            ->where('idnilai', $idnilai)
            ->first();

        if (!$nilai) {
            abort(404, "Data nilai tidak ditemukan");
        }

        // Ambil data user (siswa)
        $user = DB::table('user')
            ->join('kelas', 'user.idkelas', 'kelas.idkelas')
            ->where('id', $nilai->iduser)
            ->first();

        // Ambil detail nilai dengan join mata pelajaran
        $nilaidetail = DB::table('nilaidetail')
            ->join('matapelajaran', 'nilaidetail.idmatapelajaran', '=', 'matapelajaran.idmatapelajaran')
            ->where('nilaidetail.idnilai', $idnilai)
            ->select('matapelajaran.namamatapelajaran', 'nilaidetail.nilai')
            ->get();

        // Data untuk view pdf
        $data = [
            'nilai' => $nilai,
            'user' => $user,
            'nilaidetail' => $nilaidetail,
        ];

        // Load view dan buat pdf
        $pdf = PDF::loadView('admin.nilaicetak', $data)->setPaper('A4', 'portrait');

        // Tampilkan langsung di browser (inline)
        return $pdf->stream('nilai_' . $user->nama . '_' . $nilai->tahun . '_semester' . $nilai->semester . '.pdf');
    }
}
