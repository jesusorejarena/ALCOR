DROP DATABASE IF EXISTS db_sip;
CREATE DATABASE IF NOT EXISTS db_sip CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE db_sip;

DROP TABLE IF EXISTS cargo;
CREATE TABLE IF NOT EXISTS cargo (
	`cod_car` int(11) NOT NULL AUTO_INCREMENT,
	`nom_car` varchar(30) NOT NULL,
	`cre_car` datetime NOT NULL,
	`act_car` datetime DEFAULT NULL,
	`eli_car` datetime DEFAULT NULL,
	`res_car` datetime DEFAULT NULL,
	`est_car` enum('A','I') NOT NULL,
	`bas_car` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_car`),
	UNIQUE KEY `nom_car` (`nom_car`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `cargo` (`cod_car`, `nom_car`, `cre_car`, `act_car`, `eli_car`, `res_car`, `est_car`, `bas_car`) VALUES
(1, 'Administrador', '2020-02-27 03:34:30', NULL, NULL, NULL, 'A', 'A'),
(2, 'Contadora', '2020-02-27 03:48:54', NULL, NULL, NULL, 'A', 'A'),
(3, 'Vendedor', '2020-02-27 03:49:06', '2020-02-27 03:51:54', NULL, NULL, 'A', 'A'),
(4, 'Recursos Humanos', '2020-02-27 03:51:37', NULL, '2020-02-27 03:52:12', '2020-02-27 03:52:34', 'A', 'A');

DELIMITER $$
CREATE TRIGGER `cargo_AI` AFTER INSERT ON `cargo` FOR EACH ROW INSERT INTO cargo_resp(nom_car,cre_car,est_car,bas_car) VALUES (NEW.nom_car,NOW(),NEW.est_car,NEW.bas_car)
$$
DELIMITER ;

DROP TABLE IF EXISTS cargo_resp;
CREATE TABLE IF NOT EXISTS cargo_resp (
	`cod_car` int(11) NOT NULL AUTO_INCREMENT,
	`nom_car` varchar(30) NOT NULL,
	`cre_car` datetime NOT NULL,
	`act_car` datetime DEFAULT NULL,
	`eli_car` datetime DEFAULT NULL,
	`res_car` datetime DEFAULT NULL,
	`est_car` enum('A','I') NOT NULL,
	`bas_car` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_car`),
	UNIQUE KEY `nom_car` (`nom_car`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS empleado;
CREATE TABLE IF NOT EXISTS empleado (
	`cod_ado` int(11) NOT NULL AUTO_INCREMENT,
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
	`fky_cargo` int(11) NOT NULL,
	`cre_ado` datetime NOT NULL,
	`act_ado` datetime DEFAULT NULL,
	`eli_ado` datetime DEFAULT NULL,
	`res_ado` datetime DEFAULT NULL,
	`est_ado` enum('A','I') NOT NULL,
	`bas_ado` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_ado`),
	UNIQUE KEY `ced_ado` (`ced_ado`),
	UNIQUE KEY `cor_ado` (`cor_ado`),
	INDEX `fky_cargo` (`fky_cargo`),
	FOREIGN KEY (`fky_cargo`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `empleado` (`cod_ado`, `nom_ado`, `ape_ado`, `gen_ado`, `nac_ado`, `tip_ado`, `ced_ado`, `tel_ado`, `cor_ado`, `cla_ado`, `dir_ado`, `fky_cargo`, `cre_ado`, `act_ado`, `eli_ado`, `res_ado`, `est_ado`, `bas_ado`) VALUES
(1, 'Jesus', 'Orejarena', 'H', '2000-09-17', 'V', 29545545, '04147528826', 'jesusorejarena@gmail.com', '12345678', 'La Concordia', 1, '2020-02-27 03:34:30', '2020-02-27 03:48:03', NULL, NULL, 'A', 'A'),
(2, 'David', 'Lozada', 'H', '1999-01-19', 'V', 27422823, '04141235673', 'thedavlozada@gmail.com', 'davisito', 'Barrio Obrero', 4, '2020-02-27 03:59:25', NULL, NULL, NULL, 'A', 'A');

DELIMITER $$
CREATE TRIGGER `empleado_AI` AFTER INSERT ON `empleado` FOR EACH ROW INSERT INTO empleado_resp(nom_ado,ape_ado,gen_ado,nac_ado,tip_ado,ced_ado,tel_ado,cor_ado,cla_ado,dir_ado,fky_cargo,cre_ado,est_ado,bas_ado) VALUES (NEW.nom_ado,NEW.ape_ado,NEW.gen_ado,NEW.nac_ado,NEW.tip_ado,NEW.ced_ado,NEW.tel_ado,NEW.cor_ado,NEW.cla_ado,NEW.dir_ado,NEW.fky_cargo,NOW(),NEW.est_ado,NEW.bas_ado)
$$
DELIMITER ;

DROP TABLE IF EXISTS empleado_resp;
CREATE TABLE IF NOT EXISTS empleado_resp (
	`cod_ado` int(11) NOT NULL AUTO_INCREMENT,
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
	`fky_cargo` int(11) NOT NULL,
	`cre_ado` datetime NOT NULL,
	`act_ado` datetime DEFAULT NULL,
	`eli_ado` datetime DEFAULT NULL,
	`res_ado` datetime DEFAULT NULL,
	`est_ado` enum('A','I') NOT NULL,
	`bas_ado` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_ado`),
	UNIQUE KEY `ced_ado` (`ced_ado`),
	UNIQUE KEY `cor_ado` (`cor_ado`),
	INDEX `fky_cargo` (`fky_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS empresa;
CREATE TABLE IF NOT EXISTS empresa (
	`cod_emp` int(11) NOT NULL AUTO_INCREMENT,
	`nom_emp` varchar(50) NOT NULL,
	`tel_emp` varchar(13) NOT NULL,
	`dir_emp` varchar(100) NOT NULL,
	`cor_emp` varchar(100) NOT NULL,
	`rif_emp` varchar(12) NOT NULL,
	`hou_emp` varchar(19) NOT NULL,
	`hod_emp` varchar(19) DEFAULT NULL,
	`act_emp` datetime DEFAULT NULL,
	PRIMARY KEY (`cod_emp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `empresa` (`cod_emp`, `nom_emp`, `tel_emp`, `dir_emp`, `cor_emp`, `rif_emp`, `hou_emp`, `hod_emp`, `act_emp`) VALUES
(1, 'Comercializadora ALCOR C.A', '+584147528826', 'Barrio El Carmen', 'alcor@gmail.com', 'J-30161557-3', ' 08:00 AM - 12:00 P', '02:00 PM - 06:00 PM', '2020-02-27 03:48:43');

DELIMITER $$
CREATE TRIGGER `empresa_AI` AFTER INSERT ON `empresa` FOR EACH ROW INSERT INTO empresa_resp(nom_emp,tel_emp,dir_emp,cor_emp,rif_emp,hou_emp,hod_emp) VALUES(NEW.nom_emp,NEW.tel_emp,NEW.dir_emp,NEW.cor_emp,NEW.rif_emp,NEW.hou_emp,NEW.hod_emp)
$$
DELIMITER ;

DROP TABLE IF EXISTS empresa_resp;
CREATE TABLE IF NOT EXISTS empresa_resp (
	`cod_emp` int(11) NOT NULL AUTO_INCREMENT,
	`nom_emp` varchar(50) NOT NULL,
	`tel_emp` varchar(13) NOT NULL,
	`dir_emp` varchar(100) NOT NULL,
	`cor_emp` varchar(100) NOT NULL,
	`rif_emp` varchar(12) NOT NULL,
	`hou_emp` varchar(19) NOT NULL,
	`hod_emp` varchar(19) DEFAULT NULL,
	`act_emp` datetime DEFAULT NULL,
	PRIMARY KEY (`cod_emp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS formulario;
CREATE TABLE IF NOT EXISTS formulario (
	`cod_for` int(11) NOT NULL AUTO_INCREMENT,
	`nom_for` varchar(50) DEFAULT NULL,
	`ape_for` varchar(50) DEFAULT NULL,
	`tel_for` varchar(11) DEFAULT NULL,
	`cor_for` varchar(100) NOT NULL,
	`asu_for` varchar(100) NOT NULL,
	`cre_for` datetime NOT NULL,
	PRIMARY KEY (`cod_for`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DELIMITER $$
CREATE TRIGGER `formulario_AI` AFTER INSERT ON `formulario` FOR EACH ROW INSERT INTO formulario_resp(nom_for,ape_for,tel_for,cor_for,asu_for,cre_for) VALUES(NEW.nom_for,NEW.ape_for,NEW.tel_for,NEW.cor_for,NEW.asu_for,NOW())
$$
DELIMITER ;

DROP TABLE IF EXISTS formulario_resp;
CREATE TABLE IF NOT EXISTS formulario_resp (
	`cod_for` int(11) NOT NULL AUTO_INCREMENT,
	`nom_for` varchar(50) DEFAULT NULL,
	`ape_for` varchar(50) DEFAULT NULL,
	`tel_for` varchar(11) DEFAULT NULL,
	`cor_for` varchar(100) NOT NULL,
	`asu_for` varchar(100) NOT NULL,
	`cre_for` datetime NOT NULL,
	PRIMARY KEY (`cod_for`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS modulo;
CREATE TABLE IF NOT EXISTS modulo(
	`cod_mod` int(11) NOT NULL AUTO_INCREMENT,
	`nom_mod` varchar(20) NOT NULL,
	`url_mod` varchar(20) NOT NULL,
	`cre_mod` datetime NOT NULL,
	`act_mod` datetime DEFAULT NULL,
	`eli_mod` datetime DEFAULT NULL,
	`res_mod` datetime DEFAULT NULL,
	`est_mod` enum('A','I') NOT NULL,
	`bas_mod` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_mod`),
	UNIQUE KEY `nom_mod` (`nom_mod`),
	UNIQUE KEY `url_mod` (`url_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `modulo` (`cod_mod`, `nom_mod`, `url_mod`, `cre_mod`, `act_mod`, `eli_mod`, `res_mod`, `est_mod`, `bas_mod`) VALUES
(1, 'Empleados', 'ado_menu.php', '2020-02-27 03:52:59', '2020-02-27 03:53:38', NULL, NULL, 'I', 'A'),
(2, 'Proveedores', 'edo_menu.php', '2020-02-27 03:53:03', NULL, NULL, NULL, 'A', 'A'),
(3, 'Productos', 'pro_menu.php', '2020-02-27 03:53:09', NULL, NULL, NULL, 'A', 'A'),
(4, 'Ventas', 'ven_menu.php', '2020-02-27 03:53:14', NULL, NULL, NULL, 'A', 'A'),
(8, 'Formularios', 'for_menu.php', '2020-02-27 03:55:13', NULL, NULL, NULL, 'A', 'A');

DELIMITER $$
CREATE TRIGGER `modulo_AI` AFTER INSERT ON `modulo` FOR EACH ROW INSERT INTO modulo_resp(nom_mod,url_mod,cre_mod,est_mod,bas_mod) VALUES(NEW.nom_mod,NEW.url_mod,NOW(),NEW.est_mod,NEW.bas_mod)
$$
DELIMITER ;

DROP TABLE IF EXISTS modulo_resp;
CREATE TABLE IF NOT EXISTS modulo_resp(
	`cod_mod` int(11) NOT NULL AUTO_INCREMENT,
	`nom_mod` varchar(20) NOT NULL,
	`url_mod` varchar(20) NOT NULL,
	`cre_mod` datetime NOT NULL,
	`act_mod` datetime DEFAULT NULL,
	`eli_mod` datetime DEFAULT NULL,
	`res_mod` datetime DEFAULT NULL,
	`est_mod` enum('A','I') NOT NULL,
	`bas_mod` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_mod`),
	UNIQUE KEY `nom_mod` (`nom_mod`),
	UNIQUE KEY `url_mod` (`url_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS permiso;
CREATE TABLE IF NOT EXISTS permiso (
	`cod_per` int(11) NOT NULL AUTO_INCREMENT,
	`fky_cargo` int(11) NOT NULL,
	`fky_modulo` int(11) NOT NULL,
	`cre_per` datetime NOT NULL,
	`act_per` datetime DEFAULT NULL,
	`eli_per` datetime DEFAULT NULL,
	`res_per` datetime DEFAULT NULL,
	`est_per` enum('A','I') NOT NULL,
	`bas_per` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_per`),
	INDEX `fky_cargo` (`fky_cargo`),
	INDEX `fky_modulo` (`fky_modulo`),
	FOREIGN KEY (`fky_cargo`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE,
	FOREIGN KEY (`fky_modulo`) REFERENCES `modulo` (`cod_mod`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `permiso` (`cod_per`, `fky_cargo`, `fky_modulo`, `cre_per`, `act_per`, `eli_per`, `res_per`, `est_per`, `bas_per`) VALUES
(1, 2, 4, '2020-02-27 03:54:11', NULL, NULL, NULL, 'A', 'A'),
(2, 2, 3, '2020-02-27 03:54:21', NULL, NULL, NULL, 'A', 'A'),
(3, 3, 3, '2020-02-27 03:54:27', NULL, NULL, NULL, 'A', 'A'),
(4, 4, 8, '2020-02-27 03:56:54', NULL, NULL, NULL, 'A', 'A');

DELIMITER $$
CREATE TRIGGER `permiso_AI` AFTER INSERT ON `permiso` FOR EACH ROW INSERT INTO permiso_resp(fky_cargo,fky_modulo,cre_per,est_per,bas_per) VALUES(NEW.fky_cargo,NEW.fky_modulo,NOW(),NEW.est_per,NEW.bas_per)
$$
DELIMITER ;

DROP TABLE IF EXISTS permiso_resp;
CREATE TABLE IF NOT EXISTS permiso_resp (
	`cod_per` int(11) NOT NULL AUTO_INCREMENT,
	`fky_cargo` int(11) NOT NULL,
	`fky_modulo` int(11) NOT NULL,
	`cre_per` datetime NOT NULL,
	`act_per` datetime DEFAULT NULL,
	`eli_per` datetime DEFAULT NULL,
	`res_per` datetime DEFAULT NULL,
	`est_per` enum('A','I') NOT NULL,
	`bas_per` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_per`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS proveedor;
CREATE TABLE IF NOT EXISTS proveedor (
	`cod_edo` int(11) NOT NULL AUTO_INCREMENT,
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
	`bas_edo` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_edo`),
	UNIQUE KEY `nom_edo` (`nom_edo`),
	UNIQUE KEY `cor_edo` (`cor_edo`),
	UNIQUE KEY `rif_edo` (`rif_edo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `proveedor` (`cod_edo`, `nom_edo`, `des_edo`, `dir_edo`, `tel_edo`, `cor_edo`, `tip_edo`, `rif_edo`, `cre_edo`, `act_edo`, `eli_edo`, `res_edo`, `est_edo`, `bas_edo`) VALUES
(1, 'GeneMundos', 'genericooos', 'caracas', '04141243256', 'genemundo@gmail.com', 'V', '12312321-5', '2020-02-27 04:01:30', '2020-02-27 04:11:12', '2020-02-27 04:11:37', '2020-02-27 04:11:43', 'A', 'A'),
(2, 'Los Andes', 'Gnericos', 'caracas', '01235921244', 'proc@gmail.com', 'V', '1231232131', '2020-02-27 04:14:04', NULL, NULL, NULL, 'A', 'A');

DELIMITER $$
CREATE TRIGGER `proveedor_AI` AFTER INSERT ON `proveedor` FOR EACH ROW INSERT INTO proveedor_resp(nom_edo,des_edo,dir_edo,tel_edo,cor_edo,tip_edo,rif_edo,cre_edo,est_edo,bas_edo) VALUES(NEW.nom_edo,NEW.des_edo,NEW.dir_edo,NEW.tel_edo,NEW.cor_edo,NEW.tip_edo,NEW.rif_edo,NOW(),NEW.est_edo,NEW.bas_edo)
$$
DELIMITER ;

DROP TABLE IF EXISTS proveedor_resp;
CREATE TABLE IF NOT EXISTS proveedor_resp (
	`cod_edo` int(11) NOT NULL AUTO_INCREMENT,
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
	`bas_edo` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_edo`),
	UNIQUE KEY `nom_edo` (`nom_edo`),
	UNIQUE KEY `cor_edo` (`cor_edo`),
	UNIQUE KEY `rif_edo` (`rif_edo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS producto;
CREATE TABLE IF NOT EXISTS producto (
	`cod_pro` int(11) NOT NULL AUTO_INCREMENT,
	`nom_pro` varchar(50) NOT NULL,
	`des_pro` varchar(100) NOT NULL,
	`pre_pro` float(11,2) NOT NULL,
	`can_pro` float(11,1) NOT NULL,
	`fky_proveedor` int(11) NOT NULL,
	`cre_pro` datetime NOT NULL,
	`act_pro` datetime DEFAULT NULL,
	`eli_pro` datetime DEFAULT NULL,
	`res_pro` datetime DEFAULT NULL,
	`est_pro` enum('A','I') NOT NULL,
	`bas_pro` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_pro`),
	INDEX `fky_proveedor` (`fky_proveedor`),
	FOREIGN KEY (`fky_proveedor`) REFERENCES `proveedor` (`cod_edo`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `producto` (`cod_pro`, `nom_pro`, `des_pro`, `pre_pro`, `can_pro`, `fky_proveedor`, `cre_pro`, `act_pro`, `eli_pro`, `res_pro`, `est_pro`, `bas_pro`) VALUES
(1, 'Clorooo', 'jabonoso', 180.00, 10.0, 2, '2020-02-27 04:14:36', NULL, NULL, NULL, 'A', 'A'),
(2, 'Jabon liquido', 'jabon>', 123.00, 0.0, 1, '2020-02-27 04:15:03', '2020-02-27 04:16:18', NULL, NULL, 'A', 'A');

DELIMITER $$
CREATE TRIGGER `producto_AI` AFTER INSERT ON `producto` FOR EACH ROW INSERT INTO producto_resp(nom_pro,des_pro,pre_pro,can_pro,fky_proveedor,cre_pro,bas_pro,est_pro) VALUES(NEW.nom_pro,NEW.des_pro,NEW.pre_pro,NEW.can_pro,NEW.fky_proveedor,NOW(),NEW.bas_pro,NEW.est_pro)
$$
DELIMITER ;

DROP TABLE IF EXISTS producto_resp;
CREATE TABLE IF NOT EXISTS producto_resp (
	`cod_pro` int(11) NOT NULL AUTO_INCREMENT,
	`nom_pro` varchar(50) NOT NULL,
	`des_pro` varchar(100) NOT NULL,
	`pre_pro` float(11,2) NOT NULL,
	`can_pro` float(11,1) NOT NULL,
	`fky_proveedor` int(11) NOT NULL,
	`cre_pro` datetime NOT NULL,
	`act_pro` datetime DEFAULT NULL,
	`eli_pro` datetime DEFAULT NULL,
	`res_pro` datetime DEFAULT NULL,
	`est_pro` enum('A','I') NOT NULL,
	`bas_pro` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;