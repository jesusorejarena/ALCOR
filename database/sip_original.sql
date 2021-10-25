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
	PRIMARY KEY (`cod_car`)
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

DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario (
	`cod_usu` int(11) NOT NULL AUTO_INCREMENT,
	`nom_usu` varchar(50) NOT NULL,
	`ape_usu` varchar(50) NOT NULL,
	`gen_usu` enum('H','M') NOT NULL,
	`nac_usu` date NOT NULL,
	`tip_usu` varchar(1) NULL,
	`ced_usu` int(8) NOT NULL,
	`tel_usu` varchar(11) NOT NULL,
	`cor_usu` varchar(100) NOT NULL,
	`cla_usu` varchar(40) DEFAULT NULL,
	`dir_usu` varchar(100) NULL,
	`cod_car` int(11) NOT NULL,
	`fky_preseg1` INT(11) DEFAULT NULL,
	`re1_usu` VARCHAR(40) DEFAULT NULL,
	`fky_preseg2` INT(11) DEFAULT NULL,
	`re2_usu` VARCHAR(40) DEFAULT NULL,
	`cre_usu` datetime NOT NULL,
	`act_usu` datetime DEFAULT NULL,
	`eli_usu` datetime DEFAULT NULL,
	`res_usu` datetime DEFAULT NULL,
	`est_usu` enum('A','I') NOT NULL,
	`bas_usu` enum('A','B') NOT NULL,
	PRIMARY KEY (`cod_usu`),
	UNIQUE KEY `ced_usu` (`ced_usu`),
	UNIQUE KEY `cor_usu` (`cor_usu`),
	INDEX `cod_car` (`cod_car`),
	FOREIGN KEY (`cod_car`) REFERENCES `cargo` (`cod_car`) ON UPDATE CASCADE,
	FOREIGN KEY (fky_preseg1) REFERENCES preguntas_seguridad(cod_pse) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY (fky_preseg2) REFERENCES preguntas_seguridad(cod_pse) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DELIMITER $$
CREATE TRIGGER `usuario_AD` AFTER DELETE ON `usuario` FOR EACH ROW INSERT INTO usuario_resp(nom_usu, ape_usu, gen_usu, nac_usu, tip_usu, ced_usu, tel_usu, cor_usu, cla_usu, dir_usu, cod_car, cre_usu, act_usu, eli_usu, res_usu, est_usu, bas_usu) VALUES (OLD.nom_usu, OLD.ape_usu, OLD.gen_usu, OLD.nac_usu, OLD.tip_usu, OLD.ced_usu, OLD.tel_usu, OLD.cor_usu, OLD.cla_usu, OLD.dir_usu, OLD.cod_car, OLD.cre_usu, OLD.act_usu, OLD.eli_usu, OLD.res_usu, OLD.est_usu, OLD.bas_usu)
$$
DELIMITER ;

DROP TABLE IF EXISTS usuario_resp;
CREATE TABLE IF NOT EXISTS usuario_resp (
	`cod_usu` int(11) NOT NULL AUTO_INCREMENT,
	`nom_usu` varchar(50) NULL,
	`ape_usu` varchar(50) NULL,
	`gen_usu` enum('H','M') NULL,
	`nac_usu` date NULL,
	`tip_usu` varchar(1) NULL,
	`ced_usu` int(8) NULL,
	`tel_usu` varchar(11) NULL,
	`cor_usu` varchar(100) NULL,
	`cla_usu` varchar(40) DEFAULT NULL,
	`dir_usu` varchar(100) NULL,
	`cod_car` int(11) NULL,
	`fky_preseg1` INT(11) DEFAULT NULL,
	`re1_usu` VARCHAR(40) DEFAULT NULL,
	`fky_preseg2` INT(11) DEFAULT NULL,
	`re2_usu` VARCHAR(40) DEFAULT NULL,
	`cre_usu` datetime NULL,
	`act_usu` datetime DEFAULT NULL,
	`eli_usu` datetime DEFAULT NULL,
	`res_usu` datetime DEFAULT NULL,
	`est_usu` enum('A','I') NULL,
	`bas_usu` enum('A','B') NULL,
	PRIMARY KEY (`cod_usu`)
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
	`nom_emp` varchar(50) NULL,
	`tel_emp` varchar(13) NULL,
	`dir_emp` varchar(100) NULL,
	`cor_emp` varchar(100) NULL,
	`rif_emp` varchar(12) NULL,
	`hou_emp` varchar(19) NULL,
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
	`cor_for` varchar(100) NULL,
	`asu_for` varchar(100) NULL,
	`cre_for` datetime NULL,
	PRIMARY KEY (`cod_for`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS modulo;
CREATE TABLE IF NOT EXISTS modulo(
	`cod_mod` int(11) NOT NULL AUTO_INCREMENT,
	`nom_mod` varchar(30) NOT NULL,
	`ico_mod` varchar(30) NOT NULL,
	`url_mod` varchar(30) NOT NULL,
	PRIMARY KEY (`cod_mod`),
	UNIQUE KEY `nom_mod` (`nom_mod`),
	UNIQUE KEY `url_mod` (`url_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `modulo` (`cod_mod`, `nom_mod`, `ico_mod`, `url_mod`) VALUES 
(NULL, 'Empleados', 'fas fa-users', 'usu_menu.php'), 
(NULL, 'Prendas', 'fas fa-tshirt', 'pre_menu.php'), 
(NULL, 'Proveedores', 'fas fa-truck', 'edo_menu.php'), 
(NULL, 'Productos', 'fas fa-shopping-basket', 'pro_menu.php'), 
(NULL, 'Pedidos', 'fas fa-receipt', 'pedidos.php'), 
(NULL, 'Formularios', 'fas fa-clipboard-list', 'for_menu.php');

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
	`cod_car` int(11) NULL,
	`cod_mod` int(11) NULL,
	`cre_per` datetime NULL,
	`act_per` datetime DEFAULT NULL,
	`eli_per` datetime DEFAULT NULL,
	`res_per` datetime DEFAULT NULL,
	`est_per` enum('A','I') NULL,
	`bas_per` enum('A','B') NULL,
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
	`nom_edo` varchar(50) NULL,
	`des_edo` varchar(100) DEFAULT NULL,
	`dir_edo` varchar(100) NULL,
	`tel_edo` varchar(11) NULL,
	`cor_edo` varchar(100) NULL,
	`tip_edo` varchar(1) NULL,
	`rif_edo` varchar(9) NULL,
	`cre_edo` datetime NULL,
	`act_edo` datetime DEFAULT NULL,
	`eli_edo` datetime DEFAULT NULL,
	`res_edo` datetime DEFAULT NULL,
	`est_edo` enum('A','I') NULL,
	`bas_edo` enum('A','B') NULL,
	PRIMARY KEY (`cod_edo`)
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
	`nom_pro` varchar(50) NULL,
	`des_pro` varchar(100) NULL,
	`pre_pro` float(11,2) NULL,
	`can_pro` float(11,1) NULL,
	`cod_edo` int(11) NULL,
	`cre_pro` datetime NULL,
	`act_pro` datetime DEFAULT NULL,
	`eli_pro` datetime DEFAULT NULL,
	`res_pro` datetime DEFAULT NULL,
	`est_pro` enum('A','I') NULL,
	`bas_pro` enum('A','B') NULL,
	PRIMARY KEY (`cod_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS prenda;
CREATE TABLE IF NOT EXISTS prenda (
	`cod_pre` int(11) NOT NULL AUTO_INCREMENT,
	`nom_pre` varchar(50) NOT NULL,
	`des_pre` varchar(100) NOT NULL,
	`pre_pre` float(11,2) NOT NULL,
	`cre_pre` datetime NOT NULL,
	`act_pre` datetime DEFAULT NULL,
	`res_pre` datetime DEFAULT NULL,
	`est_pre` enum('A','I') NOT NULL,
	PRIMARY KEY (`cod_pre`),
	UNIQUE KEY `nom_pre` (`nom_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* -------------------------------------------------- */

DROP TABLE IF EXISTS pedido;
CREATE TABLE IF NOT EXISTS pedido (
	`cod_ped` int(11) NOT NULL AUTO_INCREMENT,
	`pre_ped` float(11,2) NOT NULL,
	`cod_usu` int(11) NOT NULL,
	`cre_ped` datetime NOT NULL,
	`act_ped` datetime DEFAULT NULL,
	`eli_ped` datetime DEFAULT NULL,
	`est_ped` enum('P','V', 'T') NOT NULL,
	PRIMARY KEY (`cod_ped`),
	INDEX `cod_usu` (`cod_usu`),
	FOREIGN KEY (`cod_usu`) REFERENCES `usuario` (`cod_usu`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS pedido_relacion;
CREATE TABLE IF NOT EXISTS pedido_relacion (
	`cod_ped_rel` int(11) NOT NULL AUTO_INCREMENT,
	`cod_ped` int(11) NOT NULL,
	`cod_pre` int(11) NOT NULL,
	`can_ped_rel` int(11) NOT NULL,
	PRIMARY KEY (`cod_ped_rel`),
	INDEX `cod_ped` (`cod_ped`),
	INDEX `cod_pre` (`cod_pre`),
	FOREIGN KEY (`cod_ped`) REFERENCES `pedido` (`cod_ped`) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (`cod_pre`) REFERENCES `prenda` (`cod_pre`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;