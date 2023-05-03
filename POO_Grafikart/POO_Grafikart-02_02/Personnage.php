<?php

    class Personnage { // Class de nom Personnage (toujours en majuscules).

        // Propriétés
        public $vie = 80;
        public $atk = 20;
        public $nom;        // Propriété sans valeur (définie auprès de l'instanciation).
        

        public function __construct($nom) {     // Cette fonction est par défaut dans la classe (mais sans paramètre).
                                                // Les arguments passés dans le __construct() servent à initialiser les propriétés de l'objet.
            $this->nom = $nom;                  // Passe (initialise) la valeur dans la propriété $nom pour ne pas être perdue.
        }

        // Méthodes

        // Méthode régénérer()
        public function regenerer($vie = null) {
            if(is_null($vie)) {                     // Si la vie est égale à 0.
                $this->vie = 100;                   // $this fait référence à l'instance en cours.
            } else {
                $this->vie = $this->vie + $vie;     // Autrement la vie est égale à la vie + le nombre passé en paramétre. (syntaxe courte possible avec +=)
            }            
        }

        // Méthode mort()
        public function mort() {
            return $this->vie <= 0;
        }
        
    }