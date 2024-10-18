-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 11:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrollp`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `loan_ammount` int(11) NOT NULL,
  `loan_period` int(11) NOT NULL,
  `loan_status` varchar(255) NOT NULL,
  `emi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `emp_id`, `loan_ammount`, `loan_period`, `loan_status`, `emi`) VALUES
(1, 1, 16667, 6, 'Accepted', 3333.33),
(2, 2, 22500, 8, 'Accepted', 3750),
(3, 3, 20000, 5, 'Accepted', 4000),
(4, 4, 40000, 8, 'Accepted', 5000),
(5, 5, 60000, 6, 'Rejected', 10000),
(6, 2, 0, 2, 'Accepted', 5000),
(7, 4, 10000, 2, 'Rejected', 5000),
(8, 6, 10000, 5, 'Rejected', 2000),
(9, 6, 10000, 5, 'Accepted', 2000),
(10, 2, 8000, 6, 'Rejected', 1333.33),
(11, 2, 20000, 5, 'Rejected', 4000),
(12, 2, 25000, 4, 'Rejected', 6250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emp_info` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
