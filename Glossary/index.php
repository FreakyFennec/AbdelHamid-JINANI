<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image/x-icon" sizes="96x96" href="public/img/favicons/favicon-96x96.png">
    <title>index</title>
    <!-- Style -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-menu-dropdown.css">
    <link rel="stylesheet" href="public/css/style-responsive.css">
    <link rel="stylesheet" href="public/css/style-form_consent.css">
</head>
<body>
    <div id="container">
        <?php include_once('includes/header.php') ?>
        <main>
            <div id="myPopup" style="display:none;">
            <form method="post" action="script_consent.php">       
                    <p class="consentText">Aidez nous à améliorer votre expérience avec nous. Nous ne récoltons que les informations strictement nécessaires et aucune informations personnelles.</p>

                    <button type="submit" id="yesButton" name="yes">Accepter</button>
                    <button type="submit" id="noButton" name="no">Refuser</button>
                </form>
                <button onclick="closePopup()">Fermer</button>
            </div>

            <article>
                <h1 id="title_article">Glossaire du développeur</h1>
                <p id="presentation">Entré en formation de Dév. web et mobile chez Elan, j'apprends qu'un développeur se doit de connaître toutes les abréviations de son métier. <br>
                Pour m'aider dans cette tâche Herculéenne j'ai commencé une page pour les noter au fur et à mesure.<br><br>
                Et si cela pouvait servir à quelqu'un d'autre j'en serais heureux, bien que la toile regorge de pages bien plus abouties que ne le sera jamais la mienne.</p><br>
                
                <?php include_once('includes/dropdown_menu.php') ?>
            </article>
        </main>
        <aside>  
            <figure id="author">
                <img src="public/img/ralmanClasse.png" alt="Freaky Fennec" id="img_author">
            </figure>
            <div id="zone_presentation">
                <figcaption>Freaky Fennec</figcaption>
                <p class="profession">Sand fox</p>
                <p id="presentation_author">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatem optio voluptatum reiciendis ea veritatis corrupti ducimus quae, maxime magnam!</p>
            </div> 
        </aside><!-- /.aside -->
        <footer><small>Shapped by "The Stinky Feet Workshop's" © 2022</small></footer>
    </div>
    <script src="public/js/popup.js"></script>
</body>
</html>