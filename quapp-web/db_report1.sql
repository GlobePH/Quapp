-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2017 at 04:45 AM
-- Server version: 5.7.10
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_report1`
--
CREATE DATABASE `db_report1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_report1`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `priviliege` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `username`, `password`, `priviliege`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` text,
  `municipality` text,
  `office` text,
  `con_name` text,
  `con_number` text,
  `last_notif` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`id`, `province`, `municipality`, `office`, `con_name`, `con_number`, `last_notif`) VALUES
(1, 'Metro Manila', 'Caloocan', 'Civil Service Commission', 'Sample', '639163378752', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE IF NOT EXISTS `tbl_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` text,
  `municipality` text,
  `report` text,
  `office` text,
  `comment` text,
  `timestamp` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_reports`
--

INSERT INTO `tbl_reports` (`id`, `province`, `municipality`, `report`, `office`, `comment`, `timestamp`) VALUES
(8, 'Agusan del Norte', 'Carmen', 'Unclear procedures (-)', 'Department of Agrarian Reform', 'asd', '7/22/2017 : 18:27'),
(9, 'Abra', 'Bucay', 'Failure to act on request (-)', 'Civil Service Commission', 'asd', '7/22/2017 : 18:35'),
(10, 'Abra', 'Bucay', 'Failure to act on request (-)', 'Civil Service Commission', 'asd', '7/22/2017 : 18:36'),
(14, 'Agusan del Norte', 'Cabadbaran', 'Unclear procedures (-)', 'Commission on Audit', 'asd', '7/22/2017 : 18:37'),
(15, 'Abra', 'Bucay', 'Unclear procedures (-)', 'Department of Agriculture', 'asd', '7/22/2017 : 18:38'),
(16, 'Metro Manila', 'Makati', 'Efficient Processing (+)', 'Commission on Elections', 'asdasd', '7/22/2017 : 18:41'),
(17, 'Batangas', 'Lipa City', 'Slow process (-)', 'Department of Labor and Employment', 'ppppp', '7/22/2017 : 19:27'),
(18, 'Batangas', 'Lipa City', 'Slow process (-)', 'Department of Labor and Employment', 'ppppp', '7/22/2017 : 19:27'),
(19, 'Abra', 'Bangued', 'Failure to act on request (-)', 'Civil Service Commission', 'asd', '7/22/2017 : 19:30'),
(20, 'Batangas', 'Batangas City', 'Unclear procedures (-)', 'Department of Agriculture', 'asd', '7/22/2017 : 21:32'),
(22, 'Batangas', 'Batangas City', 'Failure to act on request (-)', 'Department of Agriculture', 'asdasd', '7/22/2017 : 21:33'),
(23, 'Batangas', 'Agoncillo', 'Efficient Processing (+)', 'Commission on Elections', 'asd', '7/22/2017 : 21:42'),
(24, 'Batangas', 'Agoncillo', 'Slow process (-)', 'Commission on Audit', 'asd', '7/22/2017 : 21:42'),
(25, 'Batangas', 'Tanauan City', 'Efficient Processing (+)', 'Civil Service Commission', 'ayos po', '7/22/2017 : 21:46'),
(27, 'Apayao', 'Calanasan', 'Efficient Processing (+)', 'Commission on Audit', 'asdasd', '7/22/2017 : 22:54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
