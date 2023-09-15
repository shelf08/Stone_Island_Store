-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2023 г., 20:27
-- Версия сервера: 5.7.39
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shelf`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Отзывы`
--

CREATE TABLE `Отзывы` (
  `Номер` int(11) NOT NULL,
  `Автор` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Товар` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Комментарий` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Отзывы`
--

INSERT INTO `Отзывы` (`Номер`, `Автор`, `Товар`, `Комментарий`) VALUES
(1, 'Саня', 'Шапка', 'Класс');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Отзывы`
--
ALTER TABLE `Отзывы`
  ADD PRIMARY KEY (`Номер`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Отзывы`
--
ALTER TABLE `Отзывы`
  MODIFY `Номер` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
