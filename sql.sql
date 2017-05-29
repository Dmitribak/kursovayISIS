//Афиша с событиями
CREATE TABLE `events_afisha` (
	`id_events` INT(10) NOT NULL AUTO_INCREMENT,
    `title_events` varchar(100) NOT NULL,
    `id_category_events` INT(10),
    `short_text_events` varchar(255) NOT NULL,
    `full_text_events` TEXT NOT NULL,
    `date_events` DATETIME NOT NULL,
    `count_views_events` INT(10),
    `img_events` TEXT,
PRIMARY KEY(`id_events`),
FOREIGN KEY (id_category_events) REFERENCES events_category(id_category)
);

//Категории событий
CREATE TABLE `events_category` (
  `id_category` INT(10) NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(255) NOT NULL,
  PRIMARY KEY(`id_category`)
);

//Таблица для картинок на главной
CREATE TABLE `home_page_image` (
  `id_picture` INT(5) NOT NULL,
  `url_picture` TEXT NOT NULL,
  PRIMARY KEY(`id_picture`)
);

//Таблица актёров
CREATE TABLE `actors` (
  `id_actors` INT(10) NOT NULL AUTO_INCREMENT,
  `name_actors` VARCHAR(255) NOT NULL,
  `surname_actors` VARCHAR(255),
  `img_url_actors` VARCHAR(255),
  `discription_actors` TEXT,
  PRIMARY KEY(`id_actors`)
);


//Таблица участия актёров в событиях, во всех
CREATE TABLE `events_actors_all` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_events` INT(100) NOT NULL,
  `id_actors_main` INT(100) NOT NULL,
  `id_actors_double` INT(100),
  PRIMARY KEY(`id`),
  FOREIGN KEY (id_events) REFERENCES events_afisha(id_events),
  FOREIGN KEY (id_actors_main) REFERENCES actors(id_actors),
  FOREIGN KEY (id_actors_double) REFERENCES actors(id_actors),
);


CREATE TABLE `news_category` (
  `id_categorii` INT(10) NOT NULL AUTO_INCREMENT,
  `news_categor` VARCHAR(255) NOT NULL,
  PRIMARY KEY(`id_categorii`)
);

CREATE TABLE `news` (
  `id_news` INT(10) NOT NULL AUTO_INCREMENT,
  `id_category` INT(10) NOT NULL,
  `title_news` VARCHAR(255) NOT NULL,
  `discription_news` VARCHAR(255) NOT NULL,
  `date_news_public` DATETIME NOT NULL,
  `count_view_news` INT,
  `img_url_news` VARCHAR(255),
  PRIMARY KEY(`id_news`),
  FOREIGN KEY (id_category) REFERENCES news_category(id_categorii)
);

CREATE TABLE `news_tags_all` (
  `id_tag` INT(10) NOT NULL AUTO_INCREMENT,
  `teg` VARCHAR(255) NOT NULL,
  PRIMARY KEY(`id_tag`),
);

CREATE TABLE `news_tags` (
  `id_news` INT(10) NOT NULL,
  `id_tag` INT(10) NOT NULL,
  FOREIGN KEY (id_news) REFERENCES news(id_news),
  FOREIGN KEY (id_tag) REFERENCES news_tags_all(id_tag)
);

//Категория пользователей
CREATE TABLE `users_category` (
`id_category` INT(10) NOT NULL AUTO_INCREMENT,
 `category` VARCHAR(255) NOT NULL,
 PRIMARY KEY (`id_category`)
);

//Таблица пользователей
CREATE TABLE `users` (
  `id_users` INT NOT NULL AUTO_INCREMENT,
  `login_users` VARCHAR(255) NOT NULL,
  `name_users` VARCHAR(255),
  `family_users` VARCHAR(255),
  `email_users` VARCHAR(255) NOT NULL,
  `check_email_users` BOOLEAN,
  `date_registration_users` DATETIME NOT NULL,
  `role_users` INT NOT NULL,
  PRIMARY KEY(`id_users`)
  FOREIGN KEY (role_users) REFERENCES users_category(id_category)
);