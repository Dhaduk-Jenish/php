-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 06:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicalregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `serviceregistrations`
--

CREATE TABLE `serviceregistrations` (
  `serviceId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `vehicalNumber` varchar(20) NOT NULL,
  `licenceNumber` varchar(20) NOT NULL,
  `date` varchar(100) NOT NULL,
  `timeSlot` varchar(100) NOT NULL,
  `vehicalIssue` varchar(100) NOT NULL,
  `serviceCenter` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceregistrations`
--

INSERT INTO `serviceregistrations` (`serviceId`, `userId`, `title`, `vehicalNumber`, `licenceNumber`, `date`, `timeSlot`, `vehicalIssue`, `serviceCenter`, `status`, `createdAt`) VALUES
(7, 17, 'title-1', '12345678', '1234567', '2020-02-22', '9-11', 'asdads', 'center-1', 'approve', '2020-02-21 11:02:36'),
(9, 17, 'title-2222', '12345', '123123', '2020-02-29', '9-11', 'no', 'center-1', 'approve', '2020-02-21 11:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `useraddresses`
--

CREATE TABLE `useraddresses` (
  `addressId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipCode` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddresses`
--

INSERT INTO `useraddresses` (`addressId`, `userId`, `street`, `city`, `state`, `zipCode`, `country`) VALUES
(9, 17, 'colony 1', 'Rajkot', 'Gujarat', '360001', 'India'),
(10, 18, 'colony 1', 'Rajkot', 'Gujarat', '360001', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phoneNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `email`, `password`, `phoneNumber`) VALUES
(17, 'abhi', 'dhaduk', 'abhi@gmail.com', 'abhi123', 1234567890),
(18, 'jenish', 'dhaduk', 'jenish@gmail.com', '12345678', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serviceregistrations`
--
ALTER TABLE `serviceregistrations`
  ADD PRIMARY KEY (`serviceId`),
  ADD UNIQUE KEY `vehicalNumber` (`vehicalNumber`,`licenceNumber`),
  ADD KEY `serviceregistrations_ibfk_1` (`userId`);

--
-- Indexes for table `useraddresses`
--
ALTER TABLE `useraddresses`
  ADD PRIMARY KEY (`addressId`),
  ADD KEY `useraddresses_ibfk_1` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serviceregistrations`
--
ALTER TABLE `serviceregistrations`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `useraddresses`
--
ALTER TABLE `useraddresses`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `serviceregistrations`
--
ALTER TABLE `serviceregistrations`
  ADD CONSTRAINT `serviceregistrations_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `useraddresses`
--
ALTER TABLE `useraddresses`
  ADD CONSTRAINT `useraddresses_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
