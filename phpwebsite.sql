-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2022 at 05:52 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `content` longtext,
  `draft` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`post_id`, `user_id`, `title`, `date`, `content`, `draft`) VALUES
(23, 2, 'This is a draft 2', '2022-01-23 23:18:00', 'thdfzhadfgdfghz', 1),
(24, 2, 'This is a post', '2022-01-23 23:18:08', 'fddgfhdfdhfg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(255) NOT NULL,
  `image_location` varchar(255) DEFAULT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_location`, `alt`) VALUES
(1, 'img/img1.jpg', 'A baby raccoon who is about to have a very serious conversation'),
(2, 'img/img2.jpg', 'A raccoon with a suit on standing by a computer'),
(3, 'img/img3.jpg', 'A sad raccoon covered in a blanket'),
(4, 'img/img4.jpg', 'A raccoon who is wearing a soviet union hat'),
(5, 'img/img5.jpg', 'A happy raccoon with a yellow t-shirt on'),
(6, 'img/img6.jpg', 'A raccoon in a car staring at the city'),
(7, 'img/img7.jpg', 'A raccoon having it\'s nosed pushed up so you can see his tiny teeth'),
(8, 'img/img8.jpg', 'A raccoon hugging a chihuahua'),
(9, 'img/img9.jpg', 'A raccoon wearing a brown, fluffy sweater');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_and_education`
--

CREATE TABLE `jobs_and_education` (
  `JandE_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date_length` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs_and_education`
--

INSERT INTO `jobs_and_education` (`JandE_id`, `title`, `date_length`, `position`) VALUES
(1, 'Kreospaceförening, Malmö', '2019 - 2021', 'Teacher'),
(2, 'Aranda Informatica, Cordoba', '2019', 'Support Worker'),
(3, 'Leslie frilans, Malmö', '2018', 'Web developer'),
(4, 'Medieinstitutet', '2021 - present', 'Web development CMS'),
(5, 'Luleå University of technology', '2021', 'Introduction to C#'),
(6, 'NTI Gymnasiet', '2016-2019', 'IT with web development focus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123'),
(2, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `jobs_and_education`
--
ALTER TABLE `jobs_and_education`
  ADD PRIMARY KEY (`JandE_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs_and_education`
--
ALTER TABLE `jobs_and_education`
  MODIFY `JandE_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
