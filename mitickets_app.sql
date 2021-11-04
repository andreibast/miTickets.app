-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 03:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitickets.app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tichete`
--

CREATE TABLE `tichete` (
  `id` int(11) NOT NULL,
  `denumire` varchar(25) NOT NULL,
  `descriere` tinytext,
  `data` date NOT NULL,
  `poza` varchar(150) DEFAULT NULL,
  `parinte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `tichete`
--

INSERT INTO `tichete` (`id`, `denumire`, `descriere`, `data`, `poza`, `parinte`) VALUES
(65, 'Echipamente Server', '', '2021-08-17', 'ca10e865543e507c9fec25127a61af57.jpg', '(parinte)'),
(66, 'Probleme server web', '', '2021-11-09', '2466aa8dccf02aa01536662238427a0c.jpg', 'Echipamente Server'),
(67, 'Conexiune server apache', 'Lorem Ipsum', '2021-11-02', '8a3a6a6340f4321f56facadc403f68ac.jpg', 'Probleme server web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tichete`
--
ALTER TABLE `tichete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tichete`
--
ALTER TABLE `tichete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
