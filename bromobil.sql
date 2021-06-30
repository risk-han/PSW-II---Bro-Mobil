-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 01:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bromobil-try-2`
--

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
(2, '2021_04_28_062734_create_products_table', 1),
(3, '2021_05_03_071046_create_permission_tables', 1),
(5, '2021_05_11_032235_create_payments_table', 2),
(6, '2021_05_13_050212_create_permission_tables', 3),
(7, '2014_10_12_100000_create_password_resets_table', 4),
(8, '2021_05_21_081345_create_posts_table', 4),
(9, '2021_05_21_083742_create_posts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 18),
(2, 'App\\Models\\User', 19),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 24),
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 26),
(2, 'App\\Models\\User', 27),
(2, 'App\\Models\\User', 28),
(2, 'App\\Models\\User', 29),
(2, 'App\\Models\\User', 30),
(2, 'App\\Models\\User', 31);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasiawal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasiakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalawal` date NOT NULL,
  `tanggalakhir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `email`, `lokasiawal`, `lokasiakhir`, `pesan`, `tanggalawal`, `tanggalakhir`, `created_at`, `updated_at`) VALUES
(1, 'Risky Saputra Siahaan', 'allaboutaoustic27@gmail.com', 'medan', 'jakarta', 'saya ingin website ini tidak ada error', '2021-05-17', '2021-05-24', '2021-05-11 21:46:10', '2021-05-11 21:46:10'),
(2, 'Virna', 'virnanatasya@gmail.com', 'medan', 'medan', 'cek', '2021-05-18', '2021-05-17', '2021-05-11 22:01:02', '2021-05-11 22:01:02'),
(3, 'cekk', 'cekk@gmail.com', 'cekk', 'cekk', 'cekk', '2021-05-17', '2021-05-18', '2021-05-11 22:02:40', '2021-05-11 22:02:40'),
(4, 'cekk', 'cekk@gmail.com', 'cekk', 'cekk', 'cekk', '2021-05-17', '2021-05-18', '2021-05-11 22:03:19', '2021-05-11 22:03:19'),
(5, 'cekk', 'cekk@gmail.com', 'cekk', 'cekk', 'cekk', '2021-05-17', '2021-05-23', '2021-05-11 22:05:11', '2021-05-11 22:05:11'),
(6, 'Kevin', 'kevin@gmail.com', 'medan', 'jakarta', 'kevin sempak', '2021-05-13', '2021-05-17', '2021-05-11 22:16:31', '2021-05-11 22:16:31'),
(7, 'Risky Saputra Siahaan', 'allaboutacoustic27@gmail.com', 'Medan', 'Jakarta', 'Saya mau mobil  yang bersih', '2021-05-15', '2021-05-25', '2021-05-11 22:33:17', '2021-05-11 22:33:17'),
(8, 'Risky', 'risky@gmail.com', 'medan', 'jakarta', 'Semoga mobilnya tidak mogok di tengah jalan', '2021-05-13', '2021-05-17', '2021-05-11 23:12:19', '2021-05-11 23:12:19'),
(9, 'Risky Saputra Siahaan', 'risky@gmail.com', 'medan', 'Jakarta', 'saya ingin mobilnya yang terbaik', '2021-05-16', '2021-05-24', '2021-05-11 23:15:20', '2021-05-11 23:15:20'),
(10, 'Risky Saputra Siahaan', 'risky@gmail.com', 'Medan', 'Jakarta', 'saya ingin mobil yang terbaik', '2021-05-13', '2021-05-17', '2021-05-11 23:32:20', '2021-05-11 23:32:20'),
(11, 'Risky Saputra Siahaan', 'allaboutacoustic27@gmail.com', 'Medan', 'Jakarta', 'Saya  ingin mobil terbaik', '2021-05-13', '2021-05-16', '2021-05-12 01:42:21', '2021-05-12 01:42:21'),
(12, 'Matthew Alfredo', 'mathew@gmail.com', 'medan', 'jakarta', 'Saya ingin mobil terbaik', '2021-05-13', '2021-05-17', '2021-05-12 01:48:06', '2021-05-12 01:48:06'),
(13, 'Matthew Alfredo', 'matthew@gmail.com', 'Medan', 'Jakarta', 'Matthew Kevin', '2021-05-13', '2021-05-17', '2021-05-12 01:53:39', '2021-05-12 01:53:39'),
(14, 'Virna Natasya Siburian', 'virna@gmail.com', 'Medan', 'Jakarta', 'Saya ingin mobil terbaik', '2021-05-13', '2021-05-16', '2021-05-12 02:26:03', '2021-05-12 02:26:03'),
(15, 'Cek Cek Cek', 'CekCekCek@gmail.com', 'Cek Cek Cek', 'Cek Cek Cek', 'Cek Cek Cek', '2021-05-14', '2021-05-16', '2021-05-12 18:31:30', '2021-05-12 18:31:30'),
(16, 'Virna Natasya Siburian', 'virnanatasya@gmail.com', 'Medan', 'Jakarta', 'Semoga mobilnya yang terbaik', '2021-05-14', '2021-05-16', '2021-05-12 19:10:04', '2021-05-12 19:10:04'),
(17, 'Lionel Messi', 'messi@gmail.com', 'Barcelona', 'IT Del', 'Semoga mobilnya tidak lecet', '2021-05-15', '2021-05-19', '2021-05-13 19:37:12', '2021-05-13 19:37:12'),
(18, 'Risky Saputra Siahaan', 'allaboutacoustic27@gmail.com', 'Medan', 'Sipiongot', 'Saya ingin mobil yang bagus dan tidak ada cacat sedikitpun', '2021-05-18', '2021-05-23', '2021-05-16 20:53:37', '2021-05-16 20:53:37'),
(19, 'Diaphenia Clarabelle Ernestin Manurung', 'diaphenia@gmail.com', 'medan', 'jakarta', 'Semoga mobilnya tidak yang lecet yaa :)', '2021-05-18', '2021-05-23', '2021-05-17 05:38:38', '2021-05-17 05:38:38'),
(20, 'Kevin Nainggolan', 'kevin@gmail.com', 'Medan', 'Jakarta', 'asndasjndiasjndisajndiasjndisand', '2021-05-19', '2021-05-23', '2021-05-17 20:39:52', '2021-05-17 20:39:52'),
(21, 'Coutinho', 'couthinho@gmail.com', 'medan', 'jakarta', 'semoga mobilnya tidak lecet', '2021-05-22', '2021-05-23', '2021-05-21 02:59:08', '2021-05-21 02:59:08'),
(22, 'Coba coba', 'Cobacoba@gmail.com', 'medan', 'jakarta', 'Semoga mobilnya tidak lecet dan yang terbaik', '2021-05-23', '2021-05-25', '2021-05-21 03:41:32', '2021-05-21 03:41:32'),
(23, 'contoh', 'contoh@gmail.com', 'contoh', 'contoh', 'contoh', '2021-05-23', '2021-05-25', '2021-05-21 03:52:38', '2021-05-21 03:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage-car', 'web', '2021-05-12 22:03:27', '2021-05-12 22:03:27'),
(2, 'manage-user', 'web', '2021-05-19 00:08:05', '2021-05-19 00:08:05'),
(3, 'buy-product', 'web', '2021-05-20 23:38:37', '2021-05-20 23:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `harga`, `stok`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Toyota Avanza', 'Avanza kini diperkuat dengan setting mesin berkubikasi 1.329 cc lengkap bersama 4 silinder dan 16 katup serta teknologi Dual VVT-i yang akan memaksimalkan penggunaan bahan bakar.', 6500000, 12, '20210509092208.jpg', '2021-05-09 02:22:08', '2021-05-09 02:22:08'),
(3, 'Mitsubishi Pajero Sport', 'Pajero Sport siap kembali untuk merajai pasaran kelas SUV, tagar Live The Adventure dari pihak developer sudah menjelaskan secara ringkas apa saja yang mampu dilakukan olehnya', 86000000, 9, '20210509092249.jpg', '2021-05-09 02:22:49', '2021-05-10 17:53:39'),
(4, 'Daihatsu Sigra', 'Daihatsu juga memberikan banyak fitur terbaik pada mobil low MPV mereka. Urusan dapur pacu, Sigra tersedia dalam tiga opsi mesin 1,0, 1,2 dan 1,5 liter yang cukup kompetitif di kelasnya. Fitur hiburan dan keselamatan juga cukup lengkap untuk ukuran mobil MPV kelas budget.', 7600000, 4, '20210517061708.jpg', '2021-05-16 23:17:08', '2021-05-17 05:41:26'),
(5, 'Datsun GO+', 'Kelebihan utama GO+ ada di tampilannya yang tidak sejenuh profil Calya dan Sigra. Mobil ini juga dibekali mesin yang terkenal sangat hemat yang mencapai 22 km per liternya.', 2400000, 5, '20210517061750.jpg', '2021-05-16 23:17:50', '2021-05-16 23:17:50'),
(6, 'Suzuki Karimun Wagon R', 'Suzuki Karimun Wagon R punya performa yang mumpuni untuk melahap jalan perkotaan. Ini karena mesin 1,2 liter yang dibawanya punya keluaran apik sebesar 67 hp dan torsi 90 Nm.', 4300000, 6, '20210517061843.jpg', '2021-05-16 23:18:44', '2021-05-16 23:18:44'),
(7, 'Renault TRIBER', 'Renault melihat zona vakum di segmentasi low end MPV dan memperkenalkan Renault TRIBER yang pertama kali debut di India. Untuk memenuhi perannya sebagai mobil keluarga, TRIBER dibekali dengan ruang untuk menampung penumpang sebagai 7 orang dewasa.', 6500000, 8, '20210517061926.jpg', '2021-05-16 23:19:26', '2021-05-16 23:19:26'),
(8, 'Daihatsu Xenia', 'Tapi perubahan paling terasa pada model ini adalah pada sektor kabin dan interiornya yang kini semakin terlihat mewah. Daihatsu juga menanamkan Dual SRS Air Bag untuk meningkatkan sektor safety mobil ini.', 4300000, 19, '20210517062039.jpg', '2021-05-16 23:20:39', '2021-05-16 23:20:39'),
(9, 'Nissan Livina', 'Mobil ini juga miliki interior yang luas yang punya kapasitas 7 penumpang. Perannya sebagai mobil keluarga terbaik juga semakin terdorong dengan kapasitas bagasinya yang luas. Disinilah nilai lebih Livina jika dibandingkan dengan Avanza dan Xenia.', 4300000, 2, '20210517062115.jpg', '2021-05-16 23:21:15', '2021-05-16 23:21:15'),
(10, 'Suzuki Ertiga', 'sempat jadi idaman banyak keluarga berkat tampilannya yang menarik. Suzuki tahu betul kekuatan mobil MPV mereka dan merombak tampilan ini menjadi lebih baik dalam generasi berikutnya. Garis desain yang sedikit berotot di sisi samping juga membuang kesan MPV gendut yang sebelumnya melekat pada mobil ini.', 6000000, 9, '20210517062200.jpg', '2021-05-16 23:22:00', '2021-05-16 23:38:27'),
(11, 'Wuling Cortez', 'Untuk sebuah mobil keluarga, Wuling Cortez punya beberapa fitur yang sebenarnya premium untuk harganya. Mobil ini punya mode berkendara dan sistem transmisi yang dijejalkan fitur i-AMT (intelligent Automated Mechanical Transmission). Tapi sayang, catatan minor di area desain membuat Wuling Cortez kurang diminati sebagai mobil keluarga.', 5700000, 1, '20210517062242.jpg', '2021-05-16 23:22:42', '2021-05-16 23:22:42'),
(12, 'Toyota Sienta', 'Mobil minivan (atau tepatnya sub-minivan) ini adalah opsi prestis untuk keluarga Indonesia. Dijual mulai dari Rp 259,75 juta hingga Rp 313,55 juta, saingan dari mobil ini berada di ranah SUV seperti Honda CR-V dan Isuzu Panther. Ruang kabin berkapasitas 7 penumpang juga disematkan Toyota untuk jadi daya tarik utama Toyota Sienta.', 6700000, 3, '20210517062327.jpg', '2021-05-16 23:23:27', '2021-05-16 23:23:27'),
(13, 'Isuzu Panther', 'Isuzu Panther mungkin tidak lagi setenar di era 90-an hingga 2000-an. Tapi labelnya sebagai mobil keluarga terbaik cukup pantas dipertahankan. Mobil ini masih menggunakan mesin diesel yang jadi signature touch-nya dengan tenaga maksimum tercatat pada angka 80 hp dan torsi 192 Nm.', 7800000, 7, '20210517062404.jpg', '2021-05-16 23:24:04', '2021-05-16 23:24:04'),
(17, 'contoh', 'contoh', 1231231, 2, '20210521105503.jpg', '2021-05-21 03:55:03', '2021-05-21 03:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-05-12 22:03:16', '2021-05-12 22:03:16'),
(2, 'user', 'web', '2021-05-12 22:03:41', '2021-05-12 22:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$zGScRo7bDyOjT7N8fzdN5.CTxaKftXDvRmnFqtiiTB7oS3kabB4BC', '2021-05-21 03:44:02', '2021-05-21 03:44:02'),
(10, 'Uchiha Itachi', 'itachi@gmail.com', '$2y$10$o5geGvHUa/XDdPJQKet0/.rMuogC4O.ctldfwTJLz1PsK.Zk4RHVm', '2021-04-14 20:39:49', '2021-05-13 20:39:49'),
(12, 'Gojou Satoru', 'satoru@gmail.com', '$2y$10$v8Pd.m0cYVvgkOLkAG/d0.O8E.fQGQxgyHWqx3T31lEHxhlUQ0hwK', '2021-05-13 23:35:25', '2021-05-13 23:35:25'),
(14, 'Virna Natasya Siburian', 'virna@gmail.com', '$2y$10$oFb5FaOKLdaIkk2IBYkJzupkHPiaedz76mU//o1SZnpaTOLB4K.WO', '2021-04-14 20:23:30', '2021-05-14 20:23:30'),
(16, 'Risky Saputra Siahaan', 'allaboutacoustic27@gmail.com', '$2y$10$8Vl5q/I/2A8ev.h9llX2PeOMtR6/S9x67ilMzHCXBlgUBPgp3qYWO', '2021-03-14 20:49:12', '2021-05-16 20:49:12'),
(18, 'Yuko Mizuno', 'yuko@gmail.com', '$2y$10$0V/pqRqj7JN8jLNJw4lAUeJ7CTUOTLmMRzBS4PmJaHO0rAz2sb8hy', '2021-05-16 23:35:07', '2021-05-16 23:35:07'),
(19, 'Diaphenia Manurung', 'diaphenia@gmail.com', '$2y$10$G.X1qJz.tArk2hpz3woDSuVmFYmDn.GcRSfBWsFjhmEttbaK72OXS', '2021-05-17 05:37:11', '2021-05-17 05:37:11'),
(21, 'Tasya Christ', 'tasya@gmail.com', '$2y$10$LZ/PCLuv5f0dgYr.KFocsO8aHf/.1UGcO4LJ9qAvekGqFo8HzWlF2', '2021-05-20 19:18:02', '2021-05-20 19:18:02'),
(22, 'Michael Jackson', 'michael@gmail.com', '$2y$10$95K06SK071eMbFRMHxqaK.jf/ACgWQZZmAesN3DOZl.OQnWkWHt8m', '2021-05-20 20:09:32', '2021-05-20 20:09:32'),
(23, 'Lionel Messi', 'messi@barca.com', '$2y$10$SDL59OvHqgQU3XzLGeoHTeaKzDQJjv1gm/ho0oYP7BkYP5l03bgtu', '2021-05-20 20:10:02', '2021-05-20 20:10:02'),
(24, 'Cristiano Ronaldo', 'cristiano@gmail.com', '$2y$10$fnS/Loeq.HWRXOJ8VigsLe5JiMW46fGAxgIlKMxvxOHyGzIQJVIYC', '2021-06-14 20:10:55', '2021-05-20 20:10:55'),
(25, 'user contoh', 'user@gmail.com', '$2y$10$9iREA2hZyYVKNNP1ahN.M.1NvMik3ANW7e7GR0ZcOyhpZEAG/wo8i', '2021-05-20 23:41:47', '2021-05-20 23:41:47'),
(26, 'contohh contoh', 'contoh@gmail.com', '$2y$10$ZJ3B3oKz3mYWoHubH.gmpOITsyPCaveo7klauP/zp2dmU5zR.GTgS', '2021-05-20 23:49:22', '2021-05-20 23:49:22'),
(27, 'Takuya Hozuki', 'takuya@gmail.com', '$2y$10$8BUcgzAWzRMnuO.JMF./4.gjOjrTeqrnzdXgCLC5w5XyQ6CVpvkba', '2021-05-21 02:57:09', '2021-05-21 02:57:09'),
(28, 'joao felix', 'felix@gmail.com', '$2y$10$4BDW6Lap/44NoagwweTNmewFzN5DFeFUaISi6GAZEIRDIn69xGCYW', '2021-05-21 03:10:24', '2021-05-21 03:10:24'),
(29, 'Akun coba coba', 'cobacoba@gmail.com', '$2y$10$lzxa4p5FLXNJP9l4uZ/W.OB1/iKcAJj66AyPWjSMfopUqxqK3GO0q', '2021-07-15 03:38:46', '2021-05-21 03:38:46'),
(31, 'akun contoh', 'contoh@gmail123.com', '$2y$10$kXxOeTt6N3qykBwLb5JY5eyPCLrdr1QfSfChYXIeTQ8w0kvyoOOwe', '2021-05-21 03:50:51', '2021-05-21 03:50:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
