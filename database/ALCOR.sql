-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-02-2020 a las 06:36:04
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
-- Base de datos: `ALCOR`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `cod_car` int(11) NOT NULL,
  `nom_car` varchar(30) NOT NULL,
  `cre_car` datetime NOT NULL DEFAULT current_timestamp(),
  `act_car` datetime DEFAULT NULL,
  `eli_car` datetime DEFAULT NULL,
  `res_car` datetime DEFAULT NULL,
  `bas_car` set('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`cod_car`, `nom_car`, `cre_car`, `act_car`, `eli_car`, `res_car`, `bas_car`) VALUES
(1, 'Administradores', '2020-02-04 17:39:33', '2020-02-04 06:27:56', '2020-02-05 11:30:36', '2020-02-04 06:51:47', 'B'),
(4, 'Vendedor', '2020-02-05 11:35:06', NULL, NULL, NULL, 'A'),
(5, 'Limpieza', '2020-02-06 12:20:24', NULL, NULL, NULL, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cod_ado` int(11) NOT NULL,
  `nom_ado` varchar(50) NOT NULL,
  `ape_ado` varchar(50) NOT NULL,
  `gen_ado` set('H','M') NOT NULL,
  `nac_ado` date NOT NULL DEFAULT current_timestamp(),
  `tip_ado` varchar(1) NOT NULL,
  `ced_ado` int(8) NOT NULL,
  `tel_ado` varchar(11) NOT NULL,
  `cor_ado` varchar(100) NOT NULL,
  `cla_ado` varchar(40) DEFAULT NULL,
  `dir_ado` varchar(100) NOT NULL,
  `cod_car` int(11) NOT NULL,
  `cre_ado` datetime NOT NULL DEFAULT current_timestamp(),
  `act_ado` datetime DEFAULT NULL,
  `eli_ado` datetime DEFAULT NULL,
  `res_ado` datetime DEFAULT NULL,
  `est_ado` set('A','I') NOT NULL,
  `bas_ado` set('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cod_ado`, `nom_ado`, `ape_ado`, `gen_ado`, `nac_ado`, `tip_ado`, `ced_ado`, `tel_ado`, `cor_ado`, `cla_ado`, `dir_ado`, `cod_car`, `cre_ado`, `act_ado`, `eli_ado`, `res_ado`, `est_ado`, `bas_ado`) VALUES
(1, 'Jesus', 'Orejarena', 'H', '2000-09-17', 'V', 29545545, '04147528826', 'felix@gmail.com', 'felix123', 'La concordia', 1, '2020-02-04 06:55:16', NULL, '2020-02-04 07:13:56', '2020-02-04 07:40:16', 'A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `cod_emp` int(1) NOT NULL,
  `nom_emp` varchar(50) NOT NULL,
  `tel_emp` varchar(13) NOT NULL,
  `dir_emp` varchar(100) NOT NULL,
  `cor_emp` varchar(100) NOT NULL,
  `rif_emp` varchar(12) NOT NULL,
  `hou_emp` varchar(19) NOT NULL,
  `hod_emp` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`cod_emp`, `nom_emp`, `tel_emp`, `dir_emp`, `cor_emp`, `rif_emp`, `hou_emp`, `hod_emp`) VALUES
(1, 'ALCOR', '+584147528826', 'La Concordia', 'alcor@alcor.com', 'J-30161557-3', '08:00 AM - 11:00 AM', '');

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
  `cre_for` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `cod_mod` int(11) NOT NULL,
  `cod_car` int(11) NOT NULL,
  `cod_opc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`cod_mod`, `cod_car`, `cod_opc`) VALUES
(3, 4, 3),
(4, 4, 1),
(5, 4, 4),
(6, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE `opcion` (
  `cod_opc` int(11) NOT NULL,
  `nom_opc` varchar(20) NOT NULL,
  `acc_opc` varchar(20) NOT NULL,
  `url_opc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`cod_opc`, `nom_opc`, `acc_opc`, `url_opc`) VALUES
(1, 'Modificar empresa', '111', 'emp_modificar.php'),
(3, 'Registrar empresa', '1111', 'emp_registrar.php'),
(4, 'listar empleados', '11111', 'ado_listartodo.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_pro` int(11) NOT NULL,
  `ser_pro` varchar(10) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `des_pro` varchar(100) DEFAULT NULL,
  `pre_pro` float(11,2) NOT NULL,
  `can_pro` float(11,2) NOT NULL,
  `cre_pro` datetime NOT NULL DEFAULT current_timestamp(),
  `act_pro` datetime DEFAULT NULL,
  `eli_pro` datetime DEFAULT NULL,
  `res_pro` datetime DEFAULT NULL,
  `bas_pro` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_pro`, `ser_pro`, `nom_pro`, `des_pro`, `pre_pro`, `can_pro`, `cre_pro`, `act_pro`, `eli_pro`, `res_pro`, `bas_pro`) VALUES
(1, 'IAWDQ23123', '', 'SADDASDAS', 123.00, 123.00, '2020-02-04 07:53:21', NULL, NULL, NULL, 'A'),
(2, '321321123A', '', 'DASD', 423.00, 12312.00, '2020-02-04 07:53:39', NULL, '2020-02-04 07:54:58', '2020-02-04 07:55:06', 'A');

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
  `cre_edo` datetime NOT NULL DEFAULT current_timestamp(),
  `act_edo` datetime DEFAULT NULL,
  `eli_edo` datetime DEFAULT NULL,
  `res_edo` datetime DEFAULT NULL,
  `bas_edo` set('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov_prod`
--

CREATE TABLE `prov_prod` (
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
  ADD PRIMARY KEY (`cod_car`),
  ADD UNIQUE KEY `nom_car` (`nom_car`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`cod_ado`),
  ADD UNIQUE KEY `ced_ado` (`ced_ado`,`cor_ado`),
  ADD KEY `car_ado` (`cod_car`);

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
  ADD KEY `fky_cargo` (`cod_opc`),
  ADD KEY `fky_cargo_2` (`cod_car`),
  ADD KEY `fky_cargo_3` (`cod_car`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`cod_opc`),
  ADD UNIQUE KEY `url_opc` (`url_opc`);

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
  ADD UNIQUE KEY `cor_edo` (`cor_edo`,`rif_edo`),
  ADD UNIQUE KEY `nom_edo` (`nom_edo`);

--
-- Indices de la tabla `prov_prod`
--
ALTER TABLE `prov_prod`
  ADD PRIMARY KEY (`cod_ppr`),
  ADD KEY `fky_proveedor` (`cod_edo`),
  ADD KEY `fky_producto` (`cod_pro`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cod_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `cod_ado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod_emp` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `cod_for` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `cod_mod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `opcion`
--
ALTER TABLE `opcion`
  MODIFY `cod_opc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `cod_edo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `modulo_ibfk_1` FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON DELETE CASCADE,
  ADD CONSTRAINT `modulo_ibfk_2` FOREIGN KEY (`cod_opc`) REFERENCES `opcion` (`cod_opc`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prov_prod`
--
ALTER TABLE `prov_prod`
  ADD CONSTRAINT `prov_prod_ibfk_1` FOREIGN KEY (`cod_pro`) REFERENCES `producto` (`cod_pro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prov_prod_ibfk_2` FOREIGN KEY (`cod_edo`) REFERENCES `proveedor` (`cod_edo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
