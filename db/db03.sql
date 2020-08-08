-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db03`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL,
  `length` int(10) NOT NULL,
  `ondate` date NOT NULL,
  `publish` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`) VALUES
(1, '電影1', 1, 111, '2020-08-07', '泰山製片廠', '泰山', '03B01v.mp4', '03B01.png', '劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介'),
(2, '電影2', 2, 111, '2020-08-07', '泰山製片廠', '泰山', '03B02v.mp4', '03B02.png', '劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介'),
(3, '電影3', 3, 111, '2020-08-07', '泰山製片廠', '泰山', '03B03v.mp4', '03B03.png', '劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介'),
(4, '電影4', 4, 111, '2020-08-07', '泰山製片廠', '泰山', '03B04v.mp4', '03B04.png', '劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介'),
(5, '電影5', 1, 111, '2020-08-07', '泰山製片廠', '泰山', '03B05v.mp4', '03B05.png', '劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介'),
(6, '電影6', 2, 111, '2020-08-07', '泰山製片廠', '泰山', '03B06v.mp4', '03B06.png', '劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介劇情簡介');

-- --------------------------------------------------------

--
-- 資料表結構 `ord`
--

CREATE TABLE `ord` (
  `id` int(10) UNSIGNED NOT NULL,
  `no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `session` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qt` int(2) UNSIGNED NOT NULL,
  `seat` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ord`
--

INSERT INTO `ord` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seat`) VALUES
(1, '202008080001', '電影1', '2020-08-08', '1', 1, 'a:4:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;}'),
(4, '202008080004', '電影2', '2020-08-08', '1', 3, 'a:3:{i:0;s:1:\"5\";i:1;s:2:\"10\";i:2;s:2:\"15\";}'),
(6, '202008080006', '電影1', '2020-08-08', '1', 1, 'a:1:{i:0;s:1:\"5\";}'),
(7, '202008080007', '電影1', '2020-08-08', '1', 1, 'a:1:{i:0;s:1:\"8\";}'),
(9, '202008080009', '電影2', '2020-08-08', '1', 1, 'a:1:{i:0;s:1:\"5\";}'),
(10, '202008080010', '電影1', '2020-08-08', '1', 1, 'a:1:{i:0;s:2:\"10\";}'),
(12, '202008080012', '電影1', '2020-08-08', '2', 1, 'a:1:{i:0;s:1:\"7\";}'),
(13, '202008080013', '電影1', '2020-08-08', '5', 1, 'a:1:{i:0;s:1:\"2\";}');

-- --------------------------------------------------------

--
-- 資料表結構 `poster`
--

CREATE TABLE `poster` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(10) UNSIGNED NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `poster`
--

INSERT INTO `poster` (`id`, `img`, `text`, `rank`, `sh`) VALUES
(2, '03A01.jpg', '預告片1', 1, 1),
(3, '03A02.jpg', '預告片2', 2, 1),
(4, '03A03.jpg', '預告片3', 3, 1),
(5, '03A04.jpg', '預告片4', 4, 1),
(6, '03A05.jpg', '預告片5', 5, 1),
(7, '03A06.jpg', '預告片6', 7, 1),
(8, '03A07.jpg', '預告片7', 6, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ord`
--
ALTER TABLE `ord`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
