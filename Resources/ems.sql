-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2015 at 01:02 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ems`
--
CREATE DATABASE IF NOT EXISTS `ems` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ems`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Read_personal_details`(IN `add_id` INT(50))
    NO SQL
    COMMENT 'fetched * (all info) from personal details table'
select * from pdetails where `app_ID` = add_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `uid` int(11) NOT NULL,
  `dt` varchar(200) NOT NULL,
  `checkin` varchar(50) NOT NULL,
  `checkout` varchar(50) NOT NULL,
  `backgroundColor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`uid`, `dt`, `checkin`, `checkout`, `backgroundColor`) VALUES
(9, '2014-04-17', '09:00:00', '17:00:00', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `backgroundColor` varchar(30) NOT NULL DEFAULT 'blue'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `url`, `start`, `end`, `backgroundColor`) VALUES
(5, 'New Entry', '', '2014-11-23T12:30:00', '2014-11-24T12:00:00', 'blue'),
(9, 'report submission', 'http://www.google.com', '2014-11-25T12:30:00\r\n', '2014-11-27T12:30:00\r\n', 'blue'),
(5, 'yp', 'http://www.iiitd.ac.in', '2014-11-29T12:30:00', '2014-11-30T12:30:00', 'blue'),
(5, 'NareshEvent', 'http://usebackpack.com', '2014-11-26T08:20:00', '2014-11-26T11:30:00', 'blue'),
(5, 'Yo', 'http://www.google.com', '2015-01-15T00:00:00', '2015-01-17T00:00:00', 'blue'),
(23, 'new calendar entry', 'http://home.iiitd.edu.in/~manmeet11064/', '2015-03-11T12:00:22', '2015-03-13T12:00:11', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `edu_qual`
--

CREATE TABLE IF NOT EXISTS `edu_qual` (
  `app_ID` int(50) NOT NULL COMMENT 'application number of the applicant',
  `degree` varchar(30) DEFAULT NULL COMMENT 'The degree attained /qualified',
  `specialization` varchar(30) DEFAULT NULL COMMENT 'the specialization attained while getting qualified',
  `boarduniv` varchar(30) DEFAULT NULL COMMENT 'name of the board/university/institute/college from where the qualification was attained.',
  `yoc` year(4) DEFAULT NULL COMMENT 'year of completion of qualification',
  `marks` decimal(11,3) DEFAULT NULL COMMENT 'the marks or percentage scored at the end or by now in respective qualification'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_qual`
--

INSERT INTO `edu_qual` (`app_ID`, `degree`, `specialization`, `boarduniv`, `yoc`, `marks`) VALUES
(1, '10th Pass', 'all subjects', 'CBSE', 2009, '85.000'),
(1, '12th Pass', 'SCIENCE', 'CBSE', 2011, '89.000'),
(1, 'BTECH', 'CSE', 'IIITD', 2015, '72.000'),
(2, '10th Pass', 'all subjects', 'CBSE', 2009, '85.000'),
(2, '12th Pass', 'SCIENCE', 'CBSE', 2011, '90.000'),
(3, '', '', '', 0000, '0.000'),
(4, '', '', '', 0000, '0.000'),
(5, '', '', '', 0000, '0.000'),
(6, '', '', '', 0000, '0.000'),
(7, '', '', '', 0000, '0.000'),
(8, '', '', '', 0000, '0.000'),
(9, '10th', 'ALL subjects', 'C', 0000, '0.000'),
(10, '', '', '', 0000, '0.000'),
(11, '10th ', 'All subjects', 'CBSE', 2009, '85.000'),
(11, '12th', 'Science', 'CBSE', 2011, '90.000'),
(14, 'Btech', 'CSE', 'IIIT-Delhi', 2015, '72.000');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `app_ID` int(50) NOT NULL COMMENT 'application number of the applicant',
  `per_from` date DEFAULT NULL COMMENT 'date of starting period of getting experience',
  `per_to` date DEFAULT NULL COMMENT 'date of end of periods of  getting experience',
  `organization` varchar(50) DEFAULT NULL COMMENT 'Organization where the applicant got experience from.',
  `designation` varchar(50) DEFAULT NULL COMMENT 'designation while getting a particular experience',
  `responsibility` varchar(500) DEFAULT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`app_ID`, `per_from`, `per_to`, `organization`, `designation`, `responsibility`, `salary`) VALUES
(2, '0000-00-00', '0000-00-00', 'accenture', 'INTERM', 'DFKFJNSDKJVSKJNKJSDNK', 1872981),
(3, '0000-00-00', '0000-00-00', '', '', '', 0),
(4, '0000-00-00', '0000-00-00', '', '', '', 0),
(5, '0000-00-00', '0000-00-00', '', '', '', 0),
(6, '0000-00-00', '0000-00-00', '', '', '', 0),
(7, '0000-00-00', '0000-00-00', '', '', '', 0),
(8, '0000-00-00', '0000-00-00', '', '', '', 0),
(9, '0000-00-00', '0000-00-00', '', '', '', 0),
(10, '0000-00-00', '0000-00-00', '', '', '', 0),
(11, '0000-00-00', '0000-00-00', 'Accenture', 'intern', 'developer', 0),
(11, '0000-00-00', '0000-00-00', 'IBM', 'intern', 'developer', 0),
(14, '0000-00-00', '0000-00-00', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE IF NOT EXISTS `holidays` (
  `holiday_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `start` varchar(200) NOT NULL,
  `end` varchar(200) NOT NULL,
  `backgroundColor` varchar(100) NOT NULL,
  PRIMARY KEY (`holiday_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`holiday_id`, `title`, `type`, `start`, `end`, `backgroundColor`) VALUES
(4, 'Baisaakhi', 'SteelBlue', '2015-04-15T00:00:00', '2015-04-16T00:00:00', 'SteelBlue'),
(5, 'Janmashtmi', 'SteelBlue', '2015-03-11T00:00:00', '2015-03-13T00:00:00', 'SteelBlue');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `l_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `start` varchar(200) NOT NULL,
  `end` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `backgroundColor` varchar(100) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`l_id`, `id`, `title`, `start`, `end`, `description`, `backgroundColor`) VALUES
(1, 5, 'Casual leave', '2014-12-01T00:00:00', '2014-12-05T00:00:00', 'bas bhai mera mann nhi hai!', 'orange'),
(2, 9, 'Payed Leave', '2014-12-09T00:00:00', '2014-12-10T00:00:00', 'lojdbfkmsd', 'Green'),
(3, 5, 'Paternity Leave', '2014-12-08T00:00:00', '2014-12-09T00:00:00', 'nthsi is d s', 'Green'),
(4, 5, 'Maternity Leave', '2014-12-01T00:00:00', '2014-12-10T00:00:00', 'hslijldklk', 'Green'),
(5, 9, 'Casual leave', '2014-12-06T00:00:00', '2014-12-09T00:00:00', 'Going home as there is no company coming!', 'orange'),
(6, 5, 'Maternity Leave', '2015-01-19T00:00:00', '2015-01-21T00:00:00', 'Aese hi bhai! ', 'orange'),
(7, 5, 'Casual leave', '2015-01-21T00:00:00', '2015-01-22T00:00:00', '', 'Green'),
(8, 5, 'Casual leave', '2015-01-19T00:00:00', '2015-01-20T00:00:00', '', 'orange'),
(9, 9, 'Paternity Leave', '2015-01-31T00:00:00', '2015-02-11T00:00:00', 'Aese hi bhai bola to tha', 'Green'),
(10, 23, 'Casual leave', '2015-01-31T00:00:00', '2015-02-01T00:00:00', 'Yooooo', 'Green'),
(11, 9, 'Casual leave', '2015-04-15T00:00:00', '2015-04-30T00:00:00', 'timepaasssss', 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `pdetails`
--

CREATE TABLE IF NOT EXISTS `pdetails` (
  `app_ID` int(50) NOT NULL AUTO_INCREMENT COMMENT 'application number',
  `uid` bigint(20) DEFAULT NULL,
  `flag` tinyint(1) NOT NULL,
  `firstname` text NOT NULL COMMENT 'First name applicant',
  `middlename` text COMMENT 'second name of the applicant',
  `lastname` text NOT NULL COMMENT 'last name of the applicant',
  `fathername` text NOT NULL COMMENT 'fathers name of the applicant',
  `mothername` text NOT NULL COMMENT 'mothers name of the applicant',
  `DOB` date NOT NULL COMMENT 'Date of birth',
  `nationality` text NOT NULL COMMENT 'Nationality of the applicant',
  `sex` text NOT NULL COMMENT 'male/female',
  `c_addr` varchar(250) NOT NULL COMMENT 'correspondance address of the applicant',
  `c_city` text NOT NULL COMMENT 'city of correspondance of applicant',
  `c_state` text NOT NULL COMMENT 'state(location) of correspondance of the applicant',
  `c_pin` int(6) NOT NULL COMMENT 'pin code of the location of the correspodance',
  `c_phone` int(10) NOT NULL COMMENT 'landline num of correspondance of the applicant',
  `c_mobile` bigint(30) NOT NULL COMMENT 'mobile number of applicants correspondance',
  `p_addr` varchar(250) NOT NULL COMMENT 'permanent address of the applicant',
  `p_city` text NOT NULL COMMENT 'permanent city of applicant',
  `p_state` text NOT NULL COMMENT 'permanent state(location) of the applicant',
  `p_pin` int(6) NOT NULL COMMENT 'pin number of the applicants permanent address',
  `p_phone` int(10) NOT NULL COMMENT 'permanent landline number of the applicant',
  `p_mobile` bigint(30) NOT NULL COMMENT 'permanent mobile number of the applicant ',
  PRIMARY KEY (`app_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pdetails`
--

INSERT INTO `pdetails` (`app_ID`, `uid`, `flag`, `firstname`, `middlename`, `lastname`, `fathername`, `mothername`, `DOB`, `nationality`, `sex`, `c_addr`, `c_city`, `c_state`, `c_pin`, `c_phone`, `c_mobile`, `p_addr`, `p_city`, `p_state`, `p_pin`, `p_phone`, `p_mobile`) VALUES
(1, NULL, 0, 'Naresh', 'ADITYA', 'Madhav', 'harish', 'rajni', '0000-00-00', 'Indian', 'Male', '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 23352350, 8130980397, '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 23352350, 8130980397),
(2, NULL, 0, 'Naresh', 'ADITYA', 'Madhav', 'harish', 'rajni', '0000-00-00', 'Indian', 'Male', '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 23352350, 8130980397, '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 23352350, 8130980397),
(3, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(4, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(5, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(6, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(7, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(8, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(9, NULL, 0, 'Naresh ', 'Aditya', 'Madhav ', 'Nirmal Prasad', 'Gulbi Devi', '1993-12-12', 'Indian', 'Male', '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 2147483647, 8130980397, '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 1123352350, 8130980397),
(10, NULL, 0, 'Naresh', 'Aditya', 'Madhav', 'Nirmal Prasad', 'Gulbi Devi', '1993-12-12', 'Indian', 'Male', '20, Todar Mal Road', 'New Delhi`', 'Delhi', 110001, 1123352350, 8130980397, '20, Todar Mal Road', 'De', '', 0, 0, 0),
(11, NULL, 0, 'Naresh', 'Aditya', 'Madhav', 'Nirmal Prasad', 'Gulbi Devi', '1993-12-12', 'Indian', 'Male', '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 1123352350, 8130980397, '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 1123352350, 8130980397),
(12, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(13, NULL, 0, '', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', 0, 0, 0),
(14, NULL, 0, 'Naresh Aditya', 'Madhav', 'Madhav', 'Nirmal', 'Gulbi Devi', '1993-12-12', 'Indian', 'Male', '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 23352350, 8130980397, '9a 50, karol bagh', 'New Delhi', 'Delhi', 110001, 23352350, 8130980397);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post`, `description`, `status`) VALUES
(1, 'Developer', 'android developer for the official IIIT-Delhi Application managing jobs for outsiders', 0),
(2, 'Java developer', 'coder for developing clg website in spring framework', 1),
(3, 'Administrative Services', 'Nothing much', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `rights` bigint(20) NOT NULL DEFAULT '0',
  `U_id` int(50) NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `flag` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`U_id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`rights`, `U_id`, `flag`, `username`, `email`, `password`, `firstname`, `middlename`, `lastname`, `DOB`, `mobile`, `image`) VALUES
(0, 5, 1, 'Naresh11067', 'naresh11067@iiitd.ac.in', 'e6bb584c7fc1bb6ae304f4f200e8fdb3', 'Madhav', '', 'Madhav', '1993-12-12', 1234567890, ''),
(1, 9, 1, 'chacha', 'naresh110@iiitd.ac.in', 'e6bb584c7fc1bb6ae304f4f200e8fdb3', 'Madhav', '', 'Madhav', '1993-11-12', 8130980397, ''),
(1, 20, 1, 'Madhav', 'naresh11067@iiitd.ac.in', 'e6bb584c7fc1bb6ae304f4f200e8fdb3', 'Naresh', 'Aditya', 'Madhav', '1993-12-12', 8130980397, ''),
(0, 23, 1, 'Mukul', 'naresh11067@iiitd.ac.in', 'e6bb584c7fc1bb6ae304f4f200e8fdb3', 'Mukul', '', 'Prasad', '1995-12-12', 8130980397, ''),
(2, 24, 1, '239917', 'madhavadityanaresh@gmail.com', 'e6bb584c7fc1bb6ae304f4f200e8fdb3', 'Raju', '', 'Kumar', '1993-12-12', 8130980397, ''),
(0, 25, 0, 'new11', 'manmeet11064@iiitd.ac.in', '7cb4ffbb2635356600af00166decc350', '', NULL, '', '0000-00-00', 0, ''),
(0, 26, 0, 'newusr', 'manmeet11064@iiitd.ac.in', 'e6bb584c7fc1bb6ae304f4f200e8fdb3', '', NULL, '', '0000-00-00', 0, ''),
(0, 27, 0, 'abcd', 'manmeet11064@iiitd.ac.in', '0ba4439ee9a46d9d9f14c60f88f45f87', '', NULL, '', '0000-00-00', 0, ''),
(0, 28, 0, 'abcde', 'manmeet11064@iiitd.ac.in', '0ba4439ee9a46d9d9f14c60f88f45f87', '', NULL, '', '0000-00-00', 0, ''),
(0, 29, 0, 'pqrs', 'manmeet11064@iiitd.ac.in', '0ba4439ee9a46d9d9f14c60f88f45f87', '', NULL, '', '0000-00-00', 0, ''),
(0, 30, 0, 'pqrst', 'manmeet11064@iiitd.ac.in', '63aaeb64cd0d6f1d09c8d341224a4802', '', NULL, '', '0000-00-00', 0, ''),
(0, 31, 0, 'bare', 'manmeet11064@iiitd.ac.in', '0ba4439ee9a46d9d9f14c60f88f45f87', '', NULL, '', '0000-00-00', 0, ''),
(0, 32, 0, 'new112', 'manmeet93@yahoo.com', '0ba4439ee9a46d9d9f14c60f88f45f87', '', NULL, '', '0000-00-00', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
