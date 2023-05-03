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


-- Listage de la structure de la base pour cuisi_mix
CREATE DATABASE IF NOT EXISTS `cuisi_mix` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cuisi_mix`;

-- Listage de la structure de table cuisi_mix. comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL DEFAULT '0',
  `author` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table cuisi_mix.comments : ~5 rows (environ)
DELETE FROM `comments`;
INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
	(1, 1, 'Loquito', 'Mama mia !', '2023-04-18 00:00:00'),
	(2, 2, 'Guillermo', 'Oh cabron !', '2023-04-18 00:00:00'),
	(3, 3, 'Domino', 'Me encantan estos buñuelos de calamar', '2023-04-19 00:00:00'),
	(4, 4, 'Paquita', 'Guillermo tu me mata', '2023-04-20 00:00:00'),
	(5, 5, 'Loquito', 'El gusto de Napoli', '2023-04-21 00:00:00');

-- Listage de la structure de table cuisi_mix. posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `author` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table cuisi_mix.posts : ~5 rows (environ)
DELETE FROM `posts`;
INSERT INTO `posts` (`id`, `title`, `content`, `author`, `creation_date`) VALUES
	(1, 'Boquerones', '1 : Lavez anchois \r\n2 : Placez les sur une grille', 'paquita.calientita@exemple.com', '2023-04-18 22:00:00'),
	(2, 'Gambas', '1 : Décortiquez les gambas\r\n2 : Faites les grillers...', 'loquitodelaluna@exemple.com', '2023-04-19 22:00:00'),
	(3, 'Calamares', '1 : Préparez la pâte à beignets\r\n2 : Trempez les calamares...', 'dominofall@exemple.com', '2023-04-20 22:00:00'),
	(4, 'Guiso', '1 : Faites tremper les haricots \r\n2 : Émincez l\'oignon', 'guillermo@exemple.com', '2023-04-21 22:00:00'),
	(5, 'Pizza margarita', '1 : Préparez la pâte\r\n2 : Garnir la pizza', 'freaky.fennec@exemple.com', '2023-04-22 22:00:00');

-- Listage de la structure de table cuisi_mix. users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `age` int NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table cuisi_mix.users : ~0 rows (environ)
DELETE FROM `users`;
INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `age`, `password`, `user_id`) VALUES
	(1, 'Paquita', 'Calientita', 'paquita.calientita@exemple.com', 23, 'aaa', 1),
	(2, 'Loquito', 'De La Luna', 'loquito.delaluna@exemple.com', 26, 'aaa', 2),
	(3, 'Domino', 'Fall', 'domino.fall@exemple.com', 18, 'aaa', 3),
	(4, 'Freaky', 'Fennec', 'freak.fennec@exemple.com', 25, 'frfe', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
