<?php ob_start(); ?>

<form class="addGenre" method="post" action="index.php?action=insertGenre">
    <label for="nom_genre">Ajouter un genre</label>
    <input name="nom_genre" type="text">
    <input type="submit" value="Ajouter">
</form>

<?php
    $titre = "La bdd films";
    $titre_secondaire = "Formulaire ajout de genres";
    $contenu = ob_get_clean();
    require "view/template.php";
?>