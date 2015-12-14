-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 13 Avril 2014 à 23:05
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `table_search`
--

-- --------------------------------------------------------

--
-- Structure de la table `autosuggest`
--

CREATE TABLE IF NOT EXISTS `autosuggest` (
  `idindex` int(5) NOT NULL AUTO_INCREMENT,
  `words` varchar(250) NOT NULL,
  PRIMARY KEY (`idindex`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `autosuggest`
--

INSERT INTO `autosuggest` (`idindex`, `words`) VALUES
(1, 'lorem'),
(2, 'ipsum'),
(3, 'vestibulum'),
(4, 'semper'),
(5, 'dolor'),
(6, 'placerat');

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `search`
--

INSERT INTO `search` (`id`, `title`, `description`) VALUES
(1, 'Title 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(2, 'Title 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(3, 'Title 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(4, 'Title 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(5, 'Title 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(6, 'Title 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(7, 'Title 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(8, 'Title 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(9, 'Title 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(10, 'Title 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(11, 'Title 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(12, 'Title 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(13, 'Title 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(14, 'Title 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.'),
(15, 'Title 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum arcu orci, in convallis arcu tincidunt ultrices. Donec semper laoreet dui, id venenatis tortor viverra et. Vestibulum semper ullamcorper mauris at rhoncus. Donec placerat, nisi vitae lacinia mattis, nunc nibh fringilla risus, in varius risus dui vitae sapien.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
