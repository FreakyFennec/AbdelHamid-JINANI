<?php

    class Personnage {

        // Propriétés
        const MAX_VIE = 100;

        public $vie = 80;
        public $atk = 20;
        public $nom;        // Variable sans valeur, elle sera définie dans l'instanciation.

        // Constructeur
        // Crée un argument nom que l'on définit dans l'instanciation de la class Personnage.
        public function __construct($nom)
        {
            $this->nom = $nom;   
        }

        // Méthode régénérer
        public function regenerer($vie = null) {
            
            if (is_null($vie)) {

                $this->vie = self::MAX_VIE;

            } else {

                $this->vie = ($this->vie + $vie);       // Syntaxe courte $this->vie += $vie.
            }
        }

        // Méthode état
        public function etat() {

            return $this->vie <= 0;     // True si le personnage est mort.
        }

        // Méthode attaque
        public function attaque($cible) {

            $cible->vie -= $this->atk;
        }
    }