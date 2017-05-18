CREATE TABLE `Afisha` (
	`id_events` int(10) NOT NULL AUTO_INCREMENT,
    `title_events` varchar(100) NOT NULL,
    `category_events` varchar(255) NOT NULL,
    `short_text_events` varchar(255) NOT NULL,
    `full_text_events` TEXT NOT NULL,
    `date_events` DATETIME NOT NULL,

PRIMARY KEY(`id_events`)
);