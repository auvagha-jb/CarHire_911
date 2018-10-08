-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2018 at 09:36 PM
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
  `make` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `plate_no` varchar(255) NOT NULL,
  `base_price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `features` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(32, 23, 0, NULL),
(35, 23, 0, NULL),
(36, 4, 0, NULL),
(37, 23, 0, NULL);

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
(23, 'Test', 'User', 'test@gmail.com', '$2y$10$xLnLrSqpV/a/bv4gY0hxeODgfelb9nBp3LyY6UR3HKD/rpDAQp6Zm', '2018-10-18 09:11:29', 1, 1, 0),
(24, 'test', 'user2', 'testing@gmail.com', '$2y$10$/i590EEiUNKxl405/bxYBu37Y2COtSpi7kA/QzmUVEUndftYO9rBa', '2018-10-18 09:11:44', 1, 1, 0),
(25, 'test', 'user2', 'testing@gmail.com', '$2y$10$W7kTQK.aqPoYkAIrF8NJzexDHWuKp/rQD.9wMVzK7qmdN475pWsu.', '2018-10-18 09:11:50', 1, 2, 0),
(26, 'Test', 'User2', 'testing2@gmail.com', '$2y$10$v/R4M2xaLQzKikLvnFQG.OqVZ0cR/aSlJ9KU5JRwWLOxCWfLpxP9m', '2018-10-18 09:14:24', 1, 2, 0),
(27, 'Test', 'User3', 'testing3@gmail.com', '$2y$10$dYIPhGgake/nboFQAAfk4uxA5CIX/SNgvmsTgInZtJ6suWA0jKuVK', '2018-10-18 09:14:41', 1, 1, 0),
(32, 'Vance ', 'Joy', 'vance@gmail.com', '$2y$10$BDelRFdbcxLDXOvcoSZocuf85F2fSte65/k67BpSU/Ft1n/nzluMm', '2018-10-19 08:50:21', 1, 2, 0),
(35, 'Stephen', 'Wanyee', 'stephen.wanyee@strathmore.edu', '$2y$10$Q9gxIy8cBgz5qLZE4gXj6e3abWE6ofyRBceTl/ZB1ieDLhsIl5056', '2018-10-19 09:01:37', 1, 2, 0),
(36, 'Venessa', 'Chege', 'venessa.chege@strathmore.edu', '$2y$10$Q/dDhrkXyvagFha7rO1Teufc2qGAeNUkoFvjiy/VVp8keeXJQtB9q', '2018-10-19 12:43:37', 1, 2, 0),
(37, 'Johnny', 'Test', 'johnnyboy@gmail.com', '$2y$10$.NDlof8Z6fie0ZmTCM9uwegUQ0l4KmmEzB31lOcMylbJpKJzDzUY6', '2018-10-20 18:04:43', 1, 2, 0);

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
  ADD KEY `car_id` (`car_id`),
  ADD KEY `pickup_location_id` (`pickup_location_id`),
  ADD KEY `return_location_id` (`return_location_id`);

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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- Constraints for table `rental_history`
--
ALTER TABLE `rental_history`
  ADD CONSTRAINT `rental_history_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`),
  ADD CONSTRAINT `rental_history_ibfk_2` FOREIGN KEY (`res_no`) REFERENCES `reservations` (`res_no`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`pickup_location_id`) REFERENCES `locations` (`location_id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`return_location_id`) REFERENCES `locations` (`location_id`);

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
