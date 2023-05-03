<!--//
    //exo07_V2_checkBoxs.php
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
                echo "<h3>Exercice 07_V2_CheckBoxs</h3>

                <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
                dans le tableau associatif si la case est cochée ou non.</p>";
                
                // variables de travail
                $elements = [
                    "1" => "",
                    "2" => "checked",
                    "3" => ""
                ];
                    
                function checkboxGenerator($elements) {
                    echo "<form><fieldset><div>";
                    foreach($elements as $key => $value) {

                        echo "<input type=\"checkbox\" id=\"$key\" name=\"choice$key\" $value>
                            <label for=\"choix$key\">Choix $key</label><br>";
                    }
                    echo "</div></fieldset></form>";
                }
                checkboxGenerator($elements);
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>