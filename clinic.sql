-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Aug 22, 2020 at 11:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL,
  `date_number` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `money` int(11) DEFAULT NULL,
  `adddate` date DEFAULT NULL,
  `info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id`, `p_id`, `d_id`, `date_number`, `notes`, `date`, `time`, `type`, `money`, `adddate`, `info`) VALUES
(1, 2, 1, 1, NULL, '2020-08-22', '17:51', 0, 5, '2020-08-22', 'dsfdsf\r\ngfh'),
(2, 2, 1, 2, NULL, '2020-08-23', '19:51', 0, 100, '2020-08-22', NULL),
(3, 2, 1, 2, NULL, '2020-08-23', '16:55', 0, 100, '2020-08-22', NULL),
(4, 2, 1, 2, NULL, '2020-08-24', '19:52', 0, 100, '2020-08-22', NULL),
(5, 2, 1, 1, NULL, '2020-08-25', '16:56', 0, 100, '2020-08-22', NULL),
(6, 2, 1, 2, NULL, '2020-08-25', '18:54', 0, 100, '2020-08-22', NULL),
(7, 2, 1, 1, NULL, '2020-08-26', '16:57', 0, 100, '2020-08-22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `create_date` date NOT NULL,
  `notes` text DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `address`, `age`, `create_date`, `notes`, `added_by`) VALUES
(1, 'حازم عبدالفتاح', '01027638932', 'egypt', 17, '2020-08-22', 'يشسيسش\r\nشسيشسي', 2),
(2, 'حازم عبدالفتاح2', '01027638932', 'egypt', 17, '2020-08-22', 'يشسيسش\r\nشسيشسي', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`, `phone`, `address`, `bio`) VALUES
(1, 'د/ عاطف', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, '01027638932', NULL, NULL),
(2, 'مساعد', 'helper', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, '01027638932', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
