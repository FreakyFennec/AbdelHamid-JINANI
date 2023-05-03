<!--
    //exo01_V2.php
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
                echo "<h3>Exercice 01_V2</h3>

                <p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la fonction comme suit: convertirMajRouge(\$texte);</p>

                <h4>Résultat</h4>";
                
                // variables de travail
                $texte = "mon texte en paramètre";

                function convertirMajRouge($texte) {
                    $tringToUpper = mb_strtoupper($texte);
                    $colorRed = "#DC143C";

                    echo "<span style=color:$colorRed;>$tringToUpper<span>";
                }
                convertirMajRouge($texte);
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>