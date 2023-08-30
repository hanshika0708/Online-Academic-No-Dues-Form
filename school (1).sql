-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 12:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsubject`
--

CREATE TABLE `addsubject` (
  `id` int(11) NOT NULL,
  `cource` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `semister` varchar(200) NOT NULL,
  `subjectname` varchar(200) NOT NULL,
  `subjectcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addsubject`
--

INSERT INTO `addsubject` (`id`, `cource`, `branch`, `semister`, `subjectname`, `subjectcode`) VALUES
(1, 'mca', 'ca', '2', 'C++', '12'),
(2, 'mca', 'ca', '2', 'hindi', '125'),
(3, 'bca', 'csa', '1', 'php', 'php101');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `clgid` varchar(200) NOT NULL,
  `semester` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(200) NOT NULL,
  `Enrollment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `clgid`, `semester`, `username`, `pass`, `role`, `Enrollment`) VALUES
(1, '', '', 0, 'admin@gmail.com', 'admin@123', 'admin', ''),
(2, 'lakhan', '01', 0, 'lk', 'lk', 'Student', ''),
(8, 'lakhan', '152', 0, 'test@gmail.com', 'test@gmail.com', 'Faculty', ''),
(9, 'om', '02', 0, '01', '01', 'Faculty', ''),
(10, 'mk', '0', 0, '5', '5', 'Student', '11'),
(11, 'anil Pal', '1452', 0, '', '', 'Student', '');

-- --------------------------------------------------------

--
-- Table structure for table `assingment`
--

CREATE TABLE `assingment` (
  `id` int(11) NOT NULL,
  `tg` varchar(200) NOT NULL,
  `studentName` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `assingment` varchar(200) NOT NULL,
  `assingmentValueScore` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assingment`
--

INSERT INTO `assingment` (`id`, `tg`, `studentName`, `subject`, `assingment`, `assingmentValueScore`, `date`) VALUES
(84, 'om', 'Lakhan', 'hindi', 'Assingment', '01,02,03,04', '2023-03-13'),
(85, 'om', 'Lakhan', 'Java', 'Assingment', '01,02,03', '2023-03-13'),
(86, 'om', 'Lakhan', 'hindi', 'Tutorial', '02', '2023-03-13'),
(87, 'om', 'Lakhan', 'hindi', 'Assingment', '01,02', '2023-03-13'),
(88, 'om', 'Lakhan', 'hindi', 'Tutorial', '01', '2023-03-13'),
(89, 'om', 'Lakhan', 'hindi', 'Tutorial', '02', '2023-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `practioncal`
--

CREATE TABLE `practioncal` (
  `id` int(11) NOT NULL,
  `tg` varchar(200) NOT NULL,
  `studentName` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `assingment` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practioncal`
--

INSERT INTO `practioncal` (`id`, `tg`, `studentName`, `subject`, `assingment`, `date`) VALUES
(1, 'om', 'Mk', 'Mk', 'C++,hindi', ''),
(2, 'om', 'Mk', '', 'C++', '2023-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(200) NOT NULL,
  `student` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `student`) VALUES
(2, '2', 'Mca');

-- --------------------------------------------------------

--
-- Table structure for table `studentacdmicdetails`
--

CREATE TABLE `studentacdmicdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `Attendance` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentacdmicdetails`
--

INSERT INTO `studentacdmicdetails` (`id`, `name`, `enrollment`, `Attendance`, `fees`, `certificate`, `remark`, `date`) VALUES
(1, 'lakhan', '150410', '4', '52', 'SLF-Logo (1).png,SLF-Logo (1).png', 'remark', 'date');

-- --------------------------------------------------------

--
-- Table structure for table `teacherallotment`
--

CREATE TABLE `teacherallotment` (
  `id` int(11) NOT NULL,
  `teacher` varchar(200) NOT NULL,
  `cource` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherallotment`
--

INSERT INTO `teacherallotment` (`id`, `teacher`, `cource`, `branch`, `section`) VALUES
(1, 'D', 'Mca', 'C++', '21');

-- --------------------------------------------------------

--
-- Table structure for table `tgalloted`
--

CREATE TABLE `tgalloted` (
  `id` int(11) NOT NULL,
  `teacher` varchar(200) NOT NULL,
  `student` varchar(200) NOT NULL,
  `Cource` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tgalloted`
--

INSERT INTO `tgalloted` (`id`, `teacher`, `student`, `Cource`) VALUES
(14, 'om', 'Lakhan', 'Mca'),
(16, 'om', 'Mk', 'Mca'),
(17, 'om', 'ss', 'Mca');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id` int(11) NOT NULL,
  `tg` varchar(200) NOT NULL,
  `studentName` varchar(200) NOT NULL,
  `assingment` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addsubject`
--
ALTER TABLE `addsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assingment`
--
ALTER TABLE `assingment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practioncal`
--
ALTER TABLE `practioncal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentacdmicdetails`
--
ALTER TABLE `studentacdmicdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherallotment`
--
ALTER TABLE `teacherallotment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tgalloted`
--
ALTER TABLE `tgalloted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addsubject`
--
ALTER TABLE `addsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `assingment`
--
ALTER TABLE `assingment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `practioncal`
--
ALTER TABLE `practioncal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentacdmicdetails`
--
ALTER TABLE `studentacdmicdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacherallotment`
--
ALTER TABLE `teacherallotment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tgalloted`
--
ALTER TABLE `tgalloted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
