-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 05:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_sdit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(256) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', 'kelompok1'),
('admin2', 'kelompok1');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_peserta` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_rekening` int(20) NOT NULL,
  `metode_pembayaran` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `upload_bukti` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_peserta`, `email`, `nama_lengkap`, `nomor_rekening`, `metode_pembayaran`, `upload_bukti`) VALUES
(1, 1, 'arie@gmail.com', 'Arie Nur Fauzi', 1234567890, 'BCA', 'Screenshot 2024-04-27 174153.png'),
(2, 2, 'indah@gmail.com', 'Dwi Indah', 1234567990, 'MANDIRI', 'Screenshot 2024-04-27 174153.png'),
(3, 3, 'edwin@gmail.com', 'Gonzalo Higuain', 1234567220, 'BNI', 'default.jpg'),
(4, 4, 'agus@gmail.com', 'Agus Harimurti', 1234567210, 'BCA', 'Screenshot 2024-04-27 174153.png');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_peserta` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `panggilan` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `golongan` varchar(10) DEFAULT NULL,
  `penyakit` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `nomor` varchar(20) DEFAULT NULL,
  `sekolah_asal` varchar(10) DEFAULT NULL,
  `upload_foto` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_peserta`, `email`, `NIK`, `nama`, `panggilan`, `jenis_kelamin`, `tmpt_lahir`, `tgl_lahir`, `golongan`, `penyakit`, `alamat`, `nomor`, `sekolah_asal`, `upload_foto`) VALUES
(1, 'arie@gmail.com', '123456789013', 'Edwin Fauzi', 'Edwin', 'Laki-laki', 'Jakarta', '2020-01-02', 'O', 'Tidak ada', 'Jl. Kawi Raya No. 25', '085710203000', 'TK', NULL),
(2, 'indah@gmail.com', '123456789010', 'Rahayu Kusumawati', 'Rahayu', 'Perempuan', 'Tangerang', '2021-02-03', 'AB', 'Tidak ada', 'Jl. Margonda Raya No. 50', '085710203030', 'PAUD', NULL),
(3, 'edwin@gmail.com', '123456789018', 'Fauzi Bowo', 'Fauzi', 'Laki-laki', 'Cikarang', '2024-05-31', 'A', 'Tidak ada', 'Jl. Margonda Raya II No. 10', '085710203030', 'TK', NULL),
(4, 'agus@gmail.com', '123456789011', 'Agus', 'AHY', 'Laki-laki', 'Depok', '2023-01-02', 'O', 'Tidak ada', 'Jl. Margonda Raya No. 115', '085710203300', 'TK', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id` int(11) NOT NULL,
  `id_peserta` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `upload_kk` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `upload_akte` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `upload_ktp` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id`, `id_peserta`, `email`, `upload_kk`, `upload_akte`, `upload_ktp`) VALUES
(1, 1, 'arie@gmail.com', 'default.jpg', 'download.jpg', 'fas1.jpeg'),
(2, 2, 'indah@gmail.com', 'K5.jpeg', 'download.jpg', 'K1.jpeg'),
(3, 3, 'edwin@gmail.com', 'K1.jpeg', 'luffy3.jpeg', 'luffy.jpeg'),
(4, 4, 'agus@gmail.com', 'K5.jpeg', 'download.jpg', 'fas1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
(1, 'Arie Nur Fauzi', 'arie@gmail.com', '$2y$10$c7/V8ypaF5Q0E3cyHH2WoeT9nW/YygTSCMuKzHhpYjCi6esMxT2DC'),
(2, 'Dwi Indah', 'indah@gmail.com', '$2y$10$xU19q4C75KvV1SYn8guCjO3CZDY3E6NK6xorOTN6426/ftWESovOi'),
(5, 'Edwin Fauzi', 'edwin@gmail.com', '$2y$10$z2QqizV9I4RO7n74bpCRf.72FIL3BrZt9EENCDJHMl1mv5NAUmLuq'),
(6, 'Agus Wibawa', 'agus@gmail.com', '$2y$10$aQHd1g.YTSBmk.EMUcMaveIv935Bb9l4yYvPEMIykAp5RsU27dye6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_peserta` (`id_peserta`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_peserta`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_peserta` (`id_peserta`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
