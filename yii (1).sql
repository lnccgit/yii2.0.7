-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016-04-23 22:12:55
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `yii`
--
CREATE DATABASE IF NOT EXISTS `yii` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yii`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL,
  `create_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `create_at`, `updated_at`) VALUES
(1, 'admin', 'aQrJt8MAAKrCHs5_ssz-fn4qykYHotPr', '$2y$13$VqkSqNRBdBwjks6hgij6IedZVfLGaJeCEpkF9BA7noUAxGTOczy.2', 'DpIffSioi8p1ms8zqJyIRjMhd2TQXDUH_1460290272', 'demo@163.com', 0, 10, 0, 1460290273);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `auth_key` varchar(255) NOT NULL COMMENT '自动登录key',
  `password_hash` varchar(255) NOT NULL COMMENT '加密密码',
  `password_reset_token` varchar(255) NOT NULL COMMENT '重置密码',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `role` smallint(6) NOT NULL COMMENT '角色等级',
  `status` smallint(6) NOT NULL COMMENT '状态',
  `create_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `create_at`, `updated_at`) VALUES
(1, 'wsws33333', 'aQrJt8MAAKrCHs5_ssz-fn4qykYHotPr', '$2y$13$VqkSqNRBdBwjks6hgij6IedZVfLGaJeCEpkF9BA7noUAxGTOczy.2', 'DpIffSioi8p1ms8zqJyIRjMhd2TQXDUH_1460290272', 'demo@163.com', 0, 10, 0, 1460290273);

-- --------------------------------------------------------

--
-- 表的结构 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `videoid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `videodesc` text,
  `url` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `uploadate` int(11) NOT NULL,
  PRIMARY KEY (`videoid`),
  KEY `catid` (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `video`
--

INSERT INTO `video` (`videoid`, `title`, `videodesc`, `url`, `catid`, `thumb`, `price`, `uploadate`) VALUES
(1, '从入门到精通', '阿什顿神盾舰卡到骄傲了空间阿里斯柯达就', 'http://v.qq.com/cover/0/00ijz9hyqla0ug9/g0019653lml.html?ptag=2345.tv', 1, '333', '2.00', 2011);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
