-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2024 at 09:24 AM
-- Server version: 10.6.17-MariaDB-log
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soulcrea_alexander`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ig_alexander', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Photography Website', 'https://nmediastudio.com.ng/', 'storage/project_img/1680627390.PNG', '2023-04-04 15:56:30', '2023-04-04 15:56:30'),
(2, 'Ecommerce Website', 'https://ecom.igsoftware.com.ng/', 'storage/project_img/1680627579.PNG', '2023-04-04 15:59:39', '2023-04-04 15:59:39'),
(3, 'Blog Website', 'https://www.suremattas.com/blog', 'storage/project_img/1680682300.PNG', '2023-04-05 07:11:40', '2023-04-05 07:11:40'),
(4, '3Core Technology Website', 'https://3coretechnology.com/', 'storage/project_img/1680687821.PNG', '2023-04-05 08:43:41', '2023-04-05 08:43:41'),
(5, 'KADEB PROFESSIONAL SERVICES', 'https://kadebprofessionalservice.com/', 'storage/project_img/1680688072.PNG', '2023-04-05 08:47:52', '2023-04-05 08:47:52'),
(7, 'School Management System (Edu Drive)', 'https://edu-drive.com/', 'storage/project_img/1714467045.PNG', '2024-04-30 07:50:45', '2024-04-30 07:50:45'),
(8, 'Hotel Management System', 'https://hotel.igsoftware.com.ng/', 'storage/project_img/1714468194.PNG', '2024-04-30 08:09:57', '2024-04-30 08:09:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
