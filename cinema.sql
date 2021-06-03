-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 03 2021 г., 14:39
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(100) NOT NULL,
  `t_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `rating` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `t_id`, `name`, `year`, `genre`, `desc`, `rating`, `image`, `video_url`) VALUES
(1, 1, 'Inception', 2010, ' Action, Adventure, ', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', 87, 'image_db/inception.jpg', 'https://www.youtube.com/watch?v=8hP9D6kZseM'),
(2, 5, 'Godzilla vs Kong', 2021, 'Action', 'The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against one another - the fearsome Godzilla and the mighty Kong - with humanity caught in the balance.', 65, 'image_db/Godzilla_vs_Kong.jpg', 'https://www.youtube.com/watch?v=odM92ap8_c0'),
(3, 3, 'The Dark Knight', 2008, 'Action', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.', 90, 'image_db/The_Dark_Knight.jpg', 'https://www.youtube.com/watch?v=LDG9bisJEaI'),
(4, 7, 'Parasite', 2019, 'Thriller', 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.', 86, 'image_db/Parasite.jpg', 'https://www.youtube.com/watch?v=5xH0HfJHsaY'),
(5, 2, 'Joker', 2019, 'Crime', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 84, 'image_db/Joker.jpg', 'https://www.youtube.com/watch?v=zAGVQLHvwOY'),
(6, 1, 'Requiem for a Dream', 2000, 'Drama', 'The drug-induced utopias of four Coney Island people are shattered when their addictions run deep.', 83, 'image_db/Requiem_for_a_Dream.jpg', 'https://www.youtube.com/watch?v=jzk-lmU4KZ4'),
(7, 5, 'Shutter Island', 2010, 'Mystery', 'In 1954, a U.S. Marshal investigates the disappearance of a murderer who escaped from a hospital for the criminally insane.', 82, 'image_db/Shutter_Island.jpg', 'https://www.youtube.com/watch?v=5iaYLCiq5RM'),
(8, 9, 'Mortal Kombat', 2021, 'Fantasy', 'MMA fighter Cole Young seeks out Earth\'s greatest champions in order to stand against the enemies of Outworld in a high stakes battle for the universe.', 62, 'image_db/Mortal_Kombat.jpg', 'https://www.youtube.com/watch?v=NYH2sLid0Zc'),
(9, 4, 'Tenet', 2020, 'Action', 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.', 74, 'image_db/Tenet.jpg', 'https://www.youtube.com/watch?v=L3pk_TBkihU'),
(10, 4, 'WALL-E', 2008, 'Animation', 'In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.', 84, 'image_db/WALL-E.jpg', 'https://www.youtube.com/watch?v=CZ1CATNbXg0'),
(11, 9, '3 Idiots', 2009, 'Comedy', 'Two friends are searching for their long lost companion. They revisit their college days and recall the memories of their friend who inspired them to think differently, even as the rest of the world called them \"idiots\".', 84, 'image_db/3Idiots.jpg', 'https://www.youtube.com/watch?v=K0eDlFX9GMc'),
(12, 5, 'Leon', 1994, 'Action, Drama', 'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. An unusual relationship forms as she becomes his protégée and learns the assassin\'s trade.', 86, 'image_db/leon.jpg', 'youtube.com/watch?v=jawVxq1Iyl0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
