<?php
    namespace Controller;
    use Model\Connect;

    class CinemaController {

        /**
         * Afficher la page admin.php
         */
        public function displayAdmin() {

            $pdo = Connect::seConnecter();
            require "view/admin.php";
        }
        /**
         * Lister les films
         */
        public function listFilms($page = 1, $perPage = 24) {
            $offset = ($page - 1) * $perPage;

            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare("
                SELECT id_film, titre_film, affiche_film, alt_affiche, 
                    DATE_FORMAT(date_sortie_fr, '%Y') AS date_sortie_fr
                FROM film
                ORDER BY id_film
                LIMIT :perPage OFFSET :offset
            ");

            $requete->bindValue(':perPage', $perPage, \PDO::PARAM_INT);
            $requete->bindValue(':offset', $offset, \PDO::PARAM_INT);
            $requete->execute();

            $resultats = $requete->fetchAll();

            require "view/listFilms.php";
        }

        /**
         * Lister les acteurs
         */
        public function listActeurs() {

            $pdo = Connect::seConnecter();

            /**
             * Requête pour afficher la date en français
             * */ 
            $pdo->prepare("SET lc_time_names = 'fr_FR'")->execute();

            /**
             * Req pour lister tous les acteurs
             */
            $requete = $pdo->query("
                SELECT *,
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur,
                    DATE_FORMAT(date_naiss_personne, '%d %M %Y') AS date_naiss
                FROM personne p
                INNER JOIN acteur a
                    ON p.id_personne = a.id_personne
            ");

            require "view/listActeurs.php";
        }

        /**
         * Lister les réalisateurs
         */
        public function listRealisateurs() {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT *,
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
                FROM personne p
                INNER JOIN realisateur r
                    ON p.id_personne = r.id_personne
            ");

            require "view/listRealisateurs.php";
        }

        /**
         * Requêtes pour les détails d'un film
         */
        public function detailFilm($id) {

            $pdo = Connect::seConnecter();

            /**
             * Requête pour afficher la date en français
             * */ 
            $pdo->prepare("SET lc_time_names = 'fr_FR'")->execute();

            /**
            * Requête pour détail du film
            */
            $requete1 = $pdo->prepare("
                SELECT *, 
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur,
                    DATE_FORMAT(f.date_sortie_fr, '%d %M %Y') AS date_sortie_fr
                FROM film f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON r.id_personne = p.id_personne
                INNER JOIN genre g
                    ON f.genre_id = g.id_genre_film
                WHERE id_film = :id
            ");
            $requete1->execute(["id"=> $id]);

            /**
             * Req pour la date en format fr.
             */
            $reqDate = $pdo->prepare("
            SET lc_time_names = 'fr_FR';
            ");
           
            /**
             * Requête pour le casting du film.
             */
            $requete2 = $pdo->prepare("
            SELECT f.id_film, f.titre_film, f.duree_film,
                DATE_FORMAT(f.date_sortie_fr, '%d%M%Y') AS date_fr, 
                CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur, r.nom_role
            FROM acteur a
            INNER JOIN casting c
                ON a.id_acteur = c.id_acteur
            INNER JOIN personne p
                ON a.id_personne = p.id_personne
            INNER JOIN role r
                ON c.id_role = r.id_role
            INNER JOIN film f
                ON c.id_film = f.id_film
            WHERE f.id_film = :id

            ");
            $requete2->execute(["id"=>$id]);
 
            require "view/detailFilm.php";
        }

        /**
         * Requête pour les rôles des acteurs
         */
        public function rolesActeur($id) {

            $pdo = Connect::seConnecter();
            $requete1 = $pdo->prepare("
                SELECT 
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_acteur
                FROM personne p
                INNER JOIN acteur a
                    ON p.id_personne = a.id_personne
                WHERE p.id_personne = :id
            ");
            $requete1->execute(["id"=> $id]);

            $requete2 = $pdo->prepare("
                SELECT 
                    f.id_film,                  
                    r.nom_role,
                    f.titre_film,
                    DATE_FORMAT(date_sortie_fr, '%d %M %Y') AS date_sortie_fr
                FROM personne p
                INNER JOIN acteur a
                    ON p.id_personne = a.id_personne
                INNER JOIN casting c
                    ON a.id_acteur = c.id_acteur
                INNER JOIN film f
                    ON c.id_film = f.id_film
                INNER JOIN role r
                    ON r.id_role = c.id_role
                WHERE p.id_personne = :id
                ORDER BY f.date_sortie_fr DESC
            ");
            $requete2->execute(["id"=> $id]);

            require "view/filmographieActeur.php";
        }

        /**
         * Requête filmographie d'un réalisateur
         */
        public function filmographieRealisateur($id) {

            $pdo = Connect::seConnecter();

            
            /**
             * Requête pour afficher la date en français
             * */ 
            $pdo->prepare("SET lc_time_names = 'fr_FR'")->execute();

            /**
             * Req pour le nom du réalisateur
             */
            $requete1 = $pdo->prepare("
                SELECT 
                    CONCAT(p.prenom_personne,' ', p.nom_personne) AS nom_realisateur
                FROM personne p
                INNER JOIN realisateur r
                    ON p.id_personne = r.id_personne
                WHERE r.id_realisateur = :id
            ");
            $requete1->execute(["id"=> $id]);

            /**
             * Req pour la filmographie
             */
            $requete2 = $pdo->prepare("               
                SELECT
                    COUNT(f.id_film) AS nbr_films, 
                    f.id_film,
                    titre_film,
                    DATE_FORMAT(f.date_sortie_fr, '%d %M %Y') AS date_fr,
                    duree_film, 
                    GROUP_CONCAT(genre_film) AS genres
                FROM film f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON p.id_personne = r.id_personne
                LEFT JOIN appartenir a                                  -- Lef Join pour afficher quelquechose même si le champs est vide
                    ON f.id_film = a.id_film
                LEFT JOIN genre g
                    ON a.id_genre_film = g.id_genre_film
                WHERE r.id_realisateur = :id
                GROUP BY f.id_film
            ");
            $requete2->execute(["id"=> $id]);

            require "view/filmographieRealisateur.php";
        }

        /**
         * Requête liste des genres
         */
        public function listGenres() {
            
            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT 
                    COUNT(a.id_film) AS nbr_films, 
                    g.genre_film,
                    g.id_genre_film AS id_genre_film
                FROM genre g
                LEFT JOIN appartenir a
                    ON a.id_genre_film = g.id_genre_film
                GROUP BY g.id_genre_film
                ORDER BY COUNT(genre_film) DESC
            ");
            
            require "view/listGenres.php";
        }

        /**
         * Requête liste rôles.
         */
        public function listRoles () {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT 
                    r.nom_role,
                    c.id_film 
                FROM role r
                INNER JOIN casting c
                    ON r.id_role = c.id_acteur
            ");

            require "view/listRoles.php";
        }

        /**
         * Requête liste films par genre.
         */
        public function listParGenre($id) {

            $pdo = Connect::seConnecter();
           
            /**
             * Req pour afficher la date en français.
             * */ 
            $pdo->prepare("SET lc_time_names = 'fr_FR'")->execute();

            /**
             * Req pour afficher les films par genre.
             */
            $requete = $pdo->prepare("
                SELECT
                    f.id_film,
                    f.titre_film,
                    g.id_genre_film,
                    g.genre_film,
                    DATE_FORMAT(f.date_sortie_fr, '%d %M %Y') AS date_fr
                FROM genre g
                INNER JOIN appartenir a
                    ON g.id_genre_film = a.id_genre_film
                INNER JOIN film f
                    ON a.id_film = f.id_film
                WHERE g.id_genre_film = :id
            ");
            $requete->execute(["id"=>$id]);

            require "view/listParGenre.php";
        }

        /**
         * Req insérer un genre.
         */
        public function insertGenre() {
            
            if (isset($_POST['nom_genre'])) {

                $genre = filter_input(INPUT_POST, "nom_genre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $pdo = Connect::seConnecter();
                $requete = $pdo->prepare("
                    INSERT INTO genre(genre_film)
                    VALUES(:nom_genre)
                ");
                $requete->execute(["nom_genre"=>$genre]); 
                
                require "view/addGenre.php";

            } else {
                require "view/addGenre.php";
            }    
        }

        /**
         * Req insérer un film.
         */
        public function addMovie() {
            if (isset($_POST['submit'])) {
                $titre_film = filter_input(INPUT_POST, "titre_film", FILTER_SANITIZE_SPECIAL_CHARS);
                $date_sortie_fr = filter_input(INPUT_POST, "date_sortie_fr", FILTER_SANITIZE_SPECIAL_CHARS);
                $duree_film = filter_input(INPUT_POST, "duree_film", FILTER_SANITIZE_SPECIAL_CHARS);
                $synopsis_film = filter_input(INPUT_POST, "synopsis_film", FILTER_SANITIZE_SPECIAL_CHARS);
                $affiche_film = filter_input(INPUT_POST, "affiche_film", FILTER_SANITIZE_SPECIAL_CHARS);
                $note_film = filter_input(INPUT_POST, "note_film", FILTER_SANITIZE_SPECIAL_CHARS);
                $id_realisateur = filter_input(INPUT_POST, "id_realisateur", FILTER_SANITIZE_NUMBER_INT);
                $id_genre_film = filter_input(INPUT_POST, "id_genre_film", FILTER_SANITIZE_NUMBER_INT);

                $pdo = Connect::seConnecter();
                // prep
                $requete = $pdo->prepare("
                    INSERT INTO film(titre_film, date_sortie_fr, duree_film, synopsis_film, affiche_film, note_film, id_realisateur)
                    VALUES(:titre_film, :date_sortie_fr, :duree_film, :synopsis_film, :affiche_film, :note_film, :id_realisateur)
                ");
                $requete->execute([
                    "titre_film"=>$titre_film,
                    "date_sortie_fr"=>$date_sortie_fr,
                    "duree_film"=>$duree_film,
                    "synopsis_film"=>$synopsis_film,
                    "affiche_film"=>$affiche_film,
                    "note_film"=>$note_film,
                    "id_realisateur"=>$id_realisateur
                ]);
                
                $id_film = $pdo->lastInsertId();
                
                $requete = $pdo->prepare("
                    INSERT INTO appartenir(id_film, id_genre_film)
                    VALUES(:id_film, :id_genre_film)
                ");

                $requete->execute([
                    "id_film" => $id_film,
                    "id_genre_film"=>$id_genre_film
                ]);

                header('location:index.php?action=displayAddMovie');

            } else {

                require "view/addMovie.php";
            }
        }

        /**
         * Req insérer une personne.
         */
        public function addPersonne() {
            if (isset($_POST['submit'])) {
                $nom_personne = filter_input(INPUT_POST, "nom_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $prenom_personne = filter_input(INPUT_POST, "prenom_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $date_naiss_personne = filter_input(INPUT_POST, "date_naiss_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $lieu_naiss_personne = filter_input(INPUT_POST, "lieu_naiss_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $genre_personne = filter_input(INPUT_POST, "genre_personne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $profession = filter_input(INPUT_POST, "type", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $pdo = Connect::seConnecter();
                $requete = $pdo->prepare("
                    INSERT INTO personne(nom_personne, prenom_personne, date_naiss_personne, lieu_naiss_personne, genre_personne)
                    VALUES(:nom_personne, :prenom_personne, :date_naiss_personne, :lieu_naiss_personne, :genre_personne)                
                ");
                $requete->execute([
                    "nom_personne"=>$nom_personne,
                    "prenom_personne"=>$prenom_personne,
                    "date_naiss_personne"=>$date_naiss_personne,
                    "lieu_naiss_personne"=>$lieu_naiss_personne,
                    "genre_personne"=>$genre_personne
                ]);

                $id = $pdo->lastInsertId(); // récupérer le dernier id inséré puis le mettre dans la table qui le concerne

                if($profession == "acteur"){

                    $requete = $pdo->prepare("
                        INSERT INTO acteur(id_personne)
                        VALUES(:id_personne)
                    ");
                    $requete->execute([
                        "id_personne"=>$id
                    ]);
                    
                } else {
                    $requete = $pdo->prepare("
                        INSERT INTO realisateur(id_personne)
                        VALUES(:id_personne)
                    ");
                    $requete->execute([
                        "id_personne"=>$id
                    ]);
                }

                require "view/addPersonne.php";
                
            } else {
                
                require "view/addPersonne.php";
            }            
        }

        /**
         * Req insérer film.
         */
        public function displayAddMovie() {

            $pdo = Connect::seConnecter();
            $requete1 = $pdo->query("
                SELECT
                    CONCAT(p.prenom_personne,' ',p.nom_personne) AS nom_realisateur,
                    r.id_realisateur
                FROM personne p
                INNER JOIN realisateur r
                    ON p.id_personne = r.id_personne
            ");

            $requete2 = $pdo->query("
                SELECT g.id_genre_film, g.genre_film
                FROM genre g
            ");

            require "view/addMovie.php";
        }

        /**
         * Req insérer un rôle.
         */
        public function addRole() {
            if (isset($_POST['submit'])) {

                $nom_role = filter_input(INPUT_POST, "nom_role", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $pdo = Connect::seConnecter();
                $requete = $pdo->prepare("
                    INSERT INTO role(nom_role)
                    VALUES(:nom_role)
                ");

                $requete->execute([
                    "nom_role"=>$nom_role
                ]);

                require "view/addRole.php";

            } else {
                
                require "view/addRole.php";
            }
        }

        /**
         * Req ajouter un casting.
         */
        public function displayAddCasting() {
            $pdo = Connect::seConnecter();
            $requete1 = $pdo->query("
                SELECT id_film, titre_film
                FROM film
            ");

            $requete2 = $pdo->query("
                SELECT a.id_acteur, p.id_personne, CONCAT(p.prenom_personne,' ',p.nom_personne) AS nom_acteur
                FROM acteur a
                INNER JOIN personne p
                    ON a.id_personne = p.id_personne
            ");

            $requete3 = $pdo->query("
                SELECT id_role, nom_role
                FROM role
            ");
            
            require "view/displayAddCasting.php";
        }
        
        /**
         * Req ajouter un casting.
         */
        public function addCasting() {

            if(isset($_POST['submit'])) {

                $id_film = filter_input(INPUT_POST, "id_film", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $id_acteur = filter_input(INPUT_POST, "id_acteur", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $id_role = filter_input(INPUT_POST, "id_role", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $pdo = Connect::seConnecter();
                $requete = $pdo->prepare("
                    INSERT INTO casting(id_film, id_acteur, id_role)
                    VALUES(:id_film, :id_acteur, :id_role)
                ");

                $requete->execute([
                    "id_film"=>$id_film,
                    "id_acteur"=>$id_acteur,
                    "id_role"=>$id_role
                ]);
            }
            
            require "view/displayAddCasting.php";
        }
    }
