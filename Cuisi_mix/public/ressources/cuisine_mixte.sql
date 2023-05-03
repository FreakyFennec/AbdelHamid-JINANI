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


-- Listage de la structure de la base pour cuisine_mixte
CREATE DATABASE IF NOT EXISTS `cuisine_mixte` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cuisine_mixte`;

-- Listage de la structure de table cuisine_mixte. comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id_com` int NOT NULL AUTO_INCREMENT,
  `recipe` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `title_com` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `created_at` date NOT NULL,
  `ranking` int NOT NULL DEFAULT '0',
  `recipe_com` text COLLATE utf8mb4_bin NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_com`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table cuisine_mixte.comments : ~1 rows (environ)
DELETE FROM `comments`;
INSERT INTO `comments` (`id_com`, `recipe`, `title_com`, `created_at`, `ranking`, `recipe_com`, `user_id`) VALUES
	(1, 'Boqueronnnes', 'Boqueronnes', '2023-04-18', 0, 'Mama mia !', 2);

-- Listage de la structure de table cuisine_mixte. recipes
CREATE TABLE IF NOT EXISTS `recipes` (
  `id_recipe` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `recipe` text COLLATE utf8mb4_bin NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `is_enabled` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_recipe`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table cuisine_mixte.recipes : ~5 rows (environ)
DELETE FROM `recipes`;
INSERT INTO `recipes` (`id_recipe`, `title`, `recipe`, `author`, `is_enabled`) VALUES
	(1, 'Boquerones', 'Etape 1 : anchois, Etape2 : ...', 'paquita.calientita@exemple.com', 1),
	(2, 'Gambas', 'Etape 1 : Gambas, Etape2 : ...', 'loquitodelaluna@exemple.com', 1),
	(3, 'Calamares', 'Etape 1 : Gambas, Etape2 : ...', 'dominofall@exemple.com', 1),
	(4, 'Guiso', 'Etape 1 : Gambas, Etape2 : ...', 'guillermo@exemple.com', 0),
	(5, 'Pizza margarita', '1:Préparez la pâte\r\n2:Garnir la pizza', 'freaky.fennec@exemple.com', 1);

-- Listage de la structure de table cuisine_mixte. users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `age` int NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Listage des données de la table cuisine_mixte.users : ~4 rows (environ)
DELETE FROM `users`;
INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `age`, `password`, `user_id`) VALUES
	(1, 'Paquita', 'Calientita', 'paquita.calientita@exemple.com', 23, 'aaa', 0),
	(2, 'Loquito', 'De La Luna', 'loquito.delaluna@exemple.com', 26, 'aaa', 0),
	(3, 'Domino', 'Fall', 'domino.fall@exemple.com', 18, 'aaa', 0),
	(4, 'Freaky', 'Fennec', 'freak.fennec@exemple.com', 25, 'frfe', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
