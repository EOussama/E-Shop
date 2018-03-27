CREATE DATABASE db_eshop;
USE db_eshop;

-- [Tables]-------------------------------------------------
CREATE TABLE `Users`(
	`userid` MEDIUMINT(5) AUTO_INCREMENT NOT NULL,
    `username` NVARCHAR(25) NOT NULL,
    `password` NVARCHAR(128) NOT NULL,
    `salt` NVARCHAR(128) NOT NULL,
    `email` NVARCHAR(35) NOT NULL,
    `photo` NVARCHAR(50) NOT NULL,
    `location` NVARCHAR(30) NOT NULL,
    `type` NVARCHAR(13) NOT NULL,
    `phone` INT(10) NOT NULL,
    `description` NVARCHAR(200) NOT NULL,
    `adminLevel` TINYINT(1) DEFAULT 0 NOT NULL,
    `registrationDate` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    `lastSeen` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    
    CONSTRAINT pk_id PRIMARY KEY(userid),
    CONSTRAINT ck_type CHECK(`type` IN ('Individual', 'Professional')),
    CONSTRAINT ck_admin CHECK(`adminLevel` BETWEEN 0 AND 2)
);

INSERT INTO `Users`(`username`, `password`, `salt`, `email`, `photo`, `location`, `type`, `phone`, `description`) VALUES('Oussama', 'pass', 'salt', 'email@email', 'photos/pic.png', 'tangier', 'Professional', 0687111096, 'Bio');

CREATE TABLE `Products`(
	`productid` INT(8) AUTO_INCREMENT NOT NULL,
    `sellerid` MEDIUMINT(5) NOT NULL,
    `price` FLOAT NOT NULL,
    `label` NVARCHAR(30) NOT NULL,
<<<<<<< HEAD
	`category` NVARCHAR(30) NOT NULL,
=======
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
    `description` NVARCHAR(150) NOT NULL,
    `photo` NVARCHAR(50) NOT NULL,
    `stock` MEDIUMINT(5) NOT NULL,
    `purchases` MEDIUMINT(5) DEFAULT 0 NOT NULL,
    `putOnSaleDate` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    
    CONSTRAINT pk_id PRIMARY KEY(`productid`),
    CONSTRAINT fk_id FOREIGN KEY(`sellerid`) REFERENCES `Users`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT ck_price CHECK(`price` >= 0.0),
    CONSTRAINT ck_stock CHECK(`stock` > 0)
);

INSERT INTO `Products`(`sellerid`, `price`, `label`, `description`, `photo`, `stock`) VALUES(1, 15.12, 'iPhone 5', 'Great phone', 'Photos/fdf.jpg', 6);

CREATE TABLE `Trade` (
	`tradeid` INT(10) AUTO_INCREMENT NOT NULL,
    `productid` INT(8) NOT NULL,
    `userid` MEDIUMINT(5) NOT NULL,
    `tradeDate` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    `count` MEDIUMINT(5) NOT NULL,
    
    CONSTRAINT pk_id PRIMARY KEY(`tradeid`),
    CONSTRAINT fk_pid FOREIGN KEY(`productid`) REFERENCES `Products`(`productid`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_uid FOREIGN KEY(`userid`) REFERENCES `Users`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT ck_count CHECK(`count` > 0)
);

INSERT INTO `Trade`(`productid`, `userid`, `count`) VALUES(3, 1, 5);

CREATE TABLE `Comments`(
	`commentid` INT(10) AUTO_INCREMENT NOT NULL,
    `productid` INT(8) NOT NULL,
    `userid` MEDIUMINT(5) NOT NULL,
    `body` NVARCHAR(200) NOT NULL,
    `postDate` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    
    CONSTRAINT pk_id PRIMARY KEY(`commentid`),
    CONSTRAINT fk_cuid FOREIGN KEY(`userid`) REFERENCES `Users`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_cpid FOREIGN KEY(`productid`) REFERENCES `Products`(`productid`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT ck_body CHECK(LEN(`postDate`) > 1)
);

INSERT INTO `Comments`(`productid`, `userid`, `body`) VALUES(3, 1, 'This is the first ever comment!');

CREATE TABLE `Log`(
	`actionid` INT(10) AUTO_INCREMENT NOT NULL,
    `actionDesc` NVARCHAR(100) NOT NULL,
    `actionDate` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    
    CONSTRAINT pk_id PRIMARY KEY(`actionid`)
);

INSERT INTO `Log`(`actionDesc`) VALUES('Oussama has created the database!');