<?php

// Ici self:: a été remplacé par static:: pour pouvoir changer le nom de la table.
// static:: fait référence au bon élément (la classe qui est utilisée).
// Testez par exemple dans la Classe Categorie.php.

namespace App\Table;

use App\App;

class Table {

    protected static $table;

    // Méthode qui récupére le nom de la table.
    private static function getTable() {
        // Si le nom de la table est déjà défini.
        if(static::$table === null) {
            $class_name = explode('\\', get_called_class());    // Le nom de la table c'est le nom de la classe appellée.
            static::$table = strtolower(end($class_name)) . 's';  // Le nom de la table en minuscule avec un s.
            // die(self::$table);
        }
        return static::$table;
    }

    // Méthode qui cherche l'id.
    public static function find($id) {
        return App::getDb()->prepare("
            SELECT *
            FROM " . static::getTable() . "
            WHERE id = ?
        ", ['id'], get_called_class(), true);     // get_called_class() contient le nom de la classe qui est appellée.
    }

    // Méthode ne pas se répéter quand on fait une requête.
    public static function query($statement, $attributes = null, $one = false) {
        // Si on a un attribut on fait une requête préparée sinon on ne fait qu'un query.
        if($attributes) {
            return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
        } else {
            return App::getDb()->query($statement, get_called_class(), $one);
        }
    }

    public static function all() {
        return App::getDb()->query("
            SELECT *
            FROM " . static::getTable() . "
            LEFT JOIN articles a
                ON categories.id = a.category_id
        ", get_called_class());     // __CLASS__ contient le nom de la classe.
    }
    
    public function __get($key) {   // Méthode magique (à éviter en général car elle cache une partie du code).

        $method = 'get' . ucfirst($key);    // ucfirst() met le premièr caractère en majuscule
        $this->$key = $this->$method();     // Pour ne pas appeler la method() à chaque fois. Stockée en variable d'instance.
        return $this->$key;
    }
    
}

?>

