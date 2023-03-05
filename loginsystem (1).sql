-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2023 at 07:49 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `password`, `approve`, `username`, `age`, `gender`, `height`, `weight`, `file`) VALUES
(105, '423', 'yes', 'sdafrg', 23, 'male', 32, 23, ''),
(108, 'ewr32', 'yes', 'wqdewdf', 32, 'male', 32, 12, 'uploads/23.jpg');

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
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `age`, `gender`, `height`, `weight`, `t_id`, `approve`) VALUES
(2, 'wer', 'fghfhdg', 33, 'male', 23, 12, 105, 'yes'),
(3, 'dfb', 'xcvc', 23, 'male', 122, 121, 105, 'yes'),
(6, 'asfe', 'ef', 21, 'male', 23, 32, NULL, 'yes'),
(7, 'ads', '3r2', 12, 'male', 123, 23, NULL, 'yes'),
(8, 'sdfasfd', '323', 23, 'male', 123, 23, NULL, 'yes'),
(9, 'afdas', '23', 34, 'male', 23, 234, NULL, 'yes'),
(10, 'afdas', '2132', 34, 'male', 23, 234, NULL, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wo`
--

DROP TABLE IF EXISTS `wo`;
CREATE TABLE IF NOT EXISTS `wo` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `e1` int(11) DEFAULT NULL,
  `e2` int(11) DEFAULT NULL,
  `e3` int(11) DEFAULT NULL,
  `e4` int(11) DEFAULT NULL,
  `e5` int(11) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wo`
--

INSERT INTO `wo` (`wid`, `e1`, `e2`, `e3`, `e4`, `e5`) VALUES
(1, 1, 2, 3, 4, 5),
(2, 2, 3, 4, 5, 6),
(3, 1, 2, 3, 4, 5),
(15, 1, 2, 0, 0, 0),
(14, 1, 2, 3, 4, 5),
(13, 1, 2, 3, 4, 5),
(12, 1, 0, 0, 0, 0),
(11, 1, 0, 0, 0, 0),
(10, 1, 0, 0, 0, 0),
(16, 1, 2, 0, 0, 0),
(17, 3, 8, 7, 9, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`eid`, `e_name`, `sets`, `reps`) VALUES
(1, 'da', 12, 2),
(2, 'asd', 2, 3),
(3, 'sad', 23, 3),
(8, 'asxzcd', 3, 12),
(7, 'sdf', 3, 32),
(9, 'sda', 3, 32);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
