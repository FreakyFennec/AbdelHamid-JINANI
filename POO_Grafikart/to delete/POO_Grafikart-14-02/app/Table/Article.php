<?php

    namespace App\Table;

    use App\App;

    class Article extends Table {       // Article hérite de Table.

        public static function getLast() {
            return App::getDb()->query('
                SELECT a.id, a.titre, a.contenu, c.titre as categorie 
                FROM articles a
                LEFT JOIN categories c
                    ON a.category_id = c.id
                ', __CLASS__);    // Class contient le nom de la class Article.
        }

        public function getUrl() {
       
            return 'index.php?p=categorie&id=' . $this->id;
        }
        
        public function getExtrait() {

            $html = '<p>' . substr($this->contenu, 0, 80) . '...</p>';     // substr() permet de n'afficher qu'une partie du paragraphe.
            
            $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';  // Le .= rajoute la chaîne de caract. à la précédente.

            return $html;
        }
    }

?>

