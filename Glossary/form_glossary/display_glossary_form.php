<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="public/img/favicons/favicon-96x96.png">
    <title>Form Glossary</title>
    <!-- Style -->
    <link rel="stylesheet" href="public/css/style_main.css">
    <link rel="stylesheet" href="public/css/style_mobile.css">
</head>
<body>
    <div id="container">
        <?php include_once('../includes/header.php') ?>
        <main>
            <article>
                <h1 id="title_article">Form Glossary</h1>
                
                <?php
                    // Work variables
                    $abbreviationInput = array("Abréviation", "Signification","Definition");
                    $abbreviationType = 
                    [
                        "Acronyme" => "",
                        "Sigle" => ""
                    ];

                    function displayAbbreviationForm($abbreviationInput, $abbreviationType) {

                        echo '<form method="post" action="controller.php"><fieldset id="fieldsetText"><div>';

                        foreach($abbreviationInput as $abbreviationInput) {

                            echo '
                                <label id="inputTextLabel" for="#">' .$abbreviationInput. '</label>
                                <input type="text" id="inputText" name="#" required minlength="4" maxlength="20" size="20"></input><br>
                            ';
                        }

                        echo '</div></fieldset>';
                        echo '<fieldset id="fieldsetButtonR"><div id="zoneChoiceType"><span>Type of abbreviation</span><br>';
                       
                        foreach($abbreviationType as $key => $value) {
                            echo '
                                <input type="radio" id="' .$key. '" name="type" value="' .$value. '" class="choiceType">
                                <label for="' .$value. '">' .$key. '</label><br>';

                        }
                        echo '</div></fieldset>';
                        echo '<button type="submit">Submit</button></form>';       
                    }
                    displayAbbreviationForm($abbreviationInput, $abbreviationType);
                ?>
            </article>
            <!--<aside>
                <div id="zone_author">
                    <figure id="author">
                        <img src="public/img/ralmanClasse.png" alt="Freaky Fennec" id="img_author">
                        <figcaption>Freaky Fennec</figcaption>
                        <p class="profession">Sand fox</p>
                    </figure>
                    <p id="presentation_author">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatem optio voluptatum reiciendis ea veritatis corrupti ducimus quae, maxime magnam!</p>
                </div>
            </aside>-->
        </main>
        <footer><small>Shapped by "The Stinky Feet Workshop's" © 2022</small></footer>
    </div>
</body>
</html>