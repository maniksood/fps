-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2015 at 08:21 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fps2`
--
CREATE DATABASE IF NOT EXISTS `fps2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fps2`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`) VALUES
(1, 'Manik Sood', 'fps_manik', '1234'),
(2, 'Satyam Kapoor', 'fps_satyam', '1234'),
(3, 'Pushp Bajaj', 'fps_pushp', '1234'),
(4, 'Abhimanyu Singh', 'fps_abhimanyu', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `print_orders`
--

CREATE TABLE IF NOT EXISTS `print_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `copies` int(11) NOT NULL,
  `paper` varchar(50) NOT NULL,
  `take_away` varchar(100) NOT NULL,
  `instructions` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `money_status` varchar(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `print_orders`
--

INSERT INTO `print_orders` (`id`, `name`, `email`, `copies`, `paper`, `take_away`, `instructions`, `file_name`, `money_status`, `pages`, `cost`, `status`) VALUES
(1, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'iidgskbhlius', '', 'Not Paid', 0, 0, ''),
(2, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'jvhb', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(3, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Cmder.exe', 'Not Paid', 0, 0, ''),
(4, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Cmder.exe', 'Not Paid', 0, 0, ''),
(5, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(6, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(7, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'jygkh', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(8, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(9, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(10, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(11, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', '', 'Not Paid', 0, 0, ''),
(12, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', '', 'Not Paid', 0, 0, ''),
(13, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(14, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(15, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 2 - Differences between UNIX and Windows.doc', 'Not Paid', 0, 0, ''),
(16, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 2 - Differences between UNIX and Windows.doc', 'Not Paid', 0, 0, ''),
(17, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(18, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(19, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(20, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(21, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'UNIX 5.doc', 'Not Paid', 0, 0, ''),
(22, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 2 - Differences between UNIX and Windows.doc', 'Not Paid', 0, 0, ''),
(23, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf', 'Not Paid', 0, 0, ''),
(24, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'yupeee', 'R Graphics Cookbook.pdf', 'Not Paid', 0, 0, ''),
(25, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf', 'Not Paid', 0, 0, ''),
(26, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf', 'Not Paid', 0, 0, ''),
(27, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf', 'Not Paid', 0, 0, ''),
(28, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf', 'Not Paid', 0, 0, ''),
(29, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf', 'Not Paid', 0, 0, ''),
(30, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf', 'Not Paid', 0, 0, ''),
(31, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf', 'Not Paid', 0, 0, ''),
(32, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf', 'Not Paid', 0, 0, ''),
(33, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf', 'Not Paid', 0, 0, ''),
(34, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf', 'Not Paid', 0, 0, ''),
(35, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf', 'Not Paid', 0, 0, ''),
(36, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Head First Rails.pdf', 'Not Paid', 0, 0, ''),
(37, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Head First Rails.pdf', 'Not Paid', 0, 0, ''),
(38, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Head First Rails.pdf', 'Not Paid', 0, 0, ''),
(39, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf', 'Not Paid', 0, 0, ''),
(40, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'AdbeRdr11010_en_US.exe', 'Not Paid', 0, 0, ''),
(41, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'AdbeRdr11010_en_US.exe', 'Not Paid', 0, 0, ''),
(42, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'hostel.sql', 'Not Paid', 0, 0, ''),
(43, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', '162574-files_excel_reader.tar.bz2', 'Not Paid', 0, 0, ''),
(44, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', '162574-files_excel_reader.tar.bz2', 'Not Paid', 0, 0, ''),
(45, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', '2013-08-24 15.10.50.png', 'Not Paid', 0, 0, ''),
(46, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'UNIX1.doc', 'Not Paid', 0, 0, ''),
(47, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(48, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(49, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(50, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(51, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(52, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(53, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(54, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(55, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(56, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(57, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(58, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', 'Not Paid', 0, 0, ''),
(59, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(60, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(61, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(62, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(63, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Not Paid', 0, 0, ''),
(64, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc', '0', 0, 0, ''),
(65, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', '0', 0, 0, ''),
(66, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf', '0', 0, 0, ''),
(67, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'fps2.sql', 'Not Paid', 0, 0, ''),
(68, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(69, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(70, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(71, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(72, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', '0', 0, 0, ''),
(73, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(74, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(75, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(76, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(77, 'Manik Sood', 'me@maniksood.me', 4, 'A4 - Bond\r\nPaper', 'Dhyan Kaksh 0730 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(78, 'Manik Sood', 'me@maniksood.me', 6, 'A4 - Bond\r\nPaper', 'Dhyan Kaksh 0730 am', '', 'bitcoin.pdf', 'Paid', 0, 0, ''),
(79, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, ''),
(80, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Paid', 0, 0, ''),
(81, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Paid', 0, 0, ''),
(82, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Paid', 0, 0, ''),
(83, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Paid', 9, 18, 'completed'),
(84, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Paid', 9, 18, 'Completed'),
(85, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, 'Pending'),
(86, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, 'Pending'),
(87, 'Satyam Kapoor', 'me@satyamkapoor.com', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Not Paid', 0, 0, 'Pending'),
(88, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'bitcoin.pdf', 'Paid', 9, 18, 'Pending'),
(89, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Dhyan Kaksh 0730 am', '', 'Reading # 1 - UNIX OS Basics.pdf', 'Paid', 17, 34, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verified` varchar(10) NOT NULL,
  `wallet` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `verified`, `wallet`) VALUES
(1, 'Manik Sood', 0, 'me@maniksood.me', '1234', 'yes', 10268),
(2, 'Satyam Kapoor', 0, 'me@satyamkapoor.com', '1234', 'yes', 1526);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_update`
--

CREATE TABLE IF NOT EXISTS `wallet_update` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wallet_update`
--

INSERT INTO `wallet_update` (`id`, `admin_name`, `user_email`, `amount`) VALUES
(1, 'admin', 'me@satyamkapoor.com', 100),
(2, 'fps_manik', 'me@maniksood.me', 100),
(3, 'fps_manik', 'me@maniksood.me', 100),
(4, 'fps_pushp', 'me@satyamkapoor.com', 100),
(5, 'fps_abhimanyu', 'me@maniksood.me', 150),
(6, 'fps_satyam', 'me@satyamkapoor.com', 1223);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
