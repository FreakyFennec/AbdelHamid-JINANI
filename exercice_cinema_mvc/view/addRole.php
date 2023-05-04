<?php ob_start(); ?>

<form class="addRole" method="post" action="index.php?action=addRole">
    <label for="nom_role">Ajouter un role</label>
    <input name="nom_role" type="text">
    <input type="submit" name="submit" value="Ajouter">
</form>

<?php
    $titre = "La bdd films";
    $titre_secondaire = "Formulaire ajout de rôle";
    $contenu = ob_get_clean();
    require "view/template.php";
?>