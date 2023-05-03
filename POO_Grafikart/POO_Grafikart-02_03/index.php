<?php
    require 'Personnage.php';

    $merlin = new Personnage("Merlin");     // Instance de la class Personnage avec attribut Merlin.
    $harry = new Personnage("Harry");
    
    $merlin->attaque($harry);

    if($harry->mort()) {
        // print_r('Harry est mort !');
        echo 'Harry est mort !'; ?><br>
        <?php
    } else {
        echo 'Harry est toujours vivant avec : ' . $harry->vie . ' points.'; ?><br>
        <?php
    }
    echo '<pre>';
        var_dump($merlin);
        var_dump($harry);
    echo '</pre>';
    ?>

