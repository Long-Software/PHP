-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2023 at 03:10 PM
-- Server version: 8.0.33
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_loans`
--

DROP TABLE IF EXISTS `active_loans`;
CREATE TABLE IF NOT EXISTS `active_loans` (
  `active_loan_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `loan_history_id` bigint UNSIGNED NOT NULL,
  `loan_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`active_loan_id`),
  KEY `active_loans_loan_history_id_foreign` (`loan_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `admins_user_id_foreign` (`user_id`),
  KEY `admins_level_id_foreign` (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `created_by`, `last_login`, `user_id`, `level_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-07-06 11:52:40', 1, 1, '2023-07-06 04:52:40', '2023-07-06 04:52:40'),
(2, 'admin', '2023-07-06 11:52:40', 2, 2, '2023-07-06 04:52:40', '2023-07-06 04:52:40'),
(3, 'admin', '2023-07-06 11:52:40', 3, 3, '2023-07-06 04:52:40', '2023-07-06 04:52:40'),
(4, 'admin', '2023-07-06 11:52:40', 4, 4, '2023-07-06 04:52:40', '2023-07-06 04:52:40'),
(5, 'admin', '2023-07-06 11:52:40', 5, 5, '2023-07-06 04:52:40', '2023-07-06 04:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `admin_level`
--

DROP TABLE IF EXISTS `admin_level`;
CREATE TABLE IF NOT EXISTS `admin_level` (
  `level_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `level_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_level`
--

INSERT INTO `admin_level` (`level_id`, `level_description`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2023-07-06 04:52:34', '2023-07-06 04:52:34'),
(2, 'Create Admin', '2023-07-06 04:52:34', '2023-07-06 04:52:34'),
(3, 'Verify User', '2023-07-06 04:52:34', '2023-07-06 04:52:34'),
(4, 'Delete Account', '2023-07-06 04:52:34', '2023-07-06 04:52:34'),
(5, 'Secretary', '2023-07-06 04:52:34', '2023-07-06 04:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `bank_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_capital` double(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`bank_id`),
  UNIQUE KEY `banks_bank_name_unique` (`bank_name`),
  KEY `banks_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `bank_name`, `bank_address`, `bank_capital`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'A', 'Phnom Penh', 123456.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 20),
(2, 'B', 'Phnom Penh', 234567.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 21),
(3, 'C', 'Phnom Penh', 345678.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 22),
(4, 'D', 'Phnom Penh', 456789.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 23),
(5, 'E', 'Phnom Penh', 567890.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 24),
(6, 'F', 'Phnom Penh', 678901.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 25),
(7, 'G', 'Phnom Penh', 789012.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 26),
(8, 'H', 'Phnom Penh', 890123.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 27),
(9, 'I', 'Phnom Penh', 901234.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 28),
(10, 'J', 'Phnom Penh', 12345.00, '2023-07-06 04:52:49', '2023-07-06 04:52:49', 29),
(11, 'ACLEDA', 'Siem Reap', 10000.00, NULL, NULL, 31),
(12, 'ABA', 'Phnom Penh', 1000.00, NULL, NULL, 33);

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

DROP TABLE IF EXISTS `borrowers`;
CREATE TABLE IF NOT EXISTS `borrowers` (
  `borrower_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `borrower_phone_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrower_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrower_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `borrower_employer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`borrower_id`),
  KEY `borrowers_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`borrower_id`, `borrower_phone_num`, `borrower_address`, `borrower_job`, `borrower_employer_name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '096789123', 'Phnom Penh', NULL, NULL, 34, NULL, NULL),
(2, '012345678', 'Phnom Penh', NULL, NULL, 36, NULL, NULL),
(3, '013440272', 'Phnom Penh', NULL, NULL, 37, NULL, NULL),
(4, '0123456', 'Phnom Penh', NULL, NULL, 38, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `document_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `borrower_id` bigint UNSIGNED NOT NULL,
  `document_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`document_id`),
  KEY `documents_borrower_id_foreign` (`borrower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_addresses`
--

DROP TABLE IF EXISTS `ip_addresses`;
CREATE TABLE IF NOT EXISTS `ip_addresses` (
  `address_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `lng` decimal(8,5) DEFAULT NULL,
  `lat` decimal(8,5) DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.0.0.0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`address_id`),
  KEY `ip_addresses_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_addresses`
--

INSERT INTO `ip_addresses` (`address_id`, `lng`, `lat`, `ip_address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '104.89835', '11.58202', '202.62.41.81', 1, '2023-07-06 05:52:39', '2023-07-06 05:52:39'),
(2, '104.89809', '11.58218', '202.62.41.81', 1, '2023-07-06 07:24:28', '2023-07-06 07:24:28'),
(3, '104.89810', '11.58214', '202.62.41.81', 1, '2023-07-06 07:25:55', '2023-07-06 07:25:55'),
(4, '104.89844', '11.58180', '202.62.41.81', 1, '2023-07-06 08:51:46', '2023-07-06 08:51:46'),
(5, '104.89838', '11.58183', '202.62.41.81', 1, '2023-07-06 09:30:10', '2023-07-06 09:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `lenders`
--

DROP TABLE IF EXISTS `lenders`;
CREATE TABLE IF NOT EXISTS `lenders` (
  `lender_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `lender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lender_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lender_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`lender_id`),
  KEY `lenders_bank_id_foreign` (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_history`
--

DROP TABLE IF EXISTS `loan_history`;
CREATE TABLE IF NOT EXISTS `loan_history` (
  `loan_history_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `package_id` bigint UNSIGNED NOT NULL,
  `borrower_id` bigint UNSIGNED NOT NULL,
  `loan_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`loan_history_id`),
  KEY `loan_history_package_id_foreign` (`package_id`),
  KEY `loan_history_borrower_id_foreign` (`borrower_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_history`
--

INSERT INTO `loan_history` (`loan_history_id`, `package_id`, `borrower_id`, `loan_amount`, `created_at`, `updated_at`) VALUES
(1, 124567, 1, 5000.00, '2023-07-06 01:55:45', '2023-07-06 01:55:45'),
(2, 11223344, 3, 50000.00, '2023-07-06 02:27:05', '2023-07-06 02:27:05'),
(3, 124567, 4, 25000.00, '2023-07-06 02:40:06', '2023-07-06 02:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `loan_packages`
--

DROP TABLE IF EXISTS `loan_packages`;
CREATE TABLE IF NOT EXISTS `loan_packages` (
  `package_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `loan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_amount` double(8,2) NOT NULL,
  `loan_min` double(8,2) NOT NULL,
  `loan_max` double(8,2) NOT NULL,
  `loan_date` date DEFAULT NULL,
  `loan_rate` int NOT NULL,
  `loan_rate_per` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_duration` int NOT NULL,
  `loan_duration_in` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `payment_cycle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `num_of_cycle` int NOT NULL,
  `processing_fees` int DEFAULT NULL,
  `insurance_fees` int DEFAULT NULL,
  `loan_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11223345 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_packages`
--

INSERT INTO `loan_packages` (`package_id`, `loan_name`, `loan_plan`, `loan_amount`, `loan_min`, `loan_max`, `loan_date`, `loan_rate`, `loan_rate_per`, `loan_duration`, `loan_duration_in`, `is_active`, `payment_cycle`, `num_of_cycle`, `processing_fees`, `insurance_fees`, `loan_description`, `created_at`, `updated_at`) VALUES
(124567, 'House Loan', 'Personal', 500000.00, 6000.00, 250000.00, NULL, 15, 'Per Week', 60, 'Weeks', 1, 'Weekly', 20, NULL, NULL, NULL, '2023-07-05 21:56:14', '2023-07-05 21:56:14'),
(11223344, 'Scholarship', 'Student', 500000.00, 20000.00, 100000.00, NULL, 15, 'Per Week', 50, 'Weeks', 1, 'Weekly', 10, 5, 1000, 'this is a scholarship loan', '2023-07-06 02:19:42', '2023-07-06 02:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_03_142305_banks', 1),
(6, '2023_06_03_142337_borrowers', 1),
(7, '2023_06_03_142420_loan_packages', 1),
(8, '2023_06_07_232832_admin_level', 1),
(9, '2023_06_07_233351_admins', 1),
(10, '2023_06_16_053242_lender', 1),
(11, '2023_06_16_053747_document', 1),
(12, '2023_06_16_054522_loan_history', 1),
(13, '2023_06_16_054846_active_loan', 1),
(14, '2023_06_25_022714_ip_addresses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_pin_code` int DEFAULT NULL,
  `user_verified` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_username`, `email`, `password`, `account_type`, `profile_image`, `user_pin_code`, `user_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'a', NULL, NULL, 1, NULL, '2023-07-06 04:52:36', '2023-07-06 00:26:07'),
(2, '1', '1', '1@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'a', NULL, NULL, 1, NULL, '2023-07-06 04:52:36', '2023-07-06 04:52:36'),
(3, '2', '2', '2@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'a', NULL, NULL, 1, NULL, '2023-07-06 04:52:36', '2023-07-06 04:52:36'),
(4, '3', '3', '3@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'a', NULL, NULL, 1, NULL, '2023-07-06 04:52:36', '2023-07-06 04:52:36'),
(5, '4', '4', '4@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'a', NULL, NULL, 1, NULL, '2023-07-06 04:52:36', '2023-07-06 04:52:36'),
(6, 'temp5', 'temp5', '5@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 02:32:27'),
(7, 'temp6', 'temp6', '6@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 1, NULL, '2023-07-06 04:52:43', '2023-07-06 02:32:11'),
(8, 'temp7', 'temp7', '7@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 1, NULL, '2023-07-06 04:52:43', '2023-07-06 02:32:12'),
(9, 'temp5', 'temp5', '8@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 1, NULL, '2023-07-06 04:52:43', '2023-07-06 02:32:12'),
(11, 'temp7', 'temp7', '10@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 1, NULL, '2023-07-06 04:52:43', '2023-07-06 02:32:13'),
(12, 'temp5', 'temp5', '11@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(13, 'temp6', 'temp6', '12@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 1, NULL, '2023-07-06 04:52:43', '2023-07-06 02:32:13'),
(14, 'temp7', 'temp7', '13@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(15, 'temp5', 'temp5', '14@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(16, 'temp6', 'temp6', '15@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(17, 'temp7', 'temp7', '16@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(18, 'temp5', 'temp5', '17@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(19, 'temp6', 'temp6', '18@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(20, 'temp7', 'temp7', '19@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'u', NULL, NULL, 0, NULL, '2023-07-06 04:52:43', '2023-07-06 04:52:43'),
(21, 'temp8', 'temp8', '20@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 1, NULL, '2023-07-06 04:52:46', '2023-07-06 02:32:08'),
(22, 'temp8', 'temp8', '21@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 1, NULL, '2023-07-06 04:52:46', '2023-07-06 02:32:09'),
(23, 'temp8', 'temp8', '22@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 1, NULL, '2023-07-06 04:52:46', '2023-07-06 02:32:08'),
(24, 'temp8', 'temp8', '23@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 0, NULL, '2023-07-06 04:52:46', '2023-07-06 04:52:46'),
(25, 'temp8', 'temp8', '24@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 0, NULL, '2023-07-06 04:52:46', '2023-07-06 04:52:46'),
(26, 'temp8', 'temp8', '25@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 0, NULL, '2023-07-06 04:52:46', '2023-07-06 04:52:46'),
(27, 'temp8', 'temp8', '26@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 0, NULL, '2023-07-06 04:52:46', '2023-07-06 04:52:46'),
(28, 'temp8', 'temp8', '27@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 0, NULL, '2023-07-06 04:52:46', '2023-07-06 04:52:46'),
(29, 'temp8', 'temp8', '28@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 0, NULL, '2023-07-06 04:52:46', '2023-07-06 04:52:46'),
(30, 'temp8', 'temp8', '29@gmail.com', '$2y$10$G5wMoTNNiqEUf60RvLSKSurI1RUJmme04FSATWZY9asyHIVNKlq7a', 'b', NULL, NULL, 0, NULL, '2023-07-06 04:52:46', '2023-07-06 04:52:46'),
(31, 'Vathanak', 'nak110', 'nak67@gmail.com', '$2y$10$KtdjMCKCO7LZuUlpkomPau6NWdXa761LnBZG9lhr.RM2p1W.1DDBW', 'b', NULL, NULL, 0, NULL, '2023-07-05 21:54:39', '2023-07-05 21:54:39'),
(32, 'long', 'longq', 'temp@gmail.com', '$2y$10$OW5OuzFDGGIP4HnQLcDFE.wJSTQd9/bgs1/AfcuUWC///JlLicGmq', 'u', NULL, NULL, 0, NULL, '2023-07-06 00:06:57', '2023-07-06 00:06:57'),
(33, 'Kosal Vathanak', 'nak110', 'nak110@gmail.com', '$2y$10$0zo7WPMRgHQxUyhdonO5Fed4l/8JQVU8T6ixdrxtQw7lcrXlLCmn.', 'b', NULL, NULL, 0, NULL, '2023-07-06 01:40:52', '2023-07-06 01:40:52'),
(34, 'jim', 'jim123', 'jim123@gmail.com', '$2y$10$5eZRuTDvS2N808YeulriA.ErIe7fj01EV7xtRywoq6UVejTWnF1A.', 'u', NULL, NULL, 0, NULL, '2023-07-06 01:55:12', '2023-07-06 01:55:12'),
(35, 'Vathanak', 'nak123', 'nak123@gmail.com', '$2y$10$IhchM9Ob6iSPQFK8qkD7xOl3xnjWJj.8LCszoKdl9746aJZlYpese', 'u', NULL, NULL, 0, NULL, '2023-07-06 02:13:52', '2023-07-06 02:13:52'),
(36, 'Vathanak', 'nak110', 'nak114@gmail.com', '$2y$10$aCKm1sfRs22X69szVV/26OFsT7ecp3quApvsWw.4awNykNDz56C8q', 'u', NULL, NULL, 0, NULL, '2023-07-06 02:16:36', '2023-07-06 02:16:36'),
(37, 'jack', 'jack110', 'jack110@gmail.com', '$2y$10$WwQHnxK6.m6sHcKnY9mb0eI/ei31HYYJ/UlqJnt6dep6tDRIsUnzm', 'u', NULL, NULL, 0, NULL, '2023-07-06 02:20:46', '2023-07-06 02:20:46'),
(38, 'Rose', 'rose123', 'rose123@gmail.com', '$2y$10$.G0NHDvIGyoMbO.iANLzleWWD/HiJ5/8WSZGtDbaBBu/vAM4eVyOK', 'u', NULL, NULL, 0, NULL, '2023-07-06 02:38:58', '2023-07-06 02:38:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `active_loans`
--
ALTER TABLE `active_loans`
  ADD CONSTRAINT `active_loans_loan_history_id_foreign` FOREIGN KEY (`loan_history_id`) REFERENCES `loan_history` (`loan_history_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `admin_level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `banks`
--
ALTER TABLE `banks`
  ADD CONSTRAINT `banks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD CONSTRAINT `borrowers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_borrower_id_foreign` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ip_addresses`
--
ALTER TABLE `ip_addresses`
  ADD CONSTRAINT `ip_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lenders`
--
ALTER TABLE `lenders`
  ADD CONSTRAINT `lenders_bank_id_foreign` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`bank_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loan_history`
--
ALTER TABLE `loan_history`
  ADD CONSTRAINT `loan_history_borrower_id_foreign` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loan_history_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `loan_packages` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
