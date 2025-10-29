-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2025 at 10:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excellent_fees`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic1`
--

CREATE TABLE `basic1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic2`
--

CREATE TABLE `basic2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic3`
--

CREATE TABLE `basic3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic4`
--

CREATE TABLE `basic4` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic5`
--

CREATE TABLE `basic5` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_1`
--

CREATE TABLE `nursery_1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_2`
--

CREATE TABLE `nursery_2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pre_school`
--

CREATE TABLE `pre_school` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tuition_fee` decimal(10,2) DEFAULT NULL,
  `transport` decimal(10,2) DEFAULT NULL,
  `language` decimal(10,2) DEFAULT NULL,
  `exam_fee` decimal(10,2) DEFAULT NULL,
  `form` decimal(10,2) DEFAULT NULL,
  `activity` decimal(10,2) DEFAULT NULL,
  `dev_levy` decimal(10,2) DEFAULT NULL,
  `uniform` decimal(10,2) DEFAULT NULL,
  `sport_wear` decimal(10,2) DEFAULT NULL,
  `friday_wear` decimal(10,2) DEFAULT NULL,
  `cardigan` decimal(10,2) DEFAULT NULL,
  `others` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic1`
--
ALTER TABLE `basic1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic2`
--
ALTER TABLE `basic2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic3`
--
ALTER TABLE `basic3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic4`
--
ALTER TABLE `basic4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic5`
--
ALTER TABLE `basic5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_1`
--
ALTER TABLE `nursery_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_2`
--
ALTER TABLE `nursery_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_school`
--
ALTER TABLE `pre_school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic1`
--
ALTER TABLE `basic1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic2`
--
ALTER TABLE `basic2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic3`
--
ALTER TABLE `basic3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic4`
--
ALTER TABLE `basic4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic5`
--
ALTER TABLE `basic5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nursery_1`
--
ALTER TABLE `nursery_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nursery_2`
--
ALTER TABLE `nursery_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pre_school`
--
ALTER TABLE `pre_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
