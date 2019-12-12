-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2014 at 07:36 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) NOT NULL,
  `a_pass` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_pno` varchar(10) NOT NULL,
  `a_address` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`a_id`, `a_name`, `a_pass`, `a_email`, `a_pno`, `a_address`) VALUES
(1, 'Ankur', '111', 'ankur@gmail.com', '9876789237', 'Noida'),
(2, 'Udit', '123', 'chauhan@gmail.com', '9234567892', 'Ghaziabad');

-- --------------------------------------------------------

--
-- Table structure for table `case_details`
--

CREATE TABLE IF NOT EXISTS `case_details` (
  `case_id` int(11) NOT NULL AUTO_INCREMENT,
  `case_sub` varchar(20) NOT NULL,
  `case_description` varchar(80) NOT NULL,
  PRIMARY KEY (`case_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `case_details`
--

INSERT INTO `case_details` (`case_id`, `case_sub`, `case_description`) VALUES
(1, 'robery', 'robery case'),
(2, 'Murder', 'Murder Case');

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE IF NOT EXISTS `chatting` (
  `chat_to` varchar(50) NOT NULL,
  `chat_from` varchar(50) NOT NULL,
  `chat_msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`chat_to`, `chat_from`, `chat_msg`) VALUES
('mohit@gmail.com', 'ankur@gmail.com', 'hiii'),
('ankur@gmail.com', 'nair@gmail.com', 'hello sir'),
('ankur@gmail.com', 'nair@gmail.com', 'How r u'),
('annu@gmail.com', 'ankur@gmail.com', 'hiii'),
('ankur@gmail.com', 'annu@gmail.com', 'hii sir, how r u'),
('annu@gmail.com', 'ankur@gmail.com', 'i m fine dear'),
('ankur@gmail.com', 'annu@gmail.com', 'thank u sir');

-- --------------------------------------------------------

--
-- Table structure for table `chief`
--

CREATE TABLE IF NOT EXISTS `chief` (
  `ch_id` int(11) NOT NULL AUTO_INCREMENT,
  `ch_name` varchar(50) NOT NULL,
  `ch_pass` varchar(50) NOT NULL,
  `ch_email` varchar(50) NOT NULL,
  `ch_pno` varchar(10) NOT NULL,
  `ch_address` varchar(50) NOT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chief`
--

INSERT INTO `chief` (`ch_id`, `ch_name`, `ch_pass`, `ch_email`, `ch_pno`, `ch_address`) VALUES
(1, 'Manan', '121', 'manan@gmail.com', '9343456788', 'Faridabad');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE IF NOT EXISTS `citizen` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_pass` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_pno` varchar(50) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`c_id`, `c_name`, `c_pass`, `c_email`, `c_pno`, `c_address`) VALUES
(1, 'Abhishek', '101', 'nair@gmail.com', '9786543235', 'Noida'),
(2, 'Anmol', '123', 'annu@gmail.com', '987678967', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_from` varchar(50) NOT NULL,
  `faq_to` varchar(50) NOT NULL,
  `faq_sub` varchar(50) NOT NULL,
  `faq_msg` varchar(50) NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_from`, `faq_to`, `faq_sub`, `faq_msg`) VALUES
(1, 'shubham@gmail.com', 'manan@gmail.com', 'welcome', 'hello mr chief'),
(2, 'shubham@gmail.com', 'ankur@gmail.com', 'regarding case', 'your case is pending'),
(3, 'manan@gmail.com', 'shubham@gmail.com', 'reply', 'Thank You Sir'),
(4, 'annu@gmail.com', 'shubham@gmail.com', 'wishing', 'gud morning'),
(5, 'shubham@gmail.com', 'manan@gmail.com', 'greet', 'you welcome'),
(6, 'ankur@gmail.com', 'nair@gmail.com', 'hello', 'hello'),
(7, 'annu@gmail.com', 'nair@gmail.com', 'greeting', 'happy diwali');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(50) NOT NULL,
  `job_specification` varchar(50) NOT NULL,
  `job_salary` varchar(50) NOT NULL,
  `job_location` varchar(50) NOT NULL,
  `job_address` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `job_specification`, `job_salary`, `job_location`, `job_address`, `status`, `c_email`) VALUES
(1, 'Agent', 'Excellent communication', '12000', 'Delhi', 'Rohini,Delhi', '1', 'nair@gmail.com'),
(2, 'chief', 'good writing skill', '25000', 'delhi', 'rohini,delhi', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `minister`
--

CREATE TABLE IF NOT EXISTS `minister` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(50) NOT NULL,
  `m_pass` varchar(10) NOT NULL,
  `m_pno` varchar(10) NOT NULL,
  `m_address` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `minister`
--

INSERT INTO `minister` (`m_id`, `m_name`, `m_pass`, `m_pno`, `m_address`, `m_email`) VALUES
(1, 'Shubham', '123', '9876543456', 'Delhi', 'shubham@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `up_file` varchar(80) NOT NULL,
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`up_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`up_file`, `up_id`) VALUES
('Koala.jpg', 1),
('hms.docx', 2),
('hms.sql', 3);
