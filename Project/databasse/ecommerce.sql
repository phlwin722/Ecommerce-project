-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 08:50 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `First_name`, `Last_name`, `Username`, `Password`) VALUES
(1, 'Dexter', 'Jamero', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `archives_product`
--

CREATE TABLE `archives_product` (
  `Product_code` int(12) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Catergory` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archives_product`
--

INSERT INTO `archives_product` (`Product_code`, `Product_name`, `Quantity`, `Price`, `Catergory`, `Image`) VALUES
(12, '121', 212, '12', 'agasg', '660d16bf2bc08.jpg'),
(23232, '12', 12, '12', 'agadga', '660d15b1cf650.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Email`, `Description`) VALUES
(20245049, 'Ecommerce', 'tangina mo ');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Code` int(11) NOT NULL,
  `Full_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Product` varchar(255) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Code`, `Full_name`, `Email`, `Product`, `Message`) VALUES
(2023500, 'Dexter Jamero', 'ewae', 'Motor', 'abg oabgit'),
(2023501, 'danica gois', 'ewaea', 'fawfwa', 'faef');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `Product_code` int(11) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`Product_code`, `Product_name`, `Quantity`, `Price`, `Category`, `Image`) VALUES
(20235020, '21', '1', '1', '', '660d0e43e10ba.jpg'),
(20235021, 'Test Paper', '13', '1', '', '660d15b1cf650.jpg'),
(20235022, 'Test Paper', '13', '1', '', '660d162d42208.jpg'),
(20235023, 'gad', '1', '1', 'Gaming Accessories', '660d163ad0879.jpg'),
(20235024, 'gad', '1', '1', 'Gaming Accessories', '660d16bf2bc08.jpg'),
(20235025, 'awda', '1', '1', 'Musical Instrument', '660d16cebbdd9.jpg'),
(20235026, 'Dexter', '1', '1', 'Sport tools', '660d1b406a9cf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `name`, `image`) VALUES
(0, '', '660c1c0dd80ed.jpg'),
(0, 'awfaw', '660c1c6949823.jpg'),
(0, 'dawdaw', '660ccff85295f.jpg'),
(0, 'fasfas', '660ce3897adc1.jpg'),
(0, 'gesaga', '660ce3e9b3f68.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Middle_name` varchar(255) NOT NULL,
  `Block_&_Lot` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`ID`, `First_name`, `Last_name`, `Middle_name`, `Block_&_Lot`, `Barangay`, `City`, `Province`, `Email`, `Password`, `Image`) VALUES
(2021, 'w', 'w', 'w', 'w', 'San Rafael 1', 'Angeles City', 'Bukidnon', 'daw@gmail', 'w', ''),
(2022, 'w', 'w', 'wd', 'wd', 'FVR', 'Manila', 'Agusan del Norte', 'aadmin@gmail.com', 'a', ''),
(2023, 'Dexter', 'Jamero', 'Patan', 'block 25 lot 16 ', 'FVR', 'Mandaluyong', 'Bulacan', 'jamerodexter13@gmail.com', 'a', ''),
(2024, 'asf', 'fasd', 'fas', 'fas', 'San Rafael 1', 'Pasay', 'Bulacan', 'w@gmail.com', 'fasfasf', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `archives_product`
--
ALTER TABLE `archives_product`
  ADD PRIMARY KEY (`Product_code`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`Product_code`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `archives_product`
--
ALTER TABLE `archives_product`
  MODIFY `Product_code` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23233;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20245050;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023502;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `Product_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20235027;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2025;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
