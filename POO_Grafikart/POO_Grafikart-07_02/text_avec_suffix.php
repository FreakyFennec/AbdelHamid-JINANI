<?php
    class Text {

        private static $suffix = " €";

        const SUFFIX = " €";        // Création d'une constante le nom doit être en lettres capitales.
        
        /**
         * Cette fonction est static ça veut dire que la classe Text va avoir cette méthode.
         * Pour l'appeler il faut faire (Text::whitZero(votre nombre))
         */
        public static function withZero($chiffre) {

            if ($chiffre <10) {     // Si le chiffre est inférieur à 10

                return '0' . $chiffre . self::SUFFIX;   // Ajoute un zéro devant et le suffix mis dans la constante SUFFIX.

            } else {

                return $chiffre . self::SUFFIX;
            }
        }
    }