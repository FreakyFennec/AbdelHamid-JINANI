<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&lt;&lt;&gt;&gt; ">
    <link rel="shortcut icon" href="public/img/favicons/favicon-96x96.png">
    <title>index</title>
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
            <h1 class="title_site">MySQL en ligne de commandes</h1>
            <section>
                <h2 class="title_section">I Pour commencer</h2>
                <article>
                    <h3 class="title_article">Le serveur</h3>
                    <p>Démarrer votre serveur Apache via votre plateforme de développement (Wamp ou Laragon).</p>
                </article>
                <article>
                    <h3 class="title_article">MySql chargement et connexion</h3>
                    <p>Chercher le fichier mysql.exe (le fichier binaire).</p>
<pre class="terminal">
    C:\laragon\bin\mysql\mysql-8.0.30-winx64\bin
</pre>
                </article>
                <article>
                    <p>Charger MySQL</p>
<pre class="terminal">
    setx PATH "%PATH%;C:\laragon\bin\mysql\mysql-8.0.30-winx64\bin"
</pre>
                </article>
                <article>
                    <p>Se connecter à mysql :</p>
<pre class="terminal">
    mysql -u root -p
</pre>                    
                </article>
                <article>
                    <p>Votre mot de passe :</p>
<pre class="terminal">
    votre mot de passe
</pre>                    
                </article>
            </section>

            <section>
                <h2 class="title_section">II Travail sur la bdd</h2>
                <article>
                    <h3 class="title_article">Travail sur la bdd</h3>
                    <p>Voir toutes les bdd :</p>
<pre class="terminal">
    show database;
</pre>
                </article>
                <article>
                    <p>Créer une bdd :</p>
<pre class="terminal">
CREATE DATABASE name;
</pre>
                </article>
                <article>
                    <p>Utiliser une bdd :</p>
<pre class="terminal">
    USE databasename;
</pre>
                </article>
                <article>
                    <p>Charger une bdd :</p>
<pre class="terminal">
    source chemin_vers_le_fichier.sql
</pre>
                </article>
                <article>
                    <p>Créer une table</p>
<pre class="terminal">
    CREATE TABLE name
    (
        &emsp;id INT PRIMARY KEY NOT NULL,
        &emsp;nom VARCHAR(100),
        &emsp;prenom VARCHAR(100),
        &emsp;email VARCHAR(255),
        &emsp;date_naissance DATE,
        &emsp;pays VARCHAR(255),
        &emsp;ville VARCHAR(255),
        &emsp;code_postal VARCHAR(5),
        &emsp;nombre_achat INT
    );
</pre>
                </article>
                <article>
                    <p>Voir les tables de la bdd :</p>
<pre class="terminal">
    SHOW tables;
</pre>
                </article><article>
                    <p>Voir les colonnes d'une table :</p>
<pre class="terminal">
    SHOW COLUMNS FROM nametable;
</pre>
                </article>
                <article>
                    <p>Charger une bdd :</p>
<pre class="terminal">
    mysql -u root -p namebdd < C:\laragon\www\foodly\course-implementez-BDD-SQL-master\partie_3\foodly.sql;
</pre>
                </article>
                <article>
                    <p>Modifier un objet :</p>
<pre class="terminal">
    UPDATE `utilisateur` SET `email` = 'quentin@gmail.com' WHERE `id` = '1';
</pre>
                </article>
                <article>
                    <p>Supprimer un objet :</p>
                    <p>Pour supprimer tous les utilisateurs il ne faut pas mettre le filtre WHERE</p>
<pre class="terminal">
    DELETE FROM `utilisateur` WHERE `id` = '2';
</pre>
                </article>
                <article>
                    <p>Supprimer une table : (DANGER)</p>
<pre class="terminal">
    DROP TABLE `nomtable`;
</pre>
                </article>
                <article>
                    <p>Supprimer une bdd : (DANGER)</p>
<pre class="terminal">
    DROP DATABASE namebdd;
</pre>
                </article>
                <article>
                    <p>Comparaison sur des chiffres :</p>
<pre class="terminal">
    SELECT * FROM aliment WHERE calories < 90;
</pre>
                </article>
                <article>
                    <p>Comparaison sur du texte :</p>
<pre class="terminal">
    SELECT * FROM utilisateur WHERE email LIKE "%gmail.com";
</pre>
                </article>
                <article>
                    <p> % remplace tout ce qui se trouve : <br>
                                &emsp;avant gmail.com : %gmail.com = nom@gmail.com<br>
                                &emsp;après gmail.com : gmail.com% = gmail.communication<br>
                                &emsp;contenu dans un texte : %gmail.com% = l'adresse name@gmail.com est dans le texte.</p>
                </article><article>
                    <p>Classer les données par id ou par ordre alphabétique ou anti-alphabétique :</p>
<pre class="terminal">
    SELECT * FROM aliment ORDER BY calories ASC; ou DESC;
</pre>
                </article>
            </section>
            <section>
                <h2 class="title_section">III Les fonctions</h2>
                <article>
                    <h3 class="title_article">Pour les nombres</h3>
                    <p>Pour compter :</p>
<pre class="terminal">
    SELECT COUNT(*)
    FROM utilisateur
    WHERE email LIKE "%gmail.com";
</pre>
                </article><article>
                    <p>Pour limiter le comptage à une colonne spécifique :</p>
<pre class="terminal">
    SELECT COUNT(email)
    FROM utilisateur
    WHERE email LIKE "%gmail.com";
</pre>
                </article>
                <article>
                    <p>Comptage limité à une colonne :</p>
<pre class="terminal">
    SELECT COUNT(nom)
    FROM aliment
    WHERE nom LIKE "%pomme%";
</pre>
                </article>
                <article>
                    <p>Comptage de produits qui ont un nom différent :</p>
<pre class="terminal">
    SELECT COUNT(DISTINCT nom)
    FROM aliment
    WHERE nom LIKE "%pomme%";
</pre>
                </article>
                <article>
                    <p>Utiliser des alias :</p>
<pre class="terminal">
    SELECT COUNT(DISTINCT nom) AS "Produits différents contenant le mot pomme"
    FROM aliment
    WHERE nom LIKE "%pomme%";
</pre>
                </article><article>
                    <p>D'autres fonctions :</p>
<pre class="terminal">
    AVG = moyenne de la colonne;
    SUM = somme de la colonne;
    MAX = valeur maximun de la colonne;
    MIN = valeur minimum de la colonne.
</pre>
                </article>
                <article>
                    <p>Trouver le maximun en sucre :</p>
<pre class="terminal">
    SELECT MAX(sucre) AS "Taux de sucre maxi"
    FROM aliment;
</pre>
                </article>
                <article>
                    <p>Trouver la teneur moyenne en calories des aliments > 30 kcal ou plus :</p>
<pre class="terminal">
    SELECT AVG(calories) AS "Calories moyennes des aliments > 30 kcal"
    FROM aliment
    WHERE calories > 30;
</pre>
                </article>
                <article>
                    <p>Arrondir au chiffre entier :</p>
<pre class="terminal">
    SELECT ROUND(AVG(calories)) AS "Calories moyennes des aliments > 30 kcal"
    FROM aliment
    WHERE calories > 30;
</pre>
                </article>
                <article>
                    <p>Arrondir à 2 chiffres après la virgule :</p>
<pre class="terminal">
    SELECT ROUND(AVG(calories), 2) AS "Calories moyennes des aliments > 30 kcal"
    FROM aliment
    WHERE calories > 30;
</pre>
                </article>
                <article>
                    <h3 class="title_article">Pour les textes</h3>
                    <p>Passer le texte en majuscules : </p>
<pre class="terminal">
    SELECT *
    FROM clients
    WHERE UPPER(nom) = 'Doe';
</pre>
                </article>
                <article>
                    <h3 class="title_article">Pour les dates</h3>
                    <p>Afficher la date actuelle :</p>
<pre class="terminal">
    UPDATE produits 
    SET nom='Nouveau nom', prix=20, date_modification=Now() 
    WHERE id=1;
</pre>
                </article>
                <article>
                    <h3 class="title_article">Sauvegarder les requêtes</h3>
                    <p>Pour ne plus avoir à retaper la même requête on peut créer une vue :</p>
<pre class="terminal">
    CREATE VIEW utilisateurs_gmail_vw AS
    (   
        SELECT *
        FROM utilisateur
        WHERE email LIKE "%gmail.com"
    );
</pre>              
                    <p>Le _vw à la fin du nom de l'alias différencie de la vrai table.</p>
                </article>
                <article>
                    <p>Pour utiliser la vue :</p>
<pre class="terminal">
    SELECT * 
    FROM utilisateurs_gmail_vw;
</pre>
                </article>
                <article>
                    <p>Autre exemple de création de vue :</p>
<pre class="terminal">
    CREATE VIEW aliments_nonbio_proteines_desc_vw AS
    (   
        SELECT *
        FROM aliment
        WHERE bio = FALSE
        ORDER BY proteines DESC
    );
</pre>
                </article>
                <article>
                    <p>Pour utiliser la vue :</p>
<pre class="terminal">
    SELECT * 
    FROM aliments_nonbio_proteines_desc_vw;
</pre>
                </article>
            </section>
            <section>
                <h2 class="title_section">IV Implémenter des relations entre les données</h2>
                <article>
                    <h3 class="title_article">Relation one to many</h3>
                    <p>Joindre deux tables :</p>
<pre class="terminal">
     SELECT *
    FROM utilisateur
    JOIN langue
    ON utilisateur.langue_id = langue.id;
</pre>
                </article>
                <article>
                    <p>Joindre deux tables afficher que ceux qui parlent français et ont un gmail.com :</p>
<pre class="terminal">
    SELECT * 
    FROM utilisateur
    JOIN langue
    ON utilisateur.langue_id = langue.id
    WHERE (utilisateur.email LIKE "%gmail%") AND (langue.id = 1);
</pre>
                </article><article>
                    <p>Afficher les noms en majuscules, les prénoms, les emails (gmail) et la langue :</p>
<pre class="terminal">
    SELECT utilisateur.id, UPPER(utilisateur.nom) AS "NOM", utilisateur.prenom, utilisateur.email, langue.nom AS "LANGUE"
    FROM utilisateur
    JOIN langue
    ON utilisateur.langue_id = langue.id
    WHERE (utilisateur.email LIKE "%gmail%") AND (langue.id = 1)
    ORDER BY utilisateur.id DESC;
</pre>
                </article>
                <article>
                    <h3 class="title_article">Relation many to many</h3>
                    <p>La relation many to many c'est une multitude de relation de type one to many<br>
                    Pour des relations many to many il faut des tables de liaison.<br>
                    Par convention, les tables de liaisons prennent le nom  {table1}_{table2}</p>
                </article>
                <article>
                    <p>Exemple requête avec relation many to many :</p>
<pre class="terminal">
    SELECT *
    FROM utilisateur
    JOIN utilisateur_aliment 
        ON (utilisateur.id = utilisateur_aliment.  utilisateur_id)
    JOIN aliment 
        ON (aliment.id = utilisateur_aliment.aliment_id);
</pre>
                </article>
            </section>
            <section>
                <h2 class="title_section">V Modifier la structure d'une table</h2>
                <article>
                    <h3 class="title_article">Modifier un champ</h3>
                    <p>Ajouter un champ vitamines_c :</p>
<pre class="terminal">
    ALTER TABLE aliment ADD vitamines_c FLOAT;
</pre>
                </article>
                <article>
                    <p>Ajouter un champ code_iso :</p>
<pre class="terminal">
    ALTER TABLE langue ADD code_iso VARCHAR(50);
</pre>
                </article>
                <article>
                    <p>Ajouter une valeur en fonction d'une condition.</p>
<pre class="terminal">
    UPDATE langue
    SET code_iso = 'fr-fr'
    WHERE nom = 'français';
</pre>
                </article>
                <article>
                    <p>Autre exemple :</p>
<pre class="terminal">
    UPDATE langue
    SET code_iso = 'en-en'
    WHERE nom = 'anglais';
</pre>
                </article>
                <article>
                    <p>Supprimer un champ ou colonne (DANGER) :</p>
<pre class="terminal">
    ALTER TABLE aliment DROP bio;
</pre>
                </article>
                <article>
                    <p>Supprimer le champ nom (DANGER) :</p>
<pre class="terminal">
    ALTER TABLE utilisateur DROP nom;
</pre>
                </article>
                <article>
                    <p>Modifier un champ existant :</p>
<pre class="terminal">
    ALTER TABLE aliment MODIFY calories FLOAT;
</pre>
                </article>
                <article>
                    <p>Modifier le VARCHAR 500 au lieu de 255 caractères :</p>
<pre class="terminal">
    ALTER TABLE utilisateur MODIFY email VARCHAR(500);
</pre>
                </article>
                <article>
                    <p>Renommer un champ :</p>
<pre class="terminal">
    ALTER TABLE aliment CHANGE sucre sucres FLOAT;
</pre>
                </article>
                <article>
                    <p>Autre exemple :</p>
<pre class="terminal">
    ALTER TABLE langue CHANGE code_iso code_pays VARCHAR(255);
</pre>
                </article>
            </section>
            <section>
                <h2 class="title_section">VI Ajouter une relation one to many</h2>
                <article>
                    <h3 class="title_article">Exemple de relation one to many</h3>
                    <p>Ajouter une table :</p>
<pre class="terminal">
    CREATE TABLE `famille` 
    (
        id int NOT NULL AUTO_INCREMENT,
        famille_produit varchar(100) DEFAULT NULL,
        PRIMARY KEY (`id`)
    );
</pre>
                </article>
                <article>
                    <p>Remplir une table :</p>
<pre class="terminal">
    INSERT INTO famille VALUES 
    (1, 'légumes'),
    (2, 'fruits'),
    (3, 'viandes'),
    (4, 'poissons');
</pre>
                </article>
                <article>
                    <p>Ajouter un champ :</p>
<pre class="terminal">
    ALTER TABLE aliment ADD famille_id INT;
</pre>
                </article>
                <article>
                    <p>Afficher toutes les clés étrangères :</p>
<pre class="terminal">SELECT * 
    FROM INFORMATION_SCHEMA.TABLE_CONSTRAINTS 
    WHERE `table_schema` LIKE 'database_name' AND `constraint_type` = 'FOREIGN KEY';
</pre>
                </article>
                <article>
                    <p>Supprimer une clé étrangère :</p>
<pre class="terminal">
    ALTER TABLE table_name 
    DROP FOREIGN KEY table_name_foreign_key_ibfk_1;
</pre>
                </article>
                <article>
                    <p>Ajouter une clé étrangère :</p>
<pre class="terminal">
    ALTER TABLE aliment 
    ADD FOREIGN KEY (famille_id) REFERENCES famille (id) 
        ON DELETE CASCADE;
</pre>
                </article>
                <article>
                    <p>La commande ON DELETE a plusieures options :<br>
                            &emsp;RESTRICT ou NO ACTION pas de suppression tant qu'il y a un objet référencé dans la table.<br>
                            &emsp;SET NULL suppression mais remplacé par la valeur NULL.<br>
                            &emsp;CASCADE (DANGER) supprime la clé et les objets qui lui sont liés.</p>
                </article>
                <article>
                    <p>Ajouter la relation de l'objet avec sa famille :</p>
<pre class="terminal">
    UPDATE aliment SET famille_id = 1 WHERE nom = 'haricots verts';
</pre>
                </article>
                <article>
                    <p>On vérifie en faisant un SELECT avec un JOIN :</p>
<pre class="terminal">
    SELECT *
    FROM aliment
    JOIN famille 
        ON aliment.famille_id = famille.id
    WHERE aliment.nom = 'haricots verts';
</pre>
                </article>
                <article>
                    <p>Création de la table réduction :</p>
<pre class="terminal">
    CREATE TABLE reduction 
    (
        id int NOT NULL AUTO_INCREMENT,
        valeur VARCHAR (100) NOT NULL
    );
</pre>
                </article>
                <article>
                    <p>Remplir la table :</p>
<pre class="terminal">
    INSERT INTO reduction
    VALUES (1, 5),(2, 10),(3, 15),(4, 20);
</pre>
                </article>
                <article>
                    <p>Ajouter la clé étrangère :</p>
<pre class="terminal">
    ALTER TABLE aliment
    ADD FOREIGN KEY (reduction_id) REFERENCES reduction (id)
    ON DELETE CASCADE;
</pre>
                </article>
                <article>
                    <p>Modifier un champ :</p>
<pre class="terminal">
    UPDATE aliment SET reduction_id = 1 WHERE nom = 'haricots verts';
</pre>
                </article>
                <article>
                    <p>Vérifier le champ modifié :</p>
<pre class="terminal">
    SELECT *
    FROM aliment
    JOIN reduction
        ON aliment.reduction_id = reduction.id
    WHERE nom = 'haricots verts';
</pre>
                </article>
            </section>
            <section>
                <h2 class="title_section">VII Ajouter une relation many to many</h2>
                <article>
                    <h3 class="title_article">Ajouter une table et une insértion d'objet</h3>
                    <p>Ajouter la table lieu :</p>
<pre class="terminal">
    CREATE TABLE lieu 
    (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(100) NOT NULL,
        type VARCHAR(100)
    );
</pre>
                </article>
                <article>
                    <p>Insérer un objet dans la table lieu :</p>
<pre class="terminal">
    INSERT INTO lieu (`nom`, `type`)
    VALUES ('Carrefour City', 'supermarché');
</pre>
                </article>
                <article>
                    <p>Ajouter une table de liaison et insérer un objet lié :</p>
                    <p>Le nom doit avoir la forme table1_table2<br>
                    Ne contient que deux champs table1_id table2_id (références aux id des autres tables)<br>
                    La clé primaire est l'association des deux id (toujours unique).</p>
<pre class="terminal">
    CREATE TABLE aliment_lieu
    (
        aliment_id INT NOT NULL,
        lieu_id INT NOT NULL,
        FOREIGN KEY (aliment_id) REFERENCES aliment (id) 
            ON DELETE RESTRICT ON UPDATE CASCADE,
        FOREIGN KEY (lieu_id) REFERENCES lieu (id) 
            ON DELETE RESTRICT ON UPDATE CASCADE,
        PRIMARY KEY (aliment_id, lieu_id)
    );
</pre>
                </article>
                <article>
                    <p>Insérer un objet dans la table de liaison :</p>
<pre class="terminal">
    INSERT INTO aliment_lieu (`aliment_id`, `lieu_id`)
    VALUES ('11', '1');
</pre>
                </article>
                <article>
                    <h3 class="title_article">Table de liaison = requêtes faciles</h3>
                    <p>Pour cela il faut faire un double JOIN :</p>
<pre class="terminal">
    SELECT *
    FROM aliment
    JOIN aliment_lieu 
        ON aliment.id = aliment_lieu.aliment_id
    JOIN lieu 
        ON lieu.id = aliment_lieu.lieu_id
    WHERE aliment.id = 11;
</pre>
                </article>
                <article>
                    <h3 class="title_article">Ajouter table et laison pour des portables</h3>
                    <p>La table appareil :</p>
<pre class="terminal">
    CREATE TABLE appareil
    (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(100)
    );
</pre>
                </article>
                <article>
                    <p>Insérer des objets</p>
<pre class="terminal">
    INSERT INTO appareil (`nom`)
    VALUES ('androïd'), ('mac');
</pre>
                </article>
                <article>
                    <p>Créer la table de liaison :</p>
<pre class="terminal">
    CREATE TABLE utilisateur_appareil
    (
        utilisateur_id INT NOT NULL,
        appareil_id INT NOT NULL,
        FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) 
            ON DELETE RESTRICT ON UPDATE CASCADE,
        FOREIGN KEY (appareil_id) REFERENCES appareil (id) 
            ON delete RESTRICT ON UPDATE CASCADE,
        PRIMARY KEY (utilisateur_id, appareil_id) 
    );
</pre>
                </article>
                <article>
                    <p>Insérer un objet dans la table de liaison :</p>
<pre class="terminal">
    INSERT INTO utilisateur_appareil (`utilisateur_id`, `appareil_id`)
    VALUES ('1', 2), ('1', '4');
</pre>
                </article>
            </section>
            <section>
                <h2 class="title_section">VIII Çà marche pas ?</h2>
                <article>
                    <h3 class="title_article">Je suis bloqué !</h3>
                    <p>Comment arrêter une commande (ça sert quand on débute).</p>
<pre class="terminal">
    ctrl + c
</pre>
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
        <footer>&copy footer 2023 - <a href="/home/eventRules.html">Règlement du site</a> - <a href="">Mentions légales</a></footer>
    </div>
</body>
</html>