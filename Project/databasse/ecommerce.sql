-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 05:08 AM
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
(20235031, 'NEW Wireless Bluetooth Headphones Colored LED Lights Gaming OverEar Headset Stereo Headphone&Mic', '1', '231', 'jamerodexter13@gmail.com', '66100cbdab839.png'),
(20235074, 'KAYA LYRE XYLOPHONE - with Free Bag, Lyre Beater , Strap (Percussion Instrument)', '1', '600', 'jamerodexter13@gmail.com', '66102960f3e54.png'),
(20235083, 'Jordan NBA Bulls Graphic T-shirt ', '1', '230', 'danicagois@gmail.com', '66109c46c44ee.png');

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
(20235031, 'NEW Wireless Bluetooth Headphones Colored LED Lights Gaming OverEar Headset Stereo Headphone&Mic', '50', '231', 'Gaming Accessories', '66100cbdab839.png'),
(20235032, '1 Pair (2pcs) Gamers Sweatproof Gloves Mobile Finger Sleeve Touchscreen Game Controller Phone Gaming', '50', '20', 'Gaming Accessories', '66100d88173a8.png'),
(20235033, 'Smilee K-21 Pubg Portable Game Grip Pad Mobile Controller L1R1 Gamepad Joystick', '50', '150', 'Gaming Accessories', '66100daf31501.png'),
(20235034, 'Mobile Phone Gaming Radiator Cooling Fan Hurricane turbofan Cooler Portable80cm x 30cm Extended Gami', '50', '158', 'Gaming Accessories', '66100dd98f520.png'),
(20235035, 'Mobile Controller for pc Gaming Keyboard and Mouse bluetooth controller for android phone', '50', '238', 'Gaming Accessories', '66100e6f815c7.png'),
(20235036, '830 Breadboard Set Tie-points Breadboard Set Electronic Component Basic Starter Kit Resistor', '50', '380', 'Electronic Accessories', '661011bd9bd2e.png'),
(20235037, ' Original AD 220V 60W Electric Welding Soldering Iron Temperature Adjustable PH Plug Rosin LEA', '50', '150', 'Electronic Accessories', '661011e26fe52.png'),
(20235038, 'Soldering Iron Set Electronic Iron Kit 200-450°C Adjustable Temperature 60W 220V', '50', '265', 'Electronic Accessories', '661011fb3940f.png'),
(20235039, 'Mitsushi 31In1 Screwdriver Set Mini Electronic Screwdriver Bits Multi-Size Mobile Phone Repair Tool', '50', '58', 'Electronic Accessories', '6610121dda8c7.png'),
(20235040, '858D Hot Air Rework Station Digtal LCD Display Hot Air Soldering Station SMD SMT Hot Air Station', '50', '1180', 'Electronic Accessories', '6610123f6667c.png'),
(20235041, '220V 60W Soldering Iron Original Set 15in1 Electric Welding Temperature Adjustable heavy duty', '50', '350', 'Electronic Accessories', '6610125ab79db.png'),
(20235042, ' Electric Insulation Heat Shrink Tubing Tube 2:1 Electrical Wire Cable Wrap Kit Box Pack', '50', '45', 'Electronic Accessories', '66101299e94c0.png'),
(20235043, 'MEGA.C Vitamin C 60 gummies Immunity Boost for Adults & Kids Ascorbic Acid Vegan & Gluten-Free', '50', '250', 'Health &  Beauty', '661019421d0b4.png'),
(20235044, '30ml Ginger Massage Essential Oil Tightening Body Oil Aromatherapy Massage SPA Body Health Foot XM', '50', '65', 'Health &  Beauty', '6610195a9d839.png'),
(20235045, 'Warts Remover Foot Corn Pads treatment first aid removal pain patch Calluses health foot care', '50', '85', 'Health &  Beauty', '6610198d9332b.png'),
(20235046, 'Collagen Gummies Skin Beauty Hair Skin & Nail Support Whitening Vitamin Biotin + Vitamin C', '50', '400', 'Health &  Beauty', '661019a9d4f39.png'),
(20235047, 'Beauty White Slimming & Whitening Glutathione & Collagen With Vitamin C You Glow Babe 30 Capsules', '50', '300', 'Health &  Beauty', '661019e9ac0fd.png'),
(20235048, 'MeiYanQiong Breast Enhancement Cream + Essence Breast Lift Firming Massage Bust Care 50g+10ml', '50', '380', 'Health &  Beauty', '66101ab116ffc.png'),
(20235049, 'YANJIAYI Glutathione Collagen Glow Gummies Anti-Aging Whitening Face Beauty Skin Supplement 60pc', '50', '500', 'Health &  Beauty', '66101acd6dd4c.png'),
(20235050, ' Bosch Spark Plug \\\" Nickel-Copper\\\" K6tc0r (Fr8dcx+) For Motorcycle', '50', '120', 'Automotive & Motorcyle Parts', '66101cd942f86.png'),
(20235051, 'HOTSPEED 2Pcs Mini Driving light Motorcycle LED Headlight Waterproof Super Bright With 3 Way Switch', '50', '230', 'Automotive & Motorcyle Parts', '66101cfd1ee67.png'),
(20235052, 'AUXITO 1PCS T19 P15D LED Motorcycle Headlight Dual Color 3200K 6500 White 9-30 V', '50', '180', 'Automotive & Motorcyle Parts', '66101d150ba81.png'),
(20235053, 'GOLD SPROCKET CHAIN SET HIGH CARBON STEEL RAIDER150/FI SNIPER 150/FZ XRM12/WAVE/DREAM/C100', '50', '400', 'Automotive & Motorcyle Parts', '66101d3d34f54.png'),
(20235054, 'Motorcycle Signal Light Switch Big', '50', '25', 'Automotive & Motorcyle Parts', '66101d592cf08.png'),
(20235055, 'MOTORCYCLE REAR SHOCK SUPPORT 280MM/310MM 1 PIECE ONLY!!!', '50', '220', 'Automotive & Motorcyle Parts', '66101d7751e4b.png'),
(20235056, 'HOTSPEED Action Camera Holder Gorp Bracket for Motorcycle 360° Rotation Bike CellPhone Holder', '50', '200', 'Automotive & Motorcyle Parts', '66101d9295a2a.png'),
(20235057, ' Popcorn 618 Wired Gaming Keyboard and Mouse Set 16 Backlighting Effects Multi Shortcuts Sequence', '50', '255', 'Computer Accessories', '6610206ab59ac.png'),
(20235058, 'AIODIY Webcam 1080P Full HD Video Call For PC Laptop With Microphone Home USB Video Webcam', '50', '300', 'Computer Accessories', '66102080ea6be.png'),
(20235059, 'ORICO USB HUB Long Cable 4 Port USB 3.0 Splitter With Micro USB Power Port Multiple High Speed OTG A', '50', '155', 'Computer Accessories', '661020a32a947.png'),
(20235060, 'Inplay M10 Rainbow Rgb 120mm Led Cooling Fan For Pc/Computer/Desktop Accessories/Peripherals', '50', '120', 'Computer Accessories', '661020c600325.png'),
(20235061, 'Laptop Stand Aluminum with Cooler Fan Adjustable for 17 inch', '50', '230', 'Computer Accessories', '661020e00269d.png'),
(20235062, 'RAPOO V1/ V1L Mouse Pad Large Anti-Skid Bottom Dirt, Wear & Scratch Resistant', '50', '100', 'Computer Accessories', '661020f5bab27.png'),
(20235063, 'UGREEN Cat 7 Ethernet Cable Slim Network Cable For PS PC Computer Modem Router 4 Twisted Pair Patch ', '50', '60', 'Computer Accessories', '6610210c47b06.png'),
(20235064, 'Secure Computer AVR 500W 220V Overload Protection Power Supply For Desktop', '50', '220', 'Computer Accessories', '66102124cf6f8.png'),
(20235065, '8 in 1 Eco Friendly-Bamboo Kitchen Utensil Set Tool Kitchenware (Bamboo Utensil Holder Included)', '50', '140', 'Kitchen Tools', '661022e9db404.png'),
(20235066, 'Stainless Steel Kitchen Scissors Multipurpose Kitchen Tool Shears Barbecue Nutcracker Opening Bot', '50', '85', 'Kitchen Tools', '661023089a7c2.png'),
(20235067, 'Arrow Professional 3-Stage Knife Sharpener Manual Kitchen Knife Sharpening Tool For all Knive', '50', '50', 'Kitchen Tools', '6610232b93409.png'),
(20235068, 'Meat Tenderizer Steak Mallet Hammer Kitchen Tool', '50', '75', 'Kitchen Tools', '6610233fceab6.png'),
(20235069, '1.3L Oil Filter Pot Stainless Steel / Oil Pot / Food Strainers / Kitchen Tools / LUCKY STAR', '50', '300', 'Kitchen Tools', '661023682f7ec.png'),
(20235070, 'Professional Mandolin Slicer Julienne Cutter Chopper Fruit Vegetable Peelers', '50', '195', 'Kitchen Tools', '6610238333879.png'),
(20235071, 'Stainless Steel Food Tongs Cooking BBQ Meat Clip Heat Bread Salad Kitchen Tool 9/12/14inch', '50', '100', 'Kitchen Tools', '6610239daef47.png'),
(20235072, 'Portable Digital Music 61 Keys Electronic Piano Keyboard Kids Learning Music Microphone', '50', '700', 'Musical Instrument', '6610291303463.png'),
(20235073, 'RIXTON Ukulele Soprano 4 Strings Spruce Basswood Guitar Set Complete Package 21 Inches', '50', '500', 'Musical Instrument', '66102940b5e5c.png'),
(20235074, 'KAYA LYRE XYLOPHONE - with Free Bag, Lyre Beater , Strap (Percussion Instrument)', '50', '600', 'Musical Instrument', '66102960f3e54.png'),
(20235075, 'RIXTON Professional Music Global Flute Recorder (Ivory) Music Instrument for Kids and Adults', '50', '320', 'Musical Instrument', '661029865062c.png'),
(20235076, 'HotCompact Double Half Moon Music Tambourine Percussion Tamborine Drum Durable', '50', '120', 'Musical Instrument', '661029a66e38c.png'),
(20235077, 'Mamy poko Children Kids Jazz Drum Set Musical Instrument ', '50', '900', 'Musical Instrument', '661029cd804e8.png'),
(20235078, 'Random Cotton shorts for men\\\'s', '50', '150', 'Men\\\'s Fassion & Accessories', '66109b7b48c94.png'),
(20235079, 'Men\\\'s t-shirt skull graphic print t-shirt cotton streetwear men\\\'s women\\\'s black oversize t-shirt', '50', '230', 'Men\\\'s Fassion & Accessories', '66109b9a49dd7.png'),
(20235080, 'Men\\\'s Jeans New Best Selling Wrangler Pants for Men', '60', '150', 'Men\\\'s Fassion & Accessories', '66109bb23bca1.png'),
(20235081, 'In Fashioning Basketball Sport Sweat Shorts', '50', '150', 'Men\\\'s Fassion & Accessories', '66109bfc1bcbb.png'),
(20235082, 'MONKEY KING COD Motorcycle Long Sleeve T-Shirt for Mens oversized', '50', '180', 'Men\\\'s Fassion & Accessories', '66109c2dd4ad7.png'),
(20235083, 'Jordan NBA Bulls Graphic T-shirt ', '50', '230', 'Men\\\'s Fassion & Accessories', '66109c46c44ee.png'),
(20235084, 'unisex cotton plus size tshirt for men on sale printed graphic oversized shirts tops', '50', '80', 'Men\\\'s Fassion & Accessories', '66109c99a7ee7.png'),
(20235085, 'Watch+Wallet+Belt Set Male', '50', '1430', 'Men\\\'s Fassion & Accessories', '66109caeb6f61.png'),
(20235086, 'Fashion Top Brand Luxury Women Bracelet Watches Ladies Rose Gold Diamond Quartz Waterproof Women\\\'s', '50', '1430', 'Women\\\'s Fassion & Accessories', '66109fdc67af2.png'),
(20235087, 'Eau De Toilette For Women Perfume Paris 3 In 1 Long Lasting Scent Perfume Perfume ', '50', '400', 'Women\\\'s Fassion & Accessories', '66109ff89a6ba.png'),
(20235088, 'Random seamless Bra for womens Push up Bra Non-Wire Sexy Bra brallete', '50', '130', 'Women\\\'s Fassion & Accessories', '6610a01a44edd.png'),
(20235089, 'Rhian Plus size M-XXXL Hipsters Stretch mid waist Panties for women plus size seamless Full Panty', '50', '130', 'Women\\\'s Fassion & Accessories', '6610a072d8f75.png'),
(20235090, 'Korean version of slip-on lazy flat sneakers for women lightweight student mesh shoes', '50', '150', 'Women\\\'s Fassion & Accessories', '6610a0a0a08a1.png'),
(20235091, 'Women Fashion Ribbon Flat doll shoe Korean Shoes Ballet women shoes', '50', '120', 'Women\\\'s Fassion & Accessories', '6610a0b787ff5.png'),
(20235092, 'Korean Fashion Cute Kitty Cartoon Tees', '50', '180', 'Women\\\'s Fassion & Accessories', '6610a0df98178.png'),
(20235093, 'JOYCE PLAIN DRESS-TSHIRT WITH 2 POCKET FIT UP TO PLUS SIZE', '50', '170', 'Women\\\'s Fassion & Accessories', '6610a0faba6fe.png');

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
  `Contact_No` varchar(255) NOT NULL,
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

INSERT INTO `user_information` (`ID`, `First_name`, `Last_name`, `Middle_name`, `Contact_No`, `Block_&_Lot`, `Barangay`, `City`, `Province`, `Email`, `Password`, `Image`) VALUES
(2021, 'w', 'w', 'w', '09266891561', 'w', 'San Rafael 1', 'Angeles City', 'Bukidnon', 'daw@gmail', 'w', ''),
(2022, 'w', 'w', 'wd', '09266891561', 'wd', 'FVR', 'Manila', 'Agusan del Norte', 'aadmin@gmail.com', 'a', ''),
(2023, 'Dexter', 'Jamero', 'Patan', '09266891561', 'block 25 lot 16 ', 'FVR', 'Mandaluyong', 'Bulacan', 'jamerodexter13@gmail.com', 'a', ''),
(2024, 'asf', 'fasd', 'fas', '09266891561', 'fas', 'San Rafael 1', 'Pasay', 'Bulacan', 'w@gmail.com', 'fasfasf', ''),
(2025, 'Danica', 'Gois ', 'Villobino', '09266891561', 'fasfas', 'FVR', 'Angeles City', 'Bohol', 'danicagois@gmail.com', 'a', '');

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
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
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
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `Product_code` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20235094;

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
  MODIFY `Product_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20235094;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2026;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
