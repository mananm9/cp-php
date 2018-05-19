-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2014 at 09:01 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--
CREATE DATABASE `hms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hms`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_date` varchar(50) NOT NULL,
  `out_date` varchar(50) NOT NULL,
  `no_room` varchar(50) NOT NULL,
  `adults` varchar(10) NOT NULL,
  `r_type` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_profession` varchar(50) NOT NULL,
  `c_pno` varchar(10) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `book_purpose` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `in_date`, `out_date`, `no_room`, `adults`, `r_type`, `c_id`, `c_name`, `c_email`, `c_profession`, `c_pno`, `c_address`, `book_purpose`, `status`) VALUES
(1, '14-10-2014', '15-10-2014', '2', '2', 'Standard', '1', 'vandana', 'vandana@gmail.com', 'teacher', '934567890', 'delhi', 'exam', '1'),
(2, '20-06-2000', '21-06-2000', '2', '2', 'Standard', '2', 'sonu', 'sonu@gmail.com', 'teacher', '234567890', 'delhi', 'delhi', '0'),
(3, '06-10-2014', '07-10-2014', '4', '4', 'Delux', '3', 'sidhu', 'sidhu@gmail.com', 'salesman', '1234567890', 'delhi', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_pass` varchar(30) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_profession` varchar(50) NOT NULL,
  `c_pno` varchar(50) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_type` varchar(10) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_pass`, `c_name`, `c_email`, `c_profession`, `c_pno`, `c_address`, `c_type`) VALUES
(1, '123', 'vandana', 'vandana@gmail.com', 'doctor', '934567890', 'delhi', 'User'),
(2, '123', 'sonu', 'sonu@gmail.com', 'doctor', '234567890', 'delhi', 'User'),
(3, '123', 'sidhu', 'sidhu@gmail.com', 'salesman', '1234567890', 'delhi', 'User'),
(4, '123', 'amrita', 'amrita@gmail.com', 'doctor', '123087777', 'Delhi', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `f_date` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `mob`, `email`, `f_date`, `msg`) VALUES
(1, 'rahul', '1234567890', 'rahul@gmail.com', '14-10-2014', 'good'),
(2, 'nammo', '2345678901', 'nmrta16@gmail.com', '14-10-2014', 'good'),
(3, 'raj', '2345678901', 'raj1107@gmail.com', '13-10-2014', 'fine'),
(4, 'rohit', '1234567890', 'hhh', '20-10-2014', 'vhjgj');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `user_name`, `pass`, `user_type`) VALUES
(1, 'rahul', '123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `b_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `tot_cost` varchar(50) NOT NULL,
  `ac_no` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`b_id`, `c_id`, `p_id`, `tot_cost`, `ac_no`, `b_name`, `status`) VALUES
('1', '1', 1, '2800', '1234567891234', 'SBI', '1'),
('5', '4', 2, '6200', '89876667777', 'PNB', '1'),
('6', '4', 3, '4400', '1234565432123', 'PNB', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_type` varchar(30) NOT NULL,
  `sr_cost` varchar(50) NOT NULL,
  `tot_sroom` varchar(50) NOT NULL,
  `total_room` varchar(50) NOT NULL,
  `r_date` varchar(50) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`r_id`, `r_type`, `sr_cost`, `tot_sroom`, `total_room`, `r_date`) VALUES
(1, 'Standard', '1400', '16', '20', '14-10-2014'),
(2, 'Delux', '3100', '14', '20', '14-10-2014'),
(3, 'Suite', '3400', '16', '20', '21-10-2014'),
(4, 'Club', '2200', '18', '20', '13-10-2014');
