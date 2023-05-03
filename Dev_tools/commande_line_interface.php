<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&lt;&lt;&gt;&gt; ">
    <link rel="shortcut icon" href="public/img/favicons/favicon-96x96.png">
    <title>Commande Line Interface</title>
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
            <h1 class="titlePage">Commande Line Interface (CLI)</h1>
            <section class="chapitre">
                <h2 class="title_article">Présentation</h2>
                <article>
                    <p class="definition">La commande line interface existe depuis le début des années 80. Elle vient du MS-DOS, premier système d'exploitation des PC. Elle permet de communiquer avec le système pour le paramétrer ou le réparer. Des commandes peuvent être regroupées dans un fichier (un batch) puis être exécutées automatiquement.</p>
                </article>
            </section>
            <section class="chapitre">
                <h2 class="title_article">Les raisons de l'utiliser</h2>
                <article>
                    <p class="definition">Pour l'utilisateur lambda aucune. Mais si on a un problème avec le disque dur on peut tenter de vérifier son intégrité. En demandant que l'interpréteur de commande s'active au démarrage.</p>
                    <p>Pour les utilisateurs expérimentés l'invite de commande offre plus d'options et cela sans ajout de logiciels externe.</p>
                </article>
            </section>
            <section class="chapitre">
                <h2>Invite de commandes et Windows PowerShell</h2>
                <article>
                    <p class="definition">L'invite de commande cohabite maintenant avec Windows PowerShell, un interpréteur de commande plus puissant. Ce dernier se distingue par une interface moins austère et apporte de nouvelles fonctions (destinées aux entreprises).Il devient un langage de script permettant aux admins et utilisateurs avancés d'automatiser rapidement des tâches qui administrent les OS et processus.</p>
                </article>
            </section>
            <section class="chapitre">
                <h2>Invite de commandes en mode admin</h2>
                <article>
                    <p class="definition">Au démarrage pdour certaines opérations il est nécessaire d'être connecté avec un compte disposant des droits et privilèges admin. Sinon l'accés est refusé sur le disque Windows.</p>
                    <p class="definition">Il faut faire très attention à ne pas ouvrir l'invite de commande en mode admin. Vous pouvez voir en haut à gauche si vous êtes admin ou non.</p>
                </article>
            </section>
            <section class="chapitre">
                <h2>Ouvrir l'invite de commandes Windows</h2>
                <article>
                    <p class="definition">Click droit sur le logo Windows.</p>
                    <img src="public/img/cmd_start.png" alt="Commande démarrer Windows">
                    <p class="definition">Les deux possibilités</p>
                    <img src="public/img/batch_user.png" alt="batch utilisateur">
                    <img src="public/img/batch_admin.png" alt="batch administrateur">
                </article>
            </section>
            <section class="chapitre">
                <h2>L'invite de commandes via cmd.exe</h2>
                <article>
                    <p class="definition">Ouvrez la fenêtre 'Exécuter' en tapant Win + R, ou bien saisir cmd dans la zone de recherche. Puis entrée pour une fenêtre utilisateur, ou ctrl + maj + entrée pour une fenêtre administateur.</p>
                    <p class="definition">Les deux possibilités</p>
                    <img src="public/img/cmd_user.png" alt="cmd utilisateur">
                    <img src="public/img/cmd_admin.png" alt="cmd administrateur">
                </article>
            </section>
            <section class="chapitre">
                <h2>Saisir des commandes</h2>
                <article>
                    <p class="definition">Les commandes sont écrites à la suite du prompt.</p><p class="synthaxe">
<pre class="terminal">
    C:\Users\Utilisateur>|
</pre>              </p>
                    <p class="definition">C: c'est le disque sur lequel on travaille<br>
                        \Users\Utilisateur c'est le dossier Users et son sous dossier Utilisateur.</p>
                        <p class="definition">Il faut surveiller le prompt pour être sûr de travailler sur les bons documents.</p>
                </article>
            </section>
            <section class="chapitre">
                <article>
                    <p class="definition">Pour exécuter la cmd (commande) il faut appuier sur entrée &crarr;.</p>
                </article>
            </section>
            <section class="chapitre">
                <article>
                    <p class="definition">Exemple de cmd : chkdsk pour analyser un disque
<pre class="terminal">
    C:\>chkdsk d: /F &crarr;
</pre>              
                    </p>
                    <p>Le slash / annonce un paramétre qui est définit par une lettre ou un mot en anglais.</p>
                    <p>chkdsk d: /F analyse et répare le disque D grâce au paramétre F. L'ordre est sans importance /F d: fonctionne aussi.</p>
                </article>
            </section>
            <section class="chapitre">
                <article>
                    <p class="definition">Exemple de cmd : taskkill
<pre class="terminal">
    C:\>taskill /IM notepad.exe &crarr;
</pre>              
                    </p>
                    <p>Ferme le programme notepad.exe et demande s'il faut sauvegarder au besoin.</p>
                    <p>taskkill sert à arrêter ou terminer un processus.</p>
                    <p>Dans Windows, /IM est un commutateur ou paramètre, suivi du nom du processus permet de spécifier le processus que vous souhaitez arrêter.</p>
                </article>
            </section>
            <section class="chapitre">
                <article class="commande">
                    <p class="definition">.</p>
                    <p class="synthaxe">
<pre class="terminal">
     &crarr;
</pre>              </p>
                </article>
            <section class="chapitre">
                <article class="commande">
                    <p class="definition">Lister le contenu d'un dossier (dir dans windows).</p>
                    <p class="synthaxe">
<pre class="terminal">
    ls &crarr;
</pre>              </p>
                </article>

                <article class="commande">
                    <p class="definition">
                        Argument pour afficher chaque items sur une ligne et plus d'informations<br>
                        Avec l'argument a (all) affichage des fichiers cachés en plus.
                    </p>
                    <p class="synthaxe">
<pre class="terminal">
    -l &crarr;
</pre>              </p>
                </article>

                <article class="commande">
                    <p class="definition">La commande clear permet de cacher les lignes du terminal vers le haut (sans rien supprimer).</p>
                    <p class="synthaxe">
<pre class="terminal">
    clear &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">La cmd pwd (print working directory) affiche le chemin du dossier courant.</p>
                    <p class="synthaxe">
<pre class="terminal">
    pwd &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">La cmd cd (change directory) sert à se déplacer dans un autre dossier. A combiner avec le nom du dossier souhaité.</p>
                    <p class="synthaxe">
<pre class="terminal">
    cd nomDossier &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">La cmd cd suivie de deux point sert à remonter vers le dossier parent.</p>
                    <p class="synthaxe">
<pre class="terminal">
    cd ..&crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Pour aller vers un dossier contenu dans le dossier parent, ajouter un / plus le nom du dossier.</p>
                    <p class="synthaxe">
<pre class="terminal">
    cd ../dossierSouhaité &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition"></p>
                    <p class="synthaxe">
<pre class="terminal">
    &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition"></p>
                    <p class="synthaxe">
<pre class="terminal">
    &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition"></p>
                    <p class="synthaxe">
<pre class="terminal">
    &crarr;
</pre>
                    </p>
                </article>

                <article class="commande">
                    <p class="definition">Affiche tous les fichiers et dossiers.</p>
                    <p class="synthaxe">
<pre class="terminal">
    dir C:\ -Force &crarr;
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