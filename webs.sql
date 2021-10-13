-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 10:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webs`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_id` int(23) NOT NULL,
  `First Name` varchar(56) NOT NULL,
  `Last Name` varchar(67) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `First Name`, `Last Name`, `Email`, `Username`, `Password`) VALUES
(1, 'NSANZIMANA', 'Emmanuel', 'nsanzimanaofficial@gmail.com', 'christian', 'fcb8c6fe3c375cf41265e84f18328d3c9b9c0466'),
(12, 'xy', 'xy', 'xy@xy.xy', 'xy@xy.xy', 'bba73e652efba5c5b0cab7ac7c20df3c2cb2ae7d'),
(14, 'u', 'u', 'u', 'u@u.u', 'f75122d3e2683e846b49a11270e0b27e222ef4a5');

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

CREATE TABLE `rec` (
  `prid` int(12) NOT NULL,
  `email` varchar(23) NOT NULL,
  `token` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec`
--

INSERT INTO `rec` (`prid`, `email`, `token`) VALUES
(1, 'nsanzimanaofficial@gmai', '91b34a557da3ca68'),
(2, 'nsanzimanaofficial@gmai', 'da03ddc05c7294ec'),
(3, 'nsanzimanaofficial@gmai', '343dfaaf8ad96afd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `rec`
--
ALTER TABLE `rec`
  ADD PRIMARY KEY (`prid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rec`
--
ALTER TABLE `rec`
  MODIFY `prid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
