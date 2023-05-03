<?php

    namespace Tutoriel;

    class Autoloader {

        static function register() {

            spl_autoload_register(array(__CLASS__, 'autoload')); // On peut remplacer Autoloader par __CLASS__ (constante qui contient le nom de la classe courante).
        }

        // autoloader avec fonction nommée
        static function autoload($class) {

            if (strpos($class, __NAMESPACE__ . '\\') === 0) {
                $class = str_replace(__NAMESPACE__ . '\\', '', $class);
                $class = str_replace('\\', '/', $class);
                              

                //var_dump($class);
                require 'classes/' . $class . '.php';
            } 
        }
    }
?>