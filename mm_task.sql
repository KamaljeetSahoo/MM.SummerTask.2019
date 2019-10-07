-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 11:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `slug`, `category`) VALUES
(2, 'Article Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'article-two', 'political'),
(8, 'Article One', 'editting the text Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Article-One', 'social'),
(9, 'Article Two', 'grtbsrtLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Article-Two', 'political'),
(10, 'article abcd', 'lorem kaoodhoahhaihvainvuanvahvhrva', 'article-abcd', 'political');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Kamaljeet', '12345', 'kamaljeetsahoo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
