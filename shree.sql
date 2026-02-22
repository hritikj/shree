-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 03:01 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shree`
--
CREATE DATABASE IF NOT EXISTS `shree` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shree`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'SH01', 'Morphy Richards Daisy 1000-Watt Dry Iron ', 'Aesthetically crafted plastic body\r\nTemperature control for more convenience\r\nComes with a swivel cord that makes movement easy\r\n', 'iron.jpg', 50, '1095.00'),
(2, 'SH02', '\r\nPower Pro 500-Watt Mixer Grinder', 'Sturdy stainless steel 3 jars, wet and dry grinding, liquidizing, chutney making\n3 speed control motor\nMulti-functional blade system\nMotor overload protector', 'mixer.jpg', 100, '2499.00'),
(3, 'SH03', 'PIC 27.0 1200-Watt Induction Cooktop', 'Indian menu option\nAnti magnetic wall\nTimer with user pre-set\nAutomatic voltage regulator\nWarranty: 1 year on product\nPower: 1200 watts; Operating Voltage: 230 volts\nIncludes: Induction cooktop\n', 'induction.jpg', 50, '3495.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobno` (`mobno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `mobno`, `address`, `email`, `password`, `type`) VALUES
(5, 'AZHAR', 'KHAN', '9768267242', 'govandi', 'azhar@gmail.com', '123456', 'user'),
(7, 'Hardik', 'Jain', '9876543210', 'Lalbaug Mumbai', 'haddy05@gmail.com', '12345687', 'user'),
(8, 'john', 'Snow', '9964578523', 'govandi mumbai', 'john03', '12345', 'user'),
(18, 'pratik', 'kadam', '983625147', 'BOISAR', 'barca05', '12345', 'user'),
(20, 'kulraj', 'saini', '9632587410', 'surat', 'kuku23', '78945', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
