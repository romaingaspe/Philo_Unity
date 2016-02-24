-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2016 at 05:24 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `philomatiqueunity`
--
CREATE DATABASE IF NOT EXISTS `philomatiqueunity` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `philomatiqueunity`;

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `iduserspost` int(11) NOT NULL,
  `idprojet` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `iduserspost`, `idprojet`, `titre`, `comments`, `date`) VALUES
(1, 1, 2, 'je teste de nouveau', 'hislhboùùrwobipvo^qùwshmyvsi lw:m\r\n', '2016-02-24 11:10:06'),
(2, 1, 2, 'je teste de nouveau', 'hislhboùùrwobipvo^qùwshmyvsi lw:m\r\n', '2016-02-24 11:20:23'),
(3, 1, 2, '3eme commentaire', '3 eme texte du 3eme commentaire', '2016-02-24 11:24:20'),
(4, 1, 2, '3eme commentaire', '3 eme texte du 3eme commentaire', '2016-02-24 11:39:16'),
(5, 1, 2, '3eme commentaire', '3 eme texte du 3eme commentaire', '2016-02-24 11:40:12'),
(17, 1, 2, 'try again', 'That''s Fat not Vince !!', '2016-02-24 14:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `metiers`
--

CREATE TABLE `metiers` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `metiers`
--

INSERT INTO `metiers` (`id`, `section`, `alias`, `photo`, `description`) VALUES
(1, 'Broderie', 'broderie', 'https://s-media-cache-ak0.pinimg.com/236x/00/d3/46/00d346b41ec2537b6263598d61f41ca8.jpg', 'La broderie est un art de d?coration des tissus qui consiste ? ajouter sur un tissu un motif plat ou en relief fait de fils simples, parfois en int?grant des mat?riaux tels que paillettes, perles voire pierres pr?cieuses.\r\n\r\nOn peut la diviser en trois grandes classes :\r\n\r\nmanuelle : faite ? la main, au moyen d''une aiguille ou faite au crochet ;\r\nsemi-m?canique : ? la machine ;\r\n m?canique : industrielle.'),
(16, 'Cartonnage', 'cartonnage', 'http://a404.idata.over-blog.com/3/65/36/70/Cartonnage-et-broderies--.Vos-realisations/DSC04762.JPG', 'La fabrication d''un objet en carton comporte les ?tapes suivantes :\r\n\r\nle trac? du patron comportant les lignes de d?coupe, de pliage et ?ventuellement les marques d''assemblage ;\r\nla sp?cification du carton de structure et de grammage adapt? ? l''objet envisag? et ?ventuellement son impression ;\r\nla d?coupe ? l''aide d''outil de d?coupage ou d''une forme sp?cialis?e (munie de filets coupants) et de marquage des plis (par rainage ou refoulage) ;\r\nle pliage et l''assemblage de l''objet.\r\nDans le cas d''une fabrication en grande s?rie, une machine peut faire le d?coupage, le pliage-collage ou l''agrafage.'),
(17, 'Couture', 'couture', 'http://clubtissus.com/assets/img/bkgr/bg-accessoires-couture.jpg', 'Une couture est l''assemblage de deux ou plusieurs pi?ces ? l''aide de fil ? coudre, soit manuellement avec une aiguille, soit en utilisant une machine ? coudre ou une surjeteuse. La couture est utilis?e dans la fabrication des v?tements, du linge de maison (draps, mouchoirs, etc.), des ?l?ments de d?coration (nappes, rideaux, tentures, etc.), des chaussures, de la maroquinerie (bagages, sacs, etc.), etc. La premi?re utilisation connue du mot daterait du xive si?cle1.'),
(18, 'Menuiserie', 'menuiserie', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Kairouan_Great_Mosque_doors.jpg/240px-Kairouan_Great_Mosque_doors.jpg', 'La menuiserie, art et m?tier, est l''ensemble des techniques mises en ?uvre pour construire des ouvrages de taille relativement petite (par opposition aux ouvrages de charpente) par la mise en forme et l''assemblage de menues pi?ces de bois1. Ces assemblages se font de largeur, de longueur ou en angle.'),
(19, 'Réfection de Sièges', 'refectionsieges', 'http://www.espacesorano.com/wp-content/uploads/2015/03/Photo-R%C3%A9fection-de-si%C3%A8ges-DR-Recadrage-site-990x460.jpg', 'Ici, vous apprendrez ? restaurer vous-m?mes vos si?ges, selon la m?thode traditionnelle : pose de sangles, fixation des ressorts, mise en place du crin, des toiles de soutien, et, pour finir, du tissu de votre choix agr?ment? ou non de clous dor?s, de galons? Chaque ?l?ve travaille avec ses propres outils, soit sur un si?ge ancien ? restaurer (tabouret, chaise ou fauteuil de tous styles), soit sur une structure en bois brut.'),
(20, 'Plomberie', 'plomberie', 'http://www.allo-plombier-paris2.fr/uploads/446/externe/originals/installation-evier.jpg', 'La plomberie est une sp?cialit? de l''ing?nieur en M?canique appliqu?e au b?timent et du plombier sp?cialis?, regroupant l''ensemble des techniques utilis?es pour faire circuler des fluides (liquide ou gaz) ? l''aide de tuyaux, tubes, vannes, robinets, soupapes, pompes aux diff?rents points d''usage d''une installation. Le mot a pour origine le terme latin pour plomb (plumbum) et provient de l''utilisation de ce m?tal mall?able pour r?aliser les installations de plomberie au cours des si?cles pr?c?dents.'),
(21, 'Stylisme', 'stylisme', 'http://uploads.cecilemancion.com/2010/10/collec_hiver08-09_1.jpg', 'Le stylisme est un m?tier de la mode consistant ? imaginer et dessiner des mod?les destin?s au pr?t-?-porter. La personne exer?ant ce m?tier est appel?e un ou une styliste. Le styliste est aussi appel? fashion designer designer de mode ou encore dessinateur(trice) de mode, car le mot ? styliste ? en anglais d?signe un coiffeur.'),
(22, 'Webforce3', 'webforce', 'http://www.wf3.fr/wp-content/uploads/2015/03/DSC_00271.jpg', 'La Web@cad?mie, c''est un peu la seconde chance pour des 18-25 ans qui ont claqu? la porte de l''?cole avant le bac. \r\nBien s?r, il faut aimer l''informatique et les nouvelles technos, car l''?cole forme, en deux ans, des d?veloppeurs web en partenariat avec Epitech, une autre ?cole d''informatique dont elle partage le campus et les enseignants. '),
(23, 'Electricité', 'electricite', 'http://www.ville-levallois.fr/wp-content/uploads/2014/09/electricit%C3%A9.jpg', 'L??lectricit? est l''effet du d?placement de particules charg?es, ? l?int?rieur d''un ? conducteur ?, sous l''effet d''une diff?rence de potentiel aux extr?mit?s de ce conducteur. Ce ph?nom?ne physique est pr?sent dans de nombreux contextes : l''?lectricit? constitue aussi bien l''influx nerveux des ?tres vivants que les ?clairs d''un orage. Elle est largement utilis?e dans les soci?t?s d?velopp?es pour transporter de grandes quantit?s d''?nergie facilement utilisable.');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `caption` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `id_projet`, `photo`, `caption`) VALUES
(1, 2, 'http://blog.gaborit-d.com/wp-content/uploads/2014/01/Sculpture-by-Matt-Buckley-11.jpg', 'Sculpture aigle'),
(2, 3, 'http://erikdemaine.org/curved/Wedge/400.jpg', 'curved'),
(3, 4, 'http://maison3.advcdn.net/images/medias/000/031/000031299/600.jpg', 'Sable cubique'),
(4, 5, 'https://c1.staticflickr.com/7/6059/6338461990_7828cf326e_b.jpg', 'Uké simple'),
(5, 6, 'http://ekladata.com/GZUu4Bc4-dLV8K4j--v9b_VyltY.jpg', 'Le tracteur bleu'),
(6, 7, 'http://www.jolpress.com/sites/default/files/styles/article_content_big/public/field/image/picasso.jpg?itok=mAMwgjHr', 'Les copines'),
(7, 8, 'http://estunart.fr/wp-content/uploads/2016/01/box-eco-orgasme-300x300.jpg', 'Post-it ecommandements'),
(8, 2, 'http://www.stoneartanddesign.com/sculpture-pierre/img/sculpture6.jpg', 'La lune se lève'),
(9, 2, 'http://www.sculpturesdelabaie.com/wp-content/uploads/2011/08/nuesculpturepierredecaen.jpg', 'elle s''endort');

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `project_title` varchar(155) NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `date_publish` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `project_title`, `description`, `date_publish`, `id_user`) VALUES
(1, 'Moi', 'VINCENT', '2016-02-18', 2),
(2, 'D''art d''art', 'Sculpture sur pierre\r\n\r\nIncroyable et généreuse création,sculpté dans la pierre ces œuvres seront vous porter dans leurs aventures ou histoires...\r\nPrenez garde à votre imagination, elle pourrait vous transporter loin dans ce visionnage ...\r\nBon c''était pour créer du contenu !\r\n\r\nLa sculpture sur pierre est une technique particulière de sculpture en ce qu''elle désigne un mode de fabrication d''une œuvre différente du modelage en argile ou en fonte. Le terme ne doit pas être confondu avec l''activité des tailleurs de pierre qui façonnent des blocs de pierre destinés à la sculpture mais aussi à l''architecture, le bâtiment ou le génie civil. C''est aussi une expression utilisée par les archéologues, les historiens et anthropologues pour décrire la fabrication des pétroglyphe.', '2016-02-21', 1),
(3, 'Pliage à l''étalage', 'Origami un monde qui se créé et n''arrêtera pas de grandir.\r\nL''origami (origami de oru, plier, et de kami, papier) est le nom japonais de l''art du pliage du papier. Le terme chinois est zhézh?. On reconnait en chinois les deux kanji japonais qui sont en réalité des caractères chinois. L''origami est l''art de plier le papier pour obtenir une forme représentant une réalité (animaux, personnages, fleurs, objets, etc.) Si, en Asie, cet art vient de Chine, ce sont les japonais qui sont devenus les maîtres en la matière. C''est une des raisons qui fait que nous connaissons l''art du pliage du papier par un terme japonais ORIGAMI à la place du terme chinois.', '2016-02-20', 1),
(4, 'Text title', 'A la plage ou dans un bac à sable, la sculpture de sable fait travailler la créativité des petits et des grands. Si un château de sable basique se réalise en quelques minutes, il existe plusieurs techniques pour construire des structures plus ambitieuses.', '2016-02-13', 1),
(5, 'Mélodie du bonheur', 'L''ukulélé est un instrument à cordes pincées traditionnel des îles Hawaï, proche du cavaquinho portugais dont il est une adaptation.\r\n\r\nSouvent bon marché et à la mode dans la première moitié du xxe siècle, ce petit instrument polyvalent composante indispensable d’un orchestre hawaïen fut rapidement adopté par divers courants musicaux – de la chanson populaire au jazz – parfois parce qu’il apportait une dimension humoristique ou exotique à un ensemble.', '2016-02-18', 1),
(6, 'Ma passion du tracteur', 'Ma passion pour les tracteurs a commencé à l''âde de 4 ans. Dés que j''ai eu mon premier tracteur je me suis senti investi d''un grand rôle: CONQUÉRIR LES TRACTEURS DU MON ENTIER !!\r\nJe me suis lancé dans ma propre industrie de tracteur, je prévois d''ouvrir un musée, ''le grand musée des tracteurs du monde entier''\r\nVoici ma collection de tracteurs !!\r\n\r\nLaissez moi des messages, des bisous !!\r\n', '2016-02-21', 2),
(7, 'Magnifique', 'Une œuvre d’art, ou un objet d''art, est un objet ou une création artistique ou esthétique. C''est généralement un élément fait par un artiste.\r\n\r\nEn particulier, un chef-d''œuvre était anciennement la preuve de l''excellence que devait présenter le compagnon pour être promu à la maîtrise dans sa corporation.\r\n\r\nJe vous laisse ma collection d''oeuvre d''art en autocollant !\r\nDisponible également en poster, pour plus d''infos me contacter !\r\n\r\nAu plaisir !', '2016-02-17', 2),
(8, 'Cobayes pour la vie', 'Le regroupement d’associations Générations Cobayes continue sa campagne de prévention santé à destination… de tous. Leur slogan : « pour que l’on puisse tous continuer à se faire du bien sans se faire du mal ». Bienvenue dans le monde de l’éco-orgasme.\r\nPour la Saint-Valentin, découvrez les 7 commandements de l’éco-orgasme\r\nLa Saint-Valentin approche et si on les magasins se frottent les mains, ici nous resteront très concrets, en partageant avec vous ce « Petit manuel à l’intention de tous ceux qui aiment se faire plaisir sans se faire mal« .\r\nCertes l’amour, ce sont les petites attentions, les petites joies, les moments partagés, mais parfois, ne nous leurrons pas, cela termine sous la couette (ou dans le foin, hein) (ça pique un peu mais chacun son truc). Et là, là pour notre santé nous ne faisons pas forcément ce qu’il faut.\r\n\r\nEn savoir plus sur http://www.consoglobe.com/eco-orgasme-sexe-sante-cg#X7ELMfgXruqyGsK3.99', '2016-02-16', 2),
(9, 'Ce qui me parle', 'Une œuvre d’art, ou un objet d''art, est un objet ou une création artistique ou esthétique. C''est généralement un élément fait par un artiste.\r\n\r\nEn particulier, un chef-d''œuvre était anciennement la preuve de l''excellence que devait présenter le compagnon pour être promu à la maîtrise dans sa corporation.\r\n\r\nJe vous laisse ma collection d''oeuvre d''art en autocollant !\r\nDisponible également en poster, pour plus d''infos me contacter !\r\n\r\nAu plaisir !', '2016-02-17', 2),
(10, 'Une oeuvre qui me parle', 'Une œuvre d’art, ou un objet d''art, est un objet ou une création artistique ou esthétique. C''est généralement un élément fait par un artiste.\r\n\r\nEn particulier, un chef-d''œuvre était anciennement la preuve de l''excellence que devait présenter le compagnon pour être promu à la maîtrise dans sa corporation.\r\n\r\nJe vous laisse ma collection d''oeuvre d''art en autocollant !\r\nDisponible également en poster, pour plus d''infos me contacter !\r\n\r\nAu plaisir !', '2016-02-17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `password`, `confirmedToken`, `dateConfirmedToken`, `email`, `description`, `role`, `linkedin`, `photo`, `date_update`, `id_metier`) VALUES
(1, 'fatou', 'diaby', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', '243fb297f6653444bc874ffdc97944ab', '2016-02-28 00:00:00', 'fatou.chance@gmail.com', 'La vie est belle les oiseaux chante,le feu ça brûle et l''eau ça mouille !!', 'user', '', 'http://mediaafrik.com/wp-content/uploads/2013/09/LA-REINE-DE-MERO%C3%A9-La-Candace-Amanishakh%C3%A9to.jpg', '2016-02-16', 1),
(2, 'vincent', 'martinat', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', '', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'https://media.licdn.com/media/p/5/000/295/0f0/3057ba8.jpg', '2016-02-16', 0),
(3, 'vincent', 'martinat', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'https://media.licdn.com/media/p/5/000/295/0f0/3057ba8.jpg', '2016-02-16', 22),
(4, 'vincent2', 'martinat2', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'http://lorempixel.com/g/400/400/', '2016-02-17', 22),
(5, 'vincent3', 'martinat3', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'http://lorempixel.com/g/400/400/', '2016-02-20', 22),
(6, 'vincent5', 'martinat5', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'http://lorempixel.com/g/400/400/', '2016-02-18', 22),
(7, 'vincent4', 'martinat4', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'http://lorempixel.com/g/400/400/', '2016-02-16', 22),
(8, 'vincent6', 'martinat6', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'http://lorempixel.com/g/400/400/', '2016-02-16', 22),
(9, 'vincent7', 'martinat7', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'http://lorempixel.com/g/400/400/', '2016-02-16', 22),
(10, 'vincent8', 'martinat8', '$2y$10$dzKBPRYascgFbbD2TMsdNeIlDN4INRpHsC3iiapf2AmNlUeKpuuCe', NULL, NULL, 'philo@vincentmartinat.com', 'Bonjour je m''appelle Vincent, j''aime les assos !', 'Admin', 'https://www.linkedin.com/in/vincentmartinat', 'http://lorempixel.com/g/400/400/', '2016-02-19', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metiers`
--
ALTER TABLE `metiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `metiers`
--
ALTER TABLE `metiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
