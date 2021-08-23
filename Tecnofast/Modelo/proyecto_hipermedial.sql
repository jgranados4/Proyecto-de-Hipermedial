-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 13-07-2021 a las 21:11:16
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_hipermedial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_x_cant`
--

DROP TABLE IF EXISTS `prod_x_cant`;
CREATE TABLE IF NOT EXISTS `prod_x_cant` (
  `id_prod_x_cant` int(100) NOT NULL AUTO_INCREMENT,
  `id_producto` int(100) NOT NULL,
  `valor_producto` float NOT NULL,
  `cantidad` int(100) NOT NULL,
  `subtotal_producto` float NOT NULL,
  PRIMARY KEY (`id_prod_x_cant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `usuario`, `password`) VALUES
(1, 'alex', '$2y$10$AVSx0hVcAozXGAJAU1S/fexZTlXC6CBJQhFWDsyI8GF4gH9CHcH.W');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `id_cliente` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(50) NOT NULL,
  `correo_cliente` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_producto`
--

DROP TABLE IF EXISTS `tb_producto`;
CREATE TABLE IF NOT EXISTS `tb_producto` (
  `id_producto` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `valor_producto` float NOT NULL,
  `stock_producto` int(100) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_producto`
--

INSERT INTO `tb_producto` (`id_producto`, `nombre_producto`, `descripcion`, `Categoria`, `valor_producto`, `stock_producto`) VALUES
(1, 'i9', 'intel', 'Procesador', 89, 30),
(2, 'i3', 'intel', 'Procesador', 20, 30),
(3, 'speepmind', 'speepmid', 'Case', 35, 30),
(4, 'pc', 'mi pc', 'Case', 14, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro_venta`
--

DROP TABLE IF EXISTS `tb_registro_venta`;
CREATE TABLE IF NOT EXISTS `tb_registro_venta` (
  `id_registro` int(100) NOT NULL AUTO_INCREMENT,
  `fecha_registro` date NOT NULL,
  `id_total_venta` int(100) NOT NULL,
  `id_cliente` int(100) NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_venta`
--

DROP TABLE IF EXISTS `total_venta`;
CREATE TABLE IF NOT EXISTS `total_venta` (
  `id_total_venta` int(100) NOT NULL AUTO_INCREMENT,
  `subtotal_producto` float NOT NULL,
  `suma_venta` float NOT NULL,
  PRIMARY KEY (`id_total_venta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
