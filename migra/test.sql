-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2020 г., 18:06
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  `auth_key` varchar(32) DEFAULT NULL,
  `access_token` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `auth_key`, `access_token`) VALUES
(1, 'xor', 'a392960421913165197845f34bf5d1a8', 'adb273e8bfb2871aa8045fb6cc5215f5', 'a392960421913165197845f34bf5d1a8'),
(2, 'rox', 'd5d4172de318d6dc6c1ca52c8dcab618', 'd5d4172de318d6dc6c1ca52c8dcab618', 'd5d4172de318d6dc6c1ca52c8dcab618');

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`, `date`) VALUES
(1, 'Владимир Набоков', '2020-06-24 18:06:46'),
(2, 'Скотт Фицджеральд', '2020-06-24 18:06:46'),
(3, 'Джеймс Джойс', '2020-06-24 18:07:15'),
(4, 'Габриэль Гарсиа Маркес', '2020-06-24 18:07:15'),
(5, 'Вирджинии Вулф', '2020-06-24 18:07:37'),
(6, 'Лев Толстой', '2020-06-24 18:07:37'),
(7, 'Гюстав Флобер', '2020-06-24 18:07:59'),
(8, 'Марк Твен', '2020-06-24 18:07:59'),
(14, 'федор достоевский', '2020-06-25 14:13:56');

-- --------------------------------------------------------

--
-- Структура таблицы `bookcomments`
--

CREATE TABLE `bookcomments` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `admin_name` varchar(32) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bookcomments`
--

INSERT INTO `bookcomments` (`id`, `book_id`, `admin_name`, `text`, `date`) VALUES
(1, 1, 'xorxor', 'asdskdlkasldk ;lks;ld asd', '2020-06-25 18:16:09'),
(2, 1, 'xorxor', 'asdskdlkasldk ;lks;ld asd', '2020-06-25 18:16:12'),
(3, 1, 'xorxor', 'asdskdlkasldk ;lks;ld asd', '2020-06-25 18:17:12'),
(4, 1, 'xorxor', 'asdskdlkasldk ;lks;ld asd', '2020-06-25 18:19:18'),
(5, 1, 'xorxor', 'Мой первый отзыв', '2020-06-25 18:19:29'),
(6, 1, 'л', 'ллл', '2020-06-25 18:20:13'),
(7, 19, 'xorxor', 'Книга Саламбо Говно', '2020-06-25 18:21:03'),
(8, 18, 'xorxor', 'мадам бровары*', '2020-06-25 18:22:51'),
(9, 18, 'xorxor', 'Я написал два комента ', '2020-06-25 18:34:53'),
(10, 18, 'xorxor', 'тут мой третий', '2020-06-25 18:35:28'),
(11, 18, 'xorxor', ',.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx,.dma sdlak sdlkcxz;lkxc ;lzkx', '2020-06-25 18:43:19'),
(12, 18, 'xorxor', '</script> alert(1); </scipt>', '2020-06-25 18:43:44'),
(13, 18, 'xorxor', 'Fjaskljalk sjclk xjclzj xcljxz clj ljjlksajdlasjlkd jalsd jlk2je lkjlkdjlksad lkas d', '2020-06-25 18:50:26'),
(14, 3, 'xorxor', 'Первый комент', '2020-06-25 18:52:51'),
(15, 22, 'xorxor', 'Нечего не понятно', '2020-06-25 19:03:38'),
(16, 10, 'xorxor', 'khkhjk', '2020-06-25 19:14:39'),
(17, 22, 'rox', 'lkj slkjvx lkcjvlx cjvl kxcjv; lzkjwe;lrk j', '2020-06-26 14:43:51');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `author_id`, `date`) VALUES
(1, 'Лолита', 1, '2020-06-24 18:11:56'),
(2, 'Приглашение на казнь', 1, '2020-06-24 18:11:56'),
(3, 'Великий Гэтсби', 2, '2020-06-24 18:13:15'),
(4, 'Последний магнат', 2, '2020-06-24 18:13:15'),
(6, 'Пьющий пациент', 2, '2020-06-24 18:13:53'),
(7, 'Герой Стивен', 3, '2020-06-24 18:14:47'),
(8, 'Недобрый час', 4, '2020-06-24 18:16:25'),
(9, 'Сто лет одиночества', 4, '2020-06-24 18:16:25'),
(10, 'Осень патриарха', 4, '2020-06-24 18:16:49'),
(11, 'По морю прочь', 5, '2020-06-24 18:17:28'),
(12, 'Война и мир ', 6, '2020-06-24 18:18:42'),
(13, 'Анна Каренина ', 6, '2020-06-24 18:18:42'),
(14, 'Воскресение ', 6, '2020-06-24 18:19:34'),
(15, 'Кавказский пленник ', 6, '2020-06-24 18:19:34'),
(16, 'Хаджи-Мурат ', 6, '2020-06-24 18:20:06'),
(17, 'Севастопольские рассказы ', 6, '2020-06-24 18:20:06'),
(18, 'Мадам Бовари', 7, '2020-06-24 18:20:58'),
(19, 'Саламбо', 7, '2020-06-24 18:20:58'),
(20, 'Налегке', 8, '2020-06-24 18:21:54'),
(21, 'Преступления и наказания', 14, '2020-06-25 14:17:00'),
(22, 'Ночь нежна', 2, '2020-06-25 14:18:36');

-- --------------------------------------------------------

--
-- Структура таблицы `random`
--

CREATE TABLE `random` (
  `id` int(11) NOT NULL,
  `rand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `random`
--

INSERT INTO `random` (`id`, `rand`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 123123),
(7, 2147483647),
(8, 888),
(9, 7),
(10, 790989),
(11, 790989),
(12, 8932034);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bookcomments`
--
ALTER TABLE `bookcomments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `random`
--
ALTER TABLE `random`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `bookcomments`
--
ALTER TABLE `bookcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `random`
--
ALTER TABLE `random`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
