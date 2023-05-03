<!--
    exo_V1_09_checkTaxes.php
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
                <h1>exo_V1_09_checkTaxes.php</h1>

                <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe. Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</p>

                <h3>Résultat</h3>

                <?php
                // variables de travail
                $age = 17;
                $genre = "F";

                // les conditions relatives à l'âge et au genre
                if ($genre == "F") {
                    if ($age >= 18 && $age <= 35) {
                        echo "La personne est imposable.";
                    } else {
                        echo "La personne est non imposable";
                    }
                } elseif ($genre == "H") {
                    if ($age >= 20) {
                        echo " la personne est imposable";
                    } else {
                        echo "La personne est non imposable";
                    }
                }
                ?>                        
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
