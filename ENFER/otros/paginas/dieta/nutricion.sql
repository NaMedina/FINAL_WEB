-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2014 a las 04:05:47
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `nutricion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aporte_nutri`
--

CREATE TABLE IF NOT EXISTS `aporte_nutri` (
  `id_aporte` int(5) NOT NULL,
  `verdura_a` int(5) NOT NULL,
  `fruta_a` int(5) NOT NULL,
  `cereal_a` int(5) NOT NULL,
  `cereal_b` int(5) NOT NULL,
  `leguminosas` int(5) NOT NULL,
  `animal_a` int(5) NOT NULL,
  `animal_b` int(5) NOT NULL,
  `animal_c` int(5) NOT NULL,
  `animal_d` int(5) NOT NULL,
  `leche_a` int(5) NOT NULL,
  `leche_b` int(5) NOT NULL,
  `leche_c` int(5) NOT NULL,
  `leche_d` int(5) NOT NULL,
  `aceite_a` int(5) NOT NULL,
  `aceite_b` int(5) NOT NULL,
  `azucares_a` int(5) NOT NULL,
  `azucares_b` int(5) NOT NULL,
  `id_diagnostico` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE IF NOT EXISTS `comida` (
  `PlatoPrinc` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Acomp` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `TortiPan` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bebida` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Otros` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `id_dia` enum('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado') COLLATE utf8_spanish_ci NOT NULL,
  `id_diagnostico` int(6) NOT NULL,
  `id_comidas` enum('Desayuno','Comida','Cena') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`PlatoPrinc`, `Acomp`, `TortiPan`, `Bebida`, `Otros`, `id_dia`, `id_diagnostico`, `id_comidas`) VALUES
('Arrachera', 'Arroz', 'Tortilla', 'Limonada mineral', 'Pay de Queso', 'Domingo', 12, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE IF NOT EXISTS `dias` (
  `id_dia` enum('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado') COLLATE utf8_spanish_ci NOT NULL,
  `id_comidas` enum('Desayuno','Comida','Cena') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `percentpctmm`
--

CREATE TABLE IF NOT EXISTS `percentpctmm` (
  `edad1` float NOT NULL,
  `edad2` float NOT NULL,
  `5` float NOT NULL,
  `10` float NOT NULL,
  `15` float NOT NULL,
  `25` float NOT NULL,
  `50` float NOT NULL,
  `75` float NOT NULL,
  `85` float NOT NULL,
  `90` float NOT NULL,
  `95` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `percentpctmm`
--

INSERT INTO `percentpctmm` (`edad1`, `edad2`, `5`, `10`, `15`, `25`, `50`, `75`, `85`, `90`, `95`) VALUES
(18, 24.9, 4.5, 5, 6, 7, 10, 15, 18, 20, 24),
(25, 29.9, 5, 5.5, 6, 7.5, 11, 16, 19, 21, 25),
(30, 34.9, 5, 6, 7, 8.5, 12, 16.5, 20, 22, 25.5),
(35, 39.9, 5, 6, 7, 8.5, 12, 16.5, 20, 22, 25.5),
(40, 44.9, 5, 6, 7, 8.5, 12, 16, 19, 22, 26),
(45, 49.9, 5.5, 6.5, 7, 9, 12, 16, 19, 21, 24.5),
(50, 54.9, 5.5, 6.5, 7.5, 8.5, 12, 15.5, 19, 20.5, 25),
(55, 59.9, 5, 6, 7, 8.5, 11.5, 15, 18, 20.5, 24),
(60, 64.9, 5, 6.5, 7, 8.5, 11.5, 15, 18, 20, 23.5),
(65, 69.9, 5, 6, 6.5, 8, 11.5, 15, 18, 20, 23),
(70, 74.9, 5, 6, 7, 8, 11.5, 15, 18, 20, 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aporte_nutri`
--
ALTER TABLE `aporte_nutri`
 ADD PRIMARY KEY (`id_diagnostico`), ADD KEY `id_diagnostico` (`id_diagnostico`), ADD KEY `id_aporte` (`id_aporte`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
