-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 02:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_undian`
--

-- --------------------------------------------------------

--
-- Table structure for table `hadiah`
--

CREATE TABLE `hadiah` (
  `id_hdh` int(11) NOT NULL,
  `nama_hdh` text NOT NULL,
  `jmlh_hdh` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hadiah`
--

INSERT INTO `hadiah` (`id_hdh`, `nama_hdh`, `jmlh_hdh`) VALUES
(2, 'Sepeda Motor Honda Beat', 1),
(3, 'Smartphone Xiaomi Redmi Note 9', 9);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_psrt` int(11) NOT NULL,
  `no_psrt` varchar(30) NOT NULL,
  `nm_psrt` varchar(100) NOT NULL,
  `stts_psrt` int(1) NOT NULL,
  `hdh_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_psrt`, `no_psrt`, `nm_psrt`, `stts_psrt`, `hdh_id`) VALUES
(1, '27489888', 'Cornelia Namaga', 1, 2),
(2, '87921397', 'Mila Suryatmi', 1, 2),
(3, '48857048', 'Ganep Anggriawan S.Sos', 0, 0),
(4, '63289060', 'Omar Hartana Saragih', 1, 3),
(5, '23096905', 'Shakila Novi Permata', 0, 0),
(6, '56579536', 'Legawa Wacana', 0, 0),
(7, '00732079', 'Fathonah Mandasari', 0, 0),
(8, '48105583', 'Wirda Suryatmi', 0, 0),
(9, '74115693', 'Wadi Pradana', 0, 0),
(10, '91994929', 'Citra Unjani Anggraini S.Pd', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hadiah`
--
ALTER TABLE `hadiah`
  ADD PRIMARY KEY (`id_hdh`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_psrt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hadiah`
--
ALTER TABLE `hadiah`
  MODIFY `id_hdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_psrt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
