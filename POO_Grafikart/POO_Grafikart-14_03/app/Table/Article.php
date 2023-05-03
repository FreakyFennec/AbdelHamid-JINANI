<?php

namespace App\Table;

use App\App;

class Article extends Table {


    public static function getLast() {
        return self::query('
            SELECT a.id, a.titre, a.contenu, categories.titre as categorie
            FROM articles a
            LEFT JOIN categories
                ON category_id = categories.id
        ');
    }

    public static function lastByCategory($category_id) {
        return self::query('
            SELECT a.id, a.titre, a.contenu, categories.titre as categorie
            FROM articles a
            LEFT JOIN categories
                ON category_id = categories.id
            WHERE category_id = ?
        ', [$category_id]);
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

