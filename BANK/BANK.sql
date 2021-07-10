-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 02:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--
CREATE DATABASE IF NOT EXISTS `bank` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bank`;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Usernamefrom` varchar(50) DEFAULT NULL,
  `ACCOUNTNUMBERFROM` int(11) DEFAULT NULL,
  `Usernameto` varchar(50) DEFAULT NULL,
  `AMOUNT` int(11) DEFAULT NULL,
  `DATEandTIME` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Usernamefrom`, `ACCOUNTNUMBERFROM`, `Usernameto`, `AMOUNT`, `DATEandTIME`) VALUES
('  meghana bekal', 789456, 'vidya', 1000, '2021-07-09 11:06:25'),
('  vaihali', 956324871, 'vidya', 1000, '2021-07-09 13:30:27'),
('  vilas', 752346890, 'meghana bekal', 800, '2021-07-09 13:15:25'),
('  vani', 789420534, 'vilas', 800, '2021-07-09 14:40:50'),
('  vani', 789420534, 'vilas', 800, '2021-07-09 14:42:10'),
('  sanvi', 784523691, 'megha', 800, '2021-07-09 14:45:46'),
('  sahana', 786310509, 'vani', 1000, '2021-07-09 17:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(50) NOT NULL,
  `ACCOUNT_NUMBER` int(11) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `BALANCE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `ACCOUNT_NUMBER`, `EMAIL`, `BALANCE`) VALUES
('meghana bekal', 789456, 'megj@gmailcom', 67745),
('vikas', 123456789, 'vik@gmail.com', 12050),
('bhavana', 748963201, 'bhavana@gmail.com', 4000),
('vilas', 752346890, 'vilas@gmail.com', 2800),
('sanvi', 784523691, 'savi@gmail.com', 4200),
('sahana', 786310509, 'sahana@gmail.com', 8000),
('vani', 789420534, 'vani@gmail.com', 6400),
('megha', 789456123, 'megh@gamil.com', 79745),
('vaihali', 956324871, 'vaish@gamil.com', 6000),
('vidya', 2147483647, 'vidya@gmail.com', 14456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `ACCOUNTNUMBERFROM` (`ACCOUNTNUMBERFROM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ACCOUNT_NUMBER`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`ACCOUNTNUMBERFROM`) REFERENCES `user` (`ACCOUNT_NUMBER`);
--