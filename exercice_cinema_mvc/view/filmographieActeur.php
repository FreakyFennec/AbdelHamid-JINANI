<?php  ob_start();
    $acteur = $requete1->fetch();
?>

<table class="">
    <thead>
        <tr>
            <th>Rôle</th>
            <th>Film</th>
            <th>Date sortie fr</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete2->fetchAll() as $role) { ?>
                <tr>                    
                    <td><?= $role["nom_role"] ?></td>
                    <td><?= $role["titre_film"] ?></td>
                    <td><?= $role["date_sortie_fr"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Filmographie";
    $titre_secondaire = "Filmographie de : " . $acteur["nom_acteur"];
    $contenu = ob_get_clean();
    require "view/template.php";
?>