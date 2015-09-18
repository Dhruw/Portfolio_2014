-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2012 at 07:24 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jin`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `username` varchar(40) NOT NULL,
  `robowar` tinyint(1) NOT NULL DEFAULT '0',
  `kurukshetra` tinyint(1) NOT NULL DEFAULT '0',
  `robosoccer` tinyint(1) NOT NULL DEFAULT '0',
  `solvation` tinyint(1) NOT NULL DEFAULT '0',
  `linefollower` tinyint(1) NOT NULL DEFAULT '0',
  `wrestlemania` tinyint(1) NOT NULL DEFAULT '0',
  `picasso` tinyint(1) NOT NULL DEFAULT '0',
  `deepblue` tinyint(1) NOT NULL DEFAULT '0',
  `xxcelerate` tinyint(1) NOT NULL DEFAULT '0',
  `fullthrottle` tinyint(1) NOT NULL DEFAULT '0',
  `cryptic` tinyint(1) NOT NULL DEFAULT '0',
  `crack` tinyint(1) NOT NULL DEFAULT '0',
  `cad` tinyint(1) NOT NULL DEFAULT '0',
  `tronixx` tinyint(1) NOT NULL DEFAULT '0',
  `linspire` tinyint(1) NOT NULL DEFAULT '0',
  `mupad` tinyint(1) NOT NULL DEFAULT '0',
  `cs` tinyint(1) NOT NULL DEFAULT '0',
  `nfs` tinyint(1) NOT NULL DEFAULT '0',
  `fifa` tinyint(1) NOT NULL DEFAULT '0',
  `q` tinyint(1) NOT NULL DEFAULT '0',
  `admad` tinyint(1) NOT NULL DEFAULT '0',
  `dummy` tinyint(1) NOT NULL DEFAULT '0',
  `nirmaan` tinyint(1) NOT NULL DEFAULT '0',
  `sudoku` tinyint(1) NOT NULL DEFAULT '0',
  `artifex` tinyint(1) NOT NULL DEFAULT '0',
  `photophonics` tinyint(1) NOT NULL DEFAULT '0',
  `trumble` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`username`, `robowar`, `kurukshetra`, `robosoccer`, `solvation`, `linefollower`, `wrestlemania`, `picasso`, `deepblue`, `xxcelerate`, `fullthrottle`, `cryptic`, `crack`, `cad`, `tronixx`, `linspire`, `mupad`, `cs`, `nfs`, `fifa`, `q`, `admad`, `dummy`, `nirmaan`, `sudoku`, `artifex`, `photophonics`, `trumble`) VALUES
('sao', 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `name` varchar(9) NOT NULL,
  `number` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`name`, `number`) VALUES
('jin', 47),
('Peter', 35),
('std3', 78),
('', 0),
('Dahanes', 100),
('mmm', 350),
('Tester', 45),
('Peter', 35),
('Peter', 35),
('Peter', 35);

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE IF NOT EXISTS `test2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pno` bigint(12) unsigned NOT NULL,
  `mobile` bigint(10) unsigned NOT NULL,
  `edu` varchar(5) NOT NULL,
  `college` varchar(25) NOT NULL,
  `course` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `sem` tinyint(1) unsigned NOT NULL,
  `address` varchar(50) NOT NULL,
  `hashed_password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`id`, `fname`, `lname`, `uname`, `email`, `pno`, `mobile`, `edu`, `college`, `course`, `DOB`, `sem`, `address`, `hashed_password`) VALUES
(1, 'sdfhsd', 'safsdf', 'sdfgsg', 'sfsgs', 234234, 0, 'dgfdf', 'fdgsdf', 'dgdfg', '0000-00-00', 1, 'gfdf', 'dgfdfg'),
(2, 'vinay', 'pandey', 'vinnie', 'vinaypandey@csitdurg.in', 8876187367, 8876237561, 'under', 'csit', 'b.e', '1990-06-13', 6, 'abc', 'hello'),
(3, 'Rajiv', 'Singh', 'machhar', 'r4jiv007@gmail.com', 87612376, 2374868, 'Under', 'Chhatrapati Shivaji Insti', 'B.E.', '1991-08-20', 6, 'Qr-4/3 sec-5', 'abc123123'),
(4, 'Sanjay', 'Baghel', 'san09', 'sanju@sanju.sanju', 2786247, 23782346, 'Gradu', 'Chhatrapati Shivaji Insti', 'B.E.', '0000-00-00', 1, 'asihfidh', 'abc123123'),
(6, 'sao', 'sao', 'sao', 'sao@sao', 242342452, 123478923, 'Under', 'Chhatrapati Shivaji Insti', 'B.E.', '0000-00-00', 6, 'wihdfduifsiao', 'abc123123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
