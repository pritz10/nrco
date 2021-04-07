-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 09:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nrconewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `director_message`
--

CREATE TABLE `director_message` (
  `id` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_message`
--

INSERT INTO `director_message` (`id`, `Message`, `Name`, `Designation`, `ImageUrl`) VALUES
(2, 'India is considered as a rich orchid heritage and recognized as a significant producer of wild orchids in the world. It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.India is considered as a rich orchid heritage and recognized as a significant producer of wild orchids in the world. It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.India is considered as a rich orchid heritage and recognized as a significant producer of wild orchids in the world. It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.It is estimated that near about 1300 species of orchids are found in India which constitutes almost 10% of the workd orchid flora with Himalayas as their main home.', 'DR Ram Pal', 'Director(Acting)', 'asljl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director_message`
--
ALTER TABLE `director_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director_message`
--
ALTER TABLE `director_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
