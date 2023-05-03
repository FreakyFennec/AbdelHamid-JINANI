<?php

    namespace Tutoriel;
    
    class Text {

        private static $suffix;
        
        
        public static function publicwithZero($chiffre) {

            return self::withZero(($chiffre));      // Self fait référence au nom de la classe utile si on change le nom de la classe.
        }
        
        private static function withZero($chiffre) {

            if ($chiffre <10) {

                return '0' . $chiffre;

            } else {

                return $chiffre;
            }
        }
    }