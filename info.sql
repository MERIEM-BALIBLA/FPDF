-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 28 déc. 2023 à 12:25
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE `info` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `product` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`id`, `name`, `product`, `description`, `price`) VALUES
(1, 'Ahmed', 'Ikea', 'Pour convaincre, une description produit doit comporter la description d\'un produit.', 14),
(2, 'Ahmed', ' innocent', 'Pour bien rédiger une description produit, il faut utiPour bien rédiger une description pr', 20),
(7, 'RIP3', 'Patagonia', 'Pour être convaincante, la description produit doit être précise e', 300),
(8, 'RIP4', 'Respire', 'Pour bien rédiger une description produit, il faut faire preuve de transparence : 60% des con\r\n\r\n', 330),
(9, 'RIP5', 'Marshall', 'ur séachat à cause d\'une description peu évocatrice et les d', 200),
(10, 'RIP6', 'innocent ', 'é :\r\n', 492);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `info`
--
ALTER TABLE `info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
