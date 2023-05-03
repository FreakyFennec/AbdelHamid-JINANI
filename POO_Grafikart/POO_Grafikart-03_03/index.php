<?php
    require 'Personnage.php';

    $merlin = new Personnage("Merlin");
    //$merlin->nom = "Merlin";            // On donne à la variable une valeur "Merlin" (version sans __construct)
    $merlin->regenerer(5);
    $merlin->etat();

    $harry = new Personnage("Harry");
   // $harry->nom = "Harry";
    $harry->etat();
    $harry->vie = 0;

    $harry->regenerer();

    echo '<pre>';
        var_dump($merlin->etat());  ?><br><?php
        var_dump($harry->etat());  ?><br><?php
        
        var_dump($merlin);  ?><br><?php
        var_dump($harry);  ?><br><?php
    echo '</pre>';
?>