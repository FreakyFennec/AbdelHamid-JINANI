<?php

namespace App\Table;

use App\App;

class Table {

    protected static $table;

    private static function getTable() {
        if (self::$table === null) {
            $class_name = explode('\\', get_called_class());  // get_called_class() Remplace __CLASS__ pour avoir la classe qui est appelée.
            self::$table = strtolower(end($class_name));
            die(self::$table);
        }
        return self::$table;
    }

    public static function all() {
        return App::getDb()->query('
            SELECT * 
            FROM " . self::$getTable . "
            ', __CLASS__);    // Class contient le nom de la class Article.
    }
    
    public function __get($key) {   // Méthode magique (à éviter en général car elle cache une partie du code).

        $method = 'get' . ucfirst($key);    // ucfirst() met le premièr caractère en majuscule
        $this->$key = $this->$method();     // Pour ne pas appeler la method() à chaque fois. Stockée en variable d'instance.
        return $this->$key;
    }

    

}

?>

