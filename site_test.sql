-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 24 2020 г., 12:39
-- Версия сервера: 5.7.29-0ubuntu0.18.04.1
-- Версия PHP: 7.2.29-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Author'),
(2, 'New Author'),
(3, 'The Pisatel'),
(4, 'Beta Author'),
(5, 'Firste Author'),
(6, 'Beta Author'),
(7, 'Firste Author'),
(8, 'Beta Author'),
(9, 'Firste Author');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_bin NOT NULL,
  `text` text COLLATE utf8mb4_bin NOT NULL,
  `author_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `author_id`, `datetime`) VALUES
(5, 'test news', ' uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk ', 2, '2020-03-22 09:50:00'),
(7, 'test news', ' uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk  uerou ou rutypuipy 7909798  9 7t28yti ghl gyg6k ;kh6iy ildfnd bigoy lk ', 2, '2020-03-22 09:50:03'),
(8, 'Старая запись', '984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг ', 3, '2020-03-22 09:50:03'),
(10, 'Старая запись', '984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг 984567nm94 gw54uig i54tuy6 кен окен ощен кенр луагшнфщарлу пршр шупгш укшен укеор лиопшгнрукщг ', 3, '2020-03-22 09:50:09'),
(11, 'Blog text for One', ' rujerotu ouiy pwiyp ity rty\r\ny\r\ntyu\r\ntyu ty[uu0 tiu [0  loreal uytweurg jhb jj  l rth h\r\nrt \r\nh \r\nty ]yjprypui peytiu yoepyi uy\r\nty\r\nu y ujjrourotyiru yr uwruq укшдо гшщкернщ ркекен ке\r\nнр шш езшг зуеншг зенг ен ено\r\nно оош шллкнхл зхз гк8щпгзукопд рущпг ', 1, '2020-03-18 20:41:58'),
(13, 'Blog text for One', ' rujerotu ouiy pwiyp ity rty\r\ny\r\ntyu\r\ntyu ty[uu0 tiu [0  loreal uytweurg jhb jj  l rth h\r\nrt \r\nh \r\nty ]yjprypui peytiu yoepyi uy\r\nty\r\nu y ujjrourotyiru yr uwruq укшдо гшщкернщ ркекен ке\r\nнр шш езшг зуеншг зенг ен ено\r\nно оош шллкнхл зхз гк8щпгзукопд рущпг ', 1, '2020-03-18 20:41:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
