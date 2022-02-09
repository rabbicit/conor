-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2022 at 08:40 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conor`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'veniam blanditiis', 'veniam-blanditiis', '2022-02-07 21:51:28', '2022-02-07 21:51:28'),
(2, 'delectus ea', 'delectus-ea', '2022-02-07 21:51:28', '2022-02-07 21:51:28'),
(3, 'aliquid consequatur', 'aliquid-consequatur', '2022-02-07 21:51:28', '2022-02-07 21:51:28'),
(4, 'eaque quaerat', 'eaque-quaerat', '2022-02-07 21:51:28', '2022-02-07 21:51:28'),
(5, 'odio quo', 'odio-quo', '2022-02-07 21:51:28', '2022-02-07 21:51:28'),
(6, 'distinctio voluptatem', 'distinctio-voluptatem', '2022-02-07 21:51:28', '2022-02-07 21:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'sdfdsfdsf', 'dssdfdsf@gmail.com', '1234567890', 'sdf sdf dsfsdf dsf dsf ', '2022-01-23 00:56:33', '2022-01-23 00:56:33'),
(2, 'Test Name', 'testuser@gmail.com', '1234567890', 'Testmessage', '2022-01-23 01:46:41', '2022-01-23 01:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_22_194113_create_contacts_table', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(7, '2022_01_22_202725_create_sessions_table', 2),
(8, '2022_02_07_082618_create_categories_table', 3),
(9, '2022_02_07_082647_create_products_table', 3),
(10, '2019_05_03_000001_create_customer_columns', 4),
(11, '2019_05_03_000002_create_subscriptions_table', 4),
(12, '2019_05_03_000003_create_subscription_items_table', 4),
(13, '2020_05_21_100000_create_teams_table', 4),
(14, '2020_05_21_200000_create_team_user_table', 4),
(15, '2020_05_21_300000_create_team_invitations_table', 4),
(16, '2022_02_07_201804_add_extra_to_team_table', 5),
(17, '2022_02_08_142554_update_users_table', 6),
(18, '2022_02_08_143415_update_user_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `image`, `gallery`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'possimus earum ipsa', 'possimus-earum-ipsa', 'Quibusdam illo sit debitis architecto reiciendis praesentium ea. Rerum molestiae ea reprehenderit qui qui ut sequi. Vitae incidunt vel atque animi dicta est. Ut enim est et expedita.', 'Qui alias sunt quia nihil voluptas magni neque. Rerum qui saepe quia voluptatum omnis. Quisquam iste dolores nesciunt ratione quibusdam occaecati id. Rem nobis expedita est ut et aut ipsum. Ab earum est iste recusandae harum omnis aut. Aut perferendis omnis ea libero quod ea. Ipsa error quia omnis nihil. Inventore quia optio suscipit inventore cumque qui. Veritatis qui ea natus corporis minus. Eligendi eius occaecati cumque dicta illo. Cumque corporis sapiente eius aut et ea.', '414.00', NULL, 'PRD199', 'gallery1.jpg', NULL, 5, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(2, 'quo qui et', 'quo-qui-et', 'Quia et corrupti eligendi fuga fuga fugit. Qui excepturi est sapiente nihil dolores aut ipsa dolores.', 'Fugit eum eum ut praesentium. Enim praesentium qui autem. Quam explicabo in vero provident. Enim at ut blanditiis voluptatem et. Provident quia reprehenderit cupiditate eius aliquid laboriosam illo. Illum sed minus vitae est dolorem. Velit laborum quos voluptatibus. Velit veritatis ab a.', '462.00', NULL, 'PRD222', 'gallery8.jpg', NULL, 5, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(3, 'tempora et incidunt', 'tempora-et-incidunt', 'Est sed ut quia beatae maiores. Suscipit vero et accusamus et velit ab. Et et molestiae est quo. Eum voluptatibus optio perspiciatis repellat ut quae.', 'Voluptatem eveniet temporibus velit ab nulla pariatur. Consectetur voluptatem omnis sint minima. Natus et laudantium veritatis et enim nobis nisi. Architecto eaque explicabo id impedit. Fuga non repellendus assumenda nihil. Dolor culpa minus delectus eligendi iste nobis. Cupiditate commodi quia delectus amet eos assumenda ex. Numquam est numquam porro illum magni quaerat molestiae. Dolores nobis sit asperiores numquam laboriosam. Soluta delectus non sit dignissimos quasi harum.', '285.00', NULL, 'PRD253', 'gallery6.jpg', NULL, 4, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(4, 'ea velit molestiae', 'ea-velit-molestiae', 'Consequuntur at et commodi. Iusto temporibus minus qui nesciunt dolore quaerat. Est quo sint explicabo veniam. Id eaque et cum exercitationem rem ea molestias.', 'Explicabo ipsum ut cumque quas quo ut soluta. Amet explicabo et enim esse ab ut. Assumenda est ipsam qui dolorum nemo qui voluptas. Iure animi ratione magnam cum maxime reprehenderit et quia. Commodi ad maxime harum ab labore sint labore. Autem aspernatur molestiae voluptas dolore fuga. Magnam tempora sit veritatis omnis.', '418.00', NULL, 'PRD357', 'gallery10.jpg', NULL, 5, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(5, 'soluta omnis non', 'soluta-omnis-non', 'Suscipit suscipit consequuntur nisi doloribus aut. Autem qui corporis incidunt qui ad aut. Ducimus suscipit eveniet ut non quas est praesentium.', 'Mollitia odio quis nisi nihil dolores modi sapiente. Accusantium dolorum non qui. Qui explicabo qui accusamus facilis. In explicabo molestiae vitae blanditiis eum eius placeat. Commodi ullam fuga officiis et nisi voluptate non. Architecto excepturi recusandae nesciunt. Eos in ad voluptas repellat. Accusantium eveniet culpa rerum nulla ad.', '171.00', NULL, 'PRD151', 'gallery7.jpg', NULL, 4, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(6, 'laboriosam excepturi officiis', 'laboriosam-excepturi-officiis', 'Sit eius rerum ipsa. In illum eveniet tenetur natus illo sed. Harum excepturi id accusamus eligendi ipsa iure. Ducimus sunt et iure vero doloribus.', 'Assumenda in iusto provident autem et. Quas accusantium vel quo aspernatur. Impedit ad quia voluptatem et ad est in. Velit aut sunt qui est aut. Molestias deserunt enim non dolores voluptatem. Dolorem et nam non officiis. Suscipit nam sit eos voluptas hic fugit natus. Iusto quo natus voluptatem repellat. Sunt molestiae quo incidunt voluptas. Eum aut quia voluptas dignissimos aut.', '169.00', NULL, 'PRD176', 'gallery5.jpg', NULL, 1, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(7, 'est quis omnis', 'est-quis-omnis', 'Quasi rerum nemo quam et quia eligendi qui. Facilis ea omnis vel quis. Odit officiis laboriosam est dolor. Beatae fuga neque mollitia quibusdam. Iure facilis necessitatibus et sed perspiciatis.', 'Est vitae impedit deleniti officia veritatis. Corrupti illo sed natus et beatae facere qui. Omnis itaque commodi a aut assumenda quae ipsum ex. Harum dignissimos esse atque voluptatem ea vitae ad aliquid. Rem vel consequatur eos ut hic doloremque quam. Nemo nihil odio maxime sunt officia quo ipsum. Saepe nemo eum est rerum aliquid magni. Doloribus consequatur sed non sunt quod rerum et. Corporis est doloribus quia vel hic quis. Id ut et ad molestiae.', '485.00', NULL, 'PRD326', 'gallery2.jpg', NULL, 1, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(8, 'numquam mollitia cumque', 'numquam-mollitia-cumque', 'Non accusamus magni sequi incidunt eos sed. Omnis ipsa expedita vero cum rerum ex velit. Rerum enim asperiores aliquam voluptatem.', 'Cupiditate molestias molestias alias error modi assumenda. Doloribus consequatur quis non ut neque dolores sequi. Quos aut impedit saepe ipsa. Aut deserunt repellendus nulla aut. Laborum quaerat accusantium dolorum veritatis facilis. Vero commodi qui quaerat. Est voluptatem magnam explicabo quos sed. Unde hic laudantium voluptatem ut sit libero. Molestias molestiae atque vero deserunt optio. Quaerat quibusdam dolorem harum deserunt. Quam dolorum aut illum voluptate culpa cum.', '409.00', NULL, 'PRD268', 'gallery9.jpg', NULL, 5, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(9, 'praesentium corporis dolores', 'praesentium-corporis-dolores', 'Id quasi aliquam veniam est. Beatae recusandae exercitationem nobis eum corporis laudantium numquam incidunt. Animi eum sequi animi nesciunt quo dolor rem aspernatur.', 'Quae omnis accusantium et sit sint blanditiis delectus. Modi dolor porro illum est non eos omnis. Voluptatem dolorum nobis dolores et ea cupiditate. Libero eligendi rerum quia sit. Laboriosam quia id consequatur aut. Repudiandae omnis nihil harum aut asperiores. Qui atque hic quos id iure. Voluptas asperiores et sit consequatur voluptatem voluptatem numquam.', '398.00', NULL, 'PRD338', 'gallery4.jpg', NULL, 1, '2022-02-07 21:59:12', '2022-02-07 21:59:12'),
(10, 'quis facilis nihil', 'quis-facilis-nihil', 'Eum et sed maiores soluta ut sint. Beatae in sequi aut. Voluptatum qui incidunt quis deserunt.', 'A earum quasi est sunt quam qui aut. Officiis aspernatur ex dicta occaecati est qui at iste. Ipsam nisi necessitatibus ut inventore itaque optio explicabo. Est nobis cupiditate occaecati. Est magni est ratione enim et repudiandae. Omnis cum est quia dolores vel atque consectetur. Cumque corporis ad ab aut. Non qui sit quasi eum quo quaerat. In doloribus et vitae ipsum vero. Sint sapiente illo et aut quos. Eius repudiandae tempora totam id ut.', '185.00', NULL, 'PRD114', 'gallery3.jpg', NULL, 2, '2022-02-07 21:59:12', '2022-02-07 21:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KUvM3GalknNXlafxSEfTH4Dws0yvCnyskx6YACMG', 2, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:96.0) Gecko/20100101 Firefox/96.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUG95ZTJsUkFiclV4d2xCOWpLeUpITVlSUm05bG1sRERQVXVBaDAyUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdGFydCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRaeVlyZU15d250NU5RZHcudEhkWTBPbTIxUGxrNkJnLi5ZWWd4REZzUElUazdZTWU1a3VkTyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWnlZcmVNeXdudDVOUWR3LnRIZFkwT20yMVBsazZCZy4uWVlneERGc1BJVGs3WU1lNWt1ZE8iO30=', 1644348091);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint UNSIGNED NOT NULL,
  `subscription_id` bigint UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','member','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `role`, `address`, `city`, `state`, `zip`, `country`, `phone`, `profile_pic`) VALUES
(1, 'Test Name', 'testuser@gmail.com', NULL, '$2y$10$jpsMT/8HYunltNoo3e7yUeeanZtSHPN0tKD7Jr79csm9hoIO6shN6', NULL, NULL, NULL, '2022-01-23 01:47:25', '2022-01-23 01:47:25', NULL, NULL, NULL, NULL, 'member', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'User Name', 'useremail@gmail.com', NULL, '$2y$10$ZyYreMywnt5NQdw.tHdY0Om21Plk6Bg..YYgxDFsPITk7YMe5kudO', NULL, NULL, NULL, '2022-02-08 02:02:22', '2022-02-08 02:02:22', NULL, NULL, NULL, NULL, 'member', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_team_id_stripe_status_index` (`team_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
