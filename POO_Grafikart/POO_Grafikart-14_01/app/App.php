<?php

namespace App;

class App {

    // Pour faciliter le changement de bdd on met les paramètres dans des constantes.
    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDb() {      // Méthode pour initializer la bdd.

        // Condition si on est déjà connecté.
        if(self::$database === null) {

            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);               // On indique juste le nom de la db les autres paramètres sont par défaut.
                    
        }        
        return self::$database;
    }
}

?>