-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 10:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `userName` varchar(16) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `aboutMe` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'W',
  `samplePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`userName`, `password`, `name`, `aboutMe`, `email`, `status`, `samplePath`) VALUES
('salgwaiz', '1234567890', 'salgwaiz', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'A1@HTMAIL.COM', 'Y', 'like.png');

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
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

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`title`, `numLikes`, `numDislikes`, `numFavorite`, `path`, `description`, `enableComm`, `postedDate`, `A_userName`) VALUES
('Amazon2', 0, 0, 0, '1586707994_AmatuerAmazonUser.PNG', 'Amazon2', 0, '2020-04-12', 'salgwaiz'),
('artwork', 4, 2, 5, '1586709770_LanguageCurrencyCountry.PNG', 'dpamgpms', 1, '2020-04-12', 'salgwaiz'),
('map', 5, 1, 2, '1586640086_art7.jpg', 'new description', 0, '2020-04-12', 'salgwaiz'),
('Shahad', 0, 0, 1, '1586709476_Efficiency.PNG', 'fadkg;oad;goajdogaj', 0, '2020-04-12', 'salgwaiz');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `text` varchar(450) NOT NULL,
  `commentID` int(3) NOT NULL,
  `V_userName` varchar(16) NOT NULL,
  `AW_Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `V_userName` varchar(16) NOT NULL,
  `AW_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likedislike`
--

CREATE TABLE `likedislike` (
  `V_userName` varchar(16) NOT NULL,
  `AW_Title` varchar(50) NOT NULL,
  `liked` tinyint(1) NOT NULL,
  `disliked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likedislike`
--

INSERT INTO `likedislike` (`V_userName`, `AW_Title`, `liked`, `disliked`) VALUES
('visitor1', 'artwork', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `userName` varchar(16) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`userName`, `password`, `email`, `name`) VALUES
('hadeel', '1234567890', 'h@gmail.com', 'hadeel'),
('visitor1', '1234567890', 'vis@gmail.com', 'visitor1'),
('visitor2', '2222222222', 'susu@hotmail.com', 'visitor3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`title`),
  ADD KEY `FK` (`A_userName`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `Comment_ibfk_1` (`V_userName`),
  ADD KEY `AW_Tilte` (`AW_Title`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `AW_title` (`AW_title`),
  ADD KEY `V_userName` (`V_userName`);

--
-- Indexes for table `likedislike`
--
ALTER TABLE `likedislike`
  ADD KEY `V_userName` (`V_userName`),
  ADD KEY `AW_Title` (`AW_Title`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `FK` FOREIGN KEY (`A_userName`) REFERENCES `artist` (`userName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`V_userName`) REFERENCES `visitor` (`userName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Comment_ibfk_2` FOREIGN KEY (`AW_Title`) REFERENCES `artwork` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `Favorite_ibfk_1` FOREIGN KEY (`AW_title`) REFERENCES `artwork` (`title`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Favorite_ibfk_2` FOREIGN KEY (`V_userName`) REFERENCES `visitor` (`userName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likedislike`
--
ALTER TABLE `likedislike`
  ADD CONSTRAINT `likedislike_ibfk_1` FOREIGN KEY (`V_userName`) REFERENCES `visitor` (`userName`),
  ADD CONSTRAINT `likedislike_ibfk_2` FOREIGN KEY (`AW_Title`) REFERENCES `artwork` (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
