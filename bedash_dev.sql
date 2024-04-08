-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2024 a las 05:46:28
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bedash_dev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_alm`
--

CREATE TABLE `tab_alm` (
  `ID` int(11) NOT NULL,
  `id_alm` int(11) NOT NULL,
  `id_tit` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `fec_ua` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_uua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_alm`
--

INSERT INTO `tab_alm` (`ID`, `id_alm`, `id_tit`, `cant`, `fec_ua`, `c_uua`) VALUES
(1, 1, 1, 150, '2024-03-28 16:36:46', 1),
(2, 1, 2, 150, '2024-03-31 16:36:46', 1),
(3, 1, 3, 150, '2024-03-31 16:36:46', 1),
(4, 2, 1, 250, '2024-03-31 17:23:50', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_almacenes`
--

CREATE TABLE `tab_almacenes` (
  `c_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `ciudad` varchar(80) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `fec_creac` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_uc` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `coment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_almacenes`
--

INSERT INTO `tab_almacenes` (`c_id`, `nombre`, `estado`, `ciudad`, `direccion`, `fec_creac`, `c_uc`, `status`, `coment`) VALUES
(1, 'Central', 'Carabobo', 'Valencia', 'Local', '2024-03-13 17:07:31', 1, 1, 'Principal'),
(2, 'Alterno', 'Distrito Capital', 'Caracas', 'Alterna', '2024-03-31 17:23:17', 1, 1, 'Almacén para pruebas con múltiples almacenes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_cons`
--

CREATE TABLE `tab_cons` (
  `c_id` int(11) NOT NULL,
  `sysdescr` varchar(100) NOT NULL,
  `coment` varchar(250) DEFAULT NULL,
  `c_uc` int(11) NOT NULL,
  `fec_cre` timestamp NOT NULL DEFAULT current_timestamp(),
  `fec_ana` timestamp NULL DEFAULT NULL,
  `fec_con` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `c_er` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_cons`
--

INSERT INTO `tab_cons` (`c_id`, `sysdescr`, `coment`, `c_uc`, `fec_cre`, `fec_ana`, `fec_con`, `status`, `c_er`) VALUES
(1, 'Consignacion de mercancia', 'Primera Consignacion en sistema', 1, '2024-03-13 17:12:38', NULL, NULL, 1, 1),
(2, 'Consignación de prueba', 'Consignado de prueba', 1, '2024-04-01 17:13:18', NULL, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_cons_d`
--

CREATE TABLE `tab_cons_d` (
  `id_con` int(11) NOT NULL,
  `id_tit` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `cant` int(11) NOT NULL DEFAULT 0,
  `cant_v` int(11) NOT NULL DEFAULT 0,
  `cant_d` int(11) NOT NULL DEFAULT 0,
  `c_in` int(11) NOT NULL,
  `fec_crea` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_cons_d`
--

INSERT INTO `tab_cons_d` (`id_con`, `id_tit`, `num`, `cant`, `cant_v`, `cant_d`, `c_in`, `fec_crea`) VALUES
(1, 1, 1, 25, 0, 0, 1, '2024-03-13 17:14:27'),
(1, 2, 2, 25, 0, 0, 1, '2024-03-13 17:14:44'),
(1, 3, 3, 25, 0, 0, 1, '2024-03-13 17:14:57'),
(2, 1, 1, 34, 0, 0, 2, '2024-04-01 17:19:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_control`
--

CREATE TABLE `tab_control` (
  `id` int(11) NOT NULL,
  `v1` varchar(30) NOT NULL,
  `v2` varchar(30) NOT NULL,
  `v3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_control`
--

INSERT INTO `tab_control` (`id`, `v1`, `v2`, `v3`) VALUES
(1, 'esee', 'esesese', 'sesesese');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_controls`
--

CREATE TABLE `tab_controls` (
  `version` varchar(30) NOT NULL,
  `cventas` int(11) NOT NULL DEFAULT 1,
  `dev` varchar(30) NOT NULL,
  `actualizacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_controls`
--

INSERT INTO `tab_controls` (`version`, `cventas`, `dev`, `actualizacion`) VALUES
('0.30', 1, 'Carlos Ruiz', '2024-03-13 15:42:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_estados`
--

CREATE TABLE `tab_estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_estados`
--

INSERT INTO `tab_estados` (`id`, `nombre`) VALUES
(1, 'Amazonas'),
(2, 'Anzoátegui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bolívar'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Distrito Capital'),
(11, 'Falcón'),
(12, 'Guárico'),
(13, 'Lara'),
(14, 'Mérida'),
(15, 'Miranda'),
(16, 'Monagas'),
(17, 'Nueva Esparta'),
(18, 'Portuguesa'),
(19, 'Sucre'),
(20, 'Táchira'),
(21, 'Trujillo'),
(22, 'Vargas'),
(23, 'Yaracuy'),
(24, 'Zulia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_terc`
--

CREATE TABLE `tab_terc` (
  `c_id` int(11) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `rifc` varchar(30) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 0,
  `tfl_pri` varchar(30) DEFAULT NULL,
  `nomb_cont` varchar(60) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `fec_cre` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_uc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_terc`
--

INSERT INTO `tab_terc` (`c_id`, `descr`, `rifc`, `tipo`, `tfl_pri`, `nomb_cont`, `direccion`, `estado`, `ciudad`, `status`, `fec_cre`, `c_uc`) VALUES
(1, 'Promotor 1', 'J-775458', 3, '041499999999', 'Juan de las Nieves', 'Detras del deposito vive', 'Carabobo', 'Valencia', 1, '2024-03-13 16:57:30', 1),
(2, 'Promotor de pruebas', 'J-775451', 3, NULL, NULL, NULL, 'Distrito Capital', 'Caracas', 1, '2024-04-01 17:03:29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_terc_cont`
--

CREATE TABLE `tab_terc_cont` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `rifc` varchar(20) DEFAULT NULL,
  `tlf1` varchar(30) NOT NULL,
  `tlf2` varchar(30) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `ciudad` int(11) DEFAULT NULL,
  `fec_cre` datetime NOT NULL DEFAULT current_timestamp(),
  `direccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_terc_tipo`
--

CREATE TABLE `tab_terc_tipo` (
  `id` int(11) NOT NULL,
  `descr` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `val` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_terc_tipo`
--

INSERT INTO `tab_terc_tipo` (`id`, `descr`, `status`, `val`) VALUES
(1, 'Libreria', 1, 1),
(2, 'Colegio', 1, 2),
(3, 'Promotor', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_titulos`
--

CREATE TABLE `tab_titulos` (
  `c_id` int(11) NOT NULL,
  `nomb` varchar(100) NOT NULL,
  `descr` varchar(80) NOT NULL,
  `fec_crea` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `tipo` int(11) NOT NULL DEFAULT 1,
  `pag` int(11) NOT NULL DEFAULT 0,
  `id_c` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_titulos`
--

INSERT INTO `tab_titulos` (`c_id`, `nomb`, `descr`, `fec_crea`, `status`, `tipo`, `pag`, `id_c`) VALUES
(1, 'Libro 1', 'Este es el Primer Titulo', '2024-03-13 16:53:00', 1, 1, 0, 1),
(2, 'Libro 2', 'Segundo titulo', '2024-03-13 16:53:23', 1, 1, 0, 1),
(3, 'Libro 3', 'Tercera entrega', '2024-03-13 16:53:42', 1, 1, 0, 1),
(5, 'Tit', 'Descri', '2024-03-16 01:40:33', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tit_p`
--

CREATE TABLE `tab_tit_p` (
  `id` int(11) NOT NULL,
  `id_tit` int(11) NOT NULL,
  `pb` float NOT NULL DEFAULT 0,
  `pd` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tab_tit_p`
--

INSERT INTO `tab_tit_p` (`id`, `id_tit`, `pb`, `pd`) VALUES
(1, 1, 150, 3.5),
(2, 2, 142, 3.3),
(3, 3, 220, 4.2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_user`
--

CREATE TABLE `tab_user` (
  `id` int(11) NOT NULL,
  `descr` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_ventas`
--

CREATE TABLE `tab_ventas` (
  `id` int(11) NOT NULL,
  `nctrl` int(11) NOT NULL DEFAULT 0,
  `totbr` float NOT NULL DEFAULT 0,
  `totnet` float NOT NULL DEFAULT 0,
  `cancelado` int(11) NOT NULL,
  `soperacion` float NOT NULL,
  `clasificacion` int(11) NOT NULL,
  `tpago` int(11) NOT NULL DEFAULT 1,
  `vuelto` float NOT NULL DEFAULT 0,
  `fec_emi` timestamp NOT NULL DEFAULT current_timestamp(),
  `fec_anu` timestamp NULL DEFAULT NULL,
  `fimpresion` int(11) NOT NULL,
  `sa` float NOT NULL DEFAULT 0,
  `iva` float NOT NULL DEFAULT 0,
  `descuento` float NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `c_uc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_vent_d`
--

CREATE TABLE `tab_vent_d` (
  `id` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `id_tit` int(11) NOT NULL,
  `vd` int(11) NOT NULL DEFAULT 1,
  `c_pr` int(11) NOT NULL DEFAULT 0,
  `n_item` int(11) NOT NULL DEFAULT 1,
  `cvend` int(11) NOT NULL DEFAULT 1,
  `pbs` float NOT NULL DEFAULT 0,
  `pd` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_alm`
--
ALTER TABLE `tab_alm`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_alm_tit` (`id_alm`,`id_tit`);

--
-- Indices de la tabla `tab_almacenes`
--
ALTER TABLE `tab_almacenes`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `tab_cons`
--
ALTER TABLE `tab_cons`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `tab_cons_d`
--
ALTER TABLE `tab_cons_d`
  ADD KEY `consig_tit_num` (`id_con`,`id_tit`,`num`);

--
-- Indices de la tabla `tab_control`
--
ALTER TABLE `tab_control`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_estados`
--
ALTER TABLE `tab_estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_terc`
--
ALTER TABLE `tab_terc`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `tab_terc_cont`
--
ALTER TABLE `tab_terc_cont`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_terc_tipo`
--
ALTER TABLE `tab_terc_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_titulos`
--
ALTER TABLE `tab_titulos`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `tab_tit_p`
--
ALTER TABLE `tab_tit_p`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_ventas`
--
ALTER TABLE `tab_ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_vent_d`
--
ALTER TABLE `tab_vent_d`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_alm`
--
ALTER TABLE `tab_alm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tab_almacenes`
--
ALTER TABLE `tab_almacenes`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tab_cons`
--
ALTER TABLE `tab_cons`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tab_control`
--
ALTER TABLE `tab_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tab_estados`
--
ALTER TABLE `tab_estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tab_terc`
--
ALTER TABLE `tab_terc`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tab_terc_cont`
--
ALTER TABLE `tab_terc_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_terc_tipo`
--
ALTER TABLE `tab_terc_tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tab_titulos`
--
ALTER TABLE `tab_titulos`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tab_tit_p`
--
ALTER TABLE `tab_tit_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tab_user`
--
ALTER TABLE `tab_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_ventas`
--
ALTER TABLE `tab_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
