-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 déc. 2022 à 18:01
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int(11) NOT NULL,
  `objet` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id_blog`, `objet`, `description`, `date`, `image`) VALUES
(35, 'Red Dead Redemption', 'it\'s a very good game', '2022-04-19', 'images/red dead.jpg'),

(40, 'Halloweeeen', 'halllooo', '2022-04-16', 'images/Jack-o\'-Lantern_2003-10-31.jpg'),





--
-- Structure de la table `commentaireblog`
--

CREATE TABLE `commentaireblog` (
  `idCommentaire` int(11) NOT NULL,
  `dateC` varchar(50) DEFAULT NULL,
  `contenuC` varchar(100) NOT NULL,
  `id_blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaireblog`
--

INSERT INTO `commentaireblog` (`idCommentaire`, `dateC`, `contenuC`, `id_blog`) VALUES
(54, NULL, 'woow', 35),
(70, NULL, 'tres bien', 42),
(71, NULL, 'bien', 40),
(72, NULL, 'i like it ', 39),
(73, NULL, 'test', 38),
(77, NULL, 'test', 46);

-- --------------------------------------------------------

--
-- Structure de la table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `id_blog`, `id_user`) VALUES
(16, 46, 4);

-- --------------------------------------------------------

--
-- Structure de la table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `views`
--

INSERT INTO `views` (`id`, `id_blog`, `id_user`) VALUES
(32, 46, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`);

--

-- Index pour la table `commentaireblog`
--
ALTER TABLE `commentaireblog`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `FK` (`id_blog`);

--
-- Index pour la table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--

-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--

-- Index pour la table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--

-- AUTO_INCREMENT pour la table `commentaireblog`
--
ALTER TABLE `commentaireblog`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--

-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--


-- AUTO_INCREMENT pour la table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--


-- Contraintes pour la table `commentaireblog`
--
ALTER TABLE `commentaireblog`
  ADD CONSTRAINT `FK` FOREIGN KEY (`id_blog`) REFERENCES `blogs` (`id_blog`);

--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
