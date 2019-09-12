-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 11:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `office_data`
--

CREATE TABLE `office_data` (
  `Office_ID` int(11) NOT NULL,
  `Office_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Office_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Office_number1` int(11) NOT NULL,
  `Office_number2` int(11) DEFAULT NULL,
  `Office_number3` int(11) DEFAULT NULL,
  `Office_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_data`
--

INSERT INTO `office_data` (`Office_ID`, `Office_name`, `Office_address`, `Office_number1`, `Office_number2`, `Office_number3`, `Office_email`) VALUES
(1, 'cairo office', 'cairo', 100000000, NULL, NULL, 'menah@gmail.com'),
(2, 'cairo office', 'cairo', 100000000, 2147483647, NULL, 'menah1@gmail.com'),
(3, 'cairo office', 'cairo', 100000000, NULL, 15646878, 'menah2@gmail.com'),
(4, 'cairo office', 'cairo', 4444, 55555, 666666, 'menah3@gmail.com'),
(5, 'cairo office', 'cairo', 100000000, NULL, NULL, 'menah1@gmail.com'),
(6, 'new one', 'alex', 5000000, NULL, NULL, 'menah@gmail.com'),
(7, 'new one', 'alex', 5000000, NULL, NULL, 'menah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `office_data`
--
ALTER TABLE `office_data`
  ADD PRIMARY KEY (`Office_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `office_data`
--
ALTER TABLE `office_data`
  MODIFY `Office_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
