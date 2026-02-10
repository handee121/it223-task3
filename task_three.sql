-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2026 at 04:35 PM
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
-- Database: `task_three`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `login_datetime` datetime DEFAULT NULL,
  `login_time` time DEFAULT NULL,
  `optional_field` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `fullname`, `nickname`, `notes`, `score`, `amount`, `birthday`, `login_datetime`, `login_time`, `optional_field`) VALUES
(1, 'Norinne Gabriel Piamonte', 'Norinne', 'Performer', 95, 850.75, '2002-10-11', '2024-02-01 13:45:30', '13:45:30', 'active'),
(2, 'Raihany Pamlian', 'Boss', 'Coder', 94, 500.00, '2004-02-28', '2024-02-02 08:15:00', '08:15:00', NULL),
(3, 'Princess Kyle Gotera', 'Kyle', 'Performer', 95, 1200.50, '2003-05-21', '2024-02-01 09:30:15', '09:30:15', NULL),
(4, 'David', 'David', 'Gamer & editor', 95, 150.00, '2005-07-30', '2024-02-03 14:55:45', '14:55:45', NULL),
(5, 'Crisanna Boca', 'Sanna', 'Likes Science', 92, 300.95, '2001-12-05', '2024-02-01 10:10:05', '10:10:05', 'verified'),
(6, 'Ethan Demeterio', 'Ethan', 'Likes math', 85, 999.99, '2003-09-17', '2024-02-03 16:05:10', '16:05:10', 'premium'),
(7, 'Froyd Carbajosa', 'Froyd', 'Loves coding', 73, 125.50, '2004-04-04', '2024-02-01 07:00:00', '07:00:00', NULL),
(8, 'Cyrus Suelto', 'Cy', 'Volleyball player', 55, 450.25, '2002-03-14', '2024-02-04 15:40:40', '15:40:40', 'basic'),
(9, 'Shane Garcia', 'Shane', 'Basketball fan', 91, 2000.00, '2003-01-19', '2024-02-02 06:25:20', '06:25:20', NULL),
(10, 'Alvin Darber', 'Alvin', 'Performer', 82, 110.10, '2001-11-22', '2024-02-03 12:10:55', '12:10:55', 'inactive'),
(11, 'Mike Wheeler', 'Mike', 'Leader of the group', 97, 750.00, '2003-10-19', '2024-02-03 09:00:00', '09:00:00', NULL),
(12, 'Jane Hopper', 'El', 'Telekinetic abilities', 90, 500.50, '2003-11-06', '2024-02-03 09:05:00', '09:05:00', 'special'),
(13, 'Lucas Sinclair', 'Lucas', 'Strategic thinker', 84, 320.75, '2003-03-13', '2024-02-03 10:10:10', '10:10:10', NULL),
(14, 'Dustin Henderson', 'Dustin', 'Tech genius', 98, 640.40, '2002-09-08', '2024-02-03 11:11:11', '11:11:11', 'vip'),
(15, 'Will Byers', 'Will', 'Quiet and artistic', 70, 210.20, '2004-03-22', '2024-02-03 08:45:00', '08:45:00', NULL),
(16, 'Max Mayfield', 'Max', 'Skateboarder', 86, 330.33, '2003-06-01', '2024-02-03 07:55:30', '07:55:30', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
