<?php

    class Personnage { // Class de nom Personnage (toujours en majuscules).

        // Propriétés
        private $vie = 60;   // Par défaut on met les propriétés en private.
        private $atk = 20;
        private $nom;       

        

        public function __construct($nom) {     // Cette fonction est par défaut dans la classe (mais sans paramètre).
            $this->nom = $nom;                  // Passe la valeur dans la propriété $nom pour ne pas être perdue.
        }

        // Méthodes

        // Méthode getVie()
        public function getVie() {
            return $this->vie;
        }

        // Méthodes getAtk()
        public function getAtk() {
            return $this->atk;
        }

        // Méthode getNom()
        public function getNom() {          // Va chercher le nom.
            return $this->nom;              // On peut aussi faire des modification ici (return "Mr. " $this->nom;)
        }
        // Méthode setNom()
        public function setNom($nom) {      // Permet de modifier le nom.
            $this->nom = $nom;
        }

        // Méthode régénérer()
        public function regenerer($vie = null) {
        if( is_null($vie) ) {                 // Si la vie est égale à 0.
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