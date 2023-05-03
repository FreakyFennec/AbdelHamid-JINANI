<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="&lt;&lt;&gt;&gt; ">
        <link rel="icon" type="image/svg+xml" href="public/img/favicons/favicon-96x96.svg">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/style-responsive.css">
        <link rel="stylesheet" href="public/css/style-menu-dropdown.css">
        <link rel="stylesheet" href="public/css/style-form-comments.css">
    </head>
    <div class="container">
        <header>
            <p class="title_site">La cuisine mixte</p>
            <nav class="header_navigation">
                <a href="index.php" class="links-a">Accueil</a>
                <a href="#" class="links-a">À propos</a>
                <a href="#" class="links-a">Contact</a>
            </nav>
        </header>
        <main>
            <h1 class="title_page"><?= $title_page ?></h1>        
            <section>
                <?= $content ?>
            </section>
        </main>
        <aside>
            <div class="links-aside">
                <ul>
                    <li>
                        <a href="#">Lien1</a>
                        <a href="#">Lien2</a>
                        <a href="#">Lien3</a>
                    </li>
                </ul>
            </div>
        </aside>
        <footer>&copy footer 2023</footer>
    </div>
</html>