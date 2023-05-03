<!--
    exo10_V2_form_identities.php
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
                <h3>exo10_V2_form_identities.php</h3>

                <p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
                Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

                <?php    
                // variables de travail
                $usersInput = array("Nom", "Prénom", "E-mail", "Ville", "Sexe");
                $formationType = [
                    "Développeur Logiciel" => "", 
                    "Designer web" => "",
                    "Intégrateur" => "",
                    "Chef de projet" => ""
                ];

                function displayUsersForm($usersInput, $formationType) {

                    echo '<form action=""><fieldset><div>';
                    
                    foreach($usersInput as $usersInput) {
                        
                        echo '
                            <label for="#">'. $usersInput .'</label>
                            <input type="text" id="#" name="#" required minlength="4" maxlength="20" size="20"></input><br>                
                        ';
                    }
                    echo '</div></fieldset>';
                    
                    echo '<fieldset><div>';

                    foreach($formationType as $key => $value) {

                        echo '<input type="radio" id="' . $key . '" name="gender" value="' . $value . '" ' . $value . '>
                            <label for="' . $value . '">' . $key . '</label><br>';
                    }

                    echo '</div></fieldset>';
                    
                    echo '<button type="submit">Envoyer</button></form>';

                }
                displayUsersForm($usersInput, $formationType);
                ?>            
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
   