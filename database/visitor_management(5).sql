-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 07:37 PM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(15) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`) VALUES
(1, 'About visitr gate pass system', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ips Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ips Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ips');

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
(3, 'gdfg', 'vikasarsha@gmail.com', '35464655', 'dfgdfg', 'dsfdsf', '2020-01-23 00:00:00', '2020-01-23 03:52:01'),
(4, 'vvv', 'fsf@gmail.com', 'dsfds', 'fsf', 'dgsdg', '2020-01-26 00:00:00', '2020-01-26 17:31:39'),
(5, 'dsggdgdsg', 'sdf@gmail.com', 'fsdf', 'dfsdsf', 'dfds', '2020-01-26 00:00:00', '2020-01-26 17:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `home_blog`
--

CREATE TABLE `home_blog` (
  `id` int(15) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_blog`
--

INSERT INTO `home_blog` (`id`, `title`, `description`, `image`) VALUES
(1, 'Loren ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'clg1.jpg'),
(2, 'Loren ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'clg2.jpg'),
(3, 'Loren ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'clg.jpg'),
(4, 'Loren ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type ', 'clg3.jpg');

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
(1, 'xsss1', 'vikasarsha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '91610831191', 'fdsfsdf1', 'fsdfs1', 'dfsd1', 'sdfdsf1', 'fsdf1', 'sdfsd1', 'fsd1', '1582066800.jpg', '2020-01-23 00:00:00', '2020-01-23 02:40:41'),
(3, 'hyjhu', 'bkessler@singerequipment.com', 'e10adc3949ba59abbe56e057f20f883e', '9161083119', '', 'HKJHKJH', 'njkjhhj', 'hihihj', 'hkjhkjhkj', 'hjhkjh', 'kkjhkj', '1582066800.jpg', NULL, '2020-02-19 17:48:47');

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
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `id_image` varchar(191) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `phone`, `company`, `full_address`, `checkin`, `checkout`, `purpose`, `feedback`, `id_image`, `created_at`, `updated_at`) VALUES
(2, 'vvv', 'vikasdarsha@gmail.com', '9161083119', 'dfgdfg', 'sfef', '', '', '', '', '1579751859', '0000-00-00 00:00:00', '2020-01-23 03:57:39'),
(3, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'sfef', '', '', '', '', '1579751883', '0000-00-00 00:00:00', '2020-01-23 03:58:03'),
(4, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'def', '', '', '', '', '1579751933', '0000-00-00 00:00:00', '2020-01-23 03:58:53'),
(5, 'vvv', 'bkessler@singerequipment.com', '9161083119', 'dfgdfg', 'saddf', '', '', '', '', '1579752249', '0000-00-00 00:00:00', '2020-01-23 04:04:09'),
(6, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'dcasd', '', '', '', '', '1579837443.jpg', '0000-00-00 00:00:00', '2020-01-23 04:06:39'),
(7, 'vvv', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'dcasd', '', '', '', '', '1579820400.jpg', '0000-00-00 00:00:00', '2020-01-23 04:07:04'),
(8, 'vvv', 'vikasar1sha@gmail.com', '91610831191', 'dfgdfg1', 'dcasd1', '', '', '', '', '1579837433.jpg', '0000-00-00 00:00:00', '2020-01-23 04:09:09'),
(9, 'vvv1', 'ram11@gmail.com', '91610831191', 'dfgdfg1', 'segdrg1', 'fdgd1', 'dfds1', 'dgd1', '', '1580857200.jpg', '0000-00-00 00:00:00', '2020-02-05 19:55:40'),
(11, '', '', 'gjghghjghjjk', '', '', '', '', '', '', '1580857200.', '0000-00-00 00:00:00', '2020-02-05 20:05:50'),
(12, 'ram', 'vikasarsha@gmail.com', '9161083119', 'dfgdfg', 'fhtfd', '1:00', '2:00', 'tkhiutd', 'fyughj', '1581894000.jpg', '0000-00-00 00:00:00', '2020-02-17 16:43:42'),
(13, 'vvv', 'ram@gmail.com', '9161083119', 'dfgdfg', 'gdr', 'fdgd', '', 'dgd', '', '1581894000.jpg', '0000-00-00 00:00:00', '2020-02-17 18:27:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_blog`
--
ALTER TABLE `home_blog`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_blog`
--
ALTER TABLE `home_blog`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
