-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 30 oct. 2023 à 13:52
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `socialnetwork`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupall`
--

CREATE TABLE `groupall` (
  `name_groupAll` varchar(255) NOT NULL,
  `date_creator` date DEFAULT NULL,
  `id_author` varchar(255) NOT NULL,
  `statut_group_all` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `groupall`
--

INSERT INTO `groupall` (`name_groupAll`, `date_creator`, `id_author`, `statut_group_all`) VALUES
('Group for all', '2023-10-27', 'admin', 'actif');

-- --------------------------------------------------------

--
-- Structure de la table `groupprive`
--

CREATE TABLE `groupprive` (
  `name_groupAll` varchar(255) NOT NULL,
  `date_creator` date DEFAULT NULL,
  `id_author` varchar(255) NOT NULL,
  `statut_group_all` varchar(255) NOT NULL,
  `temps` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--
--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groupall`
--
ALTER TABLE `groupall`
  ADD PRIMARY KEY (`name_groupAll`);

--
-- Index pour la table `groupprive`
--
ALTER TABLE `groupprive`
  ADD PRIMARY KEY (`name_groupAll`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
