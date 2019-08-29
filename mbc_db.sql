-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 08:17 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@mbctv.in', 'YWRtaW5uMzY=');

-- --------------------------------------------------------

--
-- Table structure for table `app_candidate`
--

CREATE TABLE `app_candidate` (
  `id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_candidate`
--

INSERT INTO `app_candidate` (`id`, `event`, `name`, `email`, `contactno`, `photo`) VALUES
(2, 0, 'appbazooka', '      appbazooka1098@gmail.com', '        43543563453', 'iSQ0_logo.png'),
(3, 14, 'wsewr7777', '  appbazooka1098@gmail.com', '   4543534', 'y0FS_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `app_channel`
--

CREATE TABLE `app_channel` (
  `id` int(11) NOT NULL,
  `channelno` varchar(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(40) NOT NULL,
  `videourl` text NOT NULL,
  `channelurl` text NOT NULL,
  `channelid` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_channel`
--

INSERT INTO `app_channel` (`id`, `channelno`, `name`, `image`, `videourl`, `channelurl`, `channelid`) VALUES
(1, '', 'sdasd', ' ', 'asd', '', ''),
(3, '', 'RWERWA', ' ', 'WERTW4ERTWE', '', ''),
(4, '566790', 'ttt', 'H7TC_logo.png', 'ew5twe5t', '', ''),
(5, '4534', '??????????? ????????????', ' ', 'sdsad', '', ''),
(6, '354345', 'വിവാദവുമായി ബന്ധപ്പെട്ട്...', 'MXdy_logo.png', 'swrdwerq', '', ''),
(7, '34', 'dd', 'k7B6_logo.png', 'sfsdfsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'asdfas44444444', 'asdfas44444444'),
(8, '23424', 'rrr', ' ', 'weqw', 'qweqw4', 'qweqw4'),
(9, '434', 'qwsq', ' ', 'werwe', 'werw', 'werw');

-- --------------------------------------------------------

--
-- Table structure for table `app_event`
--

CREATE TABLE `app_event` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `sdate` varchar(15) NOT NULL,
  `edate` varchar(15) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_event`
--

INSERT INTO `app_event` (`id`, `title`, `sdate`, `edate`, `photo`, `description`, `status`) VALUES
(11, 'ddweeeeeddddd', '2018-08-30', '2018-09-07', 'rht6_1.jpg', 'asdasdasdf', 0),
(12, 'fdsfds', '2019-08-01', '2019-08-09', ' ', 'wrwer', 0),
(13, 'sdsafdacxvxcgbdc', '2019-07-31', '2019-08-30', 'kwJp_logo.png', 'dfasfd', 0),
(14, 'sdsds', '', '', 'SHdY_logo.png', '', 0),
(15, 'sdsafd', '', '', 'Mc2o_logo.png', '', 0),
(16, '345twe', '', '', 'O0ok_logo.png', '', 0),
(17, 'r3qr5q3r', '', '', 'EA6q_logo.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `app_image`
--

CREATE TABLE `app_image` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_image`
--

INSERT INTO `app_image` (`id`, `image`) VALUES
(2, 'kLzC_about-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `app_playlist`
--

CREATE TABLE `app_playlist` (
  `id` int(11) NOT NULL,
  `play_list_url` varchar(800) NOT NULL,
  `play_list_id` varchar(400) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_playlist`
--

INSERT INTO `app_playlist` (`id`, `play_list_url`, `play_list_id`, `title`) VALUES
(17, 'cold3.jpg', '', '23'),
(18, 'cold31.jpg', '', 'dsfsdf'),
(19, '500.jpg', '', '2'),
(20, 'cold2.jpg', 'cold2.jpg', 'gfgdg'),
(21, 'cold21.jpg', 'cold21.jpg', 'ddd'),
(23, '=p', 'p', 'sdfas'),
(24, 'yy', 'yy', 'yyyhhhh'),
(25, '', '', '????????'),
(26, '', '', 'പ്രകോപിപ്പിക്കരുത്'),
(27, 'drfrr', 'drfrr', '1');

-- --------------------------------------------------------

--
-- Table structure for table `app_slider`
--

CREATE TABLE `app_slider` (
  `id` int(11) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `slider_url` text NOT NULL,
  `sliderid` varchar(800) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_slider`
--

INSERT INTO `app_slider` (`id`, `image_url`, `slider_url`, `sliderid`, `user_id`, `created_at`) VALUES
(2, 'kLzC_about-img.png', 'xfvzxdfahrtes', 'xfvzxdfahrtes', '1', '2018-11-30 02:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `app_user`
--

CREATE TABLE `app_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_user`
--

INSERT INTO `app_user` (`id`, `name`, `email`, `mobno`, `password`, `password2`) VALUES
(4, '', 'pnithin36@gmail.com', '9526100636', 'bml0aGlu', '$2y$10$3v2/zd1OzlpEs1cU8Xw11.zKdPhZRWDBz1CDB3QmCbzyuoeokwbiG');

-- --------------------------------------------------------

--
-- Table structure for table `app_voter`
--

CREATE TABLE `app_voter` (
  `id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `otp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_voter`
--

INSERT INTO `app_voter` (`id`, `event`, `name`, `gender`, `email`, `contactno`, `otp`, `status`) VALUES
(1, 0, '', 0, '', '', 0, 0),
(2, 0, 'kkkk', 1, 'pnithin36@gmail.com', '9526100636', 315058, 0),
(3, 1, 'kkkk', 1, 'pnithin36@gmail.com', '9526100636', 2181, 0),
(4, 1, 'kkkk', 1, 'pnithin36@gmail.com', '9526100636', 6353, 0),
(5, 1, '', 1, '', '9526100636', 1307, 0),
(6, 1, '', 1, '', '9526100636', 7930, 0),
(7, 1, '', 1, '', '9526400636', 4222, 1),
(8, 99, '', 1, '', '6459800636', 8604, 0),
(9, 90, '', 1, '', '6459800636', 6379, 0);

-- --------------------------------------------------------

--
-- Table structure for table `app_votes`
--

CREATE TABLE `app_votes` (
  `id` int(11) NOT NULL,
  `candidate` int(11) NOT NULL,
  `voter` int(11) NOT NULL,
  `event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_votes`
--

INSERT INTO `app_votes` (`id`, `candidate`, `voter`, `event`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 1),
(3, 1, 1, 1),
(4, 1, 1, 1),
(5, 1, 2, 3),
(6, 1, 9, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_candidate`
--
ALTER TABLE `app_candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_channel`
--
ALTER TABLE `app_channel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_event`
--
ALTER TABLE `app_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_image`
--
ALTER TABLE `app_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_playlist`
--
ALTER TABLE `app_playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_slider`
--
ALTER TABLE `app_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_voter`
--
ALTER TABLE `app_voter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_votes`
--
ALTER TABLE `app_votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_candidate`
--
ALTER TABLE `app_candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_channel`
--
ALTER TABLE `app_channel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `app_event`
--
ALTER TABLE `app_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `app_image`
--
ALTER TABLE `app_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `app_playlist`
--
ALTER TABLE `app_playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `app_slider`
--
ALTER TABLE `app_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `app_user`
--
ALTER TABLE `app_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `app_voter`
--
ALTER TABLE `app_voter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `app_votes`
--
ALTER TABLE `app_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
