CREATE SCHEMA IF NOT EXISTS `userdb` DEFAULT CHARACTER SET utf8mb4 ;
USE `userdb` ;


-- -----------------------------------------------------
-- Table `userdb`.`user`
-- -----------------------------------------------------\
DROP TABLE IF EXISTS `userdb`.`user` ;

CREATE TABLE IF NOT EXISTS `userdb`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `password` TEXT NOT NULL,
  `is_blocked` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE
)
ENGINE = InnoDB;
