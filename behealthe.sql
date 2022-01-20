-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 20 jan. 2022 à 23:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `behealthe`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `id_capteur` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `nom` text NOT NULL,
  `données` int(11) NOT NULL,
  PRIMARY KEY (`id_capteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dataext`
--

DROP TABLE IF EXISTS `dataext`;
CREATE TABLE IF NOT EXISTS `dataext` (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `data` json NOT NULL,
  `source` text NOT NULL,
  PRIMARY KEY (`id_data`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `dateNaissance` date NOT NULL,
  `email` text NOT NULL,
  `mdp` text NOT NULL,
  `remarque` longtext,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(128) DEFAULT NULL,
  `gender` varchar(128) DEFAULT NULL,
  `pays` varchar(128) DEFAULT NULL,
  `postalCode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `is_admin`, `nom`, `prenom`, `dateNaissance`, `email`, `mdp`, `remarque`, `adresse`, `ville`, `gender`, `pays`, `postalCode`) VALUES
(1, 0, 'Alice', 'Dupont', '2004-01-01', 'test@test.com', 'motdepasse123', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, 'Doe', 'John', '2013-05-12', 'jonh1@doe.en', 'aze', 'j\'ai mon chapeau et ma pipe', '221 baker street', 'London', NULL, 'UK', 75000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
