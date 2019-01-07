-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 04:25 AM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `email_admin`, `password_admin`, `nama_admin`) VALUES
('admin', 'mail@gmail.com', 'password', 'admin');

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

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id_formulir`, `cv`, `id_lowongan`, `npm`, `posisi`) VALUES
(1, 'saya hebat. percaya saya', 1, '14081017000', 'Ketua'),
(4, 'Makalah_Rabin_Karp_-_NPM_05,_07,_45,_53.pdf', 21, '140810170005', 'Bawah'),
(5, 'TUGAS_2-Program_Pers_NonLinier(1).pdf', 25, '140810170005', 'ketua'),
(6, 'Penggunaan_Algoritma_Rabin-Karp_dalam_Pe.pdf', 28, '140810170005', 'Bagus'),
(7, '02-_Array_and_String.pdf', 24, '140810170005', 'Bagus');

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

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`username_lembaga`, `nama_lembaga`, `email_lembaga`, `password_lembaga`, `prodi_lembaga`, `fakultas_lembaga`, `lingkup_lembaga`, `alamat_lembaga`, `kategori_lembaga`, `kontak_lembaga`, `logo_lembaga`) VALUES
('bemunpad', 'BEM Unpad', 'bemunpad@gmail.com', 'bemunpad', NULL, NULL, NULL, NULL, 'Lembaga', NULL, NULL),
('bpmhimatif', 'bpmhimatif', 'bpmhimatif@gmail.com', 'bpmhimatif', 'Aku', 'MIPA', 'Jurusan', 'Bandung', 'kepanitiaan', 'Aku', 'IMG_4696(1).jpg'),
('bpmunpad', 'BPM Unpad', 'bpmunpad@gmail.com', 'bpmunpad', NULL, NULL, NULL, NULL, 'Lembaga', NULL, NULL),
('cbshimatif', 'CBS', 'cbs@gmail.com', 'cbshimatif', NULL, NULL, NULL, NULL, 'kepanitiaan', NULL, NULL),
('Hima', 'Himpunan Mahasiswa', 'himpunan@yahoo.com', 'password', 'Ilmu Komputer', 'MIPA', 'Prodi', 'google.com', 'Himpunan', 'ID Line: himpunaneuy', 'img2.jpg');

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

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nama_lowongan`, `kategori_lowongan`, `lingkup_lowongan`, `prodi_lowongan`, `fakultas_lowongan`, `deskripsi_lowongan`, `kontak_lowongan`, `username_lembaga`) VALUES
(1, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(2, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(3, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(4, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(5, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(6, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(7, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(8, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(9, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(10, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(11, 'Perekrutan hima', 'Himpunan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(12, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(13, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(14, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(15, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(16, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(17, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(18, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(19, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(20, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(21, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(22, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(23, 'Perekrutan hima', 'Kepanitiaan', 'Prodi', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(24, 'Perekrutan hima', 'Kepanitiaan', 'Jurusan', 'Ilmu Komputer', 'MIPA', 'Join kuy', 'ID Line: joinhimakuy', 'Hima'),
(25, 'CBS', 'Kepanitiaan', 'Jurusan', 'Teknik Informatika', 'MIPA', 'Ikutan CBS yuk', 'Dateng langsung aja', 'bpmhimatif'),
(26, 'assma', 'Lembaga', 'Fakultas', 'asdasd', 'adsad', 'xzczcz', 'aasdasfaasda', 'bpmhimatif'),
(27, 'alklklasd', 'Lembaga', 'Universitas', 'zxzc', 'asdas', 'asda', 'asdasd', 'bpmhimatif'),
(28, 'a,mskmda', 'Lembaga', 'Universitas', 'kjakjsda', 'nmcnxmzc', 'nxz,nzX', 'knakndaszxx', 'bpmhimatif');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(20) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `email_mahasiswa` varchar(50) NOT NULL,
  `password_mahasiswa` varchar(100) NOT NULL,
  `no_hp_mahasiswa` char(15) DEFAULT NULL,
  `prodi_mahasiswa` varchar(50) DEFAULT NULL,
  `fakultas_mahasiswa` varchar(50) DEFAULT NULL,
  `angkatan_mahasiswa` char(4) DEFAULT NULL,
  `alamat_mahasiswa` varchar(100) DEFAULT NULL,
  `foto_mahasiswa` varchar(100) DEFAULT NULL,
  `kontak_mahasiswa` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama_mahasiswa`, `email_mahasiswa`, `password_mahasiswa`, `no_hp_mahasiswa`, `prodi_mahasiswa`, `fakultas_mahasiswa`, `angkatan_mahasiswa`, `alamat_mahasiswa`, `foto_mahasiswa`, `kontak_mahasiswa`, `jenis_kelamin`) VALUES
('14081017000', 'Burung Jurig', 'aku@gmail.com', 'burungjurig', '081322273798', 'Teknik Informatika', 'MIPA', NULL, 'Bandung', 'himatif.png', 'Line: m_arsa25', 'L'),
('140810170001', 'Burung Jurig', 'akuini@gmail.com', 'burungjurig', '081322273798', 'Teknik Informatika', 'MIPA', '2018', 'Bandung', 'himatif.png', 'Line: m_arsa25', 'L'),
('140810170005', 'Burung Jurig', 'aku@gmail.com', 'burungjurig', '081322273798', 'Teknik Informatika', 'MIPA', '2017', 'Bandung', '1534692837875.jpg', 'Line: m_arsa25', 'L'),
('140810170099', 'Muhammad Luthfiansyah', 'akubau@gmail.com', 'luthfibau', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formulir`
--
ALTER TABLE `formulir`
  ADD CONSTRAINT `formulir_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `formulir_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`),
  ADD CONSTRAINT `formulir_ibfk_3` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `formulir_ibfk_4` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`username_lembaga`) REFERENCES `lembaga` (`username_lembaga`),
  ADD CONSTRAINT `lowongan_ibfk_2` FOREIGN KEY (`username_lembaga`) REFERENCES `lembaga` (`username_lembaga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
