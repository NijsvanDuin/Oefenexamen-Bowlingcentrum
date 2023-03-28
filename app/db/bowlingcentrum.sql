DROP DATABASE IF EXISTS `bowlingcentrum`;
CREATE DATABASE `bowlingcentrum`;
USE `bowlingcentrum`;

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  UNIQUE KEY `phone` (`phone`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `track`;
CREATE TABLE `track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `rate`;
CREATE TABLE `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `opening`;
CREATE TABLE `opening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `day_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `opening_id` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `time_reservation` time NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  KEY `track_id` (`track_id`),
  KEY `opening_id` (`opening_id`),
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`),
  CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`opening_id`) REFERENCES `opening` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `option`;
CREATE TABLE `option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `reservation_option`;
CREATE TABLE `reservation_option` (
  `reservation_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`,`option_id`),
  KEY `option_id` (`option_id`),
  CONSTRAINT `reservation_option_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`),
  CONSTRAINT `reservation_option_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `person_score`;
CREATE TABLE `person_score` (
  `person_id` int(11) NOT NULL,
  `score_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  PRIMARY KEY (`person_id`,`score_id`,`reservation_id`),
  KEY `score_id` (`score_id`),
  KEY `reservation_id` (`reservation_id`),
  CONSTRAINT `person_score_ibfk_3` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`),
  CONSTRAINT `person_score_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  CONSTRAINT `person_score_ibfk_2` FOREIGN KEY (`score_id`) REFERENCES `score` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- insert placeholder data
INSERT INTO `role` (`name`) VALUES ('admin'),('user');

INSERT INTO person ( `first_name`,`last_name`,`phone` ) VALUES 
  ('John','Doe','0612345671'),
  ('Jane','Doe','0612345672'),
  ('Mark','Doe','0612345673'),
  ('Jill','Doe','0612345674'),
  ('Bill','Doe','0612345675'),
  ('Bob','Doe','0612345676'),
  ('Sue','Doe','0612345677'),
  ('Sally','Doe','0612345678'),
  ('Joe','Doe','0612345679'),
  ('Jack','Doe','0612345670'),
  ('Jill','Doe','0612345611'),
  ('Jen','Doe','0612345612');

INSERT INTO `user` (`person_id`,`email`,`password`) VALUES
  (1,'johndoe1@example.com','password'),
  (2,'janedoe2@example.com','password'),
  (3,'markdoe3@example.com','password'),
  (4,'jilldoe4@example.com','password'),
  (5,'billdoe5@example.com','password'),
  (6,'bobdoe6@example.com','password'),
  (7,'suedoe7@example.com','password'),
  (8,'sallydoe8@example.com','password'),
  (9,'joe9@example.com','password'),
  (10,'jackdoe10@example.com','password'),
  (11,'jilldoe11@example.com','password'),
  (12,'jendoe12@example.com','password');

INSERT INTO `user_role` (`user_id`,`role_id`) VALUES
  (1,1),
  (2,1),
  (3,1),
  (4,2),
  (5,2),
  (6,2),
  (7,3),
  (8,3),
  (9,3),
  (10,4),
  (11,4),
  (12,4);

INSERT INTO `track` (`code`) VALUES 
  ('1'),
  ('2'),
  ('3'),
  ('4'),
  ('5'),
  ('6'),
  ('7'),
  ('8'),
  ('9'),
  ('10');

INSERT INTO rate ( `amount`,`unit` ) VALUES
  ( 24, 'per uur' ),
  ( 28, 'per uur' ),
  ( 33.5, 'per uur' );

INSERT INTO opening ( `start`,`end`,`day_name` ) VALUES
  ( '14:00:00', '22:00:00', 'maandag' ),
  ( '14:00:00', '22:00:00', 'dinsdag' ),
  ( '14:00:00', '22:00:00', 'woensdag' ),
  ( '14:00:00', '22:00:00', 'donderdag' ),
  ( '14:00:00', '24:00:00', 'vrijdag' ),
  ( '14:00:00', '24:00:00', 'zaterdag' ),
  ( '14:00:00', '24:00:00', 'zondag' );

INSERT INTO contact ( `person_id`,`name`,`email`,`phone` ) VALUES
  ( 1, 'John Doe', 'johndoe1@example.com','+31 1234567891'),
  ( 2, 'Jane Doe', 'janedoe2@example.com','+31 1234567892'),
  ( 3, 'Mark Doe', 'markdoe3@example.com','+31 1234567893'),
  ( 4, 'Jill Doe', 'jilldoe4@example.com','+31 1234567894'),
  ( 5, 'Bill Doe', 'billdoe5@example.com','+31 1234567895'),
  ( 6, 'Bob Doe', 'bobdoe6@example.com','+31 1234567896'),
  ( 7, 'Sue Doe', 'suedoe7@example.com','+31 1234567897'),
  ( 8, 'Sally Doe', 'sallydoe8@example.com','+31 1234567898'),
  ( 9, 'Joe Doe', 'joe9@example.com','+31 1234567899'),
  ( 10, 'Jack Doe', 'jackdoe10@example.com','+31 1234567811'),
  ( 11, 'Jill Doe', 'jilldoe11@example.com','+31 1234567812'),
  ( 12, 'Jen Doe', 'jendoe12@example.com','+31 1234567813');

INSERT INTO `option` (`name`) VALUES 
  ('Snack pakket basic'),
  ('Snack pakket deluxe'),
  ('Kinderpartijtje'),
  ('Vrijgezellenfeest'),
  ('Bedrijfsuitje');

INSERT INTO `score` (`value`) VALUES
  (1),
  (2),
  (3),
  (4),
  (5);

INSERT INTO `reservation` (`person_id`,`track_id`,`opening_id`,`date_reservation`,`time_reservation`,`adults`,`children`) VALUES
  (1,1,1,'2023.03.28','14:00:12',2,0),
  (2,2,2,'2023.03.29','14:00:12',2,4),
  (3,3,3,'2023.03.30','14:00:12',2,0),
  (4,4,4,'2023.04.03','14:00:12',2,2),
  (5,5,5,'2023.04.12','14:00:12',2,0),
  (6,6,6,'2023.04.12','14:00:12',4,0),
  (7,7,7,'2023.04.14','14:00:12',2,0),
  (8,8,8,'2023.04.14','14:00:12',2,0),
  (9,9,9,'2023.04.14','14:00:12',6,0),
  (10,10,10,'2023.04.14','14:00:12',2,0);

INSERT INTO `reservation_option` (`reservation_id`,`option_id`) VALUES
  (1,1),
  (2,2),
  (3,3),
  (4,4),
  (5,5),
  (6,1),
  (7,2),
  (8,3),
  (9,4),
  (10,5);

INSERT INTO `person_score` (`person_id`,`score_id`,`reservation_id`) VALUES
  (1,1,1),
  (2,2,2),
  (3,3,3),
  (4,4,4),
  (5,5,5),
  (6,1,6),
  (7,2,7),
  (8,3,8),
  (9,4,9),
  (10,5,10);