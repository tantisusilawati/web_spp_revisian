-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2023 pada 16.16
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nama_guru`, `jenis_kelamin`, `mapel`, `no_hp`, `email`, `foto`) VALUES
(3, 'Tanti', 'perempuan', 'Akidah Akhlak', '089611429533', 'tantisusilawati0912@gmail.com', 'ab197ab543b2d5cb0453dc39abb1ced5.jpg'),
(4, 'ujang', 'la', 'Akidah Akhlak', '123', 'ariirham@gmail.com', 'a25ea3766feb502ea74d2ea10961b4d2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info_bayar`
--

CREATE TABLE `tbl_info_bayar` (
  `id_info_bayar` int(11) NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `tahun_angkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_info_bayar`
--

INSERT INTO `tbl_info_bayar` (`id_info_bayar`, `jumlah_bayar`, `tahun_angkatan`) VALUES
(1, '100000', '2020'),
(2, '100000', '2021'),
(3, '100000', '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `isi_kegiatan` text NOT NULL,
  `foto` text NOT NULL,
  `waktu` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `isi_kegiatan`, `foto`, `waktu`, `id_user`) VALUES
(2, 'kegiatan 12', 'testing aja by tanti', 'c823b61b20c2727b5057f5833cb76c58.jpg', '2023-06-12', 7),
(3, 'kegiatan 2', 'testing', 'c823b61b20c2727b5057f5833cb76c58.jpg', '2023-06-12', 1),
(4, 'kegiatan 3', 'testing', 'c823b61b20c2727b5057f5833cb76c58.jpg', '2023-06-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `tahun_angkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`, `tahun_angkatan`) VALUES
(3, 'Ustadzah Syifa', '2023'),
(4, 'Ustadz Yahya', '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama`, `no_hp`, `pesan`, `waktu`) VALUES
(1, 'tes', '1231', 'ae2b1fca515949e5d54fb22b8ed95575', '2023-06-17 22:04:39'),
(3, 'aaabbcc', '123131', 'ae2b1fca515949e5d54fb22b8ed95575', '2023-06-17 22:05:53'),
(4, 'aabbcc', '12313', 'ae2b1fca515949e5d54fb22b8ed95575', '2023-06-17 22:06:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `no_hp_ortu` varchar(13) NOT NULL,
  `pesan` text NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `nis`, `nama_santri`, `nama_kelas`, `no_hp_ortu`, `pesan`, `jumlah_bayar`, `email`, `alamat`, `bulan`, `tanggal_upload`) VALUES
(4, 100, 'budi update', 'X MIPA 1', '085888241171', '', '200000', 'budi@gmail.com', 'tangerang', 'August', '2022-07-27'),
(5, 50, 'nina', 'X MIPA 1', '085888241171', '', '100000', 'nina@gmail.com', 'tangerang', 'July', '2022-07-27'),
(6, 50, 'nina', 'X MIPA 1', '085888241171', '', '100000', 'nina@gmail.com', 'tangerang', 'July', '2022-07-27'),
(7, 50, 'nina', 'X MIPA 1', '085888241171', 'bayar spp bulan july', '100000', 'nina@gmail.com', 'tangerang', 'July', '2022-07-27'),
(8, 50, 'nina', 'X MIPA 1', '085888241171', 'bayar spp bulan july', '100000', 'nina@gmail.com', 'tangerang', 'July', '2022-07-27'),
(9, 50, 'nina', 'X MIPA 1', '085888241171', 'bayar spp bulan july', '100000', 'nina@gmail.com', 'tangerang', 'July', '2022-07-27'),
(10, 50, 'nina', 'X MIPA 1', '085888241171', '', '100000', 'nina@gmail.com', 'tangerang', 'July', '2022-07-27'),
(11, 50, 'nina', 'X MIPA 1', '085888241171', '', '100000', 'nina@gmail.com', 'tangerang', 'July', '2022-07-27'),
(12, 50, 'nina', 'X MIPA 1', '085888241171', '', '150000', 'nina@gmail.com', 'tangerang', 'August', '2022-08-02'),
(13, 150, 'reno', 'XII MIPA 1 ', '085888241171', '', '350000', '', '', 'August', '2022-08-02'),
(14, 150, 'miko', 'XII MIPA 1 ', '2310312123', 'bayar spp bulan july', '350000', 'miko@gmail.com', 'tangerang', 'August', '2022-08-02'),
(15, 50, 'nina', 'X MIPA 1', '085888241171', '', '150000', 'nina@gmail.com', 'tangerang', 'August', '2022-08-02'),
(16, 50, 'nina', 'XII MIPA 1 ', '085888241171', '', '350000', 'nina@gmail.com', 'tangerang', 'August', '2022-08-05'),
(17, 100, 'budi update', 'X MIPA 1', '085888241171', 'bayar', '200000', 'budi@gmail.com', 'tangerang', 'September', '2022-09-03'),
(18, 100, 'budi update', 'X MIPA 1', '085888241171', 'bayar', '200000', 'budi@gmail.com', 'tangerang', 'September', '2022-09-03'),
(19, 100, 'budi update', 'X MIPA 1', '085888241171', 'bayar', '200000', 'budi@gmail.com', 'tangerang', 'September', '2022-09-08'),
(20, 100, 'budi update', 'X MIPA 1', '085888241171', 'testing 123', '200000', 'budi@gmail.com', 'tangerang', 'September', '2022-09-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_santri`
--

CREATE TABLE `tbl_santri` (
  `id_santri` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `tahun_angkatan` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `no_hp_ortu` varchar(13) NOT NULL,
  `foto` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_santri`
--

INSERT INTO `tbl_santri` (`id_santri`, `nis`, `password`, `nama_santri`, `nama_kelas`, `tahun_angkatan`, `jenis_kelamin`, `no_hp`, `email`, `alamat`, `nama_ayah`, `nama_ibu`, `no_hp_ortu`, `foto`, `tanggal`) VALUES
(1, 132, '', 'tes', 'K1', 'J1', 'L', '08123', 'maulanaagung543@gmail.com', '', 'ayah', 'ibu', '0823131', '10b8d4518f8755ef0759cd66f48621e1.jpg', '0000-00-00 00:00:00'),
(2, 12333, '', 'test131', 'K1', 'J1', 'L', '13', '123@gmail.com', 'alamat', 'ayah', 'ibu', '12123', 'ca4e51be9c1eb1c0a8156136c071a831.jpg', '0000-00-00 00:00:00'),
(3, 12345, '', 'tes', 'K1', 'J1', 'L', '123', 'maulana.agung@raharja.info', 'alamat', 'ayah', 'ibu', '123', 'e24c3c2a442297985d1327cb3d6afd68.jpg', '2023-06-12 07:16:08'),
(4, 2022001, '123456', 'Sampel 4', 'X MIPA 1', 'X', 'L', '0823112334', 'akun@gmail.com', 'Tangerang', 'Ayah 1', 'Ibu 1', '0823112334', '', '2023-06-16 02:41:57'),
(5, 2022002, '123456', 'Sampel 5', 'X MIPA 2', 'XI', 'L', '0823112334', 'akun@gmail.com', 'Tangerang', 'Ayah 2', 'Ibu 2', '0823112334', '', '2023-06-16 02:41:57'),
(6, 2022003, '123456', 'Sampel 6', 'X IPS 1', 'XII', 'P', '0823112334', 'akun@gmail.com', 'Tangerang', 'Ayah 3', 'Ibu 2', '0823112334', '', '2023-06-16 02:41:57'),
(7, 2022001, '123456', 'Sampel 4', 'X MIPA 1', 'X', 'L', '0823112334', 'akun@gmail.com', 'Tangerang', 'Ayah 1', 'Ibu 1', '0823112334', '', '2023-06-16 02:44:25'),
(8, 2022002, '123456', 'Sampel 5', 'X MIPA 2', 'XI', 'L', '0823112334', 'akun@gmail.com', 'Tangerang', 'Ayah 2', 'Ibu 2', '0823112334', '', '2023-06-16 02:44:25'),
(9, 2022003, '123456', 'Sampel 6', 'X IPS 1', 'XII', 'P', '0823112334', 'akun@gmail.com', 'Tangerang', 'Ayah 3', 'Ibu 2', '0823112334', '', '2023-06-16 02:44:25'),
(10, 2022336170, '', 'Tanti', 'Ustadzah Syifa', 'X', 'P', '089611429533', 'tantisusilawati0912@gmail.com', 'Tangerang', 'Wawan', 'Nurjanah', '089611429533', '684acfc32470bc257cdae5d3914ed5b2.jpg', '2023-07-11 19:35:58'),
(11, 2022001, '123456', 'Budi', 'X MIPA 1', 'X', 'L', '0823112334', 'akun@gmail.com', 'Tangerang', 'Ayah 1', 'Ibu 1', '0823112334', '', '2023-07-11 21:27:53'),
(12, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-11 21:27:53'),
(13, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2023-07-11 21:27:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status_pembayaran`
--

CREATE TABLE `tbl_status_pembayaran` (
  `id_status_pembayaran` int(10) NOT NULL,
  `order_id` varchar(20) DEFAULT NULL,
  `nis` int(10) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `tahun_angkatan` varchar(5) DEFAULT NULL,
  `gross_amount` varchar(100) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `bank` varchar(10) DEFAULT NULL,
  `va_number` varchar(30) DEFAULT NULL,
  `pdf_url` text,
  `status_code` varchar(3) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `foto` text,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_status_pembayaran`
--

INSERT INTO `tbl_status_pembayaran` (`id_status_pembayaran`, `order_id`, `nis`, `nama_santri`, `nama_kelas`, `tahun_angkatan`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_number`, `pdf_url`, `status_code`, `bulan`, `tahun`, `foto`, `tanggal_upload`) VALUES
(2, '23125', 100, 'budi update', 'X MIPA 1', 'X', '300000.00', 'bank_transfer', '2022-09-14 14:34:26', 'bca', '57287265775', 'https://app.sandbox.midtrans.com/snap/v1/transactions/efaaa052-c905-41ec-bcad-245827d0847f/pdf', '201', 'Sept', '', NULL, '2022-09-27'),
(3, '23125', 100, 'budi update', 'X MIPA 1', 'X', '300000.00', 'bank_transfer', '2022-07-14 14:34:26', 'bca', '57287265775', 'https://app.sandbox.midtrans.com/snap/v1/transactions/efaaa052-c905-41ec-bcad-245827d0847f/pdf', '201', 'Juni', '', NULL, '2022-07-27'),
(7, '725', 50, 'nina', 'X MIPA 1', 'X', '100000.00', 'bank_transfer', '2022-07-27 14:56:06', 'bca', '57287042361', 'https://app.sandbox.midtrans.com/snap/v1/transactions/0f6bcabd-36cb-4e41-8273-0fa244ea1874/pdf', '201', 'July', '', NULL, '2022-07-27'),
(9, '23125', 151, 'Rudi', 'X MIPA 1', 'XI', '300000.00', 'bank_transfer', '2022-07-14 14:34:26', 'bca', '57287265775', 'https://app.sandbox.midtrans.com/snap/v1/transactions/efaaa052-c905-41ec-bcad-245827d0847f/pdf', '201', 'Juni', '', NULL, '2022-07-27'),
(10, '23125', 150, 'Rudi 1', 'X MIPA 1', 'XI', '300000.00', 'bank_transfer', '2022-07-14 14:34:26', 'bca', '57287265775', 'https://app.sandbox.midtrans.com/snap/v1/transactions/efaaa052-c905-41ec-bcad-245827d0847f/pdf', '201', 'Juni', '', NULL, '2022-07-27'),
(11, '23125', 150, 'Rudi 1', 'X MIPA 1', 'XII', '300000.00', 'bank_transfer', '2022-07-14 14:34:26', 'bca', '57287265775', 'https://app.sandbox.midtrans.com/snap/v1/transactions/efaaa052-c905-41ec-bcad-245827d0847f/pdf', '201', 'Juni', '', NULL, '2022-07-27'),
(12, '23125', 150, 'Rudi 1', 'X MIPA 1', 'XII', '300000.00', 'bank_transfer', '2022-07-14 14:34:26', 'bca', '57287265775', 'https://app.sandbox.midtrans.com/snap/v1/transactions/efaaa052-c905-41ec-bcad-245827d0847f/pdf', '201', 'Juni', '', NULL, '2022-08-18'),
(19, NULL, 50, 'nina', 'XII MIPA 1 ', 'XII', '350000', 'Cash', '2022-09-14 09:32:03', NULL, NULL, NULL, '200', 'September', '2022', '92e2b3e820a4aea004d6a60d7189c02d.png', '2022-09-14'),
(20, '14234', 100, 'budi update', 'X MIPA 1', NULL, '200000.00', 'bank_transfer', '2022-09-14 09:39:30', 'bca', '57287149158', 'https://app.sandbox.midtrans.com/snap/v1/transactions/aa11c7a4-c901-4abc-ab99-fb80a66ee8e8/pdf', '201', 'September', '', NULL, '2022-09-14'),
(21, NULL, 50, 'nina', 'XII MIPA 1 ', 'XII', '350000', 'Cash', '2022-09-15 08:29:45', NULL, NULL, NULL, '200', 'January', '2022', 'bb745391f8f1bd59be794d5489113919.png', '2022-09-15'),
(22, '27206', 2022003, 'ldiya', 'X IPS 1', NULL, '150000.00', 'bank_transfer', '2023-06-10 12:02:19', 'bca', '57287348214', 'https://app.sandbox.midtrans.com/snap/v1/transactions/60bfe701-5126-43f9-b121-fe1037e4f790/pdf', '201', 'June', '', NULL, '2023-06-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `username`, `password`, `hak_akses`, `waktu`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2023-04-10 07:09:00'),
(7, 'tanti', 'tanti', '301eaa9a7f1dab9a026aeaf2a64c1a01', 'admin', '2023-07-11 01:55:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tbl_info_bayar`
--
ALTER TABLE `tbl_info_bayar`
  ADD PRIMARY KEY (`id_info_bayar`);

--
-- Indeks untuk tabel `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tbl_santri`
--
ALTER TABLE `tbl_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indeks untuk tabel `tbl_status_pembayaran`
--
ALTER TABLE `tbl_status_pembayaran`
  ADD PRIMARY KEY (`id_status_pembayaran`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_info_bayar`
--
ALTER TABLE `tbl_info_bayar`
  MODIFY `id_info_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_santri`
--
ALTER TABLE `tbl_santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_status_pembayaran`
--
ALTER TABLE `tbl_status_pembayaran`
  MODIFY `id_status_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
