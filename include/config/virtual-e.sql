SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `virtual-e` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `virtual-e` ;

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
  PRIMARY KEY (`id_aluno`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_estado` (
  `id_estado` INT NOT NULL AUTO_INCREMENT,
  `est_nome` VARCHAR(2) NULL,
  PRIMARY KEY (`id_estado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_cidade` (
  `id_cidade` INT NOT NULL AUTO_INCREMENT,
  `cid_nome` VARCHAR(45) NULL,
  `id_estado` INT NULL,
  PRIMARY KEY (`id_cidade`),
  INDEX `fk_tb_cidade_estado_idx` (`id_estado` ASC),
  CONSTRAINT `fk_tb_cidade_estado`
    FOREIGN KEY (`id_estado`)
    REFERENCES `virtual-e`.`tb_estado` (`id_estado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_bairro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_bairro` (
  `id_bairro` INT NOT NULL AUTO_INCREMENT,
  `bai_nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id_bairro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `virtual-e`.`tb_endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `virtual-e`.`tb_endereco` (
  `id_endereco` INT NOT NULL AUTO_INCREMENT,
  `end_rua` VARCHAR(255) NOT NULL,
  `end_numero` VARCHAR(60) NOT NULL,
  `id_pessoa` INT NOT NULL,
  `end_cep` VARCHAR(45) NOT NULL,
  `id_cidade` INT NOT NULL,
  `id_bairro` INT NULL,
  PRIMARY KEY (`id_endereco`),
  INDEX `fk_tb_endereco_aluno_idx` (`id_pessoa` ASC),
  INDEX `fk_tb_endereco_cidade_idx` (`id_cidade` ASC),
  INDEX `fk_tb_endereco_bairro_idx` (`id_bairro` ASC),
  CONSTRAINT `fk_tb_endereco_aluno`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `virtual-e`.`tb_aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_endereco_cidade`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `virtual-e`.`tb_cidade` (`id_cidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_endereco_bairro`
    FOREIGN KEY (`id_bairro`)
    REFERENCES `virtual-e`.`tb_bairro` (`id_bairro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
