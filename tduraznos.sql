-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 20:11:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tduraznos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeduraznos`
--

CREATE TABLE `tiposdeduraznos` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Origen` varchar(50) NOT NULL,
  `Caracteristicas` varchar(50) NOT NULL,
  `Sabor` int(10) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Peso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposdeduraznos`
--

INSERT INTO `tiposdeduraznos` (`id`, `Nombre`, `Origen`, `Caracteristicas`, `Sabor`, `Color`, `Peso`) VALUES
(1, 'Durazno Amarillo', 'México', 'Jugoso-tamaño mediano', 9, 'Amarillo', 150),
(2, 'Durazno Blanco', 'España', 'Dulce-piel suave', 8, 'Blanco-verdoso', 130),
(3, 'Durazno donut', 'Estados Unidos', 'Forma aplanada', 7, 'Amarillo-rojizo', 150),
(4, 'Durazno rojo', 'Argentina', 'Aromático', 9, 'Rojo intenso', 140),
(5, 'Durazno melocoton', 'Italia', 'Textura firme', 8, 'Naranja', 160),
(6, 'Durazno Paraguayo', 'Paraguay', 'Piel fina', 6, 'Rojo-amarillo', 110),
(7, 'Durazno Algodon', 'China', 'Textura suave', 5, 'Blanco', 100),
(8, 'Durazno diamante', 'Chile', 'Piel brillante', 10, 'Amarillo-rojizo', 170),
(9, 'Durazno Melba', 'Francia', 'Aromatico', 8, 'Naranja-rojizo', 140),
(10, 'Durazno tropical', 'Brasil', 'Piel gruesa', 9, 'Amarillo-verde', 180);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tiposdeduraznos`
--
ALTER TABLE `tiposdeduraznos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tiposdeduraznos`
--
ALTER TABLE `tiposdeduraznos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
