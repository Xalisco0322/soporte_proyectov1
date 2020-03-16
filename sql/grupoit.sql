-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2020 a las 04:24:32
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupoit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(5) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `grupo` varchar(50) NOT NULL,
  `serie` varchar(40) NOT NULL,
  `imei` varchar(40) NOT NULL,
  `sim` varchar(40) NOT NULL,
  `linea` varchar(40) NOT NULL,
  `alias` varchar(40) NOT NULL,
  `placas` varchar(40) NOT NULL,
  `fecha` varchar(40) NOT NULL,
  `plataforma` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `empresa`, `nombre`, `grupo`, `serie`, `imei`, `sim`, `linea`, `alias`, `placas`, `fecha`, `plataforma`) VALUES
(7, 'Transporte Jaguares', 'Alberto Gonzalez', 'Transporte Jaguares', 'SL1445-100234', '357042063146279', '89314404000106757033', 'vodafone', '275-DW', '275-DW', '07 de marzo', 'gateway');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
