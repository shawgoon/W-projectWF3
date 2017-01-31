-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 31 Janvier 2017 à 16:19
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_soutenance`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `avis`
--

INSERT INTO `avis` (`id`, `message`, `firstname`, `name`, `user_id`) VALUES
(1, 'mon mdp est "apollo"', 'alban', 'havard', 1),
(2, 'mon mdp est "jesuistank"', 'altaïr', 'lebrut', 2),
(3, 'mon mdp est "dugland"', 'glandu', 'duchock', 3),
(4, 'mon message s insert dans la BDD', 'alban', 'havard', 1),
(5, 'ça va marché !\r\n', 'alban', 'havard', 1),
(9, 'je suis un bourin', 'altaïr', 'lebrut', 2),
(16, 'j\'ai été c\'est la mère michel', 'DK', 'shawgoon', 4),
(17, 'j\'ai été c\'est la mère michel', 'DK', 'shawgoon', 4);

-- --------------------------------------------------------

--
-- Structure de la table `grad`
--

CREATE TABLE `grad` (
  `id` int(11) NOT NULL,
  `grad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `grad`
--

INSERT INTO `grad` (`id`, `grad`) VALUES
(1, 'customer'),
(2, 'drivers'),
(3, 'admin'),
(4, 'master');

-- --------------------------------------------------------

--
-- Structure de la table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `position`
--

INSERT INTO `position` (`id`, `longitude`, `latitude`, `date`) VALUES
(1, 1.13725, 49.881, '2017-01-31 10:27:01'),
(2, 1.13726, 49.881, '2017-01-31 10:59:24'),
(3, 1.13723, 49.8809, '2017-01-31 02:56:20');

-- --------------------------------------------------------

--
-- Structure de la table `renseignements`
--

CREATE TABLE `renseignements` (
  `id` int(11) NOT NULL,
  `choice` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `numberphone` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `renseignements`
--

INSERT INTO `renseignements` (`id`, `choice`, `name`, `firstname`, `email`, `numberphone`, `message`) VALUES
(1, 'Devis', 'havard', 'alban', 'alban.havard@aliceadsl.fr', '0620197240', 'nhgd;,kuydk,sfwnb,k;fui'),
(2, 'Devis', 'havard', 'alban', 'alban.havard@aliceadsl.fr', '0620197240', 'nhgd;,kuydk,sfwnb,k;fui'),
(3, 'Devis', 'havard', 'alban', 'alban.havard@aliceadsl.fr', '0620197240', 'nhgd;,kuydk,sfwnb,k;fui'),
(4, 'Devis', 'havard', 'alban', 'alban.havard@aliceadsl.fr', '0620197240', 'nhgd;,kuydk,sfwnb,k;fui'),
(5, 'Devis', 'havard', 'alban', 'alban.havard@aliceadsl.fr', '0620197240', 'nhgd;,kuydk,sfwnb,k;fui'),
(6, 'Devis', 'havard', 'alban', 'alban.havard@aliceadsl.fr', '0620197240', 'nhgd;,kuydk,sfwnb,k;fui');

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `choice` varchar(20) NOT NULL,
  `street_start` varchar(255) NOT NULL,
  `town_zip_start` varchar(255) NOT NULL,
  `date_start` datetime NOT NULL,
  `street_end` varchar(255) NOT NULL,
  `town_zip_end` varchar(255) NOT NULL,
  `date_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `trajet`
--

INSERT INTO `trajet` (`id`, `user_id`, `choice`, `street_start`, `town_zip_start`, `date_start`, `street_end`, `town_zip_end`, `date_end`) VALUES
(2, 3, 'Reserver', 'lieu-dit "Les Marquets"', 'Douvrend', '2017-01-29 11:00:00', 'rue de la sale tronche', 'mocq', '2017-01-29 11:30:00'),
(3, 1, 'Reserver', 'reu du trou de balle', 'monq', '2017-01-31 15:00:00', 'rue de la sale tronche', 'mocq', '2017-01-31 15:15:00'),
(4, 1, 'Reserver', 'reu du trou de balle', 'monq', '2017-01-31 15:00:00', 'rue de la sale tronche', 'mocq', '2017-01-31 15:15:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `numberphone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `grad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `numberphone`, `email`, `password`, `grad_id`) VALUES
(1, 'havard', 'alban', '0620197240', 'alban.havard@aliceadsl.fr', '$2y$10$6W4Zt58Lrsb6D35B2Kh.meqmxEOlLgdddlaKi6eBgAmI9.mR./wH2', 4),
(2, 'Lebrut', 'Altaïr', '0235841014', 'grosbourin@battle.net', '$2y$10$PipqOyM/A6wEC0cxcr.gmOYY484xP5OzqKJbkZ68sqRf6OjnqneZy', 2),
(3, 'duchnok', 'glandu', '0699005588', 'tetedenoeud@gmail.com', '$2y$10$4tjhFQM.aknk4CsZDpsHrusdZZsYfdGaJm0W4mxRm987kW9a/whya', 1),
(4, 'Michel', 'la mère', '0899001012', 'lameremichel@quiaperdusonchat.fr', '$2y$10$js4vNQ627ZmPIkfJprVx7OrW0ncuIENKzx01ZbjqS8QeAv6lkberi', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`user_id`);

--
-- Index pour la table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `renseignements`
--
ALTER TABLE `renseignements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `grad` (`grad_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `renseignements`
--
ALTER TABLE `renseignements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `trajet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`grad_id`) REFERENCES `grad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
