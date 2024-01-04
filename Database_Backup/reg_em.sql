-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2023 at 07:45 PM
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
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_em`
--

CREATE TABLE `reg_em` (
  `id` int(11) NOT NULL,
  `E_name` varchar(50) NOT NULL,
  `E_id` varchar(6) NOT NULL,
  `E_email` varchar(50) NOT NULL,
  `E_phone` varchar(20) NOT NULL,
  `E_address` varchar(100) NOT NULL,
  `E_photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reg_em`
--

INSERT INTO `reg_em` (`id`, `E_name`, `E_id`, `E_email`, `E_phone`, `E_address`, `E_photo`) VALUES
(1, 'Al jubair shovon', '520157', 'shovon@gmail.com', '01767692422', 'Horogram munsipara, kashiadanga, Rajshahi', 'web-page.jpg'),
(2, 'Asik', '520143', 'asik@gmail.com', '01767600000', 'Rajabari,Damkura, Rajshahi', 'web-page.jpg'),
(3, 'Jony', '520120', 'jony@gmail.com', '01767600000', 'Nauga,Nauga thana, Rajshahi', 'web-page.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_em`
--
ALTER TABLE `reg_em`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_em`
--
ALTER TABLE `reg_em`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
