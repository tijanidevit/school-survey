-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 06:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `full_name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'reg', '', 'reg@gmail.com', '', '5c769a1e38d1af34a22a4fdf3e334409'),
(2, 'day', '', 'day@gmail.com', '', 'cd404f0ee75b73c0a367b7fdf1c97a33'),
(3, 'Benjamen Isibor', 'Ben', 'ben@gmail.com', '08090291847', '035c38b95750ab68cc7544f3f821e7f1'),
(4, 'benjamen', 'Benzo1', 'benjamenaderopo@gmail.com', '09057043885', '280e13b635b2b6511502c0912faf7b85');

-- --------------------------------------------------------

--
-- Table structure for table `scorerecord`
--

CREATE TABLE `scorerecord` (
  `id` int(15) NOT NULL,
  `user_id` int(11) NOT NULL,
  `result` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scorerecord`
--

INSERT INTO `scorerecord` (`id`, `user_id`, `result`) VALUES
(1, 0, 68),
(2, 0, 59),
(3, 2, 59),
(4, 1, 65),
(5, 3, 24),
(6, 4, 65);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_studentName` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `condition` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_studentName`, `department`, `condition`, `age`, `level`, `mobile`, `email`, `password`) VALUES
(1, 'ben', 'Ben Isiyemi', 'computer', '', '', '400', '08028472947', 'ben@gmail.com', '035c38b95750ab68cc7544f3f821e7f1'),
(2, 'molola', 'Malik Molola', 'Mass Communication', '', '', '200', '09038932837', 'molola@gmail.com', 'fe48d8aaacf18097a961651b2087cd5c'),
(3, 'chika', 'chika monday', 'Bus. Admin', '', '', '200', '090284928583', 'chika@gmail.com', '50180bfd3976e4d630c6bc4761977e6f'),
(4, 'Afisayo', 'Samuel', 'Computer science', '', '', '200', '0813457287', 'afisayo12gmail.com', '9ef027ada8189d53d73194fdb67c8718');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scorerecord`
--
ALTER TABLE `scorerecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scorerecord`
--
ALTER TABLE `scorerecord`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
