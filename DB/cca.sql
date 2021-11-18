-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2021 a las 02:44:00
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cerdo` ()  NO SQL
SELECT *FROM producto p WHERE p.tipo_producto LIKE "%cerdo%"$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pollo` ()  NO SQL
SELECT *FROM producto p WHERE p.tipo_producto LIKE "%pollo%"$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principales_Cerdo` ()  NO SQL
SELECT * FROM producto WHERE Nombre_producto IN ('Lomo de cerdo asado a la plancha','Costilla de cerdo en salsa')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principales_pizza` ()  NO SQL
SELECT * FROM producto WHERE Nombre_producto IN ('Pizza suprema','Pizza 4 jamon con peperoni')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principales_pollo` ()  NO SQL
SELECT * FROM producto WHERE Nombre_producto IN ('Pollo encebollado','Pechuga deshuesada a la plancha','Pechuga deshuesada en crema de hongos')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principales_res` ()  NO SQL
SELECT * FROM producto WHERE Nombre_producto IN ('Carne de res a la plancha')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principales_tacos` ()  NO SQL
SELECT * FROM producto WHERE Nombre_producto IN ('Tacos al pastor','Tacos de res')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principales_Tortas` ()  NO SQL
SELECT * FROM producto WHERE Nombre_producto IN ('Torta al pastor','Torta de Pollo','Torta al pastor')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_principal_Hamburguesa` ()  NO SQL
SELECT * FROM producto WHERE Nombre_producto IN ('Hamburguesa de queso','Hamburguesa doble queso')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_res` ()  NO SQL
SELECT *FROM producto p WHERE p.tipo_producto LIKE "%res%"$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Sopa_Pasta` ()  NO SQL
SELECT * FROM `producto` WHERE Nombre_producto LIKE "%sopa%" OR tipo_producto = "pasta"$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cliente` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Direccion` text NOT NULL,
  `Municipio` varchar(10) NOT NULL,
  `Telefono` int(8) NOT NULL,
  `Rol` enum('1','2') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_cliente`, `Nombre`, `Email`, `Password`, `Direccion`, `Municipio`, `Telefono`, `Rol`) VALUES
(2, 'Kevin', 'kevinmartinez.f@gmail.com', 'Conko9001', 'Colonia los angeles casa 42 aguilares', 'Aguilares', 75293820, '2'),
(3, 'alvaro', 'alvaro@gmail.com', 'asdfjkl', 'el calvario', 'Aguilares', 75066078, '1'),
(4, 'vicente', 'vin@gmail.com', '123456', 'por ahi nomas', 'La cabaña', 75468969, '1'),
(9, 'jacky', 'jacky@algo.com', 'asdasdasd', 'la cabaña', 'La cabaña', 1234568, '1'),
(10, 'asdfg', 'asdfg@gmail.com', 'asdfg', 'asdfg', 'Guazapa', 0, '1'),
(11, 'Doris', 'doris@gmail.com', '123456', 'col los angeles casa roja de ladrillo', 'El Paisnal', 75452565, '2'),
(12, 'Javier', 'jav1@gmail.com', 'javo06', 'col los angeles casa roja de ladrillo', 'El Paisnal', 75468969, '1'),
(13, 'René', 'rene@algo.com', 'rene123', 'Col los mangos pj3 oriente casa 24', 'Aguilares', 55887896, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensalada`
--

CREATE TABLE `ensalada` (
  `Id_ensalada` int(11) NOT NULL,
  `ensalada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ensalada`
--

INSERT INTO `ensalada` (`Id_ensalada`, `ensalada`) VALUES
(1, 'Ensalada fresca'),
(2, 'Ensalada de coditos'),
(3, 'Ensalada blanca'),
(4, 'Chimol'),
(5, 'puré de papa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `Id` int(11) NOT NULL,
  `Id_cliente` int(11) NOT NULL,
  `Consumo_total` float(10,2) NOT NULL,
  `Cambio` int(11) DEFAULT NULL,
  `Creado` datetime NOT NULL,
  `Modificado` datetime NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`Id`, `Id_cliente`, `Consumo_total`, `Cambio`, `Creado`, `Modificado`, `Status`) VALUES
(1, 12, 8.10, NULL, '2020-09-09 10:28:26', '2020-09-09 10:28:26', 0),
(2, 12, 7.65, NULL, '2020-09-10 08:47:53', '2020-09-10 08:47:53', 0),
(3, 12, 3.00, NULL, '2020-10-07 21:19:37', '2020-10-07 21:19:37', 1),
(4, 12, 6.50, 0, '2020-10-09 11:49:19', '2020-10-09 11:49:19', 1),
(5, 12, 4.50, 5, '2020-10-09 17:32:56', '2020-10-09 17:32:56', 1),
(6, 13, 19.98, 20, '2020-10-09 17:42:29', '2020-10-09 17:42:29', 1),
(7, 12, 4.50, 5, '2020-10-09 17:44:36', '2020-10-09 17:44:36', 1),
(8, 12, 7.80, 10, '2020-10-14 15:33:07', '2020-10-14 15:33:07', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_items`
--

CREATE TABLE `orden_items` (
  `Id` int(11) NOT NULL,
  `Id_orden` int(11) NOT NULL,
  `Id_producto` int(11) NOT NULL,
  `Id_ensalada` varchar(5) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `Sub_total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden_items`
--

INSERT INTO `orden_items` (`Id`, `Id_orden`, `Id_producto`, `Id_ensalada`, `Cantidad`, `Sub_total`) VALUES
(1, 1, 23, '1', 3, 8.10),
(2, 2, 9, '1', 1, 1.95),
(3, 2, 24, '5', 1, 2.70),
(4, 2, 35, '1', 1, 3.00),
(5, 3, 71, '1', 2, 3.00),
(6, 4, 37, '4', 1, 3.50),
(7, 4, 23, '1', 1, 3.00),
(8, 5, 72, '1', 3, 4.50),
(9, 6, 79, '1', 2, 19.98),
(10, 7, 72, '1', 3, 4.50),
(11, 8, 73, '1', 3, 7.80);

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
(23, 'Pollo encebollado', '3.00', 'pollo', 'assets/img/pollo-encebollado.jpg'),
(24, 'Pierna asada a la plancha', '3.00', 'pollo', 'assets/img/pierna-asada.jpg'),
(25, 'Pollo guisado', '2.50', 'pollo', 'assets/img/pollo-guisado.jpg'),
(26, 'Pechuga deshuesada a la plancha', '2.80', 'pollo', 'assets/img/pechuga_deshuesada.jpg'),
(27, 'pechuga empanizada', '2.80', 'pollo', 'assets/img/pechuga_empanizada.jpg'),
(28, 'Pechuga deshuesada en crema de hongos', '2.90', 'pollo', 'assets/img/pollo-en-crema.jpg'),
(29, 'Tortitas de carne de res', '2.40', 'res', 'assets/img/albondigas.jpg'),
(30, 'carne guisada', '3.00', 'res', 'assets/img/Carne_guisada.jpg'),
(31, 'Bistec de res', '3.50', 'res', 'assets/img/bistec_res.jpg'),
(32, 'Bistec de higado', '3.00', 'res', 'assets/img/bistec_higado.jpg'),
(33, 'Carne de res a la plancha', '3.50', 'res', 'assets/img/Carne-res-plancha.jpg'),
(34, 'Lomo de cerdo en salsa de tomate', '2.70', 'cerdo', 'assets/img/Lomo_cerdo_en_salsa.jpg'),
(35, 'Lomo de cerdo asado a la plancha', '3.50', 'cerdo', 'assets/img/Lomo_cerdo_asado.jpg'),
(36, 'Chuleta ahumada de cerdo en salsa de tomate', '2.90', 'cerdo', 'assets/img/chuleta_cerdo.jpg'),
(37, 'Costilla de cerdo en salsa', '3.50', 'cerdo', 'assets/img/Costilla_cerdo.jpg'),
(39, 'Relleno de papa', '2.40', 'Rellenos', 'assets/img/relleno-papa.jpg'),
(40, 'Relleno de ejote', '2.40', 'Rellenos', 'assets/img/relleno-ejote.jpg'),
(41, 'Relleno de pacaya', '2.40', 'Rellenos', 'assets/img/relleno-pacaya.jpg'),
(42, 'Chilaquiles', '2.40', '', ''),
(48, 'Spaguetti en crema', '2.40', 'pasta', 'assets/img/spaguetti-en-crema.jpg'),
(49, 'Pipianes en crema', '1.10', 'principal', 'assets/img/pipianes-en-crema.jpg'),
(50, 'Arroz', '0.50', 'complem', ''),
(51, 'Chimol', '1.00', 'ensalada', ''),
(52, 'Arroz', '1.00', 'complem', ''),
(53, 'Sopa de res', '2.00', 'sopa', 'assets/img/Sopa_res.jpg'),
(57, 'Torta al pastor', '2.60', 'Torta', 'assets/img/torta-al-pastor.jpg'),
(58, 'Torta de res', '2.80', 'Torta', 'assets/img/torta-de-res.jpg'),
(59, 'Hamburguesa clasica', '3.00', 'Hamburguer', 'assets/img/hamburguesa-clasica.jpg'),
(60, 'Hamburguesa doble', '3.50', 'Hamburguer', 'assets/img/hamburguesa-de-ternera.jpg'),
(61, 'Pizza suprema', '8.99', 'Pizza', 'assets/img/pizza-suprema.jpg'),
(62, 'pizza con camarones', '10.99', 'Pizza', 'assets/img/pizza-camarones.jpg'),
(63, 'Tacos al pastor', '2.50', 'Mexicana', 'assets/img/tacos-al-pastor.jpg'),
(64, 'Tacos de res', '2.50', 'Mexicana', 'assets/img/tacos-de-carne.jpg'),
(65, 'Quesadilla mexicana', '3.50', 'Mexicana', 'assets/img/Quesadilla-mexicana.jpg'),
(66, 'Yuca frita con pepesca', '3.25', 'Antojitos', 'assets/img/yuca-frita-con-pepesca.jpg'),
(67, 'Yuca frita con chicharron', '3.25', 'Antojitos', 'assets/img/yuca-frita-chicharron.jpg'),
(68, 'Frosen de fruta', '1.50', 'Helados', 'assets/img/frozen.jpg'),
(69, 'mangoneadas de fruta', '1.50', 'Helados', 'assets/img/mangoneada.jpg'),
(70, 'Pupusas de frijol con queso', '1.50', 'Pupusas', 'assets/img/pupusas.jpg'),
(71, 'pupusas de queso', '1.50', 'Pupusas', 'assets/img/Pupusas.jpg'),
(72, 'Pupusas de chicharron', '1.50', 'Pupusas', 'assets/img/Pupusas.jpg'),
(73, 'Torta de cerdo', '2.60', 'Torta', 'assets/img/torta-al-pastor.jpg'),
(74, 'Torta de Pollo', '2.60', 'Torta', 'assets/img/torta-al-pastor.jpg'),
(75, 'Hamburguesa de queso', '3.50', 'Hamburguer', 'assets/img/hamburguesa-de-ternera.jpg'),
(76, 'Hamburguesa doble queso', '3.50', 'Hamburguer', 'assets/img/hamburguesa-de-ternera.jpg'),
(77, 'yuca frita con merienda', '3.25', 'Antojitos', 'assets/img/yuca-frita-con-pepesca.jpg'),
(78, 'yuca frita extra', '3.50', 'Antojitos', 'assets/img/yuca-frita-con-pepesca.jpg'),
(79, 'Pizza 4 jamon con peperoni', '9.99', 'Pizza', 'assets/img/pizza-suprema.jpg'),
(80, 'Pizza de carne', '9.99', 'Pizza', 'assets/img/pizza-suprema.jpg'),
(81, 'Mangoneada loca', '1.50', 'Helados', 'assets/img/frozen.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `ensalada`
--
ALTER TABLE `ensalada`
  ADD PRIMARY KEY (`Id_ensalada`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `orden_items`
--
ALTER TABLE `orden_items`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_orden` (`Id_orden`);

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
  MODIFY `Id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ensalada`
--
ALTER TABLE `ensalada`
  MODIFY `Id_ensalada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `orden_items`
--
ALTER TABLE `orden_items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
