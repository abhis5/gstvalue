-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 12:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstvalue`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('gstvalue_cacheabhi01blp@gmail.com|192.168.0.5', 'i:1;', 1590766024),
('gstvalue_cacheabhi01blp@gmail.com|192.168.0.5:timer', 'i:1590766024;', 1590766024);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gst_no` varchar(1024) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_pass` varchar(255) NOT NULL,
  `gst_id` varchar(255) DEFAULT NULL,
  `gst_pass` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `approval` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `gst_no`, `address`, `mobile`, `email`, `email_pass`, `gst_id`, `gst_pass`, `type`, `approval`, `created_at`, `updated_at`) VALUES
(34, 'Ganga Oil Mill', '18AABCT3518Q1ZV', 'Industrial area, Bhagwatiganj', '9984842773', 'abhi02blp@gmail.com', '9984842773', 'ganga_6963', '1', '1', NULL, '2020-05-26 18:14:29', '2020-05-26 18:14:29'),
(35, 'SGRK', '18AABCT3518Q1ZV', 'Bhagwatiganj', '8299120767', 'blp271202@gmail.com', '9984842773', 'sgrk_82', '1', '1', NULL, '2020-05-26 18:18:14', '2020-05-26 18:18:14'),
(36, 'Ganga Enterprises', '18AABCT3518Q1ZV', 'Bhagwatiganj', '8299120767', 'blp271202@gmail.com', '9984842773', 'ganga_6954', '1', '1', NULL, '2020-05-26 18:38:44', '2020-05-26 18:38:44'),
(37, 'Mahaveer Traders', '18AABCT3518Q1ZV', 'Bhagwatiganj', '9984842773', 'tallydatablp@gmail.com', '9984842773', 'mahaveer#890', '1', '1', NULL, '2020-05-27 04:47:31', '2020-05-27 04:47:31'),
(38, 'JKDAFH', '18AABCT3518Q1ZV', 'KURMIDEEH', '9984842773', 'ABHI01REG@GMAIL.COM', 'ABHI01REG@GMAIL.COM', NULL, '2', '2', NULL, '2020-05-29 15:28:10', '2020-05-29 15:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `eway_bill`
--

CREATE TABLE `eway_bill` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `filings`
--

CREATE TABLE `filings` (
  `id` int(255) NOT NULL,
  `gst_id` int(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `month` varchar(255) DEFAULT NULL,
  `quarter` int(255) DEFAULT NULL,
  `gstr_3b` int(255) DEFAULT 0,
  `gstr_cmp` int(255) DEFAULT 0,
  `gstr_1` int(255) DEFAULT 0,
  `paid` int(255) DEFAULT 0,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filings`
--

INSERT INTO `filings` (`id`, `gst_id`, `year`, `month`, `quarter`, `gstr_3b`, `gstr_cmp`, `gstr_1`, `paid`, `created_at`, `updated_at`) VALUES
(172, 34, '2019-20', '1', NULL, 1, 0, 1, 0, '2020-05-26', '2020-05-26'),
(175, 35, '2019-20', '1', NULL, 1, 0, 1, 0, '2020-05-26', '2020-05-26'),
(176, 36, '2019-20', '2', NULL, 1, 0, 0, 1, '2020-05-27', '2020-05-27'),
(177, 36, '2019-20', '3', NULL, 1, 0, 0, 0, '2020-05-27', '2020-05-27'),
(180, 34, '2019-20', '2', NULL, 1, 0, 1, 0, '2020-05-29', '2020-05-29'),
(181, 35, '2019-20', '2', NULL, 0, 0, 1, 1, '2020-05-30', '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_11_09_152323_create_sessions_table', 2),
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2020_01_06_140838_create_cache_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('abhi02blp@gmail.com', '$2y$10$3OyY8aOZ.O3WivZ/RgfTPOJn8BDmcalD/Ma6Ol4vKsSQQgSoKcvMq', '2020-01-08 08:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `TRN` varchar(255) DEFAULT NULL,
  `ARN` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_password` varchar(255) NOT NULL,
  `email_creation_date` varchar(255) NOT NULL,
  `status` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fgFSKozmborJUJiEXwtEudfkEyJ4Q6UYqRYUqPcd', 1, '192.168.0.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZlNYcXhNeVhVODROalpwRDhnQTRvY1R1QUt5d2tSaTg5bkVnVWpFMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9nc3QuY29tL3JlcG9ydHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1590824970),
('rdZrVhSTAIKMSLySEdARtPbqMhGG1qovLeceRgGO', 1, '192.168.0.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibXFGWGlZc2tmN2xYU25qakgwaGZmeEpZMHpTNGp1bmQxbXI2RHQwRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9nc3QuY29tL3Byb2ZpbGUvMzQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1590833920),
('ZuBKluZtVQ0K4ehbQueE6w9BkOm4gLcDdEa2hp9T', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaGY5Wlp0UUQ3Nk45M0VMbllBVGZ0WXVJYTRENFI1MDZoTFJrdUhzZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlLzM2Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1590824679);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Swati Shukla', 'abhi02blp@gmail.com', 1, NULL, '$2y$10$mnQOBqI0eqjXWq.8NjZSqOPFKS4vKvENgIxa5K3P6BCf4t33oX2D.', NULL, '2020-01-06 09:05:37', '2020-01-06 09:05:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eway_bill`
--
ALTER TABLE `eway_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eway_bill_fk0` (`reg_id`);

--
-- Indexes for table `filings`
--
ALTER TABLE `filings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gst_id` (`gst_id`,`year`,`month`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `eway_bill`
--
ALTER TABLE `eway_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filings`
--
ALTER TABLE `filings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eway_bill`
--
ALTER TABLE `eway_bill`
  ADD CONSTRAINT `eway_bill_fk0` FOREIGN KEY (`reg_id`) REFERENCES `registration` (`id`);

--
-- Constraints for table `filings`
--
ALTER TABLE `filings`
  ADD CONSTRAINT `filings_ibfk_1` FOREIGN KEY (`gst_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
