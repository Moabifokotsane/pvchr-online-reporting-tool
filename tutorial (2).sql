-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 09:36 AM
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
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `usersreports`
--

CREATE TABLE `usersreports` (
  `id` int(11) NOT NULL,
  `names` varchar(200) NOT NULL,
  `reportedincidents` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `location` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersreports`
--

INSERT INTO `usersreports` (`id`, `names`, `reportedincidents`, `email`, `location`, `gender`) VALUES
(1, 'mlungisi Fakudze', 'I saw a pot', 'mlungisifakudze8@gmail.com', 'Fairview', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `usersreports1`
--

CREATE TABLE `usersreports1` (
  `id` int(11) NOT NULL,
  `names` varchar(200) NOT NULL,
  `reportedincidents` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` varchar(500) NOT NULL,
  `location1` varchar(500) NOT NULL,
  `location2` varchar(500) NOT NULL,
  `location3` varchar(500) NOT NULL,
  `location4` varchar(500) NOT NULL,
  `location5` varchar(500) NOT NULL,
  `location6` varchar(500) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersreports1`
--

INSERT INTO `usersreports1` (`id`, `names`, `reportedincidents`, `email`, `location`, `location1`, `location2`, `location3`, `location4`, `location5`, `location6`, `gender`) VALUES
(1, 'mlungisi Fakudze', 'i saw a dog', 'mlungisifakudze8@gmail.com', 'mbeka', '', '', '', '', '', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `usersreports2`
--

CREATE TABLE `usersreports2` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `program` varchar(100) NOT NULL,
  `cellnumber` varchar(12) NOT NULL,
  `registrationdate` date NOT NULL,
  `nationalid` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersreports2`
--

INSERT INTO `usersreports2` (`id`, `name`, `surname`, `age`, `email`, `dateofbirth`, `gender`, `address`, `program`, `cellnumber`, `registrationdate`, `nationalid`) VALUES
(NULL, '', '', 0, 'mlungisifakudze8@gmail.com', '0000-00-00', 'Male', '', '', 'cellnumber', '0000-00-00', 'nationalid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersreports`
--
ALTER TABLE `usersreports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersreports1`
--
ALTER TABLE `usersreports1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersreports`
--
ALTER TABLE `usersreports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usersreports1`
--
ALTER TABLE `usersreports1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
