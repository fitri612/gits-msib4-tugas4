-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2023 at 01:48 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentorgits`
--

CREATE TABLE `mentorgits` (
  `id_mentor` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentorgits`
--

INSERT INTO `mentorgits` (`id_mentor`, `name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Kak Villain', 'BackEnd Developer', '2023-03-01 09:23:33', '2023-03-01 09:30:08'),
(2, 'Ala', 'Fullstack Developer', '2023-03-01 09:23:33', '2023-03-01 09:23:33'),
(7, 'Kak rizaldi', 'FrontEnd Developer', '2023-03-07 18:34:01', '2023-03-07 18:34:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentorgits`
--
ALTER TABLE `mentorgits`
  ADD PRIMARY KEY (`id_mentor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentorgits`
--
ALTER TABLE `mentorgits`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
