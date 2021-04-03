-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 11:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE IF NOT EXISTS `feed_back` (
  `fb_id` int(255) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`fb_id`, `type`, `user_name`, `email`, `f_name`, `l_name`, `message`, `date`) VALUES
(3, '1', 'tutes', 'hdwu@nibm', 'hesha', 'de silva', 'Nice work. good luck..!', '2019-06-01 08:51:27'),
(4, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'dias', 'sasasasa', '2019-06-02 05:02:12'),
(5, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'chandima', 'mankanknaxaaxaxaxxxa', '2019-06-02 05:04:26'),
(6, '1', 'amal', 'madurachandima6@gmail.com', 'mamama', 'amkasa', 'mamammmamamama', '2019-06-02 05:06:05'),
(8, '1', 'amal', 'madurachandima6@gmail.com', 'mamammama', 'asasasas', 'ddsdsddsds', '2019-06-02 05:09:34'),
(9, '1', 'amal', 'madurachandima6@gmail.com', 'mamam', 'qqqqq', 'qqqq', '2019-06-02 05:23:45'),
(10, '1', 'amal', 'madurachandima6@gmail.com', 'mamam', 'qqqqq', 'qqqq', '2019-06-02 05:23:45'),
(11, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'chandima', 'aaasas', '2019-06-02 05:39:42'),
(12, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'chandima', 'aaasas', '2019-06-02 05:39:42'),
(13, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'asasas', 'sasas', '2019-06-02 05:40:19'),
(14, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'asasas', 'sasas', '2019-06-02 05:40:19'),
(15, '1', 'amal', 'madurachandima6@gmail.com', 'addada', 'dadadad', 'daadda', '2019-06-02 05:41:10'),
(16, '1', 'amal', 'madurachandima6@gmail.com', 'addada', 'dadadad', 'daadda', '2019-06-02 05:41:10'),
(17, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'chandima', 'rrrr', '2019-06-02 05:55:25'),
(18, '1', 'amal', 'madurachandima6@gmail.com', 'madura', 'chandima', 'rrrr', '2019-06-02 05:55:25'),
(19, '1', 'sasi', 'sasiri@gmail.com', 'sasiri', 'vindya', 'hello world', '2019-06-02 18:49:53'),
(20, '1', 'sasi', 'sasiri@gmail.com', 'sasiri', 'vindya', 'hello world', '2019-06-02 18:49:53'),
(21, '1', 'sasi', 'sasiri@gmail.com', 'sasiri', 'vindya', 'hello world', '2019-06-02 18:54:31'),
(22, '1', 'sasi', 'sasiri@gmail.com', 'sasiri', 'vindya', 'im sasiri', '2019-06-02 18:57:20'),
(23, '', 'sasi', 'sasiri@gmail.com', 'sasiri', 'vindya', 'im sasiri', '2019-06-02 19:00:00'),
(25, 'tuter', 'nethra', 'nethra@gmail.com', 'vishwi', 'nethra', 'hello', '2019-06-02 19:29:49'),
(26, '', 'dil', 'rdr@gmail.com', 'Randima', 'Dilshan', 'Nice', '2019-06-03 05:06:54'),
(27, 'tuter', 'Saman', 'Tutor@gmail.com', 'RDR', 'Dil', 'Ok', '2019-06-03 05:11:48'),
(28, '', 'user', 'user@email.com', 'user', 'user', 'hello', '2019-06-04 04:38:45'),
(30, 'tuter', 'nethra', 'nethra@gmail.com', 'nethra', 'nethra', 'hello', '2019-06-04 04:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `newfiles`
--

CREATE TABLE IF NOT EXISTS `newfiles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `expires` int(255) NOT NULL,
  `cache` varchar(255) NOT NULL,
  `pragma` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `newfiles`
--

INSERT INTO `newfiles` (`id`, `filename`, `type`, `description`, `expires`, `cache`, `pragma`) VALUES
(3, 'aleks-dorohovich-26-unsplash.jpg', 'image/jpeg', '', 0, '', ''),
(8, 'correlation and simple linear regrassion.pdf', 'application/pdf', '', 0, '', ''),
(10, 'ES_01_Overview.pdf', 'application/pdf', '', 0, '', ''),
(11, 'ES_07_IO programming.pdf', 'application/pdf', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE IF NOT EXISTS `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('madurachandima6@gmail.com', '768e78024aa8fdb9b8fe87be86f647457119a6f81a', '2019-06-02 22:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `registertbl`
--

CREATE TABLE IF NOT EXISTS `registertbl` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Dumping data for table `registertbl`
--

INSERT INTO `registertbl` (`userid`, `firstname`, `lastname`, `email`, `branch`, `password`, `username`, `type`) VALUES
(109, 'mac', 'mmm', 'mac@gmail.com', 'Matara', '698d51a19d8a121ce581499d7b701668', 'jj', ''),
(110, 'mm', 'jj', 'mac@gmail.com', 'Kandy', 'b3cd915d758008bd19d0f2428fbb354a', 'kk', ''),
(112, 'madura', 'dias', 'mac@gmail.com', 'Matara', '698d51a19d8a121ce581499d7b701668', 'madura', ''),
(114, 'mac', 'tavish', 'aaa@gmail.com', '', 'bcbe3365e6ac95ea2c0343a2395834dd', 'dias', 'admin'),
(115, 'madura', 'dias', 'aaa@gmail.com', '', 'bcbe3365e6ac95ea2c0343a2395834dd', 'madura', 'admin'),
(116, 'dias', 'dias', 'mac@gmail.com', 'Galle', '698d51a19d8a121ce581499d7b701668', 'dias', ''),
(117, 'Indumini', 'Munasinghe', 'indumini@gmail.com', '', 'e0f7a4d0ef9b84b83b693bbf3feb8e6e', 'dumiyaa', 'admin'),
(124, 'hesha', 'de silva', 'hdwu@nibm', 'Galle', '81dc9bdb52d04dc20036dbd8313ed055', 'tutes', ''),
(125, 'madura', 'chandima', 'madurachandima6@gmail.com', 'Galle', '698d51a19d8a121ce581499d7b701668', 'madura', ''),
(126, 'kasun', 'pasan', 'madurachandima6@gmail.com', 'Kandy', '698d51a19d8a121ce581499d7b701668', 'amal', ''),
(127, 'Praveen', 'Dilashan', 'hdwu@nibm', 'Colombo', 'caca300bdf7b2f4461e8e4233e83e512', 'Praveen', ''),
(128, 'sasiri', 'vindya', 'sasiri@gmail.com', 'Galle', '35d8abc890af13dbedaa3f08ebac13fb', 'sasi', ''),
(133, 'vishwi', 'nethra', 'nethra@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'nethra', 'tuter'),
(134, 'ravidu', 'dias', 'ravidu@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'ravidu', 'admin'),
(135, 'sasiri', 'vindya', 'sasiri@gmail.com', 'Galle', '202cb962ac59075b964b07152d234b70', 'sasi', ''),
(136, 'nethra', 'guruge', 'sasiri@gmail.com', 'Galle', '81dc9bdb52d04dc20036dbd8313ed055', 'nethra', ''),
(137, 'Nethra', 'Guruge', 'vishguruge7@gmail.com', 'Galle', '81dc9bdb52d04dc20036dbd8313ed055', 'nethra', ''),
(138, 'randima', 'dilshan', 'rdr@gmail.com', 'Colombo', 'e10adc3949ba59abbe56e057f20f883e', 'Dil', ''),
(139, 'Randima', 'Dilshan', 'Admin@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'RDR', 'admin'),
(141, 'user', 'lastname', 'user@email.com', 'Galle', '202cb962ac59075b964b07152d234b70', 'user', ''),
(142, 'admin', 'admin', 'Admin@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'admin', 'admin'),
(143, 'chalindu', 'Dg', 'chanu@dg.com', 'Galle', 'f75526659f31040afeb61cb7133e4e6d', 'chalindu', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_id` int(255) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(81, 0, 'hello i have question 1', 'sasi', '2019-06-02 19:01:44'),
(89, 0, 'what is the use of VLE', 'user', '2019-06-04 04:40:09'),
(91, 89, 'Its a good way to study', 'nethra', '2019-06-04 04:52:52'),
(92, 0, 'what is dbms?', 'chalindu', '2019-06-04 08:31:01'),
(93, 92, 'jwn4huag4w', 'nethra', '2019-06-04 08:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reply_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_reply_comment` (
  `reply_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuter_data`
--

CREATE TABLE IF NOT EXISTS `tuter_data` (
  `id` int(255) DEFAULT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `uploading`
--

CREATE TABLE IF NOT EXISTS `uploading` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uploading`
--

INSERT INTO `uploading` (`id`, `name`, `email`, `file_name`) VALUES
(1, 'madutra', 'mac@gmail.com', 'uploads504463correlation and simple linear regrassion.pdf'),
(2, 'wwfw', 'mac@gmail.com', 'uploads528396es_01_overview.pdf'),
(3, 'madura', 'madura@gmaill.com', 'uploads499037es_13 interupts .pdf'),
(4, 'kamal', 'mac@gmail.com', 'uploads211178es_05_tutorial 02.pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
