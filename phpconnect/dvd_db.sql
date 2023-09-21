-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 01:28 PM
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
-- Database: `dvd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dvd_user`
--

CREATE TABLE `dvd_user` (
  `uid_dvd` int(3) NOT NULL,
  `name_dvd` varchar(30) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd_user`
--

INSERT INTO `dvd_user` (`uid_dvd`, `name_dvd`, `detail`, `time`, `date`) VALUES
(101, 'aaa', 'aaa', 'aaฟฟฟฟ', '2023-09-08'),
(102, 'ฟกกก', 'ฟฟฟ', 'ฟฟ', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(3) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `f_name`, `l_name`, `address`, `telephone`) VALUES
(101, 'aฟฟ', 'a', 'ขอนแก่นa', 933891077),
(102, 'aa', 'aa', 'aa', 222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dvd_user`
--
ALTER TABLE `dvd_user`
  ADD PRIMARY KEY (`uid_dvd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
