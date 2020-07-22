-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 08:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `alamat`, `email`, `password`, `jabatan`, `kontak`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Putri Fauziah Rahman', 'Sukamelang, Kroya', 'putrifauziah@gmail.com', '12345678pupuy', 'Pengurus Yayasan', '089658974083', NULL, '2020-06-05 13:38:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_aktivitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Selesai','Belum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `nama_aktivitas`, `tanggal`, `waktu`, `tempat`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Belajar Bahasa Inggris', '2020-06-18', '16.00 - sd selesai', 'Sekretariat Social Class Jatibarang', 'Dibutuhkan 5 volunteer', 'Selesai', '2020-06-14 07:30:03', '2020-06-16 05:14:46'),
(2, 'Sosialisasi tentang Potensi Diri dan Cita-cita', '2020-06-27', '10.00 sd Selesai', 'Gedung PGRI Indramayu', 'Dibutuhkan 15 Volunteer', 'Belum', '2020-06-15 07:30:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_aktivitas`
--

CREATE TABLE `detail_aktivitas` (
  `id` bigint(11) NOT NULL,
  `id_aktivitas` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_volunteer` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_aktivitas`
--

INSERT INTO `detail_aktivitas` (`id`, `id_aktivitas`, `judul`, `id_volunteer`, `nama`, `created_at`, `updated_at`) VALUES
(5, 2, 'Sosialisasi tentang Potensi Diri dan Cita-cita', 7, 'Meita Valensina', '2020-06-15 22:51:57', '2020-06-15 22:51:57'),
(7, 1, 'Belajar Bahasa Inggris', 5, 'Fitriana Cendra Kasih', '2020-06-16 06:22:18', '2020-06-16 06:22:18'),
(8, 1, 'Belajar Bahasa Inggris', 7, 'Meita Valensina', '2020-06-19 00:19:00', '2020-06-19 00:19:00'),
(10, 2, 'Sosialisasi tentang Potensi Diri dan Cita-cita', 5, 'Fitriana Cendra Kasih', '2020-06-19 00:22:09', '2020-06-19 00:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_17_044043_create_aktivitas_table', 1),
(4, '2020_04_30_153707_create_table_admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fitrianack@gmail.com', '$2y$10$TeoJd4Puu/Asjzl1A1HpdeRMff6RptzaIebNE8igchAVbb7Jm5HiK', '2020-06-08 00:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `img`, `alamat`, `desa`, `kecamatan`, `tgl_lahir`, `jk`, `kontak`, `profesi`, `bidang`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Fitriana Cendra Kasih', 'fitrianack@gmail.com', '2020-06-14 00:36:26', '$2y$10$Y2DwgjKNX1TOcIBL3I8pvOXgouFVELvgjFqNCs6x2u2sqNE0Zexjq', NULL, 'Jl Pessanggarahan No. 10 RT/RW 01/01', 'Dukuh', 'Indramayu', '2000-01-08', 'Perempuan', '089658974083', 'CEO', 'Bahasa Inggris', NULL, '2020-06-14 00:34:34', '2020-06-16 06:23:09'),
(7, 'Meita Valensina', 'valensinam@gmail.com', NULL, '$2y$10$.PHOjbg3pTVAaoW6XGo.Qe901rh.Tgwzm794wrbkH2pcxwuKDvzd.', NULL, 'Blok Rengas RT/RW01/01', 'Desa Jatibarang', 'Jatibarang', '2000-05-10', 'Perempuan', '087679076578', 'Guru SD', 'Bahasa Inggris', NULL, '2020-06-15 22:40:21', '2020-06-15 22:40:21'),
(29, 'Rohmatul Jannah', 'mvalensina@gmail.com', '2020-07-15 01:21:01', '$2y$10$NlrDe0gy/EGnTjr.4bxKbOcRpWRTmUiKGRa0WC/81q8wV1ccyJAu6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-15 01:19:24', '2020-07-15 01:21:01'),
(32, 'Meita', 'shabillabintang@gmail.com', NULL, '$2y$10$S4tpWdg.0KiYb551YMQpBOW7m98O2qMHXIV7X838WVdG1ukqgwd6q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-21 22:47:51', '2020-07-21 22:47:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_aktivitas`
--
ALTER TABLE `detail_aktivitas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_aktivitas` (`id_aktivitas`,`id_volunteer`),
  ADD KEY `id_volunteer` (`id_volunteer`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_aktivitas`
--
ALTER TABLE `detail_aktivitas`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_aktivitas`
--
ALTER TABLE `detail_aktivitas`
  ADD CONSTRAINT `detail_aktivitas_ibfk_1` FOREIGN KEY (`id_aktivitas`) REFERENCES `aktivitas` (`id`),
  ADD CONSTRAINT `detail_aktivitas_ibfk_2` FOREIGN KEY (`id_volunteer`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
