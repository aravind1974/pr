-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2023 at 08:10 PM
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

DROP TABLE IF EXISTS `diet`;
CREATE TABLE IF NOT EXISTS `diet` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(21) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`wid`, `ename`, `e1`, `e2`, `e3`, `e4`, `e5`) VALUES
(1, 'zxcx', 1, 2, 3, 4, 5),
(2, 'as', 1, 2, 3, 1, 2),
(3, 'fg', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(21) NOT NULL,
  `sets` int(11) NOT NULL,
  `reps` int(11) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`eid`, `e_name`, `sets`, `reps`) VALUES
(1, 'sade', 3, 23);

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
CREATE TABLE IF NOT EXISTS `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

DROP TABLE IF EXISTS `req`;
CREATE TABLE IF NOT EXISTS `req` (
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `Trainer_id` int(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) NOT NULL,
  `approve` varchar(4) NOT NULL DEFAULT 'NO',
  `username` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `file` varchar(25) NOT NULL,
  PRIMARY KEY (`Trainer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `password`, `approve`, `username`, `age`, `gender`, `height`, `weight`, `file`) VALUES
(105, '423', 'yes', 'sdafrg', 23, 'male', 32, 23, ''),
(108, 'ewr32', 'yes', 'wqdewdf', 32, 'male', 32, 12, 'uploads/23.jpg'),
(109, 'wer', 'NO', 'sdaf', 12, 'male', 12, 23, 'uploads/23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `t_id` int(11) DEFAULT NULL,
  `approve` varchar(3) DEFAULT 'NO',
  `wid` int(11) DEFAULT NULL,
  `did` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `age`, `gender`, `height`, `weight`, `t_id`, `approve`, `wid`, `did`) VALUES
(2, 'wer', 'fghfhdg', 33, 'male', 23, 12, 105, 'yes', 3, 3),
(3, 'dfb', 'xcvc', 23, 'male', 122, 121, 105, 'yes', 29, NULL),
(6, 'asfe', 'ef', 21, 'male', 23, 32, NULL, 'yes', NULL, NULL),
(7, 'ads', '3r2', 12, 'male', 123, 23, NULL, 'yes', NULL, NULL),
(8, 'sdfasfd', '323', 23, 'male', 123, 23, NULL, 'yes', NULL, NULL),
(9, 'afdas', '23', 34, 'male', 23, 234, 105, 'yes', 28, NULL),
(10, 'afdas', '2132', 34, 'male', 23, 234, NULL, 'yes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wo`
--

DROP TABLE IF EXISTS `wo`;
CREATE TABLE IF NOT EXISTS `wo` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(25) NOT NULL,
  `e1` int(11) DEFAULT NULL,
  `e2` int(11) DEFAULT NULL,
  `e3` int(11) DEFAULT NULL,
  `e4` int(11) DEFAULT NULL,
  `e5` int(11) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wo`
--

INSERT INTO `wo` (`wid`, `ename`, `e1`, `e2`, `e3`, `e4`, `e5`) VALUES
(24, 'asdasd', 7, 9, 0, 0, 0),
(23, 'sass', 3, 8, 9, 0, 0),
(22, 'asdad', 3, 8, 0, 0, 0),
(21, 'hgjhjg', 2, 0, 0, 0, 0),
(20, 'ewr', 1, 8, 0, 0, 0),
(19, 'asa', 1, 2, 3, 4, 5),
(18, 'edge', 43, NULL, NULL, NULL, NULL),
(25, 'dshdsd', 2, 3, 8, 9, 0),
(26, 'xfgsd', 11, 12, 13, 0, 0),
(27, 'xfgsd', 11, 12, 13, 0, 0),
(28, 'xbbc', 11, 12, 13, 31, 0),
(29, 'sadds', 32, 0, 0, 0, 0),
(30, 'nnnnnnnnn', 1, 0, 0, 0, 0),
(31, 'zxcc', 27, 0, 0, 0, 0),
(32, 'zxcc', 27, 0, 0, 0, 0),
(33, 'cvnb', 32, 33, 0, 0, 0),
(34, 'nnnn ', 1, 24, 25, 0, 0),
(35, 'mm', 9, 32, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

DROP TABLE IF EXISTS `workout`;
CREATE TABLE IF NOT EXISTS `workout` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(20) NOT NULL,
  `sets` int(11) NOT NULL,
  `reps` int(11) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`eid`, `e_name`, `sets`, `reps`) VALUES
(1, 'da', 12, 2),
(2, 'asd', 2, 3),
(3, 'sad', 23, 3),
(8, 'asxzcd', 3, 12),
(7, 'sdf', 3, 32),
(9, 'sda', 3, 32),
(10, 'xczvxcv', 3, 32),
(11, 'xczvxcf', 3, 32),
(12, 'sadffsd', 3, 12),
(13, 'sadffsd', 3, 12),
(14, '2we', 23, 3),
(15, 'czxc', 2, 21),
(16, 'sadsad', 3, 12),
(17, 'asfd', 5, 45),
(18, 'axd', 5, 45),
(19, 'dhgdg', 5, 45),
(20, 'cdg', 5, 45),
(21, 'jhgf', 4, 445),
(22, 'cvncv', 44, 56),
(23, 'bnbn', 8, 78),
(24, 'bgvb', 56, 5),
(25, 'cvbc', 5, 45),
(26, 'cxcx', 3, 2),
(27, 'xzcxc', 23, 3),
(28, 'sdf', 6, 556),
(29, 'sdff', 44, 3),
(30, 'sdsdd', 5, 54),
(31, 'sdf', 55, 4),
(32, 'sadad', 55, 4),
(33, 'xzcxcc', 4, 3),
(34, 'asad', 2, 12),
(35, 'asad', 2, 12),
(36, 'as', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
