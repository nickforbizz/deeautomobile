/*
SQLyog Ultimate v10.00 Beta1
MySQL - 8.0.23 : Database - deeautomobile
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`deeautomobile` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `deeautomobile`;

/*Table structure for table `bookedrides` */

DROP TABLE IF EXISTS `bookedrides`;

CREATE TABLE `bookedrides` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `bookedrides` */

/*Table structure for table `car_models` */

DROP TABLE IF EXISTS `car_models`;

CREATE TABLE `car_models` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `make_id` int DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` text,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_car_models_users` (`user_id`),
  KEY `FK_car_models_vehicle_makes` (`make_id`),
  CONSTRAINT `FK_car_models_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_car_models_vehicle_makes` FOREIGN KEY (`make_id`) REFERENCES `vehicle_makes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `car_models` */

insert  into `car_models`(`id`,`user_id`,`make_id`,`name`,`description`,`image`,`status`,`created_at`,`updated_at`) values (6,3,4,'Vitz','A small car',NULL,1,'2023-01-25 16:16:18','2023-01-25 16:16:18');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `inquiry_form` */

DROP TABLE IF EXISTS `inquiry_form`;

CREATE TABLE `inquiry_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `inquiry_form` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (7,'2023_02_01_073236_create_parameters_table',1);

/*Table structure for table `model_features` */

DROP TABLE IF EXISTS `model_features`;

CREATE TABLE `model_features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `model_id` int DEFAULT '0',
  `feature_id` int DEFAULT '0',
  `model_name` varchar(100) DEFAULT NULL,
  `feature_name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `model_features` */

insert  into `model_features`(`id`,`user_id`,`model_id`,`feature_id`,`model_name`,`feature_name`,`description`,`status`,`created_at`,`updated_at`) values (4,3,5,5,'Vitz','Windscreen',NULL,1,'2023-01-25 16:21:22','2023-01-25 16:21:22'),(5,3,5,5,'Vitz','Windscreen',NULL,1,'2023-01-25 16:21:41','2023-01-25 16:21:41');

/*Table structure for table `models_imgs` */

DROP TABLE IF EXISTS `models_imgs`;

CREATE TABLE `models_imgs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `veh_model_id` int NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `media_link` text,
  `type` varchar(100) DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_models_imgs_vehicle_models` (`veh_model_id`),
  CONSTRAINT `FK_models_imgs_vehicle_models` FOREIGN KEY (`veh_model_id`) REFERENCES `vehicle_models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `models_imgs` */

insert  into `models_imgs`(`id`,`user_id`,`veh_model_id`,`name`,`description`,`media_link`,`type`,`status`,`created_at`,`updated_at`) values (10,3,5,'vitz.jpg',NULL,'public/models/4JzuZs43G3EJagr7OBW9VT4arLjICsxaGZu6T49q.jpg','jpg',1,'2023-01-25 16:20:59','2023-01-25 16:20:59');

/*Table structure for table `offer_requests` */

DROP TABLE IF EXISTS `offer_requests`;

CREATE TABLE `offer_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `message` text,
  `price` float DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `offer_requests` */

/*Table structure for table `parameters` */

DROP TABLE IF EXISTS `parameters`;

CREATE TABLE `parameters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rec_type` int NOT NULL DEFAULT '1',
  `car_listing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SL' COMMENT 'SL-sidebar listing, SG-sidebar grid, NSL, NSG -N for negating',
  `blog_listing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SL' COMMENT 'SL-sidebar listing, SG-sidebar grid, NSL, NSG -N for negating',
  `guest_email_notifications` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `parameters` */

insert  into `parameters`(`id`,`rec_type`,`car_listing`,`blog_listing`,`guest_email_notifications`,`created_at`,`updated_at`) values (1,1,'SL','SL',1,NULL,'2023-02-01 10:53:34');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values ('3qQYmLMg7HfnZsm17eRPs96GEuNG1zSWKFBjS9V4',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicXdneEd4VXVCY2dpN3lLbzBpN1VWUG0xeW8zcVc5SDQ0UG5rM3pENSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaW5nbGVfY2FyP2NoZWNrUHJvZHVjdD01Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1674830871),('C8iKiAcilSlmdEwPi9m0sXCG2bY5umle10gKEG9N',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTlDQTRiREFjQlIxUXBWaTV6ZHA0TldKMHdscjNGZDc4QjRNSmVrciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nX2xpc3Rpbmdfc2lkZWJhciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1675240587),('I22K0pOZittUFUXqSpKxMqTuVentdNhnIKaMip2o',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDRVbVRRT2FCTkU3c01iWkF6dDdaWnRYb3RWV0I4dGtrWDNpbHZnYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1675141378),('oRH5RSSi7rNN9YC5lE3ky2FZlYGA8LAL8A5PrEQG',NULL,'127.0.0.1','PostmanRuntime/7.30.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWExYlhQNHNmMERUaTdUdlhERzQweWphN0pFQ0dzVHhnQ2sxR2JNYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rbG92ZS93ZWIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1675237836),('VAmZ73wGWNGBovnP6xcOtPeXb8tuD2mQaBlNaOeF',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmJ3UGc1OUFDM3BYTldlUXZzRTVKY1JqRkFFSVZSRzBHRVgxSXl0UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaW5nbGVfY2FyP2NoZWNrUHJvZHVjdD01Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1675108534);

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` text,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `testimonials` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`last_name`,`email`,`email_verified_at`,`password`,`two_factor_secret`,`two_factor_recovery_codes`,`remember_token`,`current_team_id`,`profile_photo_path`,`status`,`created_at`,`updated_at`) values (3,'Nick','Waruingi','admin@gmail.com',NULL,'$2y$10$516Ah2PH5/ZmabJYPFTIAO/e.ozLxVLZlYXbkJpfQDqLgroe6.iVW',NULL,NULL,NULL,NULL,NULL,1,'2023-01-25 16:11:29','2023-01-25 16:11:29');

/*Table structure for table `vehicle_features` */

DROP TABLE IF EXISTS `vehicle_features`;

CREATE TABLE `vehicle_features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `vehicle_features` */

insert  into `vehicle_features`(`id`,`user_id`,`name`,`description`,`status`,`created_at`,`updated_at`) values (5,3,'Windscreen','..',1,'2023-01-25 16:16:58','2023-01-25 16:16:58');

/*Table structure for table `vehicle_makes` */

DROP TABLE IF EXISTS `vehicle_makes`;

CREATE TABLE `vehicle_makes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` text,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `vehicle_makes` */

insert  into `vehicle_makes`(`id`,`user_id`,`name`,`description`,`image`,`status`,`created_at`,`updated_at`) values (4,3,'Toyota','This is a car','public/makes/LyYDoFriqw355rttQAj5AdtbSf8CorPiNvHstoEY.jpg',1,'2023-01-25 16:15:34','2023-01-25 16:15:34');

/*Table structure for table `vehicle_models` */

DROP TABLE IF EXISTS `vehicle_models`;

CREATE TABLE `vehicle_models` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT '0',
  `make_id` int DEFAULT '0',
  `model_id` int DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `price` int DEFAULT NULL,
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
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_vehicle_models_users` (`user_id`),
  KEY `FK_vehicle_models_vehicle_makes` (`make_id`),
  CONSTRAINT `FK_vehicle_models_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicle_models_vehicle_makes` FOREIGN KEY (`make_id`) REFERENCES `vehicle_makes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `vehicle_models` */

insert  into `vehicle_models`(`id`,`user_id`,`make_id`,`model_id`,`name`,`description`,`label`,`price`,`manYr`,`speed`,`mileage`,`condition`,`bodyType`,`colour`,`fuel`,`transmission`,`duty`,`interior`,`cc`,`status`,`created_at`,`updated_at`) values (5,3,4,6,'Vitz','In great condition','Kenyan used',520000,'2014','80',404,'used','Hatchback','silver','Petrol','Auto','Free','Lether',1400,1,'2023-01-25 16:20:59','2023-01-25 16:20:59');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
