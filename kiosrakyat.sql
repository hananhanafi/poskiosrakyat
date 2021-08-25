-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2021 at 05:29 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiosrakyat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('superadmin','admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` enum('all','all_consumer','all_retailer','consumer','retailer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancelled_reason`
--

CREATE TABLE `cancelled_reason` (
  `id_cancelled_reason` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('consumer','retailer','admin','system') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id_consumer` int(11) NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `suspended_until` timestamp NULL DEFAULT NULL,
  `referral_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_code` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consumer_alamat`
--

CREATE TABLE `consumer_alamat` (
  `id_consumer_alamat` int(11) NOT NULL,
  `id_consumer` int(11) NOT NULL,
  `village_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consumer_cart`
--

CREATE TABLE `consumer_cart` (
  `id_consumer` int(11) NOT NULL,
  `id_retailer_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_11_19_083128_create_retailer_table', 1),
(7, '2020_11_19_083129_create_ref_produk_table', 1),
(8, '2020_11_19_083129_create_retailer_operator_table', 1),
(9, '2020_11_19_083129_create_retailer_produk_table', 1),
(10, '2020_11_19_083130_create_pesanan_pos_table', 1),
(11, '2020_11_19_083130_create_pos_cart_table', 1),
(12, '2020_11_19_083131_create__district_table', 1),
(13, '2020_11_19_083131_create__province_table', 1),
(14, '2020_11_19_083131_create__regency_table', 1),
(15, '2020_11_19_083131_create__village_table', 1),
(16, '2020_11_19_083131_create_admin_table', 1),
(17, '2020_11_19_083131_create_banner_table', 1),
(18, '2020_11_19_083131_create_berita_table', 1),
(19, '2020_11_19_083131_create_cancelled_reason_table', 1),
(20, '2020_11_19_083131_create_consumer_alamat_table', 1),
(21, '2020_11_19_083131_create_consumer_cart_table', 1),
(22, '2020_11_19_083131_create_consumer_table', 1),
(23, '2020_11_19_083131_create_notifikasi_table', 1),
(24, '2020_11_19_083131_create_pengiriman_table', 1),
(25, '2020_11_19_083131_create_pesanan_detail_table', 1),
(26, '2020_11_19_083131_create_pesanan_pos_detail_table', 1),
(27, '2020_11_19_083131_create_pesanan_produk_digital_table', 1),
(28, '2020_11_19_083131_create_pesanan_rules_table', 1),
(29, '2020_11_19_083131_create_pesanan_table', 1),
(30, '2020_11_19_083131_create_pos_cart_detail_table', 1),
(31, '2020_11_19_083131_create_produk_digital_table', 1),
(32, '2020_11_19_083131_create_ref_bank_table', 1),
(33, '2020_11_19_083131_create_ref_kategori_table', 1),
(34, '2020_11_19_083131_create_ref_merk_table', 1),
(35, '2020_11_19_083131_create_retailer_pengiriman_table', 1),
(36, '2020_11_19_083131_create_retailer_produk_stok_detail_table', 1),
(37, '2020_11_19_083131_create_retailer_produk_stok_table', 1),
(38, '2020_11_19_083131_create_voucher_table', 1),
(39, '2020_11_19_093011_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `target` enum('all','all_consumer','all_retailer','consumer','retailer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` int(11) DEFAULT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `type` enum('ekspress','reguler') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countdown` int(11) NOT NULL COMMENT 'in minutes',
  `service_start` time NOT NULL,
  `service_end` time NOT NULL,
  `biaya` int(11) NOT NULL DEFAULT '0',
  `satuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `kode_pesanan` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_consumer` int(11) NOT NULL,
  `id_voucher` int(11) DEFAULT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `no_resi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_harga` double NOT NULL,
  `ongkir` double NOT NULL,
  `potongan` double NOT NULL,
  `total_bayar` double NOT NULL,
  `ordered_at` timestamp NULL DEFAULT NULL,
  `confirmed_at` timestamp NULL DEFAULT NULL,
  `ondelivery_at` timestamp NULL DEFAULT NULL,
  `delivered_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `cancelled_at` timestamp NULL DEFAULT NULL,
  `cancelled_reason` text COLLATE utf8mb4_unicode_ci,
  `rating` int(11) DEFAULT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `id_pesanan_detail` int(11) NOT NULL,
  `kode_pesanan` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_retailer_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_pos`
--

CREATE TABLE `pesanan_pos` (
  `kode_pesanan` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_retailer` int(11) NOT NULL,
  `id_retailer_operator` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_pos`
--

INSERT INTO `pesanan_pos` (`kode_pesanan`, `id_retailer`, `id_retailer_operator`, `tanggal`) VALUES
('POS20210501112247', 31, 2, '2021-04-19 07:52:14'),
('POS20210519143606', 31, 5, '2021-04-19 07:52:14'),
('POS20210601224308', 31, 0, '2021-05-01 15:43:52'),
('POS20210601224640', 31, NULL, '2021-05-01 15:46:40'),
('POS20210615124920', 31, NULL, '2021-06-15 05:49:20'),
('POS20210617144002', 31, 2, '2021-06-17 07:40:02'),
('POS20210617144244', 31, NULL, '2021-06-17 07:42:44'),
('POS20210617150750', 31, NULL, '2021-06-17 08:07:50');

--
-- Triggers `pesanan_pos`
--
DELIMITER $$
CREATE TRIGGER `create_kode_pesanan_pos` BEFORE INSERT ON `pesanan_pos` FOR EACH ROW BEGIN
    DECLARE rowcount INT;
    
    SELECT COUNT(*) 
    INTO rowcount
    FROM pesanan_pos WHERE tanggal = NOW();
    
    IF rowcount > 0 THEN
        SET NEW.kode_pesanan = CONCAT('POS',DATE_FORMAT(NOW(), '%Y%m%d%H%i%s'),rowcount);
    ELSE
        SET NEW.kode_pesanan = CONCAT('POS',DATE_FORMAT(NOW(), '%Y%m%d%H%i%s'));
    END IF; 

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_pos_detail`
--

CREATE TABLE `pesanan_pos_detail` (
  `id_pesanan_pos_detail` int(11) NOT NULL,
  `kode_pesanan` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_retailer_produk` int(11) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_pos_detail`
--

INSERT INTO `pesanan_pos_detail` (`id_pesanan_pos_detail`, `kode_pesanan`, `id_retailer_produk`, `harga`, `jumlah`, `subtotal`) VALUES
(21, 'POS20210501112247', 27, 47464.21, 2, 94928.42),
(26, 'POS20210519143606', 15, 14972.26, 2, 29944.52),
(31, 'POS20210601224308', 32, 3400, 1, 3400),
(33, 'POS20210601224640', 32, 3400, 1, 3400),
(41, 'POS20210615124920', 1, 48170.03, 1, 48170.03),
(42, 'POS20210617144002', 2, 60917.01, 1, 60917.01),
(43, 'POS20210617144244', 3, 71175.74, 1, 71175.74),
(44, 'POS20210617150750', 2, 60917.01, 1, 60917.01),
(45, 'POS20210617150750', 1, 48170.03, 1, 48170.03);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_produk_digital`
--

CREATE TABLE `pesanan_produk_digital` (
  `kode_pesanan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_consumer` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `penerima` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk_digital` int(11) NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `potongan` double NOT NULL,
  `total_bayar` double NOT NULL,
  `ordered_at` timestamp NULL DEFAULT NULL,
  `confirmed_at` timestamp NULL DEFAULT NULL,
  `processed_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `cancelled_at` timestamp NULL DEFAULT NULL,
  `cancelled_reason` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_rules`
--

CREATE TABLE `pesanan_rules` (
  `id_pesanan_rules` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_response_time` int(11) NOT NULL DEFAULT '0' COMMENT 'in minutes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pos_cart`
--

CREATE TABLE `pos_cart` (
  `id_pos_cart` int(11) NOT NULL,
  `id_retailer` int(11) NOT NULL,
  `id_retailer_operator` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pos_cart`
--

INSERT INTO `pos_cart` (`id_pos_cart`, `id_retailer`, `id_retailer_operator`) VALUES
(1, 1, NULL),
(2, 31, NULL),
(3, 31, 2),
(4, 31, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pos_cart_detail`
--

CREATE TABLE `pos_cart_detail` (
  `id_pos_cart_detail` int(11) NOT NULL,
  `id_pos_cart` int(11) NOT NULL,
  `id_retailer_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pos_cart_detail`
--

INSERT INTO `pos_cart_detail` (`id_pos_cart_detail`, `id_pos_cart`, `id_retailer_produk`, `jumlah`) VALUES
(1, 1, 30, 2),
(3, 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk_digital`
--

CREATE TABLE `produk_digital` (
  `id_produk_digital` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_digital`
--

INSERT INTO `produk_digital` (`id_produk_digital`, `nama`, `harga_beli`, `harga_jual`, `stok`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Farrell LLC', 86777.51, 27170.74, 5, NULL, NULL, NULL),
(2, 'Little-Schmidt', 34865.41, 46642.6, 1, NULL, NULL, NULL),
(3, 'Walsh, Collins and Donnelly', 96198.79, 63287.97, 2, NULL, NULL, NULL),
(4, 'Larkin-Bergnaum', 76196.7, 83647.86, 4, NULL, NULL, NULL),
(5, 'Howell-Fay', 55179.74, 20729.86, 5, NULL, NULL, NULL),
(6, 'Hill, Heaney and Connelly', 20391.79, 97349.17, 4, NULL, NULL, NULL),
(7, 'Jerde, Smith and Connelly', 3071.05, 11238.3, 3, NULL, NULL, NULL),
(8, 'Marquardt-Heathcote', 71095.15, 81318.41, 3, NULL, NULL, NULL),
(9, 'Leannon Inc', 62349.13, 58447.05, 5, NULL, NULL, NULL),
(10, 'Vandervort, Vandervort and Kirlin', 30391.63, 71098.33, 4, NULL, NULL, NULL),
(11, 'Walter, Yost and Fisher', 45805.81, 73142.14, 1, NULL, NULL, NULL),
(12, 'Bednar-Herzog', 58724.69, 66611.47, 4, NULL, NULL, NULL),
(13, 'Schiller-Ferry', 18781.29, 43696.29, 4, NULL, NULL, NULL),
(14, 'Cronin LLC', 66798.18, 57365.94, 4, NULL, NULL, NULL),
(15, 'Heller, Kessler and Morar', 79420.64, 62096.64, 2, NULL, NULL, NULL),
(16, 'Lehner-Batz', 67892.7, 86915.49, 3, NULL, NULL, NULL),
(17, 'O\'Connell and Sons', 56601.12, 25928.05, 2, NULL, NULL, NULL),
(18, 'Hand and Sons', 31465.02, 87524.36, 2, NULL, NULL, NULL),
(19, 'Conroy, Abshire and Kuvalis', 34859.41, 79026.76, 5, NULL, NULL, NULL),
(20, 'Simonis, Rutherford and Skiles', 87940.42, 67246.23, 4, NULL, NULL, NULL),
(21, 'Legros-Hegmann', 23715.13, 26153.35, 4, NULL, NULL, NULL),
(22, 'Hahn, Kshlerin and Hamill', 4614.21, 38907.24, 1, NULL, NULL, NULL),
(23, 'Bernier, Wehner and Powlowski', 34765.21, 23925.39, 1, NULL, NULL, NULL),
(24, 'Gutmann Ltd', 93816.58, 66478.87, 4, NULL, NULL, NULL),
(25, 'Collins-Kling', 1164.41, 94639.07, 2, NULL, NULL, NULL),
(26, 'Hettinger-Cassin', 72048.18, 73659.12, 5, NULL, NULL, NULL),
(27, 'Corwin Group', 86263.77, 98793.44, 4, NULL, NULL, NULL),
(28, 'Kohler LLC', 40497.15, 68286.73, 1, NULL, NULL, NULL),
(29, 'Sipes PLC', 34723.96, 24699.36, 1, NULL, NULL, NULL),
(30, 'McClure PLC', 41529.54, 46497.1, 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_bank`
--

CREATE TABLE `ref_bank` (
  `id_ref_bank` int(11) NOT NULL,
  `kode_bank` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_kategori`
--

CREATE TABLE `ref_kategori` (
  `id_ref_kategori` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_merk`
--

CREATE TABLE `ref_merk` (
  `id_ref_merk` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_produk`
--

CREATE TABLE `ref_produk` (
  `id_ref_produk` int(11) NOT NULL,
  `id_ref_kategori` int(11) NOT NULL,
  `id_ref_merk` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ref_produk`
--

INSERT INTO `ref_produk` (`id_ref_produk`, `id_ref_kategori`, `id_ref_merk`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'Okuneva LLC', NULL, NULL, NULL),
(2, 10, 9, 'Douglas-Schiller', NULL, NULL, NULL),
(3, 6, 4, 'Schroeder-Ruecker', NULL, NULL, NULL),
(4, 4, 5, 'Watsica, Wiza and Olson', NULL, NULL, NULL),
(5, 7, 4, 'Wyman PLC', NULL, NULL, NULL),
(6, 7, 7, 'Kertzmann, Rosenbaum and Mosciski', NULL, NULL, NULL),
(7, 10, 3, 'Heller Group', NULL, NULL, NULL),
(8, 8, 4, 'Walker LLC', NULL, NULL, NULL),
(9, 3, 5, 'Purdy, Steuber and Rau', NULL, NULL, NULL),
(10, 7, 3, 'Kunde-Torphy', NULL, NULL, NULL),
(11, 5, 5, 'Wiegand-Schimmel', NULL, NULL, NULL),
(12, 3, 1, 'Deckow-Veum', NULL, NULL, NULL),
(13, 4, 10, 'Borer-Spencer', NULL, NULL, NULL),
(14, 5, 5, 'Farrell, Brown and Hudson', NULL, NULL, NULL),
(15, 8, 1, 'Grady-Cassin', NULL, NULL, NULL),
(16, 8, 6, 'Erdman Ltd', NULL, NULL, NULL),
(17, 10, 9, 'Jacobi-Jast', NULL, NULL, NULL),
(18, 10, 2, 'Oberbrunner, Shanahan and Okuneva', NULL, NULL, NULL),
(19, 4, 4, 'Mertz Ltd', NULL, NULL, NULL),
(20, 2, 6, 'Spencer-Cormier', NULL, NULL, NULL),
(21, 3, 9, 'Bergstrom-Turcotte', NULL, NULL, NULL),
(22, 7, 5, 'Johns LLC', NULL, NULL, NULL),
(23, 6, 8, 'Schmeler, Huels and Roob', NULL, NULL, NULL),
(24, 4, 7, 'Goldner PLC', NULL, NULL, NULL),
(25, 8, 2, 'Smitham, Renner and Adams', NULL, NULL, NULL),
(26, 2, 8, 'Schinner, Schaefer and Kub', NULL, NULL, NULL),
(27, 6, 4, 'Cremin-Ondricka', NULL, NULL, NULL),
(28, 3, 3, 'Labadie-Bernhard', NULL, NULL, NULL),
(29, 10, 4, 'Batz, Kirlin and Abshire', NULL, NULL, NULL),
(30, 5, 2, 'Miller Inc', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `id_retailer` int(11) NOT NULL,
  `nama_toko` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_foto_depan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_foto_ktp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ref_bank` int(11) DEFAULT NULL,
  `no_rekening` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_at` time DEFAULT NULL,
  `closed_at` time DEFAULT NULL,
  `is_open` tinyint(4) NOT NULL DEFAULT '0',
  `warning_count` int(11) NOT NULL,
  `suspend_start` timestamp NULL DEFAULT NULL,
  `suspend_end` timestamp NULL DEFAULT NULL,
  `suspend_count` int(11) NOT NULL DEFAULT '0',
  `saldo` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reviewed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`id_retailer`, `nama_toko`, `nama_pemilik`, `username`, `password`, `no_hp`, `village_id`, `alamat`, `latitude`, `longitude`, `file_foto_depan`, `file_foto_ktp`, `id_ref_bank`, `no_rekening`, `open_at`, `closed_at`, `is_open`, `warning_count`, `suspend_start`, `suspend_end`, `suspend_count`, `saldo`, `created_at`, `updated_at`, `reviewed_at`) VALUES
(1, 'Murphy, Lebsack and Lesch', 'Lawrence Ullrich', 'awill', 'aP=y;}5Sd?~J', '+4982392783751', '57102', '20407 Kasandra Flats Apt. 503\nEast Jalonborough, DC 38973', '-43.065307', '-174.812597', 'https://via.placeholder.com/640x480.png/004422?text=people+natus', 'https://via.placeholder.com/640x480.png/00cc00?text=people+temporibus', 50, '887439410', '19:42:07', '07:06:42', 4, 2, '1984-01-21 05:21:06', '1982-04-09 23:03:32', 2, 33608.17, '2021-05-02 17:00:00', '2021-05-02 17:00:00', '2021-05-02 17:00:00'),
(2, 'Fisher, Kutch and Osinski', 'Rhea Corkery', 'doris85', 'K\"c:a>84Aa\"x5)', '+2426588688854', '61371', '85060 Celia Mall Apt. 381\nEast June, NH 53052-9500', '-25.853807', '-3.818608', 'https://via.placeholder.com/640x480.png/00bb88?text=people+odit', 'https://via.placeholder.com/640x480.png/00cc44?text=people+dolores', 34, '02864962435', '05:01:50', '02:06:47', 1, 1, '2004-07-08 04:23:29', '1994-03-02 12:15:48', 2, 72959.04, NULL, NULL, NULL),
(3, 'Funk-Willms', 'Euna Grant', 'beverly.jones', ',S{Ar#<P)e6Z{i/', '+3717555844918', '77059', '27508 Marcelino Coves Apt. 991\nNew Ambrosemouth, UT 60677-6362', '35.47828', '177.195843', 'https://via.placeholder.com/640x480.png/0055cc?text=people+adipisci', 'https://via.placeholder.com/640x480.png/0066dd?text=people+dicta', 14, '3032815', '12:43:02', '18:49:18', 4, 1, '1997-10-18 13:18:26', '2018-07-24 13:00:41', 1, 57702.84, NULL, NULL, NULL),
(4, 'Rohan and Sons', 'Prof. Kaylee Ledner MD', 'moses17', 'lX$f6X?Z', '+1587378986912', '33550', '91525 Deja Park\nNew Breanaton, NC 53363', '20.172357', '-113.549444', 'https://via.placeholder.com/640x480.png/006644?text=people+ea', 'https://via.placeholder.com/640x480.png/00ffee?text=people+dicta', 22, '8795262536', '18:09:43', '21:20:35', 1, 2, '1996-03-22 04:35:13', '2005-10-09 13:14:34', 2, 21303.36, NULL, NULL, NULL),
(5, 'O\'Reilly-Rosenbaum', 'Miss Kendra Bednar IV', 'vhalvorson', 'L\'^plk/+hbnxTjZ-', '+7583002098185', '3848', '9999 Alfonzo Center Suite 038\nColebury, IN 78211-0726', '-78.477535', '120.747666', 'https://via.placeholder.com/640x480.png/00aaaa?text=people+porro', 'https://via.placeholder.com/640x480.png/00bb66?text=people+mollitia', 11, '616953183675', '13:59:09', '10:33:30', 3, 1, '1986-02-06 01:54:22', '1976-07-12 03:25:16', 1, 26721.5, NULL, NULL, NULL),
(6, 'Nikolaus-Kautzer', 'Vicenta Hackett', 'upfannerstill', 'vSHx~uhy', '+9177949910006', '39459', '8271 Dicki Court Suite 841\nLake Brownstad, NJ 83066-8379', '-64.081864', '-126.118994', 'https://via.placeholder.com/640x480.png/004499?text=people+unde', 'https://via.placeholder.com/640x480.png/00ee00?text=people+perferendis', 6, '21510625940', '22:28:58', '20:55:45', 3, 2, '1980-02-28 11:01:03', '2006-06-21 08:08:49', 1, 29624.78, NULL, NULL, NULL),
(7, 'Schinner-Upton', 'Helen Runolfsdottir PhD', 'hjerde', 'K|&`3H,TLtr>Q', '+4505720422976', '29245', '7342 Friesen Lodge Apt. 053\nKorbinberg, TN 95214-7712', '-74.709019', '-96.817564', 'https://via.placeholder.com/640x480.png/005511?text=people+nesciunt', 'https://via.placeholder.com/640x480.png/0033aa?text=people+velit', 20, '0134124130177', '17:02:32', '16:37:41', 3, 2, '1997-06-03 22:04:45', '1970-10-02 21:54:37', 1, 94682.62, NULL, NULL, NULL),
(8, 'Powlowski, Pfannerstill and Rogahn', 'Reina Wilderman', 'dgibson', 'ILxPH?r}IoP?e\\!.vNEK', '+6431554789876', '28873', '3953 Fahey Isle Apt. 416\nBartonfurt, WY 80798', '-22.71699', '95.903838', 'https://via.placeholder.com/640x480.png/00dd55?text=people+totam', 'https://via.placeholder.com/640x480.png/007744?text=people+pariatur', 1, '1428719181', '07:29:43', '11:24:53', 1, 2, '1993-12-30 14:12:40', '1993-04-09 05:36:53', 1, 92590.7, NULL, NULL, NULL),
(9, 'Hickle, Beer and Haley', 'Prof. Kennedi Stark MD', 'whaag', 'zp0B2Z[4yhL$bd@fk', '+6181548848051', '27504', '8167 Donavon Extensions\nSunnyhaven, AR 04165', '88.866902', '-9.443156', 'https://via.placeholder.com/640x480.png/00aa00?text=people+deserunt', 'https://via.placeholder.com/640x480.png/00ff44?text=people+voluptatem', 46, '590202756', '10:01:29', '18:54:50', 1, 1, '2005-07-17 09:26:58', '1980-02-18 16:52:00', 2, 44307.44, NULL, NULL, NULL),
(10, 'Crona-Rau', 'Evie Gleichner II', 'maverick33', 'Fl`h$w8R=b`TmH', '+3406413764330', '52199', '335 Strosin Roads Suite 730\nBorerside, MS 45526', '29.607305', '-69.306525', 'https://via.placeholder.com/640x480.png/003311?text=people+rerum', 'https://via.placeholder.com/640x480.png/005522?text=people+porro', 29, '794668812393', '04:37:25', '01:45:56', 4, 2, '1983-03-03 13:46:10', '2015-02-18 17:35:36', 2, 95696.49, NULL, NULL, NULL),
(11, 'Lueilwitz-Hayes', 'Dr. Seth Bauch I', 'kihn.jaylen', ':*|MTTPm$U`zBAc3', '+3516760003633', '14840', '8280 Hassan Plains\nSchowalterburgh, IA 49977', '4.887729', '177.64081', 'https://via.placeholder.com/640x480.png/006633?text=people+dolores', 'https://via.placeholder.com/640x480.png/00aa00?text=people+quod', 26, '088501950165', '19:56:12', '02:21:59', 2, 2, '2005-03-24 20:52:58', '1982-12-05 12:21:54', 1, 29036.11, NULL, NULL, NULL),
(12, 'Reinger Inc', 'Tristin Block', 'jarret.rutherford', 'U<P\'ak5$IBtP^', '+5147535190759', '37994', '79644 Chaya Cliff Apt. 332\nDandreborough, MS 69869', '7.39043', '0.30353', 'https://via.placeholder.com/640x480.png/003366?text=people+explicabo', 'https://via.placeholder.com/640x480.png/000055?text=people+molestias', 26, '196094872', '18:39:49', '20:20:21', 1, 1, '2020-06-05 12:18:53', '2012-11-01 23:37:49', 1, 71779.21, NULL, NULL, NULL),
(13, 'Doyle LLC', 'Mr. Federico Keeling II', 'bode.stone', 'ZRE\\C?L{r8/(\\<', '+6105919782901', '5454', '532 Mustafa Stream Apt. 227\nSouth Mariamton, MI 34975', '60.960743', '46.071064', 'https://via.placeholder.com/640x480.png/009922?text=people+et', 'https://via.placeholder.com/640x480.png/00ffdd?text=people+sit', 5, '684576121459', '11:50:09', '03:47:15', 3, 1, '2000-10-13 17:17:48', '1980-06-14 23:07:17', 2, 56806.02, NULL, NULL, NULL),
(14, 'Grant Inc', 'Stanford Moore', 'adell.ward', 'nu\\ihx7=p;I/n\\Ma?', '+8116154251725', '46251', '7046 Luella Mountain Apt. 026\nAugustusfurt, MD 84327', '28.806466', '21.15771', 'https://via.placeholder.com/640x480.png/008866?text=people+accusantium', 'https://via.placeholder.com/640x480.png/006677?text=people+nostrum', 29, '78707303085310', '11:37:22', '20:24:04', 1, 2, '2014-10-11 03:00:56', '2003-05-06 07:12:42', 2, 56548.17, NULL, NULL, NULL),
(15, 'Schoen Inc', 'Prof. Glen Torp MD', 'sid34', 'vG%p^(', '+6727062820708', '21356', '854 Daniel Mount Apt. 766\nPurdytown, AK 85772-6377', '-9.805008', '-109.704048', 'https://via.placeholder.com/640x480.png/00aaaa?text=people+veniam', 'https://via.placeholder.com/640x480.png/008877?text=people+veniam', 5, '0064211', '21:01:32', '23:15:29', 2, 2, '1979-02-04 15:40:41', '1972-07-25 10:54:33', 1, 94215.16, NULL, NULL, NULL),
(16, 'Walker-Boyle', 'Clark Larkin PhD', 'nitzsche.briana', ';I8f[o', '+6393107443775', '72177', '158 Glover Crest\nFerminborough, PA 87750', '-12.364851', '179.108378', 'https://via.placeholder.com/640x480.png/0066aa?text=people+sequi', 'https://via.placeholder.com/640x480.png/004444?text=people+quaerat', 5, '29734809465579', '06:57:05', '15:51:39', 2, 1, '2019-10-31 15:03:45', '1972-02-14 05:48:07', 1, 37836.48, NULL, NULL, NULL),
(17, 'Harvey, O\'Hara and Beer', 'Luisa Ferry', 'gibson.maddison', 'VQ_E_hW#n{Nug', '+2505982335079', '34177', '48616 Nathaniel Curve Apt. 190\nDavonteburgh, TN 17809', '85.995626', '-122.377909', 'https://via.placeholder.com/640x480.png/006688?text=people+animi', 'https://via.placeholder.com/640x480.png/00dddd?text=people+qui', 50, '46635217964578', '06:19:45', '15:57:07', 3, 1, '1970-12-30 12:01:05', '1982-06-24 15:37:54', 2, 86628.55, NULL, NULL, NULL),
(18, 'Swift Inc', 'Ned Morissette', 'audie18', 'lY2Du\"@opR$w?@', '+3183879308676', '42194', '686 Katharina Station\nPort Justusstad, MO 99592-0926', '-18.015207', '148.144753', 'https://via.placeholder.com/640x480.png/00cc77?text=people+atque', 'https://via.placeholder.com/640x480.png/00aaff?text=people+ut', 7, '07401561470', '10:12:45', '05:42:29', 1, 2, '1998-03-14 03:48:36', '2012-09-19 22:56:41', 1, 70123.98, NULL, NULL, NULL),
(19, 'Pacocha and Sons', 'Santos Kunde', 'brett99', '<:XLN4[pD#g8z+', '+8723612711395', '4718', '346 Jeanie Court\nEast Devan, WV 20606-5747', '-8.09375', '-106.541076', 'https://via.placeholder.com/640x480.png/00bbaa?text=people+saepe', 'https://via.placeholder.com/640x480.png/005599?text=people+natus', 21, '49455508357846', '13:08:10', '13:20:15', 2, 1, '1987-01-30 15:26:11', '1976-08-03 05:01:04', 2, 10089.04, NULL, NULL, NULL),
(20, 'Dach LLC', 'Hubert Shields III', 'maye.kulas', 'G)q2.dM[v[1h', '+9047385987340', '52467', '552 Cristina Mountains\nWest Joelle, ME 25885-3687', '22.146621', '-59.910863', 'https://via.placeholder.com/640x480.png/00dddd?text=people+earum', 'https://via.placeholder.com/640x480.png/009988?text=people+corrupti', 50, '711176167108', '13:13:36', '10:11:31', 2, 2, '2001-06-16 18:48:10', '2000-11-09 15:26:22', 2, 20972.88, NULL, NULL, NULL),
(21, 'Walsh, Gorczany and Kunze', 'Lacy Hodkiewicz', 'grady.uriel', 'w{bc8l_fxSQjV9?X@vq^', '+2711696491554', '76768', '8688 Bayer Drive Suite 995\nWest Krystinamouth, VT 61743-0893', '-85.204572', '103.365125', 'https://via.placeholder.com/640x480.png/00dd66?text=people+ea', 'https://via.placeholder.com/640x480.png/001133?text=people+distinctio', 27, '23481458968', '08:19:55', '23:18:53', 1, 1, '2009-07-14 13:50:13', '1983-07-22 09:49:39', 2, 15969.15, NULL, NULL, NULL),
(22, 'Bednar Ltd', 'Santa Eichmann', 'luigi46', '$Ehoz?7gQN<tPFA9U', '+1192622060085', '49407', '34222 Kenna Bypass Apt. 949\nLake Corine, GA 37196-6644', '-51.734067', '-169.634283', 'https://via.placeholder.com/640x480.png/0066ee?text=people+eius', 'https://via.placeholder.com/640x480.png/006600?text=people+autem', 28, '569744874', '17:29:10', '17:40:43', 4, 1, '2012-08-27 00:08:28', '2019-11-19 03:53:01', 2, 43468.8, NULL, NULL, NULL),
(23, 'Kuhn Inc', 'Agustin Dietrich', 'chad.wintheiser', 'zAN~<{O<`_-MMz$qYahk', '+7563562354300', '6936', '7997 Fritsch Lodge\nEast Magdalenborough, TN 46870', '83.330524', '-134.947396', 'https://via.placeholder.com/640x480.png/0055dd?text=people+laudantium', 'https://via.placeholder.com/640x480.png/00eedd?text=people+quae', 37, '298866311546', '11:55:44', '05:13:39', 1, 1, '1987-09-15 00:48:04', '1983-09-03 13:52:42', 2, 19361.92, NULL, NULL, NULL),
(24, 'Greenfelder-Boehm', 'Prof. Zion Beahan I', 'isom62', 'c,3&Vc:*Q\"-;z6!', '+7307263090360', '74920', '9303 Hermina Port Suite 364\nPort Miastad, MN 94582', '-5.318401', '141.773974', 'https://via.placeholder.com/640x480.png/00aacc?text=people+eveniet', 'https://via.placeholder.com/640x480.png/0099ee?text=people+nobis', 14, '686981484496264', '09:02:13', '21:09:30', 3, 2, '2015-09-09 22:52:19', '1999-11-07 10:20:48', 2, 20284.21, NULL, NULL, NULL),
(25, 'Daniel, Cole and Oberbrunner', 'Marcelino Hermann', 'gregg.beahan', '}A%ZzeR=WcwcALi\"', '+8550193263516', '28378', '681 Robyn Stravenue Apt. 718\nLake Matilde, IL 96697-8605', '-51.834896', '-150.354263', 'https://via.placeholder.com/640x480.png/0044aa?text=people+hic', 'https://via.placeholder.com/640x480.png/009933?text=people+illo', 3, '3720120934415', '20:55:58', '10:58:47', 4, 2, '1998-09-23 20:10:17', '1975-05-10 20:36:05', 2, 58412.09, NULL, NULL, NULL),
(26, 'Pfannerstill Ltd', 'Malcolm Pagac', 'steuber.bria', 'DNAizj]~4.C~X4\'', '+2252367857978', '49212', '149 Braxton Viaduct Suite 904\nTressiebury, OK 14111-0120', '79.76446', '161.816407', 'https://via.placeholder.com/640x480.png/005544?text=people+est', 'https://via.placeholder.com/640x480.png/0099cc?text=people+optio', 49, '8184468073', '20:07:47', '14:01:58', 3, 2, '1996-02-21 20:04:21', '1998-04-06 00:39:01', 1, 66599.06, NULL, NULL, NULL),
(27, 'Feil, Upton and Treutel', 'Dr. Julien Sipes', 'helene.bernhard', 'CTdE\'KNlYXe_', '+9159558256353', '22544', '1516 Schiller Parkway Suite 835\nSarinahaven, DC 62305', '-39.945142', '51.231496', 'https://via.placeholder.com/640x480.png/00cc66?text=people+neque', 'https://via.placeholder.com/640x480.png/00ccee?text=people+ipsum', 48, '41501122', '01:02:16', '17:32:21', 1, 2, '1993-09-22 19:16:28', '1972-03-27 12:45:12', 2, 59594.62, NULL, NULL, NULL),
(28, 'Roberts, Corkery and Glover', 'Alexa Ebert', 'scot.daniel', 'qV#n748=oh', '+9963450040671', '19247', '2313 Block Lane\nOlsonstad, MO 05173-6937', '-84.535829', '90.426393', 'https://via.placeholder.com/640x480.png/001177?text=people+eius', 'https://via.placeholder.com/640x480.png/00bb88?text=people+qui', 44, '09475985091350', '12:24:14', '13:38:38', 3, 2, '1973-04-30 19:23:09', '1980-09-01 20:09:46', 1, 39207.1, NULL, NULL, NULL),
(29, 'Kihn, Marquardt and Olson', 'Eva Cole', 'jacobi.jameson', 'fz@D9&w-1\"qv=z;<&wc', '+8342582474411', '26338', '887 Cruickshank Brooks Apt. 225\nKesslerport, NC 42153-3921', '-86.364261', '17.066168', 'https://via.placeholder.com/640x480.png/00ddbb?text=people+iusto', 'https://via.placeholder.com/640x480.png/0000ff?text=people+sed', 37, '9254986714', '03:50:21', '06:01:28', 1, 1, '2019-06-09 04:27:51', '2013-05-05 19:22:54', 1, 83512.46, NULL, NULL, NULL),
(30, 'Altenwerth, Schaden and Keebler', 'Kelton Kertzmann', 'baumbach.henri', 'Z2eh%WRq_0&', '+9348004466858', '74274', '580 Dayne Neck Suite 906\nSouth Perryton, DC 94198', '80.716695', '-152.66098', 'https://via.placeholder.com/640x480.png/009933?text=people+veniam', 'https://via.placeholder.com/640x480.png/0088aa?text=people+beatae', 40, '220278079', '04:44:38', '21:00:13', 3, 1, '1979-02-03 05:08:57', '1974-04-29 12:22:02', 2, 61659.33, NULL, NULL, NULL),
(31, 'Sukses', 'Siti', 'Siti', '$2y$10$Jdo42kwMgMcDs41S.OcNv.D73PFBPueH1NQJ8HYcceUOwQ5Yzbrm6', '083105284111', '1', 'Yogyakarta', '', '', '', '', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, '2021-01-05 07:42:05', '2021-05-26 16:15:06', '2021-01-04 17:00:00'),
(33, 'Sejahtera', 'SQ', 'sq', '$2y$10$AZdLWmvmIrnV6PsyhiFqfOGV7KScD2CmYHnPflXWz8EQM7TFwdOMa', '083105284111', '1', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, '2021-03-14 20:50:31', '2021-03-14 20:50:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retailer_operator`
--

CREATE TABLE `retailer_operator` (
  `id_retailer_operator` int(11) NOT NULL,
  `id_retailer` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `retailer_operator`
--

INSERT INTO `retailer_operator` (`id_retailer_operator`, `id_retailer`, `username`, `password`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 31, 'Kasir', '$2y$10$B9I2U1ytOTHUVUkXxrNn8uJIuQwXBWcdu4Jn3mLX5ekAzakn.c11W', 'Kasir1', '2021-01-27 00:11:41', '2021-05-26 16:17:21', NULL),
(5, 31, 'Kasir2', '$2y$10$7Ax.o.hIFwIvFqFSgqjiO.o.6uwxnL0ENDMVEw8dnA4uS.6hhTyUa', 'Kasir2', '2021-05-19 07:34:10', '2021-05-19 07:34:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retailer_pengiriman`
--

CREATE TABLE `retailer_pengiriman` (
  `id_retailer` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `is_available` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `retailer_produk`
--

CREATE TABLE `retailer_produk` (
  `id_retailer_produk` int(11) NOT NULL,
  `id_ref_produk` int(11) NOT NULL,
  `id_retailer` int(11) NOT NULL,
  `kode_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_jual` double NOT NULL,
  `harga_diskon` double DEFAULT NULL,
  `stok` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `retailer_produk`
--

INSERT INTO `retailer_produk` (`id_retailer_produk`, `id_ref_produk`, `id_retailer`, `kode_produk`, `nama`, `deskripsi_produk`, `foto`, `harga_jual`, `harga_diskon`, `stok`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 21, '2558540542769', 'Parisian, Nitzsche and Smitham', 'Visionary coherent complexity', 'https://via.placeholder.com/320x240.png/00bb77?text=produk+aut', 90413.67, 48170.03, 2, NULL, NULL, NULL),
(2, 1, 26, '4184986855581', 'Klein Inc', 'Cross-group demand-driven definition', 'https://via.placeholder.com/320x240.png/00ee99?text=produk+nulla', 44856.4, 60917.01, 5, NULL, NULL, NULL),
(3, 1, 17, '0443118027522', 'Gutmann Inc', 'Persevering real-time throughput', 'https://via.placeholder.com/320x240.png/002288?text=produk+aperiam', 74743.05, 71175.74, 4, NULL, NULL, NULL),
(4, 1, 4, '3549260937512', 'Zemlak PLC', 'Polarised transitional encoding', 'https://via.placeholder.com/320x240.png/002211?text=produk+qui', 32854.97, 10141.86, 5, NULL, NULL, NULL),
(5, 1, 9, '1010885077246', 'Cormier, Farrell and Robel', 'Team-oriented optimizing collaboration', 'https://via.placeholder.com/320x240.png/000055?text=produk+aspernatur', 68019.22, 71253.47, 2, NULL, NULL, NULL),
(6, 1, 19, '9925526165597', 'Hoppe-Kuvalis', 'Intuitive empowering archive', 'https://via.placeholder.com/320x240.png/000044?text=produk+vitae', 49621.29, 53632.3, 4, NULL, NULL, NULL),
(7, 1, 21, '3908798818402', 'Torp-Wilkinson', 'Expanded client-driven blockchain', 'https://via.placeholder.com/320x240.png/000066?text=produk+rem', 87399.13, 40325.55, 4, NULL, NULL, NULL),
(8, 1, 2, '6186191132735', 'Crona-Krajcik', 'Persistent attitude-oriented installation', 'https://via.placeholder.com/320x240.png/00cc33?text=produk+odit', 94540.4, 89016.93, 1, NULL, NULL, NULL),
(9, 1, 19, '4717115298576', 'Lebsack-Dicki', 'Right-sized interactive hardware', 'https://via.placeholder.com/320x240.png/002255?text=produk+harum', 38439.17, 9098.03, 2, NULL, NULL, NULL),
(10, 1, 14, '9993538576490', 'Dare-Runte', 'Switchable national capability', 'https://via.placeholder.com/320x240.png/00eeaa?text=produk+quo', 43799.58, 47344.23, 1, NULL, NULL, NULL),
(11, 1, 2, '3040711771320', 'Heller-Cormier', 'Facetoface zerotolerance approach', 'https://via.placeholder.com/320x240.png/007788?text=produk+nulla', 76059.35, 67179.96, 5, NULL, NULL, NULL),
(12, 1, 20, '5393367416822', 'Stokes-Jones', 'Quality-focused leadingedge moratorium', 'https://via.placeholder.com/320x240.png/0022ff?text=produk+ad', 64775.58, 38424.9, 3, NULL, NULL, NULL),
(13, 1, 29, '8508887288431', 'Doyle-Stamm', 'Multi-layered 4thgeneration synergy', 'https://via.placeholder.com/320x240.png/005533?text=produk+sed', 97608.31, 28212.92, 3, NULL, NULL, NULL),
(14, 1, 2, '6382436394736', 'DuBuque-Bailey', 'Re-contextualized multi-tasking extranet', 'https://via.placeholder.com/320x240.png/00ccff?text=produk+perferendis', 68379.85, 61558.07, 2, NULL, NULL, NULL),
(15, 1, 23, '7973192838474', 'Barton Ltd', 'De-engineered 3rdgeneration GraphicInterface', 'https://via.placeholder.com/320x240.png/00ee22?text=produk+tempore', 35827.87, 14972.26, 3, NULL, NULL, NULL),
(16, 1, 30, '8226678060851', 'Roob Group', 'Down-sized 6thgeneration systemengine', 'https://via.placeholder.com/320x240.png/007711?text=produk+recusandae', 51254.61, 95542.55, 4, NULL, NULL, NULL),
(17, 1, 21, '3625638253204', 'Kiehn-Kuvalis', 'Progressive mobile help-desk', 'https://via.placeholder.com/320x240.png/000011?text=produk+vel', 27453.12, 16084.39, 4, NULL, NULL, NULL),
(18, 1, 16, '5572649483657', 'Stokes-Beer', 'Enhanced responsive website', 'https://via.placeholder.com/320x240.png/005500?text=produk+sunt', 62074.77, 91220.08, 4, NULL, NULL, NULL),
(19, 1, 24, '7481919655730', 'Bogisich LLC', 'Optional client-server customerloyalty', 'https://via.placeholder.com/320x240.png/00dd00?text=produk+maiores', 31054.99, 85447.39, 1, NULL, NULL, NULL),
(20, 1, 21, '7338864666453', 'Dach Group', 'Implemented system-worthy pricingstructure', 'https://via.placeholder.com/320x240.png/00cc77?text=produk+dolores', 6866.79, 14664.11, 3, NULL, NULL, NULL),
(21, 1, 13, '5200153621924', 'Cummings LLC', 'Ameliorated 3rdgeneration info-mediaries', 'https://via.placeholder.com/320x240.png/001100?text=produk+rerum', 15512.04, 65623.18, 3, NULL, NULL, NULL),
(22, 1, 2, '3648852574907', 'Corkery, Morissette and Cormier', 'Total demand-driven securedline', 'https://via.placeholder.com/320x240.png/00cc44?text=produk+error', 31713.3, 66416.09, 3, NULL, NULL, NULL),
(23, 1, 6, '9734410384179', 'Gutmann-Olson', 'User-friendly fault-tolerant productivity', 'https://via.placeholder.com/320x240.png/001166?text=produk+labore', 54155.36, 95281.07, 2, NULL, NULL, NULL),
(24, 1, 7, '8620628425390', 'Welch-Eichmann', 'Cloned cohesive functionalities', 'https://via.placeholder.com/320x240.png/007711?text=produk+non', 44144.98, 53614.48, 5, NULL, NULL, NULL),
(25, 1, 11, '5240801758871', 'Blick, Konopelski and Doyle', 'Robust scalable contingency', 'https://via.placeholder.com/320x240.png/001144?text=produk+esse', 77671.61, 18607.41, 4, NULL, NULL, NULL),
(26, 1, 3, '9595540746690', 'Maggio, Marquardt and Franecki', 'Ameliorated dynamic success', 'https://via.placeholder.com/320x240.png/000022?text=produk+pariatur', 12377.01, 7105.12, 5, NULL, NULL, NULL),
(27, 1, 24, '5977988385058', 'Carter-Bergnaum', 'Adaptive tertiary benchmark', 'https://via.placeholder.com/320x240.png/002233?text=produk+quam', 18486.18, 47464.21, 1, NULL, NULL, NULL),
(28, 1, 1, '1984580081785', 'Hane Ltd', 'Multi-tiered hybrid framework', 'https://via.placeholder.com/320x240.png/003399?text=produk+qui', 15002.7, 69978.51, 4, NULL, NULL, NULL),
(29, 1, 10, '7325066787463', 'Feil, Stroman and Glover', 'Robust asynchronous groupware', 'https://via.placeholder.com/320x240.png/005555?text=produk+corrupti', 89191.78, 36631.47, 4, NULL, NULL, NULL),
(30, 1, 31, '2200128399747', 'Christiansen-Gleichner', 'Vision-oriented regional middleware', 'https://via.placeholder.com/320x240.png/00ffee?text=produk+nesciunt', 35473.52, 120.88, 3, NULL, NULL, NULL),
(31, 1, 31, '8997220180099', 'Agar-agar', 'Bubuk agar-agar', 'gambar.jpg', 3000, 2800, 5, '2021-03-18 17:00:00', '2021-03-19 17:00:00', NULL),
(32, 2, 33, '8992933327113', 'Nutrijel', 'BubUk Nutrijel', 'logokiosrakyat.png', 3500, 3400, 10, '2021-03-27 17:00:00', '2021-03-27 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retailer_produk_stok`
--

CREATE TABLE `retailer_produk_stok` (
  `id_retailer_produk_stok` int(11) NOT NULL,
  `id_retailer_produk` int(11) NOT NULL,
  `harga_beli` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `terjual` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `retailer_produk_stok_detail`
--

CREATE TABLE `retailer_produk_stok_detail` (
  `id_retailer_produk_stok_detail` int(11) NOT NULL,
  `id_retailer_produk_stok` int(11) NOT NULL,
  `harga` double NOT NULL DEFAULT '0',
  `jumlah` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JTeGftVR7MhM74w1Z2PhHOQUZpssDGKDo1dQhSF9', 31, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaDBld20xdlVSaVFEaXVtSE9pT2x2QTMzeEliQ3hselRBWVZJelRRRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjU1OiJsb2dpbl9yZXRhaWxlcl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjMxO30=', 1623947715),
('QXd1urs2o2Jvh1iKuHtxvYQRSwjBT4OSiinQHEyn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2FYVGQ3dFRJT0h0VzdaZFppakM3bGFyTGtuVEc1TFZWVTJ6eTZiNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fX0=', 1623973072);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `available_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `used_at` timestamp NULL DEFAULT NULL,
  `label` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `percent` double NOT NULL,
  `type` enum('belanja','ongkir') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_district`
--

CREATE TABLE `_district` (
  `district_id` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regency_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_province`
--

CREATE TABLE `_province` (
  `province_id` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_regency`
--

CREATE TABLE `_regency` (
  `regency_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_village`
--

CREATE TABLE `_village` (
  `village_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `cancelled_reason`
--
ALTER TABLE `cancelled_reason`
  ADD PRIMARY KEY (`id_cancelled_reason`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id_consumer`);

--
-- Indexes for table `consumer_alamat`
--
ALTER TABLE `consumer_alamat`
  ADD PRIMARY KEY (`id_consumer_alamat`),
  ADD KEY `id_consumer` (`id_consumer`),
  ADD KEY `village_id` (`village_id`);

--
-- Indexes for table `consumer_cart`
--
ALTER TABLE `consumer_cart`
  ADD KEY `id_consumer` (`id_consumer`),
  ADD KEY `id_retailer_produk` (`id_retailer_produk`);

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
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_consumer` (`id_consumer`),
  ADD KEY `id_voucher` (`id_voucher`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD PRIMARY KEY (`id_pesanan_detail`);

--
-- Indexes for table `pesanan_pos`
--
ALTER TABLE `pesanan_pos`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_retailer` (`id_retailer`),
  ADD KEY `id_retailer_operator` (`id_retailer_operator`);

--
-- Indexes for table `pesanan_pos_detail`
--
ALTER TABLE `pesanan_pos_detail`
  ADD PRIMARY KEY (`id_pesanan_pos_detail`),
  ADD KEY `kode_pesanan` (`kode_pesanan`),
  ADD KEY `id_retailer_produk` (`id_retailer_produk`);

--
-- Indexes for table `pesanan_produk_digital`
--
ALTER TABLE `pesanan_produk_digital`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_consumer` (`id_consumer`),
  ADD KEY `id_voucher` (`id_voucher`),
  ADD KEY `id_produk_digital` (`id_produk_digital`);

--
-- Indexes for table `pesanan_rules`
--
ALTER TABLE `pesanan_rules`
  ADD PRIMARY KEY (`id_pesanan_rules`);

--
-- Indexes for table `pos_cart`
--
ALTER TABLE `pos_cart`
  ADD PRIMARY KEY (`id_pos_cart`),
  ADD KEY `id_retailer` (`id_retailer`),
  ADD KEY `id_retailer_operator` (`id_retailer_operator`);

--
-- Indexes for table `pos_cart_detail`
--
ALTER TABLE `pos_cart_detail`
  ADD PRIMARY KEY (`id_pos_cart_detail`),
  ADD KEY `id_pos_cart` (`id_pos_cart`),
  ADD KEY `id_retailer_produk` (`id_retailer_produk`);

--
-- Indexes for table `produk_digital`
--
ALTER TABLE `produk_digital`
  ADD PRIMARY KEY (`id_produk_digital`);

--
-- Indexes for table `ref_bank`
--
ALTER TABLE `ref_bank`
  ADD PRIMARY KEY (`id_ref_bank`);

--
-- Indexes for table `ref_kategori`
--
ALTER TABLE `ref_kategori`
  ADD PRIMARY KEY (`id_ref_kategori`);

--
-- Indexes for table `ref_merk`
--
ALTER TABLE `ref_merk`
  ADD PRIMARY KEY (`id_ref_merk`);

--
-- Indexes for table `ref_produk`
--
ALTER TABLE `ref_produk`
  ADD PRIMARY KEY (`id_ref_produk`),
  ADD KEY `id_kategori` (`id_ref_kategori`),
  ADD KEY `id_merk` (`id_ref_merk`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`id_retailer`),
  ADD KEY `village_id` (`village_id`),
  ADD KEY `id_bank` (`id_ref_bank`);

--
-- Indexes for table `retailer_operator`
--
ALTER TABLE `retailer_operator`
  ADD PRIMARY KEY (`id_retailer_operator`),
  ADD KEY `id_retailer` (`id_retailer`);

--
-- Indexes for table `retailer_pengiriman`
--
ALTER TABLE `retailer_pengiriman`
  ADD PRIMARY KEY (`id_retailer`);

--
-- Indexes for table `retailer_produk`
--
ALTER TABLE `retailer_produk`
  ADD PRIMARY KEY (`id_retailer_produk`),
  ADD KEY `id_ref_produk` (`id_ref_produk`),
  ADD KEY `id_retailer` (`id_retailer`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `retailer_produk_stok`
--
ALTER TABLE `retailer_produk_stok`
  ADD PRIMARY KEY (`id_retailer_produk_stok`),
  ADD KEY `id_retailer_produk` (`id_retailer_produk`);

--
-- Indexes for table `retailer_produk_stok_detail`
--
ALTER TABLE `retailer_produk_stok_detail`
  ADD PRIMARY KEY (`id_retailer_produk_stok_detail`),
  ADD KEY `id_retailer_produk_stok` (`id_retailer_produk_stok`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- Indexes for table `_district`
--
ALTER TABLE `_district`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `regency_id` (`regency_id`);

--
-- Indexes for table `_province`
--
ALTER TABLE `_province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `_regency`
--
ALTER TABLE `_regency`
  ADD PRIMARY KEY (`regency_id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `_village`
--
ALTER TABLE `_village`
  ADD PRIMARY KEY (`village_id`),
  ADD KEY `district_id` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cancelled_reason`
--
ALTER TABLE `cancelled_reason`
  MODIFY `id_cancelled_reason` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id_consumer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consumer_alamat`
--
ALTER TABLE `consumer_alamat`
  MODIFY `id_consumer_alamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  MODIFY `id_pesanan_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_pos_detail`
--
ALTER TABLE `pesanan_pos_detail`
  MODIFY `id_pesanan_pos_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pesanan_rules`
--
ALTER TABLE `pesanan_rules`
  MODIFY `id_pesanan_rules` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos_cart`
--
ALTER TABLE `pos_cart`
  MODIFY `id_pos_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pos_cart_detail`
--
ALTER TABLE `pos_cart_detail`
  MODIFY `id_pos_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk_digital`
--
ALTER TABLE `produk_digital`
  MODIFY `id_produk_digital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ref_bank`
--
ALTER TABLE `ref_bank`
  MODIFY `id_ref_bank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_kategori`
--
ALTER TABLE `ref_kategori`
  MODIFY `id_ref_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_merk`
--
ALTER TABLE `ref_merk`
  MODIFY `id_ref_merk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_produk`
--
ALTER TABLE `ref_produk`
  MODIFY `id_ref_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `retailer`
--
ALTER TABLE `retailer`
  MODIFY `id_retailer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `retailer_operator`
--
ALTER TABLE `retailer_operator`
  MODIFY `id_retailer_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `retailer_pengiriman`
--
ALTER TABLE `retailer_pengiriman`
  MODIFY `id_retailer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retailer_produk`
--
ALTER TABLE `retailer_produk`
  MODIFY `id_retailer_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `retailer_produk_stok`
--
ALTER TABLE `retailer_produk_stok`
  MODIFY `id_retailer_produk_stok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retailer_produk_stok_detail`
--
ALTER TABLE `retailer_produk_stok_detail`
  MODIFY `id_retailer_produk_stok_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan_pos_detail`
--
ALTER TABLE `pesanan_pos_detail`
  ADD CONSTRAINT `pesanan_pos_detail_ibfk_1` FOREIGN KEY (`kode_pesanan`) REFERENCES `pesanan_pos` (`kode_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_pos_detail_id_retailer_produk_foreign` FOREIGN KEY (`id_retailer_produk`) REFERENCES `retailer_produk` (`id_retailer_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
