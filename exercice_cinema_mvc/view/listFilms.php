<?php ob_start(); ?>

<p class="">Il y a <?= $requete->rowCount() ?> films</p>

<section class="tout_les_films">        
    </div>
        <?php
            foreach($requete->fetchAll() as $film) { ?>
                <div class="titreEtAffiche">
                    <div class="zoneAffiche">
                        <a href="index.php?action=detailFilm&id=<?= $film["id_film"] ?>"><img class="poster" src="public/img/<?= $film["affiche_film"] ?>" alt="Affiche : <?= $film["alt_affiche"] ?>" title="<?= $film["titre_film"] ?> (<?= $film["date_sortie_fr"] ?>)"></a>
                    </div>
                </div>
        <?php } ?>              
</section>


<?php
    $titre = "Le navet-phobe";
    $titre_secondaire = "Liste des films";
    $contenu = ob_get_clean();
    require "view/template.php";
?>