<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&lt;&lt;&gt;&gt; ">
    <link rel="shortcut icon" href="public/img/favicons/favicon-96x96.png">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-responsive.css">
    <link rel="stylesheet" href="public/css/style-menu-dropdown.css">
    <link rel="stylesheet" href="public/css/style-form_login.css">
</head>
<body>
    <div class="container">
        <header>
            <p class="title_site"><?= $title_site; ?></p>
            <nav class="header_navigation"><a href="#" class="links-a">Accueil</a><a href="#" class="links-a">À propos</a><a href="#" class="links-a">Contact</a></nav>
        </header>
        <main>
            <h1 class="title_site"></h1>
            <section>
                <?= $content; ?>
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
</body>
</html>