-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 06, 2024 at 02:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rinart_v6`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `extra1`, `extra2`, `extra3`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Business Cards', 'business-cards', NULL, NULL, NULL, 1, '2024-06-29 10:01:54', '2024-07-04 07:48:53'),
(3, 'T-shirts', 't-shirts', NULL, NULL, NULL, 1, '2024-06-29 10:02:32', '2024-06-29 10:02:32'),
(4, 'Bags', 'bags', NULL, NULL, NULL, 1, '2024-06-29 10:03:11', '2024-06-29 10:03:11'),
(5, 'Customer Design', 'customer-design', NULL, NULL, NULL, 0, '2024-06-29 10:04:14', '2024-07-04 07:48:21'),
(6, 'Marketing Materials', 'marketing-materials', NULL, NULL, NULL, 1, '2024-07-04 07:48:40', '2024-07-04 07:48:40'),
(7, 'Stickers', 'stickers', NULL, NULL, NULL, 1, '2024-07-04 07:49:08', '2024-07-04 07:49:08'),
(8, 'Banners', 'banners', NULL, NULL, NULL, 1, '2024-07-04 07:49:46', '2024-07-04 07:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `ctas`
--

CREATE TABLE `ctas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `btn` varchar(255) DEFAULT NULL,
  `btn_url` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `extra5` varchar(255) DEFAULT NULL,
  `extra6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ctas`
--

INSERT INTO `ctas` (`id`, `name`, `title`, `description`, `btn`, `btn_url`, `video_url`, `image`, `extra1`, `extra2`, `extra3`, `extra5`, `extra6`, `created_at`, `updated_at`) VALUES
(1, '100% Original Products', 'Peach Color Up Neck Blouson Top.', 'This Month From $59.00', 'Show More', 'https://www.google.com/', 'https://www.google.com/', 'uploads/cta/media_6686cc8f588c1.png', NULL, NULL, NULL, NULL, NULL, '2024-06-29 00:49:34', '2024-07-04 23:23:43');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_28_001509_create_sliders_table', 2),
(6, '2024_06_29_004318_create_ctas_table', 3),
(7, '2024_06_29_023539_create_categories_table', 4),
(9, '2024_06_29_032134_create_sub_categories_table', 5),
(10, '2024_07_04_010615_create_products_table', 6),
(11, '2024_07_04_024210_create_product_galleries_table', 7),
(13, '2024_07_04_032921_create_product_variants_table', 8),
(14, '2024_07_04_041733_create_variant_items_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('test@gmail.com', '$2y$12$8mlC5X3kN.CUCIhMb4D7WulroijFCrSfBQmaVv/qwHZfyklmJIeji', '2024-06-28 01:10:46'),
('user@gmail.com', '$2y$12$81pL6tSY3JcQm7vx.Q8gp..5x96uj4fOsY7XhG3J3DEJHDgzOSxkm', '2024-06-28 23:22:26');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `barcode` text DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `additional_metafield1` text DEFAULT NULL,
  `additional_metafield2` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `video_link` text DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `offer_start_date` date DEFAULT NULL,
  `offer_end_date` date DEFAULT NULL,
  `is_best_deal` tinyint(1) DEFAULT NULL,
  `is_best_seller` tinyint(1) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `is_event` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `extra4` varchar(255) DEFAULT NULL,
  `extra5` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `name`, `slug`, `image`, `qty`, `stock`, `origin`, `barcode`, `weight`, `height`, `size`, `additional_metafield1`, `additional_metafield2`, `short_description`, `long_description`, `video_link`, `sku`, `price`, `discount_price`, `offer_start_date`, `offer_end_date`, `is_best_deal`, `is_best_seller`, `is_featured`, `is_event`, `status`, `is_approved`, `seo_title`, `seo_description`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 2, 'T-shirts Name', 't-shirts-name', 'uploads/products/ginseng 827.webp', 1, '1', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '0011002200', 200, NULL, '2024-07-10', '2024-07-31', 0, 0, 1, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-04 01:12:08', '2024-07-05 01:49:47'),
(3, NULL, 2, 1, 'Business Card Product', 'business-card-product', 'uploads/products/birdsnest5.webp', NULL, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, 'test', '<p>test</p>', NULL, '123456', 100, 89.99, '2024-07-03', '2024-07-03', 1, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-04 08:39:29', '2024-07-05 01:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `gallery_image`, `status`, `extra1`, `extra2`, `extra3`, `created_at`, `updated_at`) VALUES
(2, 3, 'uploads/product_gallery/media_668613b9cfc15.webp', 1, NULL, NULL, NULL, '2024-07-04 10:15:05', '2024-07-04 10:15:05'),
(3, 3, 'uploads/product_gallery/media_668613bf2b8b5.webp', 1, NULL, NULL, NULL, '2024-07-04 10:15:11', '2024-07-04 10:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Size', 1, '2024-07-04 10:45:13', '2024-07-04 10:45:13'),
(2, 1, 'Color', 1, '2024-07-04 10:45:50', '2024-07-04 10:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `btn` varchar(255) DEFAULT NULL,
  `btn_url` varchar(255) DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `extra5` varchar(255) DEFAULT NULL,
  `extra6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `title`, `description`, `btn`, `btn_url`, `image1`, `image2`, `status`, `extra1`, `extra2`, `extra3`, `extra5`, `extra6`, `created_at`, `updated_at`) VALUES
(4, 'Sản Phẩm Mới', 'Chất lượng in ấn tốt nhất và nhanh nhất', 'Tạo ấn tượng đầu tiên chuyên nghiệp với dịch vụ In Name Card, thiết kế độc đáo và chất lượng. Thiết kế độc đáo và chất lượng.', 'Gửi cho tôi dự án của bạn', 'https://www.google.com/', 'uploads/slider/media_6686fe8725ad5.png', 'uploads/slider/media_6686fe8725ee8.png', 1, NULL, NULL, NULL, NULL, NULL, '2024-06-28 08:00:05', '2024-07-05 02:56:55'),
(8, 'Bạn cần in gì?', 'Hãy thử dịch vụ tốt nhất của chúng tôi', 'Tạo ấn tượng đầu tiên chuyên nghiệp với dịch vụ In Name Card, thiết kế độc đáo và chất lượng. Thiết kế độc đáo và chất lượng.', 'Gửi tôi dự án của bạn', 'https://www.google.com/', 'uploads/slider/media_6686fe78590ef.png', 'uploads/slider/media_6686fe7859237.png', 1, NULL, NULL, NULL, NULL, NULL, '2024-06-29 07:32:27', '2024-07-05 02:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `status`, `extra1`, `extra2`, `extra3`, `created_at`, `updated_at`) VALUES
(1, 2, 'Soft Card', 'soft-card', 1, NULL, NULL, NULL, '2024-06-29 03:29:24', '2024-06-29 10:53:26'),
(2, 3, 'Black', 'black', 1, NULL, NULL, NULL, '2024-06-29 10:49:13', '2024-06-29 10:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` text NOT NULL DEFAULT '/uploads/User-avatar.png',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('user','admin','super_admin') NOT NULL DEFAULT 'user',
  `role_special` tinyint(1) DEFAULT 0,
  `phone` varchar(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `role`, `role_special`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '/uploads/profile/Screenshot 2024-02-28 at 11.47.41 AM.png', 'Super Admin', 'admin@gmail.com', 'admin', 1, NULL, NULL, '$2y$12$tIWBMqe8S7fUvAabCsi7ZOqFQUBg7.ZpsTP2WEz8wZFEz72OHaMoO', NULL, NULL, '2024-06-28 02:00:46'),
(3, '/uploads/User-avatar.png', 'Admin', 'web@gmail.com', 'admin', 0, NULL, NULL, '$2y$12$L/YYE2gBbk8PF2B0.0pvTOPykBEFtzTHg.MyQLe4kxWThNxeqaiQG', NULL, '2024-06-27 04:57:13', '2024-06-27 04:57:13'),
(4, '/uploads/User-avatar.png', 'User', 'user@gmail.com', 'user', NULL, '123456789', NULL, '$2y$12$svQsGCPBg.lrwzcfIgr6b.FMSajaXjPWcmS4qKlV9jhwqt06N4A8y', NULL, '2024-06-27 04:57:55', '2024-06-28 03:48:43'),
(5, '/uploads/User-avatar.png', 'test', 'test@gmail.com', 'user', NULL, NULL, NULL, '$2y$12$vBXDTpptjnCaPG.SyjLXOOAGIAYawH1nyXPLwMyc2ag7uT/3gIROK', NULL, '2024-06-28 00:42:31', '2024-06-28 00:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `variant_items`
--

CREATE TABLE `variant_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_variant_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variant_items`
--

INSERT INTO `variant_items` (`id`, `product_variant_id`, `name`, `price`, `is_default`, `status`, `extra1`, `extra2`, `created_at`, `updated_at`) VALUES
(1, 2, 'Black', 100, 1, 1, NULL, NULL, '2024-07-04 11:45:31', '2024-07-04 12:09:32'),
(2, 2, 'White', 120, 1, 1, NULL, NULL, '2024-07-04 11:54:46', '2024-07-04 11:54:46'),
(3, 2, 'Green', 80, 1, 1, NULL, NULL, '2024-07-04 11:59:25', '2024-07-04 11:59:25'),
(4, 2, 'Blue', 25, 1, 1, NULL, NULL, '2024-07-04 11:59:46', '2024-07-04 11:59:46'),
(5, 2, 'Yellow', 99.99, 1, 1, NULL, NULL, '2024-07-04 12:01:12', '2024-07-04 12:01:12'),
(7, 1, 'Small', 50.99, 1, 1, NULL, NULL, '2024-07-04 12:11:43', '2024-07-04 12:11:43'),
(8, 1, 'Large', 69.99, 1, 1, NULL, NULL, '2024-07-04 12:11:53', '2024-07-04 12:11:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctas`
--
ALTER TABLE `ctas`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variant_items`
--
ALTER TABLE `variant_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `variant_items_product_variant_id_foreign` (`product_variant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ctas`
--
ALTER TABLE `ctas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `variant_items`
--
ALTER TABLE `variant_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `variant_items`
--
ALTER TABLE `variant_items`
  ADD CONSTRAINT `variant_items_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
