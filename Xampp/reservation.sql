-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 03:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_desc` varchar(1000) DEFAULT NULL,
  `service_price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`service_id`, `service_name`, `service_desc`, `service_price`) VALUES
(1, 'Package 1', '360 PLATFORM WITH MOTORIZED ROTATING ARM\r\n4 HOURS OF UNLIMITED SHOTS\r\nCUSTOMIZED VIDEO OVERLAY\r\nINSTANT SHARING STATION \r\n8RGB TUBE LIGHTS\r\nFOG MACHINE\r\nBUBBLE MACHINE \r\nSTANCHION POST\r\nRED CARPET\r\nFUN PROPS\r\n\r\nADD ONS:\r\nTRANSPORTATION FEE (DEPENDING ON THE LOCATION)\r\nADDITIONAL PHP2000.00 PER EXCEEDING HOUR\r\nPHP700.00 FOR CUSTOMIZED 8X8 TARPAULIN BACKDROP (OPTIONAL)\r\n\r\n', '17,999.00'),
(8, 'package 2', 'pag di ka umayos at di ka pumasok sa loob ng container walang mangyayaring matino . Please umayos ka', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_pass` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`admin_fname`, `admin_lname`, `admin_id`, `admin_name`, `admin_pass`, `admin_email`) VALUES
('Ma. Paula', 'De Chavez', 2, 'pau', '$2y$10$uhVxelmctSWQdhCnEnfblOV13ko0nCJsJyzzgdJgXM5QUqxvT4u4i', 'sofia12dechavez@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
