-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Février 2016 à 16:05
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `philomatiqueunity`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `iduserspost` int(11) NOT NULL,
  `idprojet` int(11) NOT NULL,
  `comments` text CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `id_user` int(11) NOT NULL,
  `id_metier` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `metiers`
--

CREATE TABLE `metiers` (
  `section` enum('Français','Anglais','Arts plastiques','Broderie','Bureautique word/excel/access/powerpoint/libre office 2010','Cartonnage','Coupe modélisme','Couture','Couture Décoration Intérieure','Couture d’Ameublement','Dessin Artistique','Electricité','Encadrement art - initiation','Encadrement art - perfectionnement','Espagnol','Histoire de l''Art du Mobilier','Histoire de la mode et du costume','Installation Sanitaire','Installation Thermique','Menuiserie','Modélisme/coupe','Peinture acrylique','Peinture Artistique','Peinture Bâtiment','Peinture décorative','Peinture huile','Plomberie Sanitaire','Protection santé environnement','Réfection de Sièges','Réfection de sièges / préparation au CAP','Retouches/Customisation','Sculpture','Stylisme') CHARACTER SET latin1 NOT NULL,
  `id` int(11) NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `specialite` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `date_publish` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `role` enum('Admin','user') NOT NULL,
  `linkedin` varchar(255) CHARACTER SET latin1 NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `password`, `email`, `role`, `linkedin`, `photo`, `date_update`) VALUES
(1, 'fatou', 'diaby', '1234', 'defelite33160@gmail.com', 'user', '', '', '2016-02-16'),
(2, 'vincent', 'martinat', '1234', 'philo@vincentmartinat.com', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'https://media.licdn.com/media/p/5/000/295/0f0/3057ba8.jpg', '2016-02-16');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
