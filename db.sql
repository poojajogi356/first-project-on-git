-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 01:40 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sr.no.` int(20) UNSIGNED NOT NULL,
  `stud_name` varchar(15) NOT NULL DEFAULT '',
  `age` int(3) NOT NULL DEFAULT '0',
  `math` int(3) NOT NULL DEFAULT '0',
  `eng` int(3) NOT NULL DEFAULT '0',
  `sci` int(3) NOT NULL DEFAULT '0',
  `total` int(5) NOT NULL DEFAULT '0',
  `per` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sr.no.`, `stud_name`, `age`, `math`, `eng`, `sci`, `total`, `per`) VALUES
(1, 'Maria', 15, 76, 85, 90, 204, 68),
(2, 'Bob', 15, 76, 85, 90, 246, 82),
(3, 'Riaan', 15, 76, 88, 90, 213, 71),
(4, 'Pooja', 21, 55, 85, 85, 225, 75),
(5, 'John', 16, 39, 60, 70, 169, 56.3333),
(6, 'Ria', 16, 78, 68, 80, 226, 75.3333),
(7, 'Zain', 14, 90, 94, 96, 280, 93.3333),
(8, 'Zain', 14, 90, 94, 96, 280, 93.3333),
(9, 'Lucy', 14, 28, 40, 40, 108, 36),
(10, 'Lisa', 15, 40, 46, 50, 136, 45.3333),
(11, 'Manali', 15, 77, 97, 76, 250, 83.3333),
(12, 'Zoya', 15, 50, 65, 72, 187, 62.3333),
(13, 'Pradnya', 14, 70, 85, 56, 211, 70.3333);

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `update_result` BEFORE INSERT ON `student` FOR EACH ROW BEGIN
SET NEW.total = NEW.math + NEW.sci + NEW.eng;
SET NEW.per=(NEW.total/300)*100;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sr.no.`),
  ADD UNIQUE KEY `sr.no.` (`sr.no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sr.no.` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
