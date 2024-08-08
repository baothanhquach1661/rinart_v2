-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2024 at 03:21 AM
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
-- Database: `rinart_v7`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `show_at_home` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `show_at_home`, `status`, `extra1`, `extra2`, `extra3`, `created_at`, `updated_at`) VALUES
(1, 'Đặt In Theo Yêu Cầu', 'dat-in-theo-yeu-cau', 0, 1, NULL, NULL, NULL, '2024-07-30 11:07:36', '2024-08-01 08:10:49'),
(2, 'In Áo Đồng Phục', 'in-ao-dong-phuc', 1, 0, NULL, NULL, NULL, '2024-07-30 11:09:12', '2024-07-31 20:40:29'),
(3, 'In Decal Chuyển Nhiệt', 'in-decal-chuyen-nhiet', 1, 0, NULL, NULL, NULL, '2024-07-30 11:14:42', '2024-07-31 20:38:34'),
(4, 'In Pet Chuyển Nhiệt', 'in-pet-chuyen-nhiet', 1, 0, NULL, NULL, NULL, '2024-07-30 11:15:15', '2024-07-31 20:38:40'),
(6, 'In Túi', 'in-tui', 1, 0, NULL, NULL, NULL, '2024-07-30 11:19:26', '2024-07-31 20:38:48'),
(7, 'Ấn Phẩm Văn Phòng', 'an-pham-van-phong', 1, 1, NULL, NULL, NULL, '2024-07-31 20:37:17', '2024-07-31 20:37:17'),
(8, 'Ấn Phẩm Tiếp Thị', 'an-pham-tiep-thi', 1, 1, NULL, NULL, NULL, '2024-07-31 20:37:33', '2024-07-31 20:37:33'),
(9, 'Ấn Phẩm Bao Bì', 'an-pham-bao-bi', 1, 1, NULL, NULL, NULL, '2024-07-31 20:37:48', '2024-07-31 20:37:48'),
(10, 'Sản Phẩm Khác', 'san-pham-khac', 1, 1, NULL, NULL, NULL, '2024-07-31 20:38:11', '2024-07-31 20:38:11'),
(11, 'In Nhanh', 'in-nhanh', 1, 1, NULL, NULL, NULL, '2024-07-31 20:38:20', '2024-07-31 20:38:20');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ctas`
--

INSERT INTO `ctas` (`id`, `name`, `title`, `description`, `btn`, `btn_url`, `video_url`, `image`, `extra1`, `extra2`, `extra3`, `extra5`, `created_at`, `updated_at`) VALUES
(1, '100% Original Products', 'Peach Color Up Neck Blouson Top.', 'This Month From $59.00', 'Show More', 'https://www.google.com/', 'https://www.google.com/', 'uploads/cta/media_66aaca1631f4f.png', NULL, NULL, NULL, NULL, '2024-07-31 23:23:29', '2024-08-01 06:34:46');

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
(5, '2024_07_28_151421_create_sliders_table', 2),
(7, '2024_07_30_035231_create_categories_table', 3),
(8, '2024_07_30_042314_create_sub_categories_table', 4),
(9, '2024_07_30_044700_create_products_table', 5),
(10, '2024_07_31_164019_create_product_galleries_table', 6),
(11, '2024_07_31_173426_create_product_variants_table', 7),
(12, '2024_07_31_202558_create_product_sizes_table', 8),
(13, '2024_07_31_222532_create_product_variant_items_table', 8),
(14, '2024_07_31_231608_create_ctas_table', 9);

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
('user@gmail.com', '$2y$12$FrIPBfgpf89AeczIo9b5EuhJV/n4PMHjkHf6D0fZV7DZCFHxTcm8e', '2024-07-27 11:52:27');

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
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumb_image` text DEFAULT NULL,
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

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `name`, `slug`, `thumb_image`, `qty`, `stock`, `origin`, `barcode`, `weight`, `height`, `size`, `additional_metafield1`, `additional_metafield2`, `short_description`, `long_description`, `video_link`, `sku`, `price`, `discount_price`, `offer_start_date`, `offer_end_date`, `is_best_deal`, `is_best_seller`, `is_featured`, `is_event`, `status`, `is_approved`, `seo_title`, `seo_description`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`, `created_at`, `updated_at`) VALUES
(1, 7, 8, 'Danh Thiếp Chuẩn', 'danh-thiep-chuan', 'uploads/product/media_66aa556a764a6.jpg', 1000, NULL, 'Vietnam', NULL, NULL, NULL, NULL, NULL, NULL, 'THÔNG SỐ CƠ BẢN\r\n- Màu sắc: nhiều màu \r\n- Số mặt in: 2 mặt\r\n- Loại Giấy Couche 300gsm \r\n- Kỹ thuật in: In Ghép \r\n- KT Thành Phẩm: 9x5.4cm\r\n- Cán màng : Màng mờ 2 mặt \r\n- Cắt thành phẩm', '<div class=\"txt-qd-dm-2 text-primary text-center mt-20 mb-n5\" style=\"-webkit-font-smoothing: initial; font-size: 28px; font-family: Roboto; margin-bottom: 15px; position: relative; display: flex; align-items: center; justify-content: center; text-transform: capitalize; color: rgb(31, 127, 92) !important; margin-top: 5rem !important;\"><h2 class=\"txt-qd-dm-2 text-primary\" style=\"line-height: 1.2; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 28px; overflow-wrap: break-word; -webkit-font-smoothing: initial; position: relative; display: flex; align-items: center; justify-content: center; color: rgb(31, 127, 92) !important;\"><br class=\"Apple-interchange-newline\">Danh thiếp chuẩn</h2><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(31, 127, 92); width: 110px; margin-left: 15px;\"></div></div><div itemprop=\"description\" class=\"group-related-inner \" style=\"-webkit-font-smoothing: initial; color: rgb(51, 51, 51); font-family: Roboto, Arial; font-size: 16px; padding: 25px;\"><br style=\"-webkit-font-smoothing: initial;\"><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\"><a href=\"https://thegioiinan.com/inan/84/in-name-card-in-danh-thiep-in-card-visit-in-business-card-in-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">Danh thiếp</span></a>&nbsp;với tên gọi khác Name card, Card Visit, Business Card&nbsp;là&nbsp;yếu tố quan trọng trong giao tiếp giúp doanh nghiệp quảng bá hình ảnh của mình hoặc phát triển thương hiệu cá nhân.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">Danh thiếp chuẩn</span>&nbsp;được in với kỹ thuật&nbsp;in offset 4 màu, thường sử dụng loại giấy&nbsp;Couche 300gsm và được cán&nbsp;màng&nbsp;mờ 2 mặt.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\">Với kích thước 9 x 5,4 cm&nbsp;, bạn có thể thiết kế mẫu card nằm ngang hoặc theo chiều dọc. Thông thường mẫu name card nằm ngang thì phù hợp với cách sử dụng nhiều thông tin trên tấm name card của mình, còn chiều dọc thì chỉ nên thể hiện một số thông tin cơ bản.</p><div class=\"txt-qd-dm-2 text-center mt-20 mb-n5\" style=\"-webkit-font-smoothing: initial; font-size: 28px; font-family: Roboto; color: rgb(117, 119, 118); margin-bottom: 15px; position: relative; display: flex; align-items: center; justify-content: center; text-transform: capitalize; margin-top: 5rem !important;\"><h2 class=\"txt-qd-dm-2\" style=\"line-height: 1.2; color: rgb(240, 173, 78); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 28px; overflow-wrap: break-word; -webkit-font-smoothing: initial; position: relative; display: flex; align-items: center; justify-content: center;\"><br class=\"Apple-interchange-newline\">Đóng gói giao hàng</h2><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(240, 173, 78); width: 110px; margin-left: 15px;\"></div></div><p class=\"text-center\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; color: rgb(150, 150, 150); -webkit-font-smoothing: initial; font-size: 14px;\">Khi giao hàng, Thế Giới In Ấn sẽ đóng gói 5 hộp danh thiếp trong một hộp giấy nhỏ hoặc 10 hộp danh thiếp trong một hộp giấy lớn</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\"><a style=\"color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><img alt=\"Danh thiếp chuẩn\" loading=\"lazy\" class=\"mb-20\" src=\"https://thegioiinan.com/hinhanh/sanpham/inan_84/tin_79/The_gioi_in_an_tin_images_6656eec1a2c08.png\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; margin-bottom: 5rem !important; height: auto !important;\"></a><span style=\"color: rgb(51, 51, 51);\"></span></p><div class=\"txt-qd-dm-2 text-center mt-20 mb-n5\" style=\"-webkit-font-smoothing: initial; font-size: 28px; font-family: Roboto; color: rgb(117, 119, 118); margin-bottom: 15px; position: relative; display: flex; align-items: center; justify-content: center; text-transform: capitalize; margin-top: 5rem !important;\"><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(240, 173, 78); width: 110px; margin-right: 15px;\"></div><h2 class=\"txt-qd-dm-2\" style=\"line-height: 1.2; color: rgb(240, 173, 78); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 28px; overflow-wrap: break-word; -webkit-font-smoothing: initial; position: relative; display: flex; align-items: center; justify-content: center;\">Danh thiếp chuẩn</h2><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(240, 173, 78); width: 110px; margin-left: 15px;\"></div></div><p class=\"text-center\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; color: rgb(150, 150, 150); -webkit-font-smoothing: initial; font-size: 14px;\">Giấy couche là loại giấy có màu trắng, bề mặt được tráng phủ bằng cao lanh, mặt giấy rất phẳng, bóng và mịn. Giấy couche dày và cứng hơn so với các loại giấy viết thông thường.</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\"><a style=\"color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><img alt=\"Danh thiếp chuẩn\" loading=\"lazy\" class=\"mb-20\" src=\"https://thegioiinan.com/hinhanh/sanpham/inan_84/tin_79/The_gioi_in_an_tin_images_6657d905815c2.png\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; margin-bottom: 5rem !important; height: auto !important;\"></a><span style=\"color: rgb(51, 51, 51);\"></span></p><div class=\"txt-qd-dm-2 text-center mt-20 mb-n5\" style=\"-webkit-font-smoothing: initial; font-size: 28px; font-family: Roboto; color: rgb(117, 119, 118); margin-bottom: 15px; position: relative; display: flex; align-items: center; justify-content: center; text-transform: capitalize; margin-top: 5rem !important;\"><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(240, 173, 78); width: 110px; margin-right: 15px;\"></div><h2 class=\"txt-qd-dm-2\" style=\"line-height: 1.2; color: rgb(240, 173, 78); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 28px; overflow-wrap: break-word; -webkit-font-smoothing: initial; position: relative; display: flex; align-items: center; justify-content: center;\">Cán màng bảo vệ</h2><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(240, 173, 78); width: 110px; margin-left: 15px;\"></div></div><p class=\"text-center\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; color: rgb(150, 150, 150); -webkit-font-smoothing: initial; font-size: 14px;\">Cán màng tăng thêm độ bền cho ấn phẩm. Giữ mực in không bị phai màu, không bị ố, màu sắc vẫn rõ nét, ấn phẩm có tính hiện đại và thẩm mỹ cao.</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\"><a style=\"color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><img alt=\"Danh thiếp chuẩn\" loading=\"lazy\" class=\"mb-20\" src=\"https://thegioiinan.com/hinhanh/sanpham/inan_84/tin_79/The_gioi_in_an_tin_images_6657d90581ef8.png\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; margin-bottom: 5rem !important; height: auto !important;\"></a><span style=\"color: rgb(51, 51, 51);\"></span></p><div class=\"txt-qd-dm-2 text-center mt-20 mb-n5\" style=\"-webkit-font-smoothing: initial; font-size: 28px; font-family: Roboto; color: rgb(117, 119, 118); margin-bottom: 15px; position: relative; display: flex; align-items: center; justify-content: center; text-transform: capitalize; margin-top: 5rem !important;\"><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(240, 173, 78); width: 110px; margin-right: 15px;\"></div><h2 class=\"txt-qd-dm-2\" style=\"line-height: 1.2; color: rgb(240, 173, 78); margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 28px; overflow-wrap: break-word; -webkit-font-smoothing: initial; position: relative; display: flex; align-items: center; justify-content: center;\">Tính Năng và Thông Số Kỹ Thuật</h2><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(240, 173, 78); width: 110px; margin-left: 15px;\"></div></div><p class=\"text-center\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; color: rgb(150, 150, 150); -webkit-font-smoothing: initial; font-size: 14px;\">Kích thước và ưu khuyết điểm của danh thiếp chuẩn</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\"><a style=\"color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><img alt=\"Danh thiếp chuẩn\" loading=\"lazy\" class=\"mb-20\" src=\"https://thegioiinan.com/hinhanh/sanpham/inan_84/tin_79/The_gioi_in_an_tin_images_6656eec1a4192.png\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; margin-bottom: 5rem !important; height: auto !important;\"></a><br></p></div>', NULL, '900001', 30000, NULL, NULL, NULL, 0, 0, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:16:58', '2024-08-02 09:41:21'),
(2, 7, 9, 'Bao Thư Chuẩn', 'bao-thu-chuan', 'uploads/product/media_66aa5cba280a3.jpg', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đựng vừa hóa đơn A5', '<p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">Bao thư là phương thức truyền thông giữa các doanh nghiệp, công ty với nhau và giữa các doanh nghiệp với khách hàng. </span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span id=\"docs-internal-guid-7a630252-7fff-f8fe-2b44-cf2a1507bd20\" style=\"-webkit-font-smoothing: initial;\">In bao thư </span>giúp xây dựng tính thống nhất, làm việc nghiêm túc, hình ảnh chuyên nghiệp trong các hoạt động kinh doanh của Công ty.Thiết kế của bao thư đều có hình ảnh đồng nhất với <a href=\"https://thegioiinan.com/sanphaminan/84-79/in-card-visit-gia-re-in-name-card-gia-re-in-card-gia-re-in-danh-thiep-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">danh thiếp</a>, <a href=\"https://thegioiinan.com/sanphaminan/85-97/Giay-Tieu-de-So-Luong-it-1-to-cung-in-Co-the-lay-ngay.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">giấy tiêu đề</a>,… các sản phẩm mang thương hiệu công ty để hoàn thiện hệ thống nhận diện thương hiệu của công ty.</span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">In bao thư không đơn thuần để đựng thư từ, tài liệu, thông tin để gửi đến khách hàng, các tổ chức doanh nghiệp đối tác, mà còn thể hiện sự trân trọng và lịch thiệp của công ty dành cho đối tác của mình. Sự ấn tượng, chuyên nghiệp và trang trọng của quý công ty sẽ được nâng cao hơn khi bao thư được in thông tin một cách đẹp mắt, mang thương hiệu độc quyền của chính công ty.</span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: center; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><img alt=\"\" src=\"https://thegioiinan.com/images/danhmuc/The_gioi_in_an_20191213150613379free-letter-and-envelope-mockup-psd-1000x750.jpg\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; width: 1140px; height: auto !important;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">► Sản phẩm in bao thư trung được in trên chất liệu giấy fort 120gsm. Đây là một loại giấy có định lượng vừa phải giúp bao thư cứng cáp cũng như dễ cố định tài liệu bên trong.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">► Kích thước thành phẩm của in bao thư trung  là 16x23 cm, nắp 3 cm với 2 kiểu dáng đứng và ngang</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">► Sản phẩm sẽ được dán thành phẩm một cách kỹ lưỡng, tạo nên hình dáng bao thư 1 cách hoàn chỉnh.</span></p>', NULL, '900002', 950000, NULL, NULL, NULL, 0, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:48:10', '2024-08-01 08:14:26'),
(3, 7, 10, 'Bìa Đựng Hồ Sơ Cao Cấp', 'bia-dung-ho-so-cao-cap', 'uploads/product/media_66aa5d2ac34c6.jpg', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cao cấp - Ép kim sang trọng', '<div class=\"txt-qd-dm-2 text-primary text-center mt-20 mb-n5\" style=\"-webkit-font-smoothing: initial; font-size: 28px; font-family: Roboto; margin-bottom: 15px; position: relative; display: flex; align-items: center; justify-content: center; text-transform: capitalize; color: rgb(31, 127, 92) !important; margin-top: 5rem !important;\"><h2 class=\"txt-qd-dm-2 text-primary\" style=\"line-height: 1.2; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 28px; overflow-wrap: break-word; -webkit-font-smoothing: initial; position: relative; display: flex; align-items: center; justify-content: center; color: rgb(31, 127, 92) !important;\"><br class=\"Apple-interchange-newline\">Bìa đựng hồ sơ cao cấp</h2><div class=\"hide-moble-qd-page\" style=\"-webkit-font-smoothing: initial; height: 2px; background-color: rgb(31, 127, 92); width: 110px; margin-left: 15px;\"></div></div><div itemprop=\"description\" class=\"group-related-inner \" style=\"-webkit-font-smoothing: initial; color: rgb(51, 51, 51); font-family: Roboto, Arial; font-size: 16px; padding: 25px;\"><br style=\"-webkit-font-smoothing: initial;\"><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">Trong hoạt động kinh doanh của mình, các công ty để đứng vững trên thị trường và khẳng định thương hiệu cần có những chiến lược marketing hiệu quả. Bạn cần gửi các tài liệu, bản hợp đồng quan trọng và những thông tin cần thiết đến với đối tác, khách hàng một cách trân trọng nhất. In&nbsp;<span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">bìa đựng hồ sơ, in folder&nbsp;</span>&nbsp;sẽ là ấn phẩm có chức năng chứa đựng để trao đổi những thông tin hữu ích đến cho khách hàng.</span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">Chính vì vậy mà In&nbsp;<span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">bìa đựng hồ sơ, in folder</span>&nbsp;có thiết kế tinh tế, sang trọng hẳn sẽ là sự lựa chọn hoàn hảo nhằm nâng cao tính chuyên nghiệp của công ty.</span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Sản phẩm In Bìa Hồ Sơ Cao Cấp sẽ gồm 2 tay gấp và đặc biệt mỗi bìa hồ sơ sẽ được ép kim theo yêu cầu của quý khách tạo nên ấn phẩm sang trọng, đẳng cấp, phù hợp với hình ảnh công ty.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Tay gấp sẽ được bế tỉ mỉ và góc cạnh, có khay đựng&nbsp;<a href=\"https://thegioiinan.com/sanphaminan/84-239/Danh-Thiep-ep-Kim-Card-visit-ep-nhu-Metallic-Business-Cards.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">danh thiếp</a>&nbsp;của công ty tạo nên 1 bộ nhận diện thương hiệu chuyên nghiệp.&nbsp;</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Quý khách sẽ được lựa chọn giữa in 1 mặt hoặc 2 mặt hồ sơ và chọn chất liệu cán màng mờ hoặc bóng cho sản phẩm</span></span>.</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: center; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><img alt=\"\" src=\"https://thegioiinan.com/images/danhmuc/The_gioi_in_an_20200208103930194rsz_d_hp_folders_aeaeae-.jpg\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; width: 1140px; height: auto !important;\"></span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"></span><span style=\"-webkit-font-smoothing: initial; font-size: 18px;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\"><span id=\"docs-internal-guid-d6deb62f-7fff-10ed-9866-6bef69e20c9c\" style=\"-webkit-font-smoothing: initial;\"><span style=\"font-weight: 600; -webkit-font-smoothing: initial;\">Tại sao cần có những mẫu folder đẹp</span></span></span></span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial;\">►&nbsp;<span style=\"font-weight: 600; -webkit-font-smoothing: initial;\">Chứa đựng tài liệu, hồ sơ:</span></span></span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">Folder &nbsp;dùng để chứa, đựng, bảo vệ tài liệu, hồ sơ kinh doanh như: Hợp đồng,<a href=\"https://thegioiinan.com/inan/88/in-to-gap-leaflet-brochure-booklet-profile-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">&nbsp;in&nbsp;Brochure</span></a>&nbsp;sản phẩm,&nbsp;<a href=\"https://thegioiinan.com/inan/89/in-to-roi-in-to-buom-in-flyer-in-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">In&nbsp;Tờ rơi</span></a>&nbsp;, Đĩa CD, hồ sơ báo giá,&nbsp;<a href=\"https://thegioiinan.com/inan/84/in-name-card-in-danh-thiep-in-card-visit-in-business-card-in-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">in&nbsp;card visit</a>… tất nhiên đây là những công dụng cơ bản nhất mà mỗi công ty đều cần, nhưng ngoài ra một mẫu thiết kế folder đẹp, phù hợp còn mang một ý nghĩa khác.</span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial;\">►&nbsp;</span><span style=\"-webkit-font-smoothing: initial;\"><span style=\"font-weight: 600; -webkit-font-smoothing: initial;\">Hoàn chỉnh bộ nhận diện thương hiệu:</span></span></span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">Folder là một trong những bộ phận của hệ thống thiết kế nhận diện thương hiệu văn phòng, bao gồm rất nhiều thứ như:<span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">&nbsp;In danh thiếp</span>,&nbsp;<a href=\"https://thegioiinan.com/inan/94/in-phieu-bao-hanh-warranty-card-phieu-bao-duong-the-tich-luy-diem-in-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">In&nbsp;phiếu bảo hành</span></a>,&nbsp;<a href=\"https://-sinh-vien-the-pvc-in-the-nhan-vien-in-gia-re-hcm.html/\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">In&nbsp;</span><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">thẻ nhân viên</span></a>,.. Một bộ nhận diện thương hiệu tốt sẽ giúp định vị thương hiệu của doanh nghiệp và thể hiện được một bản sắc văn hóa riêng.</span></p></div>', NULL, '900003', 2000000, NULL, NULL, NULL, 1, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:50:02', '2024-07-31 22:50:02'),
(4, 8, 11, 'Poster Chất Liệu PP', 'poster-chat-lieu-pp', 'uploads/product/media_66aa5d87b8c7f.jpg', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Với công nghệ in cực nét', '<p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Poster l</span>à công cụ không thể thiếu khi doanh nghiệp bạn sắp ra mắt sản phẩm/ dịch vụ mới, chuẩn bị thực hiện chiến dịch truyền thông quảng cáo hay tổ chức các sự kiện thể thao, văn hóa, nghệ thuật, hội thảo, hội chợ, triển lãm…</span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Poster PP</span>&nbsp;ngoài trời được in trên chất liệu giấy PP bằng mực dầu sử dụng ngoài trời. Mực dầu có độ bám mực cao hơn, ít phai màu và không bị ảnh hưởng nhiều về chất lượng khi sử dụng lâu ngoài trời, chịu nắng.&nbsp;</span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Poster PP</span>&nbsp;trong nhà&nbsp;được in trên chất liệu giấy PP (Paper Plastic) bằng mực in thường, không mùi, sau khi in, để bảo vệ mực in và chất lượng hình ảnh người ta thường cán thêm 1 lớp màng bóng hoặc mờ. Mặt phía sau có thể có một lớp keo hoặc không keo. Nếu dùng để treo trên&nbsp;<a href=\"https://thegioiinan.com/sanphaminan/90-498/Chan-Standee-X-06x16m.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">standee</a>&nbsp;thì có đóng thêm khoen.</span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Poster PP</span><span style=\"-webkit-font-smoothing: initial;\">&nbsp;</span>được in kỹ thuật số nên có ưu điểm là thời gian nhanh chóng, có thể lấy ngay trong vòng 24h.</span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">*&nbsp; ƯU ĐIỂM:</span></span></span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span id=\"docs-internal-guid-fe8805b6-7fff-9922-28d7-c97474aa8a79\" style=\"-webkit-font-smoothing: initial;\">-&nbsp;</span>PP ngoài trời in bằng mực in chịu nắng</span><br style=\"-webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span id=\"docs-internal-guid-fe8805b6-7fff-9922-28d7-c97474aa8a79\" style=\"-webkit-font-smoothing: initial;\">-&nbsp;</span>Bền màu, lâu phai.&nbsp;</span><br style=\"-webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span id=\"docs-internal-guid-fe8805b6-7fff-9922-28d7-c97474aa8a79\" style=\"-webkit-font-smoothing: initial;\">-&nbsp;</span>Hình ảnh độ phân giải cao nhất.</span><br style=\"-webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span id=\"docs-internal-guid-fe8805b6-7fff-9922-28d7-c97474aa8a79\" style=\"-webkit-font-smoothing: initial;\">-&nbsp;</span>Màu sắc trung thực, rõ nét.</span></span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">*&nbsp; KHUYẾT ĐIỂM:</span></span></span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span id=\"docs-internal-guid-fe8805b6-7fff-9922-28d7-c97474aa8a79\" style=\"-webkit-font-smoothing: initial;\">-</span>&nbsp;PP ngoài trời giá thành cao hơn PP trong nhà</span><br style=\"-webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span id=\"docs-internal-guid-fe8805b6-7fff-9922-28d7-c97474aa8a79\" style=\"-webkit-font-smoothing: initial;\">-</span>&nbsp;PP trong nhà không chịu được ánh nắng trực tiếp</span></span></p>', NULL, '800001', 95000, NULL, NULL, NULL, 1, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:51:35', '2024-07-31 22:51:35'),
(5, 8, 12, 'Tờ rơi số lượng ít', 'to-roi-so-luong-it', 'uploads/product/media_66aa5ddce7bd2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 tờ cũng in - In nhanh lấy liền', '<p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">In tờ rơi, in flyer&nbsp;là lựa chọn tối ưu cho việc quảng bá, tiếp thị sản phẩm dịch vụ. Bạn có thể phát tờ rơi tại các sự kiện, quảng cáo bán hàng cho mọi người trên đường phố hoặc phát sau các cuộc họp và thuyết trình. Bạn không cần phải lo lắng về số lượng tờ rơi cần in trong mỗi chương trình tiếp thị,&nbsp;<a href=\"https://thegioiinan.com/\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">Thế Giới In Ấn</a>&nbsp;nhận in tờ rơi không quy định số lượng tối thiểu.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Thế Giới In Ấn có dịch vụ in tờ rơi với&nbsp;đa dạng kích thước&nbsp;từ nhỏ như<span style=\"-webkit-font-smoothing: initial;\">&nbsp;A6&nbsp;</span>cho đến lớn như<span style=\"-webkit-font-smoothing: initial;\">&nbsp;A3.</span>&nbsp;Thành phẩm sẽ được in trên giấy&nbsp;<span style=\"-webkit-font-smoothing: initial;\">Couche 150gsm</span>&nbsp;- có độ dày vừa phải, đảm bảo tiêu chí tiết kiệm cho ấn phẩm tờ rơi.&nbsp;Chúng tôi tin rằng đây sẽ là lời cam kết chân thành nhất của Thế Giới In Ấn, với&nbsp;mong được phục vụ tận tình tất cả các nhu cầu từ nhỏ đến lớn của mọi khách hàng.&nbsp;</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><img alt=\"\" src=\"https://thegioiinan.com/images/danhmuc/The_gioi_in_an_20191122153237397flyer-mockups%20jpg%20%201100%c3%97900%20.png\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; width: 1140px; height: auto !important;\"></span></span></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">VÍ DỤ VỀ VÙNG IN:</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: center; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\"><img alt=\"\" src=\"https://thegioiinan.com/images/tintuc/The_gioi_in_an_20200211162501434TOROI.png\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; height: auto !important;\"></span></p>', NULL, '800002', 2000, NULL, NULL, NULL, 1, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:53:00', '2024-07-31 22:53:00'),
(6, 8, 13, 'Catalouge Tiêu Chuẩn', 'catalouge-tieu-chuan', 'uploads/product/media_66aa5e1dcd2b4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kích thước, loại giấy tiêu chuẩn - Giá tiết kiệm', '<p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Catalogue là ấn phẩm giới thiệu về sản phẩm và dịch vụ của các công ty, với mục đích cung cấp thông tin một cách chi tiết, hình ảnh rõ ràng để cho khách hàng&nbsp;hiểu được về sản phẩm và dịch vụ họ có ý định mua hoặc sử dụng. Catalogue được thiết kế đẹp, in ấn cẩn thận sẽ tạo cho khách hàng niềm tin để đưa đến quyết định mua hàng.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">Catalogue tiêu chuẩn là loại catalogue có kích thước A4, A5 và sử&nbsp;dụng loại giấy tiêu chuẩn là giấy Couche. Tùy theo số lượng Catalogue mà Quý khách in, Thế Giới In Ấn sẽ lựa chọn kỹ thuật in phù hợp để tiết kiệm chi phí cho Quý khách.&nbsp;In số lượng ít sẽ&nbsp;in Kỹ thuật số, với số lượng lớn sẽ&nbsp;<a href=\"https://thegioiinan.com/faq/128/Khi-nao-in-offset-khi-nao-in-ky-thuat-so.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">in Offset</a>.</span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: center; color: rgb(102, 102, 102) !important;\"><img alt=\"\" src=\"https://thegioiinan.com/images/faq/The_gioi_in_an_20220901100550170CATALOGUE_cao_cap.jpeg\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; height: 886px; width: 1500px;\"></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Một cuốn Catalogue hoàn chỉnh không thể thiếu các thông số sau:</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial;\">►&nbsp;</span>Bìa + Ruột: Tuỳ vào mục đích sử dụng của Quý khách để lựa chọn cho mình loại giấy và&nbsp;định lượng giấy phù hợp. Phổ biến nhất là&nbsp;bìa sử dụng giấy Couche 250gsm + ruột sử dụng giấy Couche 150gsm.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial;\">►&nbsp;</span>Số trang:&nbsp;Mỗi ngành nghề đều có những quy chuẩn và nguyên tắc riêng, in ấn Catalogue&nbsp;cũng vậy. Số trang khi&nbsp;<a href=\"https://thegioiinan.com/designs/order/1-50/Thiet-ke-Catalogues---duoi-12-trang.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">thiết kế catalogue</a>&nbsp;thường sẽ là số chẵn, chia hết cho 4 (đóng kim) hoặc chia hết cho 2 (đóng lò xo, may chỉ vô bìa keo).</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial;\">►&nbsp;</span>Kích thước: Catalogue có rất nhiều kích thước nhưng thông dụng nhất là kích thước A4, A5.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><span style=\"-webkit-font-smoothing: initial;\">►&nbsp;</span>Quy cách đóng cuốn:&nbsp;Catalogue thường đóng cuốn bằng cách đóng kim ở gáy catalogue là phổ biến nhất vì giá thành tiết kiệm,&nbsp;áp dụng&nbsp;với số trang ít. Ngoài ra còn các&nbsp;phương pháp đóng cuốn khác như&nbsp;đóng lò xo, may chỉ vô bìa&nbsp;keo.</span></span></p>', NULL, '800003', 300000, NULL, NULL, NULL, 0, 1, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:54:05', '2024-07-31 22:54:05'),
(7, 9, 14, 'Nhãn Decal Giấy', 'nhan-decal-giay', 'uploads/product/media_66aa5e7367c9f.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tem nhãn, logo có thể in nhanh 2h', '<p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\">Bạn cần in logo, thông tin nội dung lên sản phẩm, và có thể tùy biến dán lên bất kỳ vật dụng nào. Tất cả đã có trong&nbsp;<a href=\"https://thegioiinan.com/inan/121/in-decal-in-label-in-sticker-in-tem-nhan-in-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">Nhãn, Sticker, Decal&nbsp;</a></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\"></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\">Với sự tiện dụng bởi lớp keo dán có thể bám vào hầu hết các chất liệu khác nhau, đặc biệt với chi phí rẻ và tiện lợi.</p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\">Bạn có thể đặt in hay thiết kế Nhãn, Sticker, Decal theo phong cách của riêng mình với ứng dụng&nbsp;<a href=\"https://thegioiinan.com/mau-thiet-ke-sticker.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">Thiết kế online</a>. Hãy để Nhãn, Sticker, Decal là phương tiện quảng bá thương hiệu của bạn đến với khách hàng.&nbsp;</p>', NULL, '700001', 1000, NULL, NULL, NULL, 1, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:55:31', '2024-07-31 22:55:31'),
(8, 9, 15, 'Túi Giấy Chuẩn', 'tui-giay-chuan', 'uploads/product/media_66aa5eae3bf5b.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Chất liệu đa dạng, giá rẻ phổ thông', '<p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\"><a href=\"https://thegioiinan.com/inan/102/in-tui-giay-in-paper-bag-in-tui-xach-giay-in-tui-bang-giay-in-gia-re-hcm.html\" target=\"_blank\" style=\"background-color: transparent; color: rgb(51, 51, 51); touch-action: manipulation; -webkit-font-smoothing: initial;\">Túi giấy</a>&nbsp;được làm&nbsp;từ các loại chất liệu giấy khác nhau với nhiều loại kiểu dáng, kích thước. Nhiều doanh nghiệp in thông điệp, logo, slogan lên trên túi giấy với&nbsp;mục đích quảng bá&nbsp;hình ảnh thương hiệu đến đông đảo khách hàng.</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\">Khi mua sản phẩm như là mỹ phẩm, quần áo, sách vở, trang sức, đồ uống, hoa quả,…&nbsp;bạn đều&nbsp;có thể sở hữu chiếc túi giấy độc đáo. Khách hàng đặc biệt rất yêu thích túi giấy bởi nó có thể tái&nbsp;sử dụng nhiều lần.</p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; color: rgb(31, 127, 92);\">Với dòng túi giấy chuẩn là sự lựa chọn tuyệt vời nếu bạn cần in số lượng lớn, với kỹ thuật in OFFSET chất lượng và giá thành rẻ.</span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\"><img alt=\"\" src=\"https://thegioiinan.com/images/The_gioi_in_an_2021110915045437811.jpg\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; height: 1243px; width: 3901px;\"></p>', NULL, '700002', 90000, NULL, NULL, NULL, 1, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:56:30', '2024-07-31 22:56:30'),
(9, 10, 16, 'Menu Giấy Nhựa', 'menu-giay-nhua', 'uploads/product/media_66aa5ef4a3c75.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Độ bền cao - Đáp ứng mọi số lượng', '<p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Menu -&nbsp;Thực đơn&nbsp;là bản ghi chú tất cả các món ăn sẽ được phục vụ trong một bữa ăn thường, bữa tiệc,&nbsp;liên hoan... Thực đơn phản ánh số lượng các món ăn, đồ uống, cơ cấu bữa ăn, mục đích của bữa ăn và thông dụng trong những nhà hàng, quán ăn, quán cà phê...&nbsp;</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\">Menu trong nhà hàng, quán ăn thường có các dạng như Menu cuốn, Menu tờ rơi, Menu bồi Format,...&nbsp;</span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Menu là một phần quan trọng trong việc kinh doanh nhà hàng, quán ăn, quán cafe. Menu mang phong cách và bản sắc riêng của nhà hàng, quán ăn tạo nên sự độc đáo và thu hút khách hàng.</span></span></p><p style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; color: rgb(102, 102, 102) !important;\"><img alt=\"\" src=\"https://thegioiinan.com/images/danhmuc/The_gioi_in_an_20200217105929207Super+Tough+Menues+06_14.jpg\" style=\"border: 0px; -webkit-font-smoothing: initial; border-radius: 8px; max-width: 100%; width: 1140px; height: auto !important;\"></p><p dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 19.4444px; margin-left: 0px; -webkit-font-smoothing: initial; font-family: Roboto, Arial; font-size: 16px; text-align: justify; color: rgb(102, 102, 102) !important;\"><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\">Menu giấy nhựa là sản phẩm in trên chất liệu Plastic Paper 280gsm. Khi in trên loại giấy này, thức đơn sẽ không bị thấm nước, không rách và có độ đàn hồi cao.</span></span></p><div><span style=\"-webkit-font-smoothing: initial; font-size: 14px;\"><span style=\"-webkit-font-smoothing: initial; font-family: Arial, Helvetica, sans-serif;\"><br></span></span></div>', NULL, '600001', 20000, NULL, NULL, NULL, 1, 0, 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 22:57:40', '2024-07-31 22:57:40');

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
(1, 1, 'uploads/product_gallery/media_66aa74111c2e8.jpg', 1, NULL, NULL, NULL, '2024-08-01 00:27:45', '2024-08-01 00:27:45'),
(2, 1, 'uploads/product_gallery/media_66aa74e1c5134.jpg', 1, NULL, NULL, NULL, '2024-08-01 00:31:13', '2024-08-01 00:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `extra1` varchar(255) DEFAULT NULL,
  `extra2` varchar(255) DEFAULT NULL,
  `extra3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`, `slug`, `status`, `extra1`, `extra2`, `extra3`, `created_at`, `updated_at`) VALUES
(1, 1, 'Size', 'size', 1, NULL, NULL, NULL, '2024-08-01 05:12:23', '2024-08-01 05:24:37'),
(2, 1, 'Color', NULL, 1, NULL, NULL, NULL, '2024-08-01 05:12:31', '2024-08-01 05:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_variant_items`
--

CREATE TABLE `product_variant_items` (
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
-- Dumping data for table `product_variant_items`
--

INSERT INTO `product_variant_items` (`id`, `product_variant_id`, `name`, `price`, `is_default`, `status`, `extra1`, `extra2`, `created_at`, `updated_at`) VALUES
(1, 2, 'Black', 10, 1, 1, NULL, NULL, '2024-08-01 05:46:56', '2024-08-06 08:55:31'),
(2, 2, 'White', 25, 1, 1, NULL, NULL, '2024-08-01 05:57:38', '2024-08-01 07:30:06'),
(3, 1, 'Big', 15, 1, 1, NULL, NULL, '2024-08-06 09:01:43', '2024-08-06 09:01:43'),
(4, 1, 'Small', 25, 1, 1, NULL, NULL, '2024-08-06 09:01:50', '2024-08-06 09:01:50');

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
(1, 'Sản Phẩm Mới', 'Chất lượng in ấn tốt nhất và nhanh nhất', 'Tạo ấn tượng đầu tiên chuyên nghiệp với dịch vụ In Name Card, thiết kế độc đáo và chất lượng. Thiết kế độc đáo và chất lượng.', 'Gửi cho tôi dự án của bạn', 'https://www.google.com/', 'uploads/slider/media_66a6f71dc0472.png', 'uploads/slider/media_66a6f71dc06f6.png', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 08:57:49', '2024-07-29 09:19:02'),
(2, 'Bạn cần in gì?', 'Hãy thử dịch vụ tốt nhất của chúng tôi', 'Tạo ấn tượng đầu tiên chuyên nghiệp với dịch vụ In Name Card, thiết kế độc đáo và chất lượng. Thiết kế độc đáo và chất lượng.', 'Gửi tôi dự án của bạn', 'https://www.google.com/', 'uploads/slider/media_66a6f78ae10e6.png', 'uploads/slider/media_66a6f78ae124c.png', 1, NULL, NULL, NULL, NULL, NULL, '2024-07-29 08:59:38', '2024-07-29 09:19:33');

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
(1, 1, 'In Lì xì', 'in-li-xi', 1, NULL, NULL, NULL, '2024-07-30 11:32:23', '2024-07-30 11:32:23'),
(3, 1, 'Name Card', 'name-card', 1, NULL, NULL, NULL, '2024-07-30 11:33:09', '2024-07-30 11:33:09'),
(4, 2, 'test', 'test', 1, NULL, NULL, NULL, '2024-07-30 11:42:05', '2024-07-30 11:42:05'),
(5, 6, 'Túi nhỏ', 'tui-nho', 1, NULL, NULL, NULL, '2024-07-30 11:42:15', '2024-07-30 11:45:43'),
(6, 6, 'Túi lớn', 'tui-lon', 1, NULL, NULL, NULL, '2024-07-30 11:42:22', '2024-07-30 11:42:22'),
(8, 7, 'Danh Thiếp', 'danh-thiep', 1, NULL, NULL, NULL, '2024-07-31 20:41:37', '2024-07-31 20:41:37'),
(9, 7, 'Bao Thư', 'bao-thu', 1, NULL, NULL, NULL, '2024-07-31 20:42:18', '2024-07-31 20:42:18'),
(10, 7, 'Bìa Đựng Hồ Sơ', 'bia-dung-ho-so', 1, NULL, NULL, NULL, '2024-07-31 20:42:38', '2024-07-31 20:42:38'),
(11, 8, 'Poster', 'poster', 1, NULL, NULL, NULL, '2024-07-31 20:43:08', '2024-07-31 20:43:08'),
(12, 8, 'Tờ Rơi', 'to-roi', 1, NULL, NULL, NULL, '2024-07-31 20:43:17', '2024-07-31 20:43:17'),
(13, 8, 'Catalouge', 'catalouge', 1, NULL, NULL, NULL, '2024-07-31 20:43:39', '2024-07-31 20:43:39'),
(14, 9, 'Nhãn Dán', 'nhan-dan', 1, NULL, NULL, NULL, '2024-07-31 20:44:08', '2024-07-31 20:44:08'),
(15, 9, 'Túi Giấy', 'tui-giay', 1, NULL, NULL, NULL, '2024-07-31 20:44:18', '2024-07-31 20:44:18'),
(16, 10, 'Thực Đơn', 'thuc-don', 1, NULL, NULL, NULL, '2024-07-31 20:44:48', '2024-07-31 20:44:48'),
(17, 10, 'Gift Card', 'gift-card', 1, NULL, NULL, NULL, '2024-07-31 20:45:18', '2024-07-31 20:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '/uploads/User-avatar.png',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `role_special` enum('user','web','admin','super_admin') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `phone`, `role`, `role_special`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '/uploads/profile/Screenshot 2023-10-23 at 6.00.02 AM.png', 'ale', 'ale@gmail.com', NULL, 'admin', 'super_admin', NULL, '$2y$12$ECcuJ8ccbavI5FL.IQNz9.ZoEJPx29n3LtYYddpmKDtb1nWeB8.AS', 'd5erpVOoxJpmUjflEpSp2r9DBh6LmjvCI5cWFkLq50u26t3a17d5NcPOTOqX', NULL, '2024-07-27 22:21:02'),
(2, '/uploads/User-avatar.png', 'admin', 'admin@gmail.com', NULL, 'admin', 'admin', NULL, '$2y$12$ECcuJ8ccbavI5FL.IQNz9.ZoEJPx29n3LtYYddpmKDtb1nWeB8.AS', 'empsKkZyGAhrQztAyitkAuLd6UXqRiq5c3c0A9jkoRMaN1Hiw1vOpLDv7HaY', NULL, NULL),
(3, '/uploads/User-avatar.png', 'web', 'web@gmail.com', NULL, 'admin', 'web', NULL, '$2y$12$ECcuJ8ccbavI5FL.IQNz9.ZoEJPx29n3LtYYddpmKDtb1nWeB8.AS', 'Ngg3kP0kMJ', NULL, NULL),
(4, '/uploads/User-avatar.png', 'user', 'user@gmail.com', '123456789', 'user', 'user', NULL, '$2y$12$ECcuJ8ccbavI5FL.IQNz9.ZoEJPx29n3LtYYddpmKDtb1nWeB8.AS', 'fvpKV5xlgEMsqTlFxWJ7ieWcHbcl4XLWNH6BYmwUa9RIPx0w3sx7YQiL7KVe', NULL, '2024-07-27 22:58:45'),
(5, '/uploads/User-avatar.png', 'Test', 'test@gmail.com', NULL, 'user', 'user', NULL, '$2y$12$Vnp.PovsfAt.yxq7hQivn.Sc1ZKivIieGUNqkYbO3FPn1l7nMyleG', NULL, '2024-07-27 11:29:50', '2024-07-27 11:29:50');

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
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variant_items`
--
ALTER TABLE `product_variant_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variant_items_product_variant_id_foreign` (`product_variant_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_variant_items`
--
ALTER TABLE `product_variant_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `product_variant_items`
--
ALTER TABLE `product_variant_items`
  ADD CONSTRAINT `product_variant_items_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
