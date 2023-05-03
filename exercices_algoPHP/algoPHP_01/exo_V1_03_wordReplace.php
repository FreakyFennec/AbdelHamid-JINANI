<!--
    exo_V1_03_wordReplace.php
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
                <h1>exo_V1_03_wordReplace.php</h1>

                <p>Soit la phrase « Notre formation commence aujourd'hui ». <br>
                Ecrire un algorithme permettant de remplacer un mot contenu dans cette phrase.</p>

                <h2>Résultat</h2>

                <?php
                $string = "Notre formation DL commence aujourd'hui";
                $string2 = str_replace("aujourd'hui", "demain", $string);

                echo $string."<br>";
                echo $string2;
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>