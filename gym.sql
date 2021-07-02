-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2020 at 10:50 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'adminpass');

-- --------------------------------------------------------

--
-- Table structure for table `busreg`
--

DROP TABLE IF EXISTS `busreg`;
CREATE TABLE IF NOT EXISTS `busreg` (
  `bid` varchar(10) NOT NULL,
  `bno` varchar(25) NOT NULL,
  `sl` varchar(10) NOT NULL,
  `sw` varchar(30) NOT NULL,
  `sss` varchar(30) NOT NULL,
  PRIMARY KEY (`bno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busreg`
--

INSERT INTO `busreg` (`bid`, `bno`, `sl`, `sw`, `sss`) VALUES
('BID1', 'MH 12 DE 7475', '40', '20', '20'),
('BID2', 'MH 13 AE 1232', '35', '15', '20'),
('BID3', 'MH 04 PS 5747', '45', '15', '30');

-- --------------------------------------------------------

--
-- Table structure for table `drireg`
--

DROP TABLE IF EXISTS `drireg`;
CREATE TABLE IF NOT EXISTS `drireg` (
  `did` varchar(10) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `dlname` varchar(255) NOT NULL,
  `adde` varchar(300) NOT NULL,
  `age` int(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mno` varchar(30) NOT NULL,
  `lcno` varchar(30) NOT NULL,
  PRIMARY KEY (`did`),
  UNIQUE KEY `mno` (`mno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drireg`
--

INSERT INTO `drireg` (`did`, `dname`, `dlname`, `adde`, `age`, `gender`, `mno`, `lcno`) VALUES
('DID1', 'Rajesh', 'Kumar', 'Ranchi,Jharkhand', 30, 'Male', '9595731457', 'JH01 20200123456');

-- --------------------------------------------------------

--
-- Table structure for table `memreg`
--

DROP TABLE IF EXISTS `memreg`;
CREATE TABLE IF NOT EXISTS `memreg` (
  `mid` varchar(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `adde` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mno` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`mno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memreg`
--

INSERT INTO `memreg` (`mid`, `fname`, `lname`, `adde`, `city`, `age`, `gender`, `mno`, `email`, `password`) VALUES
('PID1', 'PRATHAMESH ', 'SHIRKE', 'SAT RASTA', 'SOLAPUR', '22', 'Male', '9673145747', 'prathmshirke@gmail.com', 'prathm@1712'),
('PID2', 'AKSHAY', 'KULKARNI', 'KOTHRUD', 'PUNE', '23', 'Male', '9604273325', 'akshay@gmail.com', 'akshay@@'),
('PID3', 'RAJESH', 'KUMAR', 'Raju street', 'RANCHI', '23', 'Male', '9525761732', 'rajeshk1546@gmail.com', 'rajesh@97');

-- --------------------------------------------------------

--
-- Table structure for table `setbus`
--

DROP TABLE IF EXISTS `setbus`;
CREATE TABLE IF NOT EXISTS `setbus` (
  `setid` int(10) NOT NULL AUTO_INCREMENT,
  `setdate` varchar(50) NOT NULL,
  `bno` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `fcity` varchar(150) NOT NULL,
  `tcity` varchar(150) NOT NULL,
  `btime` varchar(50) NOT NULL,
  `atime` varchar(50) NOT NULL,
  `sl` varchar(100) NOT NULL,
  `sideseat` varchar(15) NOT NULL,
  `wseat` varchar(15) NOT NULL,
  `amt` varchar(20) NOT NULL,
  PRIMARY KEY (`setid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setbus`
--

INSERT INTO `setbus` (`setid`, `setdate`, `bno`, `dname`, `fcity`, `tcity`, `btime`, `atime`, `sl`, `sideseat`, `wseat`, `amt`) VALUES
(8, '12/15/2020', 'MH 04 PS 5747', 'Rajesh', 'Pune', 'Solapur', '18:30', '22:30', '40', '25', '15', '400');

-- --------------------------------------------------------

--
-- Table structure for table `tabledb`
--

DROP TABLE IF EXISTS `tabledb`;
CREATE TABLE IF NOT EXISTS `tabledb` (
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
