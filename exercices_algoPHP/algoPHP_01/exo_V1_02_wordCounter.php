<!--
    exo_V1_02_wordCounter.php
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
                <h1>exo_V1_02_wordCounter.php</h1>

                <p>Soit la phrase « Notre formation commence aujourd'hui ». <br>
                Ecrire un algorithme permettant de compter le nombre de mots contenus dans cette phrase.</p>

                <h3>Résultat</h3>

                <?php
                $string = "Notre formation DL commence aujourd'hui";
                $nbrMots = str_word_count($string);

                echo "La phrase « $string » contient $nbrMots mots<br>";
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>