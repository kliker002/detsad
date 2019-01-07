-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2018 г., 12:31
-- Версия сервера: 5.7.19
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `detsad_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `childs`
--

CREATE TABLE `childs` (
  `id` int(10) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `sname` varchar(32) NOT NULL,
  `birthdate` date NOT NULL,
  `id_group` int(5) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `phone` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `childs`
--

INSERT INTO `childs` (`id`, `fname`, `sname`, `birthdate`, `id_group`, `active`, `phone`) VALUES
(1, 'Ivan', 'Romanov', '2007-04-18', 2, 1, NULL),
(2, 'Genya', 'Drister', '2008-05-14', 2, 1, NULL),
(3, 'Vasya', 'Drister', '2008-05-14', 2, 1, NULL),
(4, 'Владимир', 'Путин', '2014-07-22', NULL, 0, NULL),
(5, 'Эмир', 'Федир', '2014-07-22', 2, 1, 79787484864);

-- --------------------------------------------------------

--
-- Структура таблицы `educators`
--

CREATE TABLE `educators` (
  `id` int(5) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `sname` varchar(32) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `educations` varchar(250) DEFAULT NULL,
  `aboutme` varchar(250) DEFAULT NULL,
  `id_group` int(5) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `educators`
--

INSERT INTO `educators` (`id`, `fname`, `sname`, `birthdate`, `photo`, `educations`, `aboutme`, `id_group`, `active`) VALUES
(1, 'Olesya', 'Rogozheva', '1988-12-12', '/img/olgarogozheva.jpg', 'КФУ Педагогическое', 'Опыт 10 лет', 1, NULL),
(2, 'Olesya', 'Rogozheva', '1988-12-12', '/img/olgarogozheva.jpg', 'КФУ Педагогическое', 'Опыт 10 лет', 1, NULL),
(3, 'Валерия', 'Росинева', '1988-12-12', 'img/555.jpg', '12f', 'sda', 1, NULL),
(4, 'Юлия', 'Фурия', '1983-06-04', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(2, 'Dvasli', 'Top Dvasli v Mire'),
(4, 'Yasli1', 'Top Yasli v Mire');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `admin` int(1) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `admin`) VALUES
(2, 'admin@mail.ru', 'admin@mail.ru', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `childs`
--
ALTER TABLE `childs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `educators`
--
ALTER TABLE `educators`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `childs`
--
ALTER TABLE `childs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `educators`
--
ALTER TABLE `educators`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
