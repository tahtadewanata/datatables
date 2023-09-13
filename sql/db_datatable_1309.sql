-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_datatable
CREATE DATABASE IF NOT EXISTS `db_datatable` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_datatable`;

-- Dumping structure for table db_datatable.apk
CREATE TABLE IF NOT EXISTS `apk` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_lk` int DEFAULT NULL,
  `jk_pr` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.apk: ~2 rows (approximately)
INSERT INTO `apk` (`id`, `jenjang`, `jk_lk`, `jk_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 'SD', 58, 53, 2021, '2023-09-12 21:11:28', NULL),
	(2, 'SMP', 81, 69, 2021, '2023-09-12 21:11:29', NULL);

-- Dumping structure for table db_datatable.apm
CREATE TABLE IF NOT EXISTS `apm` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_lk` int DEFAULT NULL,
  `jk_pr` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.apm: ~2 rows (approximately)
INSERT INTO `apm` (`id`, `jenjang`, `jk_lk`, `jk_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 'SD', 50, 48, 2021, '2023-09-13 13:05:44', NULL),
	(2, 'SMP', 54, 41, 2021, '2023-09-13 13:05:53', NULL);

-- Dumping structure for table db_datatable.bidang
CREATE TABLE IF NOT EXISTS `bidang` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `namabidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.bidang: ~6 rows (approximately)
INSERT INTO `bidang` (`id`, `namabidang`) VALUES
	(1, 'PENDIDIKAN'),
	(2, 'KESEHATAN'),
	(3, 'SOSIAL'),
	(4, 'POLITIK'),
	(5, 'HUKUM DAN HAM'),
	(6, 'EKONOMI DAN KETENAGAKERJAAN');

-- Dumping structure for table db_datatable.dataklasifikasi
CREATE TABLE IF NOT EXISTS `dataklasifikasi` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `namadata` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_klasifikasi` bigint unsigned DEFAULT NULL,
  `id_bidang` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.dataklasifikasi: ~40 rows (approximately)
INSERT INTO `dataklasifikasi` (`id`, `namadata`, `id_klasifikasi`, `id_bidang`, `created_at`, `updated_at`) VALUES
	(1, 'DATA PENDUDUK USIA SEKOLAH SD SWASTA', 1, 1, NULL, NULL),
	(2, 'DATA PENDUDUK USIA SEKOLAH SD NEGERI', 1, 1, NULL, NULL),
	(3, 'ANGKA PARTISIPASI KASAR', 1, 1, NULL, NULL),
	(4, 'ANGKA PARTISIPASI MURNI', 1, 1, NULL, NULL),
	(5, 'SERTIFIKASI GURU', 1, 1, NULL, NULL),
	(6, 'ANGKA KELULUSAN PAKET A, B DAN C', 1, 1, NULL, NULL),
	(7, 'KELAHIRAN BAYI', 2, 2, NULL, NULL),
	(8, 'BALITA DI KABUPATEN NGANJUK', 2, 2, NULL, NULL),
	(9, 'BALITA MENDAPATKAN ASUPAN ASI', 2, 2, NULL, NULL),
	(10, 'KEMATIAN BAYI', 2, 2, NULL, NULL),
	(11, 'KEMATIAN IBU', 2, 2, NULL, NULL),
	(12, 'KASUS HIV BARU', 2, 2, NULL, NULL),
	(13, 'STUNTING', 2, 2, NULL, NULL),
	(14, 'KEMATIAN ANAK', 2, 2, NULL, NULL),
	(15, 'DISABLITAS', 2, 2, NULL, NULL),
	(16, 'PASIEN', 2, 2, NULL, NULL),
	(17, 'PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL (PPKS)', 2, 3, NULL, NULL),
	(18, 'JENIS PEMERLU PELAYANAN KESEJAHTERAAN SOSIAL PERKECAMATAN', 2, 3, NULL, NULL),
	(19, 'ORGANISASI SOSIAL', 2, 3, NULL, NULL),
	(20, 'PARTISIPASI PEREMPUAN DI BIDANG POLITIK', 1, 4, NULL, NULL),
	(21, 'JABATAN STRUKTURAL DI KABUPATEN NGANJUK BERDASARKAN GOLONGAN', 1, 4, NULL, NULL),
	(22, 'TENAGA KERJA ', 1, 4, NULL, NULL),
	(23, 'TINDAK KEKERASAN DALAM RUMAH TANGGA (KDRT)', 2, 4, NULL, NULL),
	(24, 'PERKARA YANG MASUK PENGADILAN AGAMA', 2, 4, NULL, NULL),
	(25, 'CERAI TALAK DAN GUGAT', 2, 4, NULL, NULL),
	(26, 'PERKARA PERCERAIAN MENURUT FAKTOR PENYEBABNYA', 2, 4, NULL, NULL),
	(27, 'PERKARA YANG DIPUTUS DI PENGADILAN AGAMA', 2, 4, NULL, NULL),
	(28, 'TINDAK KEJAHATAN', 2, 4, NULL, NULL),
	(29, 'TINDAK KEJAHATAN MENURUT JENIS KEJAHATAN', 2, 4, NULL, NULL),
	(30, 'SURAT IJIN MENGEMUDI YANG DITERBITKAN', 2, 4, NULL, NULL),
	(31, 'PELANGGARAN LALU LINTAS MENURUT JENIS PELANGGARAN', 2, 4, NULL, NULL),
	(32, 'STURKTUR EKONOMI KABUPATEN NGANJUK', 2, 6, NULL, NULL),
	(33, 'PERTUMBUHAN EKONOMI', 2, 6, NULL, NULL),
	(34, 'TINGKAT PARTISIPASI ANGKA KERJA', 2, 6, NULL, NULL),
	(35, 'TINGKAT PENGANGGURAN TERBUKA', 2, 6, NULL, NULL),
	(36, 'STATUS PEKERJAAN', 2, 6, NULL, NULL),
	(37, 'KOPRASI', 2, 6, NULL, NULL),
	(38, 'USAHA MENENGAN KECIL DAN MIKRO (UMKM)', 2, 6, NULL, NULL),
	(39, 'DATA PENDUDUK USIA SEKOLAH SMP SWASTA', 1, 1, NULL, NULL),
	(40, 'DATA PENDUDUK USIA SEKOLAH SMP NEGERI', 1, 1, NULL, NULL);

-- Dumping structure for table db_datatable.data_siswa
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` bigint unsigned NOT NULL,
  `nama_siswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.data_siswa: ~250 rows (approximately)
INSERT INTO `data_siswa` (`id`, `kecamatan_id`, `nama_siswa`, `jk`, `created_at`, `updated_at`) VALUES
	(1, 5, 'Wiley Huel', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(2, 5, 'Mr. Brook Kunde DVM', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(3, 3, 'Amely Ankunding', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(4, 11, 'Odie Bednar', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(5, 12, 'Bridie Feest', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(6, 14, 'Prof. Iva Stanton', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(7, 9, 'Lynn Mertz III', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(8, 10, 'Dr. Eliane Champlin III', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(9, 9, 'Maryse Kautzer', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(10, 13, 'Shanie Kirlin', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(11, 13, 'Ollie Mann', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(12, 4, 'Aubrey Doyle', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(13, 9, 'Prof. Priscilla Langworth', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(14, 15, 'Molly Donnelly', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(15, 12, 'Jerome Cormier', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(16, 8, 'Nina Dibbert', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(17, 12, 'Delaney Koch', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(18, 4, 'Mrs. Christina Marks', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(19, 7, 'Jerrod Senger', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(20, 13, 'Prof. Roberto Langosh', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(21, 2, 'Layne Vandervort', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(22, 2, 'Annamarie Bogan', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(23, 14, 'Shayna Schoen', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(24, 3, 'Adele Parisian', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(25, 9, 'Dr. Arno Sanford Sr.', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(26, 10, 'Jennyfer Bartell', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(27, 9, 'Lynn Casper', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(28, 6, 'Ansley Corwin Jr.', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(29, 3, 'Mr. Frederik Hodkiewicz', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(30, 4, 'Addison Stiedemann DDS', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(31, 11, 'Myrna Reynolds', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(32, 9, 'Cloyd Veum', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(33, 3, 'Phyllis Abshire', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(34, 13, 'Selina Purdy DDS', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(35, 5, 'Aileen Littel', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(36, 10, 'Alaina Bergnaum II', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(37, 3, 'Tiana Kertzmann', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(38, 15, 'Tatum Ziemann', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(39, 8, 'Miss Kali Graham I', 'L', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(40, 3, 'Karley Ruecker', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(41, 12, 'Kaylie Dare I', 'P', '2023-09-05 06:19:56', '2023-09-05 06:19:56'),
	(42, 5, 'Dr. Berry Walsh IV', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(43, 7, 'Ken Kulas', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(44, 12, 'Judge McLaughlin', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(45, 12, 'Frederic Rutherford', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(46, 2, 'Kody Murphy I', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(47, 12, 'Gabrielle Spinka', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(48, 4, 'Dr. Easton Connelly', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(49, 10, 'Miss Elissa Schulist', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(50, 1, 'Beryl Reynolds', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(51, 3, 'Raquel Treutel', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(52, 2, 'Dr. Ian Muller IV', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(53, 12, 'Tanya Dooley', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(54, 5, 'Grover Schroeder V', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(55, 8, 'Savanna Friesen', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(56, 2, 'Sheila Langosh DVM', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(57, 10, 'Catharine Ankunding', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(58, 14, 'Bernadine Stokes', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(59, 4, 'Rahul Leuschke', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(60, 13, 'Mr. Brady Hills', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(61, 1, 'Dr. Quincy Nienow', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(62, 7, 'Darrel Larkin', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(63, 14, 'Ernestina Marks PhD', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(64, 7, 'Prof. Dalton Herzog IV', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(65, 9, 'Dr. Lavern O\'Conner Sr.', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(66, 6, 'Abby Parker', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(67, 15, 'Marisol Reinger', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(68, 12, 'Kira Toy', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(69, 7, 'Justine Morar I', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(70, 9, 'Dr. Shayne Marks V', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(71, 6, 'Mr. Micah Romaguera', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(72, 14, 'Alivia Homenick', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(73, 5, 'Prof. Elvis Will', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(74, 12, 'Vicenta Bogan', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(75, 11, 'Leonardo Monahan', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(76, 2, 'Corene VonRueden', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(77, 2, 'Prof. Melvina Carroll', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(78, 2, 'Mrs. Lonie Friesen PhD', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(79, 13, 'Dr. Tyler Koelpin', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(80, 15, 'Theron Heller DDS', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(81, 2, 'Andreanne Corwin', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(82, 9, 'Prof. Jackeline Altenwerth', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(83, 8, 'Elaina Gibson', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(84, 2, 'Ciara Koss', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(85, 1, 'Brent Stroman', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(86, 6, 'Ms. Magdalena West', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(87, 8, 'Lavonne McCullough PhD', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(88, 5, 'Helmer Dach', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(89, 9, 'Daniella Feeney', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(90, 6, 'Prof. Camren Nikolaus', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(91, 4, 'Jovanny Parker', 'L', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(92, 5, 'Prof. Juvenal Herzog II', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(93, 1, 'Kaylin Shanahan', 'P', '2023-09-05 06:19:57', '2023-09-05 06:19:57'),
	(94, 1, 'Rashawn Weber', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(95, 10, 'Anibal Murphy', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(96, 10, 'Mr. Cesar Wiza DVM', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(97, 8, 'Ms. Burdette Beahan DDS', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(98, 9, 'Cristina Lowe', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(99, 7, 'Christ Goyette', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(100, 12, 'Lula Huels', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(101, 3, 'Gabe Heidenreich Sr.', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(102, 11, 'Aniyah Graham', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(103, 13, 'Jarrod Predovic', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(104, 7, 'Prof. Reggie Cassin', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(105, 11, 'Gay Mosciski', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(106, 13, 'Lamar Muller', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(107, 14, 'Jadon Heathcote', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(108, 15, 'Dawson Tillman', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(109, 5, 'Lacey Marvin', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(110, 13, 'Naomie Quitzon', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(111, 4, 'Janie Bernhard', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(112, 9, 'Dr. Eve Zboncak III', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(113, 11, 'Mr. Ransom Swaniawski MD', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(114, 15, 'Conor Rice', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(115, 3, 'Arvid Senger', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(116, 13, 'Sam Kuhn', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(117, 1, 'Prof. Ervin Wisoky Jr.', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(118, 14, 'Celine Friesen', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(119, 5, 'Abelardo Rodriguez', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(120, 8, 'Marianna Stanton', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(121, 1, 'Sigurd Shanahan', 'L', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(122, 9, 'Lola O\'Connell PhD', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(123, 8, 'Laurianne Lindgren', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(124, 15, 'Skylar Sauer V', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(125, 10, 'Miss Concepcion Collier III', 'P', '2023-09-05 06:19:58', '2023-09-05 06:19:58'),
	(126, 7, 'Miss Janet Ondricka MD', 'L', '2023-09-05 06:19:59', '2023-09-05 06:19:59'),
	(127, 4, 'Marianna Parker', 'L', '2023-09-05 06:19:59', '2023-09-05 06:19:59'),
	(128, 3, 'Leopold Dare', 'P', '2023-09-05 06:19:59', '2023-09-05 06:19:59'),
	(129, 5, 'Art Hills Sr.', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(130, 1, 'Maya Doyle II', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(131, 8, 'Sabryna Raynor', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(132, 2, 'Prof. Johnathan Bailey Jr.', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(133, 8, 'Matilda Borer', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(134, 12, 'Zoe Quigley', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(135, 11, 'Nikko Mayer', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(136, 5, 'Ottis Denesik', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(137, 8, 'Murray Lynch', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(138, 13, 'Cordie Daugherty', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(139, 1, 'Curt Pfannerstill', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(140, 4, 'Kavon Schmidt I', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(141, 6, 'Roscoe Braun', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(142, 11, 'Raoul Glover Jr.', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(143, 5, 'Edmond Effertz', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(144, 4, 'Ms. Amber Reilly', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(145, 11, 'Prof. Jessyca Kris', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(146, 12, 'Marta Cassin', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(147, 7, 'Doris Okuneva III', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(148, 4, 'Augustine Larkin', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(149, 13, 'Cesar Monahan', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(150, 15, 'Bernadine Hayes', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(151, 6, 'Lue Osinski', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(152, 15, 'Reginald Larkin', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(153, 15, 'Lynn Kautzer', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(154, 11, 'Brielle Ankunding V', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(155, 4, 'Eloy Runolfsson DVM', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(156, 1, 'Mr. Edmond Steuber V', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(157, 14, 'Zena Spencer Sr.', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(158, 11, 'Mr. Eric Kirlin', 'L', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(159, 4, 'Loraine Luettgen', 'P', '2023-09-05 06:20:00', '2023-09-05 06:20:00'),
	(160, 1, 'Miss Savannah Schuppe IV', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(161, 6, 'Dr. Brannon Stoltenberg MD', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(162, 7, 'Prof. Dejon Jaskolski II', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(163, 1, 'Jessica Walker', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(164, 12, 'Aurelie Schmidt', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(165, 5, 'Miracle Dickinson', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(166, 1, 'Emanuel Funk', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(167, 11, 'Lue Lockman', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(168, 14, 'Burnice Wisoky', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(169, 2, 'Ludie Kirlin', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(170, 15, 'Anthony Harris', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(171, 8, 'Jazmyne Armstrong', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(172, 9, 'Mr. Vincent Johnson I', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(173, 13, 'Dr. Garland Crona PhD', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(174, 5, 'Mr. Lukas Harvey', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(175, 7, 'Dayne Mayert Sr.', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(176, 6, 'Prof. Blaze Sipes DDS', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(177, 2, 'Prof. Lorine Block', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(178, 15, 'Yoshiko Swaniawski', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(179, 13, 'Amira Kessler', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(180, 9, 'Blake Kiehn', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(181, 4, 'Mervin Johns', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(182, 8, 'Dr. Diamond Corkery', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(183, 1, 'Mr. Bryon Anderson', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(184, 8, 'Orlando Beahan', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(185, 11, 'Mrs. Jodie Tillman IV', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(186, 13, 'Prof. Summer Swift', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(187, 5, 'Edmond Reynolds', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(188, 7, 'Dr. Janelle Rutherford', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(189, 14, 'Brennan Emmerich II', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(190, 12, 'Dr. Stone Ward DDS', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(191, 10, 'Rosario Toy', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(192, 1, 'Ms. Glenna Thiel MD', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(193, 3, 'Carley O\'Reilly', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(194, 2, 'Jace Prohaska', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(195, 1, 'Talon Labadie', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(196, 7, 'Palma Medhurst Sr.', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(197, 13, 'Callie Heaney', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(198, 2, 'Magdalen Baumbach', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(199, 13, 'Alexandro Koelpin', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(200, 1, 'Nelson Moen', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(201, 2, 'Mohammad Tillman Sr.', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(202, 15, 'Miss Ethelyn Kreiger I', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(203, 9, 'Elena Swaniawski', 'L', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(204, 2, 'Travis Gorczany', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(205, 14, 'Mr. Jayden Goodwin V', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(206, 15, 'Allie Cremin IV', 'P', '2023-09-05 06:20:01', '2023-09-05 06:20:01'),
	(207, 8, 'Brad Osinski Sr.', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(208, 6, 'Prof. Anastacio Gutkowski', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(209, 14, 'Hermina Stanton', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(210, 8, 'Ms. Evalyn Lubowitz', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(211, 15, 'Meda Gorczany', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(212, 1, 'Darian Kris', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(213, 12, 'Brandt Fritsch', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(214, 4, 'Prof. Heber Kohler I', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(215, 15, 'Linnea Gibson', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(216, 9, 'Clement Erdman', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(217, 4, 'Miss Marisa Kutch', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(218, 10, 'Kameron Romaguera', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(219, 9, 'Annamae McGlynn', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(220, 13, 'Prof. Zander Purdy V', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(221, 1, 'Maxie Beatty', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(222, 4, 'Dr. Dianna Blick', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(223, 4, 'Keyshawn Lakin', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(224, 15, 'Mrs. Misty Macejkovic', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(225, 11, 'Rachelle Bechtelar', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(226, 6, 'Alice Schamberger', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(227, 3, 'Prof. Carolyne Brakus', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(228, 4, 'Prof. Jamaal Auer', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(229, 6, 'Christ Halvorson', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(230, 13, 'Prof. Libbie Deckow', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(231, 6, 'Lorna Abbott', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(232, 1, 'Prof. Milton Mohr IV', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(233, 11, 'Piper Wolf Sr.', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(234, 1, 'Koby Nienow', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(235, 12, 'Markus Ondricka Jr.', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(236, 11, 'Frederik Willms', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(237, 6, 'Dusty Vandervort', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(238, 4, 'Dr. Carolina Feeney II', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(239, 4, 'Pearlie Ledner', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(240, 6, 'Ladarius Jacobs', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(241, 2, 'Adriel McLaughlin', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(242, 11, 'Miss Leilani Baumbach', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(243, 6, 'Nels Feest II', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(244, 14, 'Elvie Stokes', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(245, 11, 'Dr. Monserrate Mann', 'P', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(246, 10, 'Prof. Garland Bednar PhD', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(247, 13, 'Martina Daniel', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(248, 15, 'Antwan Cummerata III', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(249, 7, 'Ms. Vallie Champlin III', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02'),
	(250, 10, 'Bertha Willms', 'L', '2023-09-05 06:20:02', '2023-09-05 06:20:02');

-- Dumping structure for table db_datatable.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_datatable.kecamatan
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.kecamatan: ~20 rows (approximately)
INSERT INTO `kecamatan` (`id`, `nama_kecamatan`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 'BAGOR', NULL, NULL, NULL),
	(2, 'BARON', 2021, NULL, NULL),
	(3, 'BERBEK', NULL, NULL, NULL),
	(4, 'GONDANG', NULL, NULL, NULL),
	(5, 'JATIKALEN', NULL, NULL, NULL),
	(6, 'KERTOSONO', NULL, NULL, NULL),
	(7, 'LENGKONG', NULL, NULL, NULL),
	(8, 'LOCERET', NULL, NULL, NULL),
	(9, 'NGANJUK', NULL, NULL, NULL),
	(10, 'NGETOS', NULL, NULL, NULL),
	(11, 'NGLUYU', NULL, NULL, NULL),
	(12, 'NGRONGGOT', NULL, NULL, NULL),
	(13, 'PACE', NULL, NULL, NULL),
	(14, 'PATIANROWO', NULL, NULL, NULL),
	(15, 'PRAMBON', NULL, NULL, NULL),
	(16, 'REJOSO', NULL, NULL, NULL),
	(17, 'SAWAHAN', NULL, NULL, NULL),
	(18, 'SUKOMORO', NULL, NULL, NULL),
	(19, 'TANJUNGANOM', NULL, NULL, NULL),
	(20, 'WILANGAN', NULL, NULL, NULL);

-- Dumping structure for table db_datatable.kejarpaket
CREATE TABLE IF NOT EXISTS `kejarpaket` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` tinyint unsigned NOT NULL,
  `paketA_lk` int DEFAULT NULL,
  `paketA_pr` int DEFAULT NULL,
  `paketB_lk` int DEFAULT NULL,
  `paketB_pr` int DEFAULT NULL,
  `paketC_lk` int DEFAULT NULL,
  `paketC_pr` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.kejarpaket: ~3 rows (approximately)
INSERT INTO `kejarpaket` (`id`, `kecamatan_id`, `paketA_lk`, `paketA_pr`, `paketB_lk`, `paketB_pr`, `paketC_lk`, `paketC_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 1, 16, 15, 4, 6, 12, 8, 2021, '2023-09-13 14:57:50', NULL),
	(2, 2, 0, 0, 0, 0, 0, 0, 2021, '2023-09-13 14:58:13', '2023-09-13 14:58:14'),
	(3, 3, 0, 0, 0, 0, 0, 0, 2021, '2023-09-13 14:58:42', NULL);

-- Dumping structure for table db_datatable.klasifikasi
CREATE TABLE IF NOT EXISTS `klasifikasi` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `namaklasifikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.klasifikasi: ~3 rows (approximately)
INSERT INTO `klasifikasi` (`id`, `namaklasifikasi`) VALUES
	(1, 'KELEMBAGAAN'),
	(2, 'TERPILAH'),
	(3, 'DASAR');

-- Dumping structure for table db_datatable.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.migrations: ~25 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_06_21_234132_create_kecamatans_table', 1),
	(6, '2023_06_21_234301_create_data_siswas_table', 1),
	(7, '2023_07_02_223839_create_beritas_table', 1),
	(8, '2023_07_03_081536_create_dataklasifikasis_table', 1),
	(9, '2023_07_04_034544_modify_enum_values_in_table', 1),
	(10, '2023_07_06_021631_modify_column_type_dataklasifikasi', 1),
	(11, '2023_07_06_073524_create_klasifikasi_table', 1),
	(12, '2023_07_06_073953_create_bidang_table', 1),
	(13, '2023_07_06_080608_modify_column_name', 1),
	(14, '2023_08_28_142339_modify_kectahun_table', 1),
	(15, '2023_08_28_164231_create_sdswastas_table', 1),
	(16, '2023_08_31_104555_add_newcolumn_sdswasta_table', 1),
	(17, '2023_08_31_110406_modify_jk_column_sdswasta', 1),
	(18, '2023_09_05_074728_add_tahun_sdswasta_table', 1),
	(19, '2023_09_05_075405_modify_tahun_typedata', 1),
	(20, '2023_09_05_163526_create_sdnegeri_table', 2),
	(21, '2023_09_07_053035_create_smpnegeris_table', 3),
	(22, '2023_09_12_140314_create_apk_table', 4),
	(23, '2023_09_13_125346_create_apm_table', 5),
	(24, '2023_09_13_135027_create_sertifikasiguru_table', 6),
	(26, '2023_09_13_143346_create_kejarpaket_table', 7);

-- Dumping structure for table db_datatable.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.password_resets: ~0 rows (approximately)

-- Dumping structure for table db_datatable.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_datatable.sdnegeri
CREATE TABLE IF NOT EXISTS `sdnegeri` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` tinyint unsigned NOT NULL,
  `jk_lk` int DEFAULT NULL,
  `jk_pr` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.sdnegeri: ~20 rows (approximately)
INSERT INTO `sdnegeri` (`id`, `kecamatan_id`, `jk_lk`, `jk_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 1, 1714, 1856, 2021, '2023-09-06', NULL),
	(2, 2, 1319, 1429, 2021, '2023-09-06', NULL),
	(3, 3, 1856, 2011, 2021, '2023-09-06', NULL),
	(4, 4, 1875, 2031, 2021, '2023-09-07', NULL),
	(5, 5, 596, 646, 2021, '2023-09-07', NULL),
	(6, 6, 1908, 2066, 2021, '2023-09-07', NULL),
	(7, 7, 1164, 1261, 2021, '2023-09-07', NULL),
	(8, 8, 2113, 2289, 2021, '2023-09-07', NULL),
	(9, 9, 2571, 2785, 2021, '2023-09-07', NULL),
	(10, 10, 1309, 1419, 2021, '2023-09-07', NULL),
	(11, 11, 430, 465, 2021, '2023-09-07', NULL),
	(12, 12, 1784, 1933, 2021, '2023-09-07', NULL),
	(13, 13, 1918, 2078, 2021, '2023-09-07', NULL),
	(14, 14, 1217, 1318, 2021, '2023-09-07', NULL),
	(15, 15, 2016, 2184, 2021, '2023-09-07', NULL),
	(16, 16, 2461, 2667, 2021, '2023-09-07', NULL),
	(17, 17, 1209, 1309, 2021, '2023-09-07', NULL),
	(18, 18, 1436, 1555, 2021, '2023-09-07', NULL),
	(19, 19, 3173, 3437, 2021, '2023-09-07', NULL),
	(20, 20, 898, 972, 2021, '2023-09-07', NULL);

-- Dumping structure for table db_datatable.sdswasta
CREATE TABLE IF NOT EXISTS `sdswasta` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` bigint unsigned NOT NULL,
  `jk_lk` int DEFAULT NULL,
  `jk_pr` int NOT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.sdswasta: ~20 rows (approximately)
INSERT INTO `sdswasta` (`id`, `kecamatan_id`, `jk_lk`, `jk_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 0, 2021, '2023-09-05 13:27:20', '2023-09-05 13:27:22'),
	(2, 2, 158, 171, 2021, '2023-09-05 13:43:47', NULL),
	(3, 3, 0, 0, 2021, '2023-09-05 13:43:48', NULL),
	(4, 4, 177, 191, 2021, '2023-09-05 13:43:58', NULL),
	(5, 5, 0, 0, 2021, '2023-09-05 13:43:50', NULL),
	(6, 6, 210, 227, 2021, '2023-09-05 13:43:51', NULL),
	(7, 7, 0, 0, 2021, '2023-09-05 13:43:53', NULL),
	(8, 8, 490, 530, 2021, '2023-09-05 13:43:54', NULL),
	(9, 9, 1293, 1401, 2021, '2023-09-05 13:43:55', NULL),
	(10, 10, 24, 27, 2021, '2023-09-05 13:43:55', NULL),
	(11, 11, 0, 0, 2021, '2023-09-05 13:43:56', NULL),
	(12, 12, 8, 9, 2021, '2023-09-05 13:44:01', NULL),
	(13, 13, 61, 67, 2021, '2023-09-05 13:43:59', NULL),
	(14, 14, 0, 0, 2021, '2023-09-05 13:44:02', NULL),
	(15, 15, 45, 48, 2021, '2023-09-05 13:44:07', NULL),
	(16, 16, 0, 0, 2021, '2023-09-05 13:44:08', NULL),
	(17, 17, 35, 37, 2021, '2023-09-05 13:44:09', NULL),
	(18, 18, 0, 0, 2021, '2023-09-05 13:44:11', NULL),
	(19, 19, 304, 330, 2021, '2023-09-05 13:44:11', NULL),
	(20, 20, 0, 0, 2021, '2023-09-05 13:44:12', NULL);

-- Dumping structure for table db_datatable.sertifikasiguru
CREATE TABLE IF NOT EXISTS `sertifikasiguru` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_lk` int DEFAULT NULL,
  `jk_pr` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.sertifikasiguru: ~3 rows (approximately)
INSERT INTO `sertifikasiguru` (`id`, `jenjang`, `jk_lk`, `jk_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 'TK', 514, 557, 2021, '2023-09-13 14:06:43', NULL),
	(2, 'SD', 1166, 1264, 2021, '2023-09-13 14:07:09', NULL),
	(3, 'SMP', 690, 747, 2021, '2023-09-13 14:07:37', NULL);

-- Dumping structure for table db_datatable.smpnegeri
CREATE TABLE IF NOT EXISTS `smpnegeri` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` tinyint unsigned NOT NULL,
  `jk_lk` int DEFAULT NULL,
  `jk_pr` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.smpnegeri: ~20 rows (approximately)
INSERT INTO `smpnegeri` (`id`, `kecamatan_id`, `jk_lk`, `jk_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 1, 525, 569, 2021, NULL, NULL),
	(2, 2, 576, 625, 2021, NULL, NULL),
	(3, 3, 589, 638, 2021, NULL, NULL),
	(4, 4, 709, 768, 2021, NULL, NULL),
	(5, 5, 228, 248, 2021, NULL, NULL),
	(6, 6, 1619, 1754, 2021, NULL, NULL),
	(7, 7, 495, 537, 2021, NULL, NULL),
	(8, 8, 597, 647, 2021, NULL, NULL),
	(9, 9, 2837, 3037, 2021, NULL, NULL),
	(10, 10, 316, 343, 2021, NULL, NULL),
	(11, 11, 154, 167, 2021, NULL, NULL),
	(12, 12, 732, 792, 2021, NULL, NULL),
	(13, 13, 804, 871, 2021, NULL, NULL),
	(14, 14, 542, 588, 2021, NULL, NULL),
	(15, 15, 822, 890, 2021, NULL, NULL),
	(16, 16, 911, 987, 2021, NULL, NULL),
	(17, 17, 399, 433, 2021, NULL, NULL),
	(18, 18, 409, 444, 2021, NULL, NULL),
	(19, 19, 1166, 1264, 2021, NULL, NULL),
	(20, 20, 345, 373, 2021, NULL, NULL);

-- Dumping structure for table db_datatable.smpswasta
CREATE TABLE IF NOT EXISTS `smpswasta` (
  `id` bigint unsigned NOT NULL,
  `kecamatan_id` tinyint unsigned NOT NULL,
  `jk_lk` int DEFAULT NULL,
  `jk_pr` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.smpswasta: ~20 rows (approximately)
INSERT INTO `smpswasta` (`id`, `kecamatan_id`, `jk_lk`, `jk_pr`, `tahun`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 0, 2021, NULL, NULL),
	(2, 2, 232, 252, 2021, NULL, NULL),
	(3, 3, 56, 61, 2021, NULL, NULL),
	(4, 4, 61, 66, 2021, NULL, NULL),
	(5, 5, 0, 0, 2021, NULL, NULL),
	(6, 6, 121, 132, 2021, NULL, NULL),
	(7, 7, 0, 0, 2021, NULL, NULL),
	(8, 8, 645, 699, 2021, NULL, NULL),
	(9, 9, 296, 231, 2021, NULL, NULL),
	(10, 10, 0, 0, 2021, NULL, NULL),
	(11, 11, 0, 0, 2021, NULL, NULL),
	(12, 12, 40, 43, 2021, NULL, NULL),
	(13, 13, 12, 14, 2021, NULL, NULL),
	(14, 14, 59, 64, 2021, NULL, NULL),
	(15, 15, 134, 146, 2021, NULL, NULL),
	(16, 16, 0, 0, 2021, NULL, NULL),
	(17, 17, 55, 59, 2021, NULL, NULL),
	(18, 18, 11, 12, 2021, NULL, NULL),
	(19, 19, 385, 417, 2021, NULL, NULL),
	(20, 20, 0, 0, 2021, NULL, NULL);

-- Dumping structure for table db_datatable.tbberita
CREATE TABLE IF NOT EXISTS `tbberita` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbberita_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.tbberita: ~0 rows (approximately)

-- Dumping structure for table db_datatable.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_datatable.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@localhost', NULL, '$2y$10$wjChu.RGVZUVcO7e2sBuP.5siikTjtlJSSt7erj8F9ISH9eWfhUBi', NULL, NULL, NULL),
	(2, 'admin2', 'admin2@localhost', NULL, '$2y$10$G11SoFn9HHbKfbDHHrnY9eWhRSO2xaaRoUBHtBZVb3Kou2Q2PxS1u', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
