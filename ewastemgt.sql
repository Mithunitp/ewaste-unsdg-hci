-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 11:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewastemgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bin`
--

CREATE TABLE `bin` (
  `bin_id` int(11) NOT NULL,
  `bin_loc` text NOT NULL,
  `bin_pin` bigint(20) NOT NULL,
  `status` text NOT NULL,
  `ind_accesscode` bigint(20) NOT NULL,
  `col_accesscode` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bin`
--

INSERT INTO `bin` (`bin_id`, `bin_loc`, `bin_pin`, `status`, `ind_accesscode`, `col_accesscode`) VALUES
(1, 'Near Singhania School, Baran Road, Kota', 324001, 'FULL', 123456, 654321),
(2, 'Seven Wonders Road, Vallabhbari, Kota', 324007, 'EMPTY', 123457, 754321),
(3, 'Near City Mall, Jhalawar Road, Kota', 324004, 'HALF-FULL', 123458, 854321),
(4, 'Chambal Garden Road, Dadabari, Kota', 324009, 'EMPTY', 123459, 954321),
(5, 'Near St. Paul\'s School, Mala Road, Kota', 324001, 'FULL', 123478, 874321);

-- --------------------------------------------------------

--
-- Table structure for table `collectors`
--

CREATE TABLE `collectors` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `collector_name` text NOT NULL,
  `collector_pin` bigint(6) NOT NULL,
  `collector_address` text NOT NULL,
  `collector_state` text NOT NULL,
  `collector_mno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectors`
--

INSERT INTO `collectors` (`username`, `password`, `collector_name`, `collector_pin`, `collector_address`, `collector_state`, `collector_mno`) VALUES
('collector01', '234', 'Maheshwari Collection Agency', 324007, 'Gumanpura, Kota ', 'Rajasthan', 9414156789),
('collector02', '345', 'Jain Collection Agency', 324001, 'Borkheda, Kota', 'Rajasthan', 9352956789),
('collector03', '456', 'Marwari Collection Agency', 324002, 'Arjunpura, Kota', 'Rajasthan', 9315156789),
('collector04', '567', 'Gupta Collection Agency', 324001, 'Station Area, Kota', 'Rajasthan', 9454956789),
('collector05', '678', 'Parihar Collection Agency', 324008, 'Kunadi, Kota', 'Rajasthan', 9352941419),
('collector06', '789', 'Pathak Collection Agency', 324009, 'Dadabari, Kota', 'Rajasthan', 9829132712),
('collector07', '890', 'Khan Collection Agency', 324004, 'RK Puram, Kota', 'Rajasthan', 9024582123),
('collector08', '90-', 'Vishnu Collection Agency', 324007, 'Chawani, Kota', 'Rajasthan', 9568712430),
('collector09', '0-=', 'Felix Collection Agency', 324005, 'Talwandi, Kota', 'Rajasthan', 8745213609),
('collector10', '123', 'Yadav Collection Agency', 324001, 'Mala Road, Station Area, Kota', 'Rajasthan', 9414125612);

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`username`, `password`) VALUES
('aditi', '654'),
('akansha', '876'),
('amanks', '=-0'),
('amanv2k', '-=1'),
('anirudh', '678'),
('apurv', '567'),
('arvind', '789'),
('bhavya', '-09'),
('chinmai', '456'),
('jay', '123'),
('jyotika', '987'),
('mithun', '345'),
('pranay', '765'),
('pratyush', '0-='),
('pritish', '=12'),
('rohan', '890'),
('sanjay', '234'),
('shravani', '098'),
('soumith', '987'),
('utkarsh', '90-');

-- --------------------------------------------------------

--
-- Table structure for table `ind_ewaste`
--

CREATE TABLE `ind_ewaste` (
  `date` text NOT NULL DEFAULT current_timestamp(),
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `address` text NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `item_cat` text NOT NULL,
  `item_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recyclers`
--

CREATE TABLE `recyclers` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rec_name` text NOT NULL,
  `rec_address` text NOT NULL,
  `rec_state` text NOT NULL,
  `rec_mno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recyclers`
--

INSERT INTO `recyclers` (`username`, `password`, `rec_name`, `rec_address`, `rec_state`, `rec_mno`) VALUES
('recycler1', '234', 'M/s. Dhruv Techengineers Pvt. Ltd.', 'G-1209, Rampur\r\nmandana, Industrial Area, Bhiwadi, Alwar', 'Rajasthan', 7014254187),
('recycler2', '345', 'M/s. Shri Krishna Additives Pvt. Ltd.', 'F-105, Matasya Industrial Area, Alwar', 'Rajasthan', 7254108725),
('recycler3', '456', 'M/s ETCO E-waste Recycler pvt. ltd', 'SB-23, Shilp Bari Road, 1415 VKI Area, Jaipur', 'Rajasthan', 8461325460),
('recycler4', '567', 'M/s. E Reclaim Services Pvt. Ltd.', 'Plot No. 466, VKI, Jaipur', 'Rajasthan', 9825654515),
('recycler5', '123', 'M/s S.B.J. & Company', 'F-137, Growth Centre, RIICO Industrial Area, Dholpur\r\n', 'Rajasthan', 9825645712);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `collector_id` varchar(20) NOT NULL,
  `recycler_id` varchar(20) NOT NULL,
  `shipment_id` varchar(10) NOT NULL,
  `categories` text NOT NULL,
  `vehicle_type` text NOT NULL,
  `vehicle_no` varchar(10) NOT NULL,
  `driver_name` text NOT NULL,
  `driver_mno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bin`
--
ALTER TABLE `bin`
  ADD PRIMARY KEY (`bin_id`);

--
-- Indexes for table `collectors`
--
ALTER TABLE `collectors`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ind_ewaste`
--
ALTER TABLE `ind_ewaste`
  ADD PRIMARY KEY (`username`,`date`(50),`item_cat`(50)) USING BTREE;

--
-- Indexes for table `recyclers`
--
ALTER TABLE `recyclers`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
