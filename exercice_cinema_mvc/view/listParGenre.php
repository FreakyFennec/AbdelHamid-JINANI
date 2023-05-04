<?php ob_start(); ?>

<table class="">
    <thead>
        <tr>
            <th>Titre film</th>
            <th>Date sortie Fr</th>
            <th>Genre film</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $listParGenre) {
                ?>
                <tr>
                    <td><?= $listParGenre['titre_film'] ?></td>
                    <td><?= $listParGenre['date_sortie_fr'] ?></td>
                    <td><?= $listParGenre['id_genre_film'] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste films par genre";
    $titre_secondaire = "Liste films par genre";
    $contenu = ob_get_clean();
    require "view/template.php";