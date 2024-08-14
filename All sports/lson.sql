-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 04:39 PM
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
-- Database: `lson`
--

-- --------------------------------------------------------

--
-- Table structure for table `golf_registration`
--

CREATE TABLE `golf_registration` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `membership` enum('standard','premium','vip','none') NOT NULL,
  `handicap` int(2) NOT NULL,
  `golf_club` varchar(100) DEFAULT NULL,
  `tshirt_size` enum('S','M','L','XL','XXL') NOT NULL,
  `message` text DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `golf_registration`
--

INSERT INTO `golf_registration` (`id`, `firstname`, `lastname`, `age`, `gender`, `email`, `phone`, `membership`, `handicap`, `golf_club`, `tshirt_size`, `message`, `registration_date`) VALUES
(1, 'Simeon', 'Alfeus', 12, 'male', 'simeonalfeus21@gmail.com', '0814805465', 'standard', 12, ' Sure! Two notable golf clubs in Namibia are:  Windhoek Golf Club ', 'S', 'ZXCb  ', '2024-08-13 13:43:31'),
(2, 'Simeon', 'Alfeus', 12, 'male', 'simeonalfeus21@gmail.com', '0814805465', 'standard', 12, ' Sure! Two notable golf clubs in Namibia are:  Windhoek Golf Club ', 'S', 'ZXCb  ', '2024-08-13 13:51:17'),
(3, 'Simeon', 'Alfeus', 12, 'male', 'simeonalfeus21@gmail.com', '0814805465', 'standard', 12, ' Sure! Two notable golf clubs in Namibia are:  Windhoek Golf Club ', 'S', 'ZXCb  ', '2024-08-13 13:51:23'),
(4, 'Simeon', 'Alfeus', 12, 'male', 'simeonalfeus21@gmail.com', '0814805465', 'standard', 12, ' Sure! Two notable golf clubs in Namibia are:  Windhoek Golf Club ', 'S', 'ZXCb  ', '2024-08-13 13:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `page_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `page_url`) VALUES
(1, 'Football', 'football.php'),
(2, 'Rugby', 'rugby.php'),
(3, 'Tennis', 'tennis.php'),
(4, 'Swimming', 'swimming.php'),
(5, 'Boxing', 'boxing.php'),
(6, 'Golf', 'golf.php'),
(7, 'Cricket', 'cricket.php'),
(8, 'Hockey', 'hockey.php'),
(9, 'Chess', 'chess.php'),
(10, 'Horse Riding', 'horseriding.php'),
(11, 'MMA', 'mma.php'),
(12, 'Cycling', 'cycling.php'),
(13, 'Volleyball', 'volleyball.php'),
(14, 'Netball', 'netball.php'),
(15, 'Racing', 'racing.php'),
(16, 'E-sports', 'esports.php'),
(17, 'Bowling', 'bowling.php'),
(18, 'Polo', 'polo.php'),
(19, 'Basketball', 'basketball.php'),
(20, 'Futsal', 'futsal.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golf_registration`
--
ALTER TABLE `golf_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golf_registration`
--
ALTER TABLE `golf_registration`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
