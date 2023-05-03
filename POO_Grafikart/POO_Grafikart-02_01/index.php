<?php
    require 'Personnage.php';

    $merlin = new Personnage();     // Instance de la class Personnage.
    $merlin->nom = "Merlin";        // Avec attribut (nom) contenant la valeur "Merlin".

    $merlin->regenerer();           // Appelle la méthode regenerer() (ou fonction).

    $harry = new Personnage();
    $harry->nom = "Harry";
   
    echo '<pre>';
        var_dump($merlin);
        var_dump($harry);
    echo '</pre>';
?>
    
   

