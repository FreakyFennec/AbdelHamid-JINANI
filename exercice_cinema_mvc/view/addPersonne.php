<?php ob_start(); ?>

<form action="index.php?action=addPersonne" method="post" class="addPersonne">
    <label for="nom_personne">Nom</label>
    <input name="nom_personne" type="text"><br/>

    <label for="prenom_personne">Prénom</label>
    <input name="prenom_personne" type="text"><br/>

    <label for="">Date naissance</label>
    <input name="date_naiss_personne" type="date"><br/>

    <label for="">Lieu naissance</label>
    <input name="lieu_naiss_personne" type="text"><br/>

    <label for="genre_personne">Genre</label><br/>
    <input type="radio" name="genre_personne" value="H" id="H">
    <label for="genre_personne">Homme</label>
    <input type="radio" name="genre_personne" value="F" id="F">
    <label for="genre_personne">Femme</label>
    <input type="radio" name="genre_personne" value="Autre" id="Autre">
    <label for="genre_personne">Autre</label><br/>


    <label for="profession">Profession</label><br/>
    <input type="radio" name="type" value="acteur"  id="acteur">
    <label for="acteur">Acteur</label>
    <input type="radio" name="type" value="realisateur" id="realisateur">
    <label for="realisateur">Réalisateur</label><br/>

    <input type="submit" name="submit" value="Ajouter">
</form>

<?php
    $titre = "La bdd films";
    $titre_secondaire = "Formulaire ajout de personnes";
    $contenu = ob_get_clean();
    require "view/template.php";
?>