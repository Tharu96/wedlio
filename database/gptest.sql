-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 08:24 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userId` varchar(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userId`, `firstName`, `lastName`, `contactNo`, `address`, `nic`, `image`) VALUES
('ADM001', 'Chethani', 'Wijesekara', '0774051964', 'Kalutara', '966592010v', 'abc\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(10) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userId` varchar(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dateOfBirth` date NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userId`, `firstName`, `lastName`, `contactNo`, `nic`, `address`, `gender`, `image`, `dateOfBirth`, `createdAt`) VALUES
('CUS001', 'test', 'test', 'test', 'test', 'test', 'test', NULL, '1996-06-07', '2020-01-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `userId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `priceRange` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `weddingActivity` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prefphotography`
--

CREATE TABLE `prefphotography` (
  `prefId` varchar(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `priceRange` varchar(255) NOT NULL,
  `district` varchar(255) DEFAULT NULL,
  `weddingActivity` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userRole` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `email`, `password`, `userRole`, `status`, `level`, `createdAt`) VALUES
('ADM001', 'chethaniwijesekara@gmail.com', '1234', 'admin', 1, 1, '2020-01-13 00:00:00'),
('CUS001', 'test@123', '1234', 'customer', 1, 3, '2020-01-13 00:00:00'),
('VEN001', 'ventest@123', '1234', 'vendor', 1, 2, '2020-01-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `userId` varchar(11) NOT NULL,
  `businessName` varchar(255) NOT NULL,
  `businessDescription` varchar(255) NOT NULL,
  `companyWebsite` varchar(255) NOT NULL,
  `companyAddress` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `businessContactNo` varchar(255) NOT NULL,
  `companyDescription` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `contactNo` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendortemp`
--

CREATE TABLE `vendortemp` (
  `tempId` int(11) NOT NULL,
  `businessEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `businessName` varchar(255) NOT NULL,
  `businessDescription` varchar(255) NOT NULL,
  `companyWebsite` varchar(255) NOT NULL,
  `businessAddress` varchar(255) DEFAULT NULL,
  `district` varchar(255) NOT NULL,
  `companyDescription` varchar(255) NOT NULL,
  `businessContactNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendortemp`
--

INSERT INTO `vendortemp` (`tempId`, `businessEmail`, `password`, `businessName`, `businessDescription`, `companyWebsite`, `businessAddress`, `district`, `companyDescription`, `businessContactNo`, `firstName`, `lastName`, `contactEmail`, `contactNo`, `nic`, `createdAt`) VALUES
(1, 'chethaniwijesekara@gmail.com', '$2y$10$fh0axicGP5IC0Vw2aBZZrezESWBGHB9sZbNa59moS.F7POeFt/Raa', 'University of Colombo School of Computing', 'University of Colombo School of Computing', 'https://wedlio.com', '72, North Sri Sumangala Road, Kalutara North.', '10', 'University of Colombo School of Computing', '0774051964', 'Chethani', 'Wijesekara', 'chethaniwijesekara@gmail.com', '0774051964', '966592010v', '2020-01-14 10:34:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `prefphotography`
--
ALTER TABLE `prefphotography`
  ADD PRIMARY KEY (`prefId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `vendortemp`
--
ALTER TABLE `vendortemp`
  ADD PRIMARY KEY (`tempId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendortemp`
--
ALTER TABLE `vendortemp`
  MODIFY `tempId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
