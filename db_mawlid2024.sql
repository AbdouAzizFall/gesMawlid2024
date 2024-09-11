-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 sep. 2024 à 14:28
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
(5, 'MBENGUE', 'Ousmane', 20000.00, '2024-08-09 00:00:00');

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
(62, 'Fall', 'Absa', 'Femme', '76 543 81 12', 15000.00, '2024-09-11 02:12:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `depenses`
--
ALTER TABLE `depenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
