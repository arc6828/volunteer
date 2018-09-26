-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 07:51 PM
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
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(100) NOT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL,
  `time_begin` time NOT NULL,
  `time_end` time NOT NULL,
  `place` varchar(100) NOT NULL,
  `duration_hour` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `activity_type_id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `date_begin`, `date_end`, `time_begin`, `time_end`, `place`, `duration_hour`, `semester_id`, `activity_type_id`, `major_id`) VALUES
(3, 'อบรมการสร้างเว็บไซต์ด้วย Wordpress', '2018-04-20', '2018-09-26', '08:00:00', '16:00:00', 'อาคาร 75 ปี', 7, 4, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `activity_member`
--

CREATE TABLE `activity_member` (
  `activity_member_id` int(11) NOT NULL,
  `serial` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `duration_hour` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_member`
--

INSERT INTO `activity_member` (`activity_member_id`, `serial`, `activity_id`, `duration_hour`) VALUES
(1, 1, 1, 6),
(2, 1, 2, 8),
(3, 2, 1, 6),
(4, 2, 2, 8),
(5, 3, 1, 6),
(6, 3, 2, 8),
(7, 6, 4, 8),
(8, 1, 3, 0),
(9, 2, 3, 0),
(10, 3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `activity_type`
--

CREATE TABLE `activity_type` (
  `activity_type_id` int(11) NOT NULL,
  `activity_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity_type`
--

INSERT INTO `activity_type` (`activity_type_id`, `activity_type_name`) VALUES
(1, 'กิจกรรมมหาวิทยาลัย'),
(2, 'กิจกรรมคณะ'),
(3, 'กิจกรรมภายนอก');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL COMMENT 'รหัส faculty',
  `faculty_name` varchar(100) NOT NULL COMMENT 'ชื่อคณะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`) VALUES
(3, 'วิทยาศาสตร์และเทคโนโลยี'),
(4, 'วิทยาการจัดการ');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `major_id` int(11) NOT NULL,
  `major_name` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`major_id`, `major_name`, `faculty_id`) VALUES
(4, 'วิทยาการคอมพิวเตอร์', 3),
(6, 'เทคโนโลยีสารสนเทศ', 3),
(7, 'เคมี', 3);

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
  `semester_id` int(11) NOT NULL,
  `semester_year` int(11) NOT NULL,
  `semester_no` int(11) NOT NULL,
  `semester_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_year`, `semester_no`, `semester_type`) VALUES
(1, 2560, 1, 'ภาคปกติ'),
(2, 2560, 2, 'ภาคปกติ'),
(3, 2561, 1, 'ภาคปกติ'),
(4, 2561, 2, 'ภาคปกติ'),
(5, 2562, 1, 'ภาคปกติ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `serial` int(11) NOT NULL COMMENT 'รหัส student',
  `student_id` varchar(11) NOT NULL COMMENT 'รหัสนักศึกษา 11 หลัก',
  `student_name` varchar(255) NOT NULL COMMENT 'ชื่อ-สกุล',
  `degree` varchar(20) NOT NULL COMMENT 'ระดับ',
  `major_id` int(11) NOT NULL COMMENT 'หลักสูตร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`serial`, `student_id`, `student_name`, `degree`, `major_id`) VALUES
(1, '58122420101', 'สุริยวัฒน์', 'ปริญญาตรี', 4),
(2, '58122420102', 'กล้านรงค์', 'ปริญญาตรี', 4),
(3, '58122420103', 'ชัชวาล', 'ปริญญาตรี', 4),
(4, '58122420105', 'จารุวรรณ', 'ปริญาตรี', 1),
(5, '58122420108', 'เมธี', 'ปริญาตรี', 1),
(6, '52123380103', 'จารุณี ', 'ปริญญาตรี', 2),
(7, '6011111111', 'ทดสอบ', 'ปริญญาตรี', 4);

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
  `status` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'norole'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin_faculty', 'admin_faculty@gmail.com', '$2y$10$OYxm9i.phkkxrmWF.MXOHOaUdy2te9CdcxoDnHb4YoJ7JP326CZSy', 'IigQ9F99n4ZWWdHIoQhhUrQempMAlv8UE0xa1OYje6yYiox8xKxer2pGYA3B', '2018-04-02 21:11:23', '2018-04-02 21:11:23', 'admin_faculty'),
(2, 'admin_dsd', 'admin_dsd@gmail.com', '$2y$10$pmp/bhxLi2CXULEyBqud1uzpxCKChEMkPya1ac47m8BmsBd57Brhq', 'wCMjsE1kSQctwZsFioGviRMtYGpsT7D7Q4QRqyjPjr14TMWq6O6IpDfLhyV5', '2018-04-02 21:11:45', '2018-04-02 21:11:45', 'admin_dsd'),
(3, 'student', 'student@gmail.com', '$2y$10$FoiUcuwxvlx69YWtJ4YPWub5vmPt2rtdInDDOAAMenVxDFbfyhpuS', '1F6iGkBNQtRR3mLpZu21joygMcbl5cLPcSZSmGtgBkyvNJckbHmYZrGQSSFU', '2018-04-02 21:58:40', '2018-04-02 21:58:40', 'student'),
(4, 'Chavalit Koweerawong', 'chavalit.kow@gmail.com', '$2y$10$m8kwLIT9KGR/A55MvXh3lufUhTt2ENCiDP2nzFJvBsoaX/n9A1ro.', 'tZ7p9axBdiqLJp3aUn5sRMCZpx2wJ0xHPUKgBEMOtpz1bRMtNPa8fCJt1KXN', '2018-07-19 02:20:07', '2018-07-19 02:20:07', 'admin_dsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `activity_member`
--
ALTER TABLE `activity_member`
  ADD PRIMARY KEY (`activity_member_id`);

--
-- Indexes for table `activity_type`
--
ALTER TABLE `activity_type`
  ADD PRIMARY KEY (`activity_type_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`major_id`);

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
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`serial`);

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
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `activity_member`
--
ALTER TABLE `activity_member`
  MODIFY `activity_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `activity_type`
--
ALTER TABLE `activity_type`
  MODIFY `activity_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส faculty', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `major_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส student', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
