-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2020 at 10:11 AM
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
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'IT', 'Question 1', 'A', 'B', 'C', 'D', 'A'),
(2, 'IT', 'Question 2', 'AA', 'BB', 'CC', 'DD', 'BB'),
(3, 'IT', 'Question 3', 'AAA', 'BBB', 'CCC', 'DDD', 'CCC');

-- --------------------------------------------------------

--
-- Table structure for table `examResult`
--

CREATE TABLE `examResult` (
  `id` int(25) NOT NULL,
  `studentId` int(25) NOT NULL,
  `examScore` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestedCourse` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `phoneNumber` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfExamination` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `userLevel` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `lastName`, `firstName`, `middleName`, `address`, `course`, `phoneNumber`, `dateOfExamination`, `userLevel`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'a', 'Admin Account', 'c', 'd', 'e', '4545454545', '2020-02-27 13:45:49.000000', 0, '2020-02-02 10:08:53'),
(22, 'student', 'cd73502828457d15655bbd7a63fb0bc8', 'a', 'b', 'c', 'd', 'Information Technology', '45454545', '2020-02-02 18:09:31.253184', 3, '2020-02-02 10:09:31');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `examResult`
--
ALTER TABLE `examResult`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
