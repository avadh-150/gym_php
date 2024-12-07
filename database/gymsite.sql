-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 06:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `pid` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`pid`, `pic`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '9.jpg'),
(9, '10.jpg'),
(10, '11.jpg'),
(11, '12.jpg'),
(12, '13.jpg'),
(13, '15.jpg'),
(14, '16.jpg'),
(15, '18.jpg'),
(16, '20.jpg'),
(17, '21.jpeg'),
(18, '22.jpg'),
(19, '23.jpg'),
(20, '24.jpg'),
(21, '28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_name`, `password`) VALUES
(2, 'dip123', '202cb962ac59075b964b07152d234b'),
(3, 'het_12', '202cb962ac59075b964b07152d234b'),
(6, 'abc123', '202cb962ac59075b964b07152d234b70'),
(7, 'avadh', '202cb962ac59075b964b07152d234b70'),
(9, 'gym_123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `user_name` varchar(10) NOT NULL,
  `paid_date` varchar(10) DEFAULT NULL,
  `expiry_date` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `plan` varchar(20) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user_name`, `paid_date`, `expiry_date`, `status`, `plan`, `pid`) VALUES
('abc123', NULL, NULL, 'no', NULL, NULL),
('avadh', '14-10-2024', '2024-12-10', 'yes', '3 Month', 1),
('dipak123', '02-10-2024', '2025-10-20', 'yes', '6 month', 2),
('gym_123', '14-10-2024', '2024-12-14', 'yes', '6 Month', 2),
('het_12', '14-10-2024', '2025-01-14', 'yes', '3 Month', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bod` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `jdate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fname`, `lname`, `user_name`, `email`, `password`, `cpassword`, `contact`, `gender`, `bod`, `city`, `jdate`) VALUES
(22, 'ava', 'joy', 'dip123', 'dip123@gmail.com', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', '6589784123', 'male', '2005-02-2', 'surat', '20-05-2014'),
(23, 'het ', 'patel', 'het_12', 'het@gmail.com', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', '9856321047', 'Male', '2004-02-20', 'surat', '2022-10-05'),
(25, 'dipak', 'patel', 'dipak123', 'wotor30234@arensus.c', '57a2f49b78040585ce96aeb70617ef', '57a2f49b78040585ce96aeb70617ef', '9632587410', 'Male', '2024-09-18', 'surat', '2024-09-18'),
(26, 'ava', 'joy', 'abc123', 'abc123@gmail.com', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', '526983147', 'Male', '2005-02-20', 'surat', '2024-02-20'),
(27, 'ava', 'joy', 'avadh', 'avadh123@gmail.com', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', '1234567890', 'female', '2024-09-18', 'surat', '2024-09-18'),
(28, 'gym', 'gym', 'gym_123', 'gym@gmail.com', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', '0908564712', 'Female', '2024-10-11', 'surat', '2024-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbladdpackage`
--

CREATE TABLE `tbladdpackage` (
  `id` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `titlename` varchar(450) DEFAULT NULL,
  `month` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `Description` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladdpackage`
--

INSERT INTO `tbladdpackage` (`id`, `category`, `titlename`, `month`, `Price`, `Description`) VALUES
(1, 'Simple', 'Basic Simple Fitness Gear Package', '3 Month', '1200', 'Limited Access Of Fitness Club\r\nLimited Time Duration(2Hrs/day)\r\nBasic Fitness Excersices\r\nNo Personal Trainer Provide\r\nSaturday-Sunday Off'),
(2, 'Golden', 'Gold Membership Package', '6 Month', '4500', 'Limited Access Of Fitness Club\r\nLimited Time Duration(2Hrs/day)\r\nBasic Fitness Excerscises + Steam Bath\r\nPersonal Trainer Provide\r\nSunday Off \r\n'),
(3, 'Premium', 'Premium Membership Package', '12 Month', '10000', 'Unlimited  Access Of Fitness Club\r\nNo Time Duration\r\nClassic Package + Yoga + ProtinShake\r\nPersonal Trainer Provide \r\nDiet Food IncludedÂ +Â NoÂ SundayÂ Off');

-- --------------------------------------------------------

--
-- Table structure for table `tblgym`
--

CREATE TABLE `tblgym` (
  `fname` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `jdate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgym`
--

INSERT INTO `tblgym` (`fname`, `username`, `email`, `pass`, `phone`, `gender`, `jdate`) VALUES
('admin_test', 'admin', 'adtest120@gmail.com', 'password', '9852147036', 'Male', '2014-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `T_id` int(11) NOT NULL,
  `Tname` varchar(50) NOT NULL,
  `Tgroup` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `contain` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`T_id`, `Tname`, `Tgroup`, `contact`, `contain`, `image`) VALUES
(1, 'Jay Desia', 'I am Boys Group trainer', '9178635207', 'Iï¿½m in a relationship with my gym. Weï¿½re working out things. ', 'team-1.jpg'),
(2, 'Ajay Joshy', 'I am Boys Group trainer', '9856321470', 'I hit the gym so I wonï¿½t have to hit you.', 'testimonial-3.jpg'),
(3, 'Ram Leeya', 'I\'m Girls Group trainer', '856321479', 'Exercise? I thought you said extra fries.', '12.jpg'),
(4, 'John kely', 'I am Boys Group trainer', '6589742312', 'My favorite exercise at the gym would probably be judging.', 'team-3.jpg'),
(5, 'jenisha dhara', 'I am Zumba Group trainer', '6589742789', 'If you want to know the correct exercise method, the answer is whatever hurts most.', 'team-4.jpg'),
(7, 'ineja leeja', 'I am Boys Group trainer', '9285214763', 'If you want......', 'gym-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbladdpackage`
--
ALTER TABLE `tbladdpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbladdpackage`
--
ALTER TABLE `tbladdpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
