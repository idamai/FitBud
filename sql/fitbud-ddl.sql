USE `SPOTME`;

CREATE TABLE IF NOT EXISTS `users` (
	`name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) PRIMARY KEY,
	`password` CHAR (40) NOT NULL,
	`birthday` DATE,
	`gym_name` VARCHAR (255),
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
	`review` TEXT,
	`reviewer` VARCHAR(255),
	`receiwee` VARCHAR(255),
	FOREIGN KEY (`reviewer`) REFERENCES `users`(`email`),
	FOREIGN KEY (`receiwee`) REFERENCES `users`(`email`),
	CONSTRAINT `rating_ck` CHECK (`rating` BETWEEN 0 AND 5)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS `task_agreements` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`timestamp` TIMESTAMP,
	`price` DECIMAL NOT NULL,
	`date` DATETIME NOT NULL,
	`status` INT NOT NULL DEFAULT 0,
	`trainer` VARCHAR(255),
	`trainee` VARCHAR(255),
	FOREIGN KEY (`trainer`) REFERENCES `users`(`email`),
	FOREIGN KEY (`trainee`) REFERENCES `users`(`email`),	
	CONSTRAINT `status_ck` CHECK (`status` BETWEEN 0 AND 2),
	CONSTRAINT `rating_ck` CHECK (`rating` BETWEEN 0 AND 5)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `messages` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`timestamp` TIMESTAMP,
	`content` TEXT NOT NULL,
	`task_id` INT,
	`sender` VARCHAR(255),
	`receiver` VARCHAR(255),
	FOREIGN KEY (`task_id`) REFERENCES `task_agreements`(`id`),
	FOREIGN KEY (`sender`) REFERENCES `users`(`email`),
	FOREIGN KEY (`receiver`) REFERENCES `users`(`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `endorsements` (
	`id` INT PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_endorsements` (
	`email` VARCHAR(255),
	`endorsement` INT,
	`amount` INT DEFAULT 0,
	PRIMARY KEY(`email`,`endorsement`),
	FOREIGN KEY (`email`) REFERENCES `users`(`email`),
	FOREIGN KEY (`endorsement`) REFERENCES `endorsements`(`id`)
)  ENGINE=InnoDB  DEFAULT CHARSET=utf8;