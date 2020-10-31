-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for deeautomobile
CREATE DATABASE IF NOT EXISTS `deeautomobile` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `deeautomobile`;

-- Dumping structure for table deeautomobile.bookedrides
CREATE TABLE IF NOT EXISTS `bookedrides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.bookedrides: ~2 rows (approximately)
/*!40000 ALTER TABLE `bookedrides` DISABLE KEYS */;
INSERT INTO `bookedrides` (`id`, `name`, `email`, `mobile`, `date`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Rose', 'wivij59395@dmeproject.com', '0707722247', '2020-10-30', 1, '2020-10-28 18:58:55', '2020-10-29 02:05:38'),
	(2, 'Jeff', 'jeff@koloih.lop', '07232325869', '2020-10-30', 1, '2020-10-29 17:17:57', '2020-10-29 17:17:57');
/*!40000 ALTER TABLE `bookedrides` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.car_models
CREATE TABLE IF NOT EXISTS `car_models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `make_id` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` text,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_car_models_users` (`user_id`),
  KEY `FK_car_models_vehicle_makes` (`make_id`),
  CONSTRAINT `FK_car_models_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_car_models_vehicle_makes` FOREIGN KEY (`make_id`) REFERENCES `vehicle_makes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.car_models: ~2 rows (approximately)
/*!40000 ALTER TABLE `car_models` DISABLE KEYS */;
INSERT INTO `car_models` (`id`, `user_id`, `make_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(2, 1, 2, 'Hillux', 'A hillux  is good for u', NULL, 1, '2020-10-24 12:57:47', '2020-10-24 16:17:34'),
	(3, 1, 2, 'Axio', 'Best comfort', NULL, 1, '2020-10-24 12:58:08', '2020-10-24 16:17:37'),
	(4, 1, 2, 'Allion', 'Allion Way', NULL, 1, '2020-10-24 13:17:58', '2020-10-24 13:17:58'),
	(5, 1, 2, 'Sienta', 'a Hatchback', NULL, 1, '2020-10-29 17:23:40', '2020-10-29 17:23:40');
/*!40000 ALTER TABLE `car_models` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table deeautomobile.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.inquiry_form
CREATE TABLE IF NOT EXISTS `inquiry_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.inquiry_form: ~2 rows (approximately)
/*!40000 ALTER TABLE `inquiry_form` DISABLE KEYS */;
INSERT INTO `inquiry_form` (`id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Toyota', 'wivij59395@dmeproject.com', 'This is toyota car.', 1, '2020-10-23 02:28:02', '2020-10-29 02:31:32'),
	(3, 'Rose', 'wivij59395@dmeproject.com', 'Community Discourse\r\nOpenCollective\r\nPatreon\r\nCDN Network Map', 1, '2020-10-24 06:54:54', '2020-10-24 06:54:54');
/*!40000 ALTER TABLE `inquiry_form` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table deeautomobile.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2020_10_22_021836_create_sessions_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.models_imgs
CREATE TABLE IF NOT EXISTS `models_imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `veh_model_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `media_link` text,
  `type` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_models_imgs_vehicle_models` (`veh_model_id`),
  CONSTRAINT `FK_models_imgs_vehicle_models` FOREIGN KEY (`veh_model_id`) REFERENCES `vehicle_models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.models_imgs: ~4 rows (approximately)
/*!40000 ALTER TABLE `models_imgs` DISABLE KEYS */;
INSERT INTO `models_imgs` (`id`, `user_id`, `veh_model_id`, `name`, `description`, `media_link`, `type`, `status`, `created_at`, `updated_at`) VALUES
	(6, 1, 3, '000_R_Nera_2004_01_1600x1200.jpg', NULL, 'public/models/cBMlug9SOSAKYq0TRULOjI8dsHrgqwePaJw3fpks.jpeg', 'jpg', 1, '2020-10-24 13:08:32', '2020-10-24 13:08:32'),
	(7, 1, 3, '34aside.jpg', NULL, 'public/models/iQGXLOO2qm2oOZeSWUOixOZxbtj10Wyj38XTe1Wt.jpeg', 'jpg', 1, '2020-10-24 13:08:32', '2020-10-24 13:08:32'),
	(8, 1, 3, '51.jpg', NULL, 'public/models/17vNb8RJ5huErTkJK6Vydo4byAydf71gyRNsZ2l3.jpeg', 'jpg', 1, '2020-10-24 13:08:32', '2020-10-24 13:08:32'),
	(9, 1, 4, 'hummer_h2_victoryRedEdition_manu-08_01.jpg', NULL, 'public/models/rGyM78MmUl7RfPvvMp4caAxaCARoBw2SHgkXGcvA.jpeg', 'jpg', 1, '2020-10-24 14:09:31', '2020-10-24 14:09:31');
/*!40000 ALTER TABLE `models_imgs` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.model_features
CREATE TABLE IF NOT EXISTS `model_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `model_id` int(11) DEFAULT '0',
  `feature_id` int(11) DEFAULT '0',
  `model_name` varchar(100) DEFAULT NULL,
  `feature_name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.model_features: ~3 rows (approximately)
/*!40000 ALTER TABLE `model_features` DISABLE KEYS */;
INSERT INTO `model_features` (`id`, `user_id`, `model_id`, `feature_id`, `model_name`, `feature_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 'Axela', 'Toyota', NULL, 1, '2020-10-23 06:17:53', '2020-10-23 06:17:53'),
	(2, 1, 1, 1, 'Axela', 'Windscreen', NULL, 1, '2020-10-23 17:31:39', '2020-10-23 17:31:39'),
	(3, 1, 1, 3, 'Axela', 'Alloy Rims', NULL, 1, '2020-10-23 17:31:39', '2020-10-23 17:31:39');
/*!40000 ALTER TABLE `model_features` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.offer_requests
CREATE TABLE IF NOT EXISTS `offer_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `message` text,
  `price` float DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.offer_requests: ~3 rows (approximately)
/*!40000 ALTER TABLE `offer_requests` DISABLE KEYS */;
INSERT INTO `offer_requests` (`id`, `name`, `email`, `mobile`, `message`, `price`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Rose', 'nicholas.wainaina@aimsoft.co.ke', '0707722247', 'fd', 230000, 1, '2020-10-29 03:19:19', '2020-10-29 03:36:47'),
	(2, 'Nicholas', 'wivij59395@dmeproject.com', '0707722247', 'wewewewe', 230000, 1, '2020-10-29 03:20:37', '2020-10-29 03:20:37'),
	(3, 'Nick', 'nickforbizz@gmail.com', '6765767', '67676', 7888, 1, '2020-10-29 17:16:43', '2020-10-29 17:16:43');
/*!40000 ALTER TABLE `offer_requests` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table deeautomobile.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table deeautomobile.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table deeautomobile.sessions: ~1 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('u4mc31f9V3oPTjbhgCFUpCmlh0anDfbLIlvw154x', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicFVjeHlEb25UV3F1cFpzd2MweUpJQ05qN0ZyaTd1MEF0YnpVTWpnYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92aWV3Y29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRDb1B0a1JrUVVLWURZZjYxdm9zaEpPTE81NTRoc1BBWEZycHZORUdBaXZuQ0hLbkl2RnJoYSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkQ29QdGtSa1FVS1lEWWY2MXZvc2hKT0xPNTU0aHNQQVhGcnB2TkVHQWl2bkNIS25JdkZyaGEiO30=', 1604123781);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` text,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.testimonials: ~4 rows (approximately)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `user_id`, `name`, `occupation`, `email`, `mobile`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(4, 1, 'Joe Biden', 'Analyst', 'jeff@koloih.lop', '07232325869', 'a Hatchback ipsum dolor sit amet consectetur, adipisicing elit. Error a soluta eligendi accusamus debitis quasi adipisci culpa est nobis,', 'public/testimonials/MCRWPcmZ4a1jb4Sre4O07QYHrUQa43PbRHK3tz4L.jpeg', 1, '2020-10-31 03:26:09', '2020-10-31 06:45:33'),
	(5, 1, 'Rose Muhando', 'Musician', 'jeff@koloih.lop', '07232325869', 'Where you steam off ipsum dolor sit amet consectetur, adipisicing elit. Error a soluta eligendi accusamus debitis quasi adipisci culpa est nobis,', 'public/testimonials/DHWHoanOiADJ0TlwCFyE9QX8kDKwH2cdzsKKVO7G.jpeg', 1, '2020-10-31 03:27:01', '2020-10-31 06:45:36'),
	(6, 1, 'Kelvin Harris', 'Data & Software', 'jeff@koloih.lop', '07232325869', 'Where you steam off team ipsum dolor sit amet consectetur, adipisicing elit. Error a soluta eligendi accusamus debitis quasi adipisci culpa est nobis, off', 'public/testimonials/1qwWPkVGVmEoUdEAjMhPOiQGCZ1jX1AOd9Z47UHW.jpeg', 1, '2020-10-31 03:28:05', '2020-10-31 06:45:41'),
	(7, 1, 'James Wako', 'Politician', 'jeff@koloih.lop', '07232325869', 'This is toyota car psum dolor sit amet consectetur, adipisicing elit. Error a soluta eligendi accusamus debitis quasi adipisci culpa est nobis,', 'public/testimonials/KkLYmYQjSHb7prks0hDnjUg9jMfuXjtPYPIPsqxm.jpeg', 1, '2020-10-31 04:14:58', '2020-10-31 04:14:58');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table deeautomobile.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Nick', '', 'nickforbizz@gmail.com', NULL, '$2y$10$CoPtkRkQUKYDYf61voshJOLO554hsPAXFrpvNEGAivnCHKnIvFrha', NULL, NULL, '0AScfQN5ibUafMzD8AVkZUQXyIUrKj7CWvhPntZJruRIZYQNCs4fTvIRkZLY', NULL, NULL, 1, '2020-10-22 02:35:38', '2020-10-22 02:35:38'),
	(2, 'Jael', '', 'wivij59395@dmeproject.com', NULL, '$2y$10$WKaHdj3l6j/0JANK59wkPePACm9MAa1CPyBG2BW5Idfu55A0vLRoe', NULL, NULL, NULL, NULL, NULL, 1, '2020-10-28 14:58:38', '2020-10-28 18:21:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.vehicle_features
CREATE TABLE IF NOT EXISTS `vehicle_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.vehicle_features: ~2 rows (approximately)
/*!40000 ALTER TABLE `vehicle_features` DISABLE KEYS */;
INSERT INTO `vehicle_features` (`id`, `user_id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Windscreen', 'Tinted ones', 1, '2020-10-23 02:28:02', '2020-10-23 06:34:08'),
	(3, 1, 'Alloy Rims', 'Hardcore', 1, '2020-10-23 06:37:21', '2020-10-23 06:37:21'),
	(4, 1, 'Radio player', 'Where you steam off', 1, '2020-10-29 17:24:45', '2020-10-29 17:24:45');
/*!40000 ALTER TABLE `vehicle_features` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.vehicle_makes
CREATE TABLE IF NOT EXISTS `vehicle_makes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` text,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table deeautomobile.vehicle_makes: ~1 rows (approximately)
/*!40000 ALTER TABLE `vehicle_makes` DISABLE KEYS */;
INSERT INTO `vehicle_makes` (`id`, `user_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(2, 1, 'Toyota', 'This is toyota car', 'public/makes/Hu3bLTXkFhDVRYZXs0gAWYYbaDGD7bwHwbF96uPS.jpeg', 1, '2020-10-24 12:57:11', '2020-10-24 12:57:11'),
	(3, 1, 'Ferrari', 'the future', 'public/makes/9fSQOnZN0DoDtG8M5MiwvalRmhgjln1ziRE2pz98.jpeg', 1, '2020-10-29 17:20:26', '2020-10-29 17:20:26');
/*!40000 ALTER TABLE `vehicle_makes` ENABLE KEYS */;

-- Dumping structure for table deeautomobile.vehicle_models
CREATE TABLE IF NOT EXISTS `vehicle_models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `make_id` int(11) DEFAULT '0',
  `model_id` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `manYr` varchar(100) DEFAULT NULL,
  `speed` varchar(100) DEFAULT NULL,
  `mileage` float DEFAULT NULL,
  `condition` varchar(100) DEFAULT NULL,
  `bodyType` varchar(100) DEFAULT NULL,
  `colour` varchar(100) DEFAULT NULL,
  `fuel` varchar(100) DEFAULT NULL,
  `transmission` varchar(100) DEFAULT NULL,
  `duty` varchar(100) DEFAULT NULL,
  `interior` varchar(100) DEFAULT NULL,
  `cc` float DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_vehicle_models_users` (`user_id`),
  KEY `FK_vehicle_models_vehicle_makes` (`make_id`),
  CONSTRAINT `FK_vehicle_models_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicle_models_vehicle_makes` FOREIGN KEY (`make_id`) REFERENCES `vehicle_makes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table deeautomobile.vehicle_models: ~2 rows (approximately)
/*!40000 ALTER TABLE `vehicle_models` DISABLE KEYS */;
INSERT INTO `vehicle_models` (`id`, `user_id`, `make_id`, `model_id`, `name`, `description`, `label`, `price`, `manYr`, `speed`, `mileage`, `condition`, `bodyType`, `colour`, `fuel`, `transmission`, `duty`, `interior`, `cc`, `status`, `created_at`, `updated_at`) VALUES
	(3, 1, 2, 2, 'Hillux', 'sera tupu Nitareview book moja nione how it works sera tupu Nitareview book moja nione how it works sera tupu Nitareview book moja nione how it works', 'Used', 550000, '2013', '180', 100, 'Good', 'SUV', 'Red', 'Petrol', 'Automatic', 'Paid', 'cloth', 1500, 1, '2020-10-24 13:08:32', '2020-10-24 13:08:32'),
	(4, 1, 2, 3, 'Axio', 'opop', 'Used', 550000, '2016', '180', 500, 'Good', 'SUV', 'Black', 'Electric', 'Automatic', 'Paid', 'cloth', 1500, 1, '2020-10-24 14:09:31', '2020-10-24 14:09:31');
/*!40000 ALTER TABLE `vehicle_models` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
