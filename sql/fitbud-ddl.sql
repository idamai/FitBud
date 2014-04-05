USE `SPOTME`;

CREATE TABLE IF NOT EXISTS `users` (
	`name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) PRIMARY KEY,
	`password` CHAR (40) NOT NULL,
	`birthday` DATE,
	`address1` VARCHAR(255),
	`address2`VARCHAR(255),
	`city` VARCHAR(255) NOT NULL,
	`zip` VARCHAR(255) NOT NULL, 
	`state` VARCHAR(255) NOT NULL,
	`country` VARCHAR(255) NOT NULL,
	`user_type` BIT NOT NULL DEFAULT 0,
	`summary` TEXT DEFAULT NULL,
	`certificate` VARCHAR (255) DEFAULT NULL,
	`profile_picture` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `rating_reviews`(
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`rating` INT NOT NULL,
	`review` VARCHAR(255),
	`trainer` VARCHAR(255),
	`trainee` VARCHAR(255),
	FOREIGN KEY (`trainer`) REFERENCES `users`(`email`),
	FOREIGN KEY (`trainee`) REFERENCES `users`(`email`),
	CONSTRAINT `rating_ck` CHECK (`rating` BETWEEN 0 AND 5)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `task_agreements` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`price` DECIMAL NOT NULL,
	`date` DATETIME NOT NULL,
	`is_done` BIT NOT NULL DEFAULT 0,
	`trainer` VARCHAR(255),
	`trainee` VARCHAR(255),
	FOREIGN KEY (`trainer`) REFERENCES `users`(`email`),
	FOREIGN KEY (`trainee`) REFERENCES `users`(`email`),
	CONSTRAINT `rating_ck` CHECK (`rating` BETWEEN 0 AND 5)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `gym` (
	`name` VARCHAR(255) PRIMARY KEY,
	`address1` VARCHAR(255),
	`address2`VARCHAR(255),
	`city` VARCHAR(255) NOT NULL,
	`zip` VARCHAR(255) NOT NULL, 
	`state` VARCHAR(255) NOT NULL,
	`country` VARCHAR(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `category` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_categorization` (
	`email` VARCHAR(255),
	`category` INT,
	PRIMARY KEY(`email`,`category`),
	FOREIGN KEY (`email`) REFERENCES `users`(`email`),
	FOREIGN KEY (`category`) REFERENCES `category`(`id`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_gym` (
	`user_email`  VARCHAR(255),
	`gym_name` VARCHAR(255),
	PRIMARY KEY (`user_email`,`gym_name`),
	FOREIGN KEY (`user_email`) REFERENCES `users`(`email`),
	FOREIGN KEY (`gym_name`) REFERENCES `gym`(`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;