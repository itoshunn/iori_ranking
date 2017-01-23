-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 1 朁E23 日 16:27
-- サーバのバージョン： 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iori_ranking`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `game_category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `games`
--

INSERT INTO `games` (`id`, `title`, `game_category_id`, `created`, `modified`) VALUES
(1, 'test', 1, '2017-01-23 00:00:00', '2017-01-23 00:00:00'),
(3, '将棋', 7, '2017-01-23 07:03:33', '2017-01-23 07:03:33'),
(4, '軍人将棋', 7, '2017-01-23 07:03:42', '2017-01-23 07:03:42'),
(5, 'オセロ', 8, '2017-01-23 07:23:09', '2017-01-23 07:23:09'),
(6, 'チェス', 2, '2017-01-23 07:23:31', '2017-01-23 07:23:31'),
(7, 'バックギャモン', 4, '2017-01-23 07:24:04', '2017-01-23 07:24:04'),
(8, 'モノポリー', 4, '2017-01-23 07:24:16', '2017-01-23 07:24:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `game_categories`
--

CREATE TABLE `game_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `game_categories`
--

INSERT INTO `game_categories` (`id`, `name`, `created`, `modified`) VALUES
(2, '戦争ゲーム', '2017-01-23 07:01:52', '2017-01-23 07:01:52'),
(3, '包囲ゲーム', '2017-01-23 07:02:32', '2017-01-23 07:02:32'),
(4, '競争ゲーム', '2017-01-23 07:02:39', '2017-01-23 07:02:39'),
(5, '配列ゲーム', '2017-01-23 07:02:53', '2017-01-23 07:02:53'),
(6, '囲碁', '2017-01-23 07:02:58', '2017-01-23 07:02:58'),
(7, '将棋', '2017-01-23 07:03:03', '2017-01-23 07:03:03'),
(8, 'オセロ', '2017-01-23 07:03:07', '2017-01-23 07:03:07');

-- --------------------------------------------------------

--
-- テーブルの構造 `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170123035942, 'CreateUsers', '2017-01-22 19:49:14', '2017-01-22 19:49:14', 0),
(20170123035955, 'CreateGameCategories', '2017-01-22 19:49:14', '2017-01-22 19:49:14', 0),
(20170123040001, 'CreateRecords', '2017-01-22 19:49:14', '2017-01-22 19:49:14', 0),
(20170123044804, 'CreateGames', '2017-01-22 19:49:14', '2017-01-22 19:49:15', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `game_count` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `records`
--

INSERT INTO `records` (`id`, `user_id`, `game_id`, `game_count`, `win`, `lose`, `draw`, `created`, `modified`) VALUES
(1, 1, 1, 1, 1, 0, 0, '2017-01-23 06:02:53', '2017-01-23 06:02:53'),
(2, 1, 5, 3, 0, 3, 0, '2017-01-23 07:24:33', '2017-01-23 07:24:33'),
(3, 1, 7, 5, 3, 2, 0, '2017-01-23 07:24:43', '2017-01-23 07:24:43'),
(4, 2, 7, 100, 50, 50, 0, '2017-01-23 07:26:26', '2017-01-23 07:26:26'),
(5, 2, 6, 10, 5, 5, 0, '2017-01-23 07:26:38', '2017-01-23 07:26:38'),
(6, 2, 3, 20, 0, 20, 0, '2017-01-23 07:27:05', '2017-01-23 07:27:05');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `gender`, `created`, `modified`) VALUES
(1, 'いとしゅん', 35, 1, '2017-01-23 04:52:08', '2017-01-23 04:52:08'),
(2, '山田幸典', 36, 1, '2017-01-23 07:26:06', '2017-01-23 07:26:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
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
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
