-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 05:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_individu`
--

CREATE TABLE `data_individu` (
  `id_di` int(50) NOT NULL,
  `Namadi` text NOT NULL,
  `Nokk` int(30) NOT NULL,
  `Paspordi` int(30) NOT NULL,
  `Jeniskelamindi` text NOT NULL,
  `Tempatlahirdi` text NOT NULL,
  `Tanggaldi` int(50) NOT NULL,
  `Umurdi` int(3) NOT NULL,
  `Noaktadi` int(50) NOT NULL,
  `Goldardi` text NOT NULL,
  `Agamadi` text NOT NULL,
  `Statusdi` text NOT NULL,
  `Pendidikandi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_di` int(50) NOT NULL,
  `Namakk` text NOT NULL,
  `Alamatdi` text NOT NULL,
  `Alamat` text NOT NULL,
  `Pos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_keluarga`
--

INSERT INTO `data_keluarga` (`id_di`, `Namakk`, `Alamatdi`, `Alamat`, `Pos`) VALUES
(1, 'agdg', '', '', 0),
(2, 'agdg', '', '', 0),
(3, 'agdg', '', '', 0),
(4, 'agdg', 'nvdg', 'ffrytry', 1122),
(5, 'agdg', 'nvdg', 'ffrytry', 1122),
(6, 'agdg', 'nvdg', 'ffrytry', 1122);

-- --------------------------------------------------------

--
-- Table structure for table `data_orangtua`
--

CREATE TABLE `data_orangtua` (
  `id_di` int(50) NOT NULL,
  `Namaibu` text NOT NULL,
  `Nikibu` int(20) NOT NULL,
  `Namaayah` text NOT NULL,
  `Nikayah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_individu`
--
ALTER TABLE `data_individu`
  ADD PRIMARY KEY (`id_di`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_di`);

--
-- Indexes for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  ADD PRIMARY KEY (`id_di`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_individu`
--
ALTER TABLE `data_individu`
  MODIFY `id_di` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_di` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  MODIFY `id_di` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
