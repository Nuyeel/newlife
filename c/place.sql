-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-12 21:03:31
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `mfee26-d-php`
--

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE `place` (
  `sid` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` int(11) NOT NULL,
  `country` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `dist` varchar(225) NOT NULL,
  `quota` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `place_price` int(11) NOT NULL DEFAULT 200
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `place`
--

INSERT INTO `place` (`sid`, `year`, `month`, `country`, `city`, `dist`, `quota`, `booked`, `place_price`) VALUES
(2, 2025, 10, '美國', '紐約', '布魯克林', 2, 0, 200),
(5, 2072, 2, '台灣', '台南市', '安平區', 2, 0, 200),
(6, 2030, 5, '台灣', '台南市', '中西區', 5, 3, 200),
(7, 2055, 8, '台灣', '台北市', '大安區', 5, 3, 200),
(10, 2025, 12, '台灣', '台南市', '安平區', 4, 2, 200),
(12, 2025, 12, '台灣', '台北市', '大安區', 3, 2, 200),
(13, 2022, 12, '美國', '加州', '聖荷西', 2, 1, 200),
(16, 2030, 6, '台灣', '台北市', '內湖區', 1, 1, 200),
(17, 2029, 6, '台灣', '台南市', '中西區', 2, 1, 200),
(18, 2029, 5, '台灣', '桃園市', '蘆竹區', 3, 1, 200),
(19, 2027, 5, '美國', '紐約', '皇后區', 4, 2, 200),
(20, 2027, 12, '美國', '加州', '比佛利山莊', 1, 0, 200),
(21, 2023, 5, '台灣', '新竹縣', '竹北市', 2, 0, 200),
(22, 2025, 6, '台灣', '台北市', '大安區', 2, 1, 200),
(23, 2052, 2, '台灣', '台北市', '大安區', 1, 1, 200),
(24, 2045, 6, '台灣', '台北市', '大安區', 3, 1, 200),
(25, 2105, 10, '台灣', '台北市', '大安區', 2, 0, 200),
(28, 2044, 2, '台灣', '新北市', '三峽區', 5, 1, 200),
(29, 2048, 12, '台灣', '新北市', '三峽區', 2, 1, 200),
(30, 2064, 4, '台灣', '新北市', '三峽區', 3, 2, 200),
(31, 2098, 10, '台灣', '新北市', '三峽區', 5, 2, 200),
(32, 2084, 2, '台灣', '新北市', '三峽區', 2, 0, 200),
(33, 2100, 7, '台灣', '新北市', '三峽區', 5, 2, 200),
(34, 2088, 12, '台灣', '台北市', '內湖區', 2, 1, 200),
(35, 2054, 4, '台灣', '台北市', '內湖區', 3, 2, 200),
(36, 2028, 10, '台灣', '台北市', '內湖區', 5, 2, 200),
(37, 2034, 2, '台灣', '台北市', '內湖區', 2, 0, 200),
(38, 2070, 7, '台灣', '台北市', '內湖區', 5, 2, 200),
(39, 2039, 3, '台灣', '桃園市', '中壢區', 4, 2, 200),
(40, 2069, 9, '台灣', '桃園市', '中壢區', 2, 1, 200),
(41, 2089, 3, '台灣', '桃園市', '中壢區', 2, 0, 200),
(42, 2027, 5, '台灣', '桃園市', '大園區', 3, 2, 200),
(43, 2039, 12, '台灣', '桃園市', '大園區', 2, 1, 200),
(44, 2039, 9, '台灣', '桃園市', '蘆竹區', 4, 2, 200),
(45, 2039, 11, '台灣', '桃園市', '蘆竹區', 2, 1, 200),
(46, 2052, 3, '台灣', '新北市', '三峽區', 4, 1, 200),
(47, 2077, 12, '台灣', '新北市', '三重區', 4, 2, 200),
(48, 2099, 7, '台灣', '新北市', '三重區', 2, 1, 200),
(49, 2054, 6, '台灣', '新北市', '三重區', 4, 0, 200),
(50, 2068, 8, '台灣', '新北市', '蘆洲區', 3, 2, 200),
(51, 2084, 2, '台灣', '新北市', '蘆洲區', 4, 2, 200),
(52, 2072, 3, '台灣', '台北市', '中山區', 4, 1, 200),
(53, 2077, 11, '台灣', '台北市', '中山區', 4, 2, 200),
(54, 2069, 7, '台灣', '台北市', '中山區', 3, 1, 200),
(55, 2074, 6, '台灣', '宜蘭縣', '宜蘭市', 4, 0, 200),
(56, 2038, 8, '台灣', '宜蘭縣', '宜蘭市', 3, 2, 200),
(57, 2094, 2, '台灣', '台中市', '烏日區', 4, 2, 200),
(58, 2040, 11, '台灣', '台北市', '北投區', 2, 0, 200),
(59, 2055, 12, '台灣', '高雄市', '左營區', 3, 1, 200),
(60, 2075, 2, '台灣', '高雄市', '左營區', 2, 1, 200),
(61, 2035, 8, '台灣', '高雄市', '三民區', 3, 1, 200),
(62, 2033, 4, '台灣', '台南市', '仁德區', 2, 0, 200),
(63, 2023, 1, '台灣', '台南市', '中西區', 2, 1, 200),
(64, 2041, 12, '台灣', '台南市', '中西區', 3, 1, 200),
(65, 2062, 7, '台灣', '台南市', '仁德區', 3, 2, 200),
(66, 2055, 9, '台灣', '台南市', '仁德區', 5, 2, 200),
(67, 2023, 3, '美國', '加州', '舊金山', 2, 0, 200),
(68, 2023, 12, '台灣', '宜蘭縣', '羅東鎮', 3, 1, 200),
(69, 2026, 8, '台灣', '台中市', '西區', 3, 1, 200),
(70, 2032, 7, '台灣', '新北市', '蘆洲區', 2, 0, 200),
(71, 2029, 5, '台灣', '高雄市', '左營區', 2, 0, 200),
(72, 2032, 7, '台灣', '新竹縣', '竹北市', 4, 1, 200),
(73, 2043, 8, '台灣', '宜蘭縣', '羅東鎮', 2, 0, 200),
(74, 2047, 1, '台灣', '高雄市', '三民區', 4, 2, 200),
(75, 2057, 9, '台灣', '桃園市', '中壢區', 3, 0, 200),
(76, 2122, 1, '台灣', '新北市', '三重區', 2, 0, 200),
(77, 2032, 12, '台灣', '台中市', '豐原區', 2, 0, 200),
(78, 2024, 5, '台灣', '高雄市', '左營區', 2, 1, 200),
(79, 2022, 12, '台灣', '新北市', '三重區', 2, 0, 200),
(80, 2022, 11, '台灣', '新北市', '三峽區', 2, 1, 200),
(81, 2022, 10, '台灣', '新竹縣', '竹北市', 3, 1, 200),
(82, 2030, 2, '美國', '加州', '聖地牙哥', 2, 0, 200),
(83, 2043, 9, '台灣', '桃園市', '中壢區', 2, 1, 200);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `place`
--
ALTER TABLE `place`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
