<?php  ob_start();
// var_dump($requete1);
    $realisateur = $requete1->fetch();
?>

<table class="">
    <thead>
        <tr>
            <th>Film</th>
            <th>Date sortie fr</th>
            <th>Durée</th>
            <th>Genres</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete2->fetchAll() as $film) { ?>
                <tr>                   
                    <td><?= $film["titre_film"] ?></td>
                    <td><?= $film["date_sortie_fr"] ?></td>
                    <td><?= $film["duree_film"] ?></td>
                    <td><?= $film["genres"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Filmographie";
    $titre_secondaire = "Filmographie de : " . $realisateur["nom_realisateur"];
    $contenu = ob_get_clean();
    require "view/template.php";
?>