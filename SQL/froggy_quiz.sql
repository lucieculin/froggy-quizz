-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 jan. 2023 à 13:42
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `froggy_quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL,
  `question_id` int NOT NULL,
  `is_true` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_answer_questions` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id`, `answer`, `question_id`, `is_true`) VALUES
(1, 'Des Serpents  ', 1, 0),
(2, 'Des Oiseaux', 1, 0),
(3, 'Des Guêpes', 1, 1),
(4, 'Des Loups ', 1, 0),
(5, 'Provençal   ', 2, 0),
(6, 'Perciflette', 2, 1),
(7, 'Ducon', 2, 0),
(8, 'Gros faisan', 2, 0),
(9, 'Elle apprend des poèmes sur la nature ', 3, 0),
(10, 'Elle mange de la patte d’amende', 3, 0),
(11, 'Elle pisse par la fenêtre', 3, 1),
(12, 'Elle devient con comme une chaise', 3, 0),
(13, 'Les Combats', 4, 0),
(14, 'La neige', 4, 1),
(15, 'Sa femme', 4, 0),
(16, 'Le Graal', 4, 0),
(17, 'C’est Sans Alcool', 5, 0),
(18, 'A cause des vieux qui tapent sur des bouts de bois', 5, 0),
(19, 'Car il est nul pour faire des blagues   ', 5, 1),
(20, 'Car c’est un week-end thématique et c’est trop long', 5, 0),
(21, 'Car il s’agit d’une promesse faite à sa femme', 6, 0),
(22, 'Car celui qui lui fera manger de la soupe n’est pas encore né', 6, 1),
(23, 'Car il a peur de la petite souris', 6, 0),
(24, 'Car il est chevalier', 6, 0),
(25, 'Les rognons de veau', 7, 1),
(26, 'La langue de boeuf', 7, 0),
(27, 'La Cuisse De Poulet', 7, 0),
(28, 'Les côtelettes d\'agneau', 7, 0),
(29, 'Arrêtez de m\'emmerder', 8, 0),
(30, 'Zuuuuuuut', 8, 0),
(31, 'Non merci', 8, 0),
(32, 'Merde', 8, 1),
(33, 'D’avoir 30 ou 50 artichauts ', 9, 0),
(34, 'Jouer avec des cartes', 9, 0),
(35, 'Doubler sa mise', 9, 0),
(36, 'Les valeurs', 9, 1),
(37, 'Un clafoutis', 10, 0),
(38, 'Un marron', 10, 0),
(39, 'Apprendre le druidisme', 10, 0),
(40, 'Une part de clafoutis', 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `quiz_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `question`, `quiz_id`) VALUES
(1, 'De quoi a peur Yvain?', 6),
(2, 'Comment appelait-on Perceval dans sa jeunesse, ce qui le faisait pleurer ?', 6),
(3, 'Que fait la reine quand elle a trop bu ?', 6),
(4, 'A cause de quoi Bohort déprime t’il toujours ?', 6),
(5, 'Pourquoi Merlin ne veux t’il pas aller au rassemblement du corbeau ?', 6),
(6, 'Pourquoi Karadoc entretient avec un grand soin son hygiène dentaire ?', 6),
(7, 'Quel est le plat préféré de Genièvre ?', 6),
(8, 'Quelle est la réponse qui colle avec tout ?', 6),
(9, 'Qu’est ce qui compte le plus dans le jeux du Sirop ?', 6),
(10, 'A quoi pense Merlin ?', 6);

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `theme_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_quiz_themes` (`theme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `theme_id`) VALUES
(1, 'Harry Potter', 1),
(2, 'Star wars', 1),
(3, 'Le seigneur des anneaux', 1),
(4, 'Films', 1),
(5, 'Malcolm', 2),
(6, 'Kaamelott', 2),
(7, 'Game of thrones', 2),
(8, 'Séries', 2),
(9, 'Club dorothee', 3),
(10, 'One piece', 4),
(11, 'Naruto', 4),
(12, 'Dragon ball Z', 4),
(69, 'Disney', 3),
(70, 'Warner Bros', 3),
(71, 'Dessins Animés', 3),
(72, 'Nintendo', 5),
(73, 'Jeux rétro', 5),
(74, 'Jeux indépendants', 5),
(75, 'Jeux vidéo', 5),
(76, 'Culture pub', 6),
(77, 'Culture musicale', 6),
(78, 'Culture stars', 6),
(79, 'Culture', 6);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id` int NOT NULL AUTO_INCREMENT,
  `score` int NOT NULL,
  `added_at` datetime NOT NULL,
  `user_id` int NOT NULL,
  `question_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_score_users` (`user_id`),
  KEY `fk_score_questions` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `themes`;
CREATE TABLE IF NOT EXISTS `themes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `themes` (`id`, `name`) VALUES
(1, 'Film'),
(2, 'Série'),
(3, 'Déssin animé'),
(4, 'Animé'),
(5, 'Jeu vidéo'),
(6, 'Culture');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `score_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_score` (`score_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_answer_questions` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `fk_quiz_themes` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`);

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `fk_score_questions` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `fk_score_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_score` FOREIGN KEY (`score_id`) REFERENCES `score` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
