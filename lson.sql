-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 08:42 AM
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
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
