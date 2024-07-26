-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 juil. 2024 à 11:48
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
-- Base de données : `my-todo-list_todo_list`
--

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id_taches` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date_creation` date NOT NULL DEFAULT current_timestamp(),
  `realisee` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id_taches`, `nom`, `description`, `date_creation`, `realisee`) VALUES
(8, 'Notre dame', 'Achheter du  pain et des yaourts', '2024-07-09', 0),
(9, 'REchatge lyca', 'Appel international', '2024-07-09', 0),
(18, 'Course Nettio', 'Acht de lait bio , Fruituimg', '2024-07-17', 0),
(24, 'ggch,jd', 'dghjdkjrtyjytr', '2024-07-19', 1),
(26, 'Rv ', 'kine à 16h ', '2024-07-22', 0),
(28, 'Moussafdsyhe\'r', 'qesy\'(qs\'q\"z', '2024-07-22', 0),
(29, 'uteeue', 'drtyuzszueed', '2024-07-22', 0),
(30, 'sdehter(tyy\"\'y', 'z\"\'s(yszrtjrdtj', '2024-07-22', 0),
(31, 'drstyususu', 'sudeturdrtudru', '2024-07-23', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id_taches`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id_taches` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
