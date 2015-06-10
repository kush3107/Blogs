-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 04:48 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codekamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
`id` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `title` varchar(300) NOT NULL DEFAULT 'Untitled blog post',
  `content` text NOT NULL,
  `creator` varchar(5000) NOT NULL,
  `creation` datetime(6) NOT NULL,
  `views` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=461 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `userId`, `title`, `content`, `creator`, `creation`, `views`) VALUES
(451, 450, 'Hello! ', ' Just for testing!! ', 'Malini', '2015-05-27 00:00:00.000000', 8),
(452, 450, 'Another ', ' Hey there! ', 'Malini', '2015-05-27 00:00:00.000000', 2),
(454, 441, 'This is checking! ', ' Has the creator come?? ', 'Pragati', '2015-05-27 00:00:00.000000', 1),
(458, 447, 'Abhishek', 'I Want to change it!!', 'Gotia', '0000-00-00 00:00:00.000000', 1),
(459, 439, 'nikhil ', ' nikhil verma ', 'NIKHIL', '0000-00-00 00:00:00.000000', 1),
(460, 439, 'Hello again everybody!! ', ' I did javascript too!! ', 'NIKHIL', '0000-00-00 00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `session_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `user_id`) VALUES
(28605, 437),
(22962, 438),
(7427, 438),
(29824, 438),
(19129, 438),
(24318, 439),
(9333, 438),
(23562, 438),
(1631, 439),
(22700, 439),
(22901, 439),
(27771, 439),
(23192, 438),
(27914, 440),
(4849, 440),
(10619, 440),
(21400, 439),
(11990, 440),
(6129, 440),
(21847, 440),
(28625, 440),
(31286, 439),
(11575, 439),
(1009, 440),
(30880, 441),
(31375, 440),
(28956, 440),
(24869, 441),
(29523, 440),
(5264, 440),
(20873, 440),
(21655, 440),
(31897, 440),
(15167, 440),
(5337, 444),
(3130, 444),
(1594, 440),
(747, 443),
(2120, 444),
(9670, 444),
(13578, 444),
(22969, 444),
(23282, 444),
(9539, 444),
(9136, 441),
(553, 445),
(19288, 446),
(9039, 446),
(6117, 441),
(8890, 445),
(19852, 441),
(23765, 445),
(21708, 441),
(29461, 445),
(7402, 447),
(19419, 441),
(13944, 440),
(29009, 443),
(886, 450),
(9462, 439),
(24823, 439),
(15204, 440),
(24834, 447),
(6675, 450),
(1156, 450),
(19725, 447),
(8764, 450),
(22690, 450),
(18739, 450),
(22533, 450),
(23478, 441),
(8172, 439);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `e-mail` text NOT NULL,
  `password` text NOT NULL,
  `media` mediumtext NOT NULL,
  `security_ques` varchar(300) NOT NULL,
  `security_ans` varchar(3000) NOT NULL,
  `Gender` varchar(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=463 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `e-mail`, `password`, `media`, `security_ques`, `security_ans`, `Gender`) VALUES
(437, 'sobha', 'subh@gmail.com', '3f18b35486f1c84cf05deefdfac3249d', '1431010945', '', '', ''),
(439, 'NIKHIL', 'nikhilverma', '262201fe2fcb9ee8216cdccb04a85584', 'uploads/1432735582.jpg', '', '', 'Male'),
(440, 'Kushagra', 'kkss420', '6d73743c22ac3eafb31f3d44988ce9e4', '1431010945', '', '', ''),
(441, 'Pragati', 'pragati@gmail.com', '8bb33820028dc9ed18e76e9a0a62fabe', 'uploads/1432584224.jpg', '', '', 'Female'),
(442, 'kush', 'kk123', '3f18b35486f1c84cf05deefdfac3249d', '1431010945', '', '', ''),
(443, '', 'kkss420', '6d73743c22ac3eafb31f3d44988ce9e4', '1431010945', '', '', ''),
(444, 'Kush saxena', 'kkss@rediffmail.com', '8bb33820028dc9ed18e76e9a0a62fabe', 'uploads/1431332012.jpg', '', '', ''),
(446, 'Pragati', 'pragati1@gmail.com', '8bb33820028dc9ed18e76e9a0a62fabe', '', '', '', ''),
(447, 'Gotia', 'gg', '8bb33820028dc9ed18e76e9a0a62fabe', 'uploads/1432735363.jpg', '', '', 'Male'),
(449, 'jhgyufyu', 'kkss@rediffmail.com', '202cb962ac59075b964b07152d234b70', '', '', '', ''),
(450, 'Malini', 'kkss', '8bb33820028dc9ed18e76e9a0a62fabe', 'uploads/1432585222.jpg', 'What is your phone number?', '9839406587', 'Female'),
(455, 'Rajini', 'rajikadj', '8bb33820028dc9ed18e76e9a0a62fabe', 'uploads/1432722393.jpg', 'What is your phone number?', '789', ''),
(456, 'sgdsfgd', '', '202cb962ac59075b964b07152d234b70', 'uploads/1432780474.', 'What is your phone number?', '123', ''),
(457, 'skfndskj', '', '202cb962ac59075b964b07152d234b70', 'uploads/1432780514.', 'What is your phone number?', '123', ''),
(458, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1432801835.', '-----Choose a question------', '', ''),
(459, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1432801909.', '-----Choose a question------', '', ''),
(460, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1432802087.', '-----Choose a question------', '', ''),
(461, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1432802222.', '-----Choose a question------', '', ''),
(462, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1432812717.', '-----Choose a question------', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=461;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=463;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
