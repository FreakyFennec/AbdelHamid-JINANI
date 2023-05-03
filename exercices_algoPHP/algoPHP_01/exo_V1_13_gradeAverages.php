<!--
    exo_V1_13_gradeAverages.php
=============================================
    By AHJ
-->
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
            <h2>Exo PHP 01</h2>
            <section>
                <h1>exo_V1_13_gradeAverages.php</h1>

                <p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

                <h3>Résultat</h3>

                <?php

                // fonction qui calcule la moyenne des notes arrondie à 2 chiffres après la virgule
                function gradeAverages() {
                        
                    // variables de travail
                    $arrayGrades = [10, 12, 8, 19, 3, 16, 11, 13, 9];

                    echo "Les notes obtenuespar l'élève sont : ";
                    foreach ($arrayGrades as $Grade) {
                        echo "$Grade ";
                    }
                    echo "<br>";

                    $gradeQuantity = count($arrayGrades);
                    $sommeGrades = array_sum($arrayGrades);
                    $average = round($sommeGrades / $gradeQuantity, 2);
                    echo "Sa moyenne générale est donc de : $average";
                }
                gradeAverages();
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
