<!--//
    //exo05_V2_form_identitiesInputs.php
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

                echo "<h3>Exercice 05_V2_form_identitiesInputs</h3>

                <p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.</p>";
                
                // variables de travail
                $namesInput = array("Nom", "Prénom", "Ville");

                        
                function identitiesInputs($namesInput) {
                
                    echo '<form>';  

                    foreach($namesInput as $namesInput) {

                        echo '
                            <label for="#">'.$namesInput.'</label><br>
                            <input type="text\" id="#" name="#" required minlength="4" maxlength="18" size="10"></input><br>
                            ';
                    }
                    echo '</form>';
                }
                identitiesInputs($namesInput);
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>