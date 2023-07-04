-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 04:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remuneration`
--

-- --------------------------------------------------------

--
-- Table structure for table `2019_sem3`
--

CREATE TABLE `2019_sem3` (
  `srNo` int(15) NOT NULL,
  `nameOfSubject` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `subjectAbbr` varchar(10) NOT NULL,
  `subjectCode` varchar(15) NOT NULL,
  `students` int(250) DEFAULT NULL,
  `IAE` int(255) DEFAULT NULL,
  `twMarks` int(100) DEFAULT NULL,
  `twRs` int(11) DEFAULT NULL,
  `oralPrac` varchar(20) DEFAULT NULL,
  `oralPracMark` int(11) DEFAULT NULL,
  `oralpracRs` int(11) DEFAULT NULL,
  `taExternal` int(11) DEFAULT NULL,
  `ExternalLab` int(11) DEFAULT NULL,
  `labAss` int(11) DEFAULT NULL,
  `peon` int(11) DEFAULT NULL,
  `totalRs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2019_sem3`
--

INSERT INTO `2019_sem3` (`srNo`, `nameOfSubject`, `category`, `subjectAbbr`, `subjectCode`, `students`, `IAE`, `twMarks`, `twRs`, `oralPrac`, `oralPracMark`, `oralpracRs`, `taExternal`, `ExternalLab`, `labAss`, `peon`, `totalRs`) VALUES
(1, 'Engineering Mathematics', 'MATH', 'EM III', 'CSC301', 62, 248, 25, 372, 'NA', 0, 0, 0, 0, 0, 0, 620),
(2, 'Discrete Structure and Graph Theory', 'THEORY', 'DSGT', 'CSC302', 62, 248, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 248),
(3, 'Data Structures', 'THEORY', 'DS', 'CSC303', 62, 248, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 248),
(4, 'Digital Logic and Computer Architecture', 'THEORY', 'DLCOA', 'CSC304', 62, 248, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 248),
(5, 'Computer Graphics', 'THEORY', 'CG', 'CSC305', 62, 248, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 248),
(6, 'Data Structure Lab', 'LAB', 'DSL', 'CSL301', 62, 0, 25, 372, 'OR + PR', 25, 620, 500, 620, 160, 80, 2352),
(7, 'Digital Logic and Computer Architecture Lab', 'NoTWLAB', 'DLCOAL', 'CSL302', 62, 0, 25, 372, 'NA', 0, 0, 0, 0, 0, 0, 372),
(8, 'Computer Graphics Lab', 'LAB', 'CGL', 'CSL303', 62, 0, 25, 372, 'OR + PR', 25, 620, 500, 620, 160, 80, 2352),
(9, 'Skill Lab course Object Oriented Programming with ', 'SKILLLAB', 'OOPJ', 'CSL304', 62, 0, 50, 620, 'OR + PR', 25, 620, 500, 620, 160, 80, 2600),
(10, 'Mini Project 1-A', 'MPODD', 'MP1A', 'CSM301', 16, 0, 25, 930, 'OR + PR', 25, 2400, 1000, 2400, 80, 40, 6850),
(11, 'Total Amount', 'TOTAL', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16138);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_sem3`
--
ALTER TABLE `2019_sem3`
  ADD PRIMARY KEY (`srNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2019_sem3`
--
ALTER TABLE `2019_sem3`
  MODIFY `srNo` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
