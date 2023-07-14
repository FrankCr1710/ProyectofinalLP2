-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema universidad
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema universidad
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `universidad` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `universidad` ;

-- -----------------------------------------------------
-- Table `universidad`.`carreras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`carreras` (
  `id_carrera` INT NOT NULL AUTO_INCREMENT,
  `nombre_carrera` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id_carrera`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `universidad`.`ciclos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`ciclos` (
  `id_ciclo` INT NOT NULL AUTO_INCREMENT,
  `numero_ciclo` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ciclo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `universidad`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`cursos` (
  `id_curso` INT NOT NULL AUTO_INCREMENT,
  `nombre_curso` VARCHAR(100) NULL DEFAULT NULL,
  `id_horario_curso` INT NULL DEFAULT NULL,
  `id_carrera_curso` INT NULL DEFAULT NULL,
  `id_ciclo_curso` INT NULL DEFAULT NULL,
  `id_usuario_curso` INT NULL DEFAULT NULL,
  `usuarios_id` INT NOT NULL,
  PRIMARY KEY (`id_curso`),
  INDEX `FK_cursos_carreras` (`id_carrera_curso` ASC) VISIBLE,
  INDEX `FK_cursos_ciclos` (`id_ciclo_curso` ASC) VISIBLE,
  CONSTRAINT `FK_cursos_carreras`
    FOREIGN KEY (`id_carrera_curso`)
    REFERENCES `universidad`.`carreras` (`id_carrera`),
  CONSTRAINT `FK_cursos_ciclos`
    FOREIGN KEY (`id_ciclo_curso`)
    REFERENCES `universidad`.`ciclos` (`id_ciclo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `universidad`.`estudiantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`estudiantes` (
  `id_estudiante` INT NOT NULL AUTO_INCREMENT,
  `nombre_estudiante` VARCHAR(100) NULL DEFAULT NULL,
  `apellido_estudiante` VARCHAR(100) NULL DEFAULT NULL,
  `codigo_estudiante` INT NULL DEFAULT NULL,
  `dni_estudiante` INT NULL DEFAULT NULL,
  `contrasena_estudiante` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `universidad`.`matriculas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universidad`.`matriculas` (
  `id_matricula` INT NOT NULL AUTO_INCREMENT,
  `id_estudiante_matricula` INT NULL DEFAULT NULL,
  `id_curso_matricula` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_matricula`),
  INDEX `FK_matriculas_estudiantes` (`id_estudiante_matricula` ASC) VISIBLE,
  INDEX `FK_matriculas_cursos` (`id_curso_matricula` ASC) VISIBLE,
  CONSTRAINT `FK_matriculas_cursos`
    FOREIGN KEY (`id_curso_matricula`)
    REFERENCES `universidad`.`cursos` (`id_curso`),
  CONSTRAINT `FK_matriculas_estudiantes`
    FOREIGN KEY (`id_estudiante_matricula`)
    REFERENCES `universidad`.`estudiantes` (`id_estudiante`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
