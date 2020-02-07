-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2020 at 06:53 PM
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
-- Table structure for table `examQuestion`
--

CREATE TABLE `examQuestion` (
  `id` int(12) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'IT',
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letterD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correctAnswer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examQuestion`
--

INSERT INTO `examQuestion` (`id`, `category`, `question`, `letterA`, `letterB`, `letterC`, `letterD`, `correctAnswer`) VALUES
(1, 'IT', 'Question 1', '1 ', '2', '4', '3', '4'),
(2, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(3, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(4, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(5, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(6, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(7, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(8, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(9, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(10, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(11, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(12, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(13, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(14, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(15, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(16, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(17, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(18, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(19, 'IT', 'q', 'q', 'w', 'e', 'r', 'q'),
(20, 'IT', 'w', 'w', 'w', 'w', 'w', 'w');

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
(1, 'cgadmin', 'ee39dd49b6477fd99d9f356dcba3ad12', '', 'CG Admin', '', '', '', '', '', '', NULL, '', NULL, 0, '0', NULL, NULL),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Admin', '', '', '', '', '', '', NULL, '', NULL, 1, '0', NULL, NULL);

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
-- AUTO_INCREMENT for table `examQuestion`
--
ALTER TABLE `examQuestion`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `examResult`
--
ALTER TABLE `examResult`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
