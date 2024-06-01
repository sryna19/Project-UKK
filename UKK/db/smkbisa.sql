-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 11:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkbisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(17) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(9, 'admin', 'admin'),
(10, 'rafli', '123');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idguru` int(17) NOT NULL,
  `nip` int(17) NOT NULL,
  `namaguru` varchar(30) DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `namamapel` enum('BAHASA INDONESIA','MATEMATIKA','PENDIDIKAN KEWARGANEGARAAN','PENDIDIKAN AGAMA ISLAM') NOT NULL,
  `kelas` enum('RPL 1','RPL 2','LOGAM 1','LOGAM 2') NOT NULL,
  `namajurusan` enum('REKAYASA PERANGKAT LUNAK','KIMIA','INSTRUMEN LOGAM','ELEKTRO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idguru`, `nip`, `namaguru`, `jk`, `alamat`, `password`, `namamapel`, `kelas`, `namajurusan`) VALUES
(7, 3211, 'Pak Faisal', 'laki-laki', 'Cimanggu', '1234', 'BAHASA INDONESIA', 'RPL 1', 'REKAYASA PERANGKAT LUNAK'),
(8, 4321, 'Bu Enung', 'perempuan', 'ciherang', '123', 'PENDIDIKAN AGAMA ISLAM', 'RPL 2', 'REKAYASA PERANGKAT LUNAK');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kdjurusan` int(17) NOT NULL,
  `namajurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kdjurusan`, `namajurusan`) VALUES
(1, 'KIMIA'),
(2, 'ELEKTRO'),
(4, 'LAS'),
(5, 'RPL'),
(7, 'LOGAM'),
(9, 'MESIN');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `kelas` int(17) DEFAULT NULL,
  `namakelas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `kelas`, `namakelas`) VALUES
(6, 12, 'RPL 2'),
(7, 12, 'RPL 1');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_m` int(17) NOT NULL,
  `namamapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_m`, `namamapel`) VALUES
(14, 'BAHASA INDONESIA'),
(15, 'MATEMATIKA'),
(16, 'PENDIDIKAN KEWARGANEGARAAN'),
(17, 'PENDIDIKAN AGAMA ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nisn` int(17) DEFAULT NULL,
  `idnilai` int(17) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `namajurusan` varchar(100) NOT NULL,
  `nip` int(17) NOT NULL,
  `namamapel` varchar(30) DEFAULT NULL,
  `uh` int(10) DEFAULT NULL,
  `uas` int(10) DEFAULT NULL,
  `uts` int(10) DEFAULT NULL,
  `na` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nisn`, `idnilai`, `kelas`, `namajurusan`, `nip`, `namamapel`, `uh`, `uas`, `uts`, `na`) VALUES
(321, 27, 'RPL 1', 'REKAYASA PERANGKAT LUNAK', 3211, 'BAHASA INDONESIA', 90, 87, 78, 85),
(1234, 36, 'RPL 1', 'REKAYASA PERANGKAT LUNAK', 3211, 'BAHASA INDONESIA', 90, 76, 98, 88),
(5561, 40, 'LOGAM 1', 'INSTRUMEN LOGAM', 4321, 'PENDIDIKAN AGAMA ISLAM', 97, 89, 87, 91);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int(17) NOT NULL,
  `nisn` int(17) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `kelas` enum('RPL 1','RPL 2','LOGAM 1','LOGAM 2') NOT NULL,
  `namajurusan` enum('REKAYASA PERANGKAT LUNAK','KIMIA','INSTRUMEN LOGAM','ELEKTRO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `nisn`, `nama`, `jk`, `alamat`, `password`, `kelas`, `namajurusan`) VALUES
(1, 321, 'surdi', 'perempuan', 'Kirab Remaja', '321', 'RPL 2', 'REKAYASA PERANGKAT LUNAK'),
(3, 1234, 'Rafli', 'laki-laki', 'Pedati', '123', 'RPL 2', 'REKAYASA PERANGKAT LUNAK'),
(4, 4321, 'Ridwan', 'laki-laki', 'wanaherang', '123', 'RPL 2', 'REKAYASA PERANGKAT LUNAK'),
(5, 5561, 'Bagas', 'laki-laki', 'ciherang', '123', 'LOGAM 1', 'INSTRUMEN LOGAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kdjurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_m`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `idguru` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `kdjurusan` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_m` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
