<?php $title = 'Post'; ?>
<?php $title_site = 'La cuisine mixte'; ?>
<?php $title_page = 'La recette'; ?>

<?php ob_start(); ?>

<p><a href="index.php">Retour à la liste des recettes</a></p>

<h2 class="title_section"></h2>
<article>
    <h3 class="title_article"><?= htmlspecialchars($post->title) ?></h3>
    <em>le <?= $post->frenchCreationDate ?></em>
    <p><?= nl2br(htmlspecialchars($post->content)) ?></p>
</article>

<h3>Commentaires</h3>

<?php
foreach ($comments as $comment) {
?>
<article><p>
    <strong><?= htmlspecialchars($comment->author) ?></strong> le <?= $comment->frenchCreationDate ?> <a href="index.php?action=edit&id=<?= urlencode($comment->identifier) ?>">Modifier</a></p>
    <p><?= nl2br(htmlspecialchars($comment->comment)) ?></p>
</article>
<?php
}
?>

<h3>Votre commentaire</h3>

<article>
    <form action="index.php?action=addComment&id=<?= $post->identifier ?>" method="post">
        <fieldset id="fieldsetText">
                            
            <label id="labelAuthor" for="author">Auteur :</label>
            <input type="text" id="inputAuthor" name="author"></input>
            
            <label id="labelComment" for="comment">Commentaire :</label>
            <textarea type="comment" id="comment" name="comment"></textarea>

        </fieldset>
        <button id="submit" type="submit">Envoyer</button>
    </form>
</article>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>