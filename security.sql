-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 09:22 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(324378, 'Mahesh', 'null', 'S/G', 12213112, 33343432, 1213, 26, '99.9999', 99, '99.9999', 99, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere'),
(324379, 'Gaurav Sharma', 'null', 'S/G', 120132043, 1230212, 1213, 26, '99.9999', 45, '99.9999', 45, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere'),
(324380, 'Prince ', 'null', 'S/G', 2134, 121, 1213, 26, '99.9999', 45, '99.9999', 45, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere'),
(324381, 'Sanjay', 'null', 'S/G', 10394056, 2054063, 1213, 26, '99.9999', 99, '99.9999', 99, '99.9999', '99.9999', '99.9999', 123, 213, '99.9999', '99.9999', 'hellothere');

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
(324378, 'Mahesh', 'Rahu', '2017-07-07', 12213112, 33343432, 2343, 'male', 'S/G', 12333, '32rdfg1231332132', '4324121323', 'null', 'RML'),
(324379, 'Gaurav Sharma', 'Sk Sharma', '2016-11-22', 120132043, 1230212, 232132, 'male', 'S/G', 120321, 'G-453/Rama Park', '9201453', 'null', 'RML'),
(324380, 'Prince ', 'sjd', '2017-11-16', 2134, 121, 32312, 'male', 'S/G', 2212, 'dfs', '23231231', 'null', 'INDIA GATE'),
(324381, 'Sanjay', 'Singh Madhav', '1984-12-31', 10394056, 2054063, 123241, 'male', 'S/G', 103204, 'k-6,pipal wala road', '9205652411', 'null', 'RML');

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
(324378, 33343432, 12333, 'Mahesh', 27, 45, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999'),
(324379, 1230212, 120321, 'Gaurav Sharma', 27, 45, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999'),
(324380, 121, 2212, 'Prince ', 27, 54, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999'),
(324381, 2054063, 103204, 'Sanjay', 27, 99, '99.9999', '99.9999', '99.9999', '99.9999', '45.0000', '99.9999', '99.9999', '55.0000', '55.0000', '99.9999', '99.9999', '88.0000', '99.9999');

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
-- Indexes for table `guard_info`
--
ALTER TABLE `guard_info`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guard_info`
--
ALTER TABLE `guard_info`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324382;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
