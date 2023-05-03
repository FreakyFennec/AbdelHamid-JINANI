<!--
    exo09_V2_display_radio_buttons.php
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
                <h3>exo09_V2_display_radio_buttons.php</h3>
                <?php    
                // variables de travail
                $genders = [
                    "Masculin" => "",
                    "Féminin" => "checked",
                    "Autre" => ""
                ];

                function displayRadioButtons($genders) {

                    echo '<form>';

                    foreach ($genders as $key => $value) { 
                        echo '<input type="radio" id="' . $key . '" name="gender" value="' . $value . '" ' . $value . '>
                        <label for="' . $value . '">' . $key . '</label><br>';
                    }

                    '</form>';
                }
                displayRadioButtons($genders);
                ?>    
            
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>

    