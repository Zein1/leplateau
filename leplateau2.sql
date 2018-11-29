-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 nov. 2018 à 10:49
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

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

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `ID_Compte` int(11) NOT NULL,
  `ID_Jeu` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `note` int(2) NOT NULL,
  KEY `ID_Compte` (`ID_Compte`),
  KEY `ID_Jeu` (`ID_Jeu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`ID_Compte`, `ID_Jeu`, `description`, `note`) VALUES
(1, 2, 'Ce jeu résonne au plus profond de mon âme.', 5),
(1, 1, 'Un jeu qui emballe l\'imagination !', 4),
(2, 4, 'J\'aime beaucoup l\'idée de ce jeu, ça encourage le protectionnisme.', 5),
(2, 3, 'Je n\'aime pas les secrets, surtout ceux des autres.', 1),
(1, 4, 'Bon jeu mais un peu long.', 3),
(9, 2, ' De loin mon jeu préféré', 5),
(10, 6, 'Un jeu d\'adresse fort rigolo', 4),
(10, 5, 'J\'aime bien ce jeu mais je perds tout le temps. : (', 2);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `ID_Compte` int(11) NOT NULL AUTO_INCREMENT,
  `passwrd` varchar(255) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `mail` varchar(40) NOT NULL,
  `identifiant` varchar(16) NOT NULL,
  PRIMARY KEY (`ID_Compte`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID_Compte`, `passwrd`, `nom`, `prenom`, `mail`, `identifiant`) VALUES
(1, 'mdp', 'Lalane', 'Francis', 'francis.lalane@funmail.com', 'flalane'),
(2, 'mdp2', 'Lestylo', 'Marine', 'vivelafrance@gmail.com', 'mlestylo'),
(3, 'blablabla', 'Emma', 'Karena', 'emakaren@a.lol', 'ekarena'),
(4, 'azedsqwxc123', NULL, 'Ololololo', 'blablabla@gmail.bite', 'jtebaizz'),
(5, 'pmloikjuyh1', '$2y$10$NjnqxqYm1lYn9fJ8Z/mr/Om', 'fepzokpekùpsoe', 'blablabla@gmail.bite', 'zefpokeokfoaezk'),
(6, 'wxcvbnbvcxw', '$2y$10$aDW3nPI3LtEsEPAZUuFMRO3', 'fp^kfoazoj,fipoeqjf', 'penis@gmail.bite', 'ezfpofezkpzejfoo'),
(7, '$2y$10$eRFWIg5g8UuMHN/CPpp6keBHB/.5GzNqaZtQDhZCvnXnUuIBoyOvq', 'baaizbiiea', 'ijoouioiuhiuh', 'penis@gmail.bite', 'uhihunljhlk'),
(8, '$2y$10$6zoc5GoJ/mDDPoBcZwXTmOEz6svTFea3HBJSi7aKnclgvwNGbVKT2', 'ijofoeisjfoeifsj', 'huoiuihiou', 'dzjdzjio@zdijoizdjdz.di', 'hiouhiuhiouh'),
(9, '$2y$10$JnaS/MPIMT4cHSqGkBcXweDLXKt.cvTWxESrY07YtUTcF.VEtPva2', 'delaval', 'clement', 'blablabla@gmail.bi', 'delclemdu31'),
(10, '$2y$10$1ebg5QHjsQmRyGjwFIhZB.AvbhLhYUC.5RaTS1C/YODQmi522ZB9i', 'Lalalla', 'zoidaz', 'bastien.larrouture@gmail.com', 'bastienleroxxor'),
(11, '$2y$10$KHUbXAdNCeQ7nsNF.YGYi.BycogrQlKpU161G4OMtES8uHm8qsz1O', 'test', 'test', 'test@test.com', 'testeur31');

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

DROP TABLE IF EXISTS `jeu`;
CREATE TABLE IF NOT EXISTS `jeu` (
  `nom` varchar(100) DEFAULT NULL,
  `prix` int(10) DEFAULT NULL,
  `nbMinJoueurs` int(2) NOT NULL,
  `noteRedac` int(2) NOT NULL,
  `nbMaxJoueurs` int(2) DEFAULT NULL,
  `catégorie` varchar(30) DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `testRedac` text NOT NULL,
  `description` text NOT NULL,
  `achat` varchar(200) NOT NULL,
  `ID_Jeu` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_Jeu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`nom`, `prix`, `nbMinJoueurs`, `noteRedac`, `nbMaxJoueurs`, `catégorie`, `image`, `testRedac`, `description`, `achat`, `ID_Jeu`) VALUES
('Paper Tales', 40, 2, 16, 4, 'Stratégie', 'image/paper-tales.jpg', 'Un titre fort solide, profond, versatile et addictif. On aura envie d’y rejouer (souvent) pour essayer plusieurs stratégies. Militaire, bâtiments, pouvoirs\r\n\r\nL’erreur, et c’est le risque lors des premières manches, serait de le comparer à 7 Wonders. De le traiter de 7 Wonders Killer et de le trouver un peu pâlot par rapport à son indécrottable « grand frère » sorti en 2010. Mais Paper Tales n’a rien à voir avec 7 Wonders. Il y a du draft, certes. Il y a les mêmes règles de combat, mais c’est tout\r\n\r\nL’expérience, la sensation de jeu sont différentes\r\n\r\nDans 7 Wonders, on construit, on pose les fondations pour ensuite bâtir dessus. On est dans le bâtiment, le dur. Dans Paper Tales, entre pouvoirs et « vieillissement » des cartes, le jeu et la réflexion demandent un effort différent. Agilité. C’est le terme qui vient à l’esprit. Il va falloir se montrer extrêmement agile pour drafter, gérer son tour en cours et les prochains en anticipant la disparition de ses cartes. 1-2 tours en militaire. Et après?\r\n\r\nEt les illustrations, on en parle?\r\n\r\nOui\r\n\r\nLà aussi, un superbe boulot de l’illustratrice Christine Alcouffe aux illustrations très colorées, oniriques. Regardez son book, elle a de sérieuses compétences. Elle mériterait bien de signer une prochaine extension Dixit.', 'Dans Paper Tales, les joueurs tentent d\'écrire la plus belle légende pour leur Royaume au fil de deux siècles.', 'https://www.fnac.com/mp35792011/Paper-Tales-Version-francaise/w-4?omnsearchpos=1', 1),
('Mysterium', 35, 2, 18, 7, 'Ambiance', 'image/mysterium.jpg', 'Après plusieurs parties, Mysterium apparaît comme une belle réussite, à la fois accessible aux enfants comme aux adultes, mais suffisamment complexe pour représenter un certain niveau de difficulté — lequel peut être ajusté. Ainsi, plus on monte dans le niveau de difficulté, plus on doit placer de cartes suspects, lieux et objets sur le plateau afin d’étendre le nombre d’hypothèses possibles pour chaque piste. LA bonne idée du jeu réside dans les visions distribuées par le fantôme, qui permettront aux joueurs de projeter de manière assez libre leurs intuitions pour désigner les bonnes cartes. Abstraites et très joliment conçues, ces cartes n’en possèdent pas moins des symboles et des ambiances que l’on peut réellement assimiler aux cartes du plateau, même si certaines mains seront plus compliquées que d’autres. Du coup, si le côté Cluedo est bien présent, cette partie intuitive distingue véritablement le jeu de Libellud de ce best-seller. L’autre grande différence — en dehors de l’histoire et du plateau, qui participent grandement au charme de l’ensemble — étant que le joueur tenant le rôle du fantôme choisit lui-même l’identité du coupable parmi les différentes pistes attribuées à chacun des joueurs.\r\n\r\nDans le cas où vous enchaînez plusieurs parties à la suite, c’est donc l’assurance de faire face à des niveaux de difficulté différents en fonction du fantôme et d’éviter la répétition. En bonus, on peut accéder à une musique d’ambiance à télécharger en flashant un QR code avec son smartphone. Voilà donc un jeu de société à la fois original et convivial auquel on rejouera avec plaisir le week-end en famille ou lors des longues soirées entre amis !', 'Mysterium est un jeu d’enquête coopératif dans lequel tous les joueurs sont unis dans un même but : découvrir la vérité sur la mort du fantôme qui hante le manoir et lui apporter la paix !', 'https://www.fnac.com/Mysterium-Asmodee/a8732613/w-4?omnsearchpos=1', 2),
('Secrets', 20, 4, 14, 8, 'Stratégie', 'image/secrets.jpg', 'C\'est cette fameuse combinaison de bluff \"tu prends ou tu ne prends pas?\" et de dilemme qui fait tourner le jeu à merveille. De tour en tour, les choix des joueurs vous permettent de cerner leurs motivations et comprendre qui est ami avec qui, qui est dans votre camp, qui se la joue solo... Le nombre restreint de personnages différents permet d\'ailleurs de comprendre assez vite les tenants et aboutissants de chacun de ceux-ci.\r\n\r\nSecrets est un jeu qui se prend rapidement en main et procure rapidement des sensations: bluff, dilemme, calcul stratégiques, débats d\'influence... Méfiez-vous de chaque joueur, certains tentent de vous entourlouper!', 'Durant la guerre froide, vous dirigez une agence d’espions et devez recruter les meilleurs éléments. Trouvez vos équipiers, trompez vos ennemis et devenez l’agence la plus influente !', 'https://www.philibertnet.com/fr/repos-productions/52358-secrets-5425016921296.html?search_query=secrets&results=1194', 3),
('Citadelles', 22, 2, 17, 8, 'Stratégie', 'image/citadelles.png', 'Dans Citadelles, chaque joueur développe une cité pour la rendre la plus riche et la plus prestigieuse. A chaque tour de jeu, chaque joueur choisit le personnage qu\'il veut incarner. Les personnages peuvent collecter de l\'or, bâtir des quartiers, et exercer des pouvoirs particuliers tel que voler de l\'or, assassiner, subtiliser ou détruire des quartiers adverses... C\'est un jeu de \"double-guessing\", où chaque joueur doit à la fois prendre le personnage le plus bénéfique, et éviter d\'être victime d\'un personnage adverse. Après quelques tours de jeu, on se plonge dans l\'ambiance et dans l\'intrigue.  Au rayon des bonus, on trouve dix nouvelles cartes de personnages qui permettent de renouveler le jeu, ainsi que quatre nouveaux quartiers de prestige, aux propriétés bénéfiques pour le joueur qui le détient.  Auteur prolixe, Bruno Faidutti crée les jeux comme il les affectionne: simplicité, ambiance, interactivité, rebondissements, entorses aux règles (le roi de la carte événement!), et un soupçon de chance qui donne à chaque joueur la possibilité de gagner.', 'Bâtissez la plus belle des cités dans Citadelles. Dans ce classique du jeu de société, usez de stratégie, de bluff et de diplomatie et gérez efficacement vos pièces d\'or.', 'https://www.fnac.com/Citadelles-Asmodee-Nouvelle-Version/a9847548/w-4?omnsearchpos=2', 4),
('Smash up', 17, 2, 11, 4, 'Cartes', 'image/smash-up-vf.jpg', 'Smash Up porte bien son sous-titre « Le jeu de baston qui claque ». D’apparence chaotique et rigolard (les geeks et les grands enfants s’en donneront à cœur joie avec les factions farfelues du jeu), il peut s’avérer légèrement plus fin que ça si l’on prend le temps de faire quelques parties pour connaître l’ensemble des factions et ainsi réfléchir aux façons de les utiliser au mieux. Bénéficiant de règles ultra simples, Smash Up est également un jeu facile à sortir et accessible aux néophytes qui mettra à coup sûr de l’ambiance à votre tablée. Faites juste attention à ne pas jouer avec des gens trop susceptibles, certains retournements de situation risqueraient de les mettre de travers.', 'Qu\'est-ce que les aliens, les zombies, les magiciens et les robots ont en commun ? Ils veulent tous conquérir le monde ! Mais ils n\'y arriveront jamais seuls! alors ils forment des équipes.', 'https://www.fnac.com/Jeu-Iello-Smash-Up/a7633778/w-4?omnsearchpos=2', 5),
('Jenga', 20, 1, 12, 10, 'Adresse', 'image/jenga.jpg', 'Intemporel, le Jenga est un jeu malin, tout simple, compréhensible par tous, qui fait travailler beaucoup de compétences motrices et intellectuelles. Un peu bruyant, malgré ses qualités il faudra attendre la bonne occasion de le sortir en famille ou entre amis. Méfiez-vous des petits rigolos qui font EXPRES de faire s\'écrouler la tour !', 'Bâtissez la tour infernale ! Mais attention à la chute !', 'https://www.fnac.com/Jeu-de-societe-Hasbro-Jenga/a11475852/w-4?omnsearchpos=1', 6);

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
