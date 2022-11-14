-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2022 a las 14:16:08
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaonline`
--
CREATE DATABASE IF NOT EXISTS `tiendaonline` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tiendaonline`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `nombre` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`nombre`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `estado`) VALUES
(1, 'JavaScript', 0),
(2, 'C', 0),
(3, 'C++', 0),
(4, 'PHP', 0),
(6, 'CSS', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correoCliente` varchar(30) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `password` varchar(50) NOT NULL,
  `codigoPostal` varchar(5) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `apellido`, `correoCliente`, `calle`, `numero`, `dni`, `password`, `codigoPostal`, `estado`) VALUES
('adri', 'diaz', 'adri@gmail.com', '1', 1, '222222222', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0),
('albert', 'diaz', 'albert@gmail.com', '1', 1, '666666666', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0),
('alejandro', 'moreno', 'alejandro@gmail.com', '1', 1, '555555555', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0),
('david', 'raigoza', 'david@gmail.com', '1', 1, '333333333', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0),
('guille', 'navarro', 'guille@gmail.com', '1', 1, '777777777', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0),
('pau', 'raigoza', 'pau@gmail.com', '1', 1, '444444444', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0),
('victor', 'lopez', 'victor@gmail.com', '1', 1, '111111111', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `idDetallePedido` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`idDetallePedido`, `ISBN`, `unidades`, `idPedido`) VALUES
(5, 9, 1, 4),
(6, 5, 1, 4),
(7, 1, 1, 5),
(8, 5, 1, 5),
(9, 2, 1, 6),
(10, 7, 1, 6),
(11, 3, 1, 7),
(12, 9, 1, 7),
(13, 7, 1, 7),
(14, 8, 1, 8),
(15, 6, 1, 9),
(16, 9, 1, 9),
(17, 6, 1, 10),
(18, 10, 1, 10),
(19, 3, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `correoCliente` varchar(30) NOT NULL,
  `fechaPeticion` date NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  `importeTotal` float(6,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `correoCliente`, `fechaPeticion`, `estado`, `importeTotal`) VALUES
(4, 'victor@gmail.com', '2022-11-14', 0, 0.00),
(5, 'pau@gmail.com', '2022-11-14', 0, 0.00),
(6, 'guille@gmail.com', '2022-11-14', 0, 0.00),
(7, 'david@gmail.com', '2022-11-14', 0, 0.00),
(8, 'alejandro@gmail.com', '2022-11-14', 0, 0.00),
(9, 'albert@gmail.com', '2022-11-14', 0, 0.00),
(10, 'adri@gmail.com', '2022-11-14', 0, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ISBN` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio` float(6,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0,
  `estado` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ISBN`, `nombre`, `descripcion`, `imagen`, `precio`, `stock`, `categoria`, `autor`, `destacado`, `estado`) VALUES
(1, 'Código limpio', 'Cada año, se invierten innumerables horas y se pierden numerosos recursos debido a código mal escrito...', 'views/css/assets/fotos/foto_1.jpg', 15.00, 5, 2, 'Robert C. Martin', 0, 0),
(2, 'Eloquent javascript', 'Este libro se introduce dentro del lenguaje Javascript...', 'views/css/assets/fotos/foto_2.jpg', 10.00, 5, 1, 'Marijn Haverbeke', 0, 0),
(3, 'The pragmatic programmer ', 'Muy buen libro, recomendado para aquellos programadores que quieren afianzar conceptos...', 'views/css/assets/fotos/foto_3.jpg', 20.00, 8, 3, 'Andrew Hunt & David Thomas', 0, 0),
(4, 'Introduction to Algorithms ', ' Mejores prácticas de programación.', 'views/css/assets/fotos/foto_4.jpg', 16.00, 4, 4, 'Clifford stein', 0, 0),
(5, 'Code Complete 2', ' Mejores prácticas de programación.', 'views/css/assets/fotos/foto_5.jpg', 35.00, 15, 2, 'Steve McConnell', 0, 0),
(6, 'Introducción a CSS', 'Introducción a CSS ', 'views/css/assets/fotos/foto_6.jpg', 10.00, 6, 6, 'Javier Eguiluz', 0, 0),
(7, 'Introducción a HTML', 'Introducción a HTML', 'views/css/assets/fotos/foto_7.jpg', 20.00, 4, 6, 'Javier Eguiluz', 0, 0),
(8, 'JavaScript. La Guía Definitiva', 'JavaScript es el lenguaje interpretado más utilizado, principalmente en la construcción de páginas Web...', 'views/css/assets/fotos/foto_8.jpg', 80.00, 14, 1, 'David Flanagan', 0, 0),
(9, 'C++ Annotations', 'En su Versión 10.7.2, este libro ofrece un extenso tutorial sobre el lenguaje de programación C ++...', 'views/css/assets/fotos/foto_9.jpg', 45.00, 19, 3, 'Frank B.Brokken', 0, 0),
(10, 'PHP Pandas', 'Este libro es para principiantes y desarrolladores de nivel intermedio que deseen aprender cosas nuevas y mejorar sus habilidades...', 'views/css/assets/fotos/foto_10.jpg', 38.00, 15, 4, 'Dayler rees', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`correoCliente`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`idDetallePedido`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `correoCliente` (`correoCliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `categoria` (`categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `idDetallePedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`),
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`ISBN`) REFERENCES `producto` (`ISBN`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`correoCliente`) REFERENCES `cliente` (`correoCliente`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
