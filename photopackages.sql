-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 07:46 AM
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
-- Table structure for table `photopackages`
--

CREATE TABLE `photopackages` (
  `userId` varchar(10) NOT NULL,
  `pkgId` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photopackages`
--

INSERT INTO `photopackages` (`userId`, `pkgId`, `name`, `image`, `price`, `hours`, `capacity`, `description`, `status`, `created`, `modified`) VALUES
('VEN001', 1, 'Preshoot Package 01', '', 20000, 0, 0, '12 x 15 Magazine Album\r\n30 Pages\r\nTwo Tone Album Cover & Box', 1, '2020-02-14', '2020-02-14'),
('VEN001', 2, 'Preshoot Package 02\r\n', '', 35000, 0, 0, '8 x 20 Story Book With UV Laminating\r\n20 Pages\r\nTwo Tone Album Cover & Box', 1, '2020-02-07', '2020-02-14'),
('VEN001', 3, 'Platinum  Package', '', 90000, 0, 0, '12 x 30 Album\r\n50 Pages\r\n03 - 16 x 24 Framed Photos\r\n06 - 12 x 18 Enlarged Photos Without Frame\r\nThank You Card Options\r\n200 - 6 x 6 Double Side Thank You Cards or\r\n200 - 6 x 8 Single Side Thank You Cards\r\n8x12 Family Album with 100 Photos\r\n50 Page Mini A', 1, '2020-02-14', '2020-02-14'),
('VEN001', 4, 'Elegant Package', '', 100000, 0, 0, '12 x 30 Album\r\n50 Pages\r\n03 - 16 x 24 Framed Photos\r\n06 - 12 x 18 Enlarged Photos Without Frame\r\nThank You Card Options\r\n200 - 6 x 6 Double Side Thank You Cards or\r\n200 - 6 x 8 Single Side Thank You Cards\r\n8x12 Family Album with 100 Photos\r\n50 Page Mini A', 1, '2020-02-14', '2020-02-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photopackages`
--
ALTER TABLE `photopackages`
  ADD PRIMARY KEY (`pkgId`,`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photopackages`
--
ALTER TABLE `photopackages`
  MODIFY `pkgId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
