-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2021 at 05:12 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gshitech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` varchar(9000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categories_id`, `name`, `image`, `short_desc`, `description`, `status`, `time`) VALUES
(3, 14, 'Admin', '315859053_people.jpg', 'narappa', 'The college comes under autonomous Institutions specialized in teaching and research sector in Information Technology and engineering. The institution follows the norms of its own and does not follow regulations of Government of India, University Grants Commission (UGC) India', 1, '2021-08-05 22:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(12, 'Rice', 1),
(14, 'business', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`) VALUES
(33, 'suresh', 'sures@gmail.com', '9849287177', 'mabd', 'gsjjkds', 0),
(34, 'saii', 'saikumar7@gmail.com', '9876545678', 'kmnr', 'wsjkdhjs', 0),
(35, 'ram', 'ram@gmail.com', '9876545678', 'jyrm', 'jdgsuksu', 0),
(36, 'jh', 'su@gmail.com', '876567890', 'sjs', 'dhgd', 0),
(37, 'manoj', 'manojbhargavram2014@gmail.com', '6303642135', 'efrdg', 'rgt', 0),
(38, 'manoj', 'manojbhargavram2014@gmail.com', '91543137962', 'efrdg', 'dgffbv ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(250) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `image`, `text`) VALUES
(4, 'spark', 'Screenshot from 2021-06-02 19-23-27.png', 'sparkkz'),
(5, 'sonic', 'Screenshot from 2021-06-02 19-24-07.png', 'sonic solutions');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` varchar(9000) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`, `time`) VALUES
(43, 12, 'ghj', 0, 8, 3, '282481379_index.jpeg', '', 'it is known only from a single wintering site in Thailand, and may be extinct, since there have been no confirmed sightings since 1980 despite targeted surveys in Thailand and Cambodia. The adult has mainly glossy greenish-black plumage, a white rump, and a tail with two long central feathers that widen to a racket-shaped tip. It has a white eye ring and a broad, bright greenish-yellow bill. The juvenile lacks the tail ornaments and is browner. Like other swallows, it feeds on insects caught in flight, and its wide bill suggests that it may take relatively large species', '', '', '', 1, '2021-08-02 09:29:05'),
(57, 14, 'Admin', NULL, NULL, NULL, '836163360_Screenshot from 2021-06-02 19-23-36.png', 'Solar panels', 'A solar panel, or photo-voltaic (PV) module, is an assembly of photo-voltaic cells mounted in a framework for installation. Solar panels use sunlight as a source of energy to generate direct current electricity. A collection of PV modules is called a PV panel, and a system of PV panels is call an array. Arrays of a photovoltaic system supply solar electricity to electrical equipment. n 1839, the ability of some materials to create an electrical charge from light exposure was first observed by Alexandre-Edmond Becquerel.[1]\r\n\r\nThough these initial solar panels were too inefficient for even simple electric devices they were used as an instrument to measure light.\r\n                                      The observation by Becquerel was not replicated again until 1873, when Willoughby Smith discovered that the charge could becaused by light hitting selenium. After this discovery, William Grylls Adams and Richard Evans Day published \"The action of light on selenium\" in 1876, describing the experiment they used to replicate Smith\'s results.[1][3]', '', '', '', 1, '2021-08-02 22:48:14'),
(58, 14, 'Admin', NULL, NULL, NULL, '853568911_Screenshot from 2021-06-02 19-23-27.png', 'galaxy', 'After being invite-only and quietly releasing an iOS app[3] in February 2017, Google formally launched Meet in March 2017.[4] The service was unveiled as a video conferencing app for up to 30 participants, described as an enterprise-friendly version of Hangouts. It has launched with a web app, an Android app, and an iOS app.\r\n\r\nWhile Google Meet introduced the above features to upgrade the original Hangouts application, some standard Hangouts features were deprecated, including viewing attendees and chat simultaneously. The number of video feeds allowed at one time was also reduced to 8 (while up to 4 feeds can be shown in the \"tiles\" layout), prioritizing those attendees who most recently used their microphone. Additionally, features such as the chatbox were changed to overlay the video feeds, rather than resizing the latter tofit.[citation needed] Hangouts is scheduled to cease operation in the first half of 2021', '', '', '', 1, '2021-08-05 20:38:43'),
(59, 12, 'Admin', NULL, NULL, NULL, '743358385_Screenshot from 2021-06-02 19-22-35.png', 'project1', 'ith education the institute also emphasizes on Extra Academic Activity (EAA) as mandatory part of education. It conducts various extra academic activities such as arts, vocal music, Kuchipudi dance, and Yoga.[5] The initiative to include classical art forms of India in the curriculum was conceptualised. AntahPragnya, a national level techno-cultural fest was being conducted every year', '', '', '', 1, '2021-08-05 21:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `name`, `cname`, `phone`, `sname`, `msg`) VALUES
(2, 'sai', 'sos', '9876567890', 'sss', 'dbdmcbzjvhm'),
(3, 'sai ram', 'sap', '9876545678', 'service1', 'nmsbvhvbjcb'),
(4, 'sam', 'oracle', '8765678900', 'service2', 'jdhgufkhgfdkj'),
(5, 'manoj', 'COMPANY1', '6238752584', 'SERVICE3', 'hdsggkjgfskjf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(1, 'Vishal Gupta', '', 'vishal@gmail.com', '1234567890', '2020-01-14 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
