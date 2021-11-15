-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 04:50 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `rcf`
--

CREATE TABLE `rcf` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `post` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcf`
--

INSERT INTO `rcf` (`id`, `name`, `roll`, `department`, `post`, `photo`, `status`) VALUES
(1, 'Tanvir sarwar', 1603072, 'CSE', 'Member', '', 'active'),
(2, 'Abdullah Noman', 1503033, 'MTE', 'Office Secretary', '1503033.jpg', 'active'),
(3, 'Seefat Hossain Himel', 1603061, 'CSE', 'Member', '', 'active'),
(4, 'Rifat Bin Seraj', 1503003, 'CSE', 'President', '', 'active'),
(5, 'Saad Hassan', 1402022, 'ME', 'IT Expert', '', 'active'),
(6, 'Ifty Rasel', 1501079, 'Civil', 'Member', '', 'inactive'),
(7, 'Ahmed Beruny', 1701159, 'EEE', 'Vice President(admin)', '', 'active'),
(8, 'Shafiq Khan', 1703067, 'CSE', 'Member', '', 'active'),
(9, 'Ibra Khan', 1802099, 'EEE', 'Member', '', 'pending'),
(10, 'Soumik Das', 1801018, 'MTE', 'Member', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `roll`, `email`, `password`, `photo`, `status`) VALUES
(4, 'Nibaron Kumar', 1603104, 'nibaronkumar02@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1603104.jpg', 'active'),
(5, 'Tanvir Sarwar', 1603072, 'tanvirsarwar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1603072.jpg', 'active'),
(6, 'sujon kumar', 1703001, 'cp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1703001.jpg', 'active'),
(7, 'test', 1603001, 'cp1@gmail.com', '202cb962ac59075b964b07152d234b70', '1603001.jpeg', 'active'),
(8, 'MRK', 162526, 'mrk.mahfuzurrahman@gmail.com', '4b4ea37653ab381b32afafa7791f40e6', '162526.', 'active'),
(9, 'test', 1603002, 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1603002.', 'active'),
(10, 'lol2', 1603011, 'dhjdghd@gmai.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', '1603011.', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rcf`
--
ALTER TABLE `rcf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rcf`
--
ALTER TABLE `rcf`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
