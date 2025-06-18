-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 06:44 PM
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
-- Database: `orderdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_now`
--

CREATE TABLE `order_now` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `hall_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_now`
--

INSERT INTO `order_now` (`id`, `customer_name`, `address`, `hall_no`, `room_no`, `product`, `service`, `quantity`, `total_price`) VALUES
(1, 'Shoib', 'DSC', 2, 226, 'blazer', 'hardWash', 2, 220.00),
(3, 'Md Sabbir Ahamed', 'Daffodil Smart City', 1, 216, 'panjabi', 'iron', 3, 30.00),
(6, 'Shahnewaz Saeem', 'Dsc', 3, 890, 'BedSheet', 'HardWash', 3, 210.00),
(7, 'Shahnewaz Saeem', 'Daffodil Internation University', 2, 226, 'Pant', 'Wash', 1, 20.00),
(8, 'Mushfiqur Rahim', 'Daffodil Smart City', 2, 303, 'Tshirt', 'Wash', 2, 36.00),
(9, 'Shahnewaz Saeem', 'Daffodil Smart City', 2, 226, 'Pant', 'HardWash', 5, 160.00),
(10, 'Saeem', 'Daffodil Internation University', 2, 890, 'Pant', 'Iron', 2, 16.00),
(11, 'Saeem', 'DSC', 2, 890, 'Tshirt', 'Iron', 2, 16.00),
(12, 'Saeem', 'Dsc', 3, 226, 'Shirt', 'Wash', 2, 36.00),
(14, 'Shahnewaz Saeem', 'DSC', 2, 226, 'Shirt', 'HardWash', 5, 150.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_now`
--
ALTER TABLE `order_now`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_now`
--
ALTER TABLE `order_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
