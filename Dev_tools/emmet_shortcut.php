<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="&lt;&lt;&gt;&gt; ">
        <link rel="icon" href="public/img/favicons/favicon-96x96.svg" type="image/svg+xml">
        <title>Emmet shortcut</title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/style-responsive.css">
        <link rel="stylesheet" href="public/css/style-menu-dropdown.css">
    </head>
    <div class="container">
        <header>
            <p class="title_site">Formation Développeur Web et Web Mobile</p>
            <nav class="header_navigation">
                <a href="#">Lien1</a>
                <a href="#">Lien2</a>
                <a href="#">Lien3</a>
            </nav>
        </header>
        <main>
            <h1 class="title_site">Les raccourcis Emmet</h1>
            <section>
                <h2 class="title_section"></h2>
                <article>
                    <h3 class="title_article"></h3>
                    <p>Avec quelques lignes de codes en fonction du langage et hop votre projet va avancer à une vitesse...</p>
                </article>
                <article class="commande">
                    <p class="synthaxe">Un exemple d'une page en HTML complete combiné avec du snippet.
<pre class="terminal">
"htmlBase": {
		"prefix": "htmlBase",
		"body": [
		  "<!DOCTYPE html>",
		  "<html lang=\"fr\">",
		  "    head>meta[charset=utf-8]+meta[http-equiv=\"X-UA-Compatible\" 
          content=\"IE=edge\"]+meta[name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"]
          +meta[name=\"description\" content=\"&lt;&lt;&gt;&gt; \"]+link[rel=\"icon\" 
          type=\"image/svg+xml\" href=\"public/img/favicons/favicon-96x96.svg\"]+title{index}
          +link[rel=\"stylesheet\" href=\"public/css/style.css\"]+link[rel=\"stylesheet\"
           href=\"public/css/style-responsive.css\"]+link[rel=\"stylesheet\" 
           href=\"public/css/style-menu-dropdown.css\"]^^div.container>header>
           p.title_site+nav[class=\"header_navigation\"]>{<a href=\"#\">Lien$</a>}*3
           ^^main>h1.title_site+section>h2.title_section+article>h3.title_article+p
           ^^^aside>div.links-aside>ul>li>{<a href=\"#\">Lien$</a>}*3^^^^
           footer{&copy footer 2023}$1",
		  "</html>"
		],
		"description": "htmlBase"
	}
</pre>
                    </p>
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
</html>