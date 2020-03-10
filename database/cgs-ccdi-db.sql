-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2020 at 10:32 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.3

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
-- Table structure for table `chatMessage`
--

CREATE TABLE `chatMessage` (
  `id` int(25) NOT NULL,
  `fromUserId` int(25) NOT NULL,
  `chatMessage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chatMessage`
--

INSERT INTO `chatMessage` (`id`, `fromUserId`, `chatMessage`, `timestamp`) VALUES
(1, 2, 'HAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAA', '2020-02-21 05:53:50'),
(2, 2, 'Test', '2020-02-22 10:14:34'),
(3, 1, 'test', '2020-02-22 10:14:55'),
(4, 1, 'test', '2020-02-22 10:18:26'),
(5, 1, 'ilovemyself', '2020-02-22 10:18:31');

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
(21, 'Admin', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing \r\nand typesetting industry. Lorem Ipsum has been the \r\nindustry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type \r\nand scrambled it to make a type specimen book. \r\nIt has survived not only five centuries, but also the \r\nleap into electronic typesetting, remaining essentially \r\nunchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing \r\nLorem Ipsum passages, and more recently \r\nwith desktop publishing software like Aldus \r\nPageMaker including versions of Lorem Ipsum.', '2020-02-22 01:49:17'),
(22, 'Admin', 'Why do we use it?', 't is a long established fact that a reader will be distracted by the readable content \r\nof a page when looking at its layout. The point of using Lorem Ipsum is that \r\nit has a more-or-less normal distribution of letters, as opposed to using \r\n\'Content here, content here\', making it look like readable English. Many \r\ndesktop publishing packages and web page editors now use Lorem Ipsum \r\nas their default model text, and a search for \'lorem ipsum\' will uncover many \r\nweb sites still in their infancy. Various versions have evolved over the years, \r\nsometimes by accident, sometimes on purpose (injected humour and the like).', '2020-02-22 18:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `examQuestion`
--

CREATE TABLE `examQuestion` (
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
-- Table structure for table `examResult`
--

CREATE TABLE `examResult` (
  `id` int(25) NOT NULL,
  `studentId` int(25) NOT NULL,
  `examScore` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eNum` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examResult`
--

INSERT INTO `examResult` (`id`, `studentId`, `examScore`, `eNum`, `created_at`) VALUES
(1, 4, '0', '0', '2020-02-22 10:15:40');

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
(4, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', 'Information Technology', 'SNHS', '09301787782', 'Taked Exam', '2020/02/22-06:15:42pm', '0', 'ACT', 3, '1', '2020-02-20 00:00:00', '2020-03-06 00:00:00'),
(6, 'test2', 'ad0234829205b9033196ba818f7a872b', 'asd', 'asd', 'asd', 'sad', 'ACT', 'SNHS', '09454296783', 'Undecided', NULL, '0', NULL, 3, '0', '2020-02-22 00:00:00', '2020-03-08 00:00:00'),
(7, 'test3', '8ad8757baa8564dc136c1e07507f4a98', 'test3', 'test3', 'test3', 'test3', 'Computer Science', 'Aemillianum College Inc.', '09454296723', 'Taked Exam', NULL, '0', NULL, 3, '0', '2020-02-22 00:00:00', '2020-03-08 00:00:00');

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
-- Indexes for table `chatMessage`
--
ALTER TABLE `chatMessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`contentId`);

--
-- Indexes for table `examQuestion`
--
ALTER TABLE `examQuestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examResult`
--
ALTER TABLE `examResult`
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
-- AUTO_INCREMENT for table `chatMessage`
--
ALTER TABLE `chatMessage`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `contentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `examQuestion`
--
ALTER TABLE `examQuestion`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examResult`
--
ALTER TABLE `examResult`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
