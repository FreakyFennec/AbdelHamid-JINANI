<!--
    exo_V1_08_multiplicationTable.php
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
                <h1>exo_V1_08_multiplicationTable.php</h1>

                <p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</p>

                <h3>Résultat</h3>

                <?php
                // variables de travail
                $nbrDeLaTable = 8;
                $longueurDeLaTable = 10;

                // boucle pour la table de multiplication (boucle for)
                echo "Boucle for()<br>";
                for ($i=1; $i <= $longueurDeLaTable; $i++) { 
                    $resultMultiplication = $i * $nbrDeLaTable;
                    echo "$i x $nbrDeLaTable = $resultMultiplication<br>";
                }


                // boucle pour la table de multiplication (boucle while)
                echo "Boucle while()<br>";
                $j = 1;
                while($j <= 10) {
                    $resultMultiplication = $j * $nbrDeLaTable;
                    echo "$j x $nbrDeLaTable = $resultMultiplication<br>";    
                    $j++;
                }
                ?>            
            
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>