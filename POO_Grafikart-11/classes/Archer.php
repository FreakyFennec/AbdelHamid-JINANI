<?php

    namespace Tutoriel;

    class Archer extends Personnage {

        public $vie = 40;
        public $arc = 3;

        // Méthode attaque
        // Redéfinition de la méthode attaque pour doubler les dégâts.
        public function attaque($cible) {

            //$cible->vie -= 2 * $this->atk;      // Ici on double.

            // Sinon on peut faire comme suit
            $cible->vie -= $this->atk;
            parent::attaque($cible);
            
            $cible->empecherNegatif();
        }
    }