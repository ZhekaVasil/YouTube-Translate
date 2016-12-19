-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 20 2016 г., 02:42
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

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
  `audurl` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descript` varchar(1000) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vid`
--

INSERT INTO `vid` (`#`, `idvid`, `thumbnail`, `audurl`, `title`, `descript`) VALUES
(95, 'ZLO4X6UI8OY', 'https://i.ytimg.com/vi/ZLO4X6UI8OY/maxresdefault.jpg', 'true', '3Прибытие / Arrival (2016) Трейлер HD', 'Фильм «Прибытие» расскажет об очередном инопланетном нашествии. В этот раз специалистам удаётся найти способ, который поможет общаться с пришельцами, однако не каждый способен овладеть их лингвистикой. '),
(93, '1TmkKo9Tb5A', 'img/all.jpg', 'true', '1Аладдин', 'Заставка к сериалу Аладдин'),
(108, 'KbW9JqM7vho', 'https://i.ytimg.com/vi/KbW9JqM7vho/maxresdefault.jpg', 'null', '4Die Antwoord - Evil Boy (Explicit Version)', 'Music video by Die Antwoord performing Evil Boy. (C) 2010 Interscope Records'),
(109, 'cegdR0GiJl4', 'https://i.ytimg.com/vi/cegdR0GiJl4/maxresdefault.jpg', 'null', '5Die Antwoord - Enter The Ninja (Explicit Version)', 'Music video by Die Antwoord performing Enter The Ninja. (C) 2010 Interscope Records'),
(110, 'mVWeqAPQUXc', 'https://i.ytimg.com/vi/mVWeqAPQUXc/maxresdefault.jpg', 'null', '6Miike Snow - Animal', 'Music video by Miike Snow performing Animal. (C) 2009 Downtown Music, LLC. Downtown Records is a trademark of Downtown Music, LLC.'),
(111, 'EWJHK0JT_Xc', 'https://i.ytimg.com/vi/EWJHK0JT_Xc/maxresdefault.jpg', 'null', '7Miike Snow - Heart is Full (Official Video)', 'Official “Heart Is Full” music video directed by Lance Drake and starring Braina Laviena and Akemi Look. '),
(112, 'CW5oGRx9CLM', 'https://i.ytimg.com/vi/CW5oGRx9CLM/maxresdefault.jpg', 'null', '8The Weeknd - False Alarm', 'False Alarm (Official Video)\r\nTaken from the new album Starboy'),
(113, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(94, 'P_SlAzsXa7E', 'https://i.ytimg.com/vi/P_SlAzsXa7E/maxresdefault.jpg', 'null', '2Miike Snow - Genghis Khan (Official Video)', 'Directed By Ninian Doff\r\nProduced by Pulse Films'),
(115, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(116, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(117, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(118, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(119, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(120, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(121, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(122, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(123, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(124, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(125, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(126, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(127, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(128, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(129, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(130, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(131, 'ku7ohU1IGls', 'https://i.ytimg.com/vi/ku7ohU1IGls/maxresdefault.jpg', 'null', '9[OFFICIAL VIDEO] God Rest Ye Merry Gentlemen - Pentatonix', 'A PENTATONIX CHRISTMAS OUT NOW! ITUNES http://smarturl.it/APentatonixChristm... | AMAZON '),
(132, '-lmyS8J8Keo', 'https://i.ytimg.com/vi/-lmyS8J8Keo/maxresdefault.jpg', '-lmyS8J8Keo', 'title', 'descript'),
(133, 'LZhf31QQhhI', 'https://i.ytimg.com/vi/LZhf31QQhhI/maxresdefault.jpg', 'null', 'title', 'des'),
(134, 'k6PxMRUgmbA', 'https://i.ytimg.com/vi/k6PxMRUgmbA/hqdefault.jpg', 'null', 'title', 'des'),
(135, 'U9t-slLl30E', 'https://i.ytimg.com/vi/U9t-slLl30E/maxresdefault.jpg', 'null', 'qqqqq', 'eeeee'),
(136, 'SXiSVQZLje8', 'https://i.ytimg.com/vi/SXiSVQZLje8/maxresdefault.jpg', 'null', '123', '321'),
(137, 'z5gpGO5jg0U', 'https://i.ytimg.com/vi/z5gpGO5jg0U/maxresdefault.jpg', 'true', '9999', '6666'),
(138, 'LZhf31QQhhI', 'https://i.ytimg.com/vi/LZhf31QQhhI/maxresdefault.jpg', 'null', 'tyu', 'tu'),
(139, 'LZhf31QQhhI', 'https://i.ytimg.com/vi/LZhf31QQhhI/maxresdefault.jpg', 'true', 'qwe', 'qwe'),
(140, 'U9t-slLl30E', 'https://i.ytimg.com/vi/U9t-slLl30E/maxresdefault.jpg', 'null', 'dsf', 'sdf'),
(141, 'ghWgm43H4ZQ', 'https://i.ytimg.com/vi/ghWgm43H4ZQ/maxresdefault.jpg', 'null', 'asd', 'asd'),
(142, 'KbW9JqM7vho', 'https://i.ytimg.com/vi/KbW9JqM7vho/maxresdefault.jpg', 'null', 'rt', 'ert'),
(143, 'U1xu8Q60aLA', 'https://i.ytimg.com/vi/U1xu8Q60aLA/maxresdefault.jpg', 'null', 'ert', 'ert'),
(144, 'o0u4M6vppCI', 'https://i.ytimg.com/vi/o0u4M6vppCI/maxresdefault.jpg', 'null', 'y', 'rty'),
(145, 'sC9abcLLQpI', 'https://i.ytimg.com/vi/sC9abcLLQpI/maxresdefault.jpg', 'true', 'df', 'sdf'),
(146, 'v32DmrMH354', 'https://i.ytimg.com/vi/v32DmrMH354/maxresdefault.jpg', 'true', 'sd', 'sd'),
(147, 'LZhf31QQhhI', 'https://i.ytimg.com/vi/LZhf31QQhhI/maxresdefault.jpg', 'true', 'Translate', 'Test'),
(148, 'v32DmrMH354', 'https://i.ytimg.com/vi/v32DmrMH354/maxresdefault.jpg', 'null', 'Без аудио', 'Без аудио'),
(149, 'mg2xtVYgQhI', 'https://i.ytimg.com/vi/mg2xtVYgQhI/maxresdefault.jpg', 'null', 'GOT', 'Игра пристолов'),
(150, 'z5gpGO5jg0U', 'https://i.ytimg.com/vi/z5gpGO5jg0U/maxresdefault.jpg', 'null', 'asd', 'iooio'),
(151, 'LZhf31QQhhI', 'https://i.ytimg.com/vi/LZhf31QQhhI/maxresdefault.jpg', 'true', 'Перевод', 'Описание');

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
  MODIFY `#` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=152;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
