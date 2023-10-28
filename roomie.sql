-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2021 at 01:46 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `roomie`
--

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`) VALUES
(1, 'female'),
(2, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `senderProfileId` int(11) NOT NULL,
  `sentToProfileId` int(11) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderProfileId`, `sentToProfileId`, `message`) VALUES
(1, 1, 2, 'Hi!'),
(2, 2, 1, 'Hello!'),
(3, 1, 2, 'How are you?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `profilesId` int(11) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `profilesId`, `filepath`, `description`) VALUES
(1, 1, 'sachin1.jpg', 'Image of Sachin'),
(2, 1, 'sachin2.jpg', 'Image of Sachin'),
(3, 2, 'alex1.jpg', 'Image of Alex'),
(4, 2, 'alex2.jpg', 'Image of Alex'),
(5, 2, 'alex3.jpg', 'Image of Alex'),
(6, 2, 'alex4.jpg', 'Image of Alex'),
(7, 2, 'alex5.jpg', 'Image of Alex'),
(8, 3, 'wendy1.jpg', 'Image of Wendy'),
(9, 3, 'wendy2.jpg', 'Image of Wendy'),
(10, 3, 'wendy3.jpg', 'Image of Wendy'),
(11, 4, 'kristen1.jpg', 'Image of Kristen'),
(12, 4, 'kristen2.jpg', 'Image of Kristen'),
(13, 4, 'kristen3.jpg', 'Image of Kristen'),
(14, 4, 'kristen4.jpg', 'Image of Kristen'),
(15, 5, 'trent.jpg', 'Image of Trent'),
(16, 1, 'sachin3.jpg', 'Image of Sachin');

-- --------------------------------------------------------

--
-- Table structure for table `profilelikes`
--

CREATE TABLE `profilelikes` (
  `id` int(11) NOT NULL,
  `nProfilesId` int(11) NOT NULL,
  `nLikedProfilesId` int(11) NOT NULL,
  `bMatched` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profilelikes`
--

INSERT INTO `profilelikes` (`id`, `nProfilesId`, `nLikedProfilesId`, `bMatched`) VALUES
(1, 1, 2, 1),
(2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `genderId` int(11) NOT NULL,
  `bio` mediumtext NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `emailAddress`, `password`, `fullName`, `genderId`, `bio`, `location`) VALUES
(1, 'sachin@sachinchaves.com', '123123', 'Sachin Chaves', 2, 'Hi! Nice to meet you!', 'New Westminster, Canada'),
(2, 'alex@alex.com', '123123', 'Alex Rosario', 2, 'Hi I am Alex', 'New Westminster, Canada'),
(3, 'Wendy@wendy.com', '123123', 'Wendy Fernandez', 1, 'Hello', 'Montreal, Canada'),
(4, 'kristen@kristen.com', '123123', 'Kristen Bell', 1, 'Hi I am Kristen looking for a roomate', 'Montreal, Canada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilelikes`
--
ALTER TABLE `profilelikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profilelikes`
--
ALTER TABLE `profilelikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
