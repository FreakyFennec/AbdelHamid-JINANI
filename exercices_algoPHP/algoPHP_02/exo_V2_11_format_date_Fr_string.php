<!--
    exo_V2_11_format_date_Fr_string.php
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
            <h2>Exo PHP 02</h2>
            <section>
                <h3>exo_V2_11_format_date_Fr_string.php</h3>

                <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>

                <?php    
                // variables de travail
                $date = "2018-02-23";

                // calculs
                function format($date) {

                    $formatter = new IntlDateFormatter('fr_Fr', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

                    echo $formatter->format(time());
                }
                format($date);
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
