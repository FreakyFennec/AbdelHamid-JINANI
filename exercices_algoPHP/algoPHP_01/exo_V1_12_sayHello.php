<!--
    exo_V1_12_sayHello.php
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
                <h1>exo_V1_12_sayHello.php</h1>

                <p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)<br><br>
                Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>

                <h3>Résultat</h3>

                <?php
                // calcul 
                /**/
                function sayHello() {

                    // variables de travail
                    $arrayStagiaires = [
                        "Mickaël" => "FR", 
                        "Virgile" => "ESP",
                        "Marie-Claire" => "ENG"
                    ];
                    
                    // boucle foreach pour afficher le bonjour au stagiaires (ordre de saisie)
                    foreach ($arrayStagiaires as $nickName => $nationality) {
                    if ($nationality == "FR") {
                            $hello = "Salut";
                            echo "$hello  $nickName<br>";
                        } else if ($nationality == "ESP") {
                            $hello = "Hola";
                            echo "$hello  $nickName<br>";
                        } else if ($nationality == "ENG") {
                            $hello = "Hello";
                            echo "$hello  $nickName<br>";
                        }
                    }

                    // trier le tableau associatif   
                    ksort($arrayStagiaires);

                    echo "<br>";    

                    // boucle foreach pour afficher le bonjour au stagiaires (ordre de alphabétique)
                    foreach ($arrayStagiaires as $nickName => $nationality) {
                    if ($nationality == "FR") {
                            $hello = "Salut";
                            echo "$hello  $nickName<br>";
                        } else if ($nationality == "ESP") {
                            $hello = "Hola";
                            echo "$hello  $nickName<br>";
                        } else if ($nationality == "ENG") {
                            $hello = "Hello";
                            echo "$hello  $nickName<br>";
                        }
                    }
                }
                sayHello();
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>