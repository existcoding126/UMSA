-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2024 a las 23:11:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bienes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` longtext NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `wc` int(11) NOT NULL,
  `estacionamiento` int(11) NOT NULL,
  `creado` date NOT NULL,
  `ESTADO` varchar(10) NOT NULL,
  `idvendedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `creado`, `ESTADO`, `idvendedores`) VALUES
(1, 'departamento', 100000.00, '', 'esta piso 20 \r\nDe piso madera', 5, 3, 1, '2024-09-10', 'inactivo', 1),
(2, 'departamento 2', 105000.00, '', 'Esta en el piso 15 w busch', 5, 3, 2, '2024-09-10', 'activo', 4),
(3, 'casa', 150000.00, '', 'achumani', 6, 3, 3, '2024-09-10', 'inactivo', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `idvendedores` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `paterno` varchar(45) NOT NULL,
  `materno` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `ESTADO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`idvendedores`, `nombre`, `paterno`, `materno`, `telefono`, `ESTADO`) VALUES
(1, 'Juana', 'Perez', 'Lopez', '12345', 'activo'),
(3, 'Pedro', 'Salas', 'Azo', '21545', 'inactivo'),
(4, 'Ana', 'Torrez', 'Diaz', '1234', 'activo'),
(5, 'Manuel', 'Miranda', 'Perez', '123', 'activo'),
(6, 'Maria', 'Rosas', 'Vargas', '22222', 'inactivo'),
(7, 'ana', 'lopez', 'mamani', '123', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`idvendedores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
