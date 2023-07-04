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
-- Table structure for table `2019_sem5`
--

CREATE TABLE `2019_sem5` (
  `srNo` int(2) NOT NULL,
  `nameOfSubject` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subjectAbbr` varchar(255) DEFAULT NULL,
  `subjectCode` varchar(40) DEFAULT NULL,
  `students` int(10) DEFAULT NULL,
  `IAE` int(10) DEFAULT NULL,
  `twMarks` int(10) DEFAULT NULL,
  `twRs` int(10) DEFAULT NULL,
  `oralPrac` varchar(255) DEFAULT NULL,
  `oralPracMark` int(10) DEFAULT NULL,
  `oralpracRs` int(10) DEFAULT NULL,
  `taExternal` int(10) DEFAULT NULL,
  `ExternalLab` int(10) DEFAULT NULL,
  `labAss` int(10) DEFAULT NULL,
  `peon` int(10) DEFAULT NULL,
  `totalRs` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2019_sem5`
--

INSERT INTO `2019_sem5` (`srNo`, `nameOfSubject`, `category`, `subjectAbbr`, `subjectCode`, `students`, `IAE`, `twMarks`, `twRs`, `oralPrac`, `oralPracMark`, `oralpracRs`, `taExternal`, `ExternalLab`, `labAss`, `peon`, `totalRs`) VALUES
(1, 'Theoretical Computer Science', 'MATH', 'TCS', 'CSC501', 69, 276, 25, 444, 'NA', 0, 0, 0, 0, 0, 0, 276),
(2, 'Software Engineering', 'THEORY', 'SE', 'CSC502', 80, 320, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 320),
(3, 'Computer Network', 'THEORY', 'CSC503', 'CN', 80, 320, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 320),
(4, 'Data Warehousing & Mining', 'THEORY', 'DWM', 'CSC504', 80, 320, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 320),
(5, 'Internet Programming', 'THEORY', 'IP', 'CSDLO5012', 80, 320, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 320),
(6, 'Software Engineering Lab', 'LAB', 'SEL', 'CSL501', 80, 0, 25, 480, 'OR + PR', 25, 800, 500, 800, 160, 80, 2820),
(7, 'Computer Network Lab', 'LAB', 'CNL', 'CSL502', 80, 0, 25, 480, 'OR + PR', 25, 800, 500, 800, 160, 80, 2820),
(8, 'Data Warehousing & Mining Lab', 'LAB', 'Data Warehousing & Mining Lab', 'CSL503', 80, 0, 25, 480, 'OR + PR', 25, 800, 500, 800, 160, 80, 2820),
(9, 'Professional Comm. & Ethics II', 'PCE', 'PCEII', 'CSL504', 80, 0, 50, 800, 'NA', 0, 0, 0, 0, 0, 0, 800),
(10, 'Mini Project 2-A', 'MPODD', 'MP2A', 'CSM501', 20, 0, 25, 930, 'OR + PR', 25, 3000, 1000, 3000, 80, 40, 8050),
(11, 'Total Amount', 'TOTAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_sem5`
--
ALTER TABLE `2019_sem5`
  ADD PRIMARY KEY (`srNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
