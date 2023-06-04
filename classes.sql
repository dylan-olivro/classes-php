-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 04 juin 2023 à 18:11
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `classes`
--
CREATE DATABASE IF NOT EXISTS `classes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `classes`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `firstname`, `lastname`) VALUES
(3, 'admin', 'admin', 'admin', 'admin', 'admin'),
(4, 'admin', 'admin', 'admin', 'admin', 'admin'),
(5, 'admin', 'admin', 'admin', 'admin', 'admin'),
(6, 'admin', 'admin', 'admin', 'admin', 'admin'),
(7, 'admin', 'admin', 'admin', 'admin', 'admin'),
(8, 'admin', 'admin', 'admin', 'admin', 'admin'),
(9, 'admin', 'admin', 'admin', 'admin', 'admin'),
(10, 'admin', 'admin', 'admin', 'admin', 'admin'),
(11, 'admin', 'admin', 'admin', 'admin', 'admin'),
(12, 'admin', 'admin', 'admin', 'admin', 'admin'),
(13, 'admin', 'admin', 'admin', 'admin', 'admin'),
(14, 'admin', 'admin', 'admin', 'admin', 'admin'),
(15, 'admin', 'admin', 'admin', 'admin', 'admin'),
(16, 'admin', 'admin', 'admin', 'admin', 'admin'),
(17, 'admin', 'admin', 'admin', 'admin', 'admin'),
(19, 'admin', 'admin', 'admin', 'admin', 'admin'),
(20, 'admin', 'admin', 'admin', 'admin', 'admin'),
(21, 'admin', 'admin', 'admin', 'admin', 'admin'),
(22, 'admin', 'admin', 'admin', 'admin', 'admin'),
(23, 'Update', 'Update', 'admin', 'admin', 'admin'),
(24, 'admin', 'mdp', 'admin@admin.com', 'Prenom', 'Nom');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
