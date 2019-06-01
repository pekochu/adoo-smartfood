-- MySQL Script generated by MySQL Workbench
-- Fri May 31 20:10:59 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema tphpzon0_smartfood
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `tphpzon0_smartfood` ;

-- -----------------------------------------------------
-- Schema tphpzon0_smartfood
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tphpzon0_smartfood` DEFAULT CHARACTER SET utf8 ;
USE `tphpzon0_smartfood` ;

-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Cliente` (
  `idCliente` INT NOT NULL,
  `login_clien` VARCHAR(20) NOT NULL,
  `Nombre` CHAR(25) NOT NULL,
  `Ap_Paterno` CHAR(10) NOT NULL,
  `Ap_Materno` CHAR(10) NULL,
  `Direccion` CHAR(50) NULL,
  `cont_clien` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idCliente`, `login_clien`),
  UNIQUE INDEX `login_clien_UNIQUE` (`login_clien` ASC) ,
  UNIQUE INDEX `idCliente_UNIQUE` (`idCliente` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Menu` (
  `idEnsalada` INT NOT NULL,
  `idJugo` INT NOT NULL,
  PRIMARY KEY (`idEnsalada`, `idJugo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Cocinero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Cocinero` (
  `idCocinero` INT NOT NULL AUTO_INCREMENT,
  `login_Cocin` VARCHAR(20) NOT NULL,
  `cont_cocin` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idCocinero`),
  UNIQUE INDEX `login_Cocin_UNIQUE` (`login_Cocin` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Pago` (
  `idPago` INT NOT NULL,
  `Precio` DOUBLE NULL,
  PRIMARY KEY (`idPago`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Pedido` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `idCliente` INT NOT NULL,
  `idCocinero` INT NOT NULL,
  `Pago_idPago` INT NOT NULL,
  `Estado` INT NOT NULL COMMENT '1.- Ordenado\n2.- Preparando\n3.- Entregado',
  PRIMARY KEY (`idPedido`, `idCliente`, `idCocinero`, `Pago_idPago`),
  INDEX `idCliente_idx` (`idCliente` ASC) ,
  INDEX `fk_Pedido_Cocinero1_idx` (`idCocinero` ASC) ,
  INDEX `fk_Pedido_Pago1_idx` (`Pago_idPago` ASC) ,
  CONSTRAINT `idCliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `tphpzon0_smartfood`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Cocinero1`
    FOREIGN KEY (`idCocinero`)
    REFERENCES `tphpzon0_smartfood`.`Cocinero` (`idCocinero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Pago1`
    FOREIGN KEY (`Pago_idPago`)
    REFERENCES `tphpzon0_smartfood`.`Pago` (`idPago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Frutas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Frutas` (
  `idFrutas` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Precio` FLOAT NULL,
  PRIMARY KEY (`idFrutas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Verduras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Verduras` (
  `idVerdura` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Precio` FLOAT NULL,
  PRIMARY KEY (`idVerdura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Aderezos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Aderezos` (
  `idAderezos` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Precio` FLOAT NULL,
  PRIMARY KEY (`idAderezos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Carnes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Carnes` (
  `idCarnes` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `Precio` FLOAT NULL,
  PRIMARY KEY (`idCarnes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Ensalada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Ensalada` (
  `idPedido` INT NOT NULL,
  INDEX `fk_Ensalada_Pedido1_idx` (`idPedido` ASC) ,
  PRIMARY KEY (`idPedido`),
  CONSTRAINT `fk_Ensalada_Pedido1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `tphpzon0_smartfood`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Frutas_has_Ensalada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Frutas_has_Ensalada` (
  `idPedido` INT NOT NULL,
  `idFrutas` INT NOT NULL,
  `cantidad` INT NULL,
  PRIMARY KEY (`idPedido`, `idFrutas`),
  INDEX `fk_Frutas_has_Ensalada_Ensalada1_idx` (`idPedido` ASC) ,
  INDEX `fk_Frutas_has_Ensalada_Frutas1_idx` (`idFrutas` ASC) ,
  CONSTRAINT `fk_Frutas_has_Ensalada_Frutas1`
    FOREIGN KEY (`idFrutas`)
    REFERENCES `tphpzon0_smartfood`.`Frutas` (`idFrutas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Frutas_has_Ensalada_Ensalada1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `tphpzon0_smartfood`.`Ensalada` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Verduras_has_Ensalada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Verduras_has_Ensalada` (
  `idPedido` INT NOT NULL,
  `idVerdura` INT NOT NULL,
  `cantidad` INT NULL,
  PRIMARY KEY (`idPedido`, `idVerdura`),
  INDEX `fk_Verduras_has_Ensalada_Ensalada1_idx` (`idPedido` ASC) ,
  INDEX `fk_Verduras_has_Ensalada_Verduras1_idx` (`idVerdura` ASC) ,
  CONSTRAINT `fk_Verduras_has_Ensalada_Verduras1`
    FOREIGN KEY (`idVerdura`)
    REFERENCES `tphpzon0_smartfood`.`Verduras` (`idVerdura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Verduras_has_Ensalada_Ensalada1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `tphpzon0_smartfood`.`Ensalada` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Aderezos_has_Ensalada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (
  `idPedido` INT NOT NULL,
  `idAderezos` INT NOT NULL,
  `cantidad` INT NULL,
  PRIMARY KEY (`idPedido`, `idAderezos`),
  INDEX `fk_Aderezos_has_Ensalada_Ensalada1_idx` (`idPedido` ASC) ,
  INDEX `fk_Aderezos_has_Ensalada_Aderezos1_idx` (`idAderezos` ASC) ,
  CONSTRAINT `fk_Aderezos_has_Ensalada_Aderezos1`
    FOREIGN KEY (`idAderezos`)
    REFERENCES `tphpzon0_smartfood`.`Aderezos` (`idAderezos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aderezos_has_Ensalada_Ensalada1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `tphpzon0_smartfood`.`Ensalada` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tphpzon0_smartfood`.`Carnes_has_Ensalada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tphpzon0_smartfood`.`Carnes_has_Ensalada` (
  `idPedido` INT NOT NULL,
  `idCarnes` INT NOT NULL,
  `cantidad` INT NULL,
  PRIMARY KEY (`idPedido`, `idCarnes`),
  INDEX `fk_Carnes_has_Ensalada_Ensalada1_idx` (`idPedido` ASC) ,
  INDEX `fk_Carnes_has_Ensalada_Carnes1_idx` (`idCarnes` ASC) ,
  CONSTRAINT `fk_Carnes_has_Ensalada_Carnes1`
    FOREIGN KEY (`idCarnes`)
    REFERENCES `tphpzon0_smartfood`.`Carnes` (`idCarnes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Carnes_has_Ensalada_Ensalada1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `tphpzon0_smartfood`.`Ensalada` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Cliente`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Cliente` (`idCliente`, `login_clien`, `Nombre`, `Ap_Paterno`, `Ap_Materno`, `Direccion`, `cont_clien`) VALUES (00001, 'marcocliente', 'Marco', 'Aguilar', 'Morales', 'ESCOM, Nueva Industrial Vallejo,07738', '123456789');
INSERT INTO `tphpzon0_smartfood`.`Cliente` (`idCliente`, `login_clien`, `Nombre`, `Ap_Paterno`, `Ap_Materno`, `Direccion`, `cont_clien`) VALUES (00002, 'pekochu', 'Luis', 'Bravo', 'López', 'Lindavista,Av. Montevideo, 07300', 'pekobot');
INSERT INTO `tphpzon0_smartfood`.`Cliente` (`idCliente`, `login_clien`, `Nombre`, `Ap_Paterno`, `Ap_Materno`, `Direccion`, `cont_clien`) VALUES (00003, 'lara@gmail.com', 'Oscar', 'JAIR', 'LARA', 'ESCOM, Nueva Industrial Vallejo,07738', 'crack');
INSERT INTO `tphpzon0_smartfood`.`Cliente` (`idCliente`, `login_clien`, `Nombre`, `Ap_Paterno`, `Ap_Materno`, `Direccion`, `cont_clien`) VALUES (00004, 'l@gmail.com', 'HACHE', 'MIGUEL', 'HERNAN', 'Lindavista,Av. Montevideo, 07300', 'holamundo');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Cocinero`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Cocinero` (`idCocinero`, `login_Cocin`, `cont_cocin`) VALUES (0001, 'cocinerorey', 'cocina69');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Pago`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Pago` (`idPago`, `Precio`) VALUES (1, NULL);
INSERT INTO `tphpzon0_smartfood`.`Pago` (`idPago`, `Precio`) VALUES (2, NULL);
INSERT INTO `tphpzon0_smartfood`.`Pago` (`idPago`, `Precio`) VALUES (3, NULL);
INSERT INTO `tphpzon0_smartfood`.`Pago` (`idPago`, `Precio`) VALUES (4, NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Pedido`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Pedido` (`idPedido`, `idCliente`, `idCocinero`, `Pago_idPago`, `Estado`) VALUES (1, 1, 1, 1, 3);
INSERT INTO `tphpzon0_smartfood`.`Pedido` (`idPedido`, `idCliente`, `idCocinero`, `Pago_idPago`, `Estado`) VALUES (2, 3, 1, 2, 3);
INSERT INTO `tphpzon0_smartfood`.`Pedido` (`idPedido`, `idCliente`, `idCocinero`, `Pago_idPago`, `Estado`) VALUES (3, 1, 1, 3, 2);
INSERT INTO `tphpzon0_smartfood`.`Pedido` (`idPedido`, `idCliente`, `idCocinero`, `Pago_idPago`, `Estado`) VALUES (4, 1, 1, 4, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Frutas`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (1, 'Mango', 10);
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (2, 'Kiwi', 13.5);
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (3, 'Durazno', 8.5);
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (4, 'Piña', 8.5);
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (5, 'Naranja', 7);
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (6, 'Fresa', 12.5);
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (7, 'Nuez', 12.5);
INSERT INTO `tphpzon0_smartfood`.`Frutas` (`idFrutas`, `Nombre`, `Precio`) VALUES (8, 'Platano', 4.5);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Verduras`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (001, 'Lechuga', 5);
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (002, 'Jitomate', 5);
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (003, 'Pepino', 7);
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (004, 'Aguacate', 10);
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (005, 'Cebolla', 5);
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (006, 'Zanahorias', 10);
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (007, 'Espinacas', 7.5);
INSERT INTO `tphpzon0_smartfood`.`Verduras` (`idVerdura`, `Nombre`, `Precio`) VALUES (008, 'Papas', 9);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Aderezos`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (001, 'Ranch', 12.5);
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (002, 'Mil islas', 12);
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (003, 'Chipotle', 10);
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (004, 'Jalapeño', 13);
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (005, 'Aceite de oliva', 12);
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (006, 'Aceite de coco', 22);
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (007, 'Cesar', 15);
INSERT INTO `tphpzon0_smartfood`.`Aderezos` (`idAderezos`, `Nombre`, `Precio`) VALUES (008, 'Wasabi', 18.5);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Carnes`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (001, 'Pollo', 20);
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (002, 'Atun', 22.5);
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (003, 'Salmon', 27.5);
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (004, 'Pastor', 15);
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (005, 'Bistec', 15);
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (006, 'Salchicha', 9.5);
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (007, 'Jamon', 10.5);
INSERT INTO `tphpzon0_smartfood`.`Carnes` (`idCarnes`, `Nombre`, `Precio`) VALUES (008, 'Huevo', 14);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Ensalada`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Ensalada` (`idPedido`) VALUES (1);
INSERT INTO `tphpzon0_smartfood`.`Ensalada` (`idPedido`) VALUES (2);
INSERT INTO `tphpzon0_smartfood`.`Ensalada` (`idPedido`) VALUES (3);
INSERT INTO `tphpzon0_smartfood`.`Ensalada` (`idPedido`) VALUES (4);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Frutas_has_Ensalada`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (1, 9, 1);
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (1, 6, 2);
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (2, 4, 3);
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (3, 8, 6);
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (2, 7, 4);
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (2, 6, 7);
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (4, 1, 2);
INSERT INTO `tphpzon0_smartfood`.`Frutas_has_Ensalada` (`idPedido`, `idFrutas`, `cantidad`) VALUES (3, 1, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Verduras_has_Ensalada`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (1, 001, 2);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (1, 002, 1);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (1, 004, 5);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (2, 006, 2);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (3, 007, 1);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (4, 003, 3);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (2, 004, 4);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (3, 008, 5);
INSERT INTO `tphpzon0_smartfood`.`Verduras_has_Ensalada` (`idPedido`, `idVerdura`, `cantidad`) VALUES (4, 005, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Aderezos_has_Ensalada`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (`idPedido`, `idAderezos`, `cantidad`) VALUES (1, 001, 1);
INSERT INTO `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (`idPedido`, `idAderezos`, `cantidad`) VALUES (2, 008, 2);
INSERT INTO `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (`idPedido`, `idAderezos`, `cantidad`) VALUES (2, 004, 1);
INSERT INTO `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (`idPedido`, `idAderezos`, `cantidad`) VALUES (3, 006, 3);
INSERT INTO `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (`idPedido`, `idAderezos`, `cantidad`) VALUES (3, 007, 1);
INSERT INTO `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (`idPedido`, `idAderezos`, `cantidad`) VALUES (3, 002, 2);
INSERT INTO `tphpzon0_smartfood`.`Aderezos_has_Ensalada` (`idPedido`, `idAderezos`, `cantidad`) VALUES (4, 003, 3);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tphpzon0_smartfood`.`Carnes_has_Ensalada`
-- -----------------------------------------------------
START TRANSACTION;
USE `tphpzon0_smartfood`;
INSERT INTO `tphpzon0_smartfood`.`Carnes_has_Ensalada` (`idPedido`, `idCarnes`, `cantidad`) VALUES (2, 001, 4);
INSERT INTO `tphpzon0_smartfood`.`Carnes_has_Ensalada` (`idPedido`, `idCarnes`, `cantidad`) VALUES (3, 003, 2);
INSERT INTO `tphpzon0_smartfood`.`Carnes_has_Ensalada` (`idPedido`, `idCarnes`, `cantidad`) VALUES (4, 008, 1);
INSERT INTO `tphpzon0_smartfood`.`Carnes_has_Ensalada` (`idPedido`, `idCarnes`, `cantidad`) VALUES (4, 007, 1);

COMMIT;

