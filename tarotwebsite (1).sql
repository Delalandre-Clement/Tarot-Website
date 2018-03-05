-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 05 mars 2018 à 16:56
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tarotwebsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `chatpublic`
--

DROP TABLE IF EXISTS `chatpublic`;
CREATE TABLE IF NOT EXISTS `chatpublic` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant Message',
  `Pseudo` varchar(25) NOT NULL COMMENT 'Pseudo posteur',
  `Message` text NOT NULL COMMENT 'Message',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifiant Utilisateur',
  `Pseudo` varchar(20) NOT NULL COMMENT 'Pseudo utilisateur',
  `Genre` varchar(10) NOT NULL COMMENT 'Sexe de l''utilisateur',
  `Mail` varchar(50) NOT NULL COMMENT 'E-mail Utilisateur',
  `Password` varchar(50) NOT NULL COMMENT 'Mot de passe',
  `Region` varchar(10) NOT NULL COMMENT 'Region',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `Pseudo`, `Genre`, `Mail`, `Password`, `Region`) VALUES
(1, 'Clement', 'Homme', 'clementdelalandre@yahoo.f', 'Tarot76', 'Le Havre'),
(4, 'Alexi', 'Homme', 'alex@tarot.fr', 'Tarot76', 'Nice'),
(5, 'Florian', 'Homme', 'Flo@Tarot.com', 'Tarot76', 'Marseille'),
(6, 'Yanis', 'Homme', 'Yaya@Tarot.com', 'Tarot76', 'Frejus');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
