-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 03, 2018 at 07:05 AM
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
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_activity` int(11) NOT NULL,
  `activity_name` varchar(100) NOT NULL,
  `date_start` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `max_hour` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_activity_type` int(11) NOT NULL,
  `id_major` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_activity`, `activity_name`, `date_start`, `place`, `max_hour`, `id_semester`, `id_activity_type`, `id_major`) VALUES
(3, 'อบรมการสร้างเว็บไซต์ด้วย Wordpress', '2018-04-20', 'อาคาร 75 ปี', 7, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin_faculty', 'admin_faculty@gmail.com', '$2y$10$OYxm9i.phkkxrmWF.MXOHOaUdy2te9CdcxoDnHb4YoJ7JP326CZSy', 'IigQ9F99n4ZWWdHIoQhhUrQempMAlv8UE0xa1OYje6yYiox8xKxer2pGYA3B', '2018-04-02 21:11:23', '2018-04-02 21:11:23', 'admin_faculty'),
(2, 'admin_dsd', 'admin_dsd@gmail.com', '$2y$10$pmp/bhxLi2CXULEyBqud1uzpxCKChEMkPya1ac47m8BmsBd57Brhq', 'wCMjsE1kSQctwZsFioGviRMtYGpsT7D7Q4QRqyjPjr14TMWq6O6IpDfLhyV5', '2018-04-02 21:11:45', '2018-04-02 21:11:45', 'admin_dsd'),
(3, 'student', 'student@gmail.com', '$2y$10$FoiUcuwxvlx69YWtJ4YPWub5vmPt2rtdInDDOAAMenVxDFbfyhpuS', '1F6iGkBNQtRR3mLpZu21joygMcbl5cLPcSZSmGtgBkyvNJckbHmYZrGQSSFU', '2018-04-02 21:58:40', '2018-04-02 21:58:40', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
