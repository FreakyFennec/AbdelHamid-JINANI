

//<!--
    //exo06_V2_dropdownList.php
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
                echo "<h3>Exercice 06_V2_dropdownList</h3>

                <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>";
                
                // variables de travail
                $elements = array("Monsieur", "Madame", "Mademoiselle");
                //$displayInput($namesInput);

                echo "<form><select name=\"civilities\" id=\"civilities\">";
                        
                function populateDropDownList($elements) {
                    foreach($elements as $elements) {

                        echo "<option value=\"$elements\">$elements</option><br>";
                    }
                }
                populateDropDownList($elements);

                echo "</select></form>";
                ?>
            </section>
        </main>
        <footer>&copy footer 2023</footer>
    </div>
</body>
</html>
    