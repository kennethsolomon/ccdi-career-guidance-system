-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 05:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

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

--
-- Dumping data for table `examresult`
--

INSERT INTO `examresult` (`id`, `studentId`, `examScore`, `eNum`, `created_at`) VALUES
(1, 4, '0', '0', '2020-02-22 10:15:40'),
(2, 8, '0', '0', '2020-07-10 13:37:41'),
(3, 12, '0', '0', '2020-07-14 19:24:12');

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
  `municipality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textStatus` int(12) NOT NULL,
  `textedDate` date NOT NULL,
  `lastSchoolAttended` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfExamination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `suggestedCourse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userLevel` int(12) NOT NULL,
  `takeExam` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `month` varchar(122) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(122) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_date_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastName`, `firstName`, `middleName`, `address`, `municipality`, `course`, `textStatus`, `textedDate`, `lastSchoolAttended`, `phoneNumber`, `status`, `dateOfExamination`, `score`, `suggestedCourse`, `userLevel`, `takeExam`, `created_at`, `month`, `year`, `exp_date_at`) VALUES
(1, 'cgofficer', 'faf0275a4da236e0e82050da7463a9f9', 'cgofficer', 'CgOfficer', '', '', '', '', 0, '2020-07-22', '', '', '', '', '', '', 0, '0', NULL, '', '', NULL),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admin', '', '', '', '', 0, '2020-07-22', '', '', '', NULL, '', NULL, 1, '0', NULL, '', '', NULL),
(28, 'solomonkenneth0725', '754dc59016774f7d00c509fec9431078', 'Solomon', 'Kenneth', 'Lim', 'Seabreeze', 'Sorsogon City', 'Information Technology', 3, '2020-07-25', 'SNHS', '3333', 'No Response', NULL, '0', NULL, 3, '0', '2020-07-25 00:00:00', 'July', '2020', '2020-08-09 00:00:00'),
(29, 'janabanjayjames0725', '334933b712445a46bcc597bfdbe33c3b', 'Janaban', 'Jayjames', 'Laguna', 'Seabreeze', 'Sorsogon City', 'Information Technology', 3, '2020-07-25', 'SNHS', '111111', 'No Response', NULL, '0', NULL, 3, '0', '2020-07-25 00:00:00', 'July', '2020', '2020-08-09 00:00:00'),
(30, 'solomonken0725', 'a2dec0027b0a0c5e488d3648bdb6db30', 'Solomon', 'Ken', 'Lim', 'Seabreeze', 'Sorsogon City', 'Information Technology', 2, '2020-07-28', 'SNHS', '222222', 'Interested', '', '0', '', 3, '', '2020-07-25 00:00:00', 'August', '2020', '2020-08-09 00:00:00');

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
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `contentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `examquestion`
--
ALTER TABLE `examquestion`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examresult`
--
ALTER TABLE `examresult`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
