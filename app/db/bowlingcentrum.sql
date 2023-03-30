DROP DATABASE IF EXISTS `bowlingcentrumv2`;
CREATE DATABASE `bowlingcentrumv2`;
USE `bowlingcentrumv2`;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;


INSERT INTO `contact` (`id`, `person_id`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, '+31 1234567891', 'johndoe1@example.com', '2023-03-19 11:07:59', '2023-03-29 10:08:53'),
(2, 2, '+31 1234567892', 'janedoe2@example.com', '2023-03-20 11:07:59', '2023-03-29 10:08:53'),
(3, 3, '+31 1234567893', 'markdoe3@example.com', '2023-03-21 11:07:59', '2023-03-29 10:08:53'),
(4, 4, '+31 1234567894', 'jilldoe4@example.com', '2023-03-22 11:07:59', '2023-03-29 10:08:53'),
(5, 5, '+31 1234567895', 'billdoe10@example.com', '2023-03-23 11:07:59', '2023-03-29 14:40:41'),
(6, 6, '+31 1234567896', 'bobdoe6@example.com', '2023-03-24 11:07:59', '2023-03-29 10:08:53'),
(7, 7, '+31 1234567897', 'suedoe7@example.com', '2023-03-25 11:07:59', '2023-03-29 10:08:53'),
(8, 8, '+31 1234567898', 'sallydoe8@example.com', '2023-03-29 10:07:59', '2023-03-29 10:07:59'),
(9, 9, '+31 1234567899', 'joe9@example.com', '2023-03-26 10:07:59', '2023-03-29 10:08:53'),
(10, 10, '+31 1234567811', 'jackdoe10@example.com', '2023-03-27 10:07:59', '2023-03-29 10:08:53'),
(11, 11, '+31 1234567812', 'jilldoe11@example.com', '2023-03-28 10:07:59', '2023-03-29 10:08:53'),
(12, 12, '+31 1234567813', 'jendoe13@gmail.com', '2023-03-29 10:07:59', '2023-03-29 12:32:15');


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
(1, '14:00:00', '22:00:00', 'maandag', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(2, '14:00:00', '22:00:00', 'dinsdag', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(3, '14:00:00', '22:00:00', 'woensdag', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(4, '14:00:00', '22:00:00', 'donderdag', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(5, '14:00:00', '24:00:00', 'vrijdag', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(6, '14:00:00', '24:00:00', 'zaterdag', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(7, '14:00:00', '24:00:00', 'zondag', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54');



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
(1, 'Snack pakket basic', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(2, 'Snack pakket deluxe', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(3, 'Kinderpartijtje', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(4, 'Vrijgezellenfeest', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(5, 'Bedrijfsuitje', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54');



DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_type_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `infix` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `roepnaam` varchar(255) NOT NULL,
  `isVolwassen` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_type_id` (`person_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;



INSERT INTO `person` (`id`, `person_type_id`, `first_name`, `infix`, `last_name`, `roepnaam`, `isVolwassen`) VALUES
(1, 1, 'John', NULL, 'Doe', 'John', 1),
(2, 1, 'Jane', NULL, 'Wit', 'Jane', 1),
(3, 1, 'Mark', 'van', 'Doer', 'Mark', 1),
(4, 1, 'Jill', 'van', 'Groen', 'Jill', 1),
(5, 2, 'Billy', NULL, 'Jean', 'Bill', 0),
(6, 2, 'Bob', 'van der', 'Broek', 'Bob', 1),
(7, 2, 'Sue', NULL, 'Smith', 'Sue', 1),
(8, 2, 'Sally', NULL, 'Woods', 'Sally', 0),
(9, 3, 'Joe', NULL, 'Bardelozi', 'Joe', 0),
(10, 3, 'Jack', 'van der', 'Steeg', 'Jack', 0),
(11, 3, 'Jill', NULL, 'Kilk', 'Jill', 1),
(12, 3, 'Jen', NULL, 'Vroeg', 'Jen', 0);



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
(7, 2, 7),
(3, 3, 3),
(8, 3, 8),
(4, 4, 4),
(9, 4, 9),
(5, 5, 5),
(10, 5, 10);



DROP TABLE IF EXISTS `person_type`;
CREATE TABLE IF NOT EXISTS `person_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;



INSERT INTO `person_type` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(7, 'Klant', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(8, 'Medewerker', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(9, 'Gast', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54');



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
(1, 24, 'per uur', '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(2, 28, 'per uur', '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(3, 34, 'per uur', '2023-03-29 07:51:54', '2023-03-29 07:51:54');



DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_status_id` int(11) NOT NULL,
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
  KEY `reservation_status_id` (`reservation_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



INSERT INTO `reservation` (`id`, `reservation_status_id`, `person_id`, `track_id`, `opening_id`, `date_reservation`, `time_reservation`, `adults`, `children`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2023-03-28', '14:00:12', 2, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(2, 1, 2, 2, 2, '2023-03-29', '14:00:12', 2, 4, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(3, 1, 3, 3, 3, '2023-03-30', '14:00:12', 2, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(4, 1, 4, 4, 4, '2023-04-03', '14:00:12', 2, 2, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(5, 2, 5, 5, 5, '2023-04-12', '14:00:12', 2, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(6, 2, 6, 6, 6, '2023-04-12', '14:00:12', 4, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(7, 3, 7, 7, 7, '2023-04-14', '14:00:12', 2, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(8, 3, 8, 8, 8, '2023-04-14', '14:00:12', 2, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(9, 3, 9, 9, 9, '2023-04-14', '14:00:12', 6, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(10, 3, 10, 10, 10, '2023-04-14', '14:00:12', 2, 0, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55');



DROP TABLE IF EXISTS `reservation_option`;
CREATE TABLE IF NOT EXISTS `reservation_option` (
  `reservation_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`,`option_id`),
  KEY `option_id` (`option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `reservation_option` (`reservation_id`, `option_id`) VALUES
(1, 1),
(6, 1),
(2, 2),
(7, 2),
(3, 3),
(8, 3),
(4, 4),
(9, 4),
(5, 5),
(10, 5);



DROP TABLE IF EXISTS `reservation_status`;
CREATE TABLE IF NOT EXISTS `reservation_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


INSERT INTO `reservation_status` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Bevestigd', 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(2, 'Geannuleerd', 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(3, 'Inbehandeling', 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55');



DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;



INSERT INTO `role` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'admin', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(6, 'user', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54');



DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;



INSERT INTO `score` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(2, 2, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(3, 3, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(4, 4, '2023-03-29 07:51:55', '2023-03-29 07:51:55'),
(5, 5, '2023-03-29 07:51:55', '2023-03-29 07:51:55');



DROP TABLE IF EXISTS `track`;
CREATE TABLE IF NOT EXISTS `track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `has_lanes` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



INSERT INTO `track` (`id`, `code`, `has_lanes`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1', 0, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(2, '2', 0, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(3, '3', 0, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(4, '4', 0, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(5, '5', 0, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(6, '6', 0, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(7, '7', 1, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(8, '8', 1, 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54');



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
(1, 1, 'johndoe1@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(2, 2, 'janedoe2@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(3, 3, 'markdoe3@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(4, 4, 'jilldoe4@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(5, 5, 'billdoe5@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(6, 6, 'bobdoe6@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(7, 7, 'suedoe7@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(8, 8, 'sallydoe8@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(9, 9, 'joe9@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(10, 10, 'jackdoe10@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(11, 11, 'jilldoe11@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54'),
(12, 12, 'jendoe12@example.com', 'password', 1, '2023-03-29 07:51:54', '2023-03-29 07:51:54');



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


ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`person_type_id`) REFERENCES `person_type` (`id`);


ALTER TABLE `person_score`
  ADD CONSTRAINT `person_score_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `person_score_ibfk_2` FOREIGN KEY (`score_id`) REFERENCES `score` (`id`),
  ADD CONSTRAINT `person_score_ibfk_3` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`);

ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`track_id`) REFERENCES `track` (`id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`opening_id`) REFERENCES `opening` (`id`),
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`reservation_status_id`) REFERENCES `reservation_status` (`id`);


ALTER TABLE `reservation_option`
  ADD CONSTRAINT `reservation_option_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`),
  ADD CONSTRAINT `reservation_option_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`);


ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);


ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);


