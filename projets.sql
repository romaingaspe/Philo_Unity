-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2016 at 10:06 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
