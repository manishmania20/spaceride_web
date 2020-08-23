-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 10:34 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `registry`
--

CREATE TABLE `registry` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registry`
--

INSERT INTO `registry` (`id`, `username`, `email`, `pwd`, `gender`, `dob`, `contact`, `country`, `addr`, `zip`, `dept`) VALUES
(3, 'jane', 'jane@gmail.com', 'Wrt@345#!', 'female', '14/06/1997', '8005421121', 'usa', '15C,Detroit', '784512', 'geol'),
(4, 'kenny', 'kenny@gmail.com', 'dfg!@@345', 'male', '24/03/1995', '9082071009', 'aus', '23n,Melbourne', '845213', 'aspo'),
(5, 'felix', 'felix@gmail.com', 'Pepe@777R', 'male', '12/06/1995', '9082071005', 'usa', '15d,Houston', '568942', 'aspo'),
(6, 'mike', 'mike12@gmail.com', 'Mike12#$%', 'others', '30/01/1997', '8005421131', 'rsa', '12m,Cape Town', '456789', 'geol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registry`
--
ALTER TABLE `registry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registry`
--
ALTER TABLE `registry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
