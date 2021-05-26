-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 04:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bktamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keperluan` varchar(250) NOT NULL,
  `tgl` varchar(15) NOT NULL,
  `wkt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`no`, `nama`, `no_hp`, `email`, `keperluan`, `tgl`, `wkt`) VALUES
(1, 'Aditya Tri', '085213402300', 'adittrih08@gmail.com', 'Meeting', '26-05-2021', '09:39:58 PM'),
(2, 'Anggun ', '081292519273', 'guns88@gmail.com', 'Event', '26-05-2021', '09:41:48 PM'),
(3, 'Jovanka', '08967825401', 'jojo99@gmail.com', 'Bertemu HRD', '26-05-2021', '09:42:39 PM'),
(4, 'Yani Susanti', '08582916582', 'yanis04@gmail.com', 'Meeting', '26-05-2021', '09:43:12 PM'),
(5, 'Malika Putri', '08782715293', 'putrimalika@gmail.com', 'Event', '26-05-2021', '09:43:53 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
