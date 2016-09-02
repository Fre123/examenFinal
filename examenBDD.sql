-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2016 a las 02:57:20
-- Versión del servidor: 5.7.10-log
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `ID_ACT` int(11) NOT NULL,
  `CODIGO_PRIO` char(10) DEFAULT NULL,
  `CODIGO_ORG` char(10) DEFAULT NULL,
  `CODIGO_EST` char(10) DEFAULT NULL,
  `PRIORIDAD` char(100) DEFAULT NULL,
  `ESTADO` char(100) DEFAULT NULL,
  `FECHA_INICIO` datetime DEFAULT NULL,
  `FECHA_FIN` datetime DEFAULT NULL,
  `DURACION` time DEFAULT NULL,
  `COMENTARIO` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`ID_ACT`, `CODIGO_PRIO`, `CODIGO_ORG`, `CODIGO_EST`, `PRIORIDAD`, `ESTADO`, `FECHA_INICIO`, `FECHA_FIN`, `DURACION`, `COMENTARIO`) VALUES
(1, '002P', '002O', '002E', NULL, NULL, '2016-09-05 00:00:00', '2016-09-20 00:00:00', '00:00:04', 'Debe cumplirse en el tiempo establecido.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('eliminar', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('eliminar', 1, 'Elimina un registro', 'elimina', 'Elimina un registro', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('eliminar', 'eliminar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('elimina', 'Elimina un registro.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `CODIGO_EST` char(10) NOT NULL,
  `DESCRIPCION` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`CODIGO_EST`, `DESCRIPCION`) VALUES
('001E', 'Cerrado'),
('002E', 'Abierto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `ip_log` int(11) NOT NULL,
  `user_log` varchar(40) DEFAULT NULL,
  `fecha_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`ip_log`, `user_log`, `fecha_log`) VALUES
(1, NULL, '2016-08-31 23:40:43'),
(2, NULL, '2016-08-31 23:40:48'),
(3, 'freddy', '2016-08-31 23:40:52'),
(4, NULL, '2016-08-31 23:41:19'),
(5, NULL, '2016-08-31 23:41:20'),
(6, NULL, '2016-08-31 23:41:47'),
(7, 'freddy', '2016-08-31 23:41:50'),
(8, NULL, '2016-09-01 00:06:45'),
(9, NULL, '2016-09-01 22:59:44'),
(10, NULL, '2016-09-01 22:59:49'),
(11, NULL, '2016-09-01 23:42:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1472513345),
('m130524_201442_init', 1472513348),
('m140506_102106_rbac_init', 1472513366);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama`
--

CREATE TABLE `organigrama` (
  `CODIGO_ORG` char(10) NOT NULL,
  `DESCRIPCION_OR` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `organigrama`
--

INSERT INTO `organigrama` (`CODIGO_ORG`, `DESCRIPCION_OR`) VALUES
('001O', 'Sistemas'),
('002O', 'Enfermería'),
('003O', 'Lenguistica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE `prioridad` (
  `CODIGO_PRIO` char(10) NOT NULL,
  `DESCRIPCION` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`CODIGO_PRIO`, `DESCRIPCION`) VALUES
('001P', 'ALTA'),
('002P', 'MEDIA'),
('003P', 'BAJA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Freddy', 'DE-NrvRmGPatjPq1gNyU4KVZHdX7pOhc', '$2y$13$.xOrVPW/ok8xOEGEj01j9uHCkfLmnaZIeK9Fzytk66HX.JCAOudVS', NULL, 'freddy@gmail.com', 10, 1472516788, 1472516788),
(2, 'juan', 'MUPkP1oT2B3JIgB-qjJR6ozkDkZ2dOlI', '$2y$13$CY.KbcqcaVvGDpn.Ch7ucew2iNfECxBlRYBgiQibezkGhlXXx0PkW', NULL, 'juan@gmail.com', 10, 1472516839, 1472516839),
(3, 'admin', 'ISAyt9MBl6PvNORhlr5oI0rVCjK-MQI3', '$2y$13$2lPy.drxbQvXNYyrbujf.Ox0iF2ViwJFGp3ETvTzaDVzWzIJG05RW', NULL, 'admin@admin.com', 10, 1472773347, 1472773347);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`ID_ACT`),
  ADD KEY `FK_RELATIONSHIP_1` (`CODIGO_EST`),
  ADD KEY `FK_RELATIONSHIP_2` (`CODIGO_PRIO`),
  ADD KEY `FK_RELATIONSHIP_3` (`CODIGO_ORG`);

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`CODIGO_EST`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ip_log`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD PRIMARY KEY (`CODIGO_ORG`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`CODIGO_PRIO`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `ip_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`CODIGO_EST`) REFERENCES `estado` (`CODIGO_EST`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`CODIGO_PRIO`) REFERENCES `prioridad` (`CODIGO_PRIO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`CODIGO_ORG`) REFERENCES `organigrama` (`CODIGO_ORG`);

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
