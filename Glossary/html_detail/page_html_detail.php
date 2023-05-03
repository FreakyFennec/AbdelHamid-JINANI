
<!DOCTYPE html> {# !DOCTYPE indique quel mode de rendu le navigateur doit suivre. #}

<html lang="fr"> {# L'attribut lang avec la valeur fr dit quelle langue est utilisée.
                    Importante pour les moteurs de recherche.
                    Importante aussi pour pour les utilisateurs qui utilisent des outils d'accessibilité #}

<head> {# les éléments contenus dans cette balise ne sont pas affichés, 
            mais sont utilisés par le navigateur pour  afficher la page correctement et pour aider les moteurs de recherche à indexer la page. #}
            
    <meta charset="utf-8">{# Les méta-données sont des informations supplémentaires sur la page, 
                            mais qui sont utiles pour les moteurs de recherche, les réseaux sociaux et les navigateurs web. #}

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&lt;&lt;&gt;&gt; La page html décortiquée.">
    
    <link rel="shortcut icon" href="favicon-96x96.png">{# Balise qui permet de lier la page à des fichiers externes tels que des fichiers CSS, des fichiers JavaScript, des icônes de favicon, etc. #}
    
    <title>index</title>{#  Il est important de choisir un titre descriptif et informatif pour chaque page de votre site web, car cela peut aider les utilisateurs à comprendre rapidement le contenu de la page et peut également améliorer votre référencement sur les moteurs de recherche. #}

    <link rel="stylesheet" href="style.css">
</head>

{# Tous les éléments qui sont affichés sur la page web doivent être inclus dans la balise body. #}
<body>
    {# La balise div n'a pas de signification spécifique en soi, elle est simplement utilisée pour diviser le contenu d'une page en sections et pour appliquer des styles CSS ou des scripts JavaScript à ces sections. #}
    <div class="container">

        {#  Balise qui est utilisée pour créer l'en-tête d'une page web ou d'une section de contenu. Elle est souvent utilisée pour afficher le logo et le titre d'un site web, ainsi que les liens de navigation et d'autres informations importantes. #}
        <header>
            
            <p class="title_site"></p>
            <nav class="header_navigation">
                <a href="#" class="links-a">Accueil</a>
                <a href="#" class="links-a">À propos</a>
                <a href="#" class="links-a">Contact</a>
            </nav>
        </header>
        <main>
            <h1 class="title_site"></h1>
            <section>
                <h2 class="title_section"></h2>
                <article>
                    <h3 class="title_article"></h3>
                    <p></p>
                </article>
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