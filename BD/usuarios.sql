-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2015 a las 06:56:15
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `ci` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `dir` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nick`, `pass`, `nombres`, `apellidos`, `ci`, `email`, `pais`, `estado`, `ciudad`, `telefono`, `celular`, `dir`) VALUES
(1, 'kakashi', '123', 'enrique', 'mendoza', '', 'enriquemendoza_162@hotmail.com', 'Venezuela', 'vargas', 'la guaira', '04142130589', '02123101971', 'caraballeda'),
(2, 'CL001', 'O25scgox', 'edwar ', 'lanzon', '', 'elanzon@hotmail.com', 'Venezuela', 'vargas', 'la guaira', '04248388839', '', 'la guaira'),
(3, 'cl002', 'D8hpnhj', 'edgar', 'lanzon', '', 'edgarlanzon@gmail.com', 'Venezuela', 'vargas', 'la guaira', '04142776289', '', 'la guaira'),
(4, 'cl003', 'O81bgplj', 'ronald ', 'caceres', '', 'ron20041@hotmail.com', 'Venezuela', '', 'san antonio', '04143361258', '', 'los teques'),
(5, 'xavierdu', 'E93bboua', 'Xavier ', 'Duque Molina', '', 'xavierduquem@gmail.com', 'Venezuela', 'tachira', 'san cristobal', '04265737157', '04245132160', 'carrera 16 entre calle 9 y 10'),
(6, 'daniel1902', 'B6cvrac', 'DANIEL ALEJANDRO', 'CACERES QUINTANA', '', 'danielcaceres1902@gmail.com', 'Venezuela', 'TACHIRA', 'SAN CRISTÃ“BAL', '04247810076', '02763561254', 'AV.FERRERO TAMAYO CONJ. RESIDENCIAL LA ARBOLEDA EDIF ARAGUANEY PISO 9 APTO 9B'),
(7, 'oldmane', 'E28tkwed', 'JOSE', 'CERA', '', 'josemanuel_cera23@hotmail.com', 'Venezuela', 'DISTRITO CAPITAL', 'CARACAS', '04129198776', '02124828820', 'AV SUR 4 ESQ PILITA A MEMEY RES CARIBE PISO 9 APTO 94 QUINTA CRESPO'),
(8, 'mirage74', 'W66lbcfo', 'jose', 'contreras', '', 'josecon74@gmail.com', 'Venezuela', 'Distrito Capital', 'caracas', '04144901937', '02124280508', 'Urb.Jose Antonio Paez,sector ud4,terraza arauca,edf.31,piso 5,apt.502,Caricuao'),
(9, 'krlos22', 'X79jjvap', 'carlos', 'arismendi', '', 'carlosarismendi22@gmail.com', 'Venezuela', 'distrito capital', 'caracas', '04241731933', '', 'quinta crespo'),
(10, 'RIVERO MARTINEZ CL/001', 'O1spxyx', 'Eduardo', 'Rivero', '', 'alex_666514@hotmail.com', 'Venezuela', 'Carabobo', 'Puerto Cabello', '04123757951', '', 'Cumboto 2 sector 3 av7 casa 11'),
(11, 'freddy03', 'L92yqptt', 'freddy', 'hernandez', '', 'freddyhernandez03@yahoo.es', 'Venezuela', 'vargas', 'la guaira', '04122934556', '02123378601', 'la guaira'),
(12, 'jarvin_ab', 'B51awati', 'jarvin', 'Acendra', '', 'jarvin_ab@hotmail.com', 'Venezuela', 'Distrito Capital', 'Caracas', '04162687042', '02124064599', 'Final Av. San Martin Con Av. La Paz Edificio Bloque Dearmas Meridiano Television'),
(13, 'columnata', 'M69fnqyf', 'Carlos', 'FernÃ¡ndez', '', 'columnata6285@hotmail.com', 'Venezuela', 'Dtto. Capital', 'Caracas', '04244215599', '', 'Av. Intercomunal El Valle, conj. res. Longaray, edif. Oritupano, piso 2, apto #4, Parroquia El Valle'),
(14, 'sunimar', 'V45qnooc', 'sunimar ', 'Abreu ', '', 'mariajose_212010@hotmail.com', 'Venezuela', 'miranda', 'san antonio ', '0414 0127081', '02123738008', 'urb. La rosaleda sur edificio Amacuro piso 13 , san antonio de los altos , edo miranda '),
(15, 'LisMejias', 'W69kawot', 'Lisanny', 'Mejias', '', 'lisjmc_19@hotmail.com', 'Venezuela', 'Distrito Capital', 'Caracas', '0414 9191202', '0212 6718501', 'C.C El Valle Piso 9, Oficina PR7. El Valle -  Caracas'),
(16, 'AROA67', 'E46rbvxd', 'CAROLINA ', 'ROA', '', 'aroa67@gmail.com', 'Venezuela', 'TACHIRA', 'SAN CRISTOBAL', '04163772550', '04262762882', 'CALLE 4 CON CARRERA 9 CASA 63, URB LA TRINIDAD PALO GORDO'),
(17, 'johan 16', 'T17wmvit', 'johan', 'machado', '', 'machadojohan@gmail.com', 'Venezuela', 'D.C', 'caracas', '04143360640', '02124515622', 'SAN MARTIN'),
(18, 'LBRodriguez', 'M46mjhwx', 'Luis Beltran', 'Rodriguez Barroeta', '', 'obarroeta@hotmail.com', 'Venezuela', 'Aragua', 'Maracay', '04121475991', '02432721601', 'Urb. Las Acacias, Vereda 55, casa Nro4'),
(19, 'omiguelplus', 'I66ghqcj', 'Orlando Miguel', 'Rodriguez Barroeta', '', 'omiguelplus@gmail.com', 'Venezuela', 'Nueva Esparta', 'Porlamar', '04164967283', '02952423572', 'Av 31 de Julio Quinta Prisca, sector guatamare, La Asuncion'),
(20, 'jorgeie1819', 'M3jhifu', 'Jorge', 'Herrera', '', 'jorgeie1819@hotmail.com', 'Venezuela', 'Vargas', 'Catia la mar', '04268134078', '04262134162', 'Las Tunitas, calle la libertad, casa 12'),
(21, 'elio_acevedo', 'S84kdeqj', 'Elio', 'Acevedo', '', 'elio_acevedo@yahoo.com', 'Venezuela', 'Miranda', 'Caracas', '04142535565', '02129865708', 'Avenida La Trinidad con Calle La Lomita, Residencias Vizcaya Plaza, Torre B, Apto 42-B. Urbanizacion'),
(22, 'KARENCARLO', 'O04rsygs', 'KAREN', 'PACHECO', '', 'karen_rujana@hotmail.com', 'Venezuela', 'ANZOATEGUI', 'BARCELONA', '04148191630', '02813174985', 'AV. RIO RES, RIO APT 1-A'),
(23, 'johanlm2', 'R6tiufv', 'johan', 'loaiza', '', 'loaizajohan@gmail.com', 'Venezuela', 'distrito capital', 'CARACAS', '+584141004600', '+582190860', 'av. tamanaco del rosal edfi. torre impres sotano 1 caracas'),
(24, 'hildeabreu', 'J09okvmn', 'hilde', 'abreu', '', 'hildeabreu@gmail.com', 'Venezuela', 'miranda', 'charallave', '04127301960', '02392480109', 'res los samanes, torre uno piso6apto 6-B avenida bolivar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
