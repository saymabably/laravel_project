-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 08:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_18_070052_create_sa_la__categories_table', 2),
('2017_05_19_032008_create_sa_la__manufactures_table', 3),
('2017_05_19_035238_create_sa_la__products_table', 4),


-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sa_la__categories`
--

CREATE TABLE `sa_la__categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sa_la__categories`
--

INSERT INTO `sa_la__categories` (`id`, `categoryName`, `categoryDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(2, 'Extra Large ', 'The God of Small Things was Roy''s first book and as of August 2016 is her only novel. Completed in 1996, the book took four years to complete. The potential of the story was first recognized by Pankaj Mishra, an editor with HarperCollins, who sent it to three British publishers. Roy received 500,000 pounds in advance and rights to the book were sold in 21 countries.', 1, NULL, '2017-05-19 03:49:32'),
(4, 'mens', 'The God of Small Things was Roy''s first book and as of August 2016 is her only novel. Completed in 1996, the book took four years to complete. The potential of the story was first recognized by Pankaj Mishra, an editor with HarperCollins, who sent it to three British publishers. Roy received 500,000 pounds in advance and rights to the book were sold in 21 countries.', 1, NULL, NULL),
(5, 'Womens', 'The God of Small Things was Roy''s first book and as of August 2016 is her only novel. Completed in 1996, the book took four years to complete. The potential of the story was first recognized by Pankaj Mishra, an editor with HarperCollins, who sent it to three British publishers. Roy received 500,000 pounds in advance and rights to the book were sold in 21 countries.', 1, NULL, NULL),
(6, 'Girls', 'SSSSSSSSSSSSSSSSSSSS', 1, NULL, NULL);

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `sa_la__manufactures`
--

CREATE TABLE `sa_la__manufactures` (
  `id` int(10) UNSIGNED NOT NULL,
  `manufacturerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturerDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sa_la__manufactures`
--

INSERT INTO `sa_la__manufactures` (`id`, `manufacturerName`, `manufacturerDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(2, 'sayma', 'student', 1, NULL, '2017-05-18 21:49:00'),
(3, 'EM64', 'The God of Small Things was Roy''s first book and as of August 2016 is her only novel. Completed in 1996, the book took four years to complete. ', 1, NULL, NULL),
(4, 'SA45', 'The God of Small Things was Roy''s first book and as of August 2016 is her only novel. Completed in 1996, the book took four years to complete. ', 1, NULL, NULL);

-- --------------------------------------------------------


--
-- Table structure for table `sa_la__products`
--

CREATE TABLE `sa_la__products` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryId` int(11) NOT NULL,
  `manufacturerId` int(11) NOT NULL,
  `productPrice` double(10,2) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productShortDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `productLongDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `productImage` text COLLATE utf8_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sa_la__products`
--

INSERT INTO `sa_la__products` (`id`, `productName`, `categoryId`, `manufacturerId`, `productPrice`, `productQuantity`, `productShortDescription`, `productLongDescription`, `productImage`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(13, ' Womens Shoes', 5, 4, 500.00, 1, '<p>ssssssssssssssssss</p>', '<p>ssssssssssssssssss</p>', 'productImage/d3.jpg', 0, '2017-05-22 22:24:40', '2017-10-16 23:59:22'),
(14, 'Shoes', 5, 3, 500.00, 2, 'wwwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwwwww', 'productImage/a4.png', 1, '2017-05-22 22:25:13', '2017-05-22 22:33:39'),
(15, 'girls Shoes', 5, 3, 200.00, 2, 'ssss', '0000', 'productImage/a5.png', 1, '2017-05-22 22:25:35', '2017-05-22 22:31:01'),
(17, 'Pants', 4, 4, 500.00, 5, 'hjdfhghkgjrhghuigyuighjghgfihuiohut', 'rtyehiueytiuerytoituoyuiuyuirtyioioyuiertyoeiiortyueiio', 'productImage/wed2.jpg', 0, '2017-05-23 03:54:49', '2017-05-24 01:44:03'),
(19, 'shoes', 6, 3, 1000.00, 25, 'grhrhgyfjghjhkyu', 'yytutryjjytutuu', 'productImage/w1.png', 1, '2017-05-23 03:56:55', '2017-05-23 03:56:55');

-- --------------------------------------------------------




-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'bably', 'bably@gmail.com', '123456', '123456', NULL, NULL),
(4, 'bably', 'bably1@gmail.com', '$2y$10$al.4N6cMKWocEDbKjj.xgOYK3ayWoZaPB.sNOQBsWPLiTUaLjAxry', 'f0VnhYGBTDFfgb4N9Ki4WnJP1BnDSagjTMyh4W1uOfT8zAEEC2vbpFUjyJbm', '2017-05-19 03:36:53', '2017-05-19 03:45:12'),
(7, 'admin', 'admin@gmail.com', '$2y$10$1l1NIMn1o0WtXGAZbu8wcuBL07PzUovllRyijCoklROG7hkprgQdi', '297bhQr81AD8sd9IgWFMSGhpXBRWFfLBaw6wDju07Cthfhe6pifklwg5YCBM', '2017-05-19 03:46:12', '2017-05-25 00:41:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `sa_la__categories`
--
ALTER TABLE `sa_la__categories`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `sa_la__manufactures`
--
ALTER TABLE `sa_la__manufactures`
  ADD PRIMARY KEY (`id`);



--
-- Indexes for table `sa_la__products`
--
ALTER TABLE `sa_la__products`
  ADD PRIMARY KEY (`id`);




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
-- AUTO_INCREMENT for table `sa_la__categories`
--
ALTER TABLE `sa_la__categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sa_la__manufactures`
--
ALTER TABLE `sa_la__manufactures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sa_la__products`
--
ALTER TABLE `sa_la__products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
