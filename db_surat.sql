-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2025 pada 05.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `password`, `gambar`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin.png'),
(2, 'admin2', 'admin2', '315f166c5aca63a157f7d41007675cb44a948b33', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_arsip`
--

CREATE TABLE `tb_arsip` (
  `id_arsip` varchar(10) NOT NULL,
  `nama_arsip` varchar(30) NOT NULL,
  `kode_arsip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_arsip`
--

INSERT INTO `tb_arsip` (`id_arsip`, `nama_arsip`, `kode_arsip`) VALUES
('1', 'lenovo', '233');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bagian`
--

CREATE TABLE `tb_bagian` (
  `id_bagian` int(11) NOT NULL,
  `nama_bagian` varchar(120) NOT NULL,
  `username_admin_bagian` varchar(50) NOT NULL,
  `password_bagian` varchar(50) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL,
  `tanggal_lahir_bagian` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp_bagian` varchar(12) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `nama_bagian`, `username_admin_bagian`, `password_bagian`, `nama_lengkap`, `tanggal_lahir_bagian`, `alamat`, `no_hp_bagian`, `gambar`) VALUES
(25, 'Bagian Keuangan', 'keuangan', '4a351cb849563b71824f193f3bf32d1375524b92', 'Ismanu', '2023-09-10', 'poncol', '085673645812', 'keuangan.JPG'),
(26, 'Bagian Teknisi', 'teknisi', '2549d04d6a6e02317268cca66e82d0a2c56a94bc', 'Dion', '2023-09-12', 'garsaw', '089627899321', 'teknisi.PNG'),
(27, 'Sekretaris', 'sekretaris', '96e124e6bc2f55ebf31a359b96ba45fcb507bbd5', 'Angga', '2023-09-15', 'Jalan Poncol', '087277345678', 'sekretaris.jpeg'),
(28, 'Bagian Hukum', 'hukum', 'ab86e34c8b761c9e534f9c020f83cb927c1ad673', 'andiana', '2023-10-10', 'bogor', '0898786858', 'hukum.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_feedback`
--

INSERT INTO `tb_feedback` (`id_feedback`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'rio alfian', 'rlfiann@gmail.com', 'kerennn', '2025-05-15'),
(2, 'asd', 'rio@gmail.com', 'berhasil kak', '2025-06-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `nama_jenis` varchar(50) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jenis`
--

INSERT INTO `tb_jenis` (`nama_jenis`, `jenis_surat`, `id_jenis`) VALUES
('Surat Perintah', 'SPt', 1),
('Surat Tugas', 'ST', 2),
('Nota Dinas', 'ND', 3),
('Lembar Disposisi', 'LD', 4),
('Memorandum', 'MM', 5),
('Surat Dinas', 'SD', 6),
('Surat Udangan', 'Und', 7),
('Nota Kesepahaman', 'NK', 8),
('Perjanjian Kerja Sama', 'PKS', 9),
('Surat Kuasa', 'SU', 10),
('Berita Acara', 'BA', 11),
('Surat Keterangan', 'Kt', 12),
('Surat Pengantar', 'SR', 13),
('Pegumuman', 'Pu', 14),
('Surat Panggilan', 'Sg', 15),
('Rekomendasi', 'Rk', 16),
('Surat Peringatan', 'SP', 17),
('Laporan', 'LP', 18),
('Telahaan', 'Tl', 19),
('Notula', 'NT', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `nama_lokasi`, `keterangan`) VALUES
(0, 'Rak b, Lt. 3', 'Di ujung lorong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id_suratkeluar` int(11) NOT NULL,
  `tanggalkeluar_suratkeluar` datetime NOT NULL,
  `nama_arsip` varchar(50) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `nomor_suratkeluar` varchar(45) NOT NULL,
  `nama_bagian` varchar(70) NOT NULL,
  `tanggalsurat_suratkeluar` date NOT NULL,
  `kepada_suratkeluar` varchar(255) NOT NULL,
  `perihal_suratkeluar` text NOT NULL,
  `nama_tandatangan` varchar(50) NOT NULL,
  `file_suratkeluar` varchar(255) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `tanggal_entry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id_suratkeluar`, `tanggalkeluar_suratkeluar`, `nama_arsip`, `nama_jenis`, `nomor_suratkeluar`, `nama_bagian`, `tanggalsurat_suratkeluar`, `kepada_suratkeluar`, `perihal_suratkeluar`, `nama_tandatangan`, `file_suratkeluar`, `operator`, `tanggal_entry`) VALUES
(119, '2023-10-18 07:34:00', 'PP.01', 'Surat Tugas', '3', 'Bagian Keuangan', '2023-10-02', ' k', 'a', 'Sekretaris', '2023-3.pdf', 'admin', '2023-10-02 07:34:33'),
(120, '2023-10-02 11:49:00', 'PP.01', 'ST', '4', 'Sekretaris', '2023-10-02', 'suhu', 'd', 'Sekretaris', '2023-4.pdf', 'admin', '2023-10-02 11:49:14'),
(121, '2023-10-02 13:12:00', 'PP.01', 'SU', '5', 'Bagian Keuangan', '2023-10-02', 'suhu', 'h', 'Sekretaris', '2023-5.pdf', 'admin', '2023-10-02 13:12:51'),
(122, '2023-10-02 13:16:00', 'PP.01', 'ND', '60', 'Bagian Keuangan', '2023-10-02', 'suhu', 's', 'Sekretaris', '2023-60.pdf', 'admin', '2023-10-02 13:17:11'),
(123, '2023-10-10 10:38:00', 'PP.01', 'LP', '61', 'Bagian Keuangan', '2023-10-10', 'sekretariat', 'dgtrbtf', '', '2023-61.pdf', 'admin', '2023-10-10 10:38:43'),
(124, '2023-10-10 11:07:00', 'PP.01', 'SP', '62', 'Bagian Teknisi', '2023-10-10', 'sekretariat', 'gtiuguiui', '', '2023-62.pdf', 'admin', '2023-10-10 11:08:17'),
(125, '2023-10-10 11:10:00', 'PP.01', 'Rk', '63', 'Bagian Keuangan', '2023-10-10', 'sekretariat', 'fyhjufhy', '', '2023-63', 'admin', '2023-10-10 11:10:43'),
(126, '2023-10-11 09:45:00', 'PP.01', 'Telahaan', '64', 'Bagian Teknisi', '2023-10-11', 'sekretariat', 'r5r5r5hyju7', '', '2023-64', 'Bagian Hukum', '2023-10-11 09:45:50'),
(127, '2023-10-24 15:35:00', 'PP.01', 'Pegumuman', '65', 'Bagian Keuangan', '2023-10-24', 's', 'l', '', '2023-65.pdf', 'admin', '2023-10-24 15:35:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id_suratmasuk` int(11) NOT NULL,
  `tanggalmasuk_suratmasuk` datetime NOT NULL DEFAULT current_timestamp(),
  `kode_suratmasuk` varchar(10) NOT NULL,
  `nomorurut_suratmasuk` varchar(7) NOT NULL,
  `nomor_suratmasuk` varchar(25) NOT NULL,
  `tanggalsurat_suratmasuk` date NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `kepada_suratmasuk` varchar(255) NOT NULL,
  `perihal_suratmasuk` text NOT NULL,
  `file_suratmasuk` varchar(255) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `tanggal_entry` datetime NOT NULL DEFAULT current_timestamp(),
  `disposisi1` varchar(50) NOT NULL,
  `tanggal_disposisi1` datetime NOT NULL DEFAULT current_timestamp(),
  `disposisi2` varchar(50) NOT NULL,
  `tanggal_disposisi2` varchar(25) NOT NULL,
  `disposisi3` varchar(50) NOT NULL,
  `tanggal_disposisi3` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id_suratmasuk`, `tanggalmasuk_suratmasuk`, `kode_suratmasuk`, `nomorurut_suratmasuk`, `nomor_suratmasuk`, `tanggalsurat_suratmasuk`, `pengirim`, `kepada_suratmasuk`, `perihal_suratmasuk`, `file_suratmasuk`, `operator`, `tanggal_entry`, `disposisi1`, `tanggal_disposisi1`, `disposisi2`, `tanggal_disposisi2`, `disposisi3`, `tanggal_disposisi3`) VALUES
(9, '2025-06-14 13:53:00', '1', '0001 ', '0001', '2024-08-06', 'Mall', 'Bantar Gebang', 'Lenovo Thinkpad Yoga X1 Carbon', '2025-0001.pdf', 'Bagian Keuangan', '2025-06-14 13:59:07', 'Sekretaris', '2025-06-14 13:58:00', 'Bagian Teknisi', '2025-06-27 13:58:00', 'Bagian Teknisi', '1970-01-01 07:00:00'),
(10, '2025-06-14 13:59:00', '1', '0002 ', '0001', '2025-06-14', 'Mall', 'Bantar Gebang', 'Lenovo', '2025-0002.pdf', 'Bagian Keuangan', '2025-06-14 14:00:36', 'Bagian Teknisi', '2025-06-14 14:00:00', 'Bagian Hukum', '2025-06-25 14:00:00', 'Sekretaris', '2025-07-13 14:01:00'),
(11, '2025-06-21 09:56:00', '1', '0003 ', '0001', '2025-06-21', 'Mall', 'Bantar Gebang', 'Lenovo', '2025-0003.pdf', 'Bagian Keuangan', '2025-06-21 09:57:38', 'Bagian Teknisi', '2025-06-14 13:58:00', 'Sekretaris', '2025-06-27 13:58:00', 'Bagian Teknisi', '2025-07-13 14:01:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username_admin` (`username_admin`);

--
-- Indeks untuk tabel `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indeks untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  ADD PRIMARY KEY (`id_bagian`),
  ADD UNIQUE KEY `username_admin_bagian` (`username_admin_bagian`);

--
-- Indeks untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indeks untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`),
  ADD UNIQUE KEY `nomor_suratkeluar` (`nomor_suratkeluar`);

--
-- Indeks untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`),
  ADD UNIQUE KEY `nomorurut_suratmasuk` (`nomorurut_suratmasuk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id_suratkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
