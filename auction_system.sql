-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 10:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auction_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
  `Aid` int(4) NOT NULL AUTO_INCREMENT,
  `Iid` int(4) NOT NULL,
  `High_price` varchar(255) NOT NULL,
  `Bid` int(4) NOT NULL,
  `Astartdate` varchar(15) NOT NULL,
  `Aenddate` varchar(15) NOT NULL,
  PRIMARY KEY (`Aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`Aid`, `Iid`, `High_price`, `Bid`, `Astartdate`, `Aenddate`) VALUES
(1, 1, '', 0, '1/2/2017', '5/2/2017'),
(2, 2, '', 0, '20/11/2017', '1/12/2017'),
(3, 3, '400', 0, '2/11/2017', '3/12/2017'),
(4, 4, '200', 0, '11/11/2017', '24/9/2017'),
(5, 5, '200', 0, '9/3/2017', '30/11/2017'),
(6, 6, '', 0, '5/2/2017', '8/12/2018'),
(7, 7, '', 0, '7/11/2017', '8/12/2017'),
(8, 8, '', 0, '9/4/2017', '1011/2017');

-- --------------------------------------------------------

--
-- Table structure for table `auction_item`
--

CREATE TABLE IF NOT EXISTS `auction_item` (
  `Iid` int(4) NOT NULL AUTO_INCREMENT,
  `iname` varchar(255) NOT NULL,
  `Idesc` varchar(255) NOT NULL,
  `Ibaseprice` varchar(255) NOT NULL,
  `Sid` int(4) NOT NULL,
  `Approved` varchar(15) NOT NULL,
  PRIMARY KEY (`Iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `auction_item`
--

INSERT INTO `auction_item` (`Iid`, `iname`, `Idesc`, `Ibaseprice`, `Sid`, `Approved`) VALUES
(3, 'dog', ':)', '4320', 0, ''),
(4, 'bracelet', '...', '300rs', 0, ''),
(5, 'chocolatebox', '//', '400rs', 0, ''),
(6, 'candy', 'fefefe', '40rs', 0, ''),
(7, 'masroom', 'gfg', '2rs', 0, ''),
(8, 'masroom', 'gfg', '2rs', 0, ''),
(9, 'masroom', 'efe', '3', 0, ''),
(10, 'masroom', 'efe', '3', 0, ''),
(11, 'acd', 'dv', '2', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `Bid` int(4) NOT NULL AUTO_INCREMENT,
  `Bname` varchar(255) NOT NULL,
  `Bphone` varchar(10) NOT NULL,
  `Bemail` varchar(255) NOT NULL,
  `Bliability` varchar(255) NOT NULL,
  `Bpass` varchar(255) NOT NULL,
  `Approved` varchar(255) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`Bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`Bid`, `Bname`, `Bphone`, `Bemail`, `Bliability`, `Bpass`, `Approved`) VALUES
(1, 'ded', '323676327', 'dewed@gmail.com', 'dededededed', 'dede', 'No'),
(3, 'purbani', '9873726262', 'a@gmail.com', '2rs', '123', 'Yes'),
(4, 'debolina chowdhury', '8746364758', 'de@gmail.com', '200', '123', 'Yes'),
(5, 'sss', '705383727', 'ce@gmail.com', '432dw', '78', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_login`
--

CREATE TABLE IF NOT EXISTS `buyer_login` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `buyer_login`
--

INSERT INTO `buyer_login` (`sid`, `name`, `password`) VALUES
(1, 'somen', '1234'),
(2, 'somen', '1324'),
(3, 'somen', '78999'),
(4, 'somen', '000000'),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_regg`
--

CREATE TABLE IF NOT EXISTS `buyer_regg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `personal_add` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `buyer_regg`
--

INSERT INTO `buyer_regg` (`sid`, `name`, `father_name`, `personal_add`, `sex`, `city`, `state`, `emailid`, `dob`, `mobileno`) VALUES
(1, 'ijhsx', 'jshd', 'sdh', 'male', '-1', '-1', '', '', ''),
(2, 'ijhsx', 'jshd', 'sdh', 'male', '-1', '-1', 'jksbad', 'sam', 'sx');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `Sid` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(255) NOT NULL,
  `Sphone` varchar(10) NOT NULL,
  `Semail` varchar(255) NOT NULL,
  `Spass` varchar(255) NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`Sid`, `Sname`, `Sphone`, `Semail`, `Spass`) VALUES
(9, 'neha', '9876253627', 'a@gmail.com', '12345'),
(10, 'pizza', '897377642', 'b@gmail.com', '898989');

-- --------------------------------------------------------

--
-- Table structure for table `seller_login`
--

CREATE TABLE IF NOT EXISTS `seller_login` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `seller_login`
--

INSERT INTO `seller_login` (`sid`, `name`, `password`) VALUES
(1, 'somen', '1234'),
(2, 'lohiuyft', 'ld'),
(3, 'somen', '123456123'),
(4, 'ksdanj', '02198434');

-- --------------------------------------------------------

--
-- Table structure for table `seller_regg`
--

CREATE TABLE IF NOT EXISTS `seller_regg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `personal_add` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `seller_regg`
--

INSERT INTO `seller_regg` (`sid`, `name`, `father_name`, `personal_add`, `sex`, `city`, `state`, `emailid`, `dob`, `mobileno`) VALUES
(1, 'somen', 'niadj', 'sdjk', 'male', 'New Delhi', 'New Delhi', 'asdkJZf', 'asendf', 'knds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
