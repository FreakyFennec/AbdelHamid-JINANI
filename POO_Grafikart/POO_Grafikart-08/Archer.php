<?php

    class Archer extends Personnage {       // Extends veut dire que la classe Archer hérite de Personnage.

        public $vie = 40;                   // On peut redéfinir la portée des attributs, 
                                            // mais avec une sécurité inférieur public ou protected.
        public $arc = 3;

        // Méthode attaque
        // Redéfinition de la méthode attaque pour doubler les dégâts.
        // Attention la redéfinition doit garder les mêmes paramètres.
        public function attaque($cible) {

            //$cible->vie -= 2 * $this->atk;     // Ici on double.

            // Sinon on peut faire comme suit
            $cible->vie -= $this->atk;          // Première attaque puis
            parent::attaque($cible);            // Deuxième attaque héritée de la fonction parent.
            
            $cible->empecherNegatif();
        }
    }