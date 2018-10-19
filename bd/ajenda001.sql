-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-06-2018 a las 23:47:58
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `futuro22`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `categoria`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `cliente`
--

INSERT DELAYED IGNORE INTO `cliente` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `tel_movil`, `correo`, `activo`, `contacto`, `rnc`, `nota`, `id_comprobante`) VALUES
(1, 'Generico', 'Generico', '', '', '', 'undefined', 0, '', '150618233105 ', '', 1),
(2, 'Eduardo', 'Viva Cepeda', 'CALLE PRINCIPAL LOS CERROS #42', '8298307870', '8298307870', 'eduardof.0808@gmail.com', 0, '', '05300356680', '', 1),
(3, 'Felix ', 'Duran Matias ', 'calle 27 de febrero constanza ', '8093332266', '8299991122', 'felixduranmatias@hotmail.com', 0, '', '150618233206 ', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
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
-- Volcar la base de datos para la tabla `empresa`
--

INSERT DELAYED IGNORE INTO `empresa` (`id`, `nombre`, `rnc`, `direccion`, `telefono1`, `telefono2`, `tel_movil`, `pagina_web`, `correo`, `codigo_postal`, `pais`) VALUES
(1, 'Digital Duran', '0530000000', 'C/27 de febrero ', '8298889633', '8093236666', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci COMMENT='	' AUTO_INCREMENT=24 ;

--
-- Volcar la base de datos para la tabla `factura`
--

INSERT DELAYED IGNORE INTO `factura` (`id`, `total`, `fecha`, `fecha_v`, `hora`, `id_cliente`, `id_usuario`, `id_empresa`, `id_tipo_pago`, `id_comprobante`, `comprobante`, `direccionentrega`) VALUES
(00000000001, '29.00', '08/06/2018', '', '20 : 18 : 38', 2, 1, 0, 1, 1, 'B112223334400000010', ''),
(00000000002, '66.12', '08/06/2018', '', '20 : 28 : 30', 2, 1, 0, 1, 1, 'B0100000000011', ''),
(00000000003, '30.00', '08/06/2018', '', '20 : 51 : 22', 1, 1, 0, 1, 1, 'B0100000000012', ''),
(00000000004, '29.00', '08/06/2018', '', '20 : 52 : 15', 1, 1, 0, 1, 1, 'B0100000000013', ''),
(00000000005, '598.92', '09/06/2018', '', '15 : 23 : 49', 1, 1, 0, 1, 1, 'B0100000000014', ''),
(00000000006, '96.12', '09/06/2018', '', '15 : 46 : 29', 1, 1, 0, 1, 1, 'B0100000000015', ''),
(00000000007, '156.44', '09/06/2018', '', '15 : 54 : 41', 2, 1, 0, 1, 1, 'B0100000000016', 'Direccion de entrega'),
(00000000008, '52.20', '12/06/2018', '', '18 : 57 : 22', 2, 1, 0, 1, 1, 'B0100000000017', ''),
(00000000009, '53.20', '12/06/2018', '', '18 : 58 : 13', 2, 1, 0, 1, 1, 'B0100000000018', ''),
(00000000010, '66.12', '12/06/2018', '', '19 : 02 : 07', 2, 1, 0, 1, 1, 'B0100000000019', ''),
(00000000011, '29.00', '12/06/2018', '', '19 : 02 : 35', 2, 1, 0, 1, 1, 'B0100000000020', ''),
(00000000012, '381.04', '12/06/2018', '', '19 : 04 : 36', 1, 1, 0, 1, 1, 'B0100000000021', ''),
(00000000013, '29.00', '12/06/2018', '', '19 : 09 : 59', 1, 1, 0, 1, 1, 'B0100000000022', ''),
(00000000014, '193.56', '12/06/2018', '', '19 : 10 : 57', 1, 1, 0, 1, 1, 'B0100000000023', ''),
(00000000015, '29.00', '12/06/2018', '', '19 : 13 : 18', 1, 1, 0, 1, 1, 'B0100000000024', ''),
(00000000016, '126.44', '12/06/2018', '', '19 : 13 : 48', 1, 1, 0, 1, 1, 'B0100000000025', ''),
(00000000017, '119.32', '12/06/2018', '', '19 : 14 : 17', 1, 1, 0, 1, 1, 'B0100000000026', ''),
(00000000018, '59.80', '12/06/2018', '', '19 : 50 : 10', 1, 1, 0, 1, 1, 'B0100000000027', ''),
(00000000019, '441.24', '12/06/2018', '', '19 : 53 : 00', 1, 1, 0, 1, 1, 'B0100000000028', ''),
(00000000020, '94.60', '14/06/2018', '', '19 : 12 : 36', 1, 1, 0, 1, 1, 'B0100000000029', ''),
(00000000021, '94.60', '18/06/2018', '', '19 : 03 : 50', 1, 1, 0, 1, 1, 'B0100000100', ''),
(00000000022, '16637.68', '18/06/2018', '', '19 : 09 : 31', 2, 1, 0, 1, 1, 'B0100000101', ''),
(00000000023, '297.52', '18/06/2018', '', '19 : 12 : 38', 3, 1, 0, 1, 2, 'B0200000100', 'Entregar en la auyama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_condicion_pago`
--

DROP TABLE IF EXISTS `factura_condicion_pago`;
CREATE TABLE IF NOT EXISTS `factura_condicion_pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `nota` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `factura_condicion_pago`
--

INSERT DELAYED IGNORE INTO `factura_condicion_pago` (`id`, `descripcion`, `nota`) VALUES
(1, 'Efectivos', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle`
--

DROP TABLE IF EXISTS `factura_detalle`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Volcar la base de datos para la tabla `factura_detalle`
--

INSERT DELAYED IGNORE INTO `factura_detalle` (`id`, `id_factura`, `id_producto`, `cantidad`, `precio`, `descuento`, `itb`, `importe`, `total`, `descuento_can`, `id_factura_entrada`, `cantidad_entrada`) VALUES
(1, 00000000001, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(2, 00000000002, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(3, 00000000002, 4, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(4, 00000000003, 2, '1.00', '30.00', '0.00', '0.00', '30.00', '30.00', '0.00', 000000000000000, '0.00'),
(5, 00000000004, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(6, 00000000005, 2, '10.00', '30.00', '0.00', '0.00', '300.00', '300.00', '0.00', 000000000000000, '0.00'),
(7, 00000000005, 1, '10.00', '25.00', '25.00', '40.00', '250.00', '265.00', '0.00', 000000000000000, '0.00'),
(8, 00000000005, 4, '1.00', '32.00', '3.20', '5.12', '32.00', '33.92', '0.00', 000000000000000, '0.00'),
(9, 00000000006, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(10, 00000000006, 4, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(11, 00000000006, 2, '1.00', '30.00', '0.00', '0.00', '30.00', '30.00', '0.00', 000000000000000, '0.00'),
(12, 00000000007, 6, '1.00', '20.00', '0.00', '3.20', '20.00', '23.20', '0.00', 000000000000000, '0.00'),
(13, 00000000007, 4, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(14, 00000000007, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(15, 00000000007, 3, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(16, 00000000007, 2, '1.00', '30.00', '0.00', '0.00', '30.00', '30.00', '0.00', 000000000000000, '0.00'),
(17, 00000000003, 1, '50.00', '25.00', '375.00', '200.00', '1250.00', '1075.00', '0.00', 000000000000000, '0.00'),
(18, 00000000008, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(19, 00000000008, 6, '1.00', '20.00', '0.00', '3.20', '20.00', '23.20', '0.00', 000000000000000, '0.00'),
(20, 00000000009, 2, '1.00', '30.00', '0.00', '0.00', '30.00', '30.00', '0.00', 000000000000000, '0.00'),
(21, 00000000009, 6, '1.00', '20.00', '0.00', '3.20', '20.00', '23.20', '0.00', 000000000000000, '0.00'),
(22, 00000000010, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(23, 00000000010, 4, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(24, 00000000011, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(25, 00000000012, 1, '10.00', '25.00', '25.00', '40.00', '250.00', '265.00', '0.00', 000000000000000, '0.00'),
(26, 00000000012, 4, '1.00', '32.00', '3.20', '5.12', '32.00', '33.92', '0.00', 000000000000000, '0.00'),
(27, 00000000012, 6, '1.00', '20.00', '2.00', '3.20', '20.00', '21.20', '0.00', 000000000000000, '0.00'),
(28, 00000000012, 2, '1.00', '30.00', '3.00', '0.00', '30.00', '27.00', '0.00', 000000000000000, '0.00'),
(29, 00000000012, 5, '1.00', '32.00', '3.20', '5.12', '32.00', '33.92', '0.00', 000000000000000, '0.00'),
(30, 00000000013, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(31, 00000000014, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(32, 00000000014, 2, '1.00', '30.00', '0.00', '0.00', '30.00', '30.00', '0.00', 000000000000000, '0.00'),
(33, 00000000014, 3, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(34, 00000000014, 4, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(35, 00000000014, 5, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(36, 00000000014, 6, '1.00', '20.00', '0.00', '3.20', '20.00', '23.20', '0.00', 000000000000000, '0.00'),
(37, 00000000015, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(38, 00000000016, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(39, 00000000016, 3, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(40, 00000000016, 5, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(41, 00000000016, 6, '1.00', '20.00', '0.00', '3.20', '20.00', '23.20', '0.00', 000000000000000, '0.00'),
(42, 00000000017, 1, '1.00', '25.00', '0.00', '4.00', '25.00', '29.00', '0.00', 000000000000000, '0.00'),
(43, 00000000017, 6, '1.00', '20.00', '0.00', '3.20', '20.00', '23.20', '0.00', 000000000000000, '0.00'),
(44, 00000000017, 2, '1.00', '30.00', '0.00', '0.00', '30.00', '30.00', '0.00', 000000000000000, '0.00'),
(45, 00000000017, 5, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(46, 00000000018, 1, '1.00', '25.00', '0.00', '0.00', '25.00', '25.00', '0.00', 000000000000000, '0.00'),
(47, 00000000018, 2, '1.00', '30.00', '0.00', '4.80', '30.00', '34.80', '0.00', 000000000000000, '0.00'),
(48, 00000000019, 1, '10.00', '25.00', '25.00', '0.00', '250.00', '225.00', '0.00', 000000000000000, '0.00'),
(49, 00000000019, 2, '4.00', '30.00', '0.00', '0.00', '120.00', '90.00', '30.00', 000000000000000, '0.00'),
(50, 00000000019, 3, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(51, 00000000019, 4, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(52, 00000000019, 5, '1.00', '32.00', '0.00', '0.00', '32.00', '32.00', '0.00', 000000000000000, '0.00'),
(53, 00000000019, 6, '1.00', '20.00', '0.00', '0.00', '20.00', '20.00', '0.00', 000000000000000, '0.00'),
(54, 00000000020, 2, '2.00', '30.00', '0.00', '9.60', '60.00', '69.60', '0.00', 000000000000000, '0.00'),
(55, 00000000020, 1, '1.00', '25.00', '0.00', '0.00', '25.00', '25.00', '0.00', 000000000000000, '0.00'),
(56, 00000000021, 2, '2.00', '30.00', '0.00', '9.60', '60.00', '69.60', '0.00', 000000000000000, '0.00'),
(57, 00000000021, 1, '1.00', '25.00', '0.00', '0.00', '25.00', '25.00', '0.00', 000000000000000, '0.00'),
(58, 00000000022, 1, '10.00', '25.00', '0.00', '0.00', '250.00', '250.00', '0.00', 000000000000000, '0.00'),
(59, 00000000022, 2, '15.00', '30.00', '0.00', '72.00', '450.00', '522.00', '0.00', 000000000000000, '0.00'),
(60, 00000000022, 3, '13.00', '32.00', '41.60', '66.56', '416.00', '440.96', '0.00', 000000000000000, '0.00'),
(61, 00000000022, 4, '16.00', '32.00', '0.00', '81.92', '512.00', '583.92', '10.00', 000000000000000, '0.00'),
(62, 00000000022, 5, '17.00', '32.00', '0.00', '0.00', '544.00', '544.00', '0.00', 000000000000000, '0.00'),
(63, 00000000022, 6, '18.00', '20.00', '0.00', '0.00', '360.00', '360.00', '0.00', 000000000000000, '0.00'),
(64, 00000000022, 9, '100.00', '99.00', '0.00', '0.00', '9900.00', '9900.00', '0.00', 000000000000000, '0.00'),
(65, 00000000022, 8, '116.00', '30.00', '0.00', '556.80', '3480.00', '4036.80', '0.00', 000000000000000, '0.00'),
(66, 00000000023, 1, '1.00', '25.00', '0.00', '0.00', '25.00', '25.00', '0.00', 000000000000000, '0.00'),
(67, 00000000023, 9, '1.00', '99.00', '0.00', '0.00', '99.00', '99.00', '0.00', 000000000000000, '0.00'),
(68, 00000000023, 7, '1.00', '30.00', '0.00', '4.80', '30.00', '34.80', '0.00', 000000000000000, '0.00'),
(69, 00000000023, 8, '1.00', '30.00', '0.00', '4.80', '30.00', '34.80', '0.00', 000000000000000, '0.00'),
(70, 00000000023, 3, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(71, 00000000023, 5, '1.00', '32.00', '0.00', '0.00', '32.00', '32.00', '0.00', 000000000000000, '0.00'),
(72, 00000000023, 2, '1.00', '30.00', '0.00', '4.80', '30.00', '34.80', '0.00', 000000000000000, '0.00'),
(74, 00000000024, 1, '1.00', '25.00', '0.00', '0.00', '25.00', '25.00', '0.00', 000000000000000, '0.00'),
(75, 00000000024, 2, '1.00', '30.00', '0.00', '4.80', '30.00', '34.80', '0.00', 000000000000000, '0.00'),
(76, 00000000024, 3, '1.00', '32.00', '0.00', '5.12', '32.00', '37.12', '0.00', 000000000000000, '0.00'),
(77, 00000000024, 6, '1.00', '20.00', '0.00', '0.00', '20.00', '20.00', '0.00', 000000000000000, '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_entrada`
--

DROP TABLE IF EXISTS `factura_entrada`;
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

--
-- Volcar la base de datos para la tabla `factura_entrada`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_entrada_detalle`
--

DROP TABLE IF EXISTS `factura_entrada_detalle`;
CREATE TABLE IF NOT EXISTS `factura_entrada_detalle` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_factura_entrada` int(15) DEFAULT NULL,
  `id_producto` int(15) DEFAULT NULL,
  `cantidad` decimal(15,2) DEFAULT NULL,
  `importe` decimal(15,2) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `factura_entrada_detalle`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itbis`
--

DROP TABLE IF EXISTS `itbis`;
CREATE TABLE IF NOT EXISTS `itbis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monto` decimal(11,2) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `itbis`
--

INSERT DELAYED IGNORE INTO `itbis` (`id`, `monto`, `descripcion`) VALUES
(1, '0.00', '0 %'),
(2, '0.16', '16 %');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncf`
--

DROP TABLE IF EXISTS `ncf`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `ncf`
--

INSERT DELAYED IGNORE INTO `ncf` (`id`, `nombre`, `serie`, `division_n`, `punto_em`, `area_imp`, `tipo_compro`, `secuencia`, `secuencia_final`) VALUES
(1, 'Consumidor Final ', 'B', 01, 0, 0, 0, 0, NULL),
(2, 'Credito Fiscal', 'B', 02, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncfmantenimiento`
--

DROP TABLE IF EXISTS `ncfmantenimiento`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `ncfmantenimiento`
--

INSERT DELAYED IGNORE INTO `ncfmantenimiento` (`id`, `id_comprobante`, `numero_inicial`, `numero_final`, `fecha`, `hora`, `id_usuario`) VALUES
(1, 1, 00000100, 00000150, '15/06/2018', '11:19 pm', 1),
(2, 2, 00000100, 00000150, '15/06/2018', '11:19 pm', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncfmostrar`
--

DROP TABLE IF EXISTS `ncfmostrar`;
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

--
-- Volcar la base de datos para la tabla `ncfmostrar`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

DROP TABLE IF EXISTS `permiso`;
CREATE TABLE IF NOT EXISTS `permiso` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `privilegio` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='				' AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `permiso`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `producto`
--

INSERT DELAYED IGNORE INTO `producto` (`id`, `codigo_barra`, `descripcion`, `costo`, `venta`, `cantidad`, `ubicacion`, `categoria`, `id_itebis`, `venta2`, `venta3`) VALUES
(1, '4566', 'Arroz papagallo 50 lb CA', '10.00', '25.00', '0.00', '1', 2, 1, '0.00', '0.00'),
(2, '8966', 'Pan', '15.00', '30.00', '0.00', '1', 1, 2, '0.00', '0.00'),
(3, '5636', 'Cable ', '10.00', '32.00', '0.00', '1', 2, 2, '0.00', '0.00'),
(4, '79633', 'Memoria usb 8 gb sandit star', '10.00', '32.00', '0.00', '1', 2, 2, '0.00', '0.00'),
(5, '98798', 'Impresora', '10.00', '32.00', '0.00', '1', 2, 1, '0.00', '0.00'),
(6, '4895182224186', 'sprolÂ´spotÂ´ptoyÂ´prtyprtkypo', '10.00', '20.00', '0.00', '1', 1, 1, '0.00', '0.00'),
(7, '4895182209565', 'CABLE VGA', '10.00', '30.00', '0.00', '1', 1, 2, '0.00', '0.00'),
(8, '4895182219069', 'CABLE AUDIO', '10.00', '30.00', '0.00', '1', 1, 2, '0.00', '0.00'),
(9, '4895182202719', 'CABLE HDMI', '50.00', '99.00', '0.00', '', 0, 1, '0.00', '0.00'),
(10, 'lkfgjlk', 'lkjlekj', '50.00', '100.00', '0.00', '1', 1, 1, '0.00', '0.00'),
(11, '78652635', 'dÃ±sflkgÃ±dlfÃ±', '50.00', '100.00', '0.00', '1', 1, 1, '0.00', '0.00'),
(12, 'dxlkfjl', 'zsldkjflkm', '50.00', '100.00', '0.00', '1', 2, 2, '0.00', '0.00'),
(13, '55566366666448', 'ldfkjlkdfjglkd lksdjfglksdjflÃ', '10.00', '105.00', '0.00', '', 0, 1, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `proveedor`
--

INSERT DELAYED IGNORE INTO `proveedor` (`id`, `nombre`, `direccion`, `telefono`, `tel_movil`, `correo`, `activo`, `contacto`, `rnc`, `nota`) VALUES
(1, 'Prodacom', 'c/l', '829', '809', '', 0, '', '020618204019 ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
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
-- Volcar la base de datos para la tabla `usuario`
--

INSERT DELAYED IGNORE INTO `usuario` (`id`, `nombre`, `clave`, `correo`, `nota`, `id_permiso`) VALUES
(1, 'Admin', '123', '', '', NULL),
(2, 'Juan', '123', '', '', NULL);