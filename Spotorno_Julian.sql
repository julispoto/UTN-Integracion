-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-05-2024 a las 08:11:07
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id22120612_listado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listado`
--

CREATE TABLE `listado` (
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `dni` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `listado`
--

INSERT INTO `listado` (`firstname`, `lastname`, `dni`, `email`, `city`) VALUES
('Carlo', 'Kelsow', '25488745', 'cmagno@gmail.com', 'Bayern'),
('Ana', 'Jumer', '33558745', 'amulate@hotmail.com', 'Montevideo'),
('Julio', 'Pinto', '25987457', 'jmorelli@hotmail.com', 'Asuncion'),
('Laura', 'Gates', '19487995', 'lgates@gmail.com', 'Managua');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
