<?php
    require 'Personnage.php';

    $merlin = new Personnage("Merlin");     // Instance de la class Personnage avec attribut Merlin.
    $merlin->regenerer(5);           // Appel la méthode regenerer() (ou fonction).

    $harry = new Personnage("Harry");
    $harry->regenerer(20);
    
    echo '<pre>';
        var_dump($merlin);
        var_dump($harry);
    echo '</pre>';
?>

