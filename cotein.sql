-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-05-2020 a las 11:45:00
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cotein`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `name`) VALUES
(1, 'Gastos'),
(2, 'Productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `nosotros` text NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `valores` text DEFAULT NULL,
  `rtn` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `name`, `mision`, `vision`, `nosotros`, `correo`, `telefono`, `valores`, `rtn`, `logo`) VALUES
(1, 'ASDas', 'adfad', 'adfa', 'adas', 'adfasdf', 'adfad', 'adfadadfa', 'asdfads', 'asdfasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

DROP TABLE IF EXISTS `logros`;
CREATE TABLE IF NOT EXISTS `logros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `name`, `path`) VALUES
(3, 'mas', '1590027793-1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partners`
--

INSERT INTO `partners` (`id`, `name`, `path`, `descripcion`) VALUES
(1, 'dd', NULL, 'sdd'),
(2, 'sa', NULL, 'dd'),
(3, 'ASDasSSDSA', '1590041049-1.png', 'Que me expliques por que la Ejecución es considerada la etapa más difícil?\r\nLa ejecución marca el paso de todo lo demás. Nos permite analizar lo que está ocurriendo en el ámbito tecnológico y de los negocios. Es el mejor medio para lograr los cambios y la transición; mejor que la cultura, mejor que la filosofía. Las organizaciones orientadas a la ejecución cambian más rápidamente que las demás porque están más cerca de la real situación\r\nTambién se define como define la parte más difícil o esencial de la planificación estratégica ya que esta se deben tomar las decisiones correctas sobre los problemas de la planeación o si los elementos ya sea recursos humano o técnico están trabajando de acuerdo con lo planeado para definir un curso de acción para alinearlo.\r\n\r\n\r\nQue se debe hacer para minimizar los riesgos de fracaso en esta etapa?\r\nPara una ejecución efectiva es necesario conocer y definir las conductas de los integrantes en la ejecución:\r\n•	Conoce a tu personal y a tu negocio.\r\n•	Insiste en ser realista.\r\n•	Fija metas y prioridades claras.\r\n•	Dar seguimiento a las metas.\r\n•	Compense a quienes cumplen con los compromisos.\r\n•	Amplia la capacidad de las personas.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `descripcion` text NOT NULL,
  `marca_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name`, `path`, `descripcion`, `marca_id`, `tipo_id`) VALUES
(40, 'khkjjmhhh55', '1589877900-bg1.jpg', ';l;l', 1, 1),
(39, 'ASDas', '1590026433-3.png', 'asdfasd', 1, 1),
(37, 'ASDFASD', '1589850621-bg1.jpg', 'asdfasd', 1, 1),
(41, 'ASDas', '1590027938-a9d8a98089e455c3179230cf53307e46.jpg', 'adfasdfasd', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_areas`
--

DROP TABLE IF EXISTS `producto_areas`;
CREATE TABLE IF NOT EXISTS `producto_areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_areas`
--

INSERT INTO `producto_areas` (`id`, `area_id`, `producto_id`) VALUES
(39, 2, 41),
(18, 2, 40),
(17, 1, 40),
(16, 1, 4),
(15, 2, 38),
(33, 2, 34),
(32, 1, 34),
(34, 1, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_imagenes`
--

DROP TABLE IF EXISTS `producto_imagenes`;
CREATE TABLE IF NOT EXISTS `producto_imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_imagenes`
--

INSERT INTO `producto_imagenes` (`id`, `name`, `path`, `producto_id`) VALUES
(1, 'ASDAS', 'ASDasd', 1),
(2, '1589970991-5.png', '1589970991-5.png', 34),
(3, '1589970991-5.png', '1589970991-5.png', 34),
(4, '1589971181-5.png', '1589971181-5.png', 34),
(5, '1589971181-5.png', '1589971181-5.png', 34),
(6, '1589971214-1ba61ca713ecc41db9d156466ff6d16776219d875cf27a6e597e1cc66206d73c.jpg', '1589971214-1ba61ca713ecc41db9d156466ff6d16776219d875cf27a6e597e1cc66206d73c.jpg', 34),
(7, '1589971217-1ba61ca713ecc41db9d156466ff6d16776219d875cf27a6e597e1cc66206d73c.jpg', '1589971217-1ba61ca713ecc41db9d156466ff6d16776219d875cf27a6e597e1cc66206d73c.jpg', 34),
(9, '1589999241-2.png', '1589999241-2.png', 40),
(10, '1590028671-15900286576781811405636977325854.jpg', '1590028671-15900286576781811405636977325854.jpg', 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `path`) VALUES
(1, '1590025467-1.png'),
(2, '1590032275-2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `path` varchar(23) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `name`, `descripcion`, `path`) VALUES
(1, 'ASDas', 'asdAS', NULL),
(2, 'ASDas', 'adfasdfasd', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
