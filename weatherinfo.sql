-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 02:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accion`
--

-- --------------------------------------------------------

--
-- Table structure for table `weatherinfo`
--

CREATE TABLE `weatherinfo` (
  `id` int(11) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `weather` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `wind` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weatherinfo`
--

INSERT INTO `weatherinfo` (`id`, `cityname`, `weather`, `temp`, `wind`) VALUES
(2, '.london.', '.overcast clouds.', '.59.', '.6.'),
(3, 'london', 'overcast clouds', '59', '6'),
(4, 'karnataka', 'overcast clouds', '80', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weatherinfo`
--
ALTER TABLE `weatherinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weatherinfo`
--
ALTER TABLE `weatherinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
