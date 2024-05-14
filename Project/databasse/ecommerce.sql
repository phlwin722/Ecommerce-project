-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 11:40 AM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `Product_code` int(255) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`Product_code`, `Product_name`, `Quantity`, `Price`, `Email`, `Image`) VALUES
(20235053, 'GOLD SPROCKET CHAIN SET HIGH CARBON STEEL RAIDER150/FI SNIPER 150/FZ XRM12/WAVE/DREAM/C100', '3', '400', 'guest', '66101d3d34f54.png'),
(20235062, 'RAPOO V1/ V1L Mouse Pad Large Anti-Skid Bottom Dirt, Wear & Scratch Resistant', '2', '100', 'guest', '661020f5bab27.png'),
(20235088, 'Random seamless Bra for womens Push up Bra Non-Wire Sexy Bra brallete', '2', '130', 'guest', '6610a01a44edd.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`Product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `Product_code` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20235094;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
