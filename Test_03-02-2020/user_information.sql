-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 05:41 PM
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
-- Database: `user_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `catogory`
--

CREATE TABLE `catogory` (
  `id` int(11) NOT NULL,
  `parent_catogory` varchar(200) NOT NULL,
  `title` varchar(1200) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catogory`
--

INSERT INTO `catogory` (`id`, `parent_catogory`, `title`, `meta_title`, `url`, `content`, `created_at`) VALUES
(1, 'Electronics', 'the book', 'book Intro', 'https://in.bookmyshow.com/?gclid=Cj0KCQiApt_xBRDxARIsAAMUMu8Uw0cKKWHZ96BE8bzkQ5FcttY19t3amqycgYgD0e5naq2sAqCrGtAaAqJoEALw_wcB', 'book about mobile', '2020-02-03 10:56:09'),
(4, 'AutoMobile', 'the car', 'book Intro', 'https://in.bookmyshow.com/?gclid=Cj0KCQiApt_xBRDxARIsAAMUMu8Uw0cKKWHZ96BE8bzkQ5FcttY19t3amqycgYgD0e5naq2sAqCrGtAaAqJoEALw_wcB', 'about car', '2020-02-03 12:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `useer_id` int(11) NOT NULL,
  `prefix` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `information` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`useer_id`, `prefix`, `firstName`, `lastName`, `mobile`, `email`, `password`, `information`, `created_at`) VALUES
(6, 'Mr', 'xyz', 'dhaduk', '989887879', 'jenish@gmail.com', '123', 'ofhsdcj', '2020-02-03 11:04:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogory`
--
ALTER TABLE `catogory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_catogory` (`parent_catogory`,`title`,`meta_title`,`url`,`content`,`created_at`) USING HASH;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`useer_id`),
  ADD UNIQUE KEY `prefix` (`prefix`),
  ADD UNIQUE KEY `firstName` (`firstName`,`lastName`),
  ADD UNIQUE KEY `mobile` (`mobile`,`email`,`password`,`information`,`created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catogory`
--
ALTER TABLE `catogory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `useer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
