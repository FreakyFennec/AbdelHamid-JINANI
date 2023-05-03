<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="public/img/favicons/favicon-96x96.png">
    <title>Form login</title>
    <!-- Style
    <link rel="stylesheet" href="public/css/style_main.css"> -->
    <link rel="stylesheet" href="public/css/style_mobile.css">
</head>
<body>
    <div id="container">
        <?php include_once('../includes/header.php') ?>
        <main>
            <article>
                <h1 id="title_article">Form login</h1>
                
                <form method="post" action="../model/login.php">
                    <fieldset id="fieldsetText">
                                        
                        <label id="inputTextLabel" for="email">E-mail :</label>
                        <input type="email" id="inputText" name="email" required minlength="4" maxlength="100" size="20"></input>
                        
                        <label id="inputTextLabel" for="password">Password :</label>
                        <input type="password" id="inputText" name="password" required minlength="4" maxlength="100" size="20"></input>

                    </fieldset>
                    <button type="submit">Se connecter</button>
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