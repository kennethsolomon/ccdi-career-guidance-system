-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 02:30 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'Information Technology'),
(2, 'Computer Science'),
(3, 'Associate in Computer Technology'),
(4, 'BSIS');

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
-- Table structure for table `list_municipality`
--

CREATE TABLE `list_municipality` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_municipality`
--

INSERT INTO `list_municipality` (`id`, `name`) VALUES
(1, 'Sorsogon City'),
(2, 'Barcelona'),
(3, 'Bulan'),
(4, 'Bulusan'),
(5, 'Casiguran'),
(6, 'Castilla'),
(7, 'Donsol'),
(8, 'Gubat'),
(9, 'Irosin'),
(10, 'Juban'),
(11, 'Magallanes'),
(12, 'Matnog'),
(13, 'Pilar'),
(14, 'Prieto Diaz'),
(15, 'Sta. Magdalena');

-- --------------------------------------------------------

--
-- Table structure for table `municipality`
--

CREATE TABLE `municipality` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`id`, `name`, `school`) VALUES
(1, 'Sorsogon City', 'Sorsogon National High School'),
(2, 'Sorsogon City', 'Aemillianum College Inc.'),
(3, 'Sorsogon City', 'The Lewis College'),
(4, 'Sorsogon City', 'SMLCS'),
(5, 'Sorsogon City', 'SSU'),
(6, 'Sorsogon City', 'Annunciation College'),
(7, 'Barcelona', 'Barcelona National Comprehensive School');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `content`) VALUES
(1, 'Template 1'),
(2, 'Template 2'),
(3, 'Template 3');

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yearGraduated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `exp_date_at` datetime DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastName`, `firstName`, `middleName`, `address`, `email`, `yearGraduated`, `municipality`, `course`, `textStatus`, `textedDate`, `lastSchoolAttended`, `phoneNumber`, `status`, `dateOfExamination`, `score`, `suggestedCourse`, `userLevel`, `takeExam`, `created_at`, `month`, `year`, `exp_date_at`, `count`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admin', '', '', '', '', '', '', 0, '2020-07-22', '', '', '', '', '', '', 0, '0', NULL, '', '', NULL, 1),
(2, 'cgofficer2', 'faf0275a4da236e0e82050da7463a9f9', 'cgofficer', 'cgofficer', '', '', '', '', '', '', 0, '2020-07-22', '', '', '', NULL, '', NULL, 1, '0', NULL, '', '', NULL, 1),
(43, 'puraangelica0810', 'f5867d319a30ee3ff7ca135d19d63e00', 'Pura', 'Angelica', 'Cantor', 'Talisay Sorsogon City', 'anglica29@yahoo.com', '2012', 'Barcelona', 'Associate in Computer Technology', 1, '2020-08-14', 'The Lewis College', '09081911068', '', NULL, '0', NULL, 3, '0', '2020-08-10 00:00:00', 'August', '2022', '2020-08-25 00:00:00', 1),
(46, 'puraangelica0810', 'f5867d319a30ee3ff7ca135d19d63e00', 'Pura', 'Angelica', 'Cantor', 'Talisay Sorsogon City', 'anglica29@yahoo.com', '2012', 'Sorsogon City', 'Associate in Computer Technology', 1, '2020-08-14', 'The Lewis College', '09081911068', '', NULL, '0', NULL, 3, '0', '2020-08-10 00:00:00', 'August', '2023', '2020-08-25 00:00:00', 1),
(47, 'puraangelica0810', 'f5867d319a30ee3ff7ca135d19d63e00', 'Pura', 'Angelica', 'Cantor', 'Talisay Sorsogon City', 'anglica29@yahoo.com', '2012', 'Sorsogon City', 'Associate in Computer Technology', 1, '2020-08-14', 'The Lewis College', '09081911068', '', NULL, '0', NULL, 3, '0', '2020-08-10 00:00:00', 'August', '2024', '2020-08-25 00:00:00', 1),
(48, 'kurosakiichigo0811', '6626c5f48bb4f4885810a5bcd7f4e238', 'kurosaki', 'ichigo', 'laguna', 'cabid-an sorsogon city', 'kennethsolomon@protonmail.com', '2019', 'Sorsogon City', 'Associate in Computer Technology', 0, '0000-00-00', 'SSU', '09467487859', 'Enrolled', NULL, '0', NULL, 3, '0', '2020-08-11 00:00:00', 'August', '2024', '2020-08-26 00:00:00', 1),
(49, 'uzumakinaruto0811', '8df6d20b712bbf11d42b754b78fd40cf', 'uzumaki', 'naruto', 'laguna', 'salog sorsogon city', 'synecderz@gmail.com', '2017', 'Sorsogon City', 'BSIS', 1, '2020-08-13', 'SSU', '09081625263', '', NULL, '0', NULL, 3, '0', '2020-08-11 00:00:00', 'August', '2021', '2020-08-26 00:00:00', 1),
(50, 'kiseryota0811', 'c43d16324ecc72e8ee262235ffc5c281', 'kise', 'ryota', 'janaban', 'pang-pang sorsogon city', 'kennethsolomon@protonmail.com', '2016', 'Barcelona', 'Computer Science', 0, '0000-00-00', 'Barcelona National Comprehensive School', '09762628396', 'Enrolled', NULL, '0', NULL, 3, '0', '2020-08-11 00:00:00', 'August', '2025', '2020-08-26 00:00:00', 1),
(51, 'balastaedgar0811', 'ba73b8db38db90fd38dcda7ff872f926', 'balasta', 'edgar', 'laguna', 'Seabreeze Cabid-an Sorsogon City', 'synecderz@gmail.com', '2015', 'Sorsogon City', 'Associate in Computer Technology', 0, '0000-00-00', 'Annunciation College', '09454296723', 'Enrolled', NULL, '0', NULL, 3, '0', '2020-08-11 00:00:00', 'August', '2020', '2020-08-26 00:00:00', 1),
(52, 'reyesedwar0811', '1c8f6779a7dcb708d66c288e6be01f1d', 'reyes', 'edwar', 'janaban', 'Sirangan Sorsogon City', 'synecderz@gmail.com', '2015', 'Barcelona', 'Associate in Computer Technology', 1, '2020-08-13', 'Annunciation College', '09376457687', '', NULL, '0', NULL, 3, '0', '2020-08-11 00:00:00', 'August', '2020', '2020-08-26 00:00:00', 1),
(53, 'ramosaaron paul0811', 'f2ad66674d4fc969f12d04806e9ad977', 'ramos', 'aaron paul', 'ledesma', 'Seabreeze Cabid-an Sorsogon City', 'kennethsolomon@protonmail.com', '2014', 'Sorsogon City', 'Associate in Computer Technology', 1, '2020-08-13', 'Aemillianum College Inc.', '097383638738', '', NULL, '0', NULL, 3, '0', '2020-08-11 00:00:00', 'August', '2022', '2020-08-26 00:00:00', 1),
(54, 'fangmirana0811', 'a2833f703ed9d89aedbf2fa180dce5bb', 'fang', 'mirana', 'moon', 'Seabreeze Cabid-an Sorsogon City', 'synecderz@gmail.com', '2018', 'Sorsogon City', 'Associate in Computer Technology', 0, '0000-00-00', 'SMLCS', '09087567568', 'Enrolled', NULL, '0', NULL, 3, '0', '2020-08-11 00:00:00', 'August', '2020', '2020-08-26 00:00:00', 1),
(55, 'asdgijhasdas0811', 'a5f806b6ef0cb8b84d8a19dd3e60a4df', 'asdgijh', 'asdas', 'asdas', 'Seabreeze', 'synecderz@gmail.com', '2017', 'Sorsogon City', 'Information Technology', 0, '0000-00-00', 'SMLCS', '09877887876', 'Enrolled', '', '0', '', 3, '', '2020-08-11 00:00:00', 'August', '2020', '2020-08-26 00:00:00', 1),
(56, 'estevesbea0813', 'f83a4d95cd09c8fc92a732dbcfd3ef72', 'esteves', 'bea', 'paras', 'cabid-an sorsogon city', 'synecderz@gmail.com', '2020', 'Sorsogon City', 'Computer Science', 0, '2020-08-14', 'Sorsogon National High School', '09090909090', '', NULL, '0', NULL, 3, '0', '2020-08-13 00:00:00', 'August', '2020', '2020-08-28 00:00:00', 1);

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
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `list_municipality`
--
ALTER TABLE `list_municipality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipality`
--
ALTER TABLE `municipality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `list_municipality`
--
ALTER TABLE `list_municipality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `municipality`
--
ALTER TABLE `municipality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
