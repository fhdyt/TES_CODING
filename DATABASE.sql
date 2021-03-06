-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2021 at 04:00 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TEST`
--

-- --------------------------------------------------------

--
-- Table structure for table `BIODATA`
--

CREATE TABLE `BIODATA` (
  `BIODATA_ID` int NOT NULL,
  `USER_EMAIL` varchar(50) DEFAULT NULL,
  `BIODATA_POSISI` varchar(50) DEFAULT NULL,
  `BIODATA_NAMA` varchar(50) DEFAULT NULL,
  `BIODATA_KTP` varchar(50) DEFAULT NULL,
  `BIODATA_TEMPAT_LAHIR` varchar(50) DEFAULT NULL,
  `BIODATA_TANGGAL_LAHIR` varchar(50) DEFAULT NULL,
  `BIODATA_JENIS_KELAMIN` varchar(50) DEFAULT NULL,
  `BIODATA_AGAMA` varchar(50) DEFAULT NULL,
  `BIODATA_GOLONGAN_DARAH` varchar(50) DEFAULT NULL,
  `BIODATA_STATUS` varchar(50) DEFAULT NULL,
  `BIODATA_ALAMAT_KTP` text,
  `BIODATA_ALAMAT_TINGGAL` text,
  `BIODATA_EMAIL` varchar(50) DEFAULT NULL,
  `BIODATA_TELP` varchar(50) DEFAULT NULL,
  `BIODATA_ORANG_TERDEKAT` varchar(50) DEFAULT NULL,
  `BIODATA_SKILL` varchar(50) DEFAULT NULL,
  `BIODATA_BERSEDIA_DITEMPATKAN` varchar(50) DEFAULT NULL,
  `BIODATA_PENGHASILAN` varchar(50) DEFAULT NULL,
  `RECORD_STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `BIODATA`
--

INSERT INTO `BIODATA` (`BIODATA_ID`, `USER_EMAIL`, `BIODATA_POSISI`, `BIODATA_NAMA`, `BIODATA_KTP`, `BIODATA_TEMPAT_LAHIR`, `BIODATA_TANGGAL_LAHIR`, `BIODATA_JENIS_KELAMIN`, `BIODATA_AGAMA`, `BIODATA_GOLONGAN_DARAH`, `BIODATA_STATUS`, `BIODATA_ALAMAT_KTP`, `BIODATA_ALAMAT_TINGGAL`, `BIODATA_EMAIL`, `BIODATA_TELP`, `BIODATA_ORANG_TERDEKAT`, `BIODATA_SKILL`, `BIODATA_BERSEDIA_DITEMPATKAN`, `BIODATA_PENGHASILAN`, `RECORD_STATUS`) VALUES
(1, 'user@gmail.com', 'POSISI', 'NAMA', 'KTP', 'TEMPAT LAHIR', '2021-12-31', 'pria', 'AGAMA', 'GOLONGAN DARAH', 'STATUS', 'ALAMAT KTP', 'ALAMAT TINGGAL', 'EMAIL@GMAIL.COM', 'NO TELP', 'ORANG TERDEKAT', 'SKIL', 'ya', 'PENGHASILAN', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `PEKERJAAN`
--

CREATE TABLE `PEKERJAAN` (
  `PEKERJAAN_ID` int NOT NULL,
  `USER_EMAIL` varchar(50) NOT NULL DEFAULT '0',
  `PEKERJAAN_NAMA` varchar(50) NOT NULL DEFAULT '0',
  `PEKERJAAN_POSISI` varchar(50) NOT NULL DEFAULT '0',
  `PEKERJAAN_PENDAPATAN` varchar(255) NOT NULL DEFAULT '0',
  `PEKERJAAN_TAHUN` varchar(50) NOT NULL DEFAULT '0',
  `RECORD_STATUS` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `PEKERJAAN`
--

INSERT INTO `PEKERJAAN` (`PEKERJAAN_ID`, `USER_EMAIL`, `PEKERJAAN_NAMA`, `PEKERJAAN_POSISI`, `PEKERJAAN_PENDAPATAN`, `PEKERJAAN_TAHUN`, `RECORD_STATUS`) VALUES
(1, 'user@gmail.com', 'PEKERJAAN', 'PEKERJAAN', 'PEKERJAAN', 'PEKERJAAN', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `PELATIHAN`
--

CREATE TABLE `PELATIHAN` (
  `PELATIHAN_ID` int NOT NULL,
  `USER_EMAIL` varchar(50) NOT NULL DEFAULT '0',
  `PELATIHAN_SERTIFIKAT` varchar(50) NOT NULL DEFAULT '0',
  `PELATIHAN_NAMA` varchar(255) NOT NULL DEFAULT '0',
  `PELATIHAN_TAHUN` varchar(50) NOT NULL DEFAULT '0',
  `RECORD_STATUS` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PELATIHAN`
--

INSERT INTO `PELATIHAN` (`PELATIHAN_ID`, `USER_EMAIL`, `PELATIHAN_SERTIFIKAT`, `PELATIHAN_NAMA`, `PELATIHAN_TAHUN`, `RECORD_STATUS`) VALUES
(1, 'user@gmail.com', 'tidak', 'PELATIHAN', 'PELATIHAN', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `PENDIDIKAN`
--

CREATE TABLE `PENDIDIKAN` (
  `PENDIDIKAN_ID` int NOT NULL,
  `USER_EMAIL` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_TERAKHIR` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_AKADEMIK` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_JURUSAN` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_TAHUN_LULUS` varchar(50) DEFAULT NULL,
  `PENDIDIKAN_IPK` varchar(50) DEFAULT NULL,
  `RECORD_STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PENDIDIKAN`
--

INSERT INTO `PENDIDIKAN` (`PENDIDIKAN_ID`, `USER_EMAIL`, `PENDIDIKAN_TERAKHIR`, `PENDIDIKAN_AKADEMIK`, `PENDIDIKAN_JURUSAN`, `PENDIDIKAN_TAHUN_LULUS`, `PENDIDIKAN_IPK`, `RECORD_STATUS`) VALUES
(1, 'user@gmail.com', 'PENDIDIKAN', 'PENDIDIKAN', 'PENDIDIKAN', 'PENDIDIKAN', 'PENDIDIKAN', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `USER_ID` int NOT NULL,
  `USER_EMAIL` varchar(50) DEFAULT NULL,
  `USER_PASSWORD` text,
  `USER_LEVEL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`USER_ID`, `USER_EMAIL`, `USER_PASSWORD`, `USER_LEVEL`) VALUES
(1, 'admin@gmail.com', '$2y$10$sHFVAdhvNMb26hILeebM5O2Tma3qpkbWuFytPmGqf2yUDs.SREWXi', 'admin'),
(2, 'user@gmail.com', '$2y$10$sHFVAdhvNMb26hILeebM5O2Tma3qpkbWuFytPmGqf2yUDs.SREWXi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BIODATA`
--
ALTER TABLE `BIODATA`
  ADD PRIMARY KEY (`BIODATA_ID`);

--
-- Indexes for table `PEKERJAAN`
--
ALTER TABLE `PEKERJAAN`
  ADD PRIMARY KEY (`PEKERJAAN_ID`);

--
-- Indexes for table `PELATIHAN`
--
ALTER TABLE `PELATIHAN`
  ADD PRIMARY KEY (`PELATIHAN_ID`);

--
-- Indexes for table `PENDIDIKAN`
--
ALTER TABLE `PENDIDIKAN`
  ADD PRIMARY KEY (`PENDIDIKAN_ID`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BIODATA`
--
ALTER TABLE `BIODATA`
  MODIFY `BIODATA_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PEKERJAAN`
--
ALTER TABLE `PEKERJAAN`
  MODIFY `PEKERJAAN_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PELATIHAN`
--
ALTER TABLE `PELATIHAN`
  MODIFY `PELATIHAN_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PENDIDIKAN`
--
ALTER TABLE `PENDIDIKAN`
  MODIFY `PENDIDIKAN_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `USER_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
