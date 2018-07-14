-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 03, 2018 at 08:17 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student_auto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student_auto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส student', AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
