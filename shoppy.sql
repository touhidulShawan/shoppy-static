-- CREATE summer collection TABLE 

CREATE TABLE `shoppy`.`summer`(
    `id` INT(100) NOT NULL AUTO_INCREMENT,
    `product_id` INT(100) NULL DEFAULT NULL UNIQUE,
    `product_img` VARCHAR(200) NULL DEFAULT NULL,
    `product_name` VARCHAR(300) NULL DEFAULT NULL,
    `product_price` DOUBLE NULL DEFAULT NULL,
    `product_quantity` INT(200) NULL DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE = INNODB;


-- CREATE spring collection TABLE 

CREATE TABLE `shoppy`.`spring`(
    `id` INT(100) NOT NULL AUTO_INCREMENT,
    `product_id` INT(100) NULL DEFAULT NULL UNIQUE,
    `product_img` VARCHAR(200) NULL DEFAULT NULL,
    `product_name` VARCHAR(300) NULL DEFAULT NULL,
    `product_price` DOUBLE NULL DEFAULT NULL,
    `product_quantity` INT(200) NULL DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE = INNODB;


-- CREATE winter collection TABLE 

CREATE TABLE `shoppy`.`winter`(
    `id` INT(100) NOT NULL AUTO_INCREMENT,
    `product_id` INT(100) NULL DEFAULT NULL UNIQUE,
    `product_img` VARCHAR(200) NULL DEFAULT NULL,
    `product_name` VARCHAR(300) NULL DEFAULT NULL,
    `product_price` DOUBLE NULL DEFAULT NULL,
    `product_quantity` INT(200) NULL DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE = INNODB;


-- CREATE man collection TABLE 

CREATE TABLE `shoppy`.`man`(
    `id` INT(100) NOT NULL AUTO_INCREMENT,
    `product_id` INT(100) NULL DEFAULT NULL UNIQUE,
    `product_img` VARCHAR(200) NULL DEFAULT NULL,
    `product_name` VARCHAR(300) NULL DEFAULT NULL,
    `product_price` DOUBLE NULL DEFAULT NULL,
    `product_quantity` INT(200) NULL DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE = INNODB;


-- CREATE baby collection TABLE 

CREATE TABLE `shoppy`.`baby`(
    `id` INT(100) NOT NULL AUTO_INCREMENT,
    `product_id` INT(100) NULL DEFAULT NULL UNIQUE,
    `product_img` VARCHAR(200) NULL DEFAULT NULL,
    `product_name` VARCHAR(300) NULL DEFAULT NULL,
    `product_price` DOUBLE NULL DEFAULT NULL,
    `product_quantity` INT(200) NULL DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE = INNODB;


-- INSERT INITIAL DATA TO TABLE winter

INSERT INTO `shoppy`.`winter`(`product_id`,`product_img`,`product_name`,`product_price`,`product_quantity`)VALUES(1, 'image_one.webp','Forever New',30.5,1), 
(2, 'image_two.webp','Awesome Soulmate',45.5,1),
(3, 'image_three.webp','Awesome Slender',25.5,1),
(4, 'image_four.webp','Drop Forever',25.55,1),
(5, 'image_five.webp','Forever New',45.5,1),
(6, 'image_six.webp','Awesome Soulmate',55.45,1),
(7, 'image_seven.webp','Awesome Slender',25.5,1),
(8, 'image_eight.webp','Forever New',45.99,1),
(9, 'image_nine.webp','Awesome Soulmate',65.12,1),
(10, 'image_ten.webp','Awesome Slender',20.85,1),
(11, 'image_eleven.webp','Forever New',75.95,1),
(12, 'image_twelve.webp','Drop Forever',86.90,1)



-- INSERT INITIAL DATA TO TABLE spring

INSERT INTO `shoppy`.`spring`(`product_id`,`product_img`,`product_name`,`product_price`,`product_quantity`)VALUES(1, 'image_one.webp','Forever New',30.5,1), 
(2, 'image_two.webp','Awesome Soulmate',45.5,1),
(3, 'image_three.webp','Awesome Slender',25.5,1),
(4, 'image_four.webp','Drop Forever',25.55,1),
(5, 'image_five.webp','Forever New',45.5,1),
(6, 'image_six.webp','Awesome Soulmate',55.45,1),
(7, 'image_seven.webp','Awesome Slender',25.5,1),
(8, 'image_eight.webp','Forever New',45.99,1),
(9, 'image_nine.webp','Awesome Soulmate',65.12,1),
(10, 'image_ten.webp','Awesome Slender',20.85,1),
(11, 'image_eleven.webp','Forever New',75.95,1),
(12, 'image_twelve.webp','Drop Forever',86.90,1)



-- INSERT INITIAL DATA TO TABLE summer

INSERT INTO `shoppy`.`summer`(`product_id`,`product_img`,`product_name`,`product_price`,`product_quantity`)VALUES(1, 'image_one.webp','Forever New',30.5,1), 
(2, 'image_two.webp','Awesome Soulmate',45.5,1),
(3, 'image_three.webp','Awesome Slender',25.5,1),
(4, 'image_four.webp','Drop Forever',25.55,1),
(5, 'image_five.webp','Forever New',45.5,1),
(6, 'image_six.webp','Awesome Soulmate',55.45,1),
(7, 'image_seven.webp','Awesome Slender',25.5,1),
(8, 'image_eight.webp','Forever New',45.99,1),
(9, 'image_nine.webp','Awesome Soulmate',65.12,1),
(10, 'image_ten.webp','Awesome Slender',20.85,1),
(11, 'image_eleven.webp','Forever New',75.95,1),
(12, 'image_twelve.webp','Drop Forever',86.90,1)



-- INSERT INITIAL DATA TO TABLE man

INSERT INTO `shoppy`.`man`(`product_id`,`product_img`,`product_name`,`product_price`,`product_quantity`)VALUES(1, 'image_one.webp','Forever New',30.5,1), 
(2, 'image_two.webp','Awesome Soulmate',45.5,1),
(3, 'image_three.webp','Awesome Slender',25.5,1),
(4, 'image_four.webp','Drop Forever',25.55,1),
(5, 'image_five.webp','Forever New',45.5,1),
(6, 'image_six.webp','Awesome Soulmate',55.45,1),
(7, 'image_seven.webp','Awesome Slender',25.5,1),
(8, 'image_eight.webp','Forever New',45.99,1),
(9, 'image_nine.webp','Awesome Soulmate',65.12,1),
(10, 'image_ten.webp','Awesome Slender',20.85,1),
(11, 'image_eleven.webp','Forever New',75.95,1),
(12, 'image_twelve.webp','Drop Forever',86.90,1)



-- INSERT INITIAL DATA TO TABLE baby

INSERT INTO `shoppy`.`baby`(`product_id`,`product_img`,`product_name`,`product_price`,`product_quantity`)VALUES(1, 'image_one.webp','Forever New',30.5,1), 
(2, 'image_two.webp','Awesome Soulmate',45.5,1),
(3, 'image_three.webp','Awesome Slender',25.5,1),
(4, 'image_four.webp','Drop Forever',25.55,1),
(5, 'image_five.webp','Forever New',45.5,1),
(6, 'image_six.webp','Awesome Soulmate',55.45,1),
(7, 'image_seven.webp','Awesome Slender',25.5,1),
(8, 'image_eight.webp','Forever New',45.99,1),
(9, 'image_nine.webp','Awesome Soulmate',65.12,1),
(10, 'image_ten.webp','Awesome Slender',20.85,1),
(11, 'image_eleven.webp','Forever New',75.95,1),
(12, 'image_twelve.webp','Drop Forever',86.90,1)


-- CREATE users TABLE TO HANDLE SIGN IN AND SIGN OUT 

CREATE TABLE `shoppy`.`users`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(200) NULL DEFAULT NULL,
    `password` VARCHAR(200) NULL DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE = INNODB;