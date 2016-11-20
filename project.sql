-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2016 г., 13:51
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `vid`
--

CREATE TABLE IF NOT EXISTS `vid` (
  `#` int(50) NOT NULL,
  `idvid` varchar(50) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `audurl` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vid`
--

INSERT INTO `vid` (`#`, `idvid`, `thumbnail`, `audurl`) VALUES
(39, 'gwqSi_ToNPs', 'https://i.ytimg.com/vi/gwqSi_ToNPs/maxresdefault.jpg', 'null'),
(82, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true'),
(83, 'gwqSi_ToNPs', 'https://i.ytimg.com/vi/gwqSi_ToNPs/maxresdefault.jpg', 'null'),
(84, 'gwqSi_ToNPs', 'https://i.ytimg.com/vi/gwqSi_ToNPs/maxresdefault.jpg', 'null'),
(85, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true'),
(86, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true'),
(87, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true'),
(88, 'gwqSi_ToNPs', 'https://i.ytimg.com/vi/gwqSi_ToNPs/maxresdefault.jpg', 'null'),
(89, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true'),
(90, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true'),
(91, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true'),
(92, 'AB6Hmnbp2KM', 'https://i.ytimg.com/vi/AB6Hmnbp2KM/hqdefault.jpg', 'true');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vid`
--
ALTER TABLE `vid`
  ADD PRIMARY KEY (`#`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `vid`
--
ALTER TABLE `vid`
  MODIFY `#` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
