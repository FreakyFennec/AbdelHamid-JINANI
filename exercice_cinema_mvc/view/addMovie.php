<?php ob_start(); ?>

<form action="index.php?action=addMovie" method="post" class="addMovie">
    <label for="titre_film">Titre film</label>
    <input name="titre_film" type="text"><br/>

    <label for="date_sortie_fr">Date sortie Fr</label>
    <input name="date_sortie_fr" type="date"><br/>

    <label for="duree_film">Duree</label>
    <input name="duree_film" type="text"><br/>

    <label for="synopsis_film">Synopsis</label>
    <input name="synopsis_film" type="text"><br/>

    <label for="affiche_film">Affiche</label>
    <input name="affiche_film" type="text"><br/>

    <label for="note_film">Note</label>
    <input name="note_film" type="text"><br/>

    <label for="id_realisateur">Réalisateur</label>
    <select name="id_realisateur" id="id_realisateur" type="select">

        <?php
            foreach($requete1->fetchAll() as $realisateur) {
                ?>
                <option value="<?= $realisateur['id_realisateur'] ?>"><?= $realisateur['nom_realisateur'] ?></option>
            <?php } ?>

    </select><br/>

    <label for="id_genre_film">Genre</label>
    <select name="id_genre_film" id="id_genre_film" type="select">

        <?php
            foreach($requete2->fetchAll() as $genre) {
                ?>
                <option value="<?= $genre['id_genre_film'] ?>"><?= $genre['type_genre_film'] ?></option>
            <?php } ?>
        
    </select><br/>

    <input type="submit" name="submit" value="Ajouter">
</form>

<?php
    $titre = "La bdd films";
    $titre_secondaire = "Formulaire ajout de film";
    $contenu = ob_get_clean();
    require "view/template.php";
?>