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


-- Listage de la structure de la base pour bikes
CREATE DATABASE IF NOT EXISTS `bikes` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bikes`;

-- Listage de la structure de table bikes. assemblages
CREATE TABLE IF NOT EXISTS `assemblages` (
  `assembl_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `assembl_nom` varchar(40) DEFAULT NULL,
  `assembl_nom_id` smallint DEFAULT NULL,
  PRIMARY KEY (`assembl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.assemblages : ~3 rows (environ)
DELETE FROM `assemblages`;
INSERT INTO `assemblages` (`assembl_id`, `assembl_nom`, `assembl_nom_id`) VALUES
	(1, 'Brasé à manchons', 1),
	(2, 'Brasé', 2),
	(3, 'Collé', 3);

-- Listage de la structure de table bikes. cadres
CREATE TABLE IF NOT EXISTS `cadres` (
  `cadre_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `cadre_type` varchar(40) DEFAULT NULL,
  `cadre_mod_id` smallint DEFAULT NULL,
  PRIMARY KEY (`cadre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.cadres : ~7 rows (environ)
DELETE FROM `cadres`;
INSERT INTO `cadres` (`cadre_id`, `cadre_type`, `cadre_mod_id`) VALUES
	(1, 'course', 1),
	(2, 'ville', 2),
	(3, 'vtc', 3),
	(4, 'vtt', 4),
	(5, 'piste', 5),
	(6, 'randonneuse', 6),
	(7, 'bmx', 7);

-- Listage de la structure de table bikes. cales_pieds
CREATE TABLE IF NOT EXISTS `cales_pieds` (
  `cal_pied_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `cal_pied_nom` varchar(40) DEFAULT NULL,
  `cal_pied_mod` varchar(40) DEFAULT NULL,
  `cal_pied_type` varchar(40) DEFAULT NULL,
  `cal_pied_lani_type` varchar(40) DEFAULT NULL,
  `cal_pied_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`cal_pied_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.cales_pieds : ~4 rows (environ)
DELETE FROM `cales_pieds`;
INSERT INTO `cales_pieds` (`cal_pied_id`, `cal_pied_nom`, `cal_pied_mod`, `cal_pied_type`, `cal_pied_lani_type`, `cal_pied_mat_id`) VALUES
	(0, 'sans', NULL, NULL, NULL, NULL),
	(1, 'Christophe', 'inconnu', 'fermé', 'Cuir', 1),
	(2, 'Christophe', 'inconnu', 'fermé', 'Tissu', 1),
	(3, 'Look', 'PP56', 'automatique', NULL, 6);

-- Listage de la structure de table bikes. chaines
CREATE TABLE IF NOT EXISTS `chaines` (
  `chaine_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `chaine_nom` varchar(40) DEFAULT NULL,
  `chaine_mod` varchar(40) DEFAULT NULL,
  `chaine_nbr_vit` varchar(40) DEFAULT NULL,
  `chaine_large` float DEFAULT NULL,
  `chaine_widht` varchar(20) DEFAULT NULL,
  `chaine_poids` float DEFAULT NULL,
  `chaine_constr_id` smallint DEFAULT NULL,
  `chaine_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`chaine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.chaines : ~3 rows (environ)
DELETE FROM `chaines`;
INSERT INTO `chaines` (`chaine_id`, `chaine_nom`, `chaine_mod`, `chaine_nbr_vit`, `chaine_large`, `chaine_widht`, `chaine_poids`, `chaine_constr_id`, `chaine_mat_id`) VALUES
	(1, 'inconnu', 'inconnu', '1 à 3', 3.18, '1/8"', 0, 1, 1),
	(2, 'inconnu', 'inconnu', '5 à 8', 2.38, '3/32"', 0, 1, 1),
	(3, 'inconnu', 'inconnu', '9 et +', 2.18, '11/128"', 0, 1, 1);

-- Listage de la structure de table bikes. chambres_air
CREATE TABLE IF NOT EXISTS `chambres_air` (
  `ch_air_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `ch_air_nom` varchar(40) DEFAULT NULL,
  `ch_air_mod` varchar(40) DEFAULT NULL,
  `ch_air_type` varchar(40) DEFAULT NULL,
  `ch_air_dim` int DEFAULT NULL,
  `ch_air_poids` int DEFAULT NULL,
  `ch_air_constr_id` smallint DEFAULT NULL,
  `ch_air_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`ch_air_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.chambres_air : ~2 rows (environ)
DELETE FROM `chambres_air`;
INSERT INTO `chambres_air` (`ch_air_id`, `ch_air_nom`, `ch_air_mod`, `ch_air_type`, `ch_air_dim`, `ch_air_poids`, `ch_air_constr_id`, `ch_air_mat_id`) VALUES
	(1, 'inconnu', 'inconnu', 'inconnu', 1, NULL, 0, 14),
	(2, 'Michelin', NULL, 'route', 1, NULL, 1, 14);

-- Listage de la structure de table bikes. cintres
CREATE TABLE IF NOT EXISTS `cintres` (
  `cintre_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `cintre_nom` varchar(40) DEFAULT NULL,
  `cintre_mod` varchar(40) DEFAULT NULL,
  `cintre_type` varchar(40) DEFAULT NULL,
  `cintre_poids` int DEFAULT NULL,
  `cintre_constr_id` smallint DEFAULT NULL,
  `cintre_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`cintre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.cintres : ~4 rows (environ)
DELETE FROM `cintres`;
INSERT INTO `cintres` (`cintre_id`, `cintre_nom`, `cintre_mod`, `cintre_type`, `cintre_poids`, `cintre_constr_id`, `cintre_mat_id`) VALUES
	(1, 'Inconnu', 'inconnu', 'plat recourbé', NULL, 1, 1),
	(2, 'Inconnu', 'inconnu', 'route', NULL, 1, 1),
	(3, 'Philippe', 'inconnu', 'plat recourbé', NULL, 10, 6),
	(4, 'Philippe', 'inconnu', 'route', NULL, 10, 6);

-- Listage de la structure de table bikes. constr_equipements
CREATE TABLE IF NOT EXISTS `constr_equipements` (
  `constr_equipt_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `constr_equipt_nom` varchar(40) DEFAULT NULL,
  `constr_equipt_nom_id` smallint DEFAULT NULL,
  PRIMARY KEY (`constr_equipt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.constr_equipements : ~29 rows (environ)
DELETE FROM `constr_equipements`;
INSERT INTO `constr_equipements` (`constr_equipt_id`, `constr_equipt_nom`, `constr_equipt_nom_id`) VALUES
	(1, 'Inconnu', 1),
	(2, 'Stronglight', 2),
	(3, 'Nervar', 3),
	(4, 'Peugeot', 4),
	(5, 'Shimano', 5),
	(6, 'Campagnolo', 6),
	(7, 'Super Champion', 7),
	(8, 'Atax', 8),
	(9, 'Mafac', 9),
	(10, 'Philippe', 10),
	(11, 'Normandy', 11),
	(12, 'Maillard', 12),
	(13, 'Mavic', 13),
	(14, 'Simplex', 14),
	(15, 'CLB', 15),
	(16, 'Weinmann', 16),
	(17, 'Ideal', 17),
	(18, 'Italia', 18),
	(19, 'Velox', 19),
	(20, 'Soubitez', 20),
	(21, 'Blumel\'s', 21),
	(22, 'Specialités TA', 22),
	(23, 'Zéfal', 23),
	(24, 'Christophe', 24),
	(25, 'Look', 25),
	(26, 'Lyotar', 26),
	(27, 'Huret', 27),
	(28, 'Sachs', 28),
	(29, 'Sachs/Huret', 29);

-- Listage de la structure de table bikes. constr_velos
CREATE TABLE IF NOT EXISTS `constr_velos` (
  `constr_velos_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `constr_velos_nom` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `pays_constr_velos` smallint DEFAULT NULL,
  `logo_constr` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `alt_logo_constr` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`constr_velos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.constr_velos : ~12 rows (environ)
DELETE FROM `constr_velos`;
INSERT INTO `constr_velos` (`constr_velos_id`, `constr_velos_nom`, `pays_constr_velos`, `logo_constr`, `alt_logo_constr`) VALUES
	(1, 'Peugeot', 5, 'logo-peugeot.svg', 'Logo Peugeot'),
	(2, 'Bertin', 5, NULL, ''),
	(3, 'Mercier', 5, NULL, ''),
	(4, 'Gitane', 5, NULL, ''),
	(5, 'Motobecane', 5, NULL, ''),
	(6, 'Shimano', 8, NULL, ''),
	(7, 'Bianchi', 7, NULL, ''),
	(8, 'Kalkhoff', 1, NULL, ''),
	(9, 'Gazelle', 6, NULL, ''),
	(10, 'Allegro', 9, NULL, ''),
	(11, 'Orbea', 4, NULL, ''),
	(12, 'BH', 4, NULL, '');

-- Listage de la structure de table bikes. decalcomanies
CREATE TABLE IF NOT EXISTS `decalcomanies` (
  `decalc_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `decalc_nom` varchar(40) DEFAULT NULL,
  `decalc_mod` varchar(40) DEFAULT NULL,
  `decalc_type` varchar(40) DEFAULT NULL,
  `decalc_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`decalc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.decalcomanies : ~4 rows (environ)
DELETE FROM `decalcomanies`;
INSERT INTO `decalcomanies` (`decalc_id`, `decalc_nom`, `decalc_mod`, `decalc_type`, `decalc_mat_id`) VALUES
	(1, 'Peugeot', '1980', 'sérigraphie', 10),
	(2, 'Peugeot', '1985', 'sérigraphie', 10),
	(3, 'Bertin', '1980', 'sérigraphie', 10),
	(4, 'Peugeot', '1979', 'sérigraphie', 10);

-- Listage de la structure de table bikes. derailleurs_ar
CREATE TABLE IF NOT EXISTS `derailleurs_ar` (
  `derail_ar_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `derail_ar_nom` varchar(40) DEFAULT NULL,
  `derail_ar_mod` varchar(40) DEFAULT NULL,
  `derail_ar_poids` float DEFAULT NULL,
  `derail_ar_constr_id` smallint DEFAULT NULL,
  `derail_ar_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`derail_ar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.derailleurs_ar : ~3 rows (environ)
DELETE FROM `derailleurs_ar`;
INSERT INTO `derailleurs_ar` (`derail_ar_id`, `derail_ar_nom`, `derail_ar_mod`, `derail_ar_poids`, `derail_ar_constr_id`, `derail_ar_mat_id`) VALUES
	(1, 'inconnu', 'inconnu', 0, 1, 1),
	(2, 'Simplex', 'SX 810 T', 0.266, 14, 12),
	(3, 'Sachs/Huret', 'Rival', 0.246, 29, 6);

-- Listage de la structure de table bikes. derailleurs_av
CREATE TABLE IF NOT EXISTS `derailleurs_av` (
  `derail_av_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `derail_av_nom` varchar(40) DEFAULT NULL,
  `derail_av_mod` varchar(40) DEFAULT NULL,
  `derail_av_poids` decimal(11,3) DEFAULT NULL,
  `derail_av_constr_id` smallint DEFAULT NULL,
  `derail_av_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`derail_av_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.derailleurs_av : ~3 rows (environ)
DELETE FROM `derailleurs_av`;
INSERT INTO `derailleurs_av` (`derail_av_id`, `derail_av_nom`, `derail_av_mod`, `derail_av_poids`, `derail_av_constr_id`, `derail_av_mat_id`) VALUES
	(1, 'inconnu', 'inconnu', 0.000, 1, 1),
	(2, 'Simplex', 'SA12', 0.144, 14, 12),
	(3, 'Sachs', 'inconnu', 0.000, 28, 1);

-- Listage de la structure de table bikes. dim_chambres_air
CREATE TABLE IF NOT EXISTS `dim_chambres_air` (
  `dim_ch_air_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `dim_ch_air_fr` varchar(40) DEFAULT NULL,
  `dim_ch_air_ETRTO` varchar(40) DEFAULT NULL,
  `dimens_ch_air_id` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`dim_ch_air_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.dim_chambres_air : ~2 rows (environ)
DELETE FROM `dim_chambres_air`;
INSERT INTO `dim_chambres_air` (`dim_ch_air_id`, `dim_ch_air_fr`, `dim_ch_air_ETRTO`, `dimens_ch_air_id`) VALUES
	(1, NULL, NULL, '0'),
	(2, '700 x 28', '28-622', '1');

-- Listage de la structure de table bikes. dim_pneumatiques
CREATE TABLE IF NOT EXISTS `dim_pneumatiques` (
  `dim_pneu_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `dim_pneu_fr` varchar(40) DEFAULT NULL,
  `dim_pneu_ETRTO` varchar(40) DEFAULT NULL,
  `dimens_pneu_id` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`dim_pneu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.dim_pneumatiques : ~8 rows (environ)
DELETE FROM `dim_pneumatiques`;
INSERT INTO `dim_pneumatiques` (`dim_pneu_id`, `dim_pneu_fr`, `dim_pneu_ETRTO`, `dimens_pneu_id`) VALUES
	(1, NULL, NULL, '0'),
	(2, '700 x 28 C', '28-622', '1'),
	(3, '700 x 25 C', '25-622', '2'),
	(4, '700 x 24 C', '24-622', '3'),
	(5, '700 x 23 C', '23-622', '4'),
	(6, '700 x 22 C', '22-622', '4'),
	(7, '700 x 21 C', '21-622', '6'),
	(8, '700 x 19 C', '19-622', '7');

-- Listage de la structure de table bikes. eclairages
CREATE TABLE IF NOT EXISTS `eclairages` (
  `eclairage_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `eclairage_nom` varchar(40) DEFAULT NULL,
  `eclairage_mod` varchar(40) DEFAULT NULL,
  `eclairage_type` varchar(40) DEFAULT NULL,
  `eclairage_poids` int DEFAULT NULL,
  `eclairage_constr_id` smallint DEFAULT NULL,
  `eclairage_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`eclairage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.eclairages : ~6 rows (environ)
DELETE FROM `eclairages`;
INSERT INTO `eclairages` (`eclairage_id`, `eclairage_nom`, `eclairage_mod`, `eclairage_type`, `eclairage_poids`, `eclairage_constr_id`, `eclairage_mat_id`) VALUES
	(0, NULL, NULL, NULL, NULL, NULL, NULL),
	(1, 'Soubitez', 'rond grand', 'lanterne avant', NULL, 20, 10),
	(2, 'Soubitez', 'rond petit', 'lanterne avant', NULL, 20, 10),
	(3, 'Soubitez', 'sur garde-boue', 'feu arrière', NULL, 20, 10),
	(4, 'Soubitez', 'sur dynamo', 'feu arrière', NULL, 20, 10),
	(5, 'Soubitez', 'inconnu', 'dynamo', NULL, 20, 1);

-- Listage de la structure de table bikes. ecussons
CREATE TABLE IF NOT EXISTS `ecussons` (
  `ecus_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `ecus_nom` varchar(40) DEFAULT NULL,
  `ecus_mod` varchar(40) DEFAULT NULL,
  `ecus_type` varchar(40) DEFAULT NULL,
  `ecus_poids` int DEFAULT NULL,
  `ecus_constr_id` smallint DEFAULT NULL,
  `ecus_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`ecus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.ecussons : ~3 rows (environ)
DELETE FROM `ecussons`;
INSERT INTO `ecussons` (`ecus_id`, `ecus_nom`, `ecus_mod`, `ecus_type`, `ecus_poids`, `ecus_constr_id`, `ecus_mat_id`) VALUES
	(1, 'Peugeot', '1980', 'métal et sérigraphie', NULL, 4, 6),
	(2, 'Peugeot', '1985', 'sérigraphie', NULL, 4, 10),
	(3, 'Bertin', NULL, NULL, NULL, 5, 10);

-- Listage de la structure de table bikes. equipements
CREATE TABLE IF NOT EXISTS `equipements` (
  `equipt_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `equipt_nom` varchar(40) DEFAULT NULL,
  `equipt_constr_id` smallint DEFAULT NULL,
  `equipt_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`equipt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.equipements : ~8 rows (environ)
DELETE FROM `equipements`;
INSERT INTO `equipements` (`equipt_id`, `equipt_nom`, `equipt_constr_id`, `equipt_mat_id`) VALUES
	(1, 'JDD', 4, 1),
	(2, 'JDP', 4, 1),
	(3, 'Pédalier', 2, 0),
	(4, 'Dérailleur pédalier', 7, 8),
	(5, 'Dérailleur pignons', 7, 8),
	(6, 'Chaîne', 1, 1),
	(7, 'Roue libre', 1, 1),
	(8, 'Jante', 0, 0);

-- Listage de la structure de table bikes. fabricant_pneus
CREATE TABLE IF NOT EXISTS `fabricant_pneus` (
  `fab_pneu_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `fab_pneu_nom` varchar(40) DEFAULT NULL,
  `fab_pneu_nom_id` smallint DEFAULT NULL,
  PRIMARY KEY (`fab_pneu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.fabricant_pneus : ~8 rows (environ)
DELETE FROM `fabricant_pneus`;
INSERT INTO `fabricant_pneus` (`fab_pneu_id`, `fab_pneu_nom`, `fab_pneu_nom_id`) VALUES
	(1, 'inconnu', 0),
	(2, 'Michelin', 1),
	(3, 'Hutchinson', 2),
	(4, 'Schwalbe', 3),
	(5, 'Vittoria', 4),
	(6, 'Maxxis', 5),
	(7, 'Continental', 6),
	(8, 'Specialized', 7);

-- Listage de la structure de table bikes. fixations
CREATE TABLE IF NOT EXISTS `fixations` (
  `fixation_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `fixation_nom` varchar(40) DEFAULT NULL,
  `fixation_mod` varchar(40) DEFAULT NULL,
  `fixation_type` varchar(40) DEFAULT NULL,
  `fix_av_poids` int DEFAULT NULL,
  `fix_ar_poids` int DEFAULT NULL,
  `fixation_constr_id` smallint DEFAULT NULL,
  `fixation_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`fixation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.fixations : ~3 rows (environ)
DELETE FROM `fixations`;
INSERT INTO `fixations` (`fixation_id`, `fixation_nom`, `fixation_mod`, `fixation_type`, `fix_av_poids`, `fix_ar_poids`, `fixation_constr_id`, `fixation_mat_id`) VALUES
	(1, 'Simplex', NULL, 'attache rapide', NULL, NULL, 14, 1),
	(2, 'Simplex', NULL, 'écrou papillon', NULL, NULL, 14, 1),
	(3, NULL, NULL, 'écrou', NULL, NULL, NULL, 1);

-- Listage de la structure de table bikes. freins
CREATE TABLE IF NOT EXISTS `freins` (
  `frein_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `frein_nom` varchar(40) DEFAULT NULL,
  `frein_mod` varchar(40) DEFAULT NULL,
  `frein_type` varchar(40) DEFAULT NULL,
  `frein_av_poids` int DEFAULT NULL,
  `frein_ar_poids` int DEFAULT NULL,
  `frein_constr_id` smallint DEFAULT NULL,
  `frein_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`frein_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.freins : ~2 rows (environ)
DELETE FROM `freins`;
INSERT INTO `freins` (`frein_id`, `frein_nom`, `frein_mod`, `frein_type`, `frein_av_poids`, `frein_ar_poids`, `frein_constr_id`, `frein_mat_id`) VALUES
	(1, 'Mafac', 'S', 'tirage central', NULL, NULL, 9, 6),
	(2, 'CLB', NULL, 'tirage latéral', NULL, NULL, 15, 6);

-- Listage de la structure de table bikes. gardes_boues
CREATE TABLE IF NOT EXISTS `gardes_boues` (
  `g_boue_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `g_boue_nom` varchar(40) DEFAULT NULL,
  `g_boue_mod` varchar(40) DEFAULT NULL,
  `g_boue_type` varchar(40) DEFAULT NULL,
  `g_boue_poids` int DEFAULT NULL,
  `g_boue_constr_id` smallint DEFAULT NULL,
  `g_boue_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`g_boue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.gardes_boues : ~2 rows (environ)
DELETE FROM `gardes_boues`;
INSERT INTO `gardes_boues` (`g_boue_id`, `g_boue_nom`, `g_boue_mod`, `g_boue_type`, `g_boue_poids`, `g_boue_constr_id`, `g_boue_mat_id`) VALUES
	(0, 'sans', NULL, NULL, NULL, NULL, 1),
	(1, 'Blumel\'s', 'Clasic', NULL, NULL, 21, 10);

-- Listage de la structure de table bikes. genres
CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `genre_nom` varchar(40) DEFAULT NULL,
  `genre_nom_id` smallint DEFAULT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.genres : ~3 rows (environ)
DELETE FROM `genres`;
INSERT INTO `genres` (`genre_id`, `genre_nom`, `genre_nom_id`) VALUES
	(1, 'Homme', 1),
	(2, 'Femme', 2),
	(3, 'Mixte', 3);

-- Listage de la structure de table bikes. jantes
CREATE TABLE IF NOT EXISTS `jantes` (
  `jante_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `jante_nom` varchar(40) DEFAULT NULL,
  `jante_mod` varchar(40) DEFAULT NULL,
  `jante_type` varchar(40) DEFAULT NULL,
  `jante_poids` int DEFAULT NULL,
  `jante_constr_id` smallint DEFAULT NULL,
  `jante_mat_id` smallint DEFAULT NULL,
  `jante_dim_id` smallint DEFAULT NULL,
  PRIMARY KEY (`jante_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.jantes : ~2 rows (environ)
DELETE FROM `jantes`;
INSERT INTO `jantes` (`jante_id`, `jante_nom`, `jante_mod`, `jante_type`, `jante_poids`, `jante_constr_id`, `jante_mat_id`, `jante_dim_id`) VALUES
	(1, 'Super Champion', 'Mod.58', 'à oeillets', NULL, 4, 6, 1),
	(2, 'Mavic', 'Sport', 'à oeillets', NULL, 13, 6, 1);

-- Listage de la structure de table bikes. jantes_dim
CREATE TABLE IF NOT EXISTS `jantes_dim` (
  `dim_jante_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `dim_jante_fr` varchar(40) DEFAULT NULL,
  `dim_jante_ETRTO` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`dim_jante_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.jantes_dim : ~0 rows (environ)
DELETE FROM `jantes_dim`;
INSERT INTO `jantes_dim` (`dim_jante_id`, `dim_jante_fr`, `dim_jante_ETRTO`) VALUES
	(1, '700 x 28 C', '28-622');

-- Listage de la structure de table bikes. leviers_freins
CREATE TABLE IF NOT EXISTS `leviers_freins` (
  `levier_frein_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `levier_frein_nom` varchar(40) DEFAULT NULL,
  `levier_frein_mod` varchar(40) DEFAULT NULL,
  `levier_frein_type` varchar(40) DEFAULT NULL,
  `levier_frein_av_poids` int DEFAULT NULL,
  `levier_frein_ar_poids` int DEFAULT NULL,
  `levier_frein_constr_id` smallint DEFAULT NULL,
  `levier_frein_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`levier_frein_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.leviers_freins : ~2 rows (environ)
DELETE FROM `leviers_freins`;
INSERT INTO `leviers_freins` (`levier_frein_id`, `levier_frein_nom`, `levier_frein_mod`, `levier_frein_type`, `levier_frein_av_poids`, `levier_frein_ar_poids`, `levier_frein_constr_id`, `levier_frein_mat_id`) VALUES
	(1, 'Mafac', 'Course 218', 'route', NULL, NULL, 9, 6),
	(2, 'Weinmann', 'inconnu', 'ville', NULL, NULL, 16, 6);

-- Listage de la structure de table bikes. materiaux
CREATE TABLE IF NOT EXISTS `materiaux` (
  `materiau_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `materiau_nom` varchar(40) DEFAULT NULL,
  `materiau_nom_id` smallint DEFAULT NULL,
  PRIMARY KEY (`materiau_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.materiaux : ~15 rows (environ)
DELETE FROM `materiaux`;
INSERT INTO `materiaux` (`materiau_id`, `materiau_nom`, `materiau_nom_id`) VALUES
	(1, 'acier', 1),
	(2, 'Carbolite 103', 2),
	(3, 'Reynolds', 3),
	(4, 'carbone', 4),
	(5, 'bois', 5),
	(6, 'alliage/alu', 6),
	(7, 'titane', 7),
	(8, 'cuir', 8),
	(9, 'skaï matelassé', 9),
	(10, 'plastique', 10),
	(11, 'coton', 11),
	(12, 'Delrin/alu', 12),
	(13, 'Caoutchouc', 13),
	(14, 'Latex', 14),
	(15, 'Butyl', 15);

-- Listage de la structure de table bikes. modeles
CREATE TABLE IF NOT EXISTS `modeles` (
  `mod_id` int NOT NULL AUTO_INCREMENT,
  `mod_nom` varchar(255) DEFAULT NULL,
  `mod_genre_id` int DEFAULT NULL,
  `mod_taille` int DEFAULT NULL,
  `mod_type` int DEFAULT NULL,
  `mod_annee` date DEFAULT NULL,
  `constr_mod_id` int DEFAULT NULL,
  `mat_cadre_id` int DEFAULT NULL,
  `mat_fourche_id` int DEFAULT NULL,
  `cadre_mod_id` int DEFAULT NULL,
  `assembl_mod_id` int DEFAULT NULL,
  `compo_Jdd_name_id` int DEFAULT NULL,
  `compo_Jdp_name_id` int DEFAULT NULL,
  `jante_mod_id` int DEFAULT NULL,
  `moyeu_mod_id` int DEFAULT NULL,
  `fixation_mod_id` int DEFAULT NULL,
  `frein_mod_id` int DEFAULT NULL,
  `levier_frein_mod_id` int DEFAULT NULL,
  `cintre_mod_id` int DEFAULT NULL,
  `potence_mod_id` int DEFAULT NULL,
  `selle_mod_id` int DEFAULT NULL,
  `tige_selle_mod_id` int DEFAULT NULL,
  `revet_cintre_mod_id` int DEFAULT NULL,
  `eclair_av_mod_id` int DEFAULT NULL,
  `eclair_ar_mod_id` int DEFAULT NULL,
  `eclair_dyn_mod_id` int DEFAULT NULL,
  `g_boue_mod_id` int DEFAULT NULL,
  `port_bag_mod_id` int NOT NULL,
  `ecus_mod_id` int DEFAULT NULL,
  `decalc_mod_id` int DEFAULT NULL,
  `pompe_mod_id` int NOT NULL,
  `port_bid_mod_id` int DEFAULT NULL,
  `cal_pied_mod_id` int NOT NULL,
  `sonnette_mod_id` int DEFAULT NULL,
  `pedalier_mod_id` int NOT NULL,
  `pedale_mod_id` int NOT NULL,
  `derail_av_mod_id` int NOT NULL,
  `derail_ar_mod_id` int NOT NULL,
  `chaine_mod_id` int NOT NULL,
  `roue_lib_mod_id` int NOT NULL,
  `pneu_mod_id` int NOT NULL,
  `dim_pneu_mod_id` int NOT NULL,
  `ch_air_mod_id` int NOT NULL,
  PRIMARY KEY (`mod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.modeles : ~5 rows (environ)
DELETE FROM `modeles`;
INSERT INTO `modeles` (`mod_id`, `mod_nom`, `mod_genre_id`, `mod_taille`, `mod_type`, `mod_annee`, `constr_mod_id`, `mat_cadre_id`, `mat_fourche_id`, `cadre_mod_id`, `assembl_mod_id`, `compo_Jdd_name_id`, `compo_Jdp_name_id`, `jante_mod_id`, `moyeu_mod_id`, `fixation_mod_id`, `frein_mod_id`, `levier_frein_mod_id`, `cintre_mod_id`, `potence_mod_id`, `selle_mod_id`, `tige_selle_mod_id`, `revet_cintre_mod_id`, `eclair_av_mod_id`, `eclair_ar_mod_id`, `eclair_dyn_mod_id`, `g_boue_mod_id`, `port_bag_mod_id`, `ecus_mod_id`, `decalc_mod_id`, `pompe_mod_id`, `port_bid_mod_id`, `cal_pied_mod_id`, `sonnette_mod_id`, `pedalier_mod_id`, `pedale_mod_id`, `derail_av_mod_id`, `derail_ar_mod_id`, `chaine_mod_id`, `roue_lib_mod_id`, `pneu_mod_id`, `dim_pneu_mod_id`, `ch_air_mod_id`) VALUES
	(1, 'P65M', 2, 52, 6, '1979-01-01', 1, 2, 2, 6, 1, 4, 4, 1, 1, 1, 1, 2, 3, 2, 2, 2, 1, 2, 4, 5, 1, 2, 1, 1, 1, 1, 2, 1, 2, 2, 2, 2, 2, 3, 2, 1, 2),
	(2, 'PR65', 2, 52, 6, '1978-01-01', 1, 3, 3, 1, 1, 4, 4, 2, 1, 1, 1, 1, 3, 2, 1, 2, 1, 0, 0, 0, 1, 2, 1, 4, 1, 1, 2, 1, 2, 2, 2, 2, 2, 3, 2, 1, 2),
	(3, 'PH501', 1, 54, 6, '1985-01-01', 1, 3, 3, 1, 1, 4, 4, 2, 1, 1, 1, 2, 4, 2, 4, 3, 2, 0, 0, 0, 0, 1, 2, 2, 2, 2, 3, 0, 3, 2, 3, 3, 2, 3, 2, 1, 2),
	(4, 'C37', 1, 54, 6, '1980-01-01', 2, 3, 3, 1, 1, 2, 2, 2, 2, 1, 1, 1, 4, 2, 2, 2, 2, 0, 0, 0, 0, 2, 3, 3, 1, 1, 0, 0, 4, 3, 1, 1, 2, 3, 2, 1, 2),
	(5, 'Inconnu', 1, 54, 6, '2018-11-05', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 4, 1, 3, 1, 2, 0, 0, 0, 0, 1, NULL, NULL, 1, NULL, 0, 0, 0, 1, 1, 1, 2, 3, 1, 0, 1);

-- Listage de la structure de table bikes. moyeux
CREATE TABLE IF NOT EXISTS `moyeux` (
  `moyeu_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `moyeu_nom` varchar(40) DEFAULT NULL,
  `moyeu_mod` varchar(40) DEFAULT NULL,
  `moyeu_type` varchar(40) DEFAULT NULL,
  `moyeu_av_poids` int DEFAULT NULL,
  `moyeu_ar_poids` int DEFAULT NULL,
  `moyeu_constr_id` smallint DEFAULT NULL,
  `moyeu_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`moyeu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.moyeux : ~2 rows (environ)
DELETE FROM `moyeux`;
INSERT INTO `moyeux` (`moyeu_id`, `moyeu_nom`, `moyeu_mod`, `moyeu_type`, `moyeu_av_poids`, `moyeu_ar_poids`, `moyeu_constr_id`, `moyeu_mat_id`) VALUES
	(1, 'Normandy', 'standard', 'gde flasque', NULL, NULL, 11, 6),
	(2, 'Maillard', '700', 'gde flasque', NULL, NULL, 12, 6);

-- Listage de la structure de table bikes. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `pays_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `pays_nom` varchar(40) DEFAULT NULL,
  `pays_constr_id` smallint DEFAULT NULL,
  PRIMARY KEY (`pays_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.pays : ~9 rows (environ)
DELETE FROM `pays`;
INSERT INTO `pays` (`pays_id`, `pays_nom`, `pays_constr_id`) VALUES
	(1, 'Allemagne', 1),
	(2, 'Angleterre', 2),
	(3, 'Belgique', 3),
	(4, 'Espagne', 4),
	(5, 'France', 5),
	(6, 'Hollande', 6),
	(7, 'Italie', 7),
	(8, 'Japon', 8),
	(9, 'Suisse', 9);

-- Listage de la structure de table bikes. pedales
CREATE TABLE IF NOT EXISTS `pedales` (
  `pedale_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `pedale_nom` varchar(40) DEFAULT NULL,
  `pedale_mod` varchar(40) DEFAULT NULL,
  `pedale_type` varchar(40) DEFAULT NULL,
  `pedale_poids` int DEFAULT NULL,
  `pedale_constr_id` smallint DEFAULT NULL,
  `pedale_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`pedale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.pedales : ~4 rows (environ)
DELETE FROM `pedales`;
INSERT INTO `pedales` (`pedale_id`, `pedale_nom`, `pedale_mod`, `pedale_type`, `pedale_poids`, `pedale_constr_id`, `pedale_mat_id`) VALUES
	(1, 'inconnu', 'inconnu', 'inconnu', 0, 1, 1),
	(2, 'Lyotar', '136 R', 'inconnu', 0, 26, 1),
	(3, 'Lyotar', 'BR 45', 'inconnu', 0, 26, 6),
	(4, 'Look', '', 'automatique', 0, 25, 6);

-- Listage de la structure de table bikes. pedaliers
CREATE TABLE IF NOT EXISTS `pedaliers` (
  `pedalier_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `pedalier_nom` varchar(40) DEFAULT NULL,
  `pedalier_mod` varchar(40) DEFAULT NULL,
  `pedalier_dents` varchar(40) DEFAULT NULL,
  `pedalier_constr_id` smallint DEFAULT NULL,
  `pedalier_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`pedalier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.pedaliers : ~4 rows (environ)
DELETE FROM `pedaliers`;
INSERT INTO `pedaliers` (`pedalier_id`, `pedalier_nom`, `pedalier_mod`, `pedalier_dents`, `pedalier_constr_id`, `pedalier_mat_id`) VALUES
	(1, 'Peugeot', 'inconnu', '48/42', 4, 1),
	(2, 'Peugeot SR', 'inconnu', '48/42', 4, 6),
	(3, 'Nervar', 'inconnu', '52/48', 3, 6),
	(4, 'Stronglight', '105bis', '52/48', 2, 6);

-- Listage de la structure de table bikes. pneumatiques
CREATE TABLE IF NOT EXISTS `pneumatiques` (
  `pneu_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `pneu_nom` varchar(40) DEFAULT NULL,
  `pneu_mod` varchar(40) DEFAULT NULL,
  `pneu_type` varchar(40) DEFAULT NULL,
  `pneu_dim` int DEFAULT NULL,
  `pneu_poids` int DEFAULT NULL,
  `pneu_constr_id` smallint DEFAULT NULL,
  `pneu_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`pneu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.pneumatiques : ~2 rows (environ)
DELETE FROM `pneumatiques`;
INSERT INTO `pneumatiques` (`pneu_id`, `pneu_nom`, `pneu_mod`, `pneu_type`, `pneu_dim`, `pneu_poids`, `pneu_constr_id`, `pneu_mat_id`) VALUES
	(1, 'inconnu', 'inconnu', 'inconnu', 1, NULL, 0, 13),
	(2, 'Michelin', NULL, 'route', 1, NULL, 1, 13);

-- Listage de la structure de table bikes. pompes
CREATE TABLE IF NOT EXISTS `pompes` (
  `pompe_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `pompe_nom` varchar(40) DEFAULT NULL,
  `pompe_mod` varchar(40) DEFAULT NULL,
  `pompe_type` varchar(40) DEFAULT NULL,
  `pompe_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`pompe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.pompes : ~2 rows (environ)
DELETE FROM `pompes`;
INSERT INTO `pompes` (`pompe_id`, `pompe_nom`, `pompe_mod`, `pompe_type`, `pompe_mat_id`) VALUES
	(1, 'sans', NULL, NULL, NULL),
	(2, 'Zéfal', 'Compétion 3', 'raccord direct', 10);

-- Listage de la structure de table bikes. portes_bagages
CREATE TABLE IF NOT EXISTS `portes_bagages` (
  `port_bag_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `port_bag_nom` varchar(40) DEFAULT NULL,
  `port_bag_mod` varchar(40) DEFAULT NULL,
  `port_bag_type` varchar(40) DEFAULT NULL,
  `port_bag_poids` int DEFAULT NULL,
  `port_bag_constr_id` smallint DEFAULT NULL,
  `port_bag_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`port_bag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.portes_bagages : ~2 rows (environ)
DELETE FROM `portes_bagages`;
INSERT INTO `portes_bagages` (`port_bag_id`, `port_bag_nom`, `port_bag_mod`, `port_bag_type`, `port_bag_poids`, `port_bag_constr_id`, `port_bag_mat_id`) VALUES
	(1, 'sans', NULL, NULL, NULL, NULL, NULL),
	(2, 'Specialités TA', 'inconnu', 'porte paquet', NULL, 22, 1);

-- Listage de la structure de table bikes. portes_bidons
CREATE TABLE IF NOT EXISTS `portes_bidons` (
  `port_bid_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `port_bid_nom` varchar(40) DEFAULT NULL,
  `port_bid_mod` varchar(40) DEFAULT NULL,
  `port_bid_type` varchar(40) DEFAULT NULL,
  `port_bid_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`port_bid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.portes_bidons : ~2 rows (environ)
DELETE FROM `portes_bidons`;
INSERT INTO `portes_bidons` (`port_bid_id`, `port_bid_nom`, `port_bid_mod`, `port_bid_type`, `port_bid_mat_id`) VALUES
	(1, NULL, NULL, NULL, NULL),
	(2, 'Specialités TA', 'inconnu', 'sur cadre', 6);

-- Listage de la structure de table bikes. potences
CREATE TABLE IF NOT EXISTS `potences` (
  `potence_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `potence_nom` varchar(40) DEFAULT NULL,
  `potence_mod` varchar(40) DEFAULT NULL,
  `potence_type` varchar(40) DEFAULT NULL,
  `potence_poids` int DEFAULT NULL,
  `potence_constr_id` smallint DEFAULT NULL,
  `potence_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`potence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.potences : ~2 rows (environ)
DELETE FROM `potences`;
INSERT INTO `potences` (`potence_id`, `potence_nom`, `potence_mod`, `potence_type`, `potence_poids`, `potence_constr_id`, `potence_mat_id`) VALUES
	(1, 'Inconnu', 'inconnu', 'plongeur', NULL, NULL, 6),
	(2, 'Atax', '1A', 'plongeur', NULL, 8, 6);

-- Listage de la structure de table bikes. revet_cintres
CREATE TABLE IF NOT EXISTS `revet_cintres` (
  `revet_cintre_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `revet_cintre_nom` varchar(40) DEFAULT NULL,
  `revet_cintre_mod` varchar(40) DEFAULT NULL,
  `revet_cintre_type` varchar(40) DEFAULT NULL,
  `revet_cintre_poids` int DEFAULT NULL,
  `revet_cintre_constr_id` smallint DEFAULT NULL,
  `revet_cintre_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`revet_cintre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.revet_cintres : ~2 rows (environ)
DELETE FROM `revet_cintres`;
INSERT INTO `revet_cintres` (`revet_cintre_id`, `revet_cintre_nom`, `revet_cintre_mod`, `revet_cintre_type`, `revet_cintre_poids`, `revet_cintre_constr_id`, `revet_cintre_mat_id`) VALUES
	(1, 'Velox', 'Tressorex 85', 'ruban guidon', NULL, NULL, 11),
	(2, 'Inconnu', 'inconnu', 'ruban guidon', NULL, NULL, 10);

-- Listage de la structure de table bikes. roues_libres
CREATE TABLE IF NOT EXISTS `roues_libres` (
  `roue_lib_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `roue_lib_nom` varchar(40) DEFAULT NULL,
  `roue_lib_mod` varchar(40) DEFAULT NULL,
  `roue_lib_nbr_vit` smallint DEFAULT NULL,
  `roue_lib_dev` varchar(40) DEFAULT NULL,
  `roue_lib_poids` float DEFAULT NULL,
  `roue_lib_constr_id` smallint DEFAULT NULL,
  `roue_lib_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`roue_lib_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.roues_libres : ~4 rows (environ)
DELETE FROM `roues_libres`;
INSERT INTO `roues_libres` (`roue_lib_id`, `roue_lib_nom`, `roue_lib_mod`, `roue_lib_nbr_vit`, `roue_lib_dev`, `roue_lib_poids`, `roue_lib_constr_id`, `roue_lib_mat_id`) VALUES
	(1, 'inconnu', 'inconnu', 1, '', 0, 1, 1),
	(2, 'inconnu', 'inconnu', 3, '//', 0, 1, 1),
	(3, 'inconnu', 'inconnu', 5, '////', 0, 1, 1),
	(4, 'inconnu', 'inconnu', 6, '/////', 0, 1, 1);

-- Listage de la structure de table bikes. selles
CREATE TABLE IF NOT EXISTS `selles` (
  `selle_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `selle_nom` varchar(40) DEFAULT NULL,
  `selle_mod` varchar(40) DEFAULT NULL,
  `selle_type` varchar(40) DEFAULT NULL,
  `selle_poids` int DEFAULT NULL,
  `selle_constr_id` smallint DEFAULT NULL,
  `selle_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`selle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.selles : ~4 rows (environ)
DELETE FROM `selles`;
INSERT INTO `selles` (`selle_id`, `selle_nom`, `selle_mod`, `selle_type`, `selle_poids`, `selle_constr_id`, `selle_mat_id`) VALUES
	(1, 'Inconnu', 'inconnu', 'ville', NULL, NULL, 9),
	(2, 'Inconnu', 'inconnu', 'route', NULL, NULL, 10),
	(3, 'Ideal', '88', 'route', NULL, 17, 8),
	(4, 'Italia', 'Turbo', 'route', NULL, 18, 10);

-- Listage de la structure de table bikes. sonnettes
CREATE TABLE IF NOT EXISTS `sonnettes` (
  `sonnette_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `sonnette_nom` varchar(40) DEFAULT NULL,
  `sonnette_mod` varchar(40) DEFAULT NULL,
  `sonnette_type` varchar(40) DEFAULT NULL,
  `sonnette_constr_id` varchar(40) DEFAULT NULL,
  `sonnette_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`sonnette_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.sonnettes : ~2 rows (environ)
DELETE FROM `sonnettes`;
INSERT INTO `sonnettes` (`sonnette_id`, `sonnette_nom`, `sonnette_mod`, `sonnette_type`, `sonnette_constr_id`, `sonnette_mat_id`) VALUES
	(0, NULL, NULL, NULL, NULL, NULL),
	(1, 'Peugeot', 'inconnu', 'à couvercle', '4', 1);

-- Listage de la structure de table bikes. tiges_selles
CREATE TABLE IF NOT EXISTS `tiges_selles` (
  `tige_selle_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `tige_selle_nom` varchar(40) DEFAULT NULL,
  `tige_selle_mod` varchar(40) DEFAULT NULL,
  `tige_selle_type` varchar(40) DEFAULT NULL,
  `tige_selle_diam` int DEFAULT NULL,
  `tige_selle_long` int DEFAULT NULL,
  `tige_selle_poids` int DEFAULT NULL,
  `tige_selle_constr_id` smallint DEFAULT NULL,
  `tige_selle_mat_id` smallint DEFAULT NULL,
  PRIMARY KEY (`tige_selle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table bikes.tiges_selles : ~3 rows (environ)
DELETE FROM `tiges_selles`;
INSERT INTO `tiges_selles` (`tige_selle_id`, `tige_selle_nom`, `tige_selle_mod`, `tige_selle_type`, `tige_selle_diam`, `tige_selle_long`, `tige_selle_poids`, `tige_selle_constr_id`, `tige_selle_mat_id`) VALUES
	(1, 'Inconnu', 'inconnu', 'inconnu', NULL, NULL, NULL, NULL, 1),
	(2, 'Peugeot', 'inconnu', 'inconnu', NULL, NULL, NULL, 4, 1),
	(3, 'Inconnu', 'inconnu', 'inconnu', NULL, NULL, NULL, NULL, 6);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
