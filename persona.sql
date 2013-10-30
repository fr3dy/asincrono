-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2013 a las 22:22:46
-- Versión del servidor: 5.5.32-0ubuntu7
-- Versión de PHP: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `phpmysql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `persona_id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombres` varchar(35) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`persona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`persona_id`, `nombres`, `fecha_registro`, `fecha_actualizacion`) VALUES
(00000000001, 'CARLOS', '2013-10-28 21:37:31', '0000-00-00 00:00:00'),
(00000000002, 'JUAN', '2013-10-28 21:37:31', '0000-00-00 00:00:00'),
(00000000003, 'SIN NOMBRES', '2013-10-28 22:01:27', '0000-00-00 00:00:00'),
(00000000004, 'Ruben', '2013-10-28 22:02:33', '0000-00-00 00:00:00'),
(00000000005, 'Rosa', '2013-10-28 22:02:57', '0000-00-00 00:00:00'),
(00000000006, 'CARLOS II', '2013-10-28 22:17:55', '0000-00-00 00:00:00'),
(00000000008, 'NUEVO NOMBRE', '2013-10-28 22:21:08', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
