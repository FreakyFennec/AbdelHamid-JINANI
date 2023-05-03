<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="public/img/favicons/favicon-96x96.png">
    <title>Form consent</title>
    <!-- Style
    <link rel="stylesheet" href="public/css/style_main.css"> -->
    <link rel="stylesheet" href="public/css/style_mobile.css">
    <link rel="stylesheet" href="public/css/style-form_consent.css">
</head>
<body>
    <div id="container">
        <header>
            <p id="title_header">The nine dev</p>
            <img class="img_header" src="public/img/tag-Lyon.jpg" alt="imgHeader">
        </header>
        <nav>
            <ul class="ul_navigation">
                <li><a href="../index.php" class="home">Home</a></li>
                <li><a href="#" class="blog">Blog</a></li>
                <li><a href="#" class="contact">Contact</a></li>
                <li><a href="#" class="admin">Admin</a></li>
            </ul>
        </nav>
        <main>
            <article>
                <h1 id="title_form">Mmm les bons cookies !</h1>
                                
                <form method="post" action="script_consent.php">       
                    <p class="consentText">Aidez nous à améliorer votre expérience avec nous.Nous ne récoltons que les informations strictement nécessaires et aucune informations personnelles.</p>

                    <button type="submit" id="yesButton" name="yes">Accepter</button>
                    <button type="submit" id="noButton" name="no">Refuser</button>
                </form>
            </article>
        </main>
        <footer><small>Shapped by "The Stinky Feet Workshop's" © 2022</small></footer>
    </div>
</body>
</html>