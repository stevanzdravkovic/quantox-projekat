-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 07:15 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quantox`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category_name`, `parent`) VALUES
(1, 'Category', NULL),
(2, 'Front', 1),
(3, 'Back', 1),
(4, 'Angular', 2),
(5, 'React', 2),
(6, 'Vue', 2),
(7, 'AngularJs', 4),
(8, 'Angular2', 4),
(9, 'ReactNative', 5),
(10, 'Php', 3),
(11, 'NodeJs', 3),
(12, 'Symfony', 10),
(13, 'Laravel', 10),
(14, 'Silex', 12),
(15, 'Lumen', 13),
(16, 'Express', 11),
(17, 'NestJS', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(5) NOT NULL,
  `name_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `name_user`, `email`, `password`, `category_id`) VALUES
(22, 'Stevan', 'aaa@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 7),
(23, 'Stevan', 'admin@gmail.com', '578d5ad6d436b446a5db03a558112ddf', 8),
(24, 'Stevan', 'admin1@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 9),
(25, 'Stevan', 'aaaa@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 6),
(26, 'Stevan', 'aaaaaaaaaaaaa@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 14),
(27, 'Stevan', 'bane@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 15),
(28, 'Stevan', 'pera@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 16),
(29, 'Stevan', 'goga@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 17),
(30, 'Stevan', 'aasa@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 7),
(31, 'Stevan', 'koko@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 8),
(32, 'Stevan', 'ppera@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 13),
(33, 'Stevan', 'steva@gmail.com', 'b8332426db619724f720c69d73741896', 14),
(34, 'Stevan', 'aaaaaaa1@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 16),
(35, 'Stevan', 'ppp@gmail.com', '8ab18827eb6877f6d400ee67ec732ee7', 15),
(36, 'Stevan', 'aaaaa@gmail.com', '4423f3812d3eaeda369e9cbe963a7854', 7),
(37, 'Stevan', 'stev@gmail.com', '440220aa487a592881324212d7c9ef6f', 16),
(38, 'Stevan', 'mmm@gmail.com', 'fe008700f25cb28940ca8ed91b23b354', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
