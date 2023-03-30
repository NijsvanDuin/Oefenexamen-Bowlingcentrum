DROP DATABASE IF EXISTS `bowlingcentrum`;
CREATE DATABASE `bowlingcentrum`;
USE `bowlingcentrum`;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `contact` (`id`, `person_id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'John Doe', 'johndoe1@example.com', '+31 1234567891', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, 2, 'Jane Doe', 'janedoe2@example.com', '+31 1234567892', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, 3, 'Mark Doe', 'markdoe3@example.com', '+31 1234567893', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(4, 4, 'Jill Doe', 'jilldoe4@example.com', '+31 1234567894', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(5, 5, 'Bill Doe', 'billdoe5@example.com', '+31 1234567895', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(6, 6, 'Bob Doe', 'bobdoe6@example.com', '+31 1234567896', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(7, 7, 'Sue Doe', 'suedoe7@example.com', '+31 1234567897', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(8, 8, 'Sally Doe', 'sallydoe8@example.com', '+31 1234567898', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(9, 9, 'Joe Doe', 'joe9@example.com', '+31 1234567899', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(10, 10, 'Jack Doe', 'jackdoe10@example.com', '+31 1234567811', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(11, 11, 'Jill Doe', 'jilldoe11@example.com', '+31 1234567812', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(12, 12, 'Jen Doe', 'jendoe12@example.com', '+31 1234567813', '2023-03-28 08:42:22', '2023-03-28 08:42:22');


DROP TABLE IF EXISTS `opening`;
CREATE TABLE IF NOT EXISTS `opening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `day_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


INSERT INTO `opening` (`id`, `start`, `end`, `day_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '14:00:00', '22:00:00', 'maandag', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, '14:00:00', '22:00:00', 'dinsdag', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, '14:00:00', '22:00:00', 'woensdag', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(4, '14:00:00', '22:00:00', 'donderdag', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(5, '14:00:00', '24:00:00', 'vrijdag', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(6, '14:00:00', '24:00:00', 'zaterdag', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(7, '14:00:00', '24:00:00', 'zondag', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22');



DROP TABLE IF EXISTS `option`;
CREATE TABLE IF NOT EXISTS `option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;



INSERT INTO `option` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Snack pakket basic', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, 'Snack pakket deluxe', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, 'Kinderpartijtje', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(4, 'Vrijgezellenfeest', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(5, 'Bedrijfsuitje', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22');



DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;



INSERT INTO `person` (`id`, `first_name`, `last_name`, `phone`) VALUES
(1, 'John', 'Doe', '0612345671'),
(2, 'Jane', 'Doe', '0612345672'),
(3, 'Mark', 'Doe', '0612345673'),
(4, 'Jill', 'Doe', '0612345674'),
(5, 'Bill', 'Doe', '0612345675'),
(6, 'Bob', 'Doe', '0612345676'),
(7, 'Sue', 'Doe', '0612345677'),
(8, 'Sally', 'Doe', '0612345678'),
(9, 'Joe', 'Doe', '0612345679'),
(10, 'Jack', 'Doe', '0612345670'),
(11, 'Jill', 'Doe', '0612345611'),
(12, 'Jen', 'Doe', '0612345612');



DROP TABLE IF EXISTS `person_score`;
CREATE TABLE IF NOT EXISTS `person_score` (
  `person_id` int(11) NOT NULL,
  `score_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  PRIMARY KEY (`person_id`,`score_id`,`reservation_id`),
  KEY `score_id` (`score_id`),
  KEY `reservation_id` (`reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `person_score` (`person_id`, `score_id`, `reservation_id`) VALUES
(1, 1, 1),
(6, 1, 6),
(2, 2, 2),
(3, 3, 3),
(8, 3, 8),
(4, 4, 4),
(9, 4, 9),
(5, 5, 5),
(10, 5, 10);



DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


INSERT INTO `rate` (`id`, `amount`, `unit`, `created_at`, `updated_at`) VALUES
(1, 24, 'per uur', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, 28, 'per uur', '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, 34, 'per uur', '2023-03-28 08:42:22', '2023-03-28 08:42:22');


DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
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
  KEY `opening_id` (`opening_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;



INSERT INTO `reservation` (`id`, `person_id`, `track_id`, `opening_id`, `date_reservation`, `time_reservation`, `adults`, `children`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-03-28', '14:00:12', 2, 0, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, 2, 2, 2, '2023-03-29', '14:00:12', 2, 4, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, 3, 3, 3, '2023-03-30', '14:00:12', 2, 0, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(4, 4, 4, 4, '2023-04-03', '14:00:12', 2, 2, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(5, 5, 5, 5, '2023-04-12', '14:00:12', 2, 0, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(6, 6, 6, 6, '2023-04-12', '14:00:12', 4, 0, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(8, 8, 8, 8, '2023-04-14', '14:00:12', 2, 0, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(9, 9, 9, 9, '2023-04-14', '14:00:12', 6, 0, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(10, 10, 10, 10, '2023-04-14', '14:00:12', 2, 0, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22');



DROP TABLE IF EXISTS `reservation_option`;
CREATE TABLE IF NOT EXISTS `reservation_option` (
  `reservation_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`,`option_id`),
  KEY `option_id` (`option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `reservation_option` (`reservation_id`, `option_id`) VALUES
(1, 1),
(2, 1),
(6, 1),
(2, 2),
(5, 2),
(1, 3),
(2, 3),
(3, 3),
(8, 3),
(2, 4),
(4, 4),
(9, 4),
(2, 5),
(5, 5);


DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;



INSERT INTO `role` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, 'user', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22');



DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO `score` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, 2, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, 3, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(4, 4, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(5, 5, '2023-03-28 08:42:22', '2023-03-28 08:42:22');


DROP TABLE IF EXISTS `track`;
CREATE TABLE IF NOT EXISTS `track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



INSERT INTO `track` (`id`, `code`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, '2', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, '3', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(4, '4', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(5, '5', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(6, '6', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(7, '7', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(8, '8', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(9, '9', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(10, '10', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22');



DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;



INSERT INTO `user` (`id`, `person_id`, `email`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'johndoe1@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(2, 2, 'janedoe2@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(3, 3, 'markdoe3@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(4, 4, 'jilldoe4@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(5, 5, 'billdoe5@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(6, 6, 'bobdoe6@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(7, 7, 'suedoe7@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(8, 8, 'sallydoe8@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(9, 9, 'joe9@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(10, 10, 'jackdoe10@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(11, 11, 'jilldoe11@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22'),
(12, 12, 'jendoe12@example.com', 'password', 1, '2023-03-28 08:42:22', '2023-03-28 08:42:22');



DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 4),
(11, 4),
(12, 4);

ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

ALTER TABLE `person_score`
  ADD CONSTRAINT `person_score_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `person_score_ibfk_2` FOREIGN KEY (`score_id`) REFERENCES `score` (`id`),
  ADD CONSTRAINT `person_score_ibfk_3` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`);


ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`opening_id`) REFERENCES `opening` (`id`);


ALTER TABLE `reservation_option`
  ADD CONSTRAINT `reservation_option_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`),
  ADD CONSTRAINT `reservation_option_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`);


ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);


ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
