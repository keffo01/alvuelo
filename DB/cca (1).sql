-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2020 a las 00:51:36
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cca`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principales` ()  NO SQL
SELECT Nombre_producto,Img,precio FROM producto WHERE Nombre_producto IN ('Pollo encebollado','Pierna asada a la plancha','Carne de res a la plancha')$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cliente` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_cliente`, `Nombre`, `Password`, `Direccion`, `Telefono`) VALUES
(2, 'Kevin', 'Conko9001', 'Colonia los angeles casa 42 aguilares', 75293820);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Id_pedido` int(11) NOT NULL,
  `Cliente_id` int(11) NOT NULL,
  `Pedido` text NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_producto` int(11) NOT NULL,
  `Nombre_producto` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `tipo_producto` varchar(10) NOT NULL,
  `Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_producto`, `Nombre_producto`, `precio`, `tipo_producto`, `Img`) VALUES
(1, 'Huevo estrellado en salsa ranchera', '0.40', '', ''),
(2, 'Huevo duro en salsa', '0.50', '', ''),
(3, 'Huevo con vegetales', '0.80', '', ''),
(4, 'Huevo con ejote', '1.00', '', ''),
(5, 'Huevo con carne deshilada', '1.40', '', ''),
(6, 'Omelette', '0.85', '', ''),
(7, 'Salchicha de pavo en salsa de tomate', '0.40', '', ''),
(8, 'Chorizo en salsa de tomate', '0.35', '', ''),
(9, 'Milanesa de pollo', '0.85', '', ''),
(10, 'Frijoles molidos', '0.50', '', ''),
(11, 'Frijoles blancos fritos', '0.60', '', ''),
(12, 'Casamiento', '0.60', '', ''),
(13, 'Platano frito', '0.50', '', ''),
(14, 'Platano sancochado', '0.50', '', ''),
(15, 'Verdura sancochada ', '1.25', '', ''),
(16, 'Huevo con papa', '1.00', '', ''),
(17, 'Huevo con jamón', '1.00', '', ''),
(18, 'Queso duro-blando', '0.30', '', ''),
(19, 'Queso fresco', '0.30', '', ''),
(20, 'Queso Rallado', '0.30', '', ''),
(21, 'Requesón', '0.30', 'extra', ''),
(22, 'Crema', '0.60', 'extra', ''),
(23, 'Pollo encebollado', '1.70', 'principal', 'assets/img/pollo-encebollado.jpg'),
(24, 'Pierna asada a la plancha', '1.70', 'principal', 'assets/img/pierna-asada.jpg'),
(25, 'Pollo guisado', '1.25', 'principal', 'assets/img/pollo-guisado.jpg'),
(26, 'Pechuga deshuesada a la plancha', '1.50', '', ''),
(27, 'pechuga empanizada', '1.70', '', ''),
(28, 'Pechuga deshuesada en crema de hongos', '1.60', 'principal', 'assets/img/pollo-en-crema.jpg'),
(29, 'Tortitas de carne de res', '1.10', '', ''),
(30, 'carne guisada', '1.70', '', ''),
(31, 'Bistec de res', '2.00', '', ''),
(32, 'Bistec de higado', '1.70', '', ''),
(33, 'Carne de res a la plancha', '2.00', 'principal', 'assets/img/Carne-res-plancha.jpg'),
(34, 'Lomo de cerdo en salsa de tomate', '1.40', '', ''),
(35, 'Lomo de cerdo asado a la plancha', '2.00', '', ''),
(36, 'Chuleta ahumada de cerdo en salsa de tomate', '1.60', '', ''),
(37, 'Costilla de cerdo en salsa', '2.00', '', ''),
(38, 'Sopa de pollo con chipilín', '2.00', '', ''),
(39, 'Relleno de papa', '1.10', '', ''),
(40, 'Relleno de ejote', '1.10', '', ''),
(41, 'Relleno de pacaya', '1.10', '', ''),
(42, 'Chilaquiles', '1.10', '', ''),
(43, 'tortilla', '0.05', '', ''),
(44, 'Ensalada fresca', '0.50', 'ensalada', ''),
(45, 'Ensalada blanca', '0.50', 'ensalada', ''),
(46, 'Ensalada de coditos', '0.50', 'ensalada', ''),
(47, 'Puré de papa', '0.50', 'ensalada', ''),
(48, 'Spaguetti en crema', '1.10', 'principal', 'assets/img/spaguetti-en-crema.jpg'),
(49, 'Pipianes en crema', '1.10', 'principal', 'assets/img/pipianes-en-crema.jpg'),
(50, 'Arroz', '0.50', 'complem', ''),
(51, 'Chimol', '1.00', 'ensalada', ''),
(52, 'Arroz', '1.00', 'complem', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id_pedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
