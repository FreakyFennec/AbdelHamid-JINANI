<?php
    use Controller\CinemaController;
    use Controller\HomeController;

    spl_autoload_register(function($class_name) {   // Cette fonctions sert à charger les classes.
        include $class_name . '.php';
    });

    $ctrlCinema = new CinemaController();
    $ctrlHome = new HomeController();

    // Code pour router les requêtes HTTP.
    $id = (isset(($_GET["id"])) ? $_GET["id"] : null);
    // $type = (isset(($_GET["type"])) ? $_GET["type"] : null);

    if (isset($_GET["action"])) {       // Vérifie si une variable action est passée.
        switch ($_GET["action"]) {      // Si oui appel la méthode spécifique de $ctrlCinema correspondant.

            case "displayAdmin" : $ctrlCinema->displayAdmin(); break;
            case "listFilms" : $ctrlCinema->listFilms(); break;
            case "detailFilm" : $ctrlCinema->detailFilm($id); break;
            case "listActeurs" : $ctrlCinema->listActeurs(); break;
            case "listRealisateurs" : $ctrlCinema->listRealisateurs(); break;
            case "rolesActeur" : $ctrlCinema->rolesActeur($id); break;
            case "listGenres" : $ctrlCinema->listGenres(); break;
            case "listParGenre" : $ctrlCinema->listParGenre($id); break;
            case "listRoles" : $ctrlCinema->listRoles(); break;
            case "addRole" : $ctrlCinema->addRole(); break;
            case "addCasting" : $ctrlCinema->addCasting(); break;
            case "displayAddCasting" : $ctrlCinema->displayAddCasting(); break;
            case "insertGenre" : $ctrlCinema->insertGenre(); break;
            case "addPersonne" : $ctrlCinema->addPersonne(); break;
            case "filmographieRealisateur": $ctrlCinema->filmographieRealisateur($id); break;
            case "addMovie": $ctrlCinema->addMovie(); break;
            case "displayAddMovie": $ctrlCinema->displayAddMovie(); break;
        }
    } else {
        $ctrlHome->displayHomePage();
    }
