-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-02-27 16:54:11
-- 服务器版本： 5.5.46
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_message`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_comment`
--

CREATE TABLE IF NOT EXISTS `t_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comm_username` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `t_comment`
--

INSERT INTO `t_comment` (`id`, `user_id`, `comm_username`, `comment`) VALUES
(1, 67, 'a', 'a'),
(5, 67, 'a', 'asdf'),
(6, 67, 'a', 'asdf'),
(7, 67, 'a', 'asdf'),
(8, 67, 'a', 'asd'),
(9, 67, 'a', 'asd'),
(10, 67, 'a', 'asd'),
(11, 67, 'a', 'asd'),
(12, 67, 'a', 'a'),
(13, 67, 'a', 'a'),
(14, 67, 'a', 'a'),
(15, 67, 'a', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
