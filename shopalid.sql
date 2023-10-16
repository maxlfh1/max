-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 12 août 2023 à 22:00
-- Version du serveur : 10.11.4-MariaDB-1
-- Version de PHP : 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shopalid`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_08_082619_create_products_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `subtitle`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Facilis provident tempora.', 'est-nam-numquam-veritatis-sit', 'Aliquam dolores facere ad suscipit.', 'Voluptatibus sit est ex a culpa asperiores et itaque. Ab quo mollitia enim molestiae voluptate earum. Atque rerum sed dolorem ea amet aut labore. Dolorum provident et et delectus cupiditate voluptatem in.', 27894, 'category1.jpg', '2023-08-12 12:22:35', '2023-08-12 12:22:35'),
(2, 'Culpa eveniet eligendi natus.', 'tempora-dolorum-corporis-sed-eum-nobis-maiores-consequatur', 'Praesentium qui et laudantium velit est et quidem.', 'Officiis sit et eum ut excepturi et sunt. Deserunt blanditiis cum eligendi. Molestiae et temporibus aut voluptas laudantium.', 31079, 'category7.jpg', '2023-08-12 12:22:35', '2023-08-12 12:22:35'),
(3, 'Explicabo rem tenetur temporibus.', 'esse-quis-beatae-et-illo-nisi', 'Non eum maxime maxime consequatur velit quod dolor.', 'Neque vitae voluptates omnis autem placeat sit. Amet minus dolor at est magnam voluptas voluptatum in. Doloribus hic fugiat quasi consequuntur. Voluptatum qui dolores labore mollitia repellendus dignissimos id.', 39261, 'picts1.jpg', '2023-08-12 12:22:35', '2023-08-12 12:22:35'),
(4, 'Et quas laudantium harum.', 'molestiae-explicabo-et-ut-qui-consequatur-numquam-quo-aut', 'Sapiente voluptatum et est est et occaecati amet iure odio.', 'Dolorem illo non mollitia nostrum. Quod aliquam quisquam sed doloremque. Molestiae iste qui in et magnam.', 74505, 'picts1b.jpg', '2023-08-12 12:22:35', '2023-08-12 12:22:35'),
(5, 'Aut iste hic dolorem.', 'harum-aliquid-facere-in-sed-at-aliquid-repellat-quia', 'Ut enim quam rerum voluptas.', 'Molestiae ex nesciunt maxime ex magnam quae. Unde et dolores soluta consequatur velit. Aut ut deleniti est id.', 69333, 'picts2.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(6, 'Beatae explicabo.', 'et-quam-nam-sint-aut-enim-quas', 'Nesciunt incidunt sed ut ipsa ut.', 'Non quasi porro dolores eum esse repellat et quia. Repellendus dignissimos ratione culpa debitis. Assumenda qui aliquid perspiciatis possimus repellat officiis. Aut corrupti et error ipsa.', 77380, 'picts3.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(7, 'Molestiae velit veritatis.', 'non-sunt-dignissimos-est-in-ab-vero', 'Reiciendis culpa laborum et harum.', 'Officiis et dolorum consequatur quia. Hic cumque voluptatum nisi sapiente voluptatum aliquam. Ea alias sint sint repudiandae.', 19403, 'picts4.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(8, 'Asperiores enim sit et.', 'et-praesentium-molestiae-aliquid-perspiciatis-quo-nisi', 'Dolorem sed animi distinctio qui.', 'Quo repudiandae voluptate minima repellendus tempore et autem. Odio tempora ut omnis voluptas dignissimos cumque. Dolor itaque delectus quasi dignissimos perferendis. Ut itaque illo voluptatem eos.', 43428, 'picts5.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(9, 'Maxime voluptates qui.', 'eius-provident-aperiam-ut-et-tempora-aut-odio-voluptas', 'Cumque omnis nobis dolore hic qui incidunt eos.', 'Culpa modi dolorem expedita quas. Velit soluta voluptatibus earum tempore nostrum pariatur laudantium a. Voluptas corporis et omnis.', 81306, 'picts5b.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(10, 'Rerum recusandae est voluptatem.', 'rerum-in-ut-nisi-quasi', 'Ipsum sapiente autem autem officia quasi.', 'In voluptatibus ipsam sunt vel a deleniti mollitia temporibus. Voluptas molestias ea et voluptatem. Consequatur praesentium quo non consequatur est animi molestiae qui.', 28970, 'picts5c.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(11, 'Sint atque aliquam sed.', 'omnis-illo-commodi-voluptatum-error-id', 'Quae nemo id natus dolor blanditiis maxime animi.', 'Reiciendis maiores est sapiente et. Eum neque neque exercitationem dolor voluptatem. Explicabo voluptatum officia quia repellendus dolor.', 95814, 'picts6.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(12, 'Quas vero asperiores.', 'explicabo-repellat-praesentium-consequatur-nisi-nesciunt-magni-doloremque-aut', 'Qui necessitatibus facere id vel et quibusdam.', 'Rerum nobis sequi optio maiores. Eligendi est sed quos et aut. Temporibus qui non optio sapiente velit iste. Et dolores amet veniam.', 18705, 'picts7.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(13, 'Repellat est.', 'est-commodi-sit-tempora-dolore-laudantium', 'Nisi eaque sapiente aut in quasi.', 'Esse ad voluptatem ipsum hic adipisci aut ratione. Quo enim beatae magni voluptas saepe et numquam. Reiciendis animi voluptas recusandae consequuntur est. Vero quas est quis tempore.', 35106, 'picts8.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(14, 'In quia nisi.', 'qui-natus-quo-qui', 'Voluptatum neque aspernatur deleniti molestias debitis reprehenderit dicta unde.', 'Et accusamus ut et molestiae pariatur amet. Omnis nemo consequatur dolorum sed maxime aut doloremque. Ipsam rerum quia pariatur qui. Hic voluptas similique aut.', 43406, 'picts10.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(15, 'Facere adipisci sed dolorem odio.', 'dicta-et-dolorem-aut-dignissimos-consequatur-magni-magni', 'Suscipit dolor repellat veritatis perspiciatis quia asperiores quo.', 'Soluta dolorum incidunt minima a. Voluptatum eos et quos dolores. Praesentium tenetur accusamus ratione qui voluptatem.', 78060, 'picts11.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(16, 'Eaque qui suscipit.', 'aut-vel-blanditiis-sit-veniam-voluptatum-et-similique', 'Quia et magni quia velit eum aliquid quia cupiditate et.', 'Qui eum sapiente omnis rem et. Sed molestiae aut architecto est sunt quis. Possimus aut sapiente voluptas recusandae libero assumenda. Nihil omnis est dolorem qui qui. Consequatur commodi et qui quaerat est.', 87905, 'picts12.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(17, 'Similique error aut quis.', 'ut-voluptates-dicta-distinctio-consequatur-quo-ipsa-hic', 'Maiores sint qui earum ad et.', 'Voluptas magnam non veritatis fugiat. Itaque molestiae reprehenderit autem sed tempore dolorem sint. Omnis mollitia quis odio ut at qui.', 78562, 'picts13.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(18, 'Veniam aliquam debitis nulla.', 'qui-qui-non-dolores-consequatur-distinctio-adipisci', 'Sed deserunt voluptas ut qui.', 'Ipsum et iure dolorem eum officia ut tempora placeat. Neque quia voluptatem ducimus fugit asperiores. Nihil distinctio iusto eligendi quia. Non voluptate consequatur ut pariatur molestiae mollitia autem.', 53617, 'picts14.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(19, 'Veritatis voluptate autem.', 'nihil-corporis-qui-eum-molestias-delectus-soluta', 'Accusamus sunt quos quos beatae velit.', 'Quis sint necessitatibus quae corporis voluptatum temporibus. Aliquam illo voluptate esse iste laboriosam quibusdam. Laborum est occaecati nisi accusamus quisquam vel. Maxime qui quae omnis qui corporis voluptatem.', 35106, 'picts15.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(20, 'Aut maiores molestiae aut.', 'reiciendis-et-exercitationem-id', 'Iusto quas in molestias iure.', 'Nam dolores accusantium blanditiis. Explicabo suscipit delectus esse incidunt a nostrum iure. Possimus libero minima qui voluptas ipsa.', 67527, 'picts16.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(21, 'Impedit eum non officiis aliquid.', 'est-et-recusandae-ducimus-eaque-quis-non', 'Maiores aut est qui voluptas veritatis at corporis.', 'Tempora amet consequatur nisi ut ut. Laboriosam quia modi consequatur ipsum nisi vel.', 9677, 'pimgs1.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(22, 'Recusandae explicabo rerum.', 'eos-sapiente-nulla-enim-ullam-accusamus-eius-itaque', 'Aliquam recusandae maxime libero facere ut voluptas soluta et.', 'Quia odio nisi ut. Magnam natus inventore qui deserunt ea. Nihil molestiae quae consectetur accusamus nam aut. Consequuntur omnis sit velit sequi quia dolore. Enim quo cumque ipsam ea.', 54442, 'pimgs2.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(23, 'Voluptatem inventore odit.', 'quis-qui-culpa-laborum-expedita-consequatur-voluptatem-at', 'Inventore sequi dolor velit vitae nihil esse optio officia quibusdam.', 'Ducimus reprehenderit asperiores temporibus. Perferendis molestiae id perspiciatis incidunt earum perspiciatis autem. Qui ut sunt voluptate fugit nesciunt.', 62810, 'pimgs3.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(24, 'Est in necessitatibus quae.', 'eligendi-fugit-consequatur-laborum-laudantium', 'Ut est et doloribus et dolores porro.', 'Ex ratione voluptatem nesciunt expedita sed molestias voluptatem. Nihil dolores et qui ea. Atque unde illo adipisci incidunt. Laborum saepe quae velit recusandae velit.', 82213, 'pimgs4.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(25, 'Sit explicabo nostrum aut ab.', 'impedit-fuga-et-facilis-totam-facilis-iure', 'Debitis vero et ut quia dolorem.', 'Vero qui numquam officia et omnis magnam. Iusto quae et fugit voluptas. Exercitationem tempora ipsum explicabo qui. Voluptas aspernatur quis hic.', 73157, 'pimgs6.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(26, 'Similique eos quo aut.', 'odit-nam-dolorum-similique-qui', 'Temporibus itaque at veniam voluptates quo voluptatem autem et sint.', 'Nobis voluptatum hic eos eos dignissimos repellendus voluptates. Dolorum et et incidunt pariatur facilis error. Suscipit praesentium omnis culpa et est voluptatum quia debitis.', 42441, 'pimgs5.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(27, 'Distinctio cum exercitationem sunt.', 'alias-enim-temporibus-temporibus-qui', 'Quod et molestias quaerat dolorum.', 'Ut ut eligendi sit qui sit. Voluptatem cumque explicabo necessitatibus saepe. Laborum consectetur et sit voluptas officiis autem. Qui accusantium eaque et voluptatem accusantium id ea doloremque.', 35125, 'pimgs7.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(28, 'Est eos officia quia.', 'odit-non-modi-reprehenderit-aut', 'Pariatur voluptas aut itaque iusto qui deleniti tempora sunt.', 'Amet temporibus odit placeat non. Et quo est perspiciatis ut. Repellendus eos tempora eum quidem tempore. Odit enim ullam nam ab numquam facere necessitatibus.', 38880, 'pimgs8.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(29, 'Id repellendus quaerat aut.', 'autem-vero-est-earum-in-architecto-recusandae-sit', 'Pariatur officiis nesciunt omnis consequatur cum.', 'Voluptates eius qui voluptas aut. Perspiciatis velit id magnam consequatur omnis et. Illo minus ab aut laboriosam at dolorem. Magnam nihil molestias quis.', 83989, 'pimgscart2.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(30, 'Voluptatem accusantium quas commodi.', 'amet-ipsum-magnam-aspernatur-voluptas-quidem-in-tempora-rerum', 'Earum ducimus temporibus omnis ut velit dignissimos eos nesciunt.', 'Voluptas fugit et quia non. Eligendi aliquam dolor nesciunt nihil. Occaecati et quia vitae totam. Facilis enim sequi quo aliquid aliquid laboriosam.', 36985, 'pimgscart1.jpg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(31, 'Velit voluptatem provident.', 'cumque-molestias-dolorem-fugiat-totam-consequatur-omnis-atque-voluptatem', 'Omnis quae sed quia voluptatem vitae qui reprehenderit accusamus.', 'Ea aspernatur reiciendis ea est. Ut ex est voluptatem quod enim quo. Voluptatem et culpa dolores et sint ipsam ea nobis.', 73556, 'pimgspage2.jpeg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(32, 'Necessitatibus quo voluptate quae.', 'qui-exercitationem-quos-autem-mollitia', 'Quia ratione nam consequatur id velit.', 'Dolores officia voluptatibus qui cumque. Molestiae veniam est nisi aut exercitationem cupiditate temporibus nam. Est excepturi doloribus sequi.', 19681, 'pimgspage1.jpeg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(33, 'Inventore et sint.', 'adipisci-consequuntur-in-est-impedit', 'Voluptas vitae fugit et expedita nobis.', 'Et ea facere cum facilis eius consequatur veniam. Soluta ex aut sed consequatur accusantium nisi harum. Hic iure hic voluptate reiciendis. Qui ut aut modi vero.', 39179, 'pimgspage3.jpeg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(34, 'Sed voluptas delectus aut.', 'qui-ratione-et-explicabo-enim', 'Nostrum quod impedit qui qui accusamus iste.', 'Est quis natus eos id blanditiis earum amet. Qui dolor rerum et enim. Non est aspernatur porro sit natus ipsum quo. Facilis sit recusandae voluptas quia.', 53712, 'pimgspage4.jpeg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(35, 'Ea quod quisquam sit.', 'distinctio-quibusdam-consequatur-illum-quibusdam-pariatur-dignissimos-ratione-eos', 'Natus voluptatem reprehenderit et et nisi et nihil provident dolor.', 'Reprehenderit eius hic omnis totam assumenda ut illo. Quo voluptas aut qui ab eos. A qui quibusdam totam eum. Ea aspernatur ab atque ab.', 41270, 'pimgspagethumb2.jpeg', '2023-08-12 12:22:36', '2023-08-12 12:22:36'),
(36, 'Laborum voluptatem sint qui.', 'est-expedita-neque-repellendus-rerum-ex-nihil', 'Natus dolores inventore nobis error nobis non.', 'Repellat cupiditate omnis ea et. Autem molestias et qui nobis et est et. Ut amet voluptatem rem esse enim error.', 32557, 'pimgspagethumb1.jpeg', '2023-08-12 12:22:36', '2023-08-12 12:22:36');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_title_unique` (`title`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

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
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
