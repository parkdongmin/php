-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-26 07:41
-- 서버 버전: 5.7.14
-- PHP 버전: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `author` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `notice` int(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`id`, `title`, `content`, `author`, `user_id`, `notice`, `timestamp`) VALUES
(20, 'dsa', 'dsa', 'das', 'admin', 1, '2016-10-24 00:39:32'),
(2, '방어가 잘잡히는 시간때는 언제인가요??ㅇㄴㅁㅇ', '방어가 잘잡히는 시간때는 언제인가요??            ㄴㅁㅇㄴㅁㅇ', '피키딩민ㅇㄴㅁㅇㅁㄴ', 'test', 0, '2016-10-20 08:00:07'),
(3, '민어 잡이의 장소로는 어떤곳이 있나요??', '민어 잡이의 장소로는 어떤곳이 있나요??', '범죄두', 'asd', 0, '2016-10-20 08:00:07');

-- --------------------------------------------------------

--
-- 테이블 구조 `point`
--

CREATE TABLE `point` (
  `id` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `icon` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `author` varchar(10) NOT NULL,
  `content` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `reply`
--

INSERT INTO `reply` (`id`, `list_id`, `user_id`, `author`, `content`, `timestamp`) VALUES
(1, 10, 0, '', '', '2016-10-21 08:53:55'),
(2, 10, 0, '', '', '2016-10-21 08:53:55'),
(3, 10, 0, '', '', '2016-10-21 08:54:26'),
(4, 10, 0, '', '', '2016-10-21 08:54:27'),
(5, 10, 0, '', '', '2016-10-21 08:54:27'),
(6, 10, 0, '', '', '2016-10-21 08:54:27'),
(7, 10, 0, '', '', '2016-10-21 08:54:27'),
(8, 10, 0, 'ㅇㄴㅁ', 'ㅇㄴㅁ', '2016-10-21 08:55:12'),
(9, 10, 0, 'ㅇㄴㅁ', 'ㅇㄴㅁ', '2016-10-21 08:55:13'),
(10, 10, 0, 'dㄴㅁㅇ', 'sㄴㅁㅇㅁㄴㅇ', '2016-10-21 08:57:38'),
(11, 24, 0, 'asd', 'dsa', '2016-10-24 05:14:48'),
(12, 3, 0, 'zz', 'ㅎㅌㅊ', '2016-10-26 02:05:23'),
(13, 3, 0, 'zz', 'zz', '2016-10-26 02:08:30');

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `user_pw` varchar(32) CHARACTER SET utf8 NOT NULL,
  `user_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `point` int(11) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '9',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_pw`, `user_name`, `point`, `role`, `timestamp`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '관리자', 0, 0, '2016-10-24 08:05:37'),
(4, 'test', '81dc9bdb52d04dc20036dbd8313ed055', '두산베어스', 0, 9, '2016-10-26 00:43:51'),
(5, 'asd', '7815696ecbf1c96e6894b779456d330e', '범죄두', 0, 9, '2016-10-26 02:04:53');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- 테이블의 AUTO_INCREMENT `point`
--
ALTER TABLE `point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 테이블의 AUTO_INCREMENT `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
