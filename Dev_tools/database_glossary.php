<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&lt;&lt;&gt;&gt; ">
    <link rel="shortcut icon" href="public/img/favicons/favicon-96x96.png">
    <title>Database glossary</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-responsive.css">
    <link rel="stylesheet" href="public/css/style-menu-dropdown.css">
</head>
<body>
    <div class="container">
        <header>
            <p class="title_site"></p>
            <nav class="header_navigation"><a href="#" class="links-a">Accueil</a><a href="#" class="links-a">À propos</a><a href="#" class="links-a">Contact</a></nav>
        </header>
        <main>
            <h1 class="title_site"></h1>
            <section>
                <h2 class="title_section"></h2>
                <article>
                    <h3 class="title_article">Base de données</h3>
                    <p>Une base de données est un ensemble structuré d'informations, stocké sur un support informatique, conçu et réalisé pour que sa consultation et sa modification soient aisées, rapides et sûres, même par plusieurs utilisateurs concurrents. Une base de données est constituée de blocs élémentaires de données homogènes, regroupés sous forme d'enregistrements correspondant à des entités de même nature. Ces blocs sont associés par des relations logiques ou géométriques. Il existe plusieurs technologies de bases de données. La plus courante actuellement est celle fondée sur le modèle relationnel où les données sont organisées sous forme de tables dans lesquelles les lignes présentent les différentes occurrences de l'entité et les colonnes les attributs de cette entité</p>
                </article>
                <article>
                    <h3 class="title_article">Modèle entité-relation (ou entité-association)</h3>
                    <p>Un modèle Entité-relation, transcrit de manière graphique les interdépendances entre les données d'un système d'information. Il présente la manière dont sont associées entre elles par des liens les entités du système d'information correspondant aux objets à gérer (une parcelle, un bâtiment, un propriétaire ...) Un modèle Entité-Association est une expression classique d'un modèle conceptuel de données (MCD)
                    Dans ce type de modèle, les entités apparaissent sous forme de rectangles qui contiennent le nom de l'entité et les associations sous forme d'ellipses contiennent souvent un verbe qualifiant la relation.</p>
                </article>
                <article>
                    <h3 class="title_article">Modèle de données</h3>
                    <p>La conception du système d'information d'une organisation nécessite l'élaboration de nombreux modèles : données, traitements, usages, flux d'informations. Les modèles de données sont nécessaires en amont de la création des bases de données. On distingue habituellement trois niveaux de modélisation. 
                    -- Le Modèle Conceptuel de Données (MCD) s'attache aux grandes structures des données et à leurs relations indépendamment des technologies mises en œuvre dans le système informatique. Il se traduit souvent sous la forme d'un Modèle Entité-Association. 
                    -- Le Modèle Logique de Données (MLD) prépare l'implémentation des données au niveau physique, sous forme d'une base de données relationnelle ou, plus rarement maintenant, sous forme de simples fichiers. Le Modèle logique dans une base de données relationnelle transforme les entités en table, détermine pour celles-ci l'identifiant et la clé primaire. L'observation des cardinalités minimum et maximum de chaque association permet de savoir si une clé étrangère doit être ajoutée dans une table existante (cardinalité [0,n]) ou si l'association nécessite la création d'une nouvelle table. 
                    -- Le Modèle Physique de Données (MPD) correspond à la création des tables dans le SGBD ou des fichiers sur le disque dur.</p>
                </article>
                <article>
                    <h3 class="title_article">Table</h3>
                    <p>Une table contient les caractéristiques donc alphanumériques, des entités. Une table est habituellement gérée par un type de programme appelé Système de Gestion de Base de Données (SGBD). Une table est formée de lignes et de colonnes. Chaque ligne correspond à une entité. Les colonnes portent les attributs (les caractéristiques) des entités. Dans les logiciels les colonnes portent souvent le nom de champ. Chaque champ est défini par son nom, son type (numérique, alphanumérique, date...) et sa longueur.</p>
                </article>
                <article>
                    <h3 class="title_article">Colonne (ou champ)</h3>
                    <p>Une colonne d'une table porte aussi le nom de champ. Un champ est défini par le type de l'information qu'il contient : texte, numérique entier, numérique réel, date... et par sa longueur. Il est fondamental de réfléchir au type et à la longueur des champs d'une table dès la conception de la base de données. Un champ texte acceptera n'importe quel caractère alphanumérique, tandis qu'un champ numérique n'acceptera que des nombres entiers ou réels selon l'option choisie. Un champ texte peut ne contenir que des chiffres. Il n'en sera pas numérique pour autant. De la même manière, seul un champ numérique peut voir ses valeurs ajoutées à celles d'un autre champ, à condition que celui-ci soit aussi numérique. La longueur d'un champ est aussi importante. Pour un champ texte, elle correspond au nombre de caractères qu'il sera possible de saisir dans le champ. Pour un champ numérique la longueur correspond au nombre de positions que le nombre pourra accueillir (dizaines, centaines, milliers et le nombre de décimales).</p>
                </article>
                <article>
                    <h3 class="title_article">Ligne (ou enregistrement)</h3>
                    <p>Dans une table d'un SGBD, une ligne correspond à un individu, à l'occurrence d'une entité. On emploie aussi le terme d'enregistrement.</p>
                </article>
                <article>
                    <h3 class="title_article">Cardinalités</h3>
                    <p>Les cardinalités sont, dans une base de données, des valeurs qui permettent d'indiquer combien de fois au minimum et au maximum une entité d'une table peut être liée à une entité d'une autre table. Quand le maximum est un nombre non défini, on utilisera la notation « n » pour indiquer « plusieurs » sans donner de nombre précis.</p>
                </article>
                <article>
                    <h3 class="title_article">Attributs</h3>
                    <p>Il s'agit des caractéristiques des entités. On les nomme aussi propriétés. Elles sont prises en charge dans les tables d'une base de données, gérées par la partie SGBD (système de gestion de la base de données)</p>
                </article>
                <article>
                    <h3 class="title_article">Clé primaire</h3>
                    <p>La clé primaire dans un SGBD est le champ d'une table qui stocke les valeurs d'un attribut identifiant. Les valeurs en sont uniques pour les différentes lignes de la table. La clé primaire sert de base à la construction d'un index permettant de retrouver rapidement l'information.</p>
                </article>
                <article>
                    <h3 class="title_article">Clé étrangère</h3>
                    <p>Une clé étrangère identifie une colonne ou un ensemble de colonnes d'une table comme référençant une colonne ou un ensemble de colonnes d'une autre table</p>
                </article>
                <article>
                    <h3 class="title_article">Jointure</h3>
                    <p>Une jointure permet comme son nom l'indique de joindre deux tables  décrivant des entités communes et partageant un champ commun. L'opération produit une seule table juxtaposant les champs de la table à joindre à ceux de la table d'origine.</p>
                </article>
                <article>
                    <h3 class="title_article">Requête SQL</h3>
                    <p>SQL est un langage informatique normalisé servant à exploiter des bases de données relationnelles. La partie langage de manipulation des données de SQL permet de rechercher, d'ajouter, de modifier ou de supprimer des données dans les bases de données relationnelles grâce à des requêtes d'interrogation de la base de données.</p>
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