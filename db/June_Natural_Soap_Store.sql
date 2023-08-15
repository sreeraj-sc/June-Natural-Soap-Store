-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 15, 2023 at 06:03 PM
-- Server version: 10.11.4-MariaDB-1
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `June_Natural_Soap_Store`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contry_code` varchar(5) NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `passphrase` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`first_name`, `last_name`, `contry_code`, `mobile_number`, `email`, `date_of_birth`, `passphrase`) VALUES
('sreeraj', 's', '+91', '8848066068', 'sreerajsc5@gmail.com', '2003-12-19', 'hello'),
('hello', 'ugwsd', '+91', '3425346545365', 'emaildfsdgdsgf@gmail.com', '2023-08-24', 'rr'),
('sreera', 's', '+91', '34444334', 'sreer@gmail.com', '2023-08-16', 'adfsd'),
('sreeraj', 's', '+91', '666', 'sreerajsc5+plex@gmail.com', '2023-08-25', 'hello'),
('s', 's', '+91', '23443223', 'sreeraj.s.c.vfc@gmail.com', '2023-08-17', '03c7c0ace395d80182db07ae2c30f034'),
('sreeraj', 's', '+91', '3456464', 'sreerajsc5@gmail.com', '2023-08-03', '3691308f2a4c2f6983f2880d32e29c84'),
('hello', 's', '+91', '1234', 'remo@gmail.com', '2023-08-03', '3691308f2a4c2f6983f2880d32e29c84'),
('hello', 's', '+91', '1234', 'remo@gmail.com', '2023-08-03', '3691308f2a4c2f6983f2880d32e29c84');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
