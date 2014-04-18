-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2014 at 07:14 PM
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
(1, '10th standard', 'all subjects', 'CBSE', 2009, '85.000'),
(1, '12th exam', 'all subjects', 'cbse', 2011, '89.000');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `app_ID` int(50) NOT NULL COMMENT 'application number of the applicant',
  `per_from` date DEFAULT NULL COMMENT 'date of starting period of getting experience',
  `per_to` date DEFAULT NULL COMMENT 'date of end of periods of  getting experience',
  `organization` varchar(50) DEFAULT NULL COMMENT 'Organization where the applicant got experience from.',
  `designation` varchar(50) DEFAULT NULL COMMENT 'designation while getting a particular experience'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`app_ID`, `per_from`, `per_to`, `organization`, `designation`) VALUES
(1, '2013-07-20', '2013-08-29', 'Accenture pvt. ltd.', 'intern');

-- --------------------------------------------------------

--
-- Table structure for table `pdetails`
--

CREATE TABLE IF NOT EXISTS `pdetails` (
  `app_ID` int(50) NOT NULL AUTO_INCREMENT COMMENT 'application number',
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
  `c_mobile` int(30) NOT NULL COMMENT 'mobile number of applicants correspondance',
  `p_addr` varchar(250) NOT NULL COMMENT 'permanent address of the applicant',
  `p_city` text NOT NULL COMMENT 'permanent city of applicant',
  `p_state` text NOT NULL COMMENT 'permanent state(location) of the applicant',
  `p_pin` int(6) NOT NULL COMMENT 'pin number of the applicants permanent address',
  `p_phone` int(10) NOT NULL COMMENT 'permanent landline number of the applicant',
  `p_mobile` int(30) NOT NULL COMMENT 'permanent mobile number of the applicant ',
  PRIMARY KEY (`app_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pdetails`
--

INSERT INTO `pdetails` (`app_ID`, `firstname`, `middlename`, `lastname`, `fathername`, `mothername`, `DOB`, `nationality`, `sex`, `c_addr`, `c_city`, `c_state`, `c_pin`, `c_phone`, `c_mobile`, `p_addr`, `p_city`, `p_state`, `p_pin`, `p_phone`, `p_mobile`) VALUES
(1, 'Naresh', 'Aditya', 'Madhav', 'Harish Uppal', 'Rajni Uppal', '1993-12-12', 'Indian', '0', '20,Todar mal Road', 'New Delhi', 'Delhi', 110001, 23352350, 2147483647, '20, Todar Mal Road', 'New Delhi', 'Delhi', 110001, 23352350, 2147483647),
(2, 'Mn', 'M', 'sj', 'jkj', 'kjk', '2014-04-05', 'india', 'Male', '114 engin', 'dsdff', 'fsfsf', 11001, 2454787, 959664611, '114 hdsn', 'djskjdskd', '', 313244, 42425256, 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
