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
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL,
  `uniq_id` varchar(20) NOT NULL,
  `name_alumnus` varchar(100) NOT NULL,
  `work_organization` varchar(150) NOT NULL,
  `email_alumnus` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year_alumnus` varchar(6) NOT NULL,
  `standing_alumnus` varchar(50) NOT NULL,
  `carrier_status_alumnus` varchar(50) NOT NULL,
  `nature_of_work` varchar(1000) NOT NULL,
  `employment` varchar(50) NOT NULL,
  `PEO1` varchar(50) NOT NULL,
  `PEO2` varchar(50) NOT NULL,
  `PEO3` varchar(50) NOT NULL,
  `PEO4` varchar(50) NOT NULL,
  `PEO5` varchar(50) NOT NULL,
  `communication1` varchar(50) NOT NULL,
  `communication2` varchar(50) NOT NULL,
  `communication3` varchar(50) NOT NULL,
  `communication4` varchar(50) NOT NULL,
  `global_perspective1` varchar(50) NOT NULL,
  `global_perspective2` varchar(50) NOT NULL,
  `global_perspective3` varchar(50) NOT NULL,
  `personality` varchar(50) NOT NULL,
  `academic` varchar(50) NOT NULL,
  `professional` varchar(50) NOT NULL,
  `meet_all_my` varchar(50) NOT NULL,
  `satisfied_with_quality` varchar(50) NOT NULL,
  `most_beneficial_aspects` varchar(1000) NOT NULL,
  `least_beneficial_aspects` varchar(1000) NOT NULL,
  `recommendations` varchar(1000) NOT NULL,
  `comments` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `uniq_id`, `name_alumnus`, `work_organization`, `email_alumnus`, `department`, `year_alumnus`, `standing_alumnus`, `carrier_status_alumnus`, `nature_of_work`, `employment`, `PEO1`, `PEO2`, `PEO3`, `PEO4`, `PEO5`, `communication1`, `communication2`, `communication3`, `communication4`, `global_perspective1`, `global_perspective2`, `global_perspective3`, `personality`, `academic`, `professional`, `meet_all_my`, `satisfied_with_quality`, `most_beneficial_aspects`, `least_beneficial_aspects`, `recommendations`, `comments`) VALUES
(71, '59d71c5e5e18c', 'Abhishekk@t.c', 'ion@digital', 'abhishek@gg.com', '', '2012', '5', 'Working in a multi-national company', 'Involved in marketing/ business development, Involved in PR/ Recruitment', 'Through competitive examination', 'great', 'great', 'moderate', 'little', 'na', 'great', 'moderate', 'slight', 'little', 'great', 'moderate', 'slight', 'slight', 'little', 'moderate', 'slight', 'Somewhat dissatisfied', '<p>ljlfskldjfksl</p>\r\n', '<p>lflsd;fdks</p>\r\n', '<p>lfkdslfs</p>\r\n', '<p>osfsdlfl</p>\r\n'),
(72, '59d71c915437b', 'Abhishekk@t.c', 'ion@digital', 'abhishek@gg.com', '', '2012', '5', 'Working in a multi-national company', 'Involved in marketing/ business development, Involved in PR/ Recruitment', 'Through competitive examination', 'great', 'great', 'moderate', 'little', 'na', 'great', 'moderate', 'slight', 'little', 'great', 'moderate', 'slight', 'slight', 'little', 'moderate', 'slight', 'Somewhat dissatisfied', '<p>ljlfskldjfksl</p>\r\n', '<p>lflsd;fdks</p>\r\n', '<p>lfkdslfs</p>\r\n', '<p>osfsdlfl</p>\r\n'),
(73, '59d71cd389b29', '', '', '', 'Department of Computer Application', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, '59d71cdb511aa', 'Abhishek Kr', 'ION Digital', 'abhishek@gg.com', 'Department of Computer Application', '2012', '5', 'Working in a multi-national company', 'Involved in marketing/ business development, Involved in PR/ Recruitment', 'Through competitive examination', 'great', 'great', 'moderate', 'little', 'na', 'great', 'moderate', 'slight', 'little', 'great', 'moderate', 'slight', 'slight', 'little', 'moderate', 'slight', 'Somewhat dissatisfied', '<p>ljlfskldjfksl</p>\r\n', '<p>lflsd;fdks</p>\r\n', '<p>lfkdslfs</p>\r\n', '<p>osfsdlfl</p>\r\n'),
(75, '59d71cfba2d6b', 'Abhishek Kr', 'ION Digital', 'abhishek@gg.com', 'Department of Computer Application', '2012', '5', 'Working in a multi-national company', 'Involved in marketing/ business development, Involved in PR/ Recruitment', 'Through competitive examination', 'great', 'great', 'moderate', 'little', 'na', 'great', 'moderate', 'slight', 'little', 'great', 'moderate', 'slight', 'slight', 'little', 'moderate', 'slight', 'Somewhat dissatisfied', '<p>ljlfskldjfksl</p>\r\n', '<p>lflsd;fdks</p>\r\n', '<p>lfkdslfs</p>\r\n', '<p>osfsdlfl</p>\r\n'),
(76, '59d71d0b0d134', 'Abhishek Kr', 'ION Digital', 'abhishek@gg.com', 'Department of Computer Application', '2012', '5', 'Working in a multi-national company', 'Involved in marketing/ business development, Involved in PR/ Recruitment', 'Through competitive examination', 'great', 'great', 'moderate', 'little', 'na', 'great', 'moderate', 'slight', 'little', 'great', 'moderate', 'slight', 'slight', 'little', 'moderate', 'slight', 'Somewhat dissatisfied', '<p>ljlfskldjfksl</p>\r\n', '<p>lflsd;fdks</p>\r\n', '<p>lfkdslfs</p>\r\n', '<p>osfsdlfl</p>\r\n'),
(77, '59d71d9b33090', 'Abhishek Kr', 'ION Digital', 'abhishek@gg.com', 'Department of Computer Application', '2012', '5', 'Working in a multi-national company', 'Involved in marketing/ business development, Involved in PR/ Recruitment', 'Through competitive examination', 'great', 'great', 'moderate', 'little', 'na', 'great', 'moderate', 'slight', 'little', 'great', 'moderate', 'slight', 'slight', 'little', 'moderate', 'slight', 'Somewhat dissatisfied', '<p>ljlfskldjfksl</p>\r\n', '<p>lflsd;fdks</p>\r\n', '<p>lfkdslfs</p>\r\n', '<p>osfsdlfl</p>\r\n'),
(78, '59d71e65dde80', 'smamdxla,c', 'xl;sc', 'asfdE@GMAIL.COM', 'B.Tech', '2015', '25', 'SFKSLDF', 'Involved in R & D', 'Through competitive examination', 'moderate', 'slight', 'little', 'slight', 'moderate', 'great', 'moderate', 'slight', 'little', 'great', 'moderate', 'slight', 'moderate', 'moderate', 'slight', 'slight', 'somewhat Satisfied', '<p>SFSLD</p>\r\n', '<p>SDLFKSJF</p>\r\n', '<p>SDLFKJSD</p>\r\n', '<p>SDLFJSDL</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
