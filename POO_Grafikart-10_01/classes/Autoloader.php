<?php

    class Autoloader {

        static function register() {

            spl_autoload_register(array('Autoloader', 'autoload')); // On peut remplacer Autoloader par __CLASS__ (constante qui contient le nom de la classe courante).
        }

        // autoloader avec fonction nommée
        static function autoload($class_name) {
    
            require 'classes/' . $class_name . '.php';
        }
    }
?>