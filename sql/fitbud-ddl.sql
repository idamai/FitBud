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
	`user_type` BIT NOT NULL DEFAULT 0
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