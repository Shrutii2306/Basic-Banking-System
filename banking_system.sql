-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 12:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `recipient` text NOT NULL,
  `amount` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`recipient`, `amount`, `time`, `date`) VALUES
('abhaysharma@gmail.com', 455, '08:16:24', '2023-05-08'),
('devanshsingh@gmail.com', 90, '09:10:17', '2023-05-08'),
('aanyabhat@gmail.com', 10001, '09:12:00', '2023-05-08'),
('aishwaryapatel@gmail.com', 6000, '10:55:42', '2023-05-08'),
('aanyabhat@gmail.com', 100, '10:56:08', '2023-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `email` varchar(24) DEFAULT NULL,
  `date of birth` date DEFAULT NULL,
  `balance` varchar(7) DEFAULT NULL,
  `address` varchar(59) DEFAULT NULL,
  `phone number` varchar(12) DEFAULT NULL,
  `account number` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `date of birth`, `balance`, `address`, `phone number`, `account number`) VALUES
(1, 'Aanya Bhat', 'aanyabhat@gmail.com', '2000-12-12', '65434.6', 'H, 707/708, Apmc Fruits Market, Turbhe, Navi Mumbai', '7351093522', '5829184759284'),
(2, 'Devansh Singh', 'devanshsingh@gmail.com', '1992-02-21', '20443.9', '4, 18, Raja House, M K Amin Marg, Fort', '8232300123', '3871047500577'),
(3, 'Aishwarya Patel', 'aishwaryapatel@gmail.com', '1999-06-18', '51550', 'Sno 80, M J Market', '9421894721', '53020570272611076'),
(4, 'Abhay Sharma', 'abhaysharma@gmail.com', '1987-02-28', '34291.2', '151, 1 Cross Bannerghatt Rd, Bilekahalli', '6790023143', '782928776490017478'),
(5, 'Tejas Gupta', 'tejasgupta@gmail.com', '1995-10-12', '122000', 'Pushpdant Niwas, 1st Floor, Grant Road', '7772315839', '4422104885799184765'),
(6, 'Ravi Mehta', 'ravimehta@gmail.com', '1992-11-26', '35900.6', 'Prasad Chambers, Opera House', '8989542300', '5829184759284'),
(7, 'Priya Singh', 'priyasingh@gmail.com', '1792-02-29', '53543.9', 'Survey No 222/1, Cherlapally', '9810334582', '3871047500577'),
(8, 'Anjali Sharma', 'anjalisharma@gmail.com', '2001-07-16', '4535.5', '4728/21, Daya Nand Marg, Darya Ganj', '9921058832', '53020570272611076'),
(9, 'Tanushree Gupta', 'tanushreegupta@gmail.com', '1991-01-01', '32800.2', '204, Benkesha Complex, Nr Navrangpura Bus Stop, Navrangpura', '9288410093', '782928776490017478'),
(10, 'Ishita Singh', 'ishitasingh@gmail.com', '1997-12-31', '12440.7', 'Wz-21/23, Jwala Heri Market, Brij Complex, Paschim Vihar', '6182934103', '4422104885799184765');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
