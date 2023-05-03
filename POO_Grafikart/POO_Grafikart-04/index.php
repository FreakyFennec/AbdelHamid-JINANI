<?php

    require 'Personnage.php';

    $merlin = new Personnage("Merlin");
    $harry = new Personnage("Harry");

    $merlin->setNom("Le vieux");

    var_dump($merlin->getNom());
    var_dump($merlin->getVie());
    var_dump($merlin->getAtk());

?>