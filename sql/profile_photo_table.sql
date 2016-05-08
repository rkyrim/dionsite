-- MySQL Workbench Synchronization
-- Generated: 2016-05-06 20:36
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Patatas

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE TABLE IF NOT EXISTS `profile_photo` (
  `accounts_id` INT(11) NOT NULL,
  `profile_photo` VARCHAR(100) NULL DEFAULT NULL,
  `date_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `fk_account_profile_accounts_idx` (`accounts_id` ASC),
  UNIQUE INDEX `accounts_id_UNIQUE` (`accounts_id` ASC),
  PRIMARY KEY (`accounts_id`),
  CONSTRAINT `fk_account_profile_accounts`
    FOREIGN KEY (`accounts_id`)
    REFERENCES `accounts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
