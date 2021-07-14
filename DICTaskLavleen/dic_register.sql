-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 01:21 PM
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
-- Database: `dic_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `fullname` varchar(20) NOT NULL,
  `enrollment` bigint(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`fullname`, `enrollment`, `email`, `password`, `cpassword`) VALUES
('Lavleen', 1111111, 'la7@gmail.com', 'dd', 'cpassword'),
('Lavleen', 1111111, 'l7@gmail.com', 'dd', 'cpassword'),
('Lavleen', 1111111, 'l7@gmail.com', 'dd', 'cpassword'),
('Lavleen', 1111111, 'l7@gmail.com', 'dd', 'cpassword'),
('Lavleen', 1111111, 'l7@gmail.com', 'dd', 'cpassword'),
('Lavleen', 2147483647, '07lavleen.agrawal@gmail.com', '12345678', 'cpassword'),
('d', 11, '1@g.c', '1', 'cpassword'),
('', 2147483647, '', '', 'cpassword'),
('', 180860131002, '', '', 'cpassword'),
('Lavleen', 180860131002, '', '', 'cpassword');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
