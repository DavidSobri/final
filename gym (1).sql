-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2024 a las 14:36:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`usuario`, `contraseña`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `ID_Sesion` int(2) NOT NULL,
  `ID_Usuario` int(2) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora_de_entrada` varchar(5) NOT NULL,
  `Hora_de_salida` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`ID_Sesion`, `ID_Usuario`, `Fecha`, `Hora_de_entrada`, `Hora_de_salida`) VALUES
(6, 2, '2024-02-06', '16', '17'),
(7, 2, '2024-02-06', '17', '18'),
(8, 2, '2024-02-06', '18:00', '19:00'),
(9, 3, '2024-02-06', '18:00', '20:00'),
(10, 3, '2024-02-06', '18:00', '19:00'),
(11, 6, '2024-02-06', '43', '23'),
(12, 6, '2024-02-06', '16:00', '16:01'),
(13, 9, '2024-02-06', '14:00', '15:00'),
(14, 9, '2024-02-14', '17:00', '18:00'),
(15, 9, '2024-02-15', '00:00', '23:59'),
(16, 11, '2024-02-06', '17:00', '18:00'),
(17, 10, '2024-02-06', '17:00', '18:00'),
(18, 10, '2024-02-21', '12:00', '23:59'),
(19, 13, '2024-02-15', '00:00', '23:59'),
(20, 13, '2024-02-20', '15:00', '00:00'),
(21, 13, '2024-02-21', '03:00', '23:00'),
(22, 11, '2024-02-06', '17:00', '18:00'),
(23, 10, '2024-02-06', '12:00', '12:01'),
(24, 14, '2024-02-06', '15:00', '16:00'),
(25, 11, '2024-02-06', '18:00', '19:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(2) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Fecha_inscripcion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Fecha_inscripcion`) VALUES
(11, 'Jose Manuel', '2024-03-01'),
(14, 'Juan', '2024-02-06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`ID_Sesion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `ID_Sesion` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
