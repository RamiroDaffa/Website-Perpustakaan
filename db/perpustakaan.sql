-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2025 at 02:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `email`, `alamat`, `status`, `tanggal_lahir`, `jenis_kelamin`) VALUES
(1, 'Daffa', 'daffa@gmail.com', 'Cikarang', 'Aktif', '2002-04-11', 'Laki-Laki'),
(2, 'Ramiro', 'ramiro@gmail.com', 'Cikarang', 'Aktif', '2004-09-04', 'Laki-Laki'),
(3, 'Ramiel', 'ramiel@gmail.com', 'Bekasi', 'Aktif', '2010-08-10', 'Laki-Laki'),
(4, 'Putri', 'putri12@gmail.com', 'Cileungsi', 'Tidak Aktif', '2004-03-16', 'Perempuan'),
(6, 'putra', 'putra12@gmail.com', 'Jakarta Barat', 'Tidak Aktif', '2008-07-16', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int NOT NULL,
  `daftar_pustaka` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `daftar_pustaka`) VALUES
(1, 'Ilmu Pengetahuan Alam', 'Sir M', 'Erlangga', 2014, 'Anjarsari, P. 2013. Pengembangan Pembelajaran IPA Terpadu'),
(2, 'Ilmu Pengetahuan Sosial', 'Sir O', 'Erlangga', 2014, 'Firmansyah, Herlan. 2009. Ilmu Pengetahuan Sosial 2'),
(3, 'Pendidikan Jasmani', 'Sir P', 'Erlangga', 2014, 'Harsono. 2004. Perencanaan Program Latihan. Bandung: UPI'),
(4, 'Seni Budaya', 'Sir B', 'Erlangga', 2014, 'Pusat Bahasa Departemen Pendidikan Nasional. (2005). '),
(7, 'Seni Budaya', 'Sir B', 'Erlangga', 2014, 'Pusat Bahasa Departemen Pendidikan Nasional. (2005). Kamus besar bahasa Indonesia edisi ketiga. Jakarta: Balai Pustaka.'),
(8, 'Bahasa Indonesia', 'Sir M', 'Erlanggas', 2014, 'Pusat Bahasa Departemen Pendidikan Nasional. (2005). Kamus besar bahasa Indonesia edisi ketiga. Jakarta: Balai Pustaka');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tanggal_pinjam` varchar(100) NOT NULL,
  `tanggal_kembali` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama_anggota`, `judul_buku`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 'Ramiro', 'Ilmu Pengetahuan Alam', '2025-01-10', '2025-01-13'),
(2, 'Daffa', 'Ilmu Pengetahuan Sosial', '2025-01-05', '2025-01-14'),
(4, 'Ramiel', 'Seni Budaya', '2025-01-14', '2025-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tanggal_kembali` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `nama_anggota`, `judul_buku`, `tanggal_kembali`) VALUES
(1, 'Ramiro', 'Ilmu Pengetahuan Alam', '2025-01-13'),
(2, 'Daffa', 'Ilmu Pengetahuan Sosial', '2025-01-14'),
(5, 'Ramiel', 'Pendidikan Jasmani', '2025-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(5, 'admin', 'admin@gmail.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9'),
(9, 'ramiro', 'ramiro@gmail.com', 'd105f3487561c57f0f3c75dff50180c6278506e28cc134232f182fc767b43cd1'),
(10, 'daffa', 'daffa@gmail.com', '34543d390913f892737fde76c849167bca82086e0a6b09b8ca63cb6dbe359281'),
(11, 'Testing', 'Tester123@gmail.com', '6eb6b3aea6e4477d3de1751541d7da83c0deddec0bd7f34f77966c3660b3f1ea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
