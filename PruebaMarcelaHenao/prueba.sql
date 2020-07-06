-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2020 a las 02:55:07
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularioregistro`
--

CREATE TABLE `formularioregistro` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `fecharegistro` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formularioregistro`
--

INSERT INTO `formularioregistro` (`id`, `nombre`, `apellido`, `email`, `contraseña`, `fecharegistro`) VALUES
(1, 'Diana Marcela', 'Henao Montoya', 'diana.1701521022@ucaldas.edu.co', 'OVIDIOHENAO50', '05/07/20'),
(2, 'Adiela', 'Montoya', 'madre@gmail.com', 'adielamontoya', '05/07/20'),
(3, 'Ovidio', 'Henao', 'padre@gmail.com', 'ovidiohenao', '05/07/20'),
(6, 'Pablito', 'Pérez', 'pablitop@gmail.com', 'pablitop', '06/07/20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formularioregistro`
--
ALTER TABLE `formularioregistro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formularioregistro`
--
ALTER TABLE `formularioregistro`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
