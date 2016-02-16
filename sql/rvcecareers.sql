-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2016 at 04:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rvcecareers`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic-details`
--

CREATE TABLE IF NOT EXISTS `academic-details` (
  `application-id` int(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `current-work` varchar(5) NOT NULL,
  `organisation` varchar(50) NOT NULL,
  `total-exp-y` int(5) NOT NULL,
  `total-exp-m` int(5) NOT NULL,
  `job-type` varchar(25) NOT NULL,
  `emp-status` varchar(25) NOT NULL,
  `exp-sal-l` int(3) NOT NULL,
  `exp-sal-t` int(5) NOT NULL,
  PRIMARY KEY (`application-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `non-academic-details`
--

CREATE TABLE IF NOT EXISTS `non-academic-details` (
  `application-id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `father-name` varchar(100) DEFAULT NULL,
  `mother-name` varchar(100) DEFAULT NULL,
  `nationality` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `marital` varchar(20) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `reservation` varchar(15) NOT NULL,
  `diff-abled` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `tele-r` int(20) NOT NULL,
  `tele-o` int(20) NOT NULL,
  `c-address-1` int(100) NOT NULL,
  `c-address-2` int(100) NOT NULL,
  `c-city` varchar(25) NOT NULL,
  `c-country` varchar(25) NOT NULL,
  `c-state` varchar(25) NOT NULL,
  `c-pincode` int(10) NOT NULL,
  `p-address-1` varchar(100) NOT NULL,
  `p-address-2` varchar(100) NOT NULL,
  `p-city` varchar(25) NOT NULL,
  `p-country` varchar(25) NOT NULL,
  `p-state` varchar(25) NOT NULL,
  `p-pincode` int(10) NOT NULL,
  PRIMARY KEY (`application-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic-details`
--
ALTER TABLE `academic-details`
  ADD CONSTRAINT `academic-details_ibfk_1` FOREIGN KEY (`application-id`) REFERENCES `non-academic-details` (`application-id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
