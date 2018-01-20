-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 05:51 PM
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
(324402, 20, 733, 4, 250),
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
(324410, 'Piyush SIngh', 'SIngh', '1995-02-09', 102031240, 1902, 439, 'male', 'S/G', 103, 'KHAJORI ,Delhi,110049', '9717872411', 'null', 'India Gate'),
(324411, 'sushil kumar jha ', 'mr. jha ', '1473-02-02', 133019476, 1, 1, 'male', 'S/G', 78540, 'G.F floor uttam nagar  ,delhi ,1100', '9876543210', 'null', 'RML'),
(324412, 'P.N JHA', 'A.N JHA', '1886-06-12', 1318565, 263, 2564, 'male', 'S/G', 48645, 'Mohan Garden,MP,0014', '9958456210', 'null', 'India Gate'),
(324413, 'RAKESH KUMAR TOMAR', 'VIKAS KUMAR TOMAR', '1991-02-03', 1335654, 64589, 56453, 'male', 'S/G', 168445, 'Uttam Nagar,mumbai,001252', '9875821311', 'null', 'RML'),
(324414, 'JOSHWA KUTTY', 'NAGAM KUTTY', '1774-04-01', 133389, 46548, 5198, 'male', 'S/G', 56427, 'OM VIHAR,delhi,112021', '8821456845', 'null', 'Karol Bagh'),
(324415, 'B.L YADAV', 'M.N YADAV', '1981-12-15', 133537, 1354, 6451, 'male', 'S/G', 325455, 'P-1,Uttam nagar,delhi,110245', '9956874212', 'null', 'RML'),
(324416, 'JP SINGH', 'LP SINGH', '1988-09-19', 133111, 479581, 998745, 'male', 'S/G', 789546, 'T-F4, Dwarka mor,RAJHASTAN,546821', '9856511230', 'null', 'Taj Mahal'),
(324417, 'KK JHA', 'MK JHA', '1992-05-14', 133977, 54513, 654681, 'male', 'House Keeping', 999652, 'DWARKA SECTOR 1,MUMBAI,1120344', '8865243975', 'null', 'CGHL'),
(324418, 'DIL BAGH SINGH', 'rahul singh', '1987-05-06', 133367, 221452, 22578, 'male', 'S/G', 568954, 'k-5,uttam nagar,ASSAM,112045', '7854851360', 'null', 'Karol Bagh'),
(324419, 'PRAKASH CHANDRA', 'NAVEEN CHANDRA', '1997-08-28', 133370, 252, 432635, 'male', 'House Keeping', 461329, 'DWARKA SECTOR 9,MAHARASHTRA,014520', '7856695689', 'null', 'India Gate'),
(324420, 'SARJO PASWAN', 'RAJAN PASWAN', '1988-11-05', 133226, 11252, 332654, 'male', 'House Keeping', 658930, 'UTTAM NAGAR,ORISSA,145241', '8874520035', 'null', 'CGHL'),
(324421, 'HIRA LAL PRASAD', 'MOTI LAL PRASAD', '1995-10-10', 133895, 223655, 75764, 'male', 'S/G', 42522, 'Om Vihar Phase-4,delhi,110245', '8822301220', 'null', 'India Gate'),
(324422, 'RAM PAL', 'CHIRAG PAL', '1987-01-05', 1332215, 15437, 65428, 'male', 'S/G', 546782, 'NANGLOI,DHERADUN,1354153', '9956854251', 'null', 'Karol Bagh'),
(324423, 'VED NARAYAN', 'NITISH NARAYAN', '1978-04-15', 13327, 3214, 6846, 'male', 'S/G', 7758, 'K-2, Vikas Nagar,MUMBAI,225145', '7845125200', 'null', 'India Gate'),
(324424, 'OM PRAKASH', 'SHRIOM PRAKASH', '1977-02-11', 133863, 163544, 35215, 'male', 'House Keeping', 445841, 'Rajori Garden,delhi,110245', '8845112610', 'null', 'Taj Mahal'),
(324425, 'HIRA LAL VAJPHAI', 'SURJEET LAL VAJPHAI', '1982-12-12', 133613, 31884, 33690, 'male', 'S/G', 558412, 'VIKAS PURI,ORISSA,110058', '8854662311', 'null', 'Karol Bagh'),
(324426, 'BADRI PRASAD SINGH', 'MADARI PRASAD SINGH', '1996-02-04', 1332256, 12345, 4457, 'male', 'S/G', 34158, 'Gandhi Nagar,MAHARASHTRA,114458', '9968213334', 'null', 'RML'),
(324427, 'MUKESH KUMAR SINGH', 'PRAKWSH KUMAR SINGH', '1998-03-21', 1332250, 31832, 135845, 'male', 'S/G', 321874, 'Patel Nagar,Aligarh,110245', '9985421330', 'null', 'India Gate'),
(324428, 'ANIL KUMAR', 'VIPUL KUMAR', '1996-09-24', 133543, 54468, 7433, 'male', 'S/G', 134331, 'KIRTI NAGAR,MUMBAI,5316843', '8845215456', 'null', 'Karol Bagh'),
(324429, 'RAJENDRA PRASAD', 'VIRAJ PRASAD', '1995-03-30', 13254, 65484, 67468, 'male', 'S/G', 313541, 'Mahavir Enclave,Kolkata,110258', '7854845869', 'null', 'India Gate'),
(324430, 'JAI SINGH', 'VIRU SINGH', '1986-04-24', 224587, 65265, 889546, 'male', 'S/G', 56416384, 'Rama Park ,DELHI,56438', '7895624510', 'null', 'India Gate'),
(324431, 'Anil Kumar singh', 'kumar sena ', '1995-10-02', 7381738, 4646545, 45645465, 'male', 'S/G', 54654, 'mohan garden,,', '', 'null', 'CGHL'),
(324432, 'Sumer Singh', 'mr Sunil', '1995-05-06', 536165, 565656, 567567, 'male', 'S/G', 464564, 'Uttam Nagar,Delhi,110059', '882333355', 'null', 'RML'),
(324433, 'Bagish Prasad SIngh', 'Mr nanu', '1896-05-02', 34534, 3453, 3453453, 'male', 'S/G', 4654455, 'gaziabad,Delhi,110067', '987156589', 'null', 'India Gate'),
(324434, 'Bijay Kishore Prasad', 'Mr Gill', '1996-08-08', 54353, 345367, 345456, 'male', 'S/G', 56445543, 'nawada,Delhi,110059', '987145698', 'null', 'RML'),
(324435, 'ASHOK KUMAR', 'mr. kali ', '1984-02-21', 414564, 44456, 4555, 'male', 'S/G', 1, 'k-9 mohan garden ,delhi,110059', '954008545', 'null', 'RML'),
(324436, 'BIJAY KUMAR THAKUR', 'Mr. gori', '1985-12-15', 25555, 5555, 55555, 'male', 'S/G', 444444, 'K-7 mohan garend,delhi,110058', '65858582', 'null', 'RML'),
(324437, 'DILIP SINGH', 'mr.pali singh', '1985-12-01', 555, 222, 111, 'male', 'S/G', 1111, 'K-2 VIKAS PURI,DELHI,110075', '122222228', 'null', 'RML'),
(324438, 'SURESH KUMAR', 'MR. GIRI SEHGAL', '1965-12-05', 5555447, 45454, 4520110, 'male', 'S/G', 487844884, 'KJ-3 VIKAS PURI ,DELHI,110045', '7503030212', 'null', 'RML'),
(324439, 'SAT PRAKASH', 'MR TRI KUMAR', '1975-12-05', 111111, 12121, 112200, 'male', 'S/G', 448552, 'KHT-09 CV NAGAR ,DELHI,110045', '7545454545', 'null', 'RML'),
(324440, 'RAMESH KUMAR', 'mR. NETHI LAL', '1985-12-04', 212121, 22200, 33300, 'male', 'S/G', 8, 'KJ-90909 FATHE PUR,MUMBAI,101010', '1212121212', 'null', 'RML'),
(324441, 'SAT PRAKASH', 'mR. MONU', '1985-12-04', 56565656, 56584641, 4487893, 'male', 'S/G', 1424212, 'KJ- DADAR ,MUMBAI,212121', '245454544', 'null', 'RML'),
(324442, 'RAJ SINGH', 'ME.HIMMAT ', '1985-12-01', 5555, 64694, 56241, 'male', 'S/G', 123446, 'L-9 DADAR ,MUMBAI ,212121', '124241541', 'null', 'RML'),
(324443, 'ARUN KUMAR', 'Mr.PAGAL', '1985-12-12', 125858, 4544874, 44522, 'male', 'S/G', 545879642, 'LK-67 DADAR,MUMBAI,212121', '985757421', 'null', 'RML'),
(324444, 'SAT PAL SINGH', 'MR. ROHAK ', '1975-12-05', 4548954, 11416461, 447769, 'male', 'S/G', 554545, 'JU-78 DADR ,MUMBAI,212121', '98575455', 'null', 'RML'),
(324445, 'BABUAN MISHRA', 'MR. HUMAN ', '1947-12-08', 45564456, 45464654, 14664, 'male', 'S/G', 46489525, 'mn-98 hovli,pune,454545', '957845414', 'null', 'RML'),
(324446, 'RAJNISH KUMAR SINGH', 'Mr. vicy ', '1985-12-04', 45566966, 21112211, 211848718, 'male', 'S/G', 6636363, 'LK-78 MOHAN NAGAR ,PUNE,1111', '878785858', 'null', 'RML'),
(324447, 'UPENDER SINGH', 'MR.SINGH', '1985-12-02', 4545594, 6363939, 216478941, 'male', 'S/G', 1795585, 'GB-67 GAUTAM NAGAR ,PUNE,45454', '94787824', 'null', 'RML'),
(324448, 'PRAMOD KUMAR SINGH', 'MR.ETHER ', '1858-12-05', 14891248, 15148, 4844884, 'male', 'S/G', 4844884, 'KJ-98 MIHAN DR,PUNE,252525', '987545420', 'null', 'RML');

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
(29, 'Karol Bagh'),
(30, 'Taj Mahal');

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
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324449;
--
-- AUTO_INCREMENT for table `sitename`
--
ALTER TABLE `sitename`
  MODIFY `emp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
