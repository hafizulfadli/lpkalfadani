-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2023 pada 08.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alfadani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `konten`, `created_at`, `updated_at`) VALUES
(3, 'Profile LPK Al Fadani', '1702488863.png', '<p>Al Fadani adalah lembaga pelatihan dan pengirim resmi peserta magang ke Jepang di Sumatera Barat dengan pendirian perusahaan pada bulan April 2019 dan akreditasi dari Pemerintah Indonesia pada bulan April 2023. Pemuda Indonesia memainkan peran utama dalam transformasi masyarakat. Karakter mereka yang aktif, ramah, dan semangat yang tinggi membuat mereka menjadi mitra yang baik bagi Jepang. Seluruh bagian perusahaan akan bekerja sama untuk memberikan pendidikan dan pelatihan yang akan membawa masa depan lebih baik bagi Jepang dan Indonesia.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kontent` longtext NOT NULL,
  `dilihat` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `id_kategori`, `title`, `tanggal`, `kontent`, `dilihat`, `thumbnail`, `link`, `slug`, `created_at`, `updated_at`) VALUES
(14, 1, 'Pelatihan Kerja Jepang Tingkatkan Peluang Kerja', '2023-12-13', '<p>Pelatihan kerja Jepang menjadi salah satu alternatif yang dipilih oleh banyak orang Indonesia untuk meningkatkan peluang kerja. Hal ini karena Jepang merupakan salah satu negara maju dengan perekonomian yang kuat. Selain itu, standar hidup di Jepang juga tergolong tinggi.</p>', NULL, '1702528123.jpg', '', 'pelatihan-kerja-jepang-tingkatkan-peluang-kerja', NULL, NULL),
(15, 1, 'Pelatihan Kerja Jepang diminati oleh Milenial', '2023-12-14', '<p>Pelatihan kerja ke Jepang semakin diminati oleh generasi milenial. Hal ini terlihat dari meningkatnya jumlah pendaftar pelatihan kerja Jepang dari tahun ke tahun.Menurut data Badan Nasional Sertifikasi Profesi (BNSP), jumlah pendaftar pelatihan kerja Jepang pada tahun 2022 mencapai 50.000 orang. Jumlah ini meningkat sekitar 20% dari tahun sebelumnya.</p>', 3, '1702528053.jpg', '', 'pelatihan-kerja-jepang-diminati-oleh-milenial', NULL, NULL),
(16, 1, 'Pelatihan Kerja ke Jepang Diminati Masyarakat', '2023-12-14', '<p>Jakarta, 14 Desember 2023 - Pelatihan kerja ke Jepang masih menjadi incaran masyarakat Indonesia. Hal ini terlihat dari semakin banyaknya lembaga pelatihan yang menawarkan program ini.Menurut data dari Kementerian Ketenagakerjaan, jumlah peserta pelatihan kerja ke Jepang pada tahun 2022 mencapai 10.000 orang. Jumlah ini meningkat dibandingkan tahun sebelumnya yang hanya mencapai 8.000 orang.</p>\r\n\r\n<p>Ada beberapa faktor yang mendorong minat masyarakat untuk mengikuti pelatihan kerja ke Jepang. Salah satunya adalah prospek kerja yang menjanjikan di Jepang.</p>', NULL, '1702527648.jpg', '', 'pelatihan-kerja-ke-jepang-diminati-masyarakat', NULL, NULL),
(17, 2, 'Pelatihan Kerja Jepang Tingkatkan Kesempatan Kerja Lulusan SMK', '2023-12-15', '<p>Jakarta, 14 Juli 2023 - Pelatihan kerja ke Jepang menjadi salah satu pilihan bagi lulusan SMK untuk meningkatkan kesempatan kerja. Hal ini karena Jepang merupakan salah satu negara dengan perekonomian maju dan membutuhkan banyak tenaga kerja terampil.</p>\r\n\r\n<p>Salah satu lembaga pelatihan kerja ke Jepang yang berpengalaman adalah PT. XYZ. Lembaga ini telah mengirim ribuan lulusan SMK ke Jepang sejak tahun 2000.</p>', NULL, '1702527897.jpg', '', 'pelatihan-kerja-jepang-tingkatkan-kesempatan-kerja-lulusan-smk', NULL, NULL),
(18, 1, 'Pelatihan Kerja Jepang diminati oleh Milenial', '2023-12-14', '<p>Pelatihan kerja ke Jepang semakin diminati oleh generasi milenial. Hal ini terlihat dari meningkatnya jumlah pendaftar pelatihan kerja Jepang dari tahun ke tahun.Menurut data Badan Nasional Sertifikasi Profesi (BNSP), jumlah pendaftar pelatihan kerja Jepang pada tahun 2022 mencapai 50.000 orang. Jumlah ini meningkat sekitar 20% dari tahun sebelumnya.</p>', 3, '1702528036.jpg', '', 'pelatihan-kerja-jepang-diminati-oleh-milenial', NULL, NULL),
(19, 2, 'Pelatihan Kerja Jepang Tingkatkan Kesempatan Kerja Lulusan SMK', '2023-12-15', '<p>Jakarta, 14 Juli 2023 - Pelatihan kerja ke Jepang menjadi salah satu pilihan bagi lulusan SMK untuk meningkatkan kesempatan kerja. Hal ini karena Jepang merupakan salah satu negara dengan perekonomian maju dan membutuhkan banyak tenaga kerja terampil.</p>\r\n\r\n<p>Salah satu lembaga pelatihan kerja ke Jepang yang berpengalaman adalah PT. XYZ. Lembaga ini telah mengirim ribuan lulusan SMK ke Jepang sejak tahun 2000.</p>', NULL, '1702527897.jpg', '', 'pelatihan-kerja-jepang-tingkatkan-kesempatan-kerja-lulusan-smk', NULL, NULL);

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
-- Struktur dari tabel `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeries`
--

INSERT INTO `galeries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test', '1702571201.jpg', NULL, NULL),
(2, 'kegiatan', '1702571272.jpg', NULL, NULL),
(3, 'kegiatan latihan', '1702571320.jpg', NULL, NULL),
(4, 'peserta', '1702571358.jpg', NULL, NULL),
(5, 'kegiatan', '1702571272.jpg', NULL, NULL),
(6, 'kegiatan latihan', '1702571320.jpg', NULL, NULL),
(7, 'test', '1702571201.jpg', NULL, NULL),
(8, 'peserta', '1702571358.jpg', NULL, NULL),
(9, 'kegiatan', '1702571272.jpg', NULL, NULL),
(10, 'kegiatan latihan', '1702571320.jpg', NULL, NULL),
(11, 'peserta', '1702571358.jpg', NULL, NULL),
(12, 'test', '1702571201.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Pelatihan', NULL, NULL),
(2, 'Disnaker', NULL, NULL),
(3, 'Umum', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_12_134447_create_kategoris_table', 1),
(6, '2023_12_12_142418_create_beritas_table', 1),
(7, '2023_12_12_160247_create_abouts_table', 2),
(8, '2023_12_12_164303_create_visimisis_table', 3),
(9, '2023_12_12_171559_create_settings_table', 4),
(10, '2023_12_12_175011_create_sambutans_table', 5),
(11, '2023_12_12_180435_create_navbars_table', 6),
(12, '2023_12_12_182452_create_pages_table', 7),
(13, '2023_12_13_014337_create_programs_table', 8),
(14, '2023_12_14_073741_create_visitors_table', 9),
(15, '2023_12_14_161049_create_galeries_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `navbar_id` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `konten` longtext NOT NULL,
  `dilihat` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `navbar_id`, `judul`, `tanggal`, `konten`, `dilihat`, `thumbnail`, `slug`, `created_at`, `updated_at`) VALUES
(3, 3, 'testing doang', '2023-12-15', '<p>lorem ipsummmmmm</p>', NULL, '1702484382.jpg', 'testing-doang', NULL, NULL);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `programs`
--

INSERT INTO `programs` (`id`, `title`, `image`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Magang/Ginou Jisshusei', '1702568363.svg', '<p>LPK SO Al Fadani merupakan lembaga yang telah mendapatkan izin sebagai Sending Organisation dari pemerintah Indonesia, berdasarkan Sistem Praktik Magang Asing bagi siswa muda (20-28 tahun) di Indonesia, LPK Al Fadani akan memberikan pelatihan bahasa dan pendidikan teknis di bawah bimbingan guru-guru terbaik.</p>', NULL, NULL),
(2, 'Specified Skill Worker/Tokutei Ginou', '1702568481.svg', '<h3>Program Tenaga ahli berketrampilan khusus. Diperlukan level bahasa Jepang dasar dan lulus uji keterampilan yang diselenggarakan oleh pemerintah Jepang. Pemegang visa SSW dapat bekerja di perusahaan Jepang dengan hak dan kewajiban yang sama dengan pekerja Jepang.</h3>', NULL, NULL),
(3, 'Belajar Bahasa Jepang/Nihonggo Gakkou', '1702568556.svg', '<p>Program belajar bahasa jepang di negara Jepang. Ditujukan bagi mereka yang ingin melanjutkan karir bekerja di Jepang maupun kuliah di Jepang.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutans`
--

CREATE TABLE `sambutans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sambutans`
--

INSERT INTO `sambutans` (`id`, `title`, `image`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'Sambutan Pimpinan LPK Al Fadani', '1702542284.jpg', '<p>Jepang adalah negara maju dengan alam yang indah dan budaya terkenal di seluruh benua, sehingga menarik banyak orang untuk datang. Tingkat kelahiran telah menurun secara signifikan dan populasi yang kecil telah menyebabkan kekurangan tenaga kerja di banyak sektor industri. Pemerintah Jepang sangat terbuka terhadap orang asing yang ingin tinggal dan bekerja di Jepang. Di sisi lain, di Indonesia sumber daya manusia dengan lapangan kerja tidak sebanding, sehingga menciptakan banyak pengangguran. Hal inilah yang melatarbelakangi saya untuk mendirikan LPK AL FADANI. Saya ingin pemuda Indonesia memiliki kesempatan dan pengalaman yang lebih baik.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat1` varchar(255) NOT NULL,
  `alamat2` varchar(255) NOT NULL,
  `map` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `alamat1`, `alamat2`, `map`, `phone`, `email`, `instagram`, `facebook`, `whatsapp`, `youtube`, `tiktok`, `created_at`, `updated_at`) VALUES
(2, 'Berok RT 003/RW 012, Kelurahan Gunung Pangilun, Kecamatan Padang Utara, Kota Padang, Sumatera Barat', 'Jl. Muaro Panjalinan RT 002/RW 001, Kelurahan Batang Kabung Ganting, Kecamatan Koto Tangah, Kota Padang, Sumatera Barat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.36753718319!2d100.335985274965!3d-0.8612891991303628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c1bdbd2c7d5b%3A0x7943c9634c8da9f5!2sLPK%20Alfadani!5e0!3m2!1sid!2sid!4v1702513763057!5m2!1sid!2sid', '0812 7781 7469', 'lpkalfadani@gmail.com', 'lpk.alfadani', 'LPK Al Fadani', '0812 7781 7469', 'LPK Al Fadani', 'lpk.alfadani', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$06GLDu1MXpb4E.F8ndR4WOYTeJHb68RD/veEOt2TH0uYVZZnS79xC', NULL, NULL),
(3, 'fadliy', 'fadli@gmail.com', '$2y$12$vB5Y3eF8cCMrCHJq7YRyruZiAqlXp/jPWtBCSsH2Q.unZtl4XskPi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisis`
--

CREATE TABLE `visimisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten_visi` text NOT NULL,
  `konten_misi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visimisis`
--

INSERT INTO `visimisis` (`id`, `konten_visi`, `konten_misi`, `created_at`, `updated_at`) VALUES
(2, '<p>Menjadi lembaga pendidikan yang memiliki dedikasi untuk meningkatkan sumber daya manusia serta keterampilan individu setiap peserta didik agar dapat memenuhi kebutuhan masyarakat khususnya industri melalui pemagangan ke Jepang dan pengembangan bahasa asing</p>', '<ol>\r\n	<li>Melaksanakan program pendidikan khususnya bahasa asing secara terpadu, agar dapat meningkatkan sumber daya manusia</li>\r\n	<li>Memberikan pelatihan kepada para peserta didik dengan menanamkan prinsip jujur, bekerja keras, disiplin, dan bertaqwa agar menjadi pribadi yang unggul</li>\r\n</ol>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `count` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visitors`
--

INSERT INTO `visitors` (`id`, `tanggal`, `count`, `created_at`, `updated_at`) VALUES
(1, '2023-12-14', 13, '2023-12-14 01:08:26', '2023-12-14 09:08:30'),
(2, '2023-12-15', 98, '2023-12-14 19:24:37', '2023-12-15 01:43:34'),
(3, '2023-12-16', 3, '2023-12-15 21:29:46', '2023-12-15 21:33:15'),
(4, '2023-12-18', 12, '2023-12-17 19:03:22', '2023-12-18 07:18:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sambutans`
--
ALTER TABLE `sambutans`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `visimisis`
--
ALTER TABLE `visimisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sambutans`
--
ALTER TABLE `sambutans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visimisis`
--
ALTER TABLE `visimisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
