-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 09:44 PM
-- Server version: 5.6.22
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingCartDemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `menuItems`
--

CREATE TABLE IF NOT EXISTS `menuItems` (
`id` int(11) NOT NULL,
  `menuName` varchar(255) NOT NULL,
  `menuURL` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuItems`
--

INSERT INTO `menuItems` (`id`, `menuName`, `menuURL`) VALUES
(1, 'T-Shirt', '#'),
(2, 'Jumper', '#'),
(3, 'Jacket', '#');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_items`
--

CREATE TABLE IF NOT EXISTS `shopping_items` (
`id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_items`
--

INSERT INTO `shopping_items` (`id`, `item_name`, `item_desc`, `item_id`, `item_image`, `item_price`, `category`) VALUES
(1, 'T-Shirt', 'Some Description here.....', 'item_id_1', 't-shirt_1.jpg', '8.99', 'T-Shirt'),
(2, 'T-Shirt', 'Some Description here.....', 'item_id_2', 't-shirt_2.jpg', '10.99', 'T-Shirt'),
(3, 'T-Shirt', 'Some Description here.....', 'item_id_3', 't-shirt_3.jpg', '3.99', 'T-Shirt'),
(4, 'T-Shirt', 'Some Description here.....', 'item_id_4', 't-shirt_4.jpg', '19.99', 'T-Shirt'),
(5, 'T-Shirt', 'Some Description here.....', 'item_id_5', 't-shirt_5.jpg', '14.99', 'T-Shirt'),
(6, 'T-Shirt', 'Some Description here.....', 'item_id_6', 't-shirt_6.jpg', '9.99', 'T-Shirt'),
(7, 'Jacket', 'Some Description here.....', 'item_id_7', 'jacket_1.jpg', '49.99', 'Jacket'),
(8, 'Jacket', 'Some Description here.....', 'item_id_8', 'jacket_2.jpg', '49.99', 'Jacket'),
(9, 'Jacket', 'Some Description here.....', 'item_id_9', 'jacket_3.jpg', '49.99', 'Jacket'),
(10, 'Jacket', 'Some Description here.....', 'item_id_10', 'jacket_4.jpg', '49.99', 'Jacket'),
(11, 'Jacket', 'Some Description here.....', 'item_id_11', 'jacket_5.jpg', '49.99', 'Jacket'),
(12, 'Jacket', 'Some Description here.....', 'item_id_12', 'jacket_6.jpg', '49.99', 'Jacket'),
(13, 'Jumper', 'Some Description here.....', 'item_id_13', 'jumper_1.jpg', '29.99', 'Jumper'),
(14, 'Jumper', 'Some Description here.....', 'item_id_14', 'jumper_2.jpg', '29.99', 'Jumper'),
(15, 'Jumper', 'Some Description here.....', 'item_id_15', 'jumper_3.jpg', '29.99', 'Jumper'),
(16, 'Jumper', 'Some Description here.....', 'item_id_16', 'jumper_4.jpg', '19.99', 'Jumper'),
(17, 'Jumper', 'Some Description here.....', 'item_id_17', 'jumper_6.jpg', '59.99', 'Jumper'),
(18, 'Jumper', 'Some Description here.....', 'item_id_18', 'jumper_5.jpg', '59.99', 'Jumper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menuItems`
--
ALTER TABLE `menuItems`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_items`
--
ALTER TABLE `shopping_items`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menuItems`
--
ALTER TABLE `menuItems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shopping_items`
--
ALTER TABLE `shopping_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
