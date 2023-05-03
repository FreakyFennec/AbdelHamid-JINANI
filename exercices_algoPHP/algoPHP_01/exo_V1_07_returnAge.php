<!--
    exo_V1_07_returnAge.php
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
                <h1>exo_V1_07_returnAge.php</h1>

                <p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:</p>

                <h3>Résultat</h3>

                <?php
                // Variables de travail
                $age = 18;

                // Conditions de vérification de l'âge
                if ($age == 6 || $age == 7) {
                    $category = "Poussin";
                } elseif ($age == 8 || $age == 9) {
                    $category = "Pupille";
                } elseif ($age == 10 || $age == 11) {
                    $category = "Minime";
                } elseif ($age == 12) {
                    $category = "Cadet";
                } else {
                    $category = "La catégorie n'est pas précisée.";
                }

                echo "L'enfant qui à $age ans appartient à la catégorie « $category ».<br>";
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>