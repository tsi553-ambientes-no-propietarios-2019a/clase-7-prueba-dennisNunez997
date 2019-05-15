-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-05-2019 a las 04:35:18
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `cod` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `nomProd` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `tipoProd` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `canProd` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `preProd` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod`, `nomProd`, `tipoProd`, `canProd`, `preProd`) VALUES
('das', 'res', 'carnes', '12', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

DROP TABLE IF EXISTS `tienda`;
CREATE TABLE IF NOT EXISTS `tienda` (
  `nombre_tienda` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `dir_tienda` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `usuario_tienda` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `clave_tienda` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `nombre_tienda` (`nombre_tienda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`nombre_tienda`, `dir_tienda`, `usuario_tienda`, `clave_tienda`) VALUES
('aki', 'solanda', 'dennis', '1234'),
('megamaxi', 'recreo', 'ana', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
