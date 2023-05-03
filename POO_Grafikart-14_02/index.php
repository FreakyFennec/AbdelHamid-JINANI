<?php

    require '../app/Autoloader.php';
    \App\Autoloader::register();

    // Condition pour récupérer le nom de la page à afficher.
    if (isset($_GET['p'])) {
        
        $p = $_GET['p'];

    } else {

        $p = 'home'; // Si aucun paramètre n'est fourni on affiche la page home.
    }
    
    ob_start();     // Tout ce qui sera affiché sera mis dans une variable ($content).

    if ($p === 'home') {

        require '../pages/home.php';

    } elseif ($p === 'article') {
        
        require '../pages/single.php';

    }

    $content = ob_get_clean();

    require '../pages/template/default.php';        // On appelle le layout.

?>