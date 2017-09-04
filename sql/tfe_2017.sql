-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Septembre 2017 à 18:40
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tfe_2017`
--

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `Reference` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `idUtilisateur` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `composition_sandwich`
--

CREATE TABLE `composition_sandwich` (
  `idSandwich` int(11) NOT NULL,
  `idIngredient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `idFacture` int(11) NOT NULL,
  `Reference` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `idUtilisateur` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `idIngredient` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Price` double NOT NULL DEFAULT '0',
  `Amount` int(11) NOT NULL DEFAULT '0',
  `idType_Ingredient` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ingredient`
--

INSERT INTO `ingredient` (`idIngredient`, `Name`, `Price`, `Amount`, `idType_Ingredient`) VALUES
(1, 'Pain blanc', 0, 0, 1),
(2, 'Pain gris', 0, 0, 1),
(3, 'Pain de campagne', 0, 0, 1),
(7, 'Jambon', 0, 0, 3),
(8, 'Fromage', 0, 0, 3),
(9, 'Américain', 0, 0, 3),
(10, 'Crabe', 0, 0, 3),
(11, 'Jambon', 0, 0, 3),
(12, 'Fromage', 0, 0, 3),
(13, 'Américain', 0, 0, 3),
(14, 'Crabe', 0, 0, 3),
(15, 'Beurre', 0, 0, 7),
(16, 'Mayonnaise', 0, 0, 7),
(17, 'Ketchup', 0, 0, 7),
(18, 'Andalouse', 0, 0, 7),
(19, 'BBQ', 0, 0, 7),
(20, 'Beurre', 0, 0, 7),
(21, 'Mayonnaise', 0, 0, 7),
(22, 'Ketchup', 0, 0, 7),
(23, 'Andalouse', 0, 0, 7),
(24, 'BBQ', 0, 0, 7),
(25, 'Tomates', 0, 0, 8),
(26, 'Carottes', 0, 0, 8),
(27, 'Oeufs', 0, 0, 8),
(28, 'Celeri', 0, 0, 8),
(29, 'Jambon/Fromage', 0, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `idLigne_Commande` int(11) NOT NULL,
  `Id_Ingredient` int(11) NOT NULL,
  `Price` double DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `idCommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_facture`
--

CREATE TABLE `ligne_facture` (
  `idLigne_Commande` int(11) NOT NULL,
  `Id_Ingredient` int(11) NOT NULL,
  `Price` double DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `idFacture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sandwich`
--

CREATE TABLE `sandwich` (
  `idSandwich` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Price` double NOT NULL DEFAULT '0',
  `Amount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sandwich`
--

INSERT INTO `sandwich` (`idSandwich`, `Name`, `Price`, `Amount`) VALUES
(1, 'Jambon-Fromage', 0, 0),
(2, 'Jambon', 0, 0),
(3, 'Fromage', 0, 0),
(4, 'USA', 0, 0),
(5, 'Crabe', 0, 0),
(6, 'Jambon-Fromage', 0, 0),
(7, 'Jambon', 0, 0),
(8, 'Fromage', 0, 0),
(9, 'USA', 0, 0),
(10, 'Crabe', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `statut_commande`
--

CREATE TABLE `statut_commande` (
  `idStatut_Commande_Type` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `statut_commande_type`
--

CREATE TABLE `statut_commande_type` (
  `idStatut_Commande_Type` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `statut_commande_type`
--

INSERT INTO `statut_commande_type` (`idStatut_Commande_Type`, `Name`) VALUES
(1, 'Réceptionnée'),
(2, 'En cours'),
(3, 'Prête'),
(4, 'Livrée'),
(5, 'Annulée'),
(6, 'Réceptionnée'),
(7, 'En cours'),
(8, 'Prête'),
(9, 'Livrée'),
(10, 'Annulée');

-- --------------------------------------------------------

--
-- Structure de la table `type_ingredient`
--

CREATE TABLE `type_ingredient` (
  `idType_Ingredient` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_ingredient`
--

INSERT INTO `type_ingredient` (`idType_Ingredient`, `Name`) VALUES
(1, 'Pain'),
(3, 'Garniture Principale'),
(4, 'Garniture Secondaire'),
(7, 'Sauce'),
(8, 'Crudités'),
(9, 'Sauce');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`,`Reference`);

--
-- Index pour la table `composition_sandwich`
--
ALTER TABLE `composition_sandwich`
  ADD PRIMARY KEY (`idSandwich`,`idIngredient`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idFacture`,`Reference`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`idIngredient`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`idLigne_Commande`,`Id_Ingredient`,`idCommande`);

--
-- Index pour la table `ligne_facture`
--
ALTER TABLE `ligne_facture`
  ADD PRIMARY KEY (`idLigne_Commande`,`Id_Ingredient`,`idFacture`);

--
-- Index pour la table `sandwich`
--
ALTER TABLE `sandwich`
  ADD PRIMARY KEY (`idSandwich`);

--
-- Index pour la table `statut_commande`
--
ALTER TABLE `statut_commande`
  ADD PRIMARY KEY (`idStatut_Commande_Type`,`idCommande`),
  ADD UNIQUE KEY `idCommande_UNIQUE` (`idCommande`);

--
-- Index pour la table `statut_commande_type`
--
ALTER TABLE `statut_commande_type`
  ADD PRIMARY KEY (`idStatut_Commande_Type`);

--
-- Index pour la table `type_ingredient`
--
ALTER TABLE `type_ingredient`
  ADD PRIMARY KEY (`idType_Ingredient`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`,`Email`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `idIngredient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `idLigne_Commande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ligne_facture`
--
ALTER TABLE `ligne_facture`
  MODIFY `idLigne_Commande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sandwich`
--
ALTER TABLE `sandwich`
  MODIFY `idSandwich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `statut_commande_type`
--
ALTER TABLE `statut_commande_type`
  MODIFY `idStatut_Commande_Type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `type_ingredient`
--
ALTER TABLE `type_ingredient`
  MODIFY `idType_Ingredient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
