-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 06:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgs-ccdi-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatmessage`
--

CREATE TABLE `chatmessage` (
  `id` int(25) NOT NULL,
  `fromUserId` int(25) NOT NULL,
  `chatMessage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chatmessage`
--

INSERT INTO `chatmessage` (`id`, `fromUserId`, `chatMessage`, `timestamp`) VALUES
(1, 2, 'HAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAA', '2020-02-21 05:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `contentId` int(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(244) NOT NULL,
  `content` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`contentId`, `author`, `title`, `content`, `date`) VALUES
(1, 'Admin', 'Alright!', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\n', '2020-02-20 15:36:42'),
(2, 'Admin', 'Alright!', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\n', '2020-02-20 15:36:42'),
(3, 'Admin', 'Alright!', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\n', '2020-02-20 15:36:42'),
(4, 'Admin', 'hahaha', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\n', '2020-02-20 15:36:42'),
(6, 'Admin', 'test add announcement', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\n', '2020-02-21 13:42:53'),
(7, 'Admin', 'yes2', 'et Malorum\" (The Extremes of Good2\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\n', '2020-02-21 13:43:05'),
(8, 'Admin', 'te', 'You can now take the Exam\r\n\r\nThe below is the student need to take the exam. \r\n\r\n- Test 1\r\n- Test 2\r\n- Test 3\r\n- Test 4\r\n\r\nThank you! <3', '2020-02-21 13:51:33'),
(9, 'Admin', 'test2', 'You can now take the Exam\r\n\r\nThe below is the student need to take the exam. \r\n\r\n- Test 1\r\n- Test 2\r\n- Test 3\r\n- Test 4\r\n\r\nThank you! <3', '2020-02-21 13:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `examquestion`
--

CREATE TABLE `examquestion` (
  `id` int(12) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correctAnswer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examresult`
--

CREATE TABLE `examresult` (
  `id` int(25) NOT NULL,
  `studentId` int(25) NOT NULL,
  `examScore` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eNum` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastSchoolAttended` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfExamination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `suggestedCourse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userLevel` int(12) NOT NULL,
  `takeExam` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `exp_date_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastName`, `firstName`, `middleName`, `address`, `course`, `lastSchoolAttended`, `phoneNumber`, `status`, `dateOfExamination`, `score`, `suggestedCourse`, `userLevel`, `takeExam`, `created_at`, `exp_date_at`) VALUES
(1, 'cgofficer', 'faf0275a4da236e0e82050da7463a9f9', '', 'CgOfficer', '', '', '', '', '', '', '', '', '', 0, '0', NULL, NULL),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Admin', '', '', '', '', '', '', NULL, '', NULL, 1, '0', NULL, NULL),
(4, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', 'Information Technology', 'SNHS', '123123', 'Taked Exam', NULL, '0', NULL, 3, '0', '2020-02-20 00:00:00', '2020-03-06 00:00:00');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `exp_date` BEFORE INSERT ON `user` FOR EACH ROW SET
    NEW.created_at = IFNULL(NEW.created_at, NOW()),
    NEW.exp_date_at = TIMESTAMPADD(DAY, 15, NEW.created_at)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatmessage`
--
ALTER TABLE `chatmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`contentId`);

--
-- Indexes for table `examquestion`
--
ALTER TABLE `examquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examresult`
--
ALTER TABLE `examresult`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentId` (`studentId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatmessage`
--
ALTER TABLE `chatmessage`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `contentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `examquestion`
--
ALTER TABLE `examquestion`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examresult`
--
ALTER TABLE `examresult`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
