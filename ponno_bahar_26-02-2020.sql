-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 12:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ponno_bahar`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `category_id`, `sub_category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'L', 1, 1, 1, '2020-01-13 05:31:20', '2020-01-13 05:31:20'),
(2, 'XL', 1, 1, 1, '2020-01-13 05:32:52', '2020-01-13 05:32:52'),
(3, 'M', 1, 1, 1, '2020-01-13 05:33:06', '2020-01-13 05:33:06'),
(4, 'Long', 2, 2, 1, '2020-01-13 05:35:49', '2020-01-13 05:35:49'),
(5, 'Short', 2, 2, 1, '2020-01-13 05:36:08', '2020-01-13 05:36:08'),
(6, 'sleeveless', 2, 2, 1, '2020-01-13 05:36:39', '2020-01-13 05:36:39'),
(7, 'Water Resistant', 1, 3, 1, '2020-01-13 05:39:28', '2020-01-13 05:39:28'),
(8, 'Stainless Steel', 1, 3, 1, '2020-01-13 05:40:36', '2020-01-13 05:40:36'),
(9, 'Sapphire Glass', 1, 3, 1, '2020-01-13 05:41:13', '2020-01-13 05:41:13'),
(10, 'Leather', 2, 4, 1, '2020-01-18 07:31:48', '2020-01-18 07:31:48'),
(11, 'Strap', 2, 4, 1, '2020-01-18 07:31:48', '2020-01-18 07:31:48'),
(12, 'Water Resistance', 2, 4, 1, '2020-01-18 07:32:37', '2020-01-18 07:32:37'),
(13, 'Dust Resistance', 2, 4, 1, '2020-01-18 07:32:37', '2020-01-18 07:32:37'),
(14, 'Cotton', 2, 2, 1, '2020-01-18 07:33:42', '2020-01-18 07:33:42'),
(15, 'Leather', 1, 5, 1, '2020-01-18 07:36:38', '2020-01-18 07:36:38'),
(16, 'PU Sole', 1, 5, 1, '2020-01-18 07:36:38', '2020-01-18 07:36:38'),
(17, 'Rubber Sole', 1, 5, 1, '2020-01-18 07:36:38', '2020-01-18 07:36:38'),
(18, 'Leather Sole', 1, 5, 1, '2020-01-18 07:36:38', '2020-01-18 07:36:38'),
(19, 'Memory Foam', 1, 5, 1, '2020-01-18 07:36:38', '2020-01-18 07:36:38'),
(20, 'Rubber Sole', 2, 6, 1, '2020-01-18 07:37:31', '2020-01-18 07:37:31'),
(21, 'Memory Foam', 2, 6, 1, '2020-01-18 07:37:31', '2020-01-18 07:37:31'),
(22, 'Leather Sole', 2, 6, 1, '2020-01-18 07:37:31', '2020-01-18 07:37:31'),
(23, 'Strapless', 2, 6, 1, '2020-01-21 08:35:11', '2020-01-21 08:35:11'),
(24, 'Ankle Strap', 2, 6, 1, '2020-01-21 08:35:11', '2020-01-21 08:35:11'),
(25, 'Wedge Heels', 2, 6, 1, '2020-01-21 08:35:11', '2020-01-21 08:35:11'),
(26, 'Pencil Hills', 2, 6, 1, '2020-01-21 08:35:11', '2020-01-21 08:35:11'),
(27, 'Cone Hills', 2, 6, 1, '2020-01-21 08:35:11', '2020-01-21 08:35:11'),
(28, 'Leather Strap', 1, 3, 1, '2020-01-21 08:43:01', '2020-01-21 08:43:01'),
(29, 'Titanium', 1, 3, 1, '2020-01-21 08:43:01', '2020-01-21 08:43:01'),
(30, 'Crystal glass', 1, 3, 1, '2020-01-21 08:43:01', '2020-01-21 08:43:01'),
(31, 'Regular glass', 1, 3, 1, '2020-01-21 08:43:01', '2020-01-21 08:43:01'),
(32, 'S', 1, 1, 1, '2020-01-26 01:56:26', '2020-01-26 01:56:26'),
(33, 'XXL', 1, 1, 1, '2020-01-26 01:56:26', '2020-01-26 01:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `b_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `author`, `author_id`, `b_image`, `likes`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, '8 Inspiring Ways to Wear Dresses in the Winter', '<p><span style=\"color: rgb(77, 71, 71); font-family: Georgia, serif;\">After the&nbsp;</span><a href=\"https://www.papernstitchblog.com/2017/12/12/womens-gift-guide-holiday/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgb(48, 198, 215); font-family: Georgia, serif;\">women’s gift guide</a><span style=\"color: rgb(77, 71, 71); font-family: Georgia, serif;\">, it only felt fair to balance things out with a giant men’s gift guide! I’ve been bookmarking some of my faves for the last few weeks, and while this list isn’t quite as big as the ladies, it’s still packed with goodies, in every price range. I think the lowest priced item is $5! And there are more than 50 gifts on the list. Click through to see them all!</span><br></p>', 'Nancy Ward', NULL, 'blog_image//jdxPUHw22JXfLv7Rs7ui2VszIZtpfZeMOadePa9f.jpeg', NULL, NULL, 1, '2020-01-20 06:12:35', '2020-01-30 08:00:57'),
(2, 'The Great Big List of Men’s Gifts for the Holidays', '<p><span style=\"color: rgb(77, 71, 71); font-family: Georgia, serif;\">After the&nbsp;</span><a href=\"https://www.papernstitchblog.com/2017/12/12/womens-gift-guide-holiday/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgb(48, 198, 215); font-family: Georgia, serif;\">women’s holiday gift guide</a><span style=\"color: rgb(77, 71, 71); font-family: Georgia, serif;\">, it only felt fair to balance things out with a giant men’s gift guide! I’ve been bookmarking some of my faves for the last  weeks, and while this list isn’t quite as big as the ladies GG, it’s still packed with goodies, in every price range. I think the lowest priced item is $4.95! And there are more than 50 gifts on the list. Click through to see them all!</span><br></p>', 'Sumitra Sheikh', NULL, 'blog_image//eWWFPItAoWc6IK9gR7WocTQloVl3toQYn37Wk0xA.jpeg', NULL, NULL, 1, '2020-01-20 06:14:53', '2020-01-20 06:14:53'),
(3, '5 Winter-to-Spring Fashion Trends to Try Now', '<p><span style=\"color: rgb(77, 71, 71); font-family: Georgia, serif;\">It only felt fair to balance things out with a giant men’s gift guide! I’ve been bookmarking some of my faves for the last few weeks, and while this list isn’t quite as big as the ladies GG, it’s packed with goodies, in every price range. I think the lowest priced item is $8! And there are more than 50 gifts on the list. Click through to see them all!</span><br></p>', 'Arif Faysal', NULL, 'blog_image//rt79iKuVlx8jidIhx3Qb0g86RfDjYPMSH3OihiVQ.jpeg', NULL, NULL, 1, '2020-01-20 06:19:54', '2020-01-30 07:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `discount_status` tinyint(4) NOT NULL DEFAULT '0',
  `discount_amount_in_pct` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_image`, `status`, `discount_status`, `discount_amount_in_pct`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'category_image//men.jpg', 1, 0, NULL, '2020-01-12 18:00:00', '2020-01-12 18:00:00'),
(2, 'Women', 'category_image//women.jpg', 1, 0, NULL, '2020-01-12 18:00:00', '2020-01-12 18:00:00'),
(3, 'Kids', 'category_image//kXJgwKS4nOhvv1rZxqJtCY8egiGTVf78db3aNN91.jpeg', 1, 0, NULL, '2020-01-13 05:18:40', '2020-01-13 05:18:40'),
(4, 'General', 'category_image//jqlgUGG9puGRqghRQVfkGNVkEqDmHn5obUB9dspn.jpeg', 1, 0, NULL, '2020-01-13 05:24:58', '2020-01-13 05:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `title`, `logo`, `email`, `location`, `phone_1`, `phone_2`, `facebook`, `instagram`, `pinterest`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ponno Bahar', 'settings_image//GUpdCRNqwJEyefirXKM3fSQS4etdj07wymPLpmoW.png', 'ponnobahar@gmail.com', 'Mirpur11', '017700001', NULL, 'https://facebook.com/pages/ponnobahar', 'https://ig.com/p0nn0_bahaR2', NULL, 1, NULL, '2020-01-26 01:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_01_082227_create_user_types_table', 1),
(4, '2019_12_01_082354_create_nav_menus_table', 1),
(5, '2019_12_01_082429_create_user_details_table', 1),
(6, '2020_01_08_111735_create_categories_table', 1),
(7, '2020_01_08_111833_create_attributes_table', 1),
(8, '2020_01_08_111909_create_products_table', 1),
(9, '2020_01_08_114204_create_sub_categories_table', 1),
(10, '2020_01_13_090014_create_blogs_table', 1),
(11, '2020_01_13_090054_create_general_settings_table', 1),
(12, '2020_01_13_090138_create_website_settings_table', 1),
(13, '2020_02_11_064926_create_ware_houses_table', 2),
(14, '2020_02_12_095820_create_shipping_locations_table', 3),
(15, '2020_02_13_091805_create_orders_table', 4),
(16, '2020_02_26_093625_add_attributes_to_orders', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nav_menus`
--

CREATE TABLE `nav_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_u_id` bigint(20) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `shipping_location_id` int(11) DEFAULT NULL,
  `ship_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(11) DEFAULT NULL,
  `order_subtotal` int(11) DEFAULT NULL,
  `order_total` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attributes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_u_id`, `product_id`, `product_price`, `product_qty`, `shipping_location_id`, `ship_to`, `shipping_cost`, `order_subtotal`, `order_total`, `address`, `status`, `created_at`, `updated_at`, `attributes`) VALUES
(1, 2, 15815909698152, 4, 350, 3, 1, 'Bonani, Dhaka', 60, 1050, 1110, 'Bonani, Lake 18', 1, '2020-02-13 04:49:29', '2020-02-13 04:49:29', NULL),
(5, 2, 15815912708942, 4, 350, 2, 2, 'pallabi, Mirpur', 60, 700, 760, 'asd', 1, '2020-02-13 04:54:30', '2020-02-13 04:54:30', NULL),
(6, 2, 15827150403142, 4, 350, 2, 1, 'Bonani, Dhaka', 60, 4300, 4360, 'Bonani 18', 1, '2020-02-26 05:04:00', '2020-02-26 05:04:00', '[\"Long\",\"Short\",\"sleeveless\",\"Cotton\"]'),
(7, 2, 15827150403142, 2, 1200, 3, 1, 'Bonani, Dhaka', 60, 4300, 4360, 'Bonani 18', 1, '2020-02-26 05:04:00', '2020-02-26 05:04:00', '[\"M\"]');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_details` text COLLATE utf8mb4_unicode_ci,
  `present_price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `discount_status` tinyint(4) NOT NULL DEFAULT '0',
  `discount_cupon_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `attributes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `in_stock` int(11) DEFAULT NULL,
  `attribute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_status` tinyint(4) NOT NULL DEFAULT '0',
  `on_sale_status` tinyint(4) NOT NULL DEFAULT '0',
  `top_rate` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `p_image`, `description_title`, `description_details`, `present_price`, `discount`, `discount_status`, `discount_cupon_id`, `category_id`, `sub_category_id`, `attributes`, `vendor_id`, `in_stock`, `attribute`, `featured_status`, `on_sale_status`, `top_rate`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Hoodie', 'product_image//oaPO5xWAkD86kqnAJfRb5stMjno1mAdnglxoHXwl.jpeg', 'Stylish Hoodie For Men', '<div style=\"box-sizing: inherit; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-product-description-title\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-transform: uppercase;\">PRODUCT DETAILS&nbsp;<span class=\"myntraweb-sprite pdp-productDetailsIcon sprites-productDetailsIcon\" style=\"box-sizing: inherit; background: url(&quot;https://assets.myntassets.com/assets/images/retaillabs/2019/10/24/b8817bd3-5993-48e4-9771-92e4e565b5141571898164626-MyntraWeb-Sprite.png&quot;) -231px -58px / 1404px 105px; display: inline-block; width: 21px; height: 22px; vertical-align: middle; margin-left: 5px;\"></span></h4><p class=\"pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-top: 12px; width: 491px;\">Grey and Black colourblocked sweatshirt, has a hood, one pocket, long sleeves, straight hem</p></div><div class=\"pdp-sizeFitDesc\" style=\"box-sizing: inherit; border: none; margin-top: 12px; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-transform: capitalize; border: none; padding-bottom: 5px;\">Size &amp; Fit</h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">The model (height 6\') is wearing a size M</p></div><div class=\"pdp-sizeFitDesc\" style=\"box-sizing: inherit; border: none; margin-top: 12px; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-transform: capitalize; border: none; padding-bottom: 5px;\">Material &amp; Care</h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">100% Cotton<br style=\"box-sizing: inherit;\">Machine-wash</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\"><br></p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">2 Pockets</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">1 Hood</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">Full Sleeve</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\"><br></p></div>', 1200, 25, 1, NULL, 1, 1, '1,2,3', 1, 80, NULL, 1, 1, 0, 1, '2020-01-13 06:11:31', '2020-01-13 06:11:31'),
(3, 'T Shirt', 'product_image//ZVMsttzWCVKSjBoNikqiWeVQNBbQkmxPu10wPDrC.jpeg', 'Funky Comfy T Shirt', '<div class=\"p80 pt0 ttN c6\" style=\"padding: 0px 0px 8px; color: rgb(102, 102, 102); fill: rgb(102, 102, 102); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\">crew neck solid tee</div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">occasion :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">casual wear</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">yellow</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">print &amp; pattern :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">solids</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">regular</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">neck :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">crew neck</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">set of ( number of units in set) :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">1</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">sleeve type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">three quarter sleeves</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">product details :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">crew neck solid tee</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">cotton</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">brand name :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">snayati</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">ideal for :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">exclusive for women</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">transparency of the fabric :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">not transparent</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">category :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">tees</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">exclusive to limeroad :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">no</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">length (cms) :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">63.5</div></div>', 140, 5, 1, NULL, 2, 2, '5,6', 1, 100, NULL, 1, 1, 1, 1, '2020-01-13 06:17:02', '2020-01-13 06:17:02'),
(4, 'Tops', 'product_image//pgjiLWBZMWPYoRnw9EMZs6BjdRLfYDv5cpYX9xoz.jpeg', 'Black Short Tops', '<p>Short Tops&nbsp; For Women</p><p>Material : Cotton<br>Colors Available : Black<br>Fit : Loose<br>Sleeve : Short<br>Comfort : Good</p>', 350, 10, 1, NULL, 2, 2, '5', 1, 35, NULL, 1, 1, 0, 1, '2020-01-16 08:52:04', '2020-01-16 08:52:04'),
(5, 'Watch', 'product_image//product-15.jpg', 'Stainless Steel Watch', '<p><br></p>', 3000, NULL, 0, NULL, 1, 3, '7,8,9', 1, 10, NULL, 1, 1, 1, 1, '2020-01-16 08:54:00', '2020-01-16 08:54:00'),
(6, 'Shoe', 'product_image//5FeHVsTamYQxsgNkKDIwI8Xf6MmD1PvAla89iDwE.jpeg', 'Leather Shoe', '<p>Brown Leather Shoe with shinning finish.</p>', 1700, 10, 1, NULL, 1, 5, '15,18,19', 1, 50, NULL, 1, 1, 1, 1, '2020-01-18 07:40:29', '2020-01-18 07:40:29'),
(7, 'Shoe', 'product_image//8WyTUDeD91IUTl5yf3NmTLgKkQVNnJYUIFYkUYFh.jpeg', 'Sandy Sneaker', '<p>Super Comfortable for daily use and Exercises</p>', 1200, 5, 1, NULL, 1, 5, '17,19', 1, 100, NULL, 1, 1, 1, 1, '2020-01-18 07:42:22', '2020-01-18 07:42:22'),
(8, 'Vanice shoes', 'product_image//9J2GfayRxMRscBosLdlsko0rkiOezw2jxlLlqcT4.jpeg', 'Vanice shoes', '<p>Extremely Comfortable With Stylish Moden Look</p>', 900, 3, 1, NULL, 2, 6, '20,21', 1, 80, NULL, 1, 1, 0, 1, '2020-01-18 07:43:33', '2020-01-18 07:43:33'),
(10, 'Blue Handbag', 'product_image//7HoM67s3OdsG6nfkKftG22IacOCv2RzQRByuVrKy.jpeg', 'Blue Handbag', '<p>Available colors : Dark Blue, Dark Brown</p>', 1300, 3, 1, NULL, 2, 4, '10,11,13', 1, 35, NULL, 1, 1, 1, 1, '2020-01-18 08:03:21', '2020-01-18 08:03:21'),
(11, 'Jeans', 'product_image//29qfMOUsycwWdqNZW9H8hs6scRzRwnqc6u3gOHfx.jpeg', 'Niagra Jeans', '<p>Stylish Jeans for Men</p>', 650, 5, 1, NULL, 1, 1, '1,3', 1, 70, NULL, 1, 1, 1, 1, '2020-01-18 08:04:36', '2020-01-18 08:04:36'),
(12, 'Full Leather Bag', 'product_image//b6UhyStH3h8RccGV6IGdb6BgnCIkNi8ViH3HHiNZ.jpeg', 'Full Leather Bag', NULL, 2000, 5, 1, NULL, 2, 4, '10,13', 1, 20, NULL, 1, 1, 1, 1, '2020-01-18 08:05:41', '2020-01-18 08:05:41'),
(13, 'Ash Hoodie', 'product_image//nCoj5XLW9u7tBJlx4vsaJ5iyZVxbhdba0Nmzx9bC.jpeg', 'Ash Hoodie', '<p>Stylish hoodie for ladies.</p>', 890, 25, 1, NULL, 2, 2, '4', 1, 300, NULL, 1, 1, 1, 1, '2020-01-18 08:07:02', '2020-01-18 08:07:02'),
(14, 'Shirt', 'product_image//yLOdaByUC3i50upzt7nGqtlz2Wjof7Y1qdNUd67f.jpeg', 'Black T Shirt', '<p>Stylish T shirt for men</p>', 150, 5, 1, NULL, 1, 1, '2,3,32,33', 1, 50, NULL, 1, 1, 1, 1, '2020-01-26 01:59:30', '2020-01-26 01:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_locations`
--

CREATE TABLE `shipping_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lattitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_locations`
--

INSERT INTO `shipping_locations` (`id`, `name`, `lattitude`, `longitude`, `shipping_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bonani, Dhaka', '23.801212', '90.13777', 60, 1, '2020-02-11 18:00:00', '2020-02-11 18:00:00'),
(2, 'pallabi, Mirpur', '23.804235', '90.13999', 60, 1, '2020-02-11 18:00:00', '2020-02-11 18:00:00'),
(3, 'Tongi, Dhaka', '23.874', '90.379', 80, 1, '2020-02-11 18:00:00', '2020-02-11 18:00:00'),
(4, 'Munshiganj, Dhaka', '23.999', '90.777', 100, 1, '2020-02-11 18:00:00', '2020-02-11 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_cat_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `discount_status` tinyint(4) NOT NULL DEFAULT '0',
  `discount_amount_in_pct` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `s_cat_image`, `category_id`, `status`, `discount_status`, `discount_amount_in_pct`, `created_at`, `updated_at`) VALUES
(1, 'Cloth', 'subcategory_image//X829efyaefbI5hbuvpTApf3vYBFGbUtoML8hqX5J.jpeg', 1, 1, 0, NULL, '2020-01-13 05:29:38', '2020-01-13 05:29:38'),
(2, 'Cloth', 'subcategory_image//eirMibsxOPYmKDXSN4TTT0hgvq6sx7ti7kdCmhOX.jpeg', 2, 1, 0, NULL, '2020-01-13 05:30:34', '2020-01-13 05:30:34'),
(3, 'Watch', 'subcategory_image//hOrVzT7H0i9XdRRrZ1QWeSDErbLD2GrrRT8YS61B.jpeg', 1, 1, 0, NULL, '2020-01-13 05:38:16', '2020-01-13 05:38:16'),
(4, 'Bags', 'subcategory_image//CVbrHFTXaCB3yC6zmavDQzmuBZMLtHM8ZqBETcqp.jpeg', 2, 1, 0, NULL, '2020-01-18 06:32:06', '2020-01-18 06:32:06'),
(5, 'Shoes', 'subcategory_image//NQeAzi9zrjia18uhaqcRckBVPHXVnRWI0YRR2KCh.jpeg', 1, 1, 0, NULL, '2020-01-18 07:34:20', '2020-01-18 07:34:20'),
(6, 'Shoes', 'subcategory_image//FBEVPJtMzN4dAlE48a6gn7K6NLmUIHvEE2Tu8uwX.jpeg', 2, 1, 0, NULL, '2020-01-18 07:34:39', '2020-01-18 07:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `menu_permission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `user_type_id`, `contact`, `status`, `menu_permission`, `email`, `profile_picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arif Faysal', 'arif09', 1, '01777778', 1, '*', 'superadmin@gmail.com', 'user_image//b04jDqfF9Jc02hJavnb9kBnZFNeX7CBD8sGePG0L.jpeg', NULL, '$2y$10$RBG9LhgtT98v2l1zoZDjjeojXyNo12zOcEN6mVvoBMnYCAOKIkbYq', NULL, '2020-01-07 12:00:00', '2020-02-07 01:43:58'),
(2, 'Rifat Zabin', 'rifat_08', 3, '0178909090', 1, '*', 'rifat@gmail.com', 'user_image//k2.jpeg', NULL, '$2y$10$RBG9LhgtT98v2l1zoZDjjeojXyNo12zOcEN6mVvoBMnYCAOKIkbYq', NULL, '2020-02-06 18:00:00', '2020-02-06 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` tinyint(4) DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `flat_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `education`, `skill`, `note`, `flat_no`, `house_no`, `road_no`, `state`, `zip_code`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'UIU', 'PHP, Bootstrap, HTML5, CSS3, LARAVEL, REST API', 'Anything Is Possible', '66', '79', 'Bhooter goli', 'Green Road', '1221', 'Bangladesh', 1, '2020-01-07 12:00:00', '2020-02-07 01:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, '2020-01-07 12:00:00', '2020-01-07 12:00:00'),
(2, 'Admin', 1, '2020-01-12 18:00:00', '2020-01-12 18:00:00'),
(3, 'User', 1, '2020-02-06 18:00:00', '2020-02-06 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ware_houses`
--

CREATE TABLE `ware_houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mamanger_id` int(11) DEFAULT NULL,
  `lattitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ware_houses`
--

INSERT INTO `ware_houses` (`id`, `name`, `address`, `contact`, `mamanger_id`, `lattitude`, `longitude`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Banani', 'House 14, Lake 18, Banani, Dhaka', '01999999999', 1, '23.800221', '90.4140', 1, '2020-02-10 18:00:00', '2020-02-10 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `landing1_sub_header1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_header1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_slider1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_sub_header2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_header2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_slider2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_sub_header3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_header3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing1_slider3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci,
  `footer_header_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text_1` text COLLATE utf8mb4_unicode_ci,
  `footer_header_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text_2` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `landing1_sub_header1`, `landing1_header1`, `landing1_slider1`, `landing1_sub_header2`, `landing1_header2`, `landing1_slider2`, `landing1_sub_header3`, `landing1_header3`, `landing1_slider3`, `about_us`, `footer_header_1`, `footer_text_1`, `footer_header_2`, `footer_text_2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Women Collection 2020', 'NEW SEASON', 'settings_image//Gh5g1VvdIrbsKcpmfUaZMAoqlgYpSMBcXvVdEWmB.jpeg', 'Men New-Season 2020', 'JACKETS & COATS', 'settings_image//r7UclmvQw4dxcsnVAxA5HG1uyCiLDlpOToa03ztf.jpeg', 'Men Collection 2019', 'NEW ARRIVALS', 'settings_image//LWXe80az9ExMtw6EjqxbKGqZ6b8eywuMscLbbqA1.jpeg', '<p>Ponno Bahar is an organization focused fully on customer satisfaction. We care for our clients. Responsibility &amp; Respectfulness is our motto. We are also bringing new features to our system. SO STAY TUNED ! Happy Shopping in 2020 !!&nbsp;&nbsp;</p>', 'GET IN TOUCH', 'Any questions? Let us know in store at 4th floor, 379 Pallabi, Mirpur, Dhaka 1001 or call us on +8801673001', 'Make Money with Us', 'Be a part of our regular supplier &amp; top seller. Contact our email address to set you up for an Vendor Account.', 1, NULL, '2020-02-07 01:37:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_menus`
--
ALTER TABLE `nav_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_locations`
--
ALTER TABLE `shipping_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ware_houses`
--
ALTER TABLE `ware_houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nav_menus`
--
ALTER TABLE `nav_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shipping_locations`
--
ALTER TABLE `shipping_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ware_houses`
--
ALTER TABLE `ware_houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
