-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 03:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `tele` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image_vid`
--

CREATE TABLE `image_vid` (
  `room_id` int(12) NOT NULL,
  `image` varchar(100) NOT NULL,
  `vid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rental_room`
--

CREATE TABLE `rental_room` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE `room_booking` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
  `room_id` int(12) NOT NULL,
  `status` text NOT NULL,
  `price` int(12) NOT NULL,
  `size` int(12) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `note` text DEFAULT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_shared`
--

CREATE TABLE `room_shared` (
  `user_id` int(12) NOT NULL,
  `room_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(12) NOT NULL,
  `account_id` int(12) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `tele` varchar(12) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `image_vid`
--
ALTER TABLE `image_vid`
  ADD KEY `image_vid_room_info_pk` (`room_id`);

--
-- Indexes for table `rental_room`
--
ALTER TABLE `rental_room`
  ADD KEY `rental_room_room_info_pk` (`room_id`);

--
-- Indexes for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD KEY `room_bookong_room_info_pk` (`room_id`);

--
-- Indexes for table `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_shared`
--
ALTER TABLE `room_shared`
  ADD KEY `room_shared_room_info_pk` (`room_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_accounts_pk` (`account_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_vid`
--
ALTER TABLE `image_vid`
  ADD CONSTRAINT `image_vid_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `rental_room`
--
ALTER TABLE `rental_room`
  ADD CONSTRAINT `rental_room_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD CONSTRAINT `room_bookong_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `room_shared`
--
ALTER TABLE `room_shared`
  ADD CONSTRAINT `room_shared_room_info_pk` FOREIGN KEY (`room_id`) REFERENCES `room_info` (`room_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_accounts_pk` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
