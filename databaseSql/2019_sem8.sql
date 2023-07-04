-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 09:13 AM
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
-- Table structure for table `2019_sem8`
--

CREATE TABLE `2019_sem8` (
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
-- Dumping data for table `2019_sem8`
--

INSERT INTO `2019_sem8` (`srNo`, `nameOfSubject`, `category`, `subjectAbbr`, `subjectCode`, `students`, `IAE`, `twMarks`, `twRs`, `oralPrac`, `oralPracMark`, `oralpracRs`, `taExternal`, `ExternalLab`, `labAss`, `peon`, `totalRs`) VALUES
(1, 'Human Machine Interaction', 'THEORY', 'HMI', 'CSL801', 76, 304, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 304),
(2, 'Distributed Computing', 'THEORY', 'DC', 'CSL802', 76, 304, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 304),
(3, 'Environment Management', 'THEORY', 'EM', 'ILO801X', 76, 304, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 304),
(4, 'Natural Language Processing', 'THOERY', 'NLP', 'DLO8012', 76, 304, 0, 0, 'NA', 0, 0, 0, 0, 0, 0, 304),
(5, 'Human Machine Interaction Lab', '', 'HML', 'CSL801', 76, 0, 25, 456, 'OR', 25, 456, 500, 456, 0, 0, 1868),
(6, 'Distributed Computing Lab', '', 'DCL', 'CSL802', 76, 0, 25, 456, 'OR', 25, 456, 500, 456, 0, 0, 1868),
(7, 'Natural Language Processing ', 'NoIAE', 'NLP', 'DLO8012', 26, 0, 50, 760, 'OR + PR', 25, 760, 1250, 760, 160, 80, 3770),
(8, 'Cloud Computational Lab', 'NoIAE', 'CCL', 'CSL804', 26, 0, 50, 760, 'OR + PR', 25, 760, 1250, 760, 160, 80, 3770),
(9, 'Major Project II', 'MPEVEN', 'MP-II', 'CSP805', 26, 0, 50, 1520, 'OR + PR', 50, 5200, 1250, 3900, 80, 40, 11990),
(10, 'Total Amount', 'TOTAL', '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 24482);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_sem8`
--
ALTER TABLE `2019_sem8`
  ADD PRIMARY KEY (`srNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
