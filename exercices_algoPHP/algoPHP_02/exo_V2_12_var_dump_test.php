<!--
    exo_V2_12_var_dump_test.php
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
                <h3>exo_V2_12_var_dump_test.php</h3>

                <p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br><br>
                    Soit le tableau suivant :<br>
                    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br><br>
                    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

                <?php    
                // variables de travail
                $arrayData = array(true,"texte",10,25.369,array("valeur1","valeur2"));

                // calculs
                function displayData($arrayData) {

                    foreach($arrayData as $arrayData) {

                        $dataToDisplay = var_dump($arrayData);

                        echo $dataToDisplay."<br>";
                    }

                }
                displayData($arrayData);
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
