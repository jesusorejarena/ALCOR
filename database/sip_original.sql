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

DELIMITER $$
CREATE TRIGGER `cargo_AD` AFTER DELETE ON `cargo` FOR EACH ROW INSERT INTO cargo_resp(nom_car, cre_car, act_car, eli_car, res_car, est_car, bas_car) VALUES (OLD.nom_car, OLD.cre_car, OLD.act_car, OLD.eli_car, OLD.res_car, OLD.est_car, OLD.bas_car)
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

DROP TABLE IF EXISTS preguntas_seguridad;
CREATE TABLE IF NOT EXISTS preguntas_seguridad (
	cod_pse INT(11) NOT NULL AUTO_INCREMENT,
	nom_pse VARCHAR(50) NOT NULL,
	par_pse INT(11) NOT NULL,
	PRIMARY KEY (cod_pse)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `preguntas_seguridad` (`cod_pse`, `nom_pse`, `par_pse`) VALUES (NULL, '¿Cómo se llamo su primera mascota?', '1'), (NULL, '¿Cuál es su materia favorita del bachillerato?', '1'), (NULL, '¿Cuál es el nombre de su abuela materna?', '2'), (NULL, '¿Cuál es su comida favorita?', '2');

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
	`cod_car` int(11) NOT NULL,
	`fky_preseg1` INT(11) DEFAULT NULL,
	`re1_ado` VARCHAR(40) DEFAULT NULL,
	`fky_preseg2` INT(11) DEFAULT NULL,
	`re2_ado` VARCHAR(40) DEFAULT NULL,
	`cre_ado` datetime NOT NULL,
	`act_ado` datetime DEFAULT NULL,
	`eli_ado` datetime DEFAULT NULL,
	`res_ado` datetime DEFAULT NULL,
	`est_ado` enum('A','I') NOT NULL,
	`bas_ado` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_ado`),
	UNIQUE KEY `ced_ado` (`ced_ado`),
	UNIQUE KEY `cor_ado` (`cor_ado`),
	INDEX `cod_car` (`cod_car`),
	FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE,
	FOREIGN KEY (fky_preseg1) REFERENCES preguntas_seguridad(cod_pse) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY (fky_preseg2) REFERENCES preguntas_seguridad(cod_pse) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DELIMITER $$
CREATE TRIGGER `empleado_AD` AFTER DELETE ON `empleado` FOR EACH ROW INSERT INTO empleado_resp(nom_ado, ape_ado, gen_ado, nac_ado, tip_ado, ced_ado, tel_ado, cor_ado, cla_ado, dir_ado, cod_car, cre_ado, act_ado, eli_ado, res_ado, est_ado, bas_ado) VALUES (OLD.nom_ado, OLD.ape_ado, OLD.gen_ado, OLD.nac_ado, OLD.tip_ado, OLD.ced_ado, OLD.tel_ado, OLD.cor_ado, OLD.cla_ado, OLD.dir_ado, OLD.cod_car, OLD.cre_ado, OLD.act_ado, OLD.eli_ado, OLD.res_ado, OLD.est_ado, OLD.bas_ado)
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
	`cod_car` int(11) NOT NULL,
	`fky_preseg1` INT(11) DEFAULT NULL,
	`re1_ado` VARCHAR(40) DEFAULT NULL,
	`fky_preseg2` INT(11) DEFAULT NULL,
	`re2_ado` VARCHAR(40) DEFAULT NULL,
	`cre_ado` datetime NOT NULL,
	`act_ado` datetime DEFAULT NULL,
	`eli_ado` datetime DEFAULT NULL,
	`res_ado` datetime DEFAULT NULL,
	`est_ado` enum('A','I') NOT NULL,
	`bas_ado` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_ado`),
	UNIQUE KEY `ced_ado` (`ced_ado`),
	UNIQUE KEY `cor_ado` (`cor_ado`),
	INDEX `cod_car` (`cod_car`)
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

DELIMITER $$
CREATE TRIGGER `empresa_AU` AFTER UPDATE ON `empresa` FOR EACH ROW INSERT INTO empresa_resp(nom_emp, tel_emp, dir_emp, cor_emp, rif_emp, hou_emp, hod_emp, act_emp) VALUES(OLD.nom_emp, OLD.tel_emp, OLD.dir_emp, OLD.cor_emp, OLD.rif_emp, OLD.hou_emp, OLD.hod_emp, OLD.act_emp)
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
CREATE TRIGGER `formulario_AD` AFTER DELETE ON `formulario` FOR EACH ROW INSERT INTO formulario_resp(nom_for, ape_for, tel_for, cor_for, asu_for, cre_for) VALUES(OLD.nom_for, OLD.ape_for, OLD.tel_for, OLD.cor_for, OLD.asu_for, OLD.cre_for)
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
	PRIMARY KEY (`cod_mod`),
	UNIQUE KEY `nom_mod` (`nom_mod`),
	UNIQUE KEY `url_mod` (`url_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `modulo` (`cod_mod`, `nom_mod`, `url_mod`) VALUES (NULL, 'Empleados', 'ado_menu.php'), (NULL, 'Proveedores', 'edo_menu.php'), (NULL, 'Productos', 'pro_menu.php'), (NULL, 'Ventas', 'ven_menu.php'), (NULL, 'Formularios', 'for_menu.php');

DELIMITER $$
CREATE TRIGGER `modulo_AD` AFTER DELETE ON `modulo` FOR EACH ROW INSERT INTO modulo_resp(nom_mod, url_mod) VALUES(OLD.nom_mod, OLD.url_mod)
$$
DELIMITER ;

DROP TABLE IF EXISTS modulo_resp;
CREATE TABLE IF NOT EXISTS modulo_resp(
	`cod_mod` int(11) NOT NULL AUTO_INCREMENT,
	`nom_mod` varchar(20) NOT NULL,
	`url_mod` varchar(20) NOT NULL,
	PRIMARY KEY (`cod_mod`),
	UNIQUE KEY `nom_mod` (`nom_mod`),
	UNIQUE KEY `url_mod` (`url_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS permiso;
CREATE TABLE IF NOT EXISTS permiso (
	`cod_per` int(11) NOT NULL AUTO_INCREMENT,
	`cod_car` int(11) NOT NULL,
	`cod_mod` int(11) NOT NULL,
	`cre_per` datetime NOT NULL,
	`act_per` datetime DEFAULT NULL,
	`eli_per` datetime DEFAULT NULL,
	`res_per` datetime DEFAULT NULL,
	`est_per` enum('A','I') NOT NULL,
	`bas_per` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_per`),
	INDEX `cod_car` (`cod_car`),
	INDEX `cod_mod` (`cod_mod`),
	FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE,
	FOREIGN KEY (`cod_mod`) REFERENCES `modulo` (`cod_mod`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DELIMITER $$
CREATE TRIGGER `permiso_AD` AFTER DELETE ON `permiso` FOR EACH ROW INSERT INTO permiso_resp(cod_car, cod_mod, cre_per, act_per, eli_per, res_per, est_per, bas_per) VALUES(OLD.cod_car, OLD.cod_mod, OLD.cre_per, OLD.act_per, OLD.eli_per, OLD.res_per, OLD.est_per, OLD.bas_per)
$$
DELIMITER ;

DROP TABLE IF EXISTS permiso_resp;
CREATE TABLE IF NOT EXISTS permiso_resp (
	`cod_per` int(11) NOT NULL AUTO_INCREMENT,
	`cod_car` int(11) NOT NULL,
	`cod_mod` int(11) NOT NULL,
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

DELIMITER $$
CREATE TRIGGER `proveedor_AD` AFTER DELETE ON `proveedor` FOR EACH ROW INSERT INTO proveedor_resp(nom_edo, des_edo, dir_edo, tel_edo, cor_edo, tip_edo, rif_edo, cre_edo, act_edo, eli_edo, res_edo, est_edo, bas_edo) VALUES(OLD.nom_edo, OLD.des_edo, OLD.dir_edo, OLD.tel_edo, OLD.cor_edo, OLD.tip_edo, OLD.rif_edo, OLD.cre_edo, OLD.act_edo, OLD.eli_edo, OLD.res_edo, OLD.est_edo, OLD.bas_edo)
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
	`cod_edo` int(11) NOT NULL,
	`cre_pro` datetime NOT NULL,
	`act_pro` datetime DEFAULT NULL,
	`eli_pro` datetime DEFAULT NULL,
	`res_pro` datetime DEFAULT NULL,
	`est_pro` enum('A','I') NOT NULL,
	`bas_pro` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_pro`),
	INDEX `cod_edo` (`cod_edo`),
	FOREIGN KEY (`cod_edo`) REFERENCES `proveedor` (`cod_edo`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DELIMITER $$
CREATE TRIGGER `producto_AD` AFTER DELETE ON `producto` FOR EACH ROW INSERT INTO producto_resp(nom_pro, des_pro, pre_pro, can_pro, cod_edo, cre_pro, act_pro, eli_pro, res_pro, est_pro, bas_pro) VALUES(OLD.nom_pro, OLD.des_pro, OLD.pre_pro, OLD.can_pro, OLD.cod_edo, OLD.cre_pro, OLD.act_pro, OLD.eli_pro, OLD.res_pro, OLD.est_pro, OLD.bas_pro)
$$
DELIMITER ;

DROP TABLE IF EXISTS producto_resp;
CREATE TABLE IF NOT EXISTS producto_resp (
	`cod_pro` int(11) NOT NULL AUTO_INCREMENT,
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
	`bas_pro` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;