-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 09:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `post` varchar(255) NOT NULL,
  `thumb` text NOT NULL,
  `currentcity` varchar(255) NOT NULL,
  `hometown` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `description`, `post`, `thumb`, `currentcity`, `hometown`) VALUES
(1, 'eoaweg', '', 'uploadp2.jpg', '', ''),
(2, 'eoaweg', 'sgsg', 'uploadp2.jpg', '', ''),
(3, 'hodoj', 'hdpj', 'uploadpractice.jpg', '', ''),
(4, 'eoaweg', 'sgsg', 'uploadp2.jpg', '', ''),
(5, 'zsopyrhpe', 'gdoh', 'uploadpractice.jpg', '', ''),
(22, 'sgsdkg', 'igrig', 'uploadp4.jpg', 'kochi', 'SELECT hometown'),
(23, 'afafl', 'sgls', 'uploadp4.jpg', 'bilaspur', 'kochi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
