-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2017 at 10:47 AM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_di`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesslevels`
--

CREATE TABLE `accesslevels` (
  `id` int(11) NOT NULL,
  `Level` int(5) NOT NULL,
  `Description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accesslevels`
--

INSERT INTO `accesslevels` (`id`, `Level`, `Description`, `created`, `modified`) VALUES
(1, 1, 'Opens All Doors', NULL, NULL),
(2, 2, 'Opens Meeting Room & Pantry', NULL, NULL),
(3, 3, 'Opens Pantry', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `CAN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `CAN`, `employee_id`, `created`, `modified`) VALUES
(16, '1111737999503273', 13, NULL, NULL),
(17, '99995555552222', 20, '2017-08-07 03:52:16', '2017-08-07 03:52:16'),
(30, '14520908', 24, NULL, NULL),
(48, '7171717171711', 53, '2017-08-10 04:08:40', '2017-08-10 04:08:40'),
(51, '1234567890120089', 56, '2017-08-10 14:15:25', '2017-08-10 14:15:25'),
(52, '1232321322221231231232', 57, '2017-08-11 07:31:27', '2017-08-11 07:31:27'),
(53, '1234567890120024', 58, '2017-08-11 09:57:38', '2017-08-11 09:57:38'),
(61, '1111740125307744', 66, '2017-08-15 05:04:34', '2017-08-15 05:04:34'),
(62, '1111740115872928', 67, '2017-08-15 05:05:15', '2017-08-15 05:05:15'),
(63, '1111740128119158', 68, '2017-08-15 05:06:05', '2017-08-15 05:06:05'),
(68, '1111737999804181', 73, '2017-08-21 11:19:29', '2017-08-21 11:19:29'),
(69, '1111737999804205', 74, '2017-08-22 06:32:42', '2017-08-22 06:32:42'),
(70, '1111737999804193', 75, '2017-08-22 06:33:21', '2017-08-22 06:33:21'),
(71, '1111737999804180', 76, '2017-08-22 06:34:01', '2017-08-22 06:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `EmployeeID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `accesslevel_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `EmployeeID`, `Name`, `accesslevel_id`, `created`, `modified`) VALUES
(11, '0002', 'Duc Thu', 1, '2017-08-04 02:30:45', '2017-08-04 02:30:45'),
(13, '0001', 'John', 1, '2017-08-06 18:44:24', '2017-08-07 07:43:32'),
(20, '0004', 'Mei', 2, '2017-08-07 03:52:15', '2017-08-07 09:56:03'),
(24, '00052122', 'Mei Jed', 3, '2017-08-07 08:15:47', '2017-08-07 08:15:47'),
(25, '0005212233', 'Mei Jed', 2, '2017-08-07 08:17:04', '2017-08-07 08:17:04'),
(53, '0009', 'Jed UIT', 1, '2017-08-10 04:08:40', '2017-08-10 04:08:40'),
(56, '317', 'JONESPETER', 1, '2017-08-10 14:15:25', '2017-08-11 11:52:41'),
(57, '123091238', 'Testss', 2, '2017-08-11 07:31:27', '2017-08-11 07:31:27'),
(58, '24', 'JON JENSON', 1, '2017-08-11 09:57:38', '2017-08-11 09:57:38'),
(66, '7744', 'Chef', 1, '2017-08-15 05:04:34', '2017-08-15 05:04:34'),
(67, '2928', 'Yono', 2, '2017-08-15 05:05:15', '2017-08-15 05:05:15'),
(68, '9158', 'The Stylistics', 3, '2017-08-15 05:06:05', '2017-08-15 05:06:05'),
(73, 'G001', 'FAYE', 2, '2017-08-21 11:19:29', '2017-08-21 11:19:29'),
(74, '908', 'ALVIN NETS', 1, '2017-08-22 06:32:42', '2017-08-22 06:32:42'),
(75, '909', 'JENNI TSPL', 2, '2017-08-22 06:33:21', '2017-08-22 06:33:21'),
(76, '911', 'FAYE', 3, '2017-08-22 06:34:01', '2017-08-25 04:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `LocationCode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LocationName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AllowAccessLevel` int(5) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `LocationCode`, `LocationName`, `AllowAccessLevel`, `created`, `modified`) VALUES
(1, 'D001', 'Executive Office', 1, NULL, NULL),
(2, 'D002', 'Meeting Room', 2, NULL, NULL),
(3, 'D003', 'Pantry', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `readers`
--

CREATE TABLE `readers` (
  `id` int(11) NOT NULL,
  `ReaderID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Location_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `readers`
--

INSERT INTO `readers` (`id`, `ReaderID`, `Location_id`, `created`, `modified`) VALUES
(5, '00:90:4c:11:22:33', 1, NULL, NULL),
(9, 'b0:38:29:25:c1:a5', 1, NULL, NULL),
(11, 'B0:38:29:25:C8:C3', 2, NULL, NULL),
(17, '353535050361953', 1, NULL, NULL),
(21, '353535050327228', 1, NULL, NULL),
(22, '353535050325412', 1, NULL, NULL),
(23, '353535050354768', 2, NULL, NULL),
(24, '353535050319308', 3, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesslevels`
--
ALTER TABLE `accesslevels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_ibfk_1` (`employee_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_ibfk_1` (`accesslevel_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Location_id` (`Location_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesslevels`
--
ALTER TABLE `accesslevels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `readers`
--
ALTER TABLE `readers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`accesslevel_id`) REFERENCES `accesslevels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `readers`
--
ALTER TABLE `readers`
  ADD CONSTRAINT `readers_ibfk_1` FOREIGN KEY (`Location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
