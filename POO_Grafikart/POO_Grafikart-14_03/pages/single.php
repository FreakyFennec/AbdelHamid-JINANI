
<?php

    $post = \App\App::getDb()->prepare('
        SELECT * 
        FROM articles 
        WHERE id = ?
    ', [$_GET['id']], 'App\Table\Article', true);    // Requête préparée pour éviter les injections sql.

?>
<h3><?= $post->titre; ?></h3>


<p><?= $post->contenu; ?></p>
