-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 06:45 PM
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
-- Database: `signup_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email`, `phone`, `password`) VALUES
('Rs', 'redoyahamedrs@gmail.com', '01797003614', 'ppppp00000'),
('rsredoy', 'redoyahamedrs@gmail.com', '01797003614', 'ppppp00000'),
('Sabbir', 'redoyahamedrs@gmail.com', '01797003614', 'ppppp00000'),
('sabbir', 'sabbir@diu.edu.bd', '01797123453', 'SABBIR123'),
('sani', 'imabdullahalsani@gmail.com', '01751086011', 'ppppp00000'),
('Shahnewaz Saeem', 'saeem-15-5442@diu.edu.bd', '01722312157', 'saeem11'),
('shoib', 'redoyahamedrs@gmail.com', '01797003614', 'ppppp00000'),
('Shoib', 'shoib-15-5511@diu.edu.bd', '01712345678', 'ppppp00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`,`email`,`phone`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
