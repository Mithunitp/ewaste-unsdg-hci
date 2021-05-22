-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 01:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

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
  `collector_address` text NOT NULL,
  `collector_state` text NOT NULL,
  `collector_mno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectors`
--

INSERT INTO `collectors` (`username`, `password`, `collector_name`, `collector_address`, `collector_state`, `collector_mno`) VALUES
('CJay', '123', '', '', '', 0),
('collector1', '234', '', '', '', 0),
('collector2', '345', '', '', '', 0),
('collector3', '456', '', '', '', 0),
('collector4', '567', '', '', '', 0),
('collector5', '678', '', '', '', 0),
('collector6', '789', '', '', '', 0),
('collector7', '890', '', '', '', 0),
('collector8', '90-', '', '', '', 0),
('collector9', '0-=', '', '', '', 0);

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
  `item_dimensions` text NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_age` int(11) NOT NULL
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
('recycler1', '234', '', '', '', 0),
('recycler2', '345', '', '', '', 0),
('recycler3', '456', '', '', '', 0),
('recycler4', '567', '', '', '', 0),
('RJay', '123', '', '', '', 0);

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
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `recyclers`
--
ALTER TABLE `recyclers`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
