-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2016 at 12:26 AM
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
(1, 'BH 3', 'A-228', 'electrician', 'fan not working', 'ayush chucha', 'babas@q', '14ucs088', '2016-11-07', 0),
(2, 'BH 1', '', 'electrician', '', 'chucha', 'bansa@aksd', '', '2016-11-07', 1),
(3, 'BH 3', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(4, '', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(5, 'BH 3', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(6, '', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0),
(7, '', 'q', '', 'q', 'q', 'q@k', 'q', '0000-00-00', 0),
(8, '', 'q', '', 'q', 'q', 'q@qq', 'q', '0000-00-00', 0),
(9, '', 'qq', '', 'qq', 'q', 'q@k', 'qq', '0000-00-00', 0),
(10, '', 'q', '', 'q', 'q', 'q@q', 'q', '0000-00-00', 0);

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
(7, 'bansalpunitib@gmail.com', 'Pushpendra Bansal', 'care_taker', 'q', 'BH 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
