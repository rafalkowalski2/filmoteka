CREATE TABLE IF NOT EXISTS `genres` (
	`id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` varchar(32) NOT NULL,
	`description` varchar(255) NOT NULL,
	PRIMARY KEY  (`id`),
	UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `releasedate` DATE NOT NULL DEFAULT '0000-00-00',
  `description` text DEFAULT '',
  `fw_grade` FLOAT DEFAULT '0',
  `imbd_grade` FLOAT DEFAULT '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_film_details` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `filesize` varchar(32) NOT NULL,
  `resolution` varchar(64) NOT NULL DEFAULT '',
  `duration` varchar(64) NOT NULL,
  `language` varchar(32)  DEFAULT '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `grade` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `carries` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `films_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`user_id`,`film_id`),
  KEY `fk_film_id` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `films_genres` (
  `film_id` int(10) UNSIGNED NOT NULL,
  `genres_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`film_id`,`genres_id`),
  KEY `fk_genres_id` (`genres_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `films_users_films_details` (
  `film_id` int(10) UNSIGNED NOT NULL,
  `details_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`film_id`,`details_id`),
  KEY `details_id` (`details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `films_grades` (
  `film_id` int(10) UNSIGNED NOT NULL,
  `grade_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`film_id`,`grade_id`),
  KEY `grade_id` (`grade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	CREATE TABLE IF NOT EXISTS `users_carries` (
	  `user_id` int(10) UNSIGNED NOT NULL,
		`carrier_id` int(10) UNSIGNED NOT NULL,
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users_genres` (
  `user_id` int(10) UNSIGNED NOT NULL,
    `genres_id` int(10) UNSIGNED NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users_locations` (
  `user_id` int(10) UNSIGNED NOT NULL,
    `location_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`user_id`, `location_id`),
  KEY `location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `films_carries` (
  `film_id` int(10) UNSIGNED NOT NULL,
    `carrier_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`film_id`, `carrier_id`),
  KEY `carrier_id` (`carrier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `films_locations` (
  `film_id` int(10) UNSIGNED NOT NULL,
	`location_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`film_id`, `location_id`),
  KEY `location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users_users_films_details` (
  `user_id` int(10) UNSIGNED NOT NULL,
	`details_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY  (`user_id`, `details_id`),
  KEY `location_id` (`details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `films_users`
  ADD CONSTRAINT `films_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `films_users_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE;
  
ALTER TABLE `films_genres`
  ADD CONSTRAINT `films_genres_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `films_genres_ibfk_2` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE;
  
ALTER TABLE `films_users_films_details`
  ADD CONSTRAINT `films_users_films_details_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `films_users_films_details_ibfk_2` FOREIGN KEY (`details_id`) REFERENCES `user_film_details` (`id`) ON DELETE CASCADE;

ALTER TABLE `films_grades`
  ADD CONSTRAINT `films_grades_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `films_grades_ibfk_2` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE;
   
/*ALTER TABLE `users_carries`
  ADD CONSTRAINT `users_carries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_carries_ibfk_2` FOREIGN KEY (`carrier_id`) REFERENCES `carries` (`id`) ON DELETE CASCADE;

ALTER TABLE `films_carries`
  ADD CONSTRAINT `films_carries_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `films_carries_ibfk_2` FOREIGN KEY (`carrier_id`) REFERENCES `carries` (`id`) ON DELETE CASCADE;

ALTER TABLE `users_locations`
  ADD CONSTRAINT `users_locations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_locations_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE;

ALTER TABLE `films_locations`
  ADD CONSTRAINT `films_locations_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `films_locations_ibfk_2` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE;
*/

ALTER TABLE `users_genres`
  ADD CONSTRAINT `users_genres_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_genres_ibfk_2` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE;
  
  
	ALTER TABLE `users_users_films_details`
	  ADD CONSTRAINT `users_users_films_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
	  ADD CONSTRAINT `users_users_films_details_ibfk_2` FOREIGN KEY (`details_id`) REFERENCES `user_film_details` (`id`) ON DELETE CASCADE;
