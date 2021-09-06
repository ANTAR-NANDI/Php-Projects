-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 03:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`id`, `blood_group`) VALUES
(1, 'A+'),
(2, 'B+'),
(3, 'AB+'),
(4, 'O+'),
(5, 'AB-'),
(6, 'A-'),
(7, 'B-'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Daate` varchar(255) DEFAULT NULL,
  `Patient` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Mobile` int(255) DEFAULT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Daate`, `Patient`, `Address`, `Mobile`, `Email`) VALUES
('2019-07-30', 'Antar', 'ctg', 1824506162, ''),
('2019-07-30', 'Antar', 'ctg', 1824506162, ''),
('2019-08-14', 'antar', 'smsmsmms', 1824506162, ''),
('2019-08-20', 'hahha', 'aaa', 1824506162, 'antarnandy.2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `request_id` int(200) NOT NULL,
  `Name` char(100) NOT NULL,
  `Requested_Blood` varchar(10) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Patient_Location` varchar(300) NOT NULL,
  `District` varchar(30) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `More_Message` varchar(500) NOT NULL,
  `Contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `request_id`, `Name`, `Requested_Blood`, `Amount`, `Patient_Location`, `District`, `Date`, `More_Message`, `Contact`) VALUES
(12, 1, 'Dulal Nandi', ' AB+', '5 bag', 'narayanhat', 'Comilla', '2019-08-03', 'aa', 1824506162),
(1, 2, 'rimon', 'O-', '10 bag', 'malaysia', 'canada', '12-12-12', 'nai', 2229992),
(11, 3, 'antar nandi', ' AB+', '5 bag', 'narayanhat', 'Comilla', '2019-08-03', 'aa', 1824506162),
(1, 4, 'Suchitra dasNandi', ' AB+', '5 bag', 'narayanhat', 'Comilla', '2019-08-03', 'aa', 1824506162),
(6, 5, 'Dulal Nandi', ' AB+', '5 bag', 'narayanhat', 'Comilla', '2019-08-03', 'aa', 1824506162);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `Name` char(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Passsword` varchar(100) NOT NULL,
  `Blood` char(15) NOT NULL,
  `Gender` char(15) NOT NULL,
  `District` char(100) NOT NULL,
  `Age` int(10) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Eligibility` char(20) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Name`, `Email`, `Passsword`, `Blood`, `Gender`, `District`, `Age`, `Mobile`, `Eligibility`, `Image`) VALUES
(1, 'Antar Nandi', 'antarnandy.2@gmail.com', '1144', '1', 'Male', 'Chittagong', 23, 1824506162, 'Yes', 'demo.png'),
(2, 'Suchitra Das', 'suchi095@gmail.com', '1144', '2', 'Female', 'Chittagong', 25, 1824506162, 'No', 'antar3.jpg'),
(3, 'Bivash Kanti nath', 'Bivash@gmail.com', '1144', '2', 'Male', 'Jessore', 27, 1831147334, 'No', 'antar3.jpg'),
(4, 'Biggang', 'asd@gmail.com', '123', '2', 'Male', 'Chittagong', 12, 12314412, 'No', 'antar3.jpg'),
(5, 'Aoishi Chowdhury', 'Aoishi@gmail.com', '1144', '2', 'Female', 'Khulna', 23, 1831147334, 'No', 'antar3.jpg'),
(6, 'Abdul Aziz', 'aziz@gmail.com', '1144', '8', 'Male', 'Barguna', 12, 22333, 'No', 'antar3.jpg'),
(7, 'Mohammad Irfan', 'irfan@gmail.com', '1144', '4', 'Male', 'Barisal', 44, 1144, 'No', 'antar3.jpg'),
(8, 'Rimon Mohajan', 'Rimonctg6311@gmail.com', '1144', '7', 'Male', 'Jhalokati', 34, 111, 'No', 'antar3.jpg'),
(9, 'Ananna Dey', 'Ananna@gmail.com', '1144', '6', 'Female', 'Pirojpur', 23, 111111, 'No', 'antar3.jpg'),
(10, 'Zack Benton', 'zack@gmail.com', '1144', '3', 'Male', 'Brahmanbaria', 33, 2147483647, 'No', 'antar3.jpg'),
(11, 'Mirajul Hoque', 'miraj@gmail.com', '2233', '5', 'Male', 'Rangamati', 89, 8878, 'No', 'antar3.jpg'),
(12, 'aaaaa', 'a@gmail.com', '62626227', '1', 'Female', 'Noakhali', 76, 999929292, 'No', 'antar3.jpg'),
(13, 'aaaaa', 'a@gmail.com', '62626227', '1', 'Female', 'Noakhali', 76, 999929292, 'No', 'antar3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
