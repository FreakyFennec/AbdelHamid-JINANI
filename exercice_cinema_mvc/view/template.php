<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Voici un exemple de petit site cinéma en mvc" />
        <link rel="shortcut icon" href="public/img/favicons/icon-96x96.png" type="image/x-icon">
        <title><?= $titre ?></title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/style-menu-deroulant.css">
    </head>
    <body>
    
        
        <main>
            <div id="contenu">
                <h1 class="titrePrincipal"><?= $titre ?></h1>
                <h2 class="titreSecondaire"><?= $titre_secondaire ?></h2><nav>
        <ul>
            <li class="liTitre">Aller à la page
                <ul>
                    <li><a href="index.php?action=listFilms">Films</a></li>
                    <li><a href="index.php?action=listActeurs">Acteurs</a></li>
                    <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>
                    <li><a href="index.php?action=listGenres">Genres</a></li>
                    <li><a href="index.php?action=listRoles">Rôles</a></li>
                    <li><a href="index.php?action=addRole">Ajouter rôle</a></li>
                    <li><a href="index.php?action=displayAddCasting">Ajouter casting</a></li>
                    
                    <li><a href="index.php?action=insertGenre">Ajouter genre</a></li>
                    <li><a href="index.php?action=addPersonne">Ajouter personne</a></li>
                    <li><a href="index.php?action=displayAddMovie">Ajouter film</a></li>
                </ul>
            </li>
        </ul>
    </nav>
                <?= $contenu ?>
            </div>
        </main>
    </body>
</html>