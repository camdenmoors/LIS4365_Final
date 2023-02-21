-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql207.byetcluster.com
-- Generation Time: Feb 21, 2023 at 01:29 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33325564_animals`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `gender` varchar(256) NOT NULL,
  `breed` varchar(256) DEFAULT NULL,
  `type` varchar(256) NOT NULL,
  `photo` varchar(512) DEFAULT NULL,
  `birthday` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `gender`, `breed`, `type`, `photo`, `birthday`) VALUES
(1, 'Nair', 'Male', 'Chihuahua - Smooth Coated', 'dog', 'https://24petconnect.com/image/536917557', NULL),
(2, 'Van Gough', 'Male', 'Pit Bull Terrier', 'dog', 'https://24petconnect.com/Content/Images/No_pic_t.jpg', NULL),
(3, 'Macaroni Salad', 'Female', 'Labrador Retriever Mix', 'dog', 'https://24petconnect.com/image/536498760', NULL),
(4, 'Kobe', 'Male', 'Boxer', 'dog', 'https://24petconnect.com/image/536747892', 'Unknown (The shelter staff think I am about 2 years old.)'),
(5, 'Ziti', 'Male', 'Labrador Retriever Mix', 'dog', 'https://24petconnect.com/Content/Images/No_pic_t.jpg', 'The shelter staff think I am about 1 year and 6 months old.\r\n'),
(6, 'Siva', 'Female', 'Tan Mixed Breed', 'dog', 'https://24petconnect.com/image/536568338', 'The shelter staff think I am about 6 years'),
(7, 'Pettipaws', 'Female', 'Pit Bull Terrier', 'dog', 'https://24petconnect.com/image/536615800', 'The shelter staff think I am about 7 years old.'),
(8, 'Joe', 'Male', 'Black and brown Mixed Breed', 'dog', 'https://24petconnect.com/image/536615795', NULL),
(9, 'Illinois', 'Male', 'Pit Bull Terrier Mix', 'dog', 'https://24petconnect.com/image/536571408', 'The shelter staff think I am about 5 years old.'),
(10, 'Hercules', 'Male', 'Mixed Breed', 'dog', 'https://24petconnect.com/image/536302130', 'The shelter staff think I am about 6 years old.'),
(11, 'Romeo', 'Male', 'Brown and black Mixed Breed', 'dog', 'https://24petconnect.com/image/536302128', 'The shelter staff think I am about 3 years old.'),
(12, NULL, 'Male', 'Domestic Mediumhair', 'cat', 'https://24petconnect.com/image/536806735', NULL),
(13, NULL, 'Unknown', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/image/536998907', '2 Years Old'),
(14, 'Chelsea', 'Female', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/Content/Images/No_pic_t.jpg', '5 Years Old'),
(15, 'Ronin', 'Male', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/image/536687469', '6 Years Old'),
(16, NULL, 'Male', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/Content/Images/No_pic_t.jpg', NULL),
(17, NULL, 'Male', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/image/536535677', '7 Months Old'),
(18, 'Minus', 'Male', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/image/536910316', '10 Years Old'),
(19, 'Quaker', 'Male', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/image/536992311', '1 Year, 1 Month old'),
(20, 'Brody', 'Male', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/image/536812223', '2 Years, 1 Month Old'),
(21, 'Ashton', 'Male', 'Domestic Mediumhair', 'cat', 'https://24petconnect.com/image/536027780', '5 Years Old'),
(22, 'Ash', 'Male', 'Domestic Shorthair', 'cat', 'https://24petconnect.com/image/536374911', NULL),
(25, 'Rabbit', 'male', 'Shorthaired Rabbit', 'other', 'https://24petconnect.com/image/536923794', ''),
(26, 'Rabbit', 'male', 'Shorthaired Rabbit', 'other', 'https://24petconnect.com/image/536920636', ''),
(28, '1243', 'male', '', 'dog', '', '1'),
(29, '1243', 'male', '', 'dog', '', '1'),
(30, 'asd1234', 'male', '441', 'dog', '', '123'),
(31, '1111', 'male', '', 'dog', '', ''),
(32, '1111', 'male', '', 'dog', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
