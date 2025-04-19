-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 09:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zubair`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_des` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `user_id`, `c_name`, `c_des`, `image`) VALUES
(1, 21, 'designing suits', 'designing suits', 'th (12).jfif'),
(2, 21, 'childs suits', 'childs suits', 'child.jfif'),
(3, 21, 'simple suits', 'simple suits', 'th (13).jfif'),
(4, 21, 'new collection', 'new collection', 'ef83e9ff4240bfc29eb1431eb537d4d9.jpg'),
(5, 21, '3 pc suits', '3 pc suits', 'th (14).jfif'),
(6, 21, 'new 3 pc ', 'new 3 pc ', 'th (15).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `order_id` int(250) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `status` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `kameez_lenght` varchar(250) NOT NULL,
  `arm_lenght` varchar(250) NOT NULL,
  `neck` varchar(250) NOT NULL,
  `chest` varchar(250) NOT NULL,
  `waist` varchar(250) NOT NULL,
  `shoulder` varchar(250) NOT NULL,
  `salwar_lenght` varchar(250) NOT NULL,
  `collar_type` varchar(250) NOT NULL,
  `cuff` varchar(250) NOT NULL,
  `mark_shoulder` varchar(250) NOT NULL,
  `front_pocket` varchar(250) NOT NULL,
  `side_pocket` varchar(250) NOT NULL,
  `salwar_pocket` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `qr_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_name`, `p_name`, `p_price`, `image`, `c_id`) VALUES
(1, 'new 3 pc ', 'big and tall collezione', '2500', 'th (16).jfif', 6),
(2, 'new 3 pc ', 'mens slim fit', '2000', 'th (17).jfif', 6),
(3, '3 pc suits', 'casual professionsal', '3000', 'th (18).jfif', 5),
(4, '3 pc suits', 'wool rich suit', '3000', '61.jpg', 5),
(5, 'designing suits', 'mens summer design', '3200', 'th (19).jfif', 1),
(6, 'designing suits', 'wedding suit', '4000', 'ca9ad4fae3de25a6defe0e7876d2fd38.jpg', 1),
(7, 'designing suits', 'royal suit', '5000', 'th (20).jfif', 1),
(8, 'childs suits', 'child 3pc', '3000', 'th (21).jfif', 2),
(9, 'simple suits', 'eid kurta', '3000', 'th (22).jfif', 3),
(10, 'new collection', 'latest mens design', '4000', 'th (23).jfif', 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contact` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `contact`, `type`) VALUES
(21, 'admin', 'admin@gmail.com', 'admin', 0, 'admin'),
(22, 'sajid', 'sajid@gmail.com', 'sajid', 30000, 'user'),
(23, 'zubair', 'zub@gmail.com', 'zub', 0, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
