-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 20-11-2022 a las 20:30:07
-- Versión del servidor: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- Versión de PHP: 7.4.20

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
-- Estructura de tabla para la tabla `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `izen_abizenak` varchar(80) NOT NULL,
  `nan` char(9) NOT NULL,
  `telefonoa` int(9) NOT NULL,
  `email` varchar(80) NOT NULL,
  `jaiotze_data` date NOT NULL,
  `pasahitza` varchar(3000) NOT NULL,
  `blokeatuta` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`izen_abizenak`, `nan`, `telefonoa`, `email`, `jaiotze_data`, `pasahitza`, `blokeatuta`) VALUES
('markel', '20975528B', 678564534, 'paco@gmail.com', '2002-02-12', '2fdcf00eb4c001c84138a5d8013345b9', 0),
('paco', '45753212w', 678453425, 'paco@gmail.com', '2001-11-12', '139bb724389fd85d84d081301e9620a7', 6),
('imanol', '45951258h', 678464352, 'paco.garcia@gmail.com', '2001-11-12', '31d14172bc1cf048c6dab1092e3d9915', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erosketa`
--

CREATE TABLE `erosketa` (
  `erabiltzaileNan` char(9) NOT NULL,
  `jokoId` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `erosketa`
--

INSERT INTO `erosketa` (`erabiltzaileNan`, `jokoId`) VALUES
('45951258h', 1),
('45951258h', 2),
('45951258h', 3),
('45951258h', 5),
('45951258h', 6),
('45951258h', 8);

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
  `irudia` varchar(200) NOT NULL,
  `Balorazioa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jokoak`
--

INSERT INTO `jokoak` (`izena`, `id`, `prezioa`, `mota`, `adin_minimoa`, `deskribapena`, `irudia`, `Balorazioa`) VALUES
('COD', 1, 30, 'shooter', 18, 'shooter joko bat da', 'https://i.pinimg.com/736x/ab/40/f4/ab40f48fae759e94ee9c636bbbcba00d.jpg', 8),
('COC', 2, 100, 'Estrategia', 18, 'Estrategia', 'https://play-lh.googleusercontent.com/JMNWaZel_qg6qj8T0bjX5OeLvXdka4hxzT_rsSVe5qQWHg798GmJcZetlQYm9-VlTsk', 9),
('CR', 3, 10, 'estrategia', 6, 'estrategia', 'https://play-lh.googleusercontent.com/rIvZQ_H3hfmexC8vurmLczLtMNBFtxCEdmb2NwkSPz2ZuJJ5nRPD0HbSJ7YTyFGdADQ', 10),
('fortnite', 4, 0, 'shooter', 9, 'shooter jokoa da', 'https://w0.peakpx.com/wallpaper/211/277/HD-wallpaper-fortnite-logo-epic-games.jpg', 1),
('hello kitty', 5, 9, 'umeentzako', 3, 'umeentzako jokoa', 'https://img2.freepng.es/20180519/igu/kisspng-hello-kitty-logo-sanrio-clip-art-5afffe1e0954a1.2938408315267261740382.jpg', 0),
('mario', 6, 25, 'karrera ', 18, 'karrera', 'https://mario.wiki.gallery/images/c/cb/Mario_Kart_8_-_Mushroom_Cup_logo.svg', 9),
('minecraft', 7, 10, 'konstruziozkoa', 9, 'konstrukzio jokoa da', 'https://cdn.worldvectorlogo.com/logos/minecraft-1.svg', 5),
('multiversus', 8, 0, 'Borroka', 18, 'Borroka jokoa da', 'https://preview.redd.it/qviue6g2e5w71.png?auto=webp&s=6f27497f952d52dddbc9288a29eb03fda992e814', 6),
('pokemon', 9, 35, 'Entretenimendua', 10, 'Entrenimendu jokoa da', 'https://www.freepnglogos.com/uploads/pokemon-symbol-logo-png-31.png', 4),
('township', 10, 10, 'Estrategia', 6, 'Estrategia jokoa da', 'https://upload.wikimedia.org/wikipedia/en/f/f7/Township_App_Icon.jpg', 3),
('valorant', 11, 25, 'shooter', 18, 'shooter jokoa da', 'https://images.cults3d.com/4QqRV9kLYYEuw9ur_X3yjQl1sjk=/516x516/https://files.cults3d.com/uploaders/15024335/illustration-file/a86d53e4-2bd9-4a8f-9550-986686c3131a/gi0mAjIh_400x400.png\r\n', 9),
('watchdog', 12, 40, 'Mundu zibernetikoa', 18, 'mundu zibernetikoaren jokoa', 'https://i.pinimg.com/736x/71/76/dc/7176dceb89f7d390c539027d690d132d--dog-logo-logo-s.jpg', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`nan`);

--
-- Indices de la tabla `erosketa`
--
ALTER TABLE `erosketa`
  ADD PRIMARY KEY (`erabiltzaileNan`,`jokoId`),
  ADD KEY `jokoId` (`jokoId`);

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

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `erosketa`
--
ALTER TABLE `erosketa`
  ADD CONSTRAINT `erosketa_ibfk_1` FOREIGN KEY (`erabiltzaileNan`) REFERENCES `erabiltzaileak` (`nan`),
  ADD CONSTRAINT `erosketa_ibfk_2` FOREIGN KEY (`jokoId`) REFERENCES `jokoak` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
