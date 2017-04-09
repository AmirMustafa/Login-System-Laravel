-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 06:46 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `account` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `account`, `email`, `password`, `status`, `created_at`, `modified_at`, `gender`) VALUES
(13, 'Kendallfff', 'None', 'hibafepedai@hotmail.com', 'Pa$$w0rd!wewewew', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(19, 'David Dash', 'None', 'mybudun@gmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Male'),
(21, 'Amir Mustafa', 'None', 'amirengg15@gmail.com', '123456', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Male'),
(22, 'Lars House', 'Personal', 'joriqu@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Male'),
(23, 'Lareina Holland', 'Company', 'lefuzuw@gmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(24, 'Gabriel Bright', 'Personal', 'qafogyqiw@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(25, 'Kennan Mueller', 'Personal', 'kodo@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(26, 'Jemima Bradford', 'Company', 'gijewy@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(27, 'Castor Anthony', 'Company', 'xitupod@yahoo.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female'),
(28, 'Scott Alvarado', 'Company', 'gutu@hotmail.com', 'Pa$$w0rd!', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Female');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
