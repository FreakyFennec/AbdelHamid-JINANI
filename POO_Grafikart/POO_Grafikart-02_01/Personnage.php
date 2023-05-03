<?php

    class Personnage { // Class de nom Personnage (toujours en majuscules).

        // Propriétés
        public $vie = 80;   // Public c'est la visibilité de la propriété (ou variable).
        public $atk = 20;
        public $nom;        // Propriété sans valeur (définie auprès de l'instanciation).
                            // On peut s'en passer car php peut la définir dans l'instanciation.
                            // Mais c'est déconseillé.

        // Méthodes

        // Méthode régénérer()
        public function regenerer() {
            $this->vie = 100;           // $this fait référence à l'instance en cours.
        }
        
    }