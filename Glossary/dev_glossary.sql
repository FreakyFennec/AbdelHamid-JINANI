-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour dev_tools
CREATE DATABASE IF NOT EXISTS `dev_tools` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dev_tools`;

-- Listage de la structure de table dev_tools. dev_glossary
CREATE TABLE IF NOT EXISTS `dev_glossary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `signification` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `definition` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table dev_tools.dev_glossary : ~28 rows (environ)
DELETE FROM `dev_glossary`;
INSERT INTO `dev_glossary` (`id`, `name`, `signification`, `definition`, `type`, `category`) VALUES
	(1, 'API', 'Application Programming Interface', 'C\'est un ensemble normalisé de classes, de méthodes, de fonctions et de constantes qui sert de façade par laquelle un logiciel offre des services à d\'autres logiciels.', 'Acronyme', 'API'),
	(2, 'HTML', 'HyperText Markup Language', 'Le HyperText Markup Language, généralement abrégé HTML ou, dans sa dernière version, HTML5, est le langage de balisage conçu pour représenter les pages web', 'Sigle', 'HTML'),
	(3, 'ATS', 'Applicant Tracking System', 'Système pour la recherche et séléction de candidats.', 'Sigle', 'Gestion'),
	(4, 'RSS', 'Really Simple Syndication', 'Format de données pour la syndication de contenu web.', 'Sigle', 'Syndication de contenu'),
	(5, 'UI', 'User Interface', 'Espace d\'interaction entre l\'homme et la machine.', 'Acronyme', 'Web Design'),
	(6, 'ESP', 'Email Service Provider', 'Service pour la gestion des campagnes email.', 'Sigle', 'Marketing Digital'),
	(7, 'MOOC', 'MOOC', 'Massive Online Open Course, ensemble de cours en ligne disponible pour tous.', 'Acronyme', 'Formation'),
	(8, 'FTP', 'File Transfer Protol', 'Protocol de communication pour échanger des fichiers sur un réseau.', 'Sible', 'Réseau'),
	(9, 'SaaS', 'Software as a Service', 'Technologie qui permet d\'utiliser des applications dun fournisseur sur un réseau.', 'Acronyme', 'Logiciel'),
	(10, 'ISP', 'Internet Service Provider', 'Fournisseur d\'accès internet (FAI).', 'Sigle', 'Internet'),
	(11, 'SQL', 'Structured Query Language', 'Un des plus anciens langage de programmation informatique pour bases de données relationnelles.', 'Acronyme', 'SQL'),
	(12, 'HATEOAS', 'Hypermedia As The Engine of Application State', 'HATEOAS, abréviation d\'Hypermedia As The Engine of Application State, constitue une contrainte de l\'architecture d\'application REST qui la distingue de la plupart des autres architectures d\'applications réseau', 'Sigle', 'Réseau'),
	(13, 'CRUD', 'Create, Read, Update and Delete', 'C\'est les quatres opérations pour le stockages des données dans une bdd. On peut aussi rencontrer le terme avec un S devant pour Search.', 'Sigle', 'SQL'),
	(14, 'PHP', 'PHP: Hypertext Preprocessor', 'Langage de programmation pour produite des pages web dynamiqje. Peut fonctionner comme langage interprété en local. Il est orenté objet.', 'Sigle', 'PHP'),
	(15, 'DPO', 'Data Protection Officer', 'personne en charge de la protection des données à caractère personnel au sein des organismes publics ou privés.', 'Sigle', ''),
	(16, 'DOM', 'Document Object Model', 'une interface de programmation normalisée par le W3C, qui permet à des scripts d\'examiner et de modifier le contenu du navigateur web', 'Acronyme', 'HTML'),
	(17, 'Pixel', 'Picture Element', 'Un pixel est un élément de l\'image.', 'Acronyme', 'Image'),
	(18, 'CTR', 'Click-Through Rate', 'C\'est le "Taux de clics". Le CTR représente le pourcentage de personnes qui cliquent sur un lien ou une annonce après l\'avoir vu.', 'Sigle', 'Marketing Digital'),
	(19, 'REST', 'Representational State Transfer', 'style d\'architecture logicielle définissant un ensemble de contraintes à utiliser pour créer des services web. Les services web conformes au style d\'architecture REST, aussi appelés services web RESTful, établissent une interopérabilité entre les ordinateurs sur Internet.', 'Acronyme', 'API'),
	(20, 'CLI', 'Commande Line Interface', 'Interface textuelle qui traite les commandes vers un programme informatique.', 'Acronyme', NULL),
	(21, 'MySQL ', 'Système de gestion de bdd', 'Système de gestion de bdd relationnelles (SGBDR) utilsant le langage de programation SQL.', 'Acronyme', NULL),
	(22, 'GNU', 'GNU\'s Not Unix', 'C\'est un système d\'exploitation composé avec des logiciels libres issus d\'autres noyaux. (Linux)', 'Acronyme', NULL),
	(23, 'SEO', 'Search Engine Optimization', 'Optimisation pour les moteurs de recherche. Techniques pour améliorer le positionnement dans le résultat d\'un moteur de recherche', 'Acronyme', NULL),
	(24, 'SLACK', 'Searchable Log of All Conversation and Knowledge', 'Accessibilité à toutes les conversations et connaissances.\r\nSlack est une application de messagerie pour les entreprises qui connecte les personnes aux informations dont elles ont besoin.', 'Acronyme', NULL),
	(25, 'SERP', 'Search Engine Result Page', 'C\'est la page qui est générée par le moteur de recherche suite à une requête de la part de l\'internaute.', 'Acronyme', NULL),
	(26, 'SEA', 'Search Engine Advertising', 'C\'est le référencement payant. Diffusion d\'annonces ciblées dans les résutats de recherches. Contrairement au SEO c\'est pour du court terme.', 'Acronyme', NULL),
	(27, 'Crawling', 'Extraire, évaluer', 'Processus utilisé par les bots pour analyser les mots des pages web.', 'Acronyme', NULL),
	(28, 'SXO', 'Search eXperience Optimisation', 'C\'est la combinaison du SEO et du UX. L\'expérience utilisateur est davantage prise en compte pour l\'optimisation du site. Cela devient de plus en plus important.', 'Sigle', NULL),
	(29, 'CMP', 'Consent Management Plateform', 'Plateforme de gestion du consentement qui permet aux éditeurs de sites web de mettre en place une interface de recueil du consentement des utiliateurs.', 'Sigle', NULL),
	(30, 'HTTP', 'Hypertext Transfer Protocol', 'Protocole de communication client-serveur utilisé pour transférer des données sur le web. Il est principalement utilisé pour récupérer des ressources, telles que des pages web, des images et des fichiers, à partir de serveurs web.', 'Sigle', NULL),
	(31, 'CSS', 'Cascade Style Sheet', 'Les feuilles de style en cascade, généralement appelées CSS de l\'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML. Les standards définissant CSS sont publiés par le World Wide Web Consortium', 'Sigle', 'CSS'),
	(32, 'display ', ' définit le mode d\'affichage d\'un élément', 'Propriété CSS qui permet de définir le mode d\'affichage d\'un élément HTML. Plusieurs valeurs possibles pour la propriété display, telles que block, inline, inline-block, flex, grid, table, table-cell, etc.', 'Propriété', 'CSS'),
	(33, 'JS', 'JavaScript', 'est un langage de programmation qui permet de créer du contenu mis à jour de façon dynamique, de contrôler le contenu multimédia, d\'animer des images, et tout ce à quoi on peut penser.', 'Sigle', 'JS'),
	(34, 'aria', 'Accessible Rich Internet Applications', 'Attributs HTML qui permettent de fournir des informations au technologies d\'assistance, pour les personnes ayant des handicaps', 'Attribut', 'CSS'),
	(35, '! ', 'Indique qu\'une instruction est une instruction de type "marqueur d\'instruction"', ' le point d\'exclamation dans <!DOCTYPE> indique que cette instruction est une instruction de traitement et est utilisé pour spécifier le type de document HTML ou XML que la page utilise.', 'Sigle', 'HTML'),
	(36, '!DOCTYPE html', ' le doctype est le préambule requis en haut de tous les documents.', 'Il garantit que le navigateur fait de son mieux pour suivre les spécifications pertinentes, plutôt que d\'utiliser un mode de rendu différent incompatible avec certaines spécifications.', 'Balise', 'HTML');

-- Listage de la structure de table dev_tools. user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'user',
  `banish` tinyint(1) NOT NULL DEFAULT '0',
  `registerDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table dev_tools.user : ~1 rows (environ)
DELETE FROM `user`;
INSERT INTO `user` (`id_user`, `firstName`, `lastName`, `email`, `pseudo`, `password`, `status`, `banish`, `registerDate`) VALUES
	(1, 'El Freaky', 'Fennec', 'freaky@fennec.com', 'freefennec', 'azert', 'admin', 0, '2023-04-09 06:50:38');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
