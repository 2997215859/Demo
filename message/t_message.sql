-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-02-27 16:52:14
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
-- 表的结构 `t_message`
--

CREATE TABLE IF NOT EXISTS `t_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `sex` enum('男','女') NOT NULL,
  `edu` enum('小学','初中','高中','大学') NOT NULL,
  `love` set('上网','睡觉','游戏','旅游') NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- 转存表中的数据 `t_message`
--

INSERT INTO `t_message` (`id`, `user`, `sex`, `edu`, `love`, `title`, `content`) VALUES
(31, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(32, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(35, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(36, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(43, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(47, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(48, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(49, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(50, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(51, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(52, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(53, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(54, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(55, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(56, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(57, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(58, 'tafds', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(59, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(60, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(61, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(62, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(63, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(64, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(65, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(66, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(67, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(68, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf'),
(69, 't', '男', '高中', '上网,睡觉,游戏,旅游', 'yrhtegr', 'yrhwgterf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
