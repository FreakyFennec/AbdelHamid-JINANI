<?php

    class Personnage { // Class de nom Personnage (toujours en majuscules).

        // Propriétés
        public $vie = 80;
        public $atk = 20;
        public $nom;        // Propriété sans valeur (définie auprès de l'instanciation).

        // Méthodes

        // Méthode régénérer()
        public function regenerer() {
            $this->vie = 100;           // $this fait référence à l'instance en cours.
        }        
    }