-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-01-2020 a las 00:31:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ALCOR`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `cod_car` int(11) NOT NULL,
  `nom_car` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cod_ado` int(11) NOT NULL,
  `nom_ado` varchar(50) NOT NULL,
  `ape_ado` varchar(50) NOT NULL,
  `ced_ado` varchar(10) NOT NULL,
  `tel_ado` varchar(12) NOT NULL,
  `cor_ado` varchar(100) NOT NULL,
  `dir_ado` varchar(100) NOT NULL,
  `car_ado` int(11) NOT NULL,
  `con_ado` date NOT NULL,
  `est_ado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `cod_emp` int(11) NOT NULL,
  `nom_emp` varchar(50) NOT NULL,
  `des_emp` text,
  `tel_emp` varchar(12) NOT NULL,
  `dir_emp` text NOT NULL,
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
  `ced_for` varchar(10) DEFAULT NULL,
  `tel_for` varchar(12) DEFAULT NULL,
  `cor_for` varchar(100) NOT NULL,
  `asu_for` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_pro` int(11) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `des_pro` text,
  `pre_pro` float NOT NULL,
  `can_pro` int(11) NOT NULL,
  `fky_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `cod_edo` int(11) NOT NULL,
  `nom_edo` varchar(50) NOT NULL,
  `des_edo` text,
  `dir_edo` text NOT NULL,
  `tel_edo` varchar(12) NOT NULL,
  `cor_edo` varchar(100) NOT NULL,
  `rif_edo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov_prod`
--

CREATE TABLE `prov_prod` (
  `cod_ppr` int(11) NOT NULL,
  `fky_proveedor` int(11) NOT NULL,
  `fky_producto` int(11) NOT NULL
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
  ADD KEY `est_emp` (`est_ado`),
  ADD KEY `car_ado` (`car_ado`);

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
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_pro`),
  ADD KEY `nom_pro` (`nom_pro`),
  ADD KEY `fky_proveedor` (`fky_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`cod_edo`);

--
-- Indices de la tabla `prov_prod`
--
ALTER TABLE `prov_prod`
  ADD PRIMARY KEY (`cod_ppr`),
  ADD KEY `fky_proveedor` (`fky_proveedor`),
  ADD KEY `fky_usuario` (`fky_producto`);

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
-- AUTO_INCREMENT de la tabla `prov_prod`
--
ALTER TABLE `prov_prod`
  MODIFY `cod_ppr` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`car_ado`) REFERENCES `cargo` (`cod_car`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prov_prod`
--
ALTER TABLE `prov_prod`
  ADD CONSTRAINT `prov_prod_ibfk_1` FOREIGN KEY (`fky_producto`) REFERENCES `producto` (`cod_pro`) ON DELETE CASCADE,
  ADD CONSTRAINT `prov_prod_ibfk_2` FOREIGN KEY (`fky_proveedor`) REFERENCES `proveedor` (`cod_edo`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
