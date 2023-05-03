<?php
    require 'Personnage.php';

    $merlin = new Personnage("Merlin");     // Instance de la class Personnage avec attribut Merlin.
    $harry = new Personnage("Harry");

    echo '<pre>';
        var_dump($merlin->getNom());      // Voir la fonction getName dans la classe Personnage.
    echo '</pre>';

    $merlin->setNom('Merlin l\'enchanteur');    // Voir la méthode setName dans la classe personnage.
    
    echo '<pre>';
        var_dump($merlin->getVie());
        var_dump($merlin->getAtk());
        var_dump($merlin->getNom());
    echo '</pre>';
    ?>

