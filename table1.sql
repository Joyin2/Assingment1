-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 11:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_connection`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(5) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fathers_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `college_name` varchar(30) NOT NULL,
  `residential_address` varchar(30) NOT NULL,
  `permanent_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `firstname`, `lastname`, `email`, `contact`, `fathers_name`, `gender`, `college_name`, `residential_address`, `permanent_address`) VALUES
(11, 'Joyin', 'Laskar', 'joyin.las.2000@gmail.com', '6003351943', 'fazle elahi laskar', 'Male', 'BVEC', 'Village Dhanehari Part 1', 'hbvhvgvg'),
(12, 'joyin', 'laskar', 'email@gmail.com', '6003351943', 'fazle elahi laskar', 'Male', 'BVEC', 'Dhanehari Part 1', 'dhanehari '),
(13, 'Joyin Mahmmad Aslam', 'Laskar', 'joyin.las.2000@gmail.com', '6003351943', 'fazle elahi laskar', 'Male', 'BVEC', 'Dhanehari Part 1', 'dcvcv'),
(14, 'Joyin Mahmmad Aslam', 'Laskar', 'joyin.las.2000@gmail.com', '', '', '', '', 'Dhanehari Part 1', ''),
(15, '', '', '', '', '', '', '', 'sdfdfvdsv', ''),
(16, 'Joyin Mahmmad Aslam', 'Laskar', 'joyin.las.2000@gmail.com', '', '', '', '', 'Dhanehari Part 1', ''),
(17, 'Joyin Mahmmad Aslam', 'Laskar', 'joyin.las.2000@gmail.com', '', '', '', '', 'Dhanehari Part 1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
