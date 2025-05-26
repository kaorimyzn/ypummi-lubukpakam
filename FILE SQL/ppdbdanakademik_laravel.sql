-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2025 pada 01.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbdanakademik_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'Admin'),
(2, 'Superadmin', 'superadmin@gmail.com', 'superadmin', 'Superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `idblog` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`idblog`, `judul`, `deskripsi`, `foto`, `tanggal`) VALUES
(1, 'MIS UMMI TELAH MELAKUKAN WISUDA TAHFIZH JUZ 30 & 50 HADIST', 'Alhamdulillah, sebuah momen yang sangat membanggakan bagi keluarga besar MIS Ummi telah terlaksana dengan penuh khidmat, yaitu Wisuda Tahfizh Juz 30 dan 50 Hadist. Kegiatan ini menjadi puncak penghargaan atas usaha dan dedikasi para siswa yang telah berhasil menghafal dan memahami ayat-ayat suci Al-Qur’an serta Hadist Nabi Muhammad SAW.\r\nWisuda Tahfizh di MIS Ummi bukan sekadar seremoni biasa. Ini adalah bukti nyata betapa seriusnya sekolah dalam menanamkan nilai-nilai keagamaan dan memperkuat pondasi spiritual para siswa sejak dini. Dengan menghafal Juz 30 yang berisi ayat-ayat pendek dan Hadist-hadist pilihan, para siswa diharapkan dapat membekali diri dengan ilmu yang bermanfaat dalam kehidupan sehari-hari.\r\n\r\nProses menghafal Al-Qur’an dan Hadist tentu bukan hal yang mudah. Dibutuhkan ketekunan, konsistensi, dan bimbingan dari para guru yang berdedikasi tinggi. Selama berbulan-bulan, para siswa berlatih dengan sungguh-sungguh, belajar tajwid, memahami makna, dan menjaga hafalan mereka agar tetap kuat.\r\n\r\nMomen wisuda ini menjadi saat yang sangat membahagiakan bagi siswa, orang tua, serta seluruh civitas akademika MIS Ummi. Wisuda bukan hanya mengapresiasi hasil hafalan, tapi juga menjadi motivasi bagi siswa lain untuk terus bersemangat menuntut ilmu dan mendekatkan diri kepada Allah SWT melalui Al-Qur’an dan Hadist.\r\n\r\nSemoga para penghafal Juz 30 dan 50 Hadist yang telah diwisuda ini dapat terus menjaga hafalan mereka, menjadi pribadi yang istiqamah, dan bisa mengamalkan ajaran Islam dalam kehidupan sehari-hari. Kami juga berharap MIS Ummi dapat terus mencetak generasi penghafal Al-Qur’an dan Hadist yang unggul, cerdas, dan berakhlak mulia.', '1748214460WhatsApp Image 2025-05-23 at 07.07.04_583fce45.jpg', '2025-05-19'),
(2, 'YP UMMI LUBUK PAKAM MENGADAKAN PENSI BUMI SE-SUMATERA UTARA', 'YP Ummi Lubuk Pakam kembali menunjukkan komitmennya dalam mengembangkan seni dan budaya Islami dengan mengadakan PENSI BUMI (Pentas Seni Budaya Islami) Se-Sumatera Utara. Acara yang penuh semangat ini menjadi wadah bagi para pelajar dan komunitas seni dari berbagai daerah di Sumatera Utara untuk berkumpul, berbagi, dan mengekspresikan kreativitas melalui seni Islami.\r\n\r\nPENSI BUMI bukan hanya sekadar ajang lomba seni, melainkan juga momen berharga untuk mempererat tali silaturahmi antar peserta dari berbagai sekolah dan komunitas. Berbagai seni seperti nasyid, kaligrafi, puisi Islami, drama religi, dan tari tradisional Islami dipentaskan dengan penuh semangat dan kreativitas, menampilkan keindahan budaya Islam yang kaya dan beragam.\r\n\r\nMelalui acara ini, YP Ummi Lubuk Pakam berharap dapat menumbuhkan kecintaan generasi muda terhadap seni budaya Islami serta memperkuat nilai-nilai agama dalam kehidupan sehari-hari. PENSI BUMI menjadi sarana edukasi yang menyenangkan sekaligus inspiratif, agar para peserta dapat menggali potensi diri dan memperdalam pemahaman terhadap ajaran Islam.\r\n\r\nAntusiasme peserta dan pengunjung sangat tinggi, terlihat dari semaraknya pertunjukan dan keaktifan semua pihak yang terlibat. Acara ini juga didukung penuh oleh para guru, orang tua, dan tokoh masyarakat yang melihat pentingnya seni budaya sebagai media dakwah dan pembentukan karakter.\r\n\r\nSemoga PENSI BUMI dapat terus digelar sebagai tradisi tahunan yang mampu mengangkat nilai seni budaya Islami di Sumatera Utara, serta memotivasi generasi muda untuk terus berkarya dan berprestasi. YP Ummi Lubuk Pakam bangga menjadi bagian dari perjalanan pengembangan seni Islami yang penuh makna ini.', '1748214578MASJID & SEKOLAH 2x1.png', '2025-05-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `idguru` int(11) NOT NULL,
  `namaguru` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `pendidikanterakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`idguru`, `namaguru`, `email`, `alamat`, `nohp`, `pendidikanterakhir`) VALUES
(1, 'Feby Saputra', 'feby@gmail.com', 'Banyuasin', '082983929201', 'S2'),
(2, 'Sudendev', 'sudendev@gmail.com', 'Banyuasin', '082282076701', 'S2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `namakelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`idkelas`, `namakelas`) VALUES
(1, 'VII'),
(2, 'IX');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `idmatapelajaran` int(11) NOT NULL,
  `idkelas` int(11) NOT NULL,
  `namamatapelajaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `matapelajaran`
--

INSERT INTO `matapelajaran` (`idmatapelajaran`, `idkelas`, `namamatapelajaran`) VALUES
(1, 1, 'Bahasa Indonesia'),
(2, 1, 'Matematika'),
(3, 1, 'Fisika'),
(4, 1, 'PKN'),
(5, 2, 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`idnilai`, `iduser`, `tahun`, `semester`) VALUES
(2, 2, 2025, 1),
(3, 3, 2025, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaidetail`
--

CREATE TABLE `nilaidetail` (
  `idnilaidetail` int(11) NOT NULL,
  `idnilai` int(11) NOT NULL,
  `idmatapelajaran` int(11) NOT NULL,
  `nilai` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilaidetail`
--

INSERT INTO `nilaidetail` (`idnilaidetail`, `idnilai`, `idmatapelajaran`, `nilai`) VALUES
(7, 2, 1, '90'),
(8, 2, 2, '90'),
(9, 2, 3, '70'),
(10, 2, 4, '85'),
(11, 3, 1, '70'),
(12, 3, 2, '60'),
(13, 3, 3, '40'),
(14, 3, 4, '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpembayaran` int(11) NOT NULL,
  `idpendaftaran` int(11) NOT NULL,
  `atasnama` varchar(255) NOT NULL,
  `tanggaltransfer` date NOT NULL,
  `bukti` text NOT NULL,
  `waktupembayaran` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idpendaftaran` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idppdb` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `waktupendaftaran` datetime NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pilihansekolah` varchar(255) DEFAULT NULL,
  `namaayah` varchar(255) NOT NULL,
  `pekerjaanayah` varchar(255) NOT NULL,
  `namaibu` varchar(255) NOT NULL,
  `pekerjaanibu` varchar(255) NOT NULL,
  `nohportu` varchar(15) NOT NULL,
  `namawali` varchar(255) DEFAULT NULL,
  `pekerjaanwali` varchar(255) DEFAULT NULL,
  `nohpwali` varchar(15) DEFAULT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `kk` text DEFAULT NULL,
  `ktp` text DEFAULT NULL,
  `ijazah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`idpendaftaran`, `iduser`, `idppdb`, `status`, `waktupendaftaran`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `alamat`, `email`, `nohp`, `pilihansekolah`, `namaayah`, `pekerjaanayah`, `namaibu`, `pekerjaanibu`, `nohportu`, `namawali`, `pekerjaanwali`, `nohpwali`, `waktu`, `kk`, `ktp`, `ijazah`) VALUES
(6, 2, 2, 'Berkas Di Terima, Pendaftaran Selesai', '2025-05-16 09:52:07', 'Fahrul Adib', 'Laki-laki', 'Musi Banyuasin', '2018-11-11', 'Banyuasin', 'fahruladib9@gmail.com', '082282076702', NULL, 'Alucard', 'Pro player', 'Aminah', 'Programmer', '082282076702', 'Alucard', 'Pro Player', '082282076702', '2025-05-16 09:52:07', '20250516025252detail web.pdf', '20250516025252laporan-keuangan-20250425103347.pdf', '20250516025252laporan-keuangan-20250425103347.pdf'),
(7, 3, 2, 'Berkas Di Terima, Pendaftaran Selesai', '2025-05-16 17:13:46', 'anton', 'Laki-laki', 'Banyuasin', '2010-11-11', 'Banyuasin', 'anton@gmail.com', '098282729192', NULL, 'Rahasia', 'Pro player', 'Rahasia', 'Programmer', '082787382992', 'abi', 'Pro Player', '0827367287732', '2025-05-16 17:13:46', '20250516101415laporan-keuangan-20250425103347.pdf', '20250516101415laporan-keuangan-20250425103347.pdf', '20250516101415laporan-keuangan-20250425103347.pdf'),
(8, 4, 2, 'Berkas Di Terima, Pendaftaran Selesai', '2025-05-17 17:18:24', 'Amar', 'Laki-laki', 'Musi Banyuasin', '2016-11-11', 'Banyuasin', 'amar@gmail.com', '098282729192', NULL, 'Feby Saputra', 'Pro player', 'Aminah', 'Rahasia', '082783828382', 'Feby Saputra', 'Pro Player', '082783828382', '2025-05-17 17:18:24', '20250517101850detail web.pdf', '20250517101850Capture.JPG', '20250517101850Capture.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppdb`
--

CREATE TABLE `ppdb` (
  `idppdb` int(11) NOT NULL,
  `judulppdb` text NOT NULL,
  `deskripsippdb` text NOT NULL,
  `tanggalakhir` date NOT NULL,
  `statusppdb` text DEFAULT NULL,
  `fotoppdb` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ppdb`
--

INSERT INTO `ppdb` (`idppdb`, `judulppdb`, `deskripsippdb`, `tanggalakhir`, `statusppdb`, `fotoppdb`, `waktu`) VALUES
(2, 'PPDB 2025', 'Penerimaan Peserta Didik Baru Tahun 2025', '2025-05-31', NULL, '20250525231040YP UMMI LUBUK PAKAM (2).png', '2025-05-16 09:50:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `idspp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tanggalbayar` date NOT NULL,
  `jumlah` varchar(250) NOT NULL,
  `buktibayar` text NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'Menunggu Konfirmasi',
  `metodepembayaran` varchar(250) NOT NULL DEFAULT 'Transfer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`idspp`, `iduser`, `tanggalbayar`, `jumlah`, `buktibayar`, `status`, `metodepembayaran`) VALUES
(1, 2, '2025-05-16', '75000', 'bukti_2_2024-07.JPG', 'Diterima', 'Transfer'),
(3, 2, '2025-04-14', '75000', 'bukti_2_2025-04.JPG', 'Menunggu Konfirmasi', 'Transfer'),
(6, 2, '2025-03-15', '75000', 'bukti_2_2025-03.JPG', 'Menunggu Konfirmasi', 'Transfer'),
(7, 2, '2025-02-12', '75000', 'bukti_2_2025-02.JPG', 'Menunggu Konfirmasi', 'Transfer'),
(8, 3, '2025-05-14', '75000', 'bukti_3_2025-05.JPG', 'Diterima', 'Transfer'),
(9, 4, '2025-05-30', '75000', 'bukti_4_2025-06.JPG', 'Diterima', 'Transfer'),
(10, 4, '2024-07-10', '75000', 'bukti_4_2024-07.JPG', 'Diterima', 'Transfer'),
(11, 2, '2025-01-02', '75000', 'bukti_2_2025-01.JPG', 'Menunggu Konfirmasi', 'Transfer'),
(12, 2, '2024-12-01', '75000', 'bukti_2_2024-12.JPG', 'Menunggu Konfirmasi', 'Cash'),
(13, 3, '2025-04-09', '75000', 'bukti_3_2025-04.JPG', 'Menunggu Konfirmasi', 'Transfer'),
(14, 2, '2024-11-12', '75000', 'bukti_2_2024-11.JPG', 'Menunggu Konfirmasi', 'Transfer'),
(15, 4, '2025-04-09', '75000', 'bukti_4_2025-04.JPG', 'Diterima', 'Transfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `role` varchar(250) NOT NULL,
  `idkelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `nohp`, `alamat`, `role`, `idkelas`) VALUES
(2, 'Fahrul Adib', 'fahruladib9@gmail.com', '123', '082282076702', 'Banyuasin', 'User', 1),
(3, 'anton', 'anton@gmail.com', '123', '098282729192', 'Banyuasin', 'User', 1),
(4, 'Amar', 'amar@gmail.com', '123', '098282729192', 'Banyuasin', 'User', 1),
(5, 'Agia Ardini', 'agiaardini1801@gmail.com', 'admin', '083831108456', 'Lubuk Pakam', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idblog`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indeks untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`idmatapelajaran`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indeks untuk tabel `nilaidetail`
--
ALTER TABLE `nilaidetail`
  ADD PRIMARY KEY (`idnilaidetail`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpembayaran`),
  ADD KEY `idpendaftaran` (`idpendaftaran`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indeks untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`idppdb`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`idspp`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `idblog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `idguru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matapelajaran`
--
ALTER TABLE `matapelajaran`
  MODIFY `idmatapelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilaidetail`
--
ALTER TABLE `nilaidetail`
  MODIFY `idnilaidetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idpembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idpendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `idppdb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `idspp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
