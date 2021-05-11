-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2021 at 05:21 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksxchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) NOT NULL,
  `book_name` varchar(64) NOT NULL,
  `author` varchar(32) DEFAULT NULL,
  `descript` longtext NOT NULL,
  `category_id` int(10) NOT NULL,
  `photo` varchar(64) NOT NULL,
  `buyer_id` int(10) DEFAULT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`book_id`),
  KEY `rel2` (`buyer_id`),
  KEY `rel3` (`category_id`),
  KEY `rel1` (`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `owner_id`, `book_name`, `author`, `descript`, `category_id`, `photo`, `buyer_id`, `add_time`) VALUES
(31, 37, 'Genghis Khan and the Making of the Modern World', 'Jack Weatherford', 'Genghis Khan and the Making of the Modern World is a history book written by Jack Weatherford, Dewitt Wallace Professor of Anthropology at Macalester College. It is a narrative of the rise and influence of Genghis Khan and his successors, and their influence on European civilization.', 9, '37/51wMpWiO4BL.jpg', NULL, '2020-12-04 16:38:49'),
(34, 37, 'The Discovery of India', 'Jawaharlal Nehru', 'this book was written by Jawaharlal Nehru', 9, '37/f.jpg', NULL, '2020-12-04 17:01:23'),
(35, 37, 'The Lord of the Rings', 'J. R. R. Tolkien', 'few description', 2, '37/51M57R6G1GL._SX362_BO1,204,203,200_.jpg', NULL, '2020-12-04 17:04:55'),
(36, 38, 'Magician', 'Raymond E. Feist', 'some description', 6, '38/71OBeslO20L.jpg', NULL, '2020-12-04 17:08:23'),
(37, 38, 'Storm Front', 'Jim Butcher', 'some description', 7, '38/51R+DwnMSML.jpg', NULL, '2020-12-04 17:10:19'),
(38, 38, 'Learning Python', 'David Ascher', 'some description', 1, '38/python.jpg', NULL, '2020-12-04 17:12:11'),
(39, 39, 'Head First Java', 'Bert Bates and Kathy Sierra', 'some description', 1, '39/51Gsycdh-TL._AC_SY400_.jpg', NULL, '2020-12-04 17:14:57'),
(40, 39, 'On the Origin of Species', 'Charles Darwin', 'some description', 1, '39/71O70HC3a8L.jpg', NULL, '2020-12-04 17:16:54'),
(41, 39, 'Zero Oil Cook Book', 'DR. BIMAL CHHAJER', 'some description', 10, '39/aa.jpg', NULL, '2020-12-04 17:19:26'),
(42, 40, 'One by One', 'Ruth Ware', 'some description', 8, '40/one-by-one-uk.jpg', NULL, '2020-12-04 17:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(32) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'science'),
(2, 'fantasy'),
(3, 'adventure'),
(4, 'romance'),
(5, 'contemporary'),
(6, 'mystery'),
(7, 'horror'),
(8, 'thriller'),
(9, 'history'),
(10, 'cooking'),
(11, 'art'),
(12, 'motivational'),
(13, 'health'),
(14, 'travel'),
(15, 'guide'),
(16, 'children');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `req_id` int(10) NOT NULL AUTO_INCREMENT,
  `book_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`req_id`),
  KEY `book_id` (`book_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `book_id`, `user_id`) VALUES
(13, 42, 37),
(14, 38, 37),
(15, 34, 38);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `mobile_no` varchar(14) DEFAULT NULL,
  `addr` text NOT NULL,
  `profile_photo` varchar(64) DEFAULT NULL,
  `subscribe` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `firstname`, `lastname`, `mobile_no`, `addr`, `profile_photo`, `subscribe`) VALUES
(37, 'faridmumtaz9373@gmail.com', 'a1d12da42d4302e53d510954344ad164', 'farid', 'ahmad', '', 'pune', '37/photo_2020-08-10_23-15-46.jpg', 0),
(38, 'azizarman289@gmail.com', 'b85dc795ba17cb243ab156f8c52124e1', 'Aziz', 'Mohammadi', '', 'delhi', '38/photo_2020-09-19_12-33-41.jpg', 0),
(39, 'a.z.rohani786@gmail.com', '1c283511f251260283ed04ef8ba7cc30', 'Zia', 'Rohani', '', 'mumbai', '39/photo_2019-10-14_11-15-28.jpg', 0),
(40, 'kdssan91@gmail.com', '79e352898f7c098f5b1c9bfab22fd298', 'Sangwoo', 'Kang', NULL, 'chennai', 'profile_photo.jpg', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `rel1` FOREIGN KEY (`owner_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `rel2` FOREIGN KEY (`buyer_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `rel3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
