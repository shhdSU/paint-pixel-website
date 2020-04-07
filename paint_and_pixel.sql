-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2020 at 10:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paint and pixel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Artist`
--

CREATE TABLE `Artist` (
  `userName` varchar(16) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `aboutMe` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'W',
  `smaplePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Artwork`
--

CREATE TABLE `Artwork` (
  `title` varchar(50) NOT NULL,
  `numLikes` int(12) NOT NULL,
  `numDislikes` int(12) NOT NULL,
  `numFavorite` int(12) NOT NULL,
  `path` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `enableComm` tinyint(1) NOT NULL DEFAULT 1,
  `postedDate` date NOT NULL,
  `A_userName` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE `Comment` (
  `text` varchar(450) NOT NULL,
  `commentID` int(3) NOT NULL,
  `V_userName` varchar(16) NOT NULL,
  `AW_Tilte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Favorite`
--

CREATE TABLE `Favorite` (
  `V_userName` varchar(16) NOT NULL,
  `AW_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Visitor`
--

CREATE TABLE `Visitor` (
  `userName` varchar(16) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artist`
--
ALTER TABLE `Artist`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Artwork`
--
ALTER TABLE `Artwork`
  ADD PRIMARY KEY (`title`),
  ADD KEY `FK` (`A_userName`);

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `Comment_ibfk_1` (`V_userName`),
  ADD KEY `AW_Tilte` (`AW_Tilte`);

--
-- Indexes for table `Favorite`
--
ALTER TABLE `Favorite`
  ADD KEY `AW_title` (`AW_title`),
  ADD KEY `V_userName` (`V_userName`);

--
-- Indexes for table `Visitor`
--
ALTER TABLE `Visitor`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `commentID` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Artwork`
--
ALTER TABLE `Artwork`
  ADD CONSTRAINT `FK` FOREIGN KEY (`A_userName`) REFERENCES `Artist` (`userName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`V_userName`) REFERENCES `Visitor` (`userName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Comment_ibfk_2` FOREIGN KEY (`AW_Tilte`) REFERENCES `Artwork` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Favorite`
--
ALTER TABLE `Favorite`
  ADD CONSTRAINT `Favorite_ibfk_1` FOREIGN KEY (`AW_title`) REFERENCES `Artwork` (`title`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Favorite_ibfk_2` FOREIGN KEY (`V_userName`) REFERENCES `Visitor` (`userName`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
