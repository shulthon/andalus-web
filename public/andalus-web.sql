-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Mar 2025 pada 13.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andalus-web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1741696182),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1741696182;', 1741696182),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1741669745),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1741669745;', 1741669745);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_06_044433_create_sections_table', 2),
(5, '2025_03_07_233330_create_settings_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `post_as` enum('HOME Left','HOME Right','HOME Normal','SERVICE Left','SERVICE Right','SERVICE Left Background','Service','PRODUCT App','PRODUCT Normal','MEDIA PARTNER','MEDIA PARTNER Footer','CONTACT') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sections`
--

INSERT INTO `sections` (`id`, `title`, `thumbnail`, `content`, `post_as`, `created_at`, `updated_at`) VALUES
(1, 'Siapa Kami', '01JP1SZTMP03EXJEC1Z0EHBE59.png', '<p>PT Andalus Teknologi Indonesia merupakan perusahaan berbasis teknologi yang menyediakan pelayanan pada berbagai bidang dengan fokus pencapaian terhadap hasil yang berkualitas. Perusahaan ini didedikasikan sebagai perusahaan yang mampu memberikan solusi dan layanan teknologi terbaik kepada pelanggan. Antesia berkomitmen menjadi mitra terpercaya dalam merencanakan dan memberikan solusi teknologi terkini berdasarkan kebutuhan pelanggan.</p>', 'HOME Left', '2025-03-10 22:14:10', '2025-03-10 22:14:10'),
(2, 'Visi dan Misi', '01JP1T3XS01ZBHABKSWSCFQD06.png', '<h2 class=\"display-6 lh-1 mb-4\">Visi</h2><p class=\"lead fw-semibold mb-5 mb-lg-0\">Menjadi pusat teknologi yang unggul dalam berbagai bidang dengan mengharapkan rahmat dan ridho Allah ﷻ</p><br/><br/><h2 class=\"display-6 lh-1 mb-4\">Misi</h2><p class=\"fw-normal mb-5 mb-lg-0\">Mengembangkan perusahaan guna mewujudkan penggunaan teknologi sesuai dengan nilai nilai al quran dan hadist; Meniadakan transaksi yang mengandung Riba, Gharar dan Maysir di dalamnya; Memberikan solusi yang efektif kepada pelanggan dalam mengatasi berbagai permasalahan pada bidang teknologi.</p>', 'HOME Right', '2025-03-10 22:16:24', '2025-03-10 22:16:24'),
(3, 'Nilai Perusahaan', '01JP1W4ZJV07KRRQV3VVZM3ZJZ.png', '<div class=\"baris\">\r\n                  <div class=\"kolom\">\r\n                      <h2 class=\"lh-1 mb-4\" style=\"font-size: calc(1rem + 1vw);background:url(\'img/bg_point.svg\');background-repeat: no-repeat; color:white; padding:10px;\">Andal</h2>\r\n                        <p class=\"fw-normal mb-lg-0\">Kami akan menempatkan proyek Anda sebagai prioritas utama kami.  Dengan senang hati kami akan bertanggung jawab untuk menangani setiap proyek yang dipercayakan kepada kami dan memenuhi target yang ditentukan.</p>\r\n                        <br/>\r\n                        <h2 class=\"lh-1 mb-4\" style=\"font-size: calc(1rem + 1vw);background:url(\'img/bg_point.svg\');background-repeat: no-repeat; color:white; padding:10px;\">Moral</h2>\r\n                        <p class=\"fw-normal mb-lg-0\">Melayani dengan sepenuh hati, Memberikan pelayanan terbaik</p>\r\n                        <br/>\r\n                        <h2 class=\"lh-1 mb-4\" style=\"font-size: calc(1rem + 1vw);background:url(\'img/bg_point.svg\');background-repeat: no-repeat; color:white; padding:10px;\">Arif</h2>\r\n                        <p class=\"fw-normal mb-lg-0\">Dapat mengerti segala kebutuhan pelanggan</p>\r\n                        <br/>\r\n                  </div>\r\n                  <div class=\"vertical-line\"></div>\r\n                  <div class=\"kolom\">\r\n                  <h2 class=\"lh-1 mb-4\" style=\"font-size: calc(1rem + 1vw);background:url(\'img/bg_point.svg\');background-repeat: no-repeat; color:white; padding:10px;\">Netral</h2>\r\n                        <p class=\"fw-normal mb-lg-0\">Berlaku adil dan tidak memihak</p>\r\n                        <br/>\r\n                        <h2 class=\"lh-1 mb-4\" style=\"font-size: calc(1rem + 1vw);background:url(\'img/bg_point.svg\');background-repeat: no-repeat; color:white; padding:10px;\">Akuntabilitas</h2>\r\n                        <p class=\"fw-normal mb-lg-0\">Bertanggung jawab kepada pihak-pihak yang berhubungan  terkait  kegiatan bisnis atau kinerja dalam menjalankan proyek</p>\r\n                        <br/>\r\n                        <h2 class=\"lh-1 mb-4\" style=\"font-size: calc(1rem + 1vw);background:url(\'img/bg_point.svg\');background-repeat: no-repeat; color:white; padding:10px;\">Harmoni</h2>\r\n                        <p class=\"fw-normal mb-lg-0\">Menjaga keseimbangan organisasi dengan bertumbuh dan berkembang bersama di dalam suasana kekeluargaan dan saling mendukung untuk kemajuan individual dan organisasi.</p>\r\n                    \r\n                  </div>\r\n                </div>', 'HOME Normal', '2025-03-10 22:51:56', '2025-03-10 22:51:56'),
(4, 'MANASIKKU', '01JP24NNECYJRZ9YXHA1K3KZWB.png', '<p>Manasikku merupakan aplikasi pembelajaran manasik haji berbasis virtual reality. Pada aplikasi manasikku diharapkan pembelajaran manasik haji juga dapat menampilkan interaksi langsung dengan prosesi haji maupun umrah yang disimulasikan oleh komputer. \r\n\r\nSelain itu, terdapat fitur perlengkap lainnya pada aplikasi ini yaitu fitur terjemahan bahasa arab, kurs mata uang riyal dengan rupiah, serta fitur denah. Aplikasi manasikku saat ini dapat diakses secara gratis melalui google playstore.</p>\r\n<div class=\"text-center\">\r\n<button class=\"btn btn-primary background-prim\" type=\"button\" onclick=\"location.href=\'https://play.google.com/store/apps/details?id=com.manasikku.manasikku\'\">UNDUH MANASIKKU</button>\r\n</div>', 'PRODUCT App', '2025-03-11 01:20:51', '2025-03-11 01:20:51'),
(5, 'KOMMIKA', '01JP2619HRYP8KP0RAA9SXWEF2.png', '                      <p>Kommika (Komik Matematika) merupakan media pembelajaran Matematika yang dikemas dalam bentuk komik interaktif dengan pendekatan kontekstual. Konten komik berisi materi pokok Bentuk Aljabar. Tersedia 6 cerita menarik dengan tokoh utamanya adalah kakak beradik, yang bernama Kommi dan Mika. Di setiap episode terdapat beberapa pertanyaan interaktif yang berkaitan dengan materi di dalam cerita. Aplikasi Kommika dapat diunduh secara gratis di google playstore.</p>\r\n                      <div class=\"text-center\">\r\n                        <button class=\"btn btn-primary background-prim\" type=\"button\" onclick=\"location.href=\'https://play.google.com/store/apps/details?id=id.moxspoy.komath\'\">UNDUH KOMMIKA</button>\r\n                      </div>', 'PRODUCT App', '2025-03-11 01:44:41', '2025-03-11 01:44:41'),
(6, 'iABLE', '01JP263D16JQ2Q26GJ39S65ZFH.png', '<p>iABLE merupakan aplikasi E-Counseling bagi Orangtua dan Intervensi Dini bagi Anak Berkebutuhan Khusus. Dengan memberikan fitur chat Konsultasi dan Intervensi serta Informasi tentang Anak Berkebutuhan Khusus secara Online, dimanapun dan kapanpun. Aplikasi iABLE dapat diakses secara gratis melalui google playstore.</p>\r\n                      <div class=\"text-center\">\r\n                        <button class=\"btn btn-primary background-prim\" type=\"button\" onclick=\"location.href=\'https://play.google.com/store/apps/details?id=com.iable.iable\'\">UNDUH iABLE</button>\r\n                      </div>', 'PRODUCT App', '2025-03-11 01:45:50', '2025-03-11 01:45:50'),
(7, 'SAFE JEK', '01JP26CVGRNNNV96C7SF5Y6RPH.png', '<p><b>Safety Starting System (Safe Jek)</b> merupakan alat keamanan motor ekonomis dengan sistem pemasangan pada motor plug and play yang terdiri atas saklar pengaman ditambah tiga pilihan sistem keamanan motor yaitu dengan menggunakan ID Card, gantungan kunci, atau bluetooth yang terhubung dengan klakson dan juga lampu motor.</p>', 'PRODUCT Normal', '2025-03-11 01:51:00', '2025-03-11 01:51:00'),
(8, 'SIPEKA', '01JP26EPMST9V5EJCBZ642RZW5.png', '<p><b>Sipeka (Sistem Pendeteksi Kadar Alkohol Berbasis Sensor MQ-3 dan Internet Of Things)</b> merupakan alat pendeteksi kadar alkohol berbasis sensor MQ-3 dan Internet of Things yang hasil pengukuran nya bisa diketahui dengan real time dengan langsung mengirimkannya ke internet atau dikenal dengan sebutan  Internet of Things (IoT).</p>', 'PRODUCT Normal', '2025-03-11 01:52:00', '2025-03-11 01:52:00'),
(9, 'Berita Manasikku', '01JP26ZVTJ208GVM355ZFBENNF.png', '<p style=\"text-align:left;margin:0px;padding:0px;font-size:10px;\">Apr 15, 2024</p>\r\n<p style=\"text-align:left; margin:0px;padding:0px;font-size:12px;font-weight:bold\">MANASIKKU : Aplikasi Pembelajaran Manasik Haji Berbasis Virtual Reality</p>\r\n', 'MEDIA PARTNER', '2025-03-11 02:01:23', '2025-03-11 02:01:23'),
(10, 'Berita Kommika', '01JP271Y7P45RPBZ8AAZ7E4P27.png', '<p style=\"text-align:left;margin:0px;padding:0px;font-size:10px;\">Apr 15, 2024</p>\r\n<p style=\"text-align:left; margin:0px;padding:0px;font-size:12px;font-weight:bold\">KOMIKKA : Komik Matematika dan Fisika</p>', 'MEDIA PARTNER', '2025-03-11 02:02:31', '2025-03-11 02:02:31'),
(12, 'Berita SafeJek', '01JP274B1NDHC752FDXN0VTACR.png', '<p style=\"text-align:left;margin:0px;padding:0px;font-size:10px;\">Apr 15, 2024</p>\r\n<p style=\"text-align:left; margin:0px;padding:0px;font-size:12px;font-weight:bold\">SAFEJEK : Safety Starting System Pada Motor Untuk Pengemudi GOJEK</p>', 'MEDIA PARTNER', '2025-03-11 02:03:49', '2025-03-11 02:03:49'),
(13, 'Berita MQ3', '01JP276S5PCXM1ZHK8CSDVP6DZ.png', '<p style=\"text-align:left;margin:0px;padding:0px;font-size:10px;\">Apr 15, 2024</p>\r\n<p style=\"text-align:left; margin:0px;padding:0px;font-size:12px;font-weight:bold\">Sistem Pendeteksi Alkohol Berbasis Sensor MQ-3 dan Internet of Things</p>', 'MEDIA PARTNER', '2025-03-11 02:05:09', '2025-03-11 02:05:09'),
(14, 'Mengapa Memilih Layanan Kami?', '01JP27VNJ9Y2BZN6MDR3801YXP.png', '<ol><li>Memberikan produk dan layanan berkualitas untuk memberikan solusi terbaik bagi klien</li><li>Menyesuaikan produk sesuai kebutuhan pasar dan pelanggan</li><li>Harga yang kompetitif dan mampu bersaing</li><li>Mendukung teknologi baru yang lebih update</li><li>Kelengkapan layanan dan fasilitas</li><li>Mengutamakan kualitas layanan</li></ol>', 'MEDIA PARTNER Footer', '2025-03-11 02:16:34', '2025-03-11 02:16:34'),
(15, 'USER EXPERIENCE', '01JP2BWG5HZCCF265SVAQ5AKW9.png', '                    <p>Kami memprioritaskan dalam menciptakan desain yang menarik dan pengalaman pengguna yang mulus untuk mendorong hasil optimal bagi bisnis Anda</p>\r\n                    <table>\r\n                      <tr>\r\n                        <td style=\"width:70px\"><img src=\"img/uxres.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>UX Research</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/uxdes.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>UX Design</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/uxsur.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>UX Survey</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/uxus.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>Usability Testing</td>\r\n                      </tr>\r\n                    </table>', 'SERVICE Left', '2025-03-11 03:26:55', '2025-03-11 03:26:55'),
(16, 'Development', '01JP2JFCXDGZZT95KN9PM34YFR.png', '                    <p>Pakar kami berspesialisasi dalam membangun situs web atau aplikasi seluler khusus di semua perangkat untuk mendukung bisnis Anda</p>\r\n                    <table>\r\n                      <tr>\r\n                        <td style=\"width:70px\"><img src=\"img/devvis.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>Visual Design</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/devweb.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>Web Development</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/devmob.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>Mobile Apps</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/devecom.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>E-commerce</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/devcloud.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>Cloud Native Application</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td><img src=\"img/devmain.png\" style=\"margin:0 auto; width:50px\"/></td>\r\n                        <td>Maintenance</td>\r\n                      </tr>\r\n                    </table>', 'SERVICE Right', '2025-03-11 05:22:06', '2025-03-11 05:23:08'),
(17, 'SMARTHOME', '01JP2JVJXE24JTRS8R27TYGBS3.png', '                      <p style=\"text-align:justify\">Merupakan sebuah konsep rumah modern yang mengadopsi teknologi canggih untuk meningkatkan kualitas hidup penghuninya. Smart home system memungkinkan pengguna untuk mengontrol fungsi seperti akses keamanan ke rumah, suhu, pencahayaan, dan home theater dari jarak jauh.</p>\r\n                      <div style=\"height:50px\"></div>\r\n                      <h4>Kelebihan Smarthome</h4>\r\n                      <table>\r\n                      <tr>\r\n                        <td style=\"width:60px; padding-bottom:7px;\"><img src=\"img/sh1.png\" style=\"margin:0 auto\"/></td>\r\n                        <td>Menikmati kenyamanan tingkat tinggi</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td style=\"width:60px; padding-bottom:7px;\"><img src=\"img/sh2.png\" style=\"margin:0 auto\"/></td>\r\n                        <td>Meningkatkan efisiensi kerja</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td style=\"width:60px; padding-bottom:7px;\"><img src=\"img/sh3.png\" style=\"margin:0 auto\"/></td>\r\n                        <td>Menghemat energi</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td style=\"width:60px; padding-bottom:7px;\"><img src=\"img/sh4.png\" style=\"margin:0 auto\"/></td>\r\n                        <td>Mempermudah keseharian</td>\r\n                      </tr>\r\n                    </table>', 'SERVICE Left Background', '2025-03-11 05:28:45', '2025-03-11 05:28:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yoJAwxvE2ePhLSmUx5rlxKEncRdoz9ywU8QqSvDh', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiWE9PNmhTeTdOa2hSNTc2U1c3ajNyWHFzY3VWT1ZLZlF2SzNuQkhTRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkZVB0ZHA5TDRtdkhPdUdPL1Zuc2Z2T2Jyd2J1YUEwS1BkdXgySC9abFMwYmZ6WkJKcjZGaTYiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1741696330);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `key`, `label`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, '_site_name', 'Judul Situs', 'Andalus', 'text', '2025-03-07 16:42:04', '2025-03-07 16:42:04'),
(2, '_location', 'Alamat', 'Jl. Flores IV No. 25 RT 001/RW 010, Aren Jaya, Kec. Bekasi Timur, Kota Bekasi', 'text', '2025-03-07 16:42:04', '2025-03-07 16:42:04'),
(3, '_youtube', 'Youtube', 'https://youtube.com', 'text', '2025-03-07 16:42:04', '2025-03-07 16:42:04'),
(4, '_instagram', 'Instagram', 'https://instagram.com', 'text', '2025-03-07 16:42:04', '2025-03-07 16:42:04'),
(5, '_x', 'X', 'https://x.com', 'text', '2025-03-07 16:42:04', '2025-03-07 16:42:04'),
(6, '_facebook', 'Facebook', 'https://facebook.com', 'text', '2025-03-07 16:42:04', '2025-03-07 16:42:04'),
(7, '_site_company', 'Nama Perusahaan', 'PT. Andalus Teknologi Indonesia', 'longtext', '2025-03-07 16:42:04', '2025-03-07 16:42:04'),
(8, '_mail', 'E-mail', 'andalusteknologi@gmail.com', 'text', '2025-03-09 05:40:31', '2025-03-09 05:40:31'),
(9, '_phone', 'Telepon', '+62 878 6220 1656', 'text', '2025-03-09 05:43:19', '2025-03-09 05:43:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shulthon', 'shulthonhm@gmail.com', NULL, '$2y$12$ePtdp9L4mvHOuGO/VnsfvObrwbuaA0KPdux2H/ZlS0bfzZBJr6Fi6', 'teNE3OUU1XFCbSHFyawAHkIlJNvH3g44hDehNoGGn8pP5kDrhLNATBScXQMQ', '2025-03-05 21:43:32', '2025-03-05 21:43:32'),
(3, 'Admin', 'andalusteknologi@gmail.com', NULL, '$2y$12$ttwK3.qkzsIVRleXuojdaezo/OVc/eFYvVOW.ZPp4NPCWtEiZ8R.6', NULL, '2025-03-11 05:34:26', '2025-03-11 05:34:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
