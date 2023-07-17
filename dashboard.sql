-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2023 at 02:17 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_name` varchar(25) NOT NULL,
  `reg_no` varchar(15) NOT NULL,
  `gender` char(1) NOT NULL,
  `time_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg_no` (`reg_no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `reg_no`, `gender`, `time_added`) VALUES
(1, 'ochwo laban', '21/u/0856', 'M', '2023-07-17 13:37:22'),
(2, 'ochwo laban', '21/x/0856', 'M', '2023-07-17 16:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'labanochwo@gmail.com', '$2y$10$MaHeu9n3O687N4DU0hFjGOgqesTITjrCZXLCLtr6djtJRO4QzHFpC'),
(2, 'emma@gmail.com', '$2y$10$hmdKEzZ3QntIWvUoUM6Dy.RUFaQIFwK8Qh74tQE481Gvi2zBxlMkG'),
(3, 'peruth@gmail.com', '$2y$10$0YBPBMq8WvdcIwpmKnu.HOXjw2U1q5/qIfXKzl72Bbc57/OOTSwRW'),
(4, 'mum@gmail.com', '$2y$10$oKf2THnbi91eOPX0pvVbyeI03o.LWHtocGTX6NfolhEIL8Qz61x9q');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
