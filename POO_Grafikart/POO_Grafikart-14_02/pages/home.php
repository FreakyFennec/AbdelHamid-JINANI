<h1>Home page</h1>

<ul>
    <?php foreach(\App\Table\Article::getLast() as $post): ?>

        <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>      <!-- getURL() est définie dans la class Article. Puis simplifié par une fonction magicque (cf. home.php)  -->

        <p><?= $post->extrait; ?></p>        <!-- getExtrait() est définie dans la class Article. Puis simplifié par une fonction magicque (cf. home.php)  -->


    <?php endforeach; ?>
</ul>

<p></p>