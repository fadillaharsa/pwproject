-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 03:11 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reclema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id_formulir` int(11) NOT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `id_lowongan` int(11) NOT NULL,
  `npm` char(20) NOT NULL,
  `posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `username_lembaga` varchar(50) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `email_lembaga` varchar(50) NOT NULL,
  `password_lembaga` varchar(100) NOT NULL,
  `prodi_lembaga` varchar(50) DEFAULT NULL,
  `fakultas_lembaga` varchar(50) DEFAULT NULL,
  `lingkup_lembaga` char(20) DEFAULT NULL,
  `alamat_lembaga` varchar(100) DEFAULT NULL,
  `kategori_lembaga` char(20) NOT NULL,
  `kontak_lembaga` varchar(100) DEFAULT NULL,
  `logo_lembaga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `nama_lowongan` varchar(50) NOT NULL,
  `kategori_lowongan` char(20) NOT NULL,
  `lingkup_lowongan` char(20) NOT NULL,
  `prodi_lowongan` varchar(50) NOT NULL,
  `fakultas_lowongan` varchar(50) NOT NULL,
  `deskripsi_lowongan` text NOT NULL,
  `kontak_lowongan` varchar(100) NOT NULL,
  `username_lembaga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(20) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `email_mahasiswa` varchar(50) NOT NULL,
  `password_mahasiswa` varchar(100) NOT NULL,
  `no_hp_mahasiswa` int(15) DEFAULT NULL,
  `prodi_mahasiswa` varchar(50) DEFAULT NULL,
  `fakultas_mahasiswa` varchar(50) DEFAULT NULL,
  `angkatan_mahasiswa` int(4) DEFAULT NULL,
  `alamat_mahasiswa` varchar(100) DEFAULT NULL,
  `foto_mahasiswa` varchar(100) DEFAULT NULL,
  `kontak_mahasiswa` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_mahasiswa`, `email_mahasiswa`, `password_mahasiswa`, `no_hp_mahasiswa`, `prodi_mahasiswa`, `fakultas_mahasiswa`, `angkatan_mahasiswa`, `alamat_mahasiswa`, `foto_mahasiswa`, `kontak_mahasiswa`, `jenis_kelamin`) VALUES
('140810170005', 'Muhammad Fadillah Arsa', 'arsabandung@gmail.com', 'arsaganteng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_formulir`),
  ADD KEY `npm` (`npm`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`username_lembaga`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `username_lembaga` (`username_lembaga`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formulir`
--
ALTER TABLE `formulir`
  ADD CONSTRAINT `formulir_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `formulir_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`username_lembaga`) REFERENCES `lembaga` (`username_lembaga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
