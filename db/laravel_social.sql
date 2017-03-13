-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2016 at 05:33 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `created_at`, `updated_at`, `user_id`, `post_id`, `like`) VALUES
(2, '2016-07-28 11:10:38', '2016-07-28 11:10:38', 4, 18, 1),
(8, '2016-07-28 11:29:31', '2016-07-28 11:31:23', 1, 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_07_24_085246_create_users_table', 1),
('2016_07_25_050914_create_test_models_table', 2),
('2016_07_25_172243_create_posts_table', 3),
('2016_07_28_160608_create_likes_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `body`, `user_id`) VALUES
(14, '2016-07-26 10:40:50', '2016-07-26 10:40:50', 'Hello World!', 4),
(15, '2016-07-26 11:05:14', '2016-07-27 11:37:13', 'Hello guys... i live now. You can ask question in comments. Definitely i will reply your question. ', 1),
(16, '2016-07-27 07:41:55', '2016-07-27 07:41:55', 'This post get by jquery', 1),
(17, '2016-07-27 11:14:42', '2016-07-27 11:37:38', 'This is social post.', 1),
(18, '2016-07-28 09:19:50', '2016-07-28 09:20:07', 'Hello Brother. Whats up!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_models`
--

CREATE TABLE IF NOT EXISTS `test_models` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_models_name_index` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test_models`
--

INSERT INTO `test_models` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Amanullah Aman', 'admin@admin.com', '2016-07-25 00:03:00', '2016-07-25 00:03:00'),
(2, 'Amanullah Aman', 'aman@softograph.com', '2016-07-25 06:18:00', '2016-07-25 06:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `email`, `first_name`, `password`, `remember_token`) VALUES
(1, '2016-07-24 03:29:06', '2016-07-28 11:10:27', 'admin@admin.com', 'Amanullah Aman', '$2y$10$4JrQa9i1Kx.Hxrp1evdig.csNsECL8ykp495aE4d5dhe2fbF6.TG6', 'F5UC5TAweClUsF9bboVqWx1u1ZrjMjbJ3qyqBe5yOBIwe6GoI8I9mYGmpawb'),
(2, '2016-07-24 03:33:34', '2016-07-24 03:33:34', 'aman@aman.com', 'Aman', '$2y$10$LvmnWb0sSfLEnW6JUS.K..r9SaxqHxBlo9WvGhBjQd/haiSpxz3JO', NULL),
(3, '2016-07-24 03:55:45', '2016-07-26 10:33:47', 'test@test.com', 'Test', '$2y$10$IOqFflozRSeEGgIZeb8zg.rfGRSJcu2KzPQdIktj8mBs9lMV8r6W.', 'wWaGRuB2vZ4mwaxvQWStsLbO6UiF3nDqyFwseB7JR3IvkTDoLi5iaH7ZZSfz'),
(4, '2016-07-24 04:04:29', '2016-07-28 11:10:48', 'bodi@bodi.com', 'Bodi', '$2y$10$QHjbue8E2A7GF3HTINzqHu4ggAa1tVGGqADVd38.dtlf8uMM0Dop6', 'XMEHtOppoYZDOLGPaWEnjcqeLKzcKMTBBOBjavwSsCWuq1WweWDoXXGDlAnE'),
(5, '2016-07-25 06:42:49', '2016-07-25 06:42:49', 'tst@t.com', 'root', '$2y$10$5zizrJt.kGFQj8fpAblZX.f4KV/7ucyTAJsYdRA0/WIupJkw6mCN2', NULL),
(6, '2016-07-25 07:06:49', '2016-07-25 07:06:49', 'badmin@admin.com', 'root', '$2y$10$FhTQ2zsXn5YaAR3SuSbQqex/Rybp.LqeXQVC/U3Nsqi7AV3hBMAxC', NULL),
(7, '2016-07-25 09:52:27', '2016-07-25 09:52:27', 'admin@admin.com21', 'root', '$2y$10$bzRoM.H.qy2bUVmQPb1e/OO0OSkZu6G3iI6vZdxLHCiLbKAqQ.72C', NULL),
(8, '2016-07-25 10:23:58', '2016-07-25 10:23:58', 'test.tubve@email.com', 'root', '$2y$10$wRYSPOn1R0ABjyKCRzp8qOTO8h8vTdv7O3/ikNFakziZmRIYCPVnK', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
