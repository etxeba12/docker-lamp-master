-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 10-10-2022 a las 19:24:07
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
('45951258H', 8),
('78995188D', 3),
('78995188D', 4),
('78995188D', 9),
('78995188D', 11),
('78995188D', 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `erosketa`
--
ALTER TABLE `erosketa`
  ADD PRIMARY KEY (`erabiltzaileNan`,`jokoId`),
  ADD KEY `jokoId` (`jokoId`);

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
