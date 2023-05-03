<!--//
    //exo03_V2.php
//=============================================
    //By AHJ
//-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formation Développeur Web et Web Mobile</h1>
        </header>
        <main>
            <h2>Exo PHP 02</h2>
            <section>
                <?php
                echo "<h3>Exercice 03_V2</h3>

                <p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir dans un nouvel onglet (_blank).</p>

                <h4>Résultat</h4>";
                
                // variables de travail
                $httpLink = "https://elan-formation.eu/accueil";

                // Calculs
                function openHtmlPage($httpLink) {
                echo "<a href=\"$httpLink\">Elan Formation</a>";
                }
                openHtmlPage($httpLink);
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
    