-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 03:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pelajar`
--

CREATE TABLE `info_pelajar` (
  `id` int(3) NOT NULL,
  `no_ndp` int(9) NOT NULL,
  `nama_pelajar` varchar(50) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pelajar`
--

INSERT INTO `info_pelajar` (`id`, `no_ndp`, `nama_pelajar`, `no_kp`, `jantina`, `no_hp`, `email`, `alamat`) VALUES
(1, 23221132, 'HANIF FAISAL BIN HASMAZI', '20723081107', 'Lelaki', '601111411173', 'aina@gmail.com', 'Lot 1204,Belakang Masjid Palekbang, 16040,Tumpat,Kelantan.'),
(2, 23221100, 'ISHUAARIYAA A/P KRISHA', '30723081107', 'Lelaki', '0169520918', 'najwa@gmail.com', 'No 1A Kampung Sungai Dadeh, Temoh Stesen, 35350,Temoh,Perak.'),
(3, 23221084, 'AINA ATIKAH BINTI MOHD AZHAR', '20828160168', 'Perempuan', '01162190345', 'allyssa@gmail.com', 'Lot 1033 No 8 Lorong 4 Kg Merbau Sempak, 47000, Sungai Buloh, Selangor.'),
(4, 23221102, 'AINA NAJWA BINTI AMRAN', '21013031452', 'Perempuan', '01133688927', 'faisal@gmail.com', '53 laluan Intan Kanthan Desa 3 Intan Kanthan, 31200, Chemor,Perak.'),
(5, 23221157, 'ALLYSSA BINTI ABDULLAH', '31206140104', 'Perempuan', '0133138765', 'ishu@gmail.com', 'No 43 Jalan Pualam 7/32, Seksyen 7, 40000, Shah Alam, Selangor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pelajar`
--
ALTER TABLE `info_pelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
