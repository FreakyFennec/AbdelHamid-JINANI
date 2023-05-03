<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formation Développeur Web et Web Mobile</h1>
        </header>
        <main>
            <h2>Index cinéma (sql & bdd)</h2>
            <section>
                <a href="pages_cinema/tous_les_films.php" class="lien-pages">Tous les films</a><br>                  <!-- Affiche les titre des films -->
                <a href="pages_cinema/tous_les_realisateurs.php" class="lien-pages">Tous les réalisateurs</a><br>    <!-- Affiche les titre des films -->
                <a href="pages_cinema/tous_les_acteurs.php" class="lien-pages">Tous les acteurs</a><br>              <!-- Affiche les titre des films -->
                <a href="form_cinema/cinema_form_post.php" class="lien-pages">Admin</a><br>              <!-- Affiche les titre des films -->
        
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

                // Page tous les films
                
            ?> 
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
