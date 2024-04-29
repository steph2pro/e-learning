-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 avr. 2024 à 23:00
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
-- Base de données : `e_learning`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cour` int(11) NOT NULL,
  `intitule` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `contenues` varchar(255) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cour`, `intitule`, `date`, `contenues`, `id_utilisateur`) VALUES
(1, 'exposeww', '2024-04-06', 'COURS-66111d67d730f3.40568098.pdf', 4);

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id_formation` int(11) NOT NULL,
  `intitule` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `contenues` varchar(255) DEFAULT NULL,
  `id_cour` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id_formation`, `intitule`, `description`, `contenues`, `id_cour`) VALUES
(2, 'exposeww', 'ttttttsssssss', 'formation-66116b18cad734.17541380.pdf', 1);

-- --------------------------------------------------------

--
-- Structure de la table `questionnaires`
--

CREATE TABLE `questionnaires` (
  `id_questionnaire` int(11) NOT NULL,
  `intitule` varchar(255) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `reponses` varchar(255) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questionnaires`
--

INSERT INTO `questionnaires` (`id_questionnaire`, `intitule`, `contenu`, `reponses`, `id_utilisateur`) VALUES
(2, 'mathematique', 'c\'es quoi la racine de 9', '3', 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `telephone`, `email`, `sexe`, `ville`, `pays`, `login`, `password`, `photo`, `role`) VALUES
(4, 'junior', '33333333333', 'steph2004pro@gmail.com', 'femme', '', '', 'juniorProf', '2200', 'PROFILE-660d8af9cda468.13850811.jpg', 'enseignant'),
(5, 'talla jean ', '11111122222', 'sss@gmail.com', 'homme', 'sssss', 'wwww', 'admin', 'ssssss', 'PROFILE-660e6eb61154c5.28787029.jpg', 'apprennant'),
(6, 'stephane', '671506217', 'steph@gmail.com', 'masculin', 'baffoussam', 'cameroun', 'steph', '1234', 'pas encore', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id_formation`),
  ADD KEY `id_cour` (`id_cour`);

--
-- Index pour la table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`id_questionnaire`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `id_questionnaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_1` FOREIGN KEY (`id_cour`) REFERENCES `cours` (`id_cour`);

--
-- Contraintes pour la table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD CONSTRAINT `questionnaires_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
