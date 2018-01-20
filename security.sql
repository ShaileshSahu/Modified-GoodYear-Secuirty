-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 11:08 AM
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
-- Table structure for table `2018-01`
--

CREATE TABLE `2018-01` (
  `id` int(11) NOT NULL,
  `emp_wdays` double NOT NULL,
  `emp_rwages` float NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-01`
--

INSERT INTO `2018-01` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`) VALUES
(324398, 12, 733, 2, 250),
(324400, 21, 733, 5, 250),
(324403, 12, 733, 1, 250),
(324404, 12, 733, 3, 250);

-- --------------------------------------------------------

--
-- Table structure for table `2018-02`
--

CREATE TABLE `2018-02` (
  `id` int(11) NOT NULL,
  `emp_wdays` double NOT NULL,
  `emp_rwages` float NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-02`
--

INSERT INTO `2018-02` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`) VALUES
(324398, 26, 733, 10, 250),
(324399, 12, 733, 2, 250);

-- --------------------------------------------------------

--
-- Table structure for table `2018-04`
--

CREATE TABLE `2018-04` (
  `id` int(11) NOT NULL,
  `emp_wdays` double NOT NULL,
  `emp_rwages` float NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-04`
--

INSERT INTO `2018-04` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`) VALUES
(324409, 20, 733, 4, 250);

-- --------------------------------------------------------

--
-- Table structure for table `discarded`
--

CREATE TABLE `discarded` (
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
-- Dumping data for table `discarded`
--

INSERT INTO `discarded` (`emp_id`, `emp_name`, `emp_father_name`, `emp_dob`, `emp_account_no`, `emp_esic_no`, `emp_pf_no`, `emp_gender`, `emp_designation`, `uan_no`, `emp_address`, `emp_phn`, `emp_image`, `emp_zone`) VALUES
(324398, 'Shailesh ', 'SC Sahu', '1999-01-13', 10240340, 3232, 234532, 'male', 'S/G', 123, 'k-6,pipal wala road,New Delhi,110059', '9205652411', 'null', 'Karol Bagh'),
(324400, 'Gaurav Sharma', 'Sharma ', '1996-10-23', 1023103, 3943022, 2324645, 'male', 'S/G', 294, 'Rama Park Block-5,New Delhi,110059', '9540067845', 'null', 'RML');

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
(324398, 'Shailesh ', 'SC Sahu', '1999-01-13', 10240340, 3232, 234532, 'male', 'S/G', 123, 'k-6,pipal wala road,New Delhi,110059', '9205652411', 'null', 'Karol Bagh'),
(324399, 'Naveen Rana', 'Rana', '1995-11-28', 1030212, 3201312, 230214, 'male', 'S/G', 1103, 'R2z,Sagar Pur,New Delhi,11029', '9605652411', 'null', 'CGHL'),
(324400, 'Gaurav Sharma', 'Sharma ', '1996-10-23', 1023103, 3943022, 2324645, 'male', 'S/G', 294, 'Rama Park Block-5,New Delhi,110059', '9540067845', 'null', 'RML'),
(324401, 'Prince Phokan', 'Phokan', '1996-02-09', 103242, 2032, 24, 'male', 'S/G', 102421, 'Pipal Road block-6,New Delhi,110056', '7920312334', 'null', 'RML'),
(324402, 'Mohit Prasad', 'Parasd Singh', '1967-12-01', 192221, 23921, 294201, 'male', 'S/G', 23231, 'KarolBagh,West block,Ajam garh,U>P,110039', '9810329432', 'null', 'RML'),
(324403, 'Manjeet Sharan', 'sharan singh', '1996-02-02', 2011021, 120212, 1122321, 'male', 'S/G', 119293941, 'Barelly east wali,UP,100210', '8800293123', 'null', 'RML'),
(324404, 'Ritu Parsad', 'Parasd Singh', '1994-12-03', 1102393, 21032, 1021, 'female', 'House Keeping', 2193234, 'block6/Red Majid,Jammu,110293', '9810494088', 'null', 'CGHL'),
(324405, 'Ranveer Singh', 'Singh B', '1992-12-12', 1102320, 1021, 11030, 'male', 'S/G', 119, '45-6,wale pur,West Bengal,110210', '9208435456', 'null', 'CGHL'),
(324406, 'Ritika Pandit', 'Pandit', '1995-12-21', 1021931, 1543, 123, 'female', 'House Keeping', 12012, '5/7,pritam pura,New Delhi,110212', '790039212', 'null', 'CGHL'),
(324407, 'Sandeep Yadav', 'Yadav Singh', '1991-02-11', 10219320, 2192, 1021, 'male', 'S/G', 1223, 'pritmapura road new valley,New Delhi,19021', '9310232354', 'null', 'India Gate'),
(324408, 'Dhanush Malkoya', 'Mahesh Malkoya', '1992-02-01', 1021021, 11021, 872, 'male', 'S/G', 10219312, 'block-34,mintra road,MP,110230', '9203134567', 'null', 'Karol Bagh'),
(324409, 'Adarsh Sharma', 'Rohit Sharma', '1994-01-10', 12013232, 12101, 22102, 'male', 'S/G', 23434, 'alwar road,New Delhi,110049', '821034232', 'null', 'CGHL'),
(324410, 'Piyush SIngh', 'SIngh', '1995-02-09', 102031240, 1902, 439, 'male', 'S/G', 103, 'KHAJORI ,Delhi,110049', '9717872411', 'null', 'India Gate');

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
-- Indexes for table `2018-01`
--
ALTER TABLE `2018-01`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-02`
--
ALTER TABLE `2018-02`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-04`
--
ALTER TABLE `2018-04`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `discarded`
--
ALTER TABLE `discarded`
  ADD PRIMARY KEY (`emp_id`);

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
-- Indexes for table `sitename`
--
ALTER TABLE `sitename`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discarded`
--
ALTER TABLE `discarded`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324401;

--
-- AUTO_INCREMENT for table `guard_info`
--
ALTER TABLE `guard_info`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324411;

--
-- AUTO_INCREMENT for table `sitename`
--
ALTER TABLE `sitename`
  MODIFY `emp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
