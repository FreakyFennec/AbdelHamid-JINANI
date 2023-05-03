<?php

    namespace App\Table;

    class Article {
        
        public function __get($key) {   // Méthode magique (à éviter en général car elle cache une partie du code).

            $method = 'get' . ucfirst($key);    // ucfirst() met le premièr caractère en majuscule
            $this->$key = $this->$method();     // Pour ne pas appeler la method() à chaque fois. Stockée en variable d'instance.
            return $this->$key;
        }

        public function getUrl() {
           
            return 'index.php?p=article&id=' . $this->id;
        }

        public function getExtrait() {

            $html = '<p>' . substr($this->contenu, 0, 80) . '...</p>';     // substr() permet de n'afficher qu'une partie du paragraphe.
            
            $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';  // Le .= rajoute la chaîne de caract. à la précédente.

            return $html;
        }
    }

?>

