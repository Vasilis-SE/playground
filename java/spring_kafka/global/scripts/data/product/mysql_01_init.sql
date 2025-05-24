CREATE SCHEMA IF NOT EXISTS `productdb` DEFAULT CHARACTER SET utf8mb4 ;
USE `productdb` ;

-- -----------------------------------------------------
-- Table `productdb`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `productdb`.`product` ;

CREATE TABLE IF NOT EXISTS `productdb`.`product` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  `price` DOUBLE NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE
)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `productdb`.`cart`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `productdb`.`cart` ;

CREATE TABLE IF NOT EXISTS `productdb`.`cart` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `product_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),

  INDEX `fk_product_id_idx` (`product_id` ASC) INVISIBLE,
  CONSTRAINT `fk_cart_productid`
      FOREIGN KEY (`product_id`)
      REFERENCES `productdb`.`product` (`id`)
      ON DELETE CASCADE
      ON UPDATE NO ACTION
)
ENGINE = InnoDB;