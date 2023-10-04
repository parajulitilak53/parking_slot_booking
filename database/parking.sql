-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 04:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking (1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `parking_details`
--

CREATE TABLE `parking_details` (
  `id` int(2) NOT NULL,
  `slot_id` int(2) NOT NULL,
  `user_vehicleno` varchar(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_id` int(2) NOT NULL,
  `slot_date` varchar(10) NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `no_of_hr` int(2) NOT NULL,
  `exit_time` varchar(6) NOT NULL,
  `status` int(11) NOT NULL,
  `booking_code` varchar(100) NOT NULL,
  `qr_code` varchar(50) NOT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking_details`
--

INSERT INTO `parking_details` (`id`, `slot_id`, `user_vehicleno`, `user_name`, `user_id`, `slot_date`, `start_time`, `no_of_hr`, `exit_time`, `status`, `booking_code`, `qr_code`, `price`) VALUES
(9, 9, 'GA14PA6023', 'Tilak', 2, '04/19/2020', '04:00', 4, '08:00', 1, '2904/19/202004:00', '29.png', 40),
(11, 13, 'GA15PA6021', 'Parajuli Tilak', 4, '05/27/2021', '10:06', 3, '13:06', 1, '41305/27/202110:06', '413.png', 30),
(16, 8, 'GA14PA6021', 'Tilak Parajuli', 3, '05/29/2021', '11:21', 8, '19:21', 1, '3805/29/202111:21', '38.png', 80);

-- --------------------------------------------------------

--
-- Table structure for table `slot_master`
--

CREATE TABLE `slot_master` (
  `slot_id` int(2) NOT NULL,
  `slot_no` varchar(3) NOT NULL,
  `slot_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot_master`
--

INSERT INTO `slot_master` (`slot_id`, `slot_no`, `slot_status`) VALUES
(1, '1', 0),
(2, '2', 0),
(3, '3', 0),
(4, '4', 0),
(5, '5', 0),
(6, '6', 0),
(7, '7', 1),
(8, '8', 1),
(9, '9', 1),
(10, '10', 0),
(11, '11', 1),
(12, '12', 0),
(13, '13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contactno` varchar(12) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_vehicleno` varchar(10) NOT NULL,
  `user_rc` varchar(10) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_contactno`, `user_gender`, `user_address`, `user_vehicleno`, `user_rc`, `user_password`) VALUES
(1, 'Krishna', 'krishna@123', '9806641906', 'male', 'Pohara', 'SDFH885669', '', 'd8052f9e09a17e6907629e76bbd261cc'),
(2, 'rajindra', 'rajindra@gmail.com', '9814117515', 'male', 'Pkr', '456201ssd', '', '8bf4e6addd72a9c4c4714708d2941528'),
(3, 'Tilak Parajuli', 'parajulitilak53@gmail.com', '9814117517', 'male', 'pokhara', 'GA14PA6021', 'pokhara', '077c637579be2735284e4059856e6c20'),
(4, 'Parajuli Tilak', 'parajulitilak53@gmail.com', '9814117517', 'male', 'pokhara', 'GA15PA6021', 'pokhara', 'f3e52c300b822a8123e7ace55fe15c08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_details`
--
ALTER TABLE `parking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_master`
--
ALTER TABLE `slot_master`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parking_details`
--
ALTER TABLE `parking_details`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slot_master`
--
ALTER TABLE `slot_master`
  MODIFY `slot_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
