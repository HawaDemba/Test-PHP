-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 25 jan. 2021 à 09:23
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_base`
--

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

DROP TABLE IF EXISTS `voitures`;
CREATE TABLE IF NOT EXISTS `voitures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modele` varchar(255) DEFAULT NULL,
  `marque` varchar(255) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `matricule` int(50) NOT NULL,
  `descriptionV` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`id`, `modele`, `marque`, `couleur`, `matricule`, `descriptionV`) VALUES
(88, '  B?CNNC3', ' NNNN334', ' NNNNnn', 0, 'NNNbbn'),
(87, '  B?CNNC', ' NNNN ', ' NNNN', 0, 'NNN'),
(97, 'mustang', ' toyota', 'rouge', 0, 'Bienvenue voici votre commande '),
(98, 'bbncnc', 'bbbbb', 'noir', 123363, 'BONJOUR'),
(99, 'mustang', ' toyota', 'rouge', 102, 'BONJOUREVA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
