-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 08:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `manuscripts`
--

CREATE TABLE `manuscripts` (
  `title` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `userfile` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manuscripts`
--

INSERT INTO `manuscripts` (`title`, `category`, `synopsis`, `userfile`) VALUES
('test', 'biography', 'test', '5fdcfec50b045d346c58ba56952f92db06dfc7980c410f86558f8e7729ea35eb.jpg'),
('titletest', 'action', 'wwr', '6fcbaddfd9dcb433fec9976fe88c06b894363b3ace30d61c98cb31e27f5e1c96.jpg'),
('test1', 'history', 'test2', '186a8491-e2b5-401b-9b91-98f2b9d91442.jpg'),
('text1etet', 'coursebook', 'text details', '6fcbaddfd9dcb433fec9976fe88c06b894363b3ace30d61c98cb31e27f5e1c96.jpg'),
('mine12', 'history', 'mine details', 'Screenshot_(14).png'),
('titletest', 'history', 'test2', 'IMG_1629.jpg'),
('titlehihow to get away', 'self-development', 'this is an easy book', '4c6ef12f-d9f9-4d8e-8d72-8deb97490257.jpg'),
('software engineering', 'coursebook', 'software engineering', '5fdcfec50b045d346c58ba56952f92db06dfc7980c410f86558f8e7729ea35eb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `gender`, `created_date`, `phone`) VALUES
(0, '99473', 'mujtabaabachani@yahoo.com', '1234', 'Male', '2018-10-02', 2147483647),
(0, 'muj', 'muj@gmasil.com', '1234', 'Male', '2018-10-02', 123252435),
(0, 'mujtaba', 'mujtabaa@gmail.com', '12345', 'Male', '2018-10-02', 1234567890),
(0, 'mujtaba1', 'mujtabaa@gmail.com', '1234', 'Male', '2018-10-02', 1232435346);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
