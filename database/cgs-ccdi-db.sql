-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 07:57 AM
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
(1, 'Admin', 'Alright!', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (Th', '2020-02-20 15:36:42'),
(2, 'Admin', 'Alright!', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (Th', '2020-02-20 15:36:42'),
(3, 'Admin', 'Alright!', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (Th', '2020-02-20 15:36:42'),
(4, 'Admin', 'hahaha', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (Th', '2020-02-20 15:36:42'),
(6, 'Admin', 'test add announcement', 'et Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (Th', '2020-02-21 13:42:53'),
(7, 'Admin', 'yes2', 'et Malorum\" (The Extremes of Good2\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (The Extremes of Good\r\net Malorum\" (The Extremes of Good\r\n\r\net Malorum\" (The Extremes of Good\r\n\r\n\r\net Malorum\" (T', '2020-02-21 13:43:05'),
(8, 'Admin', 'te', 'You can now take the Exam\r\n\r\nThe below is the student need to take the exam. \r\n\r\n- Test 1\r\n- Test 2\r\n- Test 3\r\n- Test 4\r\n\r\nThank you! <3', '2020-02-21 13:51:33'),
(9, 'Admin', 'test2', 'You can now take the Exam<br />\r\n<br />\r\nThe below is the student need to take the exam. <br />\r\n<br />\r\n- Test 1<br />\r\n- Test 2<br />\r\n- Test 3<br />\r\n- Test 4<br />\r\n<br />\r\nThank you! <3', '2020-02-21 13:56:51'),
(10, 'Admin', 'test', 'test', '2020-02-21 14:01:54'),
(11, 'Admin', '123', 'qeqweq<br /><br />\r\n<br /><br />\r\nqweqwe123<br />\r\nqeqweq<br /><br />\r\n<br /><br />\r\nqweqwe123<br />\r\nasdasd<br />\r\n<br />\r\nasd', '2020-02-21 14:02:02'),
(12, 'Admin', 'test', 'test\r\n\r\ntest', '2020-02-21 14:11:01'),
(13, 'Admin', 'qweqwe', 'qweqwe\r\n\r\nqwe', '2020-02-21 14:12:32'),
(14, 'Admin', 'QWEQW', 'It is important to provide an alternate description for any images or diagrams created using preformatted text.\r\n\r\nhahahahha', '2020-02-21 14:14:21'),
(15, 'Admin', 'test', 'What is Lorem Ipsum?', '2020-02-21 14:16:19'),
(16, 'Admin', '', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys', '2020-02-21 14:17:07'),
(17, 'Admin', 'test', '', '2020-02-21 14:18:57'),
(18, 'Admin', 'asdasd', 'Hello, I\'m Kenneth!', '2020-02-21 14:19:12'),
(19, 'Admin', 'HAHAHA', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s \r\nstandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it \r\nto make a type specimen book. It has survived not only five centuries, but also the leap into electronic \r\ntypesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset \r\nsheets containing Lorem Ipsum passages, and more recently with desktop publis', '2020-02-21 14:36:26'),
(20, 'Admin', 'Exam 2019 Ethics', 'The following list is for the exam:\r\n\r\nIT - Room B - (3:00pm - 4:00pm)\r\n\r\nWhere does it come from?\r\n\r\n                 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical \r\n                 Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at\r\n                 Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, \r\n                 from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\n                 discovered the undoubWhere does it come from?\r\n\r\n                 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical \r\n                 Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at\r\n                 Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, \r\n                 from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\n                 discovered the undoubWhere does it come from?\r\n\r\n                 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical \r\n                 Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at\r\n                 Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, \r\n                 from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\n                 discovered the undoub\r\n\r\nWhere does it come from?\r\n\r\n                 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical \r\n                 Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at\r\n                 Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, \r\n                 from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\n                 discovered the undoubWhere does it come from?\r\n\r\n                 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical \r\n                 Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at\r\n                 Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, \r\n                 from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\n                 discovered the undoubWhere does it come from?\r\n\r\n                 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical \r\n                 Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at\r\n                 Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, \r\n                 from a Lorem Ipsum passage, and going through the cites of the word in classical literature, \r\n                 discovered the undoub', '2020-02-21 14:37:04');

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
  MODIFY `contentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
