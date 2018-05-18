-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2018 pada 02.31
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunatmodern`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) DEFAULT NULL,
  `noktp` varchar(25) DEFAULT NULL,
  `hubungan` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `RTRW` varchar(15) DEFAULT NULL,
  `kelurahankecamatan` varchar(70) DEFAULT NULL,
  `kabkota` varchar(70) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(15) DEFAULT NULL,
  `namaanak` varchar(100) DEFAULT NULL,
  `umur` varchar(3) DEFAULT NULL,
  `riwayat` varchar(15) DEFAULT NULL,
  `metode` varchar(50) DEFAULT NULL,
  `tanggalkhitan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `namalengkap`, `noktp`, `hubungan`, `alamat`, `RTRW`, `kelurahankecamatan`, `kabkota`, `telepon`, `email`, `pendidikan`, `namaanak`, `umur`, `riwayat`, `metode`, `tanggalkhitan`) VALUES
(2, 'bagus', '35020125545510', 'Ayah', 'krian', NULL, 'krian', 'sidoarjo', '0151131461', 'karimamufidah@gmail.com', 'S1/S2', 'rima', '11', 'Ada', 'Standar', '2018-05-01'),
(3, 'Gushan', '54546184128466', 'Ayah', 'bbajbs', '02/11', 'ishdaodas', 'darjo', '21164646464', 'karimamufidah@gmail.com', 'S1/S2', 'gahsaish', '85', 'Tidak Ada', 'Cauter/Laser', '2018-05-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
