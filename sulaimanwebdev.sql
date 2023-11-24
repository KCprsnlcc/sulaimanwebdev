-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 04:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sulaimanwebdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `regdb`
--

CREATE TABLE `regdb` (
  `id` int(199) NOT NULL,
  `FirstName` varchar(199) NOT NULL,
  `LastName` varchar(199) NOT NULL,
  `Age` int(199) NOT NULL,
  `Email` varchar(199) NOT NULL,
  `Password` varchar(199) NOT NULL,
  `PhoneNumber` int(199) NOT NULL,
  `Username` varchar(199) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regdb`
--

INSERT INTO `regdb` (`id`, `FirstName`, `LastName`, `Age`, `Email`, `Password`, `PhoneNumber`, `Username`, `created_at`) VALUES
(1, 'Khadaffe', 'Sulaiman', 21, 'kcpersonalacc@gmail.com', '09123', 9321, 'kcpersonalacc', '2023-11-24 03:52:08'),
(3, 'Mark Hamill', 'Salahuddin', 22, 'mark@gmail.com', '09123', 93214, 'mark', '2023-11-24 03:53:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regdb`
--
ALTER TABLE `regdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regdb`
--
ALTER TABLE `regdb`
  MODIFY `id` int(199) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
