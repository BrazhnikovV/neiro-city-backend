-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 13 2018 г., 08:18
-- Версия сервера: 5.5.59-0+deb8u1
-- Версия PHP: 7.2.4-1+0~20180405085552.20+jessie~1.gbpbff9f0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `neiro-city-backend`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_banners`
--

CREATE TABLE IF NOT EXISTS `tbl_banners` (
`id` int(11) NOT NULL,
  `img_url` varchar(256) NOT NULL,
  `source_url` varchar(255) NOT NULL,
  `Impressions` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `img_url`, `source_url`, `Impressions`, `created`) VALUES
(1, 'images/banner_1.jpg', '', 2, '2018-06-12 01:06:11'),
(2, '/images/banner_2.png', '', 2, '2018-06-12 09:31:42'),
(3, '/images/banner_3.png', '', 2, '2018-06-12 01:05:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`), ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `tbl_banners`
--
ALTER TABLE `tbl_banners`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tbl_banners`
--
ALTER TABLE `tbl_banners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
