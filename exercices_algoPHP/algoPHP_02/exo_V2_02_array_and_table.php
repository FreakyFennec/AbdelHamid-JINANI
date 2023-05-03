<!--
    //exo02_V2.php
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
                echo "<h3>Exercice 02_V2</h3>

                <p>Soit le tableau suivant : \$capitales= array (\"France\"=>\"Paris\",\"Allemagne\"=>\"Berlin\",\"USA\"=>\"Washington\",\"Italie\"=>\"Rome\");<br>
                Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML(\$capitales);</p>

                <h4>Résultat</h4>";
                
                // variables de travail
                $capitals = [
                    "France" => "Paris",
                    "Allemagne" => "Berlin",
                    "USA" => "Washington",
                    "Italie" => "Rome"
                ];

                ksort($capitals);
                echo "<table border = '1'>
                        <tr>
                            <th>Country</th>          
                            <th>Capital</th>
                        </tr>";

                function displayTableHtml($capitals) {
                    foreach($capitals as $country => $capital) {
                    $country = mb_strtoupper($country);
                        echo "<tr><td>$country</td>
                                <td>$capital</td></tr>";
                    }
                }
                displayTableHtml($capitals);
                echo "</table>";
                ?>            
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
    