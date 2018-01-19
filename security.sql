-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 08:32 AM
-- Server version: 5.5.24
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_slip_east`
--

CREATE TABLE `basic_slip_east` (
  `emp_id` int(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `site_name` varchar(80) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `emp_esic` bigint(20) NOT NULL,
  `pf_no` int(20) NOT NULL,
  `work_days` mediumint(10) NOT NULL,
  `rate_wages` decimal(6,4) NOT NULL,
  `total_att` mediumint(10) NOT NULL,
  `wages_payable` decimal(6,4) NOT NULL,
  `overtime_attend` mediumint(10) NOT NULL,
  `ot_rate` decimal(6,4) NOT NULL,
  `ot_amt` decimal(6,4) NOT NULL,
  `total_amt` decimal(6,4) NOT NULL,
  `pf` int(20) NOT NULL,
  `esic` int(20) NOT NULL,
  `total_ded` decimal(6,4) NOT NULL,
  `net_pay` decimal(6,4) NOT NULL,
  `sign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_slip_east`
--

INSERT INTO `basic_slip_east` (`emp_id`, `emp_name`, `site_name`, `designation`, `account_no`, `emp_esic`, `pf_no`, `work_days`, `rate_wages`, `total_att`, `wages_payable`, `overtime_attend`, `ot_rate`, `ot_amt`, `total_amt`, `pf`, `esic`, `total_ded`, `net_pay`, `sign`) VALUES
(324391, 'mahesh', 'null', 'sg', 415555, 455, 1213, 26, '99.9999', 88, '99.9999', 88, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere'),
(324392, 'hari', 'null', 'sg', 4545, 555, 1213, 26, '99.9999', 45, '99.9999', 45, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere'),
(324395, 'sdasda', 'null', 'sg', 0, 0, 1213, 26, '99.9999', 45, '99.9999', 45, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere');

-- --------------------------------------------------------

--
-- Table structure for table `basic_slip_north`
--

CREATE TABLE `basic_slip_north` (
  `emp_id` int(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `site_name` varchar(80) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `emp_esic` bigint(20) NOT NULL,
  `pf_no` int(20) NOT NULL,
  `work_days` mediumint(10) NOT NULL,
  `rate_wages` decimal(6,4) NOT NULL,
  `total_att` mediumint(10) NOT NULL,
  `wages_payable` decimal(6,4) NOT NULL,
  `overtime_attend` mediumint(10) NOT NULL,
  `ot_rate` decimal(6,4) NOT NULL,
  `ot_amt` decimal(6,4) NOT NULL,
  `total_amt` decimal(6,4) NOT NULL,
  `pf` int(20) NOT NULL,
  `esic` int(20) NOT NULL,
  `total_ded` decimal(6,4) NOT NULL,
  `net_pay` decimal(6,4) NOT NULL,
  `sign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `basic_slip_south`
--

CREATE TABLE `basic_slip_south` (
  `emp_id` int(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `site_name` varchar(80) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `emp_esic` bigint(20) NOT NULL,
  `pf_no` int(20) NOT NULL,
  `work_days` mediumint(10) NOT NULL,
  `rate_wages` decimal(6,4) NOT NULL,
  `total_att` mediumint(10) NOT NULL,
  `wages_payable` decimal(6,4) NOT NULL,
  `overtime_attend` mediumint(10) NOT NULL,
  `ot_rate` decimal(6,4) NOT NULL,
  `ot_amt` decimal(6,4) NOT NULL,
  `total_amt` decimal(6,4) NOT NULL,
  `pf` int(20) NOT NULL,
  `esic` int(20) NOT NULL,
  `total_ded` decimal(6,4) NOT NULL,
  `net_pay` decimal(6,4) NOT NULL,
  `sign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `basic_slip_west`
--

CREATE TABLE `basic_slip_west` (
  `emp_id` int(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `site_name` varchar(80) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `emp_esic` bigint(20) NOT NULL,
  `pf_no` int(20) NOT NULL,
  `work_days` mediumint(10) NOT NULL,
  `rate_wages` decimal(6,4) NOT NULL,
  `total_att` mediumint(10) NOT NULL,
  `wages_payable` decimal(6,4) NOT NULL,
  `overtime_attend` mediumint(10) NOT NULL,
  `ot_rate` decimal(6,4) NOT NULL,
  `ot_amt` decimal(6,4) NOT NULL,
  `total_amt` decimal(6,4) NOT NULL,
  `pf` int(20) NOT NULL,
  `esic` int(20) NOT NULL,
  `total_ded` decimal(6,4) NOT NULL,
  `net_pay` decimal(6,4) NOT NULL,
  `sign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_slip_west`
--

INSERT INTO `basic_slip_west` (`emp_id`, `emp_name`, `site_name`, `designation`, `account_no`, `emp_esic`, `pf_no`, `work_days`, `rate_wages`, `total_att`, `wages_payable`, `overtime_attend`, `ot_rate`, `ot_amt`, `total_amt`, `pf`, `esic`, `total_ded`, `net_pay`, `sign`) VALUES
(324388, 'naveen rana', 'null', 'sad', 454545, 0, 1213, 26, '99.9999', 45, '99.9999', 45, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere'),
(324390, 'Praveen', 'null', 'sg', 45455, 4545, 1213, 26, '99.9999', 45, '99.9999', 54, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere'),
(324394, 'nittu', 'null', 'sg', 456564, 4645, 1213, 26, '99.9999', 212, '99.9999', 1212, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere');

-- --------------------------------------------------------

--
-- Table structure for table `guard_info`
--

CREATE TABLE `guard_info` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(60) NOT NULL,
  `emp_father_name` varchar(30) NOT NULL,
  `emp_dob` date DEFAULT NULL,
  `emp_account_no` int(11) NOT NULL,
  `emp_esic_no` int(11) NOT NULL,
  `emp_pf_no` int(11) NOT NULL,
  `emp_gender` varchar(7) NOT NULL,
  `emp_designation` varchar(30) NOT NULL,
  `uan_no` int(11) NOT NULL,
  `emp_address` text NOT NULL,
  `emp_phn` varchar(10) NOT NULL,
  `emp_image` varchar(200) NOT NULL,
  `emp_zone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guard_info`
--

INSERT INTO `guard_info` (`emp_id`, `emp_name`, `emp_father_name`, `emp_dob`, `emp_account_no`, `emp_esic_no`, `emp_pf_no`, `emp_gender`, `emp_designation`, `uan_no`, `emp_address`, `emp_phn`, `emp_image`, `emp_zone`) VALUES
(324398, 'Shailesh Sahu', 'SC Sahu', '1999-01-13', 10240340, 232134, 234532, 'male', 'S/G', 123, 'k-6,pipal wala road,New Delhi,110059', '9205652411', 'null', 'CGHL'),
(324399, 'Naveen Rana', 'Rana', '1995-11-28', 1030212, 3201312, 230214, 'male', 'S/G', 1103, 'R2z,Sagar Pur,New Delhi,11029', '9605652411', 'null', 'India Gate'),
(324400, 'Gaurav Sharma', 'Sharma ', '1996-10-23', 1023103, 3943022, 2324645, 'male', 'S/G', 294, 'Rama Park Block-5,New Delhi,110059', '9540067845', 'null', 'RML'),
(324401, 'Prince Phokan', 'Phokan', '1996-02-09', 103242, 20532, 24395, 'male', 'S/G', 102421, 'Pipal Road block-6,New Delhi,110056', '7920312334', 'null', 'Karol Bagh'),
(324402, 'Mohit Prasad', 'Parasd Singh', '1967-12-01', 192221, 23921, 294201, 'male', 'S/G', 23231, 'KarolBagh,West block,Ajam garh,U>P,110039', '9810329432', 'null', 'RML'),
(324403, 'Manjeet Sharan', 'sharan singh', '1996-02-02', 2011021, 120212, 1122321, 'male', 'S/G', 119293941, 'Barelly east wali,UP,100210', '8800293123', 'null', 'RML'),
(324404, 'Ritu Parsad', 'Parasd Singh', '1994-12-03', 1102393, 21032, 1021, 'female', 'House Keeping', 2193234, 'block6/Red Majid,Jammu,110293', '7021345642', 'null', 'CGHL'),
(324405, 'Ranveer Singh', 'Singh B', '1992-12-12', 1102320, 1021, 11030, 'male', 'S/G', 119, '45-6,wale pur,West Bengal,110210', '9208435456', 'null', 'CGHL'),
(324406, 'Ritika Pandit', 'Pandit', '1995-12-21', 1021931, 1543, 123, 'female', 'House Keeping', 12012, '5/7,pritam pura,New Delhi,110212', '790039212', 'null', 'CGHL'),
(324407, 'Sandeep Yadav', 'Yadav Singh', '1991-02-11', 10219320, 2192, 1021, 'male', 'S/G', 1223, 'pritmapura road new valley,New Delhi,19021', '9310232354', 'null', 'India Gate'),
(324408, 'Dhanush Malkoya', 'Mahesh Malkoya', '1992-02-01', 1021021, 11021, 872, 'male', 'S/G', 10219312, 'block-34,mintra road,MP,110230', '9203134567', 'null', 'Karol Bagh'),
(324409, 'Adarsh Sharma', 'Rohit Sharma', '1994-01-10', 12013232, 12101, 22102, 'male', 'S/G', 23434, 'alwar road,New Delhi,110049', '821034232', 'null', 'CGHL');

-- --------------------------------------------------------

--
-- Table structure for table `monthlyupdate`
--

CREATE TABLE `monthlyupdate` (
  `emp_id` int(10) NOT NULL,
  `emp_month` date NOT NULL,
  `emp_wdays` int(10) NOT NULL,
  `emp_odays` int(10) NOT NULL,
  `emp_wrate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay_slip_east`
--

CREATE TABLE `pay_slip_east` (
  `emp_id` int(10) NOT NULL,
  `emp_esi` bigint(20) NOT NULL,
  `emp_uan` bigint(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `total_days` mediumint(5) NOT NULL,
  `working_days` mediumint(5) NOT NULL,
  `esi_daily_rate` decimal(6,4) NOT NULL,
  `pf_daily_rate` decimal(6,4) NOT NULL,
  `pf_basic` decimal(6,4) NOT NULL,
  `misc_all` decimal(6,4) NOT NULL,
  `gross_sal` decimal(6,4) NOT NULL,
  `paid_basic_sal` decimal(6,4) NOT NULL,
  `paid_gross_sal` decimal(6,4) NOT NULL,
  `pf_3.67` decimal(6,4) NOT NULL,
  `pf_8.33` decimal(6,4) NOT NULL,
  `pf_12` decimal(6,4) NOT NULL,
  `esi_1.75` decimal(6,4) NOT NULL,
  `total_dedu` decimal(6,4) NOT NULL,
  `net_sal` decimal(6,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_slip_east`
--

INSERT INTO `pay_slip_east` (`emp_id`, `emp_esi`, `emp_uan`, `emp_name`, `total_days`, `working_days`, `esi_daily_rate`, `pf_daily_rate`, `pf_basic`, `misc_all`, `gross_sal`, `paid_basic_sal`, `paid_gross_sal`, `pf_3.67`, `pf_8.33`, `pf_12`, `esi_1.75`, `total_dedu`, `net_sal`) VALUES
(324392, 456, 45656, 'kamlesh', 27, 45, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999'),
(324393, 4654, 6456465, 'aarti rana', 27, 45, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999'),
(324395, 0, 4545, 'sdasda', 27, 45, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999');

-- --------------------------------------------------------

--
-- Table structure for table `pay_slip_north`
--

CREATE TABLE `pay_slip_north` (
  `emp_id` int(10) NOT NULL,
  `emp_esi` bigint(20) NOT NULL,
  `emp_uan` bigint(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `total_days` mediumint(5) NOT NULL,
  `working_days` mediumint(5) NOT NULL,
  `esi_daily_rate` decimal(6,4) NOT NULL,
  `pf_daily_rate` decimal(6,4) NOT NULL,
  `pf_basic` decimal(6,4) NOT NULL,
  `misc_all` decimal(6,4) NOT NULL,
  `gross_sal` decimal(6,4) NOT NULL,
  `paid_basic_sal` decimal(6,4) NOT NULL,
  `paid_gross_sal` decimal(6,4) NOT NULL,
  `pf_3.67` decimal(6,4) NOT NULL,
  `pf_8.33` decimal(6,4) NOT NULL,
  `pf_12` decimal(6,4) NOT NULL,
  `esi_1.75` decimal(6,4) NOT NULL,
  `total_dedu` decimal(6,4) NOT NULL,
  `net_sal` decimal(6,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay_slip_south`
--

CREATE TABLE `pay_slip_south` (
  `emp_id` int(10) NOT NULL,
  `emp_esi` bigint(20) NOT NULL,
  `emp_uan` bigint(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `total_days` mediumint(5) NOT NULL,
  `working_days` mediumint(5) NOT NULL,
  `esi_daily_rate` decimal(6,4) NOT NULL,
  `pf_daily_rate` decimal(6,4) NOT NULL,
  `pf_basic` decimal(6,4) NOT NULL,
  `misc_all` decimal(6,4) NOT NULL,
  `gross_sal` decimal(6,4) NOT NULL,
  `paid_basic_sal` decimal(6,4) NOT NULL,
  `paid_gross_sal` decimal(6,4) NOT NULL,
  `pf_3.67` decimal(6,4) NOT NULL,
  `pf_8.33` decimal(6,4) NOT NULL,
  `pf_12` decimal(6,4) NOT NULL,
  `esi_1.75` decimal(6,4) NOT NULL,
  `total_dedu` decimal(6,4) NOT NULL,
  `net_sal` decimal(6,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay_slip_west`
--

CREATE TABLE `pay_slip_west` (
  `emp_id` int(10) NOT NULL,
  `emp_esi` bigint(20) NOT NULL,
  `emp_uan` bigint(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `total_days` mediumint(5) NOT NULL,
  `working_days` mediumint(5) NOT NULL,
  `esi_daily_rate` decimal(6,4) NOT NULL,
  `pf_daily_rate` decimal(6,4) NOT NULL,
  `pf_basic` decimal(6,4) NOT NULL,
  `misc_all` decimal(6,4) NOT NULL,
  `gross_sal` decimal(6,4) NOT NULL,
  `paid_basic_sal` decimal(6,4) NOT NULL,
  `paid_gross_sal` decimal(6,4) NOT NULL,
  `pf_3.67` decimal(6,4) NOT NULL,
  `pf_8.33` decimal(6,4) NOT NULL,
  `pf_12` decimal(6,4) NOT NULL,
  `esi_1.75` decimal(6,4) NOT NULL,
  `total_dedu` decimal(6,4) NOT NULL,
  `net_sal` decimal(6,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_slip_west`
--

INSERT INTO `pay_slip_west` (`emp_id`, `emp_esi`, `emp_uan`, `emp_name`, `total_days`, `working_days`, `esi_daily_rate`, `pf_daily_rate`, `pf_basic`, `misc_all`, `gross_sal`, `paid_basic_sal`, `paid_gross_sal`, `pf_3.67`, `pf_8.33`, `pf_12`, `esi_1.75`, `total_dedu`, `net_sal`) VALUES
(324388, 456456, 45656, 'suresh', 27, 45, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999'),
(324390, 4566, 56456, 'kumar', 27, 45, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999'),
(324394, 4645, 45654, 'nittu', 27, 212, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999');

-- --------------------------------------------------------

--
-- Table structure for table `sitename`
--

CREATE TABLE `sitename` (
  `emp_id` int(255) NOT NULL,
  `emp_site_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitename`
--

INSERT INTO `sitename` (`emp_id`, `emp_site_name`) VALUES
(1, 'RML'),
(27, 'CGHL'),
(28, 'India Gate'),
(29, 'Karol Bagh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_slip_east`
--
ALTER TABLE `basic_slip_east`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `account_no` (`account_no`),
  ADD UNIQUE KEY `emp_esic` (`emp_esic`);

--
-- Indexes for table `basic_slip_north`
--
ALTER TABLE `basic_slip_north`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `basic_slip_south`
--
ALTER TABLE `basic_slip_south`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `basic_slip_west`
--
ALTER TABLE `basic_slip_west`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `account_no` (`account_no`),
  ADD UNIQUE KEY `emp_esic` (`emp_esic`);

--
-- Indexes for table `guard_info`
--
ALTER TABLE `guard_info`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `monthlyupdate`
--
ALTER TABLE `monthlyupdate`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `pay_slip_east`
--
ALTER TABLE `pay_slip_east`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_esi` (`emp_esi`);

--
-- Indexes for table `pay_slip_north`
--
ALTER TABLE `pay_slip_north`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_esi` (`emp_esi`);

--
-- Indexes for table `pay_slip_south`
--
ALTER TABLE `pay_slip_south`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_esi` (`emp_esi`);

--
-- Indexes for table `pay_slip_west`
--
ALTER TABLE `pay_slip_west`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_esi` (`emp_esi`);

--
-- Indexes for table `sitename`
--
ALTER TABLE `sitename`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guard_info`
--
ALTER TABLE `guard_info`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324410;
--
-- AUTO_INCREMENT for table `sitename`
--
ALTER TABLE `sitename`
  MODIFY `emp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
