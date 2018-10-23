-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 23 oct. 2018 à 16:22
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
  `ID_Jeu` int(11) NOT NULL,
  `ID_Compte` varchar(12) NOT NULL,
  `Description` text NOT NULL,
  `Note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `ID_Compte` varchar(12) NOT NULL,
  `Mdp` varchar(12) NOT NULL,
  `Age` smallint(3) NOT NULL,
  `Mail` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `ID_Jeu` int(11) NOT NULL,
  `Nom` varchar(64) NOT NULL,
  `Prix` float NOT NULL,
  `NbMinJoueurs` int(2) NOT NULL,
  `NbMaxJoueurs` int(2) NOT NULL,
  `Note` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `ID_Jeu` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
