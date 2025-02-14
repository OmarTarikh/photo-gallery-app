-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2025 pada 03.03
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
-- Database: `db_galeri_foto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `albums`
--

CREATE TABLE `albums` (
  `AlbumID` bigint(20) UNSIGNED NOT NULL,
  `NamaAlbum` varchar(255) NOT NULL,
  `Deskripsi` text DEFAULT NULL,
  `TanggalDibuat` date NOT NULL,
  `TotalFoto` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `albums`
--

INSERT INTO `albums` (`AlbumID`, `NamaAlbum`, `Deskripsi`, `TanggalDibuat`, `TotalFoto`, `created_at`, `updated_at`) VALUES
(10, 'Japanese Manga', 'Images of japanese manga covers', '2025-01-23', 7, '2025-01-22 18:24:55', '2025-01-22 18:24:55'),
(11, 'Desktop Walpapers', 'Images of desktop walpapers', '2025-01-23', 1, '2025-01-22 18:28:26', '2025-01-22 18:37:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id_komentar` bigint(20) UNSIGNED NOT NULL,
  `id_foto` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id_komentar`, `id_foto`, `id_user`, `isi`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 33, 1, 'test', '2025-02-02 07:26:17', '2025-02-02 07:26:17', '2025-02-02 07:26:17'),
(2, 33, 1, 'test 2', '2025-02-02 07:32:15', '2025-02-02 07:32:15', '2025-02-02 07:32:15'),
(3, 33, 1, 'test 3', '2025-02-02 07:32:25', '2025-02-02 07:32:25', '2025-02-02 07:32:25');

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
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `FotoID` bigint(20) UNSIGNED NOT NULL,
  `JudulFoto` varchar(255) NOT NULL,
  `DeskripsiFoto` text NOT NULL,
  `TanggalUnggah` date NOT NULL,
  `LokasiFile` varchar(255) NOT NULL,
  `AlbumID` bigint(20) UNSIGNED DEFAULT NULL,
  `UserID` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`FotoID`, `JudulFoto`, `DeskripsiFoto`, `TanggalUnggah`, `LokasiFile`, `AlbumID`, `UserID`, `created_at`, `updated_at`) VALUES
(29, 'My Hero Academia Vol. 25 Cover Image', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'pT2qfwH2ty14OlImmwMqsmn3tppPeaboMxq7DBmw.jpg', 10, NULL, '2025-01-22 18:26:12', '2025-01-22 18:26:12'),
(30, 'Bleach Vol. 24 Cover Image', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'lFsel66Lz6L3LQDecl5wvh6H3fCf2j6UlnjWwqOV.jpg', 10, NULL, '2025-01-22 18:27:48', '2025-01-22 18:27:48'),
(31, 'Naruto Shipuden Wallpaper', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'tzxzM4LctvOF3EizkilRTbAMrVoy5iAtpVdMjSJV.jpg', 11, NULL, '2025-01-22 18:29:32', '2025-01-22 18:29:32'),
(32, 'Tokyo Ghoul Cover Image Vol. 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'jW3gdgysCn3y8UC6QpoMxDStQ9FnusIAhOU6oZ9W.jpg', 10, NULL, '2025-01-22 19:03:31', '2025-01-22 19:03:31'),
(33, 'Blue Lock Vol. 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'e2G52byYRRj1Lc7dDqqVPs2Y4SD5X1cxuGD9rsaJ.jpg', 10, NULL, '2025-01-22 19:04:07', '2025-01-22 19:04:07'),
(35, 'Attack On Titan Vol. 30 Cover Image', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'I9O0r5Jpr13ytlDYeo3LmEgHWZgpqficJI5BL1As.jpg', 10, NULL, NULL, NULL),
(36, 'Jujutsu Kaisen Vol. 11 Cover Image', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'sySbStTP7wM0lyxzdpmxYIZO93q1FZcXKf6uT6CG.jpg', 10, NULL, NULL, NULL),
(37, 'Haikyuu Vol. 12 Cover Image', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2025-01-23', 'G5kwToVGY5zmqu4wGB0xC6niKw4m0zLkiF7JNxBi.jpg', 10, NULL, NULL, NULL);

--
-- Trigger `galeris`
--
DELIMITER $$
CREATE TRIGGER `after_delete_galeri` AFTER DELETE ON `galeris` FOR EACH ROW BEGIN
    IF OLD.AlbumID IS NOT NULL THEN
        UPDATE albums
        SET TotalFoto = TotalFoto - 1
        WHERE AlbumID = OLD.AlbumID AND TotalFoto > 0;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_galeri` AFTER INSERT ON `galeris` FOR EACH ROW BEGIN
    IF NEW.AlbumID IS NOT NULL THEN
        UPDATE albums
        SET TotalFoto = TotalFoto + 1
        WHERE AlbumID = NEW.AlbumID;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_galeri` AFTER UPDATE ON `galeris` FOR EACH ROW BEGIN
    -- Decrement TotalFoto in the old album
    IF OLD.AlbumID IS NOT NULL AND OLD.AlbumID != NEW.AlbumID THEN
        UPDATE albums
        SET TotalFoto = TotalFoto - 1
        WHERE AlbumID = OLD.AlbumID AND TotalFoto > 0;
    END IF;

    -- Increment TotalFoto in the new album
    IF NEW.AlbumID IS NOT NULL AND OLD.AlbumID != NEW.AlbumID THEN
        UPDATE albums
        SET TotalFoto = TotalFoto + 1
        WHERE AlbumID = NEW.AlbumID;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `id_like` bigint(20) UNSIGNED NOT NULL,
  `id_foto` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tanggal_like` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `likes`
--

INSERT INTO `likes` (`id_like`, `id_foto`, `id_user`, `tanggal_like`, `created_at`, `updated_at`) VALUES
(1, 33, 1, '2025-02-02 07:25:23', '2025-02-02 07:25:23', '2025-02-02 07:25:23'),
(2, 32, 1, '2025-02-02 07:25:52', '2025-02-02 07:25:52', '2025-02-02 07:25:52');

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
(5, '2025_01_13_043820_create_galeris_table', 1),
(6, '2025_01_20_040250_create_albums_table', 2),
(9, '2025_01_24_045408_create_likes_table', 3),
(10, '2025_01_24_045419_create_comments_table', 3);

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
(1, 'Omar Tarikh', 'aleser187@gmail.com', NULL, '$2y$12$xdT0.VOrz0nbdgOxDWnZgetpnom3r0TSfYHfQbBsl74u6eFFcU5QW', 'SNp04yEW1JxTMdGjAngjmeA9TqvrZN2a9Ck7zjlyafGlRbFDrGU1IsKetgRz', '2025-01-22 21:10:07', '2025-01-22 21:10:07'),
(2, 'Zahrima', 'ima1138@gmail.com', NULL, '$2y$12$9UXSJ12Q.5RzNmM.OpgXc.7sivjMXndOdL2llQNUDUrvC38SmX/2K', 'kVsnHuzTKSLMChKRdHekqTUKBuD8Laj2mCCwAu9p15QcSORY08C08jwWbqVo', '2025-01-22 21:45:51', '2025-01-22 21:45:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`AlbumID`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `comments_id_foto_foreign` (`id_foto`),
  ADD KEY `comments_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`FotoID`),
  ADD KEY `fk_album` (`AlbumID`);

--
-- Indeks untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `likes_id_foto_foreign` (`id_foto`),
  ADD KEY `likes_id_user_foreign` (`id_user`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `albums`
--
ALTER TABLE `albums`
  MODIFY `AlbumID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id_komentar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `FotoID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_id_foto_foreign` FOREIGN KEY (`id_foto`) REFERENCES `galeris` (`FotoID`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD CONSTRAINT `fk_album` FOREIGN KEY (`AlbumID`) REFERENCES `albums` (`AlbumID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_id_foto_foreign` FOREIGN KEY (`id_foto`) REFERENCES `galeris` (`FotoID`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
