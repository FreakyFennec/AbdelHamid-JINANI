<main>
    <h2>Home page</h2>

    <section>
        <?php foreach(\App\Table\Article::getLast() as $post) : ?>

            <h3><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h3>      <!-- getURL() est définie dans la class Article. Puis simplifié par une fonction magicque (cf. home.php)  -->

            <p><em><?= $post->categorie; ?></em></p>

            <p><?= $post->extrait; ?></p>        <!-- getExtrait() est définie dans la class Article. Puis simplifié par une fonction magicque (cf. home.php)  -->

        <?php endforeach; ?>
    </section>
</main>

<aside>
    <ul>    
        <?php foreach(\App\Table\Categorie::all() as $categorie) : ?>
            <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
        <?php endforeach ?>
    </ul>
</aside>

