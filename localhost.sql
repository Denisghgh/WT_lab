-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 08 2020 г., 08:38
-- Версия сервера: 8.0.20
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_authors`
--
CREATE DATABASE IF NOT EXISTS `db_authors` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_authors`;

-- --------------------------------------------------------

--
-- Структура таблицы `publications`
--

CREATE TABLE `publications` (
  `id` int NOT NULL,
  `author_id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `publication_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publications`
--

INSERT INTO `publications` (`id`, `author_id`, `title`, `link`, `publication_data`) VALUES
(1, 3, 'Фонд Билла Гейтса перечислит $10 млн', 'https://rb.ru/news/gates-korona/', '2017-09-12'),
(2, 4, 'имидж компании без рекламы', 'https://rb.ru/story/steve-jobs-approach/', '2019-03-11'),
(3, 1, 'как изменится мир до 2030 года', 'https://rb.ru/news/zuck-forecast/', '2020-02-03'),
(4, 2, 'пожертвовал $1 млн на высадку деревьев', 'https://rb.ru/news/musk-team-trees/', '2015-01-19'),
(5, 4, 'Билл Гейтс назвал Стива Джобса «мастером заклинаний»', 'https://rb.ru/story/gates-jobs-wizard/', '2018-09-10'),
(6, 4, 'Главный секрет успеха Apple? ', 'https://rb.ru/story/values-key-to-success/', '2019-11-18'),
(7, 3, 'Билл Гейтс купил экологичную яхту', 'https://rb.ru/news/gates-yacht/', '2019-12-09');

-- --------------------------------------------------------

--
-- Структура таблицы `registrated_authors`
--

CREATE TABLE `registrated_authors` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ip_registration` int UNSIGNED NOT NULL,
  `data_registration` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registrated_authors`
--

INSERT INTO `registrated_authors` (`id`, `name`, `password`, `ip_registration`, `data_registration`) VALUES
(1, 'Марк Цукерберг', 'passEY', 3232235523, '2020-05-08 13:44:46'),
(2, 'Илон Маск', 'passKZ', 3232235524, '2020-05-08 13:45:32'),
(3, 'Билл Гейтс', 'passMX', 3232235521, '2020-05-08 13:38:05'),
(4, 'Стив Джобс', 'passAV', 3232235522, '2020-05-08 13:38:05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `registrated_authors`
--
ALTER TABLE `registrated_authors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `registrated_authors`
--
ALTER TABLE `registrated_authors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- База данных: `lab_5`
--
CREATE DATABASE IF NOT EXISTS `lab_5` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `lab_5`;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(5, 'Test', 'fa7246a1895cc4bb1b84b26ef47f88cdf75651da'),
(6, 'DEN', '41db8ca9491d5cdf51ead943e361455af0cd1c17'),
(7, 'Den', '41db8ca9491d5cdf51ead943e361455af0cd1c17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
