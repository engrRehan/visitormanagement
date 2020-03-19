-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 05:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitor_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(15) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `company` varchar(191) DEFAULT NULL,
  `message` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `company`, `message`, `created_at`, `updated_at`) VALUES
(1, 'gdfg', 'vikasarsha@gmail.com', '35464655', 'dfgdfg', 'dsfdsf', '0000-00-00 00:00:00', '2020-01-23 03:51:05'),
(2, 'gdfg', 'vikasarsha@gmail.com', '35464655', 'dfgdfg', 'dsfdsf', '0000-00-00 00:00:00', '2020-01-23 03:51:49'),
(3, 'gdfg', 'vikasarsha@gmail.com', '35464655', 'dfgdfg', 'dsfdsf', '2020-01-23 00:00:00', '2020-01-23 03:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `username` varchar(191) NOT NULL,
  `dob` varchar(191) NOT NULL,
  `address1` varchar(191) NOT NULL,
  `address2` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `username`, `dob`, `address1`, `address2`, `city`, `state`, `country`, `image`, `created_at`, `updated_at`) VALUES
(1, 'xsss1', 'vikasarsha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '91610831191', 'fdsfsdf1', 'fsdfs1', 'dfsd1', 'sdfdsf1', 'fsdf1', 'sdfsd1', 'fsd1', '1579820400.jpg', '2020-01-23 00:00:00', '2020-01-23 02:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(15) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `company` varchar(191) DEFAULT NULL,
  `full_address` longtext,
  `id_image` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `phone`, `company`, `full_address`, `id_image`, `created_at`, `updated_at`) VALUES
(2, 'vvv', 'vikasdarsha@gmail.com', '9161083119', 'dfgdfg', 'sfef', '1579751859', '0000-00-00 00:00:00', '2020-01-23 03:57:39'),
(3, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'sfef', '1579751883', '0000-00-00 00:00:00', '2020-01-23 03:58:03'),
(4, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'def', '1579751933', '0000-00-00 00:00:00', '2020-01-23 03:58:53'),
(5, 'vvv', 'bkessler@singerequipment.com', '9161083119', 'dfgdfg', 'saddf', '1579752249', '0000-00-00 00:00:00', '2020-01-23 04:04:09'),
(6, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'dcasd', '1579837443.jpg', '0000-00-00 00:00:00', '2020-01-23 04:06:39'),
(7, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'dcasd', '1579820400.jpg', '0000-00-00 00:00:00', '2020-01-23 04:07:04'),
(8, 'vvv', 'vikasar1sha@gmail.com', '91610831191', 'dfgdfg1', 'dcasd1', '1579837433.jpg', '0000-00-00 00:00:00', '2020-01-23 04:09:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
