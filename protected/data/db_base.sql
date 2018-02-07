-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2013 at 05:18 PM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE IF NOT EXISTS `avatar` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `image_h` int(11) NOT NULL,
  `image_w` int(11) NOT NULL,
  `type` enum('0','1','2') NOT NULL COMMENT '0:others 1:common males 2: common females',
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `avatar`
--

INSERT INTO `avatar` (`aid`, `uid`, `filename`, `image_h`, `image_w`, `type`, `created_on`, `modified_on`) VALUES
(1, 0, 'male.png', 300, 300, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 0, 'female.png', 301, 301, '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `modified_on` datetime NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fuid` int(11) NOT NULL,
  `tuid` int(11) NOT NULL,
  `status` enum('REQUESTED','CONNECTED') NOT NULL COMMENT '1: REQUEST 2: CONNECTED ',
  `comment` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, '男', 1, 'user-sex', 1),
(2, '女', 2, 'user-sex', 2),
(3, 'member', 1, 'user-role', 1),
(4, 'staff', 2, 'user-role', 2),
(5, 'admin', 3, 'user-role', 3),
(6, '未读', 0, 'user-message', 1),
(7, '已读', 1, 'user-message', 2);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `body` text,
  `is_read` enum('0','1') NOT NULL DEFAULT '0',
  `deleted_by` enum('sender','receiver') DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sender` (`sender_id`),
  KEY `reciever` (`receiver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(20) NOT NULL,
  `groupid` int(11) NOT NULL DEFAULT '0',
  `password` char(64) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `nickname` char(15) NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` enum('1','2') DEFAULT NULL COMMENT '1:male 2:female',
  `role` enum('1','2','3') NOT NULL COMMENT '1) Member 2) Staff 3) Admin',
  `hp_number` varchar(32) DEFAULT NULL,
  `avatarid` int(11) NOT NULL COMMENT 'reference to a picture',
  `rrid` int(11) DEFAULT NULL COMMENT 'renren id',
  `sinaid` int(11) DEFAULT NULL COMMENT 'sina open id',
  `token` char(255) NOT NULL COMMENT 'token for retrieve password',
  `token_time` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `groupid`, `password`, `name`, `nickname`, `birthday`, `sex`, `role`, `hp_number`, `avatarid`, `rrid`, `sinaid`, `token`, `token_time`, `created_on`, `modified_on`) VALUES
(1, 'csz786@gmail.com', 0, '69f9c3c46a52de3c4e7b4cb4a70e820e', 'Eric', 'Csz', '1994-06-02', '1', '3', '93275018', 104, NULL, NULL, '55bfadda291642ae2b8138a4b621b377', 1346936921, '0000-00-00 00:00:00', '2012-08-29 00:52:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
