<?php $title = 'Homepage'; ?>
<?php $title_site = 'La cuisine mixte'; ?>
<?php $title_page = 'Les recettes'; ?>

<?php ob_start(); ?>
    <?php
    foreach ($posts as $post) {
    ?>
    <article>
        <h3 class="title_article"><?= htmlspecialchars($post->title) ?></h3>
        <em><?= 'Le : ' . $post->frenchCreationDate . ' par : ' . nl2br(htmlspecialchars($post->author)) ?></em>
        <p><?= nl2br(htmlspecialchars($post->content)) ?></p>
        <em><a href="index.php?action=post&id=<?= urlencode($post->identifier) ?>">Commentaires</a></em>
    </article>
    <?php
    }
    ?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>