-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 nov. 2018 à 15:37
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `leplateau`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `ID_Compte` int(11) NOT NULL,
  `ID_Jeu` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `note` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`ID_Compte`, `ID_Jeu`, `description`, `note`) VALUES
(1, 2, 'Ce jeu résonne au plus profond de mon âme.', 5),
(1, 1, 'Un jeu qui emballe l\'imagination !', 4),
(2, 4, 'J\'aime beaucoup l\'idée de ce jeu, ça encourage le protectionnisme.', 5),
(2, 3, 'Je n\'aime pas les secrets, surtout ceux des autres.', 1),
(1, 4, 'Bon jeu mais un peu long.', 3);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `ID_Compte` int(11) NOT NULL,
  `passwrd` varchar(15) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `sexe` int(1) DEFAULT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID_Compte`, `passwrd`, `nom`, `prenom`, `age`, `sexe`, `mail`) VALUES
(1, 'mdp', 'Lalane', 'Francis', '45', 1, 'francis.lalane@funmail.com'),
(2, 'mdp2', 'Lestylo', 'Marine', '59', 0, 'vivelafrance@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `nom` varchar(100) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL,
  `nbMinJoueurs` int(2) NOT NULL,
  `noteRedac` int(2) NOT NULL,
  `nbMaxJoueurs` int(2) DEFAULT NULL,
  `catégorie` varchar(30) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `testRedac` text NOT NULL,
  `ID_Jeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`nom`, `prix`, `nbMinJoueurs`, `noteRedac`, `nbMaxJoueurs`, `catégorie`, `image`, `testRedac`, `ID_Jeu`) VALUES
('Paper Tales', 40, 2, 16, 4, 'Stratégie', 'image/paper-tales.jpg', '', 1),
('Mysterium', 35, 2, 18, 7, 'Ambiance', 'image/mysterium.jpg', '', 2),
('Secrets', 20, 4, 14, 8, 'Stratégie', 'image/secrets.jpg', '', 3),
('Citadelles', 22, 2, 17, 8, 'Stratégie', 'image/citadelles.png', '', 4),
('Smash up', 17, 2, 11, 4, 'Cartes', 'image/smash-up-vf.jpg', '', 5),
('Jenga', 20, 1, 12, 10, 'Adresse', 'image/jenga.jpg', '', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD KEY `ID_Compte` (`ID_Compte`),
  ADD KEY `ID_Jeu` (`ID_Jeu`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`ID_Compte`);

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`ID_Jeu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `ID_Compte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `ID_Jeu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`ID_Compte`) REFERENCES `compte` (`ID_Compte`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`ID_Jeu`) REFERENCES `jeu` (`ID_Jeu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
