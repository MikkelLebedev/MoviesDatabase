-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 19, 2022 at 08:25 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `movieId` int(11) NOT NULL,
  `movieName` varchar(100) COLLATE utf8mb4_danish_ci NOT NULL,
  `movieDuration` time NOT NULL,
  `movieYear` int(4) NOT NULL,
  `movieRating` int(10) NOT NULL,
  `movieDescription` text COLLATE utf8mb4_danish_ci NOT NULL,
  `movieCategory` varchar(100) COLLATE utf8mb4_danish_ci NOT NULL,
  `movieActors` varchar(100) COLLATE utf8mb4_danish_ci NOT NULL,
  `movieInstructor` varchar(100) COLLATE utf8mb4_danish_ci NOT NULL,
  `movieCountry` varchar(100) COLLATE utf8mb4_danish_ci NOT NULL,
  `movieTotalGross` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_danish_ci;

--
-- Dumping data for table `Movies`
--

INSERT INTO `Movies` (`movieId`, `movieName`, `movieDuration`, `movieYear`, `movieRating`, `movieDescription`, `movieCategory`, `movieActors`, `movieInstructor`, `movieCountry`, `movieTotalGross`) VALUES
(1, 'Hej', '22:11:33', 2004, 5, '<p>Hej</p>', 'Kids', 'Shrek', 'Disney', 'USA', '1000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`movieId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Movies`
--
ALTER TABLE `Movies`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
