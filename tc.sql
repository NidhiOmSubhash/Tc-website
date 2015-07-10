-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2015 at 04:07 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_content` text NOT NULL,
  `post_topic` int(11) NOT NULL,
  `post_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_by` (`post_by`),
  KEY `post_topic` (`post_topic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_sub` varchar(250) NOT NULL,
  `topic_content` text NOT NULL,
  `topic_cat` int(11) DEFAULT NULL,
  `topic_by` int(11) NOT NULL,
  `topic_date` datetime NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_by` (`topic_by`),
  KEY `topic_ibfk_2` (`topic_cat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_sub`, `topic_content`, `topic_cat`, `topic_by`, `topic_date`) VALUES
(11, 'saaaaaaaaaaaaaav', 'sfvbfszdddddddddd', NULL, 9, '2015-07-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `uname` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `batch` varchar(45) NOT NULL,
  `grad` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pwd` varchar(80) NOT NULL,
  `salt` varchar(150) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `uname`, `role`, `email`, `batch`, `grad`, `gender`, `pwd`, `salt`) VALUES
(8, 'Anu ', 'Varghese', 'anuvar', '0', 'anu@gmail.com', 'CSA', 2017, 'Female', '12a106b4480234c6e88257464f0ff1266e2bc5bc', 'XRdAx!K!'),
(9, 'Nidhi', 'Subhash', 'nidhiom', '0', 'nidhiomsubhash94@gmail.com', 'CSA', 2016, 'Female', '9027c88e64a5250ff4de32e9d29ee7db9d920c64', 'igMA.3J.'),
(10, 'Vivek', 'Raj', 'vivi', '0', 'vivi@gmail.com', 'eca', 2017, 'Male', 'ee5114558c74aed05860c57f6116f58202374803', 'WCyzBHyz'),
(11, 'ajitha', 'subhash', 'aji', '0', 'aji@gmail.com', 'ecb', 2015, 'Female', 'a4057cda7f18be5c9c7ea5d27ef0c9b0f901b088', '=WMEgEUT');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`post_topic`) REFERENCES `topic` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topic_ibfk_3` FOREIGN KEY (`topic_by`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
