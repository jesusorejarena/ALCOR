-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-02-2020 a las 00:53:32
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alcor-relacion`
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
  `bas_car` set('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cod_ado` int(11) NOT NULL,
  `nom_ado` varchar(50) NOT NULL,
  `ape_ado` int(50) NOT NULL,
  `gen_ado` set('H','M') NOT NULL,
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
  `est_ado` set('A','I') NOT NULL,
  `bas_ado` set('A','B') NOT NULL
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
  `hod_emp` varchar(19) DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `cod_mod` int(11) NOT NULL,
  `cod_car` int(11) NOT NULL,
  `nom_mod` varchar(20) NOT NULL,
  `url_mod` varchar(20) NOT NULL,
  `cre_mod` datetime NOT NULL,
  `act_mod` datetime NOT NULL,
  `eli_mod` datetime NOT NULL,
  `res_mod` datetime NOT NULL,
  `est_mod` set('A','I') NOT NULL,
  `bas_mod` set('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_pro` int(11) NOT NULL,
  `ser_pro` varchar(10) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `des_pro` varchar(100) NOT NULL,
  `pre_pro` float(11,2) NOT NULL,
  `can_pro` float(11,2) NOT NULL,
  `cre_pro` datetime NOT NULL,
  `act_pro` datetime DEFAULT NULL,
  `eli_pro` datetime DEFAULT NULL,
  `res_pro` datetime DEFAULT NULL,
  `bas_pro` set('A','B') NOT NULL
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
  `rif_edo` varchar(9) NOT NULL,
  `cre_edo` datetime NOT NULL,
  `act_edo` datetime DEFAULT NULL,
  `eli_edo` datetime DEFAULT NULL,
  `res_edo` datetime DEFAULT NULL,
  `bas_edo` set('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov_pro`
--

CREATE TABLE `prov_pro` (
  `cod_ppr` int(11) NOT NULL,
  `cod_edo` int(11) NOT NULL,
  `cod_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cod_car`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
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
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`cod_for`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`cod_mod`),
  ADD UNIQUE KEY `nom_mod` (`nom_mod`),
  ADD UNIQUE KEY `url_mod` (`url_mod`),
  ADD KEY `cod_car` (`cod_car`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_pro`),
  ADD UNIQUE KEY `ser_pro` (`ser_pro`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`cod_edo`),
  ADD UNIQUE KEY `nom_edo` (`nom_edo`),
  ADD UNIQUE KEY `cor_edo` (`cor_edo`),
  ADD UNIQUE KEY `rif_edo` (`rif_edo`);

--
-- Indices de la tabla `prov_pro`
--
ALTER TABLE `prov_pro`
  ADD PRIMARY KEY (`cod_ppr`),
  ADD KEY `cod_edo` (`cod_edo`),
  ADD KEY `cod_pro` (`cod_pro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cod_car` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `cod_ado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `cod_for` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `cod_mod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_pro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `cod_edo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prov_pro`
--
ALTER TABLE `prov_pro`
  MODIFY `cod_ppr` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `modulo_ibfk_2` FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prov_pro`
--
ALTER TABLE `prov_pro`
  ADD CONSTRAINT `prov_pro_ibfk_1` FOREIGN KEY (`cod_pro`) REFERENCES `producto` (`cod_pro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prov_pro_ibfk_2` FOREIGN KEY (`cod_edo`) REFERENCES `proveedor` (`cod_edo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
