<?php
    namespace App;
    class App {

        const DB_NAME = 'blog';
        const DB_USER = 'root';
        const DB_PASS = '';
        const DB_HOST = 'localhost';

        private static $database;

        /**
         * Get the value of database
         */ 
        public static function getDatabase() {
            if (self::$database === null) {
                self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);     // Connexion à la base de données.     
                                                                // Par instanciation de la classe App\Database('blog') dans la variable statique $database de la classe courante.
                
            }
            return self::$database;    
        }
        
    }