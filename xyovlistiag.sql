-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 08:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyovlistiag`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name_lasname` varchar(100) NOT NULL,
  `birday` date DEFAULT NULL,
  `cardit` int(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vilage` varchar(1000) DEFAULT NULL,
  `city` varchar(1000) DEFAULT NULL,
  `provin` varchar(1000) DEFAULT NULL,
  `tim` varchar(1000) DEFAULT NULL,
  `numberphome` int(11) DEFAULT NULL,
  `fileupload` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name_lasname`, `birday`, `cardit`, `email`, `password`, `vilage`, `city`, `provin`, `tim`, `numberphome`, `fileupload`) VALUES
('nujsua hawj', NULL, 999999, 'nousainther@gmail.com', '123455', 'thongname', 'pajkading', 'bolibkhansay', ' kuv muaj pheev xw ua yog 4:00-8:00 tsaug ntuj', 2091826096, '20201022149079849.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
