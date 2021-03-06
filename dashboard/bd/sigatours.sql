-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2021 a las 19:21:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sigatours`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencias`
--

CREATE TABLE `agencias` (
  `idAgencia` int(11) NOT NULL,
  `razon_social` varchar(100) DEFAULT NULL,
  `nombre_comercial` varchar(100) DEFAULT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `num_exterior` varchar(10) DEFAULT NULL,
  `num_interior` varchar(10) DEFAULT NULL,
  `colonia` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `moneda` varchar(50) DEFAULT NULL,
  `tel1` varchar(20) DEFAULT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `tel3` varchar(20) DEFAULT NULL,
  `pagina_web` varchar(200) DEFAULT NULL,
  `activo` enum('Si','No') DEFAULT 'Si',
  `clave_back_office` varchar(100) NOT NULL,
  `header_footer` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `menu` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `logo` varchar(200) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `nombre_contacto` varchar(100) DEFAULT NULL,
  `apellido_paterno` varchar(100) DEFAULT NULL,
  `apellido_materno` varchar(100) DEFAULT NULL,
  `cargo` varchar(50) NOT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `tel_directo` varchar(20) NOT NULL,
  `tel_movil` varchar(20) DEFAULT NULL,
  `email_contacto` varchar(100) DEFAULT NULL,
  `email_servidor` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `servidor_smtp` varchar(100) DEFAULT NULL,
  `port_smtp` varchar(100) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombre`, `visible`) VALUES
(1, 'Hotel + Vuelo en Sigatours', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `idPromocion` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url_imagen1` varchar(200) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_publicacion` date NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `servicio` text DEFAULT NULL,
  `hotel` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`idPromocion`, `titulo`, `url_imagen1`, `descripcion`, `fecha_publicacion`, `visible`, `servicio`, `hotel`, `precio`) VALUES
(1, 'Compra tu Hotel + Vuelo en Sigatours', 'uploads/images/20210611031156_promocion.jpg', '', '2021-06-22', 1, NULL, NULL, NULL),
(3, 'as', 'uploads/images/20210624165809_promocion.jpg', '', '2021-06-24', 1, NULL, NULL, NULL),
(4, 'tres', 'uploads/images/20210624170928_promocion.jpg', '', '2021-06-24', 1, NULL, NULL, NULL),
(5, 'cuatro', 'uploads/images/20210624171155_promocion.jpg', '', '2021-06-24', 1, NULL, NULL, NULL),
(6, 'five', 'uploads/images/20210624171254_promocion.jpg', '', '2021-06-24', 1, NULL, NULL, NULL),
(7, 'six', 'uploads/images/20210624171909_promocion.jpg', '', '2021-06-24', 1, NULL, NULL, NULL),
(8, 'seven', 'uploads/images/20210624171928_promocion.jpg', '', '2021-06-24', 1, NULL, NULL, NULL),
(9, 'eight', 'uploads/images/20210624172004_promocion.jpg', '', '2021-06-25', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franquicias`
--

CREATE TABLE `franquicias` (
  `idFranquicia` int(11) NOT NULL,
  `nombre_completo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `franquicias`
--

INSERT INTO `franquicias` (`idFranquicia`, `nombre_completo`, `email`, `ciudad`, `telefono`, `comentarios`, `fecha_creacion`) VALUES
(1, 'test', 'test@test.com.mx', 'Acámbaro', 'test', '', NULL),
(2, 'test', 'test@test.com.mx', 'test', 'test', 'test', NULL),
(3, 'test2', 'test@test.com.mx', 'test2', 'test2', 'test2', NULL),
(4, 'test', 'test@test.com.mx', 'tr', 'tr', 'asdf', NULL),
(5, 'test3', 'test@test.com.mx', 'Acámbaro', 'test', 'test', NULL),
(6, 'test4', 'test@test.com.mx', 'Acámbaro', 'test', 'test', NULL),
(7, 'test5', 'test@test.com.mx', 'Acámbaro', 'test2', 'asfd', NULL),
(8, 'test5', 'test@test.com.mx', 'Acámbaro', 'test2', 'asfd', NULL),
(9, 'test', 'admin@miacambaro.mx', 'Acámbaro', 'test', 'zada', NULL),
(10, 'test', 'admin@miacambaro.mx', 'Acámbaro', 'test', 'zada', NULL),
(11, 'test', 'test@test.com.mx', 'Acámbaro', 'test', 'asdf', NULL),
(12, 'prueba', 'test@test.com.mx', 'test', 'test', 'test', NULL),
(13, 'test9', 'admin@miacambaro.mx', 'Acámbaro', 'test', 'fh', NULL),
(15, 'test6', 'admin@miacambaro.mx', 'Acámbaro', 'test2', 'asda', NULL),
(16, 'rigo', 'rigox100@gmail.com', 'acambaro', '417test', 'rigo', '2021-06-11'),
(17, 'hola', 'rigox100@gmail.com', 'prueba', 'prueba', 'prueba', '2021-06-11'),
(18, 'adio', 'rigox100@gmail.com', 'prueba', 'prueba', 'probando', '2021-06-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `idPromocion` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url_imagen1` varchar(200) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_publicacion` date NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `servicio` text DEFAULT NULL,
  `hotel` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`idPromocion`, `titulo`, `url_imagen1`, `descripcion`, `fecha_publicacion`, `visible`, `servicio`, `hotel`, `precio`) VALUES
(8, 'uno', 'uploads/images/20210611031547_promocion.jpg', '', '2021-06-11', 1, NULL, NULL, NULL),
(9, 'dos', 'uploads/images/20210611031534_promocion.jpg', '', '2021-06-11', 1, NULL, NULL, NULL),
(11, 'tres', 'uploads/images/20210611031517_promocion.jpg', '', '2021-06-11', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rol`, `descripcion`) VALUES
(1, 'Super Administrador', 'Control y acceso total a todos los módulos de la plataforma'),
(2, 'Administrador', 'Administrador de todos los módulos del sitio web'),
(3, 'Colaborador', 'Permisos limitados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idSlider` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url_imagen1` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idSlider`, `titulo`, `url_imagen1`, `descripcion`, `fecha_publicacion`, `visible`) VALUES
(12, '', 'uploads/images/20210619021224_slider.jpg', '', '2021-06-19', 1),
(13, '', 'uploads/images/20210619021345_slider.jpg', '', '2021-06-19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `estatus` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `token` varchar(200) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `email`, `password`, `estatus`, `token`, `idRol`) VALUES
(1, 'Soporte', 'Holiday Travel', 'soporte@sigatours.com.mx', '9b412514e83ca55cabf81b68fd0b2a83', 'Activo', '9b412514e83ca55cabf81b68fd0b2a83', 1),
(2, 'Sinuhe', 'Chacón', 'sinuhe.chacon@sigatours.com.mx', '824ff5c24e2077f10b1f95893a576150', 'Activo', '824ff5c24e2077f10b1f95893a576150', 2),
(4, 'Edmundo', 'Sanchez', 'edmundo.sanchez@sigatours.com.mx', 'fda1d9125ffc6512c974638cf9a5bc6b', 'Activo', 'fda1d9125ffc6512c974638cf9a5bc6b', 2),
(5, 'Luis Fernando', 'Hernández', 'luis.hernandez@sigatours.com.mx', '16adcd1b84c8cff504a243ffa6c94282', 'Activo', '16adcd1b84c8cff504a243ffa6c94282', 3);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuarios_AFTER_DELETE` AFTER DELETE ON `usuarios` FOR EACH ROW BEGIN

END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencias`
--
ALTER TABLE `agencias`
  ADD PRIMARY KEY (`idAgencia`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`idPromocion`);

--
-- Indices de la tabla `franquicias`
--
ALTER TABLE `franquicias`
  ADD PRIMARY KEY (`idFranquicia`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`idPromocion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idSlider`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `idRol_idx` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencias`
--
ALTER TABLE `agencias`
  MODIFY `idAgencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `idPromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `franquicias`
--
ALTER TABLE `franquicias`
  MODIFY `idFranquicia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `idPromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idSlider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `idRol_idx` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
