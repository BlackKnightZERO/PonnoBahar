-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 02:29 PM
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
(9, 'Sapphire Glass', 1, 3, 1, '2020-01-13 05:41:13', '2020-01-13 05:41:13');

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
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_header1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text1` text COLLATE utf8mb4_unicode_ci,
  `footer_header2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text2` text COLLATE utf8mb4_unicode_ci,
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

INSERT INTO `general_settings` (`id`, `title`, `logo`, `email`, `location`, `phone1`, `phone2`, `footer_header1`, `footer_text1`, `footer_header2`, `footer_text2`, `facebook`, `instagram`, `pinterest`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ponno Bahar', 'settings_image//Qifw8a2mp9BaIYmmcdNbdsnXtysIAungMdUQUVTx.jpeg', 'https://ponnoba.com', 'Mirpur11', '017700000', NULL, NULL, NULL, NULL, NULL, 'https://facebook.com/pages/ponnobahar', 'https://ig.com/p0nn0_bahaR', NULL, 1, NULL, '2020-01-13 10:17:55');

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
(12, '2020_01_13_090138_create_website_settings_table', 1);

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
(2, 'Hoodie', 'product_image//oaPO5xWAkD86kqnAJfRb5stMjno1mAdnglxoHXwl.jpeg', 'Stylish Hoodie For Men', '<div style=\"box-sizing: inherit; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-product-description-title\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-transform: uppercase;\">PRODUCT DETAILS&nbsp;<span class=\"myntraweb-sprite pdp-productDetailsIcon sprites-productDetailsIcon\" style=\"box-sizing: inherit; background: url(&quot;https://assets.myntassets.com/assets/images/retaillabs/2019/10/24/b8817bd3-5993-48e4-9771-92e4e565b5141571898164626-MyntraWeb-Sprite.png&quot;) -231px -58px / 1404px 105px; display: inline-block; width: 21px; height: 22px; vertical-align: middle; margin-left: 5px;\"></span></h4><p class=\"pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-top: 12px; width: 491px;\">Grey and Black colourblocked sweatshirt, has a hood, one pocket, long sleeves, straight hem</p></div><div class=\"pdp-sizeFitDesc\" style=\"box-sizing: inherit; border: none; margin-top: 12px; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-transform: capitalize; border: none; padding-bottom: 5px;\">Size &amp; Fit</h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">The model (height 6\') is wearing a size M</p></div><div class=\"pdp-sizeFitDesc\" style=\"box-sizing: inherit; border: none; margin-top: 12px; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-transform: capitalize; border: none; padding-bottom: 5px;\">Material &amp; Care</h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">100% Cotton<br style=\"box-sizing: inherit;\">Machine-wash</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\"><br></p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">2 Pockets</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">1 Hood</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\">Full Sleeve</p><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; color: rgb(40, 44, 63); line-height: 1.4; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; width: 526.075px;\"><br></p></div>', 1200, 25, 1, NULL, 1, 1, '1,2,3', 1, 80, NULL, 1, 1, 1, 1, '2020-01-13 06:11:31', '2020-01-13 06:11:31'),
(3, 'T Shirt', 'product_image//ZVMsttzWCVKSjBoNikqiWeVQNBbQkmxPu10wPDrC.jpeg', 'Funky Comfy T Shirt', '<div class=\"p80 pt0 ttN c6\" style=\"padding: 0px 0px 8px; color: rgb(102, 102, 102); fill: rgb(102, 102, 102); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\">crew neck solid tee</div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">occasion :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">casual wear</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">color :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">yellow</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">print &amp; pattern :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">solids</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">regular</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">neck :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">crew neck</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">set of ( number of units in set) :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">1</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">sleeve type :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">three quarter sleeves</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">product details :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">crew neck solid tee</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">material :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">cotton</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">brand name :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">snayati</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">ideal for :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">exclusive for women</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">transparency of the fabric :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">not transparent</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">category :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">tees</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">exclusive to limeroad :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">no</div></div><div class=\"p80 pt0 wp100\" style=\"width: 512px; padding: 0px 0px 8px; color: rgb(153, 153, 153); font-family: Roboto, Roboto, Helvetica, Helvetica, Arial, Arial, sans-serif; font-size: 14px; text-transform: lowercase;\"><div class=\"dIb vT\" style=\"display: inline-block; vertical-align: top;\">length (cms) :</div>&nbsp;<div class=\"dIb vT c3\" style=\"display: inline-block; vertical-align: top; color: rgb(51, 51, 51); fill: rgb(51, 51, 51);\">63.5</div></div>', 140, 5, 1, NULL, 2, 2, '5,6', 1, 100, NULL, 1, 1, 0, 1, '2020-01-13 06:17:02', '2020-01-13 06:17:02');

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
(3, 'Watch', 'subcategory_image//hOrVzT7H0i9XdRRrZ1QWeSDErbLD2GrrRT8YS61B.jpeg', 1, 1, 0, NULL, '2020-01-13 05:38:16', '2020-01-13 05:38:16');

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
(1, 'Arif Faysal', 'arif09', 1, '01777777', 1, '*', 'superadmin@gmail.com', 'user_image//b04jDqfF9Jc02hJavnb9kBnZFNeX7CBD8sGePG0L.jpeg', NULL, '$2y$10$RBG9LhgtT98v2l1zoZDjjeojXyNo12zOcEN6mVvoBMnYCAOKIkbYq', NULL, '2020-01-07 12:00:00', '2020-01-08 00:01:32');

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
(1, 1, 'UIU', 'PHP, Bootstrap, HTML5, CSS3, LARAVEL, REST API', 'Anything Is Possible', '66', '79', 'Bhooter goli', 'Green Road', '1221', 'Bangladesh', 1, '2020-01-07 12:00:00', '2020-01-08 00:01:21');

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
(2, 'Admin', 1, '2020-01-12 18:00:00', '2020-01-12 18:00:00');

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
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nav_menus`
--
ALTER TABLE `nav_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
