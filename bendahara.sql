-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2018 at 11:45 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bendahara`
--

-- --------------------------------------------------------

--
-- Table structure for table `bendahara_kasHMJ`
--

CREATE TABLE `bendahara_kasHMJ` (
  `idKasHmj` int(10) NOT NULL,
  `totalKasHmj` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bendahara_kasPH`
--

CREATE TABLE `bendahara_kasPH` (
  `idKasPh` int(10) NOT NULL,
  `totalKasPH` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bendahara_kasPH`
--

INSERT INTO `bendahara_kasPH` (`idKasPh`, `totalKasPH`) VALUES
(1, '8000');

-- --------------------------------------------------------

--
-- Table structure for table `bendahara_lap_kasPH`
--

CREATE TABLE `bendahara_lap_kasPH` (
  `idPengeluaranKasPh` int(10) NOT NULL,
  `jumPengeluaranKasPh` decimal(10,0) NOT NULL,
  `keperluanPengeluaranKasPh` varchar(30) NOT NULL,
  `tglKasDigunakan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bendahara_lap_kasPH`
--

INSERT INTO `bendahara_lap_kasPH` (`idPengeluaranKasPh`, `jumPengeluaranKasPh`, `keperluanPengeluaranKasPh`, `tglKasDigunakan`) VALUES
(5, '500', 'makanan enaks e', '2018-01-27 14:29:15'),
(6, '100000', 'membeli kado buat nikahan', '2018-01-27 14:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `bendahara_tabunganPH`
--

CREATE TABLE `bendahara_tabunganPH` (
  `idTabPH` int(10) NOT NULL,
  `namaPH` varchar(50) NOT NULL,
  `npk` varchar(30) NOT NULL,
  `tabungan` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bendahara_tabunganPH`
--

INSERT INTO `bendahara_tabunganPH` (`idTabPH`, `namaPH`, `npk`, `tabungan`) VALUES
(1, 'irfangi', 'HMJ/TI/XII/15-16/206', '483000'),
(3, 'bilal', 'HMJ/TI/XIII/16-17/225', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bendahara_kasHMJ`
--
ALTER TABLE `bendahara_kasHMJ`
  ADD PRIMARY KEY (`idKasHmj`);

--
-- Indexes for table `bendahara_kasPH`
--
ALTER TABLE `bendahara_kasPH`
  ADD PRIMARY KEY (`idKasPh`);

--
-- Indexes for table `bendahara_lap_kasPH`
--
ALTER TABLE `bendahara_lap_kasPH`
  ADD PRIMARY KEY (`idPengeluaranKasPh`);

--
-- Indexes for table `bendahara_tabunganPH`
--
ALTER TABLE `bendahara_tabunganPH`
  ADD PRIMARY KEY (`idTabPH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bendahara_kasHMJ`
--
ALTER TABLE `bendahara_kasHMJ`
  MODIFY `idKasHmj` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bendahara_kasPH`
--
ALTER TABLE `bendahara_kasPH`
  MODIFY `idKasPh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bendahara_lap_kasPH`
--
ALTER TABLE `bendahara_lap_kasPH`
  MODIFY `idPengeluaranKasPh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bendahara_tabunganPH`
--
ALTER TABLE `bendahara_tabunganPH`
  MODIFY `idTabPH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
