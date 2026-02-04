-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2026 at 10:41 AM
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
-- Database: `vorco`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `lat` decimal(10,8) DEFAULT NULL,
  `lng` decimal(11,8) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `name`, `address`, `state`, `city`, `phone`, `lat`, `lng`, `days`, `timing`) VALUES
(1, 'Ji Motors', 'Building No: 43/7E, Cuddalore Pondy Main Road, Chinnakangaankuppam, Cuddalore, Tamil Nadu - 607006', 'Tamil Nadu', 'Cuddalore', '9876543210', 11.75350000, 79.75960000, 'Mon-Fri', '9:30 AM - 6:00 PM'),
(2, 'Sri Harish Motors', 'No:130/15, Trichy-Nagapattinam Bypass Road, Near Thalavaipalayam Service Road, Mariammankoil, Thanjavur - 613501', 'Tamil Nadu', 'Thanjavur', '9876543210', 10.78700000, 79.13780000, 'Mon-Fri', '9:30 AM - 6:00 PM'),
(3, 'ASD Motors', 'Ground Floor, No.26, S F No. 581 A/1B, Padasalai Street, Nanjundapuram, Coimbatore, Tamil Nadu - 641023', 'Tamil Nadu', 'Coimbatore', '9876543210', 11.01680000, 76.95580000, 'Mon-Fri', '9:30 AM - 6:00 PM'),
(4, 'BMMS Motors', 'No.11, Fruits Market Shopping Complex, Melur Main Road, Mattuthavani, Madurai, Tamil Nadu - 625007', 'Tamil Nadu', 'Madurai', '9876543210', 9.92520000, 78.11980000, 'Mon-Fri', '9:30 AM - 6:00 PM'),
(5, 'Golden Motors', 'No:245/10A, 11, 10B, Chennai-Bangalore NH, Perumugai Venkatapuram, Vellore, Tamil Nadu - 632009', 'Tamil Nadu', 'Vellore', '9876543210', 12.91650000, 79.13250000, 'Mon-Fri', '9:30 AM - 6:00 PM'),
(6, 'New Madras Motors', 'No: 19/8, Medavakkam Tank Road, Near ESI Hospital, Ayanavaram, Chennai, Tamil Nadu - 600023', 'Tamil Nadu', 'Chennai', '9876543210', 13.08270000, 80.27070000, 'Mon-Fri', '9:30 AM - 6:00 PM'),
(7, 'Ji Motors', 'No. 12,13 Subramanya Street, Ashok Theater Complex, Thillai Nagar, Puducherry - 605110', 'Puducherry', 'Puducherry', '9876543210', 11.94160000, 79.80830000, 'Mon-Fri', '9:30 AM - 6:00 PM'),
(8, 'Sri Muruga Motors', '1/37, Krishnagiri Main Road, Chinnathoppu, Hale Dharmapuri, Dharmapuri, Tamil Nadu - 636701', 'Tamil Nadu', 'Dharmapuri', '9876543210', 12.13790000, 78.15850000, 'Mon-Fri', '9:30 AM - 6:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_requests`
--

CREATE TABLE `dealer_requests` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `experience` varchar(10) DEFAULT NULL,
  `property_type` varchar(20) DEFAULT NULL,
  `association` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `mobile`, `model`, `location`, `dealer_id`, `created_at`) VALUES
(1, 'Indhuja', '07708736654', 'Metro XL', 'Cuddalore', 1, '2026-01-24 12:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `test_drives`
--

CREATE TABLE `test_drives` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `preferred_date` date DEFAULT NULL,
  `preferred_time` varchar(20) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin123', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealer_requests`
--
ALTER TABLE `dealer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_drives`
--
ALTER TABLE `test_drives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dealer_requests`
--
ALTER TABLE `dealer_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test_drives`
--
ALTER TABLE `test_drives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
