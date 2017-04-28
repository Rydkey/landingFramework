-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 28 Avril 2017 à 14:58
-- Version du serveur :  5.7.17-0ubuntu0.16.04.2
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `landingFramework`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `opt_mail` tinyint(1) DEFAULT NULL,
  `opt_nom` tinyint(1) DEFAULT NULL,
  `opt_prenom` tinyint(1) DEFAULT NULL,
  `opt_numeroAdresse` tinyint(1) DEFAULT NULL,
  `opt_voieAdresse` tinyint(1) DEFAULT NULL,
  `opt_codePostal` tinyint(1) DEFAULT NULL,
  `opt_ville` tinyint(1) DEFAULT NULL,
  `opt_entreprise` tinyint(1) DEFAULT NULL,
  `opt_opt_in` tinyint(1) DEFAULT NULL,
  `opt_telephone` tinyint(4) DEFAULT NULL,
  `opt_message` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `opt_mail`, `opt_nom`, `opt_prenom`, `opt_numeroAdresse`, `opt_voieAdresse`, `opt_codePostal`, `opt_ville`, `opt_entreprise`, `opt_opt_in`, `opt_telephone`, `opt_message`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
