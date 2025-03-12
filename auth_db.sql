-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 07:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `Role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `password`, `pp`, `Role`) VALUES
(1, 'ravi3223', 'ravisaini23', '$2y$10$qX/vCjXCQsGeOX46XaDzt.rQEODyv0DyDmNXA7FLQ9hkMPafgw0pG', 'ravisaini236561b54da57062.44423722.jpeg', 'RegisteredUser'),
(2, 'pstds', 'pst1', '$2y$10$XfGKzypg3oNDW3RomsH6AuTbF2iHyXPbFv.iS9ISdvNCED5IA7ouW', 'pst16561c7ee169576.76625932.jpeg', '1'),
(3, 'shivam1', 'ravi1', '$2y$10$tlJLMnzI6PiDyyHp/PeaCuSa5/EX5Yr0qftYhnHE0D8i5S0B5CbDC', 'ravi16561da35d0cb11.29787501.jpeg', 'RegisteredUser'),
(4, 'ra', 'saini', '$2y$10$8LM3vVF8ZwSWoFM1UY8o1Oh788JvYxYKNYR7ChLcEeJjL0MrftDvO', 'saini656201db0e7a63.86336869.jpeg', NULL),
(5, 'tiwari', 'shiv', '$2y$10$UKvtoQeYLSRjLjj0amnUPe8/dT3Xv1X9NbNlkLM9yu5ryzN.7XZmi', 'shv656301cb9b21b1.75619903.jpg', ''),
(6, 'seeta', 'seeta', '$2y$10$iPR46UZIEMS923DM86cII.fDRnvEryBSBQea.11J7dydZ2WRp4HQm', 'seeta65630e359e67e2.00347336.jpeg', NULL),
(7, 'pradeep', 'pre', '$2y$10$cIE/KUWKWZzT7XN2WjC8fehrBumIOOAY1L25Tm7CoOnrDCVJCAkPu', 'pre65631296678957.09875393.jpeg', '1'),
(9, 'ravi saini', 'ravi', '$2y$10$dW5EArOsf4Ur5JsPYpOxmOuk.x7Ij4/iZCljbaNA5BGbdz7hkPLVS', 'ravi65637b039662c0.03577554.jpeg', '1'),
(10, 'Jyoti Saini', 'jyoti', '$2y$10$m5gn6wBvsXORL1ypH6uzWuAEkYROCku4/Edgvyk7/v0SLZiGcf73O', 'jyoti65637b46ca9a72.03478612.jpeg', '0'),
(11, 'test usr', 'user', '$2y$10$Qi0kygHQQQ.0gPamn0HGHuD2YL95CU/vkx8/t7kIJ5uaFYsUGMFwm', 'user656387f8af3fd8.87943912.jpeg', '1'),
(12, 'test new user', 'new', '$2y$10$QNLlLgpRwHxeXAClns1BHOQUov5qefmZCG6FdWG6DgeRk7thCLDvC', 'new65638885f13016.72753915.jpeg', '0'),
(13, 'Test User 1', 'user1', '$2y$10$gVoL3mVGmV3uAOjOjm.tLOCba15tHOImrn34a9Rag3Cgr2esT.usm', 'user165638ad6a72f86.34521018.jpeg', '1'),
(14, 'test user New', 'user2', '$2y$10$.IkGAPkNo9SSLc.Qdzy8peXG9hXXd9ptHWj9WqTBuDqG2sOx9XNr6', 'user265638b7ddebdc8.69643646.jpeg', '0'),
(15, 'test user 5', 'user5', '$2y$10$PIEvSVkaT3a049cguXa8BecMWYaC7/YDhLQd/yPpcOtd5spSKTOLm', 'user565638c6f8769f5.74538797.jpeg', '1'),
(16, 'test user new', 'user6', '$2y$10$cJudxP76rLC3rC3KE9jfI.QFN7wICUS26t3GiSzqLAQksI8d66nte', 'user665638cb6661e54.70194084.jpeg', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
