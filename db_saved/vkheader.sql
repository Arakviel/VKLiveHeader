-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2018 г., 22:02
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vkheader`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1523116390),
('m130524_201442_init', 1523116432);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vk`
--

CREATE TABLE `vk` (
  `id` int(11) NOT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `show_fullday` tinyint(1) DEFAULT NULL,
  `show_sub` tinyint(1) DEFAULT NULL,
  `font_size_sub` int(11) DEFAULT NULL,
  `text_angle_sub` int(11) DEFAULT NULL,
  `text_x_sub` int(11) DEFAULT NULL,
  `text_y_sub` int(11) DEFAULT NULL,
  `font_color_r_sub` int(11) DEFAULT NULL,
  `font_color_g_sub` int(11) DEFAULT NULL,
  `font_color_b_sub` int(11) DEFAULT NULL,
  `img_x_sub` int(11) DEFAULT NULL,
  `img_y_sub` int(11) DEFAULT NULL,
  `img_size_sub` int(11) DEFAULT NULL,
  `img_rounding_sub` int(11) DEFAULT NULL,
  `show_licker` tinyint(1) DEFAULT NULL,
  `font_size_licker` int(11) DEFAULT NULL,
  `text_angle_licker` int(11) DEFAULT NULL,
  `text_x_licker` int(11) DEFAULT NULL,
  `text_y_licker` int(11) DEFAULT NULL,
  `font_color_r_licker` int(11) DEFAULT NULL,
  `font_color_g_licker` int(11) DEFAULT NULL,
  `font_color_b_licker` int(11) DEFAULT NULL,
  `img_x_licker` int(11) DEFAULT NULL,
  `img_y_licker` int(11) DEFAULT NULL,
  `img_size_licker` int(11) DEFAULT NULL,
  `img_rounding_licker` int(11) DEFAULT NULL,
  `show_time` tinyint(1) DEFAULT NULL,
  `timezone_time` varchar(255) DEFAULT NULL,
  `font_size_time` int(11) DEFAULT NULL,
  `text_angle_time` int(11) DEFAULT NULL,
  `text_x_time` int(11) DEFAULT NULL,
  `text_y_time` int(11) DEFAULT NULL,
  `font_color_r_time` int(11) DEFAULT NULL,
  `font_color_g_time` int(11) DEFAULT NULL,
  `font_color_b_time` int(11) DEFAULT NULL,
  `show_date` tinyint(1) DEFAULT NULL,
  `font_size_date` int(11) DEFAULT NULL,
  `text_angle_date` int(11) DEFAULT NULL,
  `text_x_date` int(11) DEFAULT NULL,
  `text_y_date` int(11) DEFAULT NULL,
  `font_color_r_date` int(11) DEFAULT NULL,
  `font_color_g_date` int(11) DEFAULT NULL,
  `font_color_b_date` int(11) DEFAULT NULL,
  `show_time_countdown` tinyint(1) DEFAULT NULL,
  `format_time_countdown` date DEFAULT NULL,
  `font_size_time_countdown` int(11) DEFAULT NULL,
  `text_angle_time_countdown` int(11) DEFAULT NULL,
  `text_x_time_countdown` int(11) DEFAULT NULL,
  `text_y_time_countdown` int(11) DEFAULT NULL,
  `font_color_r_time_countdown` int(11) DEFAULT NULL,
  `font_color_g_time_countdown` int(11) DEFAULT NULL,
  `font_color_b_time_countdown` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vk`
--

INSERT INTO `vk` (`id`, `access_token`, `group_id`, `show_fullday`, `show_sub`, `font_size_sub`, `text_angle_sub`, `text_x_sub`, `text_y_sub`, `font_color_r_sub`, `font_color_g_sub`, `font_color_b_sub`, `img_x_sub`, `img_y_sub`, `img_size_sub`, `img_rounding_sub`, `show_licker`, `font_size_licker`, `text_angle_licker`, `text_x_licker`, `text_y_licker`, `font_color_r_licker`, `font_color_g_licker`, `font_color_b_licker`, `img_x_licker`, `img_y_licker`, `img_size_licker`, `img_rounding_licker`, `show_time`, `timezone_time`, `font_size_time`, `text_angle_time`, `text_x_time`, `text_y_time`, `font_color_r_time`, `font_color_g_time`, `font_color_b_time`, `show_date`, `font_size_date`, `text_angle_date`, `text_x_date`, `text_y_date`, `font_color_r_date`, `font_color_g_date`, `font_color_b_date`, `show_time_countdown`, `format_time_countdown`, `font_size_time_countdown`, `text_angle_time_countdown`, `text_x_time_countdown`, `text_y_time_countdown`, `font_color_r_time_countdown`, `font_color_g_time_countdown`, `font_color_b_time_countdown`) VALUES
(1, 'd43f99fb1767793e09b70e9180f11cfa0dd61f654d8a2de0338859873fbcfdaa75fe960cc7f11e1c82d12', 131095370, 1, 1, 14, 0, 470, 355, 255, 255, 255, 395, 156, 150, 75, 1, 14, 0, 1110, 355, 255, 255, 255, 1040, 156, 150, 75, 1, 'Europe/Kiev', 14, 0, 60, 30, 255, 255, 255, 1, 14, 0, 40, 90, 255, 255, 255, 1, '2018-05-31', 14, 0, 200, 120, 255, 255, 255),
(2, 'd43f99fb1767793e09b70e9180f11cfa0dd61f654d8a2de0338859873fbcfdaa75fe960cc7f11e1c82d12', 131095370, 1, 1, 14, 0, 470, 355, 255, 255, 255, 395, 156, 150, 75, 1, 14, 0, 1110, 355, 255, 255, 255, 1040, 156, 150, 75, 1, 'Europe/Rome', 14, 0, 60, 30, 255, 255, 255, 1, 14, 0, 40, 90, 255, 255, 255, 1, '2018-05-31', 14, 0, 60, 120, 255, 255, 255),
(3, 'd43f99fb1767793e09b70e9180f11cfa0dd61f654d8a2de0338859873fbcfdaa75fe960cc7f11e1c82d12', 131095370, 1, 1, 14, 0, 470, 355, 255, 255, 255, 395, 156, 150, 75, 1, 14, 0, 1110, 355, 255, 255, 255, 1040, 156, 150, 75, 1, 'Europe/Rome', 14, 0, 60, 30, 255, 255, 255, 1, 14, 0, 40, 90, 255, 255, 255, 1, '2018-05-31', 14, 0, 60, 120, 255, 255, 255),
(4, 'd43f99fb1767793e09b70e9180f11cfa0dd61f654d8a2de0338859873fbcfdaa75fe960cc7f11e1c82d12', 131095370, 1, 1, 14, 0, 470, 355, 255, 255, 255, 395, 156, 150, 75, 1, 14, 0, 1110, 355, 255, 255, 255, 1040, 156, 150, 75, 1, 'Europe/Rome', 14, 0, 60, 30, 255, 255, 255, 1, 14, 0, 40, 90, 255, 255, 255, 1, '2018-05-31', 14, 0, 60, 120, 255, 255, 255);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `vk`
--
ALTER TABLE `vk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vk`
--
ALTER TABLE `vk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
