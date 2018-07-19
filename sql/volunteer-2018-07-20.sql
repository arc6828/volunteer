-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 07:10 PM
-- Server version: 10.1.33-MariaDB
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
-- Database: `volunteer`
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

-- --------------------------------------------------------

--
-- Table structure for table `activity_type`
--

CREATE TABLE `activity_type` (
  `id_activity_type` int(100) NOT NULL,
  `activity_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_type`
--

INSERT INTO `activity_type` (`id_activity_type`, `activity_type_name`) VALUES
(1, 'กิจกรรมมหาวิทยาลัย'),
(2, 'กิจกรรมคณะ');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id_faculty_auto` int(11) NOT NULL COMMENT 'รหัส faculty',
  `name` varchar(50) NOT NULL COMMENT 'ชื่อคณะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id_faculty_auto`, `name`) VALUES
(3, 'ิ้ีวิทยาศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `id_major_auto` int(11) NOT NULL,
  `major_name` varchar(50) NOT NULL,
  `id_faculty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`id_major_auto`, `major_name`, `id_faculty`) VALUES
(4, 'วิทยาการคอมพิวเตอร์', 3),
(6, 'พเำ', 3);

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `sem_name` varchar(20) NOT NULL,
  `admin_dsd` varchar(45) NOT NULL DEFAULT 'semester' COMMENT 'ผู้มีสิทธิ์ใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `sem_name`, `admin_dsd`) VALUES
(1, '1/2560', 'semester'),
(2, '2/2560', 'semester'),
(3, '1/2561', 'semester'),
(4, '2/2561', 'semester');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student_auto` int(11) NOT NULL COMMENT 'รหัส student',
  `id_student` varchar(11) NOT NULL COMMENT 'รหัสนักศึกษา 11 หลัก',
  `stu_name` varchar(20) NOT NULL COMMENT 'ชื่อ',
  `stu_lastname` varchar(20) NOT NULL COMMENT 'นามสกุล',
  `degree` varchar(20) NOT NULL COMMENT 'ระดับ',
  `major` int(11) NOT NULL COMMENT 'หลักสูตร',
  `status` varchar(20) DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student_auto`, `id_student`, `stu_name`, `stu_lastname`, `degree`, `major`, `status`) VALUES
(1, '58122420101', 'สุรยวัฒน์', 'สุดลาภา', 'ปริญาตรี', 1, 'student'),
(2, '58122420102', 'กล้านรงค์', 'เถื่อนรอด', 'ปริญาตรี', 1, 'student'),
(3, '58122420103', 'ชัชวาล', 'มากมี', 'ปริญาตรี', 1, 'student'),
(4, '58122420105', 'จารุวรรณ', 'สาระบุตร', 'ปริญาตรี', 1, 'student'),
(5, '58122420108', 'เมธี', 'ธรรมจารี', 'ปริญาตรี', 1, 'student'),
(6, '52123380103', 'จารุณี ', 'เวสูงเนิน', 'ปริญญาตรี', 2, 'student');

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
  `status` varchar(45) CHARACTER SET utf8 NOT NULL DEFAULT 'norole'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin_faculty', 'admin_faculty@gmail.com', '$2y$10$OYxm9i.phkkxrmWF.MXOHOaUdy2te9CdcxoDnHb4YoJ7JP326CZSy', 'IigQ9F99n4ZWWdHIoQhhUrQempMAlv8UE0xa1OYje6yYiox8xKxer2pGYA3B', '2018-04-02 21:11:23', '2018-04-02 21:11:23', 'admin_faculty'),
(2, 'admin_dsd', 'admin_dsd@gmail.com', '$2y$10$pmp/bhxLi2CXULEyBqud1uzpxCKChEMkPya1ac47m8BmsBd57Brhq', 'wCMjsE1kSQctwZsFioGviRMtYGpsT7D7Q4QRqyjPjr14TMWq6O6IpDfLhyV5', '2018-04-02 21:11:45', '2018-04-02 21:11:45', 'admin_dsd'),
(3, 'student', 'student@gmail.com', '$2y$10$FoiUcuwxvlx69YWtJ4YPWub5vmPt2rtdInDDOAAMenVxDFbfyhpuS', '1F6iGkBNQtRR3mLpZu21joygMcbl5cLPcSZSmGtgBkyvNJckbHmYZrGQSSFU', '2018-04-02 21:58:40', '2018-04-02 21:58:40', 'student'),
(4, 'Chavalit Koweerawong', 'chavalit.kow@gmail.com', '$2y$10$iuVHdrk.tWeOE4bAaVylJOWW5iJt7Os7ZwnVVmvHHQHOjU7eYvrly', NULL, '2018-07-19 08:03:14', '2018-07-19 08:03:14', 'admin_dsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `activity_member`
--
ALTER TABLE `activity_member`
  ADD PRIMARY KEY (`id_act_mem_auto`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id_faculty_auto`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id_major_auto`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student_auto`);

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
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `activity_member`
--
ALTER TABLE `activity_member`
  MODIFY `id_act_mem_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id_faculty_auto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส faculty', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `id_major_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student_auto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส student', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
