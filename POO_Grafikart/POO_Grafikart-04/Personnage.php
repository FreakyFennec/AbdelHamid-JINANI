<?php

    class Personnage {

        // Propriétés
        private $vie = 80;   // Variable public accessible dans la classe et dehors 
        private $atk = 20;
        private $nom;        // Variable private accessible que dans la classe.


        // Constructeur
        // Crée un argument nom que l'on définit dans l'instanciation de la class Personnage.
        public function __construct($nom)
        {
            $this->nom = $nom;   
        }

        /**
         * Get the value of vie
         */ 
        public function getVie()
        {
                return $this->vie;
        }

        /**
         * Set the value of vie
         *
         * @return  self
         */ 
        public function setVie($vie)
        {
                $this->vie = $vie;

                return $this;
        }

        /**
         * Get the value of atk
         */ 
        public function getAtk()
        {
                return $this->atk;
        }

        /**
         * Set the value of atk
         *
         * @return  self
         */ 
        public function setAtk($atk)
        {
                $this->atk = $atk;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }


        // Méthode régénérer
        public function regenerer($vie = null) {
            
            if (is_null($vie)) {

                $this->vie = 100;

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
        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }
    }