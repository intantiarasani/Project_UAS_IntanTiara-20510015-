-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 02:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan`) VALUES
(1, 'kosmetik', 'krim malam, krim sia'),
(2, 'makanan riang', 'beng beng, happy tos'),
(3, 'Perabotan', 'Panci, Wajan, dll'),
(4, 'Pakaian Wanita', 'baju, celana, rok');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `id_barang_masuk` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `id_barang_masuk`, `tanggal_keluar`) VALUES
(1, 10, '2022-01-03'),
(2, 9, '2022-01-03'),
(3, 8, '2022-01-03'),
(4, 7, '2022-01-03'),
(5, 11, '2022-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_kirim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `tanggal_masuk`, `id_karyawan`, `tanggal_kirim`) VALUES
(7, '2022-01-02', 1, '2022-01-07'),
(8, '2022-01-02', 1, '2022-01-07'),
(9, '2022-01-03', 1, '2022-01-08'),
(10, '2022-01-03', 1, '2022-01-08'),
(11, '2022-01-03', 1, '2022-01-08'),
(12, '2022-01-03', 1, '2022-01-08'),
(13, '2022-01-03', 1, '2022-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `detail_masuk_barang`
--

CREATE TABLE `detail_masuk_barang` (
  `id_detail_masuk` int(11) NOT NULL,
  `id_barang_masuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_masuk_barang`
--

INSERT INTO `detail_masuk_barang` (`id_detail_masuk`, `id_barang_masuk`, `id_barang`, `jumlah`) VALUES
(1, 1, 2, 1),
(2, 2, 2, 1),
(3, 2, 2, 1),
(4, 2, 2, 1),
(5, 3, 2, 1),
(6, 4, 2, 1),
(7, 4, 2, 1),
(8, 4, 2, 1),
(9, 5, 2, 1),
(10, 5, 2, 1),
(11, 6, 1, 5),
(12, 7, 3, 4),
(13, 8, 2, 2),
(14, 8, 1, 3),
(15, 9, 2, 1),
(16, 9, 2, 1),
(17, 10, 3, 1),
(18, 11, 3, 6),
(19, 12, 4, 2),
(20, 13, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `tunjangan_jabatan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `tunjangan_jabatan`) VALUES
(1, 'boss', 5000),
(2, 'karyawan gudang', 3000),
(3, 'karyawan pengiriman', 1000),
(4, 'karyawan pengambilan', 3000),
(5, 'kurir', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `username`, `password`, `id_jabatan`) VALUES
(1, 'Intan Tiara Sani', '2021-12-08', 'jombang', 'P', 'intantiara', 'hans', 2),
(2, 'riris', '2021-12-26', 'jombang', 'P', 'admin', 'dita', 1),
(3, 'yolan', '2021-12-27', 'malaysia', 'P', 'oke', 'john', 3),
(5, 'hans', '2021-12-09', 'jakarta', 'L', '20510015', 'intan', 4),
(6, 'Intan', '2022-01-13', 'depok', 'P', 'hans', 'bismillah', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indexes for table `detail_masuk_barang`
--
ALTER TABLE `detail_masuk_barang`
  ADD PRIMARY KEY (`id_detail_masuk`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `detail_masuk_barang`
--
ALTER TABLE `detail_masuk_barang`
  MODIFY `id_detail_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
