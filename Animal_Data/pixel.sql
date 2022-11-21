-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 09:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixel`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `life` varchar(20) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `name`, `category`, `description`, `life`, `image`) VALUES
(3, 'Fox', 'c', 'Fox is a carnivores animal', '5-10 year', '6379e28a73b76.jpg'),
(4, 'Frog', 'c', 'Frog is a carnivores animal', '5-10 year', '6379e30f58a84.jpg'),
(5, 'Lion', 'c', 'Lion is a carnivores animal.', '10+ year', '6379e36f11c14.jpg'),
(6, 'Snake', 'c', 'Snake is a carnivores animal.', '5-10 year', '6379e392d1587.jpg'),
(7, 'Tiger', 'c', 'Tiger is a carnivores animal.', '10+ year', '6379e3bae63cd.jpg'),
(8, 'Cow', 'h', 'Cow is a herbivores animal.', '10+ year', '6379e3f86849f.jpg'),
(9, 'Deer', 'h', 'Deer is a herbivores animal.', '10+ year', '6379e41dc5746.jpg'),
(10, 'Elephant', 'h', 'Elephant is a herbivores animal.', '10+ year', '6379e443c2afa.jpg'),
(11, 'Hores', 'h', 'Horse is a herbivores animal.', '10+ year', '6379e471e4a20.jpg'),
(12, 'Zebra', 'h', 'Zebra is a herbivores animal.', '5-10 year', '6379e49692167.jpg'),
(13, 'Cat', 'o', 'Cat is a omnivores animal.', '5-10 year', '6379e4ce4084b.jpg'),
(14, 'Dog', 'o', 'Dog is a omnivores animal.', '5-10 year', '6379e4f0efe0d.jpg'),
(15, 'Hen', 'o', 'Hen is a omnivores animal.', '0-1 year', '6379e512190cb.jpg'),
(16, 'Pig', 'o', 'Pig is a omnivores animal.', '5-10 year', '6379e530e021d.jpg'),
(17, 'Rat', 'o', 'Rat is a omnivores animal.', '0-1 year', '6379e553cb71e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
