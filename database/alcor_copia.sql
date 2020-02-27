-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-02-2020 a las 09:21:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alcor_copia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `cod_car` int(11) NOT NULL,
  `nom_car` varchar(30) NOT NULL,
  `cre_car` datetime NOT NULL,
  `act_car` datetime DEFAULT NULL,
  `eli_car` datetime DEFAULT NULL,
  `res_car` datetime DEFAULT NULL,
  `est_car` enum('A','I') NOT NULL,
  `bas_car` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`cod_car`, `nom_car`, `cre_car`, `act_car`, `eli_car`, `res_car`, `est_car`, `bas_car`) VALUES
(1, 'Administrador', '2020-02-27 03:34:30', NULL, NULL, NULL, 'A', 'A'),
(2, 'Contadora', '2020-02-27 03:48:54', NULL, NULL, NULL, 'A', 'A'),
(3, 'Vendedor', '2020-02-27 03:49:06', '2020-02-27 03:51:54', NULL, NULL, 'A', 'A'),
(4, 'Recursos Humanos', '2020-02-27 03:51:37', NULL, '2020-02-27 03:52:12', '2020-02-27 03:52:34', 'A', 'A');

--
-- Disparadores `cargo`
--
DELIMITER $$
CREATE TRIGGER `cargo_AI` AFTER INSERT ON `cargo` FOR EACH ROW INSERT INTO cargo_resp(nom_car,cre_car,est_car,bas_car) VALUES (NEW.nom_car,NOW(),NEW.est_car,NEW.bas_car)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_resp`
--

CREATE TABLE `cargo_resp` (
  `cod_car` int(11) NOT NULL,
  `nom_car` varchar(30) NOT NULL,
  `cre_car` datetime NOT NULL,
  `act_car` datetime DEFAULT NULL,
  `eli_car` datetime DEFAULT NULL,
  `res_car` datetime DEFAULT NULL,
  `est_car` enum('A','I') NOT NULL,
  `bas_car` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo_resp`
--

INSERT INTO `cargo_resp` (`cod_car`, `nom_car`, `cre_car`, `act_car`, `eli_car`, `res_car`, `est_car`, `bas_car`) VALUES
(1, 'Administrador', '2020-02-27 03:34:30', NULL, NULL, NULL, 'A', 'A'),
(2, 'Contadora', '2020-02-27 03:48:54', NULL, NULL, NULL, 'A', 'A'),
(3, 'Vendedora', '2020-02-27 03:49:06', NULL, NULL, NULL, 'A', 'A'),
(4, 'Recursos Humanos', '2020-02-27 03:51:37', NULL, NULL, NULL, 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cod_ado` int(11) NOT NULL,
  `nom_ado` varchar(50) NOT NULL,
  `ape_ado` varchar(50) NOT NULL,
  `gen_ado` enum('H','M') NOT NULL,
  `nac_ado` date NOT NULL,
  `tip_ado` varchar(1) NOT NULL,
  `ced_ado` int(8) NOT NULL,
  `tel_ado` varchar(11) NOT NULL,
  `cor_ado` varchar(100) NOT NULL,
  `cla_ado` varchar(40) DEFAULT NULL,
  `dir_ado` varchar(100) NOT NULL,
  `cod_car` int(11) NOT NULL,
  `cre_ado` datetime NOT NULL,
  `act_ado` datetime DEFAULT NULL,
  `eli_ado` datetime DEFAULT NULL,
  `res_ado` datetime DEFAULT NULL,
  `est_ado` enum('A','I') NOT NULL,
  `bas_ado` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cod_ado`, `nom_ado`, `ape_ado`, `gen_ado`, `nac_ado`, `tip_ado`, `ced_ado`, `tel_ado`, `cor_ado`, `cla_ado`, `dir_ado`, `cod_car`, `cre_ado`, `act_ado`, `eli_ado`, `res_ado`, `est_ado`, `bas_ado`) VALUES
(1, 'Jesus', 'Orejarena', 'H', '2000-09-17', 'V', 29545545, '04147528826', 'jesusorejarena@gmail.com', '12345678', 'La Concordia', 1, '2020-02-27 03:34:30', '2020-02-27 03:48:03', NULL, NULL, 'A', 'A'),
(2, 'David', 'Lozada', 'H', '1999-01-19', 'V', 27422823, '04141235673', 'thedavlozada@gmail.com', 'davisito', 'Barrio Obrero', 4, '2020-02-27 03:59:25', NULL, NULL, NULL, 'A', 'A');

--
-- Disparadores `empleado`
--
DELIMITER $$
CREATE TRIGGER `empleado_AI` AFTER INSERT ON `empleado` FOR EACH ROW INSERT INTO empleado_resp(nom_ado,ape_ado,gen_ado,nac_ado,tip_ado,ced_ado,tel_ado,cor_ado,cla_ado,dir_ado,cod_car,cre_ado,est_ado,bas_ado) VALUES (NEW.nom_ado,NEW.ape_ado,NEW.gen_ado,NEW.nac_ado,NEW.tip_ado,NEW.ced_ado,NEW.tel_ado,NEW.cor_ado,NEW.cla_ado,NEW.dir_ado,NEW.cod_car,NOW(),NEW.est_ado,NEW.bas_ado)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_resp`
--

CREATE TABLE `empleado_resp` (
  `cod_ado` int(11) NOT NULL,
  `nom_ado` varchar(50) NOT NULL,
  `ape_ado` varchar(50) NOT NULL,
  `gen_ado` enum('H','M') NOT NULL,
  `nac_ado` date NOT NULL,
  `tip_ado` varchar(1) NOT NULL,
  `ced_ado` int(8) NOT NULL,
  `tel_ado` varchar(11) NOT NULL,
  `cor_ado` varchar(100) NOT NULL,
  `cla_ado` varchar(40) DEFAULT NULL,
  `dir_ado` varchar(100) NOT NULL,
  `cod_car` int(11) NOT NULL,
  `cre_ado` datetime NOT NULL,
  `act_ado` datetime DEFAULT NULL,
  `eli_ado` datetime DEFAULT NULL,
  `res_ado` datetime DEFAULT NULL,
  `est_ado` enum('A','I') NOT NULL,
  `bas_ado` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado_resp`
--

INSERT INTO `empleado_resp` (`cod_ado`, `nom_ado`, `ape_ado`, `gen_ado`, `nac_ado`, `tip_ado`, `ced_ado`, `tel_ado`, `cor_ado`, `cla_ado`, `dir_ado`, `cod_car`, `cre_ado`, `act_ado`, `eli_ado`, `res_ado`, `est_ado`, `bas_ado`) VALUES
(1, 'Jesus', 'Orejarena', 'H', '2000-09-17', 'V', 29545545, '04147528826', 'jesusorejarena@gmail.com', 'jesus1712', 'La Concordia', 1, '2020-02-27 03:34:30', NULL, NULL, NULL, 'A', 'A'),
(2, 'David', 'Lozada', 'H', '1999-01-19', 'V', 27422823, '04141235673', 'thedavlozada@gmail.com', 'davisito', 'Barrio Obrero', 4, '2020-02-27 03:59:25', NULL, NULL, NULL, 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `cod_emp` int(11) NOT NULL,
  `nom_emp` varchar(50) NOT NULL,
  `tel_emp` varchar(13) NOT NULL,
  `dir_emp` varchar(100) NOT NULL,
  `cor_emp` varchar(100) NOT NULL,
  `rif_emp` varchar(12) NOT NULL,
  `hou_emp` varchar(19) NOT NULL,
  `hod_emp` varchar(19) DEFAULT NULL,
  `act_emp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`cod_emp`, `nom_emp`, `tel_emp`, `dir_emp`, `cor_emp`, `rif_emp`, `hou_emp`, `hod_emp`, `act_emp`) VALUES
(1, 'Comercializadora ALCOR C.A', '+584147528826', 'Barrio El Carmen', 'alcor@gmail.com', 'J-30161557-3', ' 08:00 AM - 12:00 P', '02:00 PM - 06:00 PM', '2020-02-27 03:48:43');

--
-- Disparadores `empresa`
--
DELIMITER $$
CREATE TRIGGER `empresa_AI` AFTER INSERT ON `empresa` FOR EACH ROW INSERT INTO empresa_resp(nom_emp,tel_emp,dir_emp,cor_emp,rif_emp,hou_emp,hod_emp) VALUES(NEW.nom_emp,NEW.tel_emp,NEW.dir_emp,NEW.cor_emp,NEW.rif_emp,NEW.hou_emp,NEW.hod_emp)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_resp`
--

CREATE TABLE `empresa_resp` (
  `cod_emp` int(11) NOT NULL,
  `nom_emp` varchar(50) NOT NULL,
  `tel_emp` varchar(13) NOT NULL,
  `dir_emp` varchar(100) NOT NULL,
  `cor_emp` varchar(100) NOT NULL,
  `rif_emp` varchar(12) NOT NULL,
  `hou_emp` varchar(19) NOT NULL,
  `hod_emp` varchar(19) DEFAULT NULL,
  `act_emp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa_resp`
--

INSERT INTO `empresa_resp` (`cod_emp`, `nom_emp`, `tel_emp`, `dir_emp`, `cor_emp`, `rif_emp`, `hou_emp`, `hod_emp`, `act_emp`) VALUES
(1, 'Comercializadora ALCOR C.A', '+584147528826', 'Barrio El Carmen', 'alcor@gmail.com', 'J-30161557-3', ' 08:00 AM - 12:00 P', '02:00 PM - 06:00 PM', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `cod_for` int(11) NOT NULL,
  `nom_for` varchar(50) DEFAULT NULL,
  `ape_for` varchar(50) DEFAULT NULL,
  `tel_for` varchar(11) DEFAULT NULL,
  `cor_for` varchar(100) NOT NULL,
  `asu_for` varchar(100) NOT NULL,
  `cre_for` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `formulario`
--
DELIMITER $$
CREATE TRIGGER `formulario_AI` AFTER INSERT ON `formulario` FOR EACH ROW INSERT INTO formulario_resp(nom_for,ape_for,tel_for,cor_for,asu_for,cre_for) VALUES(NEW.nom_for,NEW.ape_for,NEW.tel_for,NEW.cor_for,NEW.asu_for,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_resp`
--

CREATE TABLE `formulario_resp` (
  `cod_for` int(11) NOT NULL,
  `nom_for` varchar(50) DEFAULT NULL,
  `ape_for` varchar(50) DEFAULT NULL,
  `tel_for` varchar(11) DEFAULT NULL,
  `cor_for` varchar(100) NOT NULL,
  `asu_for` varchar(100) NOT NULL,
  `cre_for` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `cod_mod` int(11) NOT NULL,
  `nom_mod` varchar(20) NOT NULL,
  `url_mod` varchar(20) NOT NULL,
  `cre_mod` datetime NOT NULL,
  `act_mod` datetime DEFAULT NULL,
  `eli_mod` datetime DEFAULT NULL,
  `res_mod` datetime DEFAULT NULL,
  `est_mod` enum('A','I') NOT NULL,
  `bas_mod` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`cod_mod`, `nom_mod`, `url_mod`, `cre_mod`, `act_mod`, `eli_mod`, `res_mod`, `est_mod`, `bas_mod`) VALUES
(1, 'Empleados', 'ado_menu.php', '2020-02-27 03:52:59', '2020-02-27 03:53:38', NULL, NULL, 'I', 'A'),
(2, 'Proveedores', 'edo_menu.php', '2020-02-27 03:53:03', NULL, NULL, NULL, 'A', 'A'),
(3, 'Productos', 'pro_menu.php', '2020-02-27 03:53:09', NULL, NULL, NULL, 'A', 'A'),
(4, 'Ventas', 'ven_menu.php', '2020-02-27 03:53:14', NULL, NULL, NULL, 'A', 'A'),
(8, 'Formularios', 'for_menu.php', '2020-02-27 03:55:13', NULL, NULL, NULL, 'A', 'A');

--
-- Disparadores `modulo`
--
DELIMITER $$
CREATE TRIGGER `modulo_AI` AFTER INSERT ON `modulo` FOR EACH ROW INSERT INTO modulo_resp(nom_mod,url_mod,cre_mod,est_mod,bas_mod) VALUES(NEW.nom_mod,NEW.url_mod,NOW(),NEW.est_mod,NEW.bas_mod)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_resp`
--

CREATE TABLE `modulo_resp` (
  `cod_mod` int(11) NOT NULL,
  `nom_mod` varchar(20) NOT NULL,
  `url_mod` varchar(20) NOT NULL,
  `cre_mod` datetime NOT NULL,
  `act_mod` datetime DEFAULT NULL,
  `eli_mod` datetime DEFAULT NULL,
  `res_mod` datetime DEFAULT NULL,
  `est_mod` enum('A','I') NOT NULL,
  `bas_mod` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo_resp`
--

INSERT INTO `modulo_resp` (`cod_mod`, `nom_mod`, `url_mod`, `cre_mod`, `act_mod`, `eli_mod`, `res_mod`, `est_mod`, `bas_mod`) VALUES
(1, 'Empleados', 'ado_menu.php', '2020-02-27 03:52:59', NULL, NULL, NULL, 'A', 'A'),
(2, 'Proveedores', 'edo_menu.php', '2020-02-27 03:53:03', NULL, NULL, NULL, 'A', 'A'),
(3, 'Productos', 'pro_menu.php', '2020-02-27 03:53:09', NULL, NULL, NULL, 'A', 'A'),
(4, 'Ventas', 'ven_menu.php', '2020-02-27 03:53:14', NULL, NULL, NULL, 'A', 'A'),
(5, 'Formularios', 'for_menu.php', '2020-02-27 03:55:13', NULL, NULL, NULL, 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `cod_per` int(11) NOT NULL,
  `cod_car` int(11) NOT NULL,
  `cod_mod` int(11) NOT NULL,
  `cre_per` datetime NOT NULL,
  `act_per` datetime DEFAULT NULL,
  `eli_per` datetime DEFAULT NULL,
  `res_per` datetime DEFAULT NULL,
  `est_per` enum('A','I') NOT NULL,
  `bas_per` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`cod_per`, `cod_car`, `cod_mod`, `cre_per`, `act_per`, `eli_per`, `res_per`, `est_per`, `bas_per`) VALUES
(1, 2, 4, '2020-02-27 03:54:11', NULL, NULL, NULL, 'A', 'A'),
(2, 2, 3, '2020-02-27 03:54:21', NULL, NULL, NULL, 'A', 'A'),
(3, 3, 3, '2020-02-27 03:54:27', NULL, NULL, NULL, 'A', 'A'),
(4, 4, 8, '2020-02-27 03:56:54', NULL, NULL, NULL, 'A', 'A');

--
-- Disparadores `permiso`
--
DELIMITER $$
CREATE TRIGGER `permiso_AI` AFTER INSERT ON `permiso` FOR EACH ROW INSERT INTO permiso_resp(cod_car,cod_mod,cre_per,est_per,bas_per) VALUES(NEW.cod_car,NEW.cod_mod,NOW(),NEW.est_per,NEW.bas_per)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_resp`
--

CREATE TABLE `permiso_resp` (
  `cod_per` int(11) NOT NULL,
  `cod_car` int(11) NOT NULL,
  `cod_mod` int(11) NOT NULL,
  `cre_per` datetime NOT NULL,
  `act_per` datetime DEFAULT NULL,
  `eli_per` datetime DEFAULT NULL,
  `res_per` datetime DEFAULT NULL,
  `est_per` enum('A','I') NOT NULL,
  `bas_per` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso_resp`
--

INSERT INTO `permiso_resp` (`cod_per`, `cod_car`, `cod_mod`, `cre_per`, `act_per`, `eli_per`, `res_per`, `est_per`, `bas_per`) VALUES
(1, 2, 4, '2020-02-27 03:54:11', NULL, NULL, NULL, 'A', 'A'),
(2, 2, 3, '2020-02-27 03:54:21', NULL, NULL, NULL, 'A', 'A'),
(3, 3, 3, '2020-02-27 03:54:27', NULL, NULL, NULL, 'A', 'A'),
(4, 4, 8, '2020-02-27 03:56:54', NULL, NULL, NULL, 'A', 'A'),
(5, 4, 8, '2020-02-27 03:56:59', NULL, NULL, NULL, 'A', 'A'),
(6, 4, 8, '2020-02-27 03:57:04', NULL, NULL, NULL, 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_pro` int(11) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `des_pro` varchar(100) NOT NULL,
  `pre_pro` float(11,2) NOT NULL,
  `can_pro` float(11,1) NOT NULL,
  `cod_edo` int(11) NOT NULL,
  `cre_pro` datetime NOT NULL,
  `act_pro` datetime DEFAULT NULL,
  `eli_pro` datetime DEFAULT NULL,
  `res_pro` datetime DEFAULT NULL,
  `est_pro` enum('A','I') NOT NULL,
  `bas_pro` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_pro`, `nom_pro`, `des_pro`, `pre_pro`, `can_pro`, `cod_edo`, `cre_pro`, `act_pro`, `eli_pro`, `res_pro`, `est_pro`, `bas_pro`) VALUES
(1, 'Clorooo', 'jabonoso', 180.00, 10.0, 2, '2020-02-27 04:14:36', NULL, NULL, NULL, 'A', 'A'),
(2, 'Jabon liquido', 'jabon>', 123.00, 0.0, 1, '2020-02-27 04:15:03', '2020-02-27 04:16:18', NULL, NULL, 'A', 'A');

--
-- Disparadores `producto`
--
DELIMITER $$
CREATE TRIGGER `producto_AI` AFTER INSERT ON `producto` FOR EACH ROW INSERT INTO producto_resp(nom_pro,des_pro,pre_pro,can_pro,cod_edo,cre_pro,bas_pro,est_pro) VALUES(NEW.nom_pro,NEW.des_pro,NEW.pre_pro,NEW.can_pro,NEW.cod_edo,NOW(),NEW.bas_pro,NEW.est_pro)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_resp`
--

CREATE TABLE `producto_resp` (
  `cod_pro` int(11) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `des_pro` varchar(100) NOT NULL,
  `pre_pro` float(11,2) NOT NULL,
  `can_pro` float(11,1) NOT NULL,
  `cod_edo` int(11) NOT NULL,
  `cre_pro` datetime NOT NULL,
  `act_pro` datetime DEFAULT NULL,
  `eli_pro` datetime DEFAULT NULL,
  `res_pro` datetime DEFAULT NULL,
  `est_pro` enum('A','I') NOT NULL,
  `bas_pro` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto_resp`
--

INSERT INTO `producto_resp` (`cod_pro`, `nom_pro`, `des_pro`, `pre_pro`, `can_pro`, `cod_edo`, `cre_pro`, `act_pro`, `eli_pro`, `res_pro`, `est_pro`, `bas_pro`) VALUES
(1, 'Clorooo', 'jabonoso', 180.00, 12.0, 2, '2020-02-27 04:14:36', NULL, NULL, NULL, 'A', 'A'),
(2, 'Jabon liquido', 'jabon', 123.00, 42.0, 2, '2020-02-27 04:15:03', NULL, NULL, NULL, 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `cod_edo` int(11) NOT NULL,
  `nom_edo` varchar(50) NOT NULL,
  `des_edo` varchar(100) DEFAULT NULL,
  `dir_edo` varchar(100) NOT NULL,
  `tel_edo` varchar(11) NOT NULL,
  `cor_edo` varchar(100) NOT NULL,
  `tip_edo` varchar(1) NOT NULL,
  `rif_edo` varchar(10) NOT NULL,
  `cre_edo` datetime NOT NULL,
  `act_edo` datetime DEFAULT NULL,
  `eli_edo` datetime DEFAULT NULL,
  `res_edo` datetime DEFAULT NULL,
  `est_edo` enum('A','I') NOT NULL,
  `bas_edo` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`cod_edo`, `nom_edo`, `des_edo`, `dir_edo`, `tel_edo`, `cor_edo`, `tip_edo`, `rif_edo`, `cre_edo`, `act_edo`, `eli_edo`, `res_edo`, `est_edo`, `bas_edo`) VALUES
(1, 'GeneMundos', 'genericooos', 'caracas', '04141243256', 'genemundo@gmail.com', 'V', '12312321-5', '2020-02-27 04:01:30', '2020-02-27 04:11:12', '2020-02-27 04:11:37', '2020-02-27 04:11:43', 'A', 'A'),
(2, 'Los Andes', 'Gnericos', 'caracas', '01235921244', 'proc@gmail.com', 'V', '1231232131', '2020-02-27 04:14:04', NULL, NULL, NULL, 'A', 'A');

--
-- Disparadores `proveedor`
--
DELIMITER $$
CREATE TRIGGER `proveedor_AI` AFTER INSERT ON `proveedor` FOR EACH ROW INSERT INTO proveedor_resp(nom_edo,des_edo,dir_edo,tel_edo,cor_edo,tip_edo,rif_edo,cre_edo,est_edo,bas_edo) VALUES(NEW.nom_edo,NEW.des_edo,NEW.dir_edo,NEW.tel_edo,NEW.cor_edo,NEW.tip_edo,NEW.rif_edo,NOW(),NEW.est_edo,NEW.bas_edo)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_resp`
--

CREATE TABLE `proveedor_resp` (
  `cod_edo` int(11) NOT NULL,
  `nom_edo` varchar(50) NOT NULL,
  `des_edo` varchar(100) DEFAULT NULL,
  `dir_edo` varchar(100) NOT NULL,
  `tel_edo` varchar(11) NOT NULL,
  `cor_edo` varchar(100) NOT NULL,
  `tip_edo` varchar(1) NOT NULL,
  `rif_edo` varchar(9) NOT NULL,
  `cre_edo` datetime NOT NULL,
  `act_edo` datetime DEFAULT NULL,
  `eli_edo` datetime DEFAULT NULL,
  `res_edo` datetime DEFAULT NULL,
  `est_edo` enum('A','I') NOT NULL,
  `bas_edo` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor_resp`
--

INSERT INTO `proveedor_resp` (`cod_edo`, `nom_edo`, `des_edo`, `dir_edo`, `tel_edo`, `cor_edo`, `tip_edo`, `rif_edo`, `cre_edo`, `act_edo`, `eli_edo`, `res_edo`, `est_edo`, `bas_edo`) VALUES
(1, 'GeneMundo', 'genericooos', 'caracas', '04141243256', 'genemundo@gmail.com', 'V', '12312321-', '2020-02-27 04:01:30', NULL, NULL, NULL, 'A', 'A'),
(2, 'Los Andes', 'Gnericos', 'caracas', '01235921244', 'proc@gmail.com', 'V', '123123213', '2020-02-27 04:14:04', NULL, NULL, NULL, 'A', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cod_car`),
  ADD UNIQUE KEY `nom_car` (`nom_car`);

--
-- Indices de la tabla `cargo_resp`
--
ALTER TABLE `cargo_resp`
  ADD PRIMARY KEY (`cod_car`),
  ADD UNIQUE KEY `nom_car` (`nom_car`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`cod_ado`),
  ADD UNIQUE KEY `ced_ado` (`ced_ado`),
  ADD UNIQUE KEY `cor_ado` (`cor_ado`),
  ADD KEY `cod_car` (`cod_car`);

--
-- Indices de la tabla `empleado_resp`
--
ALTER TABLE `empleado_resp`
  ADD PRIMARY KEY (`cod_ado`),
  ADD UNIQUE KEY `ced_ado` (`ced_ado`),
  ADD UNIQUE KEY `cor_ado` (`cor_ado`),
  ADD KEY `cod_car` (`cod_car`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cod_emp`);

--
-- Indices de la tabla `empresa_resp`
--
ALTER TABLE `empresa_resp`
  ADD PRIMARY KEY (`cod_emp`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`cod_for`);

--
-- Indices de la tabla `formulario_resp`
--
ALTER TABLE `formulario_resp`
  ADD PRIMARY KEY (`cod_for`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`cod_mod`),
  ADD UNIQUE KEY `nom_mod` (`nom_mod`),
  ADD UNIQUE KEY `url_mod` (`url_mod`);

--
-- Indices de la tabla `modulo_resp`
--
ALTER TABLE `modulo_resp`
  ADD PRIMARY KEY (`cod_mod`),
  ADD UNIQUE KEY `nom_mod` (`nom_mod`),
  ADD UNIQUE KEY `url_mod` (`url_mod`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`cod_per`),
  ADD KEY `cod_car` (`cod_car`,`cod_mod`),
  ADD KEY `cod_mod` (`cod_mod`);

--
-- Indices de la tabla `permiso_resp`
--
ALTER TABLE `permiso_resp`
  ADD PRIMARY KEY (`cod_per`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_pro`),
  ADD KEY `cod_edo` (`cod_edo`);

--
-- Indices de la tabla `producto_resp`
--
ALTER TABLE `producto_resp`
  ADD PRIMARY KEY (`cod_pro`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`cod_edo`),
  ADD UNIQUE KEY `nom_edo` (`nom_edo`),
  ADD UNIQUE KEY `cor_edo` (`cor_edo`),
  ADD UNIQUE KEY `rif_edo` (`rif_edo`);

--
-- Indices de la tabla `proveedor_resp`
--
ALTER TABLE `proveedor_resp`
  ADD PRIMARY KEY (`cod_edo`),
  ADD UNIQUE KEY `nom_edo` (`nom_edo`),
  ADD UNIQUE KEY `cor_edo` (`cor_edo`),
  ADD UNIQUE KEY `rif_edo` (`rif_edo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cod_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cargo_resp`
--
ALTER TABLE `cargo_resp`
  MODIFY `cod_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `cod_ado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado_resp`
--
ALTER TABLE `empleado_resp`
  MODIFY `cod_ado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresa_resp`
--
ALTER TABLE `empresa_resp`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `cod_for` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formulario_resp`
--
ALTER TABLE `formulario_resp`
  MODIFY `cod_for` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `cod_mod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `modulo_resp`
--
ALTER TABLE `modulo_resp`
  MODIFY `cod_mod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `cod_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `permiso_resp`
--
ALTER TABLE `permiso_resp`
  MODIFY `cod_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto_resp`
--
ALTER TABLE `producto_resp`
  MODIFY `cod_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `cod_edo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedor_resp`
--
ALTER TABLE `proveedor_resp`
  MODIFY `cod_edo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE,
  ADD CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`cod_mod`) REFERENCES `modulo` (`cod_mod`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`cod_edo`) REFERENCES `proveedor` (`cod_edo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
