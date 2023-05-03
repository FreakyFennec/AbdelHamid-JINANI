<!--
    exo_V1_displayListCars_11.php
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
                <h1>exo_V1_displayListCars_11.php</h1>

                <h3>Résultat</h3>

                <?php
                // variables de travail
                $arrayCars = ["Peugeot", "Renault", "BMW", "Mercedes"];

                // calcul 
                $nbrCars = count($arrayCars); // 4

                echo "Il y a $nbrCars voitures dans le tableau:<br>
                    <ul>
                        <li>$arrayCars[0]</li>
                        <li>$arrayCars[1]</li>
                        <li>$arrayCars[2]</li>
                        <li>$arrayCars[3]</li>
                    </ul>";

                /*
                for ($i=0; $i < $nbrCars; $i++) { 
                    echo"$arrayCars[$i]<br>";
                }
                */
                ?>            
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
