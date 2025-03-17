-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 02:31 PM
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
-- Database: `gensanmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `collaboration`
--
-- Error reading structure for table gensanmed.collaboration: #1932 - Table &#039;gensanmed.collaboration&#039; doesn&#039;t exist in engine
-- Error reading data for table gensanmed.collaboration: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `gensanmed`.`collaboration`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `collaborations`
--

CREATE TABLE `collaborations` (
  `collab_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `logo` text NOT NULL,
  `description` text NOT NULL,
  `status` enum('active','inactive','archived','') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collaborations`
--

INSERT INTO `collaborations` (`collab_id`, `title`, `logo`, `description`, `status`, `created_at`) VALUES
(1, 'Organics', 'Collaborations/amaphil.webp', 'Hatodie', 'active', '2025-02-28 12:42:02'),
(2, 'Boto', 'Collaborations/portrait-3d-doctors-hospital-attire (1).jpg', 'qqwdqwdqdqwd', 'active', '2025-02-28 12:49:25'),
(3, 'Sandigan', 'Collaborations/SANDIG (HALF)-Photoroom.png', 'qwdqwdqwd', 'inactive', '2025-02-28 12:53:25'),
(4, 'qwdqwd', 'Collaborations/icons8-mission.gif', 'qwdqwdqwdqwd', 'archived', '2025-02-28 12:54:33'),
(5, 'PhilHealth', 'Collaborations/Philhealth.webp', 'PhilHealth one of the leading korakot philippines.', 'active', '2025-02-28 13:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `contact_number`, `department`, `created_at`) VALUES
(1, 'GensanMedAdmin', 'princejaysayre11324@gmail.com', '$2y$10$biEqznPC9awmVciYqvKNmO.0C/7Cgymayiol6TJRm4Em2t1JWAXS.', '09938739524', 'Marketing', '2025-02-25 02:10:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collaborations`
--
ALTER TABLE `collaborations`
  ADD PRIMARY KEY (`collab_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collaborations`
--
ALTER TABLE `collaborations`
  MODIFY `collab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
