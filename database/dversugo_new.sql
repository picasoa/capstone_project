-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 07:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dversugo`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `heading` longtext NOT NULL,
  `time` text NOT NULL,
  `description` longtext NOT NULL,
  `image` longtext NOT NULL,
  `category` mediumtext NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `reg`, `heading`, `time`, `description`, `image`, `category`, `views`) VALUES
(1, 11610652, 'dwdnqnd', '2019/04/1402:03:49am', 'pokijhgfdwedfghnjm,', 'pasted image 300x168-crop-u540.jpg', 'Personal Style', 10),
(2, 11610652, 'dwdnqnd', '2019/04/1404:26:11pm', 'pokjnbvghuiuygfcxdrdszaqs', 'coverpic.jpg', 'Shopping', 45),
(3, 11610653, 'harman\'s post', '2019/04/1406:02:30pm', 'blah blah blah blah', 'going-to-an-interview-for-a-fashion-related-course-.jpg', 'News', 45),
(4, 11610653, 'ojjvgcytxutcgchg', '2019/04/1406:05:17pm', 'jhufytyhvjh hgvyu', 'u835-4.png', 'Photography', 34),
(5, 11610652, 'hello', '2019/04/1512:54:35pm', 'plmoknijuhbygtfvrdcewszxzaqwsxdfacsscxtsfcsgcvcyehbchbdjhufvnjfvifivmi', 'TRAZOR - WIN_20170104_160844.JPG', 'News', 20),
(6, 11610652, 'lol lol lol', '2019/04/1501:23:16pm', 'poiuytfxdytuygiuhijm, bcgdytfiuoijl.nbnbfcuyiguhilk.n', 'TRAZOR - WIN_20170104_155918.JPG', 'Photography', 24),
(7, 11610652, 'poiuygtfdfguhj', '2019/04/1605:40:27pm', 'kshdyiasvcugaucbadcah,cvhkadd', 'WhatsApp Image 2019-04-16 at 01.50.50.jpeg', 'Personal Style', 45),
(8, 11610653, 'New Project 222', '2019/10/0804:20:26pm', '123123 123123', '1295026-200.png', 'Life style', 54),
(9, 11610653, '500000', '2019/10/1910:32:51am', '500000', 'map.gif', 'Personal Style', 45);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `heading` longtext NOT NULL,
  `picture` longtext NOT NULL,
  `description` longtext NOT NULL,
  `date` varchar(10) NOT NULL,
  `regNo` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`heading`, `picture`, `description`, `date`, `regNo`) VALUES
('a new project bro1', 'pasted image 1240x395-crop-u600.jpg', 'this is a description of my project ', '2019/04/14', 11610652),
('a new project bro 2', 'pasted image 1280x720-crop-u925.jpg', 'this is a description of my projeect', '2019/04/14', 11610652),
('a new project bro1', 'pasted image 386x280-crop-u287.jpg', 'lkjhfggcgvhljbkhvb', '2019/04/14', 11610652),
('a new project bro 2', 'pasted image 300x168-crop-u540.jpg', 'jhgyfdfdzxgchgiukjhgb', '2019/04/14', 11610652),
('a new project bro1', 'pasted image 386x280-crop-u287.jpg', 'lkjhfggcgvhljbkhvb', '2019/04/14', 11610652),
('a new project bro 2', 'pasted image 300x168-crop-u540.jpg', 'jhgyfdfdzxgchgiukjhgb', '2019/04/14', 11610652),
('a new project bro1', 'pasted image 1240x395-crop-u600.jpg', 'this is aiuytrfdcfghjiuytfdcfvghjkjhguytrdfghuijuhgf description of my project ', '2019/04/14', 11610652),
('a new project bro 2', 'pasted image 1280x720-crop-u925.jpg', 'this is a description of my projeect', '2019/04/14', 11610652),
('a new project bro1', 'pasted image 275x183-crop-u534.jpg', 'this is aiuytrfdcfghjiuytfdcfvghjkjhguytrdfghuijuhgf description of my project ', '2019/04/14', 11610652),
('a new project bro 2', '1.jpg', 'this is a description of my projeect', '2019/04/14', 11610652),
('a new project bro1', 'pasted image 275x183-crop-u534.jpg', 'this is aiuytrfdcfghjiuytfdcfvghjkjhguytrdfghuijuhgf description of my project ', '2019/04/14', 11610652),
('a new project bro 2', '1.jpg', 'this is a description of my projeect', '2019/04/14', 11610652),
('a new post bro1', 'pasted image 300x200-crop-u312.jpg', 'oiuhgvcfghjm', '2019/04/14', 11610652),
('a new post bro 2', 'pasted image 300x168-crop-u540.jpg', 'ugffggvgbmn', '2019/04/14', 11610652),
('broo whats up whats up whats up ', 'pasted image 386x280-crop-u287.jpg', 'polkjhgvcxqwdfghnm', '2019/04/14', 11610652),
('a new project bro 2', 'pasted image 275x183-crop-u534.jpg', 'pokjhgcxwefghnm', '2019/04/14', 11610652),
('broo whats up whats up whats up ', 'pasted image 300x168-crop-u540.jpg', 'tgbgtgtgtgtgtg', '2019/04/14', 11610652),
('a new post bro 2', 'pasted image 275x183-crop-u534.jpg', 'gbgbgbgbg', '2019/04/14', 11610652),
('broo whats up whats up whats up ', 'pasted image 300x168-crop-u540.jpg', 'tgbgtgtgtgtgtg', '2019/04/14', 11610652),
('a new post bro 2', 'pasted image 275x183-crop-u534.jpg', 'gbgbgbgbg', '2019/04/14', 11610652),
('a new project bro1', 'pasted image 520x326-crop-u463.jpg', 'oiuhgcghuiugfdxzsrtgb', '2019/04/14', 11610653),
('a new project bro 2', 'pasted image 1280x720-crop-u940.jpg', 'mkjhgcuigfhxfd5rydx', '2019/04/14', 11610653),
('a new post bro1', 'pasted image 1920x1080-crop-u457.jpg', 'jugfgtcvhvjhhbvgvj', '2019/04/14', 11610653),
('a new post bro 2', 'pasted image 1280x720-crop-u934.jpg', 'hkvcfngxytx,tjcnbm mhgcjt', '2019/04/14', 11610653),
('asd', 'meetinghall.jpg', 'asdadadasda', '2019/10/17', 11610653),
('', '', '', '2019/10/17', 11610653);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `regNo` int(8) NOT NULL,
  `facebook` mediumtext NOT NULL,
  `instagram` mediumtext NOT NULL,
  `twitter` mediumtext NOT NULL,
  `pinterest` mediumtext NOT NULL,
  `linkedin` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`regNo`, `facebook`, `instagram`, `twitter`, `pinterest`, `linkedin`) VALUES
(11610652, 'https://www.facebook.com/rajat.silwal', 'https://www.facebook.com/rajat.silwal', 'https://www.facebook.com/rajat.silwal', 'https://www.facebook.com/rajat.silwal', 'https://www.facebook.com/rajat.silwal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `RegNo` int(8) UNSIGNED NOT NULL,
  `password` varchar(15) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `DOB` text DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `mobileNo` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `languages` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `advice` varchar(100) DEFAULT NULL,
  `propic` mediumtext NOT NULL,
  `coverpic` mediumtext NOT NULL,
  `TYPE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`RegNo`, `password`, `Name`, `DOB`, `email`, `mobileNo`, `address`, `languages`, `skills`, `advice`, `propic`, `coverpic`, `TYPE`) VALUES
(0, '', '', '', '', 0, '', '', '', NULL, '', '', 'usertype'),
(11610258, 'keshav11610258', 'keshav', '2019-04-05', 'komla@gmail.com', 2147483647, 'andra', 'telugu', 'css,html', 'my name is slim shady', 'TRAZOR - IMG_20170120_172624.jpg', 'TRAZOR - IMG_20170120_170907.jpg', 'Faculty'),
(11610652, 'RAJAT#10', 'Rajat', '2019-04-06', 'rajatsilwal7@gmail.com', 2147483647, 'kochi india', 'malayalam', 'css,html', 'just get well soon', 'TRAZOR - IMG_20170120_170757.jpg', 'TRAZOR - IMG_20170120_172624.jpg', 'admin'),
(11610653, 'harman#10', 'harmanjeet singh', '2019-04-06', 'kola@gmail.com', 78962, 'punjab, jalandhar', 'punjabi', 'css,html', 'talk is cheap show me the code', 'pasted image 184x274-crop-u688.jpg', 'asset 3-100-u204-fr.png', 'student'),
(11610932, 'indra11610932', 'indra', '2019-04-04', 'example@gmail.com', 326598741, '', '', '', NULL, '', '', 'student'),
(11610937, 'shubham11610937', 'shubham', '2019-04-04', 'example@gmail.com', 326512458, '', '', '', NULL, '', '', 'student'),
(11610939, 'indra11610939', 'indra', '2019-04-27', 'example@gmail.com', 326598741, '', '', '', NULL, '', '', 'student'),
(11613060, 'komal#10', 'komal sharma', '2019-04-11', 'komalswimmer28@gmail.com', 797287498, 'ambala', 'hindi', 'bolna', 'i just love to see everyone happy ', '', '', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`RegNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
