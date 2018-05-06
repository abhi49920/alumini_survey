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
-- Table structure for table `btech`
--

CREATE TABLE IF NOT EXISTS `btech` (
  `id` int(11) NOT NULL,
  `uniq_id` varchar(20) NOT NULL,
  `to_gather` varchar(50) NOT NULL,
  `to_identify_problems` varchar(50) NOT NULL,
  `to_think` varchar(50) NOT NULL,
  `to_integrate` varchar(50) NOT NULL,
  `to_identify` varchar(50) NOT NULL,
  `to_select` varchar(50) NOT NULL,
  `to_find` varchar(50) NOT NULL,
  `to_work` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btech`
--

INSERT INTO `btech` (`id`, `uniq_id`, `to_gather`, `to_identify_problems`, `to_think`, `to_integrate`, `to_identify`, `to_select`, `to_find`, `to_work`) VALUES
(22, '59d71e65dde80', '0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `btech`
--
ALTER TABLE `btech`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `btech`
--
ALTER TABLE `btech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
