-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql300.260mb.net
-- Tiempo de generación: 06-09-2018 a las 20:15:01
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `n260m_15587672_futuro22`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--
use futuro22;
CREATE TABLE IF NOT EXISTS `caja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `nota` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id`, `nombre`, `nota`) VALUES
(1, 'Caja 01', 'pedro'),
(2, 'Caja 02', 'gfhfgh'),
(3, 'Caja 03', 'Ã±lkÃ±l,'),
(4, 'Caja 04', 'lkjdslk'),
(5, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja_abierta`
--

CREATE TABLE IF NOT EXISTS `caja_abierta` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_caja` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `monto_inicial` decimal(11,2) NOT NULL,
  `monto_cierre` decimal(15,2) NOT NULL,
  `fechaA` varchar(15) NOT NULL,
  `horaA` varchar(15) NOT NULL,
  `fechaC` varchar(15) NOT NULL,
  `horaC` varchar(15) NOT NULL,
  `estado` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `caja_abierta`
--

INSERT INTO `caja_abierta` (`id`, `id_caja`, `id_usuario`, `monto_inicial`, `monto_cierre`, `fechaA`, `horaA`, `fechaC`, `horaC`, `estado`) VALUES
(00000000001, 1, 1, '2000.00', '20000.00', '', '', '', '', 'SI'),
(00000000002, 1, 1, '5000.00', '0.00', '03/09/2018', '17 : 14 : 49', '', '', 'SI'),
(00000000003, 1, 1, '5000.00', '0.00', '03/09/2018', '17 : 17 : 46', '', '', 'SI'),
(00000000004, 1, 1, '80000.00', '0.00', '03/09/2018', '17 : 18 : 00', '', '', 'SI');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `tel_movil`, `correo`, `activo`, `contacto`, `rnc`, `nota`, `id_comprobante`) VALUES
(1, 'Generico', 'Generico', '', '', '', 'undefined', 0, '', '150618233105 ', '', 1),
(2, 'Eduardo', 'Viva Cepeda', 'CALLE PRINCIPAL LOS CERROS #42', '8298307870', '8298307870', 'eduardof.0808@gmail.com', 0, '', '05300356680', '', 1),
(3, 'Felix', 'Duran Matias 1', 'calle 27 de febrero constanza ', '8093332266', '8299991122', 'felixduranmatias@hotmail.com', 0, '', '150618233206 ', '', 1),
(5, 'KJFHK', 'KJHKJFD', '1', '1', '1', 'undefined', 0, '', '1', '1', 2),
(6, 'slkjskrkpk', 'osdpoko', '', '', '', 'undefined', 0, '', '053', '', 1),
(7, 'joha', 'ledesma', '', '', '', 'undefined', 0, '', '010918163326 ', '', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `rnc`, `direccion`, `telefono1`, `telefono2`, `tel_movil`, `pagina_web`, `correo`, `codigo_postal`, `pais`) VALUES
(1, 'Digital Duran', '0530000000', 'C/27 de febrero ', '8298889633', '8093236666', '', '', '', 0, 0);

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
  `monto_pagado` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci COMMENT='	' AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `total`, `fecha`, `fecha_v`, `hora`, `id_cliente`, `id_usuario`, `id_empresa`, `id_tipo_pago`, `id_comprobante`, `comprobante`, `direccionentrega`, `monto_pagado`) VALUES
(00000000001, '25.00', '01/09/2018', '', '10 : 23 : 14', 2, 1, 0, 1, 1, 'B0100000100', '', '0.00'),
(00000000002, '33.30', '01/09/2018', '', '10 : 23 : 38', 3, 1, 0, 2, 1, 'B0100000101', '', '10.00'),
(00000000003, '33.30', '01/09/2018', '', '11 : 02 : 25', 2, 1, 0, 2, 1, 'B0100000102', '', '15.00'),
(00000000004, '33.30', '01/09/2018', '', '11 : 02 : 40', 3, 1, 0, 1, 1, 'B0100000103', '', '0.00'),
(00000000005, '35.52', '01/09/2018', '', '11 : 20 : 49', 2, 1, 0, 3, 1, 'B0100000104', '', '0.00'),
(00000000006, '32.00', '01/09/2018', '', '11 : 21 : 08', 3, 1, 0, 4, 1, 'B0100000105', '', '0.00'),
(00000000007, '35.52', '01/09/2018', '', '12 : 34 : 03', 7, 1, 0, 2, 1, 'B0100000106', '', '35.52'),
(00000000008, '25.00', '03/09/2018', '', '17 : 04 : 33', 2, 1, 0, 2, 1, 'B0100000107', '', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_condicion_pago`
--

CREATE TABLE IF NOT EXISTS `factura_condicion_pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `nota` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `factura_condicion_pago`
--

INSERT INTO `factura_condicion_pago` (`id`, `descripcion`, `nota`) VALUES
(1, 'Efectivo', ''),
(2, 'Credito', ''),
(3, 'Tarjeta', ''),
(4, 'Cheque', '');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `factura_detalle`
--

INSERT INTO `factura_detalle` (`id`, `id_factura`, `id_producto`, `cantidad`, `precio`, `descuento`, `itb`, `importe`, `total`, `descuento_can`, `id_factura_entrada`, `cantidad_entrada`) VALUES
(8, 00000000008, 1, '1.00', '25.00', '0.00', '0.00', '25.00', '25.00', '0.00', 000000000000000, '0.00'),
(3, 00000000003, 2, '1.00', '30.00', '0.00', '3.30', '30.00', '33.30', '0.00', 000000000000000, '0.00'),
(4, 00000000004, 2, '1.00', '30.00', '0.00', '3.30', '30.00', '33.30', '0.00', 000000000000000, '0.00'),
(5, 00000000005, 3, '1.00', '32.00', '0.00', '3.52', '32.00', '35.52', '0.00', 000000000000000, '0.00'),
(6, 00000000006, 5, '1.00', '32.00', '0.00', '0.00', '32.00', '32.00', '0.00', 000000000000000, '0.00'),
(7, 00000000007, 4, '1.00', '32.00', '0.00', '3.52', '32.00', '35.52', '0.00', 000000000000000, '0.00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `factura_entrada`
--

INSERT INTO `factura_entrada` (`id`, `total`, `fecha`, `fecha_v`, `hora`, `id_proveedor`, `id_usuario`, `id_tipo_pago`) VALUES
(1, NULL, '02/08/2018', NULL, '21 : 26 : 42', 1, 1, NULL),
(2, NULL, '23/08/2018', NULL, '20 : 04 : 26', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_entrada_detalle`
--

CREATE TABLE IF NOT EXISTS `factura_entrada_detalle` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_factura_entrada` int(15) DEFAULT NULL,
  `id_producto` int(15) DEFAULT NULL,
  `cantidad` decimal(15,2) DEFAULT NULL,
  `importe` decimal(15,2) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE IF NOT EXISTS `gastos` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `detalle` varchar(50) NOT NULL,
  `cantidad` decimal(15,0) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `id_parcela` int(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE IF NOT EXISTS `ingreso` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_factura` int(15) NOT NULL,
  `id_usuario` int(15) NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `monto_pagado` decimal(15,2) NOT NULL,
  `id_tipo_pago` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`id`, `id_factura`, `id_usuario`, `id_cliente`, `fecha`, `hora`, `monto_pagado`, `id_tipo_pago`) VALUES
(00000000001, 0, 1, 2, '01/09/2018', '11 : 49 : 01', '10.00', 0),
(00000000002, 0, 1, 3, '01/09/2018', '11 : 51 : 03', '10.00', 0),
(00000000003, 0, 1, 2, '01/09/2018', '12 : 32 : 26', '5.00', 0),
(00000000004, 0, 1, 7, '01/09/2018', '12 : 34 : 58', '36.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_detalle`
--

CREATE TABLE IF NOT EXISTS `ingreso_detalle` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_factura` int(15) NOT NULL,
  `id_ingreso` int(15) NOT NULL,
  `monto_factura` decimal(15,2) NOT NULL,
  `monto_pagado` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ingreso_detalle`
--

INSERT INTO `ingreso_detalle` (`id`, `id_factura`, `id_ingreso`, `monto_factura`, `monto_pagado`) VALUES
(1, 3, 1, '33.30', '10.00'),
(2, 2, 2, '33.30', '10.00'),
(3, 3, 3, '23.30', '5.00'),
(4, 7, 4, '35.52', '35.52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itbis`
--

CREATE TABLE IF NOT EXISTS `itbis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monto` decimal(11,2) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `itbis`
--

INSERT INTO `itbis` (`id`, `monto`, `descripcion`) VALUES
(1, '0.00', '0 %'),
(2, '0.11', '11 %'),
(3, '0.18', '18 % ');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ncf`
--

INSERT INTO `ncf` (`id`, `nombre`, `serie`, `division_n`, `punto_em`, `area_imp`, `tipo_compro`, `secuencia`, `secuencia_final`) VALUES
(1, 'Consumidor Final ', 'B', 01, 0, 0, 0, 0, NULL),
(2, 'Credito Fiscal', 'B', 02, 0, 0, 0, 0, NULL),
(3, 'gubernamental', 'A', 11, 0, 0, 0, 0, NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ncfmantenimiento`
--

INSERT INTO `ncfmantenimiento` (`id`, `id_comprobante`, `numero_inicial`, `numero_final`, `fecha`, `hora`, `id_usuario`) VALUES
(1, 1, 00000100, 00000150, '15/06/2018', '11:19 pm', 1),
(2, 2, 00000100, 00000150, '15/06/2018', '11:19 pm', 1),
(3, 3, 01000000, 10000050, '01/08/2018', '12:03 am', 1);

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
-- Estructura de tabla para la tabla `parcela`
--

CREATE TABLE IF NOT EXISTS `parcela` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `nota` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `parcela`
--

INSERT INTO `parcela` (`id`, `nombre`, `numero`, `zona`, `nota`) VALUES
(1, '23/08/2018', '23', '3', '23/08/2018'),
(2, '23/08/2018', '5555', '666666', '23/08/2018'),
(3, '888', 'hgfhgf', 'hjgfkjhgk', 'jhgljk'),
(4, '44', '4', '4', '4'),
(5, '9', '9', '9', '9'),
(6, '65656556', '655656', '655656', '65565');

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
  `activo` int(1) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo_barra`, `descripcion`, `costo`, `venta`, `cantidad`, `ubicacion`, `categoria`, `id_itebis`, `venta2`, `venta3`, `activo`) VALUES
(1, '4566', 'Arroz papagallo 50 lb CA', '10.00', '25.00', '0.00', '1', 2, 1, '0.00', '0.00', 1),
(2, '8966', 'Pan', '15.00', '30.00', '0.00', '0', 1, 2, '0.00', '0.00', 0),
(3, '5636', 'Cable ', '10.00', '32.00', '0.00', '1', 2, 2, '0.00', '0.00', 0),
(4, '79633', 'Memoria usb 8 gb sandit star', '10.00', '32.00', '0.00', '1', 2, 2, '0.00', '0.00', 0),
(5, '98798', 'Impresora', '10.00', '32.00', '0.00', '1', 2, 1, '0.00', '0.00', 0),
(6, '4895182224186', 'sprolÂ´spotÂ´ptoyÂ´prtyprtkypo', '10.00', '20.00', '0.00', '1', 1, 1, '0.00', '0.00', 0),
(7, '4895182209565', 'CABLE VGA', '10.00', '30.00', '0.00', '1', 1, 2, '0.00', '0.00', 1),
(8, '4895182219069', 'CABLE AUDIO', '10.00', '30.00', '0.00', '1', 1, 2, '0.00', '0.00', 0),
(9, '4895182202719', 'CABLE HDMI', '50.00', '99.00', '0.00', '', 0, 1, '0.00', '0.00', 1),
(10, 'lkfgjlk', 'lkjlekj', '50.00', '100.00', '0.00', '1', 1, 1, '0.00', '0.00', 0),
(11, '78652635', 'dÃ±sflkgÃ±dlfÃ±', '50.00', '100.00', '0.00', '1', 1, 1, '0.00', '0.00', 0),
(12, 'dxlkfjl', 'zsldkjflkm', '50.00', '100.00', '0.00', '1', 2, 2, '0.00', '0.00', 0),
(13, '55566366666448', 'ldfkjlkdfjglkd lksdjfglksdjflÃ', '10.00', '105.00', '0.00', '', 0, 1, '0.00', '0.00', 0),
(14, '654654', 'lechuga ', '10.00', '15.00', '0.00', '', 0, 3, '0.00', '0.00', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `direccion`, `telefono`, `tel_movil`, `correo`, `activo`, `contacto`, `rnc`, `nota`) VALUES
(1, 'Prodacom', 'c/l', '829', '809', '', 0, '', '02061820401', ''),
(2, 'Digital Duran', 'calle 27 de febrero constanza ', '809', '829', 'ede@', 0, '2', '555553333', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembra`
--

CREATE TABLE IF NOT EXISTS `siembra` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_producto` int(50) NOT NULL,
  `cantidad` decimal(15,0) NOT NULL,
  `id_parcela` int(15) NOT NULL,
  `fecha_siembra` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE IF NOT EXISTS `socio` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `id_parcela` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`id`, `nombre`, `apellido`, `cedula`, `direccion`, `id_parcela`) VALUES
(1, 'sdflknl', 'lkjÃ±lk', 'lkjlÃ±k', 'lkjÃ±lk', 1),
(2, 'nombre', 'aepllido', 'cedula', 'direccion', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `clave`, `correo`, `nota`, `id_permiso`) VALUES
(1, 'Admin', '123', '', '', NULL),
(2, 'Juan', '123', '', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
