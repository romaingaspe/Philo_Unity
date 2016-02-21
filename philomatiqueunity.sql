-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Février 2016 à 10:24
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
CREATE DATABASE IF NOT EXISTS `philomatiqueunity` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `philomatiqueunity`;

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
-- Structure de la table `metiers`
--

CREATE TABLE `metiers` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `metiers`
--

INSERT INTO `metiers` (`id`, `section`, `alias`, `photo`, `description`) VALUES
(1, 'Broderie', 'broderie', 'https://s-media-cache-ak0.pinimg.com/236x/00/d3/46/00d346b41ec2537b6263598d61f41ca8.jpg', 'La broderie est un art de décoration des tissus qui consiste à ajouter sur un tissu un motif plat ou en relief fait de fils simples, parfois en intégrant des matériaux tels que paillettes, perles voire pierres précieuses.\r\n\r\nOn peut la diviser en trois grandes classes :\r\n\r\nmanuelle : faite à la main, au moyen d''une aiguille ou faite au crochet ;\r\nsemi-mécanique : à la machine ;\r\n mécanique : industrielle.'),
(16, 'Cartonnage', 'cartonnage', 'http://a404.idata.over-blog.com/3/65/36/70/Cartonnage-et-broderies--.Vos-realisations/DSC04762.JPG', 'La fabrication d''un objet en carton comporte les étapes suivantes :\r\n\r\nle tracé du patron comportant les lignes de découpe, de pliage et éventuellement les marques d''assemblage ;\r\nla spécification du carton de structure et de grammage adapté à l''objet envisagé et éventuellement son impression ;\r\nla découpe à l''aide d''outil de découpage ou d''une forme spécialisée (munie de filets coupants) et de marquage des plis (par rainage ou refoulage) ;\r\nle pliage et l''assemblage de l''objet.\r\nDans le cas d''une fabrication en grande série, une machine peut faire le découpage, le pliage-collage ou l''agrafage.'),
(17, 'Couture', 'couture', 'http://clubtissus.com/assets/img/bkgr/bg-accessoires-couture.jpg', 'Une couture est l''assemblage de deux ou plusieurs pièces à l''aide de fil à coudre, soit manuellement avec une aiguille, soit en utilisant une machine à coudre ou une surjeteuse. La couture est utilisée dans la fabrication des vêtements, du linge de maison (draps, mouchoirs, etc.), des éléments de décoration (nappes, rideaux, tentures, etc.), des chaussures, de la maroquinerie (bagages, sacs, etc.), etc. La première utilisation connue du mot daterait du xive siècle1.'),
(18, 'Menuiserie', 'menuiserie', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Kairouan_Great_Mosque_doors.jpg/240px-Kairouan_Great_Mosque_doors.jpg', 'La menuiserie, art et métier, est l''ensemble des techniques mises en œuvre pour construire des ouvrages de taille relativement petite (par opposition aux ouvrages de charpente) par la mise en forme et l''assemblage de menues pièces de bois1. Ces assemblages se font de largeur, de longueur ou en angle.'),
(19, 'Réfection de Sièges', 'refectionsieges', 'http://www.espacesorano.com/wp-content/uploads/2015/03/Photo-R%C3%A9fection-de-si%C3%A8ges-DR-Recadrage-site-990x460.jpg', 'Ici, vous apprendrez à restaurer vous-mêmes vos sièges, selon la méthode traditionnelle : pose de sangles, fixation des ressorts, mise en place du crin, des toiles de soutien, et, pour finir, du tissu de votre choix agrémenté ou non de clous dorés, de galons… Chaque élève travaille avec ses propres outils, soit sur un siège ancien à restaurer (tabouret, chaise ou fauteuil de tous styles), soit sur une structure en bois brut.'),
(20, 'Plomberie', 'plomberie', 'http://www.allo-plombier-paris2.fr/uploads/446/externe/originals/installation-evier.jpg', 'La plomberie est une spécialité de l''ingénieur en Mécanique appliquée au bâtiment et du plombier spécialisé, regroupant l''ensemble des techniques utilisées pour faire circuler des fluides (liquide ou gaz) à l''aide de tuyaux, tubes, vannes, robinets, soupapes, pompes aux différents points d''usage d''une installation. Le mot a pour origine le terme latin pour plomb (plumbum) et provient de l''utilisation de ce métal malléable pour réaliser les installations de plomberie au cours des siècles précédents.'),
(21, 'Stylisme', 'stylisme', 'http://uploads.cecilemancion.com/2010/10/collec_hiver08-09_1.jpg', 'Le stylisme est un métier de la mode consistant à imaginer et dessiner des modèles destinés au prêt-à-porter. La personne exerçant ce métier est appelée un ou une styliste. Le styliste est aussi appelé fashion designer designer de mode ou encore dessinateur(trice) de mode, car le mot « styliste » en anglais désigne un coiffeur.'),
(22, 'Webforce3', 'webforce', 'http://www.wf3.fr/wp-content/uploads/2015/03/DSC_00271.jpg', 'La Web@cadémie, c''est un peu la seconde chance pour des 18-25 ans qui ont claqué la porte de l''école avant le bac. \r\nBien sûr, il faut aimer l''informatique et les nouvelles technos, car l''école forme, en deux ans, des développeurs web en partenariat avec Epitech, une autre école d''informatique dont elle partage le campus et les enseignants. '),
(23, 'Electricité', 'electricite', 'http://www.ville-levallois.fr/wp-content/uploads/2014/09/electricit%C3%A9.jpg', 'L’électricité est l''effet du déplacement de particules chargées, à l’intérieur d''un « conducteur », sous l''effet d''une différence de potentiel aux extrémités de ce conducteur. Ce phénomène physique est présent dans de nombreux contextes : l''électricité constitue aussi bien l''influx nerveux des êtres vivants que les éclairs d''un orage. Elle est largement utilisée dans les sociétés développées pour transporter de grandes quantités d''énergie facilement utilisable.');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `caption1` varchar(80) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `caption2` varchar(80) NOT NULL,
  `photo3` varchar(255) NOT NULL,
  `caption3` varchar(80) NOT NULL,
  `photo4` varchar(255) NOT NULL,
  `caption4` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `date_publish` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_photos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `description`, `date_publish`, `id_user`, `id_photos`) VALUES
(1, 'VINCENT', '2016-02-18', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `confirmedToken` varchar(255) DEFAULT NULL,
  `dateConfirmedToken` datetime DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) NOT NULL,
  `role` enum('Admin','user') NOT NULL,
  `linkedin` varchar(255) CHARACTER SET latin1 NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date_update` date NOT NULL,
  `id_metier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `password`, `confirmedToken`, `dateConfirmedToken`, `email`, `description`, `role`, `linkedin`, `photo`, `date_update`, `id_metier`) VALUES
(1, 'fatou', 'diaby', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'defelite33160@gmail.com', '', 'user', '', '', '2016-02-16', 0),
(2, 'vincent', 'martinat', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', '', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'https://media.licdn.com/media/p/5/000/295/0f0/3057ba8.jpg', '2016-02-16', 0),
(3, 'vincent', 'martinat', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'https://media.licdn.com/media/p/5/000/295/0f0/3057ba8.jpg', '2016-02-16', 22);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `metiers`
--
ALTER TABLE `metiers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `metiers`
--
ALTER TABLE `metiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
