-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 04:06 PM
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
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-01`
--

INSERT INTO `2018-01` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 26, 733, 8, 250, 31, 700, 10, 31);

-- --------------------------------------------------------

--
-- Table structure for table `2018-02`
--

CREATE TABLE `2018-02` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-02`
--

INSERT INTO `2018-02` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 26, 733, 3, 250, 30, 700, 200, 28);

-- --------------------------------------------------------

--
-- Table structure for table `2018-03`
--

CREATE TABLE `2018-03` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-03`
--

INSERT INTO `2018-03` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 21, 899, 3, 543, 23, 888, 200, 31);

-- --------------------------------------------------------

--
-- Table structure for table `2018-04`
--

CREATE TABLE `2018-04` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-04`
--

INSERT INTO `2018-04` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 26, 822, 3, 344, 29, 897, 500, 30);

-- --------------------------------------------------------

--
-- Table structure for table `2018-05`
--

CREATE TABLE `2018-05` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-05`
--

INSERT INTO `2018-05` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 24, 988, 3, 244, 29, 977, 230, 31);

-- --------------------------------------------------------

--
-- Table structure for table `2018-06`
--

CREATE TABLE `2018-06` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2018-07`
--

CREATE TABLE `2018-07` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-07`
--

INSERT INTO `2018-07` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 23, 733, 5, 250, 24, 700, 23, 31);

-- --------------------------------------------------------

--
-- Table structure for table `2018-08`
--

CREATE TABLE `2018-08` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-08`
--

INSERT INTO `2018-08` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 25, 733, 4, 250, 29, 650, 520, 31);

-- --------------------------------------------------------

--
-- Table structure for table `2018-09`
--

CREATE TABLE `2018-09` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-09`
--

INSERT INTO `2018-09` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 23, 733, 3, 250, 31, 700, 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `2018-10`
--

CREATE TABLE `2018-10` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-10`
--

INSERT INTO `2018-10` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 27, 733, 5, 250, 30, 700, 200, 31);

-- --------------------------------------------------------

--
-- Table structure for table `2018-11`
--

CREATE TABLE `2018-11` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-11`
--

INSERT INTO `2018-11` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 26, 733, 10, 250, 30, 700, 1000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `2018-12`
--

CREATE TABLE `2018-12` (
  `id` int(11) NOT NULL,
  `emp_wdays` int(11) NOT NULL,
  `emp_rwages` double NOT NULL,
  `emp_odays` int(11) NOT NULL,
  `emp_owages` double NOT NULL,
  `emp_pdays` int(11) NOT NULL,
  `emp_pwages` double NOT NULL,
  `emp_addition` double NOT NULL,
  `emp_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-12`
--

INSERT INTO `2018-12` (`id`, `emp_wdays`, `emp_rwages`, `emp_odays`, `emp_owages`, `emp_pdays`, `emp_pwages`, `emp_addition`, `emp_days`) VALUES
(324398, 27, 733, 10, 250, 29, 700, 100, 31);

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
  `emp_zone` varchar(50) NOT NULL,
  `emp_police_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guard_info`
--

INSERT INTO `guard_info` (`emp_id`, `emp_name`, `emp_father_name`, `emp_dob`, `emp_account_no`, `emp_esic_no`, `emp_pf_no`, `emp_gender`, `emp_designation`, `uan_no`, `emp_address`, `emp_phn`, `emp_image`, `emp_zone`, `emp_police_no`) VALUES
(324398, 'Shailesh ', 'SC Sahu', '1999-01-13', 10240340, 3232, 234532, 'male', 'S/G', 123, 'k-6,pipal wala road,New Delhi,110059', '9205652411', 'null', 'Karol Bagh', 0),
(324399, 'Naveen Rana', 'Rana', '1995-11-28', 1030212, 3201312, 230214, 'male', 'S/G', 1103, 'R2z,Sagar Pur,New Delhi,11029', '9605652411', 'null', 'CGHL', 0),
(324400, 'Gaurav Sharma', 'Sharma ', '1996-10-23', 1023103, 3943022, 2324645, 'male', 'S/G', 294, 'Rama Park Block-5,New Delhi,110059', '9540067845', 'null', 'RML', 0),
(324401, 'Prince Phokan', 'Phokan', '1996-02-09', 103242, 2032, 24, 'male', 'S/G', 102421, 'Pipal Road block-6,New Delhi,110056', '7920312334', 'null', 'RML', 0),
(324402, 'Mohit Prasad', 'Parasd Singh', '1967-12-01', 192221, 23921, 294201, 'male', 'S/G', 23231, 'KarolBagh,West block,Ajam garh,U>P,110039', '9810329432', 'null', 'RML', 0),
(324403, 'Manjeet Sharan', 'sharan singh', '1996-02-02', 2011021, 120212, 1122321, 'male', 'S/G', 119293941, 'Barelly east wali,UP,100210', '8800293123', 'null', 'RML', 0),
(324404, 'Ritu Parsad', 'Parasd Singh', '1994-12-03', 1102393, 21032, 1021, 'female', 'House Keeping', 2193234, 'block6/Red Majid,Jammu,110293', '9810494088', 'null', 'CGHL', 0),
(324405, 'Ranveer Singh', 'Singh B', '1992-12-12', 1102320, 1021, 11030, 'male', 'S/G', 119, '45-6,wale pur,West Bengal,110210', '9208435456', 'null', 'CGHL', 0),
(324406, 'Ritika Pandit', 'Pandit', '1995-12-21', 1021931, 1543, 123, 'female', 'House Keeping', 12012, '5/7,pritam pura,New Delhi,110212', '790039212', 'null', 'CGHL', 0),
(324407, 'Sandeep Yadav', 'Yadav Singh', '1991-02-11', 10219320, 2192, 1021, 'male', 'S/G', 1223, 'pritmapura road new valley,New Delhi,19021', '9310232354', 'null', 'India Gate', 0),
(324408, 'Dhanush Malkoya', 'Mahesh Malkoya', '1992-02-01', 1021021, 11021, 872, 'male', 'S/G', 10219312, 'block-34,mintra road,MP,110230', '9203134567', 'null', 'Karol Bagh', 0),
(324409, 'Adarsh Sharma', 'Rohit Sharma', '1994-01-10', 12013232, 12101, 22102, 'male', 'S/G', 23434, 'alwar road,New Delhi,110049', '821034232', 'null', 'CGHL', 0),
(324410, 'Piyush SIngh', 'SIngh', '1995-02-09', 102031240, 1902, 439, 'male', 'S/G', 103, 'KHAJORI ,Delhi,110049', '9717872411', 'null', 'India Gate', 0),
(324411, 'sushil kumar jha ', 'mr. jha ', '1473-02-02', 133019476, 1, 1, 'male', 'S/G', 78540, 'G.F floor uttam nagar  ,delhi ,1100', '9876543210', 'null', 'RML', 0),
(324412, 'P.N JHA', 'A.N JHA', '1886-06-12', 1318565, 263, 2564, 'male', 'S/G', 48645, 'Mohan Garden,MP,0014', '9958456210', 'null', 'India Gate', 0),
(324413, 'RAKESH KUMAR TOMAR', 'VIKAS KUMAR TOMAR', '1991-02-03', 1335654, 64589, 56453, 'male', 'S/G', 168445, 'Uttam Nagar,mumbai,001252', '9875821311', 'null', 'RML', 0),
(324414, 'JOSHWA KUTTY', 'NAGAM KUTTY', '1774-04-01', 133389, 46548, 5198, 'male', 'S/G', 56427, 'OM VIHAR,delhi,112021', '8821456845', 'null', 'Karol Bagh', 0),
(324415, 'B.L YADAV', 'M.N YADAV', '1981-12-15', 133537, 1354, 6451, 'male', 'S/G', 325455, 'P-1,Uttam nagar,delhi,110245', '9956874212', 'null', 'RML', 0),
(324416, 'JP SINGH', 'LP SINGH', '1988-09-19', 133111, 479581, 998745, 'male', 'S/G', 789546, 'T-F4, Dwarka mor,RAJHASTAN,546821', '9856511230', 'null', 'Taj Mahal', 0),
(324417, 'KK JHA', 'MK JHA', '1992-05-14', 133977, 54513, 654681, 'male', 'House Keeping', 999652, 'DWARKA SECTOR 1,MUMBAI,1120344', '8865243975', 'null', 'CGHL', 0),
(324418, 'DIL BAGH SINGH', 'rahul singh', '1987-05-06', 133367, 221452, 22578, 'male', 'S/G', 568954, 'k-5,uttam nagar,ASSAM,112045', '7854851360', 'null', 'Karol Bagh', 0),
(324419, 'PRAKASH CHANDRA', 'NAVEEN CHANDRA', '1997-08-28', 133370, 252, 432635, 'male', 'House Keeping', 461329, 'DWARKA SECTOR 9,MAHARASHTRA,014520', '7856695689', 'null', 'India Gate', 0),
(324420, 'SARJO PASWAN', 'RAJAN PASWAN', '1988-11-05', 133226, 11252, 332654, 'male', 'House Keeping', 658930, 'UTTAM NAGAR,ORISSA,145241', '8874520035', 'null', 'CGHL', 0),
(324421, 'HIRA LAL PRASAD', 'MOTI LAL PRASAD', '1995-10-10', 133895, 223655, 75764, 'male', 'S/G', 42522, 'Om Vihar Phase-4,delhi,110245', '8822301220', 'null', 'India Gate', 0),
(324422, 'RAM PAL', 'CHIRAG PAL', '1987-01-05', 1332215, 15437, 65428, 'male', 'S/G', 546782, 'NANGLOI,DHERADUN,1354153', '9956854251', 'null', 'Karol Bagh', 0),
(324423, 'VED NARAYAN', 'NITISH NARAYAN', '1978-04-15', 13327, 3214, 6846, 'male', 'S/G', 7758, 'K-2, Vikas Nagar,MUMBAI,225145', '7845125200', 'null', 'India Gate', 0),
(324424, 'OM PRAKASH', 'SHRIOM PRAKASH', '1977-02-11', 133863, 163544, 35215, 'male', 'House Keeping', 445841, 'Rajori Garden,delhi,110245', '8845112610', 'null', 'Taj Mahal', 0),
(324425, 'HIRA LAL VAJPHAI', 'SURJEET LAL VAJPHAI', '1982-12-12', 133613, 31884, 33690, 'male', 'S/G', 558412, 'VIKAS PURI,ORISSA,110058', '8854662311', 'null', 'Karol Bagh', 0),
(324426, 'BADRI PRASAD SINGH', 'MADARI PRASAD SINGH', '1996-02-04', 1332256, 12345, 4457, 'male', 'S/G', 34158, 'Gandhi Nagar,MAHARASHTRA,114458', '9968213334', 'null', 'RML', 0),
(324427, 'MUKESH KUMAR SINGH', 'PRAKWSH KUMAR SINGH', '1998-03-21', 1332250, 31832, 135845, 'male', 'S/G', 321874, 'Patel Nagar,Aligarh,110245', '9985421330', 'null', 'India Gate', 0),
(324428, 'ANIL KUMAR', 'VIPUL KUMAR', '1996-09-24', 133543, 54468, 7433, 'male', 'S/G', 134331, 'KIRTI NAGAR,MUMBAI,5316843', '8845215456', 'null', 'Karol Bagh', 0),
(324429, 'RAJENDRA PRASAD', 'VIRAJ PRASAD', '1995-03-30', 13254, 65484, 67468, 'male', 'S/G', 313541, 'Mahavir Enclave,Kolkata,110258', '7854845869', 'null', 'India Gate', 0),
(324430, 'JAI SINGH', 'VIRU SINGH', '1986-04-24', 224587, 65265, 889546, 'male', 'S/G', 56416384, 'Rama Park ,DELHI,56438', '7895624510', 'null', 'India Gate', 0),
(324431, 'Anil Kumar singh', 'kumar sena ', '1995-10-02', 7381738, 4646545, 45645465, 'male', 'S/G', 54654, 'mohan garden,,', '', 'null', 'CGHL', 0),
(324432, 'Sumer Singh', 'mr Sunil', '1995-05-06', 536165, 565656, 567567, 'male', 'S/G', 464564, 'Uttam Nagar,Delhi,110059', '882333355', 'null', 'RML', 0),
(324433, 'Bagish Prasad SIngh', 'Mr nanu', '1896-05-02', 34534, 3453, 3453453, 'male', 'S/G', 4654455, 'gaziabad,Delhi,110067', '987156589', 'null', 'India Gate', 0),
(324434, 'Bijay Kishore Prasad', 'Mr Gill', '1996-08-08', 54353, 345367, 345456, 'male', 'S/G', 56445543, 'nawada,Delhi,110059', '987145698', 'null', 'RML', 0),
(324435, 'ASHOK KUMAR', 'mr. kali ', '1984-02-21', 414564, 44456, 4555, 'male', 'S/G', 1, 'k-9 mohan garden ,delhi,110059', '954008545', 'null', 'RML', 0),
(324436, 'BIJAY KUMAR THAKUR', 'Mr. gori', '1985-12-15', 25555, 5555, 55555, 'male', 'S/G', 444444, 'K-7 mohan garend,delhi,110058', '65858582', 'null', 'RML', 0),
(324437, 'DILIP SINGH', 'mr.pali singh', '1985-12-01', 555, 222, 111, 'male', 'S/G', 1111, 'K-2 VIKAS PURI,DELHI,110075', '122222228', 'null', 'RML', 0),
(324438, 'SURESH KUMAR', 'MR. GIRI SEHGAL', '1965-12-05', 5555447, 45454, 4520110, 'male', 'S/G', 487844884, 'KJ-3 VIKAS PURI ,DELHI,110045', '7503030212', 'null', 'RML', 0),
(324439, 'SAT PRAKASH', 'MR TRI KUMAR', '1975-12-05', 111111, 12121, 112200, 'male', 'S/G', 448552, 'KHT-09 CV NAGAR ,DELHI,110045', '7545454545', 'null', 'RML', 0),
(324440, 'RAMESH KUMAR', 'mR. NETHI LAL', '1985-12-04', 212121, 22200, 33300, 'male', 'S/G', 8, 'KJ-90909 FATHE PUR,MUMBAI,101010', '1212121212', 'null', 'RML', 0),
(324441, 'SAT PRAKASH', 'mR. MONU', '1985-12-04', 56565656, 56584641, 4487893, 'male', 'S/G', 1424212, 'KJ- DADAR ,MUMBAI,212121', '245454544', 'null', 'RML', 0),
(324442, 'RAJ SINGH', 'ME.HIMMAT ', '1985-12-01', 5555, 64694, 56241, 'male', 'S/G', 123446, 'L-9 DADAR ,MUMBAI ,212121', '124241541', 'null', 'RML', 0),
(324443, 'ARUN KUMAR', 'Mr.PAGAL', '1985-12-12', 125858, 4544874, 44522, 'male', 'S/G', 545879642, 'LK-67 DADAR,MUMBAI,212121', '985757421', 'null', 'RML', 0),
(324444, 'SAT PAL SINGH', 'MR. ROHAK ', '1975-12-05', 4548954, 11416461, 447769, 'male', 'S/G', 554545, 'JU-78 DADR ,MUMBAI,212121', '98575455', 'null', 'RML', 0),
(324445, 'BABUAN MISHRA', 'MR. HUMAN ', '1947-12-08', 45564456, 45464654, 14664, 'male', 'S/G', 46489525, 'mn-98 hovli,pune,454545', '957845414', 'null', 'RML', 0),
(324446, 'RAJNISH KUMAR SINGH', 'Mr. vicy ', '1985-12-04', 45566966, 21112211, 211848718, 'male', 'S/G', 6636363, 'LK-78 MOHAN NAGAR ,PUNE,1111', '878785858', 'null', 'RML', 0),
(324447, 'UPENDER SINGH', 'MR.SINGH', '1985-12-02', 4545594, 6363939, 216478941, 'male', 'S/G', 1795585, 'GB-67 GAUTAM NAGAR ,PUNE,45454', '94787824', 'null', 'RML', 0),
(324448, 'PRAMOD KUMAR SINGH', 'MR.ETHER ', '1858-12-05', 14891248, 15148, 4844884, 'male', 'S/G', 4844884, 'KJ-98 MIHAN DR,PUNE,252525', '987545420', 'null', 'RML', 0),
(324449, 'ABHAY KUMAR SINGH', 'Mr. Moti ', '1975-12-12', 45454585, 4455211, 1111, 'male', 'S/G', 0, 'kj-98 vikas puri ,delhi,110059', '9856548545', 'null', 'RML', 0),
(324450, 'DHARMENDER KUMAR', 'Mr Laal ', '1985-12-12', 55552, 2224, 0, 'male', 'S/G', 898989, 'gf-piller 23 rajouri garden,delhi,12121', '9787878782', 'null', 'CGHL', 0),
(324451, 'PRATAP KUMAR', 'Mr. kumar ', '1945-12-07', 454545454, 445556662, 88798889, 'male', 'S/G', 121213, 'kj-87 subash nagar ,delhi,1212121', '9897979798', 'null', 'CGHL', 0),
(324452, 'JITENDER PRASAD SINGH', 'Mr.sharama', '1975-12-05', 8989898, 78745423, 2483495, 'male', 'S/G', 121, 'jh-98 vikas puri ,delhi,1212121', '784546163', 'null', 'India Gate', 0),
(324453, 'RAM PRASAD', 'Mr. Ram ', '1965-12-12', 252525262, 2263482, 11111111, 'male', 'S/G', 2147483647, 'MH- 56  DWARKA ,DELHI,12121252', '9856451213', 'null', 'Karol Bagh', 0),
(324454, 'AMIT- II', 'mR.JHA', '1965-12-11', 2147483647, 81291, 450000121, 'male', 'S/G', 38265214, 'MN-DWARKA SEC 3 ,DELHI,12121212', '9652431523', 'null', 'India Gate', 0),
(324455, 'ARTI-I', 'mR. ARORA', '1965-12-08', 2323232, 22232826, 22222, 'male', 'S/G', 0, 'BV-SEC JANAK PURI,DELHI,4545454', '987456123', 'null', 'Karol Bagh', 0),
(324456, 'ANJU SAINI', 'MN-OPOP', '1945-12-05', 4022300, 3, 212341, 'male', 'S/G', 0, 'BN-HIMMAT NAGAR ', '9656232332', 'null', 'RML', 0),
(324457, 'ANURADHA DEVI', 'mR. PATAK ', '1962-12-05', 222222, 222222, 12363, 'male', 'S/G', 4300000, 'HU-90 JAI NAGAR ,DELHI', '9856562622', 'null', 'India Gate', 0),
(324458, 'ASHA GOHAR', 'MR. LALIII', '1987-12-05', 2147483647, 2147483647, 2147483647, 'male', 'S/G', 78999393, 'FU-0987 RAM NAGAR `,DELHI,12121', '9745421252', 'null', 'India Gate', 0),
(324459, 'ASHA GOHAR', 'MR.SHARMA', '1985-12-05', 2147483647, 2147483647, 2147483647, 'male', 'S/G', 2147483647, ',,', '', 'null', 'RML', 0),
(324460, 'ANURADHA', 'MR.PILA', '1943-12-08', 2147483647, 5, 4566221, 'male', 'S/G', 2147483647, 'HG-78 FAHET PURA,PUNE,121241', '9656524541', 'null', 'India Gate', 0),
(324461, 'ANITA', 'MR. NITESH', '1978-12-08', 111111, 1111163512, 2147483647, 'female', 'S/G', 2147483647, '598-JK ROOF TOP ,PUNE,125252', '9652428247', 'null', 'India Gate', 0),
(324462, 'ANITA GODIYAL', 'MR.FUKTI', '1956-12-06', 251514, 11114, 1111114261, 'female', 'S/G', 2147483647, 'JK-7978 SATGURU MARG,DELHI,1212121', '9754625216', 'null', 'India Gate', 0),
(324463, 'ASHA GOHAR', 'MR.DEV ', '1956-12-04', 2147483647, 1452916466, 1611697166, 'male', 'S/G', 2147483647, '860-RAMA PARK,,3', '', 'null', 'Karol Bagh', 0),
(324464, 'ASHA GOHAR', 'MR.TALAI', '1949-12-03', 212303, 63211651, 31131896, 'male', 'S/G', 1666632232, 'GH-78 MANAS RAM PARK,DELHI,4545826', '9632442122', 'null', 'India Gate', 0),
(324465, 'ANCHAL', 'MR.MITTAL', '1985-12-05', 2147483647, 21296316, 2147483647, 'male', 'S/G', 61354661, 'HU-B BLOCK VIKAS PURI ', '9874621000', 'null', 'India Gate', 0),
(324466, 'AMIT SHARMA', 'Mr. Pankaj', '1945-12-05', 2147483647, 44691412, 0, 'male', 'S/G', 15261664, 'mn- vikas puri ,pune,211141', '9754595622', 'null', 'RML', 0),
(324467, 'AVISHEK DUBEY', 'Mr. dubety', '1945-12-05', 212524563, 2231562, 0, 'male', 'S/G', 5665166, 'nb-vikas nagar ,delhi,110075', '9645414152', 'null', 'RML', 0),
(324468, 'ABDESH KUMAR(2802)', 'Mr. Sharma', '1954-12-08', 2147483647, 256456, 23569874, 'male', 'S/G', 23496863, 'NI- 34 UTTAM NAGAR ,DELHI,1100145', '9841262146', 'null', 'RML', 0),
(324469, 'ABIHISHEKH(2805)', 'MR. YETISH ', '1987-12-08', 23947176, 266, 0, 'male', 'S/G', 433, 'BN-FATEH PURA UTTAM NAGAR ,Delhi,110085', 'VDVJHBDVJD', 'null', 'RML', 0),
(324470, 'AVINASH THAKUR', 'mMR. GIRISH', '1978-12-04', 0, 12, 4456, 'male', 'S/G', 445692, 'BV MART HOUSE NUMBER 45 VIKAS PURI  UUTAM NAGAR ,Delhi,110045', '989898989', 'null', 'RML', 0),
(324471, 'ANIL CHAND THAKUR', 'Mr. thakur ', '1985-12-02', 247691236, 23566, 52222, 'male', 'S/G', 326352, 'NB- 12 RAM NAGAR ,PUNE,696969', '9656824630', 'null', 'Karol Bagh', 0),
(324472, 'BACHCHU SINGH', 'mr. singh', '1978-12-06', 22362, 5698, 56921, 'male', 'S/G', 456816565, 'bh- top floor vikas puri ,delhi,1212121', '9222525135', 'null', 'CGHL', 0),
(324473, 'BABU LAL', 'Mr. dal ', '1974-12-06', 56856, 5566, 45624, 'male', 'S/G', 2236133, 'bg- floor ground hastal ,delhi,11056', '9787824662', 'null', 'RML', 0),
(324474, 'BIRESH', 'Mr. himmat ', '1978-12-11', 121212211, 11128482, 1445212, 'male', 'S/G', 448262555, 'bh- near lal chowk vikas puri ,delhi ,110023', '7815914711', 'null', 'RML', 0),
(324475, 'BRAJESH KUMAR YADAV', 'MR. RAI', '1923-12-02', 2353652, 2263866, 2256333, 'male', 'S/G', 1212, 'HI-67 TOP  FLOOR ,PUNE,117562', '9854514', 'null', 'India Gate', 0),
(324476, 'BRAHAM DEV THAKUR', 'MR. THAKUR ', '1962-12-08', 2147483647, 2020646020, 15, 'male', 'S/G', 63596230, 'GH- GROUND FLOOR MOHAN GARDEN', '9864692522', 'null', 'CGHL', 0),
(324477, 'BABY', 'MR. BRIJESH ', '1958-12-04', 236398745, 322, 23323000, 'male', 'S/G', 23632, 'FIRST  FLOOR MOHAN NAGAR ,PUNE ,2565256', '9787178122', 'null', 'India Gate', 0),
(324478, 'BOBY KUMAR', 'MR. KUMAR ', '1965-12-06', 23695478, 445, 20020202, 'male', 'S/G', 336, 'HR-89 SECOND FLOOR DWARKA,DELHI,11045', '854625212', 'null', 'CGHL', 0),
(324479, 'BABLU KUMAR', 'MR. KUAMR ', '1985-12-04', 144140000, 426, 15, 'male', 'S/G', 23633, 'FIRST FLOOR HCL HEIGHTS  DWARKA ,Delhi,110020', '9623525252', 'null', 'India Gate', 0),
(324480, 'BIMLESH', 'MR.GIRI', '1978-12-05', 2352652, 53, 200002020, 'male', 'S/G', 2332323, 'GH BLOCK NEW RAJ PUR,PUNE ,11023', '9565874122', 'null', 'RML', 0),
(324481, 'BEENA CHAUHAN', 'MR. TALAT ', '1956-12-08', 232323, 2223, 1222, 'female', 'S/G', 787887, 'B-34 RAMA PARK ,Delhi,110075', '987545454', 'null', 'Karol Bagh', 0),
(324482, 'BHARAT BHUSHAN', 'MR. BHUSHAN ', '1985-12-06', 2356, 4863, 85, 'male', 'S/G', 25698, 'NEW AREA 67 GALI NO. 7 ,PUNE,11023525', '8585854541', 'null', 'India Gate', 0),
(324483, 'CHANDAN MEHTO', 'MR. MEHTO ', '1985-12-05', 32323202, 222, 5211, 'male', 'S/G', 433, 'HJ-BLOCK RAMA PARK ,DELHI,110075', '923254152', 'null', 'India Gate', 0),
(324484, 'CHANDAN KUMAR- V', 'MR. KUMAR ', '1978-12-05', 100202, 221, 2222, 'male', 'S/G', 11520, 'H-9 BLOCK MOHAN GARDEN ,DELHI,110023', '9652348563', 'null', 'RML', 0),
(324485, 'CHUNCHUN KUMAR', 'MR. HALWANI', '1985-12-06', 2356, 23625, 55665, 'female', 'S/G', 25656, 'H-9 BLOCK FIRST FLLOR VIKAS PURI ,PUNE,110045', '9235323622', 'null', 'RML', 0),
(324486, 'DEEPAK KUMAR- I', 'mr.kumar', '1978-12-04', 232222, 12, 1212252, 'male', 'S/G', 121212, 'j block 57 house number ,delhi,110045', '985111120', 'null', 'RML', 0),
(324487, 'DINESH JHA', 'mr. jha ', '1998-12-08', 22020202, 3303030, 2585858, 'male', 'S/G', 56565656, 'F BLOCK VIKAS PURI ,DELHI,11052', '9787484215', 'null', 'Karol Bagh', 0),
(324488, 'DHARMENDER PANDEY', 'MR. JALI', '1963-02-05', 2352525, 62625, 4444, 'male', 'S/G', 86545, 'J BLOCK VIKAS PURI ,PUNE,110055', '9858585420', 'null', 'India Gate', 0),
(324489, 'DHARAM DEV PRASAD', 'MR PRASAD', '1985-12-04', 2147483647, 6592, 44896, 'male', 'House Keeping', 46844, 'K-6 BLOCK MOHAN GARDEN,DELHI,110045', '9565242652', 'null', 'CGHL', 0),
(324490, 'DHAN RAJ', 'MR.RAJ', '1926-12-08', 2225252, 5252, 636, 'male', 'House Keeping', 89595, 'RX-20 SITA PURI ,DELHI,110045', '56568545', 'null', 'Karol Bagh', 0),
(324491, 'DAYA KISHAN', 'MR.RAJ', '1984-12-05', 2323202, 2147483647, 20651615, 'male', 'House Keeping', 2931511, '1600 RIGH AVENUE C.P. ,DELHI,11001', '9785624222', 'null', 'RML', 0),
(324492, 'DOLI SINGH', 'MR.SINGH', '1956-12-05', 22299999, 397182826, 22602020, 'male', 'S/G', 252502, 'F BLOCK VIKAS PURI ,DELHI,110042', '9585853614', 'null', 'RML', 0),
(324493, 'DILIP KUMAR RAI', 'MR. KUAMR RAI', '1956-12-04', 2147483647, 1698716, 2147483647, 'male', 'S/G', 0, ',,', '', 'null', 'RML', 0),
(324494, 'DHIRAJ KUMAR', 'MR.ABEY', '1985-12-02', 25252, 213144, 5666, 'male', 'House Keeping', 22225633, 'FIRST FLOOR REAL HEIGHT DWARKA,DELHI,11025', '8585858545', 'null', 'India Gate', 0),
(324495, 'FAMIDA', 'MR.KHAN ', '1985-12-12', 252525, 2516741, 136156113, 'male', 'S/G', 1864131, 'B BLOCK KHAN MARKET ,DELHI,110045', '858586252', 'null', 'Karol Bagh', 0),
(324496, 'GANGA', 'MR TRIPATHI', '1988-12-05', 202565252, 526622, 2245215, 'male', 'S/G', 141441, '56- BLOCK TOP FLOOR VIKAS PURI ,DELHI,110045', '9854542525', 'null', 'India Gate', 0),
(324497, 'GANGA SAGAR PANDEY', 'MR PANDAY', '1975-12-11', 2147483647, 2414415, 225252063, 'male', 'S/G', 45452525, 'GH- BLOCK UTTAM NAGAR ,DELHI,11015', '985854666', 'null', 'Karol Bagh', 0),
(324498, 'GANPATI CHAUDHARY', 'MR SINGH ', '1985-12-02', 265625422, 2226985, 14412646, 'male', 'House Keeping', 25256944, 'FIRST FLOOR RAM PUR ,MUMBAI,111202', '858545121', 'null', 'RML', 0),
(324499, 'GAJANAND', 'MR PRASAN ', '1985-12-05', 252525, 11222424, 5224555, 'male', 'S/G', 22032023, 'FG- BLOCK FIRST SITE KHAN MARKET ,DELHI,110045', '857575454', 'null', 'India Gate', 0),
(324500, 'Rohan Mehra', 'Mehra Singh', '1992-02-03', 2147483647, 2031021, 2912101, 'male', 'S/G', 110219201, 'k-6,pipal wala road,Delhi,110059', '920182303', 'null', 'RML', 0),
(324501, 'Rohan Mehra', 'Ashutosh', '1978-02-09', 2147483647, 12013402, 121034, 'male', 'S/G', 10210, '203201,Andhra Pradesh,102103', '902013023', 'null', 'RML', 0),
(324502, 'aa', 'sahu', '2018-01-02', 0, 123123, 123123, 'male', 'House Keeping', 12222, ',Andhra Pradesh,', '8800262833', '1.jpg', 'RML', 0),
(324503, 'Mohan Das ER', 'Rohan Mehra', '1997-02-08', 2147483647, 12679, 142569, 'male', 'S/G', 5423800, 'block-89/L,Dadra and Nagar Haveli,110900', '7011239321', 'DSC03058.JPG', 'RML', 12445),
(324504, 'yt', 'st', '1998-02-08', 2147483647, 33, 63365653, 'male', 'S/G', 564, '45,Puducherry,547468', '899889889', '7.jpg', 'CGHL', 2890);

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
-- Indexes for table `2018-03`
--
ALTER TABLE `2018-03`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-04`
--
ALTER TABLE `2018-04`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-05`
--
ALTER TABLE `2018-05`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-06`
--
ALTER TABLE `2018-06`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-07`
--
ALTER TABLE `2018-07`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-08`
--
ALTER TABLE `2018-08`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-09`
--
ALTER TABLE `2018-09`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-10`
--
ALTER TABLE `2018-10`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-11`
--
ALTER TABLE `2018-11`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `2018-12`
--
ALTER TABLE `2018-12`
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
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324505;

--
-- AUTO_INCREMENT for table `sitename`
--
ALTER TABLE `sitename`
  MODIFY `emp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
