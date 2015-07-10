SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `virtual-e` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `virtual-e` ;

-- -----------------------------------------------------
-- Table `virtual-e`.`tb_rua`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_rua` (
  `id_rua` INT NOT NULL AUTO_INCREMENT,
  `rua_nome` VARCHAR(255) NULL,
  PRIMARY KEY (`id_rua`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_cep`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_cep` (
  `id_cep` INT NOT NULL AUTO_INCREMENT,
  `cep_numero` VARCHAR(255) NULL,
  PRIMARY KEY (`id_cep`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_bairro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_bairro` (
  `id_bairro` INT NOT NULL AUTO_INCREMENT,
  `id_rua` INT NULL,
  `bai_nome` VARCHAR(255) NULL,
  `id_cep` INT NULL,
  PRIMARY KEY (`id_bairro`),
  INDEX `fk_tb_bairro_rua_idx` (`id_rua` ASC),
  INDEX `fk_tb_bairro_cep_idx` (`id_cep` ASC),
  CONSTRAINT `fk_tb_bairro_rua`
    FOREIGN KEY (`id_rua`)
    REFERENCES `virtual-e`.`tb_rua` (`id_rua`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_bairro_cep`
    FOREIGN KEY (`id_cep`)
    REFERENCES `virtual-e`.`tb_cep` (`id_cep`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_cidade` (
  `id_cidade` INT NOT NULL AUTO_INCREMENT,
  `cid_nome` VARCHAR(255) NULL,
  `id_bairro` INT NULL,
  PRIMARY KEY (`id_cidade`),
  INDEX `fk_tb_cidade_bairro_idx` (`id_bairro` ASC),
  CONSTRAINT `fk_tb_cidade_bairro`
    FOREIGN KEY (`id_bairro`)
    REFERENCES `virtual-e`.`tb_bairro` (`id_bairro`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_estado` (
  `id_estado` INT NOT NULL AUTO_INCREMENT,
  `id_cidade` INT NULL,
  `est_nome` VARCHAR(2) NULL,
  PRIMARY KEY (`id_estado`),
  INDEX `fk_tb_estado_cidade_idx` (`id_cidade` ASC),
  CONSTRAINT `fk_tb_estado_cidade`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `virtual-e`.`tb_cidade` (`id_cidade`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_endereco` (
  `id_endereco` INT NOT NULL AUTO_INCREMENT,
  `id_estado` INT NULL,
  PRIMARY KEY (`id_endereco`),
  INDEX `fk_tb_endereco_1_idx` (`id_estado` ASC),
  CONSTRAINT `fk_tb_endereco_1`
    FOREIGN KEY (`id_estado`)
    REFERENCES `virtual-e`.`tb_estado` (`id_estado`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_aluno` (
  `id_aluno` INT NOT NULL AUTO_INCREMENT,
  `alu_nome` VARCHAR(100) NULL,
  `alu_datanasci` DATE NULL,
  `alu_datacad` DATE NULL,
  `alu_mae` VARCHAR(100) NULL,
  `alu_pai` VARCHAR(100) NULL,
  `alu_cpf` VARCHAR(40) NULL,
  `alu_rg` VARCHAR(40) NULL,
  `alu_email` VARCHAR(100) NULL,
  `alu_email1` VARCHAR(100) NULL,
  `alu_telefone` VARCHAR(100) NULL,
  `alu_telefone1` VARCHAR(100) NULL,
  `id_endereco` INT NULL,
  PRIMARY KEY (`id_aluno`),
  INDEX `fk_tb_pessoa_endereco_idx` (`id_endereco` ASC),
  CONSTRAINT `fk_tb_pessoa_endereco`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `virtual-e`.`tb_endereco` (`id_endereco`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
