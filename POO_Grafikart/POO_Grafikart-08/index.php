<?php
    require 'Personnage.php';           // Faire attention à l'ordre Personnage doit être chargé en premier.
                                        // Il est le parent de Archer.
    require 'Archer.php';

    $merlin = new Personnage('Merlin');
    $harry = new Personnage('Harry');

    $legolas = new Archer('Legolas');

    $legolas->attaque($harry);

    echo '<pre>';
    var_dump($merlin, $harry, $legolas);
    echo '</pre>';
    
?>
