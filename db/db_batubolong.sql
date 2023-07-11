-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2023 pada 04.13
-- Versi server: 10.4.21-MariaDB-log
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_batubolong`
--
CREATE DATABASE IF NOT EXISTS `db_batubolong` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_batubolong`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buktibayar`
--

CREATE TABLE `tb_buktibayar` (
  `id_bukti` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buktibayar`
--

INSERT INTO `tb_buktibayar` (`id_bukti`, `id_user`, `gambar`, `status`) VALUES
(1, 7, 'OBerry_Jam.png', ''),
(2, 7, 'OBerry_Jam2.jpg', 'Invalid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detailpesanan`
--

CREATE TABLE `tb_detailpesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_detailpesanan`
--

INSERT INTO `tb_detailpesanan` (`id_detail`, `id_pemesanan`, `menu`, `jumlah`, `harga`) VALUES
(120, 103, 'Mei Goreng', 1, 12500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_histori`
--

CREATE TABLE `tb_histori` (
  `id_histori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Tipe` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_histori`
--

INSERT INTO `tb_histori` (`id_histori`, `id_user`, `Tipe`, `tanggal`, `waktu`, `jumlah`) VALUES
(1, 7, 'Tunai', '2023-01-16', '16:54:20', 10000),
(2, 7, 'Tunai', '2023-01-17', '23:46:39', 1000000),
(3, 7, 'Non-Tunai', '2023-01-18', '10:42:16', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_stand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `harga`, `kategori`, `gambar`, `id_stand`) VALUES
(3, 'Nasi Goreng Babi', 12000, 'Makanan', '86.jpeg', 6),
(5, 'Mei Goreng', 19500, 'Makanan', 'OBerry_Jam1.jpg', 7),
(6, 'Mei Goreng', 12500, 'Makanan', '88.jpeg', 6),
(7, 'Nasi Goreng', 10000, 'Makanan', '87.jpeg', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `no_tiket` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `id_stand` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `waktu`, `id_pengunjung`, `id_stand`, `tanggal`, `jumlah`, `total`, `status`) VALUES
(103, '01:15:21', 7, 6, '2023-01-18', 3, 36500, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendapatan`
--

CREATE TABLE `tb_pendapatan` (
  `id_pendapatan` int(11) NOT NULL,
  `sumber` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `pendapatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendapatan`
--

INSERT INTO `tb_pendapatan` (`id_pendapatan`, `sumber`, `tanggal`, `waktu`, `pendapatan`) VALUES
(1, 'Top-Up', '2023-01-16', '12:54:28', '1000'),
(2, 'Top-Up', '2023-01-16', '16:54:20', '1000'),
(3, 'Top-Up', '2023-01-17', '23:46:39', '1000'),
(4, 'Tiket', '2023-01-18', '09:32:50', '10000'),
(5, 'Tiket', '2023-01-18', '09:32:50', '10000'),
(6, 'Top-Up', '2023-01-18', '10:41:13', '1000'),
(7, 'Top-Up', '2023-01-18', '10:41:34', '1000'),
(8, 'Top-Up', '2023-01-18', '10:42:16', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyewaan`
--

CREATE TABLE `tb_penyewaan` (
  `id_penyewaan` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_saldo`
--

CREATE TABLE `tb_saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `saldo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_saldo`
--

INSERT INTO `tb_saldo` (`id_saldo`, `id_user`, `username`, `saldo`) VALUES
(1, 7, 'testpengunjung', '5185000'),
(2, 8, 'nightshadow', '55000'),
(3, 9, 'gilang', '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stand`
--

CREATE TABLE `tb_stand` (
  `id_stand` int(11) NOT NULL,
  `nama_stand` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tipe_stand` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_stand`
--

INSERT INTO `tb_stand` (`id_stand`, `nama_stand`, `nama_pemilik`, `tipe_stand`, `keterangan`, `gambar`) VALUES
(3, 'O\'tella Chocolate', 'Andre', 'Resto', 'Minuman Coklat', 'Promo2.png'),
(4, 'Hinata Clothes', 'Surya Risky', 'Resto', 'Toko Pakaian', 'standbaju2.jpg'),
(5, 'Surfing Mania', 'Julkifli', 'Resto', 'Alat Selancar', 'surping3.jpg'),
(6, 'Omelette Waw', 'Yandi', 'Resto', 'Warung telur', 'omelete2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tiket` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `id_user`, `tanggal`, `waktu`, `tiket`, `status`) VALUES
(177, 7, '2023-01-18', '09:32:50', 'test', 'Invalid'),
(178, 7, '2023-01-18', '09:32:50', 'test', 'Invalid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `level`, `type`) VALUES
(1, 'admintolol', 'jago', 'adminjago123@gmail.com', 'admin', 'b18e948191620cea7803d0733584eee9', 1, ''),
(3, 'Admin', 'Ganteng', 'adminganteng123@gmail.com', 'adminkeren', 'b18e948191620cea7803d0733584eee9', 1, ''),
(4, 'Admin', 'Cantik', 'admincantik123@gmail.com', 'admincans', 'b18e948191620cea7803d0733584eee9', 1, ''),
(5, 'Surving', 'Mania', 'survingmania@gmail.com', 'survingmania', 'ab97df09055c55e6e57aac6d8f2c1360', 2, 'Penyewaan'),
(6, 'Resto', 'Vegan', 'restoveganenak@gmail.com', 'vegansehat', '63f0c927d2d314f8f2cbdb1f41f62153', 2, 'Resto'),
(7, 'pengunjung', 'testdong', 'pengunjungcoba@gmail.com', 'testpengunjung', '098f6bcd4621d373cade4e832627b4f6', 3, ''),
(8, 'Andre', 'Prasetya', 'andreseptaprasetya06@gmail.com', 'nightshadow', '7a7b46be978bf4b68bf74f39978e96ab', 3, ''),
(9, 'Gilang', 'wkwkwk', 'gilang@gmail.com', 'gilang', 'c37fddfb7b3f538674c6e9a77e7bf486', 3, ''),
(10, 'testnambah', '', '', 'testnambah', '51fb409ebaf3c8ecec80194f98d74961', 2, 'Resto'),
(11, 'coba', '', '', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 2, 'Resto');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_buktibayar`
--
ALTER TABLE `tb_buktibayar`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indeks untuk tabel `tb_detailpesanan`
--
ALTER TABLE `tb_detailpesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_histori`
--
ALTER TABLE `tb_histori`
  ADD PRIMARY KEY (`id_histori`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_user` (`id_stand`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indeks untuk tabel `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indeks untuk tabel `tb_saldo`
--
ALTER TABLE `tb_saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_stand`
--
ALTER TABLE `tb_stand`
  ADD PRIMARY KEY (`id_stand`);

--
-- Indeks untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_buktibayar`
--
ALTER TABLE `tb_buktibayar`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_detailpesanan`
--
ALTER TABLE `tb_detailpesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_histori`
--
ALTER TABLE `tb_histori`
  MODIFY `id_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  MODIFY `id_pendapatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  MODIFY `id_penyewaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_saldo`
--
ALTER TABLE `tb_saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_stand`
--
ALTER TABLE `tb_stand`
  MODIFY `id_stand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`id_stand`) REFERENCES `tb_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `tb_saldo`
--
ALTER TABLE `tb_saldo`
  ADD CONSTRAINT `tb_saldo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
