-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2022 a las 10:27:48
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
  `password` varchar(50) NOT NULL,
  PRIMARY KEY(`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY(`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `dni` varchar(9) NOT NULL UNIQUE,
  `password` varchar(50) NOT NULL,
  `codigoPostal` varchar(5) NOT NULL,
  PRIMARY KEY(`correoCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
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
  PRIMARY KEY(`ISBN`),
  FOREIGN KEY (`categoria`) REFERENCES `categoria`(`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `correoCliente` varchar(30) NOT NULL,
  `fechaPeticion` date NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  `importeTotal` float(6,2) NOT NULL DEFAULT 0,
  PRIMARY KEY(`idPedido`),
  FOREIGN KEY (`correoCliente`) REFERENCES `cliente`(`correoCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `idDetallePedido` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  PRIMARY KEY(`idDetallePedido`),
  FOREIGN KEY (`idPedido`) REFERENCES `pedido`(`idPedido`),
  FOREIGN KEY (`ISBN`) REFERENCES `producto`(`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
