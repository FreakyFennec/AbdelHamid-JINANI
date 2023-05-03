-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour forum_dwwm3
CREATE DATABASE IF NOT EXISTS `forum_dwwm3` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `forum_dwwm3`;

-- Listage de la structure de la table forum_dwwm3. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table forum_dwwm3.categorie : ~10 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
	(1, 'Epicerie'),
	(2, 'Conserves'),
	(3, 'Boissons'),
	(4, 'Produits laitiers'),
	(5, 'Légumes secs'),
	(6, 'Droguerie'),
	(7, 'Boulangerie'),
	(8, 'Boucherie'),
	(9, 'Légumes'),
	(10, 'Fruits'),
	(11, 'Hygiène et beauté');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table forum_dwwm3. post
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `datePost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table forum_dwwm3.post : ~16 rows (environ)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id_post`, `text`, `datePost`, `user_id`, `topic_id`) VALUES
	(1, 'La harissa', '2023-01-23 11:38:08', 2, 1),
	(2, 'Les pois chiches', '2023-01-24 14:09:16', 4, 2),
	(3, 'Les fèves', '2023-01-24 15:07:03', 4, 2),
	(4, 'Le St Marcellin', '2023-01-26 10:04:39', 4, 3),
	(5, 'Les lentilles', '2023-01-26 14:26:45', 2, 2),
	(6, 'Les lentilles', '2023-01-26 14:27:16', 2, 2),
	(7, 'Les haricots rouges', '2023-01-26 14:29:55', 2, 2),
	(8, 'Les cornichons', '2023-01-26 14:33:35', 2, 1),
	(9, 'Les croissants', '2023-01-26 14:55:29', 2, 4),
	(10, 'Les pains complets', '2023-01-26 16:34:59', 4, 5),
	(11, 'Les haricots', '2023-02-06 09:29:22', NULL, 7),
	(12, 'Les maïs', '2023-02-06 09:30:21', NULL, 7),
	(13, 'Les tomates', '2023-02-06 09:32:39', NULL, 7),
	(14, 'Le savon de Marseille', '2023-02-06 14:06:43', 4, 8),
	(15, 'test', '2023-02-06 15:10:15', NULL, 9),
	(16, 'Test post', '2023-02-06 15:10:53', NULL, 9),
	(17, 'Le savon d&#039;Alep', '2023-02-06 16:13:46', 7, 8);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Listage de la structure de la table forum_dwwm3. topic
CREATE TABLE IF NOT EXISTS `topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `categorie_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_topic`),
  KEY `membre_id` (`user_id`),
  KEY `categorie_id` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table forum_dwwm3.topic : ~9 rows (environ)
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` (`id_topic`, `title`, `creationdate`, `closed`, `categorie_id`, `user_id`) VALUES
	(1, 'Les condiments', '2023-01-23 11:36:02', 1, 1, 4),
	(2, 'Les légumes secs', '2023-01-24 10:42:32', 1, 5, 2),
	(3, 'Les fromages', '2023-01-26 10:02:28', 1, 4, NULL),
	(4, 'Les viennoiseries', '2023-01-26 14:59:34', 1, 7, 2),
	(5, 'Les pains', '2023-01-26 16:29:36', 0, 7, 4),
	(6, 'Les brioches', '2023-01-26 16:34:59', 0, 7, 2),
	(7, 'Les conserves', '2023-02-06 09:29:22', 0, 7, 2),
	(8, 'Hygiène corporelle', '2023-02-06 14:06:43', 0, 7, 4),
	(9, 'test micka', '2023-02-06 15:10:15', 0, 7, 4);
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;

-- Listage de la structure de la table forum_dwwm3. user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'user',
  `banish` tinyint(1) NOT NULL DEFAULT '0',
  `registerdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table forum_dwwm3.user : ~2 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `email`, `pseudo`, `password`, `status`, `banish`, `registerdate`) VALUES
	(2, 'paquit@lacora.com', 'PaquitaLacora', '0lAp@quItQ7al:-)', 'user', 0, '2023-02-06 11:34:22'),
	(4, 'elbonod@uto.com', 'ElbonoDeUto', '$2y$10$t6anq8NxM29I1toqEWDpB.aAEYkFiUXkkA2EynPVhbfzXygCh0nUi', 'admin', 0, '2023-02-06 11:34:22'),
	(7, 'Mazer@ti.com', 'Enzo', '$2y$10$DqpP.wZ6Az.j.6Ga6yXWEu4rqFlp7ejWPoxoOc2XZxsCr9VfGfc.C', 'user', 0, '2023-02-06 16:06:54');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
