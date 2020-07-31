-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2020 a las 23:08:27
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stamppdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_cliente`
--

CREATE TABLE `imagen_cliente` (
  `ID` int(5) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `URL` varchar(65) NOT NULL,
  `ID_Cliente` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagen_cliente`
--

INSERT INTO `imagen_cliente` (`ID`, `Nombre`, `URL`, `ID_Cliente`) VALUES
(1, 'batman', '0', 1),
(2, 'batman', '0', 1),
(3, 'batman', '0', 1),
(4, 'batman', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_estampador`
--

CREATE TABLE `imagen_estampador` (
  `ID` int(5) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `URL` varchar(65) NOT NULL,
  `ID_Estampador` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `Id_Prenda` int(11) NOT NULL,
  `TipoPrenda` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`Id_Prenda`, `TipoPrenda`) VALUES
(1, 'Camisa'),
(2, 'Pantalón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrarcomprador`
--

CREATE TABLE `registrarcomprador` (
  `id_RegistroComprador` int(11) NOT NULL,
  `nombreUsuario` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(70) NOT NULL,
  `fechaNacimiento` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `verificarContrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrarcomprador`
--

INSERT INTO `registrarcomprador` (`id_RegistroComprador`, `nombreUsuario`, `nombre`, `apellidos`, `fechaNacimiento`, `email`, `contrasena`, `verificarContrasena`) VALUES
(1, 'marcela98', 'Marcela', 'Henao', '14/05/1998', 'diana.1701521022@ucaldas.edu.co', 'marce', 'marce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicituddiseño`
--

CREATE TABLE `solicituddiseño` (
  `Id_solicitudDiseño` int(11) NOT NULL,
  `Id_Prenda` int(11) NOT NULL,
  `Id_Talla` int(11) NOT NULL,
  `Color` varchar(11) NOT NULL,
  `Id_tela` int(11) NOT NULL,
  `DescripcionDiseño` text NOT NULL,
  `Id_imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicituddiseño`
--

INSERT INTO `solicituddiseño` (`Id_solicitudDiseño`, `Id_Prenda`, `Id_Talla`, `Color`, `Id_tela`, `DescripcionDiseño`, `Id_imagen`) VALUES
(1, 1, 1, '#6366eb', 1, 'La camisa la tipo esqueleto', 14),
(2 1, 1, '#000000', 1, '  Escribe tus comentarios aqubjhvjví...', 14),
(3, 1, 1, '#a44141', 1, 'La camisa tipo esqueleto', 14),
(4, 1, 1, '#a44141', 1, 'La camisa tipo esqueleto', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `Id_Talla` int(11) NOT NULL,
  `Nombre` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`Id_Talla`, `Nombre`) VALUES
(1, 'XL'),
(2, 'XXL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telas`
--

CREATE TABLE `telas` (
  `Id_tela` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telas`
--

INSERT INTO `telas` (`Id_tela`, `Nombre`) VALUES
(1, 'Tela1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagen_cliente`
--
ALTER TABLE `imagen_cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `imagen_estampador`
--
ALTER TABLE `imagen_estampador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`Id_Prenda`);

--
-- Indices de la tabla `registrarcomprador`
--
ALTER TABLE `registrarcomprador`
  ADD PRIMARY KEY (`id_RegistroComprador`),
  ADD UNIQUE KEY `id_RegistroComprador` (`nombreUsuario`);

--
-- Indices de la tabla `solicituddiseño`
--
ALTER TABLE `solicituddiseño`
  ADD PRIMARY KEY (`Id_solicitudDiseño`),
  ADD KEY `fk_IdPrenda` (`Id_Prenda`),
  ADD KEY `fk_IdTalla` (`Id_Talla`),
  ADD KEY `fk_IdImagen` (`Id_imagen`),
  ADD KEY `fk_Idtela` (`Id_tela`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`Id_Talla`);

--
-- Indices de la tabla `telas`
--
ALTER TABLE `telas`
  ADD PRIMARY KEY (`Id_tela`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen_cliente`
--
ALTER TABLE `imagen_cliente`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `imagen_estampador`
--
ALTER TABLE `imagen_estampador`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `Id_Prenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registrarcomprador`
--
ALTER TABLE `registrarcomprador`
  MODIFY `id_RegistroComprador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicituddiseño`
--
ALTER TABLE `solicituddiseño`
  MODIFY `Id_solicitudDiseño` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `Id_Talla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telas`
--
ALTER TABLE `telas`
  MODIFY `Id_tela` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `solicituddiseño`
--
ALTER TABLE `solicituddiseño`
  ADD CONSTRAINT `fk_Idtela` FOREIGN KEY (`Id_tela`) REFERENCES `telas` (`Id_tela`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
