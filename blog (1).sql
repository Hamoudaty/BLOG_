-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 jan. 2021 à 18:55
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ida` int(11) NOT NULL,
  `Titre` varchar(25) NOT NULL,
  `Date` datetime NOT NULL,
  `commentaire` text NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`ida`),
  UNIQUE KEY `ida` (`ida`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ida`, `Titre`, `Date`, `commentaire`, `Photo`, `username`) VALUES
(10, 'mon blog', '2021-01-07 16:46:08', 'aloooooooooooooooooooooooo', 'IMG_3081.JPG', 'hamouda04'),
(50, 'Hamouda', '2021-01-07 16:51:32', 'aaaa ouiiii zaaamaaa', 'IMG_3084.JPG', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ida` int(11) NOT NULL,
  `commentaires` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ida` (`ida`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `ida`, `commentaires`, `username`) VALUES
(8, 10, 'eyyyyyyyyy baba', ''),
(9, 10, 'llllllllllllllllllllll', ''),
(10, 10, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', ''),
(11, 50, 'heeeeeeeeey baba', ''),
(12, 50, 'aloooooooo wineeeeeeeeeek', ''),
(13, 50, 'leeeeeeeeeeeeeeeeeeeee', ''),
(14, 50, 'wahdiii wallah', ''),
(15, 10, 'llllllllllllllll', ''),
(16, 50, 'aaaaaaaaaaaa', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Idco` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`Idco`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`Idco`, `username`, `description`) VALUES
(1, 'hamouda', 'wiouuuuuuuuuuuuu'),
(2, '07244896', 'aloooooooooooooooooooooo'),
(3, 'hamouda04', 'ppppppppppppppppp'),
(4, 'hamouda04', 'entttttttttty\r\n'),
(5, '07244896', 'yyyyyyyyyyyyyyyyy'),
(6, '07244896', 'nnnnnnnnnjjjjjjjjjjjj');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `Idp` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `Date_naiss` date NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`Idp`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`Idp`, `nom`, `prenom`, `Date_naiss`, `pwd`, `username`) VALUES
(17, 'hamouda', 'mejri', '2020-06-23', 'azerty', 'hamouda04'),
(18, 'hamouda', 'othman', '2000-09-29', '1234567890', '07244896'),
(19, 'hamouda', 'mejri', '2000-09-29', '0000000000', 'kazlala7050'),
(20, 'amine', 'othman', '1999-05-29', '11111111', 'wiou04'),
(21, 'mejri', 'ala', '1998-07-29', 'wxcvbn123', '26424251'),
(22, 'hiba', 'akrem', '1996-07-14', '123456789', 'azizos01'),
(23, 'hiba', 'ines', '2002-11-14', '147258369', 'aloalo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
