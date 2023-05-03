<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title_site">Formation Développeur Web et Web Mobile</h1>
        </header>
        <main>
            <section>
                <?php
                try {
                    // Souvent on identifie cet objet par la variable $conn ou $db
                    $mysqlConnection = new PDO(
                        'mysql:host=localhost;dbname=cinema_hamid;charset=utf8',
                        'root',
                        '',
                        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION], // Affiche les requêtes qui comportent des erreurs.
                    );
                }
                catch (Exception $e) {
                    // En cas d'erreur arrête tout et affiche message
                    die('Erreur : ' . $e->getMessage());
                }

                // Si pas d'erreur on continue

                // Récupère le contenu de la table film
                $sqlQuery = 'SELECT * 
                            FROM film';                       // Variable qui contient la requête sql.

                $filmStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

                $filmStatement->execute();
                $films = $filmStatement->fetchAll();                    // Va chercher les éléments de la requête.

                if ($films > 0) {
                    echo "
                    <h2>Tous les films</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Affiche</th>
                                <th>Titre du film</th>
                                <th>Date de sortie fr</th>
                                <th>Durée</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>";

                            // On fait un boucle foreach() pour afficher les films.
                            foreach ($films as $film) {

                                // public est un mot réservé alors on le met dans une variable.
                                $folder = '../public';
                                // On met le nom de l'image dans une variable.
                                $image = $film['affiche_film'];
                                // On concatène tout ça.
                                $path = $folder . '/img/img_affiches_films/' . $image;

                                echo"
                                    <td><img class='poster_movie' src=" . $path . " alt=" . $film['alt_affiche'] . "></td>
                                    <td><a href='detail_film.php?id=" . $film['id_film'] . "' class='lien-pages'>" . $film['titre_film'] . "</a></td>
                                    <td>" . date('d-m-Y', strtotime($film['date_sortie_fr'])) . "</td>
                                    <td>" . $film['duree_film'] . "mn</td>
                                </tr>";   // Affiche les films                               
                            }
                } else {

                    echo "0 no results";
                }
                echo "</tbody></table>";
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
    