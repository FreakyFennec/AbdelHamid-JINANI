<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&lt;&lt;&gt;&gt; ">
    <link rel="shortcut icon" href="public/img/favicons/favicon-96x96.png">
    <title>Github en CLI</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-responsive.css">
    <link rel="stylesheet" href="public/css/style-menu-dropdown.css">
</head>
<body>
    <div class="container">
        <header>
            <p class="title_site">Formation Développeur Web et Web Mobile</p>
            <nav class="header_navigation"><a href="#" class="links-a">Accueil</a><a href="#" class="links-a">À propos</a><a href="#" class="links-a">Contact</a></nav>
        </header>
        <main>
            <h1 class="titlePage">Les commandes de Github</h1>

            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git config</h2>
            
                <article class="commande">
                    <p class="definition">Pour configurer vos identifiants.</p>
                    <p class="synthaxe">Le username
<pre class="terminal">
    git config -global user.name "nom_utilisateur" &crarr;
</pre>
                    </p>
                    <p class="syntaxe">L'email
<pre class="terminal">
    git config -global user.email "email@fai.com" &crarr;
</pre>
                    </p>
                </article>
            </section>
            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git init</h2>
            
                <article class="commande">
                    <p class="definition">Initialiser un repo.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git init "le_nom_du_repo_git" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Faire un git init bare</p>
                    <p class="synthaxe">
<pre class="terminal">
    git init --bare "nom_du_repo_git" &crarr;
</pre>
                    </p>
                </article>
            </section>
            
            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git clone, git add</h2>
            
                <article class="commande">
                    <p class="definition">Cloner un repot à partir d'une URL.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git clone "url_du_depot_git" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Pour ajouter un fichier en staging. On peut add un ou plusieurs fichiers et des flags comme --patch.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git add "nom_du_ou_des_fichiers" &crarr;
</pre>
                    </p><br>
                    <p class="synthaxe">
<pre class="terminal">
    git add * &crarr;
</pre>
                    </p><br>
                    <p class="synthaxe">
<pre class="terminal">
    git add --patch * &crarr;
</pre>
                    Le flag --patch permet d'ajouter ou non des bouts de codes. Avec des options pour diviser le code en morceaux. Utile pour choisir quels commit vous voulez faire.</p>
                </article>
            </section>
            
            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git commit</h2>
            
                <article class="commande">
                    <p class="definition">C'est un enregistrement des modifications apportées à votre code. Il permet de revenir sur le code en fonction des commits qui ont étés enregistrés.</p>
                    <p class="synthaxe">Çà se fait après un git add
<pre class="terminal">
    git commit -m "message_de_commit" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Pour commit les fichiers ajoutés avec add et commit les fichiers modifiés.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git commit -a &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Pour afficher les fichiers qui ne sont pas staged.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git diff &crarr;
</pre>
                    </p>
                </article>
                <article class="commande">
                    <p class="definition">Afficher les fichiers dans staging et la version présente.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git diff -staged &crarr;
</pre>
                    </p>
                </article>
                <article class="commande">
                    <p class="definition">Voir les différences entre les deux branches.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git diff "branche_a" "branche_b" &crarr;
</pre>
                    </p>
                </article>
            </section>
            
            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git reset</h2>
            
                <article class="commande">
                    <p class="definition">Retirer un fichier de staging mais garder son contenu.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git reset "fichier" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Annuler tous les commits après celui spécifié et garde les modifications localement.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git reset "hash_du_commit" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Supprimer tout l'historique.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git reset -hard "hash_du_commit" &crarr;
</pre>
                    </p>
                </article>
            </section>
            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git status</h2>

                <article class="commande">
                    <p class="definition">Lister tous les fichiers qui doivent être commit et leurs états</p>
                    <p class="synthaxe">
<pre class="terminal">
    untracked &crarr;
</pre>
                    </p><br>
                    <p class="synthaxe">
<pre class="terminal">
    to be committed &crarr;
</pre>
                    </p>
                    </p><br>
                    <p class="synthaxe">
<pre class="terminal">
    git status &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Pour supprimer le fichier du répertoire de travail et stage la suppression.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git rm "fichier" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Lister l'historique des versions de la branche courante.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git log &crarr;
</pre>
                    </p>
                </article>
                <article class="commande">
                    <p class="definition">Lister l'historique des versions et le renommage des fichiers.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git log -follow "nom_du_fichier" &crarr;
</pre>
                    </p>
                </article>
                <article class="commande">
                    <p class="definition">Affiche les métadonnées et les modifications de contenu du commmit.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git show "hash_du_commit" &crarr;
</pre>
                    </p>
                </article>
                <article class="commande">
                    <p class="definition">Donner un tag au commit.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git tag "hash_du_commit" &crarr;
</pre>
                    </p>
                </article>
            </section>

            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git branch</h2>

                <article class="commande">
                    <p class="definition">Lister toutes les branches locales dans le reposit actuel.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git branch &crarr;
</pre>
                    </p>
                    <p class="definition">Créer une nouvelle branche.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git branch "branche" &crarr;
</pre>
                    </p>
                    <p class="definition">Supprimer une branche.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git branch -d "branche" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Passer d'une branche à l'autre.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git checkout "branche" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Créer un nouvelle branche et switcher dessus.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git checkout -b "branche" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Fusionner l'historique de la branche spécifiée dans la branche actuelle.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git merge "branche" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Lier un repo local a un repo remote.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git remote add "nom_du_remote (origin ou autre)" "lien_du_serveur" &crarr;
</pre>
                    </p>
                </article>
            </section>
            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git push</h2>

                <article class="commande">
                    <p class="definition">Pour push les changement sur master.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git push "nom_du_remote" master &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">push les commits au repsit distant sur la branche spécifiée.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git push "remote" "branche" &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">push toutes les branches vers le repo remote.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git push -all "remote" &crarr;
</pre>
                    </p>
                </article>

            </section>
            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git pull</h2>

                <article class="commande">
                    <p class="definition">Chercher et merger les modifs d'une branche du serveur git et l'appliquer à la branche sur laquelle vous vous trouvez.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git pull "branche" &crarr;
</pre>
                    </p>
                </article>
            </section>

            <section class="chapitre chapitre-I">
                <h2 class="titleChap">git stash</h2>

                <article class="commande">
                    <p class="definition">Stocker temporairement les fichiers tracked modifiés.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git stash &crarr;
</pre>
                    </p><br>
                    <p class="synthaxe">Ou bien
<pre class="terminal">
    git stash save &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Restaurer les derniers fichiers stashed.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git stash pop &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Lister tous le stashes.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git stash list &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Eliminer le dernier groupe de modifs stasched.</p>
                    <p class="synthaxe">
<pre class="terminal">
    git stash drop &crarr;
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
</body>
</html>