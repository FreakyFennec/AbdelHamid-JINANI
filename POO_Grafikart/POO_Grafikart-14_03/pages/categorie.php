<?php

use App\Table\Article;
use App\Table\Categorie;

$categorie = Categorie::find($_GET['id']);
if ($categorie === false) {
    header("HTTP/1.0 404 Not Found");
    header("Location:index.php?p=404");
}

$articles = Article::lastByCategory($_GET['id']);

$categories = Categorie::all();

?>

<h2><?php $categorie->titre ?></h2>

<section>
    
    <?php foreach(\App\Table\Article::getLast() as $post) : ?>

        <h3><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h3>      <!-- getURL() est définie dans la class Article. Puis simplifié par une fonction magicque (cf. home.php)  -->

        <p><em><?= $post->categorie; ?></em></p>

        <p><?= $post->extrait; ?></p>        <!-- getExtrait() est définie dans la class Article. Puis simplifié par une fonction magicque (cf. home.php)  -->

    <?php endforeach; ?>
    
</section>