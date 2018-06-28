-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 08:24 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Flour'),
(2, 'Chocolate'),
(3, 'Grains'),
(4, 'Spices'),
(6, 'Biscuits'),
(7, 'Dry Fruits & Nuts'),
(9, 'Sauces & Ketchups'),
(10, 'Chips & Crisps'),
(11, 'Deos & Perfumes'),
(12, 'Noodles & vermicelli'),
(13, 'Cold Drinks'),
(14, 'Beauty Products'),
(15, 'HouseHold Needs');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(100) DEFAULT 'NOT NULL',
  `customerEmail` varchar(100) DEFAULT 'NOT_NULL',
  `customerPass` varchar(255) DEFAULT 'NOT_NULL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `customerName`, `customerEmail`, `customerPass`) VALUES
(1, 'Shivmohan', 'shivmohan194@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'KiSpencer', 'KiSpencer@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(3, 'Aditya', 'AdityaGuru@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(4, 'Shivam', 'Shivambca@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `msg` varchar(200) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `name`, `msg`, `mail`) VALUES
(1, 'Shivvam', 'Awesome ....nice User interface and easy to use for shopping', 'Shivambca@gmail.com'),
(2, 'Aditya', 'nice job ..Keep it up...', 'AdityaGuru@gmail.com'),
(3, 'Raghvendra Pratap', 'it is good grocery shopping portal.....', 'Raghu@gmail.com'),
(4, 'Abhishek Pratap', 'Upload More Products.....', 'Abhi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `category_id`, `quantity`) VALUES
(1, 'Ashirwad Atta', 286, 1, '10Kg'),
(2, 'Annapurna Atta', 199, 1, '5Kg'),
(3, 'Cadbury Dairy Milk', 345, 2, '270gm'),
(4, 'Chocofarm', 299, 2, '250gm'),
(5, 'Toor Daal', 88, 3, '1kg'),
(6, 'Moong Daal', 51, 3, '500 gram'),
(7, 'kwality Kitchen King', 56, 4, '100 gram'),
(8, 'Ching Secret Veg Miracle manchurian Masala', 28, 4, '50 gram');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'shiv', 'shiv@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'raj', 'raj0520@gmail.com', '91b4d142823f7d20c5f08df69122de43f35f057a988d9619f6d3138485c9a203'),
(3, 'anshagarwal', 'ansh.basketball@gmail.com', '4c80bcc9f17fc77b29b0809998ddfa0470144bcb6a87c0fc384d6a8b142caf79'),
(4, 'shiv', 'shivmohan194@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225'),
(5, 'hello', 'hello@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD UNIQUE KEY `customerEmail` (`customerEmail`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `customer_email` (`customer_email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
