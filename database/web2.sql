-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 05:04 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--
CREATE DATABASE IF NOT EXISTS `web2` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `web2`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `category_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `category_title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `category_type` int(2) NOT NULL,
  `category_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `category_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`, `category_type`, `category_content`, `category_img`) VALUES
('cate03', 'round cove suite', 3, 'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat', 'images/detail/content-room-1024x768.jpg'),
('cate05', 'signature junior suite', 5, 'Quae vero auctorem tractata ab fiducia dicuntur. Morbi fringilla convallis sapien, id pulvinar odio volutpat', 'images/detail/content-rooms-3.jpg'),
('cate01', 'Rooms Listing', 1, '', 'images/bg-header-6.jpg'),
('cate02', 'Unam incolunt Belgae, aliam Aquitani, tertiam. Idque Caesaris facere', 2, 'Salutantibus vitae elit libero, \n	a pharetra augue. At nos hinc posthac, sitientis piros Afros. Quisque ut dolor gravida, placerat libero vel, euismod. \n    Ut enim ad minim veniam, quis nostrud exercitation. Unam incolunt Belgae, aliam Aquitani, tertiam. Unam incolunt Belgae, \n    aliam Aquitani, tertiam. Tityre, tu patulae recubans sub tegmine fagi dolor. Curabitur est gravida.', 'images/content-rooms-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `menu_id` varchar(10) NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `menu_level` int(2) NOT NULL,
  `menu_parents` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_title`, `menu_level`, `menu_parents`) VALUES
('M01', 'RESORT', 1, ''),
('M02', 'RECREATION', 1, ''),
('M03', 'EVENTS', 1, ''),
('M04', 'NEWS', 1, ''),
('M05', 'FEATURES', 1, ''),
('M06', 'CONTACT', 1, ''),
('M07', 'Rooms Listing', 2, 'M01'),
('M08', 'Custom Rooms Listing', 2, 'M01'),
('M09', 'Round Cove Suite', 2, 'M01'),
('M10', 'Dining', 2, 'M01'),
('M11', 'Junior Suite', 3, 'M07'),
('M12', 'One Bedroom Suite', 3, 'M07'),
('M13', 'Regent Suite', 3, 'M07');

-- --------------------------------------------------------

--
-- Table structure for table `menu_services`
--

DROP TABLE IF EXISTS `menu_services`;
CREATE TABLE `menu_services` (
  `menu_service_id` varchar(10) NOT NULL,
  `menu_service_title` varchar(50) NOT NULL,
  `menu_service_level` int(2) NOT NULL,
  `menu_service_parent` varchar(10) NOT NULL,
  `menu_service_url_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_description` text NOT NULL,
  `news_create_date` date NOT NULL,
  `news_tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE `prices` (
  `price_id` int(3) NOT NULL,
  `price_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price_rate` int(3) NOT NULL,
  `price_type` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `price_title`, `price_rate`, `price_type`) VALUES
(1, 'Round Cove Suite', 180, 1),
(2, 'Signature Water View', 160, 2),
(3, 'Signature Water Side', 140, 3),
(4, 'Signature Junior Suite', 120, 4),
(5, 'English & Continental Breakfast', 10, 5),
(6, '24h Wifi Access', 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `reservation_id` varchar(10) NOT NULL,
  `reservation_name` varchar(50) NOT NULL,
  `reservation_email` varchar(50) NOT NULL,
  `reservation_arrival_date` date NOT NULL,
  `reservation_departure_date` date NOT NULL,
  `reservation_room_type` varchar(50) NOT NULL,
  `reservation_number_people` int(10) NOT NULL,
  `reservation_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_services`
--
ALTER TABLE `menu_services`
  ADD PRIMARY KEY (`menu_service_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
