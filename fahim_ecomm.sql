-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2016 at 05:24 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fahim_ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`c_id` int(20) NOT NULL,
  `u_id` varchar(80) NOT NULL,
  `p_id` int(10) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_image` text NOT NULL,
  `p_qty` int(40) NOT NULL,
  `p_price` int(40) NOT NULL,
  `total` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`category_id` int(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_size` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `status`, `category_size`) VALUES
(6, 'ELECTRONIC GADGET', 1, 'NULL'),
(7, 'FASHION FOR MEN', 1, 'XL,M,XXL'),
(8, 'FASHION FOR WOMEN', 1, 'XL,M,XXL'),
(9, 'ACCESORIES-MEN', 1, 'XL,M,XXL'),
(10, 'ACCESORIES-WOMEN', 1, 'XL,M,XXL');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('12ac25e8559bb361b2e35d49cff1f8dd', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36', 1468984916, 'a:1:{s:9:"user_data";s:0:"";}');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
`m_id` int(20) NOT NULL,
  `m_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`m_id`, `m_name`) VALUES
(1, 'Cats Eye'),
(2, 'Le Reve'),
(3, 'Mountain'),
(4, 'Samsung'),
(5, 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`o_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `pay_id` int(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `o_total` int(20) NOT NULL,
  `o_status` varchar(20) NOT NULL,
  `o_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`pay_id` int(20) NOT NULL,
  `pay_type` varchar(30) NOT NULL,
  `pay_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`p_id` int(20) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `p_image` text NOT NULL,
  `p_qty` int(50) NOT NULL,
  `p_price` int(40) NOT NULL,
  `p_description` varchar(70) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_image`, `p_qty`, `p_price`, `p_description`, `category_name`, `m_name`) VALUES
(1, 'T-Shirt', 'http://localhost/Fahim/assets/images/tshirt.jpg', 2500, 1500, 'cotton shirt imported from dubai.fine quality', 'FASHION FOR MEN', 'Cats Eye'),
(2, 'Panjabi', 'http://localhost/Fahim/assets/images/punjabi.jpg', 140, 1800, 'good quality.', 'FASHION FOR MEN', 'Le Reve'),
(3, 'Bag Pack', 'http://localhost/Fahim/assets/images/bag.jpg', 250, 1600, 'imported from usa', 'ACCESORIES-MEN', 'Mountain'),
(9, 'mobile', 'http://localhost/Fahim/assets/images/mobile.jpg', 500, 18900, 'original handset,come from abroad.better quality', 'ELECTRONIC GADGET', 'Samsung'),
(10, 'Sports Shoe', 'http://localhost/Fahim/assets/images/turf.jpg', 150, 1700, 'excellent quality and come from abroad', 'ACCESORIES-MEN', 'Nike'),
(11, 'laptop', 'http://localhost/Fahim/assets/images/laptop.gif', 50, 38500, 'come from abroad', 'ELECTRONIC GADGET', 'Samsung'),
(12, 'purse', 'http://localhost/Fahim/assets/images/purse.jpeg', 140, 1600, 'original product made by Bangladesh', 'ACCESORIES-WOMEN', 'Le Reve'),
(13, 'Shades', 'http://localhost/Fahim/assets/images/glass.jpeg', 140, 800, 'Ray Ban Original Sun-Glasses', 'ACCESORIES-MEN', 'Le Reve');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
`s_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`u_id` int(20) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `u_email` varchar(20) NOT NULL,
  `u_mobile` varchar(20) NOT NULL,
  `u_address` varchar(30) NOT NULL,
  `u_type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_password`, `u_email`, `u_mobile`, `u_address`, `u_type`) VALUES
(1, 'walid', '12345', 'walid@gmail.com', '01781790725', 'manikdee,dhaka-1206', 'admin'),
(2, 'hamza', '1234', 'hamza@gmail.com', '01678795455', 'shemoli,dhaka', 'user'),
(3, 'nabil', '1234', 'nabil@gmail.com', '0154869872', 'malibag,dhaka', 'user'),
(7, 'akash', '1234', 'aksh@yahoo.com', '0178548695', 'banani,dhaka', 'user'),
(12, 'pique', '1234', 'piq@yahoo.com', '0167586948', 'badda,rampura', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `category_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
MODIFY `m_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `o_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `pay_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
