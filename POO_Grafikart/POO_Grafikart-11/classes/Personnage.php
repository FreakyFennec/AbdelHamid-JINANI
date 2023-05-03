<?php

    namespace Tutoriel;

    class Personnage {

        // Propriétés
        // const MAX_VIE = 100;
        private static $max_vie = 120;      // Remplace l'utilsation de la constante MAX_VIE   

        protected $vie = 80;   // On met en protected pour que les enfants (extends) puissent y toucher
        protected $atk = 20;
        protected $nom;        // Variable sans valeur, elle sera définie dans l'instanciation.

        // Constructeur
        // Crée un argument nom que l'on définit dans l'instanciation de la class Personnage.
        public function __construct($nom)
        {
            $this->nom = $nom;   
        }

        // Méthode régénérer
        public function regenerer($vie = null) {
            
            if (is_null($vie)) {

                // $this->vie = self:: MAX_VIE;     // Si on utilise la constante
                $this->vie = self::$max_vie;

            } else {

                $this->vie = ($this->vie + $vie);       // Syntaxe courte $this->vie += $vie.
            }
        }

        // Méthode état
        public function etat() {

            return $this->vie <= 0;     // True si le personnage est mort.
        }

        // Méthode empêcher vie négatif
        public function empecherNegatif() {

            if ( $this->vie < 0 ) {
                
                $this->vie = 0;
            }
        }

        // Méthode attaque
        public function attaque($cible) {

            $cible->vie -= $this->atk;
            $cible->empecherNegatif();
        }
    }