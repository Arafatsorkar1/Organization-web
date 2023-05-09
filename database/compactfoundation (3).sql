-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 07:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compactfoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesments`
--

CREATE TABLE `assesments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `pdf` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assesments`
--

INSERT INTO `assesments` (`id`, `name`, `pdf`, `created_at`, `updated_at`) VALUES
(2, 'Arafat Sorkar', 'backend/img/971.pdf', '2023-04-12 03:21:58', '2023-04-12 03:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `cirtificats`
--

CREATE TABLE `cirtificats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `pdf` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cirtificats`
--

INSERT INTO `cirtificats` (`id`, `name`, `pdf`, `created_at`, `updated_at`) VALUES
(2, 'Arafat Sorkar', 'backend/img/516.pdf', '2023-04-12 03:22:09', '2023-04-12 03:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `currents`
--

CREATE TABLE `currents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `short` text DEFAULT NULL,
  `long` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currents`
--

INSERT INTO `currents` (`id`, `name`, `short`, `long`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Arafat Sorkar', 'Arafat', 'sssss ddd', 'backend/img/192.png', '2023-04-11 09:26:40', '2023-04-11 09:50:27'),
(3, 'Arafat Sorkar', 'Arafat', 'wewe', 'backend/img/585.jpg', '2023-04-11 12:04:49', '2023-04-11 12:04:49'),
(4, 'wewew', 'wewewe', 'wewewe', 'backend/img/605.jpg', '2023-04-11 12:04:56', '2023-04-11 12:04:56'),
(5, 'Arafat Sorkar', 'Arafat', 'sdffeffwefwef', 'backend/img/94.jpg', '2023-04-11 12:06:14', '2023-04-11 12:06:14'),
(6, 'fwef', 'fdwefdwefwf', 'wefwefwefwef', 'backend/img/945.jfif', '2023-04-11 12:06:23', '2023-04-11 12:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `pdf` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `pdf`, `created_at`, `updated_at`) VALUES
(2, 'ARAFAT MIA', 'backend/img/352.pdf', '2023-04-12 02:03:47', '2023-04-12 02:03:47'),
(3, 'ARAFAT MIA', 'backend/img/813.pdf', '2023-04-12 02:11:16', '2023-04-12 02:11:16'),
(4, 'Arafat Mia', 'backend/img/378.pdf', '2023-04-12 02:12:17', '2023-04-12 02:12:17'),
(5, 'Arafat Sorkar', 'backend/img/pdf/572.pdf', '2023-04-12 02:26:21', '2023-04-12 02:26:21'),
(6, 'Arafat Sorkar', 'backend/img/paper/581.pdf', '2023-04-12 02:27:02', '2023-04-12 02:27:02'),
(7, 'Arafat Mia', 'backend/img/paper/59.pdf', '2023-04-12 02:31:12', '2023-04-12 02:31:12'),
(8, 'Arafat Mia', 'backend/img/52.pdf', '2023-04-12 02:34:53', '2023-04-12 02:34:53'),
(9, 'Arafat Mia', 'backend/img/file/316.pdf', '2023-04-12 02:36:25', '2023-04-12 02:36:25'),
(10, 'Arafat Sorkar', 'backend/img/pdf/472.pdf', '2023-04-12 02:52:34', '2023-04-12 02:52:34'),
(11, 'Arafat Sorkar', 'backend/img/553.pdf', '2023-04-12 03:19:02', '2023-04-12 03:19:02'),
(12, 'Arafat Sorkar', 'backend/img/539.pdf', '2023-04-12 03:19:21', '2023-04-12 03:19:21'),
(13, 'Arafat Sorkar', 'backend/img/501.pdf', '2023-04-12 03:19:25', '2023-04-12 03:19:25'),
(14, 'aaaa', 'backend/img/246.pdf', '2023-04-13 02:07:10', '2023-04-13 02:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `futures`
--

CREATE TABLE `futures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `short` text DEFAULT NULL,
  `long` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `futures`
--

INSERT INTO `futures` (`id`, `name`, `short`, `long`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Arafat Sorkar', 'Arafat', 'i am arafat Sorkar', 'backend/img/167.jpg', '2023-04-11 07:42:59', '2023-04-11 07:42:59'),
(10, 'Arafat Sorkar', 'Arafat', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'backend/img/182.jpg', '2023-04-11 09:58:16', '2023-04-11 09:58:16'),
(11, 'wwww', 'wwwwwww', 'wwww', 'backend/img/407.jpg', '2023-04-13 04:21:20', '2023-04-13 04:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, 'backend/img/Gallery/983.jpg', '2023-04-12 00:39:12', '2023-04-12 00:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` text DEFAULT NULL,
  `occopetation` text DEFAULT NULL,
  `trainee_Name` text DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` text DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `reg` varchar(255) DEFAULT NULL,
  `assessment` text DEFAULT NULL,
  `income` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `session`, `occopetation`, `trainee_Name`, `designation`, `name`, `address`, `country`, `from`, `to`, `mobile`, `type`, `reg`, `assessment`, `income`, `created_at`, `updated_at`) VALUES
(2, 'a', 'd', 'g', 'we', 'r', 'r', 'e', 'e', 'd', '3334333', 'ed', 'ds', 'e', 'e', '2023-04-09 03:12:47', '2023-04-09 11:56:12'),
(5, 'HJDHJKSF', 'HJKJK', 'WEEE', 'JJ', 'KJ', 'KJ', 'KJ', 'K', 'JK', '1234', 'K', 'M', 'K', 'K', '2023-04-10 05:52:26', '2023-04-10 05:52:45'),
(6, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '223', 'a', '22', '11', '11', '2023-04-13 02:10:16', '2023-04-13 02:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_09_071130_create_sessions_table', 1),
(7, '2023_04_09_081005_create_members_table', 2),
(8, '2023_04_11_070550_create_futures_table', 3),
(9, '2023_04_11_151624_create_currents_table', 4),
(10, '2023_04_12_055816_create_galleries_table', 5),
(11, '2023_04_12_073106_create_files_table', 6),
(12, '2023_04_12_081718_create_cirtificats_table', 7),
(13, '2023_04_12_084318_create_assesments_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ff592ed4G8OwFU3SJ7kQ4euqdLhgd5Y3Cj7pNDvt', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibE1oSmdFUXNjMGp0OU96MUdZMTN3akJYYmhkd2UySE80QWpIOEFENyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvY2xpZW50c19zaWRlL3B1YmxpYyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkOUtjWHZYQ1ZEQTZxOHFOYXlRYWJ1ZTBMeFBDdDdYNDBMVFMwQXA3d1BLODFkL3lGOTduQ0ciO30=', 1681381317),
('inrkIINrlBFkFcfwdYl1ujwn22mrHhQJOPaE8GrG', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.39', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYVA4UWI4b1JGM29VODZhckk2N1MwSTVZNklBZkQ4Q0NKWVc3RWhwNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9sb2NhbGhvc3QvY2xpZW50c19zaWRlL3B1YmxpYy9tZW1iZXJzL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkOUtjWHZYQ1ZEQTZxOHFOYXlRYWJ1ZTBMeFBDdDdYNDBMVFMwQXA3d1BLODFkL3lGOTduQ0ciO30=', 1681373416),
('socKJUyMTbmFigWISAGC1Ee777WpDV6nQvpqda6e', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2N1U3BGbzY2RnRFaHdNdTg2YW5WYjhQOGZXeDRrTXFxYW5HMFVMQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvY2xpZW50c19zaWRlL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1682767453);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Arafat Sorkar', 'arafatbit18@gmail.com', NULL, '$2y$10$9KcXvXCVDA6q8qNayQabue0LxPCt7X40LTS0Ap7wPK81d/yF97nCG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-09 01:34:01', '2023-04-09 01:34:01'),
(3, 'Compact foundation', 'compactfoundation@gmail.com', NULL, '$2y$10$DZvpX2fz/HfNjW6tR0MoLOth6IDOdNFKT4TtJ/8H1JmGttRJwPW1O', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-12 03:27:07', '2023-04-12 03:27:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cirtificats`
--
ALTER TABLE `cirtificats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currents`
--
ALTER TABLE `currents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `futures`
--
ALTER TABLE `futures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `assesments`
--
ALTER TABLE `assesments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cirtificats`
--
ALTER TABLE `cirtificats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currents`
--
ALTER TABLE `currents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `futures`
--
ALTER TABLE `futures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
