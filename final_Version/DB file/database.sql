-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2013 at 11:52 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `changes`
--

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE IF NOT EXISTS `found` (
  `name` varchar(50) NOT NULL,
  `rollno` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`name`, `rollno`, `department`, `email`, `contact`, `itemname`, `description`) VALUES
('ruhi', 0, 'computer Science and Engineering', 'roohee@gmail.com', '9087654321', 'mobile', 'samsung galaxy in vasantham'),
('ggg', 205112025, 'Chemistry', 'ruhinitt@gmail.com', '6789054321', 'mobile', 'nokia');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE IF NOT EXISTS `lost` (
  `name` varchar(50) NOT NULL,
  `rollno` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`name`, `rollno`, `department`, `email`, `contact`, `itemname`, `description`) VALUES
('ruhi', 0, 'computer Science and Engineering', 'roohee@gmail.com', '9087654321', 'id', 'red color'),
('ruhi', 205112025, 'Computer Applications', 'roohee@gmail.com', '8907654321', 'mobile', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('ruhi', '61a2e03ee8f2bd4ce81841c4a66a910f2ae2bd34', 1),
('tanzeem', 'b6eaf4ac0301be180f61f5dfeaea6d03b468bf83', 1),
('205112025', 'd4196385d32e51ee455d591226dbe9cc8189649d', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
