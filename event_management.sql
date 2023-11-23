-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 08:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `status` tinyint(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `token`, `image`, `password`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Admin', NULL, 'User', 'admin@gmail.com', NULL, 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '845db344c37ba8e692b6fa190265424ab8622aa8', 0, '2023-06-07 20:09:56', '2023-10-14 02:29:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
