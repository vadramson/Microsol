-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2016 at 05:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `microsol`
--
CREATE DATABASE IF NOT EXISTS `microsol` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `microsol`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `acctid` int(11) NOT NULL AUTO_INCREMENT,
  `cusid` int(11) NOT NULL,
  `Number` varchar(254) NOT NULL,
  `balance` decimal(18,2) NOT NULL,
  `type` int(11) NOT NULL,
  `intrate` decimal(18,2) NOT NULL,
  `status` varchar(254) NOT NULL,
  `Doc` datetime NOT NULL,
  PRIMARY KEY (`acctid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acctid`, `cusid`, `Number`, `balance`, `type`, `intrate`, `status`, `Doc`) VALUES
(1, 2, 'BKA41928RALHL', '56566565.00', 7, '1.60', 'Deactivated', '2016-08-16 05:43:12'),
(2, 4, 'BKA44522GRLQX', '939592.00', 7, '1.60', 'Active', '2016-08-16 05:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `acctid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `cusid` int(11) NOT NULL,
  `username` varchar(254) DEFAULT NULL,
  `pwd` varchar(254) DEFAULT NULL,
  `role` varchar(254) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `acode` varchar(254) DEFAULT NULL,
  `status` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`acctid`),
  KEY `fk_association10` (`cusid`),
  KEY `fk_association9` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acctid`, `empid`, `cusid`, `username`, `pwd`, `role`, `priority`, `acode`, `status`) VALUES
(2, 1, 1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ADMINISTRATOR', 1, 'Admin1', 'Active'),
(3, 1, 1, 'vadson', '4e8f45f3cc77e26fe4e81231e1a13b782ad72f72', 'ADMINISTRATOR', 1, 'Super admin', 'Active'),
(4, 1, 1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrateur', 1, 'Admin1', 'Active'),
(5, 1, 1, 'vadson', '4e8f45f3cc77e26fe4e81231e1a13b782ad72f72', 'administrateur', 1, 'Super admin', 'Active'),
(6, 1, 1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrateur', 1, 'Admin1', 'Active'),
(7, 1, 1, 'vadson', '4e8f45f3cc77e26fe4e81231e1a13b782ad72f72', 'administrateur', 1, 'Super admin', 'Active'),
(8, 1, 1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrateur', 1, 'Admin1', 'Active'),
(9, 1, 1, 'vadson', '4e8f45f3cc77e26fe4e81231e1a13b782ad72f72', 'administrateur', 1, 'Super admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `account_setter`
--

CREATE TABLE IF NOT EXISTS `account_setter` (
  `astid` int(11) NOT NULL AUTO_INCREMENT,
  `gmid` int(11) NOT NULL,
  `astcode` varchar(254) DEFAULT NULL,
  `astname` varchar(254) DEFAULT NULL,
  `astintrt` decimal(18,2) DEFAULT NULL,
  `asttype` varchar(254) DEFAULT NULL,
  `astminamt` decimal(18,2) DEFAULT NULL,
  `astfee` decimal(18,2) NOT NULL,
  `astdate` datetime DEFAULT NULL,
  PRIMARY KEY (`astid`),
  KEY `fk_association36` (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `account_setter`
--

INSERT INTO `account_setter` (`astid`, `gmid`, `astcode`, `astname`, `astintrt`, `asttype`, `astminamt`, `astfee`, `astdate`) VALUES
(1, 1, 'TransAcct_ChqAcct', 'Chequing Account', '2.50', 'Transaction Account', '5000.00', '1.00', '2016-08-10 02:46:35'),
(2, 1, 'SavAcct_CuAcct', 'Current Account', '1.00', 'Savings Account', '0.00', '0.00', '2016-08-10 02:44:35'),
(4, 1, 'TerDepAcct_FixDep', 'Fixed Deposit Account', '4.00', 'Term deposit Account', '5000.00', '0.00', '2016-08-10 02:49:57'),
(7, 1, 'Sav_Fa_Acct', 'Family Account', '1.60', 'Savings', '15000.00', '0.00', '2016-08-13 05:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `asid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `ascode` varchar(254) DEFAULT NULL,
  `dop` datetime DEFAULT NULL,
  `asname` varchar(254) DEFAULT NULL,
  `asamount` decimal(18,2) DEFAULT NULL,
  `name` varchar(254) DEFAULT NULL,
  `nic` varchar(254) DEFAULT NULL,
  `phone` varchar(254) DEFAULT NULL,
  `status` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`asid`),
  KEY `fk_association14` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`asid`, `empid`, `ascode`, `dop`, `asname`, `asamount`, `name`, `nic`, `phone`, `status`) VALUES
(1, 1, 'Ass16840MCAPM', '2016-08-28 10:55:35', 'Grayson Corporation', '999000000000.00', 'Grayson Corporation', '12548798652', '+011325698745', 'Available'),
(2, 1, 'Ass82265CKCRY', '2016-08-28 10:57:47', 'Mobrise LTM', '987898598.00', 'Mobrise', '125487898', '+33215487', 'Available'),
(3, 1, 'Ass93980PQKYC', '2016-08-28 11:01:27', 'Clare corp', '458789878.00', 'Clare Corp', '254878987897', '548789878', 'Available'),
(4, 1, 'Ass82979IUBWR', '2016-08-28 11:03:23', 'Browns Witssle Bakery', '6987898789.00', 'Witssle Bakery', '215487987', '+021548789', 'Available'),
(5, 1, 'Ass59081SFSKZ', '2016-08-28 11:05:11', 'Nitro Boost', '658987895.00', 'Nitro Petrolume', '21546566553', '+5514578987', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `bkaccount`
--

CREATE TABLE IF NOT EXISTS `bkaccount` (
  `bkaid` int(11) NOT NULL AUTO_INCREMENT,
  `cusid` int(11) NOT NULL,
  `AcctNumber` varchar(254) DEFAULT NULL,
  `bkblance` decimal(18,2) DEFAULT NULL,
  `bktype` varchar(254) DEFAULT NULL,
  `bkintrate` decimal(18,2) DEFAULT NULL,
  `status` varchar(254) NOT NULL,
  `Doc` datetime NOT NULL,
  PRIMARY KEY (`bkaid`),
  KEY `fk_association5` (`cusid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bkaccount`
--

INSERT INTO `bkaccount` (`bkaid`, `cusid`, `AcctNumber`, `bkblance`, `bktype`, `bkintrate`, `status`, `Doc`) VALUES
(1, 3, 'CUS34966TVZPA', '500000.00', '4', '4.00', 'Active', '2016-08-15 03:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE IF NOT EXISTS `bonuses` (
  `bnid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `bn_code` varchar(254) DEFAULT NULL,
  `bn_reason` varchar(254) DEFAULT NULL,
  `bn_amt` decimal(18,2) DEFAULT NULL,
  `bn_beneficiary` varchar(254) DEFAULT NULL,
  `bn_date` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`bnid`),
  KEY `fk_association28` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bonuses`
--

INSERT INTO `bonuses` (`bnid`, `empid`, `bn_code`, `bn_reason`, `bn_amt`, `bn_beneficiary`, `bn_date`) VALUES
(1, 4, 'Bon91673TFWCD', 'Honesty and hard work', '95000.00', 'EMP34886NCENF', '2016-08-30 09:47:12am '),
(2, 5, 'Bon77854HAUTX', 'Good Work!', '200000.00', 'EMP75597KVAIV', '2016-08-30 08:08:39pm'),
(3, 2, 'Bon81912OQFDN', 'Excellent Work Vadramson!', '12000001.00', 'EMP17137TLHQK', '2016-08-30 08:39:12pm');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `bchid` int(11) NOT NULL AUTO_INCREMENT,
  `twnid` int(11) NOT NULL,
  `gmid` int(11) NOT NULL,
  `bcode` varchar(254) DEFAULT NULL,
  `bname` varchar(254) DEFAULT NULL,
  `doc` datetime DEFAULT NULL,
  PRIMARY KEY (`bchid`),
  KEY `fk_association1` (`twnid`),
  KEY `fk_association7` (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bchid`, `twnid`, `gmid`, `bcode`, `bname`, `doc`) VALUES
(1, 1, 1, 'Fmrkt', 'Food Market', '2016-08-08 02:19:00'),
(7, 1, 1, 'HosRA', 'Hospital Round About', '2016-08-09 04:57:16'),
(8, 20, 1, 'Mbon', 'Mbon Market', '2016-08-09 04:58:18'),
(9, 20, 1, 'Mil 19', 'Mile 19', '2016-08-09 04:59:42'),
(10, 18, 1, 'Cvile', 'Centre Ville', '2016-08-09 05:20:30'),
(11, 30, 1, 'BafCn', 'Bafia Central', '2016-08-09 06:11:42'),
(12, 30, 1, 'CarPt', 'Carrefou Post', '2016-08-09 06:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `con_account`
--

CREATE TABLE IF NOT EXISTS `con_account` (
  `cactid` int(11) NOT NULL AUTO_INCREMENT,
  `gmid` int(11) NOT NULL,
  `cactnum` varchar(254) DEFAULT NULL,
  `cactblance` decimal(18,2) DEFAULT NULL,
  `cacttype` varchar(254) DEFAULT NULL,
  `status` varchar(254) NOT NULL,
  `Doc` datetime NOT NULL,
  PRIMARY KEY (`cactid`),
  KEY `fk_association13` (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `con_account`
--

INSERT INTO `con_account` (`cactid`, `gmid`, `cactnum`, `cactblance`, `cacttype`, `status`, `Doc`) VALUES
(1, 1, 'CON62142QPIAT', '1500000.00', 'Charges On Loan', 'Active', '2016-08-16 10:19:57'),
(2, 1, 'CON84699YIUQR', '2000000.00', 'Charges On Checquing Account', 'Active', '2016-08-16 10:20:58'),
(3, 1, 'CON74249THPJR', '5000000.00', 'Charges On Funds Transfer', 'Active', '2016-08-16 10:21:30'),
(4, 1, 'CON20974ZGFNK', '800000.00', 'Charges On Money Transfer', 'Active', '2016-08-16 10:21:56'),
(5, 1, 'CON25950XCKDW', '7500000.00', 'Charges On Current Account Withdrawal', 'Active', '2016-08-16 12:00:46'),
(6, 1, 'CON51655STMXK', '500.00', 'Test Account 1', 'Active', '2016-08-16 10:30:55'),
(7, 1, 'CON77484DIBWU', '600.00', 'Test Account 2', 'Active', '2016-08-16 10:32:03'),
(8, 1, 'CON64244EWAUB', '600.00', 'Test Account ', 'Active', '2016-08-16 11:56:00'),
(9, 1, 'CON55072KAARF', '600.00', 'Test Account 2', 'Deactivated', '2016-08-16 10:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `cyid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `cycode` varchar(254) DEFAULT NULL,
  `dop` varchar(254) DEFAULT NULL,
  `ramount` decimal(18,2) DEFAULT NULL,
  `gamount` decimal(18,2) DEFAULT NULL,
  `cusname` varchar(254) DEFAULT NULL,
  `nic` varchar(254) DEFAULT NULL,
  `exchcode` varchar(254) NOT NULL,
  `phone` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`cyid`),
  KEY `fk_association16` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`cyid`, `empid`, `cycode`, `dop`, `ramount`, `gamount`, `cusname`, `nic`, `exchcode`, `phone`) VALUES
(1, 1, '11', '222', NULL, '12121.00', '1212', '1212', 'CUx36326BTAJR', '1221'),
(2, 1, '1', '500000', NULL, '7859888.00', 'Bobby', '123213212', 'CUx38327KIHMD', '6785898n7978'),
(3, 1, '3', '55555', NULL, '33333333.00', 'klo', '4589', 'CUx89819YWEOT', 'h125'),
(4, 1, '3', '2016-08-27 08:21:02pm', '55555.00', '33333333.00', 'klo', '4589', 'CUx19283ZFIWF', 'h125'),
(5, 1, '3', '2016-08-27 08:28:02pm', '55555.00', '33333333.00', 'klo', '4589', 'CUx52900YNPNA', 'h125'),
(6, 1, '4', '2016-08-27 08:54:00pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx55486RVLVX', '+237 2589875985'),
(7, 1, '4', '2016-08-27 08:56:20pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx81977VBVQA', '+237 2589875985'),
(8, 1, '4', '2016-08-27 09:03:47pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx22524JADGP', '+237 2589875985'),
(9, 1, '4', '2016-08-27 09:04:25pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx91711SJOVA', '+237 2589875985'),
(10, 1, '4', '2016-08-27 09:05:18pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx14520QMMFB', '+237 2589875985'),
(11, 1, '4', '2016-08-27 09:07:23pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx84379LEJJX', '+237 2589875985'),
(12, 1, '4', '2016-08-27 09:07:42pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx69279RTCKG', '+237 2589875985'),
(13, 1, '4', '2016-08-27 09:09:34pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx74080XLHYT', '+237 2589875985'),
(14, 1, '4', '2016-08-27 09:11:25pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx82079NMLMN', '+237 2589875985'),
(15, 1, '4', '2016-08-27 09:11:49pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx92359VHELU', '+237 2589875985'),
(16, 1, '4', '2016-08-27 09:12:13pm', '4500000.00', '1000000.00', 'Vadrama Ndisang', '12359899', 'CUx11041PXSKC', '+237 2589875985'),
(17, 1, '10', '2016-08-27 09:19:29pm', '5455454.00', '545448.00', 'kjo,-j9', '365898', 'CUx88470SCBFR', '032656'),
(18, 1, '10', '2016-08-27 09:24:32pm', '5455454.00', '545448.00', 'kjo,-j9', '365898', 'CUx57959CDNYK', '032656'),
(19, 1, '1', '2016-08-27 09:35:41pm', '23225554.00', '454548.00', 'vcvvcvcvcvcvvcvv', '325484', 'CUx21046RBQOD', '4111'),
(20, 1, '5', '2016-08-27 09:39:13pm', '12212111212.00', '32321541.00', 'swiiii', '25215125', 'CUx80400NXRSO', '56s546sa'),
(21, 1, '2', '2016-08-27 10:06:08pm', '5454545.00', '656565.00', 'l;j;jni', '8788787', 'CUx96006PVHLN', '554545'),
(22, 1, '2', '2016-08-27 10:17:08pm', '5225.00', '2525.00', '252222222222222222', '2.25555555555589e+23', 'CUx31209YRGIP', 'lllllllllllllll'),
(23, 1, '2', '2016-08-27 10:22:58pm', '45885.00', '9999999999999999.99', 'kkkkkkkkkkkkk', '377777777777777777777777', 'CUx77304WPGUA', 'jjjjjjjjjjjjjjjjjjjjjjj'),
(24, 1, '11', '2016-08-27 10:47:21pm', '9999999999999999.99', '2222222222222222.00', 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '3333333333333333333333', 'CUx50414CKDEC', '4444444444444444'),
(25, 1, '11', '2016-08-27 11:03:44pm', '77777.00', '8888.00', '5555555', '51515151', 'CUx53274UBMHN', '262626'),
(26, 1, '2', '2016-08-28 03:12:08pm', '500.00', '392500.00', 'Vladimir Vadramson', '2326589778', 'CUx23746DPUWM', '+237 2589875985'),
(27, 1, '11', '2016-08-28 03:27:43pm', '6589.00', '88578.00', 'lkkjnk', '5878', 'CUx49747CSJCE', '1547'),
(28, 1, '11', '2016-08-29 07:40:29pm', '900.00', '568978.00', 'mee', '212548', 'CUx93433FEVPS', '0021548');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cusid` int(11) NOT NULL AUTO_INCREMENT,
  `prsid` int(11) NOT NULL,
  `trxid` int(11) NOT NULL,
  `ccode` varchar(254) DEFAULT NULL,
  `branch` int(11) NOT NULL,
  `Profession` varchar(254) NOT NULL,
  `Nk_name` varchar(254) NOT NULL,
  `Nk_contact` varchar(254) NOT NULL,
  `Relationship` varchar(254) NOT NULL,
  `Account_Officer` varchar(254) NOT NULL,
  `Status` varchar(254) NOT NULL,
  `Doc` datetime NOT NULL,
  PRIMARY KEY (`cusid`),
  KEY `fk_generalisation_2` (`prsid`),
  KEY `fk_association34` (`trxid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusid`, `prsid`, `trxid`, `ccode`, `branch`, `Profession`, `Nk_name`, `Nk_contact`, `Relationship`, `Account_Officer`, `Status`, `Doc`) VALUES
(1, 1, 1, 'Cus1', 0, 'Marine Officer', 'Taylor Coldridge', '698758623', 'Friend', '1', 'Active', '2016-08-05 05:42:21'),
(2, 19, 1, 'CUS84540HDWVP', 9, 'Engineer', 'Giacomo Puccini', '45789857', 'Business Associate', '1', 'Active', '2016-08-13 07:20:23'),
(3, 18, 1, 'CUS34966TVZPA', 9, 'Doctor', 'Henry Puccel', '454898753', 'Family', '1', 'Active', '2016-08-13 07:24:02'),
(4, 20, 1, 'CUS61650OFZLP', 8, 'Accountant', 'Boris Vadrama', '678583312', 'Friend', '1', 'Active', '2016-08-13 07:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `cy_seter`
--

CREATE TABLE IF NOT EXISTS `cy_seter` (
  `csid` int(11) NOT NULL AUTO_INCREMENT,
  `gmid` int(11) NOT NULL,
  `cscode` varchar(254) DEFAULT NULL,
  `csname` varchar(254) DEFAULT NULL,
  `doc` datetime DEFAULT NULL,
  PRIMARY KEY (`csid`),
  KEY `fk_association17` (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cy_seter`
--

INSERT INTO `cy_seter` (`csid`, `gmid`, `cscode`, `csname`, `doc`) VALUES
(1, 1, 'USD', 'United States Dollar', '2016-08-10 03:30:37'),
(2, 1, 'ChY', 'Chinise Yuan', '2016-08-10 12:40:37'),
(3, 1, 'JpY', 'Japanese Yen', '2016-08-10 01:41:12'),
(4, 1, 'Rnd', 'South African Rand', '2016-08-10 12:43:37'),
(5, 1, 'N', 'Nigerian Nira', '2016-08-10 12:43:44'),
(10, 1, 'CFA', 'CFA Francs', '2016-08-10 01:41:53'),
(11, 1, 'GBP', 'Great Britian Pound', '2016-08-10 01:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE IF NOT EXISTS `daily` (
  `dlyid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `dlycode` varchar(254) DEFAULT NULL,
  `agntname` varchar(254) DEFAULT NULL,
  `acctnum` varchar(254) DEFAULT NULL,
  `fname` varchar(254) DEFAULT NULL,
  `cusphone` varchar(254) DEFAULT NULL,
  `lname` varchar(254) DEFAULT NULL,
  `dlyamt` decimal(18,2) DEFAULT NULL,
  `nic` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`dlyid`),
  KEY `fk_association23` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE IF NOT EXISTS `deductions` (
  `ductid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `ductcode` varchar(254) DEFAULT NULL,
  `ductreason` varchar(254) DEFAULT NULL,
  `ductamt` decimal(18,2) DEFAULT NULL,
  `ductbeneficiary` varchar(254) DEFAULT NULL,
  `ductdate` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`ductid`),
  KEY `fk_association29` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`ductid`, `empid`, `ductcode`, `ductreason`, `ductamt`, `ductbeneficiary`, `ductdate`) VALUES
(1, 1, 'DEDu43651YEVWW', 'Late Comming', '160000001.00', 'EMP61240UIUBB', '2016-08-30 10:54:01pm'),
(2, 1, 'DEDu64791SGNHR', 'Too much programming', '100000.00', 'EMPHQK17137TL', '2016-08-30 11:04:33pm'),
(3, 1, 'DEDu33405WRFKL', 'Nothing Bad', '900000.00', 'EMP17137TLHQK', '2016-08-30 11:06:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dptid` int(11) NOT NULL AUTO_INCREMENT,
  `gmid` int(11) NOT NULL,
  `dcode` varchar(254) DEFAULT NULL,
  `dname` varchar(254) DEFAULT NULL,
  `doc` datetime DEFAULT NULL,
  `stdsalary` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`dptid`),
  KEY `fk_association8` (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dptid`, `gmid`, `dcode`, `dname`, `doc`, `stdsalary`) VALUES
(1, 1, 'IT_Dpt', 'IT Department', '2016-08-08 02:20:00', '500000'),
(2, 1, 'HRD', 'Human Resource Department', '2016-08-09 07:20:48', '500000'),
(6, 1, 'FD', 'Forex Department', '2016-08-09 09:26:19', '1000000'),
(7, 1, 'AD', 'Accounting Department', '2016-08-09 10:29:51', '650000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `dptid` int(11) NOT NULL,
  `prsid` int(11) NOT NULL,
  `bchid` int(11) NOT NULL,
  `ecode` varchar(254) DEFAULT NULL,
  `doh` datetime DEFAULT NULL,
  `status` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`empid`),
  KEY `fk_generalisation_1` (`prsid`),
  KEY `fk_association3` (`dptid`),
  KEY `fk_association4` (`bchid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `dptid`, `prsid`, `bchid`, `ecode`, `doh`, `status`) VALUES
(1, 1, 1, 1, 'EMPHQK17137TL', '1994-11-13 00:00:00', 'Active'),
(2, 1, 2, 7, 'EMP17137TLHQK', '2016-08-02 00:00:00', 'Active'),
(3, 7, 7, 12, 'EMP61240UIUBB', '2016-08-12 00:00:00', 'Disable'),
(4, 7, 3, 12, 'EMP34886NCENF', '2016-08-12 00:00:00', 'Active'),
(5, 6, 4, 9, 'EMP75597KVAIV', '2016-08-13 01:42:44', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `exid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `excode` varchar(254) DEFAULT NULL,
  `exname` varchar(254) DEFAULT NULL,
  `exvouchee` varchar(254) DEFAULT NULL,
  `examount` decimal(18,2) DEFAULT NULL,
  `exdate` varchar(254) DEFAULT NULL,
  `approval` varchar(254) NOT NULL,
  PRIMARY KEY (`exid`),
  KEY `fk_association26` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`exid`, `empid`, `excode`, `exname`, `exvouchee`, `examount`, `exdate`, `approval`) VALUES
(1, 1, 'EXPJBRBW802OK', 'Buy Bulbs for lighting the office', 'EMPHQK17137TL', '23000.00', '26-08-16-12-25-12-24am', 'Pending'),
(2, 1, 'EXP48618JBRBW', 'Buy Coffe For Office', 'EMP17137TLHQK', '30000.00', '26-08-16-12-29-12-20am', 'Pending'),
(3, 1, 'EXP51802OKUUV', 'Buy Sugar and Milk For Office', 'EMP17137TLHQK', '30000.00', '26-08-16-12-30-12-24am', 'Approved'),
(4, 1, 'EXP50189CJMCE', 'Buy ink for Hp printers', 'EMP34886NCENF', '569872.00', '26-08-16-12-37-12-07am', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `financial_statement`
--

CREATE TABLE IF NOT EXISTS `financial_statement` (
  `fstid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `fstcode` varchar(254) DEFAULT NULL,
  `amtenterd` decimal(18,2) DEFAULT NULL,
  `amtwithdraw` decimal(18,2) DEFAULT NULL,
  `fstvoucher` varchar(254) DEFAULT NULL,
  `acctnum` varchar(254) DEFAULT NULL,
  `fstbalance` decimal(18,2) DEFAULT NULL,
  `fstdate` datetime DEFAULT NULL,
  PRIMARY KEY (`fstid`),
  KEY `fk_association31` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `funds_transfer`
--

CREATE TABLE IF NOT EXISTS `funds_transfer` (
  `frid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) DEFAULT NULL,
  `frcode` varchar(254) DEFAULT NULL,
  `actoriginnum` varchar(254) DEFAULT NULL,
  `actdestnum` varchar(254) DEFAULT NULL,
  `sendphone` varchar(254) DEFAULT NULL,
  `recievphone` varchar(254) DEFAULT NULL,
  `mtframount` decimal(18,2) DEFAULT NULL,
  `mtfrdate` datetime DEFAULT NULL,
  PRIMARY KEY (`frid`),
  KEY `fk_association25` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gm`
--

CREATE TABLE IF NOT EXISTS `gm` (
  `gmid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(254) NOT NULL,
  PRIMARY KEY (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gm`
--

INSERT INTO `gm` (`gmid`, `Name`) VALUES
(1, 'Vadrams');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `lvid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `lvname` varchar(254) DEFAULT NULL,
  `lvcode` varchar(254) DEFAULT NULL,
  `lvstart` varchar(254) DEFAULT NULL,
  `lvend` varchar(254) DEFAULT NULL,
  `lstatus` varchar(254) DEFAULT NULL,
  `ecode` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`lvid`),
  KEY `fk_association11` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`lvid`, `empid`, `lvname`, `lvcode`, `lvstart`, `lvend`, `lstatus`, `ecode`) VALUES
(1, 1, 'Holiday Leave', 'LEV43452FGRLQ', '06-22-2016', '09-24-2016', 'Pending', 'EMP75597KVAIV'),
(2, 1, 'Sick Leave', 'LEV91415IBUVW', '08-17-2016', '08-28-2016', 'Pending', 'EMP34886NCENF'),
(3, 1, 'Out of Town Leave', 'LEV15341WFXKY', '08-25-2016', '08-31-2016', 'Denied', 'EMPHQK17137TL'),
(4, 1, 'Rest Leave', 'LEV23022RDXTD', '08-31-2016', '09-30-2016', 'Approved', 'EMP17137TLHQK'),
(5, 1, 'Just Leave', 'LEV12544JIHCL', '08-19-2016', '08-31-2016', 'Pending', 'EMP61240UIUBB');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `lnid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `lncode` varchar(254) DEFAULT NULL,
  `dop` datetime DEFAULT NULL,
  `lnname` varchar(254) DEFAULT NULL,
  `lnamount` decimal(18,2) DEFAULT NULL,
  `lnamtapprove` decimal(18,2) DEFAULT NULL,
  `name` varchar(254) DEFAULT NULL,
  `picid` varchar(254) DEFAULT NULL,
  `applicantpic` varchar(254) DEFAULT NULL,
  `pob` varchar(254) DEFAULT NULL,
  `phone` varchar(254) DEFAULT NULL,
  `colaterapic` varchar(254) DEFAULT NULL,
  `nic` varchar(254) NOT NULL,
  `lnofficer` varchar(254) DEFAULT NULL,
  `status` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`lnid`),
  KEY `fk_association22` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loan_setter`
--

CREATE TABLE IF NOT EXISTS `loan_setter` (
  `lsid` int(11) NOT NULL AUTO_INCREMENT,
  `gmid` int(11) NOT NULL,
  `lscode` varchar(254) DEFAULT NULL,
  `lsname` varchar(254) DEFAULT NULL,
  `lsintrt` decimal(18,2) DEFAULT NULL,
  `lstype` varchar(254) DEFAULT NULL,
  `lsminamt` decimal(18,2) DEFAULT NULL,
  `lsdate` datetime DEFAULT NULL,
  PRIMARY KEY (`lsid`),
  KEY `fk_association21` (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loan_setter`
--

INSERT INTO `loan_setter` (`lsid`, `gmid`, `lscode`, `lsname`, `lsintrt`, `lstype`, `lsminamt`, `lsdate`) VALUES
(1, 1, 'LTL_Bl', 'Business Loan', '2.50', 'Long Term Loan', '500000.00', '2016-08-10 02:24:08'),
(2, 1, 'STL_El', 'Emergency Loan', '1.80', 'Short Term Loan', '50000.00', '2016-08-10 02:36:30'),
(3, 1, 'MTL_Sl', 'School Loans', '3.00', 'Medium Term Loan', '35000.00', '2016-08-10 02:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `cusid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `msgop` varchar(254) DEFAULT NULL,
  `msg` varchar(254) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`msgid`),
  KEY `fk_association18` (`cusid`),
  KEY `fk_association19` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `money_transfer`
--

CREATE TABLE IF NOT EXISTS `money_transfer` (
  `mtfrid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `mtfrcode` varchar(254) DEFAULT NULL,
  `sendname` varchar(254) DEFAULT NULL,
  `mtfrorigin` varchar(254) DEFAULT NULL,
  `mtfrdest` varchar(254) DEFAULT NULL,
  `sendphone` varchar(254) DEFAULT NULL,
  `recievphone` varchar(254) DEFAULT NULL,
  `mtframount` decimal(18,2) DEFAULT NULL,
  `recievname` varchar(254) DEFAULT NULL,
  `teller` varchar(254) DEFAULT NULL,
  `mtfrdate` datetime DEFAULT NULL,
  PRIMARY KEY (`mtfrid`),
  KEY `fk_association24` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `monney_trans`
--

CREATE TABLE IF NOT EXISTS `monney_trans` (
  `mtrid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `mtrcode` varchar(254) DEFAULT NULL,
  `mtrtype` varchar(254) DEFAULT NULL,
  `fname` varchar(254) DEFAULT NULL,
  `lname` varchar(254) DEFAULT NULL,
  `mtrdate` datetime DEFAULT NULL,
  `mtramnt` decimal(18,2) DEFAULT NULL,
  `mtrphone` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`mtrid`),
  KEY `fk_association20` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `prlid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `prlcode` varchar(254) DEFAULT NULL,
  `empdpt` varchar(254) DEFAULT NULL,
  `deductions` decimal(18,2) DEFAULT NULL,
  `bonuses` decimal(18,2) DEFAULT NULL,
  `empcode` varchar(254) DEFAULT NULL,
  `empstdsalary` decimal(18,2) DEFAULT NULL,
  `cnps` decimal(18,2) DEFAULT NULL,
  `netsalary` decimal(18,2) DEFAULT NULL,
  `prldate` datetime DEFAULT NULL,
  PRIMARY KEY (`prlid`),
  KEY `fk_association27` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`prlid`, `empid`, `prlcode`, `empdpt`, `deductions`, `bonuses`, `empcode`, `empstdsalary`, `cnps`, `netsalary`, `prldate`) VALUES
(1, 1, 'PayR66173OIWZH', 'IT Department', '900000.00', '12000001.00', 'EMP17137TLHQK', '500000.00', '1.00', '11600001.00', '2016-09-15 01:56:11'),
(2, 1, 'PayR23198EWNDE', 'IT Department', '900000.00', '12000001.00', 'EMP17137TLHQK', '500000.00', '1.00', '11600001.00', '2016-08-31 11:15:28'),
(3, 1, 'PayR44725CDCOX', 'Forex Department', NULL, NULL, 'EMP75597KVAIV', '1000000.00', '1.00', '1000000.00', '2016-08-31 11:39:08'),
(4, 1, 'PayR11890JMCED', 'IT Department', NULL, NULL, 'EMPHQK17137TL', '500000.00', '1.00', '500000.00', '2016-08-31 11:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `prsid` int(11) NOT NULL AUTO_INCREMENT,
  `pcode` varchar(254) DEFAULT NULL,
  `fname` varchar(254) DEFAULT NULL,
  `lname` varchar(254) DEFAULT NULL,
  `dob` varchar(254) DEFAULT NULL,
  `plcob` varchar(254) DEFAULT NULL,
  `sex` varchar(254) DEFAULT NULL,
  `address` varchar(254) DEFAULT NULL,
  `phone` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `nic` varchar(254) DEFAULT NULL,
  `pic` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`prsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`prsid`, `pcode`, `fname`, `lname`, `dob`, `plcob`, `sex`, `address`, `phone`, `email`, `nic`, `pic`) VALUES
(1, 'Ef24', 'Vadrama', 'Ndisang', '1994-11-13', 'Bamenda', 'Male', 'Yaounde Cameroon', '678583312', 'vadramson@gmail.com', '1259875365489', 'vadramson.jpg'),
(2, 'PR23226NPNQD', 'Melani ', 'Johansen', '0000-00-00', 'Mariopol', 'Female', '1635 North Boris road Rostova', '678659841', 'melani@yahoo.com', '1256987894', 'avatar2.png'),
(3, 'PR99511RVDGI', 'Melani ', 'Johansen', '0000-00-00', 'Mariopol', 'Female', '1635 North Boris road Rostova', '678659846', 'melani@yahoo.com', '1256987894', 'avatar2.png'),
(4, 'PR17137TLHQK', 'Ndisang', 'Ngyibi', '0000-00-00', 'Bamenda', 'Male', 'Yaounde Cameroon', '658978845', 'ndisang@yahoo.com', '1589785987', 'avatar.png'),
(5, 'PR47974PNLAC', 'sss', 'fff', '0000-00-00', 'vds', 'Female', 'fvdfs', 'svd', 'ngyibi94@yahoo.com', '555', 'avatar5.png'),
(6, 'PR79099FIXSP', 'rrrrrr', 'rrr', '0000-00-00', 'rr', 'Female', 'jhgjghjh', 'rrr', 'ngyibi94@yahoo.com', '555', 'avatar04.png'),
(7, 'PR87066BEYTP', 'ggg', 'hhh', '0000-00-00', 'jjjj', 'Female', 'sssssssss', '777', 'ngyibi94@yahoo.com', '8888', 'bg.jpg'),
(8, 'PR52416UOSBQ', 'jgere', 'jhhi', '0000-00-00', 'fgea', 'Male', 'dhht', 'gre', 'test@test.com', '98988', '2TUP.gif'),
(9, 'PR60230CSEJO', 'pic', 'pic', '0000-00-00', 'ccc', 'Female', 'gh', '848498', 'test@test.com', '888888', '2TUP.ai'),
(10, 'PR41082MSVPH', 'f', 'gyfr', '0000-00-00', 'nfgr', 'Female', 'gfdfghhg', 'fgn', 'test@test.com', '8486484', '9_3_general_ledger-main.pdf'),
(11, 'PR47834DGXRX', 'sfbd', 'asfdg', '0000-00-00', 'agf', 'Female', 'fgafga', 'ag', 'test@test.com', '87', '09304099.pdf'),
(12, 'PR35736LJYXC', 'gbf', 'gfbf', '0000-00-00', 'bgfbg', 'Male', 'tf', '98989', 'test@test.com', '8956', 'Cahier des Charges Systèmes et  réseaux 2.pdf'),
(13, 'PR15515NRZUH', 'hg', 'gd', '0000-00-00', 'dg', 'Female', 'trttrtr', '78n', 'test@test.com', '7789789', 'HRMS.pdf'),
(14, 'PR81791INTUJ', 'ngf', 'fngd', '0000-00-00', 'fdng', 'Female', 'hn', 'fdng', 'ndisang@yahoo.com', '75585', 'Bank Departments.docx'),
(15, 'PR65422IAGAP', 'uuuu', 'iiiiii', '0000-00-00', 'ippp', 'Female', 'lllll', '88p8p8p', 'gfdt@gjh', '26', 'Must Have Gosple Collection.docx'),
(16, 'PR20118KCDFJ', 'eee', 'eeee', '0000-00-00', 'ee', 'Male', 'eeee', 'eeee', 'er@ftf', '20', 'CD_FD.png'),
(17, 'PR53683ZSYHE', 'hhh', 'jjj', '0000-00-00', 'jjj', 'Female', 'nn', '4444', 'ngyibi94@yahoo.com', '34', 'Accpounting.png'),
(18, 'PR68581ZZCGD', 'bob', 'bby', '0000-00-00', 'Binsua', 'Male', 'Bamenda Cameroon', '677777777', 'bob@vmail.com', '7878', 'BOB.jpg'),
(19, 'PR10941TBRMG', 'Antony', 'Claude', '1993-03-03', 'Baham', 'Male', 'Atlanta Georgia', '699754584', 'claude@gmail.com', '8789858683', '2.jpg'),
(20, 'PR56333FIXXF', 'Enrique', 'Ignialez Gustav', '03-03-1995', 'Bali', 'Male', 'Boston Massachusette', '699754236', 'customer1@cusmail.com', '8789858683', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recomendation`
--

CREATE TABLE IF NOT EXISTS `recomendation` (
  `recid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `reccode` varchar(254) DEFAULT NULL,
  `recname` varchar(254) DEFAULT NULL,
  `recobject` decimal(18,2) DEFAULT NULL,
  `recvoucher` varchar(254) DEFAULT NULL,
  `recstatus` varchar(254) DEFAULT NULL,
  `recdate` datetime DEFAULT NULL,
  PRIMARY KEY (`recid`),
  KEY `fk_association30` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sassets`
--

CREATE TABLE IF NOT EXISTS `sassets` (
  `sasid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `ascode` varchar(254) NOT NULL,
  `dop` varchar(254) NOT NULL,
  `asname` varchar(254) NOT NULL,
  `asamount` decimal(18,2) NOT NULL,
  `name` varchar(254) NOT NULL,
  `nic` varchar(254) NOT NULL,
  `phone` varchar(254) NOT NULL,
  `transcode` varchar(254) NOT NULL,
  PRIMARY KEY (`sasid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sassets`
--

INSERT INTO `sassets` (`sasid`, `empid`, `ascode`, `dop`, `asname`, `asamount`, `name`, `nic`, `phone`, `transcode`) VALUES
(1, 1, 'Ass82265CKCRY', '2016-08-29 07:05:54pm', 'Mobrise LTM', '26589787.00', 'mjk', '256897', '12548', 'Sas69216SHILW'),
(2, 1, 'Ass16840MCAPM', '2016-08-29 07:35:44pm', 'Grayson Corporation', '97892658987.00', 'Vadramson Solutions', '58789878988', '+237 678583312', 'Sas97070EOVSR'),
(3, 1, 'Ass59081SFSKZ', '2016-08-29 08:19:30pm', 'Nitro Boost', '900000000.00', 'Vlascov Vadrams', '12548788888', '+000 678583312', 'Sas57226JUFJF');

-- --------------------------------------------------------

--
-- Table structure for table `securities`
--

CREATE TABLE IF NOT EXISTS `securities` (
  `seid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `secode` varchar(254) DEFAULT NULL,
  `dop` datetime DEFAULT NULL,
  `asname` varchar(254) DEFAULT NULL,
  `secamount` decimal(18,2) DEFAULT NULL,
  `name` varchar(254) DEFAULT NULL,
  `nic` varchar(254) DEFAULT NULL,
  `phone` varchar(254) DEFAULT NULL,
  `status` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`seid`),
  KEY `fk_association15` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `securities`
--

INSERT INTO `securities` (`seid`, `empid`, `secode`, `dop`, `asname`, `secamount`, `name`, `nic`, `phone`, `status`) VALUES
(1, 1, 'Sec 59302GJCRT', '2016-09-03 10:47:53', 'Treasury Bond', '25000.00', 'Cameroon Government', '12548789987', '+222332659825', 'Available'),
(2, 1, 'Sec 63684XIKZK', '2016-09-03 10:48:31', 'Petrol Bond', '950000.00', 'Cameroon Government', '12544879589', '+222332659825', 'Available'),
(3, 1, 'Sec 99184NICKQ', '2016-09-03 10:49:06', 'Investment Bond', '100000000.00', 'Vadramson Investments', '12548789987', '+112332659833', 'Available'),
(4, 1, 'Sec 26017DDMIQ', '2016-09-03 10:49:09', 'Kerozine Bond', '525000.00', 'Cameroon Government', '12548789987', '+222332659825', 'Available'),
(5, 1, 'Sec 83969HEMPZ', '2016-09-03 10:49:13', 'Fiber Optic Line', '900000000.00', 'Vadramson Solutions', '12548789987', '+669857898789', 'Sold');

-- --------------------------------------------------------

--
-- Table structure for table `ssecurity`
--

CREATE TABLE IF NOT EXISTS `ssecurity` (
  `sesid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `secode` varchar(254) NOT NULL,
  `dop` varchar(254) NOT NULL,
  `secname` varchar(254) NOT NULL,
  `secamount` decimal(18,2) NOT NULL,
  `name` varchar(254) NOT NULL,
  `nic` varchar(254) NOT NULL,
  `phone` varchar(254) NOT NULL,
  `transcode` varchar(254) NOT NULL,
  PRIMARY KEY (`sesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ssecurity`
--

INSERT INTO `ssecurity` (`sesid`, `empid`, `secode`, `dop`, `secname`, `secamount`, `name`, `nic`, `phone`, `transcode`) VALUES
(1, 1, 'Sase 63684XIKZK', '2016-09-03 11:53:15am', 'Petrol Bond', '500000.00', 'Cfcf', '12555669', '032658c', 'Sas75483LFMZG'),
(2, 1, 'Sase 59302GJCRT', '2016-09-03 11:56:08am', 'Treasury Bond', '900000.00', 'Calorious Corp', '2548789', '+110215487598', 'Sas14740XHXQG'),
(3, 1, 'Sase 99184NICKQ', '2016-09-03 12:18:38pm', 'Investment Bond', '700000.00', 'Bobby Johson', '125478986', '+022878987', 'Sas47581QFYFN'),
(4, 1, 'Sec 83969HEMPZ', '2016-09-03 01:28:52pm', 'Fiber Optic Line', '2000000.00', 'Gloffson Bank', '5878987545', '+00215487', 'Sase39186TJJMC');

-- --------------------------------------------------------

--
-- Table structure for table `statementof_account`
--

CREATE TABLE IF NOT EXISTS `statementof_account` (
  `soaid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `soacode` varchar(254) DEFAULT NULL,
  `amtenterd` decimal(18,2) DEFAULT NULL,
  `amtwithdraw` decimal(18,2) DEFAULT NULL,
  `soamodeofoperation` varchar(254) DEFAULT NULL,
  `soaresponsiblename` varchar(254) DEFAULT NULL,
  `soavoucher` varchar(254) DEFAULT NULL,
  `acctnum` varchar(254) DEFAULT NULL,
  `soabalance` decimal(18,2) DEFAULT NULL,
  `soadate` datetime DEFAULT NULL,
  PRIMARY KEY (`soaid`),
  KEY `fk_association32` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE IF NOT EXISTS `town` (
  `twnid` int(11) NOT NULL AUTO_INCREMENT,
  `gmid` int(11) NOT NULL,
  `tcode` varchar(254) DEFAULT NULL,
  `tname` varchar(254) DEFAULT NULL,
  `doc` datetime DEFAULT NULL,
  PRIMARY KEY (`twnid`),
  KEY `fk_association6` (`gmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`twnid`, `gmid`, `tcode`, `tname`, `doc`) VALUES
(1, 1, 'B''da', 'Bamenda', '2016-08-24 07:25:06'),
(18, 1, 'Y''de', 'Yaounde', '2016-08-09 01:18:44'),
(20, 1, 'M''wi', 'Mbengwi', '2016-08-09 03:38:34'),
(21, 1, 'D''la', 'Douala', '2016-08-09 03:42:55'),
(22, 1, 'B''oa', 'Bertuoa', '2016-08-09 03:43:21'),
(23, 1, 'B''ea', 'Buea', '2016-08-09 03:44:49'),
(24, 1, 'B''am', 'Bafoussam', '2016-08-09 03:46:26'),
(25, 1, 'G''ua', 'Garoua', '2016-08-09 03:47:02'),
(26, 1, 'M''oa', 'Maroa', '2016-08-09 03:47:23'),
(27, 1, 'N''re', 'Ngaoundere', '2016-08-09 03:47:49'),
(28, 1, 'B''li', 'Bali', '2016-08-09 03:48:06'),
(30, 1, 'B''ia', 'Bafia', '2016-08-09 04:04:37'),
(32, 1, 'BD', 'Brandonburg', '2016-08-11 12:01:15'),
(33, 1, 'VV', 'Bobby', '2016-08-11 12:02:55'),
(34, 1, 'kjj', 'uuu', '2016-08-11 12:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `trxid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `trxcode` varchar(254) DEFAULT NULL,
  `trxtype` varchar(254) DEFAULT NULL,
  `trxstatus` varchar(254) DEFAULT NULL,
  `trxdescription` varchar(254) DEFAULT NULL,
  `trxreason` varchar(254) DEFAULT NULL,
  `trxdate` datetime DEFAULT NULL,
  PRIMARY KEY (`trxid`),
  KEY `fk_association33` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trxid`, `empid`, `trxcode`, `trxtype`, `trxstatus`, `trxdescription`, `trxreason`, `trxdate`) VALUES
(1, 1, 'TX15884', 'Register Customer', 'Successful', 'Employee Vadramson Added customer', 'Reg', '2016-08-08 02:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `transcustomer`
--

CREATE TABLE IF NOT EXISTS `transcustomer` (
  `trxid` int(11) NOT NULL AUTO_INCREMENT,
  `cusid` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `bknumber` varchar(254) NOT NULL,
  `trxcode` varchar(254) DEFAULT NULL,
  `trxtype` varchar(254) DEFAULT NULL,
  `trxdate` datetime DEFAULT NULL,
  PRIMARY KEY (`trxid`),
  KEY `fk_association93` (`cusid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `transcustomer`
--

INSERT INTO `transcustomer` (`trxid`, `cusid`, `name`, `amount`, `bknumber`, `trxcode`, `trxtype`, `trxdate`) VALUES
(1, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep95049WQKTJ', 'Deposit', '2016-09-03 05:09:45'),
(2, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep23996JZKCL', 'Deposit', '2016-09-03 05:11:24'),
(3, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep53929ELZZX', 'Deposit', '2016-09-03 05:11:46'),
(4, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep27060DJEIA', 'Deposit', '2016-09-03 05:12:44'),
(5, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep19270VMWPJ', 'Deposit', '2016-09-03 05:13:21'),
(6, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep97553ZIWUX', 'Deposit', '2016-09-03 05:19:59'),
(7, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep25979FQJVL', 'Deposit', '2016-09-03 05:20:49'),
(8, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep13099SZHQP', 'Deposit', '2016-09-03 05:23:33'),
(9, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep45688SUMUG', 'Deposit', '2016-09-03 05:25:20'),
(10, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep38369AIDDJ', 'Deposit', '2016-09-03 05:26:51'),
(11, 1, 'Vadrama Ndisang', '300000.00', 'BKA44522GRLQX', 'Dep72819BNADL', 'Deposit', '2016-09-03 05:27:21'),
(12, 1, 'Boris Johnson', '100000.00', 'BKA44522GRLQX', 'Dep27889YZYOA', 'Deposit', '2016-09-03 05:44:54'),
(13, 1, 'Carson', '200000.00', 'BKA44522GRLQX', 'Dep37557RCJCZ', 'Simple Withdrawal', '2016-09-04 05:39:51'),
(14, 1, 'Carson', '200000.00', 'BKA44522GRLQX', 'Wit75115EOTOL', 'Simple Withdrawal', '2016-09-04 05:41:55'),
(15, 1, 'Carson', '200000.00', 'BKA44522GRLQX', 'Wit78776XOORV', 'Simple Withdrawal', '2016-09-04 06:21:17'),
(16, 1, 'Carson', '200000.00', 'BKA44522GRLQX', 'Wit79759CTUEX', 'Simple Withdrawal', '2016-09-04 06:22:46'),
(17, 1, 'Carson', '200000.00', 'BKA44522GRLQX', 'Wit27090IISVR', 'Simple Withdrawal', '2016-09-04 06:23:08'),
(18, 1, 'Carson', '200000.00', 'BKA44522GRLQX', 'Wit91215WILGK', 'Simple Withdrawal', '2016-09-04 06:23:27'),
(19, 1, 'Swiiiiii', '2000000.00', 'BKA44522GRLQX', 'Wit67137GOUCW', 'Simple Withdrawal', '2016-09-04 06:24:53'),
(20, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit93048VCBON', 'Simple Withdrawal', '2016-09-04 06:48:41'),
(21, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit18612GIWPE', 'Simple Withdrawal', '2016-09-04 06:48:41'),
(22, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit69649GQSHD', 'Simple Withdrawal', '2016-09-04 06:49:31'),
(23, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit45453SSVSJ', 'Simple Withdrawal', '2016-09-04 06:49:31'),
(24, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit16863XXKWY', 'Simple Withdrawal', '2016-09-04 06:50:56'),
(25, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit90465EKRTC', 'Simple Withdrawal', '2016-09-04 06:50:57'),
(26, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit68144QYPQC', 'Simple Withdrawal', '2016-09-04 06:51:01'),
(27, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit61662HGFNU', 'Simple Withdrawal', '2016-09-04 06:51:01'),
(28, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit83481YTHSO', 'Simple Withdrawal', '2016-09-04 06:51:06'),
(29, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit41209IBZQX', 'Simple Withdrawal', '2016-09-04 06:51:06'),
(30, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit91025UMPIW', 'Simple Withdrawal', '2016-09-04 06:51:33'),
(31, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit60674ZHLPZ', 'Simple Withdrawal', '2016-09-04 06:51:33'),
(32, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit64235RXRKP', 'Simple Withdrawal', '2016-09-04 06:51:38'),
(33, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit73922YPAPT', 'Simple Withdrawal', '2016-09-04 06:51:39'),
(34, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit26527DSBIA', 'Simple Withdrawal', '2016-09-04 06:53:19'),
(35, 1, 'Ndisang', '150000.00', 'BKA44522GRLQX', 'Wit69850YALML', 'Simple Withdrawal', '2016-09-04 06:53:19'),
(36, 1, 'lll', '50000.00', 'BKA44522GRLQX', 'Wit53295CNJPQ', 'Simple Withdrawal', '2016-09-04 06:53:59'),
(37, 1, 'lll', '50000.00', 'BKA44522GRLQX', 'Wit64106ZAXKJ', 'Simple Withdrawal', '2016-09-04 06:53:59'),
(38, 1, 'Swiiiiii', '2000000.00', 'BKA44522GRLQX', 'Wit14319EMCSR', 'Simple Withdrawal', '2016-09-04 06:55:30'),
(39, 1, 'Swiiiiii', '2000000.00', 'BKA44522GRLQX', 'Wit35214KJKNE', 'Simple Withdrawal', '2016-09-04 06:55:30'),
(40, 1, 'lll', '50000.00', 'BKA44522GRLQX', 'Wit83145ZPMQW', 'Simple Withdrawal', '2016-09-04 06:56:14'),
(41, 1, 'lll', '50000.00', 'BKA44522GRLQX', 'Wit84957ODGNU', 'Simple Withdrawal', '2016-09-04 06:56:15'),
(42, 1, 'mmk', '50000.00', 'BKA44522GRLQX', 'Wit89749RDKMY', 'Simple Withdrawal', '2016-09-04 06:59:13'),
(43, 1, 'mmk', '50000.00', 'BKA44522GRLQX', 'Wit24953DEHVP', 'Simple Withdrawal', '2016-09-04 06:59:48'),
(44, 1, 'mmk', '50000.00', 'BKA44522GRLQX', 'Wit14831HWFKI', 'Simple Withdrawal', '2016-09-04 07:00:09'),
(45, 1, 'mmk', '50000.00', 'BKA44522GRLQX', 'Wit15288KAVWE', 'Simple Withdrawal', '2016-09-04 07:00:31'),
(46, 1, 'mmk', '50000.00', 'BKA44522GRLQX', 'Wit69349YMWMA', 'Simple Withdrawal', '2016-09-04 07:02:16'),
(47, 1, 'Wellbeck', '20000.00', 'BKA44522GRLQX', 'Wit23858AHKPM', 'Simple Withdrawal', '2016-09-04 07:15:17'),
(48, 1, 'xaviera', '5000.00', 'BKA44522GRLQX', 'Wit59787WKRTS', 'Simple Withdrawal', '2016-09-04 07:16:57'),
(49, 1, 'Hirison', '5000.00', 'BKA44522GRLQX', 'Wit90613PHSBK', 'Simple Withdrawal', '2016-09-04 07:18:35'),
(50, 1, 'Gilbertino', '20000.00', 'BKA44522GRLQX', 'Dep72457HVNMT', 'Deposit', '2016-09-12 07:37:47'),
(51, 1, 'Bobby', '200.00', 'BKA44522GRLQX', 'Chq47324OGQLO', 'Withdrawal By Cheque', '2016-09-12 07:41:12'),
(52, 1, 'Vadramson', '900000.00', 'BKA44522GRLQX', 'Dep74563SYGBB', 'Deposit', '2016-09-15 01:51:18'),
(53, 1, 'May GOD be PRAISED', '200.00', 'BKA44522GRLQX', 'Chq15103HVMGE', 'Withdrawal By Cheque', '2016-09-20 05:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `travel_order`
--

CREATE TABLE IF NOT EXISTS `travel_order` (
  `trvid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `trvcode` varchar(254) DEFAULT NULL,
  `trvsdate` varchar(254) DEFAULT NULL,
  `trvedate` varchar(254) DEFAULT NULL,
  `trvname` varchar(254) DEFAULT NULL,
  `destination` varchar(254) DEFAULT NULL,
  `trempcode` varchar(254) DEFAULT NULL,
  `approval` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`trvid`),
  KEY `fk_association35` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `travel_order`
--

INSERT INTO `travel_order` (`trvid`, `empid`, `trvcode`, `trvsdate`, `trvedate`, `trvname`, `destination`, `trempcode`, `approval`) VALUES
(1, 1, 'TRV47602FTUMG', '08-25-2016', '09-25-2016', 'Seminar', 'Bamenda', 'EMPHQK17137TL', 'Pending'),
(2, 1, 'TRV55580HGDUH', '08-31-2016', '11-30-2016', 'Train staffs of Mile 19 Branch', 'Mbengwi', 'EMP34886NCENF', 'Approved'),
(3, 1, 'TRV80755XVUKI', '12-31-2016', '02-23-2017', 'Train staffs of Centre Vill Branch', 'Bafia', 'EMP75597KVAIV', 'Denied'),
(4, 1, 'TRV39517MFELR', '08-31-2017', '08-29-2021', 'Business', 'Tokyo Japan', 'EMP34886NCENF', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_priority`
--

CREATE TABLE IF NOT EXISTS `user_priority` (
  `ptid` int(11) NOT NULL AUTO_INCREMENT,
  `gmid` int(11) NOT NULL,
  `ptcode` varchar(254) DEFAULT NULL,
  `ptname` varchar(254) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`ptid`),
  KEY `fk_association12` (`gmid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `fk_association10` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`),
  ADD CONSTRAINT `fk_association9` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `account_setter`
--
ALTER TABLE `account_setter`
  ADD CONSTRAINT `fk_association36` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `fk_association14` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `bkaccount`
--
ALTER TABLE `bkaccount`
  ADD CONSTRAINT `fk_association5` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`);

--
-- Constraints for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD CONSTRAINT `fk_association28` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `fk_association1` FOREIGN KEY (`twnid`) REFERENCES `town` (`twnid`),
  ADD CONSTRAINT `fk_association7` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

--
-- Constraints for table `con_account`
--
ALTER TABLE `con_account`
  ADD CONSTRAINT `fk_association13` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

--
-- Constraints for table `currency`
--
ALTER TABLE `currency`
  ADD CONSTRAINT `fk_association16` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_association34` FOREIGN KEY (`trxid`) REFERENCES `transaction` (`trxid`),
  ADD CONSTRAINT `fk_generalisation_2` FOREIGN KEY (`prsid`) REFERENCES `person` (`prsid`);

--
-- Constraints for table `cy_seter`
--
ALTER TABLE `cy_seter`
  ADD CONSTRAINT `fk_association17` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

--
-- Constraints for table `daily`
--
ALTER TABLE `daily`
  ADD CONSTRAINT `fk_association23` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `deductions`
--
ALTER TABLE `deductions`
  ADD CONSTRAINT `fk_association29` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `fk_association8` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_association3` FOREIGN KEY (`dptid`) REFERENCES `department` (`dptid`),
  ADD CONSTRAINT `fk_association4` FOREIGN KEY (`bchid`) REFERENCES `branch` (`bchid`),
  ADD CONSTRAINT `fk_generalisation_1` FOREIGN KEY (`prsid`) REFERENCES `person` (`prsid`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `fk_association26` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `financial_statement`
--
ALTER TABLE `financial_statement`
  ADD CONSTRAINT `fk_association31` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `funds_transfer`
--
ALTER TABLE `funds_transfer`
  ADD CONSTRAINT `fk_association25` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `fk_association11` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `fk_association22` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `loan_setter`
--
ALTER TABLE `loan_setter`
  ADD CONSTRAINT `fk_association21` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_association18` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`),
  ADD CONSTRAINT `fk_association19` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `money_transfer`
--
ALTER TABLE `money_transfer`
  ADD CONSTRAINT `fk_association24` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `monney_trans`
--
ALTER TABLE `monney_trans`
  ADD CONSTRAINT `fk_association20` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `fk_association27` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `recomendation`
--
ALTER TABLE `recomendation`
  ADD CONSTRAINT `fk_association30` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `securities`
--
ALTER TABLE `securities`
  ADD CONSTRAINT `fk_association15` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `statementof_account`
--
ALTER TABLE `statementof_account`
  ADD CONSTRAINT `fk_association32` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `town`
--
ALTER TABLE `town`
  ADD CONSTRAINT `fk_association6` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_association33` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `travel_order`
--
ALTER TABLE `travel_order`
  ADD CONSTRAINT `fk_association35` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`);

--
-- Constraints for table `user_priority`
--
ALTER TABLE `user_priority`
  ADD CONSTRAINT `fk_association12` FOREIGN KEY (`gmid`) REFERENCES `gm` (`gmid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
