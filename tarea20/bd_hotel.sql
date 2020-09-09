-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2020 a las 05:38:55
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
-- Base de datos: `bd_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoshabitación`
--

CREATE TABLE `fotoshabitación` (
  `ID` int(11) NOT NULL,
  `IdHabitación` int(11) NOT NULL,
  `Fotografía` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitación`
--

CREATE TABLE `habitación` (
  `ID` int(11) NOT NULL,
  `Nro` int(11) NOT NULL,
  `IdTipoHabitacion` varchar(70) COLLATE utf8_bin NOT NULL,
  `BañoPrivado` char(5) COLLATE utf8_bin NOT NULL,
  `Espacio` decimal(7,2) NOT NULL,
  `Precio` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `habitación`
--

INSERT INTO `habitación` (`ID`, `Nro`, `IdTipoHabitacion`, `BañoPrivado`, `Espacio`, `Precio`) VALUES
(11, 6, '9', 'Si', '152.51', '12.00'),
(15, 8, '1', 'Si', '153.00', '23.00'),
(16, 2, '12', 'NO', '152.50', '41.00'),
(17, 3, '1', 'Si', '152.50', '26.00'),
(19, 7, '12', 'NO', '152.50', '30.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `ID` int(11) NOT NULL,
  `CodigoReserva` varchar(5) COLLATE utf8_bin NOT NULL,
  `FechaIngreso` date NOT NULL,
  `FechaSalida` date NOT NULL,
  `IdHabitación` int(11) NOT NULL,
  `Precio` decimal(7,2) NOT NULL,
  `Pago` bit(5) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `Apellidos` varchar(40) COLLATE utf8_bin NOT NULL,
  `CorreoElectronico` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `IdRol` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Descripcion` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`IdRol`, `id`, `Descripcion`) VALUES
(1, 1, 'Usuario'),
(2, 2, 'Recepcionista'),
(2, 3, 'Recepcionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitaciones`
--

CREATE TABLE `tipohabitaciones` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(70) COLLATE utf8_bin NOT NULL,
  `NroCamas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipohabitaciones`
--

INSERT INTO `tipohabitaciones` (`ID`, `Descripcion`, `NroCamas`) VALUES
(1, 'Habitación simple', 3),
(12, 'simple', 5),
(13, 'Doble amplia', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Correo` varchar(40) COLLATE utf8_bin NOT NULL,
  `Password` varchar(40) COLLATE utf8_bin NOT NULL,
  `Nombres` varchar(40) COLLATE utf8_bin NOT NULL,
  `Apellidos` varchar(40) COLLATE utf8_bin NOT NULL,
  `IdRol` char(1) COLLATE utf8_bin NOT NULL,
  `Estado` char(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Correo`, `Password`, `Nombres`, `Apellidos`, `IdRol`, `Estado`) VALUES
(1, 'Usuario@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Juan', 'Perezz', '1', 'E'),
(2, 'Recepcionista1@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Jose', 'Lopez', '2', 'E'),
(3, 'user3@gmail.com', 'd5f12e53a182c062b6bf30c1445153faff12269a', 'Andrea', 'Montes', '2', 'E'),
(4, 'recepcionsita2@gmail.com', '54321', 'Armando', 'Carpas', '2', 'H');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `habitación`
--
ALTER TABLE `habitación`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipohabitaciones`
--
ALTER TABLE `tipohabitaciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `habitación`
--
ALTER TABLE `habitación`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tipohabitaciones`
--
ALTER TABLE `tipohabitaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
