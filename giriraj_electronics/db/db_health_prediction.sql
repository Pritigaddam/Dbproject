-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 10:55 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_health_prediction`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE IF NOT EXISTS `a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`id`, `value`) VALUES
(1, '{"a":1,"b":2,"c":3,"d":4,"e":5}');

-- --------------------------------------------------------

--
-- Table structure for table `add_disease`
--

CREATE TABLE IF NOT EXISTS `add_disease` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `disease_id` varchar(10) NOT NULL,
  `disease_name` varchar(50) NOT NULL,
  `disease_type` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `symptoms` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `add_disease`
--

INSERT INTO `add_disease` (`id`, `disease_id`, `disease_name`, `disease_type`, `category`, `symptoms`) VALUES
(1, '100', 'Dengue', 'Infection', '', 'Fever'),
(2, '100', 'Dengue', 'Infection', '', 'Headache'),
(3, '101', 'Dengue', 'Infection', '', 'Joint Pains'),
(4, '100', 'Dengue', 'Infection', '', 'Measel  like rashes');

-- --------------------------------------------------------

--
-- Table structure for table `add_doctor`
--

CREATE TABLE IF NOT EXISTS `add_doctor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(10) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `education` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `doctor_email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`id`, `doctor_id`, `doctor_name`, `address`, `mobile_no`, `education`, `category`, `doctor_email`, `password`) VALUES
(1, '100', 'Pawar P.N', 'Mumbai', '9632587412', 'MBS', 'Infection', 'pawar@gmail.com', 'pawar12');

-- --------------------------------------------------------

--
-- Table structure for table `add_patient`
--

CREATE TABLE IF NOT EXISTS `add_patient` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(10) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `patient_email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_patient`
--

INSERT INTO `add_patient` (`id`, `patient_id`, `patient_name`, `address`, `mobile_no`, `gender`, `patient_email`, `password`) VALUES
(1, '100', 'XYZ mm', 'nashik', '9632587415', 'Male', 'xyz12@gmail.com', 'xyz12'),
(2, '101', 'Vasant Namdeo Dhatrak', 'Nashik', '7877191998', 'Male', 'vasantdhatrak06@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `doctor_specialization` varchar(255) NOT NULL,
  `doctor_id` varchar(50) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `patient_name` varchar(225) NOT NULL,
  `appointment_date` varchar(20) NOT NULL,
  `appointment_time` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `posting_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctor_specialization`, `doctor_id`, `doctor_name`, `patient_id`, `patient_name`, `appointment_date`, `appointment_time`, `status`, `posting_date`) VALUES
(1, 'Infection', '100', 'Pawar P.N', '100', 'XYZ mm', '2017-12-13', '10:10', 'Confirm', '2017-12-11 17:29:16'),
(2, 'Infection', '100', 'Pawar P.N', '100', 'XYZ mm', '2017-12-16', '10:10', 'Cancel By Doctor', '2017-12-13 10:40:13'),
(3, 'Infection', '100', 'Pawar P.N', '101', 'Vasant Namdeo Dhatrak', '', '', '', '2017-12-13 12:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptoms`
--

CREATE TABLE IF NOT EXISTS `disease_symptoms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Disease_ID` varchar(10) NOT NULL,
  `Symptom_ID` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `disease_symptoms`
--

INSERT INTO `disease_symptoms` (`id`, `Disease_ID`, `Symptom_ID`) VALUES
(1, '1', '1'),
(2, '1', '2'),
(3, '2', '2'),
(4, '2', '3'),
(5, '3', '1'),
(6, '3', '2'),
(7, '3', '3'),
(8, '4', '3');

-- --------------------------------------------------------

--
-- Table structure for table `disease_t`
--

CREATE TABLE IF NOT EXISTS `disease_t` (
  `Disease_ID` varchar(20) NOT NULL,
  `VALUE` varchar(20) NOT NULL,
  `disease_type` varchar(50) NOT NULL,
  PRIMARY KEY (`Disease_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_t`
--

INSERT INTO `disease_t` (`Disease_ID`, `VALUE`, `disease_type`) VALUES
('1', 'malaria', 'Infection'),
('2', 'tuberculosis', 'Infection'),
('3', 'typhoid', 'Infection'),
('4', 'Dengue', 'Infection');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE IF NOT EXISTS `doctorspecilization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-28 06:37:25', ''),
(2, 'General Physician', '2016-12-28 06:38:12', ''),
(3, 'Dermatologist', '2016-12-28 06:38:48', ''),
(4, 'Homeopath', '2016-12-28 06:39:26', ''),
(5, 'Ayurveda', '2016-12-28 06:39:51', ''),
(6, 'Dentist', '2016-12-28 06:40:08', ''),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', ''),
(9, 'Demo test', '2016-12-28 07:37:39', '28-12-2016 01:28:42 PM'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53', '07-01-2017 01:38:04 PM');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(20) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `patient_id`, `patient_name`, `feedback`) VALUES
(1, '100', 'XYZ mm', 'snsd dnjsdn');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms_t`
--

CREATE TABLE IF NOT EXISTS `symptoms_t` (
  `Symptom_ID` varchar(10) NOT NULL,
  `VALUE` varchar(20) NOT NULL,
  PRIMARY KEY (`Symptom_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms_t`
--

INSERT INTO `symptoms_t` (`Symptom_ID`, `VALUE`) VALUES
('1', 'cough'),
('10', 'zsd'),
('11', 'xdsa'),
('2', 'cold'),
('3', 'headache'),
('4', 'fever'),
('5', 'join pain'),
('6', 'Weight loss'),
('7', 'Vomiting'),
('8', 'nausea'),
('9', ' muscle pain');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms_t1`
--

CREATE TABLE IF NOT EXISTS `symptoms_t1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Disease_ID` varchar(10) NOT NULL,
  `Symptom_ID` varchar(10) NOT NULL,
  `VALUE` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `symptoms_t1`
--

INSERT INTO `symptoms_t1` (`id`, `Disease_ID`, `Symptom_ID`, `VALUE`) VALUES
(1, '1', '1', 'cough'),
(2, '1', '2', 'cold'),
(3, '2', '2', 'cold'),
(4, '2', '3', 'headache'),
(5, '3', '1', 'cough'),
(6, '3', '2', 'cold'),
(7, '3', '3', 'headache');

-- --------------------------------------------------------

--
-- Table structure for table `tbldiseases`
--

CREATE TABLE IF NOT EXISTS `tbldiseases` (
  `diseaseID` int(10) NOT NULL AUTO_INCREMENT,
  `disease` varchar(50) NOT NULL,
  PRIMARY KEY (`diseaseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbldiseases`
--

INSERT INTO `tbldiseases` (`diseaseID`, `disease`) VALUES
(1, 'Tifoyd'),
(2, 'Jondis'),
(3, 'Malarya'),
(4, 'Pneomonia'),
(5, 'Dengu');

-- --------------------------------------------------------

--
-- Table structure for table `tblrel`
--

CREATE TABLE IF NOT EXISTS `tblrel` (
  `relID` int(11) NOT NULL AUTO_INCREMENT,
  `dieaseID` int(11) NOT NULL,
  `symptomID` int(11) NOT NULL,
  PRIMARY KEY (`relID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblrel`
--

INSERT INTO `tblrel` (`relID`, `dieaseID`, `symptomID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 1),
(4, 3, 2),
(5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblsymptoms`
--

CREATE TABLE IF NOT EXISTS `tblsymptoms` (
  `symptomID` int(10) NOT NULL AUTO_INCREMENT,
  `symptom` varchar(50) NOT NULL,
  PRIMARY KEY (`symptomID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblsymptoms`
--

INSERT INTO `tblsymptoms` (`symptomID`, `symptom`) VALUES
(1, 'Headache'),
(2, 'Temparature'),
(3, 'Less Pain'),
(4, 'Sever Pain'),
(5, 'Mussle Pain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prediction`
--

CREATE TABLE IF NOT EXISTS `tbl_prediction` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `symptoms` varchar(100) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `creation_timestamp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tbl_prediction`
--

INSERT INTO `tbl_prediction` (`id`, `uid`, `uname`, `symptoms`, `disease`, `type`, `creation_timestamp`) VALUES
(1, '100', 'XYZ mm', 'headache,cough,cold', 'typhoid', 'Infection', '2017-09-29 08:07:38'),
(2, '100', 'XYZ mm', 'cough,cold,headache', 'typhoid', 'Infection', '2017-11-01 17:54:06'),
(3, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 12:38:53'),
(4, '100', 'XYZ mm', '', '', '', '2017-12-11 12:40:59'),
(5, '100', 'XYZ mm', '', '', '', '2017-12-11 12:45:25'),
(6, '100', 'XYZ mm', '', '', '', '2017-12-11 12:45:47'),
(7, '100', 'XYZ mm', '', '', '', '2017-12-11 12:46:58'),
(8, '100', 'XYZ mm', '', '', '', '2017-12-11 12:47:23'),
(9, '100', 'XYZ mm', '', '', '', '2017-12-11 12:51:13'),
(10, '100', 'XYZ mm', '', '', '', '2017-12-11 12:51:30'),
(11, '100', 'XYZ mm', '', '', '', '2017-12-11 12:52:36'),
(12, '100', 'XYZ mm', 'headache,cough', 'typhoid', 'Infection', '2017-12-11 12:52:52'),
(13, '100', 'XYZ mm', 'headache,cough', 'typhoid', 'Infection', '2017-12-11 12:53:41'),
(14, '100', 'XYZ mm', 'cough,cold', 'malaria', 'Infection', '2017-12-11 12:56:00'),
(15, '100', 'XYZ mm', 'cough,cold', 'malaria', 'Infection', '2017-12-11 12:56:18'),
(16, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 12:56:46'),
(17, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 13:00:44'),
(18, '100', 'XYZ mm', 'headache,cough', 'typhoid', 'Infection', '2017-12-11 13:01:12'),
(19, '100', 'XYZ mm', 'headache,cough', 'typhoid', 'Infection', '2017-12-11 13:01:30'),
(20, '100', 'XYZ mm', 'headache,cough', 'typhoid', 'Infection', '2017-12-11 13:04:28'),
(21, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 13:11:34'),
(22, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:06'),
(23, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:08'),
(24, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:09'),
(25, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:10'),
(26, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:11'),
(27, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:13'),
(28, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:14'),
(29, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:15'),
(30, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:16'),
(31, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:17'),
(32, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:18'),
(33, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:19'),
(34, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:21'),
(35, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:22'),
(36, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:23'),
(37, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:25'),
(38, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:26'),
(39, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:10:27'),
(40, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:12:16'),
(41, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:12:43'),
(42, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:12:57'),
(43, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:13:26'),
(44, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:13:58'),
(45, '100', 'XYZ mm', 'cold,headache,cough', 'typhoid', 'Infection', '2017-12-11 15:14:40'),
(46, '100', 'XYZ mm', 'headache', 'Dengue', 'Infection', '2017-12-11 15:40:36'),
(47, '100', 'XYZ mm', 'headache', 'Dengue', 'Infection', '2017-12-11 15:47:43'),
(48, '100', 'XYZ mm', 'headache', 'Dengue', 'Infection', '2017-12-11 16:26:37'),
(49, '100', 'XYZ mm', 'headache', 'Dengue', 'Infection', '2017-12-11 17:28:22'),
(50, '100', 'XYZ mm', 'headache,cough', 'typhoid', 'Infection', '2017-12-12 15:00:31'),
(51, '101', 'Vasant Namdeo Dhatrak', '', '', '', '2017-12-13 12:54:10'),
(52, '101', 'Vasant Namdeo Dhatrak', 'cold', 'malaria', 'Infection', '2017-12-13 12:54:20'),
(53, '101', 'Vasant Namdeo Dhatrak', '', '', '', '2017-12-13 12:56:21'),
(54, '101', 'Vasant Namdeo Dhatrak', 'cough', 'malaria', 'Infection', '2017-12-13 12:56:34'),
(55, '101', 'Vasant Namdeo Dhatrak', 'cough', 'malaria', 'Infection', '2017-12-13 12:56:51'),
(56, '101', 'Vasant Namdeo Dhatrak', '', '', '', '2017-12-13 12:56:56'),
(57, '101', 'Vasant Namdeo Dhatrak', '', '', '', '2017-12-13 12:57:05'),
(58, '101', 'Vasant Namdeo Dhatrak', 'cough', 'malaria', 'Infection', '2017-12-13 12:57:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
