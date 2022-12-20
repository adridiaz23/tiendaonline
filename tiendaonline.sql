-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 10:14:35
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
(19, 3, 1, 5),
(20, 16, 2, 11),
(23, 9, 2, 28),
(24, 9, 1, 29);

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
(10, 'adri@gmail.com', '2022-11-14', 0, 0.00),
(11, 'albert@gmail.com', '2022-12-07', 0, 0.00),
(12, 'victor@gmail.com', '2022-12-19', 0, 0.00),
(13, 'alejandro@gmail.com', '2022-12-19', 0, 0.00),
(14, 'victor@gmail.com', '0000-00-00', 0, 90.00),
(15, 'victor@gmail.com', '0000-00-00', 0, 90.00),
(16, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(17, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(18, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(19, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(20, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(21, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(22, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(23, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(24, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(25, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(26, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(27, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(28, 'victor@gmail.com', '2022-12-19', 0, 90.00),
(29, 'victor@gmail.com', '2022-12-19', 0, 45.00);

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
(10, 'PHP Pandas', 'Este libro es para principiantes y desarrolladores de nivel intermedio que deseen aprender cosas nuevas y mejorar sus habilidades...', 'views/css/assets/fotos/foto_10.jpg', 38.00, 15, 4, 'Dayler rees', 0, 0),
(11, 'JavaScript, ¡Inspírate!', 'Este libro que tienes ahora mismo ante tus ojos, es el resultado de mi esfuerzo personal, con el objeto de crear un instrumento sencillo y simple que muestre al lector la base de un lenguaje tan peculiar y extendido como JavaScript. ', 'views/css/assets/fotos/foto_11.jpg', 25.00, 19, 1, 'Leanpub', 0, 0),
(12, 'C Sharp Programming', 'Although C# is derived from the C programming language, it has features such as garbage collection that allow beginners to become proficient in C# more quickly than in C or C++. Similar to Java, it is object-oriented, comes with an extensive class library, and supports exception handling, multiple types of polymorphism.', 'views/css/assets/fotos/foto_12.jpg', 20.00, 30, 2, 'Wikibooks', 0, 0),
(13, 'Learn Programming', 'This book is aimed at readers who are interested in software development but have very little to no prior experience.', 'views/css/assets/fotos/foto_13.jpg', 15.00, 10, 2, 'Autoedición', 0, 0),
(14, 'Arduino Programming', 'This paper is an introduction to Arduino programming for students who learned C on \"Scientific Programming\" by L.M. Barone, E. Marinari, G. Organtini and F. Ricci–Tersenghi, edited by World Scientific (or its italian counterpart \"Programmazione Scientifica\" edited by Pearson). ', 'views/css/assets/fotos/foto_14.jpg', 10.00, 50, 2, 'Sapieza Univesità di Roma', 0, 0),
(15, 'The New C Standard', 'En marzo de 2000, ANSI adoptó el estándar ISO/IEC 9899:1999. A este estándar se le conoce como C99, y es el estándar actual para el lenguaje de programación C.\r\nANSI C es compatible por casi todos los compiladores, dado que la gran parte del código escrito en C está basado en ANSI C. Se da por hecho que cualquier programa escrito sólo según el estándar C sin dependencia alguna del hardware se compila de forma correcta en cualquier plataforma con una implementación conforme con C. ', 'views/css/assets/fotos/foto_15.jpg', 21.00, 6, 2, 'Autoedición', 0, 0),
(16, ' C#', 'Fundamentals of Computer Programming with C#.\r\nIf you want to take up programming seriously, you’ve come across the right book. For real! This is the book with which you can make your first steps in programming. It will give a flying start to your long journey into learning modern programming languages and software development technologies. ', 'views/css/assets/fotos/foto_16.jpg', 20.00, 19, 2, 'Telerik Software Academy', 0, 0),
(17, 'TypeScript', 'TypeScript es un lenguaje de programación libre y de código abierto desarrollado y mantenido por Microsoft. Es un superconjunto de JavaScript, que esencialmente añade tipado estático y objetos basados en clases. Anders Hejlsberg, diseñador de C# y creador de Delphi y Turbo Pascal, ha trabajado en el desarrollo de TypeScript . ', 'views/css/assets/fotos/foto_17.jpg', 25.00, 8, 1, 'Autoedición', 0, 0),
(18, 'Optimization Coaching', 'The performance of dynamic object-oriented programming languages such as JavaScript depends heavily on highly optimizing just-in-time compilers. Such compilers, like all compilers, can silently fall back to generating conservative, low-performance code during optimization. ', 'views/css/assets/fotos/foto_18.jpg', 19.00, 22, 1, 'ECOOP', 0, 0),
(19, 'Javascript in Ten Minutes', 'JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, basado en prototipos, imperativo, débilmente tipado y dinámico.\r\n\r\nEsta guía es para todo aquel que quiera conocer Javascript de una forma rápida pero amplia.', 'views/css/assets/fotos/foto_19.jpg', 19.00, 15, 1, 'Autoedición', 0, 0),
(20, 'Symfony, the Cookbook', 'Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community — all working together in harmony.\r\nThe Symfony Cookbook is a continuously growing collection of specific recipes that explain how to correctly solve the most recurrent problems that Symfony developers face in their day to day work.', 'views/css/assets/fotos/foto_20.jpg', 15.00, 10, 4, 'Autoedición', 0, 0),
(21, 'PHP Notes for Professionals', 'This PHP Notes for Professionals book is compiled from Stack Overflow Documentation, the content is written by the beautiful people at Stack Overflow.\r\nText content is released under Creative Commons BY-SA, see credits at the end of this book whom contributed to the various chapters. Images may be copyright of their respective owners unless otherwise specified.', 'views/css/assets/fotos/foto_21.jpg', 17.00, 6, 4, 'GoalKicker.com', 0, 0),
(22, 'CodeIgniter', 'Su objetivo es permitirle desarrollar proyectos mucho más rápido que lo que podría hacer si escribiera el código desde cero, proveyéndole un rico conjunto de bibliotecas para tareas comunes, así como y una interfaz sencilla y una estructura lógica para acceder a esas bibliotecas. ', 'views/css/assets/fotos/foto_22.jpg', 18.00, 14, 4, 'Autoedición', 0, 0),
(23, 'CodeIgniter 2', 'CodeIgniter es un framework para desarrollo de aplicaciones - un conjunto de herramientas - para gente que construye sitios web usando PHP. Su objetivo es permitirle desarrollar proyectos mucho más rápido que lo que podría hacer si escribiera el código desde cero, proveyéndole un rico conjunto de bibliotecas para tareas comunes así como y una interfaz sencilla y una estructura lógica para acceder a esas bibliotecas.', 'views/css/assets/fotos/foto_23.jpg', 16.00, 5, 4, 'Autoedición', 0, 0),
(24, 'Laboratorio de PHP y MySQL', 'En este manual se mostrará como configurar un entorno PHP - MySQL, uno de los tándems más frecuentes en cuanto a desarrollo web que puede encontrarse hoy día: la combinación de Software Libre y un demostrado rendimiento y escalibilidad, ha hecho de esta configuración casi un estándar para la elaboración de soluciones y aplicaciones basadas en web.', 'views/css/assets/fotos/foto_24.jpg', 18.00, 8, 4, 'UOC', 0, 0),
(25, 'Programming in C++', 'C++ is a general purpose programming language. It has imperative, object-oriented and generic programming features, while also providing the facilities for low level memory manipulation.', 'views/css/assets/fotos/foto_25.jpg', 16.00, 6, 3, 'David Guichard', 0, 0),
(26, 'The Rook\'s Guide to C++', 'What you are reading is the first of what I hope to be many everimproving iterations of a useful C++ textbook. We’ve gone fairly quickly from whim to print on an all-volunteer basis, and as a result, there are many things that I’d add and change if I had an infinite amount of time in my schedule.', 'views/css/assets/fotos/foto_26.jpg', 20.00, 2, 3, 'Jeremy A. Hansen', 0, 0),
(27, ' PC Assembly Language', 'The purpose of this book is to give the reader a better understanding of how computers really work at a lower level than in programming languages like Pascal. By gaining a deeper understanding of how computers work, the reader can often be much more productive developing software in higher level languages such as C and C++. ', 'views/css/assets/fotos/foto_27.jpg', 20.00, 1, 3, 'Paul A. Carter', 0, 0),
(28, 'Fundamentos de Programación', 'Este manual pretende ser una guía de referencia para la utilización del lenguaje de programación C++ en el desarrollo de programas. Está orientada a alumnos de primer curso de programación de Ingeniería Informática y está concebido como un libro de apoyo a la docencia.', 'views/css/assets/fotos/foto_28.jpg', 10.00, 30, 3, 'Viciente Benjumea', 0, 0),
(29, 'Fundamentos de la Programación', 'Esta publicación contiene los apuntes de clase de la asignatura Fundamentos de la programación, asignatura de 1º curso de los grados que se imparten en la Facultad de Informática de la UCM.', 'views/css/assets/fotos/foto_29.jpg', 15.00, 9, 3, 'Luis Hernández Yáñez', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `idOpinion` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `comentario` tinytext NOT NULL,
  `valoracion` int(5) NOT NULL,
  `correoCliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`idOpinion`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `valoraciones_ibfk_2` (`correoCliente`);

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
  MODIFY `idDetallePedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `idOpinion` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Filtros para la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD CONSTRAINT `valoraciones_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `producto` (`ISBN`),
  ADD CONSTRAINT `valoraciones_ibfk_2` FOREIGN KEY (`correoCliente`) REFERENCES `cliente` (`correoCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
