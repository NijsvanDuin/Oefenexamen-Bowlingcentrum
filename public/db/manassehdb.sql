DROP DATABASE IF EXISTS `manassehdb`;
CREATE DATABASE `manassehdb`;
USE `manassehdb`;

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `person_id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

CREATE TABLE `game` (
  `id` int NOT NULL,
  `person_id` int NOT NULL,
  `reservation_id` int NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `game` (`id`, `person_id`, `reservation_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 1, '2023-03-29 09:48:05', '2023-03-29 09:48:05'),
(2, 2, 1, 1, '2023-03-29 09:49:04', '2023-03-29 09:49:04'),
(3, 4, 2, 1, '2023-03-29 09:49:04', '2023-03-29 09:49:04'),
(4, 2, 1, 1, '2023-03-29 09:49:29', '2023-03-29 09:49:29');

CREATE TABLE `opening` (
  `id` int NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `day_name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `opening` (`id`, `start`, `end`, `day_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '14:00:00', '22:00:00', 'maandag', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(2, '14:00:00', '22:00:00', 'dinsdag', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(3, '14:00:00', '22:00:00', 'woensdag', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(4, '14:00:00', '22:00:00', 'donderdag', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(5, '14:00:00', '24:00:00', 'vrijdag', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(6, '14:00:00', '24:00:00', 'zaterdag', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(7, '14:00:00', '24:00:00', 'zondag', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31');

CREATE TABLE `option` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `option` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Snack pakket basic', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(2, 'Snack pakket deluxe', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(3, 'Kinderpartijtje', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(4, 'Vrijgezellenfeest', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(5, 'Bedrijfsuitje', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31');

CREATE TABLE `person` (
  `id` int NOT NULL,
  `person_type_id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `insertion` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `call_sign` varchar(255) DEFAULT NULL,
  `is_adult` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `person` (`id`, `person_type_id`, `first_name`, `insertion`, `last_name`, `call_sign`, `is_adult`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mazin', NULL, 'Jamil', 'Mazin', 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55'),
(2, 1, 'Arjan', 'de', 'Ruijter', 'Arjan', 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55'),
(3, 1, 'Hans', NULL, 'Odijk', 'Hans', 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55'),
(4, 1, 'Dennis', 'van', 'Wakeren', 'Dennis', 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55'),
(5, 1, 'Wilco', 'Van de', 'Grift', 'Wilco', 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55'),
(6, 3, 'Tom', NULL, 'Sanders', 'Tom', 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55'),
(7, 3, 'Andrew', NULL, 'Sanders', NULL, 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55'),
(8, 3, 'Julian', NULL, 'Kaldenheuvel', NULL, 1, 1, '2023-03-29 09:39:55', '2023-03-29 09:39:55');

CREATE TABLE `person_score` (
  `person_id` int NOT NULL,
  `score_id` int NOT NULL,
  `reservation_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `person_score` (`person_id`, `score_id`, `reservation_id`) VALUES
(2, 1, 1),
(2, 2, 1),
(4, 3, 2),
(2, 4, 1),
(4, 4, 7),
(4, 5, 2),
(6, 5, 7),
(4, 6, 2),
(7, 6, 7),
(4, 7, 2),
(8, 7, 7),
(7, 8, 2),
(8, 9, 2),
(5, 10, 1),
(6, 11, 1),
(1, 12, 2),
(1, 13, 2),
(5, 14, 2);

CREATE TABLE `person_type` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `person_type` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Klant', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(2, 'Medewerker', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(3, 'Gast', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31');

CREATE TABLE `rate` (
  `id` int NOT NULL,
  `amount` int NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `rate` (`id`, `amount`, `unit`, `created_at`, `updated_at`) VALUES
(1, 24, 'per uur', '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(2, 28, 'per uur', '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(3, 34, 'per uur', '2023-03-29 07:37:31', '2023-03-29 07:37:31');

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `reservation_status_id` int NOT NULL,
  `person_id` int NOT NULL,
  `track_id` int NOT NULL,
  `opening_id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `adults` int NOT NULL,
  `children` int NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `reservation` (`id`, `reservation_status_id`, `person_id`, `track_id`, `opening_id`, `date`, `time`, `adults`, `children`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 8, 1, '2023-03-16', '19:43:54', 4, 2, 1, '2023-03-29 09:46:43', '2023-03-29 09:46:43'),
(2, 1, 2, 2, 1, '2023-03-03', '26:43:54', 3, 0, 1, '2023-03-29 09:46:43', '2023-03-29 11:57:52'),
(3, 1, 3, 3, 7, '2024-03-13', '14:00:06', 1, 0, 1, '2023-03-29 11:58:53', '2023-03-29 11:58:53'),
(6, 1, 1, 6, 2, '2023-03-24', '14:00:06', 4, 2, 1, '2023-03-29 12:01:09', '2023-03-29 12:01:09'),
(7, 1, 4, 4, 3, '2023-03-03', '26:43:54', 3, 0, 1, '2023-03-29 12:01:09', '2023-03-29 12:01:09');

CREATE TABLE `reservation_option` (
  `reservation_id` int NOT NULL,
  `option_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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

CREATE TABLE `reservation_status` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `reservation_status` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Bevestigd', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(2, 'Geannuleerd', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(3, 'Inbehandeling', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31');

CREATE TABLE `role` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `role` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31'),
(2, 'user', 1, '2023-03-29 07:37:31', '2023-03-29 07:37:31');

CREATE TABLE `score` (
  `id` int NOT NULL,
  `value` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `score` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 290, '2023-03-29 09:50:28', '2023-03-29 09:50:28'),
(2, 300, '2023-03-29 09:50:28', '2023-03-29 09:50:28'),
(3, 200, '2023-03-29 09:50:28', '2023-03-29 11:52:03'),
(4, 200, '2023-03-29 09:50:28', '2023-03-29 11:44:09'),
(5, 269, '2023-03-29 09:50:28', '2023-03-29 15:07:00'),
(6, 299, '2023-03-29 09:50:28', '2023-03-29 09:50:28'),
(7, 255, '2023-03-29 09:50:28', '2023-03-29 09:50:28'),
(8, 295, '2023-03-29 10:00:37', '2023-03-29 10:00:37'),
(9, 260, '2023-03-29 10:00:37', '2023-03-29 15:08:11'),
(10, 200, '2023-03-29 10:00:37', '2023-03-30 07:01:11'),
(11, 200, '2023-03-29 10:00:37', '2023-03-29 10:00:37'),
(12, 300, '2023-03-29 10:00:37', '2023-03-29 12:14:52'),
(13, 165, '2023-03-29 10:00:37', '2023-03-30 07:02:23'),
(14, 120, '2023-03-29 10:00:37', '2023-03-29 15:07:15');

CREATE TABLE `track` (
  `id` int NOT NULL,
  `code` varchar(255) NOT NULL,
  `has_lanes` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `track` (`id`, `code`, `has_lanes`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1', 0, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44'),
(2, '2', 0, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44'),
(3, '3', 0, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44'),
(4, '4', 0, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44'),
(5, '5', 0, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44'),
(6, '6', 0, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44'),
(7, '7', 1, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44'),
(8, '8', 1, 1, '2023-03-29 09:43:44', '2023-03-29 09:43:44');

CREATE TABLE `user` (
  `id` int NOT NULL,
  `person_id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `user` (`id`, `person_id`, `email`, `password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'm.jamil@gmail.com', 'password', 1, '2023-03-29 09:40:54', '2023-03-29 09:40:54'),
(2, 5, 'w.van.de.grift@gmail.com', 'password', 1, '2023-03-29 09:40:54', '2023-03-29 09:40:54');

CREATE TABLE `user_role` (
  `user_id` int NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`);

ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `reservation_id` (`reservation_id`);

ALTER TABLE `opening`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `option`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_type_id` (`person_type_id`);

ALTER TABLE `person_score`
  ADD PRIMARY KEY (`person_id`,`score_id`,`reservation_id`),
  ADD KEY `score_id` (`score_id`),
  ADD KEY `reservation_id` (`reservation_id`);

ALTER TABLE `person_type`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `track_id` (`track_id`),
  ADD KEY `opening_id` (`opening_id`),
  ADD KEY `reservation_status_id` (`reservation_status_id`);

ALTER TABLE `reservation_option`
  ADD PRIMARY KEY (`reservation_id`,`option_id`),
  ADD KEY `option_id` (`option_id`);

ALTER TABLE `reservation_status`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `person_id` (`person_id`);

ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `game`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `opening`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `option`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `person`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `person_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `rate`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `reservation_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `score`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `track`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);

ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`),
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`);

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
COMMIT;