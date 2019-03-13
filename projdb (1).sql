-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 05:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catcode` bigint(20) UNSIGNED NOT NULL,
  `catname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catcode`, `catname`) VALUES
(1, 'fruits'),
(2, 'vegetable'),
(3, 'creals'),
(4, 'international'),
(5, 'pulses'),
(6, 'spices');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` bigint(20) UNSIGNED NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `image` varchar(45) NOT NULL,
  `price` int(6) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `stock` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `itemname`, `image`, `price`, `unit`, `category`, `stock`) VALUES
(1, 'Lady Fingers', 'Lady_Finger.jpg', 40, 'kg', 2, '50'),
(3, 'Beetroot', 'beetroot.jpg', 50, 'kg', 2, '50'),
(4, 'Almonds', 'almond.jpg', 1000, 'kg', 1, '50'),
(5, 'Apples', 'apple.jpg', 100, 'kg', 1, '50'),
(6, 'Apricot', 'Apricot.jpg', 100, 'kg', 1, '50'),
(7, 'Asafoetida (Hing)', 'asafoetida(hing).jpg', 100, 'gm', 6, '50'),
(8, 'Bananas', 'banana.jpg', 30, 'dozen', 1, '100'),
(9, 'Barley (Jow)', 'barley.jpg', 50, 'kg', 3, '50'),
(10, 'Bay Leaf (Tejpatta)', 'bayleaf(tejpatta).jpg', 60, 'kg', 6, '50'),
(11, 'Capsicum', 'capsicum.jpg', 70, 'kg', 2, '50'),
(12, 'Bitter Gourd', 'Bitter-Gourd.jpg', 50, 'kg', 2, '50'),
(13, 'Black Currant', 'Black-Currants.jpg', 400, 'kg', 1, '50'),
(14, 'Black Eyed Beans (Lobia)', 'blackeyedbeans(lobhai).jpg', 180, 'kg', 5, '50'),
(15, 'Black Gram (Urad Dal)', 'blackgram(urad).jpg', 180, 'kg', 5, '50'),
(16, 'Black Pepper', 'blackpepper.jpg', 35, '100 gm', 6, '50'),
(17, 'Blueberries', 'blueberry.jpg', 2700, 'kg', 1, '50'),
(18, 'Bottle Gourd', 'Bottle-Gourd-Vegetable.jpg', 30, 'kg', 2, '50'),
(19, 'Broken Wheat (Dalia)', 'brokenwheat(dalia).jpg', 75, 'kg', 3, '50'),
(20, 'Carom Seeds (Ajwain)', 'caromseed(ajwain).jpg', 80, 'kg', 6, '50'),
(21, 'Carrots', 'carrots-vegetables.jpg', 40, 'kg', 2, '50'),
(22, 'Cashew Nuts', 'cashewnuts.jpg', 700, '500 gm', 1, '50'),
(23, 'Cauliflower', 'cauliflower.jpg', 15, 'kg', 2, '50'),
(24, 'Celery', 'celery.jpg', 100, 'kg', 2, '50'),
(25, 'Chickpeas (Chana Dal)', 'chickpeas(chana).jpg', 110, 'kg', 5, '50'),
(26, 'Cinnamon', 'cinnamon.jpg', 175, '500 gm', 6, '50'),
(27, 'Clove', 'clove.jpg', 200, '200 gm', 6, '50'),
(28, 'Coconuts', 'coconut.jpg', 20, 'kg', 1, '50'),
(29, 'Coriander', 'Coriander-leaf.jpg', 50, '500 gm', 2, '50'),
(30, 'Cucumber', 'cucumbers.jpg', 30, 'kg', 2, '50'),
(31, 'Cumin Seeds', 'cumin(jeera).jpg', 60, '500 gm', 6, '50'),
(32, 'Custard Apple', 'custardapple.jpg', 150, 'kg', 1, '20'),
(33, 'Dates', 'dates.jpg', 100, '500 gm', 1, '20'),
(34, 'Eggplant', 'Eggplant.jpg', 50, 'kg', 2, '50'),
(35, 'Fenugreek Leaves', 'Fenugreek-Leaf.jpg', 15, 'kg', 2, '10'),
(36, 'Fig', 'fig.jpg', 340, '500 gm', 1, '10'),
(37, 'Garlic', 'Garlic.jpg', 100, 'kg', 2, '20'),
(38, 'Ginger', 'ginger.jpg', 50, '500 gm', 2, '10'),
(39, 'Gooseberry', 'gooseberry.jpg', 30, 'kg', 1, '30'),
(40, 'Grapes', 'grapes.jpg', 60, 'kg', 1, '10'),
(41, 'Cabbage', 'green-cabbage.jpg', 20, 'kg', 2, '10'),
(42, 'Green Cardamom (Elaichi)', 'greencardamom.jpg', 200, '100 gm', 6, '10'),
(43, 'Green Chillies', 'Green-chilli.jpg', 15, '250 gm', 2, '20'),
(44, 'Green Gram (Moong Dal)', 'greengram(moong).jpg', 70, 'kg', 5, '30'),
(45, 'Green Onions', 'Green-Onion.jpg', 20, 'kg', 2, '30'),
(46, 'Groundnuts', 'groundnuts.jpg', 50, 'kg', 2, '30'),
(47, 'Guava', 'guava.jpg', 30, 'kg', 1, '10'),
(48, 'Alfalfa Sprouts', 'i-alfalfasprouts.jpg', 200, 'kg', 4, '10'),
(49, 'Arrowroot', 'i-arrowroot.jpg', 130, 'kg', 4, '10'),
(50, 'Asparagus', 'i-asparagus.jpg', 120, 'kg', 4, '10'),
(51, 'Bael', 'i-bael.jpg', 50, 'kg', 4, '10'),
(52, 'Cherimoya', 'i-cherimoya.jpg', 300, 'kg', 4, '10'),
(53, 'Jicama', 'i-jicama.jpg', 150, 'kg', 4, '10'),
(54, 'Kale', 'i-kale.jpg', 100, 'kg', 4, '10'),
(55, 'Lettuce', 'i-lettuce.jpg', 50, 'kg', 4, '10'),
(56, 'Miracle Fruit', 'i-miraclefruit.jpg', 150, 'kg', 4, '10'),
(57, 'Noni', 'i-noni.jpg', 100, 'kg', 4, '10'),
(58, 'Olives', 'i-olives.jpg', 500, 'kg', 4, '50'),
(59, 'Pitaya', 'i-pitaya.jpg', 200, 'kg', 4, '10'),
(60, 'Platonia', 'i-platonia.jpg', 200, 'kg', 4, '10'),
(61, 'Quince', 'i-quince.jpg', 100, 'kg', 4, '10'),
(62, 'Rambutan', 'i-rambutan.jpg', 200, 'kg', 4, '10'),
(63, 'Rosemary', 'i-rosemary.jpg', 200, 'kg', 4, '10'),
(64, 'Safou', 'i-safou.jpg', 200, 'kg', 4, '20'),
(65, 'Salmonberry', 'i-salmonberry.jpg', 200, 'kg', 4, '20'),
(66, 'Starfruit', 'i-starfruit.jpg', 200, 'kg', 4, '20'),
(67, 'Zucchini', 'i-zucchini.jpg', 100, 'kg', 4, '20'),
(68, 'Jackfruit', 'Jackfruit.jpg', 50, 'kg', 1, '50'),
(69, 'Jalapeno', 'jalpeno.jpg', 30, 'kg', 2, '30'),
(70, 'Kidney Beans (Rajma)', 'kidneybeans(rajma).jpg', 150, 'kg', 5, '40'),
(71, 'Lemons', 'lemon.jpg', 60, '500 gm', 1, '40'),
(72, 'Litchi', 'Litchi.jpg', 70, 'kg', 1, '30'),
(73, 'Maize', 'maize.jpg', 30, 'kg', 3, '50'),
(74, 'Mangoes', 'mango.jpg', 60, 'kg', 1, '50'),
(75, 'Mint', 'Mint.jpg', 10, 'kg', 2, '20'),
(76, 'Mulberry', 'mulberry.jpg', 2500, 'kg', 1, '5'),
(77, 'Mushrooms', 'Mushroom.jpg', 100, 'kg', 2, '30'),
(78, 'Muskmelon', 'muskmelon.jpg', 30, 'kg', 1, '30'),
(79, 'Mustard Seeds (Sarson)', 'mustardseedsbig(sarson).jpg', 55, 'kg', 5, '40'),
(80, 'Mustard Seeds (Raai)', 'mustardseedsmall(raai).jpg', 50, 'kg', 5, '40'),
(81, 'Onions', 'onions.jpg', 20, 'kg', 2, '40'),
(82, 'Oranges', 'orange.jpg', 70, 'kg', 1, '20'),
(83, 'Papaya', 'papaya.jpg', 30, 'kg', 1, '20'),
(84, 'Peach', 'peach.jpg', 60, 'kg', 1, '10'),
(85, 'Pear', 'pear.jpg', 60, 'kg', 1, '30'),
(86, 'Pearl Millet (Bajra)', 'pearlmillet(bajra).jpg', 20, 'kg', 3, '50'),
(87, 'Peas', 'Peas.jpg', 30, 'kg', 2, '30'),
(88, 'Pigeon Pea (Arhar Dal)', 'pigeonpea(arhar).jpg', 180, 'kg', 5, '30'),
(89, 'Pineapple', 'pineapple.jpg', 100, 'kg', 1, '10'),
(90, 'Pistachio', 'pistachio.jpg', 450, '500 gm', 1, '30'),
(91, 'Plum', 'plum.jpg', 70, 'kg', 1, '10'),
(92, 'Pomegranate', 'pomegranate.jpg', 150, 'kg', 1, '20'),
(93, 'Potato', 'Potato.jpg', 30, 'kg', 2, '50'),
(94, 'Puffed Rice (Kurmura)', 'puffedrice(kurmura).jpg', 50, 'kg', 3, '50'),
(95, 'Radish', 'radish.jpg', 30, 'kg', 2, '30'),
(96, 'Raisins', 'raisins.jpg', 200, '500 gm', 1, '40'),
(97, 'Red Lentils (Masoor Dal)', 'redlentils(masoor).jpg', 80, 'kg', 5, '40'),
(98, 'Rice', 'rice.jpg', 70, 'kg', 3, '50'),
(99, 'Sesame Seeds (Til)', 'sesame(til).jpg', 60, 'kg', 5, '30'),
(100, 'Spinach', 'spinach.jpg', 20, 'kg', 2, '20'),
(101, 'Split Bengal Gram (Chana Dal)', 'splitbengalgram(chana).jpg', 70, 'kg', 5, '50'),
(102, 'Sweet Potato', 'sweet-potato.jpg', 50, 'kg', 2, '40'),
(103, 'Tamarind', 'tamarind.jpg', 100, 'kg', 6, '30'),
(104, 'Tomatoes', 'Tomato.jpg', 30, 'kg', 2, '30'),
(105, 'Turnip', 'Turnip.jpg', 40, 'kg', 2, '30'),
(106, 'Walnuts', 'walnut.jpg', 400, 'kg', 1, '40'),
(107, 'Watermelon', 'watermelon.jpg', 40, 'kg', 1, '30'),
(109, 'Wheat', 'wheat.jpg', 220, '10 kg', 3, '100'),
(110, 'White Pepper', 'whitepepper.jpg', 400, '500 gm', 6, '20'),
(111, 'Jabuticaba', 'i-jabuticaba.png', 200, 'kg', 4, '10'),
(113, 'Winter Melon', 'winter-melon.png', 60, 'kg', 1, '30'),
(114, 'Broccoli', 'broccoli.jpg', 50, 'kg', 2, '30'),
(115, 'Cherries', 'cherries.jpg', 150, 'kg', 1, '50'),
(116, 'Finger Millets (Ragi)', 'fingermillet.jpg', 100, 'kg', 3, '40'),
(117, 'Sorghum Bicolor (Jowar)', 'sorghumbicolor.jpg', 40, 'kg', 3, '30'),
(118, 'Brown Cardamom', 'browncardamom.jpg', 200, '100 gm', 6, '20'),
(119, 'Nutmeg (Jaiphal)', 'nutmeg.jpg', 300, '500 gm', 6, '20'),
(120, 'Beaten Rice (Poha)', 'poha.jpg', 30, 'kg', 5, '50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `itemid` bigint(20) UNSIGNED NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` decimal(10,0) NOT NULL,
  `sub` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `email`, `image`, `itemid`, `itemname`, `price`, `qty`, `sub`) VALUES
(9, 'sakshi.gupta.wb@gmail.com', 'i-arrowroot.jpg', 49, 'Arrowroot', 130, '1', '130'),
(10, 'sakshi.gupta.wb@gmail.com', 'i-alfalfasprouts.jpg', 48, 'Alfalfa Sprouts', 200, '1', '200'),
(12, 'sakshi.gupta.wb@gmail.com', 'Fenugreek-Leaf.jpg', 35, 'Fenugreek Leaves', 15, '4', '60'),
(13, 'sakshi.gupta.wb@gmail.com', 'Eggplant.jpg', 34, 'Eggplant', 50, '2', '100'),
(15, 'sakshi.gupta.wb@gmail.com', 'Apricot.jpg', 6, 'Apricot', 100, '1', '100'),
(16, 'sakshi.gupta.wb@gmail.com', 'cauliflower.jpg', 23, 'Cauliflower', 15, '1', '15'),
(17, 'sakshi.gupta.wb@gmail.com', 'Lady_Finger.jpg', 1, 'Lady Fingers', 40, '2', '80'),
(18, 'sakshi.gupta.wb@gmail.com', 'Lady_Finger.jpg', 1, 'Lady Fingers', 40, '1', '40'),
(19, 'sakshi.gupta.wb@gmail.com', 'beetroot.jpg', 3, 'Beetroot', 50, '1', '50'),
(20, 'sakshi.gupta.wb@gmail.com', 'capsicum.jpg', 11, 'Capsicum', 70, '1', '70'),
(21, 'sakshi.gupta.wb@gmail.com', 'apple.jpg', 5, 'Apples', 100, '1', '100'),
(22, 'sakshi.gupta.wb@gmail.com', 'Apricot.jpg', 6, 'Apricot', 100, '1', '100'),
(23, 'sakshi.gupta.wb@gmail.com', 'barley.jpg', 9, 'Barley (Jow)', 50, '1', '50'),
(24, 'aa@gmail.com', 'almond.jpg', 4, 'Almonds', 1000, '1', '1000'),
(25, 'aa@gmail.com', 'apple.jpg', 5, 'Apples', 100, '1', '100'),
(26, 'aa@gmail.com', 'Apricot.jpg', 6, 'Apricot', 100, '1', '100');

-- --------------------------------------------------------

--
-- Table structure for table `temporder`
--

CREATE TABLE `temporder` (
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `itemid` bigint(20) NOT NULL,
  `price` int(3) NOT NULL,
  `qty` int(3) NOT NULL,
  `sub` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `photo` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `address3` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`photo`, `username`, `email`, `password`, `address1`, `address2`, `address3`, `city`, `mobile`, `phone`) VALUES
('30000101.jpg', 'Aaa', 'a@gmail.com', 'aaa', 'sanjay', 'sanjay', 'sanjay', 'Dhanbad,Jharkhand', 2147483647, 22222222),
('30000276.jpg', 'aa', 'aa@gmail.com', 'aa', 'aa', 'aa', 'aa', 'Bhilai,Chhattisgarh', 2147483647, 2147483647),
('carrots-vegetables.jpg', 'Aryan Gupta', 'aryan.gupta.wb@gmail.com', 'aryan', 'House no. 32, Lane no. 12', '', '', 'Indore,Madhya Pradesh', 2147483647, 0),
('beetroot.jpg', 'sakshi gupta', 'sakshi.gupta.wb@gmail.com', 'sakshi', 'House no 22, lane 5', '', '', 'kn', 2147483647, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catcode`),
  ADD UNIQUE KEY `catcode` (`catcode`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`),
  ADD UNIQUE KEY `itemid` (`itemid`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `orderid` (`orderid`),
  ADD KEY `itemid` (`itemid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catcode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`catcode`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `items` (`itemid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
