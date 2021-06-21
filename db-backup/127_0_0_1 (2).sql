-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 06:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mufaro`
--
CREATE DATABASE IF NOT EXISTS `mufaro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mufaro`;

-- --------------------------------------------------------

--
-- Table structure for table `blog_authors`
--

CREATE TABLE `blog_authors` (
  `ID` int(11) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_pic` varchar(255) NOT NULL,
  `author_bio` varchar(255) NOT NULL,
  `author_fb` varchar(255) NOT NULL,
  `author_twitter` varchar(255) NOT NULL,
  `author_instagram` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_authors`
--

INSERT INTO `blog_authors` (`ID`, `author_id`, `author_name`, `author_pic`, `author_bio`, `author_fb`, `author_twitter`, `author_instagram`, `entry_date`) VALUES
(1, '12345678', 'Mufaro D Kaseke', '../img/mufaro-2.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Eos minus ratione fugiat est optio facilis dignissimos tempore, temporibus mollitia, hic', 'https://www.facebook.com/mufaro.kaseke.568/', 'https://twitter.com/KasekeMufaro', 'https://www.instagram.com/mufaro.dev/', '2021-05-30 22:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `ID` int(11) NOT NULL,
  `cmnt_id` varchar(255) NOT NULL,
  `cmnt_post_id` varchar(255) NOT NULL,
  `cmnt_author` varchar(255) NOT NULL,
  `cmnt_email` varchar(255) NOT NULL,
  `cmnt_content` varchar(255) NOT NULL,
  `cmnt_pic` varchar(255) NOT NULL,
  `cmnt_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`ID`, `cmnt_id`, `cmnt_post_id`, `cmnt_author`, `cmnt_email`, `cmnt_content`, `cmnt_pic`, `cmnt_date`) VALUES
(1, '60d0262a7b522', 'post-6089f22cb239a', 'Mufaro D Kaseke', 'mufarodarlington@gmail.com', 'JJJJJJJJJJJJJJ', '', '2021-06-20 23:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `ID` int(11) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_summary` varchar(255) NOT NULL,
  `post_author` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post_content` varchar(10000) NOT NULL,
  `post_likes` int(11) NOT NULL DEFAULT '0',
  `post_categories` varchar(255) NOT NULL,
  `post_pic` varchar(255) NOT NULL,
  `post_cmnts` int(255) NOT NULL,
  `post_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`ID`, `post_id`, `post_title`, `post_summary`, `post_author`, `post_content`, `post_likes`, `post_categories`, `post_pic`, `post_cmnts`, `post_date`) VALUES
(1, 'post-6089f1db4bb54', 'LDKKDSK', '', 'Mufaro D Kaseke', 'Write the post content here', 14, '1;2;technology', 'post-6089f1db4bb54.jpg', 0, '2021-04-28 17:38:03'),
(2, 'post-6089f22cb239a', 'Troubles of morden day AI', '', 'Mufaro D Kaseke', '<!-- Post Body starts here -->\r\n                  <p>\r\n                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href=\"#\">A link here</a> Saepe, sunt quo ducimus sed necessitatibus obcaecati delectus, placeat tenetur provident nihil veniam eos nam illo, expedita ea officiis eligendi doloremque laborum quam modi. Blanditiis magnam doloremque, quia illo natus animi officiis nesciunt impedit, eveniet, inventore saepe aut optio fuga ad ea voluptatibus consequuntur quasi minima vitae assumenda id. Temporibus voluptatum, culpa.\r\n                  </p>\r\n                  <p>\r\n                    <b>Lorem</b> ipsum dolor sit, amet <i>consectetur</i> adipisicing elit. A, ratione, eos! Dolorum, mollitia perferendis labore nihil reiciendis saepe recusandae ex dolor impedit. Voluptate enim magni sunt illo, earum, debitis animi iste totam ut quam magnam unde ducimus ipsa cumque, dolore, non? Totam numquam ab corporis ad fugit, ea necessitatibus sint.\r\n                  </p>\r\n                  <blockquote>\r\n                    <i class=\"icon-quote-left\"></i>\r\n                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>\r\n                  </blockquote>\r\n                  <div class=\"img-container\">\r\n                    <img src=\"../img/blog/news_2.png\" alt=\"\">\r\n                    <span class=\"img-caption\">A lady being a lady</span>\r\n                  </div>\r\n                  <p>\r\n                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi dolorum exercitationem ab odit reprehenderit voluptatum, voluptas rem accusamus facere, eligendi incidunt eius? Similique, sapiente, ipsa. Molestias repudiandae alias maiores atque fugit iusto culpa quo nostrum sapiente cum recusandae similique nihil, sequi tempora, labore earum modi nesciunt blanditiis, asperiores! Ad iure, mollitia accusantium iste nisi! Deleniti exercitationem nam, quidem magni consequuntur! Praesentium explicabo molestias, consectetur eveniet unde nam reprehenderit error nostrum magni voluptatibus, saepe voluptatum, quo cumque soluta quod ipsum id?\r\n                  </p>\r\n                  <!-- Post Body ends here -->', 7, '1;2;3', 'post-6089f22cb239a.jpg', 1, '2021-04-28 17:39:24'),
(3, 'post-60b48c06be26e', 'Mufaro', 'Mufaro D Kaseke', '', '<p>Write the post content here</p>', 0, 'technology', 'post-60b48c06be26e.png', 0, '2021-05-31 01:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_subs`
--

CREATE TABLE `blog_subs` (
  `ID` int(11) NOT NULL,
  `sub_email` varchar(255) NOT NULL,
  `sub_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_subs`
--

INSERT INTO `blog_subs` (`ID`, `sub_email`, `sub_date`) VALUES
(1, 'jdjennde', '2021-04-26 15:44:51'),
(4, 'mufarodkaseke@gmail.com', '2021-04-26 15:55:52'),
(5, 'lomafu@gmail.com', '2021-04-26 16:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `call_request`
--

CREATE TABLE `call_request` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `entry_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_request`
--

INSERT INTO `call_request` (`ID`, `full_name`, `phone_number`, `message`, `entry_time`, `read_time`) VALUES
(1, 'Ajax Test', '131333434343', 'This is a test.', '2020-12-12 14:43:02', '0000-00-00 00:00:00'),
(2, 'Mufaro Darlington Kaseke', '131333434343', 'This is a test.', '2020-12-12 18:34:19', '0000-00-00 00:00:00'),
(3, 'Ajax Test', '131333434343', 'This is a test.', '2020-12-12 22:57:54', '0000-00-00 00:00:00'),
(4, 'hs', '32323232323', 'Thiesisdsdj', '2020-12-26 21:01:12', '0000-00-00 00:00:00'),
(5, 'Mufaro D Kaseke', '', 'sjqwjjhwj<br />\r\newjewjhejhjwewe<br />\r\nwenkwkejkwjkejw<br />\r\newkewkjekwkejkw', '2021-03-26 15:35:23', '0000-00-00 00:00:00'),
(6, 'Mufaro D Kaseke', '8378283827838278', 'jkjkjdkkkds<br />\r\ndskjdkskdjksd<br />\r\nsdskdkjskjdksjlds<br />\r\ndsdkjskjds', '2021-03-26 15:36:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `entry_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `full_name`, `email`, `subject`, `message`, `entry_time`, `read_time`) VALUES
(5, 'Mufaro D Kaseke', 'mufarodarlington@gmail.com', 'KAKJSKSSA', 'sssssssssssssss', '2021-03-25 23:40:58', '0000-00-00 00:00:00'),
(7, 'Mufaro D Kaseke', 'mufarodarlington@gmail.com', 'eeeeeeeee', 'wwwwwwwwwwwwwww', '2021-03-25 23:42:22', '0000-00-00 00:00:00'),
(8, 'eeeeeeeeeee', 'mufarodarlington@gmail.com', 'KAKJSKSSA', 'enwnmemnme', '2021-03-25 23:42:36', '0000-00-00 00:00:00'),
(9, 'Mufaro D Kaseke', 'mufarodarlington@gmail.com', 'KAKJSKSSA', '32nm3nm2m3nm23', '2021-03-25 23:42:48', '0000-00-00 00:00:00'),
(10, 'Mufaro D Kaseke', 'mufarodarlington@gmail.com', 'KAKJSKSSA', 'kjkdkdkskdsj<br />\r\ndsdlkslkldklsklds<br />\r\ndsldslkldklsds<br />\r\ndskdlkslkdls', '2021-03-26 15:37:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `quote_request`
--

CREATE TABLE `quote_request` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `entry_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote_request`
--

INSERT INTO `quote_request` (`ID`, `full_name`, `email`, `phone_number`, `message`, `entry_time`, `read_time`) VALUES
(1, 'Ajax Test', 'example@example.com', '131333434343', 'This is a test.', '2020-12-12 18:34:02', '0000-00-00 00:00:00'),
(2, 'Ajax Test', 'example@example.com', '131333434343', 'This is a test.', '2020-12-12 22:53:51', '0000-00-00 00:00:00'),
(3, 'Ajax Test', 'example@example.com', '131333434343', 'hthyhyhyhy', '2020-12-22 22:13:31', '0000-00-00 00:00:00'),
(4, 'Mufaro Darlington Kaseke', 'example@example.com', '131333434343', 'This is a test.', '2020-12-26 20:36:18', '0000-00-00 00:00:00'),
(5, 'h', 'h', 'h', 'h', '2020-12-26 20:49:21', '0000-00-00 00:00:00'),
(6, 'Mufaro Darlington Kaseke', 'example@example.com', '131333434343', 'This is a test', '2020-12-31 10:26:18', '0000-00-00 00:00:00'),
(7, 'Mufaro D Kaseke', 'mufarodarlington@gmail.com', '8378283827838278', 'kjkjkdks<br />\r\nsdskdkskkskkds', '2021-03-26 15:39:44', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_authors`
--
ALTER TABLE `blog_authors`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `author_id` (`author_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `cmnt_id` (`cmnt_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blog_id` (`post_id`);

--
-- Indexes for table `blog_subs`
--
ALTER TABLE `blog_subs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `call_request`
--
ALTER TABLE `call_request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `quote_request`
--
ALTER TABLE `quote_request`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_authors`
--
ALTER TABLE `blog_authors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_subs`
--
ALTER TABLE `blog_subs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `call_request`
--
ALTER TABLE `call_request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quote_request`
--
ALTER TABLE `quote_request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
