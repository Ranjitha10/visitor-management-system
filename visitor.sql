-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2015 at 05:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `name` varchar(10) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(10) DEFAULT NULL,
  `emailid` varchar(10) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`name`, `username`, `password`, `address`, `emailid`, `phno`) VALUES
('amaan', 'am', 'pass', 'bgk', 'w@gmail.co', '67677676'),
('raju', 'rm', 'password', 'fdfd', 'fdfd', 'fd'),
('sam', 'umar', 'amaan', 'bgk', 'sd@gmail.c', '8787878787'),
('amaan', 'azhar', 'word', 'bgk', 'sd', 'ss'),
('monn', 'mon', 'am', 'bgk', 'sd@gmail.c', '3454545454'),
('giri', 'giri', 'giri', 'benakunase', 'gireeshbp8', '9980996990'),
('suresh', 'sur', 'sur', 'bgk', 'amaan@gmai', '8878787876');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `visitid` varchar(10) DEFAULT NULL,
  `meet` varchar(10) DEFAULT NULL,
  `suggestions` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`visitid`, `meet`, `suggestions`) VALUES
('12', 'y', 'good'),
('1', 'y', 'good but t'),
('1', 'y', 'the college is good enough,every branch has its own dept and well maintained cleaniness in college s'),
('101', 'y', 'very nice to meet'),
('1111', 'y', 'good maintainance'),
('1212', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `idgen`
--

CREATE TABLE IF NOT EXISTS `idgen` (
  `vid` varchar(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idgen`
--

INSERT INTO `idgen` (`vid`, `name`, `status`) VALUES
('1', 'amaan', 'good'),
('3', 'amaan', 'fail');

-- --------------------------------------------------------

--
-- Table structure for table `staffdetail`
--

CREATE TABLE IF NOT EXISTS `staffdetail` (
  `staffid` varchar(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `emailid` varchar(10) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffdetail`
--

INSERT INTO `staffdetail` (`staffid`, `name`, `emailid`, `branch`, `phno`) VALUES
('1', 'amaan', 'aas@gmail.', 'ise', '333'),
('111', 'ramesh', 'ssjkkj@gma', 'civil', '5454545454'),
('12', 'aaaa', 'asa', 'aaa', '333'),
('1234', 'jg', 'gj', 'gj', 'gjjg'),
('222', 'ramesh', 'ram@gmail.', 'ise', '8876767678'),
('23', 'jn', 'nj', 'jn', 'nj');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `name` varchar(10) DEFAULT NULL,
  `typeofgood` varchar(10) DEFAULT NULL,
  `vehicleno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`name`, `typeofgood`, `vehicleno`) VALUES
('jhhj', 'hj', 'hjh'),
('amaan', 'brcik', '3344'),
('amaan', 'aaa', 'jnj'),
('smm', 'brick', '3455'),
('sdn', 'sjjdj', '222'),
('asdd', '', '4564'),
('ramu', '', '3344'),
('ramesh', '', '2222'),
('eram', '', '4343'),
('ragappa', '', '2323'),
('ramu', '', '2233'),
('malla', '', '1232'),
('malla', '', '2198'),
('dkh', '', '333'),
('am', '', '33');

-- --------------------------------------------------------

--
-- Table structure for table `valvisit`
--

CREATE TABLE IF NOT EXISTS `valvisit` (
  `vistid` varchar(10) DEFAULT NULL,
  `timein` varchar(10) DEFAULT NULL,
  `timeout` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `slno` varchar(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `address` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `companyname` varchar(10) DEFAULT NULL,
  `companyid` varchar(10) DEFAULT NULL,
  `tomeet` varchar(10) DEFAULT NULL,
  `purpose` varchar(10) DEFAULT NULL,
  `vehicleno` varchar(10) DEFAULT NULL,
  `emailid` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`slno`, `name`, `address`, `gender`, `phno`, `companyname`, `companyid`, `tomeet`, `purpose`, `vehicleno`, `emailid`, `date`) VALUES
('1', 'amula', 'bgk', 'male', '77767', 'tcs', '121', 'hod', 'per', '4455', 'aam@gmail.', '2021-02-12'),
('23', 'jg', 'jg', 'Male', '8878767876', 'gn', '77', 'ISE', 'yh', '8989', 'sdh@gmail.', '2015-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `visitorinfo`
--

CREATE TABLE IF NOT EXISTS `visitorinfo` (
`id` bigint(12) NOT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `lastname` varchar(128) DEFAULT NULL,
  `tomeet` varchar(128) DEFAULT NULL,
  `companyname` varchar(64) DEFAULT NULL,
  `comingfrom` varchar(128) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `emailid` varchar(128) DEFAULT NULL,
  `checkin` datetime DEFAULT NULL,
  `checkout` datetime DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitorinfo`
--

INSERT INTO `visitorinfo` (`id`, `firstname`, `lastname`, `tomeet`, `companyname`, `comingfrom`, `mobile`, `emailid`, `checkin`, `checkout`, `status`) VALUES
(138, 'am', NULL, 'hod', 'bgk', 'Vendor', '8987656543', 'dfhg@gmail.com', '2015-04-21 15:36:01', '2015-11-16 13:22:52', 0),
(139, 'giri', NULL, 'cs hod', 'kgi', 'Family', '8999898789', 'hjvv@gmail.com', '2015-04-21 15:36:52', '2015-11-16 13:22:54', 0),
(140, 'dff', NULL, 'faculty', 'ggg', 'Vendor', '8789878987', 'hvjv@gmail.com', '2015-04-22 07:32:26', '2015-11-16 13:22:59', 0),
(141, 'fgffh', NULL, 'other', 'ghgj', 'Vendor', '9090989878', 'jgfhf@gmail.com', '2015-04-22 11:05:24', '2015-11-16 13:23:01', 0),
(142, 'khggk', NULL, 'g', 'gh', 'Vendor', '8765456545', 'fg@gmail.com', '2015-04-22 07:37:11', '2015-11-16 13:23:04', 0),
(143, 'ryRY', NULL, 'ry', 'yry', 'Vendor', '6567890987', 'tftf@gmail.com', '2015-04-24 16:42:37', NULL, 1),
(144, 'oh', NULL, 'gg8', 'bkkh', 'Friend', '8878787777', 'bibi@gmail.com', '2015-04-24 16:43:46', '2015-04-25 04:42:49', 0),
(145, 'dfhkg', NULL, 'hhhhh', 'hh', 'Family', '9898878787', 'ghgh@gmail.com', '2015-04-25 08:15:33', '2015-04-25 04:46:00', 0),
(146, 'ramesh', NULL, 'dean', 'bgk', 'Vendor', '8878987878', 'ramesh@gmail.com', '2015-04-28 17:59:35', '2015-04-30 10:28:30', 0),
(147, 'shainaaz', NULL, 'hod', 'bagalkot', 'Vendor', '8989876787', 'gjh@gmail.com', '2015-04-30 10:18:29', '2015-04-30 06:50:24', 0),
(148, 'samesh', NULL, 'frnd', 'kgi', 'Vendor', '8778778787', 'jbh@gmail.com', '2015-05-03 23:57:18', '2015-05-04 09:14:50', 0),
(149, 'u', NULL, 'uh', 'uh', 'Vendor', '8888888888', 'kb@gmail.com', '2015-05-03 23:58:12', NULL, 1),
(150, 'samu', NULL, 'mmm', 'mh', 'Vendor', '8776778765', 'g@gmail.c', '2015-05-04 00:16:31', '2015-05-04 00:17:28', 0),
(151, 'baba', NULL, 'hodis', 'bgk', 'Vendor', '9887654321', 'gh@gmail.com', '2015-05-04 09:13:31', '2015-05-04 09:14:10', 0),
(152, 'kumara', NULL, 'cs hod', 'kunigal', 'Vendor', '8095883324', 'kumara1494@gmail.com', '2015-05-05 12:19:25', '2015-06-11 13:56:04', 0),
(153, 'ganesh', NULL, 'cs hod', 'bgk', 'Friend', '8998787876', 'ganesh@gmail.com', '2015-05-05 13:37:12', NULL, 1),
(154, 'muttu', NULL, 'dean', 'bgk', 'Interview', '9890987656', 'muttu@gmail.com', '2015-05-05 13:38:29', '2015-06-11 13:55:45', 0),
(155, 'prashant', NULL, 'hod', 'hh', 'Vendor', '8888987898', 'hj@gmail.com', '2015-05-05 17:11:10', '2015-11-16 13:21:43', 0),
(156, 'gh', NULL, 'gjh', 'gjh', 'Vendor', '8998789878', 'hg@gmail.com', '2015-05-05 17:11:56', '2015-11-16 13:21:46', 0),
(157, 'shri', NULL, 'cs hod', 'bagalkot', 'Customer', '6778986765', 'sy@gmail.com', '2015-06-11 13:51:23', '2015-11-16 13:21:49', 0),
(158, '', NULL, '', '', 'Vendor', '', '', '2015-06-11 13:53:15', '2015-11-16 13:21:52', 0),
(159, 'akshay', NULL, 'hodcs', 'chitradurga', 'Vendor', '9878767656', 'akshay@gmail.com', '2015-06-27 12:12:16', '2015-11-16 13:21:55', 0),
(160, 'amaan', NULL, 'hod is', 'bgk', 'Vendor', '998987898', 'kg@gmal.com', '2015-06-28 10:57:51', NULL, 1),
(161, 'farooq', NULL, 'hod', 'bg', 'Vendor', '9999878767', 'jvvvvvvb@gmail.com', '2015-08-08 21:10:29', '2015-08-08 21:11:55', 0),
(162, 'ramesh', NULL, 'is hod', 'kengeri', 'Vendor', '8988787678', 'aaa@gmail.com', '2015-08-13 11:32:56', '2015-11-16 13:18:51', 0),
(163, 'rame', NULL, 'hod', 'bgk', 'Friend', '8878767656', '78gkh@gmail.com', '2015-11-16 13:14:21', NULL, 1),
(164, 'rammm', NULL, 'hod', 'ise', 'Family', '9543456743', 'jgh@gmail.com', '2015-11-16 13:19:45', NULL, 1),
(165, 'giriiii', NULL, 'hod', 'vn', 'Vendor', '8876765654', 'jgjgj@gmail.com', '2015-11-16 13:21:10', '2015-11-16 13:22:07', 0),
(166, 'af', NULL, 'principal', 'bgk', 'Vendor', '8876765676', 'jhg@gmail.com', '2015-11-16 15:29:43', NULL, 1),
(167, 'raghu', NULL, 'other', 'sbc', 'Friend', '7676778765', 'asdfg@gmail.com', '2015-11-17 09:37:11', '2015-11-17 09:37:37', 0),
(168, 'gamn', NULL, 'jgh', 'gjg', 'Vendor', '7767876787', 'jfj@gmail.com', '2015-11-17 14:44:06', NULL, 1),
(169, 'amaan', NULL, 'hod', 'bgk', 'Vendor', '7760301786', 'aamaan@gmail.com', '2015-11-18 19:10:45', '2015-11-18 19:11:16', 0),
(170, 'surender', NULL, 'hod', 'sbc', 'Vendor', '8878767876', 'mn@gmail.com', '2015-11-30 10:08:41', '2015-11-30 10:08:57', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idgen`
--
ALTER TABLE `idgen`
 ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `staffdetail`
--
ALTER TABLE `staffdetail`
 ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `valvisit`
--
ALTER TABLE `valvisit`
 ADD KEY `vistid` (`vistid`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
 ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `visitorinfo`
--
ALTER TABLE `visitorinfo`
 ADD PRIMARY KEY (`id`), ADD KEY `checkin` (`checkin`), ADD KEY `checkout` (`checkout`), ADD KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitorinfo`
--
ALTER TABLE `visitorinfo`
MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=171;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `valvisit`
--
ALTER TABLE `valvisit`
ADD CONSTRAINT `valvisit_ibfk_1` FOREIGN KEY (`vistid`) REFERENCES `idgen` (`vid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
