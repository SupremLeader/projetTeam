-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Décembre 2015 à 16:19
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetteam`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL,
  `departement_id` int(11) NOT NULL,
  `cp_annonce` int(5) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `email_annonce` varchar(150) NOT NULL,
  `tel_annonce` varchar(10) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `texte` text NOT NULL,
  `prix` int(11) NOT NULL,
  `photo1` varchar(200) NOT NULL,
  `photo2` varchar(200) NOT NULL,
  `photo3` varchar(200) NOT NULL,
  `date_post` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `departement_id`, `cp_annonce`, `pseudo`, `email_annonce`, `tel_annonce`, `titre`, `texte`, `prix`, `photo1`, `photo2`, `photo3`, `date_post`) VALUES
(15, 27, 27200, 'Huichan', 'duchaine.kouassi@hotmail.fr', '0658037889', 'Vente Mangas', 'Je vends la série compléte Death Note;', 50, 'Sfondo-Death-Note1.jpg', 'death_note___caratula_dvd_by_makareno-d2zdo5t.jpg', '2uh1gu8.jpg', '0000-00-00'),
(16, 28, 28000, 'Yoan', 'terterter@lol.fr', '0648037889', 'Vente Jambono', 'Du bon JB;', 1500, 'jambon1.jpg', 'jambon2.jpg', 'jambon3.jpg', '0000-00-00'),
(17, 29, 29000, 'Pacual', 'pascual@p.fr', '0608037889', 'Vente Informatique', 'Vends ordianateur Asus AG.14520.LOL.', 1800, '04988040-photo-transformer-pad-serie-300.jpg', '07344884-photo-asus-chromebook-c200.jpg', '03041046-photo-asus-n71.png', '0000-00-00'),
(18, 78, 78000, 'Quentin', 'quentin@hotmail.fr', '0648521589', 'Telephone Iphone 6', 'Vends Iphone 6 NEUF;', 400000, 'iphone6.jpg', 'maxresdefault.jpg', 'iphone-6-plus-reachability.jpg', '0000-00-00'),
(19, 78, 28000, 'Devis', 'devis@gmail.fr', '0648037841', 'Vente de Livre Tolkien', 'Je vends la série compléte le Hobbit;', 1300, 'hobbitlibroportada1.jpg', '9780345538376.jpg', 'lord_of_the_rings_book_cover_by_mrstingyjr-d5vwgct.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `annonces_tags`
--

CREATE TABLE IF NOT EXISTS `annonces_tags` (
  `annonce_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `annonces_vendeurs`
--

CREATE TABLE IF NOT EXISTS `annonces_vendeurs` (
  `annonce_id` int(11) NOT NULL,
  `vendeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `correctindex`
--

CREATE TABLE IF NOT EXISTS `correctindex` (
  `idWord` int(10) NOT NULL,
  `word` varchar(200) NOT NULL,
  `metaphone` varchar(200) NOT NULL,
  `soundex` varchar(200) NOT NULL,
  `theme` varchar(200) NOT NULL,
  `coefficient` float(4,1) NOT NULL DEFAULT '1.0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `correctindex`
--

INSERT INTO `correctindex` (`idWord`, `word`, `metaphone`, `soundex`, `theme`, `coefficient`) VALUES
(1, 'lorem', 'LRM', 'L650', '', 1.0),
(2, 'ipsum', 'IPSM', 'I125', '', 1.0),
(3, 'dolor', 'TLR', 'D460', '', 1.0),
(4, 'amet', 'AMT', 'A530', '', 1.0),
(5, 'sit', 'ST', 'S300', '', 1.0);

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `departement_id` int(11) NOT NULL,
  `departement_code` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `departement_nom_uppercase` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `departements`
--

INSERT INTO `departements` (`departement_id`, `departement_code`, `departement_nom`, `departement_nom_uppercase`) VALUES
(1, '01', 'Ain', 'AIN'),
(2, '02', 'Aisne', 'AISNE'),
(3, '03', 'Allier', 'ALLIER'),
(5, '05', 'Hautes-Alpes', 'HAUTES-ALPES'),
(4, '04', 'Alpes-de-Haute-Provence', 'ALPES-DE-HAUTE-PROVENCE'),
(6, '06', 'Alpes-Maritimes', 'ALPES-MARITIMES'),
(7, '07', 'Ardèche', 'ARDÈCHE'),
(8, '08', 'Ardennes', 'ARDENNES'),
(9, '09', 'Ariège', 'ARIÈGE'),
(10, '10', 'Aube', 'AUBE'),
(11, '11', 'Aude', 'AUDE'),
(12, '12', 'Aveyron', 'AVEYRON'),
(13, '13', 'Bouches-du-Rhône', 'BOUCHES-DU-RHÔNE'),
(14, '14', 'Calvados', 'CALVADOS'),
(15, '15', 'Cantal', 'CANTAL'),
(16, '16', 'Charente', 'CHARENTE'),
(17, '17', 'Charente-Maritime', 'CHARENTE-MARITIME'),
(18, '18', 'Cher', 'CHER'),
(19, '19', 'Corrèze', 'CORRÈZE'),
(20, '2a', 'Corse-du-sud', 'CORSE-DU-SUD'),
(21, '2b', 'Haute-corse', 'HAUTE-CORSE'),
(22, '21', 'Côte-d''or', 'CÔTE-D''OR'),
(23, '22', 'Côtes-d''armor', 'CÔTES-D''ARMOR'),
(24, '23', 'Creuse', 'CREUSE'),
(25, '24', 'Dordogne', 'DORDOGNE'),
(26, '25', 'Doubs', 'DOUBS'),
(27, '26', 'Drôme', 'DRÔME'),
(28, '27', 'Eure', 'EURE'),
(29, '28', 'Eure-et-Loir', 'EURE-ET-LOIR'),
(30, '29', 'Finistère', 'FINISTÈRE'),
(31, '30', 'Gard', 'GARD'),
(32, '31', 'Haute-Garonne', 'HAUTE-GARONNE'),
(33, '32', 'Gers', 'GERS'),
(34, '33', 'Gironde', 'GIRONDE'),
(35, '34', 'Hérault', 'HÉRAULT'),
(36, '35', 'Ile-et-Vilaine', 'ILE-ET-VILAINE'),
(37, '36', 'Indre', 'INDRE'),
(38, '37', 'Indre-et-Loire', 'INDRE-ET-LOIRE'),
(39, '38', 'Isère', 'ISÈRE'),
(40, '39', 'Jura', 'JURA'),
(41, '40', 'Landes', 'LANDES'),
(42, '41', 'Loir-et-Cher', 'LOIR-ET-CHER'),
(43, '42', 'Loire', 'LOIRE'),
(44, '43', 'Haute-Loire', 'HAUTE-LOIRE'),
(45, '44', 'Loire-Atlantique', 'LOIRE-ATLANTIQUE'),
(46, '45', 'Loiret', 'LOIRET'),
(47, '46', 'Lot', 'LOT'),
(48, '47', 'Lot-et-Garonne', 'LOT-ET-GARONNE'),
(49, '48', 'Lozère', 'LOZÈRE'),
(50, '49', 'Maine-et-Loire', 'MAINE-ET-LOIRE'),
(51, '50', 'Manche', 'MANCHE'),
(52, '51', 'Marne', 'MARNE'),
(53, '52', 'Haute-Marne', 'HAUTE-MARNE'),
(54, '53', 'Mayenne', 'MAYENNE'),
(55, '54', 'Meurthe-et-Moselle', 'MEURTHE-ET-MOSELLE'),
(56, '55', 'Meuse', 'MEUSE'),
(57, '56', 'Morbihan', 'MORBIHAN'),
(58, '57', 'Moselle', 'MOSELLE'),
(59, '58', 'Nièvre', 'NIÈVRE'),
(60, '59', 'Nord', 'NORD'),
(61, '60', 'Oise', 'OISE'),
(62, '61', 'Orne', 'ORNE'),
(63, '62', 'Pas-de-Calais', 'PAS-DE-CALAIS'),
(64, '63', 'Puy-de-Dôme', 'PUY-DE-DÔME'),
(65, '64', 'Pyrénées-Atlantiques', 'PYRÉNÉES-ATLANTIQUES'),
(66, '65', 'Hautes-Pyrénées', 'HAUTES-PYRÉNÉES'),
(67, '66', 'Pyrénées-Orientales', 'PYRÉNÉES-ORIENTALES'),
(68, '67', 'Bas-Rhin', 'BAS-RHIN'),
(69, '68', 'Haut-Rhin', 'HAUT-RHIN'),
(70, '69', 'Rhône', 'RHÔNE'),
(71, '70', 'Haute-Saône', 'HAUTE-SAÔNE'),
(72, '71', 'Saône-et-Loire', 'SAÔNE-ET-LOIRE'),
(73, '72', 'Sarthe', 'SARTHE'),
(74, '73', 'Savoie', 'SAVOIE'),
(75, '74', 'Haute-Savoie', 'HAUTE-SAVOIE'),
(76, '75', 'Paris', 'PARIS'),
(77, '76', 'Seine-Maritime', 'SEINE-MARITIME'),
(78, '77', 'Seine-et-Marne', 'SEINE-ET-MARNE'),
(79, '78', 'Yvelines', 'YVELINES'),
(80, '79', 'Deux-Sèvres', 'DEUX-SÈVRES'),
(81, '80', 'Somme', 'SOMME'),
(82, '81', 'Tarn', 'TARN'),
(83, '82', 'Tarn-et-Garonne', 'TARN-ET-GARONNE'),
(84, '83', 'Var', 'VAR'),
(85, '84', 'Vaucluse', 'VAUCLUSE'),
(86, '85', 'Vendée', 'VENDÉE'),
(87, '86', 'Vienne', 'VIENNE'),
(88, '87', 'Haute-Vienne', 'HAUTE-VIENNE'),
(89, '88', 'Vosges', 'VOSGES'),
(90, '89', 'Yonne', 'YONNE'),
(91, '90', 'Territoire de Belfort', 'TERRITOIRE DE BELFORT'),
(92, '91', 'Essonne', 'ESSONNE'),
(93, '92', 'Hauts-de-Seine', 'HAUTS-DE-SEINE'),
(94, '93', 'Seine-Saint-Denis', 'SEINE-SAINT-DENIS'),
(95, '94', 'Val-de-Marne', 'VAL-DE-MARNE'),
(96, '95', 'Val-d''oise', 'VAL-D''OISE'),
(97, '976', 'Mayotte', 'MAYOTTE'),
(98, '971', 'Guadeloupe', 'GUADELOUPE'),
(99, '973', 'Guyane', 'GUYANE'),
(100, '972', 'Martinique', 'MARTINIQUE'),
(101, '974', 'Réunion', 'RÉUNION');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL,
  `dvd` varchar(50) NOT NULL,
  `livre` varchar(50) NOT NULL,
  `voiture` varchar(50) NOT NULL,
  `jouet` varchar(50) NOT NULL,
  `maison` varchar(50) NOT NULL,
  `appartement` varchar(50) NOT NULL,
  `bateau` varchar(50) NOT NULL,
  `outil` varchar(50) NOT NULL,
  `vetement` varchar(50) NOT NULL,
  `informatique` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vendeurs`
--

CREATE TABLE IF NOT EXISTS `vendeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vendeurs`
--

INSERT INTO `vendeurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `adresse`, `cp`, `ville`, `tel`) VALUES
(1, 'Kouassi', 'Duchaîne', 'duchaine.kouassi@hotmail.fr', '$2y$10$Cb3RJMh8IzjJ9N2JDpYxlu4JeudP6a8GcO9vCYgkAD0UQMpJ.H2oq', '13 chemin des valmeux', '27200', 'vernon', '06');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `correctindex`
--
ALTER TABLE `correctindex`
  ADD PRIMARY KEY (`idWord`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`departement_id`),
  ADD KEY `departement_code` (`departement_code`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vendeurs`
--
ALTER TABLE `vendeurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `correctindex`
--
ALTER TABLE `correctindex`
  MODIFY `idWord` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `departement_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vendeurs`
--
ALTER TABLE `vendeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
