-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 03:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natours`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_pass` varchar(255) DEFAULT NULL,
  `admin_image` tinytext,
  `admin_contact` varchar(13) DEFAULT NULL,
  `admin_country` tinytext,
  `admin_job` varchar(255) DEFAULT NULL,
  `admin_about` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'deepak parameswar', 'deepak@gmail.com', '12345', 'admin.jpg', '7034371200', 'india', 'developer', 'am a student and developer'),
(2, 'manju', 'manju@gmail.com', '123456', 'admin2.jpg', '981535533', 'India', 'developer', 'am a developer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) DEFAULT NULL,
  `ip_add` varchar(255) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_pass` varchar(255) DEFAULT NULL,
  `customer_country` text,
  `customer_city` text,
  `customer_contact` varchar(255) DEFAULT NULL,
  `customer_address` text,
  `customer_image` tinytext NOT NULL,
  `customer_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, 'Manju Gavin', 'manjugavin@gmail.com', 'manju123', 'india', 'kunnamkulam', '1234567890', 'abcdefghij', 'Dennis_Ritchie_2011.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `due_amount` int(100) DEFAULT NULL,
  `invoice_no` int(100) DEFAULT NULL,
  `qty` int(100) DEFAULT NULL,
  `s_date` tinytext,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `s_date`, `order_date`, `order_status`) VALUES
(5, 9, 2500, 457705514, 5, '2018-11-13', '2018-11-18 08:04:57', 'Complete'),
(6, 1, 1500, 1480200028, 3, '2018-11-13', '2018-11-21 10:13:44', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `packages_categories`
--

CREATE TABLE `packages_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` tinytext,
  `p_cat_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages_categories`
--

INSERT INTO `packages_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'adventures', 'adventure tours starts from here. we can blast and we can go'),
(2, 'romance', 'romance tours starts from here. we can blast and we can go'),
(3, 'wildlife', 'wildlife tours starts from here. we can blast and we can go'),
(4, 'music & dj', 'music & dj  tours starts from here. we can blast and we can go');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `payment_mode` tinytext,
  `ref_no` int(10) DEFAULT NULL,
  `code` int(10) DEFAULT NULL,
  `payment_date` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `invoice_no` int(10) DEFAULT NULL,
  `product_id` tinytext,
  `qty` int(10) DEFAULT NULL,
  `s_date` tinytext,
  `order_status` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `s_date`, `order_status`) VALUES
(4, 9, 780092292, '1', 2, '2018-11-13', 'pending'),
(5, 9, 457705514, '1', 5, '2018-11-13', 'Complete'),
(6, 1, 1480200028, '1', 3, '2018-11-13', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) DEFAULT NULL,
  `days` int(20) DEFAULT NULL,
  `product_title` tinytext,
  `product_img1` tinytext,
  `product_img2` tinytext,
  `product_img3` tinytext,
  `product_price` int(10) DEFAULT NULL,
  `product_desc` text,
  `product_keywords` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `days`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(1, 2, 8, 'Paris exciting tour', 'paris1_258x163.jpg', 'paris2_258x163.jpg', 'paris3_258x163.jpg', 500, 'paris is an lovely country . couples can enjoy there', 'paris');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) DEFAULT NULL,
  `slide_image` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide Number 1', '1.jpg'),
(2, 'Slide Number 2', '2.jpg'),
(3, 'Slide Number 3', '3.jpg'),
(4, 'Slide Number 4', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `packages_categories`
--
ALTER TABLE `packages_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages_categories`
--
ALTER TABLE `packages_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
