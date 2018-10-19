-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-08-2018 a las 19:48:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `futuro22`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `tel_movil` varchar(25) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `activo` int(25) NOT NULL,
  `contacto` varchar(30) NOT NULL,
  `rnc` varchar(30) NOT NULL,
  `nota` varchar(30) NOT NULL,
  `id_comprobante` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `rnc` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono1` varchar(25) NOT NULL,
  `telefono2` varchar(25) NOT NULL,
  `tel_movil` varchar(25) NOT NULL,
  `pagina_web` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `codigo_postal` int(25) NOT NULL,
  `pais` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `total` decimal(11,2) NOT NULL,
  `fecha` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `fecha_v` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `hora` varchar(15) COLLATE latin1_german1_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  `id_comprobante` int(15) DEFAULT NULL,
  `comprobante` varchar(19) COLLATE latin1_german1_ci DEFAULT NULL,
  `direccionentrega` varchar(50) COLLATE latin1_german1_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci COMMENT='	' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_condicion_pago`
--

CREATE TABLE IF NOT EXISTS `factura_condicion_pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `nota` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle`
--

CREATE TABLE IF NOT EXISTS `factura_detalle` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) unsigned zerofill NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` decimal(11,2) NOT NULL,
  `precio` decimal(11,2) NOT NULL,
  `descuento` decimal(15,2) NOT NULL,
  `itb` decimal(11,2) NOT NULL,
  `importe` decimal(11,2) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `descuento_can` decimal(15,2) DEFAULT '0.00',
  `id_factura_entrada` int(15) unsigned zerofill DEFAULT '000000000000000',
  `cantidad_entrada` decimal(15,2) DEFAULT '0.00',
  `costo_entrada` decimal(15,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_entrada`
--

CREATE TABLE IF NOT EXISTS `factura_entrada` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `total` decimal(15,2) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `fecha_v` varchar(20) DEFAULT NULL,
  `hora` varchar(15) DEFAULT NULL,
  `id_proveedor` int(15) DEFAULT NULL,
  `id_usuario` int(15) DEFAULT NULL,
  `id_tipo_pago` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_entrada_detalle`
--

CREATE TABLE IF NOT EXISTS `factura_entrada_detalle` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_factura_entrada` int(15) DEFAULT NULL,
  `id_producto` int(15) DEFAULT NULL,
  `cantidad` int(15) DEFAULT NULL,
  `costo` decimal(15,2) NOT NULL,
  `importe` decimal(15,2) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE IF NOT EXISTS `ingreso` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(15) NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `monto_pagado` decimal(15,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_detalle`
--

CREATE TABLE IF NOT EXISTS `ingreso_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ingreso` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `monto_factura` decimal(15,2) NOT NULL,
  `monto_pagado` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itbis`
--

CREATE TABLE IF NOT EXISTS `itbis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monto` decimal(11,2) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncf`
--

CREATE TABLE IF NOT EXISTS `ncf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `serie` varchar(2) NOT NULL,
  `division_n` int(2) unsigned zerofill NOT NULL,
  `punto_em` int(3) NOT NULL,
  `area_imp` int(3) NOT NULL,
  `tipo_compro` int(2) NOT NULL,
  `secuencia` int(8) NOT NULL,
  `secuencia_final` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncfmantenimiento`
--

CREATE TABLE IF NOT EXISTS `ncfmantenimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_comprobante` int(15) DEFAULT NULL,
  `numero_inicial` int(8) unsigned zerofill DEFAULT NULL,
  `numero_final` int(8) unsigned zerofill DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `id_usuario` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncfmostrar`
--

CREATE TABLE IF NOT EXISTS `ncfmostrar` (
  `id` int(11) unsigned zerofill DEFAULT NULL,
  `serie` varchar(2) DEFAULT NULL,
  `division_n` int(2) unsigned zerofill DEFAULT NULL,
  `punto_em` int(3) DEFAULT NULL,
  `area_imp` int(3) DEFAULT NULL,
  `tipo_compro` int(2) DEFAULT NULL,
  `var1` varchar(8) DEFAULT NULL,
  `numero_inicial` int(8) DEFAULT NULL,
  `numero_final` int(8) DEFAULT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `privilegio` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='				' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `codigo_barra` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `costo` decimal(15,2) NOT NULL,
  `venta` decimal(15,2) DEFAULT NULL,
  `cantidad` decimal(15,2) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `categoria` int(11) NOT NULL,
  `id_itebis` int(11) NOT NULL,
  `venta2` decimal(15,2) DEFAULT NULL,
  `venta3` decimal(15,2) DEFAULT NULL,
  `activo` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `tel_movil` varchar(25) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `activo` int(25) NOT NULL,
  `contacto` varchar(30) NOT NULL,
  `rnc` varchar(30) NOT NULL,
  `nota` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `nota` text,
  `id_permiso` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
