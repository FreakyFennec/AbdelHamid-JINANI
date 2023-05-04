<?php 
    ob_start();
?>


<table class="">
    <thead>
        <tr>
            <th>Réalisateur</th>
            <th>Titre film</th>
            <th>Date sortie Fr</th>
            <th>Durée</th>
            <th>note</th>
            <th>Synopsis</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete1->fetchAll() as $film) { ?>
                <tr>
                    <td><?= $film["nom_realisateur"] ?></td>
                    <td><?= $film["titre_film"] ?></td>
                    <td><?= $film["date_sortie_fr"] ?></td>
                    <td><?= $film["duree_film"] ?></td>
                    <td><?= $film["note_film"] ?></td>
                    <td><?= $film["synopsis_film"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<h2>Casting</h2>
<!-- fetchAll pour lister le casting du film (acteur + rôle) -->
<table class="">
    <thead>
        <tr>
            <th>Acteurs</th>
            <th>Rôle</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete2->fetchAll() as $acteur) { ?>
                <tr>
                    <td><?= $acteur["nom_acteur"] ?></td>
                    <td><?= $acteur["nom_role"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Détail du film";
    $titre_secondaire = $film["titre_film"];
    $contenu = ob_get_clean();
    require "view/template.php";
?>