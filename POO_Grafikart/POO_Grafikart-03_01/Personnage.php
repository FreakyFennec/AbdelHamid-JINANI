<?php

    class Personnage { // Class de nom Personnage (toujours en majuscules).

        // Propriétés
        public $vie = 60;   // La propriété $vie est publique on peut y accéder partout.
        public $atk = 20;
        private $nom;       // Propriété sans valeur (définie auprès de l'instanciation). 
                            // Elle est aussi privée on ne peut y accéder qu'au sein de la classe.
                            // Il faut une fonction pour l'utiliser (cf. getNom()).

        protected $prenom;  // On y accède depuis des classes qui hériteraient de la classe Personnage.
                            // C'est moins stricte que private.
        

        public function __construct($nom) {     // Cette fonction est par défaut dans la classe (mais sans paramètre).
            $this->nom = $nom;                  // Passe la valeur dans la propriété $nom pour ne pas être perdue.
        }

        // Méthodes

        // Méthode getNom()
        public function getNom() {          // Va chercher le nom.
            return $this->nom;
        }

        // Méthode régénérer()
        public function regenerer($vie = null) {
        if( is_null($vie ) ) {                 // Si la vie est égale à 0.
                $this->vie = 100;           // $this fait référence à l'instance en cours.
            } else {
                $this->vie = $this->vie + $vie;     // Autrement la vie est égale à la vie + le nombre passé en paramétre. (syntaxe courte possible avec +=)
            }            
        }

        // Méthode mort()
        public function mort() {
            return $this->vie <= 0;
        }

        private function empecherNegatif() {        // Méthode mise en private car elle ne sert que dans la classe Personnage.
            if( $this->vie < 0 ) {
                $this->vie = 0;
            }
        }
        
        public function attaque($cible) {
            // $this // Attaquant
            // $cible // Défenseur

            $cible->vie -= $this->atk;      // ($this->atk) contient la valeur de l'attaque à soustraire (-=) de la vie du défenseur
            $cible->empecherNegatif();
        }
    }