-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 07:18 PM
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
(16, 'dhg', 'fghdgg', 'dfgjhdthnj', 'f5', 'xfgfgn@g.com', 'dfgb', 'dfb', '1', '1', NULL, '2020-05-20 11:34:30', '2020-05-20 11:34:30'),
(17, 'RAJ KUMAR MANISH KUMAR', '184545HDJHDD77777', 'dfgjhdthnj', 'f5', 'abhi02blp@gmail.com', 'GHHHH', 'dfb', '2', '2', NULL, '2020-05-20 11:35:01', '2020-05-20 11:35:01'),
(18, 'dhg', '184545HDJHDD77777', 'TULSIPUR', '1234567890', 'abhi02blp@gmail.com', 'GHHHH', 'DJKFND', '2', '2', NULL, '2020-05-20 11:37:48', '2020-05-20 11:37:48'),
(19, 'SHRI GOPAL RAJ KUMAR update', '184545HDJHDD777', 'BHAGWATIGANJ   BALRAMPUR', '08299120767', 'shukla98abhishek@gmail.com', 'dfgadfg', 'dzfhg', '1', '1', NULL, '2020-05-20 13:18:26', '2020-05-20 13:18:26'),
(21, 'shri gopal', '09AIBPK6845PL66', 'BHAGWTIGANJ', '9984842773', 'ABHI02BLP@GMAIL.COM', '9919173424', 'JGDJGD', '1', '1', NULL, '2020-05-20 16:03:56', '2020-05-21 17:49:03'),
(22, 'लालता', '09AIBPK6845PL66', 'KURMIDEEH', '7398130779', 'ABHI01REG@GMAIL.COM', 'ABHI01REG@GMAIL.COM', 'JGDJGD', '1', '1', NULL, '2020-05-20 16:16:03', '2020-05-20 16:16:03'),
(23, 'RAJ KUMAR MANISH KUMAR', 'sdfgsdfghtfghfg', 'dfgjhdthnj', '9985884785', 'vinwaladiesel@gmail.com', 'dfgb', 'dfb', '1', '1', NULL, '2020-05-23 07:49:15', '2020-05-23 07:49:15'),
(24, 'SHRI GOPAL RAJ KUMAR  edit final final', 'sdfgsdfghtfghfg', 'dfgjhdthnj', 'f5', 'admin@admin.com', 'dfgb', 'DJKFND', '1', '1', NULL, '2020-05-23 07:49:28', '2020-05-23 07:49:28'),
(25, 'SHRI GOPAL RAJ KUMAR opoo', 'sdfgsdfghtfghfg', 'dfgjhdthnj', 'f5', 'admin@admin.com', 'GHHHH', 'dfb', '2', '2', NULL, '2020-05-23 07:49:43', '2020-05-23 07:49:43'),
(26, 'SHRI GOPAL RAJ KUMAR  edit final', 'fghdgg', 'TULSIPUR', '1234567890', 'admin@admin.com', 'dfgb', 'dfb', '1', '1', NULL, '2020-05-23 07:49:57', '2020-05-23 07:49:57'),
(27, 'RAJ KUMAR MANISH KUMAR', 'sdfgsdfghtfghfg', 'dfgjhdthnj', '9985884785', 'admin@admin.com', 'dfgb', 'DJKFND', '1', '1', NULL, '2020-05-23 07:50:13', '2020-05-23 07:50:13'),
(28, 'dhg', 'fghdgg', 'dfgjhdthnj', 'f5', 'admin@admin.com', 'dfgb', 'dfb', '1', '1', NULL, '2020-05-23 07:50:27', '2020-05-23 07:50:27'),
(29, 'SHRI GOPAL RAJ KUMAR update', 'fghdgg', 'TULSIPUR', '9985884785', 'vinwaladiesel@gmail.com', 'dfgb', 'dfb', '1', '1', NULL, '2020-05-23 07:50:43', '2020-05-23 07:50:43'),
(30, 'MAHAVEER TRADERS', 'KSJDDFKLASGJCFH', 'BHAGEATIGANJ', '9985884785', 'SMDVNBSD@GMAIL.COM', 'HSADFJKH', 'JKWHFJK', '1', '1', NULL, '2020-05-23 07:51:26', '2020-05-23 07:51:26');

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
(75, 11, '2019-20', '1', NULL, 1, 0, 1, 1, '2020-05-19', '2020-05-20'),
(77, 13, '2019-20', '1', NULL, 1, 0, 1, 1, '2020-05-19', '2020-05-19'),
(78, 11, '2019-20', '2', NULL, 0, 0, 1, 1, '2020-05-19', '2020-05-20'),
(84, 11, '2019-20', '5', NULL, 0, 0, 0, 0, '2020-05-20', '2020-05-20'),
(91, 11, '2019-20', '8', NULL, 1, 0, 0, 0, '2020-05-20', '2020-05-20'),
(96, 11, '2019-20', '7', NULL, 1, 0, 0, 0, '2020-05-20', '2020-05-20'),
(98, 11, '2019-20', '4', NULL, 0, 0, 0, 0, '2020-05-20', '2020-05-20'),
(101, 11, '2016-17', '6', NULL, 1, 0, 0, 0, '2020-05-20', '2020-05-20'),
(102, 15, '2019-20', '1', NULL, 1, 0, 1, 1, '2020-05-20', '2020-05-20'),
(103, 15, '2019-20', '2', NULL, 1, 0, 1, 1, '2020-05-20', '2020-05-20'),
(104, 21, '2019-20', '2', NULL, 1, 0, 1, 1, '2020-05-20', '2020-05-20'),
(106, 21, '2019-20', '3', NULL, 1, 0, 0, 1, '2020-05-20', '2020-05-21'),
(107, 19, '2019-20', '11', NULL, 0, 0, 0, 0, '2020-05-20', '2020-05-20'),
(109, 15, '2019-20', '6', NULL, 0, 0, 0, 1, '2020-05-20', '2020-05-20'),
(110, 21, '2019-20', '6', NULL, 1, 0, 1, 1, '2020-05-21', '2020-05-21'),
(112, 21, '2019-20', '5', NULL, 1, 0, 1, 1, '2020-05-21', '2020-05-21'),
(113, 16, '2018-19', '11', NULL, 1, 0, 1, 1, '2020-05-23', '2020-05-23'),
(115, 26, '2017-18', '6', NULL, 0, 0, 0, 0, '2020-05-23', '2020-05-23'),
(116, 26, '2019-20', '2', NULL, 1, 0, 1, 1, '2020-05-23', '2020-05-23'),
(117, 16, '2018-19', '6', NULL, 0, 0, 0, 1, '2020-05-23', '2020-05-23'),
(118, 23, '2019-20', '6', NULL, 0, 0, 0, 0, '2020-05-23', '2020-05-23'),
(119, 16, '2017-18', '6', NULL, 1, 0, 1, 1, '2020-05-23', '2020-05-23'),
(120, 16, '2019-20', '3', NULL, 0, 0, 0, 0, '2020-05-23', '2020-05-23'),
(121, 16, '2019-20', '6', NULL, 0, 0, 0, 0, '2020-05-23', '2020-05-23'),
(123, 16, '2019-20', '4', NULL, 1, 0, 1, 1, '2020-05-23', '2020-05-23'),
(125, 16, '2019-20', '12', NULL, 1, 0, 1, 1, '2020-05-23', '2020-05-23'),
(126, 16, '2019-20', '7', NULL, 1, 0, 1, 1, '2020-05-23', '2020-05-23'),
(127, 16, '2019-20', '2', NULL, 1, 0, 1, 0, '2020-05-23', '2020-05-23'),
(129, 16, '2016-17', '4', NULL, 1, 0, 0, 0, '2020-05-23', '2020-05-23'),
(132, 16, '2019-20', '9', NULL, 1, 0, 0, 0, '2020-05-23', '2020-05-23'),
(134, 16, '2017-18', '3', NULL, 1, 0, 0, 0, '2020-05-23', '2020-05-23'),
(136, 16, '2016-17', '11', NULL, 1, 0, 1, 0, '2020-05-23', '2020-05-23'),
(139, 16, '2019-20', '5', NULL, 1, 0, 0, 0, '2020-05-23', '2020-05-23'),
(140, 24, '2019-20', '1', NULL, 0, 0, 1, 1, '2020-05-23', '2020-05-23'),
(141, 24, '2019-20', '2', NULL, 1, 0, 0, 0, '2020-05-23', '2020-05-23'),
(142, 24, '2019-20', '6', NULL, 0, 0, 0, 1, '2020-05-23', '2020-05-24'),
(143, 24, '2019-20', '5', NULL, 0, 0, 1, 1, '2020-05-23', '2020-05-23'),
(145, 24, '2019-20', '12', NULL, 1, 0, 0, 1, '2020-05-23', '2020-05-23'),
(147, 16, '2015-16', '3', NULL, 1, 0, 1, 0, '2020-05-24', '2020-05-24'),
(148, 16, '2016-17', '9', NULL, 0, 0, 0, 0, '2020-05-24', '2020-05-24'),
(149, 16, '2017-18', '5', NULL, 1, 0, 0, 0, '2020-05-24', '2020-05-24'),
(150, 26, '2019-20', '1', NULL, 0, 0, 1, 0, '2020-05-24', '2020-05-24'),
(151, 26, '2019-20', '3', NULL, 0, 0, 1, 0, '2020-05-24', '2020-05-24'),
(152, 26, '2019-20', '6', NULL, 0, 0, 1, 0, '2020-05-24', '2020-05-24'),
(153, 16, '2019-20', '11', NULL, 0, 0, 1, 0, '2020-05-24', '2020-05-24'),
(155, 23, '2019-20', '2', NULL, 1, 0, 0, 0, '2020-05-24', '2020-05-24'),
(156, 23, '2019-20', '1', NULL, 1, 0, 0, 1, '2020-05-24', '2020-05-24'),
(157, 23, '2019-20', '3', NULL, 0, 0, 0, 1, '2020-05-24', '2020-05-24'),
(159, 23, '2019-20', '9', NULL, 1, 0, 0, 1, '2020-05-24', '2020-05-24'),
(160, 23, '2019-20', '5', NULL, 1, 0, 0, 0, '2020-05-24', '2020-05-24'),
(161, 23, '2019-20', '12', NULL, 1, 0, 0, 1, '2020-05-24', '2020-05-24'),
(163, 23, '2018-19', '1', NULL, 1, 0, 0, 1, '2020-05-24', '2020-05-24'),
(164, 23, '2015-16', '7', NULL, 0, 0, 1, 0, '2020-05-24', '2020-05-24'),
(165, 23, '2016-17', '2', NULL, 1, 0, 0, 0, '2020-05-24', '2020-05-24'),
(166, 23, '2016-17', '8', NULL, 1, 0, 0, 0, '2020-05-24', '2020-05-24'),
(168, 23, '2016-17', '3', NULL, 0, 0, 1, 0, '2020-05-24', '2020-05-24'),
(169, 28, '2019-20', '4', NULL, 1, 0, 0, 0, '2020-05-24', '2020-05-24'),
(170, 28, '2019-20', '1', NULL, 1, 0, 0, 1, '2020-05-24', '2020-05-24');

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
('ing0WGhGxsyzzbZBb94PdzAjYwspKFG6SJefv6DH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRE5yMkNnN2pMTUtmTTRzSnFEVnNVc3BGanlXNXp2NkpjTzNmQWl2eCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlLzI2Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1590302159),
('KvXwaNhgq2tT8AcdpMllZVe1QkXQfHMsv6tNqlc1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZFZkbmZZM2RDVUFyQ1gxNXVMcUh1VHZkNEJlMmNGZFA0SlU0ZkhabSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlLzI4Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1590339845),
('TLtT6nss8elsJ6YyCN5vQrnY0mcpmvwpluzBGEUf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXcyTkxJeGdtbWRreXVkRGlkVWwyUmRydVRBbkk3WDZLbFBjNW5WUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlLzI0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1590260271),
('Xo8aMhxl70t6ri13insQnuL2Io5T9DO5sLmlz0Ay', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOEFnM3VMblZ4MWhPVllhaVZwTVN5WU1hUEpOT0JWVVZzTWlzS20xVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlLzE2Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1590312784);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `eway_bill`
--
ALTER TABLE `eway_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filings`
--
ALTER TABLE `filings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
