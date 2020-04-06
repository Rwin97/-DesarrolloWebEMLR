-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2020 a las 21:00:16
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
-- Base de datos: `bd_coronavirus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perosnas`
--

CREATE TABLE `perosnas` (
  `ID` int(11) NOT NULL,
  `Nombres` varchar(40) COLLATE utf8_bin NOT NULL,
  `Apellidos` varchar(40) COLLATE utf8_bin NOT NULL,
  `Sexo` char(1) COLLATE utf8_bin NOT NULL,
  `Edad` tinyint(11) NOT NULL,
  `Celular` bigint(20) NOT NULL,
  `Estado` char(1) COLLATE utf8_bin NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `perosnas`
--

INSERT INTO `perosnas` (`ID`, `Nombres`, `Apellidos`, `Sexo`, `Edad`, `Celular`, `Estado`, `Fecha`) VALUES
(0, 'Juan', 'Perez', 'M', 30, 77777789, 'C', '2020-03-12'),
(0, 'Juana', 'Camargo', 'F', 40, 77256035, 'S', '2020-04-01'),
(0, 'Juan', 'Pasten', 'M', 50, 75864839, 'S', '2020-03-25'),
(0, 'Andrea', 'Rosales', 'F', 25, 62351424, 'C', '2020-03-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
