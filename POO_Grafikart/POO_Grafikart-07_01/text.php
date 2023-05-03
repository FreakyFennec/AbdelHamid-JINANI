<?php
/**
 * Ajoute des zéros si le nombre contient moins de 10 chiffres.
 */
    class Text {

        private static $suffix;
        
        
        public static function publicwithZero($chiffre) {   // Static veut dire que la classe Text va avoir automatiquement cette méthode sans avoir à faire une instanciation.

            return self::withZero(($chiffre));      // Self fait référence au nom de la classe utile si on change le nom de la classe.
        }
        
        private static function withZero($chiffre) {

            if ($chiffre < 10) {

                return '0' . $chiffre;

            } else {

                return $chiffre;
            }
        }
    }