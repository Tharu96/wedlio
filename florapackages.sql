-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 11:56 AM
-- Server version: 5.7.11-log
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedlio`
--

-- --------------------------------------------------------

--
-- Table structure for table `florapackages`
--

CREATE TABLE `florapackages` (
  `pkgId` int(10) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `florapackages`
--

INSERT INTO `florapackages` (`pkgId`, `userId`, `name`, `image`, `price`, `description`, `status`, `created`, `modified`) VALUES
(1, 'VEN014', 'Silver Flora Package', '', '30000', 'Brides full handtied bouquet,                                                                                                         2 bridesmaids handtieds bouquets,\r\nGrooms buttoniere,\r\n5 buttonholes,\r\ntop table jars of gyp and tea light holders,\r\n8 table centres,\r\n3 jars filled with gyp on a rustic log\r\n\r\n ', 1, '2020-02-11', '2020-02-11'),
(2, 'VEN014', 'Gold Flora Package', '', '50000', 'Brides full handtied bouquet,                                                                                                         2 bridesmaids handtieds bouquets,\r\nGrooms buttoniere,\r\n5 buttonholes,\r\ntop table jars of gyp and tea light holders,\r\n8 table centres,\r\n3 jars filled with gyp on a rustic log,\r\nGoldfish bowls with floating roses or Lily vase,\r\nBoth come on mirror plates with tea lights and table gems.\r\n\r\n \r\n\r\n ', 1, '2020-02-11', '2020-02-11'),
(3, 'VEN014', 'Rose Princes Package', '', '80000', 'Brides handtied bouquet of roses and other select flowers or just roses,                                                                                                                    \r\n2 bridesmaids handtied bouquets of roses and select flowers,\r\n1 rose wand for flower girl,\r\nGrooms buttoniere,\r\n8 table centres,\r\nchoice of either champagne glass filled with florist flowers, or dressed  cream crystal candelabra .', 1, '2020-02-11', '2020-02-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `florapackages`
--
ALTER TABLE `florapackages`
  ADD PRIMARY KEY (`pkgId`,`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `florapackages`
--
ALTER TABLE `florapackages`
  MODIFY `pkgId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
