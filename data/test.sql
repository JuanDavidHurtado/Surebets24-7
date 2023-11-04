-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 03:23:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision`
--

CREATE TABLE `comision` (
  `idComision` int(11) NOT NULL,
  `comValor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `usu_inv` int(11) NOT NULL,
  `comEstado` enum('PENDIENTE','EN PROCESO','ANULADO','FINALIZADO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PENDIENTE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comision`
--

INSERT INTO `comision` (`idComision`, `comValor`, `usuario_idUsuario`, `usu_inv`, `comEstado`) VALUES
(1, '10', 1, 5, 'PENDIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `idContenido` int(11) NOT NULL,
  `conNombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `curso_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`idContenido`, `conNombre`, `curso_idCurso`) VALUES
(1, 'Introduccion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `curNombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `curEstado` enum('ACTIVO','INACTIVO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `curNombre`, `curEstado`) VALUES
(1, 'Aprendizaje Basico', 'ACTIVO'),
(2, 'Aprendizaje Experto', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `estNombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estNombre`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inversion`
--

CREATE TABLE `inversion` (
  `idInversion` int(11) NOT NULL,
  `invNombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `invPorcentaje` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `invPorcentajeComision` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `invValor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `invEstado` enum('ACTIVO','INACTIVO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inversion`
--

INSERT INTO `inversion` (`idInversion`, `invNombre`, `invPorcentaje`, `invPorcentajeComision`, `invValor`, `invEstado`) VALUES
(1, 'Novato', '10', '7', '100', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `idMetodo` int(11) NOT NULL,
  `metTitular` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `metBanco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `metTipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `metNumero` int(11) NOT NULL,
  `metDocumento` int(11) NOT NULL,
  `metEstado` enum('ACTIVO','INACTIVO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ACTIVO',
  `usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `metodo_pago`
--

INSERT INTO `metodo_pago` (`idMetodo`, `metTitular`, `metBanco`, `metTipo`, `metNumero`, `metDocumento`, `metEstado`, `usuario_idUsuario`) VALUES
(1, 'Titular', 'Banco', 'Cuenta Ahorros', 1234322345, 42342423, 'INACTIVO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPago` int(11) NOT NULL,
  `pagFecha` datetime NOT NULL,
  `pagHash` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idPago`, `pagFecha`, `pagHash`) VALUES
(1, '2023-11-01 00:00:00', 'Test Hash'),
(2, '2023-11-01 00:00:00', 'Test Hash'),
(4, '2023-11-01 00:00:00', 'Test Hash'),
(5, '2023-11-02 00:00:00', 'Hash 2023-11-02'),
(8, '2023-11-02 00:00:00', 'Hash 2023-11-02'),
(9, '2023-11-12 00:00:00', 'hash 2023-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `rolNombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rolDescripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `rolNombre`, `rolDescripcion`) VALUES
(1, 'Administrador', 'Super Usuario'),
(2, 'Aspirante', 'Level 1'),
(3, 'Practicante', 'Level 2'),
(4, 'Moderado', 'Level 3'),
(5, 'Entrenado', 'Level 4'),
(6, 'Directo', 'Level 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuPatrocinador` int(11) DEFAULT NULL,
  `usuFecRegistro` datetime NOT NULL,
  `usuCodigo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `usuDocumento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `usuNombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `usuApellido` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `usuCorreo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `usuTelefono` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `usuDireccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuLogin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `usuClave` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `rol_idRol` int(11) NOT NULL,
  `estado_idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuPatrocinador`, `usuFecRegistro`, `usuCodigo`, `usuDocumento`, `usuNombre`, `usuApellido`, `usuCorreo`, `usuTelefono`, `usuDireccion`, `usuLogin`, `usuClave`, `rol_idRol`, `estado_idEstado`) VALUES
(1, NULL, '2023-11-14 00:00:00', '1061745864', '1061745864', 'Juan', 'Hurtado', 'jj@gmail.com', '3213456789', '', '1061745864', '123456', 1, 2),
(2, 1, '2023-11-14 00:00:00', '34558865', '34558865', 'Tatiana', 'Dorado', 'tata@gmail.com', '1234567890', '', '34558865', '123455432', 2, 1),
(13, NULL, '2023-11-03 00:00:00', 'dEqnO8H4SoyvYr02XbNLsWCwz', '1061543234', 'Lorena', 'Astudillo', 'astudillo@gmail.com', '3404567892', '', '1061543234', '$2y$10$b9IhoI3ZjLOLDStA9mlLG.ysiOIvPFpw5.emwaZTKM8cYjN/h2tBG', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_curso`
--

CREATE TABLE `usuario_curso` (
  `id_usu_cur` int(11) NOT NULL,
  `cur_fecha` date NOT NULL,
  `curEstado` enum('PENDIENTE','EN PROCESO','ANULADO','FINALIZADO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PENDIENTE',
  `usuario_idUsuario` int(11) NOT NULL,
  `curso_idCurso` int(11) NOT NULL,
  `pago_idPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario_curso`
--

INSERT INTO `usuario_curso` (`id_usu_cur`, `cur_fecha`, `curEstado`, `usuario_idUsuario`, `curso_idCurso`, `pago_idPago`) VALUES
(2, '2023-11-03', 'EN PROCESO', 1, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_inversion`
--

CREATE TABLE `usuario_inversion` (
  `id_usu_inv` int(11) NOT NULL,
  `inv_fecha_inicio` date NOT NULL,
  `inv_fecha_final` date NOT NULL,
  `inv_dias` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `usu_inv_estado` enum('PENDIENTE','EN PROCESO','ANULADO','FINALIZADO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PENDIENTE',
  `usuario_idUsuario` int(11) NOT NULL,
  `inversion_idInversion` int(11) NOT NULL,
  `pago_idPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario_inversion`
--

INSERT INTO `usuario_inversion` (`id_usu_inv`, `inv_fecha_inicio`, `inv_fecha_final`, `inv_dias`, `usu_inv_estado`, `usuario_idUsuario`, `inversion_idInversion`, `pago_idPago`) VALUES
(5, '2023-11-02', '2024-01-01', '60', 'PENDIENTE', 2, 1, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comision`
--
ALTER TABLE `comision`
  ADD PRIMARY KEY (`idComision`),
  ADD KEY `usuario_idUsuario_idx` (`usuario_idUsuario`),
  ADD KEY `usu_inv_idx` (`usu_inv`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`idContenido`),
  ADD KEY `curso_idCurso_idx` (`curso_idCurso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `inversion`
--
ALTER TABLE `inversion`
  ADD PRIMARY KEY (`idInversion`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`idMetodo`),
  ADD KEY `usu_metodo` (`usuario_idUsuario`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idPago`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `estado_idEstado_idx` (`estado_idEstado`),
  ADD KEY `rol_idRol_idx` (`rol_idRol`),
  ADD KEY `usu_referido` (`usuPatrocinador`);

--
-- Indices de la tabla `usuario_curso`
--
ALTER TABLE `usuario_curso`
  ADD PRIMARY KEY (`id_usu_cur`),
  ADD KEY `usuario_idUsuario_idx` (`usuario_idUsuario`),
  ADD KEY `curso_idCurso_idx` (`curso_idCurso`),
  ADD KEY `pago_idPago_idx` (`pago_idPago`);

--
-- Indices de la tabla `usuario_inversion`
--
ALTER TABLE `usuario_inversion`
  ADD PRIMARY KEY (`id_usu_inv`),
  ADD KEY `usuario_idUsuario_idx` (`usuario_idUsuario`),
  ADD KEY `inversion_idInversion_idx` (`inversion_idInversion`),
  ADD KEY `pago_idPago_idx` (`pago_idPago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comision`
--
ALTER TABLE `comision`
  MODIFY `idComision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `idContenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inversion`
--
ALTER TABLE `inversion`
  MODIFY `idInversion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `idMetodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario_curso`
--
ALTER TABLE `usuario_curso`
  MODIFY `id_usu_cur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_inversion`
--
ALTER TABLE `usuario_inversion`
  MODIFY `id_usu_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comision`
--
ALTER TABLE `comision`
  ADD CONSTRAINT `fk_usuario_idUsuario` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usu_inv` FOREIGN KEY (`usu_inv`) REFERENCES `usuario_inversion` (`id_usu_inv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `curso_idCurso` FOREIGN KEY (`curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD CONSTRAINT `usu_metodo` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `estado_idEstado` FOREIGN KEY (`estado_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rol_idRol` FOREIGN KEY (`rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usu_referido` FOREIGN KEY (`usuPatrocinador`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_curso`
--
ALTER TABLE `usuario_curso`
  ADD CONSTRAINT `fk_curso_idCurso` FOREIGN KEY (`curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pago_idPago` FOREIGN KEY (`pago_idPago`) REFERENCES `pago` (`idPago`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_inversion`
--
ALTER TABLE `usuario_inversion`
  ADD CONSTRAINT `inversion_idInversion` FOREIGN KEY (`inversion_idInversion`) REFERENCES `inversion` (`idInversion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pago_idPago` FOREIGN KEY (`pago_idPago`) REFERENCES `pago` (`idPago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_idUsuario` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
