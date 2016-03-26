-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2015 a las 06:55:50
-- Versión del servidor: 5.5.42-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clglobal_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guias`
--

CREATE TABLE IF NOT EXISTS `guias` (
  `guia` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `tracking` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `libras` varchar(100) NOT NULL,
  `volumen` varchar(100) NOT NULL,
  `costo` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `dimensiones` varchar(100) DEFAULT NULL,
  `ext` varchar(100) DEFAULT NULL,
  `estatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`guia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `guias`
--

INSERT INTO `guias` (`guia`, `usuario`, `tracking`, `direccion`, `libras`, `volumen`, `costo`, `des`, `foto`, `dimensiones`, `ext`, `estatus`) VALUES
(1, '1', '00000', 'caraballeda', '25', '45', '00', 'guia de prueba', 'H85qf', '45x34', 'jpg', 'En Tramite');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
