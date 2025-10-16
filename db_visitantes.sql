-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 16-10-2025 a las 07:31:42
-- Versión del servidor: 8.0.43
-- Versión de PHP: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_visitantes`
--
CREATE DATABASE IF NOT EXISTS `db_visitantes` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci;
USE `db_visitantes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_visitante`
--

CREATE TABLE `tbl_visitante` (
  `idVisitante` int NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `carnet` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `mensaje` text COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_visitante`
--
ALTER TABLE `tbl_visitante`
  ADD PRIMARY KEY (`idVisitante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_visitante`
--
ALTER TABLE `tbl_visitante`
  MODIFY `idVisitante` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
