-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2023 at 08:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datatable`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `year`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 2021, 'Sepatu', NULL, NULL),
(23, 'Nike', 2022, 'Sepatu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_06_015610_create_items_table', 1),
(6, '2023_06_06_043205_create_tb_usiasekolahs_table', 2),
(7, '2023_06_06_045423_rename_table_name', 3),
(8, '2023_06_07_031733_create_opds_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_opd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desk_opd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `update_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id`, `nama_opd`, `logo_opd`, `desk_opd`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(1, 'SEKRETARIAT DAERAH', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ASISTEN PEMERINTAHAN & KESRA\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ASISTEN PEREKONOMIAN & PEMBANGUNAN\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ASISTEN UMUM', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SEKRETARIAT DPRD\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'INSPEKTORAT DAERAH', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'DINAS PENDIDIKAN\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'DINAS KEPEMUDAAN, OLAHRAGA, KEBUDAYAAN & PARIWISATA', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'DINAS KESEHATAN', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'DINAS SOSIAL, PEMBERDAYAAN PEREMPUAN & PERLINDUNGAN ANAK\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'DINAS PENGENDALIAN PENDUDUK & KELUARGA BERENCANA\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'DINAS KEPENDUDUKAN & PENCATATAN SIPIL\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'DINAS PEMBERDAYAAN MASYARAKAT DAERAH\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'DINAS PENANAMAN MODAL & PELAYANAN TERPADU SATU PINTU', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'DINAS PERINDUSTRIAN & PERDAGANGAN', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'DINAS KOPERASI & USAHA MIKRO', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'DINAS TENAGA KERJA', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'DINAS KOMUNIKASI & INFORMATIKA', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'DINAS PEKERJAAN UMUM & PENATAAN RUANG', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'DINAS PERHUBUNGAN', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'DINAS PERUMAHAN RAKYAT, KAWASAN PERMUKIMAN & PERTANAHAN', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'DINAS LINGKUNGAN HIDUP', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'DINAS PERTANIAN\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'KETAHANAN PANGAN & PERIKANAN', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'DINAS KEARSIPAN & PERPUSTAKAAN', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'SATUAN POLISI PAMONG RAJA', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'DINAS PEMADAM KEBAKARAN & PENYELAMATAN', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'BADAN PENGELOLA KEUANGAN & ASET DAERAH', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'BADAN PENDAPATAN DAERAH', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'BADAN KEPEGAWAIAN & PENGEMBANGAN SUMBER DAYA MANUSIA', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'BADAN KESATUAN BANGSA DAN POLITIK', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'BADAN PENANGGULANGAN BENCANA DAERAH', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'BADAN PUSAT STATISTIK', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'LEMBAGA PEMASYARAKATAN', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'POLRES NGANJUK', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'KODIM 0810 NGANJUK', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'KECAMATAN BAGOR', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'KECAMATAN BARON\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'KECAMATAN BERBEK', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'KECAMATAN GONDANG', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'KECAMATAN JATIKALEN', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'KECAMATAN KERTOSONO', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'KECAMATAN LENGKONG', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'KECAMATAN LOCERET', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'KECAMATAN NGANJUK', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'KECAMATAN NGETOS', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'KECAMATAN NGLUYU', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'KECAMATAN NGRONGGOT', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'KECAMATAN PACE', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'KECAMATAN PATIANROWO', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'KECAMATAN PRAMBON', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'KECAMATAN REJOSO', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'KECAMATAN SAWAHAN', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'KECAMATAN SUKOMORO', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'KECAMATAN TANJUNGANOM', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'KECAMATAN WILANGAN', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'RSUD KERTOSONO', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'RSUD NGANJUK', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'RS BHAYANGKARA', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'RSI AISYIYAH', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'PENGADILAN AGAMA', NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_usiasekolahs`
--

CREATE TABLE `tb_usiasekolahs` (
  `id` bigint UNSIGNED NOT NULL,
  `id_uker` int NOT NULL,
  `jk_lk_sds` int NOT NULL,
  `jk_pr_sds` int NOT NULL,
  `jk_lk_sdn` int NOT NULL,
  `jk_pr_sdn` int NOT NULL,
  `jk_lk_smpn` int NOT NULL,
  `jk_pr_smpn` int NOT NULL,
  `jk_lk_smps` int NOT NULL,
  `jk_pr_smps` int NOT NULL,
  `tahun` year NOT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `update_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_usiasekolahs`
--

INSERT INTO `tb_usiasekolahs` (`id`, `id_uker`, `jk_lk_sds`, `jk_pr_sds`, `jk_lk_sdn`, `jk_pr_sdn`, `jk_lk_smpn`, `jk_pr_smpn`, `jk_lk_smps`, `jk_pr_smps`, `tahun`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(1, 30, 2492, 1847, 1202, 1087, 1152, 3545, 1767, 2020, '2006', NULL, NULL, NULL, NULL),
(2, 7, 2151, 3077, 2769, 1948, 1459, 2344, 1401, 2486, '2002', NULL, NULL, NULL, NULL),
(3, 35, 1688, 2970, 542, 551, 1283, 1996, 1727, 3282, '2006', NULL, NULL, NULL, NULL),
(4, 23, 1397, 726, 3644, 1226, 665, 3232, 2537, 1164, '1996', NULL, NULL, NULL, NULL),
(5, 36, 985, 1656, 1477, 1252, 3130, 2288, 1390, 2605, '1974', NULL, NULL, NULL, NULL),
(6, 37, 3012, 1599, 2070, 3414, 3463, 3294, 2583, 2362, '2004', NULL, NULL, NULL, NULL),
(7, 31, 2518, 1577, 964, 2675, 2385, 3500, 1531, 1129, '2009', NULL, NULL, NULL, NULL),
(8, 11, 1424, 1397, 2849, 2358, 1148, 1453, 2096, 1422, '1999', NULL, NULL, NULL, NULL),
(9, 14, 3126, 1336, 3826, 2989, 2140, 2978, 3477, 2501, '1977', NULL, NULL, NULL, NULL),
(10, 26, 1749, 2646, 974, 1898, 1692, 2143, 2029, 1659, '2020', NULL, NULL, NULL, NULL),
(11, 26, 3707, 1713, 1007, 2054, 3406, 1265, 1106, 3053, '1975', NULL, NULL, NULL, NULL),
(12, 25, 1258, 972, 3681, 2196, 603, 3606, 1662, 2263, '1999', NULL, NULL, NULL, NULL),
(13, 5, 2701, 2969, 1115, 2110, 2483, 648, 2513, 2126, '1980', NULL, NULL, NULL, NULL),
(14, 4, 878, 1094, 2928, 1287, 3261, 3072, 1661, 2758, '2025', NULL, NULL, NULL, NULL),
(15, 1, 2071, 1369, 531, 2085, 2696, 3074, 2194, 1608, '1994', NULL, NULL, NULL, NULL),
(16, 31, 629, 1211, 3584, 3071, 1641, 2993, 676, 611, '2014', NULL, NULL, NULL, NULL),
(17, 20, 1882, 3049, 3366, 1984, 3618, 1269, 775, 2363, '2021', NULL, NULL, NULL, NULL),
(18, 33, 3232, 965, 781, 3090, 3835, 3758, 2751, 1766, '1976', NULL, NULL, NULL, NULL),
(19, 23, 1119, 2336, 1899, 1251, 2885, 932, 3302, 3701, '2002', NULL, NULL, NULL, NULL),
(20, 30, 817, 3617, 2067, 3052, 1169, 1887, 1547, 915, '1974', NULL, NULL, NULL, NULL),
(21, 36, 2290, 2186, 3418, 1463, 2721, 2646, 2562, 2206, '2023', NULL, NULL, NULL, NULL),
(22, 28, 1541, 535, 1593, 526, 562, 2399, 2074, 1922, '2004', NULL, NULL, NULL, NULL),
(23, 3, 3059, 3542, 2920, 2623, 2932, 3839, 2213, 2932, '2020', NULL, NULL, NULL, NULL),
(24, 31, 3416, 2009, 3245, 731, 2782, 2086, 1506, 3528, '2021', NULL, NULL, NULL, NULL),
(25, 17, 1424, 3485, 777, 1824, 1014, 1604, 2890, 3610, '1986', NULL, NULL, NULL, NULL),
(26, 37, 2932, 2587, 1845, 3458, 3144, 2567, 1414, 1982, '2026', NULL, NULL, NULL, NULL),
(27, 3, 2434, 1952, 1317, 3154, 2915, 3010, 1948, 2136, '2022', NULL, NULL, NULL, NULL),
(28, 23, 2136, 977, 3479, 1023, 3213, 3105, 2921, 1148, '1995', NULL, NULL, NULL, NULL),
(29, 35, 3815, 1818, 1618, 1362, 2263, 936, 621, 807, '1971', NULL, NULL, NULL, NULL),
(30, 11, 1660, 2536, 1832, 2042, 719, 2138, 3723, 2375, '2019', NULL, NULL, NULL, NULL),
(31, 0, 978, 2084, 3698, 1092, 2244, 2891, 3441, 1314, '1992', NULL, NULL, NULL, NULL),
(32, 33, 1650, 2096, 742, 1879, 992, 2761, 3819, 3749, '2018', NULL, NULL, NULL, NULL),
(33, 24, 3174, 2101, 3611, 1728, 3019, 2479, 2275, 3143, '1997', NULL, NULL, NULL, NULL),
(34, 12, 3250, 1551, 2893, 3689, 2215, 2481, 2911, 882, '2021', NULL, NULL, NULL, NULL),
(35, 10, 526, 847, 1722, 2239, 2118, 3277, 3245, 3610, '2025', NULL, NULL, NULL, NULL),
(36, 35, 1130, 2658, 2186, 2329, 2685, 2670, 892, 3670, '1984', NULL, NULL, NULL, NULL),
(37, 30, 1889, 779, 3242, 2825, 3277, 1435, 2872, 2187, '2013', NULL, NULL, NULL, NULL),
(38, 24, 1325, 1729, 2387, 1744, 2942, 973, 3078, 3824, '2023', NULL, NULL, NULL, NULL),
(39, 21, 1342, 795, 2886, 605, 3383, 1869, 3353, 3410, '1973', NULL, NULL, NULL, NULL),
(40, 10, 848, 645, 1351, 1015, 2647, 1800, 729, 832, '2018', NULL, NULL, NULL, NULL),
(41, 19, 2684, 3803, 1646, 1381, 3767, 614, 684, 3713, '2009', NULL, NULL, NULL, NULL),
(42, 22, 3470, 1586, 3346, 3822, 2628, 2538, 2619, 3377, '2020', NULL, NULL, NULL, NULL),
(43, 5, 1216, 3445, 3555, 1853, 2846, 3778, 1767, 3818, '2015', NULL, NULL, NULL, NULL),
(44, 27, 2426, 1101, 2539, 1059, 3355, 907, 937, 2325, '2023', NULL, NULL, NULL, NULL),
(45, 13, 867, 2897, 2438, 1440, 3618, 1327, 3652, 3564, '1997', NULL, NULL, NULL, NULL),
(46, 37, 3641, 1014, 1812, 2140, 1708, 3095, 1154, 3596, '1977', NULL, NULL, NULL, NULL),
(47, 9, 1249, 1590, 2306, 2238, 772, 3212, 3260, 2983, '2000', NULL, NULL, NULL, NULL),
(48, 31, 3282, 1581, 2630, 2273, 3083, 858, 3466, 2555, '1987', NULL, NULL, NULL, NULL),
(49, 14, 1860, 1078, 2893, 2034, 660, 1447, 1904, 1878, '2019', NULL, NULL, NULL, NULL),
(50, 36, 3637, 1278, 2572, 2007, 678, 1928, 1033, 3433, '1995', NULL, NULL, NULL, NULL),
(51, 3, 2231, 2399, 2009, 1934, 2636, 1903, 688, 815, '2005', NULL, NULL, NULL, NULL),
(52, 5, 2115, 2677, 3546, 1917, 3651, 705, 2820, 3523, '1972', NULL, NULL, NULL, NULL),
(53, 14, 1792, 944, 2282, 1698, 2759, 3469, 3084, 1126, '1970', NULL, NULL, NULL, NULL),
(54, 20, 2343, 2221, 1076, 959, 3534, 2721, 1423, 3850, '1978', NULL, NULL, NULL, NULL),
(55, 4, 1033, 1733, 3386, 606, 3119, 956, 1234, 1905, '1984', NULL, NULL, NULL, NULL),
(56, 15, 3649, 1910, 2179, 3622, 3211, 3665, 2745, 2077, '2012', NULL, NULL, NULL, NULL),
(57, 36, 2229, 1241, 1433, 1472, 3448, 3577, 2497, 698, '2025', NULL, NULL, NULL, NULL),
(58, 3, 1955, 3441, 901, 3165, 2447, 2555, 3811, 2975, '1997', NULL, NULL, NULL, NULL),
(59, 9, 2803, 3042, 941, 2331, 1784, 2172, 1675, 1529, '2005', NULL, NULL, NULL, NULL),
(60, 1, 2892, 866, 3259, 1063, 1403, 3231, 1812, 3333, '1973', NULL, NULL, NULL, NULL),
(61, 29, 1689, 2444, 2690, 2787, 2759, 1944, 1636, 3757, '2022', NULL, NULL, NULL, NULL),
(62, 22, 2068, 3483, 2082, 2875, 598, 1659, 1927, 1134, '1975', NULL, NULL, NULL, NULL),
(63, 33, 975, 1537, 3686, 1323, 905, 2078, 778, 2827, '1986', NULL, NULL, NULL, NULL),
(64, 21, 2000, 2142, 2786, 1317, 1747, 1443, 727, 3463, '1971', NULL, NULL, NULL, NULL),
(65, 34, 1641, 1155, 2059, 1221, 1405, 1120, 1331, 1762, '2021', NULL, NULL, NULL, NULL),
(66, 35, 1890, 1341, 2290, 1094, 3718, 653, 2466, 2308, '1973', NULL, NULL, NULL, NULL),
(67, 7, 1874, 1248, 3495, 1596, 3797, 1634, 1211, 2563, '1983', NULL, NULL, NULL, NULL),
(68, 19, 1648, 3120, 1780, 1891, 3577, 673, 2617, 543, '1999', NULL, NULL, NULL, NULL),
(69, 1, 756, 1482, 843, 3565, 3567, 2981, 740, 3058, '2014', NULL, NULL, NULL, NULL),
(70, 31, 3575, 1123, 2476, 1010, 1887, 1569, 782, 1340, '1970', NULL, NULL, NULL, NULL),
(71, 25, 730, 707, 1450, 2471, 1085, 3797, 3172, 2903, '1995', NULL, NULL, NULL, NULL),
(72, 1, 2012, 3467, 3787, 2947, 1296, 3297, 621, 2667, '1982', NULL, NULL, NULL, NULL),
(73, 32, 3450, 2120, 3271, 1878, 2836, 1156, 3126, 3262, '2004', NULL, NULL, NULL, NULL),
(74, 5, 2012, 1341, 2898, 2303, 2013, 1600, 1946, 2668, '2003', NULL, NULL, NULL, NULL),
(75, 16, 1234, 2441, 2211, 3842, 2807, 2196, 3176, 1179, '1998', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_usiasekolahs`
--
ALTER TABLE `tb_usiasekolahs`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_usiasekolahs`
--
ALTER TABLE `tb_usiasekolahs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
