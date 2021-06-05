-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2021 at 11:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `active`
--

CREATE TABLE `active` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `usern` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` int(222) NOT NULL,
  `passwd` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `active`
--

INSERT INTO `active` (`id`, `name`, `usern`, `email`, `phone`, `passwd`) VALUES
(1, 'naran ', 'root', 'narea@fhhll', 88998999, 'fffg'),
(2, 'fhdkjhf', 'root', 'narea@fhhll', 8589459, 'jkjfkfk'),
(3, 'john hen', 'johnthedon', 'john@hhhh', 39398488, 'jdfjjhjj'),
(4, 'particular name', 'temp', 'e@l', 9878878, 'fgfghfd'),
(5, 'rama', 'hey ram', 'r@m', 987686869, '123'),
(6, 'hghvjhg', 'ghfgh', 'jkhgyg2fghdg@gfvgh', 2467, 'hgfhg');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(12) NOT NULL,
  `name` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `roll` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `name`, `lname`, `roll`) VALUES
(1, 'sam', 'smith', 55),
(2, 'john ', 'hen', 55),
(3, 'hari', 'thapa', 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active`
--
ALTER TABLE `active`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active`
--
ALTER TABLE `active`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
