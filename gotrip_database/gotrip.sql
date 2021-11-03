-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2021 at 04:43 PM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `answer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `email`, `password`, `answer`) VALUES
('456', '456@456@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('adam', 'adam@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('asd', 'da@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', 'abc'),
('henry', 'henry@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('johncena', 'johncena@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('justinbieber', 'justin@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', 'gold'),
('levis', 'levis@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('ronaldo', 'ronaldo@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('selenagomez', 'selenagomez@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', 'lily'),
('taylorswift', 'taylorswift@gmail.com', 'bc216d8da558c3ae7fe110ec4607423f343addb2', ''),
('test', 'test@test.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('test1', 'test1@test.com', '701b389b848a2b1cfab867093101d8d5ac56addd', ''),
('tony', 'tony@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `comments` varchar(50) DEFAULT NULL,
  `date_commented` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `username`, `comments`, `date_commented`) VALUES
(63, 57, 'henry', 'hahaa , love u too\r\n', '2021-05-06 18:13:59'),
(64, 56, 'henry', 'beautiful !!\r\n', '2021-05-06 18:14:06'),
(65, 61, 'tony', 'so lovelyyy !!', '2021-05-06 18:20:14'),
(66, 60, 'tony', 'wonderfulll', '2021-05-06 18:20:22'),
(67, 61, 'adam', 'oh wowww', '2021-05-06 18:22:03'),
(68, 76, 'selenagomez', 'beautiful\r\n', '2021-05-20 12:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'AUD',
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `name`, `image`, `price`, `currency`, `status`) VALUES
(1, 'Donate1', 'donate-paypal.png', 10.00, 'AUD', '1');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `post_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`post_id`, `username`) VALUES
(56, 'henry'),
(61, 'taylorswift'),
(60, 'taylorswift'),
(61, 'tony'),
(58, 'tony'),
(57, 'tony'),
(61, 'adam'),
(56, 'adam'),
(57, 'adam'),
(61, 'johncena'),
(56, 'johncena'),
(73, 'selenagomez'),
(74, '456'),
(76, 'ronaldo'),
(74, 'ronaldo'),
(76, 'selenagomez'),
(74, 'selenagomez'),
(74, 'henry'),
(74, 'taylorswift'),
(57, 'selenagomez');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `donate_id` int(11) NOT NULL,
  `acc_username` int(11) DEFAULT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `post` text NOT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `post`, `post_image`, `date`) VALUES
(56, 'selenagomez', 'what a wonderful trip!', '71197d34f133ab1332e8ff4d89c68ab4.png', '2021-05-06 18:12:00'),
(57, 'selenagomez', 'Love you my fann !!! ', NULL, '2021-05-06 18:13:12'),
(58, 'henry', 'good morningggg', NULL, '2021-05-06 18:14:53'),
(60, 'taylorswift', 'follow me to see the world', '5c041b5c0152fc68961285ecc6a2c290.jpeg', '2021-05-06 18:17:35'),
(61, 'taylorswift', 'fall in love w this !!!', 'fb513b96a4e3494ffea51fd7be826a8b.jpeg', '2021-05-06 18:17:50'),
(62, 'tony', 'helloo world\r\n', NULL, '2021-05-06 18:20:00'),
(63, 'adam', ' cant take my eyes off you\r\n', '25709db1b2f1f5a7ef282f34147bedfd.jpg', '2021-05-06 18:23:05'),
(64, 'johncena', 'heartbreakinggg\r\n', '73d9d9d122ee324c717778accb353b0c.jpg', '2021-05-06 18:25:18'),
(65, 'levis', 'good vibeee', NULL, '2021-05-06 18:27:36'),
(66, 'levis', 'follow me to get travel voucher!!!', NULL, '2021-05-06 18:27:52'),
(67, 'levis', 'luxury tripppp!\r\n', '4d968ef05c34c542a5074754aab3dc87.jpg', '2021-05-06 18:28:47'),
(68, 'levis', 'can\'t miss thisss', '63bddc94bc8e7d1531757267cf5e51cd.jpeg', '2021-05-06 18:29:00'),
(69, 'levis', '50% for first 20 people', '5b22b7301ef5df57b29cb16f4b9029be.jpg', '2021-05-06 18:29:20'),
(70, 'levis', '', 'e49de5b3f3cf2aa91e0d9a1659b4bc1a.jpg', '2021-05-06 18:31:01'),
(71, 'levis', '', '1aadecdf7b74d423c73d8b7e1d3c9727.jpg', '2021-05-06 18:31:23'),
(72, 'henry', 'aloha\r\n', NULL, '2021-05-07 02:18:28'),
(73, 'selenagomez', 'Time to relax your soul !', 'c7d17cea0bc5b550f20119f97aed999a.jpeg', '2021-05-07 02:40:44'),
(74, '456', 'Welcome to the heaven ', '58202064bffdda6cb583ca89ca7cbf43.jpeg', '2021-05-07 02:53:40'),
(76, 'ronaldo', 'Escape to the Byron Bay - Australia', '201db55cc9a8208eb0d94b7c0e3e74e2.jpg', '2021-05-07 03:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `username` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `cover` varchar(100) NOT NULL DEFAULT 'cover.jpeg',
  `name` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `image`, `cover`, `name`, `bio`, `address`, `birthdate`) VALUES
('456', '831f4cdfb0a7091ba28664daa0f9c00a.jpeg', '3eaf4eb33ddc2fbd2e38ebe27d748161.jpeg', 'Roger Federer\r\n', 'tennis player - travel vlogger', 'Melbourne', '1989-09-21'),
('adam', 'e0074f3ea5b31ade941db4df5c29e790.png', '51505b1233a67f70833b19a35613bb1c.jpg', 'Adam', 'traveller', 'Melbourne\r\n', '1899-03-21'),
('asd', 'default.png', 'cover.jpeg', '', '', '', '0000-00-00'),
('henry', 'dc894f85a69693a169399ac4cc70b34c.jpeg', '8d8318a67c099acd432b1aaae3880ce8.jpg', 'Henry', 'dogs lover\r\n', 'Sydney', '1999-04-12'),
('johncena', 'a2119c3c5381848d3b7d1aada803af76.jpeg', '96a5f10a2c4446512e631816eef41568.jpeg', 'John Cena\r\n', 'vlogger', 'New York', '1986-05-12'),
('justinbieber', 'default.png', 'cover.jpeg', '', '', '', '0000-00-00'),
('levis', '0c8004d399a285425fdde14b6e594953.jpeg', '27a68e3443455e47c9198d460efecff9.jpeg', 'Levis-Spider', 'youtuber', 'Sydney', '1991-07-08'),
('ronaldo', '34858cba8027e897f7f5b3ef68070b81.jpeg', '75ab8c34c880e1d448e58150e972fe3f.jpeg', 'Ronaldo', 'Enjoying is the key', 'Spain', '1980-03-02'),
('selenagomez', '33323ca9923e4413304c974ff12ac970.jpeg', 'f123bbfd31869162182cea58baad2db5.png', 'Selena Gomez', 'Live as grateful as you can', 'Chicago', '1991-04-18'),
('taylorswift', 'ca979bfe28790f5f4c2095864c149be5.jpeg', '717911b8be0085af2e74b9b009e0af6d.jpeg', 'Taylor Swift ', 'Enjoy your life!', 'USA', '1989-03-12'),
('test', 'default.png', 'cover.jpeg', '', '', '', '0000-00-00'),
('test1', 'default.png', 'cover.jpeg', '', '', '', '0000-00-00'),
('tony', 'fac19d34df288e98465fe3ee0162f765.png', 'a08fdaa46086e2cce96b88ea7099a305.jpeg', 'Tony', 'vlogger', 'Brisbane', '1888-02-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_ibfk_1` (`post_id`),
  ADD KEY `comments_ibfk_2` (`username`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `likes_ibfk_2` (`username`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `donates`
--
ALTER TABLE `donates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`username`) REFERENCES `profile` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_4` FOREIGN KEY (`username`) REFERENCES `profile` (`username`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
