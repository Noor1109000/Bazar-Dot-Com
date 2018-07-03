-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 06:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `prduct`
--

CREATE TABLE `prduct` (
  `id` int(4) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `rajgangBazar_price` varchar(50) NOT NULL,
  `boardmarket_price` varchar(5) NOT NULL,
  `nimshar_price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prduct`
--

INSERT INTO `prduct` (`id`, `product_name`, `rajgangBazar_price`, `boardmarket_price`, `nimshar_price`) VALUES
(1, 'rice', '60', '62', '65'),
(2, 'oil', '100', '105', '110'),
(3, 'Moshur Dal (Deshi)', '120', '110', '105'),
(4, 'Onion', '62', '60', '58'),
(5, 'Potato', '18', '20', '18'),
(6, 'Vhutta', '100', '110', '90');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `number`, `password`) VALUES
(2, 'John', 'xyz@example.com', '111', 'xyz'),
(3, 'abul', 'abul@gmail.com', '1234567890', '55555'),
(4, 'abul', 'abul@gmail.com', '888', '7777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prduct`
--
ALTER TABLE `prduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prduct`
--
ALTER TABLE `prduct`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
