-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2019 at 01:05 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--
CREATE DATABASE `event` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `event`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(10) NOT NULL,
  `pword` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pword`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `cul_win`
--

CREATE TABLE IF NOT EXISTS `cul_win` (
  `usn` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `place` varchar(5) NOT NULL,
  `prize` int(5) NOT NULL,
  `eve` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cul_win`
--

INSERT INTO `cul_win` (`usn`, `name`, `college`, `place`, `prize`, `eve`) VALUES
('2ke15cs309', 'sharat', 'kleit', '', 0, 'Dancing'),
('2ke15is061', 'C programming', 'kleit', '', 0, 'Singing'),
('2ke15is061', 'C programming', 'kleit', '', 0, 'fashion');

-- --------------------------------------------------------

--
-- Table structure for table `parti`
--

CREATE TABLE IF NOT EXISTS `parti` (
  `usn` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `dept` varchar(27) NOT NULL,
  `age` int(2) NOT NULL,
  `sem` int(2) NOT NULL,
  `eve` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parti`
--

INSERT INTO `parti` (`usn`, `name`, `college`, `dept`, `age`, `sem`, `eve`) VALUES
('2ke15is061', 'c++ programming', 'kleit', 'sdf', 55, 5, 'Sing'),
('2ke16is408', 'Sharat', 'KLE it ', 'ISE', 22, 6, 'Dance'),
('2ke16is408', 'Sharat', 'KLE it ', 'ISE', 22, 6, 'Dance'),
('2ke16is408', 'Sharat', 'KLE it ', 'ISE', 22, 6, 'Dance'),
('2ke16is408', 'Sharat', 'KLE it ', 'ISE', 22, 6, 'Dance'),
('2ke16is408', 'Sharat', 'KLE it ', 'ISE', 22, 6, 'Dance'),
('2ke15is009', 'anu', 'gokette', 'ENC', 25, 6, 'Hackathon'),
('2ke15is009', 'anu', 'gokette', 'ENC', 25, 6, 'Hackathon');

-- --------------------------------------------------------

--
-- Table structure for table `tech_parti`
--

CREATE TABLE IF NOT EXISTS `tech_parti` (
  `usn` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `dept` varchar(27) NOT NULL,
  `age` int(2) NOT NULL,
  `sem` int(2) NOT NULL,
  `eve` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_parti`
--

INSERT INTO `tech_parti` (`usn`, `name`, `college`, `dept`, `age`, `sem`, `eve`) VALUES
('2ke15is009', 'anu', 'Gokte', 'Enc', 50, 5, 'Treasure'),
('2ke15is061', 'C programming', 'kleit', 'ise', 55, 6, 'Treasure'),
('2ke15is001', 'sharat', 'kleit', 'cse', 22, 5, 'Robot'),
('2ke15is061', 'C programming', 'kleit', 'ise', 55, 6, 'Treasure'),
('12kjldskf', 'lsl', 'll', 'sie', 23, 3, 'Robot'),
('2ke15is041', 'shu', 'kleit', 'ise', 25, 7, 'fashion'),
('2ke15cs038', 'priyanka', 'bvb', 'cse', 21, 6, 'Robot'),
('2ke15is068', 'fhf', 'kle', 'cse', 12, 3, 'Hackathon');

-- --------------------------------------------------------

--
-- Table structure for table `tech_win`
--

CREATE TABLE IF NOT EXISTS `tech_win` (
  `usn` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `place` int(3) NOT NULL,
  `prize` int(6) NOT NULL,
  `eve` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_win`
--

INSERT INTO `tech_win` (`usn`, `name`, `college`, `place`, `prize`, `eve`) VALUES
('2ke34', 'sharat', 'bvb', 0, 0, 'Treasure'),
('2ke15is061', 'C programming', 'jksdlkf', 0, 0, 'Hackathon'),
('2ke15is061', 'C programming', 'jksdlkf', 0, 0, 'Treasure'),
('2ke15is061', 'C programming', 'KLE it ', 2, 100, 'Treasure'),
('2ke15is061', 'C # Programming', 'kleit', 2, 100, 'Robot'),
('2ke15cs000', 'samsu', 'KLE it ', 1, 100, 'Singing');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `usn` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `vol_exp` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `sem` int(2) NOT NULL,
  UNIQUE KEY `usn` (`usn`,`name`,`college`,`dept`,`vol_exp`,`age`,`sem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`usn`, `name`, `college`, `dept`, `vol_exp`, `age`, `sem`) VALUES
('1455', 'khfghkd', 'iodrh', 'srtrt', 'vol_exp', 45, 5),
('2ke15cs015', 'ga', 'kleit', 'cse', 'vol_exp', 15, 7),
('2ke15cs015', 'ganga', 'kleit', 'cse', 'vol_exp', 21, 7),
('2ke15is061', 'C-sharp   PROGRAMMING', 'jksdlkf', 'ise', 'vol_exp', 55, 6);
