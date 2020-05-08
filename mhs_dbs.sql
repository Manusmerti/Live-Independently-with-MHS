-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 03:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_dbs`
--

CREATE TABLE `application_dbs` (
  `applicationID` int(255) NOT NULL,
  `applicationDate` int(255) NOT NULL,
  `requiredMonth` varchar(255) NOT NULL,
  `requiredYear` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `residenceID` int(255) NOT NULL,
  `officerID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `housingofficer`
--

CREATE TABLE `housingofficer` (
  `officerID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setupnewresidence`
--

CREATE TABLE `setupnewresidence` (
  `residenceID` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `unitsNum` int(255) NOT NULL,
  `unitSize` decimal(21,0) NOT NULL,
  `monthlyRental` decimal(21,0) NOT NULL,
  `officerID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setupnewresidence`
--

INSERT INTO `setupnewresidence` (`residenceID`, `address`, `unitsNum`, `unitSize`, `monthlyRental`, `officerID`) VALUES
(1, '', 0, '0', '0', 22),
(2, '', 0, '0', '0', 2),
(3, 'Kuala Lumpur', 20, '7', '250', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`) VALUES
(2, 'sub01', '$2y$10$hGfNWQha8BUl4E1fz5/F0eEPcl/s6/OvZZqsETBFXhP.3tZGf0pNS', 'subname01'),
(3, 'staff001', '$2y$10$TYOU4.y1ANjZLNqO9Lf.7ubMQSTsaEz.YYJKC.YE4oxj3nj2FvcQ2', 'staff001'),
(4, 'Manusmerti', '$2y$10$wUf7X6.sgtW.JqmcKZGXJOjoe2/2aFiEKNyeIl3IxmYN2T63ixEn2', 'Manusmerti Satari'),
(5, 'officerhouse', '$2y$10$Zich0wd0o9zFPG2p8Kr8MOZzhE19lg9fU4T8PSx3R.8EfkK3/er16', 'Made Adi Manusmerti Satari'),
(6, 'houseofficer', '$2y$10$YMM5PnHf4amKeOFRqgsCauP0KRA8nh9HOmUrXXYiCa3hU4hLp.B32', 'Made Adi Manusmerti Satari'),
(7, 'officerhouse', '$2y$10$FbqB31.BTcHs6IzVe6j3duwGcUIl5pdXZwRSkwiKpa9RaNW6xJWGu', 'Made Adi Manusmerti Satari'),
(8, 'gulu', '$2y$10$MIppMI3QFPrqriwgfoljzeBthUT2/fC2zTVDXTZTFe1SnRNfEt9CG', 'gulugulu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_dbs`
--
ALTER TABLE `application_dbs`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indexes for table `housingofficer`
--
ALTER TABLE `housingofficer`
  ADD PRIMARY KEY (`officerID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `setupnewresidence`
--
ALTER TABLE `setupnewresidence`
  ADD PRIMARY KEY (`residenceID`),
  ADD KEY `officerID` (`officerID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setupnewresidence`
--
ALTER TABLE `setupnewresidence`
  MODIFY `residenceID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
