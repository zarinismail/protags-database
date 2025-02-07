-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 03:39 AM
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
-- Database: `protagonists`
--

-- --------------------------------------------------------

--
-- Table structure for table `protags`
--

CREATE TABLE `protags` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `char_name` varchar(40) NOT NULL,
  `actor` varchar(40) NOT NULL,
  `movie_or_tv` varchar(10) NOT NULL,
  `genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `protags`
--

INSERT INTO `protags` (`id`, `title`, `char_name`, `actor`, `movie_or_tv`, `genre`) VALUES
(15, 'Never Have I Ever', 'Devi Vishwakumar', 'Maitreyi Ramakrishnan', 'TV Series', 'Comedy'),
(16, 'One Day', 'Emma Morley', 'Ambika Mod', 'TV Series', 'Romance'),
(17, 'Mississippi Masala', 'Mina', 'Sarita Choudhury', 'Movie', 'Romance'),
(18, 'We Are Lady Parts', 'Amina', 'Anjana Vasan', 'TV Series', 'Comedy'),
(19, 'Ms. Marvel', 'Kamala Khan', 'Iman Vellani', 'TV Series', 'Action'),
(20, 'Bend It Like Beckham', 'Jess Kaur Bhamra', 'Parminder Nagra', 'Movie', 'Comedy'),
(21, 'Blinded by the Light', 'Javed Khan', 'Viveik Kalra', 'Movie', 'Comedy'),
(22, 'Land of Gold', 'Kiran', 'Nardeep Khurmi', 'Movie', 'Drama'),
(30, 'The Marvels', 'Kamala Khan', 'Iman Vellani', 'Movie', 'Action'),
(31, 'Four Weddings and a Funeral', 'Kash Khan', 'Nikesh Patel', 'TV Series', 'Romance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `protags`
--
ALTER TABLE `protags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `protags`
--
ALTER TABLE `protags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
