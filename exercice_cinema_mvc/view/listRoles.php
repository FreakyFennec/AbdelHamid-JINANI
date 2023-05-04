<?php ob_start(); ?>

<button type="submit" name="nom_role" class="addRole" onclick="'location.href=index.php?action=addRole'">Ajouter un rôle</button>

<table class="">
    <thead>
        <tr>
            <th>Rôle</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $role) { ?>
                <tr>
                    <td><?= $role["nom_role"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste des rôles";
    $titre_secondaire = "Liste des rôles";
    $contenu = ob_get_clean();
    require "view/template.php";