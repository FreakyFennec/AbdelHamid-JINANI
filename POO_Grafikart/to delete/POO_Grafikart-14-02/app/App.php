<?php
    namespace App;

    class App {

        const DB_NAME = 'blog';     // Les attributs en constantes, pour faciliter le changement de connexion.
        const DB_USER = 'root';
        const DB_PASS = '';
        const DB_HOST = 'localhost';

        private static $database;

        /**
         * Get the value of database
         */ 
        public static function getDb() {
            // Condition pour ne pas se connecter tout le temps
            if (self::$database === null) {
                // Connexion à la base de données. 
                // Par instanciation de la classe App\Database('blog') dans la variable statique $database de la classe courante.
                self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);         
                                                                
                
            }
            return self::$database;    
        }
        
    }