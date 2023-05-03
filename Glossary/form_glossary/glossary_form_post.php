<?php
/*// Start session
session_start();

// If user connected
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="public/img/favicons/favicon-96x96.png">
    <title>Form Glossary</title>
    <!-- Style
    <link rel="stylesheet" href="public/css/style_main.css"> -->
    <link rel="stylesheet" href="public/css/style_mobile.css">
</head>
<body>
    <div id="container">
        <?php include_once('../includes/header.php') ?>
        <main>
            <article>
                <h1 id="title_article">Form Glossary</h1>

                <h3>Search if word exist</h3>
                <?php include_once('../form_glossary/search_word.php') ?>

                <h3>Insert word in database</h3>
                <form id="insert_word" method="post" action="controller.php">
                    <fieldset id="fieldsetText">                   
                        <label id="inputTextLabel" for="name">Name :</label>
                        <input type="text" id="inputText" name="name" required minlength="2" maxlength="20" size="20"></input>
                                        
                        <label id="inputTextLabel" for="signification">Signification :</label>
                        <input type="text" id="inputText" name="signification" required minlength="4" maxlength="100" size="20"></input>
                                       
                        <label id="textAreaLabel" for="definition">Definition :</label>
                        <textarea type="text" id="textArea" name="definition" required rows="3" cols="33"></textarea>
                    
                        <label id="typeAreaLabel" for="type">Type :</label>
                        <select name="type" id="type">
                            <option value="Sigle">Sigle</option>
                            <option value="Acronyme">Acronyme</option>
                            <option value="Label">Label</option>
                            <option value="Balise">Balise</option>
                            <option value="Attribut">Attribut</option>
                            <option value="Propriété">Propriété</option>

                        </select>

                        <label id="categoryAreaLabel" for="type">Category :</label>
                        <select name="category" id="category">
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JS">JS</option>
                            <option value="PHP">PHP</option>
                            <option value="SQL">SQL</option>
                            <option value="Security">Security</option>
                            <option value="Regulation">Regulation</option>
                            <option value="null">null</option>
                        </select>
                    </fieldset>
                    <button type="submit">Insert</button>
                </form>

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