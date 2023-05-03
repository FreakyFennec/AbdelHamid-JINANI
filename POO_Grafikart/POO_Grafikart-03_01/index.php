<?php
    require 'Personnage.php';

    $merlin = new Personnage("Merlin");     // Instance de la class Personnage avec attribut Merlin.
    $harry = new Personnage("Harry");
    
    echo '<pre>';
    var_dump($merlin->getNom());      // Voir la fonction getName dans la classe Personnage.
    echo '</pre>';
    ?>

