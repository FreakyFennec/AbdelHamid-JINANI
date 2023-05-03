<?php $title = 'Bicycles'; ?>

<?php $title_site = 'Bicycles'; ?>

<?php ob_start(); ?>

<h2 class="title_section"></h2>

<h3 class="title_article">Les vélos <?= htmlspecialchars($bikeProducer['constr_velos_nom']); ?></h3>

<?php               
$prev_country = null;
foreach ($bikesModels as $bikesModel)
{
?>
<article>            
    <?= htmlspecialchars($bikesModel['mod_nom']); ?><br />
    <a href="#">Voir la page</a>
</article>
<?php
}
?>

<h3>Commentaires</h3>

<form action="index.php?action=addComment&id=<?= $bikes_model['identifier'] ?>" method="post">

    <fieldset id="fieldsetText">
                                        
        <label id="labelAuthor" for="author">Auteur :</label>
        <input type="text" id="inputAuthor" name="author" required minlength="4" maxlength="100" size="20"></input>
        
        <label id="labelComment" for="comment">Commentaire :</label>
        <textarea  id="areaComment"  name="comment"></textarea>

    </fieldset>
    <input type="submit" />

</form>

<?php $content = ob_get_clean(); ?>

<?php require ('layout.php') ?>