-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-02-2020 a las 01:46:42
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
-- Base de datos: `alcor_original`
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
  MODIFY `cod_car` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo_resp`
--
ALTER TABLE `cargo_resp`
  MODIFY `cod_car` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `cod_ado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado_resp`
--
ALTER TABLE `empleado_resp`
  MODIFY `cod_ado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa_resp`
--
ALTER TABLE `empresa_resp`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `cod_mod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulo_resp`
--
ALTER TABLE `modulo_resp`
  MODIFY `cod_mod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `cod_per` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permiso_resp`
--
ALTER TABLE `permiso_resp`
  MODIFY `cod_per` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_pro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto_resp`
--
ALTER TABLE `producto_resp`
  MODIFY `cod_pro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `cod_edo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor_resp`
--
ALTER TABLE `proveedor_resp`
  MODIFY `cod_edo` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`cod_mod`) REFERENCES `modulo` (`cod_mod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`cod_edo`) REFERENCES `proveedor` (`cod_edo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
