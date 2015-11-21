-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2015 a las 11:24:44
-- Versión del servidor: 5.5.38-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistenweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `total_compra` float DEFAULT NULL,
  `fecha_compra` date DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `FK_compra_proveedor` (`id_proveedor`),
  KEY `FK_compra_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE IF NOT EXISTS `detalle_compra` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id_compra` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `valor_unidad` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  PRIMARY KEY (`id_detalle`),
  KEY `FK_detalle_compra` (`id_compra`),
  KEY `FK_detalle_producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `costo_actual` float DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `presentacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(50) DEFAULT NULL,
  `empresa_proveedor` varchar(50) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE IF NOT EXISTS `publicacion` (
  `id_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_publicacion` varchar(50) DEFAULT NULL,
  `titulo_publicacion` varchar(255) DEFAULT NULL,
  `descripcion_publicacion` varchar(255) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `precio_publicacion` varchar(255) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_publicacion`),
  KEY `fk_publicacion_producto_1` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) NOT NULL,
  `username_usuario` varchar(50) NOT NULL,
  `clave_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(50) DEFAULT NULL,
  `nombre_tienda` varchar(255) DEFAULT NULL,
  `informacion_tienda` varchar(255) DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `username_usuario`, `clave_usuario`, `email_usuario`, `nombre_tienda`, `informacion_tienda`, `tipo_usuario`) VALUES
(1, 'Juan David Gomez', 'juan123', 'juan123', 'jdavidg.e@hotmail.com', 'Tienda de Juan', 'es una super tienda', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`),
  ADD CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `fk_publicacion_producto_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
