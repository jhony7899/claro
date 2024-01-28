-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-07-2021 a las 15:49:05
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nanoplus_data`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(200) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `icon` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `pagina` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `sub_pagina` varchar(150) NOT NULL,
  `ubi` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombre`, `icon`, `url`, `pagina`, `sub_pagina`, `ubi`) VALUES
(1, 'TABLERO', '', 'https://cotizar.nanoplush.com/panel/', 'index', '', 'Usuario'),
(2, 'COTIZACIONES', '', 'https://cotizar.nanoplush.com/panel/', 'cotizar', '', 'Usuario'),
(3, 'FACTURACION', '', 'https://cotizar.nanoplush.com/panel/', 'facturar', '', 'Usuario'),
(4, 'CLIENTES', '', 'https://cotizar.nanoplush.com/panel/', 'clientes', '', 'Usuario'),
(5, 'CONSULTA', '', 'https://cotizar.nanoplush.com/panel/', 'consulta', '', 'Usuario'),
(6, 'PRODUCTOS', '', 'https://cotizar.nanoplush.com/panel/', 'productos', '', 'Usuario'),


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
