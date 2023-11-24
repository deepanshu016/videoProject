-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 09:27 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Trending Topic', 'This category is for trending topics.', '2023-11-23 18:54:11', '2023-11-23 18:54:11'),
(2, 'Awesome Ideas', 'This category is for awesome ideas.', '2023-11-23 18:54:11', '2023-11-23 18:54:11'),
(3, 'Natural Beauty', 'This category is for natural beauty.', '2023-11-23 18:54:11', '2023-11-23 18:54:11'),
(4, 'Inhouse', 'This category is for inhouse projects.', '2023-11-23 18:54:11', '2023-11-23 18:54:11'),
(5, 'Outside of wall', 'This category is for projects outside of the wall.', '2023-11-23 18:54:11', '2023-11-23 18:54:11'),
(6, 'In a hill', 'This category is for projects in the hills.', '2023-11-23 18:54:11', '2023-11-23 18:54:11'),
(7, 'London Tower', 'This category is for projects around the London Tower.', '2023-11-23 18:54:11', '2023-11-23 18:54:11'),
(8, 'Tourist Vlog', 'This category is for tourist vlogs.', '2023-11-23 18:54:11', '2023-11-23 18:54:11');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `video_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `video_type` enum('1','2') NOT NULL COMMENT '1="S3 URL",2="Custom Video URL"',
  `video_title` varchar(255) NOT NULL,
  `upload_video` varchar(255) DEFAULT NULL,
  `time_for_live` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `video_futured_image` varchar(255) DEFAULT NULL,
  `add_tags` varchar(255) DEFAULT NULL,
  `trending_topic` varchar(255) DEFAULT NULL,
  `video_embeded_code` varchar(255) DEFAULT NULL,
  `video_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`video_id`, `category_id`, `video_type`, `video_title`, `upload_video`, `time_for_live`, `video_futured_image`, `add_tags`, `trending_topic`, `video_embeded_code`, `video_description`, `created_at`, `updated_at`) VALUES
(1, 2, '2', 'Youtube Video', NULL, NULL, 'http://video.local.com/storage/uploads/KGtkcHBeQ6xjrpth0jAt45qmpCLvyRAlgNx0KNPb.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', NULL, '2023-11-24 14:17:41', '2023-11-24 14:17:41'),
(2, 2, '2', 'dsfsafsd', NULL, NULL, 'C:\\xampp\\htdocs\\videoProject\\public/uploads/uploads/imtpxd3fYFrysMHOCgvTuHwq8ZesuRTpoK2sHoZ5.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'asdfdsfdsfasdf', '2023-11-24 14:21:18', '2023-11-24 14:21:18'),
(3, 4, '2', 'sfdafs', NULL, NULL, 'uploads/nli9M5WEf5P4QIzJ6o4hwgoIDCnALIJ2NlawFj1v.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'dsfdfdfgdfgdfgdfgdfgsdgdfsg', '2023-11-24 14:22:38', '2023-11-24 14:22:38'),
(4, 5, '2', 'sdfsdfsdf', NULL, NULL, 'uploads/Xk1x5hHVtNs4CjOdMNdCLIu0vMLm5xFi2amU9b5S.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'gsdfgsdfgsdfg', '2023-11-24 14:27:27', '2023-11-24 14:27:27'),
(5, 4, '2', 'dfsgdfgdf', NULL, NULL, 'uploads/ThuXEoW7Gve8uDxILUhkXOk6Mqgon4fIj8teQ9rq.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'dsfgdfgdfgfgfgf', '2023-11-24 14:28:18', '2023-11-24 14:28:18'),
(6, 4, '2', 'dfsgdfgdf', NULL, NULL, 'uploads/4oxMDaRaI5KcSCKmApLTISClEWgG8S950MP3vw3j.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'dsfgdfgdfgfgfgf', '2023-11-24 14:28:50', '2023-11-24 14:28:50'),
(7, 4, '2', 'sdfsdfsdf', NULL, NULL, 'uploads/gVQ7L6mbdljbfF0qtrwV5OVyNMXxgHF58ILjIYTb.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'gdfgfdsgdgdgfgfdgsd', '2023-11-24 14:32:43', '2023-11-24 14:32:43'),
(8, 2, '2', 'dsfsdfasf', NULL, NULL, 'uploads/Yr7oAz1Tf6Qqf0vWTn8My9eD2EzJbUt0K9nHjdfg.jpg', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'dsfgfdgdfgfdsgdfgdfgsdf', '2023-11-24 14:33:49', '2023-11-24 14:33:49'),
(9, 4, '2', 'dsfgdfgdfgsdfg', NULL, NULL, 'uploads/cdmIAkznHHHGYNC2bVBjO0iErDZD3cTaQ5APcd9J.mp4', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'gdsfgdgdfgdgdfg', '2023-11-24 14:34:33', '2023-11-24 14:34:33'),
(10, 4, '2', 'dsfdsfsdfd', NULL, NULL, 'uploads/nRWihEIWcNx5QgGnm3Y5V6L3xwvDg3vXw9fqyNGI.mp4', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'dsfdsfasdfdsfdasdf', '2023-11-24 14:44:51', '2023-11-24 14:44:51'),
(11, 5, '2', 'dfsgdfgdgdgfg', NULL, NULL, 'uploads/jvj4eGxLWbwZdHNYnJMyVjs6IGCjjMiqDMJLCFHd.mp4', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'dfgsdfgdfg', '2023-11-24 14:48:15', '2023-11-24 14:48:15'),
(12, 4, '2', 'dfsggdfg', NULL, NULL, 'uploads/kb0pHcA80l1paCW9aPWyhPkP5HqWgxpnrlTIh5KX.mp4', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'gsdgdsfgfdgdsdsfgdfg', '2023-11-24 14:49:25', '2023-11-24 14:49:25'),
(13, 5, '2', 'dsfsdfasf', NULL, NULL, 'uploads/d0O6GcOzu8UMOijt4M8dO80hJ7whBbkQzzkZFbdb.mp4', NULL, NULL, 'https://www.youtube.com/watch?v=DZ6q5X7fAmU', 'dsfdsfadsfdsfd', '2023-11-24 14:51:15', '2023-11-24 14:51:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
