-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2018 at 07:22 AM
-- Server version: 10.2.17-MariaDB
-- PHP Version: 7.2.10

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
  `make` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `plate_no` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `min_age` int(11) NOT NULL,
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
(1, 'Sales'),
(2, 'Accounts'),
(3, 'Inventory');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `logged_once` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `department_id`, `logged_once`) VALUES
(3, 2, 0),
(4, 1, 0),
(5, 2, 0),
(6, 1, 0),
(7, 2, 0),
(14, 3, 0);

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
  `user_type` varchar(255) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `user_type`, `date_reg`) VALUES
(3, 'Janey', 'Rogers', 'janey.rogers@gmail.com', '$2y$10$kL.QHD2AeNewKZdtdMFdqOPHiPuNBeAgY1bJ43LNMQPGmBnqnyx.K', 'employee', '2018-09-29 11:23:49'),
(4, 'Ng\'ang\'alito', 'Njunguna', 'conman@gmail.com', '$2y$10$y4k1vBgWwzKJJ0QxbXozGuM.d6G1.v98ii7pafaYGIf.XhVeHZ0SO', 'employee', '2018-09-29 11:26:15'),
(5, 'Dean', 'Lewis', 'dean.lewis@gmail.com', '$2y$10$MD97qkycavXctgeJ8xUHfe5eWBPC4ju91QyfCnhdusT3nHZpqnDtu', 'employee', '2018-09-29 13:09:45'),
(6, 'David', 'Jones', 'djone@gmail.com', '$2y$10$UKaJxMZ/Xbn1/rlDaOW8EO3HkrjcXxlCNkcqCtG1XN7lI/400K9iC', 'employee', '2018-09-29 14:39:22'),
(7, 'Montreal ', 'Canada', 'cancan@gmail.com', '$2y$10$zbRBvkB2n1A5GsuGjJgBb.PHeWV87QeMKYFdzmpsSunJHEa0NWeva', 'employee', '2018-09-29 14:41:36'),
(14, 'James', 'Thurber', 'jaymo@gmail.com', '$2y$10$I32RI8CH4AswwvBhAhz8ge.xFPEeN3S5mAGxftLTHivlvVYBSS5Hi', 'employee', '2018-09-29 20:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_reservation_bridge`
--

CREATE TABLE `user_reservation_bridge` (
  `user_id` int(11) NOT NULL,
  `res_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD KEY `department_id` (`department_id`);

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
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_reservation_bridge`
--
ALTER TABLE `user_reservation_bridge`
  ADD KEY `user` (`user_id`),
  ADD KEY `car_id` (`res_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

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
-- Constraints for table `user_reservation_bridge`
--
ALTER TABLE `user_reservation_bridge`
  ADD CONSTRAINT `user_reservation_bridge_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_reservation_bridge_ibfk_2` FOREIGN KEY (`res_no`) REFERENCES `reservations` (`res_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
