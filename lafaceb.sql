-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 07 juil. 2020 à 20:26
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lafaceb`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `title`, `artist`, `description`, `price`, `label`, `year`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Innerspeaker', 'Tame Impala', 'Premier album du groupe de Perth, guitares et claviers aériens! Le rock n\'est pas visiblement pas complètement mort.', '37$', 'Modular', '2011', 'images/innerspeaker.jpg', '2020-04-22 04:58:41', '2020-04-29 08:09:16'),
(2, 'Sea Change', 'Beck', 'Album gainsbourien de l\'artiste Californien qui ressuscite le Melody Nelson sur 12 pistes.', '35$', 'Geffen Records', '2002', 'images/sea_change.jpg', '2020-04-22 05:47:28', '2020-04-30 08:43:55'),
(3, 'Plastrer La Lune', 'Fred Fortin', 'Mieux que du bonbon, une vraie \'tite gum framboise et pomme, guitare schizophrénique allant du blues au rock énervé.', '32$', 'C4 Production', '2009', 'images/fortin_plastrer_lune.jpg', '2020-04-22 17:07:01', '2020-04-23 04:32:26'),
(4, 'Chinese Fountain', 'The Growlers', 'Hippies is not dead, Chinese Fountain nous plonge dans un univers jarmuschien, dernier album avant séparation du band, le batteur, Scott Montoya et le bassiste, Anthony Braun Perry prennent le bord avant la signature avec la signature sur le label du leader des Strokes.', '30$', 'Everloving Records', '2014', 'images/chinese_fountain.jpg', '2020-04-22 17:39:55', '2020-04-23 04:31:49'),
(5, 'Sometimes I Sit And Think', 'Courtney Barnett', 'Premier album studio de l\'artiste australienne, easy listening! Easy, easy.', '30$', 'Milk! Records', '2015', 'images/sometimes_i_sit_and_think.jpg', '2020-04-23 05:16:06', '2020-04-29 07:42:18'),
(6, 'Tss Tss', 'Chocolat', 'Premier album du groupe de Perth, guitares et claviers aériens! Le rock n\'est pas visiblement pas complètement mort.', '37$', 'La Grosse Boîte', '2014', 'images/tss_tss.jpg', '2020-04-23 05:21:49', '2020-04-23 05:21:49'),
(7, 'Jazz Engagé', 'Chocolat', 'Premier album du groupe de Perth, guitares et claviers aériens! Le rock n\'est pas visiblement pas complètement mort.', '32$', 'La Grosse Boîte', '2019', 'images/jazz_engage.jpg', '2020-04-23 05:23:37', '2020-04-23 05:23:37'),
(8, 'B\'lieve I\'m Goin Down', 'Kurt Vile', 'Premier album du groupe de Perth, guitares et claviers aériens! Le rock n\'est pas visiblement pas complètement mort.', '30$', 'Matador', '2015', 'images/b_lieve_im_goin_down.jpg', '2020-04-23 05:24:33', '2020-04-23 05:24:33'),
(9, 'Washing Machine', 'Sonic Youth', 'Premier album du groupe de Perth, guitares et claviers aériens! Le rock n\'est pas visiblement pas complètement mort.', '40$', 'Geffen Records', '1995', 'images/washing_machine.jpg', '2020-04-23 05:24:54', '2020-04-23 05:24:54'),
(10, 'Brutalism', 'Idles', 'Premier opus du groupe punk originaire de Bristol, le punk se refait une jeunesse!', '35$', 'Balley', '2017', 'images/brutalism.jpg', '2020-04-28 06:13:36', '2020-04-28 06:42:38'),
(17, 'Joy As A Act Of Resistance', 'Idles', 'Deuxième opus du groupe punk originaire de Bristol, le punk se refait une jeunesse!', '40$', 'Partisan', '2018', 'images/joy_as_a_act_of_resistance.jpg', '2020-04-29 01:21:31', '2020-04-29 01:27:02'),
(19, 'The Neon Skyline', 'Andy Shauf', 'Deuxième album du canadien originaire d\'Alberta.', '35$', 'ANTI- Records', '2020', 'images/the-neon-skyline.jpg', '2020-04-29 08:36:26', '2020-04-29 08:36:26'),
(20, 'Man Alive!', 'King Krule', 'Man Alive! est le quatrième album studio du chanteur et compositeur Archy Marshall, et son troisième sous le nom de scène King Krule. L\'album est paru le 21 février dernier (2020), sous la collaboration de trois labels différents et non des moindres Matador, True Panther Sounds et XL Recordings.', '37$', 'Matador Records', '2020', 'images/man-alive.jpg', '2020-04-29 18:37:06', '2020-04-29 18:37:06'),
(21, 'Lotta Sea Lice', 'Courtney Barnett/Kurt Vile', 'Cet album n\'est pas sorti en 2020 mais pour les besoins de la cause...', '40$', 'Matador Records', '2020', 'images/lotta-sea-lice.jpg', '2020-04-29 18:47:33', '2020-04-29 18:47:33'),
(22, 'Natural Affair', 'The Growlers', 'Retour à une production maison pour le groupe californien après avoir confié leur dernier album (City Club) à Julian Casablancas, ce dernier a indéniablement laissé une trace.', '30$', 'Beach Goth Records and Tapes', '2020', 'images/natural-affair.jpg', '2020-04-29 18:54:50', '2020-04-29 18:54:50'),
(23, '4', 'Dungen', 'Sortie sous le label Subliminal Sounds dans leur pays d\'origine, la Suède), et sous le label Kemado Records chez nous, cet album à influencé de nombreux groupes contemporains.', '48$', 'Kemado Records (USA)', '2008', 'images/4.jpg', '2020-04-29 19:04:13', '2020-04-29 19:04:13');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_21_194450_create_items_table', 1),
(4, '2020_04_22_031530_add_columns_items', 2),
(5, '2020_04_22_224315_remove_columns_items', 3),
(6, '2020_04_22_225050_remove_column_table', 4),
(7, '2020_04_22_225915_add_column_items', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$paDk72dB8si1WO6dA5wRcuoxuLknyyIUZcnMiIjsxpeqN9qdnEqY2', NULL, '2020-05-01 19:01:40', '2020-05-01 19:01:40');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
