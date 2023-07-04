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
-- Table structure for table `2019_sem4`
--

CREATE TABLE `2019_sem4` (
  `srNo` int(2) NOT NULL,
  `nameOfSubject` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subjectAbbr` varchar(255) NOT NULL,
  `subjectCode` varchar(255) NOT NULL,
  `students` int(3) NOT NULL,
  `IAE` int(10) NOT NULL,
  `twMarks` int(10) NOT NULL,
  `twRs` int(10) NOT NULL,
  `oralPrac` varchar(10) NOT NULL,
  `oralPracMark` int(10) NOT NULL,
  `oralpracRs` int(10) NOT NULL,
  `taExternal` int(10) NOT NULL,
  `ExternalLab` int(10) NOT NULL,
  `labAss` int(10) NOT NULL,
  `peon` int(10) NOT NULL,
  `totalRs` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2019_sem4`
--

INSERT INTO `2019_sem4` (`srNo`, `nameOfSubject`, `category`, `subjectAbbr`, `subjectCode`, `students`, `IAE`, `twMarks`, `twRs`, `oralPrac`, `oralPracMark`, `oralpracRs`, `taExternal`, `ExternalLab`, `labAss`, `peon`, `totalRs`) VALUES
(1, 'Engineering Mathematics', 'MATH', 'EM IV', 'CSC401', 68, 272, 25, 408, 'NA', 0, 0, 0, 0, 0, 0, 680),
(2, 'Analysis of Algorithms', 'THEORY', 'AOA', 'CSC402', 68, 272, 0, 0, '0', 0, 0, 0, 0, 0, 0, 272),
(3, 'Data Base Management System', 'THEORY', 'DBMS', 'CSC403', 68, 272, 0, 0, '0', 0, 0, 0, 0, 0, 0, 272),
(4, 'Operating System', 'THEORY', 'OS', 'CSC404', 68, 272, 0, 0, '0', 0, 0, 0, 0, 0, 0, 272),
(5, 'Microprocessor', 'THEORY', 'MP', 'CSC405', 68, 272, 0, 0, '0', 0, 0, 0, 0, 0, 0, 272),
(6, 'Analysis of Algorithm Lab', 'LAB', 'AOAL', 'CSC401', 68, 0, 25, 408, 'PR+OR', 25, 680, 500, 456, 0, 0, 2268),
(7, 'Database Management System Lab', 'LAB', 'DBSL', 'CSC402', 68, 0, 25, 408, 'PR+OR', 25, 680, 500, 680, 0, 0, 2268),
(8, 'Operating System Lab', 'LAB', 'OSL', 'CSC403', 68, 0, 25, 408, 'PR+OR', 25, 680, 500, 680, 0, 0, 2268),
(9, 'Microprocessor Lab', 'NoTWLAB', 'MPL', 'CSL404', 68, 0, 25, 408, 'NA', 0, 0, 0, 0, 0, 0, 408),
(10, 'Skill Base Lab Course:Python Programming', 'NoTWLAB', 'SBLC', 'CSL405', 68, 0, 25, 408, 'NA', 0, 0, 0, 0, 0, 0, 408),
(11, 'Mini Project 1B', 'MPEVEN', 'MP1B', 'CSM401', 18, 0, 25, 1020, 'PR+OR', 25, 2700, 500, 2700, 0, 0, 6920),
(12, 'Total Amount', 'TOTAL', '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_sem4`
--
ALTER TABLE `2019_sem4`
  ADD PRIMARY KEY (`srNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
