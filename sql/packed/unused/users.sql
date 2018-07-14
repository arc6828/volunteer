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
  `status` varchar(45) CHARACTER SET utf8 DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'sirorat', 'mookmumu_20wg@hotmail.com', '$2y$10$BMlyxJ7NnxDowvQ2TGuvwugqroCEFfRdk654VCcJSnJ8/VSJvfnSu', 'LxMePXuEmUJhbpM0k3f6wkEJeoiURqy3xZzs6iahjgKpVSu2XhvGOz9TI1oI', '2018-04-02 21:26:19', '2018-04-02 21:26:19', 'student'),
(2, 'ธนพร', 'mookmumu-20wg@hotmail.com', '$2y$10$7KPWKuND6dEjeHzMqU1tfeEVui0tZXKcJ2TMx2oScaDtgNEsuB2Se', 'EdQhcePwFzDOEBCmYb8jLDzs2QDClvK4bs5K9oOgiNvsgHSaxhoCTKZrHaIA', '2018-04-02 21:55:26', '2018-04-02 21:55:26', 'admin_faculty'),
(3, 'ศุภลักษณ์', 'mookmumu20wg@gmail.com', '$2y$10$6DpDrwtabyr9ficPgL4/9OMov/ISdPksLvxStd.0bfWjRjK/l9kYO', '1k93Yp24XegkTEbtW5ZC9dNJ11tKbtTYR2jXPlmbE1aLkkVOExUGqjMGPEqw', '2018-04-02 21:58:02', '2018-04-02 21:58:02', 'admin_dsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
