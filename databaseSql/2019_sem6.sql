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
-- Table structure for table `2019_sem6`
--

CREATE TABLE `2019_sem6` (
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
-- Dumping data for table `2019_sem6`
--

INSERT INTO `2019_sem6` (`srNo`, `nameOfSubject`, `category`, `subjectAbbr`, `subjectCode`, `students`, `IAE`, `twMarks`, `twRs`, `oralPrac`, `oralPracMark`, `oralpracRs`, `taExternal`, `ExternalLab`, `labAss`, `peon`, `totalRs`) VALUES
(1, 'System Programming and Compiler Construction', 'THEORY', 'SPCC', 'CSC601', 69, 276, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 276),
(2, 'Cryptography & System Security', 'THEORY', 'CSS', 'CSC602', 69, 276, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 276),
(3, 'Mobile Computing', 'THEORY', 'MCC', 'CSC603', 69, 276, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 276),
(4, 'Artificial Intelligence', 'THEORY', 'AI', 'CSC604', 69, 276, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 276),
(5, 'Quantitative Analysis ', 'THEORY', 'QA', 'CSDLO601', 69, 276, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 276),
(6, 'System Programming and Compiler construction lab', 'LAB', 'SPCCL', 'CSL601', 69, 0, 25, 414, 'OR + PR', 25, 690, 500, 690, 160, 80, 2534),
(7, 'Cryptography & System Security Lab', 'NoTWLAB', 'CSL', 'CSL602', 69, 0, 25, 414, 'NA', 0, 0, 0, 0, 0, 0, 414),
(8, 'Mobile Computing Lab', 'NoTWLAB', 'MCL', 'CSL603', 69, 0, 25, 414, 'NA', 0, 0, 0, 0, 0, 0, 414),
(9, 'Artificial Intelligence Lab', 'LAB', 'AIL', 'CSL604', 69, 0, 25, 414, 'OR + PR', 25, 690, 500, 690, 160, 80, 2534),
(10, 'Skill Base Lab Course:Cloud Computing', 'SKILLLAB', 'CCL', 'CSL605', 69, 0, 50, 690, 'OR + PR', 25, 690, 500, 690, 160, 80, 2810),
(11, 'Mini Project 2B', 'MPEVEN', 'MP2B', 'CSM601', 17, 0, 25, 110, 'OR + PR', 25, 2550, 1000, 2550, 80, 40, 7150),
(12, 'Total Amount', 'TOTAL', '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_sem6`
--
ALTER TABLE `2019_sem6`
  ADD PRIMARY KEY (`srNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
