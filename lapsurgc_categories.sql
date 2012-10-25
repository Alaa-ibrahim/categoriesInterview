-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2012 at 04:30 AM
-- Server version: 5.1.66
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lapsurgc_categories`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(150) NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`) VALUES
(1, 'Men', 0),
(2, 'Women', 0),
(3, 'Childern', 0),
(4, 'casual', 1),
(5, 'Formal', 1),
(6, 'night wear', 2),
(7, 'pjs', 3),
(8, 'dress', 2),
(9, 'makeup', 2),
(10, 'shoes', 2),
(13, 'Cars', 0),
(12, 'soriee', 8);

-- --------------------------------------------------------

--
-- Table structure for table `cats_items_rel`
--

DROP TABLE IF EXISTS `cats_items_rel`;
CREATE TABLE IF NOT EXISTS `cats_items_rel` (
  `relid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  PRIMARY KEY (`relid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cats_items_rel`
--

INSERT INTO `cats_items_rel` (`relid`, `catid`, `itemid`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 1),
(4, 2, 2),
(5, 3, 3),
(6, 5, 9),
(7, 9, 6),
(8, 9, 10),
(9, 6, 7),
(10, 8, 1),
(11, 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item`) VALUES
(1, 'Mango'),
(2, 'zara'),
(3, 'fg4 kids'),
(4, 'regallo'),
(5, 'mohagaba'),
(6, 'makeup store'),
(7, 'la senza'),
(8, 'hoggs'),
(9, 'sarar'),
(10, 'mazaya');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
