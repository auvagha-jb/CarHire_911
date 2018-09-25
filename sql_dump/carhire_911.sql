-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2018 at 04:49 PM
-- Server version: 10.2.18-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carhire_911`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `plate_no` varchar(255) NOT NULL,
  `base_price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `features` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `category`, `brand`, `model`, `colour`, `plate_no`, `base_price`, `image`, `status`, `features`) VALUES
(1, 'Sedan', 'Mercedes Benz', 'S 550', 'black', 'KCF 990J', 9000, 'mercedes-s550', 'Available', 'Air conditioning\r\nGreat control\r\nGreat Chassis\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(0, 'unset'),
(2, 'Accounts'),
(3, 'Inventory'),
(4, 'Marketing'),
(23, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL DEFAULT 0,
  `logged_once` int(1) NOT NULL DEFAULT 0,
  `termination_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `department_id`, `logged_once`, `termination_date`) VALUES
(41, 3, 0, NULL),
(46, 3, 0, NULL),
(47, 4, 1, NULL),
(48, 4, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `location_fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reset_code` varchar(255) NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `valid` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `user_id`, `reset_code`, `sent_at`, `valid`) VALUES
(4, 40, '5be8bd7f28070305e617451bebb1d69a501dff32', '2018-10-21 16:15:13', 1),
(5, 40, '78a3db0cc76e4035d615935e0d6d7b75a349f386', '2018-10-21 16:40:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rental_history`
--

CREATE TABLE `rental_history` (
  `res_no` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `car_condition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `res_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `pickup_location_id` int(11) NOT NULL,
  `return_location_id` int(11) NOT NULL,
  `pickup_datetime` datetime NOT NULL,
  `return_datetime` datetime NOT NULL,
  `mileage_onpick` int(11) NOT NULL,
  `mileage_onreturn` int(11) NOT NULL,
  `extra_mileage_fee` int(11) DEFAULT NULL,
  `extra_feat_fee` int(11) DEFAULT NULL,
  `tax` int(11) NOT NULL,
  `amount_due` int(11) NOT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_no` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_reg` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `user_type` int(11) DEFAULT NULL,
  `is_logged` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `date_reg`, `status`, `user_type`, `is_logged`) VALUES
(40, 'Stephen', 'Wanyee', 'stephen.wanyee@strathmore.edu', '$2y$10$Gf.AplyUrd1Y0gZFFoAR6Ob4fx9RxnBV69.8m4Gf0wG5MUi1l3CaC', '2018-10-21 13:47:14', 1, 3, 0),
(41, 'Vance', 'Joy', 'vancejoy@gamil.com', '$2y$10$i5aKiNdsX83sgZ469ZMyyeeCSTiiq1tnOHxkWJleEOJAyBlq89dF.', '2018-10-21 13:55:17', 1, 2, 0),
(43, 'Ray', 'Charles', 'raycharles@gmail.com', '$2y$10$wCpxF.3mNrUF14que6tgve4FWwXHlLKdv607hGVuBbR8MM8ZnCneK', '2018-10-21 14:52:25', 1, 1, 0),
(44, 'Amy', 'Winehouse', 'amywine@gmail.com', '$2y$10$vuQPtxwLf1ojQLxrkhkk0.v2mIkcXbPBF1vxLxwslMCrXJOwIvofC', '2018-10-21 14:54:33', 1, 1, 0),
(45, 'James', 'Arthur', 'jamie@arthur.com', '$2y$10$vaOCjB06RQ8KrAaAZLAb8Otvl2vZx7LONnuiCzybtgdOyeEBsIIAi', '2018-10-21 14:55:01', 1, 1, 0),
(46, 'James', 'Jaymo', 'james@jaymo.com', '$2y$10$YJtAINl4oe6bOrZBjFrbpODoTcyd7ofACPYMsn19Pehr0KMkXmCji', '2018-10-21 14:57:05', 1, 2, 0),
(47, 'Healthy', 'Living', 'fattie@gmail.com', '$2y$10$uYDUAs3/tG5ybTkP8uqpm.eN8nl2Te5EfS1m5PdJzF6WmFkplPJv2', '2018-10-21 14:59:06', 1, 2, 0),
(48, 'New ', 'Girl', 'newbie@gmail.com', '$2y$10$8b.gm7h70SOeqWkKhkvQXedS4kQYl7SUrlKoigq0kzfFqPGOKxWPi', '2018-10-21 16:41:58', 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_reservation_bridge`
--

CREATE TABLE `user_reservation_bridge` (
  `user_id` int(11) NOT NULL,
  `res_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'customer'),
(2, 'employee'),
(3, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD KEY `department_id` (`department_id`) USING BTREE;

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rental_history`
--
ALTER TABLE `rental_history`
  ADD KEY `res_no` (`res_no`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pickup_location_id` (`pickup_location_id`),
  ADD KEY `return_location_id` (`return_location_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_no`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_type` (`user_type`);

--
-- Indexes for table `user_reservation_bridge`
--
ALTER TABLE `user_reservation_bridge`
  ADD KEY `user` (`user_id`),
  ADD KEY `car_id` (`res_no`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_no` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD CONSTRAINT `password_reset_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `rental_history`
--
ALTER TABLE `rental_history`
  ADD CONSTRAINT `rental_history_ibfk_2` FOREIGN KEY (`res_no`) REFERENCES `reservations` (`res_no`),
  ADD CONSTRAINT `rental_history_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`),
  ADD CONSTRAINT `rental_history_ibfk_4` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`pickup_location_id`) REFERENCES `locations` (`location_id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`return_location_id`) REFERENCES `locations` (`location_id`),
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_type` (`id`);

--
-- Constraints for table `user_reservation_bridge`
--
ALTER TABLE `user_reservation_bridge`
  ADD CONSTRAINT `user_reservation_bridge_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_reservation_bridge_ibfk_2` FOREIGN KEY (`res_no`) REFERENCES `reservations` (`res_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
