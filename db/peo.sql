-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 08:14 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jss_enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `peo`
--

CREATE TABLE IF NOT EXISTS `peo` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `peo1` varchar(500) NOT NULL,
  `peo2` varchar(500) NOT NULL,
  `peo3` varchar(500) NOT NULL,
  `peo4` varchar(500) NOT NULL,
  `peo5` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peo`
--

INSERT INTO `peo` (`id`, `department`, `peo1`, `peo2`, `peo3`, `peo4`, `peo5`) VALUES
(1, 'Department of Computer Application', 'To provide students with a sound knowledge of mathematical, scientific\r\nand engineering fundamentals required to solve real world problems.', 'To develop research oriented analytical ability among students and to prepare them for making technical contribution to the society.', 'To develop in students the ability to apply state-of-the-art tools and techniques for designing software products to meet the needs of Industry\nwith due consideration for environment friendly and sustainable\ndevelopment.', 'To prepare students with effective communication skills, professional\nethics and managerial skills.', 'To prepare students with the ability to upgrade their skills and knowledge for life-long learning.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peo`
--
ALTER TABLE `peo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peo`
--
ALTER TABLE `peo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
