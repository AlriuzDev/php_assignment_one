-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 12:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracker`
--
CREATE DATABASE IF NOT EXISTS `tracker` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tracker`;

-- --------------------------------------------------------

--
-- Table structure for table `inputs`
--

CREATE TABLE `inputs` (
  `input_id` int(20) NOT NULL,
  `input_description` varchar(30) NOT NULL,
  `input_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `input_type` varchar(30) NOT NULL,
  `input_option` varchar(30) NOT NULL,
  `amount` decimal(20,0) DEFAULT NULL,
  `input_comment` varchar(255) DEFAULT NULL CHECK (`amount` > 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inputs`
--

INSERT INTO `inputs` (`input_id`, `input_description`, `input_date`, `input_type`, `input_option`, `amount`, `input_comment`) VALUES
(1, 'desc', '2023-09-27 19:36:27', 'income', 'salary', 4000, 'asd'),
(2, 'desc', '2023-09-27 19:41:04', 'income', 'Choose...', 4000, 'asd'),
(3, 'desc', '2023-09-27 19:41:13', 'income', 'Choose...', 4000, 'asd'),
(4, 'expense', '2023-09-27 20:33:00', 'expense', 'grocery', 2000, 'asdasdasd'),
(5, 'another imput', '2023-09-27 20:39:31', 'expense', 'rent', 2000, 'tyuytuyt'),
(6, 'Test expenses', '2023-09-28 01:41:36', 'expense', 'grocery', 500, 'big test expense'),
(7, 'New income', '2023-09-29 00:46:54', 'income', 'investment', 2000, 'test income'),
(8, 'desc', '2023-09-29 22:26:17', 'income', 'salary', 4000, 'hguk'),
(9, 'zccz', '2023-10-12 19:11:41', 'expense', 'grocery', 2000, 'test db');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputs`
--
ALTER TABLE `inputs`
  ADD PRIMARY KEY (`input_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputs`
--
ALTER TABLE `inputs`
  MODIFY `input_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
