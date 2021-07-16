-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 06:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beejee`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(1) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `name`, `text`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alex Garrett', 'First todo written by me!', 'rakhat.khassanov@mail.ru', 1, '2021-07-14 20:06:48', '2021-07-15 12:23:35'),
(2, 'Rakhat Khassan', 'Second todo written by me!123', 'khassanovrakhat@gmail.com', 1, '2021-07-15 09:08:22', '2021-07-15 11:05:21'),
(3, 'Brad Pit', 'Third todo list!', 'rahat_tkd@mail.ru', 0, '2021-07-15 11:23:48', '2021-07-15 11:23:48'),
(8, 'Rakhat', 'QwertyRant', 'rakhat@mail.kz', 0, '2021-07-15 15:40:14', '2021-07-15 15:40:14'),
(9, 'Alex Garrett', '', '', 0, '2021-07-15 15:41:44', '2021-07-15 15:41:44'),
(10, 'Rakhat', '&lt;script&gt;alert(&quot;123&quot;);&lt;/script&gt;', 'rakhat.khassanov@mail.ru', 1, '2021-07-15 15:47:51', '2021-07-15 13:48:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
