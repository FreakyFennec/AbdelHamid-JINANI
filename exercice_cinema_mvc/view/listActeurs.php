<?php ob_start(); ?>

<p class="">Il y a <?= $requete->rowCount() ?> acteurs</p>

<button type="submit" name="nom_acteur" class="addActeur" onclick="'location.href=index.php?action=addActeur'">Ajouter un acteur</button>
<table class="">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Date de naissance</th>
            <th>Pays de naissance</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $acteur) {
                ?>
                <tr>
                    <td><a href="index.php?action=rolesActeur&id=<?=$acteur['id_personne']?>"><?= $acteur['nom_acteur'] ?></a></td>
                    <td><?= $acteur["date_naiss_personne"] ?></td>
                    <td><?= $acteur["lieu_naiss_personne"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste des acteurs";
    $titre_secondaire = "Liste des acteurs";
    $contenu = ob_get_clean();
    require "view/template.php";
?>