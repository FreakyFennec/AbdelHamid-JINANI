
<?php ob_start(); ?>

<form class="addCasting" method="post" action="index.php?action=addCasting">
    <label for="id_film">Film</label>
    <select name="id_film" id="id_film" type="select">

        <?php
            foreach($requete1->fetchAll() as $film) {
                ?>
                <option value="<?= $film['id_film'] ?>"><?= $film['titre_film'] ?></option>
            <?php } ?>

    </select><br/>

    <label for="id_film">Acteur</label>
    <select name="id_acteur" id="id_acteur" type="select">

        <?php
            foreach($requete2->fetchAll() as $acteur) {
                ?>
                <option value="<?= $acteur['id_acteur'] ?>"><?= $acteur['nom_acteur'] ?></option>
            <?php } ?>

    </select><br/>

    <label for="id_film">Role</label>
    <select name="id_role" id="id_role" type="select">

        <?php
            foreach($requete3->fetchAll() as $role) {
                ?>
                <option value="<?= $role['id_role'] ?>"><?= $role['nom_role'] ?></option>
            <?php } ?>

    </select><br/>
    <input type="submit" name="submit" value="Ajouter">
</form>

<?php
    $titre = "La bdd films";
    $titre_secondaire = "Formulaire ajout de casting";
    $contenu = ob_get_clean();
    require "view/template.php";
?>