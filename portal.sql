-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 05:39 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(10) NOT NULL,
  `hostel` varchar(10) NOT NULL,
  `room` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `issue` varchar(300) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `hostel`, `room`, `type`, `issue`, `name`, `email`, `roll`, `date`, `status`) VALUES
(1, 'BH 3', 'A-228', 'electrician', 'fan not working', 'ayush chucha', 'babas@q', '14ucs088', '2016-11-12', 0),
(2, 'BH 1', 'A-228', 'electrician', '', 'chucha', 'bansa@aksd', '', '2016-11-07', 0),
(3, 'BH 3', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(4, 'BH 2', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(5, 'BH 3', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(6, '', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(7, '', 'q', '', 'q', 'q', 'q@k', 'q', '0000-00-00', 0),
(8, '', 'q', '', 'q', 'q', 'q@qq', 'q', '0000-00-00', 0),
(9, '', 'qq', '', 'qq', 'q', 'q@k', 'qq', '0000-00-00', 0),
(10, '', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(11, '', 'q', '', 's', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '0000-00-00', 0),
(12, '', 'q', '', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(13, '', 'q', '', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(14, '', 'q', '', 'q', 'Pushpendra Bansal', 'q@q', 'q', '2016-11-16', 0),
(15, '', 'qq', '', 'q', 'Pushpendra Bansalq', 'q@q', 'q', '2016-11-16', 0),
(16, '', 'q', '', 'q', 'q', 'q@q', 'q', '2016-11-16', 0),
(17, '', 'q', '', 'q', 'Pushpendra Bansalq', 'q@q', 'q', '2016-11-16', 0),
(18, '', 'q', '', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(19, '', 'q', '', 'q', 'q', 'q@q', 'q', '2016-11-16', 0),
(20, '', 'q', '', 'q', 'q', 'q@q', 'q', '2016-11-16', 0),
(21, '', 'q', '', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(22, '', '', '', '', '', '', '', '2016-11-16', 0),
(23, '', 'q', '', 'q', 'q', 'q@q', 'q', '2016-11-16', 0),
(24, '', 'q', '', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(25, '', 'qq', '', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(26, '', '', '', '', '', '', '', '0000-00-00', 0),
(27, '', '', '', '', '', '', '', '0000-00-00', 0),
(28, '', '', '', '', '', '', '', '0000-00-00', 0),
(29, '', '', '', '', '', '', '', '0000-00-00', 0),
(30, '', 'q', '', 'q', 'q', 'q@q', 'q', '2016-11-16', 0),
(31, '', '', '', '', '', '', '', '0000-00-00', 0),
(32, 'BH 1', '', 'electrician', '', '', '', '', '0000-00-00', 0),
(33, '', '', '', '', '', '', '', '0000-00-00', 0),
(34, '', 'q', '', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(35, 'BH 1', '', 'electrician', '', '', '', '', '0000-00-00', 0),
(36, '', 'q', '', 'l', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(37, 'BH 1', 'q', 'electrician', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(38, 'BH 1', 'q', 'electrician', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(39, 'BH 1', 'q', 'electrician', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(40, 'BH 2', 'q', 'electrician', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0),
(41, 'faculty', 'q', 'electrician', 'q', 'Pushpendra Bansal', 'bansalpunitib@gmail.com', 'q', '2016-11-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `suggestion` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `hostel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `suggestion`, `id`, `hostel`) VALUES
('Pushpendra Bansal', 'bansalpunitib@gmail.com', 'csaa', 1, ''),
('q', 'q@q', 'q', 2, 'BH 3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hostel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `job`, `password`, `hostel`) VALUES
(3, 'asu.3333@gmail.com', 'Asyuh', 'electrician', 'ashu', 'BH 1'),
(6, 'p@q', 'qq', 'care_taker', 'qq', 'BH 3'),
(7, 'bansalpunitib@gmail.com', 'Pushpendra Bansal', 'care_taker', 'q', 'BH 1'),
(10, 'dasd@s', 'sa', 'electrician', 'q', ''),
(11, 'q@q', 'q', 'care_taker', 'q', 'BH 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
