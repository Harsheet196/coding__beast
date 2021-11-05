-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 06:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coding_beast`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `a_id` bigint(15) UNSIGNED NOT NULL,
  `link` varchar(1000) NOT NULL,
  `pid` varchar(15) NOT NULL,
  `did` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`a_id`, `link`, `pid`, `did`) VALUES
(17, 'https://us05web.zoom.us/j/83924408474?pwd=SmtWeU9jVmtIT2RudGNxOTNyY3ptdz09', '24', '1'),
(18, 'https://us05web.zoom.us/j/81215142582?pwd=TTMxdk13THZJZTdFOEhFME5oMElDUT09', '24', '3'),
(19, 'https://us05web.zoom.us/j/86909305441?pwd=cDQ0dXRMdFRnWWRsSDVUQnZVQjUyUT09', '24', '2');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_id` bigint(15) UNSIGNED NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_request` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_current` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `license` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`first_name`, `last_name`, `pwd`, `d_id`, `mail`, `p_request`, `p_current`, `gender`, `degree`, `license`) VALUES
('anil', 'seth', 'test', 1, 'test@test1', '', '', 'male', 'mbbs', 1234),
('sunil', 'tripathi', 'test', 2, 'test@test2', '', '', 'male', 'bdds', 0),
('isha', 'roy', 'test', 3, 'test@test3', '', '', 'female', 'bds', 123456),
('kapil', 'bajaj', 'test', 4, 'test@test4', '', '', 'male', 'mbbs', 1234),
('tarun', 'mishra', 'test', 5, 'test@test5', '', '', 'male', 'mbbs', 23456),
('himanshu', 'm', 'test', 6, 'test@test6', '', '', 'male', 'mbbs', 56478);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uhid` int(10) NOT NULL,
  `pwd` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` bigint(15) UNSIGNED NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `medication` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medication_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relative_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relative_contact` int(10) NOT NULL,
  `past_diseases` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `past_treatment` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_scale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_scale` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestion` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precaution` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`firstname`, `lastname`, `uhid`, `pwd`, `p_id`, `mail`, `phone`, `medication`, `medication_time`, `gender`, `relative_name`, `relative_contact`, `past_diseases`, `past_treatment`, `p_scale`, `d_scale`, `suggestion`, `precaution`) VALUES
('harsh1', 'harsh', 123, 'test', 23, 'test@test1', 1234, 'Cough syrup', '2pm- 4pm -8pm', 'male', 'Twinshu', 2222222, '', 'Heart Surgery', '10', '', 'Take rest well', 'Avoid oily foods'),
('harsh', 'jain', 123254, 'test', 24, 'harsh@test', 225585, 'disprin', '2 pm', 'male', 'ergeg', 73623562, '', 'ergwr', '3', '8', 'sleep well', 'takeprecaution');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `question` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `did` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `question`, `answer`, `pid`, `did`) VALUES
(47, 'erwtert', 'reterer', '24', '6'),
(48, 'eerter', 'erteryeryer', '24', '6'),
(49, 'hlooo', 'ohkkk', '24', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `a_id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
