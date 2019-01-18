-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 10:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auction_system1`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`Aid`, `Iid`, `High_price`, `Bid`, `Astartdate`, `Aenddate`) VALUES
(15, 15, '1111', 0, '1/2/2017', '5/2/2017'),
(19, 19, '1000000', 0, '9/4/2017', '1011/2017');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `auction_item`
--

INSERT INTO `auction_item` (`Iid`, `iname`, `Idesc`, `Ibaseprice`, `Sid`, `Approved`) VALUES
(15, 'car', 'good', '499', 0, ''),
(16, 'carr', 'very good', '250000', 0, ''),
(17, 'ship', ',jgk', '250000', 0, ''),
(18, 'kjhsldh', 'khwndcl', '1299', 0, ''),
(19, 'bad boy', 'very bad', '10', 0, ''),
(20, 'we', 'fsad', 'dsw', 0, ''),
(21, 'car', 'good ABC', '1999', 0, ''),
(22, 'car', 'good ABC', '1999', 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`Bid`, `Bname`, `Bphone`, `Bemail`, `Bliability`, `Bpass`, `Approved`) VALUES
(1, 'ded', '323676327', 'dewed@gmail.com', 'dededededed', 'dede', 'No'),
(3, 'purbani', '9873726262', 'a@gmail.com', '2rs', '123', 'Yes'),
(4, 'debolina chowdhury', '8746364758', 'de@gmail.com', '200', '123', 'Yes'),
(5, 'sss', '705383727', 'ce@gmail.com', '432dw', '78', 'No'),
(6, 'somend', '8016159608', 'somen795@gmail.com', 'daskhfugv', 'somendas123', 'No'),
(7, 'soemnen', '8924370869', 'snscdjkfm@gmail.com', 'qlwdhsewqh', '987432uohlfkn', 'No'),
(8, 'somen', '9423876', 'somendas123@gmail.com', 'dfhgjmhgfdsa', '123456', 'No'),
(9, 'keufdnfd', '3892047', 'sbc@gmail.com', 'ekhlr', '123', 'No'),
(10, 'keufdnfd', '3892047', 'sbc@gmail.com', 'ekhlr', '123', 'yes'),
(11, 'somen', '123455', 'somen1@gmail.com', 'eiwhgdh', '1234567', 'yes'),
(12, 'somen ', '9609155221', 'somen.das0795@gmail.com', 'NA', 'somendas123', 'No'),
(13, 'somen dass', '8617545537', 'somen795@gmail.com', 'xyz', '123456', 'yes');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`Sid`, `Sname`, `Sphone`, `Semail`, `Spass`) VALUES
(9, 'neha', '9876253627', 'a@gmail.com', '12345'),
(10, 'pizza', '897377642', 'b@gmail.com', '898989'),
(11, 'somen das', '9609155221', 'somendas@gmail.com', 'somendas'),
(12, 'mirza', '92371846', 'sdlifhxu@gmail.com', 'jdvbh'),
(13, 'somen007', '4980123768', 'somen123@gmail.com', '123456'),
(14, 'frhbtsg', '9812734', 'som@gmail.com', '123'),
(15, 'diefh', '903487', 'abc@gmail.com', '1234'),
(16, 'diefh', '903487', 'abc@gmail.com', '1234'),
(17, 'kldhiugfvn', '95904873', 'abc@gmail.com', '123456'),
(18, 'iwofudahjc', '9802164320', 'oidhasfu@gmail.com', '123456'),
(19, 'kldhiugfvn', '95904873', 'abc@gmail.com', '123456'),
(20, 'kldhiugfvn', '95904873', 'abc@gmail.com', '123456'),
(21, 'somen', '9609155221', 'somen1@gmail.com', '12345678'),
(22, 'somendas12345', '9609155221', 'somen.somen@gmail.com', '1234'),
(23, 'sommmmm', '0238470931', 'sss@gmail.com', '123456'),
(24, 'somen', '8259480713', 'som@gmail.com', '123'),
(25, 'debojit', '123', 'gopal@gmail.com', '1234'),
(26, 'somen', '9609155221', 'a@gmail.com', '123'),
(27, 'somen das', '969155222', 'somendas345@gmail.com', '123456'),
(28, 'somen das', '969155222', 'somendas345@gmail.com', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
