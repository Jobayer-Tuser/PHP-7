-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 09:53 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sysdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(256) DEFAULT NULL,
  `type_status` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`t_id`),
  UNIQUE KEY `id_2` (`t_id`),
  UNIQUE KEY `type_name` (`type_name`,`type_status`),
  KEY `id` (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`t_id`, `type_name`, `type_status`) VALUES
(3, 'Faculty', 'ACTIVE'),
(5, 'Lab Assistant', 'ACTIVE'),
(9, 'Operator', 'ACTIVE'),
(4, 'Student', 'ACTIVE'),
(1, 'System Admin', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type_id` int(11) DEFAULT NULL,
  `full_name` varchar(256) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone_no` varchar(16) DEFAULT NULL,
  `full_address` varchar(512) DEFAULT NULL,
  `job` varchar(128) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `email_id` varchar(64) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `profile_img` varchar(128) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `user_type` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `signup_date`, `type_id`, `full_name`, `age`, `phone_no`, `full_address`, `job`, `salary`, `email_id`, `password`, `profile_img`) VALUES
(3, '2014-11-16 21:43:31', 4, 'John Anjum Doe', 58, '1777225335', 'Park Street', 'Engineer', 50000, 'john.doe@gmail.com', 'bb@qq', '20150424175201_4277_Austria.jpg'),
(4, '2014-11-16 21:43:31', 3, 'Anjum Bappa Majumder', 25, '8801711567890', 'Dhaka, Bangladesh.', 'Singer', 30000, 'bappa@singerbd.com', 'b@p@a', '20150424175201_4277_Austria.jpg'),
(5, '2014-11-16 21:45:26', 3, 'Bill Gates Anjum', 65, '8801613211000', 'Reverse Street, York Road, New York, USA', 'Businessman', 500000, 'billgates@gmail.com', 'pp@ww@dd', '20150424175201_4277_Austria.jpg'),
(7, '2015-04-23 23:19:57', 9, 'rejvi nomani', 22, '01933033635', 'sukrabad', 'Admin', 200000, 'rejvi@yahoo.com', '7b848e872f11041ba4692e4645af4ff2', '20150424131957_Boatman_killer [DesktopNexus.com].jpg'),
(8, '2015-04-23 23:29:04', 9, 'rejvi', 22, '8801616990066', 'sukrabad', 'Doctor', 200000, 'md.rejvinomani@yahoo.com', '6c311f179c543acca4e327f53361a951', '20150424132904_IMG_0267.JPG'),
(9, '2015-04-23 23:36:36', 1, 'Nirjhor Anjum', 12, '01933033635', '', 'Admin', 200000, 'anjum@nirjhor.net', 'e99a18c428cb38d5f260853678922e03', '20150424182704_IMG_0293.JPG'),
(10, '2015-04-24 03:52:01', 9, 'Anjum Bappa Majumder', 35, '8801616990066', 'hlhsgil', 'Sales Boy', 13131, 'bappa@singer.com', '13b3c26f96622fc6f9a0aded4e67d459', '20150424181715_IMG_0261.JPG'),
(13, '2014-11-16 15:43:31', 9, 'John Anjum Doe', 58, '1777225335', 'Park Street', 'Engineer', 50000, 'john.doe@gmail.com', 'bb@qq', '20150424175201_4277_Austria.jpg'),
(14, '2014-11-16 15:43:31', 9, 'Anjum Bappa Majumder', 25, '8801711567890', 'Dhaka, Bangladesh.', 'Singer', 30000, 'bappa@singerbd.com', 'b@p@a', '20150424175201_4277_Austria.jpg'),
(15, '2014-11-16 15:45:26', 9, 'Bill Gates', 65, '8801613211000', 'Reverse Street, York Road, New York, USA', 'Businessman', 500000, 'billgates@gmail.com', 'pp@ww@dd', '20150424175201_4277_Austria.jpg'),
(17, '2015-04-23 17:19:57', 9, 'rejvi nomani', 22, '01933033635', 'sukrabad', 'Admin', 200000, 'rejvi@yahoo.com', '7b848e872f11041ba4692e4645af4ff2', '20150424131957_Boatman_killer [DesktopNexus.com].jpg'),
(18, '2015-04-23 17:29:04', 9, 'rejvi', 22, '8801616990066', 'sukrabad', 'Doctor', 200000, 'md.rejvinomani@yahoo.com', '6c311f179c543acca4e327f53361a951', '20150424132904_IMG_0267.JPG'),
(19, '2015-04-23 17:36:36', 1, 'Nirjhor Anjum', 12, '01933033635', '', 'Admin', 200000, 'anjum@nirjhor.net', 'e99a18c428cb38d5f260853678922e03', '20150424182704_IMG_0293.JPG'),
(20, '2015-04-23 21:52:01', 5, 'Anjum Bappa Majumder', 35, '8801616990066', 'hlhsgil', 'Sales Boy', 13131, 'bappa@singer.com', '13b3c26f96622fc6f9a0aded4e67d459', '20150424181715_IMG_0261.JPG');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`t_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
