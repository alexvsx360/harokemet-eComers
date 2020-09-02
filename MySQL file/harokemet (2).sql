-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 02, 2020 at 06:16 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harokemet`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` text NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `curl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `cimage`, `curl`, `updated_at`, `created_at`) VALUES
(16, 'Brooches', 'will spice up every look', '2019-11-23-05-32-01-category brooches.png', 'brooches', '2019-11-23 17:32:02', '2019-11-09 13:39:19'),
(17, 'Christmas', 'let the holiday season sparkle', '2019-11-09-01-44-39-category christmas.png', 'christmas', '2019-11-09 13:44:40', '2019-11-09 13:44:19'),
(18, 'Earrings', 'hand made with love', '2019-11-09-01-46-55-earring category.png', 'earrings', '2019-11-09 13:46:56', '2019-11-09 13:46:56'),
(19, 'Hoop embroidery wall decor', 'Decorate your living space', '2019-11-09-01-56-04-hoop category.png', 'hoop-embroidery-wall-decor', '2019-11-09 13:56:05', '2019-11-09 13:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `ctitle1` varchar(255) DEFAULT NULL,
  `carticle1` longtext,
  `ctitle2` varchar(255) DEFAULT NULL,
  `carticle2` longtext,
  `ctitle3` varchar(255) DEFAULT NULL,
  `carticle3` longtext,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `ctitle1`, `carticle1`, `ctitle2`, `carticle2`, `ctitle3`, `carticle3`, `updated_at`, `created_at`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` longtext NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `murl` varchar(255) NOT NULL,
  `mtitle` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `murl`, `mtitle`, `updated_at`, `created_at`) VALUES
(3, 'Blog', 'blog', 'Blog', '2019-11-19 17:19:04', '2019-10-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_data` text NOT NULL,
  `total` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `ship_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_data`, `total`, `updated_at`, `created_at`, `ship_number`) VALUES
(22, 19, 'a:1:{i:47;a:6:{s:2:\"id\";s:2:\"47\";s:4:\"name\";s:23:\"Christmas tree ornament\";s:5:\"price\";d:28;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:47:\"2019-11-19-04-56-36-product orange ornament.png\";}s:10:\"conditions\";a:0:{}}}', 28, '2020-09-02 18:15:33', '2020-09-02 18:14:40', 'asdfgfh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` text NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `purl`, `price`, `updated_at`, `created_at`) VALUES
(44, 16, 'Bee broch', '<p>Cute Bee brooch, hand embroidered on felt with faux leather backing.</p><p>Great as a gift for yourself or your loved ones.</p>', '2019-11-09-02-07-11-bee with eyes product.png', 'bee-broch', 30, '2019-11-10 08:55:57', '2019-11-09 14:07:12'),
(45, 16, 'Blue fish Brooch', '<p>Fish shaped embroidery brooch,&nbsp;</p><p>Made by hand using high quality DMC embroidery floss on felt.</p><p><br></p><p>great as gift for yourself or for your loved one!</p>', '2019-11-09-02-20-35-blue fish product.png', 'blue-fish-brooch', 28, '2019-11-19 15:54:39', '2019-11-09 14:20:36'),
(46, 16, 'Dragonfly brooch', '<p>dragonfly shaped embroidery brooch,&nbsp;</p><p>Made by hand using high quality DMC embroidery floss on felt.</p><p>add some spark to your day!</p><p>great as gift for yourself or for your loved one!</p>', '2019-11-09-02-50-45-gold dragonfly product.png', 'dragonfly-brooch', 28, '2019-11-19 15:58:50', '2019-11-09 14:50:46'),
(47, 17, 'Christmas tree ornament', '<p>rust coloured embroidery Christmas tree ornament.</p>', '2019-11-19-04-56-36-product orange ornament.png', 'christmas-tree-ornament', 28, '2019-11-19 16:56:37', '2019-11-17 19:29:16'),
(49, 18, 'fall leaf earrings', '<p>cute little earrings in a shape of a fall leaf.</p><p>sparkling with beautiful leafs, will complete any outfit!</p>', '2019-11-19-03-51-40-orange leaf earrings product.png', 'fall-leaf-earrings', 28, '2019-11-19 15:51:41', '2019-11-19 15:51:41'),
(50, 16, 'Green leaf brooch', '<p>leaf shaped embroidery brooch,&nbsp;</p><p>Made by hand using high quality DMC embroidery floss on felt.</p><p>complete with a green cristal that will shine in the sun!</p><p>great as gift for yourself or for your loved one!</p>', '2019-11-19-04-05-20-green cristal leaf brooch product.png', 'green-leaf-brooch', 28, '2019-11-19 16:05:21', '2019-11-19 16:05:21'),
(51, 19, '\"Fish in sea\" wall decor', '<p>sea themed embroidery made using high quality DMC floss on felt,</p><p>framed in wood hoop, ready to decorate your living space.</p>', '2019-11-19-04-38-14-fish hoop product.png', 'fish-in-sea-wall-decor', 28, '2019-11-19 16:38:15', '2019-11-19 16:21:47'),
(52, 19, '\"swimming with the fish\"', '<p>sea themed embroidery made using high quality DMC floss on felt,</p><p>framed in wood hoop, ready to decorate your living space.</p>', '2019-11-19-04-26-23-diver hoop product.png', 'swimming-with-the-fish', 28, '2019-11-19 16:26:24', '2019-11-19 16:26:24'),
(53, 19, 'spider hoop art', '<p>spider with flowers embroidery made using high quality DMC floss on felt,</p><p>framed in wood hoop, ready to decorate your living space.</p>', '2019-11-19-04-53-59-spider hoop product.png', 'spider-hoop-art', 30, '2019-11-19 16:54:00', '2019-11-19 16:50:59'),
(54, 19, 'butanical wall decor', '<p>flowers an leafs embroidery made using high quality DMC floss on felt,</p><p>framed in wood hoop, ready to decorate your living space.</p>', '2019-11-19-04-53-12-flower hoop product.png', 'butanical-wall-decor', 30, '2019-11-19 16:53:13', '2019-11-19 16:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '2019-10-22 15:11:10', '2019-10-22 15:11:10'),
(2, '--', '--', '--', '2019-10-22 15:11:10', '2019-10-22 15:11:10'),
(19, 'user', 'user@gmail.com', '$2y$10$DHl4OVtj/MU0jj0ISGlgl.4K0BUqr.R93y5IUZ1mHbCvoOabyu/ka', '2020-09-02 18:02:30', '2020-09-02 18:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `users_datas`
--

CREATE TABLE `users_datas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_datas`
--

INSERT INTO `users_datas` (`id`, `user_id`, `first_name`, `last_name`, `phone`, `address`, `country`, `state`, `zip`, `created_at`, `updated_at`) VALUES
(10, 19, 'user', 'user', 54505450545, 'user street', 'Israel', 'None', '098765', '2020-09-02 21:02:30', '2020-09-02 21:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`user_id`, `role_id`, `id`) VALUES
(19, 6, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`curl`) USING BTREE;

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `murl` (`murl`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purl` (`purl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_datas`
--
ALTER TABLE `users_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_datas`
--
ALTER TABLE `users_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;