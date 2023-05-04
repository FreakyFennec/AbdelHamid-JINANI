<?php 
    ob_start();
    $personne = $requete->fetch(); // fetch pacequ'on cherche qu'une ligne.
?>

<h1><?= $personne["nom_personne"]?></h1>

<h2>Filmographie</h2>

<table class="">
    <thead>
        <tr>
            <th>Role</th>
            <th>Film</th>
            <th>Date sortie fr</th>
        </tr>
    </thead>
    <tbody>
        <!-- fetchAll on récupére plusieures lignes -->
        <?php
            foreach($requete->fetchAll() as $role) { ?>
                <tr>
                    <td><?= $role["nom_role"] ?></td>
                    <td><?= $role["titre_film"] ?></td>
                    <td><?= $role["date_sortie_fr"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php

    $titre = "Filmographie acteur";
    $titre_secondaire = "Filmographie acteur";
    $contenu = ob_get_clean();
    require "view/template.php";
?>