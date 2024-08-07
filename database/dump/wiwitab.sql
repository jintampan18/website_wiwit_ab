-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Okt 2023 pada 03.49
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
-- Database: `wiwitab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` longtext DEFAULT NULL,
  `content` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `published_date` date NOT NULL,
  `view_count` int(11) DEFAULT 0,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `blog_category_id`, `title`, `thumbnail`, `content`, `author`, `published_date`, `view_count`, `slug`, `created_at`, `updated_at`) VALUES
(12, 1, 'Expedita autem mollitia impedit omnis culpa.', NULL, 'Sit consequatur perferendis voluptatem blanditiis. Numquam aperiam quibusdam doloremque perferendis ratione. Dignissimos quo praesentium corporis soluta nam in beatae.', 'Loyal Johnson', '2009-10-13', 42, 'ipsum-similique-reprehenderit-ex-eveniet', '2023-10-09 23:52:14', '2023-10-10 00:52:59'),
(13, 6, 'Ab odit minima asperiores optio aliquid ut.', NULL, 'Ipsum omnis eligendi eveniet non vitae. Dicta quaerat excepturi sunt temporibus ipsam debitis. Beatae natus maxime voluptates sed temporibus consectetur quia. Velit itaque velit illo autem reprehenderit voluptatem iste dolor.', 'Ethel Sporer', '2000-07-19', 25, 'temporibus-quod-et-voluptatem-doloremque', '2023-10-09 23:52:14', '2023-10-10 00:55:10'),
(14, 7, 'Eos adipisci ut laborum.', NULL, 'Animi quia vitae omnis rerum mollitia nam. Ea ut accusamus quas omnis laborum explicabo omnis. Recusandae quo sit necessitatibus.', 'Franz Pollich', '2015-03-08', 49, 'non-maiores-consequatur-itaque-laboriosam-quis-ea', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(15, 1, 'Modi distinctio dolores dolore quia ullam non.', NULL, 'Natus ducimus ut sed enim et. Vero maxime dolor doloremque. Eius eos omnis quis ut quia sint.', 'Rolando Kemmer', '1977-01-02', 78, 'ipsum-autem-ipsam-quis-amet', '2023-10-09 23:52:14', '2023-10-10 19:48:03'),
(16, 3, 'Velit voluptate doloremque harum doloribus aperiam qui suscipit.', NULL, 'Nostrum incidunt qui et voluptatibus incidunt. Voluptatem modi dolores voluptas molestiae. Perspiciatis illo provident enim corporis natus doloribus.', 'Ms. Leatha Conroy I', '1990-07-11', 38, 'quasi-quo-ad-nemo-dolorem-nam-sed-odio', '2023-10-09 23:52:14', '2023-10-10 19:09:14'),
(17, 5, 'Quia inventore dignissimos ut et quidem voluptatibus nobis.', NULL, 'Ut inventore deleniti error voluptas. Fuga iure molestiae est et quas. Ut impedit enim incidunt.', 'Reuben Willms', '1992-12-30', 6, 'occaecati-qui-ullam-neque', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(18, 4, 'Ipsam beatae quo dolorum vel nemo est voluptatum voluptas.', NULL, 'Aliquid ut aut aut temporibus dolor. Placeat voluptatibus dolorem ea sequi ut. Et nulla reiciendis molestias temporibus. Reprehenderit veniam sit deleniti ea velit nihil.', 'Dr. Maxwell Walker', '1993-06-17', 73, 'ut-tempora-consequatur-labore-sit-magni-asperiores-ex-mollitia', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(19, 1, 'Ad dolorum tempora quaerat consequatur nobis sequi.', NULL, 'Illum quasi molestiae voluptate inventore facere. Sunt repudiandae debitis est quasi. Nobis asperiores dolor facilis. Sunt qui iure est et commodi distinctio modi.', 'Prof. Van Bergstrom MD', '2016-09-26', 40, 'totam-et-perspiciatis-vitae-reprehenderit-facere-quo-quo', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(20, 1, 'Sunt consequatur sed ut omnis.', NULL, 'Dolor a quia pariatur sapiente. Et qui ratione nam quos aliquid. Ex sed odit culpa cumque incidunt aspernatur. Tempore sed velit qui veritatis iusto et.', 'Jimmy Kozey', '2007-12-31', 21, 'nihil-molestiae-quibusdam-id-aut-voluptatem-nobis', '2023-10-09 23:52:14', '2023-10-10 00:57:17'),
(21, 6, 'Tempora dolorum autem aliquid dolor ut.', NULL, 'Minima est corporis repellat et ratione iste perspiciatis. Quibusdam maxime saepe veniam omnis praesentium et. Eligendi omnis magnam quos et.', 'Bailee DuBuque', '2015-01-31', 90, 'accusantium-accusamus-eum-voluptatem-ea-ut', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(22, 1, 'Id exercitationem id id voluptate voluptates velit inventore.', NULL, 'Deserunt fugit laudantium cumque est quas recusandae. Cum magni expedita eos ipsa a quidem. Deleniti odio mollitia dolor hic. Facilis beatae doloremque et culpa.', 'Miss Hertha Daniel', '2000-12-16', 9, 'inventore-nemo-officiis-autem-incidunt', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(23, 1, 'Recusandae similique voluptatum qui sunt voluptate expedita.', NULL, 'Nostrum eaque et et culpa est quia atque. Fugiat eum doloribus earum cumque veniam. Vel assumenda et vitae harum error.', 'Miss Rosella Gottlieb', '1991-05-23', 0, 'odit-non-quisquam-atque-voluptas-iste-ipsa-quae', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(24, 1, 'Labore sed a voluptatem voluptatem ex perspiciatis sapiente ut.', NULL, 'Veniam suscipit expedita nobis dolorem minus esse. Ipsum id quidem incidunt qui ad saepe. Quae temporibus ut temporibus quaerat.', 'Dr. Maverick Smith MD', '1972-08-17', 95, 'ut-quos-vero-error-a-quod-animi-repellat', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(25, 3, 'Consectetur ad ipsum aut eaque distinctio ipsum.', NULL, 'Quam quos quo unde. Explicabo dolore repellendus quasi molestias at velit.', 'Carolanne Kulas', '1970-06-04', 13, 'consequatur-iusto-magnam-adipisci-quis-consequatur-laboriosam-fuga-ducimus', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(26, 2, 'Eius quae atque provident reprehenderit omnis ea.', NULL, 'Qui non architecto illo ipsum laboriosam et nulla. Rem sit quis laborum voluptas ea in eum quos. Ullam maiores debitis voluptate in ducimus.', 'Joanny Dickens', '2003-08-20', 32, 'perferendis-est-ut-voluptatem', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(27, 5, 'Qui voluptate quaerat tempore architecto dolores.', NULL, 'Harum quia voluptas molestias totam. Maxime aliquid eum recusandae nisi sed atque necessitatibus. Fugit blanditiis voluptatem minus harum occaecati.', 'Brooklyn Larkin', '2016-01-22', 23, 'repudiandae-esse-dolore-qui-ut-eaque-dolor-nobis-necessitatibus', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(28, 1, 'Nihil ad eligendi fugit fugit consequatur iste.', NULL, 'Et esse minus maiores delectus maxime ullam corrupti consequatur. Commodi eveniet maiores dolores dolor voluptatibus. Eum non explicabo at enim ducimus at. Autem est nemo sequi modi.', 'Felix Reichel', '1984-01-02', 72, 'unde-aperiam-voluptas-maiores', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(29, 2, 'Similique laudantium sint voluptate delectus.', NULL, 'Earum ea quaerat animi iusto accusamus. Voluptas voluptas ipsa quos corporis qui qui voluptatem. Commodi quia dolores laudantium accusantium vero rerum. Alias ipsam quisquam blanditiis quidem consectetur blanditiis.', 'Serenity Kessler', '1988-03-16', 34, 'a-eius-impedit-at-et-suscipit-ea', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(30, 3, 'Perspiciatis sint eveniet et corporis.', NULL, 'Laudantium ut velit voluptatem. Incidunt blanditiis dicta eveniet recusandae veritatis. Et magni et ullam facilis sunt. Quis laudantium est voluptas doloribus.', 'Darryl Borer Jr.', '1997-01-20', 54, 'ut-dolore-et-vitae-ab-voluptas-ut', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(31, 7, 'Voluptas et quas odit non.', NULL, 'Vel natus voluptas consequuntur nemo officiis odit ab. Et autem autem velit nihil ut. Libero quae sunt dolore molestiae ea assumenda.', 'Prof. Amya Stokes I', '2018-07-29', 63, 'culpa-et-qui-nisi-quo-repellendus', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(32, 1, 'Accusamus libero natus consequatur nihil sunt.', NULL, 'Cumque voluptatem non aut omnis beatae dolores. Quos vitae enim ea voluptatibus repellendus consequatur et. Corrupti ad et mollitia voluptatem.', 'Casper Vandervort', '2004-06-24', 50, 'nisi-aspernatur-quas-iure-et', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(33, 7, 'Saepe ut earum rerum molestiae quia.', NULL, 'Exercitationem ut ea expedita. Ipsam sunt nihil accusantium. Occaecati laborum cumque fugiat est. Distinctio nam reiciendis a exercitationem at molestiae tenetur. Libero in suscipit ab.', 'Abbigail Kozey', '2016-05-01', 25, 'fuga-rerum-aut-quo-alias-voluptas-ut-dolor', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(34, 5, 'Explicabo officiis ut consequatur voluptatem.', NULL, 'Eos fuga magnam eaque et consectetur voluptatem. Sit nulla eos placeat eum fugit. Quod et quis neque sed voluptas et eius non.', 'Lindsay Muller', '1997-11-24', 50, 'in-soluta-est-voluptas-velit-unde-et-illum-autem', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(35, 5, 'Commodi ab totam quidem beatae consequuntur dolorem et assumenda.', NULL, 'Ipsam ipsam cum aut et ducimus. Optio quaerat excepturi eos assumenda aut magni. Enim et nemo illum debitis velit qui. Harum ipsam qui necessitatibus quo quibusdam libero.', 'Ms. Jailyn Ruecker', '2011-04-08', 9, 'unde-ea-harum-omnis-libero', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(36, 2, 'Consequatur quaerat ut cumque sed.', NULL, 'Molestias vel molestiae nihil cupiditate quibusdam rem. Occaecati odit doloribus itaque. Omnis ipsa consectetur ducimus culpa quia voluptatibus.', 'Clyde Waelchi', '2019-02-07', 97, 'voluptatem-minus-dolores-est-fugit-ullam-ullam', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(37, 3, 'Culpa magni omnis expedita sed quia.', NULL, 'Nihil velit numquam et dolor doloremque ab minima laudantium. Itaque voluptatem provident quis non. Ut repudiandae non cupiditate autem dolor. Atque accusamus earum natus fugit ratione iste non.', 'Liana Feil', '2019-02-09', 16, 'optio-deserunt-nesciunt-officia', '2023-10-09 23:52:14', '2023-10-10 19:20:21'),
(38, 3, 'Rem dolores ea nam esse enim.', NULL, 'Qui ipsam quia qui ut. Consequatur assumenda at mollitia possimus. Perspiciatis doloremque officiis deleniti eos non nihil velit.', 'Miss Belle Bogan DDS', '1995-08-30', 37, 'ut-quis-quo-consequatur-eos', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(39, 2, 'Et voluptatem soluta sit consequatur assumenda dolor blanditiis.', NULL, 'Labore est est sed. Quis placeat quam error. Reiciendis aut id dolores quae assumenda quam qui sed. Hic quibusdam repellendus modi nulla.', 'Hilma Goyette', '2009-10-27', 68, 'deserunt-et-enim-adipisci', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(40, 4, 'Molestias explicabo facilis magnam architecto quos deleniti.', NULL, 'Dignissimos impedit et cumque porro. Libero deserunt non dolores molestias.', 'Prof. Casimer Haag', '1998-11-01', 32, 'sed-odit-voluptatum-aperiam-voluptatibus-cum-laudantium', '2023-10-09 23:52:14', '2023-10-09 23:52:14'),
(41, 4, 'Rerum enim ducimus commodi amet.', NULL, 'Recusandae velit libero quibusdam et eaque omnis aut et. Aut iure dolore impedit autem aut aut doloribus. Magnam ipsam minima cum eos eum. Et consequatur quo sint qui voluptas amet molestiae.', 'Desiree Bogan', '2012-12-25', 100, 'quis-aut-labore-in-et', '2023-10-09 23:52:14', '2023-10-09 23:52:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Politik', '2023-10-09 21:20:44', '2023-10-09 21:20:56'),
(2, 'Technology', '2023-10-09 21:21:43', '2023-10-09 21:22:07'),
(3, 'Training', '2023-10-09 21:21:51', '2023-10-09 21:22:12'),
(4, 'Certification', '2023-10-09 21:21:59', '2023-10-09 21:21:59'),
(5, 'Culture', '2023-10-09 21:22:41', '2023-10-09 21:22:41'),
(6, 'General', '2023-10-09 21:23:01', '2023-10-09 21:23:01'),
(7, 'Marketing', '2023-10-09 21:23:12', '2023-10-09 21:23:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `consultation_request`
--

CREATE TABLE `consultation_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consultation_request_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `consultation_request_category`
--

CREATE TABLE `consultation_request_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_page_setting`
--

CREATE TABLE `contact_page_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `personal_email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `office_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contact_page_setting`
--

INSERT INTO `contact_page_setting` (`id`, `address`, `working_hours`, `created_at`, `updated_at`, `personal_email`, `contact_number`, `office_email`) VALUES
(1, 'Pogung Kidul, Sinduadi, Kec. Mlati', 'Monday-Friday: 08:00 AM - 04:00 PM', NULL, '2023-10-10 19:32:46', 'wiwitpruamazing@gmail.com', '6281515144981', 'itmcnazma@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_category`
--

CREATE TABLE `event_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event_category`
--

INSERT INTO `event_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'Training', '2023-10-09 19:23:21', '2023-10-09 19:23:21'),
(6, 'Seminar', '2023-10-09 19:23:25', '2023-10-09 19:23:25'),
(7, 'Certification', '2023-10-09 19:23:32', '2023-10-09 19:23:32'),
(8, 'Coaching', '2023-10-09 19:23:42', '2023-10-09 19:23:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` longtext NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Struktur dari tabel `material`
--

CREATE TABLE `material` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `material_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` longtext DEFAULT NULL,
  `file` longtext DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `download_count` int(11) NOT NULL,
  `published_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `material`
--

INSERT INTO `material` (`id`, `material_category_id`, `title`, `thumbnail`, `file`, `author`, `download_count`, `published_date`, `created_at`, `updated_at`) VALUES
(3, 3, 'Dr.', NULL, '652778282bad3.pdf', 'Mrs. Lelia Wisoky DDS', 918, '1973-06-06', '2023-10-11 18:54:08', '2023-10-11 21:38:13'),
(4, 3, 'Ms.', NULL, NULL, 'Prof. Alfredo Jacobi DVM', 817, '1999-04-15', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(5, 3, 'Mrs.', NULL, NULL, 'Abraham Funk', 369, '2008-05-05', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(6, 3, 'Prof.', NULL, NULL, 'Tyrell Beahan', 415, '1970-12-13', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(7, 2, 'Mrs.', NULL, NULL, 'Leann Witting IV', 91, '2013-04-04', '2023-10-11 18:54:08', '2023-10-11 21:32:36'),
(8, 2, 'Prof.', NULL, NULL, 'Jakayla Will', 509, '2007-10-14', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(9, 3, 'Dr.', NULL, NULL, 'Graham Predovic DVM', 560, '1987-08-08', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(10, 2, 'Prof.', NULL, NULL, 'Ms. Candace Monahan PhD', 197, '1984-06-26', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(11, 2, 'Mrs.', NULL, NULL, 'Henderson Schneider Jr.', 866, '2007-04-21', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(12, 3, 'Dr.', NULL, NULL, 'Dorcas Jakubowski', 739, '2011-07-06', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(13, 2, 'Prof.', NULL, NULL, 'Miss Betty Shanahan Sr.', 627, '1971-01-06', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(14, 2, 'Dr.', NULL, NULL, 'Dallas Zulauf', 848, '1987-02-14', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(15, 3, 'Prof.', NULL, NULL, 'Dejuan Barrows', 409, '2021-06-03', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(16, 3, 'Prof.', NULL, NULL, 'Norbert Murazik', 966, '2015-07-20', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(17, 3, 'Prof.', NULL, NULL, 'Verla Schulist', 811, '1974-07-06', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(18, 2, 'Dr.', NULL, NULL, 'Orrin Luettgen', 600, '1989-07-30', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(19, 3, 'Mr.', NULL, NULL, 'Daren Feil DDS', 460, '1987-11-14', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(20, 2, 'Dr.', NULL, NULL, 'Lemuel Leffler', 271, '1991-03-19', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(21, 3, 'Ms.', NULL, NULL, 'Mr. Harry Kihn DVM', 383, '1996-03-31', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(22, 3, 'Mr.', NULL, NULL, 'Nathen Monahan', 254, '2013-10-02', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(23, 2, 'Mrs.', NULL, NULL, 'Robyn Larson', 277, '1976-10-18', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(24, 2, 'Prof.', NULL, NULL, 'Jaquan Armstrong DDS', 324, '2016-09-12', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(25, 2, 'Prof.', NULL, NULL, 'Lorna Ondricka', 140, '2006-08-05', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(26, 2, 'Dr.', NULL, NULL, 'Gail Hudson', 969, '2018-07-05', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(27, 2, 'Prof.', NULL, NULL, 'Miss Sonia Pagac MD', 680, '1972-09-26', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(28, 3, 'Dr.', NULL, NULL, 'Raymond Wilderman', 583, '2004-12-14', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(29, 3, 'Mr.', NULL, NULL, 'Dr. Olaf Oberbrunner', 90, '2013-09-01', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(30, 2, 'Ms.', NULL, NULL, 'Prof. Pierce Dickens Jr.', 476, '1970-05-06', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(31, 3, 'Mrs.', NULL, NULL, 'Grace O\'Kon DVM', 674, '2022-10-30', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(32, 2, 'Dr.', NULL, NULL, 'Wilfrid White', 972, '2000-05-31', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(33, 2, 'Dr.', NULL, NULL, 'Ms. Freeda Bins DDS', 699, '1977-12-30', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(34, 3, 'Miss', NULL, NULL, 'Prof. Friedrich Ernser', 301, '1977-01-25', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(35, 3, 'Mrs.', NULL, NULL, 'Miss Celia Rath I', 539, '1987-09-04', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(36, 2, 'Miss', NULL, NULL, 'Prof. Brody Stroman PhD', 116, '2002-11-25', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(37, 3, 'Miss', NULL, NULL, 'Dr. Trisha Durgan', 564, '2009-11-14', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(38, 2, 'Ms.', NULL, NULL, 'Darius Lind', 456, '1975-04-12', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(39, 3, 'Mr.', NULL, NULL, 'Tremayne Rutherford Jr.', 256, '1971-03-02', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(40, 2, 'Mr.', NULL, NULL, 'Wava Koch', 197, '1982-10-10', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(41, 2, 'Ms.', NULL, NULL, 'Miss Elva Marvin', 908, '2013-05-30', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(42, 2, 'Mr.', NULL, NULL, 'Dr. Alena Larkin MD', 61, '2015-06-30', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(43, 2, 'Prof.', NULL, NULL, 'Dr. Garry Welch DDS', 245, '2023-03-20', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(44, 2, 'Prof.', NULL, NULL, 'Damon Tromp', 513, '1970-06-03', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(45, 2, 'Mrs.', NULL, NULL, 'Rowan Stokes', 777, '1990-11-01', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(46, 2, 'Mr.', NULL, NULL, 'Ms. Jaqueline Conn', 41, '2019-04-04', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(47, 2, 'Mrs.', NULL, NULL, 'Jennyfer Ward Sr.', 209, '2017-05-05', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(48, 3, 'Miss', NULL, NULL, 'Prof. Frankie Von III', 537, '1983-12-28', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(49, 2, 'Miss', NULL, NULL, 'Denis Hessel', 398, '1992-02-13', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(50, 3, 'Prof.', NULL, NULL, 'Marcellus Sawayn V', 302, '2013-07-20', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(51, 3, 'Mrs.', NULL, NULL, 'Tiffany Boyer', 874, '2013-08-22', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(52, 2, 'Mr.', NULL, NULL, 'Ahmad Marvin', 926, '1985-05-12', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(53, 2, 'Mr.', NULL, NULL, 'Phyllis Schowalter', 399, '1991-12-22', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(54, 3, 'Dr.', NULL, NULL, 'Mrs. Alba Roob', 440, '2011-05-15', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(55, 2, 'Prof.', NULL, NULL, 'Adolfo Senger', 77, '1990-04-19', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(56, 2, 'Prof.', NULL, NULL, 'Wilburn Kreiger', 675, '1992-05-28', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(57, 2, 'Ms.', NULL, NULL, 'Prof. Giovanni Hegmann V', 417, '2019-02-18', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(58, 2, 'Miss', NULL, NULL, 'Angel Kozey', 44, '1973-05-02', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(59, 2, 'Prof.', NULL, NULL, 'Margie Rice', 813, '1975-04-28', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(60, 2, 'Dr.', NULL, NULL, 'Prof. Winston Goodwin', 449, '1986-07-05', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(61, 3, 'Mrs.', NULL, NULL, 'Sophie Purdy', 460, '1982-10-09', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(62, 2, 'Ms.', NULL, NULL, 'Dr. Jan Berge', 370, '1999-07-29', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(63, 3, 'Mrs.', NULL, NULL, 'Demetris Balistreri', 763, '2020-06-02', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(64, 2, 'Mrs.', NULL, NULL, 'Eriberto Adams', 413, '2022-10-17', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(65, 3, 'Miss', NULL, NULL, 'Sonny Mann', 508, '1989-05-23', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(66, 2, 'Prof.', NULL, NULL, 'Landen Gorczany', 265, '2017-10-21', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(67, 2, 'Prof.', NULL, NULL, 'Bulah Boyle', 738, '2007-10-06', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(68, 2, 'Miss', NULL, NULL, 'Cade Reinger', 38, '2014-03-07', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(69, 3, 'Mr.', NULL, NULL, 'Mallory Brakus', 374, '2012-12-29', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(70, 2, 'Prof.', NULL, NULL, 'Marjory Lind', 700, '1998-09-18', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(71, 3, 'Dr.', NULL, NULL, 'Elda Zboncak', 422, '2013-08-27', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(72, 3, 'Prof.', NULL, NULL, 'Naomie Streich', 53, '1978-04-11', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(73, 3, 'Dr.', NULL, NULL, 'Zaria Durgan', 977, '1975-07-16', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(74, 2, 'Dr.', NULL, NULL, 'Marlin Rosenbaum III', 753, '1988-01-20', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(75, 3, 'Prof.', NULL, NULL, 'Heloise McLaughlin', 489, '1971-12-05', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(76, 3, 'Mr.', NULL, NULL, 'Ubaldo Hammes', 50, '1979-09-24', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(77, 3, 'Miss', NULL, NULL, 'Edna Weber II', 183, '2000-08-11', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(78, 3, 'Mr.', NULL, NULL, 'Germaine Tillman', 499, '2013-12-12', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(79, 3, 'Miss', NULL, NULL, 'Miss Fiona Deckow MD', 738, '2008-08-11', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(80, 3, 'Mr.', NULL, NULL, 'Mrs. Shaina D\'Amore I', 97, '1977-10-04', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(81, 3, 'Dr.', NULL, NULL, 'Josh Nitzsche', 564, '1988-02-15', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(82, 2, 'Dr.', NULL, NULL, 'Hilton Haley', 453, '1971-08-12', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(83, 2, 'Dr.', NULL, NULL, 'Dameon O\'Kon', 437, '2003-06-30', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(84, 2, 'Ms.', NULL, NULL, 'Prof. Eino Koepp Jr.', 167, '1981-05-20', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(85, 2, 'Mr.', NULL, NULL, 'Dr. Kale Schamberger', 269, '2016-09-08', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(86, 3, 'Mrs.', NULL, NULL, 'Prof. Marques Pfannerstill Jr.', 114, '1996-05-17', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(87, 3, 'Mr.', NULL, NULL, 'Prof. Gerhard Torp', 626, '1977-11-12', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(88, 3, 'Mr.', NULL, NULL, 'Lelia Goodwin', 487, '2012-07-03', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(89, 2, 'Dr.', NULL, NULL, 'Prof. Breana Breitenberg DDS', 579, '1977-06-03', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(90, 2, 'Mrs.', NULL, NULL, 'Rico Lindgren MD', 918, '2002-01-03', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(91, 3, 'Miss', NULL, NULL, 'Miss Jazmyn Emard II', 395, '2010-03-21', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(92, 3, 'Dr.', NULL, NULL, 'Layne Kozey', 254, '2006-05-09', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(93, 3, 'Prof.', NULL, NULL, 'Jennyfer McGlynn', 977, '2019-11-06', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(94, 2, 'Dr.', NULL, NULL, 'Citlalli McDermott DVM', 62, '2004-03-25', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(95, 2, 'Mrs.', NULL, NULL, 'Miss Carmen Boyer Jr.', 404, '1989-12-17', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(96, 3, 'Prof.', NULL, NULL, 'Devan Volkman', 485, '2012-09-30', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(97, 3, 'Dr.', NULL, NULL, 'Miss Jalyn Casper V', 752, '2018-02-14', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(98, 2, 'Mr.', NULL, NULL, 'Mr. Kiley Price', 608, '2015-03-18', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(99, 3, 'Prof.', NULL, NULL, 'Eva Stroman', 331, '2011-02-18', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(100, 3, 'Dr.', NULL, NULL, 'Russell Fay', 789, '2002-05-08', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(101, 3, 'Mrs.', NULL, NULL, 'Edgardo Lesch DDS', 812, '2010-04-14', '2023-10-11 18:54:08', '2023-10-11 18:54:08'),
(102, 3, 'Miss', NULL, NULL, 'Glenna Schultz Sr.', 500, '1990-02-20', '2023-10-11 18:54:08', '2023-10-11 18:54:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `material_category`
--

CREATE TABLE `material_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `material_category`
--

INSERT INTO `material_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'contoh', '2023-10-08 20:31:43', '2023-10-08 20:31:43'),
(3, 'E-Business', '2023-10-08 20:31:46', '2023-10-08 20:31:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_05_031601_create_social_media_table', 1),
(6, '2023_10_05_033553_create_experience_table', 1),
(7, '2023_10_05_033848_create_testimonial_table', 1),
(8, '2023_10_05_034009_create_partner_table', 1),
(9, '2023_10_05_034327_create_work_category_table', 1),
(10, '2023_10_05_034409_create_consultation_request_table', 1),
(11, '2023_10_05_034842_create_material_table', 1),
(12, '2023_10_05_035402_create_material_category_table', 1),
(13, '2023_10_05_035523_create_event_table', 1),
(14, '2023_10_05_040204_create_event_category_table', 1),
(15, '2023_10_05_040224_create_blog_table', 1),
(16, '2023_10_05_040632_create_blog_category_table', 1),
(17, '2023_10_05_040711_create_message_table', 1),
(18, '2023_10_05_040805_create_contact_page_setting_table', 1),
(19, '2023_10_05_041542_create_work_table', 1),
(20, '2023_10_05_041809_create_consultation_request_category_table', 1),
(21, '2023_10_05_042031_add_relation_consultation_request_category_and_consultation_request', 1),
(22, '2023_10_05_042316_add_relation_material_category_and_material', 1),
(23, '2023_10_05_042341_add_relation_event_category_and_event', 1),
(24, '2023_10_05_042416_add_relation_blog_category_and_blog', 1),
(25, '2023_10_10_064831_change_nullable_thumbnail_blog', 2),
(26, '2023_10_10_063142_add_emails_contact_page_setting_table', 3),
(27, '2023_10_11_020017_change_nullable_avatar_testimonial', 4),
(28, '2023_10_11_022616_add_contact_number_contact_page_setting', 5),
(29, '2023_10_12_015153_change_thumbnail_nullable_material', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` longtext NOT NULL,
  `url` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `testimonial` longtext NOT NULL,
  `avatar` longtext DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `testimonial`, `avatar`, `position`, `job`, `created_at`, `updated_at`) VALUES
(1, 'Imogene Erdman', 'Accusantium praesentium id sunt aut optio magni qui. Ipsum quae eius sunt excepturi quos qui.', NULL, 'Quae saepe.', 'Mine Cutting Machine Operator', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(2, 'Mr. Stuart Larson', 'Omnis fugit velit ex labore provident. Repellendus voluptatem deserunt quasi commodi quidem ut.', NULL, 'Aut.', 'Material Moving Worker', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(3, 'Kyra Johnson V', 'Consequatur accusamus sunt ratione sequi. Aut qui corporis autem et numquam quod adipisci.', NULL, 'Exercitationem soluta.', 'Financial Specialist', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(4, 'Michele D\'Amore III', 'Amet at adipisci sint ducimus corrupti.', NULL, 'Repellat.', 'Forester', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(5, 'Mr. Ulises Baumbach', 'Recusandae aliquam similique modi nemo distinctio qui. Perspiciatis blanditiis et repellendus aut neque temporibus qui.', NULL, 'Atque.', 'Engineer', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(6, 'Raul King', 'Quasi qui ipsa sit iure odit omnis rerum.', NULL, 'Eos harum.', 'Farmer', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(7, 'Mr. Destin Abernathy', 'Itaque et quia quae.', NULL, 'Dolor dolores.', 'CFO', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(8, 'Demarco Gottlieb', 'Ipsum qui pariatur est blanditiis. Dolor id totam beatae suscipit sunt ipsa debitis iusto.', NULL, 'Dicta exercitationem.', 'Semiconductor Processor', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(9, 'Bruce Mills I', 'Est rerum hic aut odio ut officiis.', NULL, 'Omnis.', 'Fabric Mender', '2023-10-10 19:05:13', '2023-10-10 19:05:13'),
(10, 'Blair Konopelski', 'Rerum et architecto et placeat cupiditate veniam vitae iste. Odio eius quasi quaerat dolor et voluptatem molestiae aut.', NULL, 'Porro exercitationem.', 'Crane and Tower Operator', '2023-10-10 19:05:13', '2023-10-10 19:05:13');

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
(1, 'Admin', 'admin@mail.com', NULL, '$2y$10$kYkXTxDRRMOSpfqEiJx6feyz/At6B0skUKudSy.6BmKX99w/iZiLi', NULL, '2023-10-10 18:51:25', '2023-10-10 18:51:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `photo` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_category`
--

CREATE TABLE `work_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_blog_category_id_foreign` (`blog_category_id`);

--
-- Indeks untuk tabel `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `consultation_request`
--
ALTER TABLE `consultation_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultation_request_consultation_request_category_id_foreign` (`consultation_request_category_id`);

--
-- Indeks untuk tabel `consultation_request_category`
--
ALTER TABLE `consultation_request_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact_page_setting`
--
ALTER TABLE `contact_page_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_event_category_id_foreign` (`event_category_id`);

--
-- Indeks untuk tabel `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_material_category_id_foreign` (`material_category_id`);

--
-- Indeks untuk tabel `material_category`
--
ALTER TABLE `material_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
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
-- Indeks untuk tabel `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_work_category_id_foreign` (`work_category_id`);

--
-- Indeks untuk tabel `work_category`
--
ALTER TABLE `work_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `consultation_request`
--
ALTER TABLE `consultation_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `consultation_request_category`
--
ALTER TABLE `consultation_request_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact_page_setting`
--
ALTER TABLE `contact_page_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event_category`
--
ALTER TABLE `event_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `material`
--
ALTER TABLE `material`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `material_category`
--
ALTER TABLE `material_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `work`
--
ALTER TABLE `work`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `work_category`
--
ALTER TABLE `work_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `consultation_request`
--
ALTER TABLE `consultation_request`
  ADD CONSTRAINT `consultation_request_consultation_request_category_id_foreign` FOREIGN KEY (`consultation_request_category_id`) REFERENCES `consultation_request_category` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_event_category_id_foreign` FOREIGN KEY (`event_category_id`) REFERENCES `event_category` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_material_category_id_foreign` FOREIGN KEY (`material_category_id`) REFERENCES `material_category` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_work_category_id_foreign` FOREIGN KEY (`work_category_id`) REFERENCES `work_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
