CREATE TABLE `afisha` (
	`id_events` INT(10) NOT NULL AUTO_INCREMENT,
    `title_events` varchar(100) NOT NULL,
    `category_events` varchar(255) NOT NULL,
    `short_text_events` varchar(255) NOT NULL,
    `full_text_events` TEXT NOT NULL,
    `date_events` DATETIME NOT NULL,
    `count_views_events` INT(10),
    `img_events` TEXT,
PRIMARY KEY(`id_events`)
);

CREATE TABLE `image_home_page` (
  `id_picture` INT(5) NOT NULL,
  `url_picture` TEXT NOT NULL,
  PRIMARY KEY(`id_picture`)
)

CREATE TABLE `users` (
  `id_users` INT NOT NULL AUTO_INCREMENT,
  `login_users` VARCHAR(255) NOT NULL,
  `name_users` VARCHAR(255),
  `family_users` VARCHAR(255),
  `email_users` VARCHAR(255) NOT NULL,
  `check_email_users` BOOLEAN,
  `date_registration_users` DATETIME NOT NULL,
  PRIMARY KEY(`id_users`)
)