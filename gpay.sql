-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 09:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `fromid` int(10) NOT NULL,
  `toid` int(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id` int(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`fromid`, `toid`, `amt`, `status`, `id`, `time`) VALUES
(81, 82, 30, 'Succesfull', 1, '2021-03-14 22:02:47'),
(81, 82, 6000, 'INSUFFICIENT BALANCE', 3, '2021-03-14 22:02:47'),
(81, 82, 6000, 'Pin ERROR', 4, '2021-03-14 22:02:47'),
(81, 82, 5, 'Succesfull', 5, '2021-03-14 22:02:47'),
(81, 82, 35, 'Succesfull', 6, '2021-03-14 22:02:47'),
(85, 81, 3500, 'Succesfull', 7, '2021-03-14 22:02:47'),
(89, 81, 300, 'Succesfull', 8, '2021-03-14 22:02:47'),
(89, 81, 600, 'Pin ERROR', 9, '2021-03-14 22:02:47'),
(89, 81, 97001, 'INSUFFICIENT BALANCE', 10, '2021-03-14 22:02:47'),
(85, 81, 700, 'Succesfull', 11, '2021-03-14 22:02:47'),
(90, 81, 1200, 'Succesfull', 12, '2021-03-14 22:02:47'),
(90, 81, 6000, 'INSUFFICIENT BALANCE', 13, '2021-03-14 22:02:47'),
(81, 91, 700, 'Succesfull', 14, '2021-03-14 22:02:47'),
(91, 81, 600, 'Pin ERROR', 15, '2021-03-14 22:02:47'),
(91, 81, 800, 'INSUFFICIENT BALANCE', 16, '2021-03-14 22:02:47'),
(92, 81, 200, 'Succesfull', 17, '2021-03-14 22:02:47'),
(92, 81, 400, 'Pin ERROR', 18, '2021-03-14 18:12:30'),
(92, 81, 8000, 'INSUFFICIENT BALANCE', 19, '2021-03-14 18:13:47'),
(81, 92, 100, 'Succesfull', 20, '2021-03-14 22:03:59'),
(93, 81, 50, 'Succesfull', 21, '2021-03-15 13:16:16'),
(81, 93, 100050, 'INSUFFICIENT BALANCE', 22, '2021-03-15 13:16:55'),
(81, 93, 5350, 'Succesfull', 23, '2021-03-15 13:17:34'),
(93, 81, 5300, 'Succesfull', 24, '2021-03-15 13:24:14'),
(94, 81, 5000, 'Pin ERROR', 25, '2021-03-15 14:10:02'),
(94, 81, 5000, 'Succesfull', 26, '2021-03-15 14:10:15'),
(94, 81, 160000, 'INSUFFICIENT BALANCE', 27, '2021-03-15 14:10:45'),
(81, 96, 5000, 'Succesfull', 28, '2021-03-15 23:54:00'),
(81, 96, 450, 'Pin ERROR', 29, '2021-03-15 23:55:15'),
(81, 96, 8000, 'INSUFFICIENT BALANCE', 30, '2021-03-15 23:55:41'),
(97, 81, 100, 'Succesfull', 31, '2021-03-16 10:42:42'),
(97, 81, 100, 'Pin ERROR', 32, '2021-03-16 10:43:22'),
(97, 81, 6000, 'INSUFFICIENT BALANCE', 33, '2021-03-16 10:43:47'),
(98, 81, 2000, 'Pin ERROR', 34, '2021-03-16 13:31:58'),
(81, 98, 500, 'Succesfull', 35, '2021-03-16 13:32:32'),
(81, 99, 100, 'Succesfull', 36, '2021-03-16 15:45:32'),
(99, 81, 500, 'Pin ERROR', 37, '2021-03-16 15:46:05'),
(99, 81, 3000, 'INSUFFICIENT BALANCE', 38, '2021-03-16 15:46:23'),
(81, 100, 800, 'Succesfull', 39, '2021-03-16 16:34:18'),
(81, 100, 100, 'Pin ERROR', 40, '2021-03-16 16:34:58'),
(81, 100, 80000, 'INSUFFICIENT BALANCE', 41, '2021-03-16 16:35:08'),
(100, 81, 500, 'Succesfull', 42, '2021-03-16 16:41:50'),
(81, 100, 200, 'Succesfull', 43, '2021-04-07 13:05:51'),
(100, 81, 100, 'Pin ERROR', 44, '2021-04-07 14:28:26'),
(100, 81, 100, 'Pin ERROR', 45, '2021-04-07 14:28:51'),
(81, 82, 100, 'Pin ERROR', 46, '2021-04-07 14:29:12'),
(87, 81, 100, 'Pin ERROR', 47, '2021-04-07 14:34:38'),
(81, 82, 100, 'Succesfull', 48, '2021-04-07 14:35:23'),
(81, 82, 150, 'Succesfull', 49, '2021-04-07 14:37:24'),
(81, 82, 150, 'Succesfull', 50, '2021-04-07 14:40:55'),
(81, 82, 150, 'Succesfull', 51, '2021-04-07 14:42:32'),
(82, 81, 200, 'Pin ERROR', 52, '2021-04-07 14:46:54'),
(82, 81, 200, 'Pin ERROR', 53, '2021-04-07 14:50:31'),
(81, 82, 100, 'Succesfull', 54, '2021-04-07 14:54:28'),
(81, 82, 100, 'Succesfull', 55, '2021-04-07 14:55:57'),
(81, 82, 100, 'Succesfull', 56, '2021-04-07 14:56:33'),
(81, 82, 100, 'Succesfull', 57, '2021-04-07 14:57:10'),
(81, 82, 100, 'Succesfull', 58, '2021-04-07 14:59:34'),
(81, 82, 200, 'Succesfull', 59, '2021-04-07 15:00:38'),
(81, 82, 100, 'Succesfull', 60, '2021-04-07 15:00:58'),
(81, 82, 160, 'Succesfull', 61, '2021-04-07 15:15:23'),
(81, 82, 160, 'Succesfull', 62, '2021-04-07 15:15:59'),
(81, 82, 90, 'Bonus Credited', 63, '2021-04-07 15:15:59'),
(81, 82, 150, 'Succesfull', 64, '2021-04-07 15:20:32'),
(81, 82, 180, 'Succesfull', 65, '2021-04-07 15:21:23'),
(81, 82, 200, 'Succesfull', 66, '2021-04-07 15:21:47'),
(81, 82, 200, 'Succesfull', 67, '2021-04-07 15:22:26'),
(81, 82, 200, 'Succesfull', 68, '2021-04-07 15:22:38'),
(81, 82, 200, 'Succesfull', 69, '2021-04-07 15:23:10'),
(81, 82, 200, 'Succesfull', 70, '2021-04-07 15:23:20'),
(81, 82, 160, 'Succesfull', 71, '2021-04-07 15:23:56'),
(81, 82, 81, 'Bonus Credited', 72, '2021-04-07 15:25:03'),
(81, 82, 240, 'Succesfull', 73, '2021-04-07 15:25:03'),
(81, 82, 400, 'Succesfull', 74, '2021-04-07 15:25:41'),
(81, 82, 400, 'Succesfull', 75, '2021-04-07 15:26:03'),
(82, 81, 85, 'Bonus Credited', 76, '2021-04-07 15:26:24'),
(82, 81, 500, 'Succesfull', 77, '2021-04-07 15:26:24'),
(101, 81, 500, 'Succesfull', 78, '2021-04-11 14:36:42'),
(101, 81, 500, 'Succesfull', 79, '2021-04-11 14:37:46'),
(101, 81, 500, 'Succesfull', 80, '2021-04-11 14:38:10'),
(101, 81, 500, 'Succesfull', 81, '2021-04-11 14:38:36'),
(101, 81, 120, 'Bonus Credited', 82, '2021-04-11 14:39:02'),
(101, 81, 1000, 'Succesfull', 83, '2021-04-11 14:39:02'),
(102, 81, 67, 'Bonus Credited', 84, '2021-04-11 14:46:06'),
(102, 81, 2000, 'Succesfull', 85, '2021-04-11 14:46:06'),
(102, 81, 1500, 'Pin ERROR', 86, '2021-04-11 14:46:38'),
(102, 81, 5000, 'INSUFFICIENT BALANCE', 87, '2021-04-11 14:47:25'),
(96, 81, 600, 'Succesfull', 88, '2021-04-12 11:52:43'),
(96, 81, 500, 'Succesfull', 89, '2021-04-12 11:56:15'),
(96, 81, 500, 'Succesfull', 90, '2021-04-12 11:56:34'),
(96, 81, 500, 'Succesfull', 91, '2021-04-12 11:56:53'),
(96, 81, 32, 'Bonus Credited', 92, '2021-04-12 11:57:14'),
(96, 81, 500, 'Succesfull', 93, '2021-04-12 11:57:14'),
(102, 81, 200, 'Succesfull', 94, '2021-04-14 22:52:23'),
(102, 81, 200, 'Succesfull', 95, '2021-04-14 22:52:52'),
(102, 82, 300, 'Succesfull', 96, '2021-04-15 16:35:22'),
(102, 101, 500, 'Succesfull', 97, '2021-04-15 17:51:20'),
(102, 98, 5000, 'INSUFFICIENT BALANCE', 98, '2021-04-15 18:01:41'),
(81, 101, 300, 'Succesfull', 99, '2021-04-15 18:01:59'),
(81, 97, 500, 'Succesfull', 100, '2021-04-17 11:18:06'),
(81, 92, 450, 'Succesfull', 101, '2021-04-17 11:18:28'),
(81, 92, 400, 'Succesfull', 102, '2021-04-17 11:18:53'),
(81, 92, 1000, 'Succesfull', 103, '2021-04-17 11:19:11'),
(81, 92, 200, 'Succesfull', 104, '2021-04-17 11:19:28'),
(81, 92, 14, 'Bonus Credited', 105, '2021-04-17 11:19:46'),
(81, 92, 1000, 'Succesfull', 106, '2021-04-17 11:19:46'),
(81, 82, 500, 'Succesfull', 107, '2021-06-23 02:28:49'),
(81, 82, 600, 'Succesfull', 108, '2021-06-23 02:29:16'),
(81, 82, 165, 'Succesfull', 109, '2021-06-23 02:29:32'),
(81, 82, 400, 'Succesfull', 110, '2021-06-23 02:29:45'),
(81, 82, 160, 'Succesfull', 111, '2021-06-23 02:30:13'),
(81, 82, 170, 'Succesfull', 112, '2021-06-23 02:30:25'),
(81, 82, 82, 'Bonus Credited', 113, '2021-06-23 02:31:45'),
(81, 82, 300, 'Succesfull', 114, '2021-06-23 02:31:45'),
(98, 81, 75, 'Bonus Credited', 115, '2021-07-10 12:01:45'),
(98, 81, 15000, 'Succesfull', 116, '2021-07-10 12:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `pid` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `atype` varchar(30) NOT NULL DEFAULT 'Individual',
  `tax` varchar(30) NOT NULL DEFAULT 'Registered individual',
  `address` text NOT NULL,
  `lang` varchar(40) NOT NULL DEFAULT 'English United Kingdom',
  `balance` int(20) NOT NULL,
  `email` text NOT NULL,
  `phno` bigint(20) NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `name`, `country`, `atype`, `tax`, `address`, `lang`, `balance`, `email`, `phno`, `pin`) VALUES
(1, 'Name', 'Country', 'Account type', 'Tax status', 'address', 'Language', 0, 'Email@address', 9999999999, 0),
(81, 'Sunil Aravind', 'India', 'Individual', 'Registered individual', 'Karaikal', 'English United Kingdom', 21951, 'sunilaravindp@gmail.com', 6379780163, 123456),
(82, 'Sushanth', 'USA', 'Individual', 'Registered individual', 'New York', 'English United Kingdom', 7270, 'sushanth@gmail.com', 637871065, 456123),
(85, 'loks', 'canada', 'Individual', 'Registered individual', 'rediyarpalayam', 'English United Kingdom', 3000, 'loks@gmail.com', 7845967812, 654321),
(88, 'gokula krishnan', 'France', 'Joined', 'Registered individual', 'B1/3 PPCL qtrs Karaikal', 'English United States', 7500, 'pgk@gmail.com', 789123456, 456789),
(89, 'raina', 'India', 'Individual', 'Registered individual', 'Gujarath', 'English United States', 9700, 'raina7@gmail.com', 9442487451, 357035),
(90, 'Lojitha', 'India', 'Joined', 'Registered individual', '15,south street,sederapet', 'English United States', 3800, 'lojitha@gogesh.com', 7598915329, 668107),
(91, 'Ulaganathan', 'UK', 'Individual', 'Registered individual', 'Kariakal', 'English United Kingdom', 710, 'ulagadhoni.25@gmail.com', 9876543210, 123456),
(92, 'savietha', 'India', 'Individual', 'Registered individual', 'Bangalore', 'English United Kingdom', 7950, 'savietha1122@gmail.com', 7894561230, 123456),
(93, 'Eren Jaeger', 'Paradis Island', 'Individual', 'Registered individual', 'Wall Rose', 'English United States', 10000000, 'attacktitan@gmail.com', 789456123, 605010),
(94, 'Pavithran V', 'India', 'Joined', 'Registered individual', 'b1/3, ppcl qtrs,', 'English United Kingdom', 15000, 'pavi@gmail.com', 9489258649, 123456),
(95, 'Vasanth', 'UAE', 'Individual', 'Registered individual', 'no,2 vivekanandar nagar dubai bus stand', 'English United States', 5000, 'vasanthwonder29@gmail.com', 9597452906, 290620),
(96, 'kiran', 'Korea', 'Individual', 'Registered individual', 'Seol', 'English United States', 2532, 'kiran@gmail.com', 789461230, 123456),
(97, 'pragadeeshwaran', 'India', 'Individual', 'Registered individual', 'no6,2nd main road,iyyanar nagar, puducherry 13', 'English United States', 5400, 'www.pragat7@gmail.com', 9384978015, 454545),
(98, 'Danya', 'India', 'Individual', 'Registered individual', 'b9 hudco colony , peelamedu,', 'English United Kingdom', 85575, 'danyakumar20.2001@gmail.com', 9566432491, 777777),
(99, 'Sowmiya', 'USA', 'Individual', 'Registered individual', 'New Yourk City', 'English United States', 2100, 'sowmiyapriya2000@gmail.com', 637894561, 121215),
(100, 'wt sir', 'INDIA', 'Individual', 'Registered individual', 'b1/3, ppcl qtrs,', 'English United Kingdom', 1500, 'psa@gmail.com', 7894561231, 789456),
(101, 'modi', 'India', 'Individual', 'Registered individual', 'b1/3, ppcl qtrs,', 'English United States', 7920, 'sunilaravindp@gmail.com', 9489258123, 123456),
(102, 'trump', 'India', 'Individual', 'Registered individual', 'b1/3, ppcl qtrs,', 'English United Kingdom', 1867, 'sunilaravindp@gmail.com', 9489258321, 123456),
(103, 'bhargav', 'India', 'Individual', 'Registered individual', 'b1/3, ppcl qtrs,', 'English United Kingdom', 5000, 'bhargav@gmail.com', 789456321, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

CREATE TABLE `usercontact` (
  `cid` int(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `contactid` int(11) NOT NULL,
  `contactname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`cid`, `userid`, `contactid`, `contactname`) VALUES
(1, 0, 0, ''),
(2, 0, 0, ''),
(3, 102, 81, 'PSA'),
(4, 102, 82, 'sush'),
(5, 102, 101, 'modi'),
(6, 102, 85, 'loks'),
(7, 102, 99, 'sowmiya'),
(8, 102, 103, 'bhargav'),
(9, 102, 88, 'gokul'),
(10, 102, 94, 'pavi'),
(11, 81, 82, 'sush'),
(12, 81, 103, 'bhargav'),
(13, 81, 102, 'trump'),
(14, 81, 101, 'modi'),
(15, 81, 0, 'PSA'),
(16, 103, 81, 'PSA'),
(17, 102, 98, 'danya'),
(18, 81, 92, 'savietha'),
(19, 81, 90, 'loji'),
(20, 98, 81, 'PSA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `usercontact`
--
ALTER TABLE `usercontact`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `pid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `usercontact`
--
ALTER TABLE `usercontact`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
