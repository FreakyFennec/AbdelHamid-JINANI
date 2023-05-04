<?php ob_start(); ?>

<p class="">Il y a <?= $requete->rowCount() ?> acteurs</p>

<table class="">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Né le</th>
            <th>Pays</th>
            <th>Voir</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $realisateur) { ?>
                <tr>
                    <td><?= $realisateur["prenom_personne"] ?></td>
                    <td><?= $realisateur["nom_personne"] ?></td>
                    <td><?= $realisateur["date_naiss_personne"] ?></td>
                    <td><?= $realisateur["lieu_naiss_personne"] ?></td>
                    <td><a href="index.php?action=filmographieRealisateur&id=<?= $realisateur["id_realisateur"] ?>">Voir détail</a></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste des réalisateurs";
    $titre_secondaire = "Liste des réalisateurs";
    $contenu = ob_get_clean();
    require "view/template.php";
?>