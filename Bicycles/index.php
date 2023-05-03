<?php

require_once('src/controllers/add_comment.php');
require_once('src/controllers/homepage.php');
require_once('src/controllers/bikes_models.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'bikes_models') {
        if (isset($_GET['id']) && $_GET['id'] > 0 ) {
            $identifier = $_GET['id'];

            bikesModels($identifier);
        } else {
            echo ('Erreur : aucun identifiant de billet envoyé.');
            
            die;
        }
    } elseif ($_GET['action'] === 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0 ) {
            $identifier = $_GET['id'];

            addComment($identifier, $_POST);
        } else {
            echo ('Erreur : aucun identifiant de billet envoyé.');

            die;
        }
    } else {
        echo ('Erreur 404 : la page demandé n\'existe pas.');
    }
} else {
    homepage();
}







