-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 26 nov. 2018 à 11:52
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
  `passwrd` varchar(255) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `mail` varchar(40) NOT NULL,
  `identifiant` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID_Compte`, `passwrd`, `nom`, `prenom`, `mail`, `identifiant`) VALUES
(1, 'mdp', 'Lalane', 'Francis', 'francis.lalane@funmail.com', ''),
(2, 'mdp2', 'Lestylo', 'Marine', 'vivelafrance@gmail.com', ''),
(3, 'blablabla', 'Emma', 'Karena', 'emakaren@a.lol', ''),
(4, 'azedsqwxc123', NULL, 'Ololololo', 'blablabla@gmail.bite', 'jtebaizz'),
(5, 'pmloikjuyh1', '$2y$10$NjnqxqYm1lYn9fJ8Z/mr/Om', 'fepzokpekùpsoe', 'blablabla@gmail.bite', 'zefpokeokfoaezk'),
(6, 'wxcvbnbvcxw', '$2y$10$aDW3nPI3LtEsEPAZUuFMRO3', 'fp^kfoazoj,fipoeqjf', 'penis@gmail.bite', 'ezfpofezkpzejfoo'),
(7, '$2y$10$eRFWIg5g8UuMHN/CPpp6keBHB/.5GzNqaZtQDhZCvnXnUuIBoyOvq', 'baaizbiiea', 'ijoouioiuhiuh', 'penis@gmail.bite', 'uhihunljhlk'),
(8, '$2y$10$6zoc5GoJ/mDDPoBcZwXTmOEz6svTFea3HBJSi7aKnclgvwNGbVKT2', 'ijofoeisjfoeifsj', 'huoiuihiou', 'dzjdzjio@zdijoizdjdz.di', 'hiouhiuhiouh'),
(9, '$2y$10$JnaS/MPIMT4cHSqGkBcXweDLXKt.cvTWxESrY07YtUTcF.VEtPva2', 'delaval', 'clement', 'blablabla@gmail.bi', 'delclemdu31'),
(10, '$2y$10$1ebg5QHjsQmRyGjwFIhZB.AvbhLhYUC.5RaTS1C/YODQmi522ZB9i', 'Lalalla', 'zoidaz', 'bastien.larrouture@gmail.com', 'azazeaze');

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
  `description` text NOT NULL,
  `ID_Jeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`nom`, `prix`, `nbMinJoueurs`, `noteRedac`, `nbMaxJoueurs`, `catégorie`, `image`, `testRedac`, `description`, `ID_Jeu`) VALUES
('Paper Tales', 40, 2, 16, 4, 'Stratégie', 'image/paper-tales.jpg', '<iuoehfu< uio<ehfiu<e eh h<e hoiuh iuo< heiouheiuofhi<eousfh zelkhgliuhqgho ij fm<joifms <iuoehfu< uio<ehfiu<e eh h<e hoiuh iuo< heiouheiuofhi<eousfh zelkhgliuhqgho ij fm<joifms <iuoehfu< uio<ehfiu<e eh h<e hoiuh iuo< heiouheiuofhi<eousfh zelkhgliuhqgho ij fm<joifms <iuoehfu< uio<ehfiu<e eh h<e hoiuh iuo< heiouheiuofhi<eousfh zelkhgliuhqgho ij fm<joifms <iuoehfu< uio<ehfiu<e eh h<e hoiuh iuo< heiouheiuofhi<eousfh zelkhgliuhqgho ij fm<joifms ', '', 1),
('Mysterium', 35, 2, 18, 7, 'Ambiance', 'image/mysterium.jpg', 'aaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aa aaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aaaaaaaa aaaaaaaaaaaaa  a a a a   a aa aaa  aaaa aaa aa aa a aaa a aa aa', '', 2),
('Secrets', 20, 4, 14, 8, 'Stratégie', 'image/secrets.jpg', 'bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb bbbbbb bb b bb  b bbbb bbbbr bbbb bbb bbbbb bb bbb bbb ', 'Auxerunt haec vulgi sordidioris audaciam, quod cum ingravesceret penuria commeatuum, famis et furoris inpulsu Eubuli cuiusdam inter suos clari domum ambitiosam ignibus subditis inflammavit rectoremque ut sibi iudicio imperiali addictum calcibus incessens et pugnis conculcans seminecem laniatu miserando discerpsit. post cuius lacrimosum interitum in unius exitio quisque imaginem periculi sui considerans documento recenti similia formidabat.', 3),
('Citadelles', 22, 2, 17, 8, 'Stratégie', 'image/citadelles.png', '', '', 4),
('Smash up', 17, 2, 11, 4, 'Cartes', 'image/smash-up-vf.jpg', '', '', 5),
('Jenga', 20, 1, 12, 10, 'Adresse', 'image/jenga.jpg', '', '', 6);

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
  MODIFY `ID_Compte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
