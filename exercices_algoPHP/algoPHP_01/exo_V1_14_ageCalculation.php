<!--
    exo14.php
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
                <h1>Fonction calcul age</h1>

                <p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

                <h3>Résultat</h3>

                <?php
                // variable de travail
                $currentDate = new DateTime("2018-05-21");
                $birthDate = new DateTime("1985-01-17");

                // fonction qui calcule l'âge
                function ageCalculation($currentDate, $birthDate) {

                    $interval = $currentDate->diff($birthDate);

                    $years = $interval->y;
                    $months = $interval->m;
                    $days = $interval->d;

                    echo "Age de la personne : $years ans $months mois $days jours<br>";
                }
                ageCalculation($currentDate, $birthDate);
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
