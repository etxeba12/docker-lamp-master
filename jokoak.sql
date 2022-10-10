-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 10-10-2022 a las 19:24:01
-- Versión del servidor: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jokoak`
--

CREATE TABLE `jokoak` (
  `izena` varchar(80) NOT NULL,
  `id` int(11) NOT NULL,
  `prezioa` int(11) NOT NULL,
  `mota` varchar(80) NOT NULL,
  `adin_minimoa` int(3) NOT NULL,
  `deskribapena` varchar(3000) NOT NULL,
  `irudia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jokoak`
--

INSERT INTO `jokoak` (`izena`, `id`, `prezioa`, `mota`, `adin_minimoa`, `deskribapena`, `irudia`) VALUES
('call of dutty', 1, 30, 'shooter', 18, 'shooter joko bat da', 'https://i.pinimg.com/736x/ab/40/f4/ab40f48fae759e94ee9c636bbbcba00d.jpg'),
('clash of clans', 2, 5, 'Estrategia', 6, 'Estrategia joko bat da', 'https://play-lh.googleusercontent.com/JMNWaZel_qg6qj8T0bjX5OeLvXdka4hxzT_rsSVe5qQWHg798GmJcZetlQYm9-VlTsk'),
('clash royale', 3, 0, 'estrategia', 6, 'estrategia jokoa da', 'https://play-lh.googleusercontent.com/rIvZQ_H3hfmexC8vurmLczLtMNBFtxCEdmb2NwkSPz2ZuJJ5nRPD0HbSJ7YTyFGdADQ'),
('fortnite', 4, 0, 'shooter', 9, 'shooter jokoa da', 'https://assets.stickpng.com/images/5b43b818e99939b4572e32ab.png'),
('hello kitty', 5, 9, 'umeentzako', 3, 'umeentzako jokoa', 'https://img2.freepng.es/20180519/igu/kisspng-hello-kitty-logo-sanrio-clip-art-5afffe1e0954a1.2938408315267261740382.jpg'),
('mario kart', 6, 25, 'karrera ', 18, 'karrera jokoa da', 'https://mario.wiki.gallery/images/c/cb/Mario_Kart_8_-_Mushroom_Cup_logo.svg'),
('minecraft', 7, 10, 'konstruziozkoa', 9, 'konstrukzio jokoa da', 'https://cdn.worldvectorlogo.com/logos/minecraft-1.svg'),
('multiversus', 8, 0, 'Borroka', 18, 'Borroka jokoa da', 'https://preview.redd.it/qviue6g2e5w71.png?auto=webp&s=6f27497f952d52dddbc9288a29eb03fda992e814'),
('pokemon', 9, 35, 'Entretenimendua', 10, 'Entrenimendu jokoa da', 'https://www.freepnglogos.com/uploads/pokemon-symbol-logo-png-31.png'),
('township', 10, 10, 'Estrategia', 6, 'Estrategia jokoa da', 'https://upload.wikimedia.org/wikipedia/en/f/f7/Township_App_Icon.jpg'),
('valorant', 11, 25, 'shooter', 18, 'shooter jokoa da', 'https://images.cults3d.com/4QqRV9kLYYEuw9ur_X3yjQl1sjk=/516x516/https://files.cults3d.com/uploaders/15024335/illustration-file/a86d53e4-2bd9-4a8f-9550-986686c3131a/gi0mAjIh_400x400.png\r\n'),
('watchdog', 12, 40, 'Mundu zibernetikoa', 18, 'mundu zibernetikoaren jokoa', 'https://i.pinimg.com/736x/71/76/dc/7176dceb89f7d390c539027d690d132d--dog-logo-logo-s.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jokoak`
--
ALTER TABLE `jokoak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jokoak`
--
ALTER TABLE `jokoak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
