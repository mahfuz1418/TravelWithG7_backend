-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2023 at 08:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `profile_pic` varchar(20) COLLATE utf8mb3_unicode_520_ci NOT NULL DEFAULT 'demo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `profile_pic`) VALUES
(1, 'Ahad', 'mahfuj.dev@gmail.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'admin', '1.jpg'),
(3, 'niza', 'tenok@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'user', '3.png'),
(5, 'bakosuxas', 'bemory@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'user', 'demo.png'),
(9, 'huga', 'coqabeqyra@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'user', 'demo.png');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `blog_title` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `blog_description` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `blog_image` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_description`, `blog_image`) VALUES
(3, 'visit bisnakandi', 'Tempor soluta ea cup Tempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cupTempor soluta ea cup', '1_1675315455.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `message` varchar(200) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'Vivian Sweet', 'mahfuj.dev@gmail.com', 'Modi qui quisquam pe'),
(2, 'Pandora Whitley', 'mahfujul.dev@gmail.com', 'Distinctio Recusand'),
(3, 'Dahlia Brewer', 'mahfujul.dev@gmail.com', 'Incididunt nostrum i'),
(4, 'Sheila Shannon', 'mahfujul.dev@gmail.com', 'Voluptate ut eos sed'),
(5, 'Danielle Wilkins', 'mahfujul.dev@gmail.com', 'Ut sit quam asperio'),
(6, 'Developer ahad', 'mahfujul.dev@gmail.com', 'Hi sir! i want to travel with your team'),
(7, 'Jorden Knapp', 'tilovamyq@mailinator.com', 'Sit suscipit mollit '),
(8, 'Caleb Jarvis', 'pojirixuge@mailinator.com', 'Et cillum suscipit d'),
(9, 'imran', 'imranofficial69@gamil.com', 'i want to travel'),
(10, 'mahfujul Islam ahad', 'mahfuj.dev@gmail.com', 'Hi! brother. this is amazing ');

-- --------------------------------------------------------

--
-- Table structure for table `guids`
--

CREATE TABLE `guids` (
  `id` int NOT NULL,
  `guide_name` varchar(50) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `guide_title` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `guide_image` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `guids`
--

INSERT INTO `guids` (`id`, `guide_name`, `guide_title`, `guide_image`) VALUES
(27, 'Mahfujul Islam ', 'Tourist Guide', '1_1675315356.jpg'),
(28, 'Imran ', 'Tourist Guide', '1_1675315391.png'),
(29, 'sami ', 'Tourist Guide', '1_1675315403.png'),
(30, 'Gregory Stanton ', 'Asperiores esse corp', '1_1675315417.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `post_title` varchar(50) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `post_description` varchar(500) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `post_thumbnil` varchar(50) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_description`, `post_thumbnil`) VALUES
(4, 'nike', 'Labore sed ut dolore Labore sed ut doloreLabore sed ut doloreLabore sed ut doloreLabore sed ut doloreLabore sed ut doloreLabore sed ut doloreLabore sed ut dolore', '1_1675315508.png'),
(5, 'Sed sit est non ex d', 'Error dolores tempor Error dolores temporError dolores temporError dolores temporError dolores temporError dolores temporError dolores tempor', '1_1675315531.png'),
(7, 'Sapiente similique o', 'Volup tate assu menda Voluptate assumen daVolupt ate a sumenda Volup tate assum endaVo uptate assum endaVol uptate assu mend aVolupt ate assumendaVoluptate assumendaVoluptate assumendaVoluptate assumendaVoluptate assumenda Voluptate assumenda', '1_1675315562.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `service_title` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL,
  `service_image` varchar(100) COLLATE utf8mb3_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_image`) VALUES
(26, 'Delectus sint qui v', '1_1675314344.png'),
(27, 'Aut molestias pariat', '1_1675314354.png'),
(28, 'Et consequatur qui e', '1_1675314362.png'),
(29, 'Laborum Molestiae i', '1_1675314371.png');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int NOT NULL,
  `number` varchar(20) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `facebook` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `instagram` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL,
  `youtube` varchar(200) COLLATE utf8mb3_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_520_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `number`, `email`, `facebook`, `instagram`, `twitter`, `youtube`) VALUES
(1, '01716965610', 'ahad@mailinator.com', 'https://www.facebook.com', 'https://www.byre.me', 'https://www.putydan.org', 'https://www.dyfikuracum.co.uk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guids`
--
ALTER TABLE `guids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `guids`
--
ALTER TABLE `guids`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
