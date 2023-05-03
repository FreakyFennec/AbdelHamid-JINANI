<?php

    namespace App;

    use \PDO;   // Parceque le PDO n'est pas dans le namespace App.

    class Database {

        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;
        private $pdo;

        public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost') {
        
            $this->$db_name = $db_name;
            $this->$db_user = $db_user;
            $this->$db_pass = $db_pass;
            $this->$db_host = $db_host;
        }

        // Accesseur pour gérer les cas particuliers et ne faire qu'une connexion à la bdd.
        // Évite les fuites de mémoire.
        // Et si jamais PDO n'existait plus on pourrait changer plus facilement.
        private function getPDO() {

            if ($this->pdo === null) {      // Condition pour éviter les multiples connexdions
                // Initialiser PDO.
                $pdo = new PDO('mysql:dbname=blog;host=localhost','root', '');      // Attention il faut remonter à la racine (Cf. use\PDO en haut de page).
                                                                                    
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      // Définir attribut.
                $this->pdo = $pdo;                                                  // Stocker dans l'insance.
            }

            return $this->pdo;
        }

        public function query($statement, $class_name) {        // Méthode pour récupérer les résultats.

            $req = $this->getPDO()->query($statement);
            $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

            return $datas;
        }

        public function prepare($statement, $attributes, $class_name, $one = false) {

            $req = $this->getPDO()->prepare($statement);    // Fonction prepare().
            $req->execute($attributes);                     // Renvoie un booléen qui dit que ça marche.

            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);  // Fetch style

            if ($one) {
                
                $datas = $req->fetch();     // On récupére le résultat. 
            } else {
               
                $datas = $req->fetchAll();  // On récupére les résultats. 
            }

            return $datas;  // Return un objet par rapport à un nom de classe.
        }
    }
?>