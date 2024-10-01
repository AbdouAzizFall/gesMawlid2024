-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 oct. 2024 à 03:31
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_mawlid2024`
--

-- --------------------------------------------------------

--
-- Structure de la table `autres_participations`
--

CREATE TABLE `autres_participations` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `date_participation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `autres_participations`
--

INSERT INTO `autres_participations` (`id`, `nom`, `prenom`, `montant`, `date_participation`) VALUES
(4, 'SALL', 'BABACAR', 25000.00, '2024-08-06 00:00:00'),
(5, 'MBENGUE', 'Ousmane', 20000.00, '2024-08-09 00:00:00'),
(6, 'BA', 'Mame Ngone', 10000.00, '2024-09-12 00:00:00'),
(7, 'TOURE', 'Mouhamed', 5000.00, '2024-09-12 00:00:00'),
(8, 'GAYE', 'Moustapha', 25000.00, '2024-09-12 00:00:00'),
(9, 'DIAW', 'Khady', 5000.00, '2024-09-12 00:00:00'),
(10, 'MBATHIE', 'Bassine', 5000.00, '2024-09-12 00:00:00'),
(11, 'GUEYE', 'Mansour', 10000.00, '2024-09-14 00:00:00'),
(12, 'Baye ', 'Baye', 5000.00, '2024-09-14 00:00:00'),
(13, ' Somme recoltee', '(sur la route)', 35500.00, '2024-09-13 00:00:00'),
(14, 'NDAO', 'Ibou', 10000.00, '2024-09-13 00:00:00'),
(15, 'GUEYE', 'Mouhamed', 5000.00, '2024-09-14 00:00:00'),
(16, 'GUEYE', 'Mbaye', 7000.00, '2024-09-14 00:00:00'),
(18, 'NDIAYE', 'Moustapha', 20000.00, '2024-09-15 00:00:00'),
(19, 'SEYE', 'Ndiaga', 20000.00, '2024-09-15 00:00:00'),
(20, 'NDIAYE', 'Babacar', 6000.00, '2024-09-15 00:00:00'),
(21, 'MBODJI', 'Mor', 20000.00, '2024-09-15 00:00:00'),
(22, 'MBAYE', 'Modou', 5000.00, '2024-09-15 00:00:00'),
(23, 'SALL', 'Malick', 175000.00, '2024-09-15 00:00:00'),
(24, 'SECK', 'Aby', 5000.00, '2024-09-15 00:00:00'),
(25, 'Cellule', 'feminine', 341600.00, '2024-10-01 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `username`, `password`) VALUES
(1, 'admin', 'passer');

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

CREATE TABLE `depenses` (
  `id` int(11) NOT NULL,
  `lib` varchar(255) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `depenses`
--

INSERT INTO `depenses` (`id`, `lib`, `montant`, `date`) VALUES
(9, 'Transport', 480000.00, '2024-09-14'),
(10, 'BACHE', 43000.00, '2024-09-14'),
(11, 'Dépense marche thiaroye', 100000.00, '2024-09-14'),
(12, 'facture Malick', 302000.00, '2024-09-14'),
(13, '2 Bouteille de GAZ', 3000.00, '2024-09-14'),
(14, '5 nattes louées', 7500.00, '2024-09-14'),
(15, 'montant équipe logistique', 14000.00, '2024-09-14'),
(16, 'Transport matteu', 4000.00, '2024-09-14'),
(17, 'Cafe', 20000.00, '2024-09-14'),
(18, 'Poisson', 11000.00, '2024-09-14'),
(19, 'Viande', 100000.00, '2024-09-14'),
(20, 'BON ', 4000.00, '2024-09-14'),
(21, 'Matérielles électriques', 16500.00, '2024-09-14'),
(22, 'Courant', 5000.00, '2024-09-14'),
(23, 'Boeuf', 350000.00, '2024-09-15'),
(24, 'transport (boeuf)', 14500.00, '2024-09-15'),
(25, 'Les frais diverses du boeuf', 10000.00, '2024-09-15'),
(26, 'Pains', 24000.00, '2024-09-15'),
(27, 'Glaces', 11500.00, '2024-09-15'),
(28, 'matteu', 5000.00, '2024-09-15'),
(29, 'Fruits(2 Moulons,2 papayes)', 3500.00, '2024-09-15'),
(30, 'Salades', 10000.00, '2024-09-15'),
(31, 'Racleur', 1000.00, '2024-09-14'),
(32, 'Décoration', 8000.00, '2024-09-14'),
(33, 'Thé (wass)', 5000.00, '2024-09-15'),
(34, 'Lait', 3500.00, '2024-09-14'),
(35, 'Achat matteu', 13000.00, '2024-09-14'),
(36, 'Shwingum', 3800.00, '2024-09-15'),
(37, 'Glace', 5000.00, '2024-09-15'),
(38, 'Pain', 17500.00, '2024-09-15'),
(39, 'Glace', 12000.00, '2024-09-15'),
(40, 'Transport bache (champ de course)', 3000.00, '2024-09-15'),
(41, 'Eau (2 GROSSES)', 1600.00, '2024-09-15'),
(42, 'Scotche', 1000.00, '2024-09-15'),
(43, 'Mayonnaise', 9500.00, '2024-09-15'),
(44, 'Pain', 17500.00, '2024-09-16'),
(45, 'Glace', 3500.00, '2024-09-16'),
(46, 'Glace', 10000.00, '2024-09-16'),
(47, 'diner', 12000.00, '2024-09-16'),
(48, 'Aide', 3000.00, '2024-09-16'),
(49, 'Aide Pour Mere Oumy MBAYE', 20000.00, '2024-09-16'),
(50, 'Transport bache (retour)', 4000.00, '2024-09-15'),
(51, 'Location bols', 4000.00, '2024-09-17'),
(52, 'Location frigot', 2500.00, '2024-09-17'),
(53, ' petit dej +diner (soupe)', 20000.00, '2024-09-17'),
(54, 'Gaz', 4500.00, '2024-09-17'),
(55, 'autres dépenses', 15000.00, '2024-09-22'),
(56, 'Depense Cellule Feminine', 341600.00, '2024-09-23');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` enum('Homme','Femme') NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `nom`, `prenom`, `sexe`, `telephone`, `montant`, `date_inscription`) VALUES
(11, 'DIOP', 'Mbaye', 'Homme', '783317637', 15000.00, '2024-09-03 22:37:54'),
(12, 'MBAYE', 'Mouhamed', 'Homme', '773872272', 15000.00, '2024-09-03 22:39:04'),
(13, 'BA', 'KHARDIATA', 'Femme', '775086784', 15000.00, '2024-09-03 22:40:20'),
(14, 'NDIAYE', 'Sala', 'Femme', '771055098', 10000.00, '2024-09-03 22:41:21'),
(15, 'NDIAYE', 'MBENDA', 'Femme', '771055098', 10000.00, '2024-09-03 22:42:13'),
(18, 'DIOUF', 'Astou ', 'Femme', '787271971', 15000.00, '2024-09-09 12:03:10'),
(19, 'SANE', 'Djadji', 'Homme', '704891590', 10000.00, '2024-09-09 12:04:14'),
(20, 'DIOP', 'Colle', 'Femme', '762998569', 15000.00, '2024-09-09 12:05:26'),
(21, 'BEYE', 'Saguar', 'Femme', '762998569', 15000.00, '2024-09-09 12:06:42'),
(22, 'NDIAYE', 'Codou', 'Femme', '762998569', 10000.00, '2024-09-09 12:07:59'),
(23, 'SALL', 'Mame Cheikh ', 'Homme', '762998569', 10000.00, '2024-09-09 12:08:59'),
(24, 'SALL', 'Fatou', 'Femme', '762998569', 10000.00, '2024-09-09 12:10:05'),
(25, 'DIAGNE', 'Bousso', 'Femme', '776953459', 15000.00, '2024-09-09 12:11:26'),
(26, 'SEYE', 'Oumy', 'Femme', '707545082', 15000.00, '2024-09-09 12:13:21'),
(27, 'SEYE', 'Assane', 'Homme', '707545082', 10000.00, '2024-09-09 12:18:17'),
(28, 'NIANE', 'Rama', 'Femme', '707545082', 15000.00, '2024-09-09 12:19:59'),
(29, 'THIAW', 'Pape', 'Homme', '707545082', 10000.00, '2024-09-09 12:21:28'),
(31, 'LO', 'Ndeye', 'Femme', '787668442', 10000.00, '2024-09-10 21:35:38'),
(32, 'DIOP', 'Papa', 'Homme', '768196285', 15000.00, '2024-09-10 21:36:42'),
(33, 'KANE', 'Ndeye Maréme', 'Femme', '774047744', 15000.00, '2024-09-10 21:38:35'),
(34, 'MBODJI', 'Adama', 'Homme', '770542240', 20000.00, '2024-09-10 21:39:52'),
(35, 'NDIAYE', 'Fatima', 'Femme', '764888270', 10000.00, '2024-09-10 21:41:16'),
(36, 'MBAYE', 'Mame Fama ', 'Femme', '785228044', 15000.00, '2024-09-10 21:42:34'),
(37, 'DIOP', 'Khadidiatou', 'Femme', '776977295', 10000.00, '2024-09-10 21:44:49'),
(38, 'FALL', 'Arame', 'Femme', '784674084', 15000.00, '2024-09-10 21:46:28'),
(39, 'DIOP', 'Fatima', 'Femme', '776977295', 10000.00, '2024-09-10 21:47:40'),
(40, 'NIANG', 'Sanou', 'Femme', '784674084', 15000.00, '2024-09-10 21:48:44'),
(41, 'DIOP', 'Cheikh', 'Homme', '763118882', 10000.00, '2024-09-10 21:49:54'),
(42, 'BEYE', 'Kine', 'Femme', '787218531', 15000.00, '2024-09-10 21:50:53'),
(43, 'SECK', 'Coumba', 'Femme', '707561220', 10000.00, '2024-09-10 21:53:04'),
(44, 'DIOP', 'Aby', 'Femme', '786086006', 15000.00, '2024-09-10 21:56:16'),
(45, 'DIOP', 'Arame', 'Femme', '785228044', 10000.00, '2024-09-10 21:56:57'),
(46, 'FALL', 'GNAGNA', 'Femme', '785228044', 15000.00, '2024-09-10 21:59:33'),
(47, 'SALL', 'Anta', 'Femme', '785228044', 10000.00, '2024-09-10 22:00:24'),
(48, 'KANE', 'Maguette', 'Femme', '707561220', 15000.00, '2024-09-10 22:01:47'),
(49, 'GAYE', 'Ada', 'Femme', '770542240', 10000.00, '2024-09-10 22:03:32'),
(50, 'KANE', 'Diama', 'Femme', '707561220', 15000.00, '2024-09-10 22:05:56'),
(51, 'SANE', 'Moussou', 'Femme', '785228044', 10000.00, '2024-09-10 22:10:33'),
(52, 'FALL', 'NOGAYE', 'Femme', '766560725', 15000.00, '2024-09-10 22:11:45'),
(53, 'NDIAYE', 'Bara', 'Homme', '785228044', 10000.00, '2024-09-10 22:12:48'),
(54, 'MBENGUE', 'Ousmane', 'Homme', '783096912', 15000.00, '2024-09-10 22:14:02'),
(55, 'GNINGUE', 'Mame Ngor', 'Homme', '773981792', 10000.00, '2024-09-10 22:15:31'),
(56, 'GUEYE', 'Mouhamed', 'Homme', '779439478', 10000.00, '2024-09-10 22:17:09'),
(60, 'GAYE', 'Baye Moussa', 'Homme', '762802160', 15000.00, '2024-09-10 23:06:11'),
(61, 'Diop', 'Dame', 'Homme', '76 543 81 12', 20000.00, '2024-09-11 02:11:40'),
(62, 'Fall', 'Absa', 'Femme', '76 543 81 12', 15000.00, '2024-09-11 02:12:09'),
(65, 'SECK', 'Abdou', 'Homme', '707182934', 20000.00, '2024-09-14 00:24:55'),
(66, 'DIOL', 'Rose', 'Femme', '785228044', 10000.00, '2024-09-14 00:25:37'),
(67, 'DIOL', 'Amy COLLE', 'Femme', '785228044', 10000.00, '2024-09-14 00:26:22'),
(68, 'DIOP', 'Ndeye', 'Femme', '782768428', 15000.00, '2024-09-14 00:27:30'),
(69, 'SOUMARE', 'Bathie', 'Femme', '784244328', 15000.00, '2024-09-14 00:28:21'),
(70, 'LY', 'Moussa', 'Homme', '784953779', 15000.00, '2024-09-14 00:29:27'),
(71, 'DIAW', 'Moustapha', 'Homme', '773688090', 15000.00, '2024-09-14 00:30:17'),
(72, 'DIOP', 'Touty', 'Femme', '779439478', 15000.00, '2024-09-14 00:32:14'),
(73, 'KA', 'Fatou', 'Femme', '762574122', 15000.00, '2024-09-14 00:33:08'),
(74, 'FALL', 'Bineta', 'Femme', '766560725', 15000.00, '2024-09-14 00:33:55'),
(75, 'NIANG', 'Fatou', 'Femme', '785228044', 15000.00, '2024-09-14 00:34:33'),
(76, 'DOUKOURE', 'Adama', 'Homme', '785228044', 10000.00, '2024-09-14 00:35:13'),
(77, 'DIAGNE', 'Diariatou', 'Femme', '785228044', 15000.00, '2024-09-14 00:35:53'),
(78, 'NDOUR', 'Mari', 'Femme', '7648898270', 10000.00, '2024-09-14 00:37:15'),
(79, 'NDIAYE', 'Seydina', 'Homme', '764888270', 10000.00, '2024-09-14 00:38:09'),
(80, 'NDIAYE', 'Ndieme', 'Femme', '772034165', 15000.00, '2024-09-14 00:38:59'),
(81, 'SALAM', 'Amy', 'Femme', '764815615', 15000.00, '2024-09-14 00:40:30'),
(82, 'GUEYE', 'Maman', 'Femme', '764815615', 10000.00, '2024-09-14 00:41:17'),
(83, 'SEYE', 'Maguette', 'Femme', '707545082', 10000.00, '2024-09-14 00:42:09'),
(84, 'SALL', 'Mame Cheikh ', 'Homme', '773361479', 10000.00, '2024-09-14 00:43:23'),
(85, 'GNINGUE', 'Papa', 'Homme', '762706276', 15000.00, '2024-09-14 00:44:13'),
(86, 'MBAYE', 'Maimouna', 'Femme', '785228044', 10000.00, '2024-09-14 00:45:06'),
(87, 'THIAM', 'Penda', 'Femme', '775492024', 15000.00, '2024-09-14 00:45:55'),
(88, 'DIEYE', 'Lamine', 'Homme', '778279775', 15000.00, '2024-09-14 00:48:18'),
(90, 'FALL', 'Abdou Aziz FALL', 'Homme', '772784885', 15000.00, '2024-09-14 00:50:06'),
(92, 'SALL', 'Moustapha', 'Homme', '766050639', 15000.00, '2024-09-14 00:51:47'),
(93, 'GNINGUE', 'Awa', 'Femme', '785228044', 10000.00, '2024-09-14 00:53:22'),
(94, 'GUEYE', 'Yande', 'Femme', '702070677', 15000.00, '2024-09-14 00:54:21'),
(95, 'THIOGANE', 'Moustapha', 'Homme', '702070677', 10000.00, '2024-09-14 00:55:10'),
(96, 'THIOGANE', 'Rama', 'Femme', '702070677', 10000.00, '2024-09-14 00:56:11'),
(97, 'SOUMARE', 'Baba', 'Homme', '784244328', 10000.00, '2024-09-14 00:58:10'),
(98, 'SOUMARE', 'Hawa', 'Femme', '787458057', 10000.00, '2024-09-14 23:08:51'),
(99, 'GUEYE', 'Ndeye', 'Femme', '789668672', 15000.00, '2024-09-14 23:11:16'),
(100, 'SALL', 'Omar', 'Homme', '784112545', 15000.00, '2024-09-14 23:13:36'),
(101, 'SYLLA', 'Khady', 'Homme', '766899492', 10000.00, '2024-09-14 23:14:36'),
(102, 'GAYE', 'Fatima', 'Femme', '770193425', 10000.00, '2024-09-14 23:15:57'),
(103, 'GAYE', 'Ablaye', 'Homme', '770193425', 10000.00, '2024-09-14 23:18:00'),
(104, 'GNINGUE', 'Gora', 'Homme', '774473529', 20000.00, '2024-09-14 23:21:07'),
(105, 'FALL', 'Coumba', 'Femme', '778306966', 15000.00, '2024-09-14 23:22:41'),
(106, 'GUEYE', 'Mame Cheikh', 'Homme', '786311590', 15000.00, '2024-09-14 23:23:20'),
(107, 'DIOUF', 'Fatima', 'Femme', '785228044', 15000.00, '2024-09-14 23:25:30'),
(108, 'GUEYE', 'Mame CHEIKH', 'Homme', '772784885', 10000.00, '2024-09-14 23:26:09'),
(109, 'GUEYE', 'Amadou', 'Homme', '773884547', 10000.00, '2024-09-14 23:27:29'),
(110, 'DIAW', 'Omar', 'Homme', '773688090', 10000.00, '2024-09-14 23:28:13'),
(111, 'DIAW', 'Mbaye', 'Homme', '773688090', 5000.00, '2024-09-14 23:30:39'),
(112, 'GUEYE', 'Modou Fall', 'Homme', '779620747', 20000.00, '2024-09-14 23:32:23'),
(113, 'GUEYE', 'Mara', 'Homme', '779620747', 10000.00, '2024-09-14 23:33:41'),
(114, 'GUEYE', 'Talla', 'Homme', '779620747', 10000.00, '2024-09-14 23:35:09'),
(115, 'GNINGUE', 'Mame Cheikh ', 'Homme', '781862591', 10000.00, '2024-09-14 23:37:16'),
(116, 'DIOUF', 'Saér', 'Homme', '774493571', 20000.00, '2024-09-14 23:39:45'),
(117, 'DIOUF', 'Marietou', 'Femme', '774493571', 10000.00, '2024-09-14 23:40:21'),
(118, 'THIOUBE', 'Fama', 'Femme', '765518992', 15000.00, '2024-09-14 23:41:48'),
(119, 'DIOP', 'Mame Babacar', 'Homme', '785228044', 8000.00, '2024-09-14 23:42:54'),
(120, 'GNINGUE', 'Moustapha', 'Homme', '785228044', 15000.00, '2024-09-14 23:43:42'),
(121, 'GUEYE', 'Mor', 'Homme', '782483456', 15000.00, '2024-09-14 23:44:51'),
(122, 'DIOP', 'Souleymane', 'Homme', '785228044', 7000.00, '2024-09-14 23:45:36'),
(123, 'DIOUF', 'Amy', 'Femme', '787218531', 10000.00, '2024-09-14 23:46:54'),
(124, 'GNINGUE', 'Thiane', 'Femme', '781812091', 10000.00, '2024-09-14 23:48:43'),
(125, 'GUEYE', 'Makhtar', 'Homme', '772161781', 20000.00, '2024-09-14 23:49:44'),
(126, 'DIENG', 'Lamine', 'Homme', '773105795', 20000.00, '2024-09-15 00:45:43'),
(127, 'Gaye', 'Malick', 'Homme', '777937401', 15000.00, '2024-09-15 01:35:04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autres_participations`
--
ALTER TABLE `autres_participations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD KEY `id` (`id`);

--
-- Index pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autres_participations`
--
ALTER TABLE `autres_participations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `depenses`
--
ALTER TABLE `depenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
