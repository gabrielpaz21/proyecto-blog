-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2019 a las 23:41:07
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbddblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(25) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Comentario` text NOT NULL,
  `Imagen` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `Titulo`, `Fecha`, `Comentario`, `Imagen`) VALUES
(3, 'gabriel publica', '2019-04-14 02:24:49', 'MI PRIMERA PUBLICACIÃ“N EN MI PRIMER BLOG', 'Desert.jpg'),
(4, 'gabriel publica', '2019-04-14 02:50:42', 'MI PRIMERA PUBLICACIÃ“N EN MI PRIMER BLOG', 'Desert.jpg'),
(5, 'gabriel publica', '2019-04-14 02:58:23', 'MI PRIMERA PUBLICACIÃ“N EN MI PRIMER BLOG', 'Desert.jpg'),
(6, 'gabriel publica', '2019-04-14 03:56:17', 'asdasdasdasdasddsadasdadsadsadsa', 'Lighthouse.jpg'),
(7, 'gabriel publica su tercer', '2019-04-16 05:14:12', 'asdasdasdaskdasdkajskdnakdsnakdnakldsanskldnakdlnaklsndaklndkasndkland\r\n', 'Tulips.jpg'),
(8, 'gabriel publica su tercer', '2019-04-16 05:15:01', 'asdasdasdaskdasdkajskdnakdsnakdnakldsanskldnakdlnaklsndaklndkasndkland\r\n', 'Tulips.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
