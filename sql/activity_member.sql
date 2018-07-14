-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 03, 2018 at 07:18 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_member`
--

CREATE TABLE `activity_member` (
  `id_act_mem_auto` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_activity` int(11) NOT NULL,
  `hour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_member`
--

INSERT INTO `activity_member` (`id_act_mem_auto`, `id_student`, `id_activity`, `hour`) VALUES
(1, 1, 1, 6),
(2, 1, 2, 8),
(3, 2, 1, 6),
(4, 2, 2, 8),
(5, 3, 1, 6),
(6, 3, 2, 8),
(7, 7, 4, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_member`
--
ALTER TABLE `activity_member`
  ADD PRIMARY KEY (`id_act_mem_auto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_member`
--
ALTER TABLE `activity_member`
  MODIFY `id_act_mem_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
