-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 09:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `2019_sem7`
--

CREATE TABLE `2019_sem7` (
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
-- Dumping data for table `2019_sem7`
--

INSERT INTO `2019_sem7` (`srNo`, `nameOfSubject`, `category`, `subjectAbbr`, `subjectCode`, `students`, `IAE`, `twMarks`, `twRs`, `oralPrac`, `oralPracMark`, `oralpracRs`, `taExternal`, `ExternalLab`, `labAss`, `peon`, `totalRs`) VALUES
(1, 'Machine Learning', 'THEORY', 'ML', 'CSC701', 74, 296, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 296),
(2, 'Big Data Analysis', 'THEORY', 'BDA', 'CSC702', 74, 296, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 296),
(3, 'Natural Language Processing', 'THEORY', 'NLPL', 'CSEC7013', 74, 296, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 296),
(4, 'BlockChain', 'THEORY', 'BC', 'CSDC7022', 74, 296, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 296),
(5, 'Management Information System', 'THEORY', 'MIS', 'ILO7013', 74, 296, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 296),
(6, 'Machine Learning Lab', 'LAB', 'MLL', 'CSL701', 74, 0, 25, 444, 'OR + PR', 25, 740, 500, 740, 160, 80, 2664),
(7, 'Big Data Analytics Lab', 'LAB', 'BDAL', 'CSL702', 74, 0, 25, 444, 'OR + PR', 25, 740, 500, 740, 160, 80, 2664),
(8, 'Natural Language Processing Lab', 'NoTWLAB', 'NLPL', 'CSDL7013', 74, 0, 25, 444, 'NA', 0, 0, 0, 0, 0, 0, 444),
(9, 'BlockChain Lab', 'NoTWLAB', 'BCL', 'CSDL7022', 74, 0, 25, 444, 'NA', 0, 0, 0, 0, 0, 0, 444),
(10, 'Major Project 1', 'MPSEM7', 'MP 1', 'CSP701', 19, 0, 50, 1480, 'OR + PR', 25, 2850, 1250, 2850, 80, 40, 8550),
(11, 'Total Amount', 'TOTAL', '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 16246);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_sem7`
--
ALTER TABLE `2019_sem7`
  ADD PRIMARY KEY (`srNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
