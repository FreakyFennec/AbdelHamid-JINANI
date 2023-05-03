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


-- Listage de la structure de la base pour cinema_hamid
CREATE DATABASE IF NOT EXISTS `cinema_hamid` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cinema_hamid`;

-- Listage de la structure de table cinema_hamid. acteur
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int NOT NULL AUTO_INCREMENT,
  `id_personne` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_acteur`),
  KEY `FK_acteur_personne` (`id_personne`),
  CONSTRAINT `FK_acteur_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.acteur : ~52 rows (environ)
DELETE FROM `acteur`;
INSERT INTO `acteur` (`id_acteur`, `id_personne`) VALUES
	(1, 2),
	(2, 3),
	(3, 4),
	(4, 6),
	(5, 7),
	(6, 8),
	(7, 10),
	(8, 11),
	(9, 12),
	(10, 14),
	(11, 15),
	(12, 16),
	(13, 17),
	(14, 18),
	(15, 19),
	(16, 20),
	(17, 21),
	(18, 23),
	(19, 24),
	(20, 25),
	(21, 26),
	(22, 26),
	(23, 27),
	(24, 28),
	(25, 29),
	(26, 30),
	(27, 32),
	(28, 33),
	(29, 34),
	(30, 35),
	(31, 36),
	(32, 37),
	(33, 38),
	(34, 39),
	(35, 40),
	(36, 41),
	(37, 42),
	(38, 48),
	(39, 49),
	(40, 50),
	(41, 51),
	(42, 52),
	(43, 53),
	(44, 60),
	(45, 62),
	(46, 63),
	(47, 64),
	(48, 65),
	(49, 66),
	(50, 76),
	(51, 78),
	(52, 79);

-- Listage de la structure de table cinema_hamid. appartenir
CREATE TABLE IF NOT EXISTS `appartenir` (
  `id_film` int NOT NULL,
  `id_genre_film` int NOT NULL,
  KEY `FK_appartenir_film_2` (`id_film`),
  KEY `FK_appartenir_genre` (`id_genre_film`),
  CONSTRAINT `FK_appartenir_film_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_appartenir_genre` FOREIGN KEY (`id_genre_film`) REFERENCES `genre` (`id_genre_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.appartenir : ~25 rows (environ)
DELETE FROM `appartenir`;
INSERT INTO `appartenir` (`id_film`, `id_genre_film`) VALUES
	(1, 6),
	(2, 4),
	(3, 6),
	(4, 15),
	(5, 15),
	(6, 6),
	(7, 4),
	(8, 15),
	(9, 6),
	(10, 15),
	(26, 15),
	(22, 15),
	(23, 6),
	(24, 6),
	(25, 6),
	(27, 9),
	(21, 11),
	(28, 15),
	(29, 15),
	(30, 15),
	(31, 9),
	(32, 15),
	(33, 6),
	(34, 6),
	(35, 6);

-- Listage de la structure de table cinema_hamid. casting
CREATE TABLE IF NOT EXISTS `casting` (
  `id_film` int DEFAULT NULL,
  `id_acteur` int DEFAULT NULL,
  `id_role` int DEFAULT NULL,
  KEY `FK_casting_film` (`id_film`),
  KEY `FK_casting_role` (`id_role`),
  KEY `FK_casting_acteur_2` (`id_acteur`),
  CONSTRAINT `FK_casting_acteur_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`),
  CONSTRAINT `FK_casting_film` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  CONSTRAINT `FK_casting_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.casting : ~48 rows (environ)
DELETE FROM `casting`;
INSERT INTO `casting` (`id_film`, `id_acteur`, `id_role`) VALUES
	(1, 1, 1),
	(1, 2, 2),
	(1, 3, 3),
	(2, 4, 4),
	(2, 5, 5),
	(2, 6, 6),
	(3, 7, 7),
	(3, 8, 8),
	(3, 9, 9),
	(4, 7, 10),
	(4, 10, 11),
	(4, 11, 13),
	(4, 12, 12),
	(5, 13, 14),
	(5, 14, 15),
	(5, 15, 16),
	(5, 16, 17),
	(5, 17, 18),
	(6, 18, 19),
	(6, 19, 20),
	(6, 20, 21),
	(6, 21, 22),
	(7, 22, 24),
	(7, 23, 24),
	(7, 24, 25),
	(7, 25, 26),
	(7, 26, 27),
	(8, 26, 28),
	(8, 27, 29),
	(8, 28, 30),
	(8, 29, 31),
	(8, 30, 32),
	(9, 31, 34),
	(9, 32, 35),
	(9, 33, 36),
	(9, 34, 37),
	(9, 35, 38),
	(9, 36, 39),
	(9, 37, 40),
	(10, 38, 41),
	(10, 39, 42),
	(10, 40, 43),
	(10, 41, 44),
	(10, 42, 45),
	(10, 43, 46),
	(10, 7, 47),
	(21, 50, 48),
	(22, 51, 49),
	(28, 52, 50);

-- Listage de la structure de table cinema_hamid. film
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int NOT NULL AUTO_INCREMENT,
  `titre_film` varchar(250) NOT NULL,
  `date_sortie_fr` date NOT NULL,
  `duree_film` int NOT NULL,
  `synopsis_film` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `affiche_film` varchar(50) NOT NULL,
  `note_film` int NOT NULL,
  `id_realisateur` int NOT NULL,
  PRIMARY KEY (`id_film`),
  KEY `id_realisateur` (`id_realisateur`),
  CONSTRAINT `FK_film_realilsateur` FOREIGN KEY (`id_realisateur`) REFERENCES `realisateur` (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.film : ~25 rows (environ)
DELETE FROM `film`;
INSERT INTO `film` (`id_film`, `titre_film`, `date_sortie_fr`, `duree_film`, `synopsis_film`, `affiche_film`, `note_film`, `id_realisateur`) VALUES
	(1, 'L\'Homme qui défiait l\'infini', '2017-01-01', 108, 'Srinivasa Ramanujan est l\'un des plus grands mathématiciens de notre temps. Élevé à Madras en Inde, il intègre la prestigieuse université de Cambridge en Angleterre pendant la Première Guerre mondiale et y développe de nombreuses théories mathématiques sous l\'égide de son professeur G.H. Hardy. ', 'assets/img/L-homme-qui-defiait-l-infini.jpg', 5, 1),
	(2, 'Jagame Thandhiram', '2021-06-21', 158, 'Quand un gangster habile et insouciant est recruté par un baron de la pègre étranger pour éliminer un rival, les dilemmes moraux qui s\'ensuivent le prennent au dépourvu.', 'assets/img/jagame-thandhiram.jpg', 2, 2),
	(3, 'K-19 - Le Piège des profondeurs', '2002-09-18', 138, 'En juin 1961, en pleine Guerre froide, dans les eaux de l\'Atlantique nord, Alexei Vostrikov, le capitaine du premier sous-marin nucléaire de l\'arsenal soviétique, le K-19, découvre que le système de refroidissement du réacteur principal est défaillant. A son bord, des ogives et un moteur à propulsion atomique menacent d\'exploser si la température au coeur du réacteur ne baisse pas rapidement. ', 'assets/img/k_19_le_piege_des_profondeurs.jpg', 3, 3),
	(4, 'Blade Runner', '1982-09-15', 111, 'En novembre 2019, dans un Los Angeles pluvieux et crépusculaire, perpétuellement couvert de smog. La planète a vu disparaitre la quasi-totalité de la faune, à la suite de la surexploitation, de la pollution, des guerres (nucléaires) et du dérèglement climatique d\'origine anthropique. La population est encouragée à émigrer vers les colonies situées sur d\'autres planètes. Pour les besoins des humains ont été créés des animaux artificiels, ainsi que des androïdes, non pas des robots mécaniques mais des êtres vivants dont les organes, fabriqués indépendamment, et par manipulation génétique, sont assemblés pour leur donner apparence humaine.', 'assets/img/Blade-Runner.jpg', 5, 4),
	(5, 'Prometheus', '2012-04-11', 124, 'En 2093, des scientifiques cherchent à dépasser leurs limites mentales et physiques et tentent d\'explorer ce qu\'il y a au-delà du possible. Ils vont être amenés à découvrir un indice sur l\'origine de l\'humanité sur Terre. Cette découverte les entraîne dans un voyage fascinant jusqu\'aux recoins les plus sombres de l\'univers.', 'assets/img/prometheus.jpg', 4, 4),
	(6, 'Lolita', '1962-01-01', 153, 'Humbert Humbert, professeur de littérature française, cherche à louer une chambre pour l\'été dans le New Hampshire. À cette occasion, il se présente chez Charlotte Haze, une veuve en mal d\'amour qui, jouant les enjôleuses et les érudites, lui fait visiter sa maison et lui vante tous les avantages de la chambre à louer. C\'est uniquement parce qu\'il découvre l\'existence de la jeune fille de Charlotte, Dolorès (surnommée « Lolita »), dont il tombe amoureux et pour rester auprès d\'elle qu\'Humbert loue la chambre puis épouse la mère.', 'assets/img/Lolita.jpg', 4, 5),
	(7, 'Docteur Folamour', '1964-01-01', 95, 'En pleine guerre froide, le général de l\'Armée de l\'air américaine Jack D. Ripper, frappé de folie paranoïaque, décide, seul et alors qu\'aucune menace ne le justifiait, d’envoyer ses quarante-deux bombardiers B-52 munis de bombes atomiques frapper l’URSS. Puis il coupe sa base de l\'extérieur, et le Pentagone n\'a aucun moyen de rappeler ces avions, une procédure prévue pour garantir la destruction mutuelle assurée dans l\'hypothèse que les USA étaient déjà touchés. Le président des États-Unis (interprété par Peter Sellers), à la demande de son chef d\'état-major, le général Turgidson, commande une réunion d\'urgence dans la salle souterraine de commandement stratégique pour tenter d\'éviter une guerre nucléaire.', 'assets/img/dr-folamour-fr.jpg', 3, 5),
	(8, '2001, l\'Odyssée de l\'espace', '1968-01-01', 156, 'Le film est divisé en quatre actes distincts : dans le premier acte, qui se déroule « à l\'aube de l\'humanité », on suit des hominidés bipèdes qui découvrent l\'usage de l\'outil, après que ceux-ci ont touché un monolithe noir mystérieux. Dans le second acte, qui se déroule en 2001, on suit le docteur Heywood R. Floyd lors de son voyage sur la Lune quand un monolithe identique y est découvert. Dans le troisième acte, deux astronautes, le Dr David Bowman et Frank Poole entreprennent un voyage vers la planète Jupiter à bord du vaisseau spatial Discovery One, à la suite du signal radio émis par le monolithe de la Lune vers Jupiter.', 'assets/img/2001-l-odyssee-de-l-espacek.jpg', 4, 5),
	(9, 'La mule', '2018-01-01', 116, 'Earl Stone est un paisible horticulteur âgé de plus de 80 ans, ancien combattant de la guerre de Corée. Endetté jusqu’au cou et sans perspective réelle d’emploi, il accepte un travail particulièrement facile et lucratif : celui de chauffeur. On lui demande seulement de transporter des sacs d\'El Paso à l\'Illinois au volant de son pick-up. Il découvre assez rapidement qu\'il s\'agit de drogue et qu\'il travaille pour le compte d’un cartel mexicain : un go fast apaisé, pense-t-il. Mais alors que ses factures passent au rayon des mauvais souvenirs, le poids de son passé refait surface : aider la famille et les amis.', 'assets/img/la-mule.jpg', 4, 6),
	(10, 'Star Wars, épisode IV : Un nouvel espoir', '1977-05-25', 121, 'L\'univers de Star Wars se déroule dans une galaxie qui est le théâtre d\'affrontements entre les Chevaliers Jedi et les Seigneurs noirs des Sith, personnes sensibles à la Force, un champ énergétique mystérieux leur procurant des pouvoirs psychiques. Les Jedi maîtrisent le Côté lumineux de la Force, pouvoir bénéfique et défensif, pour maintenir la paix dans la galaxie. Les Sith utilisent le Côté obscur, pouvoir nuisible et destructeur, pour leurs usages personnels et pour dominer la galaxie1. ', 'assets/img/Star-Wars-episode-IV.jpg', 4, 7),
	(21, 'Dracula', '1931-10-28', 75, 'Renfield, chargé de conclure une transaction immobilière avec le comte Dracula, se rend dans son château des Carpates, où l&#39;aristocrate, qui s&#39;avère être un vampire, va l&#39;hypnotiser pour le mettre sous ses ordres.', 'assets/img/Dracula_movie_poster_Style_F.jpg', 3, 22),
	(22, 'Wolverine : Le Combat de l\'immortel', '2013-01-01', 126, 'Sept ans après L&#39;Affrontement final, Logan, l’éternel guerrier marginal, vit reclus dans les montagnes et fait difficilement le deuil de Jean Grey. Sur invitation donnée par Yukio, une mutante capable de lire l&#39;avenir et de voir la mort des autres, il se rend au Japon. ', 'assets/img/wolverine-le-combat-de-l-immortel.jpg', 4, 9),
	(23, 'Après la pluie', '1999-01-01', 91, 'L\'histoire se déroule dans le Japon du XVIIIe siècle. Alors qu\'une terrible tempête fait déborder la rivière, de nombreux voyageurs sont bloqués dans une auberge isolée. Parmi ces voyageurs se trouve un samouraï sans maître (rōnin) du nom d\'Ihei Misawa, accompagné de sa femme Tayo. Ihei, qui excelle dans l\'art du sabre (iaijutsu et kenjutsu) a participé à des duels primés, activité déshonorante pour un samouraï mais nécessaire pour gagner de l\'argent et de la nourriture avec lesquels il espère pouvoir distraire un instant la vie difficile de ses compagnons d\'infortune.', 'assets/img/Apres-la-pluie.jpg', 5, 10),
	(24, 'Dersou Ouzala', '1975-01-01', 141, 'Ce film relate l\'étonnante mais très forte amitié entre un autochtone sibérien (un Hezhen) et un topographe russe, au début du XXe siècle. Il est tiré du récit autobiographique de l\'officier-topographe Vladimir Arseniev, chargé par l\'armée impériale russe de faire le relevé de terres alors encore inexplorées dans la vallée de l\'Oussouri, à la frontière chinoise.', 'assets/img/Dersou-Ouzala.jpg', 5, 11),
	(25, 'Blancanieves', '2012-01-01', 105, 'Dans les années 1920 à Séville, Antonio Villalta, un célèbre matador, est grièvement blessé par un taureau lors d’un combat. Au même moment, son épouse, une chanteuse de flamenco, meurt lors de l’accouchement de leur fille Carmen. Attirée par la fortune de l’homme, Encarna, l’infirmière qui s’était occupée d’Antonio Villalta, épouse ce dernier. N’ayant jamais connu sa mère et ne voyant jamais son père, la petite Carmen passe les premières années de sa vie aux côtés de sa grand-mère Doña Concha, mais celle-ci décède subitement. ', 'assets/img/blancanieves.jpg', 5, 12),
	(26, 'Alien, le 8ème passager', '1979-01-01', 117, 'Durant le voyage-retour du cargo spatial Nostromo après une mission commerciale de routine, l\'équipage, cinq hommes et deux femmes plongés en hibernation2 depuis dix mois sont tirés de leur léthargie plus tôt que prévu par l\'ordinateur de bord du vaisseau2. Ce dernier a en effet capté des signaux radio inconnus dans l\'espace2 et, du fait d\'une clause attenante à leur contrat de navigation, l\'équipage du vaisseau est tenu de vérifier tout indice de vie extraterrestre. ', 'assets/img/alien-le-huitieme-passager.jpg', 5, 4),
	(27, 'Immortel, ad vitam', '2004-01-01', 91, 'L\'histoire se situe en 2095, dans un New York futuriste et sinistré, peuplé d&#39;humains normaux, d&#39;humains génétiquement modifiés et de mutants. La ville subit le joug d&#39;une dictature et, telle Metropolis, est divisée en trois zones stratifiées. ', 'assets/img/immortel-ad-vitam.jpg', 4, 13),
	(28, 'Planète interdite', '1956-01-01', 98, 'En 2257, le croiseur spatial C-57D, avec à sa tête le commandant John Adams, est en route vers la planète Altaïr IV pour secourir le Bellérophon, un vaisseau d\'exploration dont l\'équipage n\'a plus donné signe de vie depuis dix-neuf ans. Au moment de l\'approche, le professeur Edward Morbius, un ancien membre de cette expédition perdue, contacte soudainement le croiseur et déclare qu\'il n\'a besoin d\'aucun secours. Il met en garde le commandant et prévient qu\'il ne pourra pas garantir la sécurité de ses hommes. Néanmoins, Adams décide de se poser sur Altaïr IV. ', 'assets/img/Forbidden-planet.jpg', 5, 14),
	(29, 'Transcendance', '2014-01-01', 119, 'Le Dr Will Caster (Johnny Depp) est un scientifique motivé par sa curiosité concernant la nature de l\'univers. Membre d\'une équipe dont le but est de créer un ordinateur sensible, il prédit qu\'un tel ordinateur créera une singularité technologique ou, selon ses propres termes, une « transcendance ». Son épouse Evelyn (Rebecca Hall), qu\'il aime profondément, soutient ses efforts et le rejoint dans leur jardin où il a construit une cage de Faraday pour faire obstacle aux signaux radioélectriques. Toutefois, le groupe extrémiste RIFT (groupe révolutionnaire d\'indépendance vis-à-vis de la technologie) tire sur Will avec une balle qui l\'empoisonne au polonium radioactif , et réalise une série d\'attaques synchronisées sur ses laboratoires d\'intelligence artificielle.', 'assets/img/transcendance.jpg', 5, 15),
	(30, 'Looper', '2012-01-01', 118, 'En 2074, le voyage dans le temps a été mis au point. Comme la technologie d\'identification est tellement développée qu\'il est impossible de camoufler un crime, les organisations criminelles utilisent le voyage dans le passé pour se débarrasser des individus gênants en les envoyant vivants dans le passé pour que ces derniers soient exécutés et faire disparaître définitivement leur corps. Pour cette raison, le voyage dans le temps a été déclaré illégal.', 'assets/img/Looper.jpg', 5, 16),
	(31, 'La plateforme', '2019-01-01', 91, 'Dans une prison verticale appelée « la fosse », des prisonniers sont répartis deux par deux sur plusieurs centaines de niveaux. Tous les mois, les niveaux sont réattribués de manière aléatoire, chaque couple de prisonniers pouvant se retrouver au sommet de la fosse, ou au contraire, bien plus en profondeur. ', 'assets/img/La-plateforme.jpg', 5, 17),
	(32, 'Matrix', '1999-01-01', 141, 'Thomas A. Anderson17, un jeune informaticien connu dans le monde du hacking sous le pseudonyme de Neo18, est contacté via son ordinateur par ce qu’il pense être un groupe de hackers. Ils lui font découvrir que le monde dans lequel il vit n’est qu’un monde virtuel appelé la Matrice, à l\'intérieur duquel les êtres humains sont gardés inconsciemment sous contrôle.', 'assets/img/Matrix.jpg', 5, 18),
	(33, 'Parasite', '2004-01-01', 132, 'La famille Kim, pauvre et au chômage, vit d\'expédients dans un taudis en sous-sol. Un jour, le fils réussit, au moyen d\'un faux diplôme, à se faire embaucher pour donner des cours d\'anglais à la fille d\'une famille richissime. C’est le début d\'une succession d\'événements qui vont rapprocher les deux familles.', 'assets/img/Parasite.jpg', 5, 19),
	(34, 'Into the wild', '2007-01-01', 148, 'Christopher McCandless est un étudiant américain brillant qui vient d\'obtenir son diplôme et qui est promis à un grand avenir. Rejetant les principes de la société moderne, après un dîner dans un restaurant avec ses parents, pour fêter son diplôme, il décide de partir sur les routes, sans prévenir sa famille. Il renonce ainsi au rêve américain pour une vie aventurière. Il brûle ses papiers et envoie toutes ses économies à Oxfam. Il part en voiture vers le sud des États-Unis', 'assets/img/Into-the-wild.jpg', 5, 20),
	(35, 'Le Pornographe', '1966-01-01', 128, 'Le film raconte l\'histoire d\'un réalisateur de film pornographique, M. Ogata, dont l\'activité est menacée par les voleurs, le gouvernement, et par sa propre famille.', 'assets/img/Le-pornographe.jpg', 5, 21);

-- Listage de la structure de table cinema_hamid. genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre_film` int NOT NULL AUTO_INCREMENT,
  `type_genre_film` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_genre_film`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.genre : ~17 rows (environ)
DELETE FROM `genre`;
INSERT INTO `genre` (`id_genre_film`, `type_genre_film`) VALUES
	(1, 'Animation'),
	(2, 'Aventure'),
	(3, 'Biopic'),
	(4, 'Comédie'),
	(5, 'Documentaire'),
	(6, 'Drame'),
	(7, 'Erotique'),
	(8, 'Espionnage'),
	(9, 'Fantastique'),
	(10, 'Historique'),
	(11, 'Horreur'),
	(12, 'Musique'),
	(13, 'Navet'),
	(14, 'Policier'),
	(15, 'Sci-fi'),
	(16, 'Thriller'),
	(17, 'Western');

-- Listage de la structure de table cinema_hamid. personne
CREATE TABLE IF NOT EXISTS `personne` (
  `id_personne` int NOT NULL AUTO_INCREMENT,
  `nom_personne` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `prenom_personne` varchar(50) NOT NULL,
  `date_naiss_personne` date NOT NULL,
  `lieu_naiss_personne` varchar(50) NOT NULL,
  `genre_personne` varchar(50) NOT NULL,
  PRIMARY KEY (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.personne : ~74 rows (environ)
DELETE FROM `personne`;
INSERT INTO `personne` (`id_personne`, `nom_personne`, `prenom_personne`, `date_naiss_personne`, `lieu_naiss_personne`, `genre_personne`) VALUES
	(1, 'Brown', 'Matt', '1980-01-01', 'Canada', 'H'),
	(2, 'Patel', 'Dev', '1990-04-23', 'Grande-Bretagne', 'H'),
	(3, 'Irons', 'Jeremy', '1948-09-19', 'Grande-Bretagne', 'H'),
	(4, 'Jones', 'Tobias', '1966-09-07', 'Grande-Bretagne', 'H'),
	(5, 'Subbaraj', 'Karthik', '1983-03-19', 'Indes', 'H'),
	(6, 'Dhanush', 'V', '1983-02-25', 'Indes', 'H'),
	(7, 'Lekshmi', 'Aishwarya', '1990-09-06', 'Indes', 'F'),
	(8, 'Cosmo', 'James', '1948-05-24', 'Grande-Bretagne', 'H'),
	(9, 'Biglow', 'Kathryn', '1951-11-17', 'États-Unis', 'F'),
	(10, 'Ford', 'Harrison', '1942-07-13', 'États-Unis', 'H'),
	(11, 'Neeson', 'Liam', '1952-06-07', 'Grande-Bretagne', 'H'),
	(12, 'Sarsgaard', 'Peter', '1971-03-07', 'États-Unis', 'H'),
	(13, 'Scott', 'Ridley', '1937-11-30', 'Grande-Bretagne', 'H'),
	(14, 'Hauer', 'Rutger', '1944-01-23', 'Pays-Bas', 'H'),
	(15, 'Hannah', 'Daryl', '1960-12-03', 'États-Unis', 'F'),
	(16, 'Young', 'Sean', '1959-11-20', 'États-Unis', 'F'),
	(17, 'Rapace', 'Noomi', '1979-12-28', 'Suède', 'F'),
	(18, 'Fassebender', 'Michael', '1977-04-02', 'Allemagne', 'H'),
	(19, 'Theron', 'Charlize', '1975-08-07', 'Afrique du Sud', 'F'),
	(20, 'Elba', 'Idris', '1972-09-06', 'États-Unis', 'H'),
	(21, 'Pearce', 'Guy', '1967-10-05', 'Australie', 'H'),
	(22, 'Kubrick', 'Stanley', '1928-07-26', 'États-Unis', 'H'),
	(23, 'Masson', 'James', '1909-05-15', 'Grande-Bretagne', 'H'),
	(24, 'Winters', 'Shelley', '1920-08-18', 'États-Unis', 'F'),
	(25, 'Lyon', 'Sue', '1946-07-10', 'États-Unis', 'F'),
	(26, 'Sellers', 'Peter', '1925-07-08', 'Grande-Bretagne', 'H'),
	(27, 'Scott', 'George C.', '1927-10-18', 'États-Unis', 'H'),
	(28, 'Hayden', 'Sterling', '1916-03-26', 'États-Unis', 'H'),
	(29, 'Wynn', 'Keenan', '1916-07-27', 'États-Unis', 'H'),
	(30, 'Pickens', 'Slim', '1919-06-29', 'États-Unis', 'H'),
	(31, 'Dullea', 'Keir', '1936-05-30', 'États-Unis', 'H'),
	(32, 'Lockwood', 'Gary', '1937-02-21', 'États-Unis', 'H'),
	(33, 'Sylvester', 'William', '1922-01-31', 'États-Unis', 'H'),
	(34, 'Richter', 'Daniel', '1939-01-01', 'États-Unis', 'H'),
	(35, 'Rossiter', 'Leonard', '1926-10-21', 'Grande-Bretagne', 'H'),
	(36, 'Eastwood', 'Clint', '1930-05-31', 'États-Unis', 'H'),
	(37, 'Cooper', 'Bradley', '1975-01-05', 'États-Unis', 'H'),
	(38, 'Fishburne', 'Laurence', '1961-07-31', 'États-Unis', 'H'),
	(39, 'Peña ', 'Michael', '1976-01-30', 'États-Unis', 'H'),
	(40, 'Wiest', 'Dianne', '1948-03-28', 'États-Unis', 'F'),
	(41, 'Garcia', 'Andy', '1956-04-12', 'Cuba', 'H'),
	(42, 'Collins', 'Clifton Jr', '1970-06-16', 'Mexique', 'H'),
	(47, 'Lucas', 'Georges', '1944-05-14', 'États-Unis', 'H'),
	(48, 'Hamill', 'Mark', '1951-09-25', 'États-Unis', 'H'),
	(49, 'Fisher', 'Carrie', '1956-10-21', 'États-Unis', 'F'),
	(50, 'Cushing', 'Peter', '1913-05-26', 'Grande-Bretagne', 'H'),
	(51, 'Guinness', 'Alec', '1914-04-02', 'Grande-Bretagne', 'H'),
	(52, 'Daniels', 'Anthony', '1946-02-21', 'Grande-Bretagne', 'H'),
	(53, 'Baker', 'Kenny', '1934-08-24', 'Grande-Bretagne', 'H'),
	(54, 'Murnau', 'Friedrich Wilhelm', '1888-12-28', 'Allemagne', 'H'),
	(55, 'Mangold', 'James', '1963-12-16', 'États-Unis', 'H'),
	(56, ' Koizumi', 'Takashi', '1944-11-06', 'Japon', 'H'),
	(57, 'Kurosawa', 'Akira', '1910-03-23', 'Japon', 'H'),
	(58, 'Berger', 'Pablo', '1963-01-01', 'Espagne', 'H'),
	(59, 'Bilal', 'Enki', '1951-10-07', 'Yougoslavie', 'H'),
	(60, 'Weaver', 'Sigourney', '1949-10-08', 'États-Unis', 'F\r\n'),
	(61, 'Skerritt', 'Tom', '1956-01-01', 'rtr', 'F'),
	(62, 'Cartwright ', 'Veronica', '1899-02-01', 'iyurytui', 'F'),
	(63, 'Stanton', 'Harry Dean', '1899-02-01', 'iyurytui', 'F'),
	(64, 'Hurt', 'John', '1899-02-01', 'iyurytui', 'H'),
	(65, 'Holm', 'Ian', '0912-09-15', 'Russie', 'H'),
	(66, 'Kotto', 'Yaphet', '0912-09-15', 'Etats-Unis', 'F'),
	(68, 'Wilcox', 'Fred McLeod', '2023-01-18', 'États-Unis', 'H'),
	(69, 'Pfister', 'Walter', '1961-07-08', 'États-Unis', 'H'),
	(70, 'Johnson', 'Rian Craig', '1973-12-17', 'États-Unis', 'H'),
	(71, 'Gaztelu-Urrutia', 'Galder', '0001-01-01', 'Espagne', 'H'),
	(72, 'Wachowski', ' 	Les', '0001-01-01', 'États-Unis', 'A'),
	(73, 'Joon-ho', 'Bong', '1969-09-14', 'Corée du sud', 'H'),
	(74, 'Penn', 'Sean Justin', '1960-08-17', 'États-Unis', 'H'),
	(75, 'Imamura', 'Shohei', '1926-09-15', 'Japon', 'H'),
	(76, 'Lugozi', 'B&eacute;la', '1882-10-20', 'Hongrie', 'H'),
	(77, 'Browning', 'Tod', '1880-07-12', 'États-Unis', 'H'),
	(78, 'Jackman', 'Hugh Michael', '1968-10-12', 'Australie', 'H'),
	(79, 'Pigeon', 'Walter Davis', '1897-07-23', 'Canada', 'H');

-- Listage de la structure de table cinema_hamid. realisateur
CREATE TABLE IF NOT EXISTS `realisateur` (
  `id_realisateur` int NOT NULL AUTO_INCREMENT,
  `id_personne` int NOT NULL,
  PRIMARY KEY (`id_realisateur`),
  KEY `FK_realilsateur_cinema_hamid.personne` (`id_personne`),
  CONSTRAINT `FK_realilsateur_cinema_hamid.personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.realisateur : ~22 rows (environ)
DELETE FROM `realisateur`;
INSERT INTO `realisateur` (`id_realisateur`, `id_personne`) VALUES
	(1, 1),
	(2, 5),
	(3, 9),
	(4, 13),
	(5, 22),
	(6, 36),
	(7, 47),
	(8, 54),
	(9, 55),
	(10, 56),
	(11, 57),
	(12, 58),
	(13, 59),
	(14, 68),
	(15, 69),
	(16, 70),
	(17, 71),
	(18, 72),
	(19, 73),
	(20, 74),
	(21, 75),
	(22, 77);

-- Listage de la structure de table cinema_hamid. role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Listage des données de la table cinema_hamid.role : ~48 rows (environ)
DELETE FROM `role`;
INSERT INTO `role` (`id_role`, `nom_role`) VALUES
	(1, 'Srinivasa Ramanujan'),
	(2, 'G.H. Hardy'),
	(3, 'John Edensor Littlewood'),
	(4, 'Suruli '),
	(5, 'Attila '),
	(6, 'Peter Sprott '),
	(7, 'Capitaine Alexei Vostrikov'),
	(8, 'Capitaine Mikhail Polenin'),
	(9, 'Lieutenant Vadim Ratchenko'),
	(10, 'Rick Deckard'),
	(11, 'Roy Batty'),
	(12, 'Rachel'),
	(13, 'Pris'),
	(14, 'Elisabeth Shaw'),
	(15, 'David'),
	(16, 'Meredith Vickers'),
	(17, 'Capitaine Janek'),
	(18, 'Charlie Holloway'),
	(19, 'Humbert Humbert'),
	(20, 'Charlotte Haze'),
	(21, 'Dolores « Lolita » Haze'),
	(22, 'Clare Quilty / Dr Zempf'),
	(23, 'Président Merkin Muffley'),
	(24, 'Général « Buck » Turgidson'),
	(25, 'Général Jack D. Ripper'),
	(26, 'Colonel « Bat » Guano'),
	(27, 'Commandant T.J. « King » Kong'),
	(28, 'Dr David Bowman'),
	(29, 'Dr Frank Poole'),
	(30, 'Dr Heywood R. Floyd'),
	(31, 'Moonwatcher ( Guetteur de Lune )'),
	(32, 'Dr Andrei Smyslov'),
	(33, 'Earl Stone'),
	(34, 'Colin Bates'),
	(35, 'Carl'),
	(36, 'agent Trevino'),
	(37, 'Mary'),
	(38, 'Laton'),
	(39, 'Gustavo'),
	(41, 'Luke Skywalker'),
	(42, 'Leia Organa'),
	(43, 'Grand Moff Tarkin'),
	(44, 'Obi-Wan « Ben » Kenobi'),
	(45, 'C-3PO'),
	(46, 'R2-D2'),
	(47, 'Han Solo'),
	(48, 'Comte Dracula'),
	(49, 'Logan / Wolverine'),
	(50, 'Professeur Edward Morbius');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
