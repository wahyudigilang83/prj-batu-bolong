-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 05:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
CREATE DATABASE IF NOT EXISTS `db_batubolong_lama` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_batubolong_lama`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
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
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
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
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_pengunjung` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama_pengunjung` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyewaan`
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
-- Table structure for table `tb_stand`
--

CREATE TABLE `tb_stand` (
  `id_stand` int(11) NOT NULL,
  `nama_stand` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tipe_stand` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `no_tiket` int(11) NOT NULL,
  `harga` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`);

--
-- Indexes for table `tb_stand`
--
ALTER TABLE `tb_stand`
  ADD PRIMARY KEY (`id_stand`);

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`no_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penyewaan`
--
ALTER TABLE `tb_penyewaan`
  MODIFY `id_penyewaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_stand`
--
ALTER TABLE `tb_stand`
  MODIFY `id_stand` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `no_tiket` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
