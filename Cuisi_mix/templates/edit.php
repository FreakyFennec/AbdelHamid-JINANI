<?php $title = 'Edit comment'; ?>
<?php $title_site = 'La cuisine mixte'; ?>
<?php $title_page = 'Modification'; ?>

<?php ob_start(); ?>

<p><a href="index.php?action=post&id=<?= $comment->post ?>">Retour à la liste des recettes</a></p>

<h2 class="title_section"></h2>
<article>
    <h3 class="title_article"><?= htmlspecialchars($post->title) ?></h3>
    <em>le <?= $post->frenchCreationDate ?></em>
    <p><?= nl2br(htmlspecialchars($post->content)) ?></p>
</article>

<h3>Modifiez votre commentaire</h3>

<article>
    <form action="index.php?action=editComment&id=<?= $comment->identifier ?>" method="post">
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